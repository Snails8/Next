@extends('layout')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col col-md-offset-3 col-md-6">
        <div class="card">
          <div class="card-header">
              詳細
          </div>

          <div class="card-body">
              <tr>
                  <td>{{ $task->title }}</td>
                  <td>
                    <span class="label">{{ $task->$status }}</span>
                  </td>
                  <td>{{ $task->description }}</td>
              </tr>
            
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection