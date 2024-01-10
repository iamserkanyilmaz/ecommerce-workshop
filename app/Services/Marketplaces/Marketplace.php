<?php

namespace App\Services\Marketplaces;

use App\Services\DataFormats\DataFormat;

interface Marketplace {
    /**
     * @param array $data
     * @param DataFormat $dataFormat
     * @return mixed
     */
    public function export(array $data, DataFormat $dataFormat): mixed;
}

