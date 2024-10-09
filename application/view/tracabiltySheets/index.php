<div class="container">
    <h2>You are in the View: application/view/tracabiltySheets/index.php (everything in this box comes from that file)</h2>
    <!-- add tracabiltySheet form -->
    <div class="box">
        <h3>Add a tracabilty Sheet</h3>
        <form action="<?php echo URL; ?>tracabiltySheets/addTracabiltySheet" method="POST">
            <label>Artist</label>
            <input type="text" name="artist" value="" required />
            <label>Track</label>
            <input type="text" name="track" value="" required />
            <label>Link</label>
            <input type="text" name="link" value="" />
            <input type="submit" name="submit_add_tracabiltySheet" value="Submit" />
        </form>
    </div>
    <!-- main content output -->
    <div class="box">
        <h3>Amount of Tracabilty Sheets (data from second model)</h3>
        <div>
            <?php echo $amountOfTracabiltySheets; ?>
        </div>
        <h3>Amount of tracabilty Sheets (via AJAX)</h3>
        <div>
            <button id="javascript-ajax-button">Click here to get the amount of tracabilty Sheets via Ajax (will be displayed in #javascript-ajax-result-box)</button>
            <div id="javascript-ajax-result-box"></div>
        </div>
        <h3>List of tracabilty Sheets (data from first model)</h3>
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

                        <a href="<?php echo URL . 'tracabiltySheets/index/' . htmlspecialchars($page - 1, ENT_QUOTES, 'UTF-8') .'/'. htmlspecialchars($limit , ENT_QUOTES, 'UTF-8'); ?>">Précédent</a>
                    <?php endif; ?>

                    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                        <a href="<?php echo URL . 'tracabiltySheets/index/' . htmlspecialchars($i, ENT_QUOTES, 'UTF-8').'/'. htmlspecialchars($limit , ENT_QUOTES, 'UTF-8'); ?>" <?php if ($i == $page) echo 'class="active"'; ?>>
                            <?php echo $i; ?>
                        </a>
                    <?php endfor; ?>

                    <?php if ($page < $totalPages): ?>

                        <a href="<?php echo URL . 'tracabiltySheets/index/' . htmlspecialchars($page + 1, ENT_QUOTES, 'UTF-8').'/'. htmlspecialchars($limit , ENT_QUOTES, 'UTF-8'); ?>">Suivant</a>
                    <?php endif; ?>
                </div>
                <form action="<?php echo URL; ?>tracabiltySheets/index" method="POST">
                    <label for="limit">Nombre de chansons par page : </label>
                    <select name="limit" id="limit" onchange="this.form.submit()">
                        <option value="10" <?php if ($limit == 10) echo 'selected'; ?>>10</option>
                        <option value="20" <?php if ($limit == 20) echo 'selected'; ?>>20</option>
                        <option value="50" <?php if ($limit == 50) echo 'selected'; ?>>50</option>
                        <option value="100" <?php if ($limit == 100) echo 'selected'; ?>>100</option>
                    </select>

                    <!-- Keep the current page so it doesn't revert to the first page with each selection -->
                    <input type="hidden" name="page" value="<?php echo $page; ?>">
                </form>
            </tbody>
        </table>
    </div>
</div>