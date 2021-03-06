<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="canonical" href=""> <!-- Met le nom du site internet ex: https://www.google.fr -->
	<title>Image PLay</title>
	<link rel="stylesheet" href="all.css" />
	<script src="script.js"></script>
</head>
<body>
	<div id='img-video-slide'>
        <div class="slider-inner">
            <ul>
                <li><a class="ns-img" href="img/1.jpg"></a></li>
                <li>
                    <div class="video">
                        <iframe src="https://player.vimeo.com/video/93292237" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <a class="ns-img" href="img/2.jpg"></a>
                    <div class="caption">Supports Youtube, Vimeo and HTML video/audio</div>
                    <div class="video-playbutton-layer"></div>
                </li>
                <li>
                    <div class="video">
                        <iframe src="https://www.youtube.com/embed/Bp119VFEjHE?enablejsapi=1&start=216&rel=0&showinfo=0&iv_load_policy=3&modestbranding=1" frameborder="0" allowfullscreen data-autoplay="false"></iframe>
                    </div>
                    <a class="ns-img" href="img/3.jpg"></a>
                    <div class="caption">This video starts from 3:36</div>
                    <div class="video-playbutton-layer"></div>
                </li>
                <li>
                    <div class="video">
                        <video controls width="100%">
                            <source src="img/mcvideo.mp4" type="video/mp4" />
                        </video>
                    </div>
                </li>
                <li>
                    <a class="ns-img" href="img/5.jpg"></a>
                    <div class="video" style="background-color:transparent;height:auto;top:auto;bottom:0px;">
                        <audio controls data-autoplay="1">
                            <source src="img/mcaudio.mp3" type="audio/mpeg">
                        </audio>
                    </div>
                </li>
            </ul>
            <div class="fs-icon"></div>
        </div>
    </div>
</body>
</html>