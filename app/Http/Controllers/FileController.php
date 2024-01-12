<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,png,jpeg|max:2048',
        ]);

        $file = $request->file('file');
        $path = $file->store('paragoniu-2024', 'spaces'); // 'uploads' is the folder in your Space

        return response()->json(['path' => $path]);
    }
}