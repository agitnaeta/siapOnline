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
				           <i class="glyphicon glyphicon-tasks"></i> Setting Kurikulum
						</th>
                        <th class="text-right">
                            
    <a href="setting_kurikulum/form_tambah" target="mode"  title="Tambah Data" class="btn btn-sm btn-primary">
        <i class="glyphicon glyphicon-plus"></i>Tambah
    </a>
    <a href="setting_kurikulum/form_cari" target="mode" title="Cari Data" class="btn btn-sm btn-primary">
        <i class="glyphicon glyphicon-search"></i>Cari
    </a>
    <a title="Muat Ulang Halaman" href="<?php echo base_url('jurusan/setting_kurikulum');?>" class="btn btn-sm btn-primary">
        <i class="glyphicon glyphicon-refresh"></i>
    </a>
                           
                        </th>
					</tr>
				</thead>
                </table>
            </div>
            <div class="col-lg-12">
<iframe scrolling="no"  width="100%" height="450px" src="<?php echo base_url('jurusan/setting_kurikulum/form_tambah');?>" name="mode" class="iframe"></iframe>
            </div>
 
        </div>
           
           
	</div>
</div>
            
           
</body>