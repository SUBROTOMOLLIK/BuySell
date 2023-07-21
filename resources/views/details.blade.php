@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-3" style="max-width: 960px; margin: 0 auto;">
        <div class="row g-0">
          <div class="col-md-7">
            <img src="{{asset('storage/'.$product->image)}}" style="width:100%;height:100%;" alt="product-details">
          </div>
          <div class="col-md-5">
            <div class="card-body h-100">
              <h4 class="card-title mt-5"><b>Price: ${{$product->price}}</b></h4><hr>
              <div class="mt-2"><h5><b>Seller Information</b></h5></div>
              {{-- <p class="card-title">Price:<del>$30.00</del><b>$19.00</b> <b style="background: rgb(252, 80, 80); padding:3px;border-radius: 5px;">-10%</b>---></p> --}}
              <div class="row m-0">
                <img src="{{asset('storage/avatar.jpg')}}" class="rounded-circle" style=" margin-right:8px;width:'50px';height:'50px;" alt="seller-image">
                <div>
                  <h5 class="m-0">{{$product->seller->name}}</h5>
                  <div>{{$product->seller->address}}</div>
                </div>
              </div>
              <div class="my-4">
                @guest
                    <h5><b>Contact Details <a href="/login">[Login View]</a> </b> </h5>
                    <div> Email:xxxxx@xxxx</div>
                    <div> Phone:xxxxxxxxxx</div>
                  @else
                    <h5><b> Contact Details </b></h5>
                    <div>Email: {{$product->seller->email}}</div>
                    <div>Phone: {{$product->seller->number}}</div>

                @endguest
              </div>

              <div class="mb-4">
                <h5>Sefty Tips For Seller</h5>
                <p>Meet seller a safe location.Check the item you buy.pay onley for collecting item</p>
              </div>
              
              <div>
                <a href="#" class="btn btn-primary " style="margin-right:8px;" role="button md" data-bs-toggle="button">Add to Card</a>
                {{-- <a href="#" class="btn btn-danger" role="button sm" data-bs-toggle="button">Buy</a> --}}
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="card mb-3" style="max-width: 960px; margin: 0 auto;">
        <div class="card-body">
        <h1 class="card-title" style="font-size:24px; font-wight:700;margin-bottom:16px;">{{$product->title}}</h1>
        <p class="card-text" style="font-size:17px; line-height:1.5; word-spacing:6px; color:rgb(63, 59, 59);">{{$product->description}}</p>
        </div>
    </div>  
</div>
@endsection