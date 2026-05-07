<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update page</title>
</head>
<body>
    <h1>Update Student Information</h1>
    <form action="{{url('update_data', $student->id)}}" method="Post" enctype="multipart/formdata">
        @csrf 
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value = "{{$student->name}}">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value = "{{$student->email}}" >

        <label for="image">Profile Image:</label>
        <img src="/student_images/{{$student->image}}" width="100" height="100">
        
        <label> Enter new image</label>
        <input type="file" id="image" name="image">

        <input type="submit" value="update_data">

</body>
</html>