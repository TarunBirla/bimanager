<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UserImport;
use App\Imports\RFQImport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelImportController extends Controller
{
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:xlsx,xls',
        ]);

        $file = $request->file('file');
        Excel::import(new UserImport, $file);

        return response()->json(['message' => 'Excel imported successfully']);
    }

    public function rfqimport( Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:xlsx,xls',
        ]);


        $file = $request->file('file');
        try {
            Excel::import(new RfqImport, $request->file('file'));
             return response()->json(['message' => 'RFQs imported successfully']);
        } catch (\Exception $e) {
           return response()->json(['error', $e->getMessage()], 500);
        }

       

    }
}
