<?php
namespace App\Traits;

trait FlashMessages {
    protected $errorMessages = [];
    protected $infoMessage = [];
    protected $sucessMessage = [];
    protected $warningMesage = [];

    protected function setFlashMessage($message, $type) {
        $model = '';
        switch($type) {
            case 'error': {
                $model = 'errorMessages';
            }
            case 'info': {
                $model = 'infoMessage';
            }
            case 'sucess': {
                $model = 'sucessMessage';
            }
            case 'warning': {
                $model = 'warningMessage';
            }
            break;
        }

        if(is_array($message)) {
            foreach($message as $key => $value) 
                array_push($this->$model,$value);
            } else {
                array_push($this->$model,$message);
        }
    }

    protected function getFlashMessage()
    {
        return [
            'error' => $this->errorMessages,
            'info' => $this->infoMessages,
            'success' => $this->successMessages,
            'warning' => $this->warningMessages,
        ];
    }

    protected function showFlashMessage() {
        session()->flash('error', $this->errorMessage);
        session()->flash('info', $this->infoMessage);
        session()->flash('sucess', $this->sucessMessage);
        session()->flash('warning', $this->warningMessage);
    }
}

