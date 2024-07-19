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
                    Change
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
    $query = $mysqli->query("SELECT * FROM tbl_siswa WHERE id_siswa='$id_siswa'")
                            or die('Ada kesalahan pada query tampil data : ' . $mysqli->error);
    // ambil data hasil query
    $data = $query->fetch_assoc();
}
?>

<div class="bg-white rounded shadow p-4 mb-5">
    <!-- judul form -->
    <div class="alert alert-primary rounded-4 mb-5" role="alert">
        <i class="fa-solid fa-pen-to-square me-2"></i> Change Data
    </div>
    <!-- form ubah data -->
    <form action="proses_ubah.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
        <div class="row">
            <div class="col-xl-6">
                <div class="row g-0">
                    <div class="mb-3 col-xl-6 pe-xl-3">
                        <label class="form-label">ID Siswa <span class="text-danger">*</span></label>
                        <input type="text" name="id_siswa" class="form-control" value="<?php echo $data['id_siswa']; ?>" readonly>
                    </div>

                    <div class="mb-3 col-xl-6 pe-xl-3">
                        <label class="form-label">Tanggal Daftar <span class="text-danger">*</span></label>
                        <input type="date" name="tanggal_daftar" class="form-control datepicker" autocomplete="off" value="<?php echo $data['tanggal_daftar']; ?>" required>
                        <div class="invalid-feedback">Tanggal daftar tidak boleh kosong.</div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="mb-3 ps-xl-3">
                    <label class="form-label">Kelas <span class="text-danger">*</span></label>
                    <select name="id_skema" class="form-select" autocomplete="off" required>
                        <option selected disabled value="">-- Pilih --</option>
                        <?php
                        $getskema = $mysqli->query("SELECT * FROM `tbl_skema`");
                        while ($skema = $getskema->fetch_assoc()) {
                            $id_skema = $skema['id_skema'];
                            $nama_skema = $skema['nama_skema'];
                            $selected = ($data['id_skema'] == $id_skema) ? 'selected' : '';
                            echo '<option value="' . $id_skema . '" ' . $selected . '>' . $nama_skema . '</option>';
                        }
                        ?>
                    </select>
                    <div class="invalid-feedback">Kelas tidak boleh kosong.</div>
                </div>
            </div>
        </div>

        <hr class="mb-4-2">

        <div class="row">
            <div class="col-xl-6">
                <div class="mb-3 pe-xl-3">
                    <label class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                    <input type="text" name="nama_lengkap" class="form-control" autocomplete="off" value="<?php echo $data['nama_lengkap']; ?>" required>
                    <div class="invalid-feedback">Nama lengkap tidak boleh kosong.</div>
                </div>

                <div class="mb-4 pe-xl-3">
                    <label class="form-label">Jenis Kelamin <span class="text-danger">*</span></label>
                    <br>
                    <?php
                    if ($data['jenis_kelamin'] == 'Laki-laki') { ?>
                        <div class="form-check form-check-inline">
                            <input type="radio" id="laki_laki" name="jenis_kelamin" class="form-check-input" value="Laki-laki" checked required>
                            <label class="form-check-label" for="laki_laki">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" id="perempuan" name="jenis_kelamin" class="form-check-input" value="Perempuan" required>
                            <label class="form-check-label" for="perempuan">Perempuan</label>
                            <div class="invalid-feedback invalid-feedback-inline">Pilih salah satu jenis kelamin.</div>
                        </div>
                    <?php
                    } else { ?>
                        <div class="form-check form-check-inline">
                            <input type="radio" id="laki_laki" name="jenis_kelamin" class="form-check-input" value="Laki-laki" required>
                            <label class="form-check-label" for="laki_laki">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" id="perempuan" name="jenis_kelamin" class="form-check-input" value="Perempuan" checked required>
                            <label class="form-check-label" for="perempuan">Perempuan</label>
                            <div class="invalid-feedback invalid-feedback-inline">Pilih salah satu jenis kelamin.</div>
                        </div>
                    <?php } ?>
                </div>

                <div class="mb-3 pe-xl-3">
                    <label class="form-label">Alamat <span class="text-danger">*</span></label>
                    <textarea name="alamat" rows="2" class="form-control" autocomplete="off" required><?php echo $data['alamat']; ?></textarea>
                    <div class="invalid-feedback">Alamat tidak boleh kosong.</div>
                </div>

                <div class="mb-3 pe-xl-3">
                    <label class="form-label">Email <span class="text-danger">*</span></label>
                    <input type="email" name="email" class="form-control" autocomplete="off" value="<?php echo $data['email']; ?>" required>
                    <div class="invalid-feedback">Email tidak boleh kosong.</div>
                </div>

                <div class="mb-3 pe-xl-3">
                    <label class="form-label">WhatsApp <span class="text-danger">*</span></label>
                    <input type="text" name="whatsapp" class="form-control" maxlength="13" autocomplete="off" onKeyPress="return goodchars(event,'0123456789',this)" value="<?php echo $data['whatsapp']; ?>" required>
                    <div class="invalid-feedback">WhatsApp tidak boleh kosong.</div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="mb-3 ps-xl-3">
                    <label class="form-label">Foto Profil</label>
                    <input type="file" accept=".jpg, .jpeg, .png" id="foto" name="foto" class="form-control" autocomplete="off">

                    <div class="mt-4">
                        <img id="preview_foto" src="images/<?php echo $data['foto_profil']; ?>" class="border border-2 img-fluid rounded-4 shadow-sm" alt="Foto Profil" width="240" height="240">
                    </div>

                    <div class="form-text mt-4">
                        Keterangan : <br>
                        - Tipe file yang bisa diunggah adalah *.jpg atau *.png. <br>
                        - Ukuran file yang bisa diunggah maksimal 1 Mb.
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-4 pb-2 mt-5 border-top">
            <div class="d-grid gap-3 d-sm-flex justify-content-md-start pt-1">
                <!-- button simpan data -->
                <input type="submit" name="simpan" value="Simpan" class="btn btn-primary rounded-pill py-2 px-4">
                <!-- button kembali ke halaman tampil data -->
                <a href="?halaman=data" class="btn btn-secondary rounded-pill py-2 px-4">Batal</a>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">
    // validasi file dan preview file sebelum diunggah
    document.getElementById('foto').onchange = function() {
        // mengambil value dari file
        var fileInput = document.getElementById('foto');
        var filePath = fileInput.value;
        var fileSize = fileInput.files[0].size;
        // tentukan extension file yang diperbolehkan
        var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;

        // Jika tipe file yang diunggah tidak sesuai dengan "allowedExtensions"
        if (!allowedExtensions.exec(filePath)) {
            alert("Tipe file tidak sesuai. Harap unggah file yang memiliki tipe *.jpg atau *.png.");
            // reset input file
            fileInput.value = "";
            // tampilkan file default
            document.getElementById("preview_foto").src = "images/img-default.png";
        }
        // jika ukuran file yang diunggah lebih dari 1 Mb
        else if (fileSize > 1000000) {
            alert("Ukuran file lebih dari 1 Mb. Harap unggah file yang memiliki ukuran maksimal 1 Mb.");
            // reset input file
            fileInput.value = "";
            // tampilkan file default
            document.getElementById("preview_foto").src = "images/img-default.png";
        }
        // jika file yang diunggah sudah sesuai, tampilkan preview file
        else {
            var reader = new FileReader();

            reader.onload = function(e) {
                // preview file
                document.getElementById("preview_foto").src = e.target.result;
            };
            // membaca file sebagai data URL
            reader.readAsDataURL(this.files[0]);
        }
    };
</script>
