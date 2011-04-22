<?php
/***********************************************
* This file is part of PeoplePods
* (c) xoxco, inc  
* http://peoplepods.net http://xoxco.com
*
* theme/people/output.php
* Default output template for a person object. 
* Defines what a user profile looks like
*
* Documentation for this pod can be found here:
* http://peoplepods.net/readme/person-object
/**********************************************/
?>
   <div data-role="page" id="main_nav">
			<!-- begin login status -->
        <section>
            <div id="siteName" data-role="header" data-theme="b">
                <h1><a href="<? $POD->siteRoot(); ?>" rel="external"><? $POD->siteName(); ?></a></h1>

            </div>
            <div id="header_menu" data-role="content">

                <div class="one_third" id="login_status">
                     <ul data-role="listview">
                        <li><a href="<? $POD->siteRoot(); ?>">Home</a></li>
                        <? if ($POD->libOptions('enable_contenttype_document_list')) { ?><li><a href="<? $POD->siteRoot(); ?>/show">What's New?</a></li><? } ?>
                         <? if ($POD->libOptions('enable_core_groups')) { ?><li><a href="<? $POD->siteRoot(); ?>/groups" >Groups</a></li><? } ?>
                        <? if ($POD->isAuthenticated()) { ?>
                        <li><a href="<? $POD->currentUser()->write('permalink'); ?>" title="View My Profile" rel="external">my profile:&nbsp;<? $POD->currentUser()->write('nick'); ?></a></li>
			<? if ($POD->libOptions('enable_core_private_messaging')) { ?>
                        <li><a href="<? $POD->siteRoot(); ?>/inbox" rel="external"><? $i = $POD->getInbox(); if ($i->unreadCount() > 0) { echo $i->unreadCount(); ?> Unread <? } else { ?>Inbox<? } ?></a></li>
			<? } ?>
                        <li><a href="<? $POD->siteRoot(); ?>/logout" title="Logout" rel="external">Logout</a></li>
			<? } else { ?>
                        <li><a href="<? $POD->siteRoot(); ?>/login" rel="external">Login</a></li>
			<? } ?>
                    </ul>
                </div>
	</section>

			<!-- begin main navigation -->

            <nav>
                <div>
                    <ul data-role="listview">
         
                           
                            <? if ($POD->isAuthenticated()) { ?>
                            <? if ($POD->currentUser()->get('adminUser')) { ?>
                                <li><a href="<? $POD->podRoot(); ?>/admin" rel="external">Command Center</a></li>
                            <? } ?>
                            <? } else { ?>
                                <? if ($POD->libOptions('enable_core_authentication_creation')) {?><li><a href="<? $POD->siteRoot(); ?>/join">Join</a></li><? } ?>
                            <? } ?>
                            <div class="clearer"></div>
                   </ul>
                </div>
                </nav>
                    <? if ($POD->isEnabled('core_search')) { ?>
                        <form method="get" action="<? $POD->siteRoot(); ?>/search">
                            <div data-role="fieldcontain">
                                
                                <input type="search" name="q" id="search" size="12" class="repairField" default="this site" />
                                <label for="">Search</label>
                            </div>
                        </form>
                    <? } ?>

                            <!-- end main navigation -->
          </div>
                 <div data-role="footer" data-theme="b"></div>
    </div>