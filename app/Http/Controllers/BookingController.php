<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $data = Booking::all();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'package_id' => 'required|integer',
            'schedule_id' => 'required|integer',
            'booking_date' => 'required|date',
            'total_person' => 'required|integer|min:1',
            'total_price' => 'required|numeric',
            'status' => 'required|in:pending,confirmed,cancelled,completed'
        ]);

        $booking = Booking::create($request->all());
        return response()->json(['message' => 'Booking created', 'data' => $booking], 201);
    }

    public function show($id)
    {
        $booking = Booking::find($id);
        if (!$booking) {
            return response()->json(['message' => 'Booking not found'], 404);
        }
        return response()->json($booking);
    }

    public function update(Request $request, $id)
    {
        $booking = Booking::find($id);
        if (!$booking) {
            return response()->json(['message' => 'Booking not found'], 404);
        }

        $booking->update($request->all());
        return response()->json(['message' => 'Booking updated', 'data' => $booking]);
    }

    public function destroy($id)
    {
        $booking = Booking::find($id);
        if (!$booking) {
            return response()->json(['message' => 'Booking not found'], 404);
        }

        $booking->delete();
        return response()->json(['message' => 'Booking deleted']);
    }

    public function view()
    {
        $data = Booking::all();
        return view('bookings', ['bookings' => $data]);
    }
}
