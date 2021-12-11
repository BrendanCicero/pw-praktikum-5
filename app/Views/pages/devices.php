<?= $this->extend('/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Device</h1>
            <table class="table">
                <thead>
                    <tr class="table-info">
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Status</th>
                        <th scope="col">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($devices as $d) : ?>
                        <tr class="table-warning">
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $d['nama']; ?></td>
                            <td><img src="/img/<?= $d['gambar']; ?>" alt="" class="gambar"></td>
                            <td><?= $d['brand']; ?></td>
                            <td><?= $d['kuantitas']; ?></td>
                            <td>
                                <a href="" class="btn btn-success">On</a>
                                <a href="" class="btn btn-danger">Off</a>
                            </td>
                            <td>
                                <a href="/pages/<?= $d['slug']; ?>" class="btn btn-warning">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>