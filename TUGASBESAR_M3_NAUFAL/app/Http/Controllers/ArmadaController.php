<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Armada;

class ArmadaController extends Controller
{
    public function tampilan()
    {
        $data_armada = Armada::all(); // Mengambil semua data dari tabel armada
        return view('armada.tampilan', compact('data_armada'));
    }

    public function create()
    {
        return view('armada.create');
    }

    public function store(Request $request)
    {
        Armada::create($request->all()); // Menyimpan semua input form ke database
        return redirect('/armada');
    }

    public function edit(String $id)
    {
        $armada = Armada::find($id); // Mencari armada berdasarkan ID
        return view('armada.edit', compact('armada'));
    }

    public function update(Request $request,String $id)
    {
        $armada = Armada::find($id);
        $armada->update($request->all()); // Memperbarui data
        return redirect('/armada');
    }

    public function destroy(String $id)
    {
        $armada = Armada::find($id);
        $armada->delete(); // Menghapus data
        return redirect('/armada');
    }
}