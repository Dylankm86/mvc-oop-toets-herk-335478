<?php

class ufc extends basecontroller
{
    public function index()
    {
        $data = [
            'title' => 'mens pound ofr pound top rank ufc'
        ];

        $this->view('ufc/index', $data);
    }
}
