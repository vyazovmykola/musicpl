<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn php</title>
    <link href="t1.css" media="all" rel="Stylesheet" type="text/css" /> 
</head>
<body>
    <div id="header">
        <ul>
            <li><a href="">home</a></li>
            <li><a href="https://github.com/vyazovmykola">github</a></li>
        </ul>
    </div>
    <div id="main">
        <div id="sideleft">
        <ul>
            <li>Tyler,The creator</li>
            <li>Frank Ocean</li>
            <li>Odd Future</li>
            <li>Alex G</li>
            <li>5</li>
        </ul>
        </div>

        <div id="tracks">
            <button class="track_list" onclick="play_track('Frank Ocean – Pyramids.mp3')">
                <img class="image" src="channel-orange.jpg">
                Pyramids<br>Frank Ocean
            </button>
            
            <button class="track_list" onclick="play_track('Frank Ocean – white ferrari.mp3')">
                <img class="image" src="blonde.jpg">
                White Ferrari <br> Frank Ocean
            </button>

            <audio id="audio_player" controls>
                your browser dont work with this audio
            </audio>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>