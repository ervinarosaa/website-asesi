<?php
// format nama hari indonesia
function nama_hari_indo($tanggal)
{
    // format tanggal yyyy-mm-dd
    $tgl = substr($tanggal, 8, 2);
    $bln = substr($tanggal, 5, 2);
    $thn = substr($tanggal, 0, 4);

    $info = date('w', strtotime($tanggal));

    $hari = [
        'Minggu',
        'Senin',
        'Selasa',
        'Rabu',
        'Kamis',
        'Jumat',
        'Sabtu'
    ];

    return $hari[$info];
}

// format tanggal indonesia
function tanggal_indo($tanggal)
{
    $bulan = [
        1 => 'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    ];

    $explode = explode('-', $tanggal);

    return $explode[2] . ' ' . $bulan[(int)$explode[1]] . ' ' . $explode[0];
}

// format nama bulan indonesia
function nama_bulan_indo($tanggal)
{
    $bulan = [
        1 => 'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    ];

    $explode = explode('-', $tanggal);

    return $bulan[(int)$explode[1]];
}
?>
