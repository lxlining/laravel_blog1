<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div>

    <ol>
        <li>
            @foreach($data as $va)
                <table border="0">
                    <tr>
                        <td>文章标题：<b>{{$va->title}}</b></td>
                        <td>{{$va->created_at}}</td>
                        <td>作者：{{$va->username}} </td>
                    </tr>
                    <tr>
                        <textarea disabled="disabled" cols="80" rows="3">{{$va->content}}</textarea>
                    </tr>
                    <tr><td><a href="/home/self/article1/{{{$va->id}}}">删除</a> </td></tr>
                </table>
            @endforeach

        </li>
    </ol>

</div>
</body>
</html>
