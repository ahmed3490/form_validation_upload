<?php 

include('category_config.php'); 
include('success.php'); 

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	
</head>
<body>
<div class="main-content-container container-fluid px-4">
<link rel="stylesheet" href="<?= $domain ?>../../styles/style2.css">


            <!-- Page Header -->
      <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
          <span class="text-uppercase page-subtitle">Dashboard</span>
          <h3 class="page-title">Add new Category</h3>
        </div>
    </div>
	<div class="main-content-container container-fluid px-4">
		<div class="col-sm-10">
			
		<form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
			<div class="form-group">
			
				<input type="text" name="cat_name" class="form-control  <?php echo (!empty($cat_name_error)) ? 'is-invalid' : ''; ?>"placeholder="Category Name"  >
                <span class="invalid-feedback"><?php echo $cat_name_error;?></span> 
				</div>
			<br>
		
				<button type="reset" class="btn btn-danger">Reset</button>
				<button type="submit" name="submit" class="btn btn-success">Submit</button>
			</div>

			</form>
			
		</div>
		
</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</body>
</html>