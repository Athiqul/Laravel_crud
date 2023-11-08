@extends('layouts.master_layout')
@section('main')
<div class="container">
    <div class="row mt-5" >
        <div class="col-12 d-flex justify-content-center ">
            <div class="card ">
                <div class="card-header">
                  Add New Product
                </div>
                <div class="card-body">
                  <h5 class="card-title">Add Item into system</h5>
                  <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Product Title</label>
                      <input type="text" class="form-control"  placeholder="Product title" name="title" value="{{old('title')}}" required>
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>



                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Product Description</label>
                        <textarea class="form-control" name="desc" required rows="3">{{old('desc')}}</textarea>
                      </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Product Image</label>
                        <input type="file" class="form-control" name="image" id="exampleFormControlFile1">
                      </div>
                      <div class="form-group mt-3">
                        <input type="hidden" name="status" value="0">
                        <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name="status" checked>
                        <label class="form-check-label" for="defaultCheck1">
                          Active
                        </label>
                      </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                  </form>

                </div>
                <div class="card-footer text-muted">

                </div>
              </div>
        </div>
    </div>
</div>
@endsection
