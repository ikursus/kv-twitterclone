<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Proses validasi borang tweet
        $request->validate([
            'content' => 'required|max:300', // Field content Wajib diisi, maksimum 300 aksara
        ]);

        // Dapatkan data daripada borang & simpan ke dalam database pada table posts
        DB::table('posts')->insert([
            'content' => $request->input('content'),
            'user_id' => auth()->user()->id, // auth()->id()
            'status' => 'published',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // Jika tiada masalah, redirect ke halaman dashboard semula
        return redirect()->back();
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('posts')->where('id', $id)->delete();
        // Model
        // Post::find($id)->delete();

        return redirect()->back();
        // return redirect()->route('dashboard);
    }
}
