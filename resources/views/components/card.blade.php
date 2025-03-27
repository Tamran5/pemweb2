<div class="container mt-5">
  <div class="row d-flex justify-content-center g-4">
    <!-- Card pertama -->
    <div class="col-md-4">
      <div class="card custom-card">
        <div class="card-img-wrapper">
          <img
            src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//99/MTA-13489245/good_time_arnott_good_time_assorted_cookies_kaleng_besar_277g_277_gram_arnotts_full01_telpph74.jpg"
            class="card-img-top img-fluid" alt="Good Time Cookies">
        </div>
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Good Time Cookies Assorted 144g</h5>
          <p class="card-text flex-grow-1">Good Time Cookies Assorted 149g adalah paket berbagai varian Good Time Cookies dalam satu kaleng.</p>
          <a href="#" class="btn btn-primary mt-auto">Show More</a>
        </div>
      </div>
    </div>

    <!-- Card kedua -->
    <div class="col-md-4">
      <div class="card custom-card">
        <div class="card-img-wrapper">
          <img src="https://c.alfagift.id/product/1/1_A6667120001009_20231207135452481_base.jpg" class="card-img-top img-fluid"
            alt="Tango Wafer Chocolate">
        </div>
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Tango Wafer Chocolate 240g</h5>
          <p class="card-text flex-grow-1">Tango Wafer cokelat merupakan salah satu varian wafer Tango yang dibuat dengan memadukan resep rahasia original.</p>
          <a href="#" class="btn btn-primary mt-auto">Show More</a>
        </div>
      </div>
    </div>

    <!-- Card ketiga -->
    <div class="col-md-4">
      <div class="card custom-card">
        <div class="card-img-wrapper">
          <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//95/MTA-30109863/nabati_nabati_coklat_wafer_-300_g-_full05_rmljyh7b.jpg" class="card-img-top img-fluid"
            alt="Nabati Wafer Chocolate">
        </div>
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Nabati Wafer Chocolate 240g</h5>
          <p class="card-text flex-grow-1">Nabati wafer cokelat merupakan salah satu varian wafer Nabati yang dibuat dengan memadukan resep rahasia original.</p>
          <a href="#" class="btn btn-primary mt-auto">Show More</a>
        </div>
      </div>
    </div>

    <!-- Card keempat -->
    <div class="col-md-4">
      <div class="card custom-card">
        <div class="card-img-wrapper">
          <img src="https://c.alfagift.id/product/1/1_A10160000801_20240507140714835_base.jpg" class="card-img-top img-fluid"
            alt="Khong Guan Biscuit">
        </div>
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Khong Guan Biscuit</h5>
          <p class="card-text flex-grow-1">Khong Guan biskuit dengan kualitas terbaik, berbagai bentuk dan rasa yang enak didalamnya.</p>
          <a href="#" class="btn btn-primary mt-auto">Show More</a>
        </div>
      </div>
    </div>

    <!-- Card kelima -->
    <div class="col-md-4">
      <div class="card custom-card">
        <div class="card-img-wrapper">
          <img src="https://c.alfagift.id/product/1/1_A10210003008_20250108112310007_base.jpg" class="card-img-top img-fluid"
            alt="Roma Biscuit Kelapa">
        </div>
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Roma Biscuit Kelapa</h5>
          <p class="card-text flex-grow-1">Biskuit Roma Kelapa kemasan kaleng dari kelapa asli.</p>
          <a href="#" class="btn btn-primary mt-auto">Show More</a>
        </div>
      </div>
    </div>

    <!-- Card keenam -->
    <div class="col-md-4">
      <div class="card custom-card">
        <div class="card-img-wrapper">
          <img src="https://c.alfagift.id/product/1/1_A12370001071_20200221171014575_base.jpg" class="card-img-top img-fluid"
            alt="Marjan Syrup Squash Melon">
        </div>
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Marjan Syrup Squash Melon</h5>
          <p class="card-text flex-grow-1">Marjan Squash Melon adalah sirup squash rasa melon asli.</p>
          <a href="#" class="btn btn-primary mt-auto">Show More</a>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  /* Mengatur card agar memiliki tinggi yang konsisten */
  .custom-card {
    height: 100%; /* Membuat semua card dalam satu baris memiliki tinggi yang sama */
    display: flex;
    flex-direction: column;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s;
    overflow: hidden;
  }

  .custom-card:hover {
    transform: translateY(-5px);
  }

  /* Wrapper untuk gambar agar memiliki tinggi tetap */
  .card-img-wrapper {
    height: 200px; /* Tinggi tetap untuk gambar */
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #f8f9fa; /* Warna latar belakang untuk ruang kosong */
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    overflow: hidden;
  }

  /* Mengatur gambar agar sesuai rasio asli tanpa terpotong */
  .card-img-top {
    max-width: 100%; /* Memastikan gambar tidak melebihi lebar card */
    max-height: 100%; /* Memastikan gambar tidak melebihi tinggi wrapper */
    object-fit: contain; /* Gambar ditampilkan utuh dengan ruang kosong jika perlu */
  }

  /* Mengatur card body */
  .card-body {
    padding: 1.5rem;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
  }

  .card-title {
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 1rem;
  }

  .card-text {
    font-size: 1rem;
    color: #555;
    margin-bottom: 1.5rem;
  }

  .btn-primary {
    width: 100%;
    padding: 0.5rem;
    font-size: 1rem;
  }

  /* Menambahkan jarak antar card */
  .row {
    margin: -15px; /* Mengimbangi padding kolom */
  }

  .col-md-4 {
    padding: 15px; /* Jarak antar card */
  }
</style>