@extends('layouts.front')
@section('content')
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>

    </div>
    <div class="carousel-inner" height=80%>
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption text-start">
            <h1> مرحبا بك في متجرنا</h1>
            <style>
             .pp{
                color: gainsboro;
             }
            </style>
            <p class="pp">نحن هنا لنقدم لك افضل تجربة تسوق استمتع بتشكيلة من المنتجات عالية الجودة.</p>
        </div>
        </div>
      </div>

      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption">
            <h1>منتجات مميزة لك</h1>
            <p>في متجرنا نقدم لك احدث المنتجات لدينا كل ما يناسب ذوقك واحتياجاتك تسوق الان بسهولة وامان!</p>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>عروض لا تفوت</h1>
            <p>استفد من خصومات حصرية و عروض مغرية على افضل المنتجات لا تفوت الفرصة!</p>
          </div>
        </div>
      </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">السابق</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">التالي</span>
          </button>
      </div>


  </div>



  <div class="container marketing">
    <!-- Three columns of text below the carousel -->
    <div class="row">
      @foreach ($products as $product)
      <div class="col-lg-4">
        <h2 class="fw-normal">{{$product->product_name}}</h2>
        <p>{{$product->details}}</p>
        <p>{{$product->price}}$</p>
        <p><a class="btn btn-secondary" href="#">عرض التفاصيل</a></p>
      </div><!-- /.col-lg-4 -->
      @endforeach
    </div><!-- /.row -->


    <hr class="featurette-divider">

  </div><!-- /.container -->
@endsection
