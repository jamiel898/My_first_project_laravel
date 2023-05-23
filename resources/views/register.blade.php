<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    @extends('layout')

@section('title', 'register')

@section('content')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Styles -->

        <link rel='stylesheet' type='text/css' href='<?php echo asset('storage/css/styles.css') ?>'>
    <img src='<?php echo asset('storage/1234.jpg') ?>' class='sample-img' />
   

<div class="login-wrap">
  <h2>Register</h2>
  
  <div class="form">
    <input type="text" placeholder="Username" name="un" />
    <input type="password" placeholder="Password" name="pw" />
    <button> Sign in </button>
    <a href="#"> <p> Have an account? Login </p></a>
  </div>
</div>