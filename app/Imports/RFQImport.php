<?php

namespace App\Imports;

use App\Models\User;
use App\Models\Creatorfc;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RFQImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
         \Log::info($row);
        if (empty(array_filter($row))) {
            \Log::error('Empty row detected, stopping import.');
            throw new \Exception('Import failed: Empty or invalid row found.');
        }

        return new Creatorfc([
            'rfq_number' => $row['rfq_number'] ?? null,
            'rfq_date' => $row['rfq_date'] ?? null,
            'buyer' => $row['buyer'] ?? null,
            'closing_date' => $row['closing_date'] ?? null,
            'items' => $row['items'] ?? null,
            'notes' => $row['notes'] ?? null,
            'manufacturer_supplier' => $row['manufacturersupplier'] ?? null,
        ]);
    }
}