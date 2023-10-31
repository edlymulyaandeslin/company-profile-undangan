<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.testimonial.index', [
            'title' => 'Testimonial',
            'testimonials' => Testimonial::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.testimonial.create', [
            'title' => 'Testimonial | Create',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:50',
            'file' => 'required|image|file|max:1024'
        ]);

        if ($request->file('file')) {
            $validateData['file'] = $request->file('file')->store('post-file');
        }

        Testimonial::create($validateData);

        return redirect('/dashboard/testimonial')->with('success', 'Testimoni berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        return view('dashboard.testimonial.show', [
            'title' => 'Testimonial | Show',
            'testimonial' => Testimonial::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('dashboard.testimonial.edit', [
            'title' => 'Testimonial | Edit',
            'testimonial' => Testimonial::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $testimonial = Testimonial::find($id);

        $validateData = $request->validate([
            'name' => 'required|max:50',
            'file' => 'image|file|max:1024'
        ]);

        if ($request->file('file')) {

            if ($request->oldFile) {
                Storage::delete($request->oldFile);
            }

            $validateData['file'] = $request->file('file')->store('post-file');
        }

        Testimonial::where('id', $testimonial->id)->update($validateData);

        return redirect('/dashboard/testimonial')->with('success', 'Testimoni berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);

        if ($testimonial->file) {
            Storage::delete($testimonial->file);
        }

        Testimonial::destroy($id);

        return redirect('/dashboard/testimonial')->with('success', 'Testimoni berhasil dihapus');
    }
}
