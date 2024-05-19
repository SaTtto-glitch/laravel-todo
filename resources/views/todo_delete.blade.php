<h1>ToDo List</h1>                                                                                                 
<div>
    <h2>タスクを削除</h2>
    <form method="POST" action="/delete/{{$todo->id}}">
        @csrf
        <p>
            タスクの名前：{{$todo->task_name}}
        </p>
        <p>
            タスクの説明：{{$todo->task_description}}
        </p>
        <p>
            担当者の名前：{{$todo->assign_person_name}}
        </p>
        <p>
            見積時間(h) ：{{$todo->estimate_hour}}
        <p>
        @method('DELETE')
        <input type="submit" value="削除">
    </form>
    <a href="/">戻る</a>
</div>
