

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <h2>Authors Management</h2>
            <a href="<?php echo e(route('authors.create')); ?>" class="btn btn-success">+ Add New Author</a>
        </div>
    </div>

    <!-- Search Form -->
    <div class="search-container" style="padding: 15px; background: #f8f9fa; border-bottom: 1px solid #dee2e6;">
        <form action="<?php echo e(route('authors.index')); ?>" method="GET" style="display: flex; gap: 10px; max-width: 500px;">
            <input type="text" name="search" placeholder="Search authors by name or bio..." 
                   value="<?php echo e($search ?? ''); ?>" 
                   style="flex: 1; padding: 10px; border: 1px solid #ced4da; border-radius: 4px;">
            <button type="submit" class="btn btn-primary">Search</button>
            <?php if(isset($search) && $search): ?>
                <a href="<?php echo e(route('authors.index')); ?>" class="btn btn-secondary">Clear</a>
            <?php endif; ?>
        </form>
    </div>

    <?php if($authors->count() > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Bio</th>
                    <th>Books Count</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($author->id); ?></td>
                        <td><strong><?php echo e($author->name); ?></strong></td>
                        <td><?php echo e(Str::limit($author->bio, 50)); ?></td>
                        <td>
                            <span class="badge badge-info"><?php echo e($author->books->count()); ?> books</span>
                        </td>
                        <td>
                            <a href="<?php echo e(route('authors.show', $author->id)); ?>" class="btn btn-primary">View</a>
                            <a href="<?php echo e(route('authors.edit', $author->id)); ?>" class="btn btn-warning">Edit</a>
                            <form action="<?php echo e(route('authors.destroy', $author->id)); ?>" method="POST" style="display: inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this author? All their books will also be deleted.')">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php else: ?>
        <div class="text-center mt-4">
            <p>No authors found. Start by adding your first author!</p>
            <a href="<?php echo e(route('authors.create')); ?>" class="btn btn-success mt-4">+ Add New Author</a>
        </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\adilq\Desktop\book-author-management\resources\views/authors/index.blade.php ENDPATH**/ ?>