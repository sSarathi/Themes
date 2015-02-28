<?php  
//this section is for header



?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <?php wp_head(); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>


  
     <div>

     


     </div>
    
  </head>
  <body <?php body_class(); ?>>
    
    <header class="site-header">
     <div class="container">
      <nav class="site-nav">
        <?php $args=array(
              'theme_location' => 'Primary'
            ); ?>
            <?php wp_nav_menu( $args ); ?>
            </div>
      </nav>
       <h1 class=".blog-title"><a href="<?php echo home_url();?>"><?php bloginfo('name');?></a></h1>
        <p><?php bloginfo('description');?></p>
    
    </header>