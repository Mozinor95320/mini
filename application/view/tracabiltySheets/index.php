<div class="container">
    <h3>Liste des fiches de tracabilité:</h3>
    <table>
        <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Id</td>
                <td>Artist</td>
                <td>Track</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tracabiltySheets as $tracabiltySheet) { ?>
                <tr>
                    <td><?php if (isset($tracabiltySheet->serialNumber)) echo htmlspecialchars($tracabiltySheet->serialNumber, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($tracabiltySheet->partNumber)) echo htmlspecialchars($tracabiltySheet->partNumber, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($tracabiltySheet->workOrder)) echo htmlspecialchars($tracabiltySheet->workOrder, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
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