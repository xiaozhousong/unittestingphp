<?php
/**
 * Copyright (C) 2017 G2S LTD. All right's reserved.
 *
 * Author: Kofi Richardson
 * Code Release Version: 1.0
 * Website: http://www.g2sltd.com
 *
 * This code is part of the Product Care booking portal Symfony application.
 * The code should not be distributed or copied elsewhere without authorisation.
 */
// application.php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;

// TODO: Instantiate a new console application.

$application = new Application();

$application->add(new \Xiaozhou\Command\LottoNumberGeneratorCommand());
// ... register commands

$application->run();


// Add the console command LottoNumberGeneratorCommand to the console application


// TODO: Run the console application
