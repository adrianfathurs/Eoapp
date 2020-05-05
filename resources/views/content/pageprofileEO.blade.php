@extends('layouts.head')
@section('scripts-css')
<style type="text/css">
  .shadow
  {
    box-shadow: 1px 1px 10px grey;
  }
  .border-radius
  {
    border-radius: 20px;
  }
  .col1
  {
    position: absolute;
  }
  .col2
  {
    position: relative;
  }
  img{
    height: 150px;
    width: 100%;
  }
  .kotak{
    width: 80%;
    height: 400px;
    background-color: green;
    border-radius: 10px;

  }

</style>
@endsection
@section('content')
<div class="container shadow">
  <div class="row">
    <div class="col-sm-2">
      One of three columns
    </div>
    <div class="col-sm-8">
      <div class="ml-3 mr-2 mt-2 mb-2">
        <div class="card" style="width: 36rem;">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-2">
      One of three columns
    </div>
  </div>
</div> 
@endsection
@section('scripts-js')

@endsection