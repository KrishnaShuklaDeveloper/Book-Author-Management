

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h2>Author Details</h2>
    </div>

    <div style="margin-bottom: 30px;">
        <h3><?php echo e($author->name); ?></h3>
        <?php if($author->bio): ?>
            <p style="margin-top: 15px; color: #666;"><?php echo e($author->bio); ?></p>
        <?php endif; ?>
    </div>

    <?php if($author->books->count() > 0): ?>
        <h3 style="margin-bottom: 15px;">Books by <?php echo e($author->name); ?></h3>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>ISBN</th>
                    <th>Published Year</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $author->books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><strong><?php echo e($book->title); ?></strong></td>
                        <td><?php echo e($book->isbn); ?></td>
                        <td><?php echo e($book->published_year); ?></td>
                        <td>
                            <a href="<?php echo e(route('books.show', $book->id)); ?>" class="btn btn-primary">View</a>
                            <a href="<?php echo e(route('books.edit', $book->id)); ?>" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php else: ?>
        <div class="text-center mt-4">
            <p>No books found for this author.</p>
            <a href="<?php echo e(route('books.create')); ?>?author_id=<?php echo e($author->id); ?>" class="btn btn-success mt-4">+ Add Book for This Author</a>
        </div>
    <?php endif; ?>

    <div style="margin-top: 30px; display: flex; gap: 10px;">
        <a href="<?php echo e(route('authors.edit', $author->id)); ?>" class="btn btn-warning">Edit Author</a>
        <a href="<?php echo e(route('authors.index')); ?>" class="btn btn-primary">Back to List</a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\adilq\Desktop\book-author-management\resources\views/authors/show.blade.php ENDPATH**/ ?>