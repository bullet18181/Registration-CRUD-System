
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration Project</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
     <h2>Registration Project</h2>
     <div style="float: right" ><a href="{{ action("RegistrationController@create") }}" class="btn btn-warning">Add User</a></div>
    
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Age</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($registration as $registration)
      <tr>
        <td>{{$registration['id']}}</td>
        <td>{{$registration['first_name']}}</td>
        <td>{{$registration['last_name']}}</td>
        <td>{{$registration['email']}}</td>
        <td>{{$registration['age']}}</td>
        <td>
          <a href="{{action('RegistrationController@edit', $registration['id'])}}" class="btn btn-info">Edit</a>
        </td>
        <td>
          <form action="{{action('RegistrationController@destroy', $registration['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="pakainfo btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>
