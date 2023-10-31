<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.theme.index', [
            'title' => 'Themes',
            'themes' => Theme::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.theme.create', [
            'title' => 'Theme | Create'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'link' => 'required|url'
        ]);

        Theme::create($validateData);

        return redirect('/dashboard/theme')->with('success', 'Tema baru berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Theme $theme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('dashboard.theme.edit', [
            'title' => 'Theme | Edit',
            'theme' => Theme::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'link' => 'required|url'
        ]);

        Theme::where('id', $id)->update($validateData);

        return redirect('/dashboard/theme')->with('success', 'Tema berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Theme::destroy($id);

        return redirect('/dashboard/theme')->with('success', 'Tema berhasil dihapus!');
    }
}
