<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Coins.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {

        return $app['twig']->render('index.html.twig');
    });

    $app->get("/return_results", function() use ($app) {
        $my_coins = new Coins;

        if (($_GET['coin']) >= 0) {
            $results = $my_coins->returnChange($_GET['coin']);
        } else {
            echo "dummy";
            $results = false;
        }

        return $app['twig']->render('index.html.twig', array(
            'results' => $results
        ));
    });

    return $app;
?>
