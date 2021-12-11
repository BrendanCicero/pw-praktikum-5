<?= $this->extend('/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Tentang Website</h1>
            <p>Website ini digunakan untuk memonitor IoT di kantor, di dalam website ini terdapat device yang tersedia di dalam kantor dan beserta detail dari device tersebut. Terdapat dua menu yaitu :</p>
            <ol>
                <li>Devices</li>
                <li>Devices Detail</li>
            </ol>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>