<?php include 'head.php';?>
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
            <?php foreach  ($mhs->result() as $row): $row->nama; endforeach; ?>
			<?php include 'navigasi.php';?>
            
		</div>
		<div class="col-md-9 column">
           
            <table class="table table-striped table-hover ">
				<thead class="bg-primary">
					<tr>
						<th width="6%" colspan="4">
				           <i class="glyphicon glyphicon-lock"></i> Ganti Password
						</th>
					</tr>
				</thead>
			</table>
                 <div class="col-md-3"></div>
            <div class="col-md-6">
                <?php echo $this->session->flashdata('flashdata'); ?>   
                <form class="from-group" action="<?php echo site_url('mhs/ganti_password/update');?>" method="post">
                <?php foreach ($mhs->result() as $isi) :?>
                <table class="table table-bordered table-hover">
                    <thead><th colspan="2" class="bg-primary"></th></thead>
                    <thead><th colspan="2" class="bg-success text-center">
                        <i class="glyphicon glyphicon-user"></i> Identitas</th></thead>
                <tr>
                    <td>NIM</td>
                    <td><input class="form-control" type="text" name="nim" readonly value="<?php echo $isi->nim;?>"/></td>
                </tr>
               <tr>
                    <td>Nama</td>
                    <td><input readonly class="form-control" type="text" name="nama"  value="<?php echo $isi->nama;?>"/></td>
                </tr>
                    <tr>
                    <td>Password Lama</td>
                    <td><input readonly class="form-control" type="text" name="pl"  value="<?php echo $isi->password;?>"/></td>
                </tr>
                    <tr>
                    <td>Password Baru</td>
                    <td><input required class="form-control" type="text" name="pb" placeholder="Password Baru"  /></td>
                </tr>
                 <?php endforeach;?> 
                <table class="table table-condensed">
                    <tr>
                        <td class="text-right">
                        <a class="btn-default btn btn-sm" href="<?php echo site_url('mhs/utama');?>">
                        <i class="glyphicon glyphicon-remove"></i>  Batal</a>    
                        <button type="submit" class="btn-primary btn btn-sm">
                        <i class="glyphicon glyphicon-ok"></i> Ganti </button>
                        </td>
                    </tr>
                </table>
                </form>    
            </div> 
                <div class="col-md-4"></div>
        </div>
	</div>
    </div>
</body>