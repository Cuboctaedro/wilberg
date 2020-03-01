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

isset($attributes) || $attributes = '';
isset($info_classses) || $info_classses = 'text-sm mb-3 text-gray-700';
isset($wrapper_classes) || $wrapper_classes = 'flex flex-row items-center cursor-pointer';
isset($input_classes) || $input_classes = '';
isset($label_classes) || $label_classes = '';
isset($error_classes) || $error_classes = 'text-red-700 text-sm w-full';
?>


<?php if (isset($field_info)) : ?>
<div class="<?= h($info_classses); ?>">
    <?= h($field_info); ?>
</div>
<?php endif; ?>

<label
       class="checkbox <?= h($wrapper_classes); ?> <?php e($form_name->error($field_name), ' has-error ', ''); ?>"
       for="<?= h($field_name); ?>">

    <input
           class="checkbox__input"
           type="checkbox"
           name="<?= h($field_name); ?>"
           id="<?= h($field_name); ?>"
           <?php e($form_name->old($field_name) == 'on', ' checked'); ?>
    <?= h($attributes); ?>
    />
    <span class="checkbox__mark <?= h($input_classes); ?>"></span>

    <span class="checkbox__label <?= h($label_classes); ?>">
        <?= h($field_label); ?>
    </span>

</label>

<?php if ($form_name->error($field_name)) : ?>
<p class="<?= h($error_classses); ?>">
    <?= implode('<br>', $form_name->error($field_name)) ?>
</p>
<?php endif;
