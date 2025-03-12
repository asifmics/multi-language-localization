<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Title</th>
    </tr>
    </thead>
    <tbody>
    @foreach($user->posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
