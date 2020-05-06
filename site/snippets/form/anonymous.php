<form action="<?php echo $page->url() ?>" method="POST"
      class="border-wilberg-light border-24 pt-6 " id="anonymousform">

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
        <button type="submit"
                form="anonymousform"
                value="Submit"
                class="flex flex-row items-center bg-wilberg-text text-white hover:bg-wilberg-borders py-2 pl-6 pr-3 text-base sm:text-lg cursor-pointer">
            <span class="">Schicken</span>
            <span class="w-8 h-8"><?php snippet('icons/material/arrow_right'); ?></span>
        </button>
    </div>

</form>
