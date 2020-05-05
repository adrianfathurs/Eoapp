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

</style>
@endsection
@section('content')
<div class="container shadow">
  <div class="ml-2 row">
    <div class="col-md-4 mt-4">
      <div class=" position-fixed shadow">
        <div class="card" style="width: 18rem;">
          <center><h3><bold>Your EO Profile</bold></h3></center>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
              Edit Profile
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-8 mt-3 mb-3 position-relative  ">
      <center><h3><bold>Daftar Sponsorship</bold></h3></center>
      <!-- letakkan syntax loopingnya -->
      <div class="row">
        <div class="col-md-auto mt-2 "> 
          <div class="card" id="card1" style="width: 18rem;">
            <!-- isi nama asset -->
            <img src="assets/img/logo_unilever.jpg" class="card-img-top" alt="Unilever">
            <div class="card-body">
              <h5 class="card-title"><strong>Unilever</strong></h5>
              <hr>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="ml-1 mr-1 row">
              <div class="col-sm-5 mb-2">
                <a href="#" class="card-link"><button class="btn btn-info">Lihat Profile</button></a>
              </div>
              <div class="col-sm-5 mb-2">
                <a href="#" class="card-link"><button class="btn btn-success">Ajukan Proposal</button></a>
              </div>
            </div>
          </div>
        </div>
        <!--  --><div class="py-1"></div>
        <div class="col-md-auto mt-2"> 
          <div class="card" id="card2" style="width: 18rem;">
            <!-- isi nama asset -->
            <img src="assets/img/logo_biznet.jpg" class="card-img-top" alt="Unilever">
            <div class="card-body">
              <h5 class="card-title"><strong>Biznet</strong></h5>
              <hr>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="ml-1 mr-1 row">
              <div class="col-sm-5 mb-2">
                <a href="#" class="card-link"><button class="btn btn-info">Lihat Profile</button></a>
              </div>
              <div class="col-sm-5 mb-2">
                <a href="#" class="card-link"><button class="btn btn-success">Ajukan Proposal</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--  --><div class="py-1"></div>
      <div class="row">
        <div class="col-md-auto mt-2"> 
          <div class="card" style="width: 18rem;">
            <!-- isi nama asset -->
            <img src="assets/img/logo_unilever.jpg" class="card-img-top" alt="Unilever">
            <div class="card-body">
              <h5 class="card-title"><strong>Unilever</strong></h5>
              <hr>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="ml-1 mr-1 row">
              <div class="col-sm-5 mb-2">
                <a href="#" class="card-link"><button class="btn btn-info">Lihat Profile</button></a>
              </div>
              <div class="col-sm-5 mb-2">
                <a href="#" class="card-link"><button class="btn btn-success">Ajukan Proposal</button></a>
              </div>
            </div>
          </div>
        </div>
        <!--  --><div class="py-1"></div>
        <div class="col-md-auto mt-2"> 
          <div class="card" style="width: 18rem;">
            <!-- isi nama asset -->
            <img src="assets/img/logo_biznet.jpg" class="card-img-top" alt="Unilever">
            <div class="card-body">
              <h5 class="card-title"><strong>Biznet</strong></h5>
              <hr>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="ml-1 mr-1 row">
              <div class="col-sm-5 mb-2">
                <a href="#" class="card-link"><button class="btn btn-info">Lihat Profile</button></a>
              </div>
              <div class="col-sm-5 mb-2">
                <a href="#" class="card-link"><button class="btn btn-success">Ajukan Proposal</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
  <!-- Modal Edit Profile EO-->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">SMADA EVENT ORGANIZER</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body ml-4 mr-1 ">
          <div class="card " style="width: 25rem;">
            <img src="assets/img/eventorganizer.jpg" class="card-img-top" alt="YOUR EVENT">
            <div class="container-fluid">
              <div class="row">
                <div class="col">
                  <label for="exampleFormControlFile1">Changes Profile Photo :</label>
                </div>
                <div class="col">
                  <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
              </div>
            </div>
            <hr>
            <div class="card-body">
              <h5 class="card-title">Form Edit</h5>
              <hr>
              <form>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Event Name</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Event Names">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Event Decsription</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
              </form>
              <a href="#" class="btn btn-primary">Edit</a>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>
</div>  
@endsection
@section('scripts-js')
<script type="text/javascript">

  $(document).ready(function(){
    $('#card'+1).mouseover(function()
    {
      $('#card'+1).addClass('shadow');
      $('#card'+1).addClass('border-radius');
    });
  });

  $(document).ready(function(){
    $('#card'+1).mouseleave(function()
    {
      $('#card'+1).removeClass('shadow');
      $('#card'+1).removeClass('border-radius');
    });
  });
  $(document).ready(function(){
    $('#card'+2).mouseover(function()
    {
      $('#card'+2).addClass('shadow');
      $('#card'+2).addClass('border-radius');
    });
  });

  $(document).ready(function(){
    $('#card'+2).mouseleave(function()
    {
      $('#card'+2).removeClass('shadow');
      $('#card'+2).removeClass('border-radius');
    });
  });
</script>
@endsection