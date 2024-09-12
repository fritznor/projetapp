<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paj Aksyon</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            background-image: url(ImageBackground.png);
            background-size: cover;
            background-position: center;
        }

        /* Navbar anwo a */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #007BFF;
            padding: 10px 20px;
            color: white;
        }

        .navbar i {
            font-size: 6vw;
            cursor: pointer;
        }

        /* Seksyon pou tablo a */
        .table-section {
            padding: 20px;
            flex-grow: 1;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            position: fixed;
        }

        td {
            padding: 10px;
            border: none; /* Pa gen lign separatis */
        }

        /* Card pou dropdown ak bouton plis la */
        .card {
            background-color: white;
            padding: 20px;
            margin: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .dropdown {
            width: 70%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .plus-button {
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .plus-button:hover {
            background-color: #218838;
        }

        /* Modal pou bouton plis la */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 80%;
        }

        .modal-content button {
            display: block;
            margin: 10px auto;
            padding: 10px;
            width: 100%;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .modal-content button:hover {
            background-color: #0056b3;
        }

        /* Chenn done ak bouton ajoute */
        .input-section {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        .input-section input {
            width: 48%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .add-button {
            display: block;
            margin: 20px auto;
            padding: 15px;
            width: 50%;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
        }

        .add-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <!-- Navbar ak icon yo -->
    <div class="navbar">
        <i class="fas fa-arrow-left"></i>
        <i class="fas fa-trash"></i>
        <i class="fas fa-envelope"></i>
        <i class="fas fa-print"></i>
    </div>

    <!-- Tablo de 3 kolòn -->
    <div class="table-section">
        <table>
            <tr>
                <td>Typ jwet</td>
                <td>Jwet</td>
                <td>Pri</td>
            </tr>
            <tr>
                <td>BO</td>
                <td>46</td>
                <td>50</td>
            </tr>
            <tr>
                <td>MAR</td>
                <td>45*25</td>
                <td>30</td>
            </tr>
        </table>
    </div>

    <!-- Card ak dropdown ak bouton plis la -->
    <div class="card">
        <select class="dropdown">
            <option value="tab1">Tab 1</option>
            <option value="tab2">Tab 2</option>
            <option value="tab3">Tab 3</option>
        </select>
        <button class="plus-button" onclick="openModal()">Plis</button>
    </div>

    <!-- Modal pou opsyon plis yo -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <button>Boul Pairè</button>
            <button>Grappe</button>
            <button>Pick</button>
            <button onclick="closeModal()">Fèmen</button>
        </div>
    </div>

    <!-- Seksyon chenn done yo ak bouton ajoute -->
    <div class="input-section">
        <input type="text" placeholder="jwet">
        <input type="text" placeholder="pri">
    </div>

    <button class="add-button">Ajoute</button>

    <script>
        // Fonksyon pou louvri modal la
        function openModal() {
            document.getElementById('modal').style.display = 'flex';
        }

        // Fonksyon pou fèmen modal la
        function closeModal() {
            document.getElementById('modal').style.display = 'none';
        }
    </script>
</body>
</html>
