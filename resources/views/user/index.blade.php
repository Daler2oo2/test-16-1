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
                    <th scope="col">Name</th>
                    <th scope="col">Surname</th>
                    <th scope="col">Email</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th scope="row">{{ $loop->index+1 }}</th>
                            <td>{{ $user->login }}</td>
                            <td>{{ $user->password }}</td>
                            <td>{{ $user->profile->name }}</td>
                            <td>{{ $user->profile->surname }}</td>
                            <td>{{ $user->profile->email }}</td>
                            </tr>
                    @endforeach
                </tbody>
              </table>

        </main>

       
    @endsection
