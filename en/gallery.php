<?php
$page = 'gallery';
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
            <h2>Our Gallery</h2>
            <p>Aliquam vitae dui et augue venenatis lacinia. Aenean id pellentesque nisl. Ut sed est metus, vitae consectetur quam. Aliquam malesuada gravida scelerisque. Pellentesque aliquam varius sodales. Nam aliquet dolor et metus feugiat commodo. Etiam ac ultricies lorem. Sed et semper nisl. </p>		
        </div> <!-- end of middle -->
        
        <div id="tooplate_main">
        
            <div id="gallery">
                <div class="g_box">
                    <a class="lightbox" href="images/gallery/image_01_l.jpg" title="Maecenas sit amet nisl id augue">
                    <img src="images/gallery/image_01_s.jpg" alt="Image 01" />
                    </a>
                    <div class="col_w580 float_r">
                        <h3>Maecenas sit amet nisl id augue</h3>
                        <p>Fusce quis ornare tortor. Ut bibendum, turpis non fermentum sagittis, velit felis mattis risus, non fringilla eros tortor eget nulla. Phasellus ornare eleifend mattis. Aliquam erat volutpat. Maecenas viverra rutrum varius. Donec lacinia nisi sit amet mi pulvinar cursus. </p>
                        <a class="more" href="#">More</a>
                    </div>
                    <div class="cleaner"></div>
                </div>
                
                <div class="g_box">
                    <a class="lightbox" href="images/gallery/image_02_l.jpg" title="Curabitur felis elit euismod">
                    <img src="images/gallery/image_02_s.jpg" alt="Image 02" />
                    </a>
                    <div class="col_w580 float_r">
                        <h3>Curabitur felis elit euismod</h3>
                        <p>Mauris quis dui auctor purus adipiscing feugiat eu sit amet quam. Nunc pretium, metus a ornare porta, ligula risus porta velit, vitae faucibus turpis justo nec felis. Nulla ut velit non diam pulvinar suscipit. Curabitur porttitor sollicitudin fringilla.</p>
                        <a class="more" href="#">More</a>
                    </div>
                    <div class="cleaner"></div>
                </div>
                
                <div class="g_box">
                    <a class="lightbox" href="images/gallery/image_03_l.jpg" title="Praesent a quam eget lectus">
                    <img src="images/gallery/image_03_s.jpg" alt="Image 03" />
                    </a>
                    <div class="col_w580 float_r">
                        <h3>Praesent a quam eget lectus</h3>
                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse ullamcorper bibendum velit sit amet porttitor. Fusce tincidunt feugiat pharetra. Donec a ante massa, vel ornare lectus. Ut nec elit velit. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> and <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
                        <a class="more" href="#">More</a>
                    </div>
                    <div class="cleaner"></div>
                </div>
                
                <div class="g_box">
                    <a class="lightbox" href="images/gallery/image_04_l.jpg" title="Sed eu urna eu ante malesuada">
                    <img src="images/gallery/image_04_s.jpg" alt="Image 04" />
                    </a>
                    <div class="col_w580 float_r">
                        <h3>Sed eu urna eu ante malesuada</h3>
                        <p>Aenean in tellus sapien. Aliquam dui sapien, varius at dapibus eget, malesuada ut lacus. Aliquam a quam non leo imperdiet dapibus. Aliquam at dolor ac elit semper fermentum id quis sem. Maecenas vulputate quam sit amet lorem dignissim vel imperdiet dolor porta.</p>
                        <a class="more" href="#">More</a>
                    </div>
                    <div class="cleaner"></div>
                </div>
                
                <div class="g_box">
                    <a class="lightbox" href="images/gallery/image_05_l.jpg" title="Duis eget arcu eget ante molestie">
                    <img src="images/gallery/image_05_s.jpg" alt="Image 05" />
                    </a>
                    <div class="col_w580 float_r">
                        <h3>Duis eget arcu eget ante molestie</h3>
                        <p>Fusce felis leo, imperdiet mollis placerat id, mollis at orci. Morbi vulputate semper nibh, et dapibus arcu porta nec. Vivamus velit ligula, tempus id mattis a, egestas sed massa. Suspendisse cursus convallis hendrerit. Aenean vitae laoreet est.</p>
                        <a class="more" href="#">More</a>
                    </div>
                    <div class="cleaner"></div>
                </div>
                
                <div class="g_box">
                    <a class="lightbox" href="images/gallery/image_06_l.jpg" title="Vestibulum rhoncus felis vitae">
                    <img src="images/gallery/image_06_s.jpg" alt="Image 06" />
                    </a>
                    <div class="col_w580 float_r">
                        <h3>Vestibulum rhoncus felis vitae </h3>
                        <p>Vivamus nec commodo libero. Aenean sit amet sem leo, et mollis magna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris egestas, eros eu posuere condimentum, quis fermentum enim lorem eget tortor.</p>
                        <a class="more" href="#">More</a>
                    </div>
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