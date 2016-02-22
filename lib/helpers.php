<?php

namespace fewture;

    /**
     * A bunch of helper functions to make development easier
     */

/**
 * Print $var using print_r if $var is an array or var_dump if it is not. Then die.
 * @param mixed $var Variable to dump
 */
function dd($var) {
    vd($var);
    die();
}

/**
 * Print $var using print_r if $var is an array or var_dump if it is not. Wrapped in <pre>
 * @param mixed $var
 * @param string $before
 * @param string $after
 */
function vd($var, $before = '', $after = '') {

    echo $before;
    echo '<pre>';

    if(is_array($var)) {
        print_r($var);
    } else {
        var_dump($var);
    }

    echo '</pre>';
    echo $after;

}