
<?php if(session()->has('success')): ?>
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 1000; margin-bottom: 20px;">
        <div id="liveToastSuccess" class="toast align-items-center text-bg-success border-0" role="alert"
            aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    <?php echo e(session('success')); ?>

                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
        </div>
    </div>
    <script>
        var toastLive = document.getElementById('liveToastSuccess')
        var toast = new bootstrap.Toast(toastLive)

        toast.show()
    </script>
<?php endif; ?>


<?php if(session()->has('error')): ?>
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 1000; margin-bottom: 20px;">
        <div id="liveToastError" class="toast align-items-center text-bg-danger border-0" role="alert"
            aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    <?php echo e(session('error')); ?>

                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
        </div>
    </div>
    <script>
        var toastLive = document.getElementById('liveToastError')
        var toast = new bootstrap.Toast(toastLive)

        toast.show()
    </script>
<?php endif; ?>


<?php if(session()->has('warning')): ?>
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 1000; margin-bottom: 20px;">
        <div id="liveToastWarning" class="toast align-items-center text-bg-warning border-0" role="alert"
            aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    <?php echo e(session('warning')); ?>

                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
        </div>
    </div>
    <script>
        var toastLive = document.getElementById('liveToastWarning')
        var toast = new bootstrap.Toast(toastLive)

        toast.show()
    </script>
<?php endif; ?>


<?php if($errors->any()): ?>
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 1000; margin-bottom: 20px;">
        <div id="liveToastErrorValidationName" class="toast align-items-center text-bg-danger border-0" role="alert"
            aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($error); ?><br>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
        </div>
    </div>
    <script>
        var toastLive = document.getElementById('liveToastErrorValidationName')
        var toast = new bootstrap.Toast(toastLive)

        toast.show()
    </script>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\pgwl\resources\views/components/toast.blade.php ENDPATH**/ ?>