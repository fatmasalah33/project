@extends('admin.layout')
@section('main')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Product / {{$cat[0]->name}}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Add Product</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
    <div class="section ps-5 pe-5">
  <div class="mt-0 mb-0 ms-auto me-auto custom-width">
    <div class="card card-format d-flex flex-row row">
      <div class="card-body col-6 m-auto">
        <h2 class="title"></h2>
        <form method="POST" action="{{url('dashboard/product/store')}}"  enctype="multipart/form-data" >
         @csrf
        <div class="input-group d-flex flex-column">
            <input class="form-control w-100 mb-1" type="text" placeholder="Product Name"
             name="name">

         
          </div>
          <input type="hidden" name="cat_id" value="{{$cat[0]->id}}">
          <div class="input-group d-flex flex-column">
            <input class="form-control mb-1 mt-3 w-100" type="text" placeholder="Price"
             name="price">

           
          </div>
     
      



 
          <div class="input-group d-flex flex-column">
            <input class="form-control mb-1 mt-3 w-100" type="file" placeholder="Image" name="img"
             >

          
          </div>
          <div class="mt-2 d-inline-block me-3">
       
             <button class="btn btn-info ps-4 pe-4 pt-1 pb-1 " type="submit">Add Product</button>
          </div>


        </form>
      </div>
    </div>
  </div>
</div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection