<?php
    class Rpl{
        public $jml_siswa;
        public $ketuam;
        public $Jeniskl;
        public $Jeniskp;
        public $wkelas;
        

        public function Siswa4(){
            return "lebih banyak";
        }
        public function Siswa5(){
            return "sedikit";
        }
    }

$siswa1 = new Rpl();
$siswa1->jml_siswa = 25;
$siswa1->ketuam = "M.Alif";
$siswa1->Jeniskl = 15;
$siswa1->Jeniskp = 10;
$siswa1->wkelas = "Pak.wildan";

$siswa2 = new Rpl();
$siswa2->jml_siswa = 35;
$siswa2->ketuam = "Raihan";
$siswa2->Jeniskl = 25;
$siswa2->Jeniskp = 10;
$siswa2->wkelas = "Pak.sofwan";

$siswa3 = new Rpl();
$siswa3->jml_siswa = 20;
$siswa3->ketuam = "Moch.rizky";
$siswa3->Jeniskl = 10;
$siswa3->Jeniskp = 10;
$siswa3->wkelas = "Bu.Tami";

echo "DATA KELAS XI RPL I<br><br>";
echo "Ketua Murid = $siswa2->ketuam<br>";
echo "Jumlah Siswa Laki Laki = $siswa2->Jeniskl<br>";
echo "Jumlah Siswa Perempuan = $siswa2->Jeniskp<br>";
echo "Jumlah Siswa = $siswa2->jml_siswa<br>";
echo "Wali Kelas = $siswa2->wkelas<br>";
echo "Note : ".$siswa2->Siswa4()."<br><br><br>";

echo "DATA KELAS XI RPL II<br><br>";
echo "Ketua Murid = $siswa1->ketuam<br>";
echo "Jumlah Siswa Laki Laki = $siswa1->Jeniskl<br>";
echo "Jumlah Siswa Perempuan = $siswa1->Jeniskp<br>";
echo "Jumlah Siswa = $siswa1->jml_siswa<br>";
echo "Wali Kelas = $siswa1->wkelas<br>";
echo "Note : ".$siswa1->Siswa4()."<br><br><br>";


echo "DATA KELAS XI RPL III<br><br>";
echo "Ketua Murid = $siswa3->ketuam<br>";
echo "Jumlah Siswa Laki Laki = $siswa3->Jeniskl<br>";
echo "Jumlah Siswa Perempuan = $siswa3->Jeniskp<br>";
echo "Jumlah Siswa = $siswa3->jml_siswa<br>";
echo "Wali Kelas = $siswa3->wkelas<br>";
echo "Note : ".$siswa3->Siswa5()."<br><br><br>";

?>