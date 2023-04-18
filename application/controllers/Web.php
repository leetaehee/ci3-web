<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Web extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo "aa()";
    }

    public function b()
    {
        echo "b()";
    }

    public function c()
    {
        echo "c()";
    }

    public function d()
    {
        echo "11";
    }
}
