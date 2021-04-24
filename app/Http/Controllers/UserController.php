<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Yajra\Datatables\Datatables;

class UserController extends Controller
{
    public function __construct()
    {
        $this->data['currentMenu'] = 'admin';
        $this->data['currentSubMenu'] = 'user';
        $this->middleware(['role:admin']);
    }
    public function index(Request $request)
    {
        $users = User::latest()->get();

        if ($request->ajax()) {
            return Datatables::of($users)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '';
                    if (!$row->hasRole('admin')) {
                        $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-placement="top" title="Edit"  class="btn btn-sm btn-outline-primary editUser m-1">
                           <i class="fas fa-pencil-alt"></i></a>';

                        $btn = $btn . ' <a href="javascript:void(0)" data-id="' . $row->id . '" data-toggle="tooltip" data-placement="top" title="Delete"  class="btn btn-sm btn-outline-danger m-1 deleteUser"><i class="fa fa-trash" aria-hidden="true"></i></a>';
                    }
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('users.index', compact('users'), $this->data);
    }

    public function store(Request $request)
    {
        if (!empty($request->User_id)) {
            $validatorPassword = '';
            $password = auth()->user()->password;
        } else {
            $validatorPassword = 'required|confirmed|nullable|string|min:8';
            $password = Hash::make($request->password);
        }
        $validator = Validator::make($request->all(), [
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|max:255|email|unique:users,id,' . auth()->user()->id,
            'password'  => $validatorPassword,
            'id_number' => 'required|numeric',
            'phone'     => 'required',
            'birth'     => 'required',
            'address'   => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

        $user = User::updateOrCreate(
            ['id' => $request->User_id],
            [
                'name'          => $request->name,
                'email'         => $request->email,
                'password'      => $password
            ]
        );

        if (empty($request->User_id)) {
            $user->assignRole('client');
        }

        Member::updateOrCreate(
            ['user_id' => $request->User_id],
            [
                'id_number'     => $request->id_number,
                'phone'         => $request->phone,
                'gender'        => $request->gender,
                'birth'         => $request->birth,
                'address'       => $request->address,
                'user_id'       => $user->id
            ]
        );

        return response()->json(
            [
                'success'   => 'User saved successfully.',
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
        $user = User::with('member')->whereHas('member', function (Builder $query) use ($id) {
            $query->where('user_id', $id);
        })->firstOrFail();
        return response()->json($user);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();

        return response()->json(['success' => 'User deleted successfully.']);
    }
}
