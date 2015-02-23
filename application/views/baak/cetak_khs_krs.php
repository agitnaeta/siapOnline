<!DOCTYPE HTML>
<html lang="id">
<head>
<title>BAAK | Kelola User</title>
<link href="<?php echo base_url(); ?>src/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>src/css/flat.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo base_url(); ?>src/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>src/js/bootstrap.min.js"></script>
<textarea id="printing-css" style="display:none;">.no-print{display:none}</textarea>
<iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>
<script type="text/javascript">
//<![CDATA[
function printDiv(elementId) {
    var a = document.getElementById('printing-css').value;
    var b = document.getElementById(elementId).innerHTML;
    window.frames["print_frame"].document.title = document.title;
    window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
    window.frames["print_frame"].window.focus();
    window.frames["print_frame"].window.print();
}
//]]>
</script>
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
				           <i class="glyphicon glyphicon-print"></i> Cetak KHS & KRS <span class="badge">
                            <?php echo $jumlah=count($mhs->result());?></span>
						</th>
					</tr>
				</thead>
                </table>
            <div class="col-md-12">    
            
            <table class="table table-hover table-striped table-condensed">
            <thead><th colspan="5" class="bg-primary">Cari Berdasarkan</th></thead>
            <tbody>
                <tr><td>Nama/Nim</td><td width="40%">
                 <form class="from-group" action="<?php echo base_url('baak/khs_krs/cari');?>" method="post">
                    <div class="input-group">
                     <input required type="text" class="form-control" placeholder="Cari NIM / Nama" name="cari">
                        <span class="input-group-btn">
                            <button class="btn btn-primary btn-sm" type="submit"> <i class="glyphicon glyphicon-search"></i> </button>
                        </span>
                </div>
                 </form>     
                </td>
                <td></td><td>Semester</td><td>
                 <form class="form-group" role="form"  action="<?php echo base_url('baak/khs_krs/cari_semester');?>" method="post">    
                    <div class="input-group">
                    <input required type="number" class="form-control input-sm" name="cari" min="1"  placeholder="Semester...">
                        <span class="input-group-btn">
                            <button class="btn btn-primary btn-sm" type="submit"> <i class="glyphicon glyphicon-search"></i> </button>
                        </span>
                </div>
                    </form> </td>
                </tr>
                <tr><td>Kelas</td>
                    <td>
                     <form class="form-group" name="cari" role="form" action="<?php echo site_url('baak/khs_krs/cari_kelas');?>" method="post">
                    
                        <div class="input-group">
                    <select name="cari" class="form-control input-sm">
                        <option class="text-center" value="" selected> --Pilih Kelas--</option>
                        <?php foreach ($kelas->result()as $row) :?>
                        <?php echo "<option value=$row->kode_kelas>$row->kode_kelas</option>";?><?php endforeach;?>
                    </select>
                        <span class="input-group-btn">
                            <button class="btn btn-primary btn-sm" type="submit"> <i class="glyphicon glyphicon-search"></i> </button>
                        </span>
                         </div>
                        </form>
                    </td>
                <td></td><td>Jurusan</td>
                    <td>
                     <form class="form-group" name="cari" role="form" action="<?php echo site_url('baak/khs_krs/cari_jurusan');?>" method="post">
                    
                         <div class="input-group">
                    <select name="cari" class="form-control input-sm">
                        <option class="text-center" value="" selected> --Pilih Jurusan--</option>
                        <?php foreach ($jurusan->result()as $row) :?>
                        <?php echo "<option value=$row->kode_jurusan>$row->nama_jurusan</option>";?><?php endforeach;?>
                    </select>
                        <span class="input-group-btn">
                            <button class="btn btn-primary btn-sm" type="submit"> <i class="glyphicon glyphicon-search"></i> </button>
                        </span>
                         </div>
                        </form>
                    </td>
                </tr>
            </tbody>
            </table>
            </div>
            <div class="col-md-12">
                <br>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <?php echo $this->session->flashdata('flashdata'); ?>
                </div>
                <div class="col-md-4"></div>
            <table class="table table-hover table-bordered table-striped table-condensed">
            <thead>
                <th colspan="8" class="bg-primary"> 
                    <!-- Single button -->
                        <div class="btn-group">
                          <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <i class="glyphicon glyphicon-print "></i> Cetak Semua <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                                <a class="no-print" href="javascript:printDiv('print-area-1');">
                                  <i class="glyphicon glyphicon-file "></i> KRS
                                </a> 
                            </li>
                              <li>
                                <a href="<?php echo site_url('baak/khs_krs/cetak_khs');?>">
                                 <i class="glyphicon glyphicon-file "></i>  KHS
                                </a> 
                            </li>
                          </ul>
                        </div>           
                    <a href="<?php echo base_url('baak/khs_krs');?>" class="btn btn-primary btn-sm">
                <i class="glyphicon glyphicon-refresh"></i> Tampilkan Semua</a> 
                </th>
            </thead> 
                <div id="print-area-1" class="print-area">
            <thead>
                <th class="text-center bg-success">No</th> 
                <th class="text-center bg-success">NIM</th> 
                <th class="text-center bg-success">Nama</th> 
                <th class="text-center bg-success">Kelas</th> 
                <th class="text-center bg-success">Semester</th> 
                <th class="text-center bg-success">Jurusan</th> 
                <th class="text-center bg-success">Aksi</th> 
            </thead>
            <tbody>
                <?php $no=1; foreach ($mhs->result() as $isi) : ?>
                <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $isi->nim;?></td>
                <td><?php echo $isi->nama;?></td>
                <td><?php echo $isi->kode_kelas;?></td>
                <td><?php echo $isi->status_smt;?></td>
                <td><?php echo $isi->nama_jurusan;?></td>
              </div>
                <td class="text-center">
                    <a href="<?php echo base_url("baak/kelola_user/form_update/$isi->nim");?>" class="btn-sm btn btn-primary" title="Cetak">
                        <i class="glyphicon glyphicon-print"></i> Cetak</a>
                    
                </td>
                </tr>
                <?php endforeach;?>
            </tbody>
            </table>
            </div>
                
           </div>
	</div>
</div>
<div
</body>

