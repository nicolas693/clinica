<?php if(count($errors)>0): ?>
	<div class='alert alert-danger' roler='alert' >
		<strong>Errores:</strong>
		<ul>
			<?php foreach($errors->all() as $error): ?>
				<li><?php echo e($error); ?> </li>
			<?php endforeach; ?>
		</ul>

	</div>

<?php endif; ?>

<?php if(Session::has('update')): ?>
	<div class="alert alert-success" role='alert'>
		<strong><?php echo e(Session::get('update')); ?></strong>
	</div>
<?php endif; ?>

<?php if(Session::has('delete')): ?>
	<div class="alert alert-success" role='alert'>
		<strong><?php echo e(Session::get('delete')); ?></strong>
	</div>
<?php endif; ?>


<?php if(Session::has('save')): ?>
	<div class="alert alert-success" role='alert'>
		<strong><?php echo e(Session::get('save')); ?></strong>
	</div>
<?php endif; ?>
