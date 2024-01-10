<?php
namespace App\Services\Marketplaces;

use App\Services\DataFormats\JsonFormat;

class Google extends GenericMarketplace
{
    /**
     * @return array
     */
    public function availableFormats(): array
    {
        return [
            new JsonFormat(),
        ];
    }
}
