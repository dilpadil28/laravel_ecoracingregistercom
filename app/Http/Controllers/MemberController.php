<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Yajra\Datatables\Datatables;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->data['currentMenu'] = 'admin';
        $this->data['currentSubMenu'] = 'member';
        $this->middleware(['role:admin']);
    }
    public function index(Request $request)
    {
        $members = Member::latest()->get();

        if ($request->ajax()) {
            return Datatables::of($members)
                ->addIndexColumn()
                ->addColumn('fullname', function ($row)
                {
                    return $row->first_name .' '. $row->last_name;
                }
                )
                ->addColumn('action', function ($row) {
                    $btn = '';
                        $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-placement="top" title="Edit"  class="btn btn-sm btn-outline-primary editMember m-1">
                           <i class="fas fa-pencil-alt"></i></a>';

                        $btn = $btn . ' <a href="javascript:void(0)" data-id="' . $row->id . '" data-toggle="tooltip" data-placement="top" title="Delete"  class="btn btn-sm btn-outline-danger m-1 deleteMember"><i class="fa fa-trash" aria-hidden="true"></i></a>';
                    return $btn;
                })
                ->addColumn('status', function ($row)
                {
                    return $row->status == 1 ? 'Aktif' : 'Non Aktif';
                }
                )
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('members.index', compact('members'), $this->data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name'    => 'required|string|max:255',
            'last_name'     => 'required|string|max:255',
            'gender'        => 'required|string|max:255',
            'birth'         => 'required|string|max:255',
            'address'       => 'required',
            'phone'         => 'required',
            'photo'         => 'image|mimes:jpeg,png,jpg,svg|max:1024',
            'link_whatsapp' => 'required|url',
            'id_member'     => 'required|string|max:255',
            'type_paket'    => 'required',
            'status'        => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

        if ($memeberFileImage=$request->file('photo')) {
            $member = Member::find($request->Member_id);
            $memeberDestinationPath = 'public/image/photo/'; // upload path
            if ($member['photo'] != '') {
                unlink($memeberDestinationPath.$member['photo']);
            }
            $memeberExtImage = md5(1)  . "." . $memeberFileImage->getClientOriginalExtension();
            $memeberFileImage->move($memeberDestinationPath, $memeberExtImage);       
        }

        Member::updateOrCreate(
            ['id' => $request->Member_id],
            [
                'first_name'        => $request->first_name,
                'last_name'         => $request->last_name,
                'gender'            => $request->gender,
                'birth'             => $request->birth,
                'address'           => $request->address,
                'phone'             => $request->phone,
                'link_whatsapp'     => $request->link_whatsapp,
                'id_member'         => $request->id_member,
                'type_paket'        => $request->type_paket,
                'photo'             => $memeberExtImage ? $memeberExtImage : '',
                'status'            => $request->status,
                'user_id'           => auth()->user()->id
            ]
        );

        return response()->json(
            [
                'success'   => 'Member saved successfully.',
            ]
        );
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = Member::find($id);
        return response()->json($member);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Member::find($id)->delete();

        return response()->json(['success' => 'Member deleted successfully.']);
    }
}
