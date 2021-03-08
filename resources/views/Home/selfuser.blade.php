<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<tr>
    <td>关注的人</td>
</tr><br/>
<table>

    @foreach($data2 as $val)
        <tr>{{$val}}</tr><br/>
    @endforeach
</table>
</body>
</html>
