<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    public function index()
    {
        return response()->json(
            Equipment::all()
        );
    }

    public function store(Request $request)
    {
        $equipment = Equipment::create([
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status
        ]);

        return response()->json([
            'message' => 'Data berhasil ditambahkan',
            'data' => $equipment
        ]);
    }

    public function show(string $id)
    {
        return response()->json(
            Equipment::findOrFail($id)
        );
    }

    public function update(Request $request, string $id)
    {
        $equipment = Equipment::findOrFail($id);

        $equipment->update([
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status
        ]);

        return response()->json([
            'message' => 'Data berhasil diupdate',
            'data' => $equipment
        ]);
    }

    public function destroy(string $id)
    {
        Equipment::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Data berhasil dihapus'
        ]);
    }
}