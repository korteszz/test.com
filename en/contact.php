<?php
$page = 'contact';
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
            <h2>Contact Information</h2>
            <p>Mauris lacinia, odio vitae pellentesque laoreet, tellus est vulputate arcu, faucibus iaculis nulla ipsum sed orci. Aliquam tristique cursus est, sed porta metus feugiat sit amet. Vivamus et augue orci. Pellentesque iaculis tortor vitae ante euismod quis mattis nisl blandit. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> and <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>		
        </div> <!-- end of middle -->
        
        <div id="tooplate_main">
            
            <div class="col_w420 float_l">
                <div id="contact_form">
            
                    <h4>Contact Form</h4>
                    
                    <form method="post" name="contact" action="#">
                        
                            <label for="author">Name:</label> 
                            <input type="text" id="author" name="author" class="required input_field" />
                            <div class="cleaner h10"></div>
                                                        
                            <label for="email">Email:</label> 
                            <input type="text" class="validate-email required input_field" name="email" id="email" />
                            <div class="cleaner h10"></div>
                                                
                            <label for="subject">Subject:</label> 
                            <input type="text" class="validate-subject required input_field" name="subject" id="subject"/>				               
                            <div class="cleaner h10"></div>
                                
                            <label for="text">Message:</label> 
                            <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                            <div class="cleaner h10"></div>				
                                                    
                            <input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
                            <input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />
                            
                    </form> 
                </div> 
        	</div>
            
        	<div class="col_w420 float_r">
                <h4>Location</h4>
                <div id="map"><a href="images/map_big.jpg" title="Our Location"><img width="300" height="200" src="images/map_thumb.jpg" alt="Where we are" class="image_wrapper" /></a></div>                
                <div class="cleaner h30"></div>
                
                <h4>Mailing Address</h4>
                <h6><strong>Company Name</strong></h6>
                330-660 Duis lacinia dictum, <br />
                Fusce facilisis gravida, 14420<br />
                Diam a mollis tempor<br /><br />
                    
                <strong>Phone:</strong> 010-020-0340<br />
                <strong>Email:</strong> <a href="mailto:info@comapny.com">info@company.com </a>
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