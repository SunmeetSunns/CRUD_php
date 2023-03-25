<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "sunmeet");

// Handle create operation
if (isset($_POST['create'])) {
   
    $id=$_POST['id'];
    $Fname = $_POST['Fname'];
    $Sname=$_POST['Sname'];
    $city=$_POST['city'];
    $college_name=$_POST['college_name'];
    $phone_no=$_POST['phone_no'];

    $sql = "INSERT INTO student_details (id, fname, sname, city, college_name, phone_no) VALUES ('$id', '$Fname', '$Sname', '$city', '$college_name', '$phone_no')";
    mysqli_query($conn, $sql);
}

// Handle read operation
if (isset($_POST['read'])) {
    $sql = "SELECT * FROM student_details";
    $result = mysqli_query($conn, $sql);

    echo "<table>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<hr>";
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['fname'] . "</td>";
        echo "<td>" . $row['sname'] . "</td>";
        echo "<td>" . $row['city'] . "</td>";
        echo "<td>" . $row['college_name'] . "</td>";
        echo "<td>" . $row['phone_no'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

// Handle update operation
if (isset($_POST['update'])) {
    $id=$_POST['id'];
    $Fname = $_POST['Fname'];
    $Sname=$_POST['Sname'];
    $city=$_POST['city'];
    $college_name=$_POST['college_name'];
    $phone_no=$_POST['phone_no'];

    $sql = "UPDATE student_details SET id = '$id', fname = '$Fname', sname = '$Sname', city = '$city', college_name = '$college_name', phone_no = '$phone_no' WHERE student_details.id = $id";
    mysqli_query($conn, $sql);
}

// Handle delete operation
if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    $sql =  "DELETE FROM student_details WHERE student_details.id = $id";
    mysqli_query($conn, $sql);
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>NovoInvent Software.com</title>
	<style>
        .h2{
            text: size 15px;
            background:#A7727D;
            color:#EDDBC7;
            text-align: center;
        }
        header {
			background-color: #804674;
			color: #EDDBC7;
			text-align: center;
			padding: 10px;
		}
		.container {
			display: flex;
			flex-direction: row;
			width: 100%;
			height: 100vh;
		}
		.section {
			flex: 1;
			height: 100%;
			border: 1px solid black ;
			box-sizing: border-box;
			padding: 10px;
		}
        form {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-top: 20px;
		}
		input[type="submit"], button {
			margin-top: 10px;
			padding: 5px 10px;
			border: none;
			border-radius: 3px;
			background-color: #A86464;
			color: white;
			cursor: pointer;
		}
	</style>
</head>
<body>
    <header>
        <h1 >Novoinvent Software Pvt. Ltd</h1>
     </header>







	<div class="container">
		<div class="section">
			<h2 class="h2">Create</h2>
            <form method="post">
                <label for="id">ID:</label>
                <input type="text" id="id" name="id"><br>
                <label for="Fname">First Name:</label>
                <input type="text" name="Fname" name="Fname"><br>
                <label for="Sname">Sur Name:</label>
                <input type="text" name="Sname" name="Sname"><br>
                
                <label for="city">City:</label>
                <input type="text" id="city" name="city"><br>

                <label for="college_name">College Name:</label>
                <input type="text" id="college_name" name="college_name"><br>

                <label for="phone_no">Phone Number:</label>
                <input type="tel" id="phone_no" name="phone_no" pattern="[0-9]{10}"><br>
                <input type="submit" name="create" value="Create">
            </form>
		</div>
		<div class="section">
            <h2 class="h2">Read</h2><br><br><br><br><br><br><br>
            <!-- Read button -->
            <form action="/Php form/read.php" method="post">
                <input type="submit" name="read" value="Read">
            </form>
		</div>
		<div class="section">
            <h2 class="h2">Update</h2>
            <!-- Update form -->
            <form method="post">
				<label for="id">ID:</label>
					<input type="text" id="id" name="id"><br>
					<label for="Fname">First Name:</label>
					<input type="text" name="Fname" name="Fname"><br>
					<label for="Sname">Sur Name:</label>
					<input type="text" name="Sname" name="Sname"><br>
					
					<label for="city">City:</label>
					<input type="text" id="city" name="city"><br>

					<label for="college_name">College Name:</label>
					<input type="text" id="college_name" name="college_name"><br>

					<label for="phone_no">Phone Number:</label>
					<input type="tel" id="phone_no" name="phone_no" pattern="[0-9]{10}"><br>
                
                <input type="submit" name="update" value="Update">
            </form>
		</div>
		<div class="section">
            <h2 class="h2">Delete</h2><br><br><br><br>
            <!-- Delete form -->
            <form method="post">
            <label for="id">ID:</label>	
                <input type="text" name="id" id="id"><br>
                <input type="submit" name="delete" value="Delete">
            </form>
		</div>
	</div>
</body>
</html>
