<!DOCTYPE html>
<html lang="en">
<head>
    <?= view('_partials/head') ?>
</head>
<body>
    <div id="wrapper">
        <?= view('_partials/sidebar') ?>

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?= view('_partials/topbar') ?>

                <div class="container-fluid">
                    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
                </div>
            </div>

            <?= view('_partials/footer') ?>
        </div>
    </div>

    <?= view('_partials/js') ?>
</body>
</html>