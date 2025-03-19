<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title>Index</title>
    </head>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: rgb(151, 151, 151);
        }
        .top-bar {
            background-color: rgb(50, 50, 50);
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            box-shadow: 0 2px 100px rgb(50, 50, 50);
            z-index: 1000;
        }
        .top-bar .nav-buttons {
            display: flex;
            gap: 10px;
        }
        .top-bar .nav-buttons a {
            text-decoration: none;
            color: rgb(196, 196, 196);
            background-color: rgb(97, 97, 97);
            padding: 8px 15px;
            border-radius: 5px;
            transition: background-color 0.33s, color 0.33s;
        }
        .top-bar .nav-buttons a:hover {
            background-color: rgb(255, 255, 255);
            color: rgb(97, 97, 97);
            font-size: 20px;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 90%;
            margin: 150px auto;
            overflow: hidden;
            padding: 40px;
            background-color: rgb(151, 151, 151);
        }
        h1, h2, h3, h4, h5, h6 {
            color: #646464;
            margin: 20px 0;
            text-align: left;
        }
        p {
            margin: 100px 0;
            color: #666;
        }
        .main {
            font-size: 30px;
            text-align: center;
            padding: 10px;
            border-radius: 5px;
            color: rgb(100, 100, 100);
        }
        .clock {
            font-size: 300px;
            font-family: "calibri", serif;
            text-align: center;
            color: rgb(255, 255, 255);
            border: 25px solid rgb(255, 255, 255);
            padding: 10px;
            display: inline-block;
            border-radius: 150px;
            box-shadow: 0 0 20px rgb(255, 255, 255);
            text-shadow: 0 0 20px rgb(255, 255, 255);
        }
        .barTitle{
            font-size: 25px;
            color: rgb(255, 255, 255);
            text-align : center;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            overflow: hidden;
            margin: 0;
        }
    </style>
    <body>
        <div class="top-bar">
            <div class="nav-buttons">
                <h1 class="barTitle">Title</h1>
                <p class="barTitle"></p>
                <p class="barTitle"></p>
                <p class="barTitle"></p>
                <p class="barTitle"></p>
                <a href="{{ url('/home') }}">Page 2</a>
            </div>
        </div>
        <br>
        <br>
        <div class="container">
            <div class="clock main h1" id="clock"></div>
        </div>
        <script>
            function updateClock() {
                const now = new Date();
                let hours = now.getHours();
                let minutes = now.getMinutes();
                const ampm = hours >= 12 ? 'PM' : 'AM';
                hours = hours % 12;
                hours = hours ? hours : 12;
                minutes = minutes < 10 ? '0' + minutes : minutes;
                document.getElementById('clock').innerHTML = `${hours}:${minutes} ${ampm}`;
            }
            const clockInterval = setInterval(updateClock, 1000);
            updateClock();
        </script>
    </body>
</html>
