<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="Material Design Lite">
        <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
        <meta name="msapplication-TileColor" content="#3372DF">
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-pink.min.css">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        
        <!-- mui -->
        <link href="//cdn.muicss.com/mui-latest/css/mui.min.css" rel="stylesheet" type="text/css" />
        <script src="//cdn.muicss.com/mui-latest/js/mui.min.js"></script>
        <title>
            Night Shift
        </title>
            
    </head>
    
    <body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
        <!-- header -->
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
            <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">
                <div class="mdl-layout--large-screen-only mdl-layout__header-row"></div>
                <div class="mdl-layout--large-screen-only mdl-layout__header-row"> <h3>nightshift.com</h3> </div>
                <div class="mdl-layout--large-screen-only mdl-layout__header-row"></div>
                <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
                    <?php echo anchor('home','HOME',array('class'=>'mdl-layout__tab is-active'));?>
                </div>
            </header>
            
            

            <main class="mdl-layout__content">
                <center>
                    <br>
                    <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp mdl-cell--8-col-desktop">
                        <div class="mdl-card--center mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                            <?php echo form_open('Simpan Data');?>
                                <div class="mdl-textfield mdl-js-textfield">
                                    <?php echo form_input('project','',array('placeholder'=>'Project','class'=>'mdl-textfield__input')); ?>
                                    <label class="mdl-textfield__label" for="sample1">Text...</label>
                                </div>
                            <?php echo form_close();?>
                        </div>
                    </section>
                </center>
            </main>
            
            
            <footer class="mdl-mega-footer">
                <div class="mdl-mega-footer--bottom-section">

                </div>
            </footer>
            
            
        </div>
    </body>
</html>