<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>SIAP ONLINE-MAHASISWA</title>
<link href="<?php echo base_url(); ?>src/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>src/css/flat.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo base_url(); ?>src/js/jscek.js"></script>
<script>
$(document).ready(function(){
        $('input[name="test"]').click(function(){
            if($(this).prop("checked") == true){
                $('.nilai').val('1');
            }
            else if($(this).prop("checked") == false){
                $('.nilai').val('0');
            }
        });
    });$(document).ready(function(){
        $('input[name="test"]').click(function(){
            if($(this).prop("checked") == true){
                $('.nilai').val('1');
            }
            else if($(this).prop("checked") == false){
                $('.nilai').val('0');
            }
        });
    });
</script>  

</head>