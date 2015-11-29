<body>
<center><h1>My first blog in CI</h1></center>
<div id="container">
    <!-- navigation -->
        <!--
        <ul>
            <li><a href="<?php //echo base_url(); ?>site/home">Home</a></li> |
            <li><a href="<?php // echo base_url(); ?>site/about">About</a></li> |
            <li><a href="<?php //echo base_url(); ?>site/create_post">Create post</a></li> |
            <li><a href="<?php //echo base_url(); ?>site/contact">Contact</a></li>
        </ul>-->
        <?php
        $data = array(
            'id' =>'nav',
            'menus' => array(
              'menu1' => 'home',
              'menu2' => 'about',
              'menu3' => 'contact',
            ),
        );

        echo menu($data);
        ?>
    </div>