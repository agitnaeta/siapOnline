<html>
<?php include 'head.php' ;?>
</html>

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
            <table class="table table-striped table-hover ">
				<thead class="bg-primary">
					<tr>
						<th width="6%" colspan="4">
				        <i class="glyphicon glyphicon-list-alt"></i>  Lihat Kurikulum 
						</th>
					</tr>
				</thead>
			</table>
                     <?php echo $this->session->flashdata('flashdata'); ?> 
            <div class="col-md-3"></div>
            <div class="col-md-6">
            <?php $no=1; foreach ($dataKurikulum->result() as $row) : ?>
            <table class="table table-condensed table-bordered">
            <thead class="bg-primary"><th colspan="4">Semester : <?php echo $row->semester;?></th></thead>
            <thead class="bg-primary"><th>No</th><th>Kode Mk</th><th>Matakuliah</th><th>SKS</th></thead>
            <tbody>
             <?php $no=1; foreach ($matkul->result() as $row) : ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row->kode_mk;  ?></td>
                    <td><?php echo $row->matakuliah;?></td>
                    <td><?php echo $row->sks;?></td>
                </tr>
                <?php endforeach;?>    
            </tbody>    
            </table>
            <?php endforeach; ?>
            </div>
            <div class="col-md-3"></div>
	    </div>
        </div>
        </div>
</body>