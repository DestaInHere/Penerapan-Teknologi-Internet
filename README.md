<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hitung Penjualan Barang</title>
</head>
<body>
	<div align="center"><br />PERHITUNGAN PENJUALAN BARANG 2a.php</div> <br /><br />
<form id="form1" name="form1" method="post" action="2a.php">
  <table width="300" border="1" align="center">
        <tr>
          <td>Kode Barang</td>
          <td>
              <select name="kode" id="kode">
                <option>---Silahkan Pilih--</option>
                <option value="A01">A01 - Speaker</option>
                <option value="B02">B02 - Mouse</option>
                <option value="C03">C03 - Harddisk</option>
                <option value="D04">D04 - Mouse Pad</option>
                </select>          </td>
        </tr>
        <tr>
          <td>Jumlah Beli</td>
          <td><input type="text" name="jumlah" id="jumlah"></td>
        </tr>
      </table>
        <p>
          <center><input type="submit" name="Hitung" id="Hitung" value="Hitung" />
          <input type="reset" name="Reset" id="Reset" value="Reset" /></center>
        </p>
</form>

<?php
error_reporting(0);
$jumlah=0;
$kode='';
$nama='';
$harga=0;
$jumlah=$_POST['jumlah'];
$kode=$_POST['kode'];

if ($kode=="A01"){
	$nama="Speaker";
	$harga=50000;
}

if ($kode=="B02"){
	$nama="Mouse";
	$harga=25000;
}

if ($kode=="C03"){
	$nama="Hardisk";
	$harga=750000;
}

if ($kode=="D04"){
	$nama="Mouse Pad";
	$harga=5000;
}

$subtotal=$harga*$jumlah;
if ($subtotal>=100000){
	$diskon=0.15*$subtotal;
}
else
if ($subtotal>=50000){
	$diskon=0.1*$subtotal;
}
else
if ($subtotal>=25000){
	$diskon=0.05*$subtotal;
}
else
	$diskon=0;
$totalbayar=$subtotal-$diskon;
?>    

</p>
<center>
<table width="300" border="1">
  <tr>
    <td width="109" align="left">Nama Barang</td>
    <td width="175"><?php echo $nama;?></td>
  </tr>
  <tr>
    <td align="left">Harga Satuan</td>
    <td><div align="right">Rp. <?php echo number_format($harga,0,",",".");?>;</div></td>
  </tr>
  <tr>
    <td align="left">Jumlah Beli</td>
    <td><div align="right"><?php echo number_format($jumlah,0,",",".");?>;</div></td>
  </tr>
  <tr>
    <td align="left">Sub Total</td>
    <td><div align="right">Rp. <?php echo number_format($subtotal,0,",",".");?>;</div></td>
  </tr>
  <tr>
    <td align="left">Diskon</td>
    <td><div align="right">Rp. <?php echo number_format($diskon,0,",",".");?>;</div></td>
  </tr>
  <tr>
    <td align="left">Total Bayar</td>
    <td><div align="right">Rp. <?php echo number_format($totalbayar,0,",",".");?>;</div></td>
  </tr>
</table>
</center>
<p>&nbsp;</p>
</body>
</html>
