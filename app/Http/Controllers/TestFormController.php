<?php

namespace App\Http\Controllers;

use App\Forms\TestForm;
use Facade\Ignition\Tabs\Tab;
use Illuminate\Http\Request;
use Merax\Tables\Table;

class TestFormController extends Controller
{
    public function test(TestForm $form, Table $table)
    {
        $table->init()->build();
        return $form->build();
    }
}
