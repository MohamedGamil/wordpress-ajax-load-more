<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Ajax Load More Shortcode Builder</title>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" src="<?php echo includes_url($path); ?>js/tinymce/themes/advanced/skins/wp_theme/dialog.css"></link>
<link rel="stylesheet" href="<?php echo ALM_ADMIN_URL; ?>css/admin.css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js"></script>
<script type="text/javascript" src="<?php echo includes_url('/js/tinymce/tiny_mce_popup.js'); ?>"></script>
<script type="text/javascript">  
// ****** Build Button Shortcode ****** // 
var AjaxLoadMoreModal = {
	local_ed : 'ed',
	init : function(ed) {
		AjaxLoadMoreModal.local_ed = ed;
		tinyMCEPopup.resizeToInnerSize();
	},
	insert : function insertButton(ed) {	 
		// Try and remove existing style / blockquote
		tinyMCEPopup.execCommand('mceRemoveNode', false, null);
		
		// setup the output of our shortcode to show in the wp editor
		output = $('#shortcode_output').text();
		
		tinyMCEPopup.execCommand('mceInsertContent', false, output);			 
		// Return
		tinyMCEPopup.close();
	}
};
tinyMCEPopup.onInit.add(AjaxLoadMoreModal.init, AjaxLoadMoreModal); 
</script>
</head>
<body>
<div id="alm-container" class="ajax-load-more">	
	<select class="jump-menu">
		<option value="null" selected="selected">-- <?php _e('Jump to section', ALM_NAME); ?> --</option>	
	</select>
	<p class="intro"><?php _e('Create your own Ajax Load More shortcode by adjusting the values below:', ALM_NAME); ?></p>  
	<?php include (ALM_PATH . '/admin/includes/shortcode-builder.php'); ?>
	<div class="output-wrap">
	    <a href="javascript:AjaxLoadMoreModal.insert(AjaxLoadMoreModal.local_ed)" id="insert" class="insert_alm"><i class="fa fa-chevron-circle-right"></i> <?php _e('Insert Shortcode', ALM_NAME); ?></a>
	   <div class="shortcode-display">
		   <div id="shortcode_output"></div>
		   <span class="copy"><?php _e('Copy', ALM_NAME); ?></span>
	   </div>
	</div
</div>	
<script type="text/javascript" src="<?php echo ALM_ADMIN_URL; ?>js/libs/select2.min.js"></script>
<script type="text/javascript" src="<?php echo ALM_ADMIN_URL; ?>js/shortcode-builder.js"></script>
</body>
</html>