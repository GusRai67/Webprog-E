<?php
    // transaksi penjualan produk
    $namaproduk = "Baju tidur sukabumi";
    $harga_satuan= 250000;
    $qty = 4; 

    // hitung harga yang harus di bayar 

    $total_harga=$harga_satuan*$qty;

    echo "<br>Nama Produk: " . $namaproduk;
    echo "<br>Harga Satuan: " . $harga_satuan;
    echo "<br>JUmlah Barang: " . $qty;
    echo "<br>Total Harga: " . $total_harga;

    // terdapat diskon 5% jika sub total lebih dari 500.000

    $subtotal = $harga_satuan*$qty;
    if($subtotal >= 500000){
        $diskon = $subtotal * 5/100;
    }else{
        $diskon = 0;
    }
            $total = $subtotal - $diskon;

    echo "<br>Diskon: " . $diskon;
    echo "<br>Total Bayar: Rp " . $total;
    