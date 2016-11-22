<?php
 
   /**
   * 
   */
   class Signupm extends CI_controller
   {
   	
   	public function signm($data)
   	{
   		#print_r($data);
   		foreach (array_keys($data) as $i)
			{
            #echo $i;
				$data[$i]=$this->db->escape($data[$i]);
            echo $data[$i];

			}
			$values=implode(',',$data);
			$this->db->query("call fb_form({$values})");
			#$this->db->insert('tbl_user',$data);
   	}
   }
   ?>

