@extends('layout')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        
        <div class="btn">
          <a class="btn btn-outline-secondary"
             href="/next/create">
              今日は何をしたの？
          </a>
        </div>
      
        <div class="card">
          <div class="card-header text-center">
            <a href="{{ url('/?date=' . $calendar->getPreviousMonth()) }}">&lt;</a>
              <span>{{ $calendar->getTitle() }}</span>
            <a href="{{ url('/?fdate=' . $calendar->getNextMonth()) }}">&gt;</a>
          </div>
    
          <div class="card-body">
              {!! $calendar->render() !!}
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection