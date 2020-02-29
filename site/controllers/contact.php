<?php

use Uniform\Form;

return function ($site, $pages, $page, $kirby) {

    $anonymousform = new Form([
        'message' => [
            'rules' => ['required'],
            'message' => 'Please enter a message',
        ],
    ]);

    if ($kirby->request()->is('POST') && get('formtitle') == 'anonymousform') {
        $anonymousform->honeypotGuard()
            ->anonymousmailaction();
    }

    $contactform = new Form([
        'name' => [
            'rules' => ['required'],
            'message' => 'Please enter your name',
        ],
        'email' => [
            'rules' => ['required', 'email'],
            'message' => 'Please enter your email',
        ],
        'phone' => [
            'rules' => ['required'],
            'message' => 'Please enter your mobile phone number',
        ],
        'newsletter' => [],
        'sms' => [],
        'aktiv' => [],
        'spenden' => [],
        'message' => [],
        'gdpr' => [
            'rules' => ['required'],
            'message' => 'Please check',
        ],

    ]);

    if ($kirby->request()->is('POST') && get('formtitle') == 'contactform') {
        $contactform->honeypotGuard()
            ->contactformaction();
    }


    return compact('anonymousform', 'contactform');
};
