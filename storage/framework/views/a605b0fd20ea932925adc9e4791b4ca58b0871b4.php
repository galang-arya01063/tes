

<?php $__env->startSection('content'); ?>
<div class="w-full max-w-6xl mx-auto p-6"> 
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Daftar Penyewaan Mobil</h1> 
    <div class="bg-white shadow-lg rounded-lg overflow-hidden"> 
        <table class="table-auto w-full border-collapse"> 
            <thead> 
                <tr class="bg-blue-500 text-white"> 
                    <th class="px-4 py-2">No</th> 
                    <th class="px-4 py-2">Nama Pengguna</th> 
                    <th class="px-4 py-2">Nama Mobil</th> 
                    <th class="px-4 py-2">Merek Mobil</th> 
                    <th class="px-4 py-2">Tanggal Sewa</th> 
                    <th class="px-4 py-2">Tanggal Kembali</th> 
                    <th class="px-4 py-2">Harga Total</th> 
                </tr> 
            </thead> 
            <tbody> 
                <tr class="bg-gray-100"> 
                    <td class="border px-4 py-2 text-center">1</td> 
                    <td class="border px-4 py-2">Budi Setiawan</td> 
                    <td class="border px-4 py-2">Avanza</td> 
                    <td class="border px-4 py-2">Toyota</td> 
                    <td class="border px-4 py-2">2024-02-01</td>
                    <td class="border px-4 py-2">2024-02-05</td> 
                    <td class="border px-4 py-2">Rp 800.000</td> 
                </tr> 
                <tr class="bg-white"> 
                    <td class="border px-4 py-2 text-center">2</td> 
                    <td class="border px-4 py-2">Ani Kurniawati</td> 
                    <td class="border px-4 py-2">Xpander</td> 
                    <td class="border px-4 py-2">Mitsubishi</td> 
                    <td class="border px-4 py-2">2024-02-02</td> 
                    <td class="border px-4 py-2">2024-02-07</td> 
                    <td class="border px-4 py-2">Rp 1.200.000</td> 
                </tr> 
                <tr class="bg-gray-100"> 
                    <td class="border px-4 py-2 text-center">3</td> 
                    <td class="border px-4 py-2">Rudi Hermawan</td> 
                    <td class="border px-4 py-2">Fortuner</td> 
                    <td class="border px-4 py-2">Toyota</td> 
                    <td class="border px-4 py-2">2024-02-03</td>
                    <td class="border px-4 py-2">2024-02-06</td> 
                    <td class="border px-4 py-2">Rp 1.500.000</td> 
                </tr>  
            </tbody> 
        </table> 
    </div> 
    <div class="mt-6 text-center"> 
        <button class=" w-full 12 bg-blue-500 text-white font-bold py-2 px-4 rounded shadow hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500"> 
            Tambah Penyewaan 
        </button> 
    </div> 
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\belajar_laravel_3\resources\views/rentals/index.blade.php ENDPATH**/ ?>