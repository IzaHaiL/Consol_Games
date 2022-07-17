<style>
divt{
    color:#Ffffff;
    background-image:url("<?=BASEURL;?>/img/tablegbr.png");

}

body{
    background-image:url("<?=BASEURL;?>/img/homebg.png");
    background-repeat:no-repeat;
    background-size: 100%;
}

h4{
    color:#Ffffff;
}

p.card-text{
    color:#Ffffff;
}

</style>
<body>
 
<div class="container my-5"  >
      <div class="card-body text-center">
    <h4  class="h123"class="card-title">DETAIL KONSOL</h4>
    <p class="card-text">Hallo ini Konsol yaaa</p>
    
  </div>

<divt    class="card container d-flex justify-content-between my-5" style="width: 21rem; ">
  <div class="card-body">
    <h5 class="card-title"><?=$data['kons']['namakonsol']?> <?=$data['kons']['namakonsol']?></h5>
    <h6 class="card-subtitle mb-2 text-muted">Rp.<?=$data['kons']['harga']?></h6>
    <p class="card-text"><?=$data['kons']['deskripsi']?></p>
    <a href="<?=BASEURL ?>/Dashboard/" class="Kembali" >Kembali</a>
  </div>
</divt>
</body>