@extends('layout')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
              詳細
          </div>

          <div class="card-body">
            <table class="table">
              <tbody>
                <tr>
                  <th>日付</th>
                  <td>{{ $task->active_date }}</td>
                </tr>
                <tr>
                  <th>タイトル</th>
                  <td>{{ $task->title }}</td>
                </tr>
                <tr>
                  <td>
                    <th>状態</th>
                    <span class="label">{{ $task->status }}</span>
                  </td>
                </tr>
                <tr>
                  <th>詳細</th>
                  <td>{{ $task->description }}</td>
                </tr> 
              </tbody> 
            </table>
            
            <a href="{{ route('calendar') }}" class="btn btn-info">戻る</a>
            
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection