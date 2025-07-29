<script>
window.print();
</script>
<h3>The Special Food</h3>
<p> Alamat Toko : Jl. Kenangan No.15</p> <br>
Penerima 
<p>Nama     : <?php echo  $_SESSION["user"]["name"] ?></p>
<p>Email    : <?php echo $_SESSION["user"]["email"] ?></p>
<p>Alamat   : <?php echo $_SESSION["user"]["alamat"] ?></p>
<?php
if (isset($_GET['kode_produk']) && isset($_GET['jumlah'])) {
    $kode_produk=$_GET['kode_produk'];
    $jumlah=$_GET['jumlah'];
    include 'database.php';
    $sql= "select * from produk where kode_produk='$kode_produk'";
    $query = mysqli_query($kon,$sql);
    $data = mysqli_fetch_array($query);
    $kode_produk=$data['kode_produk'];
    $nama_produk=$data['nama'];
    $harga=$data['harga'];
    $stok=$data['stok'];
}else {
    $kode_produk="";
    $jumlah=0;
}
?>

<div class="row">
    <table class="table table-bordered" border="3">
        <tr> <br><br> <center>
            <th width="1%"><center>Kode</th></center>
            <th width="1%"><center>Nama</th></center>
            <th width="1%"><center>Harga</th></center>
            <th width="1%"><center>QTY</th></center>
            <th width="1%"><center>Sub Total</th></center>
        </tr>
        <tbody>
        <?php
            $no=0;
            $sub_total=0;
            $total=0;
            $total_berat=0;
            if(!empty($_SESSION["keranjang_belanja"])):
            foreach ($_SESSION["keranjang_belanja"] as $item):
                $no++;
                $sub_total = $item["jumlah"]*$item['harga'];
                $total+=$sub_total;
        ?>
            <input type="hidden" name="kode_produk[]" class="kode_produk" value="<?php echo $item["kode_produk"]; ?>"/>
            <tr>
                <td><center><?php echo $item["kode_produk"]; ?></td></center>
                <td><center><?php echo $item["nama_produk"]; ?></td></center>
                <td><center>Rp. <?php echo number_format($item["harga"],0,',','.');?> </td></center>
                <td> 
                <center><input type="number" min="1" value="<?php echo $item["jumlah"]; ?>" class="form-control" id="jumlah<?php echo $no; ?>" name="jumlah[]" ></center>
              </td>
                <td><center>Rp. <?php echo number_format($sub_total,0,',','.');?> </td></center>
                    <form method="get">
                        <input type="hidden" name="kode_produk"  value="<?php echo $item['kode_produk']; ?>" class="form-control">
                        <input type="hidden" name="halaman"  value="keranjang-belanja" class="form-control">
                        <input type="hidden" name="jumlah" value="<?php echo $item["jumlah"]; ?>" id="jumlaha<?php echo $no; ?>" value="" class="form-control">
                    </form>
                </td>
            </tr>
        <?php 
            endforeach;
            endif;
        ?>
        </tbody> 
    </table> 
<h4>Total Pembayaran Rp. <?php echo number_format($total,0,',','.');?> </h4> <br> <br>
</div>
</body>