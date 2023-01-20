<main>
<div class="container-fluid">
<h1 class="mt-4"></h1>
<ol class="breadcrumb mb-4">
<li class="breadcrumb-item"><a href="<?php echo site_url('admin/user') ?>">user</a></li>
<li class="breadcrumb-item active"><?php echo $title ?></li>
</ol>
<div class="card mb-4">
<div class="card-header">
<a href="<?php echo site_url('admin/User/add') ?>"><i cla
ss="fas fa-plus"></i> Add New</a>
</div>
<?php if ($this->session->flashdata('success')): ?>
<div class="alert alert-success" role="alert">
<?php echo $this->session->flashdata('success'); ?>
</div>
<?php endif; ?>
<div class="card-body">
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover"
id="tabelkelas" width="100%" cellspacing="0">
<thead>
<tr>
<th>No.</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Role</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php
$no =1;
foreach ($user as $user): ?>
<tr>
<td>$no</td>
<td>$user->username</td>
<td>$user->email</td>
<td>$user->phone</td>
<td>$user->role</td>
<td>
<div>
<a href=" <?php echo anchor('admin/User/getedit/'.$user->id,'   <div class="btn btn-sm btn-danger mt-1" onclick='return confirm('\"Ingin mengedit data user ini?\" ');'><i class="fa fa-edit"></i> </div>') ?>">edit</a> 

<a href=" <?php echo anchor('admin/user/delete/'.$user->id,'   <div class="btn btn-sm btn-danger mt-1" onclick='return confirm('\"Ingin mengapus data user ini?\" ');'><i class="fa fa-trash"></i> </div>') ?>">hapus</a> 



</div>
</td>
</tr> ?>
<?php  endforeach; ?> 
</tbody>
</table>
</div>
</div>
</div>
<div style="height: 100vh"></div>
</div>
</main>
