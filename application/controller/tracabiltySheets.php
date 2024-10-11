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


    public function index($pPage = 1)
    {
        $page = 1;
        // Get the current page from the parameter, or set it to 1 if not defined
        if (isset($pPage)) {
            $page = (int)$pPage;
        }


        // Number of items per page
        // Get the current page from the parameter, or set it to 1 if not defined
        if (isset($_POST['limitListTracabilitySheet'])) {
            $_SESSION['limitListTracabilitySheet'] = (int)$_POST['limitListTracabilitySheet'];
        }

        if (isset($_SESSION['limitListTracabilitySheet'])) {
            $limit = (int)$_SESSION['limitListTracabilitySheet'];
        } else {
            $limit = 10;
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
        header('location: ' . URL . 'tracabiltySheets/index');
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
            $params = array(
                ':serialNumber' => $_POST['serialNumber'],
                ':partNumber' => $_POST['partNumber'],
                ':workOrder' => $_POST['workOrder'],
                ':sheetCreationDate' => $_POST['sheetCreationDate'],
                ':refPlan' => $_POST['refPlan'],
                ':refMachine' => $_POST['refMachine'],
                ':material' => $_POST['material'],
                ':spoolBatch' => $_POST['spoolBatch'],
                ':spoolNumber' => $_POST['spoolNumber'],
                ':dateDimAfterCoating' => $_POST['dateDimAfterCoating'],
                ':operatorNameDimAfterCoating' => $_POST['operatorNameDimAfterCoating'],
                ':lengthL' => $_POST['lengthL'],
                ':diameterD' => $_POST['diameterD'],
                ':massM' => $_POST['massM'],
                ':aspectDimAfterCoating' => $_POST['aspectDimAfterCoating'],
                ':profileMassBeforeShrinkFit' => $_POST['profileMassBeforeShrinkFit'],
                ':linearMassBeforeShrinkFit' => $_POST['linearMassBeforeShrinkFit'],
                ':thickness1BeforeShrinkFit' => $_POST['thickness1BeforeShrinkFit'],
                ':thickness2BeforeShrinkFit' => $_POST['thickness2BeforeShrinkFit'],
                ':thickness3BeforeShrinkFit' => $_POST['thickness3BeforeShrinkFit'],
                ':thickness4BeforeShrinkFit' => $_POST['thickness4BeforeShrinkFit'],
                ':thickness5BeforeShrinkFit' => $_POST['thickness5BeforeShrinkFit'],
                ':force1BeforeShrinkFit' => $_POST['force1BeforeShrinkFit'],
                ':force2BeforeShrinkFit' => $_POST['force2BeforeShrinkFit'],
                ':force3BeforeShrinkFit' => $_POST['force3BeforeShrinkFit'],
                ':force4BeforeShrinkFit' => $_POST['force4BeforeShrinkFit'],
                ':force5BeforeShrinkFit' => $_POST['force5BeforeShrinkFit'],
                ':aspectFiber1BeforeShrinkFit' => $_POST['aspectFiber1BeforeShrinkFit'],
                ':aspectFiber2BeforeShrinkFit' => $_POST['aspectFiber2BeforeShrinkFit'],
                ':aspectFiber3BeforeShrinkFit' => $_POST['aspectFiber3BeforeShrinkFit'],
                ':aspectFiber4BeforeShrinkFit' => $_POST['aspectFiber4BeforeShrinkFit'],
                ':aspectFiber5BeforeShrinkFit' => $_POST['aspectFiber5BeforeShrinkFit'],
                ':averageBeforeShrinkFit' => $_POST['averageBeforeShrinkFit'],
                ':sigmaBeforeShrinkFit' => $_POST['sigmaBeforeShrinkFit'],
                ':profileMassAfterShrinkFit' => $_POST['profileMassAfterShrinkFit'],
                ':linearMassAfterShrinkFit' => $_POST['linearMassAfterShrinkFit'],
                ':thickness1AfterShrinkFit' => $_POST['thickness1AfterShrinkFit'],
                ':thickness2AfterShrinkFit' => $_POST['thickness2AfterShrinkFit'],
                ':thickness3AfterShrinkFit' => $_POST['thickness3AfterShrinkFit'],
                ':thickness4AfterShrinkFit' => $_POST['thickness4AfterShrinkFit'],
                ':thickness5AfterShrinkFit' => $_POST['thickness5AfterShrinkFit'],
                ':force1AfterShrinkFit' => $_POST['force1AfterShrinkFit'],
                ':force2AfterShrinkFit' => $_POST['force2AfterShrinkFit'],
                ':force3AfterShrinkFit' => $_POST['force3AfterShrinkFit'],
                ':force4AfterShrinkFit' => $_POST['force4AfterShrinkFit'],
                ':force5AfterShrinkFit' => $_POST['force5AfterShrinkFit'],
                ':aspectFiber1AfterShrinkFit' => $_POST['aspectFiber1AfterShrinkFit'],
                ':aspectFiber2AfterShrinkFit' => $_POST['aspectFiber2AfterShrinkFit'],
                ':aspectFiber3AfterShrinkFit' => $_POST['aspectFiber3AfterShrinkFit'],
                ':aspectFiber4AfterShrinkFit' => $_POST['aspectFiber4AfterShrinkFit'],
                ':aspectFiber5AfterShrinkFit' => $_POST['aspectFiber5AfterShrinkFit'],
                ':averageAfterShrinkFit' => $_POST['averageAfterShrinkFit'],
                ':sigmaAfterShrinkFit' => $_POST['sigmaAfterShrinkFit'],
                ':bf' => $_POST['bf'],
                ':vf' => $_POST['vf'],
                ':mt' => $_POST['mt'],
                ':mf' => $_POST['mf'],
                ':df1' => $_POST['df1'],
                ':df2' => $_POST['df2'],
                ':df3' => $_POST['df3'],
                ':operatorConformityDeclaration' => $_POST['operatorConformityDeclaration'],
                ':operatorRemarks' => $_POST['operatorRemarks'],
                ':dateOperatorConformityDeclaration' => $_POST['dateOperatorConformityDeclaration'],
                ':operatorNameConformityDeclaration' => $_POST['operatorNameConformityDeclaration'],
                ':firstAccumulatorLot' => $_POST['firstAccumulatorLot'],
                ':qualityConformityDeclaration' => $_POST['qualityConformityDeclaration'],
                ':qualityControlDate' => $_POST['qualityControlDate'],
                ':qualityInspectorName' => $_POST['qualityInspectorName'],
                ':qualityInspectorRemarks' => $_POST['qualityInspectorRemarks'],
                ':status' => $_POST['status']
            );

            $this->model->updateTracabiltySheet($params, $_POST['tracabiltySheet_id']);
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
