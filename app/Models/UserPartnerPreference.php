<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPartnerPreference extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'partner_income_min',
        'partner_income_max',
        'partner_occupation',
        'partner_family',
        'partner_manglik'
    ];
}
