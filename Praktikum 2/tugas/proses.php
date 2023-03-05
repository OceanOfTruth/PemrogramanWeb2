<?php
                $message = '';
                error_reporting(0);
                if(isset($_POST['submit'])){
                    $customer = $_POST['customer'];
                    $produk = $_POST['produk'];
                    $jumlah = $_POST['jumlah'];


                    if($produk == 'TV'){
                        $total = 4200000 * $jumlah;
                    }else if($produk == 'Kulkas'){
                        $total = 3100000 * $jumlah;
                    }else if($produk == 'Mesin Cuci'){
                        $total = 3800000 * $jumlah;
                    }else{
                        $totalhara = $harga * $jumlah;
                    }
                }
?>