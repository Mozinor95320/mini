<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tracabilité frettage</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- JS -->
    <!-- please note: The JavaScript files are loaded in the footer to speed up page construction -->
    <!-- See more here: http://stackoverflow.com/q/2105327/1114320 -->

    <!-- CSS -->
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="<?php echo URL . 'css/bootstrap.min.css'; ?>" rel="stylesheet">
    <link href="<?php echo URL . 'css/style.css'; ?>" rel="stylesheet">

</head>

<body>
    <!-- Navbar -->
    <header class="navbar sticky-top navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="<?php echo URL . 'tracabiltySheets'; ?>">
            <img src="<?php echo URL; ?>img/logo_parker_crop.png" alt="Parker" height="24">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URL . 'tracabiltySheets'; ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URL . 'tracabiltySheets/createTracabiltySheet'; ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"></path>
                        </svg>
                        Créer
                    </a>
                </li>
            </ul>

            <form class="d-flex mx-auto" role="search">
                <input class="form-control me-2 bg-dark" id="search" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>


            <ul class="navbar-nav flex-row flex-wrap ms-md-auto nav-item dropdown">
                <button class="btn btn-link nav-link py-2 px-0 px-lg-2 dropdown-toggle d-flex align-items-center show" id="bd-theme" type="button" aria-expanded="true" data-bs-toggle="dropdown" data-bs-display="static" aria-label="Toggle theme (light)">
                    <i class="bi bi-gear my-1 theme-icon-active"></i>
                    <span class="d-lg-none ms-2" id="bd-theme-text">Toggle theme</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end show __web-inspector-hide-shortcut__" aria-labelledby="bd-theme-text" data-bs-popper="static">
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light" aria-pressed="true">
                            <svg class="bi me-2 opacity-50">
                                <use href="#sun-fill"></use>
                            </svg>
                            Light
                            <svg class="bi ms-auto d-none">
                                <use href="#check2"></use>
                            </svg>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                            <svg class="bi me-2 opacity-50">
                                <use href="#moon-stars-fill"></use>
                            </svg>
                            Dark
                            <svg class="bi ms-auto d-none">
                                <use href="#check2"></use>
                            </svg>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto" aria-pressed="false">
                            <svg class="bi me-2 opacity-50">
                                <use href="#circle-half"></use>
                            </svg>
                            Auto
                            <svg class="bi ms-auto d-none">
                                <use href="#check2"></use>
                            </svg>
                        </button>
                    </li>
                </ul>
            </ul>
        </div>
    </header>