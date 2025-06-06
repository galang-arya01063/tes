

<?php $__env->startSection('content'); ?>
<div class="container mx-auto mt-4">
    <h1 class="text-2xl font-bold mb-4">Tambah Armada</h1>
   
   
   <?php if($errors->any()): ?>
    <div class="bg-red-100 text-red-700 p-4 rounded-lg mb-4">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>

   <form action="<?php echo e(route('armada.store')); ?>" method="POST" class="bg-white p-6 rounded-lg shadow-md">
    <?php echo csrf_field(); ?>

        <div class="mb-4">
            <label for="nopol" class="block text-gray-700 font-bold mb-2">Nomor Polisi</label>
            <input type="text" name="nopol" id="nopol" class="w-full border-2 border-gray-800 rounded-lg px-3 py-2" placeholder="X 1234 XX" required>
        </div>
        <div class="mb-4">
            <label for="jenis_mobil" class="block text-gray-700 font-bold mb-2">Jenis Mobil</label>
            <input type="text" name="jenis_mobil" id="jenis_mobil" class="w-full border-2 border-gray-800 rounded-lg px-3 py-2" placeholder="Jenis Mobil" required>
        </div>
        <div class="mb-4">
            <label for="merek_mobil" class="block text-gray-700 font-bold mb-2">Merek Mobil</label>
            <input type="text" name="merek_mobil" id="merek_mobil" class="w-full border-2 border-gray-800 rounded-lg px-3 py-2" placeholder="Merek Mobil" required>
        </div>
        <div class="mb-4">
            <label for="tahun_pembelian" class="block text-gray-700 font-bold mb-2">Tahun Pembelian</label>
            <input type="date" name="tahun_pembelian" id="tahun_pembelian" class="w-full border-2 border-gray-800 rounded-lg px-3 py-2" placeholder="Tahun Pembelian" required>
        </div>
        <div class="mb-4">
            <label for="kapasitas" class="block text-gray-700 font-bold mb-2">Kapasitas</label>
            <input type="number" name="kapasitas" id="kapasitas" class="w-full border-2 border-gray-800 rounded-lg px-3 py-2" placeholder="Kapasitas" required>
        </div>
        <div class="mb-4">
            <label for="driver_id" class="block text-gray-700 font-bold mb-2">Nama Driver</label>
            <select name="driver_id" id="driver_id" class="w-full border-2 border-gray-800 rounded-lg px-3 py-2">
                <option value="">Pilih Driver</option>
                <?php $__currentLoopData = $driver; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $driver): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($driver->id); ?>"><?php echo e($driver->nama); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="mb-4">
            <label for="status_armada" class="block text-gray-700 font-bold mb-2">Status Armada</label>
            <select name="status_armada" id="status_armada" class="w-full border-2 border-gray-800 rounded-lg px-3 py-2">
            <option value="aktif">Aktif</option>
            <option value="nonaktif">Nonaktif</option>
            </select>
        </div>

        <div class="flex justify-between">
            <button onclick="window.location.href='/armada'" type="button" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600">Batal</button>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Simpan</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\belajar_laravel_3\resources\views/armada/create.blade.php ENDPATH**/ ?>