
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h2>Add User</h2>
    <form method="post" action="add">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="password" required>
        <select name="role"> <!-- اضافة حقل الدور -->
        <option value="1">1</option>
        <option value="0">0</option>
        </select>
        <input type="submit" value="Create" name="submit">
    </form>
</body>
</html>