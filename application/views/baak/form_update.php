<!DOCTYPE HTML>
<html lang="id">
<head>
<title>BAAK | Kelola User</title>
<link href="<?php echo base_url(); ?>src/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>src/css/flat.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo base_url(); ?>src/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>src/js/bootstrap.min.js"></script>
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
				           <i class="glyphicon glyphicon-user"></i> Kelola User (<?php echo $jumlah=count($mhs->result());?>)
						</th>
					</tr>
				</thead>
                </table>
           
            <div class="col-md-12">
                <div class="col-md-3"></div>
                <div class="col-md-6">    
                <form class="form-group" action="<?php echo base_url("baak/kelola_user/update");?>" method="post">
                <?php foreach ($mhs->result() as $isi) :?>
                <table class="table table-bordered table-hover">
                    <thead><th colspan="2" class="bg-primary"></th></thead>
                    <thead><th colspan="2" class="bg-success text-center">Update Mahasiswa</th></thead>
                <tr>
                    <td>NIM</td>
                    <td><input class="form-control" type="text" name="nim" readonly value="<?php echo $isi->nim;?>"/>
                        <input class="form-control" type="hidden" name="password"  value="<?php echo $isi->password;?>"/></td>
                </tr>
               <tr>
                    <td>Nama</td>
                    <td><input class="form-control" type="text" name="nama"  value="<?php echo $isi->nama;?>"/></td>
                </tr>
               <tr>
                    <td>Periode</td>
                    <td><input class="form-control" type="text" name="periode"  value="<?php echo $isi->periode;?>"/></td>
                </tr>
               <tr>
                    <td>Semester</td>
                    <td>
    <input class="form-control input-sm" min="1" type="number" name="semester"  value="<?php echo $isi->status_smt;?>"/></td>
                </tr>
                 <?php endforeach;?>    
                 <tr>
                    <td>Jurusan</td>
                    <td>
                        <select name="jurusan" class="form-control input-sm">
                            <option value="<?php echo $isi->kode_nim;?>"><?php echo "Sekarang :$isi->nama_jurusan";?>                                      </option>
                             <?php foreach ($disJurusan->result() as $row):?>
                            <?php echo "<option value='$row->kode_nim'>$row->nama_jurusan</option>";?>
                            <?php endforeach ;?>  
                        </select>
                        
                    </td>
                </tr>    
                    <tr>
                        <td colspan="2" class="text-right">
                        <a href="<?php echo base_url('baak/kelola_user/');?>" class="btn-default btn btn-sm"><i class="glyphicon glyphicon-backward"></i> Batal</a>
                        <button class="btn-primary btn btn-sm" type="submit"><i class="glyphicon glyphicon-ok"></i> Update</button>
                        </td> 
                    </tr>
               
                </table>
                
                </form>
                </div>
                <div class="col-md-3"></div>
            </div>
                
           </div>
	</div>
</div>
</body>

