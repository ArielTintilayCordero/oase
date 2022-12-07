<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apPaterno',
        'apMaterno',
        'telefono',
        'direccion',
        'status'
    ];

    public function vouchers(){
        return $this->hasMany(Voucher::class);
    }

}
