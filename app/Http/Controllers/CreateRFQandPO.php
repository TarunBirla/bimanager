<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Creatorfc;
use App\Models\Createpo;
    

class CreateRFQandPO extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'rfq_number' => 'required|string',
            'rfq_date' => 'required|date',
            'buyer' => 'required|string',
            'closing_date' => 'required|date',
            'items' => 'nullable|string',
            'notes' => 'nullable|string',
            'manufacturer_supplier' => 'nullable|string',
        ]);

        $rfq = Creatorfc::create($validated);

        return response()->json([
            'message' => 'RFQ created successfully',
            'data' => $rfq
        ], 201);
    }

    // RFQ GET
    public function getRFQ()
    {
        $rfqs = Creatorfc::all();
        return response()->json($rfqs);
    }

    public function storePO(Request $request)
{
    $validated = $request->validate([
        'client_name' => 'required|string',
        'item_description_rfq_details' => 'required|string',
        'client_po_number' => 'required|string',
        'client_po_date' => 'required|date',
        'client_po_value' => 'nullable|numeric',
        'currency' => 'nullable|string',
        'client_delivery_date' => 'nullable|date',
        'pbs_po_number' => 'nullable|string',
        'pbs_po_value' => 'nullable|numeric',
        'pbs_currency' => 'nullable|string',
        'supplier_name' => 'nullable|string',
        'latest_update' => 'nullable|string',
        'pearlcon_contact' => 'nullable|string',
        'supplier_payment' => 'nullable|string',
        'supplier_delivery_date' => 'nullable|date',
        'client_payment' => 'nullable|string',
        'update_notes' => 'nullable|string',
    ]);

    $po = Createpo::create($validated);

    return response()->json([
        'message' => 'PO created successfully',
        'data' => $po
    ], 201);
}

 // PO GET
 public function getPO()
 {
     $pos = Createpo::all();
     return response()->json($pos);
 }
}

