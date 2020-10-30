<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name','last_name','street_address','additional_address_info','state_id','lgarea_id','contact_number','additional_contact_number'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
