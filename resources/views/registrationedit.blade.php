
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration Project</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Registrations - Edit User Information</h2><br  />
        <form method="post" action="{{action('RegistrationController@update', $id)}}">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="firstname">First Name:</label>
            <input type="text" class="form-control" name="first_name" value="{{$registration->first_name}}">
          </div>
        </div>
        <div class="pakainfo row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="lastname">Last Name:</label>
              <input type="text" class="form-control" name="last_name" value="{{$registration->last_name}}">
            </div>
          </div>
        <div class="pakainfo row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email" value="{{$registration->email}}">
            </div>
          </div>
          <div class="pakainfo row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="age">Age:</label>
              <input type="text" class="form-control" name="age" value="{{$registration->age}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Update</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>