<?php

namespace App\Controller;

use App\Entity\Support;
use App\Repository\SupportRepository;
use Core\Http\Response;

class SportController extends \Core\Controller\Controller
{

    public function index():Response
    {

        $supportRepository = new SupportRepository();

        $support = $supportRepository->findAll();


        return $this->render("support/index",[
            "pageTitle"=>"Les Support",
            "support"=>$support
        ]);
    }

    public function show():Response
    {

        if(!empty($_GET['id']) && ctype_digit($_GET['id']))
        {
            $id = $_GET['id'];
        }



        $sportsRepository = new SupportRepository();

        $sport = $sportsRepository->find($id);

        return $this->render("support/show",[
            "pageTitle"=> "un support",
            "support"=>$support
        ]);
    }
    public function delete():Response
    {

        if(!empty($_GET['id']) && ctype_digit($_GET['id']))
        {
            $id = $_GET['id'];
        }

        $sportRepository = new SupportRepository();

        $sportRepository->delete($id);

        return $this->redirect("?type=support&action=index");
    }

    public function create():Response
    {
        $name =null;
        $type =null;
        $difficulty =null;

        if(!empty($_POST['name'])){$name = $_POST['name'];}
        if(!empty($_POST['description'])){$type = $_POST['type'];}
        if(!empty($_POST['difficulty'])){$difficulty = $_POST['difficulty'];}

        if($name && $type && $difficulty)
        {
            $support = new Support();
            $support->setName($name);
            $support->setType($type);
            $support->setDifficulty($difficulty);

            $sportRepository = new SupportRepository();

            $supportRepository->save($support);

            return $this->redirect("?type=support&action=index");

        }

        return $this->render("support/create", [
            "pageTitle"=>"Nouveau Support"
        ]);
    }
}