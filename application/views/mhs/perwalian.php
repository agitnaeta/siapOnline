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
			<?php include 'navigasi.php' ;?>
		</div>
		<div class="col-md-9 column">
            <table class="table table-striped table-hover ">
				<thead class="bg-primary">
					<tr>
						<th width="6%" colspan="4">
				        <i class="glyphicon glpyhicon-edit"></i>    Perwalian - <?php echo $nama;?> 
						</th>
					</tr>
				</thead>
			</table>
            <h3 class="text-center">
                Data Perwalian Semester <?php $no=1; foreach ($mhs->result() as $row):  echo $row->status_smt; endforeach;?> 
            </h3>
             <?php echo $this->session->flashdata('flashdata'); ?>  
            <form action="perwalian/set_perwalian" method="post">
            <table class="table table-bordered table-striped table-condensed">
            <thead class="bg-primary">
            <th>No</th><th>Kode</th><th>Matakuliah</th><th>SKS</th><th>Tahun Ajaran</th><th class="text-center">Perwalian</th>    
            </thead>
            <tbody>
            
            <?php $nilai=1; $no=1; foreach ($matkul->result() as $row):?>    
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $row->kode_mk;?> 
                    <input type="hidden" name="kode_mk" value="<?php echo $row->kode_mk;?>">
                    <input type="hidden" name="nim" value="<?php echo $nim;?>"> </td>
                <td><?php echo $row->matakuliah;?> </td>
                <td><?php echo $row->sks;?> </td>
                <td><?php echo $row->tahun_ajaran;?></td>
                <td class="text-center">
				<input type="checkbox" name="test" > 
				<input type="hidden" value="" class="nilai" >
				</td>
            </tr>
             <?php endforeach;?>

            <tr>
                <td class="text-right" colspan="6">
                <button type="reset" class="btn-sm btn btn-warning"><i class="glyphicon glyphicon-remove"></i> Batal </button> 
                <button type="submit" class="btn-sm btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Set Perwalian </button> 
                </td>
            </tr>    
            
            </tbody>    
            </table>
                
            </form>
           </div>
	</div>
</div>
</body>

