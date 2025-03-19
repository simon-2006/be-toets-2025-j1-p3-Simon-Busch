<?php require   APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">

    <div class="row">

        <div class="col-1"></div>
        <div class="col-10">        
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
                        <th>Nettowaarde</th>
                        <th>Land</th>
                        <th>Mobiel</th>
                        <th>Leeftijd</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['Zangeres'] as $Zangeres) : ?>
                        <tr>
                            <td><?= $Zangeres->Naam; ?></td>
                            <td><?= $Zangeres->Nettowaarde; ?></td>
                            <td><?= $Zangeres->Land; ?></td>
                            <td><?= $Zangeres->Mobiel; ?></td>
                            <td><?= $Zangeres->Leeftijd; ?></td>
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