<?php

namespace App\Http\Controllers;

use App\Services\DataFormats\CsvFormat;
use App\Services\DataFormats\JsonFormat;
use App\Services\DataFormats\XmlFormat;
use App\Services\ExportService;
use App\Services\Marketplaces\Cimri;
use App\Services\Marketplaces\Facebook;
use App\Services\Marketplaces\Google;
use App\Services\Marketplaces\N11;


class ProductController extends Controller
{
    /**
     * @var ExportService
     */
    private ExportService $exportService;

    public function __construct(ExportService $exportService)
    {
        $this->exportService = $exportService;
    }

    /**
     * @return mixed
     */
    public function facebook_products()
    {
        try {
            return $this->exportService->createExport(new Facebook(), new CsvFormat());
        } catch (\Exception $ex) {
            return response()->json(['message' => $ex->getMessage()]);
        }
    }

    /**
     * @return mixed
     */
    public function google_products()
    {
        try {
            return $this->exportService->createExport(new Google(), new CsvFormat());
        } catch (\Exception $ex) {
            return response()->json(['message' => $ex->getMessage()]);
        }
    }

    /**
     * @return mixed
     */
    public function n11_products()
    {
        try {
            return $this->exportService->createExport(new N11(), new JsonFormat());
        } catch (\Exception $ex) {
            return response()->json(['message' => $ex->getMessage()]);
        }
    }

    /**
     * @return mixed
     */
    public function cimri_products()
    {
        try {
            return $this->exportService->createExport(new Cimri(), new XmlFormat());
        } catch (\Exception $ex) {
            return response()->json(['message' => $ex->getMessage()]);
        }
    }
}
