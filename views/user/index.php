<?php foreach ($users as $user):?>
    <a href="user/<?= $user->login?>">
        <img src="<?= $user->photo?>" width="60">
        <h4><?= $user->firstname?> <?= $user->lastname?></h4>
        <h6><?= $user->login?></h6>
    </a>
    <hr>
<?php endforeach;?>
