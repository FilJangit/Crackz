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
        .login-input {
            margin-bottom: 20px;
        }
        .login-input input {
            width: 100%;
            padding: 8px;
            border: none;
            border-radius: 5px;
            outline: none;
            margin-bottom: 10px;
        }
        .login-input button {
            width: 100%;
            padding: 8px;
            background-color: #4da8da;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            transition: 0.3s;
        }
        .login-input button:hover {
            background-color: #357ca5;
        }
        .error-message {
            color: red;
            display: none;
            font-size: 12px;
            margin-top: 5px;
        }
        .settings {
            margin-top: 20px;
            padding-top: 10px;
            border-top: 1px solid #4da8da;
            position: relative;
        }
        .settings-button {
            width: 100%;
            padding: 8px;
            background-color: #4da8da;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            transition: 0.3s;
        }
        .settings-button:hover {
            background-color: #357ca5;
        }
        .theme-container {
            display: none;
            background: #1c2333;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
            white-space: nowrap;
            margin-top: 10px;
        }
        .theme-toggle {
            padding: 8px 12px;
            background-color: #4da8da;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }
        .theme-toggle:hover {
            background-color: #357ca5;
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
        .light-mode {
            background-color: #ffffff;
            color: #000000;
        }
        .light-mode .sidebar {
            background-color: #f0f0f0;
            color: #000000;
        }
        .light-mode .sidebar a {
            color: #000000;
        }
        .light-mode .sidebar a:hover {
            color: #357ca5;
        }
        .light-mode h1, .light-mode h2 {
            color: #357ca5;
        }
    </style>
    <script>
        function checkLogin() {
            var username = document.getElementById("username").value.toLowerCase();
            var password = document.getElementById("password").value;
            var errorMessage = document.getElementById("error-message");
            if (username === "nikeit" && password === "1234") {
                window.location.href = "data.php";
            } else {
                errorMessage.style.display = "block";
            }
        }
        function toggleTheme() {
            document.body.classList.toggle("light-mode");
        }
        function toggleSettings() {
            var themeContainer = document.getElementById("themeContainer");
            if (themeContainer.style.display === "none" || themeContainer.style.display === "") {
                themeContainer.style.display = "block";
            } else {
                themeContainer.style.display = "none";
            }
        }
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("password").addEventListener("keypress", function(event) {
                if (event.key === "Enter") {
                    checkLogin();
                }
            });
            document.getElementById("username").addEventListener("keypress", function(event) {
                if (event.key === "Enter") {
                    checkLogin();
                }
            });
        });
    </script>
</head>
<body>
    <div class="sidebar">
        <button class="settings-button" onclick="toggleSettings()">Einstellungen</button>
        <div class="settings">
            <div id="themeContainer" class="theme-container">
                <button class="theme-toggle" onclick="toggleTheme()">Light/Dark Mode</button>
            </div>
        </div>
        <h2>Crackz</h2>
        <div class="login-input">
            <input type="text" id="username" placeholder="Username">
            <input type="password" id="password" placeholder="Password">
            <button onclick="checkLogin()">Login</button>
            <p id="error-message" class="error-message">Falscher Benutzername oder Passwort!</p>
        </div>
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
