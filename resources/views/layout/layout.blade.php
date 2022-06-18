@extends('layout.layout')

@section('update')
  <table>
    <form action="{{ route('update') }}" method='post'>
      @csrf
      <tr>
        <th>作成日</th>
        <th>タスク名</th>
        <th>更新</th>
      </tr>
      @foreach($items as $item)
      <tr>
        <td>{{$item->created_at}}</td>
        <td><input type="text" name='content' value='{{$item->content}}'></td>
        <input type="sumbmit" class="update" value="更新">
      </tr>
    </form>
    @endforeach
  </table>
@endsection