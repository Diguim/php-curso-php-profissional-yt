
<?php if(!logged()): ?>
<h2>Login</h2>
<?php echo getFlash('message');?>

<form action="/login" method="post">
   
    <input type="email" name="email" id="email" value="oi@email.com">
    <input type="password" name="password" id="password" value="123">
    
    <button type="submit">Login</button>

</form>
<?php else: ?>
    <h2>JÁ ESTÁ LOGADO</h2>

<?php endif; ?>