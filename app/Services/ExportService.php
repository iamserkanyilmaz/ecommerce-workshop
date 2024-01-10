<?php
namespace App\Services;

use App\Models\Product;
use App\Services\DataFormats\DataFormat;
use App\Services\Marketplaces\Marketplace;

class ExportService
{
    /**
     * @param Marketplace $marketplace
     * @param DataFormat $dataFormat
     * @return mixed
     */
    public function createExport(Marketplace $marketplace, DataFormat $dataFormat): mixed
    {
        return $marketplace->export(Product::all()->toArray(), $dataFormat);
    }
}
