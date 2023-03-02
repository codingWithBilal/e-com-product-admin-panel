@extends('admin.layout.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('admin-product-edit',['seo'=> $product->seo->first->permalink])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="nameInput">Name</label>
                    <input type="text" class="form-control" required id="nameInput" name="name" value="{{ $product->name }}" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="nameInput">price</label>
                    <input type="text" class="form-control" required id="nameInput" name="price" value="{{ $product->price}}" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="nameInput">Image</label>
                    <div class="row">
                        <div class="col-9">
                            <input type="file" class="form-control" id="nameInput" name="image" placeholder="Enter Name">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('product/image/'.$product->image)}}" alt="" class="img-fluid rounded" width="100" height="100">
                        </div>
                    </div>
                    
                    
                  </div>
                  <div class="form-group">
                  <label>Select Multiple Addon Category</label>
                  <select class="select2" multiple="multiple" name="addon_category[]" required data-placeholder="Select a State" style="width: 100%;">
                        @foreach($addonCategories as $addon)
                            <option value="{{ $addon->id }} ">{{ $addon->name }}</option>
                        @endforeach
                        @foreach($product->addonsCategoryData as $addon)
                            <option selected value="{{ $addon->id }} ">{{ $addon->name }}</option>
                        @endforeach
                  </select>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection