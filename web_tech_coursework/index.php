<?php
require "header.php";
?>

<head>
    <title>Huginn | Home</title>
</head>

    <div class="grid-wrapper">
        <div class="video_container">
        <div class="vid-shadow">
            <video id="bunny">
                <source src="Big_Buck_Bunny_extract.mp4" type="video/mp4">
                <source src="Big_Buck_Bunny_extract.ogv" type="video/ogv">
        Your browser does not support HTML5 video. Please change your browser.
            </video><div id="vid_controls_bar">
                <button class="btn btn-outline-success" id="playpausebtn">Play</button>
                <input id="slider" type="range" min="0" max="100" value="0" step="1">
            </div>
        </div>
        <div>
                <p>Video courtesy of <a href="https://www.bigbuckbunny.org/" target="_blank">Big Buck Bunny</a>
                </p>
            </div>
        </div>

        <div class="my-name">
            <h1 class="big-name">Huginn</h1>
            <h1 class="big-name">Trygve</h1><br>
            <h4>WEB DEVELOPER</h4>
            <p id="home-paragraph">Welcome to my website! Here you'll find a list of events happening at keele, and you'll be able to submit events too, if you're an admin! you can also watch this video of Big Buck Bunny.</p>
        </div>
    
        
        
    </div>

<?php
require "footer.php";
?>