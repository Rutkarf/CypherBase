<?php
//  fichier de config de l'app

session_start();

const CONFIG=[
    'db'=>[
        'HOST'=>'localhost',
        'PORT'=>'3306',
        'NAME'=>'cypherbase',
        'USER'=>'root',
        'PWD'=>''

    ],
    'app'=>[
        'name'=>'cypherbase',
        'projecturl'=>'http://localhost/cypherbase'
    ]

];

const BASE_PATH='/cypherbase';