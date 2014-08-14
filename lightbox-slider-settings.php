<?php
    /**
     * Load Saved Image Gallery settings
     */
    $LBS_Settings  = unserialize( get_option("WL_LBS_Settings") );
    if(count($LBS_Settings)) {
        $LBS_Hover_Animation     = $LBS_Settings['LBS_Hover_Animation'];
        $LBS_Gallery_Layout      = $LBS_Settings['LBS_Gallery_Layout'];
        $LBS_Hover_Color         = $LBS_Settings['LBS_Hover_Color'];
        $LBS_Font_Style          = $LBS_Settings['LBS_Font_Style'];
        $LBS_Image_View_Icon     = $LBS_Settings['LBS_Image_View_Icon'];
		$LBS_Gallery_Title       = $LBS_Settings['LBS_Gallery_Title'];
    } else {
        $LBS_Hover_Animation     = "flow";
        $LBS_Gallery_Layout      = "col-md-6";
        $LBS_Hover_Color         = "#74C9BE";
        $LBS_Font_Style          = "Arial";
        $LBS_Image_View_Icon     = "fa-picture-o";
		$LBS_Gallery_Title		 = "yes";	
    }
?>

<h2>Lightbox Slider <?php _e("Settings", WEBLIZAR_LBS_TEXT_DOMAIN); ?></h2>
<form action="?post_type=lightbox-slider&page=light-box-settings" method="post">
    <input type="hidden" id="wl_lbs_action" name="wl_lbs_action" value="wl-lbs-save-settings">
    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row"><label><?php _e("Image Hover Animation", WEBLIZAR_LBS_TEXT_DOMAIN); ?></label></th>
                <td>
                    <select name="wl-hover-animation" id="wl-hover-animation">
                        <optgroup label="Select Animation">
                            <option value="flow" <?php if($LBS_Hover_Animation == 'flow') echo "selected=selected"; ?>><?php _e("Flow", WEBLIZAR_LBS_TEXT_DOMAIN); ?></option>
                            <!--<option value="stroke" <?php /*if($LBS_Hover_Animation == 'stroke') echo "selected=selected"; */?>>Stroke</option>-->
                        </optgroup>
                    </select>
                    <p class="description"><?php _e("Choose an animation effect apply on mouse hover.", WEBLIZAR_LBS_TEXT_DOMAIN); ?></p>
                </td>
            </tr>

            <tr>
                <th scope="row"><label><?php _e("Gallery Layout", WEBLIZAR_LBS_TEXT_DOMAIN); ?></label></th>
                <td>
                    <select name="wl-gallery-layout" id="wl-gallery-layout">
                        <optgroup label="Select Gallery Layout">
                            <option value="col-md-6" <?php if($LBS_Gallery_Layout == 'col-md-6') echo "selected=selected"; ?>><?php _e("Two Column", WEBLIZAR_LBS_TEXT_DOMAIN); ?></option>
                            <option value="col-md-4" <?php if($LBS_Gallery_Layout == 'col-md-4') echo "selected=selected"; ?>><?php _e("Three Column", WEBLIZAR_LBS_TEXT_DOMAIN); ?></option>
                        </optgroup>
                    </select>
                    <p class="description"><?php _e("Choose a column layout for image gallery.", WEBLIZAR_LBS_TEXT_DOMAIN); ?></p>
                </td>
            </tr>
			<tr>
                <th scope="row"><label><?php _e("Display Gallery Title", WEBLIZAR_LBS_TEXT_DOMAIN); ?></label></th>
                <td>
                    <input type="radio" name="lbs-gallery-title" id="lbs-gallery-title" value="yes" <?php if($LBS_Gallery_Title == 'yes' ) { echo "checked"; } ?>> Yes
                    <input type="radio" name="lbs-gallery-title" id="lbs-gallery-title" value="no" <?php if($LBS_Gallery_Title == 'no' ) { echo "checked"; } ?>> No

                    <p class="description"><?php _e("Select yes if you want show gallery title .", WEBLIZAR_LBS_TEXT_DOMAIN); ?></p>
                </td>
            </tr>
            <tr>
                <th scope="row"><label><?php _e("Hover Color", WEBLIZAR_LBS_TEXT_DOMAIN); ?></label></th>
                <td>
                    <input type="radio" name="wl-hover-color" id="wl-hover-color" value="#74C9BE" <?php if($LBS_Hover_Color == '#74C9BE' ) { echo "checked"; } ?>> <span style="color: #74C9BE; font-size: large; font-weight: bolder;"><?php _e("Color 1", WEBLIZAR_LBS_TEXT_DOMAIN); ?></span>
                    <input type="radio" name="wl-hover-color" id="wl-hover-color" value="#31A3DD" <?php if($LBS_Hover_Color == '#31A3DD' ) { echo "checked"; } ?>> <span style="color: #31A3DD; font-size: large; font-weight: bolder;"><?php _e("Color 2", WEBLIZAR_LBS_TEXT_DOMAIN); ?></span>

                    <p class="description"><?php _e("Choose a color apply on mouse hover.", WEBLIZAR_LBS_TEXT_DOMAIN); ?></p>
                </td>
            </tr>

            <tr>
                <th scope="row"><label><?php _e("Image View Icon", WEBLIZAR_LBS_TEXT_DOMAIN); ?></label></th>
                <td>
                    <input type="radio" name="wl-image-view-icon" id="wl-image-view-icon" value="fa-picture-o"  <?php if($LBS_Image_View_Icon == 'fa-picture-o' ) { echo "checked"; } ?>> <i class="fa fa-picture-o fa-2x"></i>
                    <input type="radio" name="wl-image-view-icon" id="wl-image-view-icon" value="fa-camera" <?php if($LBS_Image_View_Icon == 'fa-camera' ) { echo "checked"; } ?>> <i class="fa fa-camera fa-2x"></i>
                    <p class="description"><?php _e("Choose image view icon.", WEBLIZAR_LBS_TEXT_DOMAIN); ?></p>
                </td>
            </tr>

            <tr>
                <th scope="row"><label><?php _e("Caption Font Style", WEBLIZAR_LBS_TEXT_DOMAIN); ?></label></th>
                <td>
                    <select  name="wl-font-style" class="standard-dropdown" id="wl-font-style">
                        <optgroup label="Default Fonts">
                            <option value="Arial"           <?php if($LBS_Font_Style == 'Arial' ) { echo "selected"; } ?>>Arial</option>
                            <option value="_arial_black"    <?php if($LBS_Font_Style == '_arial_black' ) { echo "selected"; } ?>>Arial Black</option>
                            <option value="Courier New"     <?php if($LBS_Font_Style == 'Courier New' ) { echo "selected"; } ?>>Courier New</option>
                            <option value="georgia"         <?php if($LBS_Font_Style == 'georgia' ) { echo "selected"; } ?>>Georgia</option>
                            <option value="grande"          <?php if($LBS_Font_Style == 'grande' ) { echo "selected"; } ?>>Grande</option>
                            <option value="_helvetica_neue" <?php if($LBS_Font_Style == '_helvetica_neue' ) { echo "selected"; } ?>>Helvetica Neue</option>
                            <option value="_impact"         <?php if($LBS_Font_Style == '_impact' ) { echo "selected"; } ?>>Impact</option>
                            <option value="_lucida"         <?php if($LBS_Font_Style == '_lucida' ) { echo "selected"; } ?>>Lucida</option>
                            <option value="_lucida"         <?php if($LBS_Font_Style == '_lucida' ) { echo "selected"; } ?>>Lucida Grande</option>
                            <option value="_OpenSansBold"   <?php if($LBS_Font_Style == '_OpenSansBold' ) { echo "selected"; } ?>>OpenSansBold</option>
                            <option value="_palatino"       <?php if($LBS_Font_Style == '_palatino' ) { echo "selected"; } ?>>Palatino</option>
                            <option value="_sans"           <?php if($LBS_Font_Style == '_sans' ) { echo "selected"; } ?>>Sans</option>
                            <option value="_sans"           <?php if($LBS_Font_Style == '_sans' ) { echo "selected"; } ?>>Sans-Serif</option>
                            <option value="_tahoma"         <?php if($LBS_Font_Style == '_tahoma' ) { echo "selected"; } ?>>Tahoma</option>
                            <option value="_times"          <?php if($LBS_Font_Style == '_times' ) { echo "selected"; } ?>>Times New Roman</option>
                            <option value="_trebuchet"      <?php if($LBS_Font_Style == '_trebuchet' ) { echo "selected"; } ?>>Trebuchet</option>
                            <option value="_verdana"        <?php if($LBS_Font_Style == '_verdana' ) { echo "selected"; } ?>>Verdana</option>
                        </optgroup>
                    </select>
                    <p class="description"><?php _e("Choose a caption font style.", WEBLIZAR_LBS_TEXT_DOMAIN); ?></p>
                </td>
            </tr>



        </tbody>
    </table>
    <p class="submit">
        <input type="submit" value="<?php _e("Save Changes", WEBLIZAR_LBS_TEXT_DOMAIN); ?>" class="button button-primary" id="submit" name="submit">
    </p>
