<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Picture Quiz Game</title>
    <link rel="stylesheet" href="../css/PicturesGameStyle.css">
</head>
<body>
    <div class="container">
        <h2>Picture Game</h2>
        <div class="game"></div>
        <div id="timer">00:00</div>
        <div>Clicks: <span id="Clicks">0</span></div>
        <button class="reset" onclick="window.location.reload();">Reset Game</button>
    </div>

    <div class="input-box">
        <button class="backbutton" id="loginButton" type="button"onclick="redirectToMemorypage()">EXIT PAGE</button>
    </div>

   
    <script src="../js/PicturesGameScript.js"></script>
</body>
</html>
