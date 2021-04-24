<?php

namespace App\Http\Controllers;

use App\Models\Frontend;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function __construct()
    {
        $this->data['currentMenu'] = 'admin';
        $this->data['currentSubMenu'] = 'frontend';
        $this->middleware(['role:admin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['frontend'] = Frontend::first();
        return view('frontends.index', $this->data);
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
     * @param  \App\Models\Frontend  $frontend
     * @return \Illuminate\Http\Response
     */
    public function show(Frontend $frontend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Frontend  $frontend
     * @return \Illuminate\Http\Response
     */
    public function edit(Frontend $frontend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Frontend  $frontend
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Frontend $frontend)
    {
        $request->validate([
            'hero_title'            => 'required|string|max:50',
            'hero_description'      => 'required|string',
            'hero_image'            => 'image|mimes:jpeg,png,jpg,svg|max:1024',
            'reward_motcash'        => 'required|numeric',
            'reward_mobcash'        => 'required|numeric',
            'reward_bigmocash'      => 'required|numeric',
            'reward_rumahcash'      => 'required|numeric',
            'peluang_title'         => 'required|string|max:50',
            'peluang_description'   => 'required|string',
            'peluang_image'         => 'image|mimes:jpeg,png,jpg,svg|max:1024',
            'penghasilan_title'     => 'required|string|max:50',
            'penghasilan_image'     => 'image|mimes:jpeg,png,jpg,svg|max:1024',
        ]);            

        $frontend->hero_title           = $request['hero_title'];
        $frontend->hero_description     = $request['hero_description'];
        $frontend->reward_motcash       = $request['reward_motcash'];
        $frontend->reward_mobcash       = $request['reward_mobcash'];
        $frontend->reward_bigmocash     = $request['reward_bigmocash'];
        $frontend->reward_rumahcash     = $request['reward_rumahcash'];
        $frontend->peluang_title        = $request['peluang_title'];
        $frontend->peluang_description  = $request['peluang_description'];
        $frontend->penghasilan_title    = $request['penghasilan_title'];


        if ($heroFileImage=$request->file('hero_image')) {
            $heroDestinationPath = 'public/image/'; // upload path
            if ($frontend->hero_image != '') {
                unlink($heroDestinationPath.$frontend->hero_image);
            }
            $heroExtImage = md5(1)  . "." . $heroFileImage->getClientOriginalExtension();
            $heroFileImage->move($heroDestinationPath, $heroExtImage);
            $frontend->hero_image = $heroExtImage;
       
        } 
        if ($peluangFileImage=$request->file('peluang_image')) {
            $peluangDestinationPath = 'public/image/'; // upload path
            if ($frontend->peluang_image != '') {
                unlink($peluangDestinationPath.$frontend->peluang_image);
            }
            $peluangExtImage = date('ymdhis') . "." . $peluangFileImage->getClientOriginalExtension();
            $peluangFileImage->move($peluangDestinationPath, $peluangExtImage);
            $frontend->peluang_image = $peluangExtImage;
       }
        if ($penghasilanFileImage=$request->file('penghasilan_image')) {
            $penghasilanDestinationPath = 'public/image/'; // upload path
            if ($frontend->penghasilan_image != '') {
                unlink($penghasilanDestinationPath.$frontend->penghasilan_image);
            }
            $penghasilanExtImage = sha1(1)  . "." . $penghasilanFileImage->getClientOriginalExtension();
            $penghasilanFileImage->move($penghasilanDestinationPath, $penghasilanExtImage);
            $frontend->penghasilan_image = $penghasilanExtImage;
       }

        $frontend->save();

        return redirect()->route('frontends.index')->with('success', 'Frontend has been updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Frontend  $frontend
     * @return \Illuminate\Http\Response
     */
    public function destroy(Frontend $frontend)
    {
        //
    }
}
