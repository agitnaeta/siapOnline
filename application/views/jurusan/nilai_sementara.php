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
                        Data Mahasiswa
                    </div>
                    <div class="panel-body">
                
                        <form class="from-group" action="" method="">
                        <label>Nim</label>
                        <input class="form-control" name="kelas"  placeholder="A2.1100091"/>
                        <label>Nama</label>
                        <input readonly="" class="form-control" name="matakuliah" placeholder="Agit Naeta"/><br>
                        <button class="btn-primary btn btn-sm"><i class="glyphicon glyphicon-ok"></i> Tampilkan</button>
                    </div>
                </div>
            </div>   
            <div class="col-lg-8">
            
            <table class="tabel-condensed table table-stripded table-bordered">
                <thead class="bg-primary">
                    <th colspan="4">Nilai</th><th colspan="1" class="text-center">
                        <button class="btn-primary btn btn-sm"><i class="glyphicon glyphicon-print"></i> Cetak</button>
                    </th>
                </thead>
                <thead class="bg-success">
                    <th>NO</th><th>Kode</th><th>Nama Matakuliah</th><th>SKS</th><th>Nilai</th>
                </thead>
                <tbody>
                <?php $no=1; foreach ($matkul->result() as $row):?>
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo "$row->kode_mk";?></td>
                        <td><?php echo "$row->matakuliah";?></td>
                        <td><?php echo "$row->sks";?></td>
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