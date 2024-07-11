<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Beautiful Malino</title>

  <link rel="stylesheet" href="css/main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f8f9fa;
      color: #333;
      overflow-x: hidden;
    }

    .navbar {
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .carousel-inner img {
      height: 500px;
      object-fit: cover;
      transition: transform 0.5s ease;
    }

    .carousel-inner img:hover {
      transform: scale(1.05);
    }

    .carousel-caption {
      background: rgba(0, 0, 0, 0.5);
      padding: 10px;
      animation: fadeInUp 1s;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translate3d(0, 100%, 0);
      }
      to {
        opacity: 1;
        transform: none;
      }
    }

    .section-title {
      font-size: 2.5em;
      margin-top: 1em;
      margin-bottom: 1em;
      color: #007bff;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      position: relative;
    }

    .section-title::after {
      content: '';
      width: 50px;
      height: 3px;
      background-color: #007bff;
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      bottom: -10px;
    }

    .card {
      border: none;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.2s, box-shadow 0.2s;
    }

    .card:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
      transition: background-color 0.3s;
    }

    .btn-primary:hover {
      background-color: #0056b3;
    }

    .modal-header {
      background-color: #007bff;
      color: white;
    }

    .btn-close {
      background-color: white;
      border-radius: 50%;
      padding: 0.25em 0.5em;
    }

    .section {
      padding: 80px 0;
    }

    .video-section iframe {
      border-radius: 10px;
      transition: transform 0.3s;
      width: 100%;
      height: 300px;
      margin-bottom: 30px;
    }

    .video-section iframe:hover {
      transform: scale(1.05);
    }

    .footer {
      background-color: #343a40;
      color: white;
      padding: 20px 0;
      text-align: center;
    }
  </style>
</head>

<body>
  <?php
    if (isset($_GET['success'])) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style="z-index: 22;">
        Data berhasil ditambahkan
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
  ?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-success bg-gradient sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="images/logo_malino.jpg" alt="Beautiful Malino Logo" height="40">
      </a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#paketWisata">Paket Wisata</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#video">Video</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Hubungi Kami</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="pesanan.php">Pesanan Saya</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/slide1.jpg" class="d-block w-100 img-hero" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Welcome to Beautiful Malino</h5>
          <p>Discover the beauty of Malino with us.</p>
          <a href="" class="btn btn-lg btn-warning mt-4" data-bs-toggle="modal" data-bs-target="#formPesanTiketWisata">
        Reservasi Sekarang
      </a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/slide2.jpg" class="d-block w-100 img-hero" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Experience the Adventure</h5>
          <p>Join our exciting tour packages.</p>
          <a href="" class="btn btn-lg btn-warning mt-4" data-bs-toggle="modal" data-bs-target="#formPesanTiketWisata">
        Reservasi Sekarang
      </a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/slide3.jpg" class="d-block w-100 img-hero" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Create Unforgettable Memories</h5>
          <p>Capture every moment with our professional guides.</p>
          <a href="" class="btn btn-lg btn-warning mt-4" data-bs-toggle="modal" data-bs-target="#formPesanTiketWisata">
        Reservasi Sekarang
      </a>
        </div>
      </div>
    </div>
  </div>
<section id="about" class="section">
    <div class="container">
      <h2 class="section-title text-center">About Us</h2>
      <p class="text-center">
        Malino adalah kelurahan yang terletak di Kecamatan Tinggimoncong, Kabupaten Gowa, Sulawesi Selatan.
        Daerah yang
        terletak 64 km dari Kota Makassar ke arah timur laut ini merupakan salah satu objek wisata alam yang
        mempunyai
        daya tarik luar biasa, baik bagi masyarakat Sulawesi Selatan maupun pengunjung dari luar provinsi.
        <br>
        <br>
        Di kawasan wisata Malino sendiri, terdapat hutan wisata, berupa pohon pinus yang tinggi berjejer di
        antara bukit
        dan lembah. Jalan menanjak dan berkelok-kelok dengan melintasi deretan pegunungan dan lembah yang indah
        bak
        lukisan alam, akan mengantarkan Anda ke kota Malino. Kawasan tersebut terkenal sebagai kawasan rekreasi
        dan
        wisata sejak zaman penjajahan Belanda.
        <br>
        <br>
        Malino memiliki gunung-gunung yang sangat kaya dengan pemandangan batu gamping dan pinus. Berbagai jenis
        tanaman
        tropis yang indah,tumbuh dan berkembang di kota yang dingin ini. Selain itu, Malino pun menghasilkan
        buah-buahan
        dan sayuran khas yang tumbuh di lereng gunung Bawakaraeng dan gunung lompobattang. Sebagian masyarakat
        Sulawesi
        Selatan masih mengkulturkan gunung itu sebagai tempat suci dan keramat. Suhu di kota Malino ini mulai
        dari 10 °C
        sampai 26 °C. dan ketika musim hujan, berhati hati sedang berkendara karena, kota ini sering berkabut
        dan jarak
        pandangnya 100meter saja, selain itu sering terjadi tanah longsor.
        <br>
        <br>
        Perjalanan dari kota Makassar menuju daerah ini memakan waktu sekitar 1.5 jam. Wisata air terjun seribu
        tangga,
        air terjun Takapala, Kebun Teh malino high land, Lembah Biru, bungker peninggalan Jepang, dan Gunung
        Bawakaraeng
        menjadi ciri khas kota Malino. Oleh-oleh khas daerah ini adalah buah Markisa,dodol ketan, Tenteng
        Malino, terong
        belanda, wajik, dll. sayuran daun bawang, sawi putih, kol, kembang kol, sayur paling khas sayur pakis,
        dll.
        Malino juga menjadi daerah penghasil beras bagi wilayah Sulawesi Selatan.
      </p>    </div>
  </section>
