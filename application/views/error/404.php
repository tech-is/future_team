<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>404Not Found</title>
  </head>
  
<body>
    <div class="wraper">
      <div class="center">
        <div class="neon">404<span> not </span>found</div>
        <p><a href="http://www.MtoF.com/">LOGIN PAGE</a></p>  
        <img src="assets/img/tt_anime.gif">
      </div>
    </div>
  
  <style>
    @import url('https://fonts.googleapis.com/css?family=Tomorrow:900&display=swap');
    html,body {
        font-family: 'Tomorrow', sans-serif;
        text-align: center;
        }
    body {
        background: black;
      }
     .wraper {
        max-width: 50%;
        margin: auto;
      } 
      p {
        font-weight:bold;
        font-size: xx-large;
      }  
      img {
            max-width: 100%;
            height: auto;
        }
      a:visited {
        color:whitesmoke;
      }
      a:hover {
        color:#FB1684;
        text-decoration:underline;
      }
      a:active {
        opacity: 0.5;
      }
      .neon {
       margin-top: 200px;
        display: inline-block;
        color: #fff;
        letter-spacing: .05em;
        font-size: 5em;
        text-shadow: 0 1px 30px #FB1684, 0 0 12px #fff, 2px 5px 60px #990a52; 
      }
      .neon > span {
        -webkit-animation: blink 3s infinite alternate;
        animation: blink 3s infinite alternate;
      }
      @-webkit-keyframes blink {
        40% {
          opacity: .85;
        }
        42% {
          opacity: .4;
        }
        43% {
          opacity: .85;
        }
        45% {
          opacity: .4;
        }
        46% {
          opacity: .85;
        }
      }
      @keyframes blink {
        40% {
          opacity: .85;
        }
        42% {
          opacity: .4;
        }
        43% {
          opacity: .85;
        }
        45% {
          opacity: .4;
        }
        46% {
          opacity: .85;
        }
    </style>
    
    /* <div id="container">
      <h1><?php echo $heading; ?></h1>
      <?php echo $message; ?>
	  </div> */
  </body>
</html>
