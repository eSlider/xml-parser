<?php
namespace Eslider\XML\Util;

/**
 *
 * @author Andriy Oblivantsev <eslider@gmail.com>
 */
class Parser
{
    /**
     * Loads XML and kills namespaces in the process.
     * It allows easy usage of namespaced XML code.
     *
     * - NameSpaced tags are renamed from <ns:tag to <ns_tag.
     * - NameSpaced tags are renamed from </ns:tag> to </ns_tag>.
     * - NameSpaced attributes are renamed from ns:tag=... to ns_tag=....
     *
     * @param string $xml     XML string
     * @param string $sxclass XML class name
     * @param bool   $nsattr
     * @param int    $flags
     * @return \SimpleXMLElement
     */
    public static function cleanXmlFromNamespaces($xml, $sxclass = 'SimpleXMLElement', $nsattr = false, $flags = null)
    {
        // Let's drop namespace definitions
        if (stripos($xml, 'xmlns=') !== false) {
            $xml = preg_replace('~[\s]+xmlns=[\'"].+?[\'"]~i', null, $xml);
        }

        // I know this looks kind of funny but it changes namespaced attributes
        if (preg_match_all('~xmlns:([a-z0-9]+)=~i', $xml, $matches)) {
            foreach (($namespaces = array_unique($matches[1])) as $namespace) {
                $escapedNS = preg_quote($namespace, '~');
                $xml       = preg_replace('~[\s]xmlns:' . $escapedNS . '=[\'].+?[\']~i', null, $xml);
                $xml       = preg_replace('~[\s]xmlns:' . $escapedNS . '=["].+?["]~i', null, $xml);
                $xml       = preg_replace('~([\'"\s])' . $escapedNS . ':~i', '$1' . $namespace . '_', $xml);
            }
        }
        // Let's change <namespace:tag to <namespace_tag ns="namespace"
        $regexFrom = sprintf('~<([a-z0-9]+):%s~is', !empty($nsattr) ? '([a-z0-9]+)' : null);
        $regexTo   = strlen($nsattr) ? '<$1_$2 ' . $nsattr . '="$1"' : '<$1_';
        $xml       = preg_replace($regexFrom, $regexTo, $xml);

        // Let's change </namespace:tag> to </namespace_tag>
        $xml = preg_replace('~</([a-z0-9]+):~is', '</$1_', $xml);

        // Default flags I use
        if (empty($flags)) {
            $flags = LIBXML_COMPACT | LIBXML_NOBLANKS | LIBXML_NOCDATA;
        }

        // Now load and return (namespaceless)
        return $xml = simplexml_load_string($xml, $sxclass, $flags);
    }

    /**
     * Convert XML string to array and cast it to given class.
     *
     * @param string      $xml       XML string
     * @param string|null $className Class name
     * @return mixed
     */
    public static function castXml($xml, $className = null)
    {
        $result = self::convertXmlToSimpleArray($xml);

        if ($className) {
            $result = new $className($result);
        }

        return $result;
    }

    /**
     * @param $xmlElement
     * @return mixed
     */
    public static function object2array($xmlElement)
    {
        return json_decode(json_encode($xmlElement), true);
    }

    /**
     * Convert XML string to array with hierarchical strucure
     *
     * @param $xml
     * @return array
     */
    public static function convertXmlToSimpleArray($xml)
    {
        return self::object2array(self::cleanXmlFromNamespaces($xml));
    }
}
