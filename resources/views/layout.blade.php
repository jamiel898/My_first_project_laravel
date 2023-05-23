<html>
    <head>
        <title>@yield('title') - Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js%22%3E%22%3E"> </script> 
        <link rel='stylesheet' type='text/css' href='<?php echo asset('storage/css/styles.css') ?>'>
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
                   <li>
                   <a  href="{{ route('list') }}">LIST</a> 
                   </li>
                  
                  
                  
               </ul>
           </nav>
</div>
@yield('content')                       
</body>
</html>