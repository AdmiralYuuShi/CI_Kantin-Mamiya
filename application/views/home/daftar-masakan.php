<div class="row justify-content-end home mt-3">
    <div class="col-md-9 bg-light col-style pt-2 pb-2">
        <h3>Semua Masakan</h3><hr>
        <div class="row">
        <?php foreach($getMasakan as $setMasakan): ?>
            <div class="col-md-4 pt-2">
            <div class="card text-center">
                <h4 class="card-title mt-2"><?= $setMasakan->nama_masakan ?></h4>
                <p><?= $setMasakan->type ?></p>
                <div class="card-body">
                <img width="50%" src="<?= base_url('/assets/img/default.png') ?>" alt="">
                    <p class="card-text">Harga Rp <?= $setMasakan->harga ?></p>
                    <p class="card-text">
                        <?php 
                            $status = $setMasakan->status_masakan;
                            if($status == 'Tersedia'){
                        ?>
                        <div class="alert alert-success" role="alert">
                            Tersedia
                        </div>
                        <a href="#" class="btn btn-primary">Pesan</a>
                        <?php
                            }else{
                            ?>
                        <div class="alert alert-danger" role="alert">
                            Habis
                        </div>
                        <button type="button" class="btn btn-outline-secondary" disabled>Tidak Tersedia</button>
                            <?php
                            }
                        ?>
                    </p>
                </div>
            </div>
            </div>
        <?php endforeach ?>
        </div>
    </div>
</div>