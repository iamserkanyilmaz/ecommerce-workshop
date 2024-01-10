<?php
namespace App\Services\DataFormats;

use Illuminate\Http\Response;

class XmlFormat implements DataFormat
{

    /**
     * @param array $data
     * @return Response
     */
    public function exportData(array $data): Response
    {
        $xml = new \SimpleXMLElement('<xml/>');
        $this->arrayToXmlHelper($data, $xml);
        return new Response($xml->asXML(), 200, ['Content-Type' => 'application/xml']);
    }

    /**
     * @param array $data
     * @param $xml
     * @return void
     */
    public function arrayToXmlHelper(array $data, &$xml): void
    {
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $subNode = $xml->addChild('data');
                self::arrayToXmlHelper($value, $subNode);
            } else {
                $xml->addChild($key, $value);
            }
        }
    }
}

