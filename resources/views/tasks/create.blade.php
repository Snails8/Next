@extends('layout')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col col-md-offset-3 col-md-6">
        <div class="card">
          <div class="card-header">
              登録画面
          </div>
          <div class="card-body">
            @if($errors->any())
              <div class="alert alert-danger">
                @foreach($errors->all() as $message)
                  <p>{{ $message }}</p>
                @endforeach
              </div>
            @endif

            <form action="{{ route('store_task') }}" method="POST">
              @csrf
              
              <div class="form-group">
                <label for="title" class="control-label">タイトル</label>
                <input type="text" class="form-control" name="title">
              </div>

              <div class="form-group">
                <label for="status">状態</label>
                <select name="status" class="form-control" id="status">
                  @foreach(\App\Models\Task::STATUS as $key => $val)
                    
                    </option>
                  @endforeach

                </select>
              </div>

              <div class="form-group">
                <label for="message">詳細</label>
                <textarea name="message" class="form-control" rows="8" cols="80" id="message"></textarea>
              </div>

              <button type="submit" class="btn btn-primary">登録</button>
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection