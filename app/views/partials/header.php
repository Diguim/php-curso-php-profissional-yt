<header>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <?php if(!logged()): ?>
                <li><a href="/login">Login</a></li>
                <li><a href="/user/create">Create</a></li>
            <?php endif; ?>
        </ul>
    </nav>

    <div id="status_login">
        Bem vindo
        <?php if(logged()): ?>
            <?php echo user()->name; ?> | <a href="/logout">Logout</a>
        <?php else: ?>
            visitante
        <?php endif; ?>
    </div>
</header>