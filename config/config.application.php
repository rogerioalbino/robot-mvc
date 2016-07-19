<?php 

$application = array(
    //modulo autenticacao
    "autenticacao" => array(
        "router" => array(
            "controller" => "AutenticacaoController",
            "method" => "indexAction"
        )
    ),
    
    //modulo usuario
    "usuario" => array(
        "router" => array(
            "controller" => "UsuarioController",
            "method" => "indexAction"
        )
    ),

    //modulo patters
    "nameModule" => array(
        "router" => array(
            "controller" => "NameController",
            "method" => "nameMethod"
        )
    )
    
);