<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MINI</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- JS -->
    <!-- please note: The JavaScript files are loaded in the footer to speed up page construction -->
    <!-- See more here: http://stackoverflow.com/q/2105327/1114320 -->

    <!-- CSS -->
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="<?php echo URL; ?>css/style.css" rel="stylesheet">

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="<?php echo URL; ?>tracabiltySheets">
            <img src="public/img/logo parker_crop.png" alt="Parker" height="24">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo URL; ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URL; ?>home/exampleone">subpage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URL; ?>home/exampletwo">subpage 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URL; ?>tracabiltySheets">tracabiltySheets</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2 bg-dark" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>

        </div>
    </nav>