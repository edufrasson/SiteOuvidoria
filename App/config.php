<?php

set_time_limit(0);

define('BASEDIR', dirname(__FILE__, 2));
define('VIEWS', BASEDIR . '/App/View/modules/');

$_ENV['db']['host'] = 'metoda.com.br:3306';
$_ENV['db']['user'] = 'metodaco_alunos';
$_ENV['db']['pass'] = 'jau@2022';
$_ENV['db']['database'] = 'metodaco_ouvidoria';