<?php
require 'config.php';         // koneksi DB
require 'fpdf/fpdf.php';      // pustaka FPDF

// ambil data mahasiswa
$stmt = $mysqli->query("SELECT nim, nama, jurusan, angkatan FROM mahasiswa ORDER BY nama");
$rows = $stmt->fetch_all(MYSQLI_ASSOC);

// inisialisasi PDF
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);

// judul
$pdf->Cell(0,10,'Daftar Mahasiswa',0,1,'C');
$pdf->Ln(2);

// header tabel
$pdf->SetFont('Arial','B',11);
$pdf->Cell(10,8,'#',1,0,'C');
$pdf->Cell(30,8,'NIM',1,0,'C');
$pdf->Cell(70,8,'Nama',1,0,'C');
$pdf->Cell(50,8,'Jurusan',1,0,'C');
$pdf->Cell(20,8,'Thn',1,1,'C');

// isi tabel
$pdf->SetFont('Arial','',11);
$no = 1;
foreach ($rows as $r) {
    $pdf->Cell(10,7,$no++,1,0,'C');
    $pdf->Cell(30,7,$r['nim'],1);
    $pdf->Cell(70,7,$r['nama'],1);
    $pdf->Cell(50,7,$r['jurusan'],1);
    $pdf->Cell(20,7,$r['angkatan'],1,1,'C');
}

// output ke browser
$pdf->Output('I', 'mahasiswa.pdf');