<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\{Post, Category, Tag};

class PostController extends Controller
{
    public function index()
    {
        return view('admin.pages.posts.index', [
            'posts' => Post::latest()->paginate(10),
        ]);
    }

    public function show(Post $post)
    {
        $posts = Post::where('category_id', $post->category_id)->latest()->limit(6)->get();
        return view('admin.pages.posts.show', compact('post', 'posts'));
    }

    public function create()
    {
        return view('admin.pages.posts.create', [
                'post' => new Post(),
                'categories' => Category::get(),
                'tags' => Tag::get()
            ]);
    }

    public function store(PostRequest $request)
    {
        // $post = new Post;
        // $post->title = $request->title;
        // $post->slug = \Str::slug($request->title);
        // $post->body = $request->body;
        // $post->save();

        // Post::create([
        //     'title' => $request->title,
        //     'slug' => \Str::slug($request->title),
        //     'body' => $request->body,
        // ]);

        $attr = $request->all();

        $slug = \Str::slug(request('title')) . '-' . dechex(time());
        $attr['slug'] = $slug;

        $thumbnail = request()->file('thumbnail');
        if ($thumbnail) {
            $thumbnailUrl = $thumbnail->storeAs("images/posts", "{$slug}.{$thumbnail->extension()}");
        } else {
            $thumbnailUrl = null;
        }

        $attr['category_id'] = request('category');
        $attr['thumbnail'] = $thumbnailUrl;


        // Create new post
        $post = auth()->user()->posts()->create($attr);

        $post->tags()->attach(request('tags'));

        session()->flash('error', 'The post was created');
        // session()->flash('error', 'The post was created');

        // return back();
        return redirect()->to('posts');
    }

    public function edit(Post $post)
    {
        return view('admin.pages.posts.edit', [
            'post' => $post,
            'categories' => Category::get(),
            'tags' => Tag::get(),
        ]);
    }

    public function update(PostRequest $request, Post $post)
    {
        $this->authorize('update', $post);

        $attr = $request->all();

        $slug = \Str::slug(request('title')) . '-' . dechex(time());

        $thumbnail = request()->file('thumbnail');
        if ($thumbnail) {
            \Storage::delete($post->thumbnail);
            $thumbnailUrl = $thumbnail->storeAs("images/posts", "{$slug}.{$thumbnail->extension()}");
        } else {
            $thumbnailUrl = $post->thumbnail;
        }

        $attr['category_id'] = request('category');
        $attr['thumbnail'] = $thumbnailUrl;

        $post->update($attr);
        $post->tags()->sync(request('tags'));

        session()->flash('success', 'The post was updated');

        return redirect()->to('posts');
    }

    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);

        \Storage::delete($post->thumbnail);
        $post->tags()->detach();
        $post->delete();

        session()->flash('success', 'The post was destroyed');
        return redirect('posts');
    }
}
