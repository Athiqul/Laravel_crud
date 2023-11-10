@extends('layouts.master_layout')
@section('main')
<div class="container">
    <div class="card text-center">
        <div class="card-header">
         {{ $item->title }}
        </div>
        <div class="card-body">
           <img src="{{ asset('storage/images/'.$item->image) }}"  height="300px" alt="{{ $item->title }}">
          <p class="card-text">{{ $item->desc }}</p>
          <a href="#" class="btn btn-primary">Deactive</a>
        </div>
        <div class="card-footer text-muted">
          {{ $item->created_at }}
        </div>
      </div>
</div>
@endsection
