<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ebanking</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

<link href=<?php echo base_url()."css/default.css"; ?> rel="stylesheet" type="text/css" media="all" />
<link href=<?php echo base_url()."css/fonts.css"; ?> rel="stylesheet" type="text/css" media="all" />

</head>
    <body>
        
        <div id="logo" class="container">
    <h2 align="center"><span class="icon icon-unlock icon-size"></span>
        
        <?php $temp = $this->session->userdata('logged');
        $users['username'] = $temp['username'];
        
        echo 'dobrodošli: <span>'.$users['username'].'</span>';
        ?>
      </h2>
	<p align="center"> Created by Vladimir Radovanović</p>
<div id="hrl"></div>
            <br />
            <br />
            <div>
                <?php echo validation_errors(); ?>
           
            <?php echo form_open('Client/verify_edit_account/'.$this->uri->segment(3)); ?>
             
             <?php foreach ($records as $rec): ?>
            
            
<h1>Izmena podataka:</h1><br /><br />

   <label>
    <span>Broj računa:</span><input div id="input" id="name" type="text" name="broj_racuna" value="<?php echo $rec->broj_racuna; ?>" /> 
</label>
<br /><label>
    <span>Vrsta:</span><input div id="input" id="name" type="text" name="vrsta" value="<?php echo $rec->vrsta; ?>" /> 
</label>
<br />
<label>
    <span>Banka:</span><input div id="input" id="name" type="text" name="banka" value="<?php echo $rec->banka; ?>" /> 
</label>
<br />

      <?php endforeach; ?>

<input type="submit" value="Izmeni" /> 
 
        <?php echo form_close(); ?>
   
     </div>         
</div>     