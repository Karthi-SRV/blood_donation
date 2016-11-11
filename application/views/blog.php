<?php
require_once 'common/header.php';
?>
<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<?php
require_once 'common/sidebar.php';
require_once 'common/nav.php';
?>

	<!-- Main Container -->
    <div id="banners"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-11">
                <?php foreach ($blog as $data) {?>
                    <div class="blog-post">
                        <h1 class="blog-title">
                            <i class="fa fa-file-text"></i>
                            <?php echo $data['title'];?>
                        </h1>
                        <br>
                        <img src="<?php echo base_url(); echo $data['image'] ?>" alt="Feature-img" align="right" width="100%" class="blog-image">
                        <br>
                        <p>
                            <?php echo $data['content'];?>
                            
                        </p>
                        <div>
                            <span class="badge">Posted <?php echo $data['posted_date'];?></span>
                            <div class="pull-right">
                                <a href="http://www.facebook.com/share.php?u=http://www.cybernetikz.com/&title=Hello" target="_blank"><i class="fa fa-facebook icon-large"></i></a>
                                <a href="http://twitter.com/home?status=ShiftTo Tech+http://www.shiftto.in"><i class="fa fa-twitter icon-large"></i></a>
                                <a href="http://pinterest.com/pin/create/bookmarklet/?media=http://shiftto.in/img/02.png&amp;url=http://www.shiftto.in&amp;is_video=false&amp;description=[ShiftTo Tech]"><i class="fa fa-pinterest icon-large"></i></a>
                                <a href="https://plus.google.com/share?url=http://www.shiftto.in"><i class="fa fa-google-plus icon-large"></i></a>
                            </div> 
                        </div>
                    </div>
                    <hr>
                    <?php }?>
                    <ul class="pagination">
                        <li class="disabled"><a href="#">&laquo;</a></li>
                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">2 <span class="sr-only"></span></a></li>
                        <li><a href="#">3 <span class="sr-only"></span></a></li>
                        <li><a href="#">4 <span class="sr-only"></span></a></li>
                        <li><a href="#">5 <span class="sr-only"></span></a></li>
                    </ul>
                </div>

                
            </div>
        </div>
       
        <!--End Main Container -->


        <!-- Footer -->

<?php require_once 'common/footer.php';
?>
</body>
</html>
