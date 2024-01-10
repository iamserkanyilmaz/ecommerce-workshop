<?php
namespace App\Services\DataFormats;

interface DataFormat
{
    /**
     * @param array $data
     * @return mixed
     */
    public function exportData(array $data): mixed;
}
