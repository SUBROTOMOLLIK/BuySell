@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body text-center">
                      <img src="{{asset('storage/avatar.jpg')}}" class="rounded-circle" style="margin-right:8px; width:50px; height:50px" alt="seller-image">
                      <div class="mt-1"><h5><b>Seller Information</b></h5></div>
                      <div class="my-4">
                        <h5 class="m-0">user</h5>
                        <div>Email: user@gmail.com</div>
                        <div>Phone: 0188938475858</div>
                        <div>Nawabgonj,dhaka</div>
                      </div>
                      <div>
                          <a href="" class="btn btn-primary" data-toggle="button">Edit Profile</a>
                          <a href="#" class="btn btn-primary" data-toggle="button">Seller Post</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
