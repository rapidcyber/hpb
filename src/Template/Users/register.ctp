<?php
  $this->set('title_for_layout', 'Member Registration');
?>
<section class="containter combo-box category-box box-d">
    <div class="item-details clearfix">
      <div class="bazaar-name flt-left clearfix">
        <a href="#bazaar-name">HPB</a>
      </div>
      <div class="item-detail flt-left clearfix">
        <span class="price flt-left">Registration</span>
      </div>
    </div>
  </section>
  <section class="container combo-box box-a user-box">
    <div class="clearfix heading">
      <h1 class="flt-left"><a href="#most-wanted">Register New User</a></h1>
    </div>
    <div class="user-login clearfix">
      <div class="new-user-box">
        <h2>New to HPB? Hop in for great deals!</h2>
        <hr />
        <div class="clearfix create-user-box">
          <?php echo $this->Form->create('User', array('action'=>'register', 'class' => 'forms-normal'));?>
            <fieldset>
              <div class="clearfix">
                <label for="create-username-fname">Your First Name</label>
                <?php echo $this->Form->input('first_name', array('id'=> 'create-username-fname', 'placeholder' => 'Your given name', 'label' => FALSE))?>
              </div>
              <div class="clearfix">
                <label for="create-username-lname">Your Last Name</label>
                <?php echo $this->Form->input('last_name', array('id'=> 'create-username-lname', 'placeholder' => 'Your surname', 'label' => FALSE))?>
              </div>
              <div class="clearfix">
                <label for="create-username-address">Your Delivery Address</label>
                <?php echo $this->Form->textarea('address', array('id'=> 'create-username-address', 'placeholder' => 'Where you want your item to be delivered', 'label' => FALSE))?>
              </div>
              <div class="clearfix">
                <label for="create-username-email">Your Email</label>
                <?php echo $this->Form->input('email', array('id'=> 'create-username-email', 'placeholder' => 'youremail@example.com', 'type' => 'email', 'label' => FALSE))?>
              </div>
              <div class="clearfix">
                <label for="create-username">Choose your username</label>
                <?php echo $this->Form->input('username', array('id'=> 'create-username', 'placeholder' => 'New Username', 'label' => FALSE))?>
              </div>
              <div class="clearfix">
                <label for="create-password">Choose your password</label>
                <?php echo $this->Form->input('password', array('id'=> 'create-password', 'placeholder' => 'Your password', 'type' => 'password', 'label' => FALSE))?>
              </div>
              <div class="clearfix">
                <label for="verify-password">Verify your password</label>
                <input type="password" id="verify-password" placeholder="My password" />
              </div>
              <div class="submit">
                <?php echo $this->Form->submit('Count me in!', array('id' => 'login-create')) ?>
              </div>
            </fieldset>
          <?php echo $this->Form->end()?>
        </div>
      </div>
    </div>
  </section>
