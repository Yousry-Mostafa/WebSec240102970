<!DOCTYPE html>
<html>

<head>

    <title>WebSec Service</title>

    <style>
        body {
            font-family: Arial;
            background: #f4f6f8;
            text-align: center;
            padding: 50px;
        }

        .card {
            background: white;
            width: 500px;
            margin: auto;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #2c3e50;
        }
    </style>

</head>

<body>

    <div class="card">

        <h1>Welcome to WebSec Service</h1>

        <p>Hello {{ $student }}</p>

        <p>{{ $course }}</p>

        <ul style="list-style:none">

            <li>Laravel Routing</li>
            <li>Blade Template</li>
            <li>PHP Variables</li>

        </ul>

        <p>Year: {{ $year }}</p>

    </div>

</body>

</html>