

<?php $__env->startSection('content'); ?>
<div class="container mx-auto mt-4  first-letter">
    <h1 class="text-2xl font-bold mb-4">Daftar Order</h1>
    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-300 bg-white rounded-lg shadow-md">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-4 py-2 text-left">ID</th>
                    <th class="px-4 py-2 text-left">Nomor Order</th>
                    <th class="px-4 py-2 text-left">Pengirim</th>
                    <th class="px-4 py-2 text-left">Jenis Muatan</th>
                    <th class="px-4 py-2 text-left">Tanggal Muat</th>
                    <th class="px-4 py-2 text-left">Berat Muatan</th>
                    <th class="px-4 py-2 text-left">Lokasi Muat</th>
                    <th class="px-4 py-2 text-left">Tujuan</th>
                    <th class="px-4 py-2 text-left">Harga</th>
                    <th class="px-4 py-2 text-left">Status Pembayaran</th>
                    <th class="px-4 py-2 text-left">Status Order</th>
                    <th class="px-4 py-2 text-left">order On Duty</th>

                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="border-b hover:bg-gray-100">
                    <td class="px-4 py-2"><?php echo e($order->id); ?></td>
                    <td class="px-4 py-2"><?php echo e($order->nomor_order); ?></td>
                    <td class="px-4 py-2"><?php echo e($order->nama_pengirim); ?></td>
                    <td class="px-4 py-2"><?php echo e($order->jenis_muatan); ?></td>
                    <td class="px-4 py-2"><?php echo e($order->tanggal_muat); ?></td>
                    <td class="px-4 py-2"><?php echo e($order->berat_muatan); ?></td>
                    <td class="px-4 py-2"><?php echo e($order->lokasi_muat); ?></td>
                    <td class="px-4 py-2"><?php echo e($order->tujuan); ?></td>
                    <td class="px-4 py-2"><?php echo e($order->harga); ?></td>
                    <td class="px-4 py-2">
                        <span class="px-2 py-1 rounded text-white <?php echo e($order->status_pembayaran == 'dibayar' ? 'bg-green-500' : 'bg-red-500'); ?>">
                            <?php echo e($order->status_pembayaran); ?>

                        </span>
                    <td class="px-4 py-2">
                        <span class="px-2 py-1 rounded text-white <?php echo e($order->status_order == 'selesai' ? 'bg-green-500' : 'bg-yellow-500'); ?>">
                            <?php echo e($order->status_order); ?>

                        </span>
                    </td>
                    <td class="px-4 py-2"><?php echo e($order->armada_on_duty); ?></td>

                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\belajar_laravel_3\resources\views/order/index.blade.php ENDPATH**/ ?>