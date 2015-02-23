<?php include 'head.php';?>
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
             <div class="col-lg-12">
                <table class="table table-striped table-hover ">
				<thead class="bg-primary">
					<tr>
						<th colspan="11">
				           <i class="glyphicon glyphicon-pencil"></i> Disposisi Perwalian
						</th>
                        <th class="text-right">
    <a title="Muat Ulang Halaman" href="<?php echo base_url('jurusan/disposisi_perwalian');?>" class="btn btn-sm btn-primary">
        <i class="glyphicon glyphicon-refresh"></i>
    </a>
                           
                        </th>
					</tr>
				</thead>
                </table>
            </div>
            <div class="col-lg-4 bg-active">
            <form class="form-group">
            <input type="text" id="cari" class="form-control" placeholder="Masukan NIM"/>
            </form>    
            
            <table class="table table-condensed table-striped">
                <tr><td class="text-center"  colspan="2">Data Mahasiswa</td></tr>
                <tr><td>Nim</td><td>: A2.1100091</td></tr>
                <tr><td>Nama</td><td>: Agit Naeta</td></tr>
                <tr><td>Semester</td><td>: 7</td></tr>
            
            </table>    
                
            </div>   
            <div class="col-lg-8">
<iframe scrolling="no"  width="100%" height="450px" src="<?php echo base_url('jurusan/disposisi_perwalian/form_disposisi');?>" name="mode" class="iframe">


</iframe>
            <div class="text-right">
            <form class="from-group">
            <button class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-ok"></i> Simpan </button> 
            </form>    
            </div>    
            </div> 
 
        </div>
           
           
	</div>
</div>
            
           
</body>