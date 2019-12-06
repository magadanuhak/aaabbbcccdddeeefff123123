<?php


namespace App\Forms;


use MeraxForms\Components\Input;
use MeraxForms\Components\Select;
use MeraxForms\Form;

class TestForm extends Form
{
    public function init()
    {
        $this->setTitle(" Form Title")
            ->setDescription('Test form description')
            ->addComponents(
          Input::create('name')->setProps(['type' => 'text']),
                Select::create('people')
        );
    }
}
