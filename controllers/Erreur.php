<?php

class Erreur extends Controller{
    protected $exception;

    public function __construct(Exception $e) {
        $this->exception = $e;
    }

    public function index(){
        $message = "Erreur, veuillez retourner à la page d'accueil";
        $type_message = "error";
        
        
        $this->render('index', compact('message', 'type_message'));
    }

}