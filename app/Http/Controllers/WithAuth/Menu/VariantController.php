<?php

namespace App\Http\Controllers\WithAuth\Menu;

use App\Models\Menu;
use App\Models\Variant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class VariantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('page.variant.variant', [
            'title' => 'Variant Menu',
            'variants' => Variant::get(),
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
            'name' => 'required|unique:variants,name,' . $id,
            'status' => 'required|boolean',
        ]);

        try{
            $menu = Variant::findOrFail($id);
            $menu->update([
                'name' => $request->name,
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
