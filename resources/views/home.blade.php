@extends('layouts.app')
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

<style> .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }
    .m-b-md {
                margin-bottom: 30px;
            }
</style>
@section('content')
<div class="container">
        <div class="title m-b-md">
                Appllication For reserch grant
            </div>
   
            </div>
       
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Fill in the forms..
                                        <a href="/index" type="submit" class="btn btn-primary">GO</a>
                    </button>
                </div>
            
        
 

@endsection
