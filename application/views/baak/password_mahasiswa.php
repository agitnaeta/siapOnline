<!DOCTYPE HTML>
<html lang="id">
<head>
<title>BAAK | Password Mahasiswa</title>
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
        <br>
        <div class="container-fluid">
        <div class="col-md-3 column">
         <?php include 'navigasi.php' ;?>
		</div>    
		<div class="col-md-9 column">
            <table class="table">
				<thead class="bg-primary">
					<tr>
						<th colspan="12">
				           <i class="glyphicon glyphicon-lock"></i> Password Mahasiswa <span class="badge">
                            <?php echo $jumlah=count($mhs->result());?></span>
						</th>
					</tr>
				</thead>
                </table>
            <div class="col-md-12">
                <form action="<?php echo site_url('baak/cek_password/cari');?>" method="post">
            <div class="input-group">
              <input required name="cari" type="text" class="form-control" placeholder="Cari Nama/ NIM">
              <span class="input-group-btn">
                <button class="btn btn-primary btn-sm" type="submit"><i class="glyphicon glyphicon-search"></i> Cari</button>
              </span>    
            </div>
                </form>
                <br>
                <div class="col-md-4"></div>
                <div class="col-md-4"><?php echo $this->session->flashdata('flashdata'); ?></div>
                <div class="col-md-4"></div>
            <table class="table table-hover table-bordered table-striped table-condensed">
            <thead>
                <th colspan="6" class="bg-primary"> 
                    <a href="<?php echo base_url('baak/cek_password');?>" class="btn btn-primary btn-sm">
                <i class="glyphicon glyphicon-refresh"></i> Tampilkan Semua</a> 
                </th><br>
            </thead>    
            <thead>
                <th class="text-center bg-success">No</th> 
                <th class="text-center bg-success">NIM</th> 
                <th class="text-center bg-success">Nama</th> 
                <th class="text-center bg-success">Jurusan</th> 
                <th class="text-center bg-success">Password</th> 
            </thead>
            <tbody>
                <?php $no=1; foreach ($mhs->result() as $isi) : ?>
                <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $isi->nim;?></td>
                <td><?php echo $isi->nama;?></td>
                <td><?php echo $isi->nama_jurusan;?></td>
                <td><?php echo $isi->password ;?></td>
                
                </tr>
                <?php endforeach;?>
            </tbody>
            </table>
            </div>
                
           </div>
	</div>
        </div>
</body>
</html>
