<?php 
    if (isset($_SESSION['mensagem'])):
?>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <?= $_SESSION['mensagem']; ?>
    <button></button>
</div>