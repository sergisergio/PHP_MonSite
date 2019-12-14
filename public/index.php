<?php

// Contrôleur frontal

require_once '../config/config.php';
require_once '../config/config_db.php';
require_once '../vendor/autoload.php';

use App\Classes\Post\Repository as PostRepository;
//use App\Classes\Album\Collection as AlbumCollection;
use App\Controllers\PublicController;
use App\Classes\Tools\View;
use App\Classes\Post\Ui as PostUi;
//use App\Classes\Music\Ui as MusicUi;

// initialisation des variables
$title = '';
$c = '';
$nav = file_get_contents('../ui/fragments/nav.frg.html');
$footer = file_get_contents('../ui/fragments/footer.frg.html');
$skeleton = '../ui/pages/galerie.html.php';
$controller = new PublicController();

try {
    $getRequest = $_GET;
    $action = isset($getRequest['a']) ? $getRequest['a'] : '';

    switch ($action) {
        case 'ecouter':
            $title = "Ecoute de l'album";
            /*if (isset($getRequest['id'])) {
                $albumId = $getRequest['id'];
                $ListOfMusics = AlbumRepository::getPlayList($albumId);
                if (count($ListOfMusics) == 0) {
                    $c = 'Album vide, Ajoutez des pistes';
                } else {
                    $i = 0;
                    foreach ($ListOfMusics as $Music) {
                        $ui = MusicUi::factory($Music);
                        if ($i < 1) {
                            $c = '<section id="album_view" class="span6">' . $ui->makePlayer();
                            $c .= '<ol>';

                            $c .= '<li class="playing">' . $ui->makeHtml() . '</li>';
                            $i = 1;
                        } else {
                            $c .= '<li>' . $ui->makeHtml() . '</li>';
                        }
                    }
                    $c .= '</ol></section>';
                }

                $album = AlbumRepository::read($albumId);
                $albumUi = new AlbumUi($album);
                $c .= $albumUi->displayAlbumInfos();
            }*/
            break;

        case 'aide':
            return View::sendHttpResponse($controller->help());
            break;

        case 'blog':
            $blog = file_get_contents('../ui/fragments/blog.frg.php');
            //if (isset($getRequest['id'])) {
                //$albumId = $getRequest['id'];
                $ListOfPosts = PostRepository::getAllPosts();
                var_dump(count($ListOfPosts));
                die();
                if (count($ListOfPosts) == 0) {
                    $c = 'Aucun article';
                } else {
                    $i = 0;
                    foreach ($ListOfPosts as $Post) {
                        //$ui = PostUi::factory($Post);
                        /*if ($i < 1) {
                            $c = '<section id="album_view" class="span6">' . $ui->makePlayer();
                            $c .= '<ol>';

                            $c .= '<li class="playing">' . $ui->makeHtml() . '</li>';
                            $i = 1;
                        } else {
                            $c .= '<li>' . $ui->makeHtml() . '</li>';
                        }*/
                        $c .= 'hello';
                    }
                    //$c .= '</ol></section>';
                }

                //$album = AlbumRepository::read($albumId);
                //$albumUi = new AlbumUi($album);
                //$c .= $albumUi->displayAlbumInfos();
            //}
            break;
        default:
            $title = 'Portfolio';
            $header = file_get_contents('../ui/fragments/header.frg.html');
            $portfolio = file_get_contents('../ui/fragments/portfolio.frg.html');
            $about = file_get_contents('../ui/fragments/about.frg.html');
            $skills = file_get_contents('../ui/fragments/skills.frg.html');
            $contact = file_get_contents('../ui/fragments/contact.frg.html');
            //$selectionOfAlbums = AlbumRepository::getListAlbums(20);
            //$selectionOfAlbums = new AlbumCollection($selectionOfAlbums);
            //$c = $selectionOfAlbums->viewHtml();

            //$allAlbums = AlbumRepository::getAllAlbums();
            //$allAlbums = new AlbumCollection($allAlbums);
            //$c .= $allAlbums->viewTable();
    }
} catch (Exception $e) {
    $c = $e->getMessage();
    $c .= "<pre>{$e->getTraceAsString()}</pre>";
}

ob_start();
  require_once $skeleton;
  $html = ob_get_contents();
ob_end_clean();
echo $html;
