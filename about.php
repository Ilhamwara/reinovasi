<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reinovasi || About</title>
    <?php include 'php/include/body/head.php'; ?>
</head>
<body>
    <!-- TopBar -->
    <?php include 'php/include/body/topbar.php'; ?>
    <!-- TopBar -->

    <!-- Slider -->
    <?php include 'php/include/body/slider.php'; ?>
    <!-- Slider -->
    <section id="about" style="clear: both;">
        <div class="col-md-12 col-sm-12 col-xs-12 text-center" style="overflow: hidden;">
            <div class="box-about">
              <h3><b>About our company</b></h3>        
              <p>
                 We are independent creative digital agency, fuelled by brave ideas and intelligent energy. Our team is
                 made up of talented individualis from diverse backgrounds, with a collective ambition to produce oustanding
                 work that works. We're unafraid to ask questions, pushing ourselves to discover more, do more and be more.
             </p>
             <br>
             <a href="" class="pull-left btn-contact" style="margin-left: 0px;">Download Company Profile</a>
         </div>
     </div>
 </div>
</section>
<!-- About-Challenge -->
<section id="about-challange">
    <h3 class="text-center"><b>No challenge too big. No detail too small</b></h3>
    <p class="text-center">
        We're passionate group of innovative professionals who are dedicated to doing what's best for clients 
        business. We focus on goals and deliver on measurable solutions. Our Company estabilished in DKI Jakarta, Indonesia.
        If you want to know about more how we can help, please get in touch. We would be more 
        that happy to reply to an email, take a call, or meet up.
    </p>
    <div class="text-center">
        <a href="" class="btn-download">Contact Us</a>
    </div>
</section>
<!-- Divison -->
<section id="divison" style="overflow: hidden;">
    <div class="col-md-12 col-sm-12 col-xs-12 divison-body" style="padding: 80px 150px;">
        <h3><b>How Our Division Manage Project</b></h3>
        <div class="divison-menu">
            <ul>
                <li>
                    <a href="">
                        <img src="img/icon/div-thorn.png"><br><br>
                        <span><b>Marketing</b></span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="img/icon/search.png"><br><br>
                        <span><b>Research/Analyst</b></span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="img/icon/div-kuas.png"><br><br>
                        <span><b>Designing</b></span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="img/icon/puzzle.png"><br><br>
                        <span><b>Production</b></span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="img/icon/achive.png"><br><br>
                        <span><b>Quality Assurance</b></span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-12">
           <div class="body-text-division">
            <h3><b>Quality Control Team</b></h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
    </div>
</div>
</section>
<!-- Footer -->
<?php include 'php/include/body/footer.php'; ?>
<!-- Footer -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
        //SLIDER
        var $item = $('.carousel .itam');
        var $wHeight = $(window).height();

        $item.height($wHeight); 
        $item.addClass('full-screen');

        $('.carousel .background').each(function() {
            var $src = $(this).attr('src');
            var $color = $(this).attr('data-color');
            $(this).parent().css({
                'background-image' : 'url(' + $src + ')',
                'background-color' : $color
            });
            $(this).remove();
        });

        $(window).on('resize', function (){
            $wHeight = $(window).height();
            $item.height($wHeight);
        });
    </script>
</body>
</html>