@extends("layout.adminLayoutPage")
@section('content')
    <div class="tables">
        <div class="table-responsive bs-example widget-shadow">
            <h4>Responsive Table:</h4>
            <a href="" class="inline-block float-right mb-2"><button class="btn btn-success float-right">Thêm mới</button></a>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>name</th>
                    <th>slug</th>
                    <th>category_id</th>
                    <th>author</th>
                    <th>action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($books as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->slug}}</td>
                        <td>{{$item->category_id}}</td>
                        <td>{{$item->author}}</td>
                        <td class="text-center">
                            <a href="" class="text-[blue]">sua</a>
                            <a href="" class="text-[red]">xoa</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
