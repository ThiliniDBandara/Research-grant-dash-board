@extends('layouts.adminLayout.admin_desing')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Form elements</a> <a href="#" class="current">Validation</a> </div>
    <h1>Edit Brand</h1>
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
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Edit Now</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{url('/admin/edit-category/'.$categorydetails->id)}}" name="edit_validate" id="edit_validate" novalidate="novalidate">
                {{csrf_field()}}
              <div class="control-group">
                <label class="control-label">Brand Name</label>
                <div class="controls">
                  <input type="text" name="bname" id="bname" value={{($categorydetails->brand_name)}}>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Products Number</label>
                <div class="controls">
                  <input type="text" name="pname" id="pname" value={{($categorydetails->products_num)}}>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Description</label>
                <div class="controls">
                  <textarea name="description" id="description" >{{($categorydetails->descrption)}}</textarea>  
                </div>
              </div>
            
              <div class="form-actions">
                <input type="submit" value="Edit Brand" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  
  </div>
</div>


@endsection