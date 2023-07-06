<h2>HOME</h2>
<h3>Users: </h3>


<ul>
    <?php foreach ($users as $user) : ?>
        <li>
            <?php echo $user->name; ?> | <a href="/user/<?php echo $user->id; ?>">detalhes</a>
        </li>
    <?php endforeach; ?>
</ul>