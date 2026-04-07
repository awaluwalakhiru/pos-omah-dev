<?php

if (!function_exists('formatPrice')) {

    /**
     * formatPrice
     *
     * @param  mixed $price
     * @return void
     */
    function formatPrice($price)
    {
        return number_format($price, 2, ',', '.');
    }
}

if (!function_exists('queryExact')) {
    /**
     * queryExact
     *
     * @param  mixed $q
     * @return void
     */
    function queryExact($q)
    {
        return addcslashes($q, '%_\\');
    }
}

if (!function_exists('queryContains')) {
    /**
     * queryContains
     *
     * @param  mixed $q
     * @return void
     */
    function queryContains($q)
    {
        return '%' . queryExact($q) . '%';
    }
}

if (!function_exists('queryStartsWith')) {
    /**
     * queryStartsWith
     *
     * @param  mixed $q
     * @return void
     */
    function queryStartsWith($q)
    {
        return queryExact($q) . '%';
    }
}

if (!function_exists('queryEndsWith')) {
    /**
     * queryEndsWith
     *
     * @param  mixed $q
     * @return void
     */
    function queryEndsWith($q)
    {
        return '%' . queryExact($q);
    }
}
