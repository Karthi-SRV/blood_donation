<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Ur Voice Association </title>

  <!-- Bootstrap core CSS -->

  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(); ?>apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url(); ?>apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url(); ?>android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url(); ?>favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>favicon-16x16.png">
<link rel="manifest" href="<?php echo base_url(); ?>manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo base_url(); ?>ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

  <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/icheck/flat/green.css" rel="stylesheet">


  <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body style="background:#F7F7F7;">

  <div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
      <div id="login" class="animate form">

       
<div class="login_content">
  <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="..." class="img-circle profile_img" style="width:200px;margin:auto">
</div>
<br/>
<?php
if ($this->session->flashdata('login_error')) {
  ?>
                      <div class="alert alert-danger alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        </button>
                        <?php echo $this->session->flashdata('login_error'); ?>
                      </div>
                      <?php
}
?>
        <section class="login_content">
          
          <form id="login" action="login/validate" method="post">

              <h1 style="line-height: 0px">Ur Voice Association</h1>
              <div>
                <input type="email" class="form-control" name = "username" placeholder="Email" required />
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Password" required />

              </div>
              <div>

              <button type="submit" class="btn btn-default submit" > Login</button>

               </div>



          </form>

          <!-- form -->
        </section>
        <!-- content -->
      </div>

    </div>
  </div>

</body>

</html>
