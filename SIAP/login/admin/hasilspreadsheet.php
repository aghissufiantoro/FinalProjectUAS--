<!-- Buat Excel -->
<?php
include('koneksichart.php');
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

//Sheet 2 Fields Kuliah Kerja
$spreadsheet = new Spreadsheet();
$sheet1 = $spreadsheet->getActiveSheet();
$sheet1->setTitle('Kerja');
$sheet1->setCellValue('A1', 'No');
$sheet1->setCellValue('B1', 'Nama');
$sheet1->setCellValue('C1', 'Jenis Kelamin');
$sheet1->setCellValue('D1', 'Nama Perusahaan');
$sheet1->setCellValue('E1', 'Jabatan');
$sheet1->setCellValue('F1', 'Tahun Kerja');
$sheet1->setCellValue('G1', 'Foto');

$query = mysqli_query($koneksi, "SELECT * from kerja");
$i = 2;
$no = 1;
while ($row = mysqli_fetch_array($query)) {
    $sheet1->setCellValue('A' . $i, $no++);
    $sheet1->setCellValue('B' . $i, $row['nama']);
    $sheet1->setCellValue('C' . $i, $row['jenis_kelamin']);
    $sheet1->setCellValue('D' . $i, $row['nama_perusahaan']);
    $sheet1->setCellValue('E' . $i, $row['jabatan']);
    $sheet1->setCellValue('F' . $i, $row['tahun_kerja']);
    $sheet1->setCellValue('G' . $i, $row['gambar']);
    $i++;
}

// Sheet 2 Fields Kerja dan Kuliah
$sheet2 = $spreadsheet->createSheet();
$sheet2->setTitle('Kerja dan kuliah');
$sheet2->setCellValue('A1', 'No');
$sheet2->setCellValue('B1', 'Nama');
$sheet2->setCellValue('C1', 'Jenis Kelamin');
$sheet2->setCellValue('D1', 'Nama Perusahaan');
$sheet2->setCellValue('E1', 'Jabatan');
$sheet2->setCellValue('F1', 'Tahun Kerja');
$sheet2->setCellValue('G1', 'Universitas Prasarjana');
$sheet2->setCellValue('H1', 'Program Studi');
$sheet2->setCellValue('I1', 'Foto');

$query = mysqli_query($koneksi, "SELECT * from kerjakuliah");
$i = 2;
$no = 1;
while ($row = mysqli_fetch_array($query)) {
    $sheet2->setCellValue('A' . $i, $no++);
    $sheet2->setCellValue('B' . $i, $row['nama']);
    $sheet2->setCellValue('C' . $i, $row['jenis_kelamin']);
    $sheet2->setCellValue('D' . $i, $row['nama_perusahaan']);
    $sheet2->setCellValue('E' . $i, $row['jabatan']);
    $sheet2->setCellValue('F' . $i, $row['tahun_kerja']);
    $sheet2->setCellValue('G' . $i, $row['uni_ver']);
    $sheet2->setCellValue('H' . $i, $row['jurusan']);
    $sheet2->setCellValue('I' . $i, $row['gambar']);
    $i++;
}

// Sheet 3 Kuliah
$sheet3 = $spreadsheet->createSheet();
$sheet3->setTitle('Kuliah');
$sheet3->setCellValue('A1', 'No');
$sheet3->setCellValue('B1', 'Nama');
$sheet3->setCellValue('C1', 'Jenis Kelamin');
$sheet3->setCellValue('D1', 'Universitas');
$sheet3->setCellValue('E1', 'Program Studi');
$sheet3->setCellValue('F1', 'Foto');

$query = mysqli_query($koneksi, "SELECT * from kuliah");
$i = 2;
$no = 1;
while ($row = mysqli_fetch_array($query)) {
    $sheet3->setCellValue('A' . $i, $no++);
    $sheet3->setCellValue('B' . $i, $row['nama']);
    $sheet3->setCellValue('C' . $i, $row['jenis_kelamin']);
    $sheet3->setCellValue('D' . $i, $row['uni_ver']);
    $sheet3->setCellValue('E' . $i, $row['jurusan']);
    $sheet3->setCellValue('F' . $i, $row['gambar']);
    $i++;
}

// Sheet 4 Mencari Kerja
$sheet4 = $spreadsheet->createSheet();
$sheet4->setTitle('Mencari Kerja');
$sheet4->setCellValue('A1', 'No');
$sheet4->setCellValue('B1', 'Nama');
$sheet4->setCellValue('C1', 'Jenis Kelamin');
$sheet4->setCellValue('D1', 'Alamat');
$sheet4->setCellValue('E1', 'Alasan Cari Kerja');
$sheet4->setCellValue('F1', 'Kontak');
$sheet4->setCellValue('G1', 'Foto');

$query = mysqli_query($koneksi, "SELECT * from mencari_kerja");
$i = 2;
$no = 1;
while ($row = mysqli_fetch_array($query)) {
    $sheet4->setCellValue('A' . $i, $no++);
    $sheet4->setCellValue('B' . $i, $row['nama']);
    $sheet4->setCellValue('C' . $i, $row['jenis_kelamin']);
    $sheet4->setCellValue('C' . $i, $row['alamat']);
    $sheet4->setCellValue('D' . $i, $row['alasan_cari_kerja']);
    $sheet4->setCellValue('E' . $i, $row['kontak']);
    $sheet4->setCellValue('F' . $i, $row['gambar']);
    $i++;
}

// Sheet 5 Usaha
$sheet5 = $spreadsheet->createSheet();
$sheet5->setTitle('Pengusaha');
$sheet5->setCellValue('A1', 'No');
$sheet5->setCellValue('B1', 'Nama');
$sheet5->setCellValue('C1', 'Jenis Kelamin');
$sheet5->setCellValue('D1', 'Jenis Usaha');
$sheet5->setCellValue('E1', 'Alamat Usaha');
$sheet5->setCellValue('F1', 'Tahun Berdirinya Usaha');
$sheet5->setCellValue('G1', 'Foto');

$query = mysqli_query($koneksi, "SELECT * from usaha");
$i = 2;
$no = 1;
while ($row = mysqli_fetch_array($query)) {
    $sheet5->setCellValue('A' . $i, $no++);
    $sheet5->setCellValue('B' . $i, $row['nama']);
    $sheet5->setCellValue('C' . $i, $row['jenis_kelamin']);
    $sheet5->setCellValue('D' . $i, $row['jenis_usaha']);
    $sheet5->setCellValue('E' . $i, $row['alamat_usaha']);
    $sheet5->setCellValue('F' . $i, $row['tahun_usaha']);
    $sheet5->setCellValue('G' . $i, $row['gambar']);
    $i++;
}

$styleArray = [
    'border' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];

$i = $i - 1;
$sheet1->getStyle('A1:D' . $i)->applyFromArray($styleArray);

$writer = new Xlsx($spreadsheet);
$writer->save('Data Tracer Study Alumni UPNVJT.Xlsx')
?>

<html>
<button><a href="index.php">Back</a></button>

</html>