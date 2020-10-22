@extends('layout')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="card">
          <div class="card-header">{{ $calendar->getTitle() }}</div>
          <div class="card-body">
              {!! $calendar->render() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection