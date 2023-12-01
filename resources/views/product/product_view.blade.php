<x-app-layout>
    <div class="py-12">
        <div class="container">
            <div class="row">
             
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Quantity</th>
                        <th scope="col">Product Price</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($products as $product)
                          <tr>
                        
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->price }}</td>
                        <td><a href="{{url('/product/edit/' .$product->id )}}" class="btn btn-info">Edit</a></td>
                        <td><a href="{{url('/product/delete/' .$product->id )}}" class="btn btn-danger">Delete</a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>

    </div>
</x-app-layout>
