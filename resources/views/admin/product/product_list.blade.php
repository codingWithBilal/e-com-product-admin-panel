@extends('admin.layout.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">All Products</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Products</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Image</th>
                      <th>Product Name</th>
                      <th>Price</th>
                      <th>Addon Categories </th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($products as $product)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td><img src="{{ asset('product/image/'.$product->image)}}" alt="" class="img-fluid rounded" width="60" height="60"></td>
                      <td>{{ $product->name }}</td>
                      <td>{{$product->price}}</td>
                      <td>
                        @foreach($product->addonsCategoryData as $addons)
                          <span class="badge bg-success">{{ $addons->name }}</span>
                        @endforeach
                      </td>
                      <td>
                      <a target="_blank" href="{{ route('admin-product-edit',['seo'=> $product->seo->first->permalink])}}"><span class="badge bg-success">Edit</span>
                      <a target="_blank" href="{{ route('product',['seo'=> $product->seo->first->permalink])}}"><span class="badge bg-primary">View</span></a>
                      <a +6}[3+
                      33+href="{{ route('admin-product-delete',['id'=> $product->id])}}"><span class="badge bg-danger">Delete</span></a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                {{ $products->links()}}
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection