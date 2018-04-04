<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SocioeconomicRegister;

class SocioeconomicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $householder = $request->householder_id;
        $insert = SocioeconomicRegister::create($data);
        if ( $insert ) {
            return redirect()->route('familia.edit',$householder);
        }
        return redirect()->back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $socioeconomicregister = SocioeconomicRegister::find($id);
        $insert = $socioeconomicregister->update($data);
        if ( $insert ) {
            return redirect()->route('familia.edit',$socioeconomicregister->householder_id);
        }
        return redirect()->back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function add($id)
    {
        $socioeconomic = SocioeconomicRegister::where('householder_id',$id)->first();
        $householder = $id;
        if(is_null($socioeconomic)){
            $mode = 'create';
            return view('socioeconomic.create', compact('mode','householder'));
        }else{
            $mode = 'edit';
            return view('socioeconomic.create', compact('mode','householder','socioeconomic'));
        }
        
    }
}
