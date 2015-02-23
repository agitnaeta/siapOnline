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
			<?php include 'navigasi.php';?>
            
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
                        <?php endforeach ;?>
				</tbody>
			</table>
                 <div class="col-md-4"></div>
            <div class="col-md-4">
                <form class="form-group" action="<?php echo site_url('mhs/khs/cari');?>" method="post">
                    <div class="input-group">
                       <select name="smt" class="form-control input-sm">
                        <?php foreach ($smt->result() as $status) :?>    
                            <option value="<?php echo $status->status_smt;?>">Pilih Semester</option>
                            <option value="<?php echo $status->status_smt;?>"><?php echo $status->status_smt;?></option>
                        <?php endforeach;?>    
                        </select>
                      <span class="input-group-btn">
                        <button class="btn btn-primary btn-sm" type="submit">
                            <i class="glyphicon glyphicon-refresh"></i> OK</button>
                      </span>    
                    </div>
                </form> 
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
				            Nilai
						</th>
					</tr>
				</thead>
                <?php $no=1; foreach  ($nilai->result() as $x): ?>
				<tbody>	
                    <td><?php echo $no++;?></td>
                    <td><?php echo $x->kode_mk;?></td>
                    <td><?php echo $x->matakuliah;?></td>
                    <td><?php echo $x->sks;?></td>
                    <td><?php echo $x->kode_nilai;?></td>
				</tbody>
                  <?php endforeach ;?>
			</table>

          
           </div>
           
	</div>
    </div>
        </body>