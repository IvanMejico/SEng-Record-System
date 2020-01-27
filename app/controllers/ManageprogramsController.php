<?php

namespace App\Controllers;

use App\Models\Programs;
use Core\Controller;
use Core\Router;
use Core\H;

class ManageprogramsController extends Controller {
    public function __construct($controller, $action) {
        parent::__construct($controller, $action);
        $this->load_model('Programs');
    }

    public function indexAction() {
        $this->view->bodyAttr = 'class="ttr-pinned-sidebar ttr-opened-sidebar"';
        $this->view->pageTitle = 'Academic Programs';
        $this->view->render('programs/index');
    }

    public function add_programAction() {
        $this->view->_message = '';
        $this->view->displayErrors = [];

        if($this->request->isPost()) {
            $fileSource = '';
            $fileDestination = '';

            if(file_exists($_FILES['profile-upload']['tmp_name']) || is_uploaded_file($_FILES['profile-upload']['tmp_name'])) {
                $fileName = $_FILES['profile-upload']['name'];
                $tmpName = $_FILES['profile-upload']['tmp_name'];
                $fileError = $_FILES['profile-upload']['error'];
                $fileSize = $_FILES['profile-upload']['size'];

                $fileExt = explode('.', $fileName);
                $fileActualExt = strtolower(end($fileExt));

                $allowed = array('jpg', 'jpeg', 'png');

                if(in_array($fileActualExt, $allowed)) {
                    if($fileError === 0) {
                        if($fileSize < 10000000) {
                            $fileNameNew = 'profile_'.time().'.'.$fileActualExt;
                            $fileDestination = 'public/uploads/logo/'.$fileNameNew;
                        } else {
                            die('file is too big'); // temporary
                        }
                    }
                }

                $fileSource = $tmpName;
                $this->ProgramsModel->logo = $fileNameNew;
            }

            $this->ProgramsModel->assign($this->request->get());
            $this->ProgramsModel->id = strtolower($this->ProgramsModel->id);
            if($this->ProgramsModel->save()) {
                move_uploaded_file($fileSource, $fileDestination); // TODO: Retain files after submission.
                H::resetObjectProperties($this->ProgramsModel);
                $this->view->_message = $this->ProgramsModel->getSuccessMessage();
            } else {
                $this->ProgramsModel->logo = '';
                $this->view->displayErrors = $this->ProgramsModel->getErrorMessages();
            }
        }

        $this->view->program = $this->ProgramsModel;

        $this->view->bodyAttr = 'class="ttr-pinned-sidebar ttr-opened-sidebar"';
        $this->view->pageTitle = 'Add Academic Program';
        $this->view->render('programs/program_form');
    }

    public function edit_programAction($programId) {
        if(!$programId) Router::redirect('manageprograms');

        $this->view->_message = '';
        $this->view->displayErrors = [];

        if($this->request->isPost()) {
            $fileSource = '';
            $fileDestination = '';

            if(file_exists($_FILES['profile-upload']['tmp_name']) || is_uploaded_file($_FILES['profile-upload']['tmp_name'])) {
                // Check if there is an existing logo saved in the database. If there is, delete that file from the upload folder.
                if($this->request->get('file-name')) {
                    unlink('public/uploads/logo/'.$this->request->get('file-name'));
                }

                $fileName = $_FILES['profile-upload']['name'];
                $tmpName = $_FILES['profile-upload']['tmp_name'];
                $fileError = $_FILES['profile-upload']['error'];
                $fileSize = $_FILES['profile-upload']['size'];

                $fileExt = explode('.', $fileName);
                $fileActualExt = strtolower(end($fileExt));

                $allowed = array('jpg', 'jpeg', 'png');

                if(in_array($fileActualExt, $allowed)) {
                    if($fileError === 0) {
                        if($fileSize < 10000000) {
                            $fileNameNew = 'profile_'.time().'.'.$fileActualExt;
                            $fileDestination = 'public/uploads/logo/'.$fileNameNew;
                        } else {
                            die('file is too big'); // temporary
                        }
                    }
                }

                $fileSource = $tmpName;
                $this->ProgramsModel->logo = $fileNameNew;
            } else if ($this->request->get('file-name')) {
                $this->ProgramsModel->logo = $this->request->get('file-name');
            }

            $this->ProgramsModel->assign($this->request->get());
            $this->ProgramsModel->id = strtolower($this->ProgramsModel->id);
            $this->ProgramsModel->setUpdate(true);
            if($this->ProgramsModel->save()) {
                move_uploaded_file($fileSource, $fileDestination); // TODO: Retain files after submission.
                Router::redirect('manageprograms/');
            } else {
                $this->view->displayErrors = $this->ProgramsModel->getErrorMessages();
            }
            $this->view->program = $this->ProgramsModel;
        } else {
            $program = $this->ProgramsModel->findById($programId);
            $this->view->program = $program;
        }

        $this->view->bodyAttr = 'class="ttr-pinned-sidebar ttr-opened-sidebar"';
        $this->view->pageTitle = 'Edit Academic Program';
        $this->view->render('programs/program_form');
    }

    // Fetch program data via programId
    public function getDataAction($programId) {
        $response=[];
        $params=[];

        if($programId) {
            $params = ['conditions' => 'id = "'.$programId.'"'];
        }

        $list = $this->ProgramsModel->find($params);

        foreach($list as $item) {
            $item_properties = H::getObjectProperties($item);
            $response[] = $item_properties;
        }
        echo json_encode($response);
    }
}