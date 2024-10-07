<?php

class BsForm {

    protected $components = [];
    protected $action = '';
    protected $method = 'get';

    public function setInputText($id, $name, $Label){
        $iText = '<div class="mb-3">
                        <label for="' . $id . '">' . $Label . '</label>
                        <input class="form-control" type="text" name="' . $name . '" id="' . $id . '">
                    </div>';
            array_push($this->components, $iText);
    }

    public function setInputTextarea(){

    }

    public function setButton($Label){
        $btn = '<div class="mb-3">
                     <button type="button" class="btn btn-primary">' . $Label . ' </button>
                  </div>';

        array_push($this->components, $btn);
    }

    public function setForm($action, $method){
        $this->action = $action;
        $action->method = $method;

    }

    public function showForm(){
        echo '
        <form action="' . $this->action . '"method="' . $this->method . '">';

        foreach($this->components as $item){
            echo $item;
        }

        echo '</form>';
    }
}