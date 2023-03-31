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
        $result = $this->ufcmodel->getufinfo();
        
        $rows = '';
        foreach ($result as $ufcranking ) {
            $rows .="
            <tr>
                <td>$ufcranking->name</td>
                <td>$ufcranking->ranking</td>
                <td>$ufcranking->length</td>
                <td>$ufcranking->weigth</td>
                <td>$ufcranking->age</td>
                <td>$ufcranking->winsbyknockout</td>
            </tr>";
        }

        $data = [
            'title' => 'mens pound ofr pound top rank ufc',
            'rows'=> $rows
        ];

        $this->view('ufc/index', $data);
    }
}

