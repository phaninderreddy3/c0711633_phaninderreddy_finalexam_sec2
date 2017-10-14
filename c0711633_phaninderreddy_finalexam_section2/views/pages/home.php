
<?php require_once('views/navigation.php'); ?>
<section>
    <div>
      <div class="panel panel-default">
        <div class="panel-body">
        <?php if(isset($_SESSION['user_session'])) { ?>
          <p>Hello there <?php echo $user_name; ?>!<p>
          <p>You have successfully landed on the home page. Congrats!</p>
        <?php } else if(isset($_SESSION['new_user'])){ ?>
          <p><p>
          <p>You are now a registered member. Congrats!</p>
        <?php  } else { ?>
             <p>You are not logged in<p>     
        <?php  } ?>
        </div>
      </div>
    </div>
</section>