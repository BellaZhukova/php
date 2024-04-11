<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'date_record',
        'doctor_id',
        'pacient_id',
        'status_id',
    ];

    public function doctor() {
        return $this->belongsTo(Doctor::class);
    }

    public function pacient() {
        return $this->belongsTo(Pacient::class);
    }

    public function status() {
        return $this->belongsTo(Status::class);
    }
}