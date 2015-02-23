<?php include 'head.php';?>
<?php echo $this->session->flashdata('flashdata'); ?>    
<table class="table table-hover table-bordered table-condensed">
    <thead><th colspan="7" class="bg-primary text-center">Data Mahasiswa</th></thead>
    <thead class="bg-success"><th>No</th><th>NIM</th><th>Nama</th><th>Semester</th><th>Periode</th><th>Nilai</th></thead>
    <tbody class="">
        <?php $no=1; foreach ($mhs->result ()as $row):?> 
     <tr>
         <td ><?php echo $no++;?></td>
         <td ><?php echo $row->nim;?></td>
         <td ><?php echo $row->nama;?></td>
         <td ><?php echo $row->status_smt;?></td>
         <td ><?php echo $row->periode;?></td>
         <td>A : <input type="radio" value="A"> B : <input type="radio" value="A"> C : <input type="radio" value="A"> D : <input type="radio" value="A"> </td>
    </tr>
        <?php endforeach;?>
    </tbody>
</table>
<div class="text-right">
    
    <button class="btn-sm btn-primary btn-sm"><i class="glyphicon glyphicon-ok"></i> Simpan </button>
</div>
  