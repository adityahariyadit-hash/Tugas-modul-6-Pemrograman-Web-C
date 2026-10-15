
<?php
// index.php
include 'config.php';
$result = mysqli_query($conn, "SELECT * FROM students ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Dashboard</title>
<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
<div class="card shadow-sm">
<div class="card-header bg-primary text-white d-flex justify-content-between
align-items-center">
<h4 class="mb-0">Student Management</h4>
<div>
<a href="create.php" class="btn btn-success btn-sm">+ Add Student</a>
<a href="export.php" class="btn btn-info btn-sm text-white">Export Excel</a>
</div>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered table-striped table-hover align-middle">
<thead class="table-dark">
<tr>
<th>No</th>
<th>NIM</th>
<th>Name</th>
<th>Major</th>
<th class="text-center">Actions</th>
</tr>
</thead>
<tbody>
<?php
$no = 1;
while ($row = mysqli_fetch_assoc($result)) {
echo "<tr>
<td>{$no}</td>
<td>{$row['nim']}</td>
<td>{$row['name']}</td>
<td>{$row['majors']}</td>
<td class='text-center'>
<a href='edit.php?id={$row['id']}' class='btn btn-warning
btn-sm'>Edit</a>
<a href='delete.php?id={$row['id']}' class='btn btn-danger btn-sm'
onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Delete</a>
</td>
</tr>";
$no++;
}
?>
</tbody>
</table>
</div>
</div>
</div>
</div>
<!-- Bootstrap 5 JS Bundle -->
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></scri
pt>
</body>
</html>
