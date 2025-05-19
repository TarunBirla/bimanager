<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Createpo extends Model
{
    use HasFactory;

    protected $table = 'createpo'; // Explicitly set your table name
    public $timestamps = false;

    protected $fillable = [
        'client_name',
        'item_description_rfq_details',
        'client_po_number',
        'client_po_date',
        'client_po_value',
        'currency',
        'client_delivery_date',
        'pbs_po_number',
        'pbs_po_value',
        'pbs_currency',
        'supplier_name',
        'latest_update',
        'pearlcon_contact',
        'supplier_payment',
        'supplier_delivery_date',
        'client_payment',
        'update_notes',
    ];
}
