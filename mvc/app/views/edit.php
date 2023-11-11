<!DOCTYPE html>
<html>
<head>
    <title>update</title>
</head>
<body>
    <h1>update</h1>

    <form method="post" action="edit?id=<?php echo $_GET["id"]; ?>">


        <label for="name">name:</label>
        <input type="text" name="username" id="name" ><br>

        <label for="password">password :</label>
        <input type="password" name="password" id="password"  ><br>

        <label for="user_type"> type:</label>
        <select name="role" id="role" >
            <option value="1" >1</option>
            <option value="0" >0</option>
        </select><br>

        <input type="submit" value="update" name="submit">
    </form>
</body>
</html>