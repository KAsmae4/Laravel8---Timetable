
<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.lesson.title_singular')); ?>

    </div>

    <div class="card-body">
        <form method="POST" action="<?php echo e(route("admin.lessons.store")); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label class="required" for="class_id">Groupe</label>
                <select class="form-control select2 <?php echo e($errors->has('class') ? 'is-invalid' : ''); ?>" name="class_id" id="class_id" required>
                    <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e(old('class_id') == $id ? 'selected' : ''); ?>><?php echo e($class); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('class')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('class')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.lesson.fields.class_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="teacher_id">Formateur</label>
                <select class="form-control select2 <?php echo e($errors->has('teacher') ? 'is-invalid' : ''); ?>" name="teacher_id" id="teacher_id" required>
                    <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e(old('teacher_id') == $id ? 'selected' : ''); ?>><?php echo e($teacher); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('teacher')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('teacher')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.lesson.fields.teacher_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="weekday">Le jour de classe</label>
                <input class="form-control <?php echo e($errors->has('weekday') ? 'is-invalid' : ''); ?>" type="number" name="weekday" id="weekday" value="<?php echo e(old('weekday')); ?>" step="1" required>
                <?php if($errors->has('weekday')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('weekday')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.lesson.fields.weekday_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="start_time"><?php echo e(trans('cruds.lesson.fields.start_time')); ?></label>
                <input class="form-control lesson-timepicker <?php echo e($errors->has('start_time') ? 'is-invalid' : ''); ?>" type="text" name="start_time" id="start_time" value="<?php echo e(old('start_time')); ?>" required>
                <?php if($errors->has('start_time')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('start_time')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.lesson.fields.start_time_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="end_time"><?php echo e(trans('cruds.lesson.fields.end_time')); ?></label>
                <input class="form-control lesson-timepicker <?php echo e($errors->has('end_time') ? 'is-invalid' : ''); ?>" type="text" name="end_time" id="end_time" value="<?php echo e(old('end_time')); ?>" required>
                <?php if($errors->has('end_time')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('end_time')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.lesson.fields.end_time_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="salle">Salle de classe</label>
                <input class="form-control <?php echo e($errors->has('salle') ? 'is-invalid' : ''); ?>" type="text" name="salle" id="salle" value="<?php echo e(old('salle')); ?>" required>
                <?php if($errors->has('salle')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('salle')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block">Salle</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    <?php echo e(trans('global.save')); ?>

                </button>
            </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel-School-Timetable-Calendar\resources\views/admin/lessons/create.blade.php ENDPATH**/ ?>