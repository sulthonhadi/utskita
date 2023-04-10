<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center">
            <span class="d-none d-lg-block">Anggun_uts</span>
        </a>
    </div>
    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
            <li class="nav-item d-block " style="margin-right: 2em;">
                <a class="btn btn-primary mr-3" href="#">
                    Jual Barang
                </a>
            </li><!-- End Search Icon-->

            <li class="nav-item d-block " style="margin-right: 2em;">
                <a href="#" class="btn btn-primary d-block">
                    Tambah Barang
                </a>
            </li><!-- End Search Icon-->

        </ul>
    </nav><!-- End Icons Navigation -->
</header>
<main id="main" class="main">
    <div class="row">
        <div class="col-12">
            <div class="section">
                <div class="row justify-content-center">
                    <div class="col-7">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Jual Barang
                                </h5>
                                <form action="<?= base_url() . 'get_data' ?>" method="post">
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-4 col-form-label">Kode Barang</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" name="Jkode_barang">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-5">
                                            <button type="submit" class="btn btn-primary">check barang</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <section class="section">
                                <div class="row justify-content-center">
                                    <div class="col-7">
                                        <div class="card">
                                            <div class="card-body">
                                                <?php
                                                foreach ($update_databarang as $key) {
                                                ?>
                                                    <form method="POST" action="<?= base_url() . 'update_barang' ?>">
                                                        <div class="row mb-3 mt-3">
                                                            <label for="inputText" class="col-sm-4 col-form-label">Kode Barang</label>
                                                            <div class="col-sm-8">
                                                                <span>
                                                                    <?php echo $key->kode_barang ?>
                                                                </span>
                                                                <input type="hidden" class="form-control" name="Ukode_barang" value="<?php echo $key->kode_barang ?>">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputText" class="col-sm-4 col-form-label">Nama Barang</label>
                                                            <div class="col-sm-8">
                                                                <span>
                                                                    <?php echo $key->nama_barang ?>
                                                                </span>
                                                                <input type="hidden" class="form-control" name="Unama_barang" value="<?php echo $key->nama_barang ?>">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-sm-8">
                                                                <input type="hidden" class="form-control" name="Uharga_barang" value="<?php echo $key->harga_barang ?>">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputText" class="col-sm-4 col-form-label">Harga Jual</label>
                                                            <div class="col-sm-8">
                                                                <span>
                                                                    <?php echo $key->harga_jual ?>
                                                                </span>
                                                                <input type="hidden" class="form-control" name="Uharga_jual" value="<?php echo $key->harga_jual ?>">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputText" class="col-sm-4 col-form-label">Stok</label>
                                                            <div class="col-sm-8">
                                                                <span>
                                                                    <?php echo $key->stok ?>
                                                                </span>
                                                                <input type="hidden" class="form-control" name="Ustok" value="<?php echo $key->stok ?>">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-sm-8">
                                                                <input type="hidden" class="form-control" name="Ukategori" value="<?php echo $key->kategori ?>">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputText" class="col-sm-4 col-form-label">Total Barang</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" name="Utotalbarang">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">

                                                            <div class="col-sm-5">
                                                                <button type="submit" class="btn btn-primary">Jual</button>
                                                            </div>
                                                        </div>
                                                    </form><!-- End General Form Elements -->
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>