@extends('layouts.master_layout')

@section('main')
<div class="container">
    <div class="row ms-auto">
        <div class="col-sm-4 mt-5">
            <a href="{{route('product.create')}}" class="btn btn-primary">Add New Product</a>
        </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Image</th>
                <th scope="col">Created_at</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
        @forelse ($items as $item)

              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td><a href="{{ route('product.show',$item->id) }}" class="btn-link text-decoration-none">{{ $item->title }}</a> </td>
                <td><img src="{{ asset('storage/images/'.$item->image) }}" alt="{{ $item->title }}" height="60px" width="60px"></td>
                <td>{{ $item->created_at }}</td>
                <td>
                    <a  class="btn btn-info">Edit</a>
                    <a href="http://" class="btn btn-danger">Delete</a>
                </td>
              </tr>


        @empty
    </tbody>
</table>
            <h4>No Products found!</h4>
        @endforelse

    </div>
</div>

@endsection
