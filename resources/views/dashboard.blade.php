<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div> --}}
        <div class="container">
            <div class="row">
              <a href="{{ url('/add')}}" class="btn btn-primary my-3">Add Product</a>
              <a href="{{ url('/product_view')}}" class="btn btn-primary my-3">Product View</a>
                {{-- <table class="table">
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
                        <th scope="row">1</th>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->price }}</td>
                       
                      </tr>
                      @endforeach --}}
                    
                     {{--    @foreach ($brands as $brand)
                        <tr  role="row" class="odd">
                            <input name="" type="hidden" value="{{$brand->id}}">
                            <td>{{$brand->id}}</td>
                            <td>{{$brand->brand_name_cats_eye}}</td>
                            <td>{{$brand->brand_name_easy}} </td>
                            <td><img src="{{asset('upload/brand_images/' . $brand->brand_image )}}" width="100px;" height="100px;" alt="Image"> </td>
                            <td><a href="{{url('/brand/delete/'.$brand->id)}}" class="btn btn-danger">Delete</a></td>
                            <td><a href="{{url('/brand/update/' .$brand->id )}}" class="btn btn-danger">edit</a></td>
        
                        </tr>   

                        @endforeach  --}}
                    </tbody>
                  </table>
            </div>
        </div>

    </div>
</x-app-layout>
