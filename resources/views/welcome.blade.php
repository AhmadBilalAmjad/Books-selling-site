@extends('layouts.app')
@section('content')

    {{-- Text Section --}}
    <div class="back_img row">
        <div class="col-12">
            <div class="py-2 text-center" id="typed_js">
                <div id="typed-strings" >
                    <p class="lead">Welcome To <strong>KeyToSuccess</strong></p>
                    <p class="lead"><em>Here You Find <b>Books Related</b> To</em></p>
                    <p class="lead"><b>Technology</b></p>
                    <p class="lead"><b>Mystery</b></p>
                    <p class="lead"><b>Fun</b></p>
                    <p class="lead"><b>And Many More...</b></p>
                </div>
                <span id="typed" style="font-size:4em; color:white;" class="adjust_font_typed"></span>
            </div>
        </div>
    </div>
    
    {{-- E-Books Heading --}}

    <div class="row my-4 bg-dark text-light text-center ">
        <div class="col-12">
            <b class="h2">Trending E-Books</b>
        </div>
    </div>

    {{--First Section --}}
    
    <div class="container d-md-flex justify-content-around mt-4">   
        @foreach($products as $product) 
            @if($product->title == 'Programming with python' || $product->title == 'Program with JS' || $product->title == 'Django')
            <div class="card">
                <div class="card-header bg-dark text-light text-center">
                    <div class="card-title ">
                        {{$product->title}}
                    </div>
                </div>
                <div class="card-body">
                    <img src="{{asset('storage/'.$product->thumbnail)}}" class="img-fluid rounded mx-auto d-block" width="200px" height="200px ">
                </div>
                <div class="card-footer bg-dark text-light">
                    <small>{{$product->price}}</small>
                    <small class="float-right">
                        <a type="button" href="{{route('products.addToCart', $product)}}" class="btn btn-sm btn-dark" >Add to Cart
                        <i class="fas fa-cart-plus float-right mr-2" style="font-size:1.5em;"></i></a>
                    </small>
                </div>
            </div>
            @endif
        @endforeach
    </div>
    

    {{-- New Books Heading --}}

     <div class="row my-4 bg-dark text-light text-center">
        <div class="col-12">
            <b class="h2">Trending New Books</b>
        </div>
    </div>
    
    {{--Second Section --}}
    
    <div class="container d-md-flex justify-content-around mt-4">   
        @foreach($products as $product) 
            @if ($product->title == 'Flask' || $product->title == 'Python' || $product->title == 'PHP')
            <div class="card">
                <div class="card-header bg-dark text-light text-center">
                    <div class="card-title ">
                        {{$product->title}}
                    </div>
                </div>
                <div class="card-body">
                    <img src="{{asset('storage/'.$product->thumbnail)}}" class="img-fluid rounded mx-auto d-block" width="200px" height="200px ">
                </div>
                <div class="card-footer bg-dark text-light">
                    <small>{{$product->price}}</small>
                    <small class="float-right">
                        <a type="button" href="{{route('products.addToCart', $product)}}" class="btn btn-sm btn-dark"  data-toggle="modal" data-target="#myModal">Add to Cart
                        <i class="fas fa-cart-plus float-right mr-2" style="font-size:1.5em;"></i></a>
                    </small>
                </div>
            </div>
            @endif
        @endforeach
    </div>


    {{-- Parallax Effect --}}
    <div class="mid_image_effect"></div>

    {{-- Used Books Heading --}}

    <div class="row my-4 bg-dark text-light text-center">
        <div class="col-12">
            <b class="h2">Trending Used Books</b>
        </div>
    </div>
        
    {{--Third Section --}}
        
    <div class="container d-md-flex justify-content-around mt-4">   
        @foreach($products as $product) 
            @if ($product->title == 'Ruby' || $product->title == 'Kotlin' || $product->title == 'C++')
            <div class="card">
                <div class="card-header bg-dark text-light text-center">
                    <div class="card-title ">
                        {{$product->title}}
                    </div>
                </div>
                <div class="card-body">
                    <img src="{{asset('storage/'.$product->thumbnail)}}" class="img-fluid rounded mx-auto d-block" width="200px" height="200px ">
                </div>
                <div class="card-footer bg-dark text-light">
                    <small>{{$product->price}}</small>
                    <small class="float-right">
                        <a type="button" href="{{route('products.addToCart', $product)}}" class="btn btn-sm btn-dark"  data-toggle="modal" data-target="#myModal">Add to Cart
                        <i class="fas fa-cart-plus float-right mr-2" style="font-size:1.5em;"></i></a>
                    </small>
                </div>
            </div>
            @endif
        @endforeach
    </div>


@endsection







