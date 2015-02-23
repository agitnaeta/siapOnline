<!DOCTYPE HTML>
<html lang="id">
<head>
<title>BAAK | Kelola User</title>
<link href="<?php echo base_url(); ?>src/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>src/css/flat.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo base_url(); ?>src/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>src/js/bootstrap.min.js"></script>
<textarea id="printing-css" style="display:none;">.no-print{display:none}</textarea>
<iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>
<script type="text/javascript">
//<![CDATA[
function printDiv(elementId) {
    var a = document.getElementById('printing-css').value;
    var b = document.getElementById(elementId).innerHTML;
    window.frames["print_frame"].document.title = document.title;
    window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
    window.frames["print_frame"].window.focus();
    window.frames["print_frame"].window.print();
}
//]]>
</script>
</head>
    <body>
    <div class="container-fluid bg-active">    
    <div class="row clearfix">
         <div class="col-md-12 bg-warning">
		<h6></h6>
        </div>
		<div class="col-md-12 bg-primary">
            <br>
            <br>
		</div>  
    </div>
    </div>
	</div>
        <div class="container-fluid">
	   <div class="row clearfix">
        <br>
		<div class="col-md-3 column">
        
			<?php include 'navigasi.php' ;?>
		</div>
		<div class="col-md-9 column">
            <table class="table">
				<thead class="bg-primary">
					<tr>
						<th colspan="12">
				           <i class="glyphicon glyphicon-print"></i> Cetak Absen 
						</th>
					</tr>
				</thead>
                </table>
            <div class="col-md-12">    
            
            <table class="table table-hover table-striped table-condensed">
            <thead><th colspan="5" class="bg-primary">Cari Berdasarkan</th></thead>
            <tbody>
                <tr><td>Kelas</td>
                    <td>
                     <form class="form-group" name="cari" role="form" action="<?php echo site_url('baak/khs_krs/cari_kelas');?>" method="post">
                    
                        <div class="input-group">
                    <select name="cari" class="form-control input-sm">
                        <option class="text-center" value="" selected> --Pilih Kelas--</option>
                        <?php foreach ($kelas->result()as $row) :?>
                        <?php echo "<option value=$row->kode_kelas>$row->kode_kelas</option>";?><?php endforeach;?>
                    </select>
                        <span class="input-group-btn">
                            <button class="btn btn-primary btn-sm" type="submit"> <i class="glyphicon glyphicon-search"></i> </button>
                        </span>
                         </div>
                        </form>
                    </td>
                <td></td><td>Matakuliah</td>
                    <td>
                     <form class="form-group" name="cari" role="form" action="<?php echo site_url('baak/khs_krs/cari_jurusan');?>" method="post">
                    
                         <div class="input-group">
                    <select name="cari" class="form-control input-sm">
                        <option class="text-center" value="" selected> Basis Data</option>
                        <?php foreach ($jurusan->result()as $row) :?>
                        <?php echo "<option value=$row->kode_jurusan>$row->nama_jurusan</option>";?><?php endforeach;?>
                    </select>
                        <span class="input-group-btn">
                            <button class="btn btn-primary btn-sm" type="submit"> <i class="glyphicon glyphicon-search"></i> </button>
                        </span>
                         </div>
                        </form>
                    </td>
                </tr>
                <tr> 
                <td class="text-center" colspan="8">
                <button class="btn btn-primary "><i class="glyphicon glyphicon-search"></i> Cari </button>
                </td>
                </tr>
            </tbody>
            </table>
            </div>
            <div class="col-md-12">
                <br>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                <div class="text-center">

                
                </div>
                    <?php echo $this->session->flashdata('flashdata'); ?>
                </div>
                <div class="col-md-4"></div>
                <?php include 'absen.php'; ?>
            </div>
            <div class="col-md-12" id="absen"></div>
           </div>
	</div>
</div>
<div>

