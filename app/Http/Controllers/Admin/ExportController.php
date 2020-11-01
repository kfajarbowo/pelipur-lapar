<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ItemExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;


class ExportController extends Controller
{
    public function export(){
        return Excel::download(new ItemExport, 'Item.xlsx');
    }

}
