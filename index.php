<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Splash Screen</title>
    <style>
        /* Fè paj la pran tout espas ekran an */
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            overflow: hidden;
        }

        /* Style pou konpozan splash screen nan */
        .splash-screen {
            text-align: center;
        }

        .splash-screen img {
            width: 150px;
            height: 150px;
            opacity: 0;
            animation: fadeInScale 10s ease forwards; /* Animasyon logo an */
        }

        .splash-screen h1 {
            font-size: 24px;
            color: #333;
            opacity: 0;
            animation: bounceIn 10s 8s ease forwards; /* Animasyon tit lan */
        }

        /* Animasyon logo a (fade in + scale) */
        @keyframes fadeInScale {
            0% {
                transform: scale(0.5);
                opacity: 0;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        /* Animasyon tit lan (bounce in) */
        @keyframes bounceIn {
            0% {
                transform: translateY(-50px);
                opacity: 0;
            }
            60% {
                transform: translateY(10px);
                opacity: 1;
            }
            100% {
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="splash-screen">
        <!-- Logo pou splash screen la -->
        <img src="SGBL.png" alt="Logo">
        <h1>SGBL</h1>
    </div>

    <script>
        // Redirije apre 15 segond
        setTimeout(function() {
            window.location.href = "login.php"; // Paj destinasyon an
        }, 15000); // 15 segond
    </script>
</body>
</html>
