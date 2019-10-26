<!-- Load Header -->
<?php require_once('header.php'); ?>

<!-- Button Tambah Biodata -->
<div class="row m-3">
    <div class="col text-right">
        <a href="view-tambahbuku.php" class="btn btn-primary">Tambah Buku</a>
    </div>
</div>

<!-- Content List Biodata -->
<div class="row m-3">
    <div class="col">
        <div class="table-responsive">
            <table class="table table-bordered">
                <!-- Table Header -->
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Book  Title</th>
                        <th>Stock</th>
                        <th>Deskripsir</th>
                        <th>Category</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach (geBuku() as $data) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['name']; ?></td>
                            <td><?= $data['stok']; ?></td>
                            <td><?= $data['deskripsi']; ?></td>
                            <td><?= $data['category.id']; ?></td>
                            <td>
                                <a href="view-editbuku.php?id=<?= $data['id']; ?>" class="badge badge-primary">EDIT</a>
                                <a href="ctrlhapusbuku.php?id=<?= $data['id']; ?>" class="badge badge-danger" onclick="return confirm('Anda yakin ingin menghapus?');">DELETE</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Load Footer -->
<?php require_once('header.php'); ?>