<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h2>Welcome to Book Author Management System</h2>
    </div>

    <div style="text-align: center; padding: 40px 0;">
        <div style="font-size: 80px; margin-bottom: 20px;">📚</div>
        <h3 style="margin-bottom: 20px; color: #667eea;">Manage Your Books and Authors Easily</h3>
        <p style="color: #666; margin-bottom: 30px; max-width: 600px; margin-left: auto; margin-right: auto;">
            This application allows you to manage authors and their books efficiently. 
            Keep track of all your authors and their published works in one place.
        </p>
        
        <div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
            <a href="<?php echo e(route('authors.index')); ?>" class="btn btn-primary" style="padding: 15px 30px; font-size: 18px;">
                👥 Manage Authors
            </a>
            <a href="<?php echo e(route('books.index')); ?>" class="btn btn-success" style="padding: 15px 30px; font-size: 18px;">
                📖 Manage Books
            </a>
        </div>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-top: 40px;">
        <div style="background: #f8f9fa; padding: 20px; border-radius: 10px; text-align: center;">
            <div style="font-size: 40px; margin-bottom: 10px;">➕</div>
            <h4 style="margin-bottom: 10px;">Add Authors</h4>
            <p style="color: #666; font-size: 14px;">Create new author profiles with biographical information</p>
        </div>
        <div style="background: #f8f9fa; padding: 20px; border-radius: 10px; text-align: center;">
            <div style="font-size: 40px; margin-bottom: 10px;">📖</div>
            <h4 style="margin-bottom: 10px;">Add Books</h4>
            <p style="color: #666; font-size: 14px;">Register books and associate them with their authors</p>
        </div>
        <div style="background: #f8f9fa; padding: 20px; border-radius: 10px; text-align: center;">
            <div style="font-size: 40px; margin-bottom: 10px;">🔍</div>
            <h4 style="margin-bottom: 10px;">Easy Search</h4>
            <p style="color: #666; font-size: 14px;">Quickly find authors and their published books</p>
        </div>
        <div style="background: #f8f9fa; padding: 20px; border-radius: 10px; text-align: center;">
            <div style="font-size: 40px; margin-bottom: 10px;">✏️</div>
            <h4 style="margin-bottom: 10px;">Full CRUD</h4>
            <p style="color: #666; font-size: 14px;">Create, read, update, and delete records easily</p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\adilq\Desktop\book-author-management\resources\views/welcome.blade.php ENDPATH**/ ?>