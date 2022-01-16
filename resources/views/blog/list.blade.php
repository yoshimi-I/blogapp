@extends('layout')
@section('content')
@section('title','ブログ一覧')
<div class="container">
<div class="row">
  <div class="col-md-8 col-md-offset-2">
      <h2>ブログ記事一覧</h2>
      <table class="table table-striped">
          <tr>
              <th>記事番号</th>
              <th>タイトル</th>
              <th>日付</th>
          </tr>
          @foreach($blogs as $blog)
          <tr>
              <td>{{$blog -> id}}</td>
              <td><a href="/blog/{{$blog -> id}}">{{$blog -> title}}</a></td>
              <td>{{$blog -> updated_at}}</td>
          </tr>
          @endforeach
      </table>
  </div>
</div>
</div>
@endsection