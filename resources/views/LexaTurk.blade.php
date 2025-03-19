<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LexaTurk - Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #f0f0f0;
            margin: 0;
        }
        .container {
            display: flex;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 800px;
        }
        .text-section {
            padding: 70px;
            width: 50%;
            text-align: center;
        }
        .image-section {
            width: 50%;
            background: url('image/12.jpg') no-repeat center center/cover;
        }
        h1 {
            font-size: 28px;
            margin-bottom: 10px;
        }
        p {
            font-size: 14px;
            margin-bottom: 20px;
        }
        .btn {
            display: block;
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            color: white;
            background: #14213d;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 18px;
            transition: 0.3s;
        }
        .btn:hover {
            background: #1b263b;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="text-section">
            <h1>LexaTürk</h1>
            <p>AI Law Chatbot - Your free lawyer and trusted friend!</p>
            <a href="{{ route('login') }}" class="btn">Sign in</a>
            <a href="{{ route('register') }}" class="btn">Sign up</a>
            <a href="#" class="btn">Join as a guest.</a>
        </div>
        <div class="image-section"></div>
    </div>

</body>
</html>
