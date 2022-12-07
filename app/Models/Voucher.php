<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_voucher',
        'descripcion',
        'end_date',
        'observations',
        'operator_id',
        'service_id',
        'hotel_id',
        'status'
    ];

    public function clients(){
        return $this->belongsToMany(Client::class);
    }

    public function operator(){
        return $this->belongsTo(Operator::class);
    }

    public function service(){
        return $this->belongsTo(Service::class);
    }

    public function hotel(){
        return $this->belongsTo(Hotel::class);
    }

}
