<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dinda Mayori ProgNet - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/img/favicon.png" rel="icon">
  <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/vendor/aos/aos.css" rel="stylesheet">
  <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="/img/logo.png" alt=""> -->
        <h1>Dinda Mayori<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/">HOME</a></li>
        </ul>
        <ul>
          <li><a href="#about">ABOUT</a></li>
        </ul>
        <ul>
        <li><a href="/mahasiswaku">TUGAS PROGNET</a></li>
      </ul>
      <ul>
        </ul>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

 <!-- ======= Start Hasil Form ======= -->
<div id="form" class="form-mf sect-pt4 route mt-4 mb-4">
    <div class="container mt-5">
        <h1 class="text-center mb-5">List Biodata Mahasiswa</h1>
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>Nim</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>Hoby</th>
                    <th>Fakultas</th>
                    <th>Tanggal Lahir</th>
                    <th>Email</th>
                    <th>Kota Asal</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <form action="/mahasiswaku/create" method="get">
                    <button class="badge bg-primary border-0 mb-2" type="submit">New Data</button>
                </form>
                @foreach ($data as $mahasiswaku)
                    <tr>
                        <td>{{ $mahasiswaku->nim }}</td>
                        <td>{{ $mahasiswaku->fullname }}</td>
                        <td>{{ $mahasiswaku->jeniskelamin }}</td>
                        <td>{{ $mahasiswaku->hoby }}</td>
                        <td>{{ $mahasiswaku->fakultas }}</td>
                        <td>{{ $mahasiswaku->tgllahir }}</td>
                        <td>{{ $mahasiswaku->email }}</td>
                        <td>{{ $mahasiswaku->kota }}</td>
                        <td>
                            <form action="/mahasiswaku/{{ $mahasiswaku->id }}/edit" method="GET">
                                <button class="badge bg-primary border-0">Edit</button>
                            </form>
                            <form action="/mahasiswaku/{{ $mahasiswaku->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Apa Anda yakin menghapus data ini?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- ======= End Hasil Form ======= -->


</body>
</html>