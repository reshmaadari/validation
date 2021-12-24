<!DOCTYPE html>
<html>
    <head>
    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
<section><form action="checkage" method="POST">@csrf
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-8 col-xl-6">
          <div class="row">
            <div class="col text-center">
              <h1>Register</h1>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col mt-4">
              <input type="text" name="username" class="form-control" placeholder="User Name">
            </div><br>
          </div>
          <div class="row align-items-center mt-4">
            <div class="col">
              <input type="number" name="age" class="form-control" placeholder="Age">
            </div><br>
          </div>
          
          <div class="row justify-content-start mt-4">
            <div class="col">
              <button class="btn btn-primary mt-4">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </div></form>
    <center><h3 style="color:red">{{session('status')}}</h3></center>
  </section>