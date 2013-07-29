<h2>View All Posts</h2>

<table>
    <tr>
        <th>Title</th>
        <th>Body</th>
    </tr>
    <?php foreach($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['username']; ?></td>
        <td><?php echo $user['User']['password']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>