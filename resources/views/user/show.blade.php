@extends('layouts.app')
@section('title')
    Users
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
                    <th scope="col">Login</th>
                    <th scope="col">Password</th>
                    <th scope="col">City</th>
                  </tr>
                </thead>
                <tbody>
                    
                        <tr>
                            <th scope="row">{{ 1 }}</th>
                            <td>{{ $user[0]->login }}</td>
                            <td>{{ $user[0]->password }}</td>
                            <td>{{ $user[0]->city->name }}</td>
                            </tr>
                    
                </tbody>
              </table>

        </main>

       
    @endsection
