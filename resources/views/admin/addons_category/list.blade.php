@extends('admin.layout.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Addons</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">All Addons Category</li>
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
                <h3 class="card-title">All Addons Category</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Addons</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($addonCategories as $addonCategory)
                    <tr>
                      <td>{{ $loop->iteration}}</td>
                      <td>{{ $addonCategory->name }}</td>
                      <td>
                        @foreach($addonCategory->addonsData as $addon)
                          <span class="badge bg-success">{{ $addon->name }}</span>
                        @endforeach
                      </td>
                      <td>
                        <a href="{{ route('admin-edit-category-addons',['id'=> $addonCategory->id])}}"><span class="badge bg-success">Edit</span></a>   
                        <a href="{{ route('admin-delete-category-addons',['id'=> $addonCategory->id])}}"><span class="badge bg-danger">Delete</span></a>
                                          
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              
            </div>
            <!-- /.card -->
          </div>
        </div>
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection