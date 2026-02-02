

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <h2>Books Management</h2>
            <a href="<?php echo e(route('books.create')); ?>" class="btn btn-success">+ Add New Book</a>
        </div>
    </div>

    <!-- Search Form -->
    <div class="search-container" style="padding: 15px; background: #f8f9fa; border-bottom: 1px solid #dee2e6;">
        <form action="<?php echo e(route('books.index')); ?>" method="GET" style="display: flex; gap: 10px; max-width: 500px;">
            <input type="text" name="search" placeholder="Search books by title, ISBN, description or author..." 
                   value="<?php echo e($search ?? ''); ?>" 
                   style="flex: 1; padding: 10px; border: 1px solid #ced4da; border-radius: 4px;">
            <button type="submit" class="btn btn-primary">Search</button>
            <?php if(isset($search) && $search): ?>
                <a href="<?php echo e(route('books.index')); ?>" class="btn btn-secondary">Clear</a>
            <?php endif; ?>
        </form>
    </div>

    <?php if($books->count() > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>ISBN</th>
                    <th>Author</th>
                    <th>Published Year</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($book->id); ?></td>
                        <td><strong><?php echo e($book->title); ?></strong></td>
                        <td><?php echo e($book->isbn); ?></td>
                        <td>
                            <a href="<?php echo e(route('authors.show', $book->author->id)); ?>"><?php echo e($book->author->name); ?></a>
                        </td>
                        <td><?php echo e($book->published_year); ?></td>
                        <td>
                            <a href="<?php echo e(route('books.show', $book->id)); ?>" class="btn btn-primary">View</a>
                            <a href="<?php echo e(route('books.edit', $book->id)); ?>" class="btn btn-warning">Edit</a>
                            <form action="<?php echo e(route('books.destroy', $book->id)); ?>" method="POST" style="display: inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this book?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php else: ?>
        <div class="text-center mt-4">
            <p>No books found. Start by adding your first book!</p>
            <a href="<?php echo e(route('books.create')); ?>" class="btn btn-success mt-4">+ Add New Book</a>
        </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\adilq\Desktop\book-author-management\resources\views/books/index.blade.php ENDPATH**/ ?>