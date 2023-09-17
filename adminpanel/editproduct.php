<?php

require('top.inc.php');
if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!=''){

}else{
	header('location:adminlogin.html');
	die();
}
$id='';
$categories_id='';
$name='';
$mrp='';
$price='';
$image='';
$short_desc	='';
$description	='';
$meta_title	='';
$meta_desc	='';
$meta_keyword='';

$msg='';


$email=$_SESSION['ADMIN_EMAIL'];
//echo "$email";

?>
                <form action="editproductdb.php" method="post" >
                    
	                    <div class="form-group" style="padding:25px">
									<div class='row'>
                                    <div class="col-lg-9">
											<label for="categories" class=" form-control-label">Product id</label>
											<input type="text" name="id" placeholder="Enter product id" class="form-control" required value="<?php echo $id?>">
										</div>
										<div class="col-lg-9">
											<label for="categories" class=" form-control-label">Product Name</label>
											<input type="text" name="name" placeholder="Enter product name" class="form-control" required value="<?php echo $name?>">
										</div>
								
									</div>
							
								<div class="form-group"  id="product_attr_box">
									
									  <div class="col-lg-2">
										<label for="categories" class=" form-control-label">MRP</label>
										<input type="text" name="mrp" placeholder="MRP" class="form-control" required>
									  </div>
									  <div class="col-lg-2">
										<label for="categories" class=" form-control-label">Price</label>
										<input type="text" name="price" placeholder="Price" class="form-control" required>
									  </div>
									 
									  
									
								</div>
                                <div class="form-group">
									<div class="row"  id="image_box">
									  <div class="col-lg-10">
									   <label for="categories" class=" form-control-label">Image</label>
										<input type="file" name="image" class="form-control" <?php echo  $image?>>
										<?php
										if($image!=''){
echo "<a target='_blank' href='".PRODUCT_IMAGE_SITE_PATH.$image."'><img width='150px' src='".PRODUCT_IMAGE_SITE_PATH.$image."'/></a>";
										}
										?>
									  </div>
                                    </div>
                                </div>
                                
								<div class="form-group">
									<label for="categories" class=" form-control-label">Short Description</label>
									<textarea name="short_desc" placeholder="Enter product short description" class="form-control" required><?php echo $short_desc?></textarea>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Description</label>
									<textarea name="description" placeholder="Enter product description" class="form-control" required><?php echo $description?></textarea>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Meta Title</label>
									<textarea name="meta_title" placeholder="Enter product meta title" class="form-control"><?php echo $meta_title?></textarea>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Meta Description</label>
									<textarea name="meta_desc" placeholder="Enter product meta description" class="form-control"><?php echo $meta_desc?></textarea>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Meta Keyword</label>
									<textarea name="meta_keyword" placeholder="Enter product meta keyword" class="form-control"><?php echo $meta_keyword?></textarea>
								</div>
								
								
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block" >
							   <span id="payment-button-amount">Submit</span>
							  
							   </button>
                    </div>
                    </form>

                    <script>
			function get_sub_cat(sub_cat_id){
				var categories_id=jQuery('#categories_id').val();
				jQuery.ajax({
					url:'get_sub_cat.php',
					type:'post',
					data:'categories_id='+categories_id+'&sub_cat_id='+sub_cat_id,
					success:function(result){
						jQuery('#sub_categories_id').html(result);
					}
				});
			}
			
		
			function remove_attr(attr_count,id){
				jQuery.ajax({
					url:'remove_product_attr.php',
					data:'id='+id,
					type:'post',
					success:function(result){
						jQuery('#attr_'+attr_count).remove();
					}
				});
			}
		 </script>
         
<?php
require('footer.inc.php');
?>
