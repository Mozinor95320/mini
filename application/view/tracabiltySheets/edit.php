<div class="container">
    <h2>You are in the View: application/view/tracabiltySheets/edit.php (everything in this box comes from that file)</h2>
    <!-- add song form -->
    <div>
        <h3>Edit a tracabilty Sheet</h3>
        <form action="<?php echo URL; ?>tracabiltySheets/updateTracabiltySheet" method="POST">
            <label>Artist</label>
            <input autofocus type="text" name="artist" value="<?php echo htmlspecialchars($tracabiltySheet->artist, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>Track</label>
            <input type="text" name="track" value="<?php echo htmlspecialchars($tracabiltySheet->track, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>Link</label>
            <input type="text" name="link" value="<?php echo htmlspecialchars($tracabiltySheet->link, ENT_QUOTES, 'UTF-8'); ?>" />
            <input type="hidden" name="tracabiltySheet_id" value="<?php echo htmlspecialchars($tracabiltySheet->id, ENT_QUOTES, 'UTF-8'); ?>" />
            <input type="submit" name="submit_update_tracabiltySheet" value="Update" />
        </form>
    </div>
</div>

