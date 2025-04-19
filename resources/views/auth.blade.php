<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .auth-form {
            max-width: 300px;
            padding: 20px;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, .1);
            
            h2 {
                text-align: center;
                margin-bottom: 20px;
            }
            
            form {
                display: flex;
                flex-direction: column;
                
                .input-group {
                    display: flex;
                    align-items: center;
                    margin-bottom: 15px;
                    
                    label {
                        width: 100%;
                        font-weight: bold;
                        margin-right: 10px;
                    }
                    
                    input[type=text], input[type=password] {
                        width: 100%;
                        padding: 10px;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        outline: none;
                        
                        &::placeholder {
                            color: #aaa;
                        }
                    }
                }
                
                button {
                    padding: 10px;
                    background-color: #007bff;
                    color: white;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                    transition: background-color 0.3s ease;
                    
                    &:hover {
                        background-color: #0056b3;
                    }
                }
                
                a {
                    display: block;
                    text-align: right;
                    margin-top: 10px;
                    color: #007bff;
                    text-decoration: underline;
                }
            }
        }
    </style>
</head>
<body>
    <div class="auth-form">
        <h2>Авторизация</h2>
        <form action="/auth" method="post">
            @csrf
            <div class="input-group">
                <label for="username">Имя пользователя:</label>
                <input type="text" id="login" name="login" placeholder="Ваше имя пользователя" required autofocus />
            </div>
            
            <div class="input-group">
                <label for="password">Пароль:</label>
                <input type="password" id="password" name="password" placeholder="Ваш пароль" required />
            </div>
            
            <button type="submit">Войти</button>
            
        </form>
    </div>
</body>
</html>