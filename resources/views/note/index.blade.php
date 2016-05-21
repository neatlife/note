<style type="text/css">
    table {
        border: 1px solid #ccc;
        width: 100%;
        margin:0;
        padding:0;
        border-collapse: collapse;
        border-spacing: 0;
    }

    table tr {
        border: 1px solid #ddd;
        padding: 5px;
    }

    table th, table td {
        padding: 10px;
        text-align: center;
    }

    table th {
        text-transform: uppercase;
        font-size: 14px;
        letter-spacing: 1px;
    }
</style>
<div>
    <a href="{{ action("NoteController@add") }}">留言</a>
</div>
<table>
    <thead>
        <th>标题</th>
        <th>邮箱</th>
        <th>内容</th>
    </thead>
    <tbody>
    @foreach ($notes as $note)
        <tr>
            <td>{{ $note->subject }}</td>
            <td>{{ $note->email }}</td>
            <td>{{ $note->content }}</td>
        </tr>
    @endforeach
    </tbody>
</table>