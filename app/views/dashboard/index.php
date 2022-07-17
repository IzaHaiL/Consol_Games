<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->


<!------ Include the above in your HEAD tag ---------->
<style>
    body{
    background-image:url("<?=BASEURL;?>/img/homebg.png");
    background-repeat:no-repeat;
    background-size: 100%;
}

footer{

	margin-top: 20px;
	padding-top: 20px;
}
.bg__card__navbar{
	background-color: #000000;
}
.bg__card__footer{
	background-color: #000000 !important;
}
#add__new__list{
    top: -38px;
    right: 0px;
}

h4.h123{
    color: #ffffff;
}

p{
    color:#Ffffff;
}

.my-custom-scrollbar {
position: relative;
height: 400px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}

divt{
    color:#Ffffff;
    background-image:url("<?=BASEURL;?>/img/tablegbr.png");

}

p1{
  color:#fffff;
}
</style>


<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
<script src="<?= BASEURL; ?>/js/script.js"></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'> -->
<link rel="shortcut icon" type="image/x-icon" href="<?=BASEURL;?>/img/console.png" />

<!------ Include  HEAD tag ---------->

<body>
<header>
  <title><?=$data['judul'];?> </title>
</header>
<main>
  <div class="container my-5"  >
      <div class="card-body text-center">
    <h4  class="h123"class="card-title">DASHBOARD</h4>
    <p class="card-text">Hallo ini Dashboard</p>
    
  </div>
  <button id="add__new__list" type="button" class="btn btn-success tombolTambahData " 
        data-toggle="modal" data-target=".formModal"><i 
        class="fas fa-plus"></i> Add a new List</button>
        <!-- Container table -->
    <divt  class="table-wrapper-scroll-y my-custom-scrollbar card  " >
        
        <!-- TABLE -->
        <table class="table table-dark " class="table table-hover"  >
          <!-- Table Header -->
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Konsol</th>
                <th scope="col">Tipe</th>
                <th scope="col">Edit List </th>
                <th scope="col">Detail</th>
              </tr>
          <!-- End Table Header -->
            </thead>
          <!-- Table Body -->
            <tbody>
                <?php $i=1; ?>
                <?php foreach($data['kons']as$kons):?>
              <tr>
                <th scope="row"><?=$i++?></th>
                    <td><?=$kons['namakonsol'];?></td>
                    <td><?=$kons['tipekonsol'];?></td>
                <td>
                    <!---button ubah --->
                    <a class="btn btn-sm btn-primary tampilModalUbah" href="/Dashboard/ubah/" data-toggle="modal" data-target=".formModal" data-id="<?= $kons ['id'];?>"><i class="far fa-edit">
                    </i> edit</a>
                    <!---button delete --->
                    <a class="btn btn-sm btn-danger"  href="<?= BASEURL; ?>/Dashboard/hapus/<?= $kons['id']; ?> "><i class="fas fa-trash-alt  "></i > delete</a>    
                </td>
                <td><a class="btn btn-sm btn-info" href="<?= BASEURL; ?>/Dashboard/page/<?= $kons['id']; ?>"><i class="fas fa-info-circle"></i> Details</a>
              </td>
              </tr>
              <?php endforeach;?>
              <!--  End Table Body -->
            </tbody>
            <!-- End Table-->
          </table>
          <!-- end Container Table -->
    </divt>

    <!-- Large modal -->
<div class="modal fade formModal tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
          <div class="card-body text-center">
            <h4 class="card-title" id="formModalLabel">Form Penambahan</h4>
            <p1 class="card-text" >Silahkan isi data sesuai format dengan benar.</p1>
          </div>
            <div class=" card col-8 offset-2 my-2 p-3">
          <form action="<?= BASEURL;?>/dashboard/tambah" method="POST">
            <div class="form-group">
              <input type="hidden" name="id" id="id">
              <label for="namakonsol">Konsol Nama</label>
              <input type="text" class="form-control" name="namakonsol" id="namakonsol" placeholder="Enter your nama konsol">
            </div>
            <div class="form-group">
              <label for="tipekonsol">Tipe Konsol</label>
              <input  type="text" class="form-control" name="tipekonsol" id="tipekonsol" placeholder="Tipe Konsol">
            </div>
            <div class="form-group">
              <label for="deskripsi">Deskripsi</label>
              <input  type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Put you deskription">
            </div>
            <div class="form-group">
              <label for="harga">Harga</label>
              <input  type="number" class="form-control" name="harga" id="harga" placeholder="Put you pricee">
            </div>
            <div class="form-group text-center modalsubs" >
            <button type="submit" class="btn btn-block btn-primary">Tambah</button>
          </div>
        </form>
    </div>
    </div>
  </div>
</div>
</div>
</main>
<!---->
<!---->
<footer >
	</div>
</footer>
</body>

