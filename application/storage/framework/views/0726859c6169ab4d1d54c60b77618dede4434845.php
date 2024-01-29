<div class="card-attachments" id="card-attachments" data-upload-url="<?php echo e(url('/leads/'.$lead->lead_id.'/attach-files')); ?>" >
    <div class="x-heading"><i class="mdi mdi-cloud-download"></i><?php echo e(cleanLang(__('lang.attachments'))); ?></div>
    <div class="x-content row" id="card-attachments-container">
        <!--dynamic content here-->
    </div>
    <?php if($lead->permission_participate): ?>
    <div class="x-action"><a class="card_fileupload" id="js-card-toggle-fileupload" href="javascript:void(0)"><?php echo e(cleanLang(__('lang.add_attachment'))); ?></a></div>

    <div class="hidden" id="card-fileupload-container">
        <div class="dropzone dz-clickable" id="card_fileupload">
            <div class="dz-default dz-message">
                <i class="icon-Upload-toCloud"></i>
                <span><?php echo e(cleanLang(__('lang.drag_drop_file'))); ?></span>
            </div>
        </div>
    </div>
     <?php endif; ?>
</div>
<!--attachemnts js--><?php /**PATH /home/visom6/crm_visom6_com/application/resources/views/pages/lead/components/attachments.blade.php ENDPATH**/ ?>