<!--
Lloyd Robinson G. Lopez
N2
ITMC Platform Technologies
July 4, 2020
Midterm Requirement

Honor Code:
I search some ideas at youtube:
links:
https://www.youtube.com/watch?v=mjVuBlwXASo
https://www.youtube.com/watch?v=JZdMXUIMdQw
 
-->
<!DOCTYPE html>
<?php include('conn.php'); ?>

	<?php 
		//get edit to data
		if (isset($_GET['edit'])) {
			$ID = $_GET['edit'];
			$update = true;
			$record = mysqli_query($conn, "SELECT * FROM userdata WHERE ID=$ID");
		
			//record count to the table
			if (@count($record) == 1 ) {
				$n = mysqli_fetch_array($record);
				$uname = $n['Username'];
				$ename = $n['Email'];
				$pname = $n['Password'];
			}
		}
	?>

	<html>
		<head>
			<!-- link css style for update form -->
			<link rel="stylesheet" type="text/css" href="style1.css">
			<title>UPDATE/DELETE</title>
		</head>
		
		<body>
			<!-- prompt message -->
			<?php if (isset($_SESSION['message'])): ?>
				<div class="msg">
					<?php 
						echo $_SESSION['message']; 
						unset($_SESSION['message']);
					?>
				</div>
			<?php endif ?>
			
			<!-- select data from the table-->
			<?php $results = mysqli_query($conn, "SELECT * FROM userdata"); ?>

			<table>
				<!-- Table-->
				<thead>
					<tr>
						<th>Username</th>
						<th>Email</th>
						<th>Password</th>
						<th colspan="3">Action</th>
					</tr>
				</thead>
				
				<!-- display all the data inside the database -->
				<?php while ($row = mysqli_fetch_array($results)){ ?>
					<tr>
						<td><?php echo $row['Username']; ?></td>
						<td><?php echo $row['Email']; ?></td>
						<td><?php echo $row['Password']; ?></td>
						<td>
							<a href="Update.php?edit=<?php echo $row['ID']; ?>" class="edit_btn" >Edit</a>  
						</td>
						<td>
							<!-- set the Delete.php file as its reference -->
							<a href="Delete.php?del=<?php echo $row['ID']; ?>" class="del_btn">Delete</a>
						</td>
					</tr>
				<?php } ?>
			</table>

			<!-- layout for the table -->
			<form method="post" action="conn.php" >
				<div class="input-group">
					<label>Username</label>
					<input type="hidden" name="ID" value="<?php echo $ID; ?>">
					<input type="text" name="uname" value="<?php echo $uname;?>">
				</div>
				<div class="input-group">
					<label>Email</label>
					<input type="hidden" name="ID" value="<?php echo $ID; ?>">
					<input type="text" name="ename" value="<?php echo $ename;?>">
				</div>
				<div class="input-group">
					<label>Password</label>
					<input type="hidden" name="ID" value="<?php echo $ID; ?>">
					<input type="text" name="pname" value="<?php echo $pname;?>">
				</div>
				<div class="input-group">
					<?php if ($update == true): ?>
					<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
					<?php else: ?>
					<button class="btn"><a href="index1.php"> Home </a></button>
					<?php endif ?>
				</div>
			</form>
		</body>
	</html>