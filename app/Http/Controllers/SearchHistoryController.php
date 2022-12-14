<?php

namespace App\Http\Controllers;

use App\Exports\SearchHistoryExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SearchHistoryController extends Controller
{
    public function index()
    {
        return Excel::download(new SearchHistoryExport(), 'search_history.xlsx');
    }
}
