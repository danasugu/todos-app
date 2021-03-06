<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <title>TODOS</title>
</head>
<body>
   <h1 class="text-center my-5">todos page</h1> 
<div class="row justify-content-center">
<div class="col-md-8">
<div class="container">
<div class="card card-default">
<div class="card-header">Todos</div>
<div class="card-body">
<ul class="list-group">
   @foreach($todos as $todo)
   <li class="list-group-item">
   {{ $todo->name }}
   
   <button class="btn btn-primary btn-sm float-right">View</button>
   </li>
   @endforeach
</ul>
</div>
</div>
</div>
</div>
</div>
</body>
</html>