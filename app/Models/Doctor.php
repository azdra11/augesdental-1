<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone_no',
        'specialist',
        'gender',
        'clinic_room_id',
        'blood_type',
        'address',
        'photo',
    ];

    protected $with = ['clinic_room'];

    public function clinic_room()
    {
        return $this->belongsTo(ClinicRoom::class);
    }
}
