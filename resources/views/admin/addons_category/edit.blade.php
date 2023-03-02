@extends('admin.layout.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Addons Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Addons Category</li>
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
                <h3 class="card-title">Edit Addons Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('admin-edit-category-addons',['id'=>$addonCategory->id])}}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="nameInput">Name</label>
                    <input type="text" class="form-control" id="nameInput" value="{{ $addonCategory->name}}" name="name" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                  <label>Select Multiple Addon</label>
                  <select class="select2" multiple="multiple" name="addons[]" data-placeholder="Select a State" style="width: 100%;">
                    @foreach($addons as $addon)
                        <option value="{{ $addon->id }} ">{{ $addon->name }}</option>
                    @endforeach
                    @foreach($addonCategory->addonsData as $addon)
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