@extends('layouts.app')
@section('content')
<div class="container">
    <div style="max-width: 660px; margin: 0 auto;">
    <div class="card w-100 p-5">
        <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="product" class="col-sm-3 col-form-label">Product Title</label>
                <div class="col-sm-9">
                    <input type="text" id="product" name="title" class="form-control" placeholder="Product Title">
                </div>
            </div>

            <div class="form-group row">
                <label for="price" class="col-sm-3 col-form-label">Price</label>
                <div class="col-sm-9">
                    <input type="number" id="price" name="price" class="form-control" placeholder="Price">
                </div>
            </div>

            <div class="form-group row">
                <label for="details" class="col-sm-3 col-form-label">Product Details</label>
                <div class="col-sm-9">
                    <textarea type="text" id="details" name="details" class="form-control" placeholder="Product Details"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="images" class="col-sm-3 col-form-label">Product Image</label>
                <div class="col-sm-9">
                    <input type="file" id="images" name="image">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-sm-3 col-sm-9">
                    <button type="submit" class="btn btn-primary">Save Product</button>
                </div>
            </div>
        </form>
    </div>
    </div>
</div> 
@endsection