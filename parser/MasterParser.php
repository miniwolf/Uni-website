<?php
/**
 * Created by PhpStorm.
 * User: miniwolf
 * Date: 22-09-2016
 * Time: 23:39
 */

namespace parser;

class MasterParser {
    private $links;
    private $root;
    private $desc;
    private $title;

    function __construct($root, $title) {
        $this->root = $root;
        $this->title = $title;
    }

    /**
     * @param array $links list of link file found in css folder
     */
    public function setLinks($links) {
        $this->links = $links;
    }

    /**
     * @param string $desc description for the page
     */
    public function setDesc($desc) {
        $this->desc = $desc;
    }

    public function PrintHeader() {
        print_r('<link rel="stylesheet" type="text/css" href="' . $this->root . '/css/menu.css"/>');
        $this->PrintTitle();
        $this->PrintLinks();
        $this->PrintDescription();
    }

    private function PrintTitle() {
        print_r('<title>MiNiWolF - ' . $this->title .'</title>');
    }

    private function PrintLinks() {
        if ( !is_null($this->links)) {
            print_r(StyleParser::parse($this->links, $this->root));
        }
    }

    private function PrintDescription() {
        if ( !is_null($this->desc) ) {
            print_r('<meta name="description" content="' . $this->desc . '" />');
        }
    }
}