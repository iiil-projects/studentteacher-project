<html>
<head>
        <title>My Blog</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	<div class="container">
    <h1>Registers</h1>
	<div class="row">
		<div class="col-md-6">
			<?php echo validation_errors(); ?>
			<?php echo form_open('master'); ?>
			  <fieldset class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email">
				<small class="text-muted">We'll never share your email with anyone else.</small>
			  </fieldset>
			  <fieldset class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
			  </fieldset>
			  <fieldset class="form-group">
				<label for="exampleSelect1">Cources</label>
				<select class="form-control" name="course" id="exampleSelect1">
				  <option value="1">1</option>
				  <option value="2">2</option>
				  <option value="3">3</option>
				  <option value="4">4</option>
				  <option value="5">5</option>
				</select>
			  </fieldset>
			  <fieldset class="form-group">
				<label for="exampleSelect2">Qualifications</label>
				<select multiple class="form-control" name="qualification" id="exampleSelect2">
				  <option value="1">1</option>
				  <option value="2">2</option>
				  <option value="3">3</option>
				  <option value="4">4</option>
				  <option value="5">5</option>
				</select>
			  </fieldset>
			  <fieldset class="form-group">
				<label for="exampleTextarea">Description</label>
				<textarea class="form-control" name="description" id="exampleTextarea" rows="3"></textarea>
			  </fieldset>
			  <fieldset class="form-group">
				<label for="exampleInputFile">Image</label>
				<input type="file" class="form-control-file"  name="image" id="exampleInputFile">
				<small class="text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
			  </fieldset>
			  <div class="radio">
				<label>
				  <input type="radio" name="gender" id="optionsRadios1" value="m" checked>
				  Male
				</label>
			  </div>
			  <div class="radio">
				<label>
				  <input type="radio" name="gender" id="f" value="option2">
				  Female
				</label>
			  </div>
			  <div class="radio">
				<label>
				  <input type="radio" name="role" id="male" value="student" checked>
				  Student
				</label>
				<label>
				  <input type="radio" name="role" id="female" value="teacher">
				  Teacher
				</label>
			  </div>
			  <div class="checkbox">
				<label>
				  <input type="checkbox"> Check me out
				</label>
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
	</div>
	
</body>
</html>