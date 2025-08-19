<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form id="regForm" action="connect.php" method="post">
    <h2>Registration</h2>
    <label>Name</label><br> 
    <input name = "name" id = "name" placeholder="Enter Name"> <br> <br>

    <label>Last Name</label> <br>
    <input name = "last_name" id = "last_name" placeholder="Enter last name"> <br> <br>

     <label>Age</label> <br>
    <input name = "age" id = "age" placeholder="Enter age"> <br> <br>

    <label>Course</label> <br>
    <input name = "course" id = "course" placeholder="Enter course"> <br> <br>

     <button id = "btn"> Submit
        </form>

   
        <script>
            const regForm = document.getElementById("regForm");

            regForm.addEventListener("submit", function(e){
                const name = document.getElementById("name").value.trim();
                const last_name = document.getElementById("last_name").value.trim();
                const age = document.getElementById("age").value.trim();
                const course = document.getElementById("course").value.trim();

                if(!name || !last_name || !age || !course){
                    e.preventDefault();
                    alert("Fill in the blanks")
                    return;
                }
            });
    </script>
</body>
</html>