<?php
$page = 'index_ru';
include '../functions.php';
include '../php/html.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
html_head();
?>
<body>
<div id="tooplate_body_wrapper">
    <?php
    html_lang_block();
    ?>
    <div id="tooplate_wrapper">
        <div id="tooplate_header">
            <div id="site_title">
            	<h1><a href="#">Blue Flame Template</a></h1>
            </div>
            <?php echo menu_html($page);?>
        </div> <!-- end of forever header -->
        
        <div id="tooplate_main_top"></div>
        <div id="tooplate_middle">
            <div id="slider">
               	<a href="#"><img src="../images/slideshow/01.jpg" alt="Slide 01" title="Phasellus aliquet viverra posuere." /></a>            
                <a href="#"><img src="../images/slideshow/02.jpg" alt="Slide 02" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit." /></a>
                <a href="#"><img src="../images/slideshow/03.jpg" alt="Slide 03" title="Suspendisse sit amet enim elit. Curabitur tempor consequat." /></a>
                <a href="#"><img src="../images/slideshow/04.jpg" alt="Slide 04" title="Nulla faucibus luctus quam eget placerat." /></a>
                <a href="#"><img src="../images/slideshow/05.jpg" alt="Slide 05" title="Nullam ante leo, consectetur eget adipiscing et." /></a>                
            </div>	
        </div> <!-- end of middle -->
        
        <div id="tooplate_fp_services">
            <div class="fp_services_box">
                <img src="../12.jwpg" alt="Service One" />
                <h2><a href="#">Web Design</a></h2>
                <p>Etiam magna metus, hendrerit non aliquam nec, tincidunt nec metus.</p>
            </div>
            <div class="fp_services_box">
                <img src="../images/tooplate_service_no_2.png" alt="Service One" />
                <h2><a href="#">Marketing</a></h2>
                <p>Maecenas eget arcu odio. Nulla at quam non dui bibendum placerat.</p>
            </div>
            <div class="fp_services_box l_box">
                <img src="../images/tooplate_service_no_3.png" alt="Service One" />
                <h2><a href="#">Social Media</a></h2>
                <p>Sed vel massa id metus tristique luctus at in ipsum. Nulla in ornare ligula.</p>
            </div>
        
        </div> <!-- end of forever fp services -->
        
        <div id="tooplate_main">
        
            <div class="col_w580 float_l">
                <h2>Безумно прекрасные</h2> 
                <img src="../images/tooplate_image_01.jpg" alt="Image 01" class="image_wrapper image_fl" />
                <p><em>You may use Adobe Dreamweaver to edit this template. Duis bibendum malesuada pellentesque. Mauris in mollis elit. Ut lobortis, quam eget volutpat vehicula, odio purus  velit, in  lorem neque.</em></p>
              <p>Blue Flame is free website template by <b><span class="orange">too</span><span class="green">plate</span></b>. Feel free to adapt and apply this template for your websites. Credit goes to <a rel="nofollow" href="http://www.photovaco.com">Free Photos</a> for Photos. Sed nec odio vel nulla pellentesque sodales a molestie nisi. Duis placerat convallis consectetur.</p>
                <div class="cleaner h3"></div>
                <div>
                    <ul class="tooplate_list float_l">
                        <li>ОДНАЖДЫ В СТУДЕНУЮ ЗИМНЮЮ ПОРУ</li>
                        <li>Я ИЗЛЕСУ ВЫШЕЛ-БЫЛ СИЛЬНЫЙ МОРОЗ</li>
                    </ul>
                </div>

                <div class="cleaner"></div>
                <a class="more" href="#">More</a>
            </div>
            
            <div class="col_w280 float_r">
                <h2>New Projects</h2>
                <div class="fp_lp_box">
                    <img src="../images/tooplate_image_02.jpg" alt="Image 02" />
                    Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> and <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>. Nam id nibh quis nisi tristique pharetra a ut leo. <a href="#">more...</a>
                </div>
                <div class="fp_lp_box">
                    <img src="../images/tooplate_image_03.jpg" alt="Image 03" />
                    Sed euismod dignissim blanditturpis egestas quis malesuada nisl rutrum. <a href="#">more...</a>
                </div>
                <a class="more" href="#">More</a>
            </div>
            
            <div class="cleaner"></div>
        </div> <!-- end of main -->
        
        <div id="tooplate_main_bottom"></div>
        <div class="cleaner"></div>
        
        <div id="tooplate_footer">
        
            Copyright © 2048 <a href="#">Company Name</a> | Design: <a href="http://www.tooplate.com">tooplate</a>
            
        </div>
    </div> <!-- end of forever wrapper -->
</div> <!-- end of forever body wrapper -->

</body>
</html>