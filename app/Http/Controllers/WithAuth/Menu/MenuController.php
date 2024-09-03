<?php

namespace App\Http\Controllers\WithAuth\Menu;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:Admin');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('page.menu.menu', [
            'title' => 'Menu Makanan',
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
            'name' => 'required|unique:menus,name,' . $id,
            'price' => 'required|numeric|min:0',
            'status' => 'required|boolean',
        ]);

        try{
            $menu = Menu::findOrFail($id);
            $menu->update([
                'name' => $request->name,
                'price' => $request->price,
                'is_active' => $request->status,
            ]);
            Alert::success('Success', 'Berhasil mengubah data menu');
            return back();
        } catch (\Exception $e) {
            Alert::error('Error', 'Gagal mengubah data menu');
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
