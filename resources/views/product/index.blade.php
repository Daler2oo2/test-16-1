@extends('layouts.app')
@section('title')
    Products
@endsection

@section('content')
       
        <main class="flex-shrink-0 m-5 p-2">
           
          <div class="row">
                <div class="col-12">
                     {{-- buttons --}}
                </div>
          </div>
            <table class="table " >
                <thead>
                  <tr>
                    <th scope="col">№</th>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Count</th>
                    <th scope="col">Categories</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                     $id=1;   
                    @endphp
                    @foreach($products as $product)
                            <tr>
                                <th scope="row">{{ $id }}</th>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->count }}</td>
                                <td>
                                  @foreach($product->categories as $category)
                                  <label class="bg-warning  rounded">{{ $category->name }}</label>
                                  @endforeach
                                </td>
                            </tr>
                            @php
                            $id = $id+1;   
                            @endphp
                    @endforeach
                    
                </tbody>
              </table>

        </main>

       
    @endsection
