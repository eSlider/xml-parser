<?php
namespace Wheregroup\XML\Tests;

use Wheregroup\XML\Util\Parser;

/**
 * Test
 */
class ParsingTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return array
     */
    public function testParseAndConvertToObject()
    {
        $filePath = "vendor/opengis/wfs/2.0.2/examples/GetCapabilities/GetCapabilities_Res_02.xml";
        $xml      = file_get_contents($filePath);
        $rawArray = Parser::castXml($xml);
        $this->assertTrue(is_array($rawArray));
    }
}
