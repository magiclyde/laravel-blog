<?php
namespace Core\Domain\Repositories;

use Core\Domain\Contracts\PostRepositoryInterface;
use App\Models\Post;

class PostRepository implements PostRepositoryInterface
{
	
    public function getAll($count = 10)
    {
        return Post::orderBy('updated_at', 'desc')->paginate($count);
    }

    public function getHotPosts($count = 10)
    {
        return Post::where('is_publish', '=', 1)
                ->select('title', 'slug', 'author', 'marked_html', 'comment_count', 'visit_count', 'published_at')
                ->orderBy('visit_count', 'desc')
                ->take($count)
                ->get();
    }

	public function getLatestPosts($count = 20)
    {
    	return Post::where('is_publish', '=', 1)->orderBy('created_at', 'desc')->simplePaginate($count);
    }

    public function getBySlug($slug)
    {
    	return Post::where('slug', '=', $slug)->first();
    }

    public function getById($id)
    {
        return Post::find($id);
    }

    public function create(array $data)
    {
        $post = new Post();
        $post->title = $data['title'];
        $post->slug = !empty($data['slug'])? $data['slug'] : str_slug($data['title']);
        $post->is_publish = isset($data['is_publish'])? intval($data['is_publish']) : 0;
        $post->content = $data['content'];
        $post->marked_html = markdown_parse($data['content']);
        $post->published_at = $data['published_at'];
        $result = $post->save();

        return $result;
    }

    public function update($id, array $data)
    {
        return Post::where('id', '=', $id)->update($data);
    }

    public function delete($id)
    {
        $post = Post::find($id);
        return $post->delete();
    }
}