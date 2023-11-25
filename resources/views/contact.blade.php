<!DOCTYPE html>
<html lang="en">
<head>

    @livewireStyles
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap"  rel="stylesheet" />

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    
    <title>Paultech</title>
</head>
<body id="content" class="mx-auto" style="max-width:98% ;">
<!--alert-->


 <!-- alert -->
 
 @include('header')


@livewire('paultech')
    
 <!--footer--->
 
<!-- Footer container -->

 <!--footer ends -->   
 

@livewireScripts
</body>
</html>