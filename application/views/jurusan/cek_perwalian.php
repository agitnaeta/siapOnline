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
                           <i class="glyphicon glyphicon-file"></i> Cek Perwalian
                        </th>
                        <th class="text-right">
    <a title="Muat Ulang Halaman" href="<?php echo base_url('jurusan/cek_perwalian');?>" class="btn btn-sm btn-primary">
        <i class="glyphicon glyphicon-refresh"></i>
    </a>
                           
                        </th>
                    </tr>
                </thead>
                </table>
            </div>
            <div class="col-lg-8 bg-active">
            <?php include 'tabel_mahasiswa.php';?>
            </div>   
            <div class="col-lg-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Keterangan
                    </div>
                    <div class="panel-body">
                        <table class="table table-condensed">
                            <tr><td width="70%">Jumlah Mahasiswa</td><td>: 3</td></tr>
                            <tr><td width="70%">Jumah Sudah Perwalian</td><td>: 3</td></tr>
                            <tr><td width="70%">Jumlah Belum Perwalian</td><td>: 0 </td></tr>
                        </table>
                    </div>
                </div>
            <div class="text-right">
            <form class="from-group">
            <button class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-print"></i> Cetak Detail </button> 
            </form>    
            </div>    
            </div> 
 
        </div>
           
           
    </div>
</div>
            
           
</body>