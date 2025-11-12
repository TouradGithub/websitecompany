<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        // list files in storage/app/public/gallery
        $files = Storage::disk('public')->files('gallery');
        // only pass basenames to view
        $gallery = array_map(function($path) {
            return basename($path);
        }, $files);

        return view('admin.gallery.index', compact('gallery'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:4096'
        ]);

        $path = $request->file('image')->store('gallery', 'public');

        return redirect()->route('admin.gallery.index')->with('success', 'Image ajoutée au gallery');
    }

    public function destroy($filename)
    {
        $filename = basename($filename); // sanitize
        $path = 'gallery/' . $filename;
        if (Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
            return redirect()->route('admin.gallery.index')->with('success', 'Image supprimée');
        }

        return redirect()->route('admin.gallery.index')->withErrors(['image' => 'Fichier introuvable']);
    }
}
