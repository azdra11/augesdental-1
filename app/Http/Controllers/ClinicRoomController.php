<?php

namespace App\Http\Controllers;

use App\Models\ClinicRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClinicRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clinic_room = DB::select("SELECT * FROM clinic_rooms ORDER BY created_at");
        return view('pages.clinic_room.index', compact('clinic_room'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.clinic_room.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'clinic_room_name' => 'required|string|max:255',
            'description_room' => 'nullable|string',
            'active_room' => 'boolean',
        ]);

        ClinicRoom::create([
            'clinic_room_name' => $request->clinic_room_name,
            'description_room' => $request->description_room,
            'active_room' => $request->has('active_room') ? 1 : 0,
        ]);

        return redirect()->back()->with('success', 'Clinic Room added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(ClinicRoom $clinicRoom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $clinic_room = ClinicRoom::find($id);
        return view('pages.clinic_room.update', compact('clinic_room'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'clinic_room_name' => 'required|string|max:255',
            'description_room' => 'nullable|string',
            'active_room' => 'sometimes|boolean',
        ]);

        $clinic_room = ClinicRoom::findOrFail($id);
        $clinic_room->update([
            'clinic_room_name' => $request->clinic_room_name,
            'description_room' => $request->description_room,
            'active_room' => $request->has('active_room') ? 1 : 0,
        ]);

        return redirect()->route('clinic_room.index')->with('success', 'Clinic Room updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $clinic_room = ClinicRoom::findOrFail($id);
        $clinic_room->delete();
        if ($clinic_room) {
            return redirect()->route('clinic_room.index')->with(['success' => 'Data Berhasil Di Hapus!']);
        } else {
            return redirect()->route('clinic_room.index')->with(['error' => 'Data Gagal Di Hapus!']);
        }
    }
}
