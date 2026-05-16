<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        return response()->json(Booking::all());
    }

    public function store(Request $request)
    {
        $booking = Booking::create($request->all());

        return response()->json([
            'message' => 'Booking berhasil dibuat',
            'data' => $booking
        ]);
    }

    public function show(string $id)
    {
        return response()->json(Booking::findOrFail($id));
    }

    public function update(Request $request, string $id)
    {
        $booking = Booking::findOrFail($id);

        $booking->update($request->all());

        return response()->json([
            'message' => 'Booking berhasil diupdate'
        ]);
    }

    public function destroy(string $id)
    {
        Booking::destroy($id);

        return response()->json([
            'message' => 'Booking berhasil dihapus'
        ]);
    }
}