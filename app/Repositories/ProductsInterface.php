<?php
/**
 * Created by PhpStorm.
 * User: ipeople
 * Date: 29.01.19
 * Time: 15:31
 */

namespace App\Repositories;


interface ProductsInterface
{
    public function getTopSales();
    public function getTopRated();
}