<main role="main" class="nav-margin">
	<div class="card-post my-5">
		<div class="container p-5 bg-light border">
            <div class="row">
                <div class="col-lg-3">
                    <div class="img-responsive mw-100 ">
                        <img src="http://hda.himatif.org/assets/foto/2017/07.jpg" alt="" class="mw-100 mh-100" />   
                    </div>
                </div>
                <div class="col-lg-9">
                   
                    <form>
                      
                      <div class="form-group row">
                       
                        <!---- Form NPM ---->
                        
                        <label for="inputNPM" class="col-xs-2 col-form-label ml-3">NPM</label>
                        <div class="col-sm-3">
                          <input type="text" class="form-control" id="NPMAnggota" placeholder="NPM">
                        </div>
                        
                         <!---- Form Nama ---->
                        
                        <label for="inputNama" class="col-xs-2 col-form-label ml-3">Nama</label>
                        <div class="col-sm-5">
                          <input type="text" class="form-control" id="namaAnggota" placeholder="Nama">
                        </div>
                      </div>   
                       
                      <div class="form-group row">
                      
                        <!---- Form Jenis Kelamin ---->
                       
                        <label for="inputJK" class="col-xs-2 col-form-label mx-3">JK</label>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="pilihanJK" id="JK-Laki" value="JK-L">
                          <label class="form-check-label" for="JK-Laki">L</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="pilihanJK" id="JK-Perempuan" value="JK-P">
                          <label class="form-check-label" for="JK-Laki">P</label>
                        </div>
                         
                        <!---- Form Golongan Darah ---->
                         
                        <label for="inputGolDar" class="col-sm-1 col-form-label">GolDar</label>
                        <div class="col-sm-2">
                            <select class="form-control" id="GolDarAnggota">
                              <option>A+</option>
                              <option>A-</option>
                              <option>B+</option> 
                              <option>B-</option>
                              <option>AB+</option>
                              <option>AB-</option>
                              <option>O+</option>
                              <option>O-</option>
                            </select>
                        </div>
                         
                         
                        <!---- Form Agama ---->
                         
                        <label for="inputAgama" class="col-sm-1 col-form-label">Agama</label>
                        <div class="col-sm-3">
                            <select class="form-control" id="AgamaAnggota">
                              <option>Islam</option>
                              <option>Protestan</option>
                              <option>Katolik</option>
                              <option>Budha</option>
                              <option>Hindu</option>
                              <option>Konghucu</option>
                            </select>
                        </div>
                          
                      </div>
                      
                      <div class="form-group row">
                       
                        <!---- Form Tanggal Lahir ---->
                        <label for="inputTgl_Lhr" class="col-xs-3 col-form-label ml-3">Tanggal Lahir</label>
                        <div class="col-sm-3">
                          <input type="date" class="form-control" id="tgl_LhrAnggota">
                        </div>
                        
                        <!---- Form Tempat Lahir ---->
                        
                        <label for="inputTmpt_Lhr" class="col-xs-3 col-form-label ml-3">Tempat Lahir</label>
                        <div class="col-sm-3">
                          <input type="text" class="form-control" id="tmpt_LhrAnggota" placeholder="Kota Lahir">
                        </div>
                        
                      </div>
                      
                      <div class="form-group row">
                       
                        <!---- Form Alamat ---->
                        <label for="inputAlamat" class="col-sm-1 col-form-label">Alamat</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="alamatAnggota" placeholder="Alamat tempat tinggal asal">
                        </div>
                        
                         <!---- Form Nomor Handphone ---->
                        
                        <label for="inputNo_HP" class="col-xs-3 col-form-label ml-3">No HP</label>
                        <div class="col-sm-3">
                          <input type="text" class="form-control" id="No_HP_Anggota" placeholder="Nomor handphone">
                        </div>    
                        
                      </div>
                      
                      <div class="form-group row">
                      
                        <!---- Form Email ---->
                        
                        <label for="inputEmail" class="col-sm-1 col-form-label">Email</label>
                        <div class="col-sm-5">
                          <input type="text" class="form-control" id="emailAnggota" placeholder="Email">
                        </div>
                       
                        <!---- Form id line ---->
                        <label for="inputID_Line" class="col-xs-3 col-form-label ml-3">ID Line</label>
                        <div class="col-sm-3">
                          <input type="text" class="form-control" id="id_LineAnggota" placeholder="ID Line">
                        </div>
                        
                      </div>
                      
                      <div class="form-group row">
                          
                        <!---- Form Bidang Minat ---->
                         
                        <label for="inputBidang_Minat" class="col-xs-3 col-form-label pl-3">Bidang Minat</label>
                        <div class="col-sm-3">
                            <select class="form-control" id="bidang_MinatAnggota">
                              <option>Sistem Informasi</option>
                              <option>Artificial Intelligence</option>
                              <option>Jaringan Komputer</option>
                            </select>
                        </div>  
                        
                        <!---- Form Angkatan ---->
                         
                        <label for="inputAngkatan" class="col-xs-1 col-form-label mr-3">Angkatan</label>
                        <div class="col-xs-2">
                            <select class="form-control" id="angkatanAnggota">
                              <option>2012</option>
                              <option>2013</option>
                              <option>2014</option>
                              <option>2015</option>    
                              <option>2016</option>
                              <option>2017</option>
                              <option>2018</option>
                            </select>
                        </div>
                        
                         <!---- Form Status Anggota ---->
                         
                        <label for="inputStatus_Anggota" class="col-xs-3 col-form-label ml-3">Status Anggota</label>
                        <div class="col-sm-3">
                            <select class="form-control" id="statusAnggota">
                              <option>Anggota Penuh</option>
                              <option>Anggota Muda</option>
                              <option>Anggota Kehormatan</option>
                            </select>
                        </div>
                        
                      </div>
                      
                       <div class="form-group row">
                       
                        <!---- Form kostan ---->
                        <label for="inputKostan" class="col-sm-1 col-form-label">Kostan</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="kostanAnggota" placeholder="Alamat kostan">
                        </div>  
                        
                      </div>
                      
                    </form>                    
                    
                    
                </div>
            </div>
		</div>
    </div>  
</main>