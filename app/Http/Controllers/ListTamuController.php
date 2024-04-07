<?php

namespace App\Http\Controllers;

use App\Models\ListTamu;
use Illuminate\Http\Request;

class ListTamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tamu = ListTamu::all();
        return view('data_tamu.index', compact('tamu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data_tamu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  dd($request->all());
        $request->validate([
            'nama' => 'required',
            'jk' => 'required',
            'ttl' => 'required',
            'jabatan' => 'required',
            'angkatan' => 'required',
            'alamat' => 'required',
            'no_tlp' => 'required',
        ],[
            'nama.required' => 'Nama tidak boleh kosong',
            'jk.required' => 'Jenis Kelamin tidak boleh kosong',
            'ttl.required' => 'Templat Tanggal Lahir tidak boleh kosong',
            'jabatan.required' => 'Jabatan tidak boleh kosong',
            'angkatan.required' => 'Angkatan tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'no_tlp.required' => 'Nomor telepon tidak boleh kosong',
        ]); 

      
        $tamu = [
            'nama' => $request->nama,
            'jk' => $request->jk,
            'ttl' => $request->ttl,
            'jabatan' => $request->jabatan,
            'angkatan' => $request->angkatan,
            'alamat' => $request->alamat,
            'no_tlp' => $request->no_tlp,
        ];

        // dd($pelanggan);
        ListTamu::create($tamu);
        return redirect()->route('data_tamu.index')->with('success', 'Data Berhasil disimpan');
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
        return view('data_tamu.edit');
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
        $request->validate([
            'nama' => 'required',
            'jk' => 'required',
            'ttl' => 'required',
            'jabatan' => 'required',
            'angkatan' => 'required',
            'alamat' => 'required',
            'no_tlp' => 'required',
        ],[
            'nama.required' => 'Nama tidak boleh kosong',
            'jk.required' => 'Jenis Kelamin tidak boleh kosong',
            'ttl.required' => 'Templat Tanggal Lahir tidak boleh kosong',
            'jabatan.required' => 'Jabatan tidak boleh kosong',
            'angkatan.required' => 'Angkatan tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'no_tlp.required' => 'Nomor telepon tidak boleh kosong',
        ]); 

      
        $tamu = [
            'nama' => $request->nama,
            'jk' => $request->jk,
            'ttl' => $request->ttl,
            'jabatan' => $request->jabatan,
            'angkatan' => $request->angkatan,
            'alamat' => $request->alamat,
            'no_tlp' => $request->no_tlp,
        ];

        ListTamu::find($id)->update($tamu);
        return redirect()->route('data_tamu.index')->with('success', 'Data Berhasil diedit');
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
