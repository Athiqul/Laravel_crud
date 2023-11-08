@extends('layouts.master_layout')

@section('main')
<div class="container">
    <div class="row ms-auto">
        <div class="col-sm-4 mt-5">
            <a href="{{route('product.create')}}" class="btn btn-primary">Add New Product</a>
        </div>

    </div>
</div>

@endsection
