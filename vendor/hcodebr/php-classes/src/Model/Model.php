<?php

namespace Hcode\Model;

class Model{

    private $values = array();

    public function __call($name, $arguments)  // dinamically use setters and getters
    {
        $method = substr($name, 0, 3);
        $field = substr($name, 3, strlen($name) - 3);

        switch ($method) {
            case "get":
                return $this->values[$field];
            break;
            case "set":
                $this->values[$field] = $arguments[0];
            break; 
        }
    }

    
    public function setData($data = array())
    {
        foreach ($data as $key => $value) {
            $this->{"set" . $key}($value);
        }
    }


    public function getData()
    {
        return $this->values;
    }
}