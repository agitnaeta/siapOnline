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
            <?php foreach  ($mhs->result() as $row): ?>
			<?php include 'navigasi.php' ;?>
		</div>
		<div class="col-md-9 column">
            <table class="table table-striped table-hover ">
				<thead class="bg-primary">
					<tr>
						<th width="6%" colspan="4">
				            Kartu Rencana Studi (KRS)
						</th>
					</tr>
				</thead>
				<tbody>
						<tr><td>NIM</td><td><?php echo $row->nim;?></td></tr>
						<tr><td>Nama</td><td><?php echo $row->nama;?></td></tr>
						<tr><td>Jurusan/Program Studi</td><td><?php echo $row->nama_jurusan;?>/<?php echo $row->prog_studi;?></td></tr>
                        <tr><td>Tahun Akdemik/Per</td><td><?php echo "$row->periode / $row->status_smt";?></td></tr>
                        <?php endforeach ;?>
				</tbody>
			</table>
                <?php include 'krs.php';?>
           </div>
	</div>
</div>
</body>