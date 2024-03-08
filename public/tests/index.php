<!doctype html>
<?php


// foreach (scandir('./database/seeders') as $filename) {
//     if (preg_match('/^(Custom.*TableSeeder)\.php$/', $filename, $matches)) {
//         $seeds[] = $matches[1];
//     }
// }

// clover.xml
// cobertura.xml
// coverage.php
// coverage.txt
// crap4j.xml
// html
// junit.xml
// teamcity.txt
// testdox.html
// testdox.txt
// xml
$packages = [
    'app' => [
        'label' => 'App Test Docs',
        'docs' => [
            'clover.xml' => ['type' => 'file'],
            'cobertura.xml' => ['type' => 'file'],
            'coverage.php' => ['type' => 'file'],
            // 'coverage.txt' => ['type' => 'file'],
            'crap4j.xml' => ['type' => 'file'],
            'junit.xml' => ['type' => 'file'],
            'teamcity.txt' => ['type' => 'file'],
            'testdox.html' => ['type' => 'file'],
            'testdox.txt' => ['type' => 'file'],
            'html' => ['type' => 'folder'],
            'xml/index.xml' => ['type' => 'folder'],
        ],
    ],
    'playground' => [
        'label' => 'Playground Test Docs',
        'docs' => [
            'clover.xml' => ['type' => 'file'],
            'cobertura.xml' => ['type' => 'file'],
            'coverage.php' => ['type' => 'file'],
            // 'coverage.txt' => ['type' => 'file'],
            'crap4j.xml' => ['type' => 'file'],
            'junit.xml' => ['type' => 'file'],
            'teamcity.txt' => ['type' => 'file'],
            'testdox.html' => ['type' => 'file'],
            'testdox.txt' => ['type' => 'file'],
            'html' => ['type' => 'folder'],
            'xml/index.xml' => ['type' => 'folder'],
        ],
    ],
    'playground-admin' => [
        'label' => 'Playground Admin Test Docs',
        'docs' => [
            'clover.xml' => ['type' => 'file'],
            'cobertura.xml' => ['type' => 'file'],
            'coverage.php' => ['type' => 'file'],
            // 'coverage.txt' => ['type' => 'file'],
            'crap4j.xml' => ['type' => 'file'],
            'junit.xml' => ['type' => 'file'],
            'teamcity.txt' => ['type' => 'file'],
            'testdox.html' => ['type' => 'file'],
            'testdox.txt' => ['type' => 'file'],
            'html' => ['type' => 'folder'],
            'xml/index.xml' => ['type' => 'folder'],
        ],
    ],
    'playground-admin-api' => [
        'label' => 'Playground Admin API Test Docs',
        'docs' => [
            'clover.xml' => ['type' => 'file'],
            'cobertura.xml' => ['type' => 'file'],
            'coverage.php' => ['type' => 'file'],
            // 'coverage.txt' => ['type' => 'file'],
            'crap4j.xml' => ['type' => 'file'],
            'junit.xml' => ['type' => 'file'],
            'teamcity.txt' => ['type' => 'file'],
            'testdox.html' => ['type' => 'file'],
            'testdox.txt' => ['type' => 'file'],
            'html' => ['type' => 'folder'],
            'xml/index.xml' => ['type' => 'folder'],
        ],
    ],
    'playground-admin-resource' => [
        'label' => 'Playground Admin Resource Test Docs',
        'docs' => [
            'clover.xml' => ['type' => 'file'],
            'cobertura.xml' => ['type' => 'file'],
            'coverage.php' => ['type' => 'file'],
            // 'coverage.txt' => ['type' => 'file'],
            'crap4j.xml' => ['type' => 'file'],
            'junit.xml' => ['type' => 'file'],
            'teamcity.txt' => ['type' => 'file'],
            'testdox.html' => ['type' => 'file'],
            'testdox.txt' => ['type' => 'file'],
            'html' => ['type' => 'folder'],
            'xml/index.xml' => ['type' => 'folder'],
        ],
    ],
    'playground-auth' => [
        'label' => 'Playground Auth Test Docs',
        'docs' => [
            'clover.xml' => ['type' => 'file'],
            'cobertura.xml' => ['type' => 'file'],
            'coverage.php' => ['type' => 'file'],
            // 'coverage.txt' => ['type' => 'file'],
            'crap4j.xml' => ['type' => 'file'],
            'junit.xml' => ['type' => 'file'],
            'teamcity.txt' => ['type' => 'file'],
            'testdox.html' => ['type' => 'file'],
            'testdox.txt' => ['type' => 'file'],
            'html' => ['type' => 'folder'],
            'xml/index.xml' => ['type' => 'folder'],
        ],
    ],
    'playground-blade' => [
        'label' => 'Playground Blade Test Docs',
        'docs' => [
            'clover.xml' => ['type' => 'file'],
            'cobertura.xml' => ['type' => 'file'],
            'coverage.php' => ['type' => 'file'],
            // 'coverage.txt' => ['type' => 'file'],
            'crap4j.xml' => ['type' => 'file'],
            'junit.xml' => ['type' => 'file'],
            'teamcity.txt' => ['type' => 'file'],
            'testdox.html' => ['type' => 'file'],
            'testdox.txt' => ['type' => 'file'],
            'html' => ['type' => 'folder'],
            'xml/index.xml' => ['type' => 'folder'],
        ],
    ],
    'playground-cms' => [
        'label' => 'Playground CMS Test Docs',
        'docs' => [
            'clover.xml' => ['type' => 'file'],
            'cobertura.xml' => ['type' => 'file'],
            'coverage.php' => ['type' => 'file'],
            // 'coverage.txt' => ['type' => 'file'],
            'crap4j.xml' => ['type' => 'file'],
            'junit.xml' => ['type' => 'file'],
            'teamcity.txt' => ['type' => 'file'],
            'testdox.html' => ['type' => 'file'],
            'testdox.txt' => ['type' => 'file'],
            'html' => ['type' => 'folder'],
            'xml/index.xml' => ['type' => 'folder'],
        ],
    ],
    'playground-cms-api' => [
        'label' => 'Playground CMS API Test Docs',
        'docs' => [
            'clover.xml' => ['type' => 'file'],
            'cobertura.xml' => ['type' => 'file'],
            'coverage.php' => ['type' => 'file'],
            // 'coverage.txt' => ['type' => 'file'],
            'crap4j.xml' => ['type' => 'file'],
            'junit.xml' => ['type' => 'file'],
            'teamcity.txt' => ['type' => 'file'],
            'testdox.html' => ['type' => 'file'],
            'testdox.txt' => ['type' => 'file'],
            'html' => ['type' => 'folder'],
            'xml/index.xml' => ['type' => 'folder'],
        ],
    ],
    'playground-cms-resource' => [
        'label' => 'Playground CMS Resource Test Docs',
        'docs' => [
            'clover.xml' => ['type' => 'file'],
            'cobertura.xml' => ['type' => 'file'],
            'coverage.php' => ['type' => 'file'],
            // 'coverage.txt' => ['type' => 'file'],
            'crap4j.xml' => ['type' => 'file'],
            'junit.xml' => ['type' => 'file'],
            'teamcity.txt' => ['type' => 'file'],
            'testdox.html' => ['type' => 'file'],
            'testdox.txt' => ['type' => 'file'],
            'html' => ['type' => 'folder'],
            'xml/index.xml' => ['type' => 'folder'],
        ],
    ],
    'playground-http' => [
        'label' => 'Playground Http Test Docs',
        'docs' => [
            'clover.xml' => ['type' => 'file'],
            'cobertura.xml' => ['type' => 'file'],
            'coverage.php' => ['type' => 'file'],
            // 'coverage.txt' => ['type' => 'file'],
            'crap4j.xml' => ['type' => 'file'],
            'junit.xml' => ['type' => 'file'],
            'teamcity.txt' => ['type' => 'file'],
            'testdox.html' => ['type' => 'file'],
            'testdox.txt' => ['type' => 'file'],
            'html' => ['type' => 'folder'],
            'xml/index.xml' => ['type' => 'folder'],
        ],
    ],
    'playground-login-blade' => [
        'label' => 'Playground Login Blade Test Docs',
        'docs' => [
            'clover.xml' => ['type' => 'file'],
            'cobertura.xml' => ['type' => 'file'],
            'coverage.php' => ['type' => 'file'],
            // 'coverage.txt' => ['type' => 'file'],
            'crap4j.xml' => ['type' => 'file'],
            'junit.xml' => ['type' => 'file'],
            'teamcity.txt' => ['type' => 'file'],
            'testdox.html' => ['type' => 'file'],
            'testdox.txt' => ['type' => 'file'],
            'html' => ['type' => 'folder'],
            'xml/index.xml' => ['type' => 'folder'],
        ],
    ],
    'playground-matrix' => [
        'label' => 'Playground Matrix Test Docs',
        'docs' => [
            'clover.xml' => ['type' => 'file'],
            'cobertura.xml' => ['type' => 'file'],
            'coverage.php' => ['type' => 'file'],
            // 'coverage.txt' => ['type' => 'file'],
            'crap4j.xml' => ['type' => 'file'],
            'junit.xml' => ['type' => 'file'],
            'teamcity.txt' => ['type' => 'file'],
            'testdox.html' => ['type' => 'file'],
            'testdox.txt' => ['type' => 'file'],
            'html' => ['type' => 'folder'],
            'xml/index.xml' => ['type' => 'folder'],
        ],
    ],
    'playground-matrix-api' => [
        'label' => 'Playground Matrix API Test Docs',
        'docs' => [
            'clover.xml' => ['type' => 'file'],
            'cobertura.xml' => ['type' => 'file'],
            'coverage.php' => ['type' => 'file'],
            // 'coverage.txt' => ['type' => 'file'],
            'crap4j.xml' => ['type' => 'file'],
            'junit.xml' => ['type' => 'file'],
            'teamcity.txt' => ['type' => 'file'],
            'testdox.html' => ['type' => 'file'],
            'testdox.txt' => ['type' => 'file'],
            'html' => ['type' => 'folder'],
            'xml/index.xml' => ['type' => 'folder'],
        ],
    ],
    'playground-matrix-resource' => [
        'label' => 'Playground Matrix Resource Test Docs',
        'docs' => [
            'clover.xml' => ['type' => 'file'],
            'cobertura.xml' => ['type' => 'file'],
            'coverage.php' => ['type' => 'file'],
            // 'coverage.txt' => ['type' => 'file'],
            'crap4j.xml' => ['type' => 'file'],
            'junit.xml' => ['type' => 'file'],
            'teamcity.txt' => ['type' => 'file'],
            'testdox.html' => ['type' => 'file'],
            'testdox.txt' => ['type' => 'file'],
            'html' => ['type' => 'folder'],
            'xml/index.xml' => ['type' => 'folder'],
        ],
    ],
    'playground-site-blade' => [
        'label' => 'Playground Site Blade Test Docs',
        'docs' => [
            'clover.xml' => ['type' => 'file'],
            'cobertura.xml' => ['type' => 'file'],
            'coverage.php' => ['type' => 'file'],
            // 'coverage.txt' => ['type' => 'file'],
            'crap4j.xml' => ['type' => 'file'],
            'junit.xml' => ['type' => 'file'],
            'teamcity.txt' => ['type' => 'file'],
            'testdox.html' => ['type' => 'file'],
            'testdox.txt' => ['type' => 'file'],
            'html' => ['type' => 'folder'],
            'xml/index.xml' => ['type' => 'folder'],
        ],
    ],
    'playground-test' => [
        'label' => 'Playground "Test" Test Docs',
        'docs' => [
            'clover.xml' => ['type' => 'file'],
            'cobertura.xml' => ['type' => 'file'],
            'coverage.php' => ['type' => 'file'],
            // 'coverage.txt' => ['type' => 'file'],
            'crap4j.xml' => ['type' => 'file'],
            'junit.xml' => ['type' => 'file'],
            'teamcity.txt' => ['type' => 'file'],
            'testdox.html' => ['type' => 'file'],
            'testdox.txt' => ['type' => 'file'],
            'html' => ['type' => 'folder'],
            'xml/index.xml' => ['type' => 'folder'],
        ],
    ],
];
?>
<html lang="en" data-bs-theme="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Playground Docs</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" rel="stylesheet">
    <script src="https://unpkg.com/vue@3" crossorigin="anonymous"></script>
    <link href="/favicon.ico" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Nunito, sans-serif;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Playground</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">
                            Home
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main role="main" class="flex-shrink-0">
        <nav aria-label="breadcrumb" class="m-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/home">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="/login">Login</a>
                </li>
            </ol>
        </nav>
        <div class="container alerts-container">
            <div class="row justify-content-center" id="alerts">
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">

                <?php foreach($packages as $key => $package): ?>
                <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 mb-3">
                    <div class="card">
                        <?php if (!empty($package['label']) && is_string($package['label'])): ?>
                        <div class="card-header"><?= $package['label'] ?></div>
                        <?php endif; ?>
                        <?php if (!empty($package['docs']) && is_array($package['docs'])): ?>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <?php foreach($package['docs'] as $key_doc => $doc): ?>
                                <?php if (!empty($doc['type']) && in_array($doc['type'], ['file','folder'])): ?>
                                <li class="list-group-item">
                                    <a href="<?= sprintf('/%1$s/%2$s/%3$s', 'tests', $key, $key_doc) ?>">
                                    <?= $key_doc ?>
                                    </a>
                                </li>
                                <?php else: ?>
                                <li class="list-group-item"><?= $key_doc ?></li>
                                <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </main>

    <footer class="mt-auto py-3">
        <nav class="nav nav-pills flex-column flex-sm-row">
            <span class="flex-sm-fill text-center navbar-text">
                Playground Docs
            </span>
        </nav>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="/vendor/playground-blade.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"
        integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>