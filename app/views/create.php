<h2>Create Users</h2>

<?php echo getFlash('message'); ?>

<form action="/user/store" method="post">
    <input type="text" name="name" id="name" placeholder="SEU NOME">
    <br>
    <?php echo getFlash('name'); ?>
    <br>
    <br>
    <input type="email" name="email" id="email" placeholder="SEU E-MAIL">
    <br>
    <?php echo getFlash('email'); ?>
    <br>
    <br>
    <input type="password" name="password" id="password" placeholder="SUA SENHA">
    <br>
    <?php echo getFlash('password'); ?>
    <br>
    <br>
    <button type="submit">Enviar</button>
</form>