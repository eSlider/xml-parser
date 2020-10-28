<?php

namespace Eslider\XML\Entity;

use ReflectionClass;
use ReflectionException;

class BaseEntity {
    private ReflectionClass $ref;

    /**
     * BaseEntity constructor.
     *
     * @param array|null $data
     * @throws ReflectionException
     */
    public function __construct(array $data = null)
    {
        if ($data) {
            if (isset($data['@attributes'])) {
                $this->fill($data['@attributes']);
            }
            $this->fill($data);
        }
    }

    protected function toUpperCase($matches)
    {
        return strtoupper($matches[1]);
    }

    /**
     * @param array $data
     * @throws ReflectionException
     */
    protected function fill(array &$data)
    {
        static $className, $methods, $vars, $reflection;
        if (!$className) {
            $className = get_class($this);
            $methods = get_class_methods($className);
            $vars = array_keys(get_class_vars($className));
            $reflection = $this->ref = new ReflectionClass($className);
        }
        foreach ($data as $k => $v) {
            if ($k == "@attributes") {
                continue;
            }

            $methodName = 'set'.ucfirst($k);
            if (in_array($methodName, $methods)) {
                $this->{$methodName}($v);
                continue;
            }

            $methodName = 'set'.ucfirst($this->removeNameSpaceFromVariableName($k));
            if (in_array($methodName, $methods)) {
                $this->{$methodName}($v);
                continue;
            }

            $varName = preg_replace_callback("/[_-](\w)/", fn($matches) => strtoupper($matches[1]), $k);
            if (in_array($varName, $vars)) {
                $this->setProperty($varName, $v);
                continue;
            }

            $varName = lcfirst($this->removeNameSpaceFromVariableName($k));
            if (in_array($varName, $vars)) {
                $this->setProperty($varName, $v);
                continue;
            }

            $varName .= "s";
            if (in_array($varName, $vars)) {
                $docComment = $reflection->getProperty($varName)->getDocComment();
                if ($annotations = self::parse('/@var\s+([\\\]?[A-Z]\S+)(\[\])/s', $docComment)) {
                    $varClassName = $annotations[1];
                    if (class_exists($varClassName)) {
                        $items = array();
                        $isNumeric = is_int(key($v));
                        $list = $isNumeric ? $v : array($v);
                        foreach ($list as $subData) {
                            $items[] = new $varClassName($subData);
                        }
                        $v = $items;
                    }
                }
                $this->{$varName} = $v;
                continue;
            }
        }
    }

    /**
     * @param $name
     * @return mixed
     */
    private function removeNameSpaceFromVariableName($name)
    {
        return preg_replace("/^.+?_/", '', $name);
    }

    /**
     * @param $reg
     * @param $str
     * @return null
     */
    private static function parse($reg, $str)
    {
        $annotations = null;
        preg_match($reg, $str, $annotations);

        return $annotations;
    }

    /**
     * @param string $name Property name
     * @param mixed $value value
     * @throws ReflectionException
     */
    protected function setProperty(string $name, $value)
    {
        $docComment = $this->ref->getProperty($name)->getDocComment();
        // Try to get type and create a instance
        if (preg_match('/@var ([\\\]?[A-Z]\S+)/s', $docComment, $annotations)) {
            $varClassName = $annotations[1];
            if (class_exists($varClassName)) {
                $this->{$name} = new $varClassName($value);
            }
        } else {
            $this->{$name} = $value;
        }
    }
}
