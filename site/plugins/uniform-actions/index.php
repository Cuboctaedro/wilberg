<?php

namespace Uniform\Actions;

use Kirby\Cms\App;

$receiverMail = 'buergerpost@wilberg.nrw';
$senderMail = 'buergerpost@wilberg.nrw';

class ContactFormAction extends Action {

    public function perform() {
        $kirby = kirby();
        $formMail = $this->form->data('email');
        try {
            $kirby->email( [
                'to'       => $receiverMail,
                'from'     => $senderMail,
                'subject'  => 'Kontaktformular: ' . $formMail,
                'template' => 'contactmail',
                'data'     => [
                    'data' => $this->form->data(),
                 ]
            ]);
        } catch (Exception $error) {
            echo $error;
        }
    }
}

class AnonymousFormAction extends Action {

    public function perform() {
        $kirby = kirby();
        try {
            $kirby->email( [
                'to'       => $receiverMail,
                'from'     => $senderMail,
                'subject'  => 'Kontaktformular - anonym',
                'template' => 'anonymmail',
                'data'     => [
                    'data' => $this->form->data(),
                 ]
            ]);
        } catch (Exception $error) {
            echo $error;
        }
    }
}