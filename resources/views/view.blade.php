<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This page shows data from the database</h1>
    <form action={{ url('search') }} align="center" method="GET">  
        <input type='search' name='search' placeholder='Search by name or email'>
        <input type='submit' value='Search'>
    </form>
    <table border="1px" align="center">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Image</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td><img src="student_images/{{$student->image}}" width="100"></td>
                <td> <a href="{{url('delete', $student->id)}}">Delete</a> </td>
                <td><a href="{{url('update', $student->id)}}">Update</a></td>
            </tr>
            @endforeach
        </thead>
        <tbody></tbody>
        <a href="{{url('/')}}">Go Back</a>


    </table>
</body>
</html>