<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reinovasi || Service</title>
    <?php include 'php/include/body/head.php'; ?>
</head>
<body>
    <!-- TopBar -->
    <?php include 'php/include/body/topbar.php'; ?>
    <!-- TopBar -->

    <!-- Slider -->
    <?php include 'php/include/body/slider.php'; ?>
    <!-- Slider -->

    <!-- Service -->
    <section id="page-service">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <h3 class="title-service text-center" style="padding-left: 0;"><b>Service That We are Best at</b></h3>    
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <ul class="pelayanan">
                <li>
                    <h4>Web Design</h4>
                    <p>
                        Reinovasi is a digital transformation partner the provides solutions and 
                        services to help traditional business reimagine their business models.
                    </p>
                </li>
                <li>
                    <h4>App Development</h4>
                    <p>
                        Reinovasi is a digital transformation partner the provides solutions and 
                        services to help traditional business reimagine their business models.
                    </p>
                </li>
                <li>
                    <h4>Creative Design</h4>
                    <p>
                        Reinovasi is a digital transformation partner the provides solutions and 
                        services to help traditional business reimagine their business models.
                    </p>
                </li>
                <li>
                    <h4>Mobile Development</h4>
                    <p>
                        Reinovasi is a digital transformation partner the provides solutions and 
                        services to help traditional business reimagine their business models.
                    </p>
                </li>
                <li>
                    <h4>Branding & Marketing</h4>
                    <p>
                        Reinovasi is a digital transformation partner the provides solutions and 
                        services to help traditional business reimagine their business models.
                    </p>
                </li>
                <li>
                    <h4>Consulting & Strategy</h4>
                    <p>
                        Reinovasi is a digital transformation partner the provides solutions and 
                        services to help traditional business reimagine their business models.
                    </p>
                </li>
                <li>
                    <h4>Media Planning</h4>
                    <p>
                        Reinovasi is a digital transformation partner the provides solutions and 
                        services to help traditional business reimagine their business models.
                    </p>
                </li>
                <li>
                    <h4>Event Organizer</h4>
                    <p>
                        Reinovasi is a digital transformation partner the provides solutions and 
                        services to help traditional business reimagine their business models.
                    </p>
                </li>
            </ul>
        </div>
        <div class="text-center">
            <a href="" class="btn-contact">Our Portfolio</a>
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
