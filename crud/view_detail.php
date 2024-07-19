<div class="d-flex flex-column flex-lg-row mt-5 mb-4">
    <!-- judul halaman -->
    <div class="flex-grow-1 d-flex align-items-center">
        <h3><i class="fa-regular fa-user icon-title me-2"></i></h3>
        <h3>ASESI UJIKOM</h3>
    </div>
    <!-- breadcrumbs -->
    <div class="ms-5 ms-lg-0 pt-lg-2">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#" class="text-dark text-decoration-none">
                        <i class="fa-solid fa-house"></i>
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="?halaman=data" class="text-dark text-decoration-none">
                        Asesi Ujikom
                    </a>
                </li>
                <li class="breadcrumb-item" aria-current="page">
                    Detail
                </li>
            </ol>
        </nav>
    </div>
</div>

<?php
// mengecek data GET "id_siswa"
if (isset($_GET['id'])) {
    // ambil data GET dari tombol ubah
    $id_siswa = $_GET['id'];
    // sql statement untuk menampilkan data dari tabel "tbl_siswa" berdasarkan "id_siswa"
    $query = $mysqli->query("SELECT a.`id_siswa`, a.`id_skema`, b.`nama_skema`, a.`nama_lengkap`, a.`foto_profil`, a.`tanggal_daftar`, a.`jenis_kelamin`, a.`alamat`, a.`email`, a.`whatsapp`
                                FROM `tbl_siswa` a
                                JOIN `tbl_skema` b ON a.id_skema = b.id_skema
                                WHERE id_siswa='$id_siswa'")
                            or die('Ada kesalahan pada query tampil data : ' . $mysqli->error);
    // ambil data hasil query
    $data = $query->fetch_assoc();
}
?>

<div class="bg-white rounded-4 shadow-lg p-4 mb-5">
    <!-- judul halaman -->
    <div class="alert alert-primary rounded-4 mb-5" role="alert">
        <i class="fa-solid fa-list-ul"></i> Detail Data Asesi
    </div>
    <!-- tampilkan data -->
    <div class="d-flex flex-column flex-xl-row">
        <div class="flex-shrink-0 text-center mb-5 mb-xl-0">
            <div class="foto-profil-detail">
                <img src="images/<?php echo $data['foto_profil']; ?>" class="border border-2 img-fluid rounded-4 shadow" alt="Foto Profil" width="240" height="240">
            </div>
        </div>
        <div class="flex-grow-1 text-muted fw-light ms-xl-5">
            <div class="table-responsive">
                <table class="table table-striped lh-lg">
                    <tr>
                        <td width="200">ID Asesi</td>
                        <td width="10">:</td>
                        <td><?php echo $data['id_siswa']; ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Daftar</td>
                        <td>:</td>
                        <td><?php echo tanggal_indo($data['tanggal_daftar']); ?></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>:</td>
                        <td><?php echo $data['nama_skema']; ?></td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><?php echo $data['nama_lengkap']; ?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><?php echo $data['jenis_kelamin']; ?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?php echo $data['alamat']; ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><?php echo $data['email']; ?></td>
                    </tr>
                    <tr>
                        <td>WhatsApp</td>
                        <td>:</td>
                        <td><?php echo $data['whatsapp']; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="pt-4 pb-2 mt-5 border-top">
        <div class="d-grid gap-3 d-sm-flex justify-content-md-start pt-1">
            <!-- button kembali ke halaman tampil data -->
            <a href="?halaman=data" class="btn btn-primary rounded-pill py-2 px-4">Kembali</a>
        </div>
    </div>
</div>
