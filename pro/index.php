<?php

define('BASEDIR', __dir__);

include BASEDIR . '/Common/Loader.php';
spl_autoload_register('\\Common\\Loader::autoload');

class Page
{
    protected $strategy;
    public function index()
    {
        echo "AD: ";
        $this->strategy->showAd();
        echo "<br />";

        echo "category: ";
        $this->strategy->showCategory();
        echo "<br />";
    }

    public function setStrategy(\Common\UserStrategy $strategy)
    {
        $this->strategy = $strategy;
    }
}

$page = new Page();

if (isset($_GET['female']))
{
    $strategy = new \Common\FemaleUserStrategy();
}
else
{
    $strategy = new \Common\MaleStrategy();
}

$page->setStrategy($strategy);

$page->index();

