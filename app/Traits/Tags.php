<?php
/**
 * Created by PhpStorm.
 * User: ipeople
 * Date: 23.01.19
 * Time: 11:06
 */
namespace App\Traits;

use App\Repositories\TagsRepository;

trait Tags
{

    private $tagsRepo;

    public function __construct()
    {
        $this->tagsRepo = new TagsRepository();
    }

    public function getAllTags()
    {
        return $this->tagsRepo->getAll();
    }

}