<?php


class Product
{
    private $name;

    public function __construct($name = null)
    {
        $this->setName($name);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

}
/**
 * @file
 * The PHP page that serves all page requests on a Drupal installation.
 *
 * All Drupal code is released under the GNU General Public License.
 * See COPYRIGHT.txt and LICENSE.txt files in the "core" directory.
 */


use Drupal\Core\DrupalKernel;
use Symfony\Component\HttpFoundation\Request;

$autoloader = require_once 'autoload.php';

$request = Request::createFromGlobals();
$uri = $request->getPathInfo();

$kernel = new DrupalKernel('prod', $autoloader);

$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();

$kernel->terminate($request, $response);

switch ($uri) {
    case '/':
        echo $twig->render('node--zeus.html.twig', array(
            'pagetitle'    => 'Up!',
            'products' => array(
                'Businessman',
                'Dress',
                'Sportstar',
                'Angel ',
                'Accessories',
                'Super Cool',
            ),
        ));

        break;
        default:

        $template = substr($uri, 1).'.twig';

        echo $twig->render($template, array(
            'title' => 'Some random page!',
        ));
    }
