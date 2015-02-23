<?php include 'head.php';?>
<form class="from-group" action="<?php echo site_url('jurusan/setting_kurikulum/tambah_data');?>" method="post">    
<table class="table table-hover table-bordered table-condensed">
    <thead><th class="bg-success" colspan="7"> Tambah Data</th> </thead>
    <tbody class="">
     <tr>
         <td width="20%">
         <div class="input-group">     
         <span class="input-group-addon input-sm"><?php echo $kode_jurusan;?></span>
             <input required placeholder="Kode Matakuliah" class="form-control input-sm" name="kode" >
         </div>     
         </td>
         <td width="20%"><input required placeholder="Nama Matakuliah" class="form-control input-sm" name="matakuliah" ></td>
         <td width="12%"><input required placeholder="Semester" class="form-control input-sm" type="number" min=1 name="smt" ></td>
         <td width="20%"><input required placeholder="Tahun Ajaran" class="form-control input-sm" type="text" name="tajaran" ></td>
         <td width="7%"><input required placeholder="sks" class="form-control input-sm" type="number" min=1 name="sks" ></td>
         <td class="text-center" width="5%">
             <button onclick="myFunction()" class="btn btn-sm btn-primary">Tambah</button> </td>
    </tr>

    </tbody>
    
</table>
</form>
<table class="table table-bordered table-condensed">
 <thead class="bg-primary"><th  width="5%">No</th><th  width="20%">Kode</th><th  width="21%">Matakuliah</th><th  width="10%">Semester</th><th  width="20%">Tahun Ajaran</th><th  width="5%">SKS</th><th width="15%">Aksi</th></thead>
</table>
<iframe width="100%" height="280px" class="iframe" name="data" src="<?php echo site_url('jurusan/setting_kurikulum/tabel_matkul');?>"></iframe>
   
