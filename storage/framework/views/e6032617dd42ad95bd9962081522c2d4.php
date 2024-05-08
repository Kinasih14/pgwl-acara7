<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h3>Data Mahasiswa</h3>
        </div>
        <div class="card body">
            <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Hawa</td>
                    <td>B</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Kikin</td>
                    <td>B</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Iko</td>
                    <td>B</td>
                </tr>
            </tbody>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pgwl\resources\views/table.blade.php ENDPATH**/ ?>