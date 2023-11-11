<!-- app/views/user_list.php -->
<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <title>User List</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
</head>
<body>
    <h1>User List</h1>
    
    <table>
        <tr>
            <th>ID</th>
            <th>username</th>
            <th>password</th>
            <th>role</th>
        </tr>
    <ul>
        
        <?php foreach ($users as $user){ ?>
            <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['username']; ?></td>
            <td><?php echo $user['password']; ?></td>
            <td><?php echo $user['role']; ?></td>
            <td>
            <a href=" editForm?id=<?php echo $user['id']; ?>">Edit</a>
           <a href="delete<?php echo $user['id']?>">Delete</a>
           </td>
           </tr>
           <?php } ?>
    </ul>
    <a href="addForm">add new user</a>
</body>
</html>
