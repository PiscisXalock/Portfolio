<?php 

require_once 'config/directories.php';

class DefaultController
{
    public $page_title;
	public $view;

    public function __construct()
    {
        $this->main();
    }

    public function header()
    {
        //
    }

    public function footer()
    {
        //
    }

    public function main()
    {
        $this->view = VIEW;
    }
}