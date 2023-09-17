<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>career-mail</title>
</head>
<body>
  <div class="container my-5">
    <table class="table ">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Phone Number</th>
          <th scope="col">Company Name</th>
          <th scope="col">Designation</th>
          <th scope="col">Company Address</th>
          <th scope="col">Message</th>
        </tr>
      </thead>
      <tbody>
      <tr>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->phone}}</td>
          <td>{{$user->company_name}}</td>
          <td>{{$user->designation}}</td>
          <td>{{$user->copmany_address}}</td>
          <td>{{$user->message}}</td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>
