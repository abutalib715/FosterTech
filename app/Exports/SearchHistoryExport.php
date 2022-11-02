<?php

namespace App\Exports;

use App\Models\SearchHistory;
use Maatwebsite\Excel\Concerns\FromCollection;

class SearchHistoryExport implements FromCollection
{
    public function collection()
    {
        return SearchHistory::all();
    }
}
