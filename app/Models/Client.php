<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'ci_pasaporte',
        'nombre',
        'apPaterno',
        'apMaterno',
        'telefono',
        'country_id',
        'status'

    ];
    /**
     * ! relationships
     */

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function vouchers(){
        return $this->belongsToMany(Voucher::class);
    }
}
