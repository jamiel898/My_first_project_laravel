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
        <html>
    <head>
        <title>@yield('title') - Page</title>
</head>
    <body>
  
        <div class="header">
            <nav>
                <ul>
                    <li>
                        <a href="{{ route('register') }}">REGISTER</a>
                   </li>  
                   <li>
                    <a  href="{{ route('about') }}">ABOUT</a>  
                   </li>
                   <li>
                   <a  href="{{ route('login') }}">LOGIN</a> 
                   </li> 
                   
               </ul>
           </nav>
</div>
@yield('content')                       
</body>
</html>


       
    </head>
<body class="" styles="background-color: #0dcaf0">
    
</body>
</html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="styles.css">
<div class="login">

<link rel='stylesheet' type='text/css' href='<?php echo asset('storage/css/styles.css') ?>'>
    <img src='<?php echo asset('storage/akame.jpg') ?>' class='sample-img' />
    
 <div class="wrapper">
 <form action="{{ route('save-edit',['id' => $students_profile['id']])}}" method="POST">
              @csrf       
      <h2 class="form-signin-heading">UPDATE STUDENT</h2>
      <input type="text" class="form-control" name="first_name" value="{{ $students_profile['first_name'] }}"placeholder="First name" required="" autofocus="" />
      <input type="text" class="form-control" name="middle_name" value="{{ $students_profile['middle_name'] }}"placeholder="Middle name" required="" autofocus="" />
      <input type="text" class="form-control" name="last_name" value="{{ $students_profile['last_name'] }}"placeholder="Last name" required="" autofocus="" />
      <input type="date" class="form-control" name="date_of_birth" value="{{ $students_profile['date_of_birth'] }}"placeholder="Date of birth" required="" autofocus="" />
      <input type="text" class="form-control" name="address" value="{{ $students_profile['address'] }}"placeholder="Address" required="" autofocus="" />     
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit">UPDATE</button>   
    </form>
  </div>

  