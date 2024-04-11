<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'name',
        'surname',
        'patronymic',
        'birthday',
        'special_id',
    ];

    public function special() {
        return $this->belongsTo(Specialization::class);
    }
}