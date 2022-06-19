@extends('layouts.layout')

@section('update')
  <table>
    <form action="{{ url('/todo/update') }}" method='post'>
      @csrf
      <tr>
        <th>作成日</th>
        <th>タスク名</th>
        <th>更新</th>
      </tr>
      @foreach($items as $item)
      <tr>
        <td>{{$item->created_at}}</td>
        <td><input type="text" name='content' value="{{$item->content}}"></td>
        <td><button class="update">更新</button></td>
      </tr>
    @endforeach
    </form>
  </table>
@endsection