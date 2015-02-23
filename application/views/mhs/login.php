<?php include 'head.php';?>
<body> 
<div class="container">
     <br>
    <div class="col-md-12 column">
    <img src="<?php echo base_url(); ?>src/img/logoheader.jpg" class="img img-responsive">
        <h6></h6>
    </div>
</div>
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
<div class="container">
    <div class="col-md-12"><br></div>
	<div class="row clearfix">
		<div class="col-md-4 column">
            <div class="col-12" column>
            <h3 class="form-signin-heading">Silahkan Login!</h3>
            </div>
            <?php echo validation_errors() ;?>
			<form action="<?php echo site_url('mhs/ceklogin');?>" method="post" role="form">
				<div class="form-group">
                   <p class="glyphicon glyphicon-user"></p> <label>NIM</label>
                    <input name="nim" class="form-control" placeholder="NIM" type="text" required><br>
                    <p class="glyphicon glyphicon-lock"></p> <label>Password</label>
                    <input name="password" class="form-control" placeholder="Password" type="password" required>
				</div> 
                <div align="left">
                        <button type="submit" class="btn btn-sm btn-info">
                        <i class="glyphicon glyphicon-log-in"></i> Masuk</button>
                        <button type="reset" class="btn btn-sm btn-warning">
                        <i class="glyphicon glyphicon-off"></i> Reset</button>
                           </div>
			</form>
		</div>
        <br>
        <br>
		<div class="col-md-8 bg-active">
			<div class="jumbotron well">
				<h2 class="text-primary">
					SIAP Online - Mahasiswa
				</h2>
				<p class="text-justify">
                    Fasilitas Sistem 
				</p>
                 <table class="table table-condensed">
                        <tr><td><li> K. Rencana Studi</li></td><td><li>Perwalian</li></td></tr>
                        <tr><td><li> Perubahan KRS</li></td><td><li>K. Hasil Studi</li></td></tr>
                    <tr><td> <li>Daft. Nilai Sementara</li></td><td><li> Lihat Kurikulum</li></td></tr>
                    <tr><td><li>  Ganti Password</li></td><td></td></tr>
                    </table>
				<p>
					<a class="btn  btn-primary btn-large" href="#"><i class="glyphicon glyphicon-forward"></i> Selengkapnya</a>
				</p>
			</div>
			
		</div>
	</div>
</div>
      <div class="container-fluid bg-active">    
    <div class="row clearfix">
         <div class="col-md-12 bg-warning">
		<h6></h6>
        </div>
		<div class="col-md-12 bg-primary">
           <div class="container">
	<div class="row clearfix">
		<div class="col-md-4 column">
			<h5>
				KONTAK KAMI
			</h5>
	<p>Alamat<br />
Jl. Angkrek Situ No.19, Sumedang<br />
Jawa Barat - Indonesia<br />
45323</p>
<p>Kontak<br />
Telp/Fax : (0261) 207395<br />
Email : info@stmik-sumedang.ac.id</p>
		</div>
			<div class="col-md-4 column">
			<h5>
				Link E-Jurnal
			</h5>
			<ul id="menu-referensi" class="menu"><li id="menu-item-146" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-146"><a href="http://garuda.dikti.go.id/">Garuda (Garba Rujukan Digital)</a></li>
<li id="menu-item-147" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-147"><a href="http://search.proquest.com/">ProQuest</a></li>
<li id="menu-item-152" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-152"><a href="http://search.epnet.com/">EBSCOhost</a></li>
<li id="menu-item-153" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-153"><a href="http://infotrac.galegroup.com/itweb/">CENGANGE Learning</a></li>
</ul>
		</div>
		<div class="col-md-4 column">
			<h5>
				INSTITUSI
			</h5>
			<ul id="menu-institusi" class="menu"><li id="menu-item-557" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-557"><a href="http://spmi.stmik-sumedang.ac.id">Sistem Penjamin Mutu Internal (SPMI)</a></li>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
		</div>
	</div>
</div>
		</div>  
    </div>
</div>
</body>
</html>
