<div class="embedded-bill clearfix">
    <!--INVOICE TABLE-->
<?php echo $__env->make('pages.bill.components.elements.main-table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- TOTAL & SUMMARY -->
<?php echo $__env->make('pages.bill.components.elements.totals-table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div><?php /**PATH /home/visom6/crm_visom6_com/application/resources/views/pages/bill/bill-embed.blade.php ENDPATH**/ ?>