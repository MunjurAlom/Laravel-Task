
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
 
     
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
         <h1>Product Edit</h1><br>
         
            <form class="row g-3" action="{{ route('product.update',$products->id)}}" method="POST">
                @csrf
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label"> Product Name</label>
                <input type="text" class="form-control" name="name"  value="{{$products->name}}"id="formGroupExampleInput" placeholder="Product Name">
             
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            
            </div>
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Quantity</label>
                <input type="text" class="form-control" name="quantity" value="{{$products->quantity}}" id="formGroupExampleInput2" placeholder="quantity">
              
                
                @error('quantity')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror  

            
            </div>
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" value="{{$products->price}}" id="formGroupExampleInput2" placeholder="price">
              
                
                @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror  

            
            </div>
               <input type="submit" class="btn btn-primary" Value=" update" >
            </form>
        </div>
      </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </body>
</html>