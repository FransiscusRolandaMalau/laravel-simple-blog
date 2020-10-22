@extends('layouts.app')
@section('title', 'All Post')
@section('content')
    <div class="container">
        <div class="">
            <div>
                @isset ($category)
                    <h4>Category: {{ $category->name }}</h4>
                @endisset

                @isset ($tag)
                    <h4>Tag: {{ $tag->name }}</h4>
                @endisset

                @if (!isset($tag) && !isset($category))
                    <h4>All Post</h4>
                @endif
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                @forelse ($posts as $post)
                    <div class="card-deck">
                        <div class="card mb-4">
                            @if ($post->thumbnail)
                                <a href="{{ route('posts.show', $post->slug) }}">
                                    <img style="height: 400px; object-fit: cover; object-position: center;" src="{{ $post->takeImage }}" class="card-img-top">
                                </a>
                            @endif
                            <div class="card-body">
                                <a href="{{ route('categories.show', $post->category->slug) }}" class="text-secondary">
                                    <small>{{ $post->category->name }} &middot; </small>
                                </a>

                                @foreach ($post->tags as $tag)
                                    <a href="{{ route('tags.show', $tag->slug) }}" class="text-secondary">
                                        <small>#{{ $tag->name }}</small>
                                    </a>
                                @endforeach
                                <a class="text-dark" href="{{ route('posts.show', $post->slug) }}">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                </a>
                                <div class="my-3 text-secondary">
                                <p class="card-text">{{ Str::limit($post->body, 200, '.') }}</p>

                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <div class="media align-items-center">
                                        <img width="40" class="rounded-circle mr-3" src="{{ $post->author->gravatar() }}">
                                        <div class="media-body">
                                            <div>
                                                {{ $post->author->name }}
                                            </div>
                                        </div>
                                    </div>
                                    <p class="card-text">
                                        <small class="text-muted">Published on {{ $post->created_at->diffForHumans() }}</small>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                @empty
                <div class="col-md-6">
                    <div class="alert alert-info">
                        There are no posts.
                    </div>
                </div>
                @endforelse
            </div>
        </div>
        {{ $posts->links() }}
    </div>
@endsection
