<?php
namespace App\Services\Marketplaces;

use App\Services\DataFormats\CsvFormat;
use App\Services\DataFormats\JsonFormat;

class N11 extends GenericMarketplace {
    /**
     * @return array
     */
    public function availableFormats(): array
    {
        return [
            new JsonFormat(),
            new CsvFormat(),
        ];
    }
}

