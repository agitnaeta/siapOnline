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
                           <i class="glyphicon glyphicon-download"></i> Entry Nilai
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
            <div class="col-lg-4 bg-active">
            <div class="panel panel-primary">
                    <div class="panel-heading">
                        Tahun ajaran  : <?php echo $date=date('Y');echo "-";; echo $d=$date+1;?>
                    </div>
                    <div class="panel-body">
                        <form class="from-group" action="" method="">
                        <label>Kelas</label>
                        <input class="form-control" name="kelas"  placeholder="Kelas"/>
                        <label>Matakuliah</label>
                        <input class="form-control" name="matakuliah" placeholder="Matakuliah"/><br>
                        <button class="btn-primary btn btn-sm"><i class="glyphicon glyphicon-ok"></i> Tampilkan</button>
                    </div>
                </div>
            </div>   
            <div class="col-lg-8">
            <?php include 'tabel_mahasiswa.php';?>    
            </div>    
            </div> 
 
        </div>
           
           
    </div>
</div>
            
           
</body>