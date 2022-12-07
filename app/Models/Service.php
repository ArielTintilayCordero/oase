<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio_total',
        'status'
    ];

    public function subservices(){
        return $this->belongsToMany(Subservice::class);
    }

    public function vouchers(){
        return $this->hasMany(Voucher::class);
    }
}
