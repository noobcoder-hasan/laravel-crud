<!doctype html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <style>
        /* General Page Styling */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 50px;
            margin: 0;
        }

        h1 {
            color: #2c3e50;
        }

        /* Form Container */
        form {
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        /* Labels and Inputs */
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box; /* Ensures padding doesn't affect width */
        }

        /* Button Styling */
        input[type="submit"] {
            width: 100%;
            background-color: #9bdb34;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

    <h1>Home Page</h1>
    <p>Welcome to the home page!</p>

    <form action="{{ url('upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="email@example.com">

        <label for="image">Profile Image:</label>
        <input type="file" id="image" name="image">

        <input type="submit" value="Submit">
    </form>

</body>
</html>