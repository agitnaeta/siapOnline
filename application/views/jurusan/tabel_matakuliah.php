<?php include 'head.php';?>
<?php echo $this->session->flashdata('flashdata'); ?>    
<table class="table table-hover table-bordered table-condensed">
    <tbody class="">
        <?php $no=1; foreach ($matkul->result ()as $row):?> 
     <tr>
         <td width="5%"><?php echo $no++;?></td>
         <td width="20%"><?php echo $row->kode_mk;?></td>
         <td width="20%"><?php echo $row->matakuliah;?></td>
         <td width="10%"><?php echo $row->semester;?></td>
         <td width="20%"><?php echo $row->tahun_ajaran;?></td>
         <td width="5%"><?php echo $row->sks;?></td>
         <td class="text-center" width="13%">
             <a class="btn-danger btn-sm btn" title="Hapus Data" href="<?php echo base_url("jurusan/setting_kurikulum/hapus/$row->kode_mk");?>"><i class="glyphicon glyphicon-remove"></i></a>  
             <a class="btn-warning btn-sm btn" title="Edit Data" href="<?php echo base_url("jurusan/setting_kurikulum/form_edit/$row->kode_mk");?>"><i class="glyphicon glyphicon-edit"></i></a>
         </td>
    </tr>
        <?php endforeach;?>
    </tbody>
</table>
  