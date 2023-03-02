@extends('customer.layout.app')
@section('content')
<style>
    .single-product-box-layout1 .product-info .product-content .item-features .item-list li:hover{
       background: pink;
       cursor: pointer;        
    }
</style>
<!--=====================================-->
<!--=        Inner Banner Start         =-->
<!--=====================================-->
<section class="inner-page-banner" data-bg-image="media/banner/banner1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs-area">
                    <h1>{{ $product->name}}</h1>
                    <ul>
                        <li>
                            <a href="{{ route('index')}}">Product</a>
                        </li>
                        <li>{{ $product->name}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
 <!--=====================================-->
<!--=          Product Start         =-->
<!--=====================================-->
<section class="single-product-wrap-layout2 section-padding-equal-70 bg-accent">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="single-product-box-layout1">
                    <div class="product-info light-shadow-bg">
                        <div class="product-content light-box-content">
                            <div class="item-img-gallery">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="gallery1" role="tabpanel">
                                        <a href="#">
                                            <img class="zoom_01" src="{{ asset('product/image/'.$product->image)}}" alt="product" data-zoom-image="{{ asset('product/image/'.$product->image)}}">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade" id="gallery2" role="tabpanel">
                                        <a href="#">
                                            <img class="zoom_01" src="{{ asset('product/image/'.$product->image)}}" alt="product" data-zoom-image="{{ asset('product/image/'.$product->image)}}">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade" id="gallery3" role="tabpanel">
                                        <a href="#">
                                            <img class="zoom_01" src="{{ asset('product/image/'.$product->image)}}" alt="product" data-zoom-image="{{ asset('product/image/'.$product->image)}}">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade" id="gallery4" role="tabpanel">
                                        <a href="#">
                                            <img class="zoom_01" src="{{ asset('product/image/'.$product->image)}}" alt="product" data-zoom-image="{{ asset('product/image/'.$product->image)}}">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade" id="gallery5" role="tabpanel">
                                        <a href="#">
                                            <img class="zoom_01" src="{{ asset('product/image/'.$product->image)}}" alt="product" data-zoom-image="{{ asset('product/image/'.$product->image)}}">
                                        </a>
                                    </div>
                                </div>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#gallery1" role="tab" aria-selected="true">
                                            <img src="{{ asset('product/image/'.$product->image)}}" alt="thumbnail">
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#gallery2" role="tab" aria-selected="false">
                                            <img src="{{ asset('product/image/'.$product->image)}}" alt="thumbnail">
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#gallery3" role="tab" aria-selected="false">
                                            <img src="{{ asset('product/image/'.$product->image)}}" alt="thumbnail">
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#gallery4" role="tab" aria-selected="false">
                                            <img src="{{ asset('product/image/'.$product->image)}}" alt="thumbnail">
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#gallery5" role="tab" aria-selected="false">
                                            <img src="{{ asset('product/image/'.$product->image)}}" alt="thumbnail">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="single-entry-meta">
                                <ul>
                                    <li><i class="far fa-clock"></i>{{ $product->created_at }}</li>
                                   
                                </ul>
                                <div class="item-condition">New</div>
                            </div>
                            <div class="item-price">
                                <span class="currency-symbol">$</span>
                                <span id="price">{{ $product->price }}</span>
                            </div>
                            @foreach($product->addonsCategoryData as $addons)
                            <div class="item-features">
                                <h3 class="item-title">{{$addons->name}}</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="d-flex">
                                           @foreach($addons->addonsData as $addon)
                                            <li class="mx-3"><button class="btn btn-outline-danger" onclick="changePrice({{$addon->id}})")>{{$addon->name}}</button></li>
                                           @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<script>
    function changePrice(id){
        $.ajax({
        url: "{{ route('fetch-price')}}"+'/'+id,
        type: 'GET',
        success: function(res) {
            document.getElementById('price').innerText = res;
        }
    });
    }
</script>
@endsection