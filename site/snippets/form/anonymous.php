<form action="<?php echo $page->url() ?>" method="POST" class="border-wilberg-light border-24 pt-6 ">

    <div class="px-6">
        <?php snippet(
            'form/field/textarea',
            array(
                'form_name' => $anonymousform,
                'field_name' => 'message',
                'field_label' => 'Was ich mitteilen möchte…',
                'rows' => '6'
            )
        ); ?>
    </div>

    <?php echo csrf_field(); ?>
    <?php echo honeypot_field(); ?>
    <input type="hidden" name="formtitle" value="anonymousform">
    <div class="flex flex-row justify-end w-full">
        <input type="submit" value="Schicken" class="bg-wilberg-text text-white hover:bg-wilberg-borders py-3 px-6 text-base sm:text-lg cursor-pointer">
    </div>

</form>