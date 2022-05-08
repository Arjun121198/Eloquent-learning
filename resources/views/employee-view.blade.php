@extends('layouts.master')
@section('title','home')
@section('content')
<div>
      <div>Fisrt Name : {{ $employee->first_name }}</div>
      <div>Last Name : {{ $employee->last_name }}</div>
      <div>Full Name : {{ $employee->full_name }}</div>
      <div>Email : {{ $employee->email }}</div>
      <div>Phone : {{ $employee->phone }}</div>
</div>

@endsection
