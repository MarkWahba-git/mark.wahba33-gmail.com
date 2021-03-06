<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .container{
            margin-top: 150px !important;
        }
        #doctor{
            margin-top: 100px !important;
        }
    </style>
    <title>Doctor</title>
</head>
<body>
<div class="container">
<div class="mt-5">
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<form method="POST" action="<?php echo e(route('doctorstab.store')); ?>">
    <?php echo csrf_field(); ?>
    
    <div class="form-group">
      <label >Name</label>
      <input name="name" type="text" class="form-control" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label >Email</label>
      <input name="email" type="email" class="form-control" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label >Image</label>
      <input name="avatar" type="file" class="form-control" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label >National Id</label>
      <input name="nat_id" type="text" class="form-control" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label >Date Of Birth</label>
      <input name="dob" type="date" class="form-control" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label >Gender</label>
      <select class="form-control" name="gender">
        <option value="male">male</option>
        <option value="female">female</option>

      </select>
      <div class="form-group">
      <label >Phone</label>
      <input name="phone_number" type="text" class="form-control" aria-describedby="emailHelp">
    </div>
    </div>
    
   
    <div class="form-group">
      <label >Is Banned</label>
      <select class="form-control" name="is_banned">
        <option value="0">banned</option>
        <option value="1">un banned</option>

      </select>
    </div>
    
      <input name="pasword"type="hidden" value="null" class="form-control" aria-describedby="emailHelp">
   

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  
</body>
</html><?php /**PATH /media/ahmed/edu/ITI/laravel/laravel-project/mark.wahba33-gmail.com/resources/views/doctorstab/create.blade.php ENDPATH**/ ?>