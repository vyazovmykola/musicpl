<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>music player</title>
    <link href="style.css" media="all" rel="Stylesheet" type="text/css" /> 
</head>
<body>
<div id="header">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="https://github.com/vyazovmykola">GitHub</a></li>
        </ul>
    </div>

    <div id="main">
        <div id="sideleft">
            <ul>
                <li><a href="#" class="artist-link" data-artist="tyler">Tyler, The Creator</a></li>
                <li><a href="#" class="artist-link" data-artist="frank">Frank Ocean</a></li>
                <li><a href="#" class="artist-link" data-artist="odd_future">Odd Future</a></li>
                <li><a href="#" class="artist-link" data-artist="alex_g">Alex G</a></li>
            </ul>
        </div>

        <div id="tracks">
            <p id="welcome_text">choose artist to load trecks</p>
            <div id="track-list"></div>
            <audio id="audio_player" controls>
                Your browser does not support audio playback.
            </audio>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>