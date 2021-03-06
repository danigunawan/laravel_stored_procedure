<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Main template</title>

    <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/lato.css')); ?>" rel="stylesheet">
 
    <script src="<?php echo e(asset('js/jquery.js')); ?>"></script>

    <style>
        body { font-family: 'Calibri'; }
    </style>
<head/>
<body>
     <div class="panel panel-primary"> 
      <div class="panel-heading">Stored Procedures Panel</div>  
      <div class="panel-body">
      <?php if(session()->has('success')): ?>
        <div class="alert alert-success" role="alert"><?php echo e(session('success')); ?></div>
      <?php endif; ?>   
        <form method="POST" action="add" class="form-horizontal panel">
        <!--<form method="POST" action="/documents/insert_document_details/{name}/{path}" class="form-horizontal panel">-->
          <?php echo csrf_field(); ?>

          <!--<input name="_method" type="hidden" value="PUT">-->
          <div class="form-group ">
            <label for="name" class="col-md-4 control-label">Document name:</label>
            <div class="col-md-6">
              <input class="form-control" name="name" type="text" id="name" value="">
            </div>
            <label for="name" class="col-md-4 control-label">Document path:</label>
            <div class="col-md-6">
              <input class="form-control" name="path" type="text" id="path" value="">
            </div> 
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-success">Send Data</button>
            </div>
            <div class="col-md-6 col-md-offset-4">
                <input type="hidden" value="<?php echo e(Session::token()); ?>" name="_token">
            </div>
          </div>
        </form>
      </div>        
  </div>
</body>
<html>