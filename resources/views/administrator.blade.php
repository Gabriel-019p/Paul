<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paultech</title>
    
    @vite('resources/css/app.css')
  \
</head>

<body>
    <div id="content" class="mx-auto mt-5" style="max-width:90%;">
   
        <div>
            @livewire('admin')
        
        </div>  


           @livewireScripts

    </div>
    
  
</body>
</html>