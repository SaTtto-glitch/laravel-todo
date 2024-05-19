<h1>ToDo List</h1>                                                                                                 
<div>
    <h2>タスクを追加</h2>
    <form method="POST" action="/create">
        @csrf
        <p>
            タスクの名前：<input type="text" name="task_name">
        </p>
        <p>
            タスクの説明：<input type="text" name="task_description">
        </p>
        <p>
            担当者の名前：<input type="text" name="assign_person_name">
        </p>
        <p>
            見積時間(h)：<input type="number" name="estimate_hour">
        </p>
        <input type="submit" name="create" value="追加">
    </form>
    <a href="/">戻る</a>
</div>
