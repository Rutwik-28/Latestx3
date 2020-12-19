<?php
require('top.inc.php');
// $categories_id='';
// $name='';
// $mrp='';
// $price='';
// $qty='';
// $image='';
// $short_desc	='';
// $description	='';
// $meta_title	='';
// $meta_description	='';
// $meta_keyword='';

// $msg='';
// $image_required='required';
// if(isset($_GET['id']) && $_GET['id']!=''){
// 	$image_required='';
// 	$id=get_safe_value($con,$_GET['id']);
// 	$res=mysqli_query($con,"select * from product where id='$id'");
// 	$check=mysqli_num_rows($res);
// 	if($check>0){
// 		$row=mysqli_fetch_assoc($res);
// 		$categories_id=$row['categories_id'];
// 		$name=$row['name'];
// 		$mrp=$row['mrp'];
// 		$price=$row['price'];
// 		$qty=$row['qty'];
// 		$short_desc=$row['short_desc'];
// 		$description=$row['description'];
// 		$meta_title=$row['meta_title'];
// 		$meta_desc=$row['meta_desc'];
// 		$meta_keyword=$row['meta_keyword'];
// 	}else{
// 		header('location:product.php');
// 		die();
// 	}
// }

// if(isset($_POST['submit'])){
// 	$categories_id=get_safe_value($con,$_POST['categories_id']);
// 	$name=get_safe_value($con,$_POST['name']);
// 	$mrp=get_safe_value($con,$_POST['mrp']);
// 	$price=get_safe_value($con,$_POST['price']);
// 	$qty=get_safe_value($con,$_POST['qty']);
// 	$short_desc=get_safe_value($con,$_POST['short_desc']);
// 	$description=get_safe_value($con,$_POST['description']);
// 	$meta_title=get_safe_value($con,$_POST['meta_title']);
// 	$meta_desc=get_safe_value($con,$_POST['meta_desc']);
// 	$meta_keyword=get_safe_value($con,$_POST['meta_keyword']);
	
// 	$res=mysqli_query($con,"select * from product where name='$name'");
// 	$check=mysqli_num_rows($res);
// 	if($check>0){
// 		if(isset($_GET['id']) && $_GET['id']!=''){
// 			$getData=mysqli_fetch_assoc($res);
// 			if($id==$getData['id']){
			
// 			}else{
// 				$msg="Product already exist";
// 			}
// 		}else{
// 			$msg="Product already exist";
// 		}
// 	}
	
	
// 	if($_GET['id']==0){
// 		if($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg'){
// 			$msg="Please select only png,jpg and jpeg image formate";
// 		}
// 	}else{
// 		if($_FILES['image']['type']!=''){
// 				if($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg'){
// 				$msg="Please select only png,jpg and jpeg image formate";
// 			}
// 		}
// 	}
	
// 	if($msg==''){
// 		if(isset($_GET['id']) && $_GET['id']!=''){
// 			if($_FILES['image']['name']!=''){
// 				$image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
// 				move_uploaded_file($_FILES['image']['tmp_name'],PRODUCT_IMAGE_SERVER_PATH.$image);
// 				$update_sql="update product set categories_id='$categories_id',name='$name',mrp='$mrp',price='$price',qty='$qty',short_desc='$short_desc',description='$description',meta_title='$meta_title',meta_desc='$meta_desc',meta_keyword='$meta_keyword',image='$image' where id='$id'";
// 			}else{
// 				$update_sql="update product set categories_id='$categories_id',name='$name',mrp='$mrp',price='$price',qty='$qty',short_desc='$short_desc',description='$description',meta_title='$meta_title',meta_desc='$meta_desc',meta_keyword='$meta_keyword' where id='$id'";
// 			}
// 			mysqli_query($con,$update_sql);
// 		}else{
// 			$image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
// 			move_uploaded_file($_FILES['image']['tmp_name'],PRODUCT_IMAGE_SERVER_PATH.$image);
// 			mysqli_query($con,"insert into product(categories_id,name,mrp,price,qty,short_desc,description,meta_title,meta_desc,meta_keyword,status,image) values('$categories_id','$name','$mrp','$price','$qty','$short_desc','$description','$meta_title','$meta_desc','$meta_keyword',1,'$image')");
// 		}
// 		header('location:product.php');
// 		die();
// 	}
// }


if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($conn,$_GET['type']);
	if($type=='delete'){
		$id=get_safe_value($conn,$_GET['id']);
		$delete_sql="delete from team where id='$id'";
		mysqli_query($conn,$delete_sql);
	}
}


?>
<div class="content pb-0">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header"><strong>Team Manage</strong></div>
					<form method="post" enctype="multipart/form-data">
						<div class="card-body card-block">


							<div class="card-body--">
								<div class="table-stats order-table ov-h">
									<table class="table" id="myTable">
										<thead>
											<tr>
												<th scope="col">SR NO </th>
												<th scope="col">Team</th>
												<th scope="col">Reg Date</th>
												<th scope="col">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php 
											$sql="select * from team order by id desc";
											$res=mysqli_query($conn,$sql);
											while($row=mysqli_fetch_assoc($res)){?>
											<tr>
										
											<td><?php echo $row['t_id']?></td>
											<td><?php echo $row['tname']?></td>
											<td><?php echo $row['regdate']?></td>
											
											
											<td>
												<?php
												echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['id']."'>Delete</a></span>";
												?>
											</td>
											</tr>
											<?php } ?>
										 </tbody>
									</table>
								</div>
							</div>
						</div>
					</form>


				</div>
			</div>
		</div>
	</div>
</div>


<?php
require('footer.inc.php');
?>