<?php
function navbar_active($curr_page, $menu_item) {
    if($curr_page == $menu_item) {
        echo "active-nav";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--META TAGS FOR NOINDEXING THE PAGE (PLEASE REMOVE THE FOLLOWING TAGS IN PRODUCTION)-->
        <meta name="robots" content="noindex" />
        <meta name="googlebot-news" content="noindex" />
        <meta name="googlebot" content="noindex">
        <meta name="googlebot-news" content="nosnippet">
        <!-- END OF NOINDEX -->
        <title>SEO solutions | SEO Agentur Wien- Werden Sie in Google die Nr. 1 mit dem SEO Solutions Team.</title>
         <!-- Favicon -->
        <link rel="shortcut icon" type="image/jpg" href="./assets/images/favicon.png"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">        <link rel="stylesheet" href="./assets/css/nav.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="./assets/css/main.css?v=<?php echo time(); ?>" >
        <link rel="stylesheet" media="screen and (max-width: 900px)" href="./assets/css/responsive.min.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    
    </head>
<body id="home-body">
  <!-- header -->
  <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top py-3">
            <div class="container navwrapper">
            <a href="/" class="navbar-brand text-uppercase font-weight-bold">
                <img  width="200" height="200" class="img-fluid" src="./assets/images/site-logo.png" alt="">
            </a>
            <a class="nav-cta__mob" href="tel:06641077144"><i class="fas fa-phone-alt"></i></a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item <?php navbar_active($curr_page, "startseite"); ?>"><a href="index.php" class="nav-link text-uppercase ">Startseite</a></li>
                            <li class="nav-item dropdown <?php navbar_active($curr_page, "services"); ?>">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                SERVICES
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a href="./logo-erstellung.php" class="nav-link text-uppercase">Logo Design</a>
                                    <div class="dropdown-divider"></div>
                                      <a href="./webdesign-wien.php" class="nav-link text-uppercase">Web Design</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="./seo-agentur-wien.php" class="nav-link text-uppercase ">SEO</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="./app-entwicklung.php" class="nav-link text-uppercase">APP ENTWICKLUNG</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="./social-media-management.php" class="nav-link text-uppercase">Social Media</a>
                                </div>
                            </li>
                        <li class="nav-item <?php navbar_active($curr_page, "blog"); ?>"><a href="./blog.php" class="nav-link text-uppercase ">Blog</a></li>
                        <li class="nav-item <?php navbar_active($curr_page, "contact"); ?>"><a href="./Kontakt.php" class="nav-link text-uppercase ">Kontakt</a></li>
                    </ul>
                    <a class="hvr-curl-top-right nav-cta" href="tel:06641077144">+436641077144</a>
                </div>
            </div>
        </nav>
    </header>