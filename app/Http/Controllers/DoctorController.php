<?php

namespace App\Http\Controllers;

use App\Models\ClinicRoom;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::role('doctor')->get();
        $rooms = ClinicRoom::all();
        return view('pages.doctor.index', compact(['users', 'rooms']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.doctor.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'phone_no' => 'nullable|string|max:20',
            'specialist' => 'nullable|string|max:255',
            'gender' => 'nullable|string',
            'clinic_room_id' => 'nullable|string',
            'blood_type' => 'nullable|string',
            'address' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        $user->assignRole('doctor');

        // Store image if uploaded
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoPath = $photo->store('public/doctors');
            $photoUrl = Storage::url($photoPath);
        } else {
            $photoUrl = null;
        }

        // Save the doctor data to the database
        $doctor = new Doctor();
        $doctor->phone_no = $request->input('phone_no');
        $doctor->specialist = $request->input('specialist');
        $doctor->gender = $request->input('gender');
        $doctor->clinic_room_id = $request->input('clinic_room_id');
        $doctor->blood_type = $request->input('blood_type');
        $doctor->address = $request->input('address');
        $doctor->photo = $photoUrl;
        $doctor->save();

        $user->profile()->associate($doctor);
        $user->save();

        return redirect()->route('doctor.index')->with('success', 'Doctor registered successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $doctor = doctor::find($id);
        return view('pages.doctor.update', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_no' => 'required|string|max:15',
            'specialist' => 'nullable|string|max:255',
            'gender' => 'required|in:Male,Female',
            'email' => 'required|email|max:255',
            'room_clinic' => 'required|in:Room 1,Room 2,Room 3,Room 4',
            'blood_type' => 'required|in:A+,A-,B+,B-,O+,O-,AB+,AB-',
            'password' => 'nullable|confirmed|min:8',
            'address' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $doctor = Doctor::findOrFail($id);
        $doctor->first_name = $request->input('first_name');
        $doctor->last_name = $request->input('last_name');
        $doctor->phone_no = $request->input('phone_no');
        $doctor->specialist = $request->input('specialist');
        $doctor->gender = $request->input('gender');
        $doctor->email = $request->input('email');
        $doctor->room_clinic = $request->input('room_clinic');
        $doctor->blood_type = $request->input('blood_type');
        $doctor->address = $request->input('address');

        if ($request->has('password')) {
            $doctor->password = bcrypt($request->input('password'));
        }

        if ($request->hasFile('photo')) {
            $imageName = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('doctors'), $imageName);
            $doctor->photo = $imageName;
        }

        $doctor->save();

        return redirect()->route('doctor.index')->with('success', 'Doctor updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->delete();
        if ($doctor) {
            return redirect()->route('doctor.index')->with(['success' => 'Data Berhasil Di Hapus!']);
        } else {
            return redirect()->route('doctor.index')->with(['error' => 'Data Gagal Di Hapus!']);
        }
    }
}
