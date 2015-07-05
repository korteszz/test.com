<?php
$page = 'about';
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
            <h2>About Us</h2>
            <p>Cras pulvinar sollicitudin odio ac molestie. Nullam egestas, est sed fringilla commodo, justo turpis varius urna, eget imperdiet velit orci sed eros. Suspendisse quis tellus quam. </p>		
        </div> <!-- end of middle -->
        
        <div id="tooplate_main">
        
            <div class="col_w420 float_l">
                <h2>Company Background</h2>
              <img class="image_wrapper image_fl" src="images/tooplate_image_05.jpg" alt="Image 05" />
                <p><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur volutpat enim nec dolor.</em></p>
              <p>Blue Flame is free website template by <b><span class="orange">too</span><span class="green">plate</span></b>. Nunc euismod lectus eu neque ultrices laoreet. Aenean <a href="#">et velit tincidunt</a> ante porttitor facilisis. Quisque in turpis vitae enim blandit vehicula. Nullam a tortor est, congue fermentum nisi.</p>
                <p>Maecenas nulla nulla, lobortis eu <a href="#">volutpat euismod</a>, scelerisque ut dui. Integer luctus tellus ac mi malesuada dignissim. Sed id diam dui. In ut nunc urna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin aliquam tortor sed diam tristique vulputate.        </p>
                <a class="more" href="#">More</a>
            </div>
            <div class="col_w420 float_r">
                <h2>Our Team</h2>
                <p><em>Vestibulum pharetra convallis libero ac luctus. Etiam in quam a urna aliquet imperdiet porta vitae nisl.</em></p>
                <p>Morbi velit dui, interdum non placerat id, rhoncus ac orci. Duis iaculis orci eu arcu vestibulum eu vestibulum orci ultrices. Ut ligula ipsum, gravida id euismod, faucibus vitae est. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> and <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
                <ul class="tooplate_list">
                    <li>Nulla facilis ac odio ipsum. Donec cursus gravida ante.</li>
                    <li>Fusce risus tortor in malesuada pulvinar, ultricies at arcu.</li>
                    <li>Proin facilisis ullamcorper turpis, in placerat dolor ultrices.</li>
                    <li>Sed vel justo quis ligula blandit commodo molestie ac mi.</li>
                    <li>Ut tristique sagittis arcu, laoreet turpis imperdiet facilisis.</li>
                </ul>
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