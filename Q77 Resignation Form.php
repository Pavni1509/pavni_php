<html>
<head>
    <title>Registration Form</title>
    <style>
        .form-box {
            width: 400px;
            border: 2px solid black;
        }

        .title-bar {
            padding: 5px 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 2px solid black;
            font-weight: bold;
            font-size: 20px;
        }

        .title-bar .left {
            display: flex;
            align-items: center;
        }

        .title-bar img {
            width: 18px;
            height: 18px;
            margin-right: 10px;
        }

        .title-bar .right span {
            padding: 0 8px;
            border-left: 1px solid black;
        }

        table {
            width: 100%;
            padding: 10px;
        }

        td {
            padding: 8px;
        }

        input[type="text"], select {
            width: 100%;
            padding: 5px;
        }

        .btn {
            width: 100px;
            padding: 5px;
        }
    </style>
</head>
<body>

<div class="form-box">
    <div class="title-bar">
        <div class="left">
            <img src="https://cdn-icons-png.flaticon.com/512/545/545705.png" alt="icon">
            Registration Form
        </div>
        <div class="right">
            <span>▁</span>
            <span>▢</span>
            <span>✕</span>
        </div>
    </div>

    <form method="post" action="">
        <table>
            <tr>
                <td><label>Name:</label></td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <td><label>Class:</label></td>
                <td>
                    <select name="class" required>
                        <option disabled selected>--Select--</option>
                        <option value="BCA">BCA</option>
                        <option value="BBA">BBA</option>
                        <option value="MBA">MBA</option>
                        <option value="LLB">LLB</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label>SEM:</label></td>
                <td><input type="text" name="sem" required></td>
            </tr>
            <tr>
                <td><label>Gender:</label></td>
                <td>
                    <input type="radio" name="gender" value="Male" required> Male
                    <input type="radio" name="gender" value="Female"> Female
                </td>
            </tr>
            <tr>
                <td><label>Mobile:</label></td>
                <td><input type="text" name="mobile" required></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" class="btn" value="Submit"></td>
                <td><input type="reset" class="btn" value="Cancel"></td>
            </tr>
        </table>
    </form>
</div>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $class = $_POST['class'];
    $sem = $_POST['sem'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];

    $conn = new mysqli("localhost", "root", "");
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    $conn->query("CREATE DATABASE IF NOT EXISTS studentdb");
    $conn->select_db("studentdb");

    $createTable = "CREATE TABLE IF NOT EXISTS students (
        name VARCHAR(100),
        class VARCHAR(50),
        sem VARCHAR(10),
        gender VARCHAR(10),
        mobile VARCHAR(15)
    )";
    $conn->query($createTable);

    $insert = "INSERT INTO students
               VALUES ('$name', '$class', '$sem', '$gender', '$mobile')";
    
    if($conn->query($insert)){
        echo "<p>Student registered successfully!</p>";
        echo "<div style='width:400px; border:1px solid black; padding:10px;'>
                <h4>Registered Record:</h4>
                <table border='1' cellpadding='5' cellspacing='0' style='width:100%; text-align:left;'>
                    <tr><th>Name</th><td>$name</td></tr>
                    <tr><th>Class</th><td>$class</td></tr>
                    <tr><th>Semester</th><td>$sem</td></tr>
                    <tr><th>Gender</th><td>$gender</td></tr>
                    <tr><th>Mobile</th><td>$mobile</td></tr>
                </table>
              </div>";
    } else {
        echo "<p style='text-align:center; color:red;'>Error: " . $conn->error . "</p>";
    }

    $conn->close();
}
?>
</body>
</html>