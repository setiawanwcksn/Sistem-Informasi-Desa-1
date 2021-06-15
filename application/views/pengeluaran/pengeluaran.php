<div class="container mb-4">
  <div class="wrap">
    <div class="card " style="width: 60rem; ">
    <div class="card-body">
      <h4 class="card-title text-center" style="text-align:center"><b>Sistem Informasi Pengelolaan Keuangan Pembangunan Desa Kedung Pomahan Wetan</b></h4>
      <hr>
        <div style="float:right">
          <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-user-tie fa-2x"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

              <li><a class="dropdown-item" href="<?php echo site_url('Login/LogOut')?>">Log Out</a></li>
            </ul>
          </div>
        </div>
        <h4 class="text-center mt-4" style="margin-left:80px"><b>Pengeluaran</b></h4>
        <div style="clear:both"></div>
        
      <div class="row mt-4">
      <div class="contain">
        <div class="wrapper">         
            <form id="form-dokumen" action="<?php echo base_url('Pengeluaran/form')?>" method="POST" enctype="multipart/form-data">
            <div class="form">
            <p>
                <label for="">ID Pengeluaran</label>
                <input type="text" name="id_pengeluaran" id="id_pengeluaran">
            </p>
            <p>
                <label for=""> Parameter</label>
                <select id="nama_parameter" name="nama_parameter">
                <option disabled selected> Select  Parameter</option>
                  <?php foreach ($dataParameter as $parameter): ?>
                    <option value="<?php echo $parameter['Nama_Parameter']?>"> <?php echo $parameter['Id_Parameter'] ?>. <?php echo $parameter['Nama_Parameter']?> </option>
                  <?php endforeach;?>
                </select>
            </p>
            <p>
                <label for="">Tanggal Pengeluaran</label>
                <input type="date" name="tanggal_pengeluaran" id="tanggal_pengeluaran">
            </p>
            <p>           
                
            </p>
            <p>
            <label for="">Nominal</label>
                <input type="text" name="nominal" id="nominal" placeholder=" Rp. ">
            </p>
            </div>
            <center>
            <div class="tombol">
                <p>
                    <button class="btn btn-secondary">Kembali</button>
                </p>
                <p>
                    <button type="submit" name="submit" value="Simpan" class="btn btn-primary">Simpan</button>
                </p>
                <p>
                    <button type="submit" name="submit" value="Hapus" class="btn btn-danger">Hapus</button>
                </p>
            </div></center>
            </form>      
        </div>
    </div>
        </div>
        <hr>
        <div>
          <h4 class="text-center"><b>Tabel Pengeluaran</b></h4>
        </div>
        <div class="wrapping-content">
          <div class="container">
            <div class="row mt-2">
              <table id="table_id" class="table-responsive">
                <thead>
                    <tr class="text-center">
                          <th>No</th>
                          <th>Id Pengeluaran</th>
                          <th>Tanggal Pengeluaran</th>
                          <th>Nominal</th>
                          <th>Id Parameter</th>
                          <th>Parameter</th>
                          <th></th>
                    </tr>
                  </thead>
                
                  <tbody>
                  <?php $i=1; foreach ($dataPengeluaran as $item): ?>
                      <tr class="text-center">
                          <td><?php echo $i++?></td>
                          <td><?php echo $item["Id_Pengeluaran"]?></td>
                          <td><?php echo $item["Tanggal_Pengeluaran"]?></td>
                          <td><?php echo "Rp. " ; echo number_format($item["Nominal"], 2, ".", ",")?></td>
                          <td><?php echo $item["fk_Parameter"]?></td>   
                          <td><?php echo $item["Nama_Parameter"]?></td>    
                          <td><button style="width:100%" id="btnEdit"
                                      data-id="<?php echo $item["Id_Pengeluaran"] ?>"
                                      data-tanggal="<?php echo $item["Tanggal_Pengeluaran"] ?>"
                                      data-nominal="<?php echo number_format($item["Nominal"], 2, ".", ",") ?>"
                                      data-id_parameter="<?php echo $item["fk_Parameter"] ?>"
                                      data-nama_parameter="<?php echo $item["Nama_Parameter"] ?>"
                                      >edit</button></td>    
                      </tr>
                      <?php endforeach;?>
                  </tbody>
                  
              </table>
            </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>

