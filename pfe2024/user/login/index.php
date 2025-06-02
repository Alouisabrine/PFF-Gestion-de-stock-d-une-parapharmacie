<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
           
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .login-box {
            background: rgba(255, 255, 255, 0.9); /* Arrière-plan blanc avec transparence */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 300px; /* Largeur du formulaire */
        }
        .login-box h1 {
            margin-bottom: 20px;
            font-size: 22px;
            text-align: center;
        }
        .textbox {
            margin-bottom: 15px;
            position: relative;
        }
        .textbox i {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #888;
        }
        .textbox input {
            width: calc(100% - 40px); /* Ajuste la largeur pour tenir compte de l'icône */
            padding: 10px 10px 10px 40px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }
        .button {
            background: #6c4f4f; /* Couleur marron foncé */
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        .button:hover {
            background: #5a3f3f; /* Couleur marron encore plus foncé pour le survol */
        }
    </style>
       </style>
</head>
<body>
    <form action="validate.php" method="post">
        <div class="login-box">
            <h1>Login</h1>
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Username" name="username" value="">
            </div>
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password" name="password" value="">
            </div>
            <input class="button" type="submit" name="login" value="Sign In">
        </div>
        
    </form>
</body>
</html>
