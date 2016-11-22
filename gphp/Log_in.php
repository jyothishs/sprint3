<?php
   /**
   * 
   */
   class Log_in extends CI_controller
   {
   	
   	public function signup()
   	{
   	$user['fname']=$this->input->get_post('fname');
   	$user['sname']=$this->input->get_post('sname');
   	$email1=$user['email']=$this->input->get_post('email');
   	$reemail=$reemail['reemail']=$this->input->get_post('reemail');
   	$user['password']=$this->input->get_post('password');
   	$user['file']=$this->input->get_post('file');
   	$date2=$user['dob']=$this->input->get_post('dob');
   	$user['gender']=$this->input->get_post('gender');

   	#print_r($user);

     /* if(strlen($user['fname'])>3)
      {

      }
      else
         {
          echo "the first name should have 3 charoctor";
         }
         if(strlen($user['sname'])>4)
         {

         }
         else
         {
            echo "the sname should have 4 char";
         }*/
         $date1= date("Y/m/d");


         $diff=abs(strtotime($date2)-strtotime($date1));

         $years = floor($diff/(365*60*60*24));
         $months = floor(($diff- $years*365*60*60*24)/(30*60*60*24));
        $days = floor(($diff - $years*365*60*60*24-$months *30*60*60*24)/(60*60*24));
#echo $date1;
  
         /*if($years<13)
         {
            echo "<br>the registration not accept";
         }
                  
         if (preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/',$user['password']))
      {
          echo "<br> password valid";

      }
      else
      {
         echo "<br>password not valid";
      }	
      if($email1!=$re_email)
      {
         echo " <br> email not valid";
      }
      else
      {
         echo "<br>emailvaid";
      }
      if($user['file']>5000)
      {
         echo " <br>prfile pic not succes";
      }
      else
      {
         echo "<br> profile pic success";
      }
        */
      


   
        if (strlen($user['fname'])<3 ) 
        {
           $response= array('ResponseCode' =>299,'message'=>'atleast first name should have 3 charoctor');
    echo json_encode($response);
        }

        else

        {

          if($email1!==$reemail)
          {
 $response= array('ResponseCode' =>300,'message'=>'email and re enter email not matched');
 echo json_encode($response);
          }
          else
          {

         if($years<13) 
         {
         $response= array('ResponseCode' =>301,'message'=>'minimum age for joining facebook is 13 years');
    echo json_encode($response);
         }

         else

         {
            if ($user['file']>5000) 
            {
               $response= array('ResponseCode' =>302,'message'=>'maximum size of the profile pic 5mb');
    echo json_encode($response);
            }

      
         else
         {
            if (!preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/',$user['password']))
       {
             $response= array('ResponseCode' =>303,'message'=>'password with only greater than 8 charoctors');
    echo json_encode($response);   
            }
            else
            {
              if($years<13)
              {
                 $response= array('ResponseCode' =>304,'message'=>'the minimum age for joining facebook is less than 13');
    echo json_encode($response);   
              }
            
            {
               $this->load->model('Signupm');
               if(!$this->Signupm->signm($user))
               {
                $response= array('ResponseCode' =>350,'message'=>'account created');
    echo json_encode($response);
               }
            }
            }
         }
      }
   }
 }

}
}
?>