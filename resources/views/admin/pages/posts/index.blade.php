@extends('admin.layouts.table-master')
@section('title', 'All Post')
@section('body')
    <section class="section">
        <div class="section-header">
            <h1>Posts</h1>
            <div class="section-header-button">
                <a href="{{ route('posts.create') }}" class="btn btn-primary">Add New</a>
            </div>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Posts</a></div>
                <div class="breadcrumb-item">All Posts</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Posts</h2>
            <p class="section-lead">
                You can manage all posts, such as editing, deleting and more.
            </p>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>@yield('title')</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-2">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                                                    <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Author</th>
                                            <th>Created At</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($posts as $post)
                                            <tr>
                                                <td>
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup"
                                                            class="custom-control-input" id="checkbox-1">
                                                        <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td>{{ $post->title }}
                                                    <div class="table-links">
                                                        <a href="{{ route('posts.show', $post->slug) }}">View</a>
                                                        <div class="bullet"></div>
                                                        <a href="{{ route('posts.edit', $post->slug) }}">Edit</a>
                                                        <div class="bullet"></div>
                                                        {!! Form::open([
                                                            'style' => 'display:inline-block',
                                                            'method' => 'DELETE',
                                                            'onsubmit' => "return confirm('Are you sure?');",
                                                            'route' => ['posts.destroy', $post->id]]) !!}
                                                            {!! Form::button('Trash', ['type' => 'submit', 'class' => 'text-danger', 'style' => 'border:none; background: none;']) !!}
                                                        {!! Form::close() !!}
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{ route('categories.show', $post->category->slug) }}">{{ $post->category->name }}</a>
                                                </td>
                                                <td>
                                                    <a href="#">
                                                        <img alt="image" src="{{ $post->author->gravatar() }}" class="rounded-circle" width="35" data-toggle="title" title="">
                                                        <div class="d-inline-block ml-1">{{ $post->author->name }}</div>
                                                    </a>
                                                </td>
                                                <td>{{ $post->created_at->format('Y-m-d') }}</td>
                                                <td>
                                                    <div class="badge badge-primary">Published</div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
