

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h2>Book Details</h2>
    </div>

    <div style="margin-bottom: 30px;">
        <h3><?php echo e($book->title); ?></h3>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-top: 20px;">
            <div>
                <strong>ISBN:</strong><br>
                <?php echo e($book->isbn ?: 'N/A'); ?>

            </div>
            <div>
                <strong>Published Year:</strong><br>
                <?php echo e($book->published_year ?: 'N/A'); ?>

            </div>
            <div>
                <strong>Author:</strong><br>
                <a href="<?php echo e(route('authors.show', $book->author->id)); ?>"><?php echo e($book->author->name); ?></a>
            </div>
        </div>

        <?php if($book->description): ?>
            <div style="margin-top: 20px;">
                <strong>Description:</strong><br>
                <p style="margin-top: 10px; color: #666;"><?php echo e($book->description); ?></p>
            </div>
        <?php endif; ?>
    </div>

    <div style="margin-top: 30px; display: flex; gap: 10px;">
        <a href="<?php echo e(route('books.edit', $book->id)); ?>" class="btn btn-warning">Edit Book</a>
        <a href="<?php echo e(route('books.index')); ?>" class="btn btn-primary">Back to List</a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\adilq\Desktop\book-author-management\resources\views/books/show.blade.php ENDPATH**/ ?>