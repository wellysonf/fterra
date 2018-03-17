<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Householder;
use Yajra\Datatables\Datatables;

class HouseholderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $householders = Householder::orderBy('nome')->get();
        return view('householder.index', compact('householders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mode = 'create';
        return view('householder.create', compact('mode'));
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
        $insert = Householder::create($data);
        if ( $insert ) {
            return redirect()->route('familia.index');
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
        $householder = Householder::find($id);
        $mode = 'show';
        return view('householder.create', compact('householder','mode'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $householder = Householder::find($id);
        $mode = 'edit';
        return view('householder.create', compact('householder','mode'));
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
        $householder = Householder::find($id);
        $insert = $householder->update($data);
        if ( $insert ) {
            return redirect()->back();
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
}
