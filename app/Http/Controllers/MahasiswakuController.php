<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswaku;
use Illuminate\Http\Request;

class MahasiswakuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mahasiswaku::all();
        return view('list', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mahasiswaku = new Mahasiswaku;
        $mahasiswaku->nim = $request->nim;
        $mahasiswaku->fullname = $request->fullname;
        $mahasiswaku->jeniskelamin = $request->jeniskelamin;
        $mahasiswaku->hoby = $request->hoby;
        $mahasiswaku->fakultas = $request->fakultas;
        $mahasiswaku->tgllahir = $request->tgllahir;
        $mahasiswaku->email = $request->email;
        $mahasiswaku->kota = $request->kota;
        $mahasiswaku->save();
        return redirect('/mahasiswaku');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswaku  $mahasiswaku
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswaku $mahasiswaku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswaku  $mahasiswaku
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswaku $mahasiswaku)
    {
        return view('edit',compact('mahasiswaku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswaku  $mahasiswaku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswaku $mahasiswaku)
    {
        $mahasiswaku->nim = $request->nim;
        $mahasiswaku->fullname = $request->fullname;
        $mahasiswaku->jeniskelamin = $request->jeniskelamin;
        $mahasiswaku->hoby = $request->hoby;
        $mahasiswaku->fakultas = $request->fakultas;
        $mahasiswaku->tgllahir = $request->tgllahir;
        $mahasiswaku->email = $request->email;
        $mahasiswaku->kota = $request->kota;
        $mahasiswaku->save();
        return redirect('/mahasiswaku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswaku  $mahasiswaku
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswaku $mahasiswaku)
    {
        $mahasiswaku->delete();
        return redirect('/mahasiswaku');
    }
}
