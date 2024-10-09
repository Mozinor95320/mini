<?php

/**
 * Class TracabiltySheets
 * This is a demo class.
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class TracabiltySheets extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/tracabiltySheets/index
     */

    
    public function index($pPage=1)
    {
        // Number of items per page
        $limit = 10;

        $page = 0;

        // Get the current page from the parameter, or set it to 1 if not defined
        if (isset($pPage)) {
            $page = (int)$pPage;
        } else {
            $page = 1;
        }

        $offset = ($page - 1) * $limit;

        // Get the total number of traceability sheets
        $amountOfTracabiltySheets = $this->model->getAmountOfTracabiltySheets();

        // Calculate the total number of pages
        $totalPages = ceil($amountOfTracabiltySheets / $limit);

        // Get the traceability sheets for the current page
        $tracabiltySheets = $this->model->getPaginatedTracabiltySheets($limit, $offset);


        // load views. within the views we can echo out $tracabiltySheets and $amountOfTracabiltySheets easily
        require APP . 'view/_templates/header.php';
        require APP . 'view/tracabiltySheets/index.php';
        require APP . 'view/_templates/footer.php';
    }

    /**
     * ACTION: addTracabiltySheet
     * This method handles what happens when you move to http://yourproject/tracabiltySheets/addTracabiltySheet
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "add a tracabiltySheet" form on tracabiltySheets/index
     * directs the user after the form submit. This method handles all the POST data from the form and then redirects
     * the user back to tracabiltySheets/index via the last line: header(...)
     * This is an example of how to handle a POST request.
     */
    public function addTracabiltySheet()
    {
        // if we have POST data to create a new tracabiltySheet entry
        if (isset($_POST["submit_add_tracabiltySheet"])) {
            // do addTracabiltySheet() in model/model.php
            $this->model->addTracabiltySheet($_POST["artist"], $_POST["track"],  $_POST["link"]);
        }

        // where to go after tracabiltySheet has been added
        header('location: ' . URL . 'tracabiltySheet/index');
    }

    /**
     * ACTION: deleteTracabiltySheet
     * This method handles what happens when you move to http://yourproject/tracabiltySheets/deleteTracabiltySheet
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "delete a tracabiltySheet" button on tracabiltySheets/index
     * directs the user after the click. This method handles all the data from the GET request (in the URL!) and then
     * redirects the user back to tracabiltySheets/index via the last line: header(...)
     * This is an example of how to handle a GET request.
     * @param int $tracabiltySheet_id Id of the to-delete racabiltySheet
     */
    public function deleteTracabiltySheet($tracabiltySheet_id)
    {
        // if we have an id of a tracabilty Sheet that should be deleted
        if (isset($tracabiltySheet_id)) {
            // do deleteTracabiltySheet() in model/model.php
            $this->model->deleteTracabiltySheet($tracabiltySheet_id);
        }

        // where to go after TracabiltySheet has been deleted
        header('location: ' . URL . 'tracabiltySheets/index');
    }

    /**
     * ACTION: editTracabiltySheet
     * This method handles what happens when you move to http://yourproject/tracabiltySheets/editTracabiltySheet
     * @param int $tracabiltySheet_id Id of the to-edit tracabiltySheet
     */
    public function editTracabiltySheet($tracabiltySheet_id)
    {
        // if we have an id of a tracabiltySheet that should be edited
        if (isset($tracabiltySheet_id)) {
            // do getTracabiltySheet() in model/model.php
            $tracabiltySheet = $this->model->getTracabiltySheet($tracabiltySheet_id);

            // in a real application we would also check if this db entry exists and therefore show the result or
            // redirect the user to an error page or similar

            // load views. within the views we can echo out $tracabiltySheet easily
            require APP . 'view/_templates/header.php';
            require APP . 'view/tracabiltySheets/edit.php';
            require APP . 'view/_templates/footer.php';
        } else {
            // redirect user to tracabiltySheets index page (as we don't have a tracabiltySheet_id)
            header('location: ' . URL . 'tracabiltySheets/index');
        }
    }

    /**
     * ACTION: updateTracabiltySheet
     * This method handles what happens when you move to http://yourproject/tracabiltySheets/updateTracabiltySheet
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "update a tracabiltySheet" form on tracabiltySheets/edit
     * directs the user after the form submit. This method handles all the POST data from the form and then redirects
     * the user back to tracabiltySheets/index via the last line: header(...)
     * This is an example of how to handle a POST request.
     */
    public function updateTracabiltySheet()
    {
        // if we have POST data to create a new tracabiltySheet entry
        if (isset($_POST["submit_update_tracabiltySheet"])) {
            // do updateTracabiltySheet() from model/model.php
            $this->model->updateTracabiltySheet($_POST["artist"], $_POST["track"],  $_POST["link"], $_POST['tracabiltySheet_id']);
        }

        // where to go after tracabiltySheet has been added
        header('location: ' . URL . 'tracabiltySheets/index');
    }

    /**
     * AJAX-ACTION: ajaxGetStats
     * TODO documentation
     */
    public function ajaxGetStats()
    {
        $amountOfTracabiltySheets = $this->model->getAmountOfTracabiltySheets();

        // simply echo out something. A supersimple API would be possible by echoing JSON here
        echo $amountOfTracabiltySheets;
    }
}
