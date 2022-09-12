@extends('admin.layout')
@section('main')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">products / {{$cat[0]->name}}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('dashboard')}}" >Home</a></li>
              <li class="breadcrumb-item active">products </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        
        <div class="row">
        @foreach($products as $product)
        <div class="col-lg-3 col-sm-6">
   <div class="card" style="width: 16rem;">
 <img src="{{asset("storage/uploads/products/$product->img")}}" style=""  class="card-img-top" alt="...">
 <div class="card-body">
   <h5 class="card-title">{{$product->name}}</h5>
   <p class="card-text">
   price: {{$product->price}}</p>
   <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
 </div>
</div></div>
   @endforeach
        <div>

</div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection