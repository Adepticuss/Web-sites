<!doctype html>
<title>Daniil Shcherban</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="description" content="I design and code things on the web." />
<meta property="og:site_name" content="VisitDan.com" />
<meta property="og:title" content="Daniil Shcherban" />
<meta property="og:description" content="I design and code things on the web." />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://visitdan.com" />
<meta property="og:image" content="http://visitdan.com/img/og-image.png" />
<meta property="og:image:type" content="image/png" />
<meta property="og:image:width" content="768" />
<meta property="og:image:height" content="416" />
<link rel="icon" type="image/png" href="img/favicon.png" />
<link rel="apple-touch-icon" href="img/apple-touch-icon.png" />
<link rel="stylesheet" type="text/css" media="screen" href="css/styles.css" />
<body>
<!--Music Button-->
<button class="but" onclick="EnableAutoPlay()" type="button" style="margin-left: 800px">♬</button>

<!--Neon buttons-->
<div class="a-group">
<a href="../visitdan.com-gh-pages/index.php">
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  Contact Me
</a>
<a href="../visitdan.com-gh-pages/img/Daniil's Resume.pdf" download="Daniil's%20Resume.pdf" id="link">
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  Resume
</a>
<a href="../visitdan.com-gh-pages/About.html">
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  About Me
</a>
</div>
<!--<button class="but" onclick="EnableAutoPlay()" type="button" style="margin-right:1050px">♬</button>-->
<div class="messages"></div>


<audio controls autoplay id="my_audio">
  <source src="aud/webbackground.wav" type="audio/ogg">
  <source src="aud/webbackground.mp3" type="audio/mpeg">
</audio>

<img src="img/photo2.png" alt="My_pic" class="my_pic" style=" size: portrait; height: 500px; width: 500px; float: right; margin-top: 170px; margin-left:  420px;  position: fixed">
<!--  <script>-->
<!--    var link = document.getElementById("link");-->
<!--    link.click()-->
<!--  </script>-->
  <script src="js/anime.js"></script>
  <script src="js/scripts.js"></script>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-37236197-1', 'auto');
    ga('send', 'pageview');

    var x = document.getElementById("my_audio");

    function EnableAutoPlay(){
      x.autoplay=true;
      x.load();
    }

  </script>

</body>
<!--<footer>-->
<!--  <div class="line"></div>-->

<!--</footer>-->
