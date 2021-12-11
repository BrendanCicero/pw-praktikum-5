<?= $this->extend('/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Device Detail</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID</th>
                        <th scope="col">Device ID</th>
                        <th scope="col">Defect</th>
                        <th scope="col">Origin</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <tr class="table-success">
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $devices['id']; ?></td>
                        <?php if ($devices['id'] == 1) { ?>
                            <td><?= $detail[0]['device_id']; ?></td>
                            <td><?= $detail[0]['defect']; ?></td>
                            <td><?= $detail[0]['origin']; ?></td>
                        <?php } ?>
                        <?php if ($devices['id'] == 2) { ?>
                            <td><?= $detail[1]['device_id']; ?></td>
                            <td><?= $detail[1]['defect']; ?></td>
                            <td><?= $detail[1]['origin']; ?></td>
                        <?php } ?>
                        <?php if ($devices['id'] == 3) { ?>
                            <td><?= $detail[2]['device_id']; ?></td>
                            <td><?= $detail[2]['defect']; ?></td>
                            <td><?= $detail[2]['origin']; ?></td>
                        <?php } ?>
                    </tr>
                </tbody>
            </table>
            <a href="/pages/devices">Kembali</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>