<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <h1 class="mt-5 text-center">This is Our Roles List</h1>
        <table class="table mt-5">
            <thead>
              <tr>
                <th scope="col">SL</th>
                <th scope="col">Name</th>
                <th scope="col">Count</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($roles as $role)
              <tr>
                <th>{{ $loop->iteration }}</th>
                <td>{{ $role->roles_name }}</td>
                <td> @foreach ($role->getUsers as $val)
                <li>{{ $val->name }},            {{$val->email }}</li>
                @endforeach
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
    <div class="container">
        <h1 class="mt-5 text-center">This is Our User List</h1>
        <table class="table mt-5">
            <thead>
              <tr>
                <th scope="col">SL</th>
                <th scope="col">Role Name</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
              <tr>
                <th>{{ $loop->iteration }}</th>
                <td>{{ $user->getRole->roles_name }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>

              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
