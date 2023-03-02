@extends('customer.layout.app')
@section('content')
<!--=====================================-->
<!--=        Inner Banner Start         =-->
<!--=====================================-->
<section class="inner-page-banner" data-bg-image="media/banner/banner1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs-area">
                    <h1>All Products</h1>
                    <ul>
                        <li>
                            <a href="">Home</a>
                        </li>
                        <li>All Products</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=====================================-->
<!--=          Product Start         =-->
<!--=====================================-->
<section class="product-inner-wrap-layout1 bg-accent">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="product-filter-heading">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h2 class="item-title">Showing {{ $products->count() }} of {{ $products->count() }} results</h2>
                        </div>
                    </div>
                </div>
                <div  class="product-box-grid">
                    <div class="row">
                        @if(count($products) > 0)
                            @foreach($products as $product)
                            <div class="col-xl-4 col-md-6">
                                <div class="product-grid-view">
                                    <div class="grid-view-layout1">
                                        <div class="product-box-layout1 top-rated-grid">
                                            <div class="item-img">
                                                <a href="{{ route('product',['seo'=> $product->seo->first->permalink]) }}" class="item-trending"><img src="{{ asset('product/image/'.$product->image)}}" alt="Product"></a>
                                            </div>
                                            <div class="item-content">
                                                <h3 class="item-title"><a href="{{ route('product',['seo'=> $product->seo->first->permalink]) }}">{{ $product->name}}</a><span>New</span></h3>
                                                <ul class="entry-meta">
                                                    <li><i class="far fa-clock"></i>{{ $product->created_at }}</li>
                                                    <li><i class="fas fa-map-marker-alt"></i>New Jersey, Cape May</li>
                                                </ul>
                                                <div class="item-price">
                                                    <span class="currency-symbol">$</span>
                                                    {{ $product->price }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @else
                        <h4 class="text-center mt-5">No Product</h4>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection