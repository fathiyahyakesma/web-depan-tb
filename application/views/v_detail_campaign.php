<!DOCTYPE html>
<html lang="en">

<style type="text/css">
  .campaign-image {
      margin-bottom: 20px;
      background: #f7f7f7;
      padding: 5px;
      height: 370px;
      background-size: contain;
      background-position: center center;
      background-repeat: no-repeat;
  }
  .campaign_detail_img {
    height: 350px;
  }
  .sidebar {
    position: relative;
  }
</style>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Campaign</h2>
          <ol>
            <li><a href="index.html">Campaign</a></li>
            <li>Detail Campaign</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

  
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">
            <article class="entry" data-aos="fade-up">





              <div class="campaign-image">
          <img class="campaign_detail_img" src="<?php echo base_url("assets/");?>/img/campaign/giatbelajar_detail.jpeg">
        </div>


         <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" href="#detail" role="tab" data-toggle="tab">Detail Campaign</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#donatur" role="tab" data-toggle="tab">Donatur</a>
            </li>
          </ul> 

          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active show" id="detail">
              Banyak orang tua mengeluhkan sekolah daring. Tugas sekolah nambah banyak, itu artinya tugas orang tua pun demikian. Di sela-sela waktu kerja para bunda dan ayah harus mendampingi anak-anaknya sekolah daring.<br><br>

              Dengan keadaan finansial yang masih normal, sekolah daring masih jadi persoalan bagi para orang tua. Bagaimana keadaan keluarga yang serba kekurangan yaa?<br><br>

              Ternyata, mereka belum selesai dengan persoalan paket dan kuota internet, kadang handphone yang digunakan untuk belajar daring pun ga support juga.<br><br>

              Sahabat, adakalanya kita harus melihat kebawah untuk bisa bersyukur dan juga peduli. <br><br>

              Yakesma mengajak sahabat semua untuk ikuti gerakan Sedekah Quota. Berapapun yang sahabat kirimkan, akan membantu anak-anak yatim dan dhuafa belajar daring dengan nyaman.<br><br>

              Yuk ikut gerakan sedekah quota dengan mengirimkan kebaikan.<br><br>

              Salurkan donasi Anda dengan cara:<br><br>

              Isi nominal donasi<br>
              Klik tombol hijau DONASI SEKARANG<br>
              Pilih Metode Pembayaran<br>
              Transfer ke nomor rekening yang muncul dan bantu sebarkan melalui media sosial Anda<br><br>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="donatur">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Donatur</th>
                    <th scope="col">Nominal</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>25-10-2020</td>
                    <td>Dea</td>
                    <td>Rp 800.000</td>
                  </tr>
                  <tr>
                    <th scope="row">Total Donasi Online</th>
                    <td></td>
                    <td>Rp 800.000</td>
                  </tr>
                  <tr>
                    <th scope="row">Total Donasi Offline</th>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row">Total</th>
                    <td></td>
                    <td>Rp 800.000</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </article>




          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar" data-aos="fade-left">



              <div class="icon-box">
              <h4><a href="">GIAT BELAJAR</a></h4>
              <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
              </div>
              <p><br></p>
              <div class="row">
                <div class="col-lg-6">
                  <p>Donasi terkumpul<br>Rp 800.000,00</p>
                </div>             
                <div class="col-lg-6">
                  <p>Sisa Waktu<br>10 hari</p>
                </div>
              </div>
              <p><br></p>
              <form>
                <div class="form-group">
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nominal donasi">
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-success">Donasi Sekarang</button>
              </form>
              <!-- <button type="button" class="btn btn-success btn-lg">Donasi Sekarang</button> -->
            </div>




            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->












  </main><!-- End #main -->



</body>

</html>

<script>
$(document).ready(function(){
  $(".nav-tabs a").click(function(){
    $(this).tab('show');
  });
});
</script>