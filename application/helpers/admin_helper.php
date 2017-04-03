<?php
    // tạo ra các link trong  thư mục admin
    function admin_url($url='')
    {
        return base_url('admin/'.$url);
    }

    function kehoach_url($url='')
    {
        return base_url('kehoach/'.$url);
    }

    function kehoachgiangday_url($url='')
    {
        return base_url('kehoachgiangday/'.$url);
    }



    function isset_user($data)
    {
    	if ($data) 
    	{
            # code...
            $user = $data;
            //pre($user);
            //$data= array();
            foreach ($user as $key => $value) {
                # code...
                return $data = $value->maGV;
            }
            
        }
		else
		{
			// không tồn tại 
			redirect(admin_url('login'));
		}
	}
?>