<?php $this->setSiteTitle("Register Page"); ?>
<?php $this->start('head'); ?>

<?php $this->end(); ?>
<?php $this->start('body'); ?>
<div class="col-md-6 col-md-offset-3 jumbotron">
    <form class="form" action="" method="post">
        <div class="form-group">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname" class="form-control" value="<?= $this->post['fname']?>">
        </div>
        <div class="form-group">
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lname" class="form-control" value="<?= $this->post['lname']?>">
        </div>
        <div class="form-group">
            <label for="email">e-mail</label>
            <input type="email" id="email" name="email" class="form-control" value="<?= $this->post['email']?>">
        </div>
        <div class="form-group">
            <label for="username">Choose a Username</label>
            <input type="text" id="username" name="username" class="form-control" value="<?= $this->post['username']?>">
        </div>
        <div class="form-group">
            <label for="password">Choose a Password</label>
            <input type="password" id="password" name="password" class="form-control" value="<?= $this->post['password']?>">
        </div>
        <div class="form-group">
            <label for="confirm">Confirm Password</label>
            <input type="password" id="confirm" name="confirm" class="form-control" value="<?= $this->post['confirm']?>">
        </div>
        <div class="bg-danger"><?= $this->displayErrors; ?></div>
        <div class="pull-right">
            <input type="submit" class="btn btn-primary btn-large" value="register">
        </div>
    </form>
</div>
<?php $this->end(); ?>