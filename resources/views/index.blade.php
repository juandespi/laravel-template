<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>
  <meta name="description" content="">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


  <!-- Styles -->
  <link rel="stylesheet" href="/css/app.css">


</head>
<body>

  <table>
    <tr>
      <th>EMPLOYEE NO</th>
      <th>PASSWORD</th>
      <th>USER_LEVEL</th>
      <th>NAME</th>
      <th>ADDRESS</th>
      <th>CONTACT_NO</th>
      <th>EMAIL</th>
      <th>POSITION</th>
      <th>DEPARTMENT</th>
      <th>GROUP</th>
      <th>ACTION</th>
    </tr>
    @foreach ($employees as $employee)
      <tr>
        <td>{{ $employee->emp_no }}</td>
        <td>{{ $employee->password }}</td>
        <td>{{ $employee->user_level }}</td>
        <td>{{ $employee->name }}</td>
        <td>{{ $employee->address }}</td>
        <td>{{ $employee->contact_no }}</td>
        <td>{{ $employee->email }}</td>
        <td>{{ $employee->position }}</td>
        <td>{{ $employee->department }}</td>
        <td>{{ $employee->group }}</td>
        <td><button>Delete</button></td>
      </tr>
    @endforeach
  </table>


{{-- <nav class="nav">

</nav> --}}

<div id="typedtext"></div>
</body>
<script type="text/javascript" href="/js/app.js"></script>
</html>
