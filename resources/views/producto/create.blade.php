<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add product</title>
</head>
<body>
    <div class="container my-5">
        <form class="form" action="{{route('product.store')}}" method="POST" enctype=multipart/form-data>
            @csrf
            <label  class="form-label">Name</label>
                <input type="text" name="name" class="form-control"  placeholder="name of product">
             
              <label  class="form-label">Photo</label>
             
                <input type="file" class="form-control" name="photo">
            
              <label class="form-label">Description</label>
                <textarea class="form-control" name="description"  rows="3"></textarea>
             
                  <input type="submit"  class="btn btn-success my-2" value="Send">
              
        </form>
     
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>