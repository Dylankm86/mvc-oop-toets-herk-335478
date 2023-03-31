<?php

class ufc extends basecontroller
{
    private $ufcmodel;

    public function __construct()
    {
       $this->ufcmodel = $this->model('ufcmodel');
    }

    public function index()
    {
        $result = $this->ufcmodel->getufcinfo();
        
        $data = [
            'title' => 'mens pound ofr pound top rank ufc'
        ];

        $this->view('ufc/index', $data);
    }
}
