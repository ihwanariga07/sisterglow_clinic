<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\BookingDetail;
use App\Models\Pasien;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    /**
     * Tampilkan daftar booking
     */
    public function index()
    {
        $bookings = Booking::with('pasien')->latest()->get();
        return view('booking.index', compact('bookings'));
    }

    /**
     * Form tambah booking
     */
    public function create()
    {
        $pasien = Pasien::all();
        $layanan = Layanan::all();

        return view('booking.create', compact('pasien', 'layanan'));
    }

    /**
     * Simpan booking + booking detail
     */
    public function store(Request $request)
    {
        $request->validate([
            'pasien_id' => 'required',
            'tanggal' => 'required|date',
            'layanan_id' => 'required|array',
            'jumlah' => 'required|array',
        ]);

        DB::beginTransaction();

        try {
            //simpan booking
            $booking = Booking::create([
                'pasien_id' => $request->pasien_id,
                'tanggal' => $request->tanggal,
                'status' => 'pending',
            ]);

            //simpan booking detail
            foreach ($request->layanan_id as $i => $layananId) {
                $layanan = Layanan::findOrFail($layananId);

                BookingDetail::create([
                    'booking_id' => $booking->id,
                    'layanan_id' => $layananId,
                    'jumlah' => $request->jumlah[$i],
                    'subtotal' => $layanan->harga * $request->jumlah[$i],
                ]);
            }
            DB::commit();

            return redirect()->route('booking.index')->with('succes', 'Booking Berhasil Disimpan');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Gagal menyimpan booking');
        }
    }

    /**
     * Detail booking
     */

    public function show($id)
    {
        $booking = Booking::with(['pasien', 'bookingDetails.layanan'])
            ->findOrFail($id);

        return view('booking.show', compact('booking'));
    }
    /**
     * Form edit booking
     */
    public function edit($id)
    {
        $booking = Booking::with('bookingDetails')->findOrFail($id);
        $pasien = Pasien::all();
        $layanan = Layanan::all();

        return view('booking.edit', compact('booking', 'pasien', 'layanan'));
    }/**
     * Update booking
     */
    public function update(Request $request, $id)
    {
        DB::beginTransaction();

        try {
            $booking = Booking::findOrFail($id);

            $booking->update([
                'pasien_id' => $request->pasien_id,
                'tanggal' => $request->tanggal,
                'status' => $request->status,
            ]);

            // hapus detail lama
            BookingDetail::where('booking_id', $booking->id)->delete();

            // simpan detail baru
            foreach ($request->layanan_id as $i => $layananId) {
                $layanan = Layanan::findOrFail($layananId);

                BookingDetail::create([
                    'booking_id' => $booking->id,
                    'layanan_id' => $layananId,
                    'jumlah' => $request->jumlah[$i],
                    'subtotal' => $layanan->harga * $request->jumlah[$i],
                ]);
            }

            DB::commit();

            return redirect()->route('booking.index')
                ->with('success', 'Booking berhasil diupdate');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Gagal update booking');
        }
    }

    /**
     * Hapus booking
     */
    public function destroy($id)
    {
        DB::beginTransaction();

        try {
            BookingDetail::where('booking_id', $id)->delete();
            Booking::findOrFail($id)->delete();

            DB::commit();

            return redirect()->route('booking.index')
                ->with('success', 'Booking berhasil dihapus');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Gagal menghapus booking');
        }
    }
}