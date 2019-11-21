@extends('layouts.adminLayout.admin_desing')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Form elements</a> <a href="#" class="current">Validation</a> </div>
    <h1>Add new Brand</h1>
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
            <h5>Add Now</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{url('/admin/add-category')}}" name="basic_validate" id="basic_validate" novalidate="novalidate">
                {{csrf_field()}}
              <div class="control-group">
                <label class="control-label">Brand Name</label>
                <div class="controls">
                  <input type="text" name="bname" id="bname">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Products Number</label>
                <div class="controls">
                  <input type="text" name="pname" id="bname">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Description</label>
                <div class="controls">
                  <textarea name="description" id="description"></textarea>  
                </div>
              </div>
            
              <div class="form-actions">
                <input type="submit" value="Add New Brand" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  
  </div>
</div>

@endsection