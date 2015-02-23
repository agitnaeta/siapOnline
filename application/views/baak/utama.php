<!DOCTYPE HTML>
<html lang="id">
<head>
<title>SIAP ONLINE</title>
<link href="<?php echo base_url(); ?>src/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>src/css/flat.css" rel="stylesheet">
   
</head>
    <body>
    <div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
            <img src="<?php echo base_url(); ?>src/img/logoheader.jpg" class="img img-responsive"><br>
		</div></div></div>
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
             <div class="col-lg-12">
                
                    <table class="table table-striped table-hover ">
				<thead class="bg-primary">
					<tr>
						<th colspan="12">
				           <i class="glyphicon glyphicon-home "></i> Home
						</th>
					</tr>
				</thead>
                </table>
                 
            <div class="col-md-4 panel">
                <table class="table table-bordered table-hover">
                <thead><th colspan="2" class="bg-success"><i class="glyphicon glyphicon-user"></i> Detail Akun</th></thead>
                <tbody>
                <?php foreach ($data->result() as $row) : ?>
                <tr><td>NIK</td><td>: <?php echo $row->nib ;?></td></tr>    
                <tr><td>Nama</td><td>: <?php echo $row->nama_baak ;?></td></tr>    
                <tr><td>Username</td><td>: <?php echo $row->username ;?></td></tr>   
                <tr><td colspan="2" class="text-right">
                    <a href="<?php echo base_url('baak/utama/form_update');?>" class="btn btn-primary btn-sm">
                        <i class="glyphicon glyphicon-pencil"></i> Edit Detail</a>  
                </td></tr>      
                <?php endforeach ;?>
                </tbody>
                </table>
            </div>
                 
            <div class="col-md-4 panel">
            <table class="table table-bordered table-hover">
                <thead>
                    <th colspan="2" class="bg-success"><i class="glyphicon glyphicon-folder-open"></i> 
                        Jumlah Mahasiswa : <?php echo $jumlah=count($mhs->result());?></th>
                </thead>
                <tbody>
                    <?php foreach ($jurusan->result() as $row):?>
                    <tr><td><?php echo $row->nama_jurusan;?></td><td>: <?php echo $row->jumlah;?> Orang</td></tr>
                    <?php endforeach ;?>      
                    <tr><td colspan="2" class="text-right">
                        <a href="kelola_user" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-folder-open"></i> Kelola User</a>  
                    </td></tr>      

                </tbody>
            </table>
            </div>
                 
            <div class="col-md-4 panel">
            <table class="table table-bordered table-hover">
            <thead>
                <th colspan="2" class="bg-success"><i class="glyphicon glyphicon-time"></i> Detail Tanggal</th></thead>
            <tbody>
                <tr><td>Tanggal</td><td>: <?php echo (dateindo($date=date('Y-m-d')));?></td></tr>    
            </tbody>
            </table>
            </div>
 
            </div>
           
           
	</div>
</div>
            
           
</body>