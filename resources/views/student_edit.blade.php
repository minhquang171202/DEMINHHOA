<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    
    <div class="mb-3">
      <form method = "POST">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Id</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$students->id}}">
          
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Fullname</label>
            <input type="text" class="form-control" id="name"  name="name" value="{{$students->fullname}}">
            
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Birthday</label>
            <input type="date" class="form-control" id="birthday"  name="birthday" value="{{$students->birthday}}">
            
          </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Address</label>
          <input type="text" class="form-control" id="address" name="address" value="{{$students->address}}">
        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
        @csrf
        @method('PUT')
      </form>
    </div>
</body>
</html>