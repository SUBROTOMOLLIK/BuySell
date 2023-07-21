@extends('layouts.app')

@section('content')
      <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
          @if(count($product)>0)
            @foreach ($product as $item)
                <div class="col">
                  <div class="card mb-3">
                    <img src="{{asset('storage/'.$item->image)}}" class="card-img-top" alt="product-image">
                    <div class="card-body">
                      <h5 class="card-title" style="font-size:1.6rem;">{{$item->title}}</h5>
                      <p class="card-text " style="font-size:17px;">{{ Str::limit($item->description, 40 ,'...')}}</p>
                    </div>
                    <div class="card-footer">
                      <p class="card-text d-inline float-left">Price:<span class="px-2" style="font-weight:bolder">${{$item->price}}</span></p>
                      <a href="/details/{{$item->id}}" style="float:right; color:primary; font-size:17px;">View Detiles</a>
                    </div>
                  </div>
                </div>
            @endforeach
          @endif
        </div>
        <div class="w-100 justify-content-center d-flex py-5">{{ $product->links()}}</div>
      </div>
@endsection






