
@extends('layouts.app')

@section('content')

    <div class="container">

     <div class="row text-center align-center">

      <div class="col-sm-6">
        <div class="card">
         <div class="card-header">
           # Records
         </div>
         <div class="card-body">
          <blockquote class="blockquote mb-0">
          <h1>{{ $count }}</h1>
          <footer class="blockquote-footer">As of {{ date('d-m-Y') }}</footer>
          </blockquote>
         </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="card">
         <div class="card-header">
           Latest Record
         </div>
         <div class="card-body">
          <blockquote class="blockquote mb-0">
          <h1>{{ $last->first_name }} {{ $last->last_name}}</h1>
          <footer class="blockquote-footer">As of {{ date('d-m-Y') }}</footer>
          </blockquote>
         </div>
        </div>
       </div>

     </div>

    </div>
@endsection
