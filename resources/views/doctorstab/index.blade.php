<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .container{
            margin-top: 100px !important;
        } */
         #doctor{
            margin-top: 100px !important;
        }
      
    </style>
    <title>Doctor</title>
</head>
<body>



   <h3 class="d-flex justify-content-center" id="doctor">Doctors</h3>
<div class="container" id='container'>
  <div class="row">
        <table class="table table-dark">
        <thead>
            <tr>
            <th scope="col">name</th>
            <th scope="col">created at</th>
            <th scope="col">image</th>
            <th scope="col">email</th>
            <th scope="col">national id</th>
            <th scope="col">is banned</th>
            <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($doctors as $doctor)
            <tr>
            <th scope="row">{{$doctor->name}}</th>
            <td>{{$doctor->created_at->todatestring()}}</td>
            <td>
            <img src="doctorstab/fetch_image/{{ $doctor->nat_id }}"  class="img-thumbnail" width="75" />

            </td>
            <td>{{$doctor->email}}</td> 
            <td>{{$doctor->nat_id}}</td> 
            <td>{{$doctor->is_banned==1 ?'un banned':'banned'}}</td> 
            <td>
                <div class="row">
                   
                    <div class="col-2 mr-4">
                    <a href="{{route('doctorstab.edit',$doctor->nat_id)}}" class="btn btn-primary ">Edit</a>
                    </div>
                    <div class="col-2">
                    <form  action="{{route('doctorstab.destroy',$doctor->nat_id)}}" method="POST"> 
                            
                    @csrf @method('delete')<button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure that you want to delete this doctor ?')">Delete </button>
                    </form>
       
        </div>
        
       
      </div>
        
       
      </td>
   
    @endforeach        
        </tbody>
        </table>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  
</body>
</html>