<html>
<?php include 'head.php'?>
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
            <?php foreach  ($mhs->result() as $row): ?>
			<?php include 'navigasi.php';?>
            
		</div>
		<div class="col-md-9 column">
           
            <table class="table table-striped table-hover ">
				<thead class="bg-primary">
					<tr>
						<th width="6%" colspan="4">
				          <i class="glyphicon glyphicon-edit"></i> Perubahan KRS
						</th>
					</tr>
				</thead>
				<tbody>
						<tr><td>NIM</td><td><?php echo $row->nim;?></td></tr>
						<tr><td>Nama</td><td><?php echo $row->nama;?></td></tr>
						<tr><td>Jurusan/Program Studi</td><td><?php echo $row->nama_jurusan;?>/<?php echo $row->prog_studi;?></td></tr>
                        <?php endforeach ;?>
				</tbody>
			</table>
                 <div class="col-md-4"></div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4"></div>
               <table class="table table-bordered table-hover ">
				<thead class="bg-primary">
					<tr>
						<th width="6%">
				            No
						</th>
                        <th>
				            Kode MK
						</th>
                        <th>
				            Mata Kuliah
						</th>
                        <th>
				            SKS
						</th> 
                        <th>
				            Kelas
						</th>
					</tr>
				</thead>
                
				<tbody>	
                    <?php $no=1; foreach  ($nilai->result() as $x): ?>
                    <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $x->kode_mk;?></td>
                    <td><?php echo $x->matakuliah;?></td>
                    <td><?php echo $x->sks;?></td>
                    <td>TI - IB</td>
                    </tr>
                    <?php endforeach ;?>
                    <tr><td colspan="5" class="text-right"><a class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-edit"></i> Ubah</a></td></tr>
				</tbody>
                  
			</table>

          
           </div>
           
	</div>
    </div>
</body>