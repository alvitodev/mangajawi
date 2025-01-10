<div class="my-8">
    <h1 class="text-4xl font-bold mb-6 text-gray-800">Manga List</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $mangas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manga): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bg-white p-4 rounded shadow hover:shadow-lg transition-shadow duration-200">
                <a href="<?php echo e(route('mangas.show', $manga)); ?>">
                    <img src="<?php echo e($manga->cover_image); ?>" alt="<?php echo e($manga->title); ?>" class="w-full h-64 object-cover rounded mb-4">
                    <h2 class="text-xl font-semibold text-gray-800"><?php echo e($manga->title); ?></h2>
                </a>
                <p class="text-gray-700"><?php echo e(Str::limit($manga->description, 100)); ?></p>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    </div>
    <div class="mt-6">
        <?php echo e($mangas->links()); ?> <!-- This will render the pagination links -->
    </div>
</div>
<?php /**PATH C:\laragon\www\mangajawi\manga-reader\resources\views/livewire/manga-list.blade.php ENDPATH**/ ?>