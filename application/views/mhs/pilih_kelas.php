<html>
<?php include 'head.php' ;?>
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
			<?php include 'navigasi.php' ;?>
		</div>
		<div class="col-md-9 column">
            <table class="table table-striped table-hover ">
				<thead class="bg-primary">
					<tr>
						<th width="6%" colspan="4">
				        <i class="glyphicon glyphicon-pencil"></i>    Pilih kelas - <?php echo $nama;?> 
						</th>
					</tr>
				</thead>
			</table>
                     <?php echo $this->session->flashdata('flashdata'); ?> 
          <div class="jumbotron">
          <table class="table table-condensed table-bordered">
            <thead><th colspan="6">Matakuliah : Project Work</th></thead>  
           <tr>
               <td>Kelas</td>
               <td>Nama Dosen</td>
               <td>Hari</td>
               <td>Ruangan</td>
               <td>Jam</td>
               <td class="text-center">Pilihan</td>
           </tr>
              <tr>
               <td>TI-IB</td>
               <td>Rahtmat Suganda M.Kom</td>
               <td>Senin</td>
               <td>5</td>
               <td>10.00-11.00</td>
               <td class="text-center"><input type="checkbox"> </td>
           </tr> 
              <tr>
               <td>TI-IA</td>
               <td>Rahtmat Suganda M.Kom</td>
               <td>Senin</td>
               <td>5</td>
               <td>11.00-12.00</td>
               <td class="text-center"><input type="checkbox"> </td>
           </tr>
              
          </table>
            </div>
            <div class="jumbotron">
              <table class="table table-condensed table-bordered">
            <thead><th colspan="6">Matakuliah : Prak.Basis Data</th></thead>  
           <tr>
               <td>Kelas</td>
               <td>Nama Dosen</td>
               <td>Hari</td>
               <td>Ruangan</td>
               <td>Jam</td>
               <td class="text-center">Pilihan</td>
           </tr>
              <tr>
               <td>TI-IB</td>
               <td>Wawan M.Kom</td>
               <td>Rabu</td>
               <td>5</td>
               <td>12.30-02.00</td>
               <td class="text-center"><input type="checkbox"> </td>
           </tr> 
          </table>  
          </div>
            <div class="text-right">
            <button class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> OK </button>
            </div>
	</div>
</div>
</body>