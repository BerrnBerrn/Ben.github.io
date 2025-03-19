<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Home</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                line-height: 1.6;
                margin: 0;
                padding: 0;
                background-color: rgb(54, 175, 181);
            }

            .top-bar {
                background-color: rgb(1, 49, 152);
                color: white;
                box-shadow: 0 2px 5px rgba(255, 255, 255, 0.23);
                padding: 10px 20px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                z-index: 1000;
            }

            .top-bar .nav-buttons {
                display: flex;
                gap: 10px;
            }

            .top-bar .nav-buttons a {
                text-decoration: none;
                color: white;
                background-color: rgb(29, 123, 177);
                padding: 8px 15px;
                border-radius: 5px;
                transition: background-color 0.33s, color 0.33s;
            }

            .top-bar .nav-buttons a:hover {
                background-color: rgb(255, 255, 255);
                color: rgb(7, 245, 255);
                font-size: 20px;
            }

            .container {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                width: 60%;
                margin: 150px auto;
                overflow: hidden;
                padding: 40px;
                background-color: rgb(69, 134, 210);
                border-radius: 150px;
                box-shadow: 0 0 500px rgb(102, 151, 255);
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
        <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    </head>
    <body>
    <div class="top-bar">
        <div class="nav-buttons">
            <h1 class="barTitle">Title</h1>
            <p class="barTitle"></p>
            <p class="barTitle"></p>
            <p class="barTitle"></p>
            <p class="barTitle"></p>
            <a href="{{ url('/index') }}">Page 1</a>
        </div>
    </div>
        <div class="container">
            <p class="main">Blue</p>
        </div>
    </body>
</html>
