<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/costum.css')); ?>">
    <!-- Include FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a href="<?php echo e(route('admin.home')); ?>" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <?php echo e(trans('global.dashboard')); ?>

                </a>
            </li>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_management_access')): ?>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#">
                        <i class="nav-icon fas fa-users-cog"></i>
                        Management
                    </a>
                    <ul class="nav-dropdown-items">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission_access')): ?>
                            <li class="nav-item">
                                <a href="<?php echo e(route('admin.permissions.index')); ?>" class="nav-link <?php echo e(request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : ''); ?>">
                                    <i class="nav-icon fas fa-unlock-alt"></i>
                                    <?php echo e(trans('cruds.permission.title')); ?>

                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role_access')): ?>
                            <li class="nav-item">
                                <a href="<?php echo e(route('admin.roles.index')); ?>" class="nav-link <?php echo e(request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : ''); ?>">
                                    <i class="nav-icon fas fa-user-tag"></i>
                                    <?php echo e(trans('cruds.role.title')); ?>

                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_access')): ?>
                            <li class="nav-item">
                                <a href="<?php echo e(route('admin.users.index')); ?>" class="nav-link <?php echo e(request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : ''); ?>">
                                    <i class="nav-icon fas fa-user"></i>
                                    <?php echo e(trans('cruds.user.title')); ?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('admin.users.index')); ?>?role=3" class="nav-link <?php echo e(request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : ''); ?>">
                                    <i class="nav-icon fas fa-chalkboard-teacher"></i>
                                    Formateurs
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('school_class_access')): ?>
                <li class="nav-item">
                    <a href="<?php echo e(route('admin.school-classes.index')); ?>" class="nav-link <?php echo e(request()->is('admin/school-classes') || request()->is('admin/school-classes/*') ? 'active' : ''); ?>">
                        <i class="nav-icon fas fa-school"></i>
                        Groupes
                    </a>
                </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('lesson_access')): ?>
                <li class="nav-item">
                    <a href="<?php echo e(route('admin.lessons.index')); ?>" class="nav-link <?php echo e(request()->is('admin/lessons') || request()->is('admin/lessons/*') ? 'active' : ''); ?>">
                        <i class="nav-icon fas fa-book"></i>
                        Modules
                    </a>
                </li>
            <?php endif; ?>
            <li class="nav-item">
                <a href="<?php echo e(route('admin.calendar.index')); ?>" class="nav-link <?php echo e(request()->is('admin/calendar') || request()->is('admin/calendar/*') ? 'active' : ''); ?>">
                    <i class="nav-icon fas fa-calendar-alt"></i>
                    Calendar
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <?php echo e(trans('global.logout')); ?>

                </a>
            </li>
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
<?php /**PATH C:\xampp\htdocs\Laravel_timetable\resources\views/partials/menu.blade.php ENDPATH**/ ?>