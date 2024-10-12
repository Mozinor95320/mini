<div class="container">
    <?php foreach ($tracabiltySheets as $tracabiltySheet) { ?>
        <div class="card mt-3">
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

    <div class="pagination">
        <?php if ($page > 1): ?>

            <a href="<?php echo URL . 'tracabiltySheets/index/' . htmlspecialchars($page - 1, ENT_QUOTES, 'UTF-8'); ?>">Précédent</a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <a href="<?php echo URL . 'tracabiltySheets/index/' . htmlspecialchars($i, ENT_QUOTES, 'UTF-8'); ?>" <?php if ($i == $page) echo 'class="active"'; ?>>
                <?php echo $i; ?>
            </a>
        <?php endfor; ?>

        <?php if ($page < $totalPages): ?>

            <a href="<?php echo URL . 'tracabiltySheets/index/' . htmlspecialchars($page + 1, ENT_QUOTES, 'UTF-8'); ?>">Suivant</a>
        <?php endif; ?>
    </div>
    <form action="<?php echo URL . 'tracabiltySheets/index/' ?>" method="POST">
        <label for="limitListTracabilitySheet">Nombre de chansons par page : </label>
        <select name="limitListTracabilitySheet" id="limitListTracabilitySheet" onchange="this.form.submit()">
            <option value="10" <?php if ($limit == 10) echo 'selected'; ?>>10</option>
            <option value="20" <?php if ($limit == 20) echo 'selected'; ?>>20</option>
            <option value="50" <?php if ($limit == 50) echo 'selected'; ?>>50</option>
            <option value="100" <?php if ($limit == 100) echo 'selected'; ?>>100</option>
        </select>
    </form>
</div>