<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <?php echo $this->Html->meta(array('name' => 'viewport', 'content' => "width=device-width, initial-scale=1.0")); ?>
        <title>
            <?php //echo $cakeDescription  ?>
            <?php echo $title_for_layout; ?>
        </title>
        <?php
        echo $this->Html->meta('icon');

        //echo $this->Html->css('cake.generic');
        //echo $this->Html->css('foundation/normalize');
        //echo $this->Html->css('foundation/foundation');
        echo $this->Html->css('ecn');
        echo $this->Html->css('foundation/app');

        echo $this->fetch('meta');
        //echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <body>
        <div class="row">
            <div class="large-12 columns">
                <nav class="top-bar" data-topbar>
                    <ul class="title-area">
                        <li class="name">
                            <span class="show-for-medium-up">
                                <a href="#"><?php echo $this->Html->image('ec-old-logo-180-45.png'); ?></a>
                            </span>
                            <span class="show-for-small">
                                <a href="#"><?php echo $this->Html->image('ec-old-logo-50-45.png'); ?></a>
                            </span>                            
                        </li>
                        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                    </ul>
                    <section class="top-bar-section">
                        <!-- Right Nav Section -->
                        <ul class="right">
                            <li><a href="#" class="small button">Link 1</a></li>
                            <li class="divider"></li>
                            <li><a href="#" class="small button">Link 2</a></li>
                            <li class="divider"></li>
                            <li><a href="#" class="small button">Link 3</a></li>
                            <li class="divider"></li>
                            <li class="active has-dropdown">
                                <a href="#" class="small button">ENG</a>
                                <ul class="dropdown">
                                    <li class="divider"></li>
                                    <li><a href="#">RUS</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">ENG</a></li>
                                </ul>
                            </li>
                        </ul>
                    </section>
                </nav>
            </div>
            
        </div>
        
        <div id="content">

            <?php echo $this->Session->flash(); ?>

            <?php echo $this->fetch('content'); ?>
        </div>
        <footer class="row">
            <div class="large-12 columns">
                <hr/>
                <div class="row">
                    <div class="large-6 columns">
                        <p>© Copyright <?php echo __('ecn.go');?></p>
                    </div>
                    <div class="large-6 columns">
                        <ul class="inline-list right">
                            <li><a href="#">Link 1</a></li>
                            <li><a href="#">Link 2</a></li>
                            <li><a href="#">Link 3</a></li>
                            <li class="has-dropdown"></li>
                        </ul>
                    </div>
                </div>
            </div> 
        </footer>

        <?php //echo $this->element('sql_dump');  ?>
        <?php echo $this->Html->script('foundation/vendor/jquery'); ?>
        <?php echo $this->Html->script('foundation/foundation.min'); ?>
        <?php echo $this->Html->script('foundation/foundation/foundation.abide'); ?>
        <?php echo $this->Html->script('foundation/foundation/foundation.interchange'); ?>
        <?php echo $this->Html->script('foundation/foundation/foundation.topbar'); ?>
        <?php echo $this->Html->script('ecn-main'); ?>

        <script>$(document).foundation();</script>
    </body>
</html>
