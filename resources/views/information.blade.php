@extends('content')
@section('navbar')
    <main id="main">

        <!-- Hero Section -->
        <section id="info">
            <section id="infopoli" class="infopoli">
                <div class="container aos-init aos-animate" data-aos="fade-up">
                    <div class="section-title" style="margin-top: 65px;">
                        <h2>Informasi Poli</h2>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-4 mt-2">
                            <div class="card">
                                <div class="card-body">
                                    <img src="image/Umum.png" class="card-img" alt="..">
                                    <h5 class="card-title"><b>Poli Umum </b></h5>
                                    <p class="card-text">Poli umum adalah jenis layanan di Puskesmas yang memberikan
                                        pelayanan kedokteran berupa pemeriksaan kesehatan. </p>
                                    <a href="#popup" class="card-link">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 mt-2">
                            <div class="card">
                                <div class="card-body">
                                    <img src="image/KIA.png" class="card-img" alt="..">
                                    <h5 class="card-title"><b>Poli KIA</b></h5>
                                    <p class="card-text">Poli KIA adalah jenis layanan di Puskesmas yang memberikan
                                        pelayanan ibu hamil, ibu bersalin, imunisasi dan lainnya.</p>
                                    <a href="#popup" class="card-link">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 mt-2">
                            <div class="card">
                                <div class="card-body mb-50">
                                    <img src="image/Gigi.png" class="card-img" alt="..">
                                    <h5 class="card-title"><b>Poli Gigi</b></h5>
                                    <p class="card-text">Poli Gigi adalah jenis layanan di Puskesmas yang memberikan
                                        pelayanan seputar kesehatan mulut dan gigi.</p>
                                    <a href="#popup" class="card-link">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- pop up start-->
            <div class="popup" id="popup">
            <!-- <div class="container aos-init aos-animate" data-aos="fade-up"> -->
            <div class="popup-content">
                    <div class="popup-header">
                        <h2><b>Poli Umum</b></h2>
                        <a href="#" class="popup-close">&times;</a>
                    </div>
                    <div class="popup-img">
                        <img src="image/Umum.png" alt="">
                    </div>
                    <div class="popup-text">
                        <p>Poli umum merupakan salah satu dari jenis layanan di Puskesmas yang memberikan pelayanan
                            kedokteran berupa pemeriksaan kesehatan, pengobatan dan penyuluhan kepada pasien atau
                            masyarakat, serta meningkatkan pengetahuan dan kesadaran masyarakat dalam bidang kesehatan.
                        </p>
                    </div>
            <!-- <a href="" class="card-link popup-link">Selesai</a> -->
            </div>
            </div>
            </div>

            <!-- modal popup -->
            <!-- Modal -->
            <!-- <div class="modalpopup" id="modalpopup" tabindex="-1" role="dialog" aria-labelledby="popupTitle"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="popupTitle">Poli Umum</h5>
                            <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Poli umum merupakan salah satu dari jenis layanan di Puskesmas yang memberikan pelayanan
                                kedokteran berupa pemeriksaan kesehatan, pengobatan dan penyuluhan kepada pasien atau
                                masyarakat, serta meningkatkan pengetahuan dan kesadaran masyarakat dalam bidang
                                kesehatan.</p>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- panduan section -->
            <section id="panduan" class="panduan">
                <div class="container aos-init aos-animate" data-aos="fade-up">
                    <div class="section-title">
                        <h2>Panduan Pendaftaran</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 mt-2">
                            <div class="card">
                                <div class="card-body">
                                    <img src="image/Group 12.png" class="card-img-panduan" alt="..">
                                    <p class="card-text">Setelah anda masuk halaman utama, pilih menu pendaftaran
                                        antrean</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 mt-2">
                            <div class="card">
                                <div class="card-body">
                                    <img src="image/Group 4.png" class="card-img-panduan" alt="..">
                                    <p class="card-text">Isi formulir data diri lalu ok maka data anda akan muncul pada
                                        tiket</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 mt-2">
                            <div class="card">
                                <div class="card-body">
                                    <img src="image/Group 22.png" class="card-img-panduan" alt="..">
                                    <p class="card-text">Tiket pendaftaran dapat di cek pada menu “Antrean Saya” lalu
                                        klik detail</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </section>
    </main>

    <div id="preloader"></div>
    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="js/main.js"></script>



</body>

</html>