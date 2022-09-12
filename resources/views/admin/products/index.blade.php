@extends('admin.layout')
@section('styles')
<style>
  .price{
    color: #0d0d0d;
    font-size: 14px;
    font-weight: 600;
}
.title{
    font-size: 16px;
    font-weight: 600;
    text-transform: capitalize;
    margin: 0 0 7px;
}
.title a{
    display: block;
    /* max-height:1rem; */
    text-overflow:ellipsis;
    white-space: nowrap;
    overflow: hidden;
    color: #282828;
    transition: all 0.3s ease 0s;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -ms-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    font-weight: normal !important;
    font-size: 16px !important;
    cursor: pointer;
   
}
.title a:hover{ color: black; }

</style>
@endsection
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
   <h5 class=" title">
   <a > {{$product->name}} </a></h5>
   <p class="card-text price">
   EGP {{$product->price}}</p>
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