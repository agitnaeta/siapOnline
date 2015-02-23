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
				           <i class="glyphicon glyphicon-wrench"></i> Update BAAK
						</th>
					</tr>
				</thead>
                </table>
            <div class="col-md-12">
                <div class="col-md-3"></div>
                <div class="col-md-6 panel"> 
                 <?php echo $this->session->flashdata('flashdata'); ?>    
                <form class="form-group" action="<?php echo base_url("baak/utama/update");?>" method="post">
                <?php foreach ($baak->result() as $row) :?>
                <table class="table table-bordered table-hover">
                    <thead><th colspan="2" class="bg-primary text-center"></th></thead>
                    <thead><th colspan="2" class="bg-success text-center">Update Data</th></thead>
                <tr>
                    <td>NIK</td>
                    <td><input class="form-control" type="text" name="nib"  value="<?php echo $row->nib ;?>"></td>
                </tr>
               <tr>
                    <td>Nama</td>
                    <td><input class="form-control" type="text" name="nama"  value="<?php echo $row->nama_baak ;?>"/></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input class="form-control" type="text" name="username"  value="<?php echo $row->username ;?>"/></td>
                </tr>
                    <tr>
                    <td>Password Baru</td>
                    <td><input title="Biarkan Jika Tidak Diganti" class="form-control" type="text" name="password" placeholder="Biarkan Kosong Jika Tidak Diganti"/></td>
                </tr>
                    <tr>
                        <td colspan="2" class="text-right">
                        <a href="<?php echo base_url('baak/utama');?>" class="btn-default btn-sm btn"><i class="glyphicon glyphicon-backward"></i> Kembali</a>
                        <button class="btn-primary btn btn-sm" type="submit"><i class="glyphicon glyphicon-ok"></i> Update</button>
                        </td> 
                    </tr>
               
                </table>
                <?php endforeach;?>
                </form>
                </div>
                <div class="col-md-3"></div>
            </div>
                
           </div>
	</div>
</div>
</body>

