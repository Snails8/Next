@extends('layout')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="card">
          <div class="card-header text-center">
            <a class="btn btn-outline-secondary flat-left"
                href="{{ url('/?date=' . $calendar->getPreviousMonth()) }}">先月へ</a>
            <span>{{ $calendar->getTitle() }}</span>

            <a class="btn btn-outline-secondary flat-right"
               href="{{ url('/?fdate=' . $calendar->getNextMonth()) }}">翌月へ</a>
          </div>
          <div class="card-body">
              {!! $calendar->render() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection