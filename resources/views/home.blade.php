@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="css/style.css">
@section('content')
@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

<div class="container wholePage" >

    <form>
        <div class="row form-group">
            <div class="noRowMargin imageBG col col-sm-12 col-md-3 col-lg-3">
                @include('leftbar')
            </div>
            <div class="col col-sm-12 col-md-6 col-lg-6 borderTop">
                @include('main')
            </div>
            <div class="col col-sm-12 col-md-3 col-lg-3">
                @include('rightbar')
            </div>
        </div>
    </form>   
</div>




@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>  
  <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 
<script src="js/home.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>  
  <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script> 
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="//js.nicedit.com/nicEdit-latest.js"></script> 
   <script src="//geodata.solutions/includes/countrystatecity.js"></script>
@include('jsfunctions')
