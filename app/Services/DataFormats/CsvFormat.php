<?php
namespace App\Services\DataFormats;

use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class CsvFormat implements DataFormat
{
    /**
     * @param array $data
     * @return BinaryFileResponse
     */
    public function exportData(array $data): BinaryFileResponse
    {
        return Excel::download(new CsvExport($data), 'file.csv');
    }
}

