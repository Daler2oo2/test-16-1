@extends('layouts.app')
@section('title')
    Categories
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
                    <th scope="col">Category</th>
                    <th scope="col">Products</th>
                    {{-- <th scope="col">Price</th>
                    <th scope="col">Count</th> --}}
                  </tr>
                </thead>
                <tbody>
                    @php
                     $id=1;   
                    @endphp
                    @foreach($categories as $category)
                            <tr>
                                <th scope="row">{{ $id }}</th>
                                <td>{{ $category->name }}</td>
        
                                <td>
                                  @foreach($category->products as $product)
                                  <label class="bg-warning  rounded">{{ $product->name }}</label>
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
