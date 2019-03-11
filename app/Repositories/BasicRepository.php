<?php
/**
 * Created by PhpStorm.
 * User: ipeople
 * Date: 23.01.19
 * Time: 11:05
 */
namespace App\Repositories;

interface BasicRepository
{

    public function get($arr);
    public function getAll();
    public function getByValue($field,$value);
    public function getByArray($arr);
    public function update($arr);
    public function delete($id);
    public function post($arr);

}