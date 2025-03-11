<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Simple HTML Table</title>

    <style>
        @font-face {
            font-family: "SolaimanLipi";
            src: url("{{ public_path('fonts/SolaimanLipi_22-02-2012.ttf') }}") format("truetype");
        }

        body {
            font-family: "SolaimanLipi";
        }

    </style>
</head>
<body>
<table border="1" width="100%" cellspacing="0" cellpadding="10">
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
    </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
        <tr>
            <td>{{ $post['id'] }}</td>
            <td>{{ $post['title'] }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
