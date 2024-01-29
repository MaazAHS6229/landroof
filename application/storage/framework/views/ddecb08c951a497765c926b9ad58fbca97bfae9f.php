<?php $__currentLoopData = $webforms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $webform): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!--each row-->
<tr id="webform_<?php echo e($webform->webform_id); ?>">
    <td class="webform_col_date">
        <a href="<?php echo e(url('app/settings')); ?>/formbuilder/<?php echo e($webform->webform_id); ?>/build"><?php echo e($webform->webform_title); ?></a>
    </td>
    <td class="webform_col_name"><?php echo e(runtimeDate($webform->webform_created)); ?></td>
    <td class="webform_col_created_by">
        <img src="<?php echo e(getUsersAvatar($webform->avatar_directory, $webform->avatar_filename)); ?>" alt="user"
            class="img-circle avatar-xsmall">
        <?php echo e($webform->first_name); ?>

    </td>
    <td class="webforms_col_submitted">
        <?php echo e($webform->webform_submissions); ?>

    </td>
    <td class="webform_col_action actions_column">
        <!--action button-->
        <span class="list-table-action dropdown font-size-inherit">
            <!--edit-->
            <a title="<?php echo e(cleanLang(__('lang.edit'))); ?>"
                class="data-toggle-action-tooltip btn btn-outline-success btn-circle btn-sm"
                href="<?php echo e(url('app/settings')); ?>/formbuilder/<?php echo e($webform->webform_id); ?>/build">
                <i class="sl-icon-note"></i>
            </a>
            <!--delete-->
            <button type="button" title="<?php echo e(cleanLang(__('lang.delete'))); ?>"
                class="data-toggle-action-tooltip btn btn-outline-danger btn-circle btn-sm confirm-action-danger"
                data-confirm-title="<?php echo e(cleanLang(__('lang.delete_item'))); ?>"
                data-confirm-text="<?php echo e(cleanLang(__('lang.are_you_sure'))); ?>" data-ajax-type="DELETE"
                data-url="<?php echo e(url('/settings')); ?>/webforms/<?php echo e($webform->webform_id); ?>">
                <i class="sl-icon-trash"></i>
            </button>
        </span>
        <!--action button-->
    </td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!--each row--><?php /**PATH /home/visom6/crm_visom6_com/application/resources/views/pages/settings/sections/webforms/table/ajax.blade.php ENDPATH**/ ?>