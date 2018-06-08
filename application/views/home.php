<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- data tables css -->
	<link rel="stylesheet" type="text/css" href="assets/datatables/datatables.min.css">
</head>
<body>

<div class="container">
	<div class="page-header">
		<br>
		<center><h1>Crud <small>Codeigniter</small></h1></center>
	</div>
		<hr>
	<button class="btn btn-default float-right" data-toggle="modal" data-target="#AddMember">Add Member</button>
	<table class="table table-bordered" id="manageMemberTable">
		<thead>
			<tr>
				<td>Name</td>
				<td>age</td>
				<td>contact</td>
				<td>address</td>
				<td>Options</td>
			</tr>
		</thead>
	</table>
	<!-- Add Member Modal -->
<div class="modal fade" id="AddMember" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Member</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
			<form method="post" action="welcome/creates" id="createForm">
      <div class="modal-body">
				  <div class="form-group">
				    <label for="1">First Name *</label>
				    <input type="text" class="form-control" id="1" placeholder="First Name" name="fname">
				  </div>
				  <div class="form-group">
				    <label for="2">Last Name</label>
				    <input type="text" class="form-control" id="2" placeholder="Last Name" name="lname">
				  </div>
					<div class="form-group">
				    <label for="3">Age *</label>
				    <input type="text" class="form-control" id="3" placeholder="Age" name="age">
				  </div>
					<div class="form-group">
				    <label for="5">Contact *</label>
				    <input type="text" class="form-control" id="5" placeholder="Contact" name="contact">
				  </div>
					<div class="form-group">
				    <label for="4">Address</label>
				    <input type="text" class="form-control" id="4" placeholder="Address" name="address">
				  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="input" value="submit" class="btn btn-primary">Save changes</button>
      </div>
			</form>
    </div>
  </div>
</div>
<!-- Add Member Modal -->
<div class="modal fade" id="editMember" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Edit Member</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<form method="post" action="welcome/edit" id="editForm">
		<div class="modal-body">
				<div class="form-group">
					<label for="edit1">First Name *</label>
					<input type="text" class="form-control" id="edit1" placeholder="First Name" name="editfname">
				</div>
				<div class="form-group">
					<label for="edit2">Last Name</label>
					<input type="text" class="form-control" id="edit2" placeholder="Last Name" name="editlname">
				</div>
				<div class="form-group">
					<label for="edit3">Age *</label>
					<input type="text" class="form-control" id="edit3" placeholder="Age" name="editage">
				</div>
				<div class="form-group">
					<label for="edit5">Contact *</label>
					<input type="text" class="form-control" id="edit5" placeholder="Contact" name="editcontact">
				</div>
				<div class="form-group">
					<label for="edit4">Address</label>
					<input type="text" class="form-control" id="edit4" placeholder="Address" name="editaddress">
				</div>

		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="input" value="submit" class="btn btn-primary">Save changes</button>
		</div>
		</form>
	</div>
</div>
</div>
<!-- Remove Member Modal -->
<div class="modal fade" id="removeMember" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<form method="post" action="welcome/remove" id="createForm">
		<div class="modal-body">
				<div class="form-group">
					<label for="1">First Name *</label>
					<input type="text" class="form-control" id="1" placeholder="First Name" name="fname">
				</div>
				<div class="form-group">
					<label for="2">Last Name</label>
					<input type="text" class="form-control" id="2" placeholder="Last Name" name="lname">
				</div>
				<div class="form-group">
					<label for="3">Age *</label>
					<input type="text" class="form-control" id="3" placeholder="Age" name="age">
				</div>
				<div class="form-group">
					<label for="5">Contact *</label>
					<input type="text" class="form-control" id="5" placeholder="Contact" name="contact">
				</div>
				<div class="form-group">
					<label for="4">Address</label>
					<input type="text" class="form-control" id="4" placeholder="Address" name="address">
				</div>

		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="input" value="submit" class="btn btn-primary">Save changes</button>
		</div>
		</form>
	</div>
</div>
</div>
</div>
<!-- jquery -->
<script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
<!-- data tables js -->
<script type="text/javascript" src="assets/datatables/datatables.min.js"></script>
<!-- bootstrap js -->
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="custom/js/home.js"></script>
<script type="text/javascript">
var manageMemberTable;
	$(document).ready(function(){
	manageMemberTable = 	$("#manageMemberTable").DataTable({
		"ajax" : "index.php/welcome/fetchMemberData",
		destroy : true

	})
});
</script>
</body>
</html>
