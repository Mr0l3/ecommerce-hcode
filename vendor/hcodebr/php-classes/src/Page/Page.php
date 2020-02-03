<?php

namespace Hcode\Page;
use Rain\Tpl;

class Page{
    
    private $tpl;
    private $options = array();
    private $default = array(
        "data" => array()
    );


    public function __construct($opts = array())
    {
        $this->options = array_merge($this->default, $opts);

        $config = array(
            "tpl_dir"      => $_SERVER["DOCUMENT_ROOT"] . "views/",
            "cache_dir"    => $_SERVER["DOCUMENT_ROOT"] . "views-cache/",
            "debug"        => false
        );
        
        Tpl::configure($config);
        
        $this->tpl = new Tpl();

        $this->setData($this->options["data"]);

        $this->tpl->draw("header");
    }


    public function setTpl(string $tplName, $data = array(), bool $returnHTML = false)
    {
        $this->setData($data);
        if($returnHTML){
            return $this->tpl->draw($tplName, true);
        }else{
            $this->tpl->draw($tplName);
        }
    }


    private function setData($data = array())
    {
        foreach($data as $key => $value){
            $this->tpl->assign($key, $value);
        }
    }


    public function __destruct()
    {
        $this->tpl->draw("footer");
    }
}
