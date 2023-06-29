@extends('layouts.main')


@section('container')
    <div class="d-flex justify-content-center flex-column align-items-center">
        <div class="card" style="width: 18rem;">
            <img src="img/{{ $image }}" class="card-img-top" alt="{{ $name }}">
            <div class="card-body">
              <h5 class="card-title"><b>{{ $name }}</b></h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><b>{{ $email }}</b></li>
            </ul>
          </div>
    </div>
@endsection