<div class="container">
    <div class="box">
        <h3>Add a tracabilty Sheet</h3>
        <form action="<?php echo URL; ?>tracabiltySheets/addTracabiltySheet" method="POST">
            <label>N°OF</label>
            <input type="text" name="workOrder" value="" required />
            <label>SN</label>
            <input type="text" name="serialNumber" value="" required />
            <label>PN</label>
            <input type="text" name="partNumber" value="" />
            <label>Ref Plan</label>
            <input type="text" name="refPlan" value="" />
            <label>Ref Machine</label>
            <input type="text" name="refMachine" value="" />
            <input type="submit" name="submit_add_tracabiltySheet" value="Submit" />

            ($workOrder, $serialNumber, $partNumber, $sheetCreationDate, $refPlan, $refMachine)
        </form>
    </div>
    <!-- main content output -->
    <div class="box">
        <h3>List of tracabilty Sheets</h3>
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
                <tr>
                    <td>Id</td>
                    <td>Artist</td>
                    <td>Track</td>
                    <td>Link</td>
                    <td>DELETE</td>
                    <td>EDIT</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tracabiltySheets as $tracabiltySheet) { ?>
                    <tr>
                        <td><?php if (isset($tracabiltySheet->id)) echo htmlspecialchars($tracabiltySheet->id, ENT_QUOTES, 'UTF-8'); ?></td>
                        <td><?php if (isset($tracabiltySheet->artist)) echo htmlspecialchars($tracabiltySheet->artist, ENT_QUOTES, 'UTF-8'); ?></td>
                        <td><?php if (isset($tracabiltySheet->track)) echo htmlspecialchars($tracabiltySheet->track, ENT_QUOTES, 'UTF-8'); ?></td>
                        <td>
                            <?php if (isset($tracabiltySheet->link)) { ?>
                                <a href="<?php echo htmlspecialchars($tracabiltySheet->link, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($tracabiltySheet->link, ENT_QUOTES, 'UTF-8'); ?></a>
                            <?php } ?>
                        </td>
                        <td><a href="<?php echo URL . 'tracabiltySheets/deleteTracabiltySheet/' . htmlspecialchars($tracabiltySheet->id, ENT_QUOTES, 'UTF-8'); ?>">delete</a></td>
                        <td><a href="<?php echo URL . 'tracabiltySheets/editTracabiltySheet/' . htmlspecialchars($tracabiltySheet->id, ENT_QUOTES, 'UTF-8'); ?>">edit</a></td>
                    </tr>
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
                <form action="<?php echo URL . 'tracabiltySheets/index/'?>" method="POST">
                    <label for="limitListTracabilitySheet">Nombre de chansons par page : </label>
                    <select name="limitListTracabilitySheet" id="limitListTracabilitySheet" onchange="this.form.submit()">
                        <option value="10" <?php if ($limit == 10) echo 'selected'; ?>>10</option>
                        <option value="20" <?php if ($limit == 20) echo 'selected'; ?>>20</option>
                        <option value="50" <?php if ($limit == 50) echo 'selected'; ?>>50</option>
                        <option value="100" <?php if ($limit == 100) echo 'selected'; ?>>100</option>
                    </select>
                </form>
            </tbody>
        </table>
    </div>
</div>