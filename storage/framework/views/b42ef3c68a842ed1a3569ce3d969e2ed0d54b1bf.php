
<?php $__env->startSection('content'); ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('school_class_create')): ?>
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="<?php echo e(route("admin.school-classes.create")); ?>">
                <?php echo e(trans('global.add')); ?> Groupe
            </a>
        </div>
    </div>
<?php endif; ?>
<div class="card">
    <div class="card-header">
        Liste Des Groupes
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-SchoolClass">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            <?php echo e(trans('cruds.schoolClass.fields.id')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.schoolClass.fields.name')); ?>

                        </th>
                        <th>
                            Schedule
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $schoolClasses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $schoolClass): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr data-entry-id="<?php echo e($schoolClass->id); ?>">
                            <td>

                            </td>
                            <td>
                                <?php echo e($schoolClass->id ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($schoolClass->name ?? ''); ?>

                            </td>
                            <td>
                                <a href="<?php echo e(route('admin.calendar.index')); ?>?class_id=<?php echo e($schoolClass->id); ?>">View Schedule</a>
                            </td>
                            <td>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('school_class_show')): ?>
                                    <a class="btn btn-xs btn-primary" href="<?php echo e(route('admin.school-classes.show', $schoolClass->id)); ?>">
                                        <?php echo e(trans('global.view')); ?>

                                    </a>
                                <?php endif; ?>

                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('school_class_edit')): ?>
                                    <a class="btn btn-xs btn-info" href="<?php echo e(route('admin.school-classes.edit', $schoolClass->id)); ?>">
                                        <?php echo e(trans('global.edit')); ?>

                                    </a>
                                <?php endif; ?>

                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('school_class_delete')): ?>
                                    <form action="<?php echo e(route('admin.school-classes.destroy', $schoolClass->id)); ?>" method="POST" onsubmit="return confirm('<?php echo e(trans('global.areYouSure')); ?>');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                        <input type="submit" class="btn btn-xs btn-danger" value="<?php echo e(trans('global.delete')); ?>">
                                    </form>
                                <?php endif; ?>

                            </td>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('scripts'); ?>
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('school_class_delete')): ?>
  let deleteButtonTrans = '<?php echo e(trans('global.datatables.delete')); ?>'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "<?php echo e(route('admin.school-classes.massDestroy')); ?>",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('<?php echo e(trans('global.datatables.zero_selected')); ?>')

        return
      }

      if (confirm('<?php echo e(trans('global.areYouSure')); ?>')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
<?php endif; ?>

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-SchoolClass:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel_timetable\resources\views/admin/schoolClasses/index.blade.php ENDPATH**/ ?>