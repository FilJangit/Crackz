<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meine Website</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            background-color: #0a0f1a;
            color: #ffffff;
            transition: background-color 0.3s, color 0.3s;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #1c2333;
            color: white;
            position: fixed;
            padding: 20px;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.5);
        }
        .sidebar h2 {
            color: #4da8da;
        }
        .sidebar a {
            color: #ffffff;
            text-decoration: none;
            display: block;
            padding: 10px 0;
            transition: 0.3s;
        }
        .sidebar a:hover {
            color: #4da8da;
        }
        .content {
            margin-left: 300px;
            padding: 20px;
        }
        h1, h2 {
            color: #4da8da;
        }
        img {
            width: 100%;
            max-width: 600px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);
        }
        p {
            font-size: 18px;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Crackz</h2>
        <a href="#home">Startseite</a>
        <a href="#about">Über uns</a>
    </div>
    <div class="content">
        <h1 id="home">Willkommen auf meiner Website</h1>
        <img src="bild.jpg" alt="Beispielbild">
        <h2 id="about">Über uns</h2>
        <p>Hier ist eine kurze Beschreibung über unser Projekt.</p>
    </div>
</body>
</html>
