<div id="content">				
	<div id="contentHeader">
		<h1>Page</h1>
	</div> <!-- #contentHeader -->		
	<div class="container">
		<!--TAB VIEW-->
		
		<div class="grid-16">
			<?php echo set_breadcrumb(); ?>
			<div class="clear">&nbsp;</div>			
			<form class="form uniformForm" name="pagefrm" action="" method="post">
				<div class="widget">
					<div class="widget-header">
						<span class="icon-article"></span>
						<h3>SEO</h3>
					</div> <!-- .widget-header -->						
					<div class="widget-content">
						<div class="field-group">
							<label for="myfile">Meta Title:</label>
							<div class="field">
								<input type="text" name="meta_title" value="<?php echo $seoData['meta_title'];?>" />
							</div>
						</div>
						<div class="field-group">
							<label for="myfile">Meta Description:</label>
							<div class="field">
								<textarea name="meta_description"><?php echo $seoData['meta_description'];?></textarea>
							</div>
						</div>
						<div class="field-group">
							<label for="myfile">Meta Keywords:</label>
							<div class="field">								
								<textarea name="meta_keywords"><?php echo $seoData['meta_keywords'];?></textarea>
							</div>
						</div>

						
						<div class="field-group">
							<label for="myfile">H1 tag:</label>
							<div class="field">
								<input type="text" name="h1_tag" value="<?php echo $seoData['h1_tag'];?>" />
							</div>
						</div>
						<div class="field-group">	
							<label for="myfile">URL:<em>Short hyphenated string without ending with (.html)</em></label>			
							<div class="field">
								<input type="text" name="slug" value="<?php echo $seoData['uri'];?>" />
								<input type="hidden" name="category" value="<?php echo $seoData['category_id'];?>" />
							</div>
						</div>						
						<div class="field-group">										
							<div class="field">
								<input type="submit" name="save" value="Save" />
								<input type="button" name="cancel" value="Cancel" onclick="javascript:window.location='/admin/category';" />
							</div>							
						</div>
					</div> <!-- .widget-content -->						
				</div> <!-- .widget -->					
			</form>
		</div>			
	</div> <!-- .container -->		
</div> <!-- #content -->