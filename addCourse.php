<!DOCTYPE html>
<html>
<head>
    <title>Add a New Course</title>
    <link rel="stylesheet" type="text/css" href="services.css">
</head>
<body>
    <h2>Add a New Course</h2>
  
    <form method="POST" action="insertCourse.php">
        <label for="courseName">Course Name:</label>
        <input type="text" id="courseName" name="courseName" required><br><br>

        <label for="courseType">Course Type:</label>
        <select id="courseType" name="courseType" required>
            <option value="math">Math</option>
            <option value="chem">Chemistry</option>
            <option value="bio">Biology</option>
            <option value="eng">English</option>
            <option value="busi">Business</option>
            <option value="eng">Engineering</option>
        </select><br><br>

        <label for="courseId">Course Id:</label><br><br>
        <input type="text" id="courseId" name="courseId" required><br><br>

        <button type="submit" onclick="submitCourse()" id="formSubmit">Submit</button>
    </form>
</body>
</html>
