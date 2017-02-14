<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Compare.php';

    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(
            new Silex\Provider\TwigServiceProvider(), array('twig.path'=>__DIR__.'/../views'));

    $app->get('/', function() use ($app){

        return $app ['twig']->render('home.html.twig');
    });

    $app->get('/anagram_list', function() use ($app){
        $word_one = $_GET['word_one'];
        $word_list = $_GET['word_list'];

        $anagram_comparison = new Compare($word_one, $word_list);

        $new_comparison= $anagram_comparison->anagramCompare($word_one, $word_list);
        return $app ['twig']->render('anagram_list.html.twig', array('word_one' => $word_one, 'new_comparison' => $new_comparison));
    });


    return $app;
?>
