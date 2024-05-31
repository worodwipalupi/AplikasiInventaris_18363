<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\db;
use Illuminate\Routing\Controller;
 
class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $judul = "Data Anggota";
        $data = Anggota::all();
        return view("anggota.tampil",compact('data','judul'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anggota.input');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('anggotas')->insert([

            'nama_anggota'=> $request->nama_anggota,
            'no_anggota'=>$request->no_anggota,
            'alamat'=>$request->alamat
        
        ]);

            return redirect('/anggota');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $id_anggota = DB::table('anggotas')->where('id_anggota',$id)->get();
        return view('anggota.edit',['anggotas' => $id_anggota]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
         DB::table('anggotas')->where('id_anggota',$request->id_anggota)->update([
            'nama_anggota' => $request->nama_anggota,
            'no_anggota' => $request->no_anggota,
            'alamat' => $request->alamat,
            ]);
            
            return redirect('/anggota');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         DB::table('anggotas')->where('id_anggota',$id)->delete();
         return redirect('/anggota');
    }
}