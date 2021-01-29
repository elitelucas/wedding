<?php

class Migrate extends CI_Controller
{

        public function index()
        {
           // print_r('asdfddd');die();
                $this->load->library('migration');
print_r('asdfddd');die();
                if ($this->migration->current() === FALSE)
                {
                        show_error($this->migration->error_string());
                }
        }

}