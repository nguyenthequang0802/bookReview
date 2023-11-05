<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Danh sách</h1>
    <table>
        <tr>
            <th>name</th>
            <th>age</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <th>{{$user['name']}}</th>
                <th>{{$user['age']}}</th>
            </tr>
        @endforeach
    </table>
</body>
</html>
