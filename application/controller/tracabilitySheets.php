<?php

/**
 * Class tracabilitySheets
 * This is a demo class.
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class TracabilitySheets extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/tracabilitySheets/index
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
        $amountOfTracabilitySheets = $this->model->getAmountOfTracabilitySheets();

        // Calculate the total number of pages
        $totalPages = ceil($amountOfTracabilitySheets / $limit);

        // Get the traceability sheets for the current page
        $tracabilitySheets = $this->model->getPaginatedTracabilitySheets($limit, $offset);

        //$tracabilitySheets = $this->model->getAllTracabilitySheets();


        // load views. within the views we can echo out $tracabilitySheets and $amountOfTracabilitySheets easily
        require APP . 'view/_templates/header.php';
        require APP . 'view/tracabilitySheets/index.php';
        require APP . 'view/_templates/footer.php';


    }

    /**
     * ACTION: addTracabilitySheet
     * This method handles what happens when you move to http://yourproject/tracabilitySheets/addTracabilitySheet
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "add a tracabilitySheet" form on tracabilitySheets/index
     * directs the user after the form submit. This method handles all the POST data from the form and then redirects
     * the user back to tracabilitySheets/index via the last line: header(...)
     * This is an example of how to handle a POST request.
     */

    public function createTracabilitySheet()
    {

        $machines = $this->model->getAllMachines();
        $partNumbers = $this->model->getAllPartNumbers();
        $serialNumbers = $this->model->getAllSerialNumberTracabilitySheets();


        // load views. within the views we can echo out $tracabilitySheet easily
        require APP . 'view/_templates/header.php';
        require APP . 'view/tracabilitySheets/add.php';
        require APP . 'view/_templates/footer.php';
    }
    public function addTracabilitySheet()
    {
        // if we have POST data to create a new tracabilitySheet entry
        if (isset($_POST["submit_add_tracabilitySheet"])) {
            // do addTracabilitySheet() in model/model.php
            $this->model->addTracabilitySheet($_POST["workOrder"], $_POST["serialNumber"],  $_POST["partNumber"], $_POST["refPlan"],  $_POST["refMachine"]);
        }

        
        // where to go after tracabilitySheet has been added
        header('location: ' . URL . 'tracabilitySheets/index');
    }

    /**
     * ACTION: deleteTracabilitySheet
     * This method handles what happens when you move to http://yourproject/tracabilitySheets/deleteTracabilitySheet
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "delete a tracabilitySheet" button on tracabilitySheets/index
     * directs the user after the click. This method handles all the data from the GET request (in the URL!) and then
     * redirects the user back to tracabilitySheets/index via the last line: header(...)
     * This is an example of how to handle a GET request.
     * @param int $tracabilitySheet_id Id of the to-delete racabiltySheet
     */
    public function deleteTracabilitySheet($tracabilitySheet_id)
    {
        // if we have an id of a tracabilty Sheet that should be deleted
        if (isset($tracabilitySheet_id)) {
            // do deleteTracabilitySheet() in model/model.php
            $this->model->deleteTracabilitySheet($tracabilitySheet_id);
        }

        // where to go after tracabilitySheet has been deleted
        header('location: ' . URL . 'tracabilitySheets/index');
    }

    /**
     * ACTION: editTracabilitySheet
     * This method handles what happens when you move to http://yourproject/tracabilitySheets/editTracabilitySheet
     * @param int $tracabilitySheet_id Id of the to-edit tracabilitySheet
     */
    public function editTracabilitySheet($tracabilitySheet_id)
    {
        // if we have an id of a tracabilitySheet that should be edited
        if (isset($tracabilitySheet_id)) {
            // do getTracabilitySheet() in model/model.php
            $tracabilitySheet = $this->model->getTracabilitySheet($tracabilitySheet_id);

            // in a real application we would also check if this db entry exists and therefore show the result or
            // redirect the user to an error page or similar

            // load views. within the views we can echo out $tracabilitySheet easily
            require APP . 'view/_templates/header.php';
            require APP . 'view/tracabilitySheets/edit.php';
            require APP . 'view/_templates/footer.php';
        } else {
            // redirect user to tracabilitySheets index page (as we don't have a tracabilitySheet_id)
            header('location: ' . URL . 'tracabilitySheets/index');
        }
    }

    /**
     * ACTION: updateTracabilitySheet
     * This method handles what happens when you move to http://yourproject/tracabilitySheets/updateTracabilitySheet
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "update a tracabilitySheet" form on tracabilitySheets/edit
     * directs the user after the form submit. This method handles all the POST data from the form and then redirects
     * the user back to tracabilitySheets/index via the last line: header(...)
     * This is an example of how to handle a POST request.
     */
    public function updateTracabilitySheet()
    {
        // if we have POST data to create a new tracabilitySheet entry
        if (isset($_POST["submit_update_tracabilitySheet"])) {
            // do updateTracabilitySheet() from model/model.php
            $params = array(
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

            $this->model->updateTracabilitySheet($params, $_POST['tracabilitySheet_id']);
        }

        // where to go after tracabilitySheet has been added
        header('location: ' . URL . 'tracabilitySheets/index');
    }

    /**
     * AJAX-ACTION: ajaxGetStats
     * TODO documentation
     */
    public function ajaxGetStats()
    {
        $amountOfTracabilitySheets = $this->model->getAmountOfTracabilitySheets();

        // simply echo out something. A supersimple API would be possible by echoing JSON here
        echo $amountOfTracabilitySheets;
    }

    public function ajaxGetWindingChart($tracabilitySheet_id)
    {
        $dataWindingChart = $this->model->getWindindChart($tracabilitySheet_id);

        // simply echo out something. A supersimple API would be possible by echoing JSON here
        header('Content-Type: application/json');
        echo json_encode($dataWindingChart);

    }
}
