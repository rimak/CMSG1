<?php
namespace Controller;

use Model\PageRepository;

class PageController {

    private $repository;

    public function __construct(\PDO $pdo)
    {
        $this->repository = new PageRepository($pdo);
    }

    public function detailsAction(\PDO $pdo)
    {

    }

    public function ajoutAction(\PDO $pdo)
    {

    }

    public function supprimerAction(\PDO $pdo)
    {

    }

    public function modifierAction(\PDO $pdo)
    {

    }

    public function listeAction(\PDO $pdo)
    {

    }

    public function displayAction(\PDO $pdo)
    {

    }
}