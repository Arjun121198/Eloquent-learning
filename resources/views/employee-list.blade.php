@extends('layouts.master')
@section('title','home')
@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">Sno</th>
      <th scope="col">First_Name</th>
      <th scope="col">Last_Name</th>
      <th scope="col">Full_Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($employeeList as $key => $employee)

    <tr>
      <td scope="row">{{ $key+1 }}</td>
      <td>{{ $employee['first_name'] }}</td>
      <td>{{ $employee['last_name'] }}</td>
      <td>{{ $employee['phone'] }}</td>
      <td>{{ $employee['email'] }}</td>
      <td><a href="employee-view/{{ $employee['id'] }}">View</a></td>
    </tr>
    @endforeach
  </tbody>
</table>


@endsection
