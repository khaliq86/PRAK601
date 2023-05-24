<div class="container">
    <div class="row">
        <div class="col">
            <h1>Profil Mahasiswa</h1>
            <ul class="list-group list-group-flush fs-5" style="border-radius: 10px;">
                <li class="list-group-item">
                    Nama :
                    <?php echo $nama ?>
                </li>
                <li class="list-group-item">
                    NIM :
                    <?php echo $nim ?>
                </li>
                <li class="list-group-item">
                    Jurusan :
                    <?php echo $prodi ?>
                </li>
                <li class="list-group-item">
                    Hobi :
                    <?php echo $hobi ?>
                </li>
                <li class="list-group-item">
                    skill :
                    <?php echo $skill ?>
                </li>
            </ul>
            <div class="d-grid gap-2 d-md-block">
                <a href="<?= base_url('/') ?>" class="btn btn-outline-primary">Beranda</a>
            </div>
        </div>
    </div>
</div>