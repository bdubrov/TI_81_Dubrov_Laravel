<?php


namespace App;


class Pages {
    public $page;
    public $lib;
    public function __construct($page, $lib) {
        $this->page = $page;
        $this->lib = $lib;
    }
}
