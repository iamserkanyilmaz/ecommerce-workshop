<?php
namespace App\Services\DataFormats;

use Illuminate\Http\JsonResponse;

class JsonFormat implements DataFormat
{
    /**
     * @param array $data
     * @return JsonResponse
     */
    public function exportData(array $data): JsonResponse
    {
        return new JsonResponse($data);
    }
}
