<?php
/*
 * Required variables:
 *
 * $form_name (the form as defined in the controller)
 * $field_name (field name)
 * $field_label (the field label)
 *
 * Optiona variables
 *
 * $attributes (extra attributes like 'required' or 'disabled')
 * $field_info (extra text instructions after the label)
 */

$attributes = isset($attributes) ? $attributes : ' ';

?>

<?php if (isset($field_info)) : ?>
    <div class=" text-sm mb-3 text-gray-700"><?= $field_info ?></div>
<?php endif; ?>

<label class="field__label flex flex-row items-center cursor-pointer <?php e($form_name->error($field_name), ' has-error ', ''); ?>" for="<?= $field_name ?>">
    <input class=" order-2 w-6 h-6 block border-none bg-white" type="checkbox" name="<?= $field_name ?>" id="<?= $field_name ?>" <?php e($form_name->old($field_name) == 'on', ' checked') ?> />
    <span class="order-1 pr-2 text-wilberg-main font-bold text-right"><?= $field_label ?></span>
</label>

<?php if ($form_name->error($field_name)) : ?>
    <p class="text-red-700 text-sm w-full"><?= implode('<br>', $form_name->error($field_name)) ?></p>
<?php endif; ?>