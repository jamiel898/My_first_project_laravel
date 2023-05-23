

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
   
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->   
       <body>
        <html>
    <head>
        <title>@yield('title') - Page</title>
    
</head>
    
<head>
<link rel='stylesheet' href='<?php echo asset('storage/css/styles.css') ?>' />

</head>
@extends('layout')

@section('title', 'about')

@section('content')
<img class="image" src='<?php echo asset('storage/list.jpg') ?>' class='sample-img' /> 
<div class="container pt-3">
  <div class="row">
    <div class="col-md-12 mt-4">
      <div class="table-responsive">
        <table class="table table-striped rounded-2">
          
            <tr>
              <th>First Name</th>

              <th>Middle Name</th>

              <th>Last Name</th>

              <th>Date of birth</th>

              <th>Address</th>

              <th>Action</th>
            </tr>
         
          <tbody>
            @foreach($student_profile as $student)
            <tr>
              <td>{{ $student->first_name }} </td>
              <td>{{ $student->middle_name }}</td>
              <td>{{ $student->last_name }}</td>
              <td>{{ date_format(date_create($student->date_of_birth), 'M d, Y') }}</td>
              <td>{{ $student->address }}</td>
              <td>
              <a href="{{ route('edit', ['id' => $student->id]) }}" class="btn btn-secondary">Edit</a>
              <a href="{{ route('student-delete', ['id' => $student->id]) }}" class="btn btn-danger">Delete</a>
              </td>
              <td>
                
            </tr>
            @endforeach
          </tbody>
</body>
        </table>
      </div>
    </div>
  </div>
</div>


@endsection