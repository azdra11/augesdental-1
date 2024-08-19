<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClinicRoom extends Model
{
    use HasFactory;

    protected $table = 'clinic_rooms';
    protected $primaryKey = 'id_clinic_room';
    protected $fillable = [
        'clinic_room_name',
        'description_room',
        'active_room'
    ];
}
