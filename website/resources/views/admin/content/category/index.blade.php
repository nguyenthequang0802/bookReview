<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="flex mx-auto mt-[30px] justify-center">
        <div class="">
            <h1 class="font-bold text-[40px] mb-[8px]">Danh sách thể loại</h1>
            <a href="" class="inline-block float-right mb-[8px]"><button class="btn btn-success float-right">Thêm mới</button></a>
            <div>
                <table class="table table-striped table-hover">
                    <tr>
                        <th>id</th>
                        <th>Thể loại</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category['id']}}</td>
                            <td>{{$category['name']}}</td>
                            <td class="text-center"><a href="" class="text-[blue]"><i class="fa-regular fa-pen-to-square"></i></a></td>
                            <td class="text-center"><a href="" class="text-[red]"><i class="fa-regular fa-trash-can"></i></a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
