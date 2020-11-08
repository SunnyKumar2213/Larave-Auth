@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
            <table id="example2" class="table table-bordered table-hover dataTable">
            <thead>
              <tr>
              <th width="25%" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="userScreenID: activate to sort column descending" aria-sort="ascending">Name</th>
              
              <th width="25%" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="userScreenName: activate to sort column descending" aria-sort="ascending">Email</th>

                <th width="25%" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="userScreenName: activate to sort column descending" aria-sort="ascending">Joining Date</th>
              </tr>
            </thead>
            <tbody>
          
                <tr class="odd">
                  <td class="sorting_1">{{ $user->name}}</td>
                  <td class="sorting_1">{{ $user->email}}</td>
                  <td class="sorting_1">{{ $user->created_at}}</td>
            </tr>
               
          
            </tbody>
          </table>
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
