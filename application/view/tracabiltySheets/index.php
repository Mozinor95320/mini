<div class="container mt-5">

    <nav clas="mb-3" aria-label="Page navigation example">
        <ul class="pagination">
            <?php if ($page > 1): ?>
                <li class="page-item">
                    <a class="page-link" href="<?php echo URL . 'tracabiltySheets/index/' . htmlspecialchars($page - 1, ENT_QUOTES, 'UTF-8'); ?>" aria-label="Previous">
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
                    <a class="page-link" href="<?php echo URL . 'tracabiltySheets/index/' . htmlspecialchars($i, ENT_QUOTES, 'UTF-8'); ?>">
                        <?php echo $i; ?>
                    </a>
                </li>
            <?php endfor; ?>

            <?php if ($page < $totalPages): ?>
                <li class="page-item">
                    <a class="page-link" href="<?php echo URL . 'tracabiltySheets/index/' . htmlspecialchars($page + 1, ENT_QUOTES, 'UTF-8'); ?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            <?php endif; ?>

            <li class="nav-item">
                <form action="<?php echo URL . 'tracabiltySheets/index/' ?>" method="POST">
                    <label for="limitListTracabilitySheet">Fiches par page : </label>
                    <select name="limitListTracabilitySheet" id="limitListTracabilitySheet" onchange="this.form.submit()">
                        <option value="10" <?php if ($limit == 10) echo 'selected'; ?>>10</option>
                        <option value="20" <?php if ($limit == 20) echo 'selected'; ?>>20</option>
                        <option value="50" <?php if ($limit == 50) echo 'selected'; ?>>50</option>
                        <option value="100" <?php if ($limit == 100) echo 'selected'; ?>>100</option>
                    </select>
                </form>
            </li>
            <li class="nav-item">
                <form action="<?php echo URL . 'tracabiltySheets/index/' ?>" method="POST">
                    <select name="limitListTracabilitySheet" id="limitListTracabilitySheet" onchange="this.form.submit()">
                        <div class="btn-group">
                            <button type="button" class="btn btn-outline-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sort-down" viewBox="0 0 16 16">
                                    <path d="M3.5 2.5a.5.5 0 0 0-1 0v8.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L3.5 11.293zm3.5 1a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5M7.5 6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1z"></path>
                                </svg>
                                <span class="visually-hidden">Button</span>
                            </button>

                            <button type="button" class="btn btn-outline-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sort-up-alt" viewBox="0 0 16 16">
                                    <path d="M3.5 13.5a.5.5 0 0 1-1 0V4.707L1.354 5.854a.5.5 0 1 1-.708-.708l2-1.999.007-.007a.5.5 0 0 1 .7.006l2 2a.5.5 0 1 1-.707.708L3.5 4.707zm4-9.5a.5.5 0 0 1 0-1h1a.5.5 0 0 1 0 1zm0 3a.5.5 0 0 1 0-1h3a.5.5 0 0 1 0 1zm0 3a.5.5 0 0 1 0-1h5a.5.5 0 0 1 0 1zM7 12.5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7a.5.5 0 0 0-.5.5"></path>
                                </svg>
                                <span class="visually-hidden">Button</span>
                            </button>
                        </div>
                </form>
            </li>

        </ul>
    </nav>


    <?php foreach ($tracabiltySheets as $tracabiltySheet) { ?>
        <div class="card mb-3">
            <div class="card-body">
                <!-- Serial Number - The most important field -->
                <div class="row">
                    <div class="col">

                        <h4 class="card-title">
                            <strong>SN: </strong><span class="text-primary"><?php if (isset($tracabiltySheet->serialNumber)) echo htmlspecialchars($tracabiltySheet->serialNumber, ENT_QUOTES, 'UTF-8'); ?></span>
                        </h4>
                        <div class="row">
                            <div class="col">
                                <p class="card-text"><strong>Work Order: </strong><span class="text-primary"><?php if (isset($tracabiltySheet->workOrder)) echo htmlspecialchars($tracabiltySheet->workOrder, ENT_QUOTES, 'UTF-8'); ?></span></p>
                            </div>
                            <div class="col">
                                <p class="card-text"><strong>PN: </strong><span class="text-primary"><?php if (isset($tracabiltySheet->partNumber)) echo htmlspecialchars($tracabiltySheet->partNumber, ENT_QUOTES, 'UTF-8'); ?></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col text-end">
                        <a class="btn btn-outline-primary" href="<?php echo URL . 'tracabiltySheets/editTracabiltySheet/' . htmlspecialchars($tracabiltySheet->serialNumber, ENT_QUOTES, 'UTF-8'); ?>">
                            <i class="bi bi-folder2-open" style="font-size: 24px;"></i>
                        </a>

                        <a class="btn btn-outline-primary" href="<?php echo URL . 'tracabiltySheets/deleteTracabiltySheet/' . htmlspecialchars($tracabiltySheet->serialNumber, ENT_QUOTES, 'UTF-8'); ?>">
                            <i class="bi bi-trash-fill" style="font-size: 24px;"></i></a>
                    </div>
                </div>
                <?php

                // Determine the correct icons for operator status
                if ((bool)$tracabiltySheet->statusSheetOperator) {
                    $operatorIcon = '<i class="bi bi-check-circle-fill text-success"></i>';
                } else {
                    $operatorIcon = '<i class="bi bi-x-circle-fill text-danger"></i>';
                }

                // Determine the correct icons for quality status
                if ((bool)$tracabiltySheet->statusSheetQuality) {
                    $qualityIcon = '<i class="bi bi-check-circle-fill text-success"></i>';
                } else {
                    $qualityIcon = '<i class="bi bi-x-circle-fill text-danger"></i>';
                }
                ?>
            </div>
            <!-- Dates and status in the footer -->
            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <small><strong>Créée le: </strong>
                            <span class="text-primary">
                                <?php
                                if (isset($tracabiltySheet->lastTimeEdit) && !empty($tracabiltySheet->sheetCreationDate)) {
                                    echo htmlspecialchars(date("d/m/Y H:i:s", strtotime($tracabiltySheet->sheetCreationDate)), ENT_QUOTES, 'UTF-8');
                                } else {
                                    echo "N/A";
                                }
                                ?>
                            </span>
                        </small>
                    </div>
                    <div class="col">
                        <small><strong>Modifiée le: </strong>
                            <span class="text-primary">
                                <?php
                                if (isset($tracabiltySheet->lastTimeEdit) && !empty($tracabiltySheet->lastTimeEdit)) {
                                    echo htmlspecialchars(date("d/m/Y H:i:s", strtotime($tracabiltySheet->lastTimeEdit)), ENT_QUOTES, 'UTF-8');
                                } else {
                                    echo "N/A";
                                }
                                ?>
                            </span>
                        </small>
                    </div>
                    <div class="col text-end">
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