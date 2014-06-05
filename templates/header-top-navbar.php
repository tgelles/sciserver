<header class="banner navbar navbar-default navbar-static-top" role="banner">
   <div class="logo">
      <div class="container">
        <div class="row">
         <div class="col-md-4">
      <a href="/index.php"><img src="/wp-content/uploads/2014/04/sciserver.png" class="img-responsive" alt="sciserverlogo"></a>
    </div>
    <div class="col-md-4 col-md-offset-4">
           <p class="lead">Collaborative data-driven science</p>
        </div>
    </div>
  </div>
</div><!--end of logo -->
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav pull-right'));
        endif;
      ?>
    </nav>
  </div>
</header>