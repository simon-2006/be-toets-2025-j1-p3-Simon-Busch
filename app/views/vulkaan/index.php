<?php require   APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">

    <div class="row">

        <div class="col-1"></div>
        <div class="col-10 text-center text-warning">        
            <h3><?= $data['title']; ?></h3>
        </div>
        <div class="col-1"></div>
    </div>
    <!-- begin tabel -->
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Naam</th>
                        <th>Hoogte</th>
                        <th>Land</th>
                        <th>JaarLaatsteUitbarsting</th>
                        <th>AantalSlachtoffers </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['Vulkaan'] as $Vulkaan) : ?>
                        <tr>
                            <td><?= $Vulkaan->Naam; ?></td>
                            <td><?= $Vulkaan->Hoogte; ?></td>
                            <td><?= $Vulkaan->Land; ?></td>
                            <td><?= $Vulkaan->JaarLaatsteUitbarsting; ?></td>
                            <td><?= $Vulkaan->AantalSlachtoffers; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            
            <a href="<?= URLROOT; ?>/homepages/index"><i class="bi bi-arrow-left"></i></a>
        </div>
        <div class="col-1"></div>
    </div>
    <!-- eind tabel -->

<?php require   APPROOT . '/views/includes/footer.php'; ?>