@extends('layouts.layout')

@section('update')
<div class="task_table">
  <table>
    <div class="text_table">
      <tr>
        <th class="table_th1">作成日</th>
        <th class="table_th2">タスク名</th>
        <th class="table_th3">更新</th>
        <th class="table_th4">削除</th>
      </tr>
    </div>
    @foreach($items as $item)
      <tr>
        <td class="table_td1">{{$item->created_at}}</td>
        <form action="{{ route('todo.update', ['id'=>$item->id]) }}" method="post">
          @csrf
          <td class="table_td2"><input type="text" name="content" value="{{$item->content}}" class="text2"></td>
          <td class="table_td3"><button class="update">更新</button></td>
        </form>
        <form action="{{ route('todo.delete', ['id'=>$item->id]) }}" method="post">
          @csrf
          <td class="table_td4"><button class="delete">削除</button></td>
        </form>
      </tr>
    @endforeach
  </table>
</div>
@endsection