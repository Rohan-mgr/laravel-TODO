<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Todo</title>
</head>

<body>
    <h1 class="text-center">Shopping Lists</h1>
    <div class="text-center">
        <form action="{{route('saveTodo')}}" method="post">
            @csrf
            <!-- <input type="text" name="todoItem" /> -->
            <input required type="text" class="form-control w-25 mx-auto" name="todoItem" placeholder="Shopping Item"
                aria-label="Todo-Item" aria-describedby="basic-addon1">
            <button class="btn btn-success my-2" type="submit">Add Shopping Item</button>
        </form>
    </div>
    <table class="table table-hover w-75 mx-auto my-3">
        <thead>
            <tr class="table-primary">
                <th scope="col">S.N</th>
                <th scope="col">Title</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-danger">
                @foreach($items as $value)
            <tr class="table-primary">
                <th scope="row">{{$loop->index + 1}}</th>
                <td>{{$value->Title}}</td>
                <!-- <td>{{$value->id}}</td> -->
                <td>
                    <a class="btn btn-primary" href="/edit/{{$value->id}}">Edit</a>
                    <a class="btn btn-danger" href="/delete/{{$value->id}}">Delete</a>
                </td>
            </tr>
            @endforeach
            </tr>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>