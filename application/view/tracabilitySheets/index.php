<div class="container mt-4">
    <div class="row mb-3">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <!--Choice of the current page -->
                <ul class="pagination">
                    <?php if ($page > 1): ?>
                        <li class="page-item">
                            <a class="page-link" href="<?php echo URL . 'tracabilitySheets/index/' . htmlspecialchars($page - 1, ENT_QUOTES, 'UTF-8'); ?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php
                    // Determine the start and end pages to display
                    $start = max(1, $page - 2); // 2 pages before the active page
                    $end = min($totalPages, $page + 2); // 2 pages after the active page

                    // Display the page links
                    for ($i = $start; $i <= $end; $i++): ?>
                        <li class="page-item<?php if ($i == $page) echo " active"; ?>">
                            <a class="page-link" href="<?php echo URL . 'tracabilitySheets/index/' . htmlspecialchars($i, ENT_QUOTES, 'UTF-8'); ?>">
                                <?php echo $i; ?>
                            </a>
                        </li>
                    <?php endfor; ?>

                    <?php if ($page < $totalPages): ?>
                        <li class="page-item">
                            <a class="page-link" href="<?php echo URL . 'tracabilitySheets/index/' . htmlspecialchars($page + 1, ENT_QUOTES, 'UTF-8'); ?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>

                <!--Input number of items per page -->

                <form action="<?php echo URL . 'tracabilitySheets/index/' ?>" method="POST">
                    <input type="hidden" name="limitListTracabilitySheet" id="limitListTracabilitySheet" value="<?php echo $limit; ?>"> <!-- Champ caché -->

                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" id="bd-theme" type="button" aria-expanded="true" data-bs-toggle="dropdown" data-bs-display="static" aria-label="itemPerPage">
                            <i class="bi bi-list-ol my-1 theme-icon-active"></i>
                            <?php echo " " . $limit; ?>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="itemPerPage" data-bs-popper="static">
                            <li>
                                <button type="submit" class="dropdown-item d-flex align-items-center <?php echo ($limit == 10) ? 'active' : ''; ?>" onclick="setLimit(10)" aria-pressed="<?php echo ($limit == 10) ? 'true' : 'false'; ?>">
                                    10
                                </button>
                            </li>
                            <li>
                                <button type="submit" class="dropdown-item d-flex align-items-center <?php echo ($limit == 20) ? 'active' : ''; ?>" onclick="setLimit(20)" aria-pressed="<?php echo ($limit == 20) ? 'true' : 'false'; ?>">
                                    20
                                </button>
                            </li>
                            <li>
                                <button type="submit" class="dropdown-item d-flex align-items-center <?php echo ($limit == 50) ? 'active' : ''; ?>" onclick="setLimit(50)" aria-pressed="<?php echo ($limit == 50) ? 'true' : 'false'; ?>">
                                    50
                                </button>
                            </li>
                            <li>
                                <button type="submit" class="dropdown-item d-flex align-items-center <?php echo ($limit == 100) ? 'active' : ''; ?>" onclick="setLimit(100)" aria-pressed="<?php echo ($limit == 100) ? 'true' : 'false'; ?>">
                                    100
                                </button>
                            </li>
                        </ul>
                    </div>
                </form>

                <script>
                    function setLimit(value) {
                        document.getElementById('limitListTracabilitySheet').value = value; // Met à jour la valeur du champ caché
                    }
                </script>




                <!--Filter by -->

                <form action="<?php echo URL . 'tracabilitySheets/index/' ?>" method="POST">
                    <div class="dropdown">
                        <!-- Dropdown Button -->
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-funnel-fill"></i> <!-- Filter icon -->
                        </button>

                        <!-- Dropdown Menu with Checkboxes -->
                        <ul class="dropdown-menu p-3" aria-labelledby="dropdownMenuButton" style="width: 300px;">
                            <!-- Case pour sélectionner / désélectionner toutes les options -->
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="selectAll" onchange="toggleAllCheckboxes(this)">
                                    <label class="form-check-label" for="selectAll">
                                        Sélectionner/Désélectionner tout
                                    </label>
                                </div>
                            </li>
                            <hr>
                            <!-- Autres cases à cocher -->
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input option-checkbox" type="checkbox" id="option1">
                                    <label class="form-check-label" for="option1">
                                        Option 1
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input option-checkbox" type="checkbox" id="option2">
                                    <label class="form-check-label" for="option2">
                                        Option 2
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input option-checkbox" type="checkbox" id="option3">
                                    <label class="form-check-label" for="option3">
                                        Option 3
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input option-checkbox" type="checkbox" id="option4">
                                    <label class="form-check-label" for="option4">
                                        Option 4
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </form>

                <script>
                    // Fonction pour sélectionner/désélectionner toutes les cases
                    function toggleAllCheckboxes(source) {
                        const checkboxes = document.querySelectorAll('.option-checkbox');
                        checkboxes.forEach(checkbox => {
                            checkbox.checked = source.checked;
                        });
                    }
                </script>

                <!--Var display sort -->

                <form action="<?php echo URL . 'tracabilitySheets/index/' ?>" method="POST">
                    <label for="limitListTracabilitySheet">Fiches par page : </label>
                    <select class="dropdown" name="limitListTracabilitySheet" id="limitListTracabilitySheet" onchange="this.form.submit()">
                        <option value="10" <?php if ($limit == 10) echo 'selected'; ?>>10</option>
                        <option value="20" <?php if ($limit == 20) echo 'selected'; ?>>20</option>
                        <option value="50" <?php if ($limit == 50) echo 'selected'; ?>>50</option>
                        <option value="100" <?php if ($limit == 100) echo 'selected'; ?>>100</option>
                    </select>
                </form>

                <!--ACC OR DESC -->
                <form action="<?php echo URL . 'tracabiltySheets/index/' ?>" method="POST">
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sort-down" viewBox="0 0 16 16">
                                <path d="M3.5 2.5a.5.5 0 0 0-1 0v8.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L3.5 11.293zm3.5 1a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5M7.5 6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1z"></path>
                            </svg>
                            <span class="visually-hidden">Button</span>
                        </button>
                        <button type="button" class="btn btn-outline-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sort-up" viewBox="0 0 16 16">
                                <path d="M3.5 12.5a.5.5 0 0 1-1 0V3.707L1.354 4.854a.5.5 0 1 1-.708-.708l2-1.999.007-.007a.5.5 0 0 1 .7.006l2 2a.5.5 0 1 1-.707.708L3.5 3.707zm3.5-9a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5M7.5 6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1z"></path>
                            </svg>
                            <span class="visually-hidden">Button</span>
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <?php foreach ($tracabilitySheets as $tracabilitySheet) { ?>
        <div class="card mb-3">
            <div class="card-body">
                <!-- Serial Number - The most important field -->
                <div class="row">
                    <div class="col">

                        <h4 class="card-title">
                            <strong>SN: </strong><span class="text-primary"><?php if (isset($tracabilitySheet->serialNumber)) echo htmlspecialchars($tracabilitySheet->serialNumber, ENT_QUOTES, 'UTF-8'); ?></span>
                        </h4>
                        <div class="row">
                            <div class="col">
                                <p class="card-text"><strong>Work Order: </strong><span class="text-primary"><?php if (isset($tracabilitySheet->workOrder)) echo htmlspecialchars($tracabilitySheet->workOrder, ENT_QUOTES, 'UTF-8'); ?></span></p>
                            </div>
                            <div class="col">
                                <p class="card-text"><strong>PN: </strong><span class="text-primary"><?php if (isset($tracabilitySheet->partNumber)) echo htmlspecialchars($tracabilitySheet->partNumber, ENT_QUOTES, 'UTF-8'); ?></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col text-end">
                        <a class="btn btn-outline-primary" href="<?php echo URL . 'tracabilitySheets/editTracabilitySheet/' . htmlspecialchars($tracabilitySheet->serialNumber, ENT_QUOTES, 'UTF-8'); ?>">
                            <i class="bi bi-folder2-open" style="font-size: 24px;"></i>
                        </a>

                        <a class="btn btn-outline-primary" href="<?php echo URL . 'tracabilitySheets/deleteTracabilitySheet/' . htmlspecialchars($tracabilitySheet->serialNumber, ENT_QUOTES, 'UTF-8'); ?>">
                            <i class="bi bi-trash-fill" style="font-size: 24px;"></i></a>
                    </div>
                </div>
                <?php

                // Determine the correct icons for operator status
                if ((bool)$tracabilitySheet->statusSheetOperator) {
                    $operatorIcon = '<i class="bi bi-check-circle-fill text-success"></i>';
                } else {
                    $operatorIcon = '<i class="bi bi-x-circle-fill text-danger"></i>';
                }

                // Determine the correct icons for quality status
                if ((bool)$tracabilitySheet->statusSheetQuality) {
                    $qualityIcon = '<i class="bi bi-check-circle-fill text-success"></i>';
                } else {
                    $qualityIcon = '<i class="bi bi-x-circle-fill text-danger"></i>';
                }
                ?>
            </div>
            <!-- Dates and status in the footer -->
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-5">
                        <small><strong>Créée le: </strong>
                            <span class="text-primary">
                                <?php
                                if (isset($tracabilitySheet->lastTimeEdit) && !empty($tracabilitySheet->sheetCreationDate)) {
                                    echo htmlspecialchars(date("d/m/Y H:i:s", strtotime($tracabilitySheet->sheetCreationDate)), ENT_QUOTES, 'UTF-8');
                                } else {
                                    echo "N/A";
                                }
                                ?>
                            </span>
                        </small>
                    </div>
                    <div class="col-md-5">
                        <small><strong>Modifiée le: </strong>
                            <span class="text-primary">
                                <?php
                                if (isset($tracabilitySheet->lastTimeEdit) && !empty($tracabilitySheet->lastTimeEdit)) {
                                    echo htmlspecialchars(date("d/m/Y H:i:s", strtotime($tracabilitySheet->lastTimeEdit)), ENT_QUOTES, 'UTF-8');
                                } else {
                                    echo "N/A";
                                }
                                ?>
                            </span>
                        </small>
                    </div>
                    <div class="col-md-2 text-end">
                        <strong>Status: </strong>
                        <!-- Operator Status Icon -->
                        <?php echo $operatorIcon; ?>
                        <!-- Quality Status Icon -->
                        <?php echo $qualityIcon; ?>
                    </div>
                </div>
            </div>

        </div>
    <?php } ?>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>