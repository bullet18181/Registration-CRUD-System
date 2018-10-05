<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration Project</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="pakainfo container">
      <h2>Add User Information</h2><br/>
      <form method="post" action="{{url('create')}}">
        @csrf
        <div class="pakainfo row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="firstname">First Name:</label>
            <input type="text" class="form-control" name="first_name" required="">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
             <label for="lastname">Last Name:</label>
              <input type="text" class="form-control" name="last_name" required="">
            </div>
          </div>
          <div class="pakainfo row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
            <label for="Email">Email:</label>
            <input type="text" class="form-control" name="email" required="">
            </div>
          </div>
            <div class="pakainfo row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
            <label for="Email">Age:</label>
            <input type="number" class="form-control" name="age" required="" onkeypress="return isNumberKey(event)">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>