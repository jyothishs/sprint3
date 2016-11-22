<?php
/**
* 
*/
class Signup extends CI_controller
{
	
	public function sign()
	{
		$user['fname']=$this->input->get_post('firstname');
   		$user['sname']=$this->input->get_post('surname');
   	  $user['email']=$this->input->get_post('email');
   		$user['reemail']=$this->input->get_post('reemail');
   		$user['password']=$this->input->get_post('password');
   		$user['file']=$_FILES['profile']['name'];
         $user['filesize']=$_FILES['profile']['size'];
   		$date2=$user['dob']=$this->input->get_post('years')."-".$this->input->get_post('month')."-".$this->input->get_post('day');
   		$user['gender']=$this->input->get_post('g1');
         print_r($user);

      

            $config['upload_path']='./images/';
            $config['allowed_types']='gif|jpg|png';
            $config['max_size']=5000;
            $config['max_width']=4000;
            $config['max_height']=3000;
              $this->load->library('session');
              $this->session->set_userdata($user);

            $this->load->library('upload',$config);
         
            if(  $this->upload->do_upload('profile')){
      
               echo "succes";
         }
         else
         {
            echo "not";
         }
      #print_r($user);
      $url='http://localhost/serv/index.php/Log_in/signup';
        
      $option=array(
            'http'=>array(
                'header'=>"content-type: application/x-www-form-urlencoded\r\n",
                'method'=>"POST",
                'content'=>http_build_query($user),
                ),
            );
      $context=stream_context_create($option);
      $result=file_get_contents($url,false,$context);
        print_r($result);

      $json=json_decode($result,true);
      #print_r($json);

    if ($json['ResponseCode']==299)
         {
      echo"<script>alert('atleast first name should have 3 charoctor')</script>";

         }
          if($json['ResponseCode']==300)
          {
            echo"<script>alert('email and reemail not matched')</script>";
          }

      if($json['ResponseCode']==301)
      {
        echo "<script>alert('minimum age for joining facebook is 13 years')</script>";
      }   

       if($json['ResponseCode']==303)
        {
          echo"<script>alert('password with only greater than 8 charoctors')</script>";
        } 
      if($json['ResponseCode']==302)
      {
        echo"<script>alert('maximum size of the profile pic 5mb')</script>";
      }
       if($json['ResponseCode']==304)
       {
        echo"<script>alert('the minimum age for jonining facebook less than 13'</script>";
   }
   else
   {
    $this->load->view('email_verify');
	}
   {

                    $config = Array( 
                'crlf'=>'\r\n',
                'newline'=>'\r\n',
                'protocol' => 'smtp', 
                'smtp_host' => 'ssl://smtp.googlemail.com', 
                'smtp_port' => 465, 
                'smtp_user' => 'jyothishsj713@gmail.com', // here goes your mail 
                'smtp_pass' => '11062101', // here goes your mail password 
                'mailtype' => 'html', 
                'charset' => 'utf-8', 
                'wordwrap' => TRUE, 
                );
                   
               
                $this->load->library('email', $config); 
                $this->email->initialize($config); 
                 $message = 'hiiiiii'; 
                $this->email->set_newline("\r\n"); 
                $this->email->from('jyothishsj713@gmail.com'); // here goes your mail 
                $this->email->to($user['email']);// here goes your mail 
                $this->email->subject('Resume from JobsBuddy'); 
                $this->email->message($message); 
                if($this->email->send()) 
                { 
                echo 'Email sent.'; 
                } 
                else 
                { 
                show_error($this->email->print_debugger()); 
                }

             
                   
         }
}

        
}
   
?>