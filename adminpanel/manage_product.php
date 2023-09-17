<?php
require('top.inc.php');

$condition='';
$condition1='';

	$condition=" and product.added_by='".$_SESSION['ADMIN_EMAIL']."'";
	$condition1=" and added_by='".$_SESSION['ADMIN_EMAIL']."'";

$categories_id='';
$name='';
$mrp='';
$price='';
//$qty='';
$image='';
$short_desc	='';
$description	='';
$meta_title	='';
$meta_desc	='';
$meta_keyword='';
$best_seller='';
/*$sub_categories_id='';
$multipleImageArr=[];*/
$msg='';
$image_required='required';
/*
$attrProduct[0]['product_id']='';
$attrProduct[0]['size_id']='';
$attrProduct[0]['color_id']='';
$attrProduct[0]['mrp']='';
$attrProduct[0]['price']='';*/

$attrProduct[0]['id']='';


?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Product</strong><small> Form</small></div>
                        <form method="post" enctype="multipart/form-data" action="addproductdb.php">
							<div class="card-body card-block">
							<div class="col-lg-9">
											<label for="categories" class=" form-control-label">Product id</label>
											<input type="text" name="id" placeholder="Enter product id" class="form-control" required>
										</div>
							   <div class="form-group">
									<div class="row">
									  <div class="col-lg-6">
										<label for="categories" class=" form-control-label">Categories</label>
										<select class="form-control" name="categories_id" id="categories_id" onchange="get_sub_cat('')" required>
											<option>Select Category</option>
											<?php
											$res=mysqli_query($con,"select id,categories from categories order by categories asc");
											while($row=mysqli_fetch_assoc($res)){
												if($row['id']==$categories_id){
													echo "<option selected value=".$row['id'].">".$row['categories']."</option>";
												}else{
													echo "<option value=".$row['id'].">".$row['categories']."</option>";
												}
												
											}
											?>
										</select>
									  </div>
									 
									</div>
								</div>	
								<div class="form-group">
									<div class='row'>
										<div class="col-lg-9">
											<label for="categories" class=" form-control-label">Product Name</label>
											<input type="text" name="name" placeholder="Enter product name" class="form-control" required value="<?php echo $name?>">
										</div>
										
									</div>
								</div>
								<div class="form-group"  id="product_attr_box">
									<?php 
									$attrProductLoop=1;
									foreach($attrProduct as $list){?>
									<div class="row"id="attr_<?php echo $attrProductLoop?>">
									  <div class="col-lg-2">
										<label for="categories" class=" form-control-label">MRP</label>
										<input type="text" name="mrp" placeholder="MRP" class="form-control" required>
									  </div>
									  <div class="col-lg-2">
										<label for="categories" class=" form-control-label">Price</label>
										<input type="text" name="price" placeholder="Price" class="form-control" required>
									  </div>
									 
									  
									  <div class="col-lg-2">
										<label for="categories" class=" form-control-label"></label>
								
										<input type="hidden" name="attr_id[]" value='<?php echo $list['id']?>'/>
									  </div>
									</div>
									<?php 
									$attrProductLoop++;
									} ?>
								</div>
								
								
								
								<div class="form-group">
									<div class="row"  id="image_box">
									  <div class="col-lg-10">
									   <label for="categories" class=" form-control-label">Image</label>
										<input type="file" name="image" class="form-control" <?php echo  $image_required?>>
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
								
								
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
							   </button>
							   <div class="field_error"><?php echo $msg?></div>
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
		 
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
			
			var total_image=1;
			function add_more_images(){
				total_image++;
				var html='<div class="col-lg-6" style="margin-top:20px;" id="add_image_box_'+total_image+'"><label for="categories" class=" form-control-label">Image</label><input type="file" name="product_images[]" class="form-control" required><button type="button" class="btn btn-lg btn-danger btn-block" onclick=remove_image("'+total_image+'")><span id="payment-button-amount">Remove</span></button></div>';
				jQuery('#image_box').append(html);
			}
			
			function remove_image(id){
				jQuery('#add_image_box_'+id).remove();
			}
			
			var attr_count=1;
			function add_more_attr(){
				attr_count++;
				
				var size_html=jQuery('#attr_1 #size_id').html();
				size_html=size_html.replace('selected','');
				
				var color_html=jQuery('#attr_1 #color_id').html();
				color_html=color_html.replace('selected','');
				
				var html='<div class="row mt20" id="attr_'+attr_count+'"> <div class="col-lg-2"><label for="categories" class=" form-control-label">MRP</label><input type="text" name="mrp[]" placeholder="MRP" class="form-control" required="" value=""> </div> <div class="col-lg-2"><label for="categories" class=" form-control-label">Price</label><input type="text" name="price[]" placeholder="Price" class="form-control" required="" value=""> </div> <div class="col-lg-2"><label for="categories" class=" form-control-label">&nbsp;</label><button id="" type="button" class="btn btn-lg btn-danger btn-block" onclick=remove_attr("'+attr_count+'")><span id="payment-button-amount">Remove</span></button> </div><input type="hidden" name="attr_id[]" value=""/></div>';
				jQuery('#product_attr_box').append(html);
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
