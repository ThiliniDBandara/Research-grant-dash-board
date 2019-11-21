@extends('layouts.adminLayout.admin_desing')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Categories</a><a href="#" class="current">View Category</a> </div>
    <h1>Brands</h1>
    @if(Session::has('flash_message_error'))
  
            <div  class="alert alert-error alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{!! session('flash_message_error') !!}</strong>  
            </div>
            @endif       
            @if(Session::has('flash_message_success'))
  
            <div  class="alert alert-error alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{!! session('flash_message_success') !!}</strong>  
            </div>
            @endif    
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>View Brands</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Brand Id</th>
                  <th>Brand Name</th>
                  <th>Brand Number</th>
                 <th>Description</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
               @foreach($categories as $category)
               <tr class="gradeX">
                   <td>{{$category->id}}</td>
                   <td>{{$category->brand_name}}</td>
                   <td>{{$category->products_num}}</td>
                   <td>{{$category->descrption}}</td>
                   <td class="center"><a href="{{url('/admin/edit-category/'.$category->id)}}" class="btn btn-primary btn-mini">Edit</a> <a href="#" class="btn btn-danger btn-mini"> Delete</td>
</tr>
@endforeach
              </tbody>
            </table>
          </div>
        </div>
@endsection