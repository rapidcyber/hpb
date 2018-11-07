<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Home Philippines Bazaar -
        <?= $this->fetch('title') ?>
    </title>


    <?php
      $r = $this->request->getAttribute('webroot');
        echo $this->Html->meta(
            'Home Philippines Bazaar',
            'img/favicon.ico?v=2',
            array('type' => 'icon')
        );
        echo $this->Html->meta(
            'apple-touch-icon.png',
            'img/apple-touch-icon.png',
            array('type' => 'apple-touch-icon')
        );
        echo $this->Html->css(array(
            'jquery.fancybox.min.css',
            'base.css',
            'skeleton.css',
            // 'layout.css',
            // 'mobile.css',
            // 'foundation.min.css',
            'main.css'
        ));
        echo $this->fetch('meta');
        echo $this->fetch('css');

    ?>
    <?php echo $this->Html->script('modernizr-2.6'); ?>
    <script type="text/javascript">
  //<!--
    var HPB = window.HPB = {};
    HPB.Globals = {
      WebRoot : "<?php echo $r; ?>",

      LoggedIn : <?php if ($this->request->getSession()->read('Auth.User')) { echo "true"; } else { echo "false";  }?>
    }
  //-->
  </script>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $r; ?>img/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $r; ?>img/apple-touch-icon-114x114.png" />
