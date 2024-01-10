<?php
namespace App\Services\Marketplaces;

use App\Services\DataFormats\DataFormat;

abstract class GenericMarketplace implements Marketplace {

    /**
     * @param DataFormat $dataFormat
     * @return bool
     */
    protected function hasDataFormat(DataFormat $dataFormat): bool
    {
        $available = false;
        foreach ($this->availableFormats() as $availableFormat) {
            if ($availableFormat instanceof $dataFormat) {
                $available = true;
            }
        }

        return $available;
    }

    /**
     * @param array $data
     * @param DataFormat $dataFormat
     * @return mixed
     * @throws \Exception
     */
    public function export(array $data, DataFormat $dataFormat): mixed
    {
        if (!$this->hasDataFormat($dataFormat)) {
            throw new \Exception('Unsupported data format');
        }

        return $dataFormat->exportData($data);
    }

    /**
     * @return array
     */
    abstract function availableFormats():array;
}
