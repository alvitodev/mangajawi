<div class="my-8">
    <h1 class="text-4xl font-bold mb-6 text-gray-800"><?php echo e($manga->title); ?></h1>
    <div class="flex flex-col md:flex-row mb-8">
        <img src="<?php echo e($manga->cover_image); ?>" alt="<?php echo e($manga->title); ?>" class="w-full md:w-48 h-auto md:h-64 object-cover rounded mb-4 md:mb-0 md:mr-8">
        <div>
            <p class="text-gray-700 leading-relaxed"><?php echo e($manga->description); ?></p>
        </div>
    </div>

    <h2 class="text-3xl font-semibold mb-4 text-gray-800">Chapters</h2>
    <div class="space-y-4">
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $chapter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chapter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bg-white p-4 rounded shadow hover:shadow-lg transition-shadow duration-200">
                <a href="<?php echo e(route('chapters.show', [$manga, $chapter])); ?>" class="text-xl font-semibold text-blue-600 hover:text-blue-800">
                    Chapter <?php echo e($chapter->chapter_number); ?>: <?php echo e($chapter->title); ?>

                </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    </div>
</div>
<?php /**PATH C:\laragon\www\mangajawi\manga-reader\resources\views/livewire/manga-detail.blade.php ENDPATH**/ ?>