@extends('layout.app')

@section('content')

    <div class="container">
        
        <h3 class="mt-5 align-text-center">Management Student UNAIR</h3>

        <div class="row" >
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area" style="background-color: chocolate">
                <form method="POST" action="{{ route('users.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                            
                        </div>
                        <div class="col-md-6">
                            <label>Email</label>
                            <input type="email"id="email" class="form-control" name="email" required>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="jenis_kelamin">Jenis kelamin</label>
                            <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                                <option value="pria">Pria</option>
                                <option value="wanita">Wanita</option>
                            </select>                            
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="jenis_kelamin">fakultas</label>
                                <select id="fakultas" name="fakultas" class="form-control">
                                    <option value="vokasi">vokasi</option>
                                    <option value="fst">fst</option>
                                </select>              
                                <div class="col-md-6">
                                    <label>password</label>
                                    <input type="text"  id="password"class="form-control" name="password" required>
                                </div>              
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-info" value="Register">
                        </div>

                    </div>
                </form>
            </div>

                <table class="table mt-5">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col"> Name</th>
                        <th scope="col">NIM</th>
                        <th scope="col">password</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ( $users as $key => $user )

                        <tr>
                            <td scope="col">{{ ++$key }}</td>
                            <td scope="col">{{ $user->name }}</td>
                            <td scope="col">{{ $user->email }}</td>
                            <td scope="col">{{ $user->jenis_kelamin }}</td>
                            <td scope="col">{{ $user->fakultas }}</td>
                            <td scope="col">{{ $user->password }}</td>
                            <td scope="col">

                            <a href="{{  route('users.edit', $user->id) }}">
                            <button class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </button>
                            </a>
                            
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style ="display:inline">
                             @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            </td>

                          </tr>

                        @endforeach




                    </tbody>
                  </table>
            </div>
        </div>
    </div>

@endsection


@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 30px;
              background-color:#79afff;
        }

        .bi-trash-fill{
            color:red;
            font-size: 18px;
        }

        .bi-pencil{
            color:green;
            font-size: 18px;
            margin-left: 20px;
        }
    </style>
@endpush