<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INFINITY Laundry</title>
    <link rel="stylesheet" href="../src/style/customers.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
            <a class="navbar-brand text-white" href="../index.html">
                <img src="../src/img/Logo.png" alt="Logo INFINITY Laundry" height="25px" class="d-inline-block align-text-top">
                <b>INFINITY</b> Laundry
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link ms-2" aria-current="page" href="../index.html">Beranda</a>
                    <a class="nav-link ms-2" href="../pages/service.html">Layanan</a>
                    <a class="nav-link ms-2" href="../pages/contact.html">Kontak</a>
                    <a class="nav-link ms-2" href="../pages/about.html">Tentang Kami</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="dashboard.html">
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Riwayat Pesanan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Laporan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Bantuan
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="container mt-4">
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <h2 style="color: #0084F8;">Selamat Sore, Bu Mawar</h2>
                        </div>
                        <div class="col-md-6" style="display: flex; justify-content: flex-end; align-items: center;">
                            <a href="order/laundry.html" class="btn btn-success">+ Buat Pesanan</a>
                        </div>
                    </div>                    
                    <div class="row mt-4" style="display: flex; align-items: stretch;">
                        <div class="col-md-6">
                            <div class="card" style="height: 100%;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <h5 class="card-title">Saldo Anda</h5>
                                            <h4 class="card-text">Rp 500.000</h4>
                                        </div>
                                        <div class="col-6">
                                            <h5 class="card-title">Level Member</h5>
                                            <h4 class="card-text">Gold Member</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card" style="height: 100%;">
                                <div class="card-body">
                                    <a href="#" class="btn btn-white" style="width: 100%; height: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                                        <img src="../src/img/tarikSaldo.png" alt="Tarik Saldo" style="max-width: 30px; max-height: 50px;">
                                        <span>Tarik Saldo</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card" style="height: 100%;">
                                <div class="card-body">
                                    <a href="#" class="btn btn-white" style="width: 100%; height: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                                        <img src="../src/img/isiSaldo.png" alt="Isi Saldo" style="max-width: 30px; max-height: 50px;">
                                        <span>Isi Saldo</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card" style="height: 100%;">
                                <div class="card-body">
                                    <a href="#" class="btn btn-white" style="width: 100%; height: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                                        <img src="../src/img/tukarPoin.png" alt="Tukar Poin" style="max-width: 30px; max-height: 50px;">
                                        <span>Tukar Poin</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-5">
                        <h3>Riwayat Pemesanan</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No. Pesanan</th>
                                    <th>Tanggal Pemesanan</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>12345</td>
                                    <td>2023-10-20</td>
                                    <td>Dalam Proses</td>
                                </tr>
                                <tr>
                                    <td>12346</td>
                                    <td>2023-10-18</td>
                                    <td>Selesai</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="./src/js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</body>

</html>