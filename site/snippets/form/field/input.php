<?php
/*
 * Required variables:
 *
 * $form_name (the form as defined in the controller)
 * $field_name (field name)
 * $field_label (the field label)
 *
 * Optional variables
 *
 * $field_type (input type, defaults to 'text')
 * $attributes (extra attributes like 'required' or 'disabled')
 * $field_info (extra text instructions)
 */

$field_type = isset($field_type) ? $field_type : 'text';
$attributes = isset($attributes) ? $attributes : ' ';

?>

<label class="label text-wilberg-main font-bold pr-3 flex-grow-0" for="<?= $field_name ?>"><?= $field_label ?></label>
<?php if (isset($field_info)) : ?>
    <div class="w-full text-sm mb-3 "><?= $field_info ?></div>
<?php endif; ?>
<input class="flex-grow py-1 px-2 <?php e($form_name->error($field_name), ' bg-red-100 ', 'bg-white'); ?>  focus:bg-gray-200" name="<?= $field_name ?>" type="<?= $field_type ?>" value="<?= $form_name->old($field_name) ?>" <?= $attributes ?> id="<?= $field_name ?>">
<?php if ($form_name->error($field_name)) : ?>
    <p class="text-red-700 text-sm text-right w-full"><?= implode('<br>', $form_name->error($field_name)) ?></p>
<?php endif; ?>