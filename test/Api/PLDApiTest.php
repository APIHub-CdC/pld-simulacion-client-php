<?php

namespace pld\simulacion\mx\Client;

use \pld\simulacion\mx\Client\Configuration;
use \pld\simulacion\mx\Client\ApiException;
use \pld\simulacion\mx\Client\Api\PLDApi;
use \pld\simulacion\mx\Client\Model\Peticion;

class PLDApiTest extends \PHPUnit_Framework_TestCase
{
    
    public function setUp()
    {
        $config = new Configuration();
        $config->setHost('the_url');
        $this->x_api_key = "your_x_api_key";
        $client = new \GuzzleHttp\Client();
        $this->apiInstance = new PLDApi($client, $config);
    }
    
    public function testGetPLD()
    {
        try{
            $request = new Peticion();
            $request->setNombres("JUAN");
            $request->setApellidoPaterno("PRUEBA");
            $request->setApellidoMaterno("CUATRO");
            $result = $this->apiInstance->getPLD($this->x_api_key, $request);
            print_r($result);
        } catch (ApiException | Exception $e) {
            echo 'Exception when calling PLDApi->getPLD: ', $e->getMessage(), PHP_EOL;
        }
    }
}
