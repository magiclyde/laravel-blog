<?php
namespace Core\Domain\Services;

use Core\Domain\Contracts\PostRepositoryInterface;
use Core\Domain\Contracts\TagRepositoryInterface;


/**
* keep business logic layer between controller with repos
*/
class MyService 
{
	private $post;

	private $tag;

	function __construct(PostRepositoryInterface $post,
		TagRepositoryInterface $tag)
	{
		$this->post = $post;
		$this->tag = $tag;
	}

	public function getPostList($count = 20)
	{
		return $this->post->getList($count);
	}

	public function getAllTag()
	{
		return $this->tag->getAll();
	}
}
