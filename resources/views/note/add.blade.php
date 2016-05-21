<style type="text/css">
    form {
        max-width: 100%;
        display: block;
    }
    form label {
        display: block;
        margin: 0 0 0.5em 0;
        color: #4f6fad;
        font-size: 1em;
    }
    form input {
        margin: 0 0 0.5em 0;
        border: 1px solid #ccc;
        padding: 6px 10px;
        color: #555;
        font-size: 1em;
    }
    form textarea {
        border: 1px solid #ccc;
        padding: 6px 10px;
        width: 100%;
        color: #555;
    }
</style>
<div>
    <a href="{{ action("NoteController@index") }}">返回留言板</a>
</div>
<div style="color: red">
    {{ $errors->first('subject') }}
    {{ $errors->first('email') }}
    {{ $errors->first('content') }}
</div>

<form action="{{ action('NoteController@save') }}" method="post">
    <label for="email">邮箱</label>
    <input id="email" type="email" name="email">
    <br>
    <label for="subject">标题</label>
    <input id="subject" type="text" name="subject">
    <br>
    <label for="content">内容</label>
    <textarea id="content" name="content"></textarea>
    {{ csrf_field() }}
    <br>
    <input type="submit">
</form>