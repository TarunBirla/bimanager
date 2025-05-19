<?php

namespace App\Imports;

use App\Models\User;
use App\Models\Createpo;
use Maatwebsite\Excel\Concerns\ToModel;

class UserImport implements ToModel
{
    public function model(array $row)
    {

        return new Createpo([
            'client_name' => $row[0],
            'item_description_rfq_details' => $row[1],
            'client_po_number' => $row[2],
            'client_po_date' => $row[3],
            'client_po_value' => $row[4],
            'currency' => $row[5],
            'client_delivery_date' => $row[6],
            'pbs_po_number' => $row[7],
            'pbs_po_value' => $row[8],
            'pbs_currency' => $row[9],
            'supplier_name' => $row[10],
            'latest_update' => $row[11],
            'pearlcon_contact' => $row[12],
            'supplier_payment' => $row[13],
            'supplier_delivery_date' => $row[14],
            'client_payment' => $row[15],
            'update_notes' => $row[16],
        ]);

        // return new User([
        //     'name'     => $row[0],
        //     'email'    => $row[1],
        //     'password' => "12345678", 
        // ]);
    }
}

