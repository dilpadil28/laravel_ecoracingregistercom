<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->data['currentMenu'] = 'profile';
        $this->data['currentSubMenu'] = '';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['profile'] = Member::where('user_id',auth()->user()->id)->first();
        return view('profiles.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $profiles
     * @return \Illuminate\Http\Response
     */
    public function show(Member $profiles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $profiles
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $profiles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $profiles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $profiles)
    {
        $user = Auth::user();
        $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'sometimes|confirmed|nullable|string|min:8'
        ]);

        $user->name= $request['name'];

        if($request->password){
            $user->password = Hash::make($request['password']);
        }
        $user->save();

        return redirect()->route('profiles.index')->with('success', 'Member has been updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $profiles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $profiles)
    {
        //
    }
}
