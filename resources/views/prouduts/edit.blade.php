@extends('layouts.master_layout')
@section('main')
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 d-flex justify-content-center ">
                <div class="card ">
                    <div class="card-header">
                        Edit {{ $item->title }}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Update</h5>
                        <form action="{{ route('product.update',["id"=>$item->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Title</label>
                                <input type="text" class="form-control" placeholder="Product title" name="title"
                                    value="{{ old('title', $item?->title) }}" required>
                                @if ($errors->has('title'))
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                @else
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                        anyone else.</small>
                                @endif


                            </div>



                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Product Description</label>
                                <textarea class="form-control" name="desc" rows="3">{{ old('desc', $item->desc) }}</textarea>

                                @error('desc')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror


                            </div>
                            <div class="form-group">
                                <label for="file-input">Product Image</label>
                                <input type="file" class="form-control" name="image" id="file-input" onchange="showImage()">
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror



                            </div>
                            <div  class="mt-2">
                              <img src="{{ asset('storage/images/'.$item->image) }}" id="preview-image" height="100" width="100" alt="">
                            </div>
                            <div class="form-group mt-3">
                                <input type="hidden" name="status" value="0">
                                <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1"
                                    name="status" {{ $item->status == '1' ? 'checked' : '' }}>
                                <label class="form-check-label" for="defaultCheck1">
                                    Active
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Update</button>
                        </form>

                    </div>
                    <div class="card-footer text-muted">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function showImage() {
            const fileInput = document.getElementById('file-input');

            const previewImage = document.getElementById('preview-image');

             //consol
                if (event.target.files.length > 0) {
                    previewImage.src = URL.createObjectURL(
                        event.target.files[0],
                    );

                   // previewImage.style.display = 'block';
                }





        }
    </script>
@endsection
