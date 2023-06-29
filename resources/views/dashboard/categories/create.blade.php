@extends('dashboard.layouts.main')


@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create new category</h1>
</div>

<form action="/dashboard/categories" action="post">
    @csrf
    <div class="mb-3 col-lg-6" >
        <label for="category" class="form-label">New Category</label>
        <input type="text" class="form-control" id="category" name="category">
    </div>
    <button type="submit" class="btn btn-primary">Crate category</button>
</form>

<div class="col-lg-4 mt-5">
    <ol class="list-group list-group-numbered">
        @foreach ($categories as $category)
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
              <div class="fw-bold">{{ $category->name }}</div>
            </div>
            <span class="badge bg-primary rounded-pill">{{ $category->posts_count }}</span>
          </li>
        @endforeach
      </ol>
</div>
   

@endsection