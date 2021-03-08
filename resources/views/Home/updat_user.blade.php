<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
<div align="center">个人信息展示</div>


    <form method="post" action="/home/self/update2" enctype="multipart/form-data">
        <table>
        <tr>
            <th>用户名：<input type="text" name="username" value="{{$data[0]->username}}">
                <input type="hidden" name="id" value="{{$data[0]->id}}">
            </th>
        </tr>
        <tr>
            <th>密&nbsp;&nbsp;&nbsp;码：<input type="password" name="pwd"  value="{{$data[0]->password}}"></th>
        </tr>

        <tr>
            <th>邮&nbsp;&nbsp;&nbsp;箱：<input type="text" name="email"  value="{{$data[0]->email}}"></th>
        </tr>

        <tr>
            <th>头&nbsp;&nbsp;&nbsp;像：<input type="text" value="{{$data[0]->photo}}"></th>
        </tr>
        <tr>
            <th>
                &emsp;&emsp;&emsp;&emsp;<input type="file" name="photo"  value="">
            </th>
        </tr>
        <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="修改">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset"  value="重置"></td>
        </tr>
        </table>
    </form>



</body>
</html>
