$(function () {
  $(".tombolTambahData").on("click", function () {
    //fungsi untuk menampilkan modalform tambah
    $("#formModalLabel").html("Form Tambah Data");
    $(".modalsubs button[type=submit]").html("Tambah Data");
  });

  $(".tampilModalUbah").on("click", function () {
    //fungsi untuk menampilkan modalform ubah
    $("#formModalLabel").html("Ubah Data Konsol");
    $(".modalsubs button[type=submit]").html("Ubah Data");
    $(".modal-content form").attr(
      "action",
      "http://localhost/mvcsmode/public/Dashboard/ubah"
    );
    //const id
    const id = $(this).data("id");
    //fungsi untuk ambil string/data dari modalform yang by id lewat getubah di controller
    $.ajax({
      url: "http://localhost/mvcsmode/public/Dashboard/getUbah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#id").val(data.id);
        $("#namakonsol").val(data.namakonsol);
        $("#tipekonsol").val(data.tipekonsol);
        $("#deskripsi").val(data.deskripsi);
        $("#harga").val(data.harga);
      },
    });
  });
});
