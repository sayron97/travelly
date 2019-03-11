<?php
/**
 * Created by PhpStorm.
 * User: ipeople
 * Date: 23.01.19
 * Time: 11:05
 */
namespace App\Repositories;
use App\Models\Products;
use Illuminate\Support\Facades\DB;

class ProductRepository implements BasicRepository,ProductsInterface
{
    public function update($arr)
    {
        // TODO: Implement update() method.
    }
    public function post($arr)
    {
        // TODO: Implement post() method.
    }
    public function getByValue($field, $value)
    {
        $products = DB::table('product')
            ->join('connection_images', 'product.id', '=', 'connection_images.product_id')
            ->join('images', 'connection_images.img_id', '=', 'images.id')
            ->where('product.id',$value)
            ->get();
        return $products;
    }
    public function getByArray($arr)
    {
        // TODO: Implement getByArray() method.
    }
    public function getAll()
    {
        $products = DB::table('product')
            ->join('images', 'product.main_img', '=', 'images.id')
            ->get();
        return $products;
    }
    public function get($arr)
    {
        $products = DB::table('product')
            ->where('product.id',$arr['id'])
            ->join('images', 'product.main_img', '=', 'images.id')
            ->get();
        return $products;
    }
    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
    public function getTopRated()
    {
        $products = DB::table('product')
            ->join('images', 'product.main_img', '=', 'images.id')
            ->orderBy('rating', 'desc')
            ->get();
        return $products;
    }
    public function getTopSales()
    {
        $products = DB::table('product')
            ->join('images', 'product.main_img', '=', 'images.id')
            ->where('is_hot', '1')
            ->get();
        return $products;
    }
}