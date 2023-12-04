<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HitungMatahati extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('matahati');
    }
    function index()
    {
        $this->matahati->total(2, 150000, 300000, 350000, 239000, true);
    }
}