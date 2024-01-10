<?php

namespace App\Services\Marketplaces;

use App\Services\DataFormats\CsvFormat;
use App\Services\DataFormats\JsonFormat;
use App\Services\DataFormats\XmlFormat;

class Facebook extends GenericMarketplace
{
    /**
     * @return array
     */
    public function availableFormats(): array
    {
        return [
            new JsonFormat(),
            new XmlFormat(),
            new CsvFormat()
        ];
    }
}

