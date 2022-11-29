@extends('content')
@yield('navbar')

    <!-- ======= Hero Section ======= -->
    <section id="hero">
      <div
        id="heroCarousel"
        data-bs-interval="5000"
        class="carousel slide carousel-fade"
        data-bs-ride="carousel"
      >
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
          <!-- Slide 1 -->
          <div
            class="carousel-item active"
            style="background-image: url(/image/slide/slide-1.jpg)"
          >
            <div class="container">
              <h2>Selamat Datang di <span>Puskesmas Banyuwangi</span></h2>
              <p>
                Kami siap memberikan layanan yang terbaik dengan profesional,
                responsif dan inovatif.
              </p>
              <p>KESEHATAN ANDA ADALAH TUJUAN KAMI.</p>
              <a href="#about" class="btn-get-started scrollto">Read More</a>
            </div>
          </div>

          <!-- Slide 2 -->
          <div
            class="carousel-item"
            style="background-image: url(/image/slide/slide-2.jpg)"
          >
            <div class="container">
              <h2>Selamat Datang di <span>Puskesmas Banyuwangi</span></h2>
              <p>
                Kami siap memberikan layanan yang terbaik dengan profesional,
                responsif dan inovatif.
              </p>
              <p>KESEHATAN ANDA ADALAH TUJUAN KAMI.</p>
              <a href="#about" class="btn-get-started scrollto">Read More</a>
            </div>
          </div>

          <!-- Slide 3 -->
          <div
            class="carousel-item"
            style="background-image: url(/image/slide/slide-0.jpg)"
          >
            <div class="container">
              <h2>Selamat Datang di <span>Puskesmas Banyuwangi</span></h2>
              <p>
                Kami siap memberikan layanan yang terbaik dengan profesional,
                responsif dan inovatif.
              </p>
              <p>KESEHATAN ANDA ADALAH TUJUAN KAMI.</p>
              <a href="#about" class="btn-get-started scrollto">Read More</a>
            </div>
          </div>
        </div>

        <a
          class="carousel-control-prev"
          href="#heroCarousel"
          role="button"
          data-bs-slide="prev"
        >
          <span
            class="carousel-control-prev-icon bi bi-chevron-left"
            aria-hidden="true"
          ></span>
        </a>

        <a
          class="carousel-control-next"
          href="#heroCarousel"
          role="button"
          data-bs-slide="next"
        >
          <span
            class="carousel-control-next-icon bi bi-chevron-right"
            aria-hidden="true"
          ></span>
        </a>
      </div>
    </section>
    <!-- End Hero -->

    <div id="preloader"></div>
    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="vendor/aos/aos.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/glightbox/js/glightbox.min.js"></script>
    <script src="vendor/swiper/swiper-bundle.min.js"></script>
    <script src="vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="js/main.js"></script>
  </body>
</html>
