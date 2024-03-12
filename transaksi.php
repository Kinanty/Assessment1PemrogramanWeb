<?php
    if(isset($_POST['btnSave'])){
        $kodeTransaksi = $_POST["kode"];
        $tanggal = $_POST["tanggal"];
        $customer = $_POST["customer"];
        $barang1 = $_POST["barang1"];
        $barang2 = $_POST["barang2"];
        $barang3 = $_POST["barang3"];
        $jumlahBarang1 = $_POST["jumlah_barang1"];
        $jumlahBarang2 = $_POST["jumlah_barang2"];
        $jumlahBarang3 = $_POST["jumlah_barang3"];
        $uangPembayaran = $_POST["uang_pembayaran"];

?>
<table>
    <tr>
        <td>Kode Transaksi</td>
        <td style="width:20%;"></td>
        <td><?php echo $kodeTransaksi; ?></td>
    </tr>
    <tr>
        <td>Tanggal Transaksi</td>
        <td style="width:20%;"></td>
        <td><?php echo $tanggal; ?></td>
    </tr>
    <tr>
        <td>Customer</td>
        <td style="width:20%;"></td>
        <td><?php echo $customer; ?></td>
    </tr>
</table>
<p>Detail Pembelian</p>
<table>
    <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Qty</th>
        <th>Harga</th>
        <th>Jumlah</th>
    </tr>
    <tr>
        <td>1</td>
        <td><?php echo $barang1;?></td>
        <td><?php echo $jumlahBarang1;?></td>
        <td><?php  ?></td>
    </tr>
    <tr>
        <td>2</td>
        <td><?php echo $barang2;?></td>
        <td><?php echo $jumlahBarang2;?></td>
        <td><?php  ?></td>
    </tr>
    <tr>
        <td>3</td>
        <td><?php echo $barang3;?></td>
        <td><?php echo $jumlahBarang3;?></td>
        <td><?php  ?></td>
    </tr>
</table>
<?php
    }else{
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <?php
        include "header.php";
    ?>
    <div class="container my-5">
        <form action="" method="post">
            <table>
                <tr>
                    <td><label for="kode">Kode Transaksi</label></td>
                    <td>:</td>
                    <td><input type="text" id="name" name="kode"></td>
                </tr>
                <tr>
                    <td><label for="date">Tanggal Transaksi</label></td>
                    <td>:</td>
                    <td><input type="date" id="date" name="tanggal"></td>
                </tr>
                <tr>
                    <td><label for="cutomer">Customer</label></td>
                    <td>:</td>
                    <td>
                        <select name="customer" id="customer">
                            <?php
                                $customer = array("Kinanty", "Jenny", "Olivia", "Febi", "Dio");
                                foreach($customer as $pelanggan){
                                    echo '<option value="$pelanggan">' .$pelanggan. '</option>';
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="barang1">Barang 1</label></td>
                    <td>:</td>
                    <td>
                        <?php
                            $barang = array("Mie Instan" => 3000, "Sabun Mandi" => 3500, "Shampoo" => 1000, "Sandal Jepit" => 11000, "Roti" => 12000, "Buku Tulis" => 5500, "Susu Kotak" => 6000, "Minyak Goreng" => 13000, "Ice Cream" => 11000, "Baterai" => 16000);
                            

                            
                        ?>
                        <select name="barang1" id="barang">
                            <?php
                                foreach($barang as $key => $value){
                                    echo '<option value=" '.$key.' ">' .$key. " " .$value. '</option>';
                                }
                            ?>
                        </select>
                        <input type="number" id="jumlah_barang1" name="jumlah_barang1">
                    </td>
                </tr>
                <tr>
                    <td><label for="barang2">Barang 2</label></td>
                    <td>:</td>
                    <td>
                        <?php
                            $barang = array("Mie Instan" => 3000, "Sabun Mandi" => 3500, "Shampoo" => 1000, "Sandal Jepit" => 11000, "Roti" => 12000, "Buku Tulis" => 5500, "Susu Kotak" => 6000, "Minyak Goreng" => 13000, "Ice Cream" => 11000, "Baterai" => 16000);
                            

                            
                        ?>
                        <select name="barang2" id="barang">
                            <?php
                                foreach($barang as $key => $value){
                                    echo '<option value=" '.$key.' ">' .$key. " " .$value. '</option>';
                                }
                            ?>
                        </select>
                        <input type="number" id="jumlah_barang2" name="jumlah_barang2">
                    </td>
                </tr>
                <tr>
                    <td><label for="barang3">Barang 3</label></td>
                    <td>:</td>
                    <td>
                        <?php
                            $barang = array("Mie Instan" => 3000, "Sabun Mandi" => 3500, "Shampoo" => 1000, "Sandal Jepit" => 11000, "Roti" => 12000, "Buku Tulis" => 5500, "Susu Kotak" => 6000, "Minyak Goreng" => 13000, "Ice Cream" => 11000, "Baterai" => 16000);
                            

                            
                        ?>
                        <select name="barang3" id="barang">
                            <?php
                                foreach($barang as $key => $value){
                                    echo '<option value=" '.$key.' ">' .$key. " " .$value. '</option>';
                                }
                            ?>
                        </select>
                        <input type="number" id="jumlah_barang3" name="jumlah_barang3">
                    </td>
                </tr>
                <tr>
                    <td><label for="member">Punya Kartu Member?</label></td>
                    <td>:</td>
                    <td>
                        <input type="radio" id="member" name="member" value="ya">
                        <label for="member">Ya</label>
                        <input type="radio" id="member" name="member" value="tidak">
                        <label for="member">Tidak</label>
                    </td>
                </tr>
                <tr>
                    <td><label for="uang_pembayaran">Uang Pembayaran</label></td>
                    <td>:</td>
                    <td><input type="number" id="uang_pembayaran" name="uang_pembayaran"></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" name="btnSave" value="Simpan">
                        <input type="submit" name="btnCancel" value="Batal">
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <?php
        include "footer.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>
<?php
    }
?>