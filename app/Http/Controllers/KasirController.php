<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class KasirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kasir.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kasir.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $kasir = DB::table('kasir')->where('kode_kasir', $id)->first();
        return view('kasir.edit', compact('kasir'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_kasir' => 'required',
            'shift_mulai' => 'required',
            'shift_akhir' => 'required',
            'nohp' => 'required',
        ]);

        $data = [
            'nama_kasir' => $request->nama_kasir,
            'shift_mulai' => $request->shift_mulai,
            'shift_akhir' => $request->shift_akhir,
            'nohp' => $request->nohp,
        ];

        DB::table('kasir')->where('kode_kasir', $id)->update($data);
        return redirect()->route('kasir.index')->with('success', 'Data kasir berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('kasir')->where('kode_kasir', $id)->delete();
        return redirect()->route('kasir.index')->with('success', 'Data kasir berhasil dihapus.');
    }
}
