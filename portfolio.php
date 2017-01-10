<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reinovasi || Portfolio</title>
    <?php include 'php/include/body/head.php'; ?>
</head>
<body>
    <!-- TopBar -->
    <?php include 'php/include/body/topbar.php'; ?>
    <!-- TopBar -->

    <!-- Slider -->
    <?php include 'php/include/body/slider.php'; ?>
    <!-- Slider -->

    <!-- Portfolio -->
    <section id="projects" style="overflow: hidden;">
        <img src="img/icon/gambar7.png" style="position: absolute; left: 0;">
        <div class="col-md-12">
            <div class="head-projects">
                <h4 class="title pull-left">App Development</h4>
            </div>
        </div>
        <div class="col-md-11 col-xs-12 body-projects" style="margin: 0px 4%;">
            <div class="col-md-4 col-sm-6 col-xs-12" style="padding: 15px;">
                <!-- <div class="overlay"> -->
                <img src="img/banner/image7.png" class="img-project">
                <!-- <span id="plus"><a href="">+</a></span> -->
                <!-- </div> -->
                <div class="text-center box-caption">
                    <span><a href="" class="text-caption-project">HajiUmrah.co</a></span>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12" style="padding: 15px;">
                <img src="img/banner/image8.png" class="img-project">
                <div class="text-center box-caption">
                    <span><a href="" class="text-caption-project">SI Tukin</a></span>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12" style="padding: 15px;">
                <img src="img/banner/image9.png" class="img-project">
                <div class="text-center box-caption">
                    <span><a href="" class="text-caption-project">Perjadin</a></span>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12" style="padding: 15px;">
                <img src="img/banner/image10.png" class="img-project">
                <div class="text-center box-caption">
                    <span><a href="" class="text-caption-project">HajiUmrah.co</a></span>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12" style="padding: 15px;">
                <img src="img/banner/image11.png" class="img-project">
                <div class="text-center box-caption">
                    <span><a href="" class="text-caption-project">DeentSmile Clinic</a></span>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12" style="padding: 15px;">
                <img src="img/banner/image12.png" class="img-project">
                <div class="text-center box-caption">
                    <span><a href="" class="text-caption-project">OJKWay</a></span>
                </div>
            </div>
        </div>
        <hr style="clear: both; width: 83%;">
        <div class="col-md-12">
            <div class="head-projects">
                <h4 class="title pull-left">Mobile Development</h4>
            </div>
        </div>
        <div class="col-md-11 col-xs-12 body-projects" style="margin: 0px 4%;">
            <div class="col-md-4 col-sm-6 col-xs-12" style="padding: 15px;">
                <!-- <div class="overlay"> -->
                <img src="img/banner/image7.png" class="img-project">
                <!-- <span id="plus"><a href="">+</a></span> -->
                <!-- </div> -->
                <div class="text-center box-caption">
                    <span><a href="" class="text-caption-project">HajiUmrah.co</a></span>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12" style="padding: 15px;">
                <img src="img/banner/image8.png" class="img-project">
                <div class="text-center box-caption">
                    <span><a href="" class="text-caption-project">SI Tukin</a></span>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12" style="padding: 15px;">
                <img src="img/banner/image9.png" class="img-project">
                <div class="text-center box-caption">
                    <span><a href="" class="text-caption-project">Perjadin</a></span>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12" style="padding: 15px;">
                <img src="img/banner/image10.png" class="img-project">
                <div class="text-center box-caption">
                    <span><a href="" class="text-caption-project">HajiUmrah.co</a></span>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12" style="padding: 15px;">
                <img src="img/banner/image11.png" class="img-project">
                <div class="text-center box-caption">
                    <span><a href="" class="text-caption-project">DeentSmile Clinic</a></span>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12" style="padding: 15px;">
                <img src="img/banner/image12.png" class="img-project">
                <div class="text-center box-caption">
                    <span><a href="" class="text-caption-project">OJKWay</a></span>
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
