<?php
namespace Core\Domain\Repositories;

use Core\Domain\Contracts\TagRepositoryInterface;
use App\Models\Tag;

class TagRepository implements TagRepositoryInterface
{
	
	public function getAll()
    {
    	return Tag::all();
    }

}