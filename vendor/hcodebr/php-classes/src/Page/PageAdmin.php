<?php

namespace Hcode\Page;

class PageAdmin extends Page{
    public function __construct(array $opts = array(), string $tpl_adminDir = "views/admin/")
    {
        parent::__construct($opts, $tpl_adminDir);
    }
}