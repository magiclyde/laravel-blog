<?php
namespace Core\Domain\Repositories;

use Core\Domain\Contracts\PostRepositoryInterface;
use App\Models\Post;

class PostRepository implements PostRepositoryInterface
{
	
	public function getList($count = 20)
    {
    	return Post::where('is_publish', '=', 1)->orderBy('created_at', 'desc')->simplePaginate($count);
    }

    public function getBySlug($slug)
    {
    	return Post::where('slug', '=', $slug)->first();
    }

    public function getHotPosts($count = 10)
    {
    	return Post::where('is_publish', '=', 1)
				->select('title', 'slug' ,'comment_count')
    			->orderBy('visit_count', 'desc')
    			->take($count)
               	->get();
    }
}