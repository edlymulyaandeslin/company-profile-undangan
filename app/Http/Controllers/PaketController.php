<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.paket.index', [
            'title' => 'Paket',
            'pakets' => Paket::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.paket.create', [
            'title' => 'Paket | Create',
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'category_id' => 'required',
            'price' => 'required|max:16',
            'jumlah_tamu' => 'required|max:4',
            'jumlah_foto' => 'required|max:3',
            'jumlah_vidio' => 'required|max:3',
            'masa_aktif' => 'required|max:3'
        ]);

        Paket::create($validateData);

        return redirect('/dashboard/paket')->with('success', 'Paket berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Paket $paket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        return view('dashboard.paket.edit', [
            'title' => 'Paket | Edit',
            'pakets' => Paket::find($id),
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'category_id' => 'required',
            'price' => 'required|max:16',
            'jumlah_tamu' => 'required|max:4',
            'jumlah_foto' => 'required|max:3',
            'jumlah_vidio' => 'required|max:3',
            'masa_aktif' => 'required|max:3'
        ]);

        Paket::where('id', $id)->update($validateData);

        return redirect('/dashboard/paket')->with('success', 'Update berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Paket::destroy($id);

        return redirect('/dashboard/paket')->with('success', 'Paket berhasil dihapus!');
    }
}
