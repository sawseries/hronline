<?=HEADER_LOGIN;?>

<script>
    $(document).ready(function () {
        $("#login").validate();
    });
</script>


      <div class="container-fluid" id="page-content-wrapper" style='min-height:1000px;'>                 
    <div class="row">   
    <div class="wrapper fadeInDown" style='margin-top:50px;' >

      <?php if(isset($success)){ ?>
      <div class='success'><?=$success;?></div><br>
      <?php }else if(isset($fail)){ ?>
      <div class='fail'><?=$fail;?></div><br>
      <?php } ?>

      
      
      
      
  <div id="formContent"  style=''>
    <!-- Tabs Titles -->
     <img src="https://www.dnaconsult.co.th/images/PSUSP(ThaiVersion).jpg" style="width:40%;">
     <br><h2 class="active">HR-ONLINE</h2>
    <!-- Login Form -->
    <form method="post" id="loginform" action="./index.php?controller=Auth&action=login">
      <input type="text" id="username" name="username" class="fadeIn second" name="login"  style='text-align:center;' placeholder="login" required>
      <input type="password" id="password" name="password" class="fadeIn third" name="login" style='text-align:center;' placeholder="password" required>
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>
    <!-- Remind Passowrd -->
    <div>
      <a class="underlineHover" href='./index.php?controller=Auth&action=reset'>ลืมรหัสผ่าน</a>
      <a href='./index.php?controller=Auth&action=registerpage'>Register</a>
    </div>
   </div> 
  </div>      
</div>
</div>
<?=FOOTER_LOGIN;?>