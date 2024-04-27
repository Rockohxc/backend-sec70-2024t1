<?php
include_once '../version1.php';

//parametros
$existeId = false;
$valorId = 0;

if (count($_parametros)>0){
    foreach($_parametros as $p){
        if(strpos($p, 'id') !== false){
            $existeId = true;
            $valorId = explode('=', $p)[1];
        }
    }
}

if($_version == 'v1'){
    if ($_mantenedor == 'mantenedor'){
        switch ($_metodo){
            case 'GET':
                if($_header == $_token_get){
                   /* include_once 'controller.php';
                    include_once '../conexion.php';
                    $control = new Controlador();
                    $lista = $control->getAll();
                    http_response_code(200);
                    echo json_encode(['data' => $lista]); */

                    $retorno = [
                        [
                            "mision" => [
                                "titulo" => [
                                    "esp" => "mision",
                                    "eng" => "Mision"
                                ],
                                "contenido" => [
                                    "esp" => "Nuestra misión es ofrecer soluciones digitales innovadoras y de alta calidad que impulsen el éxito de nuestros cliehtes, ayudándolos a alcanzar sus objetipos empresariales a través de la tecnología y la",
                                    "eng" => "Our mission is to offer innovative, high-quality digital solutions that drive the success of our clients, helping them achieve their business objectives through technology and"
                                ]
                            ],
                            "activo" => true
                        ],
                        [
                            "vision" => [
                                "titulo" => [
                                    "esp" => "vision",
                                    "eng" => "vission"
                                ],
                                "contenido" => [
                                    "esp" => "Nosotros visualizamos como líderes en el campo de la consultoría y desarrollo de software, reconocidos por nuestra excelencia en el servicio al cliente, nuestra capacidad para adaptarnos a las necesidades cambiantes del mercado nuestra contribución al crecimiento y la transformación digital de las Compañias",
                                    "eng" => "We envision ourselves as leaders in the field of software consulting and development, recognized for our excellence in customer service, our ability to adapt to changing market needs, our contribution to the growth and digital transformation of companies."
                                ]
                            ],
                            "activo" => true
                        ],

                    ];
                    http_response_code(200);
                    echo json_encode(['data' => $retorno]);

                }else{
                    http_response_code(401);
                    echo json_encode(['error' => 'no tiene autorizacion get']);
                }
                break;
            default:
                break;
        }
    }
}