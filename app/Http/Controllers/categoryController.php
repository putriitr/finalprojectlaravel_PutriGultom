<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoryController extends Controller
{
     public function index():View{
        $categories=Category::latest()->paginate(10);
        return view('category.index',compact('categories'));
    }
    public function create():View{
        return view('category.create');
    }
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama_kategori'=>'required',
            'deskripsi'=>'required'
        ]);

        Category::create([
            'nama_kategori'  => $request->nama_kategori,
            'deskripsi'      => $request->deskripsi
        ]);
        return redirect()->route('category.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
     public function edit(string $id): View
     {
        $Categories = Category::findOrFail($id);

        return view('Category.edit', compact('Categories'));
    }
}
