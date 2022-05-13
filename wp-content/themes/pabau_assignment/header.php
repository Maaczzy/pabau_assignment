<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
<nav class="navbar navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/img/logo.png' ); ?>" alt="" width="30" class="d-inline-block align-text-top">
      Medoc - Dental
    </a>
  </div>
</nav>