<?php
    require __DIR__ . "/vendor/autoload.php";
    use AuthMe\Application;

    $username = $argv[1];
    $account = $argv[2];
    $privateKey = file_get_contents($argv[3]);

    $application = new Application($account, $privateKey);
    print_r($application->authenticate($username));
?>