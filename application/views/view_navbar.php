<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".bs-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
            	<span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
      		</button>
      		<a class="navbar-brand" href="#">Test App</a>
    	</div>
    	<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
            <ul class="nav navbar-nav">

                <?php if ($logged_in){ ?>

                    <li><a href="<?=base_url()?>home/dashboard">Dashboard</a></li>
                    <li><a href="<?=base_url()?>user/show">Profile</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?=base_url()?>">Log off</a></li>

                <?php } else if (!$logged_in) {?>

                    <li><a href="<?=base_url()?>">Home</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?=base_url()?>home/signin">Sign in</a></li>

                <?php } ?>
                
            </ul>
        </nav>
  	</div>
</div>