</head>
<body>
  <div id="root">
    <section class="nav">
      <div class="container page-part nav-tier clearfix">
        <nav class="main-nav flt-left clearfix">
          <?php echo $this->Html->link('HOME', '/' , array('class' => 'home-lnk icon-lnk', 'title' => 'Home Philippines Bazaar')); ?>
          <?php echo $this->Html->link('<span>Bazaars</span>', '/bazaars' , array('class' => 'main-lnk icon-lnk frs-icon-lnk','title' => 'Bazaars','escape'=>false)); ?>
          <?php $cell = $this->cell('Menus',['topmenus']); echo $cell; ?>
          <?php echo $this->Html->link('<span>All</span>', array("controller"=>"menus","action"=>"all"),array("class"=>"main-lnk icon-lnk","title"=>"See all sections","escape"=>false)); ?>
        </nav>
        <?php
            $user =$this->Session->read('Auth.User');
                if ($user):
            ?>
            <div class='flt-left clearfix'>
                <span class="logged-user">Welcome <?php echo $user['username']?></span>
                <?php echo $this->Html->link(' ', array('controller' => 'Orders','action' => 'cart'), array('class' => 'cart-button'))?>

            </div>
        <?php endif;?>
        <nav class="user-nav flt-right clearfix">
          <?php
            echo $this->Html->link('About', '/pages/about' , array('class' => 'flt-left', 'title' => 'About Us'));
            echo $this->Html->link('FAQs', '/pages/faqs' , array('class' => 'flt-left', 'title' => 'Frequently Asked Questions'));
            echo $this->Html->link('Shipping', '/pages/shipping' , array('class' => 'flt-left', 'title' => 'Shipping'));
            echo $this->Html->link('Press', '/pages/press' , array('class' => 'flt-left', 'title' => 'Press'));
            if ($this->Session->read('Auth.User')) {
              echo $this->Html->link('Logout', '/logout', array('id' => 'login-but', 'title' => 'Logout', 'class' => 'flt-left'));
            } else {
              echo $this->Html->link('Login', '/login', array('id' => 'login-but', 'title' => 'Login', 'class' => 'flt-left'));
              echo $this->Html->link('Register', '/register', array('id' => 'login-but', 'title' => 'Login', 'class' => 'flt-left'));
            }
          ?>
        </nav>
      </div>
    </section>
    <div class="bdy">
      <div class="bdy-bg">
        <header class="hdr">
          <section class="container clearfix">
            <div class="search-part flt-right">
              <?php
                echo $this->Form->create("Item",array('action' => 'search', 'id' => 'SearchTop', 'class' => 'clearfix', 'div' => FALSE));
                echo $this->Form->input("Item.search", array('placeholder' => 'Looking for Something?', 'class'=>'input-search flt-left', 'label' => FALSE, 'div' => FALSE));
                echo $this->Form->submit("Find It!", array('class' => 'input-submit flt-left', 'div' => FALSE));
                echo $this->Form->end();
              ?>
            </div>
            <?php echo $this->Html->link('Home Philippines Bazaar', '/' , array('class' => 'logo-hpb flt-left', 'title' => 'Home Philippines Bazaar')); ?>
          </section>
        </header>
        <section class="nav-container">
          <nav class="item-nav container">
            <div class="main-nav-top clearfix">
              <span class="heading flt-left">Are you looking for</span>
              <?php echo $this->Html->link('Bazaars', '/bazaars' , array('class'=>'nodblclick','title' => 'Looking for Bazaars?')); ?>
              <?php echo $this->cell('Menus', ['normalmenus']); ?>
              <?php echo $this->Html->link('Brands',array("controller"=>"menus","action"=>"all",'brands'),array('class'=>'nodblclick','title' => 'Looking for a specific brand?')); ?>
              <?php echo $this->Html->link('New Arrivals',array("controller"=>"menus","action"=>"all",'new-arrivals'),array('class'=>'nodblclick new-arrivals','title' => 'Looking for the latest stuff?')); ?>
            </div>
            <?php echo $this->cell('Menus::menucategories'); ?>
          </nav>
          <nav class="item-nav container">
            <div class="clearfix">
              <span class="heading flt-left">Most people are looking for</span>
              <?php echo $this->cell('Menus::topcategories'); ?>
              <?php echo $this->Html->link('View All',array('controller'=>'menus','action'=>'recent'),array('class'=>'view-all')); ?>
            </div>
          </nav>
        </section>
        <section class="container main-content"><!-- container -->
          <?= $this->Flash->render() ?>
          <?= $this->fetch('content') ?>
        </section><!-- container -->
        <div class="ftr-bg"></div>
      </div>
    </div>
    <footer class="ftr">
      <section class="tier-1">
        <div class="page-part container clearfix">
          <div class="flt-left welcome-part">
            <h1>Welcome to <span>Home Philippines Bazaar</span></h1>
            <p>Home Philippines Bazaar provides insider access to today's top shopping bazaars for women, men, and kids - at up to 60% off.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dui nisi, pharetra non feugiat non, scelerisque eget est. Morbi diam massa, varius eu tempor ultricies, fringilla non odio. Nulla vel facilisis mauris. Integer porttitor nulla vel lorem tincidunt venenatis.</p>
          </div>
          <div class="flt-right welcome-button<?php if ($this->Session->read('Auth.User')): echo " logged-in"; endif; ?>">
            <?php if (!$this->Session->read('Auth.User')): echo $this->Html->link('I want to start shopping!', '/login', array('title' => 'I want to start shopping!')); endif; ?>
          </div>
        </div>
      </section>
      <section class="tier-2">
        <div class="page-part container clearfix">
          <div class="flt-left brand-links">
            <h2>Top Brands</h2>
            <div class="clearfix">
              <ul class="flt-left">
                <li><a href="#">#1 All Systems</a></li>
                <li><a href="#">101 New York</a></li>
                <li><a href="#">5CM</a></li>
                <li><a href="#">Admiral</a></li>
                <li><a href="#">Alchemio</a></li>
                <li><a href="#">alldressedup</a></li>
                <li><a href="#">Allerhand</a></li>
                <li><a href="#">And1</a></li>
                <li><a href="#">Art's Brasil</a></li>
                <li><a href="#">Artex</a></li>
                <li><a href="#">Asics</a></li>
                <li><a href="#">Axis</a></li>
                <li><a href="#">Aziza Collection</a></li>
                <li><a href="#">Azucar</a></li>
                <li><a href="#">Baby Couture</a></li>
                <li><a href="#">Bodum</a></li>
                <li><a href="#">Collective.Com</a></li>
                <li><a href="#">Crocs</a></li>
                <li><a href="#">Dolce &amp; Gabbana</a></li>
                <li><a href="#">Esprit</a></li>
                <li><a href="#">Florsheim Kids</a></li>
                <li><a href="#">Folded &amp; Hung</a></li>
                <li><a href="#">Freeway</a></li>
                <li><a href="#">Gibi</a></li>
                <li><a href="#">Gola</a></li>
                <li><a href="#">Googoo &amp; Gaga</a></li>
              </ul>
              <ul class="flt-left">
                <li><a href="#">Gucci</a></li>
                <li><a href="#">Guess</a></li>
                <li><a href="#">Hang Ten</a></li>
                <li><a href="#">Hartz</a></li>
                <li><a href="#">Havaianas</a></li>
                <li><a href="#">HOM</a></li>
                <li><a href="#">Hooked</a></li>
                <li><a href="#">Hot Pink</a></li>
                <li><a href="#">HOTFLOPZ</a></li>
                <li><a href="#">Hullaballu</a></li>
                <li><a href="#">I Love Koi</a></li>
                <li><a href="#">Inov-8</a></li>
                <li><a href="#">Ipanema</a></li>
                <li><a href="#">Jansport</a></li>
                <li><a href="#">Lagu</a></li>
                <li><a href="#">Loake</a></li>
                <li><a href="#">New Balance</a></li>
                <li><a href="#">Nike</a></li>
                <li><a href="#">Otto</a></li>
                <li><a href="#">Outdoor</a></li>
                <li><a href="#">Plains &amp; Prints</a></li>
                <li><a href="#">Plueys</a></li>
                <li><a href="#">Prada</a></li>
                <li><a href="#">Punchdrunk Panda</a></li>
                <li><a href="#">Pura</a></li>
                <li><a href="#">Quinn</a></li>
              </ul>
              <ul class="flt-left">
                <li><a href="#">RAF</a></li>
                <li><a href="#">Riley Roos</a></li>
                <li><a href="#">Ripcurl</a></li>
                <li><a href="#">Robe di Kappa</a></li>
                <li><a href="#">Rockport</a></li>
                <li><a href="#">Sanuk</a></li>
                <li><a href="#">Sassa</a></li>
                <li><a href="#">School of Satchel</a></li>
                <li><a href="#">Silverworks</a></li>
                <li><a href="#">Sloggi</a></li>
                <li><a href="#">Stoked Inc</a></li>
                <li><a href="#">Suelas</a></li>
                <li><a href="#">Sueno de Espadrilles</a></li>
                <li><a href="#">SUNDAYS</a></li>
                <li><a href="#">Terra and Agua</a></li>
                <li><a href="#">The Little Things She Needs</a></li>
                <li><a href="#">Tomato</a></li>
                <li><a href="#">Tommee Tippee</a></li>
                <li><a href="#">TOMS</a></li>
                <li><a href="#">Triumph</a></li>
                <li><a href="#">Vesperine</a></li>
                <li><a href="#">Vibram Fivefingers</a></li>
                <li><a href="#">Wacoal</a></li>
                <li><a href="#">XOXO</a></li>
                <li><a href="#">Ylla</a></li>
                <li><a href="#">P 1,500</a></li>
              </ul>
            </div>
          </div>
          <div class="flt-right link-lists">
            <h4>Customer Services</h4>
            <ul>
              <li><a href="#contact-us">Contact Us</a></li>
              <li><a href="#faqs">FAQs</a></li>
              <li><a href="#shipping">Shipping</a></li>
              <li><a href="#size-guide">Size Guide</a></li>
              <li><a href="#fashion-glossary">Fashion Glossary</a></li>
            </ul>
            <h4>About Us</h4>
            <ul>
              <li><a href="#hpb-about">Home Philippines Bazaar</a></li>
              <li><a href="#careers">Careers</a></li>
              <li><a href="#press-media">Press/Media</a></li>
              <li><a href="#terms-conditions">Terms &amp; Conditions</a></li>
              <li><a href="#privacy-policy">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
        <div class="page-part container context clearfix">
          <hr />
          <p>We offer you the best in local and international fashion brands. We offer an ever-expanding line-up of choices, many of which can only be found here. Shop online for shoes such as sneakers, espadrilles, heels, sandals for women, wedges, clothing like, swimwear, shorts, underwear or lingerie, and fashion jewelry at the most convenient online shopping portal there ever was. Home Bazaar Philippines prides ourselves on our outstanding customer service alongside a fantastic selection of shoes, clothing and accessories from internationally renowned labels. Our product range offers the perfect choice whatever your personal style. You can be the stylist and assemble a complete outfit with simplicity and ease from the comfort of your own home. Combine a pair of heels with a stylish evening dress, or cool sneakers with casual denim. We offer cutting-edge men’s clothing, women’s clothing from a wide selection of brands. Order shoes and clothes at home or in the office that is easy, convenient, secure and safe.</p>
        </div>
      </section>
      <section class="tier-3 page-part container">
        <h6>Home Philippines Bazaar</h6>
        <p>&copy; 2012 Home Philippines Bazaar. All Rights Reserved.</p>
      </section>
    </footer>
  </div>

<?php
    echo $this->Html->script(array('jquery-3.3.1.min','jquery.fancybox.min','jquery.mousewheel-3.0.6.pack.js','jquery.cookie.js','script'));
    echo $this->fetch('script');
?>
</body>
</html>
