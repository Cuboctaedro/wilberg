<form action="<?php echo $page->url() ?>" method="POST"
      class="bg-wilberg-main px-6 py-8"
      id="contactform">

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

    <fieldset class="bg-wilberg-text p-3 mb-6">

        <div class="pb-2">
            <?php
            snippet(
                'form/field/checkbox',
                array(
                    'form_name' => $contactform,
                    'field_name' => 'newsletter',
                    'field_label' => 'Newsletter abonnieren:',
                    'label_classes' => 'pl-3 text-wilberg-main font-bold text-right',
                    'wrapper_classes' => 'flex flex-row items-center justify-end cursor-pointer'
                )
            );
            ?>
        </div>

        <div class="pb-2">
            <?php
            snippet(
                'form/field/checkbox',
                array(
                    'form_name' => $contactform,
                    'field_name' => 'sms',
                    'field_label' => 'SMS-Benachrichtigungen aktivieren:',
                    'label_classes' => 'pl-3 text-wilberg-main font-bold text-right',
                    'wrapper_classes' => 'flex flex-row items-center justify-end cursor-pointer'
                )
            );
            ?>
        </div>

        <div class="pb-2">
            <?php
            snippet(
                'form/field/checkbox',
                array(
                    'form_name' => $contactform,
                    'field_name' => 'aktiv',
                    'field_label' => 'Ich möchte aktiv mitmachen. Bitte kontaktieren Sie mich:',
                    'label_classes' => 'pl-3 text-wilberg-main font-bold text-right',
                    'wrapper_classes' => 'flex flex-row items-center justify-end cursor-pointer'
                )
            );
            ?>
        </div>

        <div class="pb-2">
            <?php
            snippet(
                'form/field/checkbox',
                array(
                    'form_name' => $contactform,
                    'field_name' => 'spenden',
                    'field_label' => 'Ich möchte spenden. Bitte kontaktieren Sie mich:',
                    'label_classes' => 'pl-3 text-wilberg-main font-bold text-right',
                    'wrapper_classes' => 'flex flex-row items-center justify-end cursor-pointer'
                )
            );
            ?>
        </div>

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
                'field_label' => 'Einwilligungserklärung',
                'label_classes' => 'text-wilberg-main font-bold text-right',
                'input_classes' => 'border-wilberg-main border'
            )
); ?>

        <?= csrf_field(); ?>
        <?= honeypot_field(); ?>
        <input type="hidden" name="formtitle" value="contactform">
        <button type="submit"
                form="contactform"
                value="Submit"
                class="flex flex-row items-center bg-wilberg-text text-wilberg-main hover:bg-wilberg-borders py-2 pl-6 pr-3 text-base sm:text-lg cursor-pointer">
            <span class="">Schicken</span>
            <span class="w-8 h-8"><?php snippet('icons/material/arrow_right'); ?></span>
        </button>
    </div>

</form>
