<?php
$page = 'blog';
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
        <div id="tooplate_middle_subpage">
            <h2>Our Blog Posts</h2>
            <p>In hac habitasse platea dictumst. Sed vestibulum sem vitae ante facilisis tristique. Duis volutpat tortor eget sem scelerisque vel facilisis leo rutrum. Morbi eget neque sed metus cursus auctor non et magna.</p>		
        </div> <!-- end of middle -->
        
        <div id="tooplate_main">
        
            <div id="gallery">
                <div class="post_box">
                    <div class="col_w420 float_l">
                        <div class="post_header">
                            <h2>Creative Advertising</h2>
                            <p><span class="cat">Posted in <a href="#">Illustrations</a>, <a href="#">Graphics</a></span> | Date: June 26, 2048</p>
                        </div>
                        <p>Blue Flame is free website template by <b><span class="orange">too</span><span class="green">plate</span></b>. Nullam nec libero id justo ullamcorper dictum at eu ligula. Phasellus sagittis purus dignissim dui lobortis gravida. Praesent tincidunt massa sit amet metus gravida sit amet consectetur nisi dictum. </p>
                        <a class="more" href="#">More</a>
                        <a href="#">140 comments</a>
                    </div>
                    <img src="images/tooplate_image_06.jpg" alt="Image 06" />
                    <div class="cleaner"></div>
                </div>
                
                <div class="post_box">
                    <div class="col_w420 float_l">
                        <div class="post_header">
                            <h2>Best Marketing Strategies</h2>
                            <p><span class="cat">Posted in <a href="#">Internet</a>, <a href="#">Marketing</a></span> | Date: June 23, 2048</p>
                        </div>
                        <p>Duis ut libero ut libero viverra auctor. Vivamus lorem velit, mollis non cursus sed, luctus eu elit. Cras consequat, sapien at laoreet porttitor, dolor sem laoreet sapien, id tempus justo ipsum scelerisque felis. Nam porttitor nisl quam sapien, varius sem nunc eu dui.</p>
                        <a class="more" href="#">More</a>
                        <a href="#">148 comments</a>
                    </div>
                    <img src="images/tooplate_image_07.jpg" alt="Image 07" />
                    <div class="cleaner"></div>
                </div>
                
                <div class="post_box">
                    <div class="col_w420 float_l">
                        <div class="post_header">
                            <h2>Animated Websites</h2>
                            <p><span class="cat">Posted in <a href="#">3D</a>, <a href="#">Interactive</a></span> | Date: June 18, 2048</p>
                        </div>
                        <p>Suspendisse egestas hendrerit est, vitae placerat lorem volutpat quis. Integer faucibus sagittis elit laoreet commodo. Phasellus aliquam mi ultrices augue id eleifend turpis lobortis. Ut orci orci, egestas et tempus vitae, posuere eget neque. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> and <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
                        <a class="more" href="#">More</a>
                        <a href="#">175 comments</a>
                    </div>
                    <img src="images/tooplate_image_08.jpg" alt="Image 08" />
                    <div class="cleaner"></div>
                </div>
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