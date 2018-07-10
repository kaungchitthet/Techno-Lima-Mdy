<?php include "partials/header.php" ?>
<?php include "partials/navbar.php" ?>
<?php 
	
					$db=new mysqli("localhost","root","","companyproject");
					
					if (isset($_GET["search"]))
					{
						$value=$_GET["search"];
						$query="select * from company where name Like '".$value."%'";	
					}
					else
					{
						$query="select * from company";	
					}
					
					

					$result=$db->query($query);

					$row_count=$result->num_rows;

					$pagination="";
					if ($row_count>10)
					{
						$pagination=$row_count/10;
						$pagination+=1;
					}

					$pagination_display="";

					for ($i=1;$i<=$pagination;$i++)
					{
						$pagination_display.="<li class='page-item'><a  href='index.php?page=".$i."''>".$i."</a></li>";
					}




?>
	<div class="conatiner">

		<h1 class="text-center">Company</h1>
		<div class="col-md-8 col-md-offset-2">
			<a href="insert.php" class="btn btn-primary">Add New</a>
			<table class="table">
			<tr>
				<th>No</th><th>Name</th><th>Address</th><th>Phone</th><th></th>
			</tr>
			<?php
					$db=new mysqli("localhost","root","","companyproject");
					
					if (isset($_GET["search"]))
					{
						$value=$_GET["search"];
						$query="select * from company where name Like '".$value."%'";	
					}

					else
					{
						$page=1;
						if (isset($_GET["page"]))
						{
							$page=$_GET["page"];
						}

						$start=0;
						$row=10;
						if ($page==1)
						{
							$start=0;
						}
						else
						{
							$start=(($page-1)*10);
						}
						$query="select * from company limit $start,$row";	
						
					}
					
					

					$result=$db->query($query);
					while ($c=$result->fetch_object())
					{
						echo '<tr>
								<td>'.$c->id.'</td><td>'.$c->name.'</td><td>'.$c->address.'</td><td>'.$c->phone.'</td><td>
								<a href="update.php?id='.$c->id.'" class="btn btn-info">Update</a><a href="delete.php?id='.$c->id.'" class="btn btn-danger">Delete</a>
								</td>
							</tr>';
					}
			 ?>
			
			
			</table>
			<nav aria-label="Page navigation example">
					<ul class="pagination">
						
						<?php echo $pagination_display ?>
						
					</ul>
			</nav>	
		</div>
	</div>
<?php include "partials/footer.php" ?>