<!doctype html>
<html lang="en">

<head>
	<?php require_once("includes/layouts/header.php"); ?>
</head>

<body>
    <div class="container">
        <header>
		<?php require_once("includes/layouts/site_header.php"); ?>
		</header>
        <main>
            <div class="row">
                <div class="col col-md-12">
				<?php require_once("includes/layouts/site_banner.php"); ?>
			</div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <div class="site-content-area pe-4">
					<?php 
						if ($_SERVER["REQUEST_METHOD"] === "GET") {
							$currentPage = "";
							if($_GET){
								$currentPage = $_GET["page"];
							}
							

							if($currentPage == "" || $currentPage == "home") require_once("includes/contents/home.php");
							elseif($currentPage == "blog") require_once("includes/contents/blog.php");
							elseif($currentPage == "contact") require_once("includes/contents/contact.php");
							elseif($currentPage == "blog1") require_once("includes/contents/blog-1.php");
							elseif($currentPage == "blog2") require_once("includes/contents/blog-2.php");
							elseif($currentPage == "blog3") require_once("includes/contents/blog-3.php");
							elseif($currentPage == "blog4") require_once("includes/contents/blog-4.php");
							elseif($currentPage == "blog5") require_once("includes/contents/blog-5.php");
						}	
					?>

                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="sidebar">
					<?php require_once("includes/layouts/sidebar.php"); ?>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <div class="container-fluid">
        <footer class="mt-3">
		<?php require_once("includes/layouts/site_footer.php"); ?>
        </footer>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>