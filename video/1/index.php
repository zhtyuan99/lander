<?php
$cat = isset($_GET['cat']) ? $_GET['cat'] : "1";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="format-detection" content="telephone=no" />
        <meta name="viewport" content="width=device-width,height=device-height,user-scalable=no,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0" />
        <title>发现</title>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href="css/swiper.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="css/iconfont.css">
        <link href="css/reset.css" type="text/css" rel="stylesheet" />
        <link href="css/find.css?v=12233" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <div class="container">
            <nav class="swiper-container nav-container">
                <ul class="swiper-wrapper nav-ul">

                    <li class="swiper-slide active-li">
                        <a href="index.php?cat=1" data-cat='1' class="slide-a">Popular This Week</a>
                    </li>
                    <li class="swiper-slide">
                        <a href="index.php?cat=2" data-cat='2' class="slide-a">Popular This Month</a>
                    </li>
                    <li class="swiper-slide">
                        <a href="index.php?cat=3" data-cat='3' class="slide-a">Popular This Year</a>
                    </li>
                    <li class="swiper-slide">
                        <a href="index.php?cat=4" data-cat='4' class="slide-a">Popular All Time</a>
                    </li>

                </ul>
            </nav>
            <aside class="fall-box grid">



            </aside>
            <a href="javascript:;" class="more-a">
                <button class="btn btn-warning"> More </button>
            </a>
        </div>
        <div id="frame">
            <p style="text-align: center;font-size:20px;padding:15px;margin-top:30%;line-height: 1.8;color:#536267">Registration is free and takes less than 30 seconds (no credit card required). <br>you can watch all videos for free!</p>
            <p style="text-align: center"><a class="btn btn-success" id="signup" href="http://www.baidu.com" target="signupFrame"> sign up</a></p> 
            <p style="text-align: center;font-size:22px;padding:15px;line-height: 1.8;"class="text-danger"></p>
            <iframe id="signupFrame" frameborder="no" border="0" name="signupFrame" src=""></iframe>
            <div class="ifheader">
                <div style="font-size:20px;">
                    <span >Sign up to watch all videos for free</span>
                </div>
                <div class="" style="margin-top:10px;">
                    <span class="btn btn-sm btn-warning" id="close" >Close</span>
                </div>
            </div>
            <div class="iffooter">
                Age Must input 30-50 (e.g. 35)
            </div>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/masonry.pkgd.min.js"></script>
        <script src="js/swiper.min.js"></script>
        <script src="js/find.js?v=12003"></script>
        <script>
            getList(<?php echo $cat; ?>);
            $("body").on("click","button",function () {
                $("#frame").slideDown();
            })
           $("#close").click(function () {
                 $("#frame").slideUp();

           })
           $("#signup").click(function(){
               $("#signupFrame").show();
           });
        </script>
    </body>
</html>
