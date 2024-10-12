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

            <li>
                <form action="<?php echo URL . 'tracabiltySheets/index/' ?>" method="POST">
                    <label for="limitListTracabilitySheet">Nombre de fiches par page : </label>
                    <select name="limitListTracabilitySheet" id="limitListTracabilitySheet" onchange="this.form.submit()">
                        <option value="10" <?php if ($limit == 10) echo 'selected'; ?>>10</option>
                        <option value="20" <?php if ($limit == 20) echo 'selected'; ?>>20</option>
                        <option value="50" <?php if ($limit == 50) echo 'selected'; ?>>50</option>
                        <option value="100" <?php if ($limit == 100) echo 'selected'; ?>>100</option>
                    </select>
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