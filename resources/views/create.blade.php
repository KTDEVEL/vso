<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
 
  <div class="col-md-12" style="text-align: center; font-weight: bold; color: blue;"><h2>THIS IS THE LIST OF YOUR FOOD NOW</h2></div>
  <div class="col-md-12">
    <a href="form.html"><button type="submit" class="btn btn-primary">Create Post</button></a>
  </div>
  <div class="col-md-12"><hr></div>

  <form>
  <div class="form-row">
    <div class="form-group col-md-2">
      <label>ID</label>
    </div>
    <div class="form-group col-md-2">
      <label>Title</label>
    </div>
    <div class="form-group col-md-2">
     <label>Writter</label>
    </div>

    <div class="form-group col-md-2">
   <label>Create at</label>
  </div>
  <div class="form-group col-md-4">
    <label>Update at</label>
  </div>
  </div>
</form>
<section>
  <div class="form-row">
    <div class="form-group col-md-2">
      <label>1</label>
    </div>
    <div class="form-group col-md-2">
      <label>Amazon</label>
    </div>
    <div class="form-group col-md-2">
     <label>10$</label>
    </div>

    <div class="form-group col-md-2">
   <label>Large</label>
  </div>
  <div class="form-group col-md-2">
    <label>Good</label>
  </div>
  <div class="form-group col-md-2">
      <a href="edit.html"><button type="submit" class="btn btn-primary">Edit</button></a>
      <button type="submit" class="btn btn-danger">Delete</button>
  </div>
  </div>
</section>

</div>
</body>
</html>
