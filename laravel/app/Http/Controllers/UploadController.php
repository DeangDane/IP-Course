<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'document' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        $path = $request->file('document')->store('uploads', 'minio');

        return response()->json([
            'message' => 'File uploaded successfully.',
            'url' => asset('storage/' . $path),
        ]);
    }
}
