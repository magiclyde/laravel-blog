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

	public function updatePost(Request $request)
	{
		$id = $request->input('id');
		$updateArr['title'] = $request->input('title');
		$updateArr['content'] = $request->input('content');
		$updateArr['marked_html'] = markdown_parse($request->input('content'));

		return $this->post->update($id, $updateArr);
	}


	public function getAllTag()
	{
		return $this->tag->getAll();
	}
}
