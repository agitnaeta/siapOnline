<?php include 'head.php';?>
    <form class="form-group" action="<?php echo site_url('jurusan/setting_kurikulum/cari_data');?>" method="post">
    <div class="input-group">
       <input name="cari" class="form-control" placeholder="Cari Kode/Nama Matkul"/>
      <span class="input-group-btn">
        <button class="btn btn-sm btn-primary" type="submit"> <i class="glyphicon glyphicon-search"></i>Cari</button>
      </span>
    </div>    
    
    </form>
    
<?php echo $this->session->flashdata('flashdata'); ?>        
<table class="table table-bordered table-condensed">
 <thead class="bg-primary"><th  width="5%">No</th><th  width="20%">Kode</th><th  width="21%">Matakuliah</th><th  width="10%">Semester</th><th  width="20%">Tahun Ajaran</th><th  width="5%">SKS</th><th width="15%">Aksi</th></thead>
</table>
<iframe width="100%" height="280px" class="iframe" name="data" src="<?php echo site_url('jurusan/setting_kurikulum/tabel_matkul');?>"></iframe>
   

   
    