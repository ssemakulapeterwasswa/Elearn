<?php 
$project_name = 'Simple <em> project </em>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home page</title>
</head>
<body>
    <h1>welcome to the {!!$project_name!!}</h1>
    <p>This is ssemakula peter wasswa, software engineerer from makerere university Uganda.</p><hr>
    <p><b>Name:</b>{!!$name!!}</p>
    <p><b>gender:</b>{{$sex}}</p>
    <p><b>school:</b>{{$school}}</p>
   @foreach ($favcolor as $color)
       <p>{{$color}}</p>
   @endforeach
    @for ($i = 0; $i < 10; $i++)
        <p>{{$i}}</p>
   
    @endfor
    @if (2<5)
        <p>I have started the course</p>
    @else
        <p>This is extremely so good.</p>
    @endif
    
        
    
</body>
</html>