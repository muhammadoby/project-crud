<?php

namespace App\Http\Controllers\WithAuth\Additional;

use App\Models\Variant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Additional;
use RealRashid\SweetAlert\Facades\Alert;

class AdditionalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('page.additional.additional', [
            'title' => 'Additional',
        ]);
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
        //
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
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'status' => 'required|boolean',
        ]);

        try {
            $menu = Additional::findOrFail($id);
            $menu->update([
                'name' => $request->name,
                'description' => $request->description,
                'is_active' => $request->status,
            ]);
            Alert::success('Success', 'Berhasil mengubah data varian');
            return back();
        } catch (\Exception $e) {
            Alert::error('Error', 'Gagal mengubah data varian');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
