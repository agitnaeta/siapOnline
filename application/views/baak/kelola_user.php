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
				           <i class="glyphicon glyphicon-user"></i> Kelola User <span class="badge">
                            <?php echo $jumlah=count($mhs->result());?></span>
						</th>
					</tr>
				</thead>
                </table>
            <div class="col-md-12">
                <form action="<?php echo site_url('baak/kelola_user/cari');?>" method="post">
            <div class="input-group">
              <input required name="cari" type="text" class="form-control" placeholder="Cari Nama/ NIM">
              <span class="input-group-btn">
                <button class="btn btn-primary btn-sm" type="submit"><i class="glyphicon glyphicon-search"></i> Cari</button>
              </span>    
            </div>
                </form>
                <br>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                <?php echo $this->session->flashdata('flashdata'); ?>
                </div>
                <div class="col-md-4"></div>
              
                
            <table class="table table-hover table-bordered table-striped table-condensed">
            <thead>
                <th colspan="6" class="bg-primary">
                <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-tambah">
                <i class="glyphicon glyphicon-plus"></i> Tambah Data</a> 
                    <a href="<?php echo base_url('baak/kelola_user');?>" class="btn btn-primary btn-sm">
                <i class="glyphicon glyphicon-refresh"></i> Tampilkan Semua</a> 
                </th><br>
                <th class="bg-primary text-center">
                    <a href="<?php echo base_url('baak/kelola_user/excel');?>" class="btn btn-sm"> <i class="glyphicon glyphicon-print"></i> Cetak</a></th> 
            </thead>    
            <thead>
                <th class="text-center bg-success">No</th> 
                <th class="text-center bg-success">NIM</th> 
                <th class="text-center bg-success">Nama</th> 
                <th class="text-center bg-success">Jurusan</th> 
                <th class="text-center bg-success">Periode</th> 
                <th class="text-center bg-success">Semester</th> 
                <th class="text-center bg-success">Aksi</th> 
            </thead>
                
           
            <tbody>
                
                <?php $no=1; foreach ($mhs->result() as $isi) : ?>
                <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $isi->nim;?></td>
                <td><?php echo $isi->nama;?></td>
                <td><?php echo $isi->nama_jurusan;?></td>
                <td><?php echo $isi->periode;?></td>
                <td><?php echo $isi->status_smt;?></td>
                <td class="text-center">
                    <a href="<?php echo base_url("baak/kelola_user/form_update/$isi->nim");?>" class="btn-sm btn-primary" title="Edit">
                        <i class="glyphicon glyphicon-pencil"></i></a>
                    <a href="<?php echo base_url("baak/kelola_user/hapus/$isi->nim");?>" class="btn-sm btn-danger" title="Hapu">
                        <i class="glyphicon glyphicon-remove"></i></a>
                </td>
                </tr>
                <?php endforeach;?>
            </tbody>
            </table>
            </div>
                
           </div>
	</div>
</div>
<div class="modal fade" id="modal-tambah" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header bg-primary">
							 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
							<h4 class="modal-title" id="myModalLabel">
								Input Data Mahasiswa
							</h4>
						</div>
						<div class="modal-body">
				            <form action="<?php echo site_url('baak/kelola_user/tambah_mhs'); ?>" method="post" role="form">
                            <label>Nama</label>
                            <input name="nama" type="text" class="form-control" placeholder="Nama Mahasiswa" required>
                            <label>Jurusan</label>
                            <select name="jurusan" class="form-control input-sm">
                            <?php foreach ($disJurusan->result() as $row):?>
                            <?php echo "<option value='$row->kode_nim'>$row->nama_jurusan</option>";?>
                            <?php endforeach ;?>    
                            </select>
                            <label>Periode</label>
                            <?php $d=date('Y');?>
                            <input readonly type="text" name="periode" class="form-control" value="<?php echo $d;?>/<?php echo $d+1;?>">
                            <label> Semester</label>
                                <input required class="form-control input-sm" type="number" name="semester" min="1">
						</div>
						<div class="modal-footer">
				            <button type="button" class="btn btn-default" data-dismiss="modal">
                                <i class="glyphicon glyphicon-remove"></i> Batal</button> 
                            <button type="submit" class="btn btn-primary">
                                <i class="glyphicon glyphicon-ok"></i> Simpan</button>
                        </form>    
						</div>
					</div>
					
				</div>
    </div>
</body>
</html>
