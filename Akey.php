<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Byenveni - Paj Aksè</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Fè paj la pran tout ekran an ak background image */
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            background-image: url('ImageBackground.png'); /* Background image */
            background-size: cover;
            background-position: center;
        }

        /* Kònteneur pou logo ak tit la */
        .header {
            text-align: center;
            margin-top: 100px;
        }

        .header img {
            width: 100px;
            height: auto;
        }

        .header h1 {
            font-size: 6vw;
            color: white;
            margin-top: 10px;
        }

        /* Bouton konteyner pou aksyon yo */
        .actions {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            padding: 20px;
            margin-bottom: 10px;
        }

        .actions button {
            width: 80%;
            padding: 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 5vw;
            cursor: pointer;
    
        }

        .actions button:hover {
            background-color: #45a049;
        }

        /* Pye de paj (footer) */
        .footer {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 10px 0;
        }

        .footer i {
            font-size: 6vw;
            color: #333;
        }

        /* Responsiv ajistman pou telefòn */
        @media screen and (max-width: 480px) {
            .header h1 {
                font-size: 8vw; /* Pi gwo tit sou ti telefòn */
            }

            .actions button {
                font-size: 6vw; /* Ajiste bouton pou telefòn */
            }

            .footer i {
                font-size: 7vw; /* Icon pi gwo pou telefòn */
            }
        }
    </style>
</head>
<body>
    <!-- Header pou logo ak tit Byenveni -->
    <div class="header">
        <img src="SGBL.png" alt="Logo Aplikasyon">
        <h1>Byenveni!</h1>
    </div>

    <!-- Seksyon aksyon yo -->
    <div class="actions">
        <button onclick="location.href='nouvofich.php'">Nouvo Fich</button>
        <button onclick="location.href='chachefich.php'">Chache Fich</button>
        <button onclick="location.href='fichmwenyo.php'">Fich Mwen yo</button>
    </div>

    <!-- Pye de paj ak icon pou aksè rapid -->
    <div class="footer">
        <i class="fas fa-home" onclick="location.href='Akey.php'"></i>
        <i class="fas fa-file-alt" onclick="location.href='rapport.php'"></i>
        <i class="fas fa-cog" onclick="location.href='konfigirasyon.php'"></i>
    </div>
</body>
</html>
