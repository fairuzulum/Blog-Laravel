@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8">

                <h1 class="mb-3">{{ $post->title }}</h1>

                <div class="mb-2">
                    <a href="/dashboard/posts" class="badge bg-primary text-decoration-none"><span
                            data-feather="arrow-left"></span> Back
                        myposts</a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning text-decoration-none"><span
                            data-feather="edit"></span> Edit</a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger" onclick="return confirm('are you sure?')"><span
                                data-feather="x-circle"></span>Delete</button>
                    </form>
                </div>
                @if ($post->image)
                <div style="max-height: 350px; overflow: hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}"
                        alt="{{ $post->category->name }}" class="img-fluid">
                </div>
                @else
                    <img src="https:/source.unsplash.com/1200x400?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}" class="img-fluid">
                @endif

                <article class="my-3">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
