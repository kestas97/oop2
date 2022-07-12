<?php $msg = $this->data['message']; ?>

<div class="name">
    <?= $msg->getName(); ?>
</div>
<div class="surname">
    <p>
        <?= $msg->getSurname(); ?>
    </p>
</div>
<div class="email">
    <p>
        <?= $msg->getEmail(); ?>
    </p>
</div>
<div class="message">
    <p>
        <?= $msg->getMessage(); ?>
    </p>
</div>
