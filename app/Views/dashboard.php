<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>CafeId</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/images/favicon.png') ?>">
    <link href="<?= base_url('assets/vendor/jqvmap/css/jqvmap.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/chartist/css/chartist.min.css') ?>">
    <link href="<?= base_url('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">

    <style>
        footer {
            background-color: #f9e6d9; /* Warna latar belakang */
            padding: 20px;
            margin-top: 20px; /* Jarak atas footer */
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer-left, .footer-center, .footer-right {
            flex: 1;
        }

        .footer-left h1 {
            font-size: 24px;
            margin: 0;
        }

        .footer-center h2, .footer-right h2 {
            font-size: 18px;
            margin: 10px 0;
        }

        .footer-center ul {
            list-style-type: none;
            padding: 0;
        }

        .footer-center li {
            margin: 5px 0;
        }~

        .contact-icons a {
            margin-right: 10px;
            text-decoration: none;
            color: #000;
        }

    </style>

</head>

<body>
    <?php include(APPPATH . 'Views/layouts/navbar.php'); ?>
    <div class="container">
        <h1>Welcome to CafeId Dashboard</h1>
        <!-- Konten lainnya -->
    </div>
    <?php include(APPPATH . 'Views/layouts/footer.php'); ?>
</body>

</html>