</form>


<div class="plan-name" style="margin-top:40px;">
	<h2 style="border-top: 5px solid #f9f9f9;
padding-top: 20px;">Lightbox Slider Pro</h2>
</div>
<div class="purchase_btn_div" style="margin-top:20px;">
  <a  style= "margin-right:10px;" href="http://weblizar.com/lightbox-slider-pro/" target="_new" class="button button-hero">View Demo</a>
	  <a style= "margin-right:10px;" href="http://weblizar.com/lightbox-slider-pro/" target="_new" class="button button-primary button-hero">Try Before Buy</a>
	  <a style="background-color: #d9534f;
border-color: #d43f3a;" href="http://weblizar.com/lightbox-slider-pro/" target="_new" class="button button-primary button-hero">Upgrade To Pro</a>
	</div>
	<a href="http://weblizar.com/lightbox-slider-pro/" target="_new"><img style="margin-top:20px;box-shadow: 0 0 12px 3px #b0b2ab;" src="<?php echo WEBLIZAR_LBS_PLUGIN_URL.'images/lightbox-images.jpg'; ?>" /></a>
	
	
	
	
	
	
	
	
	


<?php
if(isset($_POST['wl_lbs_action'])) {
    $Action = $_POST['wl_lbs_action'];
    //save settings
    if($Action == "wl-lbs-save-settings") {

        $LBS_Hover_Animation     = $_POST['wl-hover-animation'];
        $LBS_Gallery_Layout      = $_POST['wl-gallery-layout'];
        $LBS_Hover_Color         = $_POST['wl-hover-color'];
        $LBS_Font_Style          = $_POST['wl-font-style'];
        $LBS_Image_View_Icon     = $_POST['wl-image-view-icon'];
		$LBS_Gallery_Title		= $_POST['lbs-gallery-title'];

        $SettingsArray = serialize( array(
            'LBS_Hover_Animation' => $LBS_Hover_Animation,
            'LBS_Gallery_Layout' => $LBS_Gallery_Layout,
            'LBS_Hover_Color' => $LBS_Hover_Color,
            'LBS_Hover_Color_Opacity' => 1,
            'LBS_Font_Style' => $LBS_Font_Style,
            'LBS_Image_View_Icon' => $LBS_Image_View_Icon,
			'LBS_Gallery_Title' => $LBS_Gallery_Title
        ) );

        update_option("WL_LBS_Settings", $SettingsArray);
        echo "<script>location.href = location.href;</script>";
    }
}
