<?php
// Attention on doit préciser au programme l'espace de nom à utiliser
namespace App;

//Je vais chercher le Router se trouvant dans mon espace de nom dans le dossier Services
use App\Services\Router;
require_once ("./autoload.php");

//On détermine quel est la route $page
$router = new Router();
$page = $router-> getPage();
echo "<h1>$page</h1>";

//On charge le controller correspondant
$controllerName = 'App\Controllers\\'.ucfirst($page).'Controller';
$controller = new $controllerName();
$controller->index();


?>