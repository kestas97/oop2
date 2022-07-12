<div>
    <form action="<?= $this->url('home/create') ?>" method="POST">
        <input type="text" name="name" placeholder="name" >
        <input type="text" name="surname" placeholder="surname" >
        <input type="text" name="email" placeholder="email" >
        <textarea name="message"></textarea>
        <input type="submit" name="submit" value="Send">
    </form>
</div>
