<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('usia'))
{
 function usia($date) { 
        $tahun = substr($date, 0, 4); // memisahkan format tahun menggunakan substring
        $sekarang=date('Y');
        $result = $sekarang-$tahun;
        return $result;
}
}