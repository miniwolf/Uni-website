<?php

/**
 * Created by PhpStorm.
 * User: miniwolf
 * Date: 23-09-2016
 * Time: 00:36
 */
class Menu {
    private $root;

    /**
     * Menu constructor.
     * @param string $root
     */
    public function __construct($root) {
        $this->root = $root;
    }

    public function ConstructMenu() {
        $this->ConstructListElement("Home", "/Uni");
        $this->ConstructListElement("Profile", "/Uni/profile");
    }

    private function ConstructListElement($name, $path) {
        if ( dirname($_SERVER['PHP_SELF']) === $path ) {
            print('<li class="selected">');
        } else {
            print('<li>');
        }
        print_r('<a href="' . $path . '">' . $name . '</a></li>');
    }
}