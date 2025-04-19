<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel 10 vite with React</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #F0F0F0;
            margin: 0;
            padding: 20px;
        }
        
        h1 {
            text-align: center;
            color: #3A7BD5;
        }
        
        .container {
            width: 80%;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,.1);
        }
        
        ul.project-list {
            list-style: none;
            padding: 0;
        }
        
        .project-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            border-bottom: 1px solid #EAEAEA;
        }
        
        button {
            background-color: #3A7BD5;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }
        
        button:hover {
            background-color: #2C66B1;
        }
        
        form.add-project-form {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }
        
        input[type="text"], select {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            outline: none;
        }
    </style>

    @viteReactRefresh
    @vite('resources/js/app.jsx')
</head>
<body>
    <div id="app"></div>
</body>
</html>