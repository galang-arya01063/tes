

<?php $__env->startSection('content'); ?>
<div class="container mx-auto mt-4">
    <h1 class="text-2xl font-bold mb-4">Edit Armada</h1>

    <?php if($errors->any()): ?>
        <div class="bg-red-100 text-red-700 p-4 rounded-lg mb-4">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('armada.update', $armada->id)); ?>" method="POST" class="bg-white p-6 rounded-lg shadow-md">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="mb-4">
            <label for="nopol" class="block text-gray-700 font-bold mb-2">Nomor Polisi</label>
            <input type="text" name="nopol" id="nopol" value="<?php echo e($armada->nopol); ?>" class="w-full border-2 border-gray-800 rounded-lg px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="jenis_mobil" class="block text-gray-700 font-bold mb-2">Jenis Mobil</label>
            <input type="text" name="jenis_mobil" id="jenis_mobil" value="<?php echo e($armada->jenis_mobil); ?>" class="w-full border-2 border-gray-800 rounded-lg px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="merek_mobil" class="block text-gray-700 font-bold mb-2">Merek Mobil</label>
            <input type="text" name="merek_mobil" id="merek_mobil" value="<?php echo e($armada->merek_mobil); ?>" class="w-full border-2 border-gray-800 rounded-lg px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="tahun_pembelian" class="block text-gray-700 font-bold mb-2">Tahun Pembelian</label>
            <input type="date" name="tahun_pembelian" id="tahun_pembelian" value="<?php echo e($armada->tahun_pembelian); ?>" class="w-full border-2 border-gray-800 rounded-lg px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="kapasitas" class="block text-gray-700 font-bold mb-2">Kapasitas</label>
            <input type="number" name="kapasitas" id="kapasitas" value="<?php echo e($armada->kapasitas); ?>" class="w-full border-2 border-gray-800 rounded-lg px-3 py-2">
        </div>
        <div class="mb-4">
            <label for="driver_id" class="block text-gray-700 font-bold mb-2">Nama Driver</label>
            <select name="driver_id" id="driver_id" class="w-full border-2 border-gray-800 rounded-lg px-3 py-2">
                <option value="">Pilih Driver</option>
                <?php $__currentLoopData = $drivers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $driver): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($driver->id); ?>" <?php echo e($armada->driver_id == $driver->id ? 'selected' : ''); ?>>
                        <?php echo e($driver->nama); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="mb-4">
            <label for="status_armada" class="block text-gray-700 font-bold mb-2">Status Armada</label>
            <select name="status_armada" id="status_armada" class="w-full border-2 border-gray-800 rounded-lg px-3 py-2">
                <option value="aktif" <?php echo e($armada->status_armada == 'aktif' ? 'selected' : ''); ?>>Aktif</option>
                <option value="standby" <?php echo e($armada->status_armada == 'standby' ? 'selected' : ''); ?>>Standby</option>
            </select>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Simpan Perubahan</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\belajar_laravel_3\resources\views/armada/edit.blade.php ENDPATH**/ ?>