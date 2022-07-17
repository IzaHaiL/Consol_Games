<!-- Container -->
<div class="bg-image">
<!-- memanngil image -->
<img src="<?=BASEURL;?>/img/konsollist.png"class="img-fluid" alt="Responsive image" >
<!-- memanggil css style -->
<link rel="stylesheet" href="<?=BASEURL;?>/css/style.css"> 
<!-- Container table -->
<div class="container mt-5"class="d-flex justify-content-around" >
        <!-- TABLE -->
        <table class="table table-hover table-dark" class="d-flex justify-content-center" class="table-responsive"  > 
                <!-- Table Header -->
                <thead>
                    <tr >
                    <th scope="col">No</th>
                    <th scope="col">Nama Konsol</th>
                    <th scope="col">Tipe Konsol</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Order</th>
                    </tr>
                <!-- End Table Header -->
                </thead>
                
                <!-- Table Body -->
                <tbody>
                    <?php $i=1;/*melakukan perulangan data yang di kirim Controller Konsol*/ ?>
                    <?php foreach($data['kons']as$kons):?>
                    <tr>
                    <th scope="row"><?=$i++?></th>
                    <td><?=$kons['namakonsol'];?></td>
                    <td><?=$kons['tipekonsol'];?></td>
                    <td>Rp.<?=$kons['harga'];?></td>
                    <td>
                        <!--TOMBOL PESAN DIRECT KE WA -->
                    <a class="badge badge-success"  href="https://api.whatsapp.com/send?phone=6281352671896&text=Hallo%20Saya%20Mau%20Sewa%20Konsolnya%20Yang%20<?=$kons['namakonsol']?>%20yang%20Harganya%20Rp.<?=$kons['harga']?>%20Untuk%20Prosedurnya%20Gimana%20Ya?" target=”_blank” >PESAN</a>
                    </td>
                    </tr>
                    <?php endforeach;?>   
                    <!--  End Table Body -->
                </tbody>
                
        <!-- End Table-->
        </table>

<!-- end Container Table -->
</div>
<!--  end Container -->
</div>

