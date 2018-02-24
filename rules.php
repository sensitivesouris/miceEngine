<?php
	require_once 'config.php';
	include("modules/base.php");
	selectSiteData();

	$rules=mb_convert_encoding($rowSiteData['rules'], "cp1252", "auto"); //converting to rus encoding
?>
<!DOCTYPE html>
<html>
<?php include("includes/header.php"); ?>
	<body>
 		<?php include("includes/maintenance.php"); ?>
		<?php include("includes/adm-nav.php"); ?>
    <div class="container">
	 		<div class="content">
	      <main id="main">
	      	<div class="head"></div>
					<?php include("includes/navigation.php"); ?>
	      		<div class="post">
							<h1>Правила игры</h1>
							<article>
							 	<p>
							     <?php echo $rules; ?>
							  </p>
							</article>
	          </div>
					<div class="foot"></div>
	      </main>
				<?php include("includes/footer.php"); ?>
	    </div>
    </div> <!-- /container -->
		<?php include("includes/scripts.php"); ?>
  </body>
</html>