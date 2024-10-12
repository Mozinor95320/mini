<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MINI</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- JS -->
    <!-- please note: The JavaScript files are loaded in the footer to speed up page construction -->
    <!-- See more here: http://stackoverflow.com/q/2105327/1114320 -->

    <!-- CSS -->
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="<?php echo URL; ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo URL; ?>css/style.css" rel="stylesheet">

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar sticky-top navbar-expand-lg">
        <a class="navbar-brand" href="<?php echo URL . 'tracabiltySheets'?>">
            <img src="<?php echo URL; ?>img/logo_parker_crop.png" alt="Parker" height="24">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar-dark" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo URL . 'tracabiltySheets'?>">Home</a>
                </li>
                <li>
                    <a class="nav-link" href="<?php echo URL . 'tracabiltySheets/createTracabiltySheet'?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"></path>
                        </svg>
                        Créer
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <button class="btn btn-link nav-link dropdown-toggle" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static" aria-label="Toggle theme (light)">
                        <i class="bi bi-gear my-1 theme-icon-active"></i>
                        <span class="d-lg-none ms-2" id="bd-theme-text">Toggle theme</span>
                    </button>
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