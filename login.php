<?php require_once("header.php"); ?>

	<!----#####################-->
	<!-----------Menüü----------->
<nav class="navbar navbar-inverse navbar-fixed-top">
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
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-1">
			<h1> Tere </h1>
		</div>
		
		<div class="col-sm-3 col-sm-offset-1">
	<form>
		<div class="form-group">
			<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		</div>
		<div class="form-group">
			<label for="exampleInputFile">File input</label>
				<input type="file" id="exampleInputFile">
		<p class="help-block">Example block-level help text here.</p>
		</div>
		<div class="checkbox">
		<label>
			<input type="checkbox"> Check me out
		</label>
		</div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>