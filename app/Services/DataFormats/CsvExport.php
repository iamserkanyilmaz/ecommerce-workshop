<?php
namespace App\Services\DataFormats;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Collection;

class CsvExport implements FromCollection, WithHeadings
{

    /**
     * @var array
     */
    protected array $data;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @return Collection
     */
    public function collection(): Collection
    {
        return collect($this->data);
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return array_keys($this->data[0]);
    }
}

