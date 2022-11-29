<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<body>
    <h1>Edit Item</h1>

    <form action="/edit/{{$item->id}}" method="post">
        @csrf
        <input required type="text" value="{{$item->Title}}" class="form-control w-25 mx-auto" name="todoItem"
            placeholder="Shopping Item" aria-label="Todo-Item" aria-describedby="basic-addon1">
        <button class="btn btn-success my-2" type="submit">Update</button>
    </form>
</body>

</html>