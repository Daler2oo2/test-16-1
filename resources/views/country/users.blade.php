@extends('layouts.app')
@section('title')
    Countries
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
                    <th scope="col">User</th>
                    <th scope="col">City</th>
                    <th scope="col">Country</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                     $id=0;   
                    @endphp
                    @foreach($countries as $country)
                            @foreach($country->users as $user)
                                <tr>
                                    <th scope="row">{{ $id = $id+1 }}</th>
                                    <td>{{ $user->login }}</td>
                                    <td>{{ $user->city->name }}</td>
                                    <td>{{ $country->name }}</td>
                                </tr>
                            @endforeach
                    @endforeach
                    
                </tbody>
              </table>

        </main>

       
    @endsection
