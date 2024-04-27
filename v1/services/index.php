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
                            "id" => 1,
                            "titulo" => [
                                "esp" => "consultoria digital",
                                "eng" => "Digital Consult"
                            ],
                            "texto" => [
                                "esp" => "Identificamos las fallas y conectamos los puntos entre tu negocio y tu estrategia digital. Nuestro equipo experto
                                cuenta con años de experiencia
                                en la definición de estrategias y hojas de ruta en función de tus objetivos específicos.",
                                "eng" => "We identify failures and connect the dots between your business and your digital strategy. Our expert team has years of experience defining strategies and roadmaps based on your specific objectives."
                            ],

                            "activo" => true
                        ],
                        [
                            "id" => 2,
                            "titulo" => [
                                "esp" => "Soluciones multiexperiencia",
                                "eng" => "Multi experience solutions"
                            ],
                            "texto" => [
                                "esp" => "Deleitamos a las personas usuarias interfaces con experiencias interconectadas a través de aplicaciones web, móviles, conversacionales, digital twin, IoT y AR. Su arquitectura puede adaptarse y evolucionar para adaptarse a los cambios de tu organización.",
                                "eng" => "We delight users with interfaces with interconnected experiences through web, mobile, conversational, digital twin, IoT and AR applications. Its architecture can adapt and evolve to adapt to the changes in your organization."
                            ],
                            "activo" => true
                        ],
                        [
                            "id" => 3,
                            "titulo" => [
                                "esp" => "Evolución de ecosistema",
                                "eng" => "Ecosystem evol"
                            ],
                            "texto" => [
                                "esp" => "Ayudamos a las empresas a evolucionar y ejecutar sus aplicaciones de forma eficiente, desplegando equipos especializados en la modernización y el mantenimiento de ecosistemas técnicos. Creando soluciones robustas en tecnologías de vanguardia",
                                "eng" => "We help companies evolve and run their applications efficiently, deploying teams specialized in the modernization and maintenance of technical ecosystems. Creating robust solutions in cutting-edge technologies."
                            ],
                            "activo" => true
                        ],
                        [
                            "id" => 4,
                            "titulo" => [
                                "esp" => "Soluciones Low-Code",
                                "eng" => "LowCode Solutions"
                            ],
                            "texto" => [
                                "esp" => "Traemos el poder de las soluciones low-code y no-code para ayudar a nuestros clientes a acelerar su salida al mercado y añadir valor. Aumentamos la productividad y la calidad, reduciendo los requisitos de cualificación de los desarrolladores.",
                                "eng" => "We bring the power of low-code and no-code solutions to help our clients accelerate time to market and add value. We increase productivity and quality, reducing developer qualification requirements."
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
