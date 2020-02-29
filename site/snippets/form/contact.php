<form action="<?php echo $page->url() ?>" method="POST" class="bg-wilberg-main px-6 py-8">

    <div class="bg-wilberg-text p-3 mb-6 md:flex flex-row items-center">
        <?php snippet(
            'form/field/input',
            array(
                'form_name' => $contactform,
                'field_name' => 'name',
                'field_label' => 'Vorname, Nachname:'
            )
        ); ?>
    </div>

    <div class="bg-wilberg-text p-3 mb-6 md:flex flex-row items-center">
        <?php snippet(
            'form/field/input',
            array(
                'form_name' => $contactform,
                'field_name' => 'email',
                'field_type' => 'email',
                'field_label' => 'Meine E-mail:'
            )
        ); ?>
    </div>

    <div class="bg-wilberg-text p-3 mb-6 md:flex flex-row items-center">
        <?php snippet(
            'form/field/input',
            array(
                'form_name' => $contactform,
                'field_name' => 'phone',
                'field_label' => 'Meine mobile Telefonnummer:'
            )
        ); ?>
    </div>

    <fieldset class="bg-wilberg-text p-3 mb-6 flex flex-row flex-wrap xl:flex-no-wrap">

        <?php snippet(
            'form/field/checkbox',
            array(
                'form_name' => $contactform,
                'field_name' => 'newsletter',
                'field_label' => 'Newsletter abonnieren:'
            )
        ); ?>

        <?php snippet(
            'form/field/checkbox',
            array(
                'form_name' => $contactform,
                'field_name' => 'sms',
                'field_label' => 'SMS-Benachrichtigungen aktivieren:'
            )
        ); ?>

        <?php snippet(
            'form/field/checkbox',
            array(
                'form_name' => $contactform,
                'field_name' => 'aktiv',
                'field_label' => 'Ich möchte aktiv mitmachen. Bitte kontaktieren Sie mich:'
            )
        ); ?>

        <?php snippet(
            'form/field/checkbox',
            array(
                'form_name' => $contactform,
                'field_name' => 'spenden',
                'field_label' => 'Ich möchte spenden. Bitte kontaktieren Sie mich:'
            )
        ); ?>

    </fieldset>

    <div class="bg-white px-6 pt-4">
        <?php snippet(
            'form/field/textarea',
            array(
                'form_name' => $contactform,
                'field_name' => 'message',
                'field_label' => 'Was ich mitteilen möchte…',
                'rows' => '8'
            )
        ); ?>
    </div>

    <div class="bg-white flex justify-between pl-6">
        <?php snippet(
            'form/field/checkbox',
            array(
                'form_name' => $contactform,
                'field_name' => 'gdpr',
                'field_label' => 'Einwilligungserklärung'
            )
        ); ?>

        <?= csrf_field(); ?>
        <?= honeypot_field(); ?>
        <input type="hidden" name="formtitle" value="contactform">
        <input type="submit" value="Schicken" class="bg-wilberg-text text-wilberg-main hover:bg-wilberg-borders py-3 px-6 text-base sm:text-lg cursor-pointer">

    </div>

</form>