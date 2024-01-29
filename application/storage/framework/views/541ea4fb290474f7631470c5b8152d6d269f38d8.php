<?php if(config('visibility.viewing') == 'public'): ?>
<?php echo $__env->make('pages.documents.wrapper-public', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php else: ?>
<?php echo $__env->make('pages.documents.wrapper-auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?><?php /**PATH /home/visom6/crm_visom6_com/application/resources/views/pages/documents/wrapper.blade.php ENDPATH**/ ?>