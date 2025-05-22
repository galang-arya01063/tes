

<?php $__env->startSection('content'); ?>
<div class="container mx-auto mt-4">
    <h1 class="text-2xl font-bold mb-4">Daftar Driver</h1>

    <?php if(session('success')): ?>
        <div class="bg-green-100 text-green-700 p-4 rounded-lg mb-4">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <div class="mb-4">
        <a href="<?php echo e(route('driver.create')); ?>" class="bg-gray-800 text-white px-4 py-2 rounded-lg hover:bg-gray-600 block text-center">
            Tambah Driver
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-300 bg-white rounded-lg shadow-md">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-4 py-2 text-left">ID</th>
                    <th class="px-4 py-2 text-left">Nama</th>
                    <th class="px-4 py-2 text-left">Alamat</th>
                    <th class="px-4 py-2 text-left">Nomor HP</th>
                    <th class="px-4 py-2 text-left">Usia</th>
                    <th class="px-4 py-2 text-left">NIK</th>
                    <th class="px-4 py-2 text-left">Status</th>
                    <th class="px-4 py-2 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $drivers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $driver): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="border-b hover:bg-gray-100">
                    <td class="px-4 py-2"><?php echo e($driver->id); ?></td>
                    <td class="px-4 py-2"><?php echo e($driver->nama); ?></td>
                    <td class="px-4 py-2"><?php echo e($driver->alamat); ?></td>
                    <td class="px-4 py-2"><?php echo e($driver->no_hp); ?></td>
                    <td class="px-4 py-2"><?php echo e($driver->usia); ?></td>
                    <td class="px-4 py-2"><?php echo e($driver->nik); ?></td>
                    <td class="px-4 py-2">
                        <span class="px-2 py-1 rounded text-white <?php echo e($driver->status == 'aktif' ? 'bg-green-500' : 'bg-yellow-500'); ?>">
                            <?php echo e($driver->status); ?>

                        </span>
                    </td>
                    <td class="px-4 py-2 flex gap-2">
                        <a href="<?php echo e(route('driver.edit', $driver->id)); ?>" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600">Edit</a>
                        <form action="<?php echo e(route('driver.destroy', $driver->id)); ?>" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus driver ini?');">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\belajar_laravel_3\resources\views/driver/index.blade.php ENDPATH**/ ?>