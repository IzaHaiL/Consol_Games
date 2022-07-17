
<div class="bg-image">
<img src="<?=BASEURL;?>/img/konsollist.png"class="img-fluid" alt="Responsive image" >
<link rel="stylesheet" href="<?=BASEURL;?>/css/style.css"> 
<div class="container mt-5"class="d-flex justify-content-around" >
        <table class="table table-hover table-light" class="d-flex justify-content-center" class="table-responsive"  > 
                <thead>
                    <tr >
                    <th scope="col">No</th>
                    <th scope="col">Nama Konsol</th>
                    <th scope="col">Tipe Konsol</th>
                    <th scope="col">Harga</th
                    </tr>
                </thead>
                <tbody >
                    <?php $i=1; ?>
                    <?php foreach($data['kons']as$kons):?>
                    <tr>
                    <th scope="row"><?=$i++?></th>
                    <td><?=$kons['namakonsol'];?></td>
                    <td><?=$kons['tipekonsol'];?></td>
                    <td><?=$kons['harga'];?></td>
                    </tr>
                    <?php endforeach;?>   
                </tbody>
        </table>
</div>
</div>