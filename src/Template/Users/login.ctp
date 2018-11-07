<section class="container combo-box box-a user-box">
  <div class="clearfix heading">
    <h1 class="flt-left"><a href="#most-wanted">Member Login</a></h1>
  </div>
  <div class="user-login clearfix">
    <div class="user-login-box">
      <h2>
        <?php echo $this->Html->link('New to HPB? Hop in for great deals!', '/register', array('title' => 'Register Now!')); ?>
      </h2>
      <?php
        echo $this->Form->create('User', array('action' => 'login', 'class' => 'forms-normal'));
      ?>
      <fieldset>
        <div class="clearfix">
          <?php echo $this->Form->control('username',array('class' => 'input-text', 'placeholder' => 'Your Username','id' => 'username'), null, false); ?>
        </div>
        <div class="clearfix">
          <?php echo $this->Form->control('password',array('class' => 'input-text', 'placeholder' => 'Your Password','id' => 'password'), null, false); ?>
        </div>
        <div class="submit">
          <?php echo $this->Form->button(__('Login'));?>

        </div>
        <div class="forgot">
          <a id="forgot-link" href="#forgot">Forgot your username/password?</a>
        </div>
      </fieldset>
      <?php echo $this->Form->end();?>
    </div>
  </div>
</section>
<div id="forgot" class="form-normal" style="display: none">
  <p>Your username and new password will be sent to your email.</p>
  <form id="forgotForm" method="post" action="<?php echo $this->Url->build(array('controller' =>'users', 'action' => 'forgot'))?>">
    <input id="forgotEmail" name="data[email]" placeholder="Your Email" />
    <input type="submit" value="Send" />
  </form>
</div>
