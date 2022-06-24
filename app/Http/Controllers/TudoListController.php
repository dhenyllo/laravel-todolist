<?php

namespace App\Http\Controllers;

use App\Models\tudo_list;
use Illuminate\Http\Request;
use Symfony\Component\Finder\Finder;

class TudoListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('todo')->with('todo_arr', tudo_list::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        date_default_timezone_set('America/Fortaleza');
        date('d/m/Y H:i:s');
        return view('create_new_list');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        date_default_timezone_set('America/Fortaleza');
        date('d/m/Y H:i:s');

        $todo = new tudo_list();
        $todo->name = $request->input('name');
        $todo->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tudo_list  $tudo_list
     * @return \Illuminate\Http\Response
     */
    public function show(tudo_list $tudo_list)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tudo_list  $tudo_list
     * @return \Illuminate\Http\Response
     */
    public function edit(tudo_list $tudo_list, $id)
    {
        date_default_timezone_set('America/Fortaleza');
        date('d/m/Y H:i:s');
        $todo = tudo_list::find($id);
        return view('edit_list')->with('todo_arr', $todo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tudo_list  $tudo_list
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tudo_list $tudo_list, $id)
    {
        date_default_timezone_set('America/Fortaleza');
        date('d/m/Y H:i:s');
        $todo = tudo_list::find($id);
        $todo->name = $request->input('name');
        $todo->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tudo_list  $tudo_list
     * @return \Illuminate\Http\Response
     */
    public function destroy(tudo_list $tudo_list, $id)
    {
        $row = tudo_list::destroy($id);
        return redirect('/');
    }
}
