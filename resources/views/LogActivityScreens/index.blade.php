@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <table id="example2" class="table table-bordered table-hover dataTable">
            <thead>
              <tr>
              <th width="25%" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="userScreenID: activate to sort column descending" aria-sort="ascending"> ID</th>
              
              <th width="25%" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="userScreenName: activate to sort column descending" aria-sort="ascending">log_name</th>
              <th width="25%" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="userScreenName: activate to sort column descending" aria-sort="ascending">description</th>
              <th width="25%" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="userScreenName: activate to sort column descending" aria-sort="ascending">subject_type</th>
              <th width="25%" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="userScreenName: activate to sort column descending" aria-sort="ascending">subject_id</th>
              <th width="25%" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="userScreenName: activate to sort column descending" aria-sort="ascending">causer_type</th>
              <th width="25%" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="userScreenName: activate to sort column descending" aria-sort="ascending">causer_id</th>
              <th width="25%" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="userScreenName: activate to sort column descending" aria-sort="ascending">properties</th>
              <th width="25%" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="userScreenName: activate to sort column descending" aria-sort="ascending">created_at</th>
              <th width="25%" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="userScreenName: activate to sort column descending" aria-sort="ascending">updated_at</th>
             
              </tr>
            </thead>
            <tbody>
            @foreach ($data as $screens)
                <tr class="odd">
                  <td class="sorting_1">{{ $screens->id}}</td>
                  <td class="sorting_1">{{ $screens->log_name}}</td>
                  <td class="sorting_1">{{ $screens->description}}</td>
                  <td class="sorting_1">{{ $screens->subject_type}}</td>
                  <td class="sorting_1">{{ $screens->subject_id}}</td>
                  <td class="sorting_1">{{ $screens->causer_type}}</td>
                  <td class="sorting_1">{{ $screens->causer_id}}</td>
                  <td class="sorting_1">{{ $screens->properties}}</td>
                  <td class="sorting_1">{{ $screens->created_at}}</td>
                  <td class="sorting_1">{{ $screens->updated_at}}</td>

                 
              </tr>
            @endforeach
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
