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
                           <i class="glyphicon glyphicon-list"></i> Cek Daftar Nilai Sementara
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
                        Data Matakuliah
                    </div>
                    <div class="panel-body">
                
                        <form class="from-group" action="" method="">
                        <label>Kode MK</label>
                        <input class="form-control" name="kelas"  placeholder="IF2222"/>
                        <label>Kurikulum</label>
                        <select class="form-control"><option>2015-2016</option></select><br>
                        <button class="btn-primary btn btn-sm"><i class="glyphicon glyphicon-ok"></i> Tampilkan</button>
                    </div>
                </div>
            </div>   
            <div class="col-lg-8">
            
            <table class="tabel-condensed table table-stripded table-bordered">
                <thead class="bg-primary">
                    <th colspan="3">Project Work</th><th colspan="1" class="text-center">
                        <button class="btn-primary btn btn-sm"><i class="glyphicon glyphicon-print"></i> Cetak</button>
                    </th>
                </thead>
                <thead class="bg-success">
                    <th>NO</th><th>NIM</th><th>Nama</th><th>Nilai</th>
                </thead>
                <tbody>
                <?php $no=1; foreach ($mhs->result() as $row):?>
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo "$row->nim";?></td>
                        <td><?php echo "$row->nama";?></td>
                        <td class="text-center"><?php $length = 1; $randomString = substr(str_shuffle("ABCDE"), 0, $length); echo $randomString;;?></td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
            </div>    
            </div> 
 
        </div>
           
           
    </div>
</div>
            
           
</body>