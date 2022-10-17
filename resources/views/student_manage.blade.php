<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="md-3">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">STT</th>
            <th scope="col">Fullname</th>
            <th scope="col">Birthday</th>
            <th scope="col">Address</th>
          </tr>
        </thead>
        <tbody>
            @if (count ($students )<=0 )
                No student 
                @else 
                @foreach ($students as $item)
                <tr>
                    {{-- <th scope="row">1</th> --}}
                    <td>{{$item->id}}</td>
                    <td>{{$item->fullname}}</td>
                    <td>{{$item->birthday}}</td>
                    <td>{{$item->address}}</td>
                    <td>
                        <a href="student/{{$item->id}}/edit">Edit</a>
                    </td>
                  </tr>
                @endforeach
            @endif
            
    
          
        </tbody>
      </table>
    </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>