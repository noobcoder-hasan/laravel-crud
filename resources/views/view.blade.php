<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This page shows data from the database</h1>
    <table border="1px" align="center">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Image</th>
            </tr>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td><img src="student_images/{{$student->image}}" width="100"></td>
            </tr>
            @endforeach
        </thead>
        <tbody></tbody>


    </table>
</body>
</html>