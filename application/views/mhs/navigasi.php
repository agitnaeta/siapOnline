    <div class="panel panel-primary">
                        <div class="panel-heading">
                             <h5>
                                 <i class="glyphicon glyphicon-th-large"></i> Selamat Datang, <?php echo $nama;?>                                </h5>
						</div>
                        <div class="panel-body">
                            <a href="<?php echo site_url('mhs/utama') ;?>" class="list-group-item ">
                                <i class="glyphicon glyphicon-book"></i> K. Rencana Studi</a>
                            
							<a  href="<?php echo site_url('mhs/perwalian');?>" class="list-group-item ">
                                <i class="glyphicon glyphicon-pencil"></i> Perwalian </a>
					
                      
							<a href="<?php echo site_url('mhs/perubahan_krs');?>" class="list-group-item ">
                                <i class="glyphicon glyphicon-edit"></i> Perubahan KRS  </a>
                            
							<a href="<?php echo site_url('mhs/pilih_kelas');?>" class="list-group-item ">
                                <i class="glyphicon glyphicon-pencil"></i> Pilih kelas </a>
						
                      
				<a href="<?php echo site_url('mhs/khs') ;?>" class="list-group-item" role="tab" data-toggle="tab">
                                <i class="glyphicon glyphicon-file"></i> K. Hasil Studi</a>
					
                        
							<a href="<?php echo site_url('mhs/nilaiSementara') ;?>" class="list-group-item ">
                                <i class="glyphicon glyphicon-th-large"></i> Daft. Nilai Sementara</a>
                            
							<a href="<?php echo site_url('mhs/lihat_kurikulum') ;?>" class="list-group-item ">
                                <i class="glyphicon glyphicon-list-alt"></i> Kurikulum  </a>
                           
                            <a href="<?php echo site_url('mhs/ganti_password') ;?>" class="list-group-item ">
                                <i class="glyphicon glyphicon-lock"></i> Ganti Password</a>
                           
						</div>
                        <div class="panel-footer">
							<a href="<?php echo site_url('mhs/utama/logout') ;?>" class="list-group-item ">
                                <i class="glyphicon glyphicon-off"></i> Selesai</a>
						</div>
					</div>