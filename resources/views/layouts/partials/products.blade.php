
 <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
  
    <!-- The slideshow -->
    <div class="carousel-inner" id="image_1">
      <div class="carousel-item active">
        <img src="/storage/images/main_background.jpg" alt="Los Angeles" class="img-fluid">
      </div>
      <div class="carousel-item" id="image_1">
        <img src="/storage/images/main_background.jpg" alt="Chicago" class="img-fluid">
      </div>
      <div class="carousel-item" id="image_1">
        <img src="/storage/images/main_background.jpg" alt="New York" class="img-fluid">
      </div>
    </div>
 </div>

<div class="album py-5 ">
  <div class="container">
    <div class="row">
      @foreach($products as $product)
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm bg-dark text-white">
          <img class="card-img-top img-thumbnail" src="{{ asset('storage/'. $product->thumbnail)}}">
          <div class="card-body">
            <h4 class="card-title">{{ $product->title }}</h4>
            <p class="card-text">{!! substr($product->description,0, 30 ) !!}</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a type="button" class="btn btn-sm btn-dark" href="{{route('products.single', $product)}}">View Product</a>
                <a type="button" href="{{route('products.addToCart', $product)}}" class="btn btn-sm btn-dark">Add to Cart</a>
              </div>
              <small class="text-muted">9 mins</small>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
      <div class="row">
        <div class="col-md-12">
          {{ $products->links() }}
        </div>
      </div>
  </div>
</div>