<div class="row"> 
	<div class="col s2">
	</div>
	<div class="col s8">
	<h3>Daftar Obat</h3>
	<br><br>
	<!--awal modal-->
	 <button data-target="modal1" class="btn modal-trigger waves-effect blue">Tambah Data<i class="material-icons right">add</i></button>
	 <!-- Modal Structure -->
  <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
      <div class="row">
			<center><h3>Tambah Data Obat</h3></center>
			<br>
		</center>
		<div class="col s2">
		</div>
        <div class="input-field col s8">
          <input id="pd_nama" type="text" class="validate">
          <label for="password">ID Obat</label>
        </div>
      </div>
	  <div class="row">
	  <div class="col s2">
		</div>
        <div class="input-field col s8">
          <input id="pd_jenis_kelamin" type="text" class="validate">
          <label for="password">Nama Obat</label>
        </div>
      </div>
      <div class="row">
	  <div class="col s2">
		</div>
        <div class="input-field col s8">
          <input id="password" type="text" class="validate">
          <label for="password">Jenis Obat</label>
        </div>
      </div>
      <div class="row">
	  <div class="col s2">
		</div>
        <div class="input-field col s8">
          <input id="password" type="date" class="validate">
          <label for="password">Harga Beli Obat</label>
        </div>
      </div>
	  <div class="row">
	  <div class="col s2">
		</div>
        <div class="input-field col s8">
          <input id="password" type="text" class="validate">
          <label for="password">Harga Jual Obat</label>
        </div>
      </div>
	  <div class="row">
	  <div class="col s2">
		</div>
        <div class="input-field col s8">
          <input id="password" type="number" class="validate">
          <label for="password">Kuantitas Obat</label>
        </div>
      </div>
	  </center>
	  <br>
	  <div class="col s8"></div>
	  <div class="col s4">
	 </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
	  <a href="#!" class="modal-close waves-effect waves-green btn-flat">Submit</a>
    </div>
  </div>
  <!--modal berakhir-->
  
	<br><br>
 <table class="striped centered">
        <thead>
          <tr>
              <th>ID</th>
              <th>Nama Obat</th>
			  <th>Jenis Obat</th>
              <th>Harga Beli Obat</th>
			  <th>Harga Jual Obat</th>
			  <th>Kuantitas Obat</th>
			  <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
			<td>Tablet</td>
			<td>$0.87</td>
            <td>$0.87</td>
			<td>87</td>
			<th><i class="material-icons">edit</i>&nbsp;&nbsp;<i class="material-icons">delete</i></th>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
			<td>Pil</td>
            <td>$3.76</td>
			<td>$3.76</td>
			<td>87</td>
			<th><i class="material-icons">edit</i>&nbsp;&nbsp;<i class="material-icons">delete</i></th>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
			<td>Kapsul</td>
            <td>$7.00</td>
			<td>$7.00</td>
			<td>87</td>
			<th><i class="material-icons">edit</i>&nbsp;&nbsp;<i class="material-icons">delete</i></th>
          </tr>
        </tbody>
 </table>
	</div>
</div>