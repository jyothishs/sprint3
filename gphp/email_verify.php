<!DOCTYPE html>
<html>
<head><?php $this->load->helper('url'); ?>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/bootstrap.min.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/style.css'; ?>">
	<script type="text/javascript" src="<?php echo base_url().'js/bootstrap.min.js';?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'js/jquery-2.2.3.min.js';?>"></script>
	<title></title>
	
</head>
<body>

  <div class="container_fluid">
      <div class="row verifycolor">
          <div class="col-md-offset-3 col-md-10 col-xs-offset-3 col-xs-10">
            <img src="<?php echo base_url().'images/facebook_logo.png';  ?>" width=700px height=150px>	
  		    </div>
  		
      

        <div class="col-md-offset-1 col-md-10 col-xs-offset-2 col-xs-10 ">
            <br><br><br><br><br><center><font size="25"> Verify email</font>
        </div>
        <div class="col-md-offset-3 col-md-10  col-xs-offset-3 col-xs-10">
            <font size="5"> <br>We sent an email to <?php echo $this->session->userdata('email'); ?> com to make sure that you own it.<br>Please check your inbox,then follow the instructions to finsh settings up<br> your</font>
            
   
       </div>	
       <div class="col-md-offset-3 col-md-10 col-xs-offset-3 col-xs-10">
            <br><br><br><br><br><input type="submit" name="" value="Resend email" class=" btn-default mailbtn">
        </div>
        <div class="col-md-offset-3 col-md-9 col-xs-offset-3 col-xs-9"> <br><br><br>

            <div class="col-md-3  col-xs-3 mailpad">
                <a href="">Terms of Use</a>
            </div>
                <div class="col-md-3 col-xs-3"> 
                    <a href="">Privacy & cookies</a>
                </div>
                <div class="col-md-3 col-xs-3"> 
                   <a href="">Signout</a> 
                </div>
            </div>
      </div>
    </div>S
</body>
</html>