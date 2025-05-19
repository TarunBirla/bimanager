<?php

namespace App\Imports;

use App\Models\User;
use App\Models\Creatorfc;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;


class RFQImport implements ToCollection
{
     public $importedUsers = [];


    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            
             if (empty( $row[1] ?? null) ) {
                continue;
             }
            $user = Creatorfc::create([
                'rfq_number' => $row[0] ?? null,
                'rfq_date' => $row[1] ?? null,
                'buyer' => $row[2] ?? null,
                'closing_date' => $row[3] ?? null,
                'items' => $row[4] ?? null,
                'notes' => $row[5] ?? null,
                'manufacturer_supplier' => $row[6] ?? null,
            ]);

            $this->importedUsers[] = $user;
        }

        return $this->importedUsers;
    }

    // public function model(array $row)
    // {
    //     return new Creatorfc([
    //         'rfq_number' => $row['rfq_number'] ?? null,
    //         'rfq_date' => $row['rfq_date'] ?? null,
    //         'buyer' => $row['buyer'] ?? null,
    //         'closing_date' => $row['closing_date'] ?? null,
    //         'items' => $row['items'] ?? null,
    //         'notes' => $row['notes'] ?? null,
    //         'manufacturer_supplier' => $row['manufacturersupplier'] ?? null,
    //     ]);   
    // }
}