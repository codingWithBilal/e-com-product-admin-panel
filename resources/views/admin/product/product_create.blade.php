@extends('admin.layout.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Create Product</li>
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
                <h3 class="card-title">Create Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('admin-create-product')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="nameInput">Name</label>
                    <input type="text" class="form-control" id="nameInput" name="name" placeholder="Enter Name" required>
                  </div>
                  <div class="form-group">
                    <label for="nameInput">price</label>
                    <input type="text" class="form-control" id="nameInput" name="price" placeholder="Enter Name" required>
                  </div>
                  <div class="form-group">
                    <label for="nameInput">Image</label>
                    <input type="file" class="form-control" id="nameInput" name="image" placeholder="Enter Name" required>
                  </div>
                  <div class="form-group">
                  <label>Select Multiple Addon Category</label>
                  <select class="select2" multiple="multiple" name="addon_category[]"  data-placeholder="Select a State" style="width: 100%;" required>
                        @foreach($addonCategories as $addon)
                            <option value="{{ $addon->id }} ">{{ $addon->name }}</option>
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