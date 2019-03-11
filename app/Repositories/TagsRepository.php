<?php
/**
 * Created by PhpStorm.
 * User: ipeople
 * Date: 23.01.19
 * Time: 11:05
 */
namespace App\Repositories;
use App\Models\Tags;

class TagsRepository implements BasicRepository
{

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
    public function get($arr)
    {
        // TODO: Implement get() method.
    }

    public function getAll()
    {
        return Tags::get();
    }
    public function getByArray($arr)
    {
        // TODO: Implement getByArray() method.
    }
    public function getByValue($field, $value)
    {
        // TODO: Implement getByValue() method.
    }
    public function post($arr)
    {
        // TODO: Implement post() method.
    }
    public function update($arr)
    {
        // TODO: Implement update() method.
    }
}