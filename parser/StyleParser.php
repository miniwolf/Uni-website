<?php
namespace parser;
/**
 * Created by PhpStorm.
 * User: miniwolf
 * Date: 22-09-2016
 * Time: 22:38
 */
class StyleParser {
    static function parse($styleArray, $root) {
        if ( $styleArray == '' ) {
            return "";
        }
        $styleRes = "";
        foreach ($styleArray as $string) {
            $styleRes .= '<link href="' . $root . 'css/' . $string . '" type="text/css" rel="stylesheet"/>' . "\n";
        }
        return $styleRes;
    }
}