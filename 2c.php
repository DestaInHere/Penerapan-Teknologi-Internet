<html>
<title>Hitung Penjualan Barang</title>
</head>
<body>
	<div align="center"><br />
	PERHITUNGAN PENJUALAN BARANG 2c.php</div> <br /><br />
 <form method="post" action="" target="_self">
  <table width="300" border="1" align="center">
        <tr>
          <td>Kode Barang</td>
          <td>
              <select name="kode" id="kode">
                <option>-- Silahkan Pilih --</option>
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
        <tr>
          <td>Status</td>
          <td>
            <input type="radio" name="status_member" id="member" value="member" />
          Member
         <br />
            <input type="radio" name="status_member" id="bukan_member" value="bukan_member" />
          Bukan Member</td>
        </tr>
        <tr>
          <td>Kota Kirim</td>
          <td>
            <select name="kota_kirim" id="Kota">
              <option>-- Silahkan Pilih Kota -- </option>
              <option value="Jakarta">Jakarta</option>
              <option value="Bandung">Bandung</option>
              <option value="Padang">Padang</option>
              <option value="Yogyakarta">Yogyakarta</option>            
            </select>
          </td>
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
$kode="";
$nama="";
$harga=0;
$ongkos_kirim=0;
$diskon_status=0;
$total_diskon=0;
$jumlah=$_POST[jumlah];
$kode=$_POST[kode];
$kota_kirim=$_POST[kota_kirim];
$status_member=$_POST[status_member];
$submit = $_POST['Hitung'];
?>
<?php if($submit) 
	//echo "<script>alert('Data OK')</script>";
{


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
	
if ($status_member=="member"){
	$diskon_status=0.1*$subtotal;
	$ket_status="Member";
}
else 
if ($status_member=="bukan_member"){
	$diskon_status=0;
	$ket_status="Bukan Member";
	}
	
if ($kota_kirim=="Jakarta"){
	$ongkos_kirim=10000;
}
else
if ($kota_kirim=="Bandung"){
	$ongkos_kirim=12500;
}
else
if ($kota_kirim=="Padang"){
	$ongkos_kirim=30000;
}
else
if ($kota_kirim=="Yogyakarta"){
	$ongkos_kirim=20000;
}

$total_diskon=$diskon+$diskon_status;

$totalbayar=$subtotal-$total_diskon+$ongkos_kirim;
?>    

</p>
<center>
<table width="300" border="1">
  <tr>
    <td width="125" align="left">Nama Barang</td>
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
  <td align="left">Status</td>
  <td><div align="right"> <?php echo $ket_status;?></div></td>
  
  </tr>
  <tr>
    <td align="left">Diskon Pembelian</td>
    <td><div align="right">Rp. <?php echo number_format($diskon,0,",",".");?>;</div></td>
  </tr>
  

  <tr>
  <td align="left">Diskon Status</td>
  <td><div align="right"> Rp. <?php echo number_format($diskon_status,0,",",".");?>;</div></td>  
  </tr>
  
   <tr>
  <td align="left">Total Diskon</td>
  <td><div align="right"> Rp. <?php echo number_format($total_diskon,0,",",".");?>;</div></td>  
  </tr>
  
    <tr>
  <td align="left">Ongkos Kirim</td>
  <td><div align="right"> Rp. <?php echo number_format ($ongkos_kirim,0,",",".")." ($kota_kirim)";?></div></td>  
  </tr>
  
  
  
  <tr>
    <td align="left">Total Bayar</td>
    <td><div align="right">Rp. <?php echo number_format($totalbayar,0,",",".");?>;</div></td>
  </tr>
</table>

<?php } ?>


</center>
<p>&nbsp;</p>
</body>
</html>
