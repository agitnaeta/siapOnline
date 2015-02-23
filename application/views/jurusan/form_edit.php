<?php include 'head.php';?>
<form class="from-group" action="<?php echo site_url('jurusan/setting_kurikulum/update_data');?>" method="post">    
<table class="table table-hover table-bordered table-condensed">
    <tbody class="">
        <?php foreach ($matkul->result() as $row):?>
     <tr>
         <td width="26%">
         <div class="input-group">     
         <span class="input-group-addon input-sm">#</span>
             <input readonly value="<?php echo $row->kode_mk;?>" placeholder="Kode Matakuliah" class="form-control input-sm" name="kode">
         </div>     
         </td>
         <td width="22%">
             <input title="Nama Matakuliah" value="<?php echo $row->matakuliah;?>" required placeholder="Nama Matakuliah" class="form-control input-sm" name="matakuliah" >
         </td>
         <td width="10%">
             <input title="Semeseter" value="<?php echo $row->semester;?>" required placeholder="Semester" class="form-control input-sm" type="number" min=1 name="smt" ></td>
         <td width="20%">
             <input title="Tahun Ajaran" value="<?php echo $row->tahun_ajaran;?>" required placeholder="Tahun Ajaran" class="form-control input-sm" type="text" name="tajaran" >
         </td>
         <td width="7%">
             <input title="SKS" value="<?php echo $row->sks;?>" required placeholder="sks" class="form-control input-sm" type="number" min=1 name="sks" >
         </td>
         <td class="text-center">
            <a title="Batal" href="<?php echo site_url('jurusan/setting_kurikulum/tabel_matkul');?>" type="submit" class="btn btn-sm btn-warning"> Batal</a> 
            <button type="submit" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-ok"></i> Update</button>
         </td>
           
    </tr>
    <?php endforeach;?>    
        <tr>
        <td colspan="7" class="text-right">
          </td>
        </tr>

    </tbody>
    
</table>
</form>