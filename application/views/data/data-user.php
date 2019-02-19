<div class="row justify-content-end home mt-3">
    <div class="col-md-9 bg-light col-style pt-2 pb-2">
        <h3 class="text-center">DATA USER</h3><hr>
       <?= form_open('data/inputUser'); ?>
        <div class="row">
            <div class="col-md-4">
            <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap">
            </div>
            <div class="col-md-3">
            <input name="username" type="text" class="form-control" placeholder="Username">
            </div>
            <div class="col-md-3">
            <input name="password" type="password" class="form-control" placeholder="Password">
            </div>
            <div class="col-md-2">
            <input name="tambah" class="btn btn-success" type="submit" value="Tambah">
            </div>
        <?= form_close(); ?>
        </div>
        </form>
        <?php if($this->session->flashdata('info')): ?>
            <div class="alert alert-success mt-3" role="alert">
            <?= $this->session->flashdata('info'); ?>
            </div>
        <?php endif; ?>
        <table class="table table-striped table-inverse table-responsive ml-4 mt-3">
            <thead class="thead-inverse text-center">
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Level</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    foreach($user as $setUser): 
                    ?>
                    <tr>
                        <td scope="row"><?= $no++ ?></td>
                        <td><?= $setUser->id_user ?></td>
                        <td><?= $setUser->nama_user ?></td>
                        <td><?= $setUser->username ?></td>
                        <td><?= $setUser->password ?></td>
                        <td><?= $setUser->id_level ?></td>
                        <td><a href="#" class="text-primary">UBAH</a> || 
                            <a href="#" class="text-danger">HAPUS</a></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
        </table>
    </div>
</div>