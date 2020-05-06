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
 * $rows 
 *
 */
$attributes = isset($attributes) ? $attributes : ' ';
$rows = isset($rows) ? $rows : '4';
?>

<label class="w-full label text-lg md:text-xl font-light pb-4" for="<?= $field_name ?>"><?= $field_label ?></label>
<?php if (isset($field_info)) : ?>
    <div class="w-full text-sm mb-3 text-gray-700"><?= $field_info ?></div>
<?php endif; ?>

<textarea class="w-full py-1 px-2 <?php e($form_name->error($field_name), ' bg-red-100 ', 'bg-white'); ?>  focus:bg-gray-200" id="<?= $field_name ?>" name="<?= $field_name ?>" rows="<?= $rows ?>" <?= $attributes ?>>
<?= $form_name->old($field_name) ?>
</textarea>
<?php if ($form_name->error($field_name)) : ?>
    <p class="text-red-700 text-sm text-right w-full"><?= implode('<br>', $form_name->error($field_name)) ?></p>
<?php endif; ?>