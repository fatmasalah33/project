@extends('admin.layout')
@section('styles')
<style>
.card-block{
    overflow: hidden;
}
.card li{
    list-style: none;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  
}
.card li a{
    color: #282828 !important;
    font-weight: 400;
    font-size: 14px;
}
.card li a:hover{
    color:blue !important;
}
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
            <h1 class="m-0 text-dark">products</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('dashboard')}}" >Home</a></li>
              <li class="breadcrumb-item active">products</li>
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
        <div class=" col-12 col-lg-3 d-none d-lg-block">
        <ul class="card p-2 ">
    @foreach($cats as $cat)
    
          <li class="mb-1" >
            <i class="fas fa-solid fa-store"></i> 
            <a href="{{  url("dashboard/product/index/$cat->id")}}" >{{$cat->name}}</a></li>

      
    @endforeach
    </ul>
      </div>
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