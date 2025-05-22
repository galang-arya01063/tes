

<?php $__env->startSection('content'); ?>
<div class="container mx-auto mt-4"> <!-- Container utama, center alignment dan margin atas -->
    <h1 class="text-2xl font-bold mb-4">Daftar Armada</h1> <!-- Font besar, bold, dan margin bawah -->
   
    <?php if(session('success')): ?>
        <div class="bg-green-100 text-green-700 p-4 rounded-lg mb-4">
            <!-- Background hijau muda, teks hijau, padding, border melengkung, margin bawah -->
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <div class="mb-4">
        <a href="/armada/create" 
           class="bg-gray-800 text-white px-4 py-2 rounded-lg hover:bg-gray-600 block text-center">
            <!-- Tombol tambah dengan warna background abu gelap, teks putih, padding, rounded,
                 hover ubah warna, dan posisi block -->
            Tambah Armada
        </a>
    </div>

    <div class="overflow-x-auto">
        <!-- Membuat tabel dapat di-scroll secara horizontal jika tidak muat -->
        <table class="min-w-full border border-gray-300 bg-white rounded-lg shadow-md">
            <!-- Tabel full-width, border abu-abu, background putih, rounded, dan shadow -->
            <thead class="bg-gray-800 text-white">
                <!-- Background abu gelap dan teks putih pada header tabel -->
                <tr>
                    <th class="px-4 py-2 text-left">ID</th>
                    <th class="px-4 py-2 text-left">Nopol</th>
                    <th class="px-4 py-2 text-left">Jenis Mobil</th>
                    <th class="px-4 py-2 text-left">Merek Mobil</th>
                    <th class="px-4 py-2 text-left">Tahun Pembelian</th>
                    <th class="px-4 py-2 text-left">Kapasitas</th>
                    <th class="px-4 py-2 text-left">Nama Driver</th>
                    <th class="px-4 py-2 text-left">Status Armada</th>
                    <th class="px-4 py-2 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $armadas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $armada): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="border-b hover:bg-gray-100">
                    <!-- Border bawah pada baris dan efek hover abu muda -->
                    <td class="px-4 py-2"><?php echo e($armada->id); ?></td>
                    <td class="px-4 py-2"><?php echo e($armada->nopol); ?></td>
                    <td class="px-4 py-2"><?php echo e($armada->jenis_mobil); ?></td>
                    <td class="px-4 py-2"><?php echo e($armada->merek_mobil); ?></td>
                    <td class="px-4 py-2"><?php echo e($armada->tahun_pembelian); ?></td>
                    <td class="px-4 py-2"><?php echo e($armada->kapasitas); ?></td>
                    <td class="px-4 py-2"><?php echo e($armada->driver_id); ?></td>
                    <td class="px-4 py-2">
                        <span class="px-2 py-1 rounded text-white 
                            <?php echo e($armada->status_armada == 'aktif' ? 'bg-green-500' : 'bg-yellow-500'); ?>">
                            <!-- Warna background status berdasarkan kondisi:
                                 - Hijau jika 'aktif'
                                 - Kuning jika tidak -->
                            <?php echo e($armada->status_armada); ?>

                        </span>
                    </td>
                    <td class="px-4 py-2 flex gap-2">
                        <!-- Flex layout dengan gap antar tombol -->
                        <a href="<?php echo e(route('armada.edit', $armada->id)); ?>" 
                           class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600">
                            <!-- Tombol Edit, warna kuning dengan hover ubah warna -->
                            Edit
                        </a>
                        
                        <form action="<?php echo e(route('armada.destroy', $armada->id)); ?>" 
                              method="POST" 
                              onsubmit="return confirm('Apakah Anda yakin ingin menghapus armada ini?');">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" 
                                    class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">
                                <!-- Tombol Hapus, warna merah dengan hover ubah warna -->
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\belajar_laravel_3\resources\views/armada/index.blade.php ENDPATH**/ ?>