<section id="paketWisata" class="section bg-light">
  <?php
include 'utils/config.php';
include 'utils/query.php';

// Buat koneksi
$conn = createConnection();
if (!$conn) {
    die('Koneksi Gagal: ' . mysqli_connect_error());
}

// Query data wisata
$query = "SELECT * FROM Wisata";
$result = mysqli_query($conn, $query);
?>
<div class="container">
    <h2 class="section-title text-center">Paket Wisata Kami</h2>
    <div class="row">
        <?php
        // Tampilkan hasil query dalam bentuk card
        if ($result && mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                // Encode gambar ke base64
                $tipe_file = $row['tipe_file'];
                $data_file = $row["gambar"];
                $tanggal = $row["tanggal"];
                $tanggal_formatted = date('d F Y', strtotime($tanggal));
                $base64_image = 'data:' . $tipe_file . ';base64,' . base64_encode($data_file);
                $services = [];

                if ($row['layanan_penginapan'] == 1) {
                  $services[] = 'Penginapan';
                }
                if ($row['layanan_transportasi'] == 1) {
                  $services[] = 'Transportasi';
                }
                if ($row['layanan_makanan'] == 1) {
                  $services[] = 'Makanan';
                }
                if ($row['layanan_wisata'] == 1) {
                  $services[] = 'Wisata';
                }
        ?>

                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="<?php echo $base64_image; ?>" class="card-img-top" alt="Paket Wisata">
                        <div class="card-body">
                        <span class="card-date"><?php echo $tanggal_formatted ?></php></span>
                            <h5 class="card-title"><strong><?php echo $row["nama_wisata"]; ?></strong></h5>
                            <p class="card-text"><?php echo $row["deskripsi"]; ?></p>
                            <p>Informasi paket:</p>
                            <p class="card-text"><strong>Lama waktu: </strong> <?php echo $row["lama_waktu"]; ?></p>
                            <p class="card-text"><strong>Jumlah peserta:</strong> <?php echo $row["jumlah_peserta"]; ?></p>
                            <p class="card-text"><strong>Jenis wisata:</strong> <?php echo $row["jenis_wisata"]; ?></p>
                            <?php
                            echo'
                            <p class="card-text"><strong>Layanan paket: </strong>' . implode(', ', $services) . '</p>'
                            ?>
                            <a href="#" class="btn btn-primary btn-pesan" data-bs-toggle="modal" data-bs-target="#formPesanTiketWisata" 
                             data-nama="<?php echo $row["nama_wisata"]; ?>" 
                             data-lama-waktu="<?php echo $row["lama_waktu"]; ?>"
                             data-jumlah-peserta="<?php echo $row["jumlah_peserta"]; ?>" 
                             data-jenis-wisata="<?php echo $row["jenis_wisata"]; ?>"
                             data-layanan-paket="<?php implode(', ', $services); ?>">Lihat Detail</a>
                        </div>
                    </div>
            </div>
        <?php
            }
            mysqli_free_result($result); // Bebaskan hasil query
        } else {
            echo "Tidak ada data yang ditemukan";
        }

        // Tutup koneksi
        mysqli_close($conn);
        ?>
    </div>
</div>

          </div>
        </div>
      </div>
    </div>
  </section>
<section id="video" class="section">
  <div class="container">
    <h2 class="section-title text-center">Video</h2>
    <div class="row justify-content-center">
      <div class="col-md-6 mb-3 video-section">
        <div class="embed-responsive embed-responsive-1by1">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1_fOe7_-5f8?si=-moMWd6idduQ8w71" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-md-6 mb-3 video-section">
        <div class="embed-responsive embed-responsive-1by1">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/SamXDRcxPjk?si=W-P0gWCTpsdYm7-P" allowfullscreen></iframe>
        </div>
      </div>
          <!--<div class="col-md-6 mb-3 video-section">
        <div class="embed-responsive embed-responsive-1by1">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/gtoVRLegL7A?si=TXi7peVPTcMa0i9P" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-md-6 mb-3 video-section">
        <div class="embed-responsive embed-responsive-1by1">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/KW9UZLm4O60?si=vW4ARaMoxBrmIeES" allowfullscreen></iframe>
        </div>
      </div>-->
      </div>
  </div>
  </section>
<section id="contact" class="section">
  <div class="container">
    <h2 class="section-title text-center">Hubungi Kami</h2>
    <div class="row">
      <div class="col-md-6">
        <h3>Location</h3>
        <div class="embed-responsive embed-responsive-16by9">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.032313875455!2d119.84125670988693!3d-5.257595194698382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee2a6e637fa03%3A0x1264b2e6f86fd127!2sWisata%20Malino!5e0!3m2!1sid!2sid!4v1720691515567!5m2!1sid!2sid" width="450" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <div class="col-md-6">
        <h3>Informasi Kontak</h3>
        <p><strong>Alamat:</strong> Wisata Malino, Kec. Tinggimoncong, Kabupaten Gowa, Sulawesi Selatan 90131</p>
        <p><strong>HP:</strong> #####</p>
        <p><strong>Email:</strong> #####</p>
      </div>
    </div>
  </div>
  </section>

<div class="modal fade" id="formPesanTiketWisata" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Form Pemesanan Tiket Wisata</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="controller/tambah-data.php" method="post">
          <div class="modal-body">
            <div class="row">
              <div class="col-md-5">
                <label for="nama">Nama Pemesan</label>
              </div>
              <div class="col-md-7">
                <input type="text" class="form-control" name="nama" required>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-5">
                <label for="nomor_telepon">Nomor Telepon / HP</label>
              </div>
              <div class="col-md-7">
                <input type="text" class="form-control" name="nomor_telepon" required>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-5">
                <label for="jenis_wisata">Jenis Wisata</label>
              </div>
              <div class="col-md-7">
                <select id="namaWisata" class="form-control" requied name="jenis_wisata">
                  <option value="Malino Camping Ground">Malino Camping Ground</option>
                  <option value="Malino High Land">Malino High Land</option>
                  <option value="Malino Kebun Bunga">Malino Kebun Bunga</option>
                  <option value="Malino Kebun Teh">Malino Kebun Teh</option>
                  <option value="Malino Pool">Malino Pool</option>
                  <option value="Malino Puncak">Malino Puncak</option>
                  <option value="Malino Resto">Malino Resto</option>
                  <option value="Malino Sun Set">Malino Sun Set</option>
                  <option value="Malino Water Fall">Malino Water Fall</option>
                  <option value="Malino Camping">Malino Camping</option>
                  <option value="Malino Kuliner">Malino Kuliner</option>
                </select>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-5">
                <label for="waktu_perjalanan">Waktu Pelaksanaan Perjalanan</label>
              </div>
              <div class="col-md-7">
                <div class="input-group mb-3">
                  <input id="inputWaktuPerjalanan" type="number" class="form-control" name="waktu_perjalanan" min="1"
                    required>
                  <span class="input-group-text">Hari</span>
                </div>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-5">
                <label for="jumlah_peserta">Jumlah Peserta</label>
              </div>
              <div class="col-md-7">
                <div class="input-group mb-3">
                  <input id="inputJumlahPeserta" type="number" class="form-control" name="jumlah_peserta" min="1"
                    required>
                  <span class="input-group-text">Orang</span>
                </div>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-5">
                <label for="layanan">Pelayanan Paket Perjalanan</label>
              </div>
              <div class="col-md-7">
                <div class="form-check-inline">
                  <input class="form-check-input checkbox" type="checkbox" id="checkboxPenginapan"
                    name="layanan_penginapan">
                  <label class="form-check-label" for="layanan_penginapan">
                    Penginapan
                  </label>
                </div>
                <div class="form-check-inline">
                  <input class="form-check-input checkbox" type="checkbox" id="checkboxwisataalam"
                    name="wisataalam">
                  <label class="form-check-label" for="wisataalam">
                    Wisata Alam
                  </label>
                </div>
                <div class="form-check-inline">
                  <input class="form-check-input checkbox" type="checkbox" id="checkboxTransportasi"
                    name="layanan_transportasi">
                  <label class="form-check-label" for="layanan_transportasi">
                    Transportasi
                  </label>
                </div>
                <div class="form-check-inline">
                  <input class="form-check-input checkbox" type="checkbox" id="checkboxMakanan" name="layanan_makanan">
                  <label class="form-check-label" for="layanan_makanan">
                    Makanan
                  </label>
                </div>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-5">
                <label for="harga_paket">Harga Paket Perjalanan</label>
              </div>
              <div class="col-md-7">
                <div class="input-group mb-3">
                  <span class="input-group-text">Rp</span>
                  <input type="number" class="form-control" id="harga_paket" name="harga_paket" required>
                </div>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-5">
                <label for="jumlah_tagihan">Jumlah Tagihan</label>
              </div>
              <div class="col-md-7">
            <div class="input-group mb-3">
                <span class="input-group-text">Rp</span>
                <input id="jumlah_tagihan" type="number" class="form-control" name="jumlah_tagihan" required min="0" step="any">
            </div>
            </div>
            <p>Klik tombol "Cek Tagihan" untuk mengetahui jumlah tagihan.</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success me-auto" id="btn_cek">Cek Pesanan</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <footer class="footer">
    <div class="container">
      <p>&copy; 2024 Beautiful Malino. All rights reserved.</p>
    </div>
  </footer>

  <script src="js/index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
