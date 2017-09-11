<?php
namespace Core\Domain\Services;

use Core\Domain\Contracts\PostRepositoryInterface;
use Core\Domain\Contracts\TagRepositoryInterface;
use Illuminate\Http\Request;


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
		return $this->post->getLatestPosts($count);
	}

	public function getPostById($id)
	{
		return $this->post->getById($id);
	}

	public function getPostBySlug($slug)
	{
		return $this->post->getBySlug($slug);
	}

	public function getAllPost()
	{
		return $this->post->getAll();
	}

	public function createPost(Request $request)
	{
		return $this->post->create($request->all());
	}

	public function updatePost($id, array $data)
	{
		return $this->post->update($id, $data);
	}

	public function removePost($id)
	{
		return $this->post->delete($id);
	}

	public function getAllTag()
	{
		return $this->tag->getAll();
	}
}
