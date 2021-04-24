<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Member;
use App\Models\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
        $this->data['member'] = '';
        $this->data['frontend'] = Frontend::first();
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function index()
     {
        return view('frontend.home', $this->data);
    }
    
    public function show($id_member)
    {
        $this->data['member'] = Member::where('id_member', $id_member)->first();
        if ($this->data['member']) {
            return view('frontend.home', $this->data);
        }else{
            return abort(404);
        }
    }
}
