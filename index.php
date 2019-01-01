<?php
    $useragent=$_SERVER['HTTP_USER_AGENT'];
    if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($useragent,0,4)))
        header('Location: https://codascii.github.io/cvm/');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/cvmhoumadi.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/solid.css" integrity="sha384-aj0h5DVQ8jfwc8DA7JiM+Dysv7z+qYrFYZR+Qd/TwnmpDI6UaB3GJRRTdY8jYGS4" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/fontawesome.css" integrity="sha384-WK8BzK0mpgOdhCxq86nInFqSWLzR5UAsNg0MGX9aDaIIrFWQ38dGdhwnNCAoXFxL" crossorigin="anonymous">
        <script type="text/javascript" src="assets/js/cvmhoumadi.js"></script>
        <title>Mohamed HOUMADI</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <header class="container-fluid">
            <div class="container offset-lg-1 col-lg-11 col-md-12" id="identite">
                <div class="row">
                    <div id="identite-img" class="rounded-circle">
                        <img src="assets/img/mhoumadi.jpg" alt="Photo de Mohamed HOUMADI" class="rounded-circle"/>
                    </div>
                    <div id="identite-infos" class="offset-lg-1 col-lg-8">
                        <h1 class="text-danger">Mohamed HOUMADI</h1>
                        <h5>Développeur Web</h5>
                        <div id="contacts">
                            <p>Mail : <a href="mailto:houmadi.bacar.mohamed@gmail.com">houmadi.bacar.mohamed@gmail.com</a></p>
                            <p>LinkedIn : <a href="https://www.linkedin.com/in/mohamed-houmadi-73a10413a/" target="_blank">https://www.linkedin.com/in/mohamed-houmadi</a></p>
                            <p>Tél. : <a href="tel:+33783657388">+33 7 83 65 73 88</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid">
            <div class="container">
                <blockquote class="text-center">
                    <h6>
                        <i class="fas fa-quote-left"></i>
                        <span>Je suis passioné de développement web. Je m'intéresse beaucoup aux nouvelles technologies. JavaScript est mon ami.</span>
                        <i class="fas fa-quote-right"></i>
                    </h6>
                </blockquote>
            </div>
        </div>
        <section class="container-fluid">
            <div class="container">
                <h2 class="text-center text-uppercase">expérience professionnelle</h2>
                <p>&nbsp;</p>
                <div class="timeline">
                    <div class="block left">
                        <div class="content">
                            <h5>A-SIS</h5>
                            <h6>Sept. 2017 - Aujourd'hui</h6>
                            <p>
                                <ul>
                                    <li>Développement en C</li>
                                    <li>Développement des IHM avec PowerBuilder</li>
                                    <li>Base de donnée Oracle</li>
                                    <li>Développement et intégration de solution cliente</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                    <div class="block right">
                        <div class="content">
                            <h5>NUMERIBANK</h5>
                            <h6>Jan. - Juin 2017 (6 mois)</h6>
                            <p>
                                <ul>
                                    <li>Développement d'une application mobile android</li>
                                    <li>Développement en C# avec <a href="https://visualstudio.microsoft.com/fr/xamarin/">Xamarin</a></li>
                                    <li>Mise en place d'un web service soap</li>
                                    <li>Mise en place des moyens d'échanges avec la base de données</li>
                                    <li>Possibilité d'usage en offline</li>
                                    <li>Synchronisation des données</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                    <div class="block left">
                        <div class="content">
                            <h5>MONDIAL TELECOM</h5>
                            <h6>23 mai - 1<sup>er</sup> Juil. 2016 (6 semaines)</h6>
                            <p>
                                <ul>
                                    <li>Maintenance du site web du magasin</li>
                                    <li>Modernisation du site web</li>
                                    <li>Vente de marchandises</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <p>&nbsp;</p>
            </div>
        </section>
        <section class="container-fluid competences">
            <div class="conatiner">
                <p>&nbsp;</p>
                <h2 class="text-center text-uppercase">compétences</h2>
                <p>&nbsp;</p>
                <ul class="text-center">
                    <li>
                        <div>
                            <p>HTML 5 / CSS 3</p>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 77%" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;77%</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <p>JavaScript / jQuery</p>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 66%;" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;66%</div>
                        </div>
                    </li>
                    <li>
                        <p>PHP / Symfony 4.2</p>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 58%;" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;58%</div>
                        </div>
                    </li>
                    <li>
                        <p>C / C++</p>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 81%;" aria-valuenow="81" aria-valuemin="0" aria-valuemax="100">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;81%</div>
                        </div>
                    </li>
                    <li>
                        <p>NodeJS / React / Reacst Native</p>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 9%;" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9%</div>
                        </div>
                    </li>
                </ul>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
            </div>
        </section>
        <section class="container-fluid">
            <div class="container">
                <h2 class="text-center text-uppercase">formations</h2>
                <p>&nbsp;</p>
                <div class="timeline">
                    <div class="block left">
                        <div class="content">
                            <h5>ECOLE PRIVE DES SCIENCES INFORMATIQUE (EPSI)</h5>
                            <h6>Oct. 2018 - Aujourd'hui</h6>
                            <p>30 modules sont enseignés en 4<sup>ème</sup> année</p>
                            <ol>
                                <li>Web service</li>
                                <li>Role Play (Anglais)</li>
                                <li>Modéliation décisionnelle</li>
                                <li>Apprentissage profonde et réseaux de neurones</li>
                                <li>Mise en oeuvre de la virtualisation</li>
                                <li>Analyse financière</li>
                                <li>Système embarqués</li>
                                <li>Outil de chiffrement</li>
                                <li>Suites & séries numérique</li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ol>
                        </div>
                    </div>
                    <div class="block right">
                        <div class="content">
                            <h5>CONSERVATOIRE NATIONAL DES ARTS ET METIERS (CNAM)</h5>
                            <h6>Oct. 2017 - Juil. 2018</h6>
                            <p>
                            <ul>
                                <li>Recherche opérationnelle et aide à la décision</li>
                                <li>Programmation avancée (en Java)</li>
                                <li>Conception et administration de bases de données (enseigné par <a href="https://www.linkedin.com/in/bbonche/">Bernard Bonche</a>)</li>
                                <li>Pratiques écrites et orales de la communication professionnelle (enseigné par <a href="https://www.linkedin.com/in/hugues-hippler/">Hugues Hippler</a>)</li>
                                <li>Méthodologies des systèmes d'information (enseigné par <a href="https://www.linkedin.com/in/gilles-gaillard-2895b944/">Gilles Gaillard</a>)</li>
                                <li>Linux : principes et programmation</li>
                                <li>Conduite d'un projet informatique</li>
                                <li>Réseaux et télécommunications</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <p>&nbsp;</p>
            </div>
        </section>
        <section class="container-fluid loisirs">
            <div class="conatiner">
                <p>&nbsp;</p>
                <h2 class="text-center text-uppercase">loisirs</h2>
                <p>&nbsp;</p>
                <div class="text-center">
                    <span class="loisir">Course à pied</span>
                    <span class="loisir">Natation</span>
                    <span class="loisir">Lecture</span>
                </div>
            </div>
        </section>
    </body>
</html>