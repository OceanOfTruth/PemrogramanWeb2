
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Belanja</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
    <br>
    <br>
        <div class="row">
            <div class="col-md-8">
                <h2 class="mt-2 mb-2">Belanja Online</h2>   
                 <hr>
                <form action="" method="POST">        
                    <div class="form-group row">
                        <label for="Customer" class="col-4 col-form-label">Customer</label> 
                        <div class="col-8">
                        <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label> 
                        <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk0" type="radio" class="custom-control-input" value="TV"> 
                            <label for="produk0" class="custom-control-label">TV</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk1" type="radio" class="custom-control-input" value="Kulkas"> 
                            <label for="produk1" class="custom-control-label">KULKAS</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
                            <label for="produk2" class="custom-control-label">MESIN CUCI</label>
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Jumlah" class="col-4 col-form-label">Jumlah</label> 
                        <div class="col-8">
                        <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>



            <div class="col-md-4">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active font-weight-bold">Daftar Harga</a>
                    <div class="list-group-item">
                        <a>TV : Rp 4.200.000</a>
                    </div>
                    <div class="list-group-item">
                        <a>Kulkas : Rp 3.100.000</a>
                    </div>
                    <div class="list-group-item">
                        <a>Mesin Cuci : Rp 3.800.000</a>
                    </div>
                    <a href="#" class="list-group-item list-group-item-action active font-weight-bold">Harga Dapat Berubah Setiap Saat</a>
                </div>
            </div>

            <div class="col-md-12">
            <?php require_once "proses.php"; ?>

            <!-- --------------------------- -->
                <hr>
                <p>Nama Customer : <?= $customer?></p>
                <p>Produk Pilihan : <?= $produk?></p>
                <p>Jumlah Beli : <?= $jumlah?></p>
                <p>Total Belanja : <?= 'Rp. '.number_format($total, 0, ',', '.'); ?></p>
            </div>

            




        </div>
    </div>
</body>