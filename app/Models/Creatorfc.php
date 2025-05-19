<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creatorfc extends Model
{
    use HasFactory;

    protected $table = 'creatorfc';
    public $timestamps = false;


    protected $fillable = [
        'rfq_number',
        'rfq_date',
        'buyer',
        'closing_date',
        'items',
        'notes',
        'manufacturer_supplier',
    ];
}
