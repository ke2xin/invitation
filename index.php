<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>黄子锴6周岁生日 邀请函</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=0.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <link rel="icon" href="images/logo.ico">
    <style>
        * {
            margin: 0;
        }

        html, body {
            width: 100%;
        }

        #main {
            width: 100%;
            overflow: hidden;
            position: relative;
        }

        .fall {
            animation: hidetip 2s 1;
            animation-fill-mode: both;
            -webkit-animation: hidetip 2s 1;
            -webkit-animation-fill-mode: both;
        }

        .up {
            animation: uptip 1s 1;
            animation-fill-mode: both;
            -webkit-animation: uptip 1s 1;
            -webkit-animation-fill-mode: both;
        }

        @keyframes hidetip {
            from {
                opacity: 1;
                top: 0;
            }
            to {
                opacity: 0;
                top: 6000px;
            }
        }

        @-webkit-keyframes hidetip {
            from {
                opacity: 1;
                top: 0;
            }
            to {
                opacity: 0;
                top: 6000px;
            }
        }

        @keyframes uptip {
            from {

                top: 1000px;
            }
            to {

                top: 0;
            }
        }

        @-webkit-keyframes uptip {
            from {

                top: 1000px;
            }
            to {

                top: 0;
            }
        }
        #hewenqi{
            position: absolute;
            right: 5px;
            top: 5px;
            z-index: 9;
            display: block;
        }
        .playHovertree{
            display: none;
        }
        .pauseHovertree,.playHovertree{
            border: 0px solid yellow;
            cursor: pointer;
            opacity: 0.8;
            background-image: url("images/music_note_big.png");
            width: 44px;
            height: 44px;
            background-repeat: no-repeat;
        }
        .hovertreerun{
            animation: hovertreecircle 2s linear infinite;
        }
        @keyframes hovertreecircle {
            0%{
                transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -webkit-transform:rotate(0deg);
                -o-transform:rotate(0deg);
            }
            100%{
                transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -webkit-transform:rotate(360deg);
                -o-transform:rotate(360deg);
            }
        }

        .ani{
            position: absolute;
            bottom: 20px;
            display: flex;
            justify-content: center;
            left: 0;
            right: 0;
            animation: heart 1.3s ease infinite;
        }

        @keyframes heart {
            from{
                transform: translate(0,15px);
                opacity: 0;
            }
            to{
                transform: translate(0,1px);
                opacity: 1;
            }
        }
    </style>
    <link  rel="stylesheet" href="css/ll.css" type="text/css">
</head>
<body>
<div id="main">
    <div id="page1"
         style="width: 100%;height: 100%;position: absolute;top: 0;background: rebeccapurple;transform-origin: 0% 0% 0px;display: none;"></div>
    <div id="page2"
         style="width: 100%;height: 100%;position: absolute;top: 0;background: burlywood;transform-origin: 0% 0% 0px;display: none;"></div>
    <div id="page3"
         style="width: 100%;height: 100%;position: absolute;top: 0;background: coral;transform-origin: 0% 0% 0px;"></div>
    <div id="hewenqi">
        <div class="playHovertree"></div>
        <div class="pauseHovertree hovertreerun"></div>
    </div>
    <audio id="music" loop src="audio/hovertreehappy.mp3"></audio>
    <div class="ani"><img src="images/up.png" style="width: 32px;"></div>
</div>

<div id="ll">
    <div class="loaders">
        <div class="loader">
            <div class="loader-inner cube-transition">
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script>
    $(function () {
        const innerHeight = window.innerHeight;
        $('#main').css({'height': innerHeight + 'px'});
        $('#ll').css({'height': innerHeight + 'px'});
        var s1 = 0;
        var s2 = 0;
        var s3 = 0;
        //第一页
        $('#page3').on('touchstart', function (e) {
            s3 = 1;
        })
        $('#page3').on('touchmove', function (e) {
            s3 = s3 + 1
            $('#page3').css({'transform': 'rotate(' + s3 + 'deg)'})
        })
        $('#page3').on('touchend', function (e) {
            s3 = 0;
            $('#page3').addClass('fall')
            $('#page2').css({'opacity': 1, 'display': 'block', 'top': 0, 'transform': 'none'})
            $('#page2').removeClass('fall')
            $('#page3').removeClass('up')
            $('#page2').addClass('up')
        })

        //第二页
        $('#page2').on('touchstart', function (e) {
            s2 = 1;
        })
        $('#page2').on('touchmove', function (e) {
            s2 = s2 + 1
            $('#page2').css({'transform': 'rotate(' + s2 + 'deg)', 'opacity': .7})
        })
        $('#page2').on('touchend', function (e) {
            s2 = 0
            $('#page2').addClass('fall')
            $('#page1').css({'opacity': 1, 'display': 'block', 'top': 0, 'transform': 'none'})
            $('#page1').removeClass('fall')
            $('#page2').removeClass('up')
            $('#page1').addClass('up')
        })

        //第三页
        $('#page1').on('touchstart', function (e) {
            s1 = 1;
        })
        $('#page1').on('touchmove', function (e) {
            s1 = s1 + 1
            $('#page1').css({'transform': 'rotate(' + s1 + 'deg)', 'opacity': .7})
        })
        $('#page1').on('touchend', function (e) {
            s1 = 0
            $('#page1').addClass('fall')
            $('#page3').css({'opacity': 1, 'display': 'block', 'top': 0, 'transform': 'none'})
            $('#page3').removeClass('fall')
            $('#page1').removeClass('up')
            $('#page3').addClass('up')
        })

        //播放按钮
        $('.playHovertree').on('click',function (e){
            $('#music')[0].play()
            $(this).hide()
            $('.pauseHovertree').show()
        })
        $('.pauseHovertree').on('click',function (e){
            $('#music')[0].pause()
            $(this).hide()
            $('.playHovertree').show()
        })


        setTimeout(function (){
            $('#ll').remove()
        },3000)

    })

    autoPlayMusic()
    function autoPlayMusic() {

        function browserHandler() {
            musicPlay(true);
            document.body.removeEventListener('touchstart', browserHandler);
        }
        document.body.addEventListener('touchstart', browserHandler);


        function weixinHandler() {
            document.querySelector('#ll').className += 'loaded';
            musicPlay(true);
            document.addEventListener("WeixinJSBridgeReady", function () {
                musicPlay(true);
            }, false);
            document.removeEventListener('DOMContentLoaded', weixinHandler);
        }
        document.addEventListener('DOMContentLoaded', weixinHandler);
    }
    function musicPlay(isPlay) {
        var media = document.querySelector('#music');
        if (isPlay && media.paused) {
            media.play();
        }
        if (!isPlay && !media.paused) {
            media.pause();
        }
    }

</script>
</body>
</html>
