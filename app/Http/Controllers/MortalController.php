<?php

namespace App\Http\Controllers;

use App\Models\Mortal;
use App\Models\TbTernak;
use Illuminate\Http\Request;

class MortalController extends Controller
{
    public function index()
    {
        $mortals = Mortal::join('tb_ternaks', 'tb_mortals.kode', '=', 'tb_ternaks.kode')
            ->select('tb_mortals.*', 'tb_ternaks.jenis', 'tb_ternaks.jkel')
            ->orderBy('tb_mortals.tgl', 'asc')
            ->orderBy('tb_mortals.kode', 'asc')
            ->orderBy('tb_ternaks.jenis', 'asc')
            ->orderBy('tb_ternaks.jkel', 'asc')
            ->orderBy('tb_mortals.penyebab', 'asc')
            ->get();

        return view('mortal.index', compact('mortals'));
    }

    public function create()
    {
        $ternaks = TbTernak::all();
        return view('mortal.create', compact('ternaks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|exists:tb_ternaks,kode',
            'tgl' => 'required|date',
            'penyebab' => 'required',
        ]);

        Mortal::create($request->all());

        return redirect('/mortal');
    }

    public function edit($id)
    {
        $mortal = Mortal::findOrFail($id);
        $ternaks = TbTernak::all();
        return view('mortal.edit', compact('mortal', 'ternaks'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode' => 'required|exists:tb_ternaks,kode',
            'tgl' => 'required|date',
            'penyebab' => 'required',
        ]);

        $mortal = Mortal::findOrFail($id);
        $mortal->update($request->all());

        return redirect('/mortal');
    }

    public function destroy($id)
    {
        $mortal = Mortal::findOrFail($id);
        $mortal->delete();

        return redirect('/mortal');
    }
}
