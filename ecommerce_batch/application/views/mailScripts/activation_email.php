<?php
//$this->load->library('encrypt');
//$en_blogger_id=urlencode($this->encrypt->encode($blogger_id));
//$en_blogger_id= base64_encode($blogger_id);
$en_blogger_id=$this->encrypt->encode($blogger_id);
$id = str_replace("/","%F2", $en_blogger_id );
?>

<h3>Hello, <?php echo $last_name;?></h3>
<span>User Id: <?php echo $to_address;?></span>
<br/>
<span>Password : <?php echo $password;?></span>
<br/>
<span>
    To activate your account click the link bellow:
</span>
<br/>
<span>
    Activation Link: 
       <a href="<?php echo base_url();?>blogger/update_blogger_status/<?php echo $id;?>">
       myblog.com/activate=user=<?php echo $id;?></a>
   
</span>
<h3>Thank you To Join our community !</h3>

