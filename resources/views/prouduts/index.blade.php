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
                <th>Status</th>
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
                <td>
                    @if ($item->status=='1')
                        Activated
                    @else
                        Deactivated
                    @endif
                </td>
                <td>{{ $item->created_at->diffForHumans() }}</td>
                <td>
                    <a href="{{ route('product.edit', $item->id ) }}" class="btn btn-info">Edit</a>
                    <a href="{{ route('product.status',['id'=>$item->id]) }}" onclick="return confirm('Are sure to change status of this product?')" class="btn {{ $item->status=='1'?'btn-warning':'btn-success' }}">@if ($item->status=='1')
                        Deactive
                    @else
                        Active
                    @endif</a>
                    <a href="{{ route('product.delete',['id'=>$item->id]) }}" onclick="return confirm('Are you really want to delete ')" class="btn btn-danger">Delete</a>
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
