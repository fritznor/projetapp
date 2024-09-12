<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paj Login - Mobile</title>
    <style>
        /* Style pou fè paj la pran tout ekran an ak background image */
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('ImageBackground.png'); /* Background image */
            background-size: cover;
            background-position: center;
        }

        /* Login container style ak logo anwo fòm nan */
        .login-container {
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 350px;
            text-align: center;
           
        }

        /* Style pou logo anwo fòm login lan */
        .login-container img {
            width: 100px; /* Ajiste gwosè logo a selon ekran mobil */
            height: auto;
            margin-bottom: 8px; /* Espas ant logo ak tit la */
        }

        .login-container h2 {
            margin-bottom: 20px;
            font-size: 5vw;
            color: #333;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 5px 10px 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 4vw;
        }

        .login-container button {
            width: 110%;
            padding: 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 4vw;
            cursor: pointer;
        }

        .login-container button:hover {
            background-color: #45a049;
        }

        /* Tèks pou vèsyon aplikasyon an anba paj la */
        .version-text {
            position: absolute;
            bottom: 10px;
            text-align: center;
            width: 100%;
            color: black;
            font-size: 30px;
        }

        /* Responsiv pou ti telefòn */
        @media screen and (max-width: 480px) {
            .login-container {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- Ajoute logo anwo tit la -->
        <img src="SGBL.png" alt="Logo Aplikasyon">
        <h2>KONEKSYON</h2>
        <!-- Chenn pou ID ak Modpas -->
        <input type="text" placeholder="Idantifyan" required>
        <input type="password" placeholder="Kod akse" required>
        <button onclick="redirectUser()">Konekte</button>
    </div>

    <!-- Tèks pou vèsyon aplikasyon an anba paj la -->
    <div class="version-text">
        Version 1.0.0
    </div>
    <script>
        // Fonksyon pou redirije itilizatè a apre li klike sou bouton login lan
        function redirectUser() {
            window.location.href = "Akey.php"; // Ranplase ak paj ou vle a
        }
    </script>
</body>
</html>
<?php
try {
    //code...
} catch (\Throwable $th) {
    //throw $th;
}
?>