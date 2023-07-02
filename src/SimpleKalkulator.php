<?php
 
namespace Aslanasilon\Kalkulator;
 
/**
 * Basic Calculator.
 * 
 */
class SimpleKalkulator
{
    /**
     * Menjumlahkan semua data dalam sebuah array.
     *
     * @param array $data
     * @return integer
     */
    public static function penjumlahan(array $data)
    {
        return array_sum($data);
    }
}