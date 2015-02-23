<!DOCTYPE HTML>
<html lang="id">
<head>
<title>SIAP ONLINE-Ketua Jurusan</title>
<link href="<?php echo base_url(); ?>src/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>src/css/flat.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo base_url(); ?>src/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>src/js/jquery.ui.js">
    $(function(){
    $("#cari").autocomplete({
    source: "<?php echo site_url('jurusan/disposisi_perwalian/cariMahasiswa'); ?>" // path to the get_birds method
    });
});

</script>
</head>