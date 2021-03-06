<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportLaravelController extends Controller
{
    function export()
    {
        return (new UsersExport)->download('Laporan.xlsx');
    }
}
