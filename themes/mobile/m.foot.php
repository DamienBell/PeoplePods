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
    </div><!-- end data-role=page from header -->
        <div data-role="footer" data-theme="b" data-id="main_foot">
            <div data-role="navbar">
                <ul>
                    <li><a href="<? $POD->siteRoot(); ?>">Dashboard</a></li>
                    <li><a href="<? $POD->currentUser()->write('permalink');?>" >Profile</a></li>
                    <li><a href="<? $POD->siteRoot(); ?>/search" >Search</a></li>
                </ul>
            </div>
        </div>
        <div class="clearer"></div>
</section> <!-- main -->
<? $POD->output('main_nav'); ?>
