<h1>ToDo List</h1>                                                                                                 
<div>
    <h2>タスクの一覧</h2>
    <a href="/create-page">タスクを追加</a>
    <table border="1">
        <tr>
            <th>タスクの名前</th>
            <th>タスクの説明</th>
            <th>担当者の名前</th>
            <th>見積時間(h)</th>
            <th colspan="2">操作</th>
        </tr>
        @foreach($todos as $todo)
        <tr>
            <td>{{$todo->task_name}}</td>
            <td>{{$todo->task_description}}</td>
            <td>{{$todo->assign_person_name}}</td>
            <td>{{$todo->estimate_hour}}</td>
            <td><a href="/edit-page/{{$todo->id}}">編集</a></td>
            <td><a href="/delete-page/{{$todo->id}}">削除</a></td>
        </tr>
        @endforeach
    </table>
</div>
