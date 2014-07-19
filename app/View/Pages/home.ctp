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
?>
<form data-abide>
    <div class="row">

        <div class="large-12 columns">
            <h4><?php echo __('Step 1: ');?><small><?php echo __("Enter your <a href='#' style='color:#0d44a0;text-decoration: underline;'>e-mail</a> to get your card's set"); ?></small> <b style="color: red;">OR</b> <small>create your set and <a style="color:#0d44a0;text-decoration: underline;" href="#">download</a>.</small></h4>
        </div>
    </div>
    <div class="row">

        <div class="large-6 medium-6 columns email-field">

            <label>
                <input type="email" required placeholder="<?php echo __("Enter your e-mail: you@example.ru"); ?>" />
            </label>
            <small class="error"><?php echo __("An email address is required"); ?></small>

        </div>
        <div class="large-6 medium-6 columns">
            <button class="tiny" type="submit">Submit</button>
        </div>
    </div>
</form>
    <div class="row">

        <div class="large-12 columns">
            <h4><?php echo __('Step 2: ');?><small><?php echo __("Enter your word and translation"); ?></small></h4>
        </div>
    </div>
<div class="row">
    <div class="large-4 medium-6 small-12 columns">
        <div class="ecn-cardsDispl">
            <div class="ecn-word">
                <span id="ecn-wordsDispl">Hello Word</span>
            </div>
            <?php echo $this->Html->image('card-pad.png'); ?>
        </div>
    </div>
    <div class="large-4 medium-6 small- columns">
        <form>
        <div id="ecn-wordInput">
             <label>
                <input type="text" required placeholder="<?php echo __("Enter your word"); ?>" />
            </label>           
        </div>
        </form>
        <div>
            <?php //echo $this->Html->image('card-pad.png'); ?>
        </div>
    </div>
    <div class="large-4 medium- small- columns">
        <span>Just for test</span></div>
    <hr/>
</div>

<div class="row">
    <div class="large-4 columns">
        <img src="http://placehold.it/400x300&text=[img]"/>
        <h4>This is a content section.</h4>
        <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
    </div>

    <div class="large-4 columns">
        <img src="http://placehold.it/400x300&text=[img]"/>
        <h4>This is a content section.</h4>
        <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
    </div>

    <div class="large-4 columns">
        <img src="http://placehold.it/400x300&text=[img]"/>
        <h4>This is a content section.</h4>
        <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
    </div>

</div>


<div class="row">
    <div class="large-12 columns">

        <div class="panel">
            <h4>Get in touch!</h4>

            <div class="row">
                <div class="large-9 columns">
                    <p>We'd love to hear from you, you attractive person you.</p>
                </div>
                <div class="large-3 columns">
                    <a href="#" class="radius button right">Contact Us</a>
                </div>
            </div>
        </div>

    </div>
</div>
