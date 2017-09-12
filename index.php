﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=10">
    <title>xorder 可视化设置</title>
    <meta name="description" content="LeadGen is a conversion ratio and speed optimized multi-purpose marketing landing page template with drag & drop page builder and tons of readymade elements and demos with greater level of customization possibilities." />
    <meta name="keywords" content="Marketing, landing page, creative, html5, css3, page builder, drag & drop, multi-purpose, one page, aweber, mailchimp, active campaign, campaign monitor, get response, mailer lite, custom form, product, hotel and resort, resume, personal, restaurant, corporate business, interior design, software, spa salon, travel agency, app landing page, design agency, start-up, e-learning, sports and gym, seo, wedding invitation, hosting, online shopping, yoga and fitness, music show, finance and account, e-book, event, medical, real estate, portfolio, digital marketing, inner content page, sign-up, 404 not found, coming soon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/vendor/bootstrap.min.css" rel="stylesheet">
    <link href="css/flat-ui-pro.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/themify-icons.css" rel="stylesheet">
    <link href="css/builder.css" rel="stylesheet">
    <link href="css/custom-builder.css" rel="stylesheet">
    <link href="css/spectrum.css" rel="stylesheet">
    <link href="css/chosen.css" rel="stylesheet">
    <link href="css/summernote.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <!--[if lt IE 10]>
    <link href="css/ie-masonry.css" rel="stylesheet">
    <script src="js/masonry.pkgd.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="builder">
        <div class="menu" id="menu">
            <div class="main scrollbar-inner" id="main">
                <h3>
                    <img src="images/leadgen-logo.png">
                </h3>
                <ul id="elementCats">
                    <li><a href="#" id="all">All Blocks</a></li>
                </ul>
                <a class="toggle" href="#">
                    <span class="fui-gear"></span>
                </a>
                <h3 class="pages-border">
                    <span class="fui-windows"></span> Pages
                </h3>
                <ul id="pages">
                    <li style="display: none;" id="newPageLI">
                        <input type="text" value="index" name="page">
                        <span class="pageButtons">
                            <a href="" class="fileEdit"><span class="fui-new"></span></a>
                            <a href="" class="fileDel"><span class="fui-cross"></span></a>
                            <a class="btn btn-xs btn-primary btn-embossed fileSave" href="#"><span class="fui-check"></span></a>
                        </span>
                    </li>
                </ul>
                <div class="sideButtons clearfix">
                    <a href="#" class="btn btn-primary btn-sm btn-embossed" id="addPage">
                        <span class="fui-plus"></span> Add Page
                    </a>
                </div>
                <div class="sideButtons clearfix">
                    <button type="button" data-toggle="modal" data-target="#exp_imp_modal" class="export-import-btn" id="expPage">
                        <span class="fui-export"></span>Export/ Import
                    </button>
                </div>                
            </div><!-- /##main -->
            <div class="second scrollbar-inner" id="second">
                <ul id="elements">
                </ul>
            </div><!-- /#second -->
        </div><!-- /#menu -->
        <div class="container">
            <header class="clearfix" data-spy="affix" data-offset-top="60" data-offset-bottom="200">
                <a href="#" id="clearScreen" class="btn btn-danger btn-embossed pull-right actionButtons" style="margin-left: 10px">
                    <span class="fui-trash"></span> Empty Page
                </a>
                <a href="#previewModal" data-toggle="modal" class="btn btn-inverse btn-embossed pull-right actionButtons" id="buttonPreview">
                    <span class="fui-window"></span> Preview
                </a>
                <a href="#exportModal" id="exportPage" data-toggle="modal" class="btn btn-info btn-embossed pull-right actionButtons">
                    <span class="fui-export"></span> Export
                </a>
                <a href="#seoModal" id="seoButton" data-toggle="modal" class="btn btn-info btn-embossed  pull-right actionButtons btn-warning">
                    <span class="fui-gear"></span> SEO
                </a>
                <a href="#" id="savePage" data-toggle="modal" class="btn btn-primary btn-embossed pull-right">
                    <span class="fui-check"></span>
                    <span class="bLabel">Nothing to save</span>
                </a>
				 <a href="#" id="publishPage" data-toggle="modal" class="btn btn-primary btn-embossed pull-right">
                    <span class="fui-check"></span>
                    <span class="bLabel">publish now</span>
                </a>

                <div class="modes" id="siteBuilderModes">
                    <b>BUILDING MODE:</b>
                    <label class="radio primary first" id="modeElementsLabel" data-toggle="tooltip" data-placement="bottom" title="Move blocks around on the canvas">
                        <input type="radio" name="mode" id="modeBlock" value="block" data-toggle="radio" checked="">
                        Blocks
                    </label>
                    <label class="radio primary first" id="modeContentLabel" data-toggle="tooltip" data-placement="bottom" title="Edit content" style="display: none">
                        <input type="radio" name="mode" id="modeContent" value="content" data-toggle="radio">
                        Content
                    </label>
                    <label class="radio primary first" id="modeStyleLabel" data-toggle="tooltip" data-placement="bottom" title="Edit details" style="display: none">
                        <input type="radio" name="mode" id="modeStyle" value="styling" data-toggle="radio">
                        Details
                    </label>
                </div>
            </header>
            <div class="screen" id="screen">
                <div class="toolbar">
                    <div class="buttons clearfix">
                        <span class="left red"></span>
                        <span class="left yellow"></span>
                        <span class="left green"></span>
                    </div>                    
                    <div class="title">
                        <span id="pageTitle">index</span>
                    </div>
                </div>
                <div id="frameWrapper" class="frameWrapper empty">
                    <div id="pageList">
                    </div>
                    <div class="start" id="start">
                        <span>BUILD YOUR PAGE BY DRAGGING BLOCKS ONTO THE CANVAS</span>
                    </div>
                </div>
            </div><!-- /#screen -->
        </div><!-- /.container -->
        <div id="styleEditor" class="styleEditor scrollbar-inner">
            <a href="javascript:;" class="close"><span class="fui-cross-circle"></span></a>
            <h3><span class="fui-new"></span> Detail editor</h3>
            <ul class="breadcrumb">
                <li>EDITING:</li>
                <li class="active" id="editingElement">p</li>
            </ul>
            <ul class="nav nav-tabs" id="detailTabs">
                <li class="active">
                    <a href="#tab1">
                        <span class="fui-new"></span> Style
                    </a>
                </li>
                <li style="display: none;">
                    <a href="#link_Tab" id="link_Link">
                        <span class="fui-clip"></span> Link
                    </a>
                </li>
                <li style="display: none;">
                    <a href="#image_Tab" id="img_Link">
                        <span class="fui-image"></span> Image
                    </a>
                </li>
                <li style="display: none;">
                    <a href="#icon_Tab" id="icon_Link">
                        <span class="fa fa-flag"></span> Icon
                    </a>
                </li>
                <li style="display: none;">
                    <a href="#video_Tab" id="video_Link">
                        <span class="fa fa-youtube-play"></span> Video
                    </a>
                </li>
            </ul><!-- /tabs -->
            <div class="tab-content">
                <div class="tab-pane active" id="tab1">
                    <form class="" role="form" id="stylingForm">
                        <div id="styleElements">
                            <div class="form-group clearfix" style="display: none;" id="styleElTemplate">
                                <label for="" class="control-label"></label>
                                <input type="text" class="form-control input-sm" id="" placeholder="">
                            </div>
                        </div>
                    </form>
                </div><!-- /.tab-pane -->
                <div class="tab-pane link_Tab" id="link_Tab">
                    <div class="form-group">
                        <select id="internalLinksDropdown" class="form-control select select-primary btn-block mbl">
                            <option value="#">Choose a page</option>
                            <!--<option value="index.html">index</option>-->
                        </select>
                    </div>                    
                    <p class="text-center or">
                        <span>or</span>
                    </p>
                    <div class="form-group">
                        <select id="pageLinksDropdown" class="form-control select select-primary btn-block mbl">
                            <option value="#">Choose a block</option>
                        </select>
                    </div>
                    <p class="text-center or">
                        <span>or</span>
                    </p>
                    <input type="text" class="form-control" id="internalLinksCustom" placeholder="http://somewhere.com/somepage" value="">
                </div><!-- /.tab-pane -->
                <div class="tab-pane imageFileTab" id="image_Tab">
                    <label>Enter image path:</label>
                    <input type="text" class="form-control" id="imageURL" placeholder="Enter an image URL" value="">
                    <p class="text-center or">
                        <span>OR</span>
                    </p>
                    <form id="imageUploadForm" action="_upload.php">
                        <label>Upload image:</label>
                        <div class="form-group">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 100%; height: 150px; line-height: 150px;"></div>
                                <input type="hidden" name="imageBgOld" id="imageBgOld" val="">
                                <div>
                                    <label>Recommended image size:</label><p class="recommended-size" id="recommended-size"></p>
                                    <span class="btn btn-primary btn-sm btn-embossed btn-file">
                                        <span class="fileinput-new"><span class="fui-image"></span>&nbsp;&nbsp;Select image</span>
                                        <span class="fileinput-exists"><span class="fui-gear"></span>&nbsp;&nbsp;Change</span>
                                        <input type="file" name="imageFileField" id="imageFileField">

                                    </span>
                                    <a href="#" class="btn btn-primary btn-sm btn-embossed fileinput-exists" data-dismiss="fileinput"><span class="fui-trash"></span>&nbsp;&nbsp;Remove</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div><!-- /.tab-pane -->
                <!-- /tabs -->
                <div class="tab-pane iconTab" id="icon_Tab">
                    <label>Choose an icon: </label>
                    <select id="icons" data-placeholder="" class>
                        <option value="fa-address-card-o">&#xf2bc; address-card-o</option>
                        <option value="fa-handshake-o">&#xf2b5; handshake-o</option>
                        <option value="fa-id-badge">&#xf2c1; id-badge</option>
                        <option value="fa-meetup">&#xf2e0; meetup</option>
                        <option value="fa-podcast">&#xf2ce; podcast</option>
                        <option value="fa-snowflake-o">&#xf2dc; snowflake-o</option>
                        <option value="fa-telegram">&#xf2c6; telegram</option>
                        <option value="fa-thermometer-1">&#xf2ca; thermometer-1</option>
                        <option value="fa-thermometer-empty">&#xf2ca; thermometer-2</option>
                        <option value="fa-thermometer-three-quarters">&#xf2c8; thermometer-3</option>
                        <option value="fa-times-rectangle-o">&#xf2d4; times-rectangle-o</option>
                        <option value="fa-user-o">&#xf2c0; user-o</option>
                        <option value="fa-window-close-o">&#xf2d4; window-close-o</option>
                        <option value="fa-wpexplorer">&#xf2de; wpexplorer</option>
                        <option value="fa-address-book">&#xf2b9; address-book</option>
                        <option value="fa-bath">&#xf2cd; bath</option>
                        <option value="fa-drivers-license">&#xf2c2; drivers-license</option>
                        <option value="fa-id-card">&#xf2c2; id-card</option>
                        <option value="fa-imdb">&#xf2d8; imdb</option>
                        <option value="fa-thermometer-full">&#xf2c7; thermometer-full</option>
                        <option value="fa-user-circle">&#xf2bd; user-circle</option>
                        <option value="fa-vcard">&#xf2c2; vcard</option>
                        <option value="fa-window-maximize">&#xf2d0; window-maximize</option>
                        <option value="fa-address-book-o">&#xf2ba; address-book-o</option>
                        <option value="fa-bathtub">&#xf2cd; bathtub</option>
                        <option value="fa-drivers-license-o">&#xf2c3; drivers-license-o</option>
                        <option value="fa-envelope-open">&#xf2b6; envelope-open</option>
                        <option value="fa-quora">&#xf2c4; quora</option>
                        <option value="fa-s15">&#xf2cd; s15</option>
                        <option value="fa-superpowers">&#xf2dd; superpowers</option>
                        <option value="fa-thermometer">&#xf2c7; thermometer</option>
                        <option value="fa-thermometer-3">&#xf2c8; thermometer-0</option>
                        <option value="fa-thermometer-half">&#xf2c9; thermometer-half</option>
                        <option value="fa-vcard-o">&#xf2bc; vcard-o</option>
                        <option value="fa-window-minimize">&#xf2d1; window-minimize</option>
                        <option value="fa-address-card">&#xf2bb; address-card</option>
                        <option value="fa-bandcamp">#xf2d5; bandcamp</option>
                        <option value="fa-eercast">&#xf2da; eercast</option>
                        <option value="fa-envelope-open-o">&#xf2b7; envelope-open-o</option>
                        <option value="fa-etsy">&#xf2d7; etsy</option>
                        <option value="fa-free-code-camp">&#xf2c5; free-code-camp</option>
                        <option value="fa-grav">&#xf2d6; grav</option>
                        <option value="fa-linode">&#xf2b8; linode</option>
                        <option value="fa-microchip">&#xf2db; microchip</option>
                        <option value="fa-ravelry">&#xf2d9; ravelry</option>
                        <option value="fa-shirtsinbulk">&#xf214; shirtsinbulk</option>
                        <option value="fa-thermometer-0">&#xf2cb; thermometer-0</option>
                        <option value="fa-thermometer-4">&#xf2c7; thermometer-4</option>
                        <option value="fa-thermometer-quarter">&#xf2ca; thermometer-quarter</option>
                        <option value="fa-times-rectangle">&#xf2d3; times-rectangle</option>
                        <option value="fa-window-restore">&#xf2d2; window-restore</option>
                        <option value="fa-adjust">&#xf042; adjust</option>
                        <option value="fa-adn">&#xf170; adn</option>
                        <option value="fa-align-center">&#xf037; align-center</option>
                        <option value="fa-align-justify">&#xf039; align-justify</option>
                        <option value="fa-align-left">&#xf036; align-left</option>
                        <option value="fa-align-right">&#xf038; align-right</option>
                        <option value="fa-ambulance">&#xf0f9; ambulance</option>
                        <option value="fa-anchor">&#xf13d; anchor</option>
                        <option value="fa-android">&#xf17b; android</option>
                        <option value="fa-angellist">&#xf209; angellist</option>
                        <option value="fa-angle-double-down">&#xf103; angle-double-down</option>
                        <option value="fa-angle-double-left">&#xf100; angle-double-left</option>
                        <option value="fa-angle-double-right">&#xf101; angle-double-right</option>
                        <option value="fa-angle-double-up">&#xf102; angle-double-up</option>
                        <option value="fa-angle-down">&#xf107; angle-down</option>
                        <option value="fa-angle-left">&#xf104; angle-left</option>
                        <option value="fa-angle-right">&#xf105; angle-right</option>
                        <option value="fa-angle-up">&#xf106; angle-up</option>
                        <option value="fa-apple">&#xf179; apple</option>
                        <option value="fa-archive">&#xf187; archive</option>
                        <option value="fa-area-chart">&#xf1fe; area-chart</option>                        
                        <option value="fa-arrow-circle-down">&#xf0ab; arrow-circle-down</option>
                        <option value="fa-arrow-circle-left">&#xf0a8; arrow-circle-left</option>
                        <option value="fa-arrow-circle-o-down">&#xf01a; arrow-circle-o-down</option>
                        <option value="fa-arrow-circle-o-left">&#xf190; arrow-circle-o-left</option>
                        <option value="fa-arrow-circle-o-right">&#xf18e; arrow-circle-o-right</option>
                        <option value="fa-arrow-circle-o-up">&#xf01b; arrow-circle-o-up</option>
                        <option value="fa-arrow-circle-right">&#xf0a9; arrow-circle-right</option>
                        <option value="fa-arrow-circle-up">&#xf0aa; arrow-circle-up</option>
                        <option value="fa-arrow-down">&#xf063; arrow-down</option>
                        <option value="fa-arrow-left">&#xf060; arrow-left</option>
                        <option value="fa-arrow-right">&#xf061; arrow-right</option>
                        <option value="fa-arrow-up">&#xf062; arrow-up</option>
                        <option value="fa-arrows">&#xf047; arrows</option>
                        <option value="fa-arrows-alt">&#xf0b2; arrows-alt</option>
                        <option value="fa-arrows-h">&#xf07e; arrows-h</option>
                        <option value="fa-arrows-v">&#xf07d; arrows-v</option>
                        <option value="fa-asterisk">&#xf069; asterisk</option>
                        <option value="fa-at">&#xf1fa; at</option>
                        <option value="fa-automobile">&#xf1b9; automobile</option>
                        <option value="fa-backward">&#xf04a; backward</option>
                        <option value="fa-ban">&#xf05e; ban</option>
                        <option value="fa-bank">&#xf19c; bank</option>
                        <option value="fa-bar-chart">&#xf080; bar-chart</option>
                        <option value="fa-bar-chart-o">&#xf080; bar-chart-o</option>
                        <option value="fa-barcode">&#xf02a; barcode</option>
                        <option value="fa-bars">&#xf0c9; bars</option>
                        <option value="fa-beer">&#xf0fc; beer</option>
                        <option value="fa-behance">&#xf1b4; behance</option>
                        <option value="fa-behance-square">&#xf1b5; behance-square</option>
                        <option value="fa-bell">&#xf0f3; bell</option>
                        <option value="fa-bell-o">&#xf0a2; bell-o</option>
                        <option value="fa-bell-slash">&#xf1f6; bell-slash</option>
                        <option value="fa-bell-slash-o">&#xf1f7; bell-slash-o</option>
                        <option value="fa-bicycle">&#xf206; bicycle</option>
                        <option value="fa-binoculars">&#xf1e5; binoculars</option>
                        <option value="fa-birthday-cake">&#xf1fd; birthday-cake</option>
                        <option value="fa-bitbucket">&#xf171; bitbucket</option>
                        <option value="fa-bitbucket-square">&#xf172; bitbucket-square</option>
                        <option value="fa-bitcoin">&#xf15a; bitcoin</option>
                        <option value="fa-bold">&#xf032; bold</option>
                        <option value="fa-bolt">&#xf0e7; bolt</option>
                        <option value="fa-bomb">&#xf1e2; bomb</option>
                        <option value="fa-book">&#xf02d; book</option>
                        <option value="fa-bookmark">&#xf02e; bookmark</option>
                        <option value="fa-bookmark-o">&#xf097; bookmark-o</option>
                        <option value="fa-briefcase">&#xf0b1; briefcase</option>
                        <option value="fa-btc">&#xf15a; btc</option>
                        <option value="fa-bug">&#xf188; bug</option>
                        <option value="fa-building">&#xf1ad; building</option>
                        <option value="fa-building-o">&#xf0f7; building-o</option>
                        <option value="fa-bullhorn">&#xf0a1; bullhorn</option>
                        <option value="fa-bullseye">&#xf140; bullseye</option>
                        <option value="fa-bus">&#xf207; bus</option>
                        <option value="fa-cab">&#xf1ba; cab</option>
                        <option value="fa-calculator">&#xf1ec; calculator</option>
                        <option value="fa-calendar">&#xf073; calendar</option>
                        <option value="fa-calendar-o">&#xf133; calendar-o</option>
                        <option value="fa-camera">&#xf030; camera</option>
                        <option value="fa-camera-retro">&#xf083; camera-retro</option>
                        <option value="fa-car">&#xf1b9; car</option>
                        <option value="fa-caret-down">&#xf0d7; caret-down</option>
                        <option value="fa-caret-left">&#xf0d9; caret-left</option>
                        <option value="fa-caret-right">&#xf0da; caret-right</option>
                        <option value="fa-caret-square-o-down">&#xf150; caret-square-o-down</option>
                        <option value="fa-caret-square-o-left">&#xf191; caret-square-o-left</option>
                        <option value="fa-caret-square-o-right">&#xf152; caret-square-o-right</option>
                        <option value="fa-caret-square-o-up">&#xf151; caret-square-o-up</option>
                        <option value="fa-caret-up">&#xf0d8; caret-up</option>
                        <option value="fa-cc">&#xf20a; cc</option>
                        <option value="fa-cc-amex">&#xf1f3; cc-amex</option>
                        <option value="fa-cc-discover">&#xf1f2; cc-discover</option>
                        <option value="fa-cc-mastercard">&#xf1f1; cc-mastercard</option>
                        <option value="fa-cc-paypal">&#xf1f4; cc-paypal</option>
                        <option value="fa-cc-stripe">&#xf1f5; cc-stripe</option>
                        <option value="fa-cc-visa">&#xf1f0; cc-visa</option>
                        <option value="fa-certificate">&#xf0a3; certificate</option>
                        <option value="fa-chain">&#xf0c1; chain</option>
                        <option value="fa-chain-broken">&#xf127; chain-broken</option>
                        <option value="fa-check">&#xf00c; check</option>
                        <option value="fa-check-circle">&#xf058; check-circle</option>
                        <option value="fa-check-circle-o">&#xf05d; check-circle-o</option>
                        <option value="fa-check-square">&#xf14a; check-square</option>
                        <option value="fa-check-square-o">&#xf046; check-square-o</option>
                        <option value="fa-chevron-circle-down">&#xf13a; chevron-circle-down</option>
                        <option value="fa-chevron-circle-left">&#xf137; chevron-circle-left</option>
                        <option value="fa-chevron-circle-right">&#xf138; chevron-circle-right</option>
                        <option value="fa-chevron-circle-up">&#xf139; chevron-circle-up</option>
                        <option value="fa-chevron-down">&#xf078; chevron-down</option>
                        <option value="fa-chevron-left">&#xf053; chevron-left</option>
                        <option value="fa-chevron-right">&#xf054; chevron-right</option>
                        <option value="fa-chevron-up">&#xf077; chevron-up</option>
                        <option value="fa-child">&#xf1ae; child</option>
                        <option value="fa-circle">&#xf111; circle</option>
                        <option value="fa-circle-o">&#xf10c; circle-o</option>
                        <option value="fa-circle-o-notch">&#xf1ce; circle-o-notch</option>
                        <option value="fa-circle-thin">&#xf1db; circle-thin</option>
                        <option value="fa-clipboard">&#xf0ea; clipboard</option>
                        <option value="fa-clock-o">&#xf017; clock-o</option>
                        <option value="fa-close">&#xf00d; close</option>
                        <option value="fa-cloud">&#xf0c2; cloud</option>
                        <option value="fa-cloud-download">&#xf0ed; cloud-download</option>
                        <option value="fa-cloud-upload">&#xf0ee; cloud-upload</option>
                        <option value="fa-cny">&#xf157; cny</option>
                        <option value="fa-code">&#xf121; code</option>
                        <option value="fa-code-fork">&#xf126; code-fork</option>
                        <option value="fa-codepen">&#xf1cb; codepen</option>
                        <option value="fa-coffee">&#xf0f4; coffee</option>
                        <option value="fa-cog">&#xf013; cog</option>
                        <option value="fa-cogs">&#xf085; cogs</option>
                        <option value="fa-columns">&#xf0db; columns</option>
                        <option value="fa-comment">&#xf075; comment</option>
                        <option value="fa-comment-o">&#xf0e5; comment-o</option>
                        <option value="fa-comments">&#xf086; comments</option>
                        <option value="fa-comments-o">&#xf0e6; comments-o</option>
                        <option value="fa-compass">&#xf14e; compass</option>
                        <option value="fa-compress">&#xf066; compress</option>
                        <option value="fa-copy">&#xf0c5; copy</option>
                        <option value="fa-copyright">&#xf1f9; copyright</option>
                        <option value="fa-credit-card">&#xf09d; credit-card</option>
                        <option value="fa-crop">&#xf125; crop</option>
                        <option value="fa-crosshairs">&#xf05b; crosshairs</option>
                        <option value="fa-css">css3 &#xf13c;</option>
                        <option value="fa-cube">&#xf1b2; cube</option>
                        <option value="fa-cubes">&#xf1b3; cubes</option>
                        <option value="fa-cut">&#xf0c4; cut</option>
                        <option value="fa-cutlery">&#xf0f5; cutlery</option>
                        <option value="fa-dashboard">&#xf0e4; dashboard</option>
                        <option value="fa-database">&#xf1c0; database</option>
                        <option value="fa-dedent">&#xf03b; dedent</option>
                        <option value="fa-delicious">&#xf1a5; delicious</option>
                        <option value="fa-desktop">&#xf108; desktop</option>
                        <option value="fa-deviantart">&#xf1bd; deviantart</option>
                        <option value="fa-digg">&#xf1a6; digg</option>
                        <option value="fa-dollar">&#xf155; dollar</option>
                        <option value="fa-dot-circle-o">&#xf192; dot-circle-o</option>
                        <option value="fa-download">&#xf019; download</option>
                        <option value="fa-dribbble">&#xf17d; dribbble</option>
                        <option value="fa-dropbox">&#xf16b; dropbox</option>
                        <option value="fa-drupal">&#xf1a9; drupal</option>
                        <option value="fa-edit">&#xf044; edit</option>
                        <option value="fa-eject">&#xf052; eject</option>
                        <option value="fa-ellipsis-h">&#xf141; ellipsis-h</option>
                        <option value="fa-ellipsis-v">&#xf142; ellipsis-v</option>
                        <option value="fa-empire">&#xf1d1; empire</option>
                        <option value="fa-envelope">&#xf0e0; envelope</option>
                        <option value="fa-envelope-o">&#xf003; envelope-o</option>
                        <option value="fa-envelope-square">&#xf199; envelope-square</option>
                        <option value="fa-eraser">&#xf12d; eraser</option>
                        <option value="fa-eur">&#xf153; eur</option>
                        <option value="fa-euro">&#xf153; euro</option>
                        <option value="fa-exchange">&#xf0ec; exchange</option>
                        <option value="fa-exclamation">&#xf12a; exclamation</option>
                        <option value="fa-exclamation-circle">&#xf06a; exclamation-circle</option>
                        <option value="fa-exclamation-triangle">&#xf071; exclamation-triangle</option>
                        <option value="fa-expand">&#xf065; expand</option>
                        <option value="fa-external-link">&#xf08e; external-link</option>
                        <option value="fa-external-link-square">&#xf14c; external-link-square</option>
                        <option value="fa-eye">&#xf06e; eye</option>
                        <option value="fa-eye-slash">&#xf070; eye-slash</option>
                        <option value="fa-eyedropper">&#xf1fb; eyedropper</option>
                        <option value="fa-facebook">&#xf09a; facebook</option>
                        <option value="fa-facebook-square">&#xf082; facebook-square</option>
                        <option value="fa-fast-backward">&#xf049; fast-backward</option>
                        <option value="fa-fast-forward">&#xf050; fast-forward</option>
                        <option value="fa-fax">&#xf1ac; fax</option>
                        <option value="fa-female">&#xf182; female</option>
                        <option value="fa-fighter-jet">&#xf0fb; fighter-jet</option>
                        <option value="fa-file">&#xf15b; file</option>
                        <option value="fa-file-archive-o">&#xf1c6; file-archive-o</option>
                        <option value="fa-file-audio-o">&#xf1c7; file-audio-o</option>
                        <option value="fa-file-code-o">&#xf1c9; file-code-o</option>
                        <option value="fa-file-excel-o">&#xf1c3; file-excel-o</option>
                        <option value="fa-file-image-o">&#xf1c5; file-image-o</option>
                        <option value="fa-file-movie-o">&#xf1c8; file-movie-o</option>
                        <option value="fa-file-o">&#xf016; file-o</option>
                        <option value="fa-file-pdf-o">&#xf1c1; file-pdf-o</option>
                        <option value="fa-file-photo-o">&#xf1c5; file-photo-o</option>
                        <option value="fa-file-picture-o">&#xf1c5; file-picture-o</option>
                        <option value="fa-file-powerpoint-o">&#xf1c4; file-powerpoint-o</option>
                        <option value="fa-file-sound-o">&#xf1c7; file-sound-o</option>
                        <option value="fa-file-text">&#xf15c; file-text</option>
                        <option value="fa-file-text-o">&#xf0f6; file-text-o</option>
                        <option value="fa-file-video-o">&#xf1c8; file-video-o</option>
                        <option value="fa-file-word-o">&#xf1c2; file-word-o</option>
                        <option value="fa-file-zip-o">&#xf1c6; file-zip-o</option>
                        <option value="fa-files-o">&#xf0c5; files-o</option>
                        <option value="fa-film">&#xf008; film</option>
                        <option value="fa-filter">&#xf0b0; filter</option>
                        <option value="fa-fire">&#xf06d; fire</option>
                        <option value="fa-fire-extinguisher">&#xf134; fire-extinguisher</option>
                        <option value="fa-flag">&#xf024; flag</option>
                        <option value="fa-flag-checkered">&#xf11e; flag-checkered</option>
                        <option value="fa-flag-o">&#xf11d; flag-o</option>
                        <option value="fa-flash">&#xf0e7; flash</option>
                        <option value="fa-flask">&#xf0c3; flask</option>
                        <option value="fa-flickr">&#xf16e; flickr</option>
                        <option value="fa-floppy-o">&#xf0c7; floppy-o</option>
                        <option value="fa-folder">&#xf07b; folder</option>
                        <option value="fa-folder-o">&#xf114; folder-o</option>
                        <option value="fa-folder-open">&#xf07c; folder-open</option>
                        <option value="fa-folder-open-o">&#xf115; folder-open-o</option>
                        <option value="fa-font">&#xf031; font</option>
                        <option value="fa-forward">&#xf04e; forward</option>
                        <option value="fa-foursquare">&#xf180; foursquare</option>
                        <option value="fa-frown-o">&#xf119; frown-o</option>
                        <option value="fa-futbol-o">&#xf1e3; futbol-o</option>
                        <option value="fa-gamepad">&#xf11b; gamepad</option>
                        <option value="fa-gavel">&#xf0e3; gavel</option>
                        <option value="fa-gbp">&#xf154; gbp</option>
                        <option value="fa-ge">&#xf1d1; ge</option>
                        <option value="fa-gear">&#xf013; gear</option>
                        <option value="fa-gears">&#xf085; gears</option>
                        <option value="fa-gift">&#xf06b; gift</option>
                        <option value="fa-git">&#xf1d3; git</option>
                        <option value="fa-git-square">&#xf1d2; git-square</option>
                        <option value="fa-github">&#xf09b; github</option>
                        <option value="fa-github-alt">&#xf113; github-alt</option>
                        <option value="fa-github-square">&#xf092; github-square</option>
                        <option value="fa-gittip">&#xf184; gittip</option>
                        <option value="fa-glass">&#xf000; glass</option>
                        <option value="fa-globe">&#xf0ac; globe</option>
                        <option value="fa-google">&#xf1a0; google</option>
                        <option value="fa-google-plus">&#xf0d5; google-plus</option>
                        <option value="fa-google-plus-square">&#xf0d4; google-plus-square</option>
                        <option value="fa-google-wallet">&#xf1ee; google-wallet</option>
                        <option value="fa-graduation-cap">&#xf19d; graduation-cap</option>
                        <option value="fa-group">&#xf0c0; group</option>
                        <option value="fa-h-square">&#xf0fd; h-square</option>
                        <option value="fa-hacker-news">&#xf1d4; hacker-news</option>
                        <option value="fa-hand-o-down">&#xf0a7; hand-o-down</option>
                        <option value="fa-hand-o-left">&#xf0a5; hand-o-left</option>
                        <option value="fa-hand-o-right">&#xf0a4; hand-o-right</option>
                        <option value="fa-hand-o-up">&#xf0a6; hand-o-up</option>
                        <option value="fa-hdd-o">&#xf0a0; hdd-o</option>
                        <option value="fa-header">&#xf1dc; header</option>
                        <option value="fa-headphones">&#xf025; headphones</option>
                        <option value="fa-heart">&#xf004; heart</option>
                        <option value="fa-heart-o">&#xf08a; heart-o</option>
                        <option value="fa-history">&#xf1da; history</option>
                        <option value="fa-home">&#xf015; home</option>
                        <option value="fa-hospital-o">&#xf0f8; hospital-o</option>
                        <option value="fa-html">html5 &#xf13b;</option>
                        <option value="fa-ils">&#xf20b; ils</option>
                        <option value="fa-image">&#xf03e; image</option>
                        <option value="fa-inbox">&#xf01c; inbox</option>
                        <option value="fa-indent">&#xf03c; indent</option>
                        <option value="fa-info">&#xf129; info</option>
                        <option value="fa-info-circle">&#xf05a; info-circle</option>
                        <option value="fa-inr">&#xf156; inr</option>
                        <option value="fa-instagram">&#xf16d; instagram</option>
                        <option value="fa-institution">&#xf19c; institution</option>
                        <option value="fa-ioxhost">&#xf208; ioxhost</option>
                        <option value="fa-italic">&#xf033; italic</option>
                        <option value="fa-joomla">&#xf1aa; joomla</option>
                        <option value="fa-jpy">&#xf157; jpy</option>
                        <option value="fa-jsfiddle">&#xf1cc; jsfiddle</option>
                        <option value="fa-key">&#xf084; key</option>
                        <option value="fa-keyboard-o">&#xf11c; keyboard-o</option>
                        <option value="fa-krw">&#xf159; krw</option>
                        <option value="fa-language">&#xf1ab; language</option>
                        <option value="fa-laptop">&#xf109; laptop</option>
                        <option value="fa-lastfm">&#xf202; lastfm</option>
                        <option value="fa-lastfm-square">&#xf203; lastfm-square</option>
                        <option value="fa-leaf">&#xf06c; leaf</option>
                        <option value="fa-legal">&#xf0e3; legal</option>
                        <option value="fa-lemon-o">&#xf094; lemon-o</option>
                        <option value="fa-level-down">&#xf149; level-down</option>
                        <option value="fa-level-up">&#xf148; level-up</option>
                        <option value="fa-life-bouy">&#xf1cd; life-bouy</option>
                        <option value="fa-life-buoy">&#xf1cd; life-buoy</option>
                        <option value="fa-life-ring">&#xf1cd; life-ring</option>
                        <option value="fa-life-saver">&#xf1cd; life-saver</option>
                        <option value="fa-lightbulb-o">&#xf0eb; lightbulb-o</option>
                        <option value="fa-line-chart">&#xf201; line-chart</option>
                        <option value="fa-link">&#xf0c1; link</option>
                        <option value="fa-linkedin">&#xf0e1; linkedin</option>
                        <option value="fa-linkedin-square">&#xf08c; linkedin-square</option>
                        <option value="fa-linux">&#xf17c; linux</option>
                        <option value="fa-list">&#xf03a; list</option>
                        <option value="fa-list-alt">&#xf022; list-alt</option>
                        <option value="fa-list-ol">&#xf0cb; list-ol</option>
                        <option value="fa-list-ul">&#xf0ca; list-ul</option>
                        <option value="fa-location-arrow">&#xf124; location-arrow</option>
                        <option value="fa-lock">&#xf023; lock</option>
                        <option value="fa-long-arrow-down">&#xf175; long-arrow-down</option>
                        <option value="fa-long-arrow-left">&#xf177; long-arrow-left</option>
                        <option value="fa-long-arrow-right">&#xf178; long-arrow-right</option>
                        <option value="fa-long-arrow-up">&#xf176; long-arrow-up</option>
                        <option value="fa-magic">&#xf0d0; magic</option>
                        <option value="fa-magnet">&#xf076; magnet</option>
                        <option value="fa-mail-forward">&#xf064; mail-forward</option>
                        <option value="fa-mail-reply">&#xf112; mail-reply</option>
                        <option value="fa-mail-reply-all">&#xf122; mail-reply-all</option>
                        <option value="fa-male">&#xf183; male</option>
                        <option value="fa-map-marker">&#xf041; map-marker</option>
                        <option value="fa-maxcdn">&#xf136; maxcdn</option>
                        <option value="fa-meanpath">&#xf20c; meanpath</option>
                        <option value="fa-medkit">&#xf0fa; medkit</option>
                        <option value="fa-meh-o">&#xf11a; meh-o</option>
                        <option value="fa-microphone">&#xf130; microphone</option>
                        <option value="fa-microphone-slash">&#xf131; microphone-slash</option>
                        <option value="fa-minus">&#xf068; minus</option>
                        <option value="fa-minus-circle">&#xf056; minus-circle</option>
                        <option value="fa-minus-square">&#xf146; minus-square</option>
                        <option value="fa-minus-square-o">&#xf147; minus-square-o</option>
                        <option value="fa-mobile">&#xf10b; mobile</option>
                        <option value="fa-mobile-phone">&#xf10b; mobile-phone</option>
                        <option value="fa-money">&#xf0d6; money</option>
                        <option value="fa-moon-o">&#xf186; moon-o</option></option>
                        <option value="fa-mortar-board">&#xf19d; mortar-board</option>
                        <option value="fa-music">&#xf001; music</option>
                        <option value="fa-navicon">&#xf0c9; navicon</option>
                        <option value="fa-newspaper-o">&#xf1ea; newspaper-o</option>
                        <option value="fa-openid">&#xf19b; openid</option>
                        <option value="fa-outdent">&#xf03b; outdent</option>
                        <option value="fa-pagelines">&#xf18c; pagelines</option>
                        <option value="fa-paint-brush">&#xf1fc; paint-brush</option>
                        <option value="fa-paper-plane">&#xf1d8; paper-plane</option>
                        <option value="fa-paper-plane-o">&#xf1d9; paper-plane-o</option>
                        <option value="fa-paperclip">&#xf0c6; paperclip</option>
                        <option value="fa-paragraph">&#xf1dd; paragraph</option>
                        <option value="fa-paste">&#xf0ea; paste</option>
                        <option value="fa-pause">&#xf04c; pause</option>
                        <option value="fa-paw">&#xf1b0; paw</option>
                        <option value="fa-paypal">&#xf1ed; paypal</option>
                        <option value="fa-pencil">&#xf040; pencil</option>
                        <option value="fa-pencil-square">&#xf14b; pencil-square</option>
                        <option value="fa-pencil-square-o">&#xf044; pencil-square-o</option>
                        <option value="fa-phone">&#xf095; phone</option>
                        <option value="fa-phone-square">&#xf098; phone-square</option>
                        <option value="fa-photo">&#xf03e; photo</option>
                        <option value="fa-picture-o">&#xf03e; picture-o</option>
                        <option value="fa-pie-chart">&#xf200; pie-chart</option>
                        <option value="fa-pied-piper">&#xf1a7; pied-piper</option>
                        <option value="fa-pied-piper-alt">&#xf1a8; pied-piper-alt</option>
                        <option value="fa-pinterest">&#xf0d2; pinterest</option>
                        <option value="fa-pinterest-square">&#xf0d3; pinterest-square</option>
                        <option value="fa-plane">&#xf072; plane</option>
                        <option value="fa-play">&#xf04b; play</option>
                        <option value="fa-play-circle">&#xf144; play-circle</option>
                        <option value="fa-play-circle-o">&#xf01d; play-circle-o</option>
                        <option value="fa-plug">&#xf1e6; plug</option>
                        <option value="fa-plus">&#xf067; plus</option>
                        <option value="fa-plus-circle">&#xf055; plus-circle</option>
                        <option value="fa-plus-square">&#xf0fe; plus-square</option>
                        <option value="fa-plus-square-o">&#xf196; plus-square-o</option>
                        <option value="fa-power-off">&#xf011; power-off</option>
                        <option value="fa-print">&#xf02f; print</option>
                        <option value="fa-puzzle-piece">&#xf12e; puzzle-piece</option>
                        <option value="fa-qq">&#xf1d6; qq</option>
                        <option value="fa-qrcode">&#xf029; qrcode</option>
                        <option value="fa-question">&#xf128; question</option>
                        <option value="fa-question-circle">&#xf059; question-circle</option>
                        <option value="fa-quote-left">&#xf10d; quote-left</option>
                        <option value="fa-quote-right">&#xf10e; quote-right</option>
                        <option value="fa-ra">&#xf1d0; ra</option>
                        <option value="fa-random">&#xf074; random</option>
                        <option value="fa-rebel">&#xf1d0; rebel</option>
                        <option value="fa-recycle">&#xf1b8; recycle</option>
                        <option value="fa-reddit">&#xf1a1; reddit</option>
                        <option value="fa-reddit-square">&#xf1a2; reddit-square</option>
                        <option value="fa-refresh">&#xf021; refresh</option>
                        <option value="fa-remove">&#xf00d; remove</option>
                        <option value="fa-renren">&#xf18b; renren</option>
                        <option value="fa-reorder">&#xf0c9; reorder</option>
                        <option value="fa-repeat">&#xf01e; repeat</option>
                        <option value="fa-reply">&#xf112; reply</option>
                        <option value="fa-reply-all">&#xf122; reply-all</option>
                        <option value="fa-retweet">&#xf079; retweet</option>
                        <option value="fa-rmb">&#xf157; rmb</option>
                        <option value="fa-road">&#xf018; road</option>
                        <option value="fa-rocket">&#xf135; rocket</option>
                        <option value="fa-rotate-left">&#xf0e2; rotate-left</option>
                        <option value="fa-rotate-right">&#xf01e; rotate-right</option>
                        <option value="fa-rouble">&#xf158; rouble</option>
                        <option value="fa-rss">&#xf09e; rss</option>
                        <option value="fa-rss-square">&#xf143; rss-square</option>
                        <option value="fa-rub">&#xf158; rub</option>
                        <option value="fa-ruble">&#xf158; ruble</option>
                        <option value="fa-rupee">&#xf156; rupee</option>
                        <option value="fa-save">&#xf0c7; save</option>
                        <option value="fa-scissors">&#xf0c4; scissors</option>
                        <option value="fa-search">&#xf002; search</option>
                        <option value="fa-search-minus">&#xf010; search-minus</option>
                        <option value="fa-search-plus">&#xf00e; search-plus</option>
                        <option value="fa-send">&#xf1d8; send</option>
                        <option value="fa-send-o">&#xf1d9; send-o</option>
                        <option value="fa-share">&#xf064; share</option>
                        <option value="fa-share-alt">&#xf1e0; share-alt</option>
                        <option value="fa-share-alt-square">&#xf1e1; share-alt-square</option>
                        <option value="fa-share-square">&#xf14d; share-square</option>
                        <option value="fa-share-square-o">&#xf045; share-square-o</option>
                        <option value="fa-shekel">&#xf20b; shekel</option>
                        <option value="fa-sheqel">&#xf20b; sheqel</option>
                        <option value="fa-shield">&#xf132; shield</option>
                        <option value="fa-shopping-cart">&#xf07a; shopping-cart</option>
                        <option value="fa-sign-in">&#xf090; sign-in</option>
                        <option value="fa-sign-out">&#xf08b; sign-out</option>
                        <option value="fa-signal">&#xf012; signal</option>
                        <option value="fa-sitemap">&#xf0e8; sitemap</option>
                        <option value="fa-skype">&#xf17e; skype</option>
                        <option value="fa-slack">&#xf198; slack</option>
                        <option value="fa-sliders">&#xf1de; sliders</option>
                        <option value="fa-slideshare">&#xf1e7; slideshare</option>
                        <option value="fa-smile-o">&#xf118; smile-o</option>
                        <option value="fa-soccer-ball-o">&#xf1e3; soccer-ball-o</option>
                        <option value="fa-sort">&#xf0dc; sort</option>
                        <option value="fa-sort-alpha-asc">&#xf15d; sort-alpha-asc</option>
                        <option value="fa-sort-alpha-desc">&#xf15e; sort-alpha-desc</option>
                        <option value="fa-sort-amount-asc">&#xf160; sort-amount-asc</option>
                        <option value="fa-sort-amount-desc">&#xf161; sort-amount-desc</option>
                        <option value="fa-sort-asc">&#xf0de; sort-asc</option>
                        <option value="fa-sort-desc">&#xf0dd; sort-desc</option>
                        <option value="fa-sort-down">&#xf0dd; sort-down</option>
                        <option value="fa-sort-numeric-asc">&#xf162; sort-numeric-asc</option>
                        <option value="fa-sort-numeric-desc">&#xf163; sort-numeric-desc</option>
                        <option value="fa-sort-up">&#xf0de; sort-up</option>
                        <option value="fa-soundcloud">&#xf1be; soundcloud</option>
                        <option value="fa-space-shuttle">&#xf197; space-shuttle</option>
                        <option value="fa-spinner">&#xf110; spinner</option>
                        <option value="fa-spoon">&#xf1b1; spoon</option>
                        <option value="fa-spotify">&#xf1bc; spotify</option>
                        <option value="fa-square">&#xf0c8; square</option>
                        <option value="fa-square-o">&#xf096; square-o</option>
                        <option value="fa-stack-exchange">&#xf18d; stack-exchange</option>
                        <option value="fa-stack-overflow">&#xf16c; stack-overflow</option>
                        <option value="fa-star">&#xf005; star</option>
                        <option value="fa-star-half">&#xf089; star-half</option>
                        <option value="fa-star-half-empty">&#xf123; star-half-empty</option>
                        <option value="fa-star-half-full">&#xf123; star-half-full</option>
                        <option value="fa-star-half-o">&#xf123; star-half-o</option>
                        <option value="fa-star-o">&#xf006; star-o</option>
                        <option value="fa-steam">&#xf1b6; steam</option>
                        <option value="fa-steam-square">&#xf1b7; steam-square</option>
                        <option value="fa-step-backward">&#xf048; step-backward</option>
                        <option value="fa-step-forward">&#xf051; step-forward</option>
                        <option value="fa-stethoscope">&#xf0f1; stethoscope</option>
                        <option value="fa-stop">&#xf04d; stop</option>
                        <option value="fa-strikethrough">&#xf0cc; strikethrough</option>
                        <option value="fa-stumbleupon">&#xf1a4; stumbleupon</option>
                        <option value="fa-stumbleupon-circle">&#xf1a3; stumbleupon-circle</option>
                        <option value="fa-subscript">&#xf12c; subscript</option>
                        <option value="fa-suitcase">&#xf0f2; suitcase</option>
                        <option value="fa-sun-o">&#xf185; sun-o</option>
                        <option value="fa-superscript">&#xf12b; superscript</option>
                        <option value="fa-support">&#xf1cd; support</option>
                        <option value="fa-table">&#xf0ce; table</option>
                        <option value="fa-tablet">&#xf10a; tablet</option>
                        <option value="fa-tachometer">&#xf0e4; tachometer</option>
                        <option value="fa-tag">&#xf02b; tag</option>
                        <option value="fa-tags">&#xf02c; tags</option>
                        <option value="fa-tasks">&#xf0ae; tasks</option>
                        <option value="fa-taxi">&#xf1ba; taxi</option>
                        <option value="fa-tencent-weibo">&#xf1d5; tencent-weibo</option>
                        <option value="fa-terminal">&#xf120; terminal</option>
                        <option value="fa-text-height">&#xf034; text-height</option>
                        <option value="fa-text-width">&#xf035; text-width</option>
                        <option value="fa-th">&#xf00a; th</option>
                        <option value="fa-th-large">&#xf009; th-large</option>
                        <option value="fa-th-list">&#xf00b; th-list</option>
                        <option value="fa-thumb-tack">&#xf08d; thumb-tack</option>
                        <option value="fa-thumbs-down">&#xf165; thumbs-down</option>
                        <option value="fa-thumbs-o-down">&#xf088; thumbs-o-down</option>
                        <option value="fa-thumbs-o-up">&#xf087; thumbs-o-up</option>
                        <option value="fa-thumbs-up">&#xf164; thumbs-up</option>
                        <option value="fa-ticket">&#xf145; ticket</option>
                        <option value="fa-times">&#xf00d; times</option>
                        <option value="fa-times-circle">&#xf057; times-circle</option>
                        <option value="fa-times-circle-o">&#xf05c; times-circle-o</option>
                        <option value="fa-tint">&#xf043; tint</option>
                        <option value="fa-toggle-down">&#xf150; toggle-down</option>
                        <option value="fa-toggle-left">&#xf191; toggle-left</option>
                        <option value="fa-toggle-off">&#xf204; toggle-off</option>
                        <option value="fa-toggle-on">&#xf205; toggle-on</option>
                        <option value="fa-toggle-right">&#xf152; toggle-right</option>
                        <option value="fa-toggle-up">&#xf151; toggle-up</option>
                        <option value="fa-trash">&#xf1f8; trash</option>
                        <option value="fa-trash-o">&#xf014; trash-o</option>
                        <option value="fa-tree">&#xf1bb; tree</option>
                        <option value="fa-trello">&#xf181; trello</option>
                        <option value="fa-trophy">&#xf091; trophy</option>
                        <option value="fa-truck">&#xf0d1; truck</option>
                        <option value="fa-try">&#xf195; try</option>
                        <option value="fa-tty">&#xf1e4; tty</option>
                        <option value="fa-tumblr">&#xf173; tumblr</option>
                        <option value="fa-tumblr-square">&#xf174; tumblr-square</option>
                        <option value="fa-turkish-lira">&#xf195; turkish-lira</option>
                        <option value="fa-twitch">&#xf1e8; twitch</option>
                        <option value="fa-twitter">&#xf099; twitter</option>
                        <option value="fa-twitter-square">&#xf081; twitter-square</option>
                        <option value="fa-umbrella">&#xf0e9; umbrella</option>
                        <option value="fa-underline">&#xf0cd; underline</option>
                        <option value="fa-undo">&#xf0e2; undo</option>
                        <option value="fa-university">&#xf19c; university</option>
                        <option value="fa-unlink">&#xf127; unlink</option>
                        <option value="fa-unlock">&#xf09c; unlock</option>
                        <option value="fa-unlock-alt">&#xf13e; unlock-alt</option>
                        <option value="fa-unsorted">&#xf0dc; unsorted</option>
                        <option value="fa-upload">&#xf093; upload</option>
                        <option value="fa-usd">&#xf155; usd</option>
                        <option value="fa-user">&#xf007; user</option>
                        <option value="fa-user-md">&#xf0f0; user-md</option>
                        <option value="fa-users">&#xf0c0; users</option>
                        <option value="fa-video-camera">&#xf03d; video-camera</option>
                        <option value="fa-vimeo-square">&#xf194; vimeo-square</option>
                        <option value="fa-vine">&#xf1ca; vine</option>
                        <option value="fa-vk">&#xf189; vk</option>
                        <option value="fa-volume-down">&#xf027; volume-down</option>
                        <option value="fa-volume-off">&#xf026; volume-off</option>
                        <option value="fa-volume-up">&#xf028; volume-up</option>
                        <option value="fa-warning">&#xf071; warning</option>
                        <option value="fa-wechat">&#xf1d7; wechat</option>
                        <option value="fa-weibo">&#xf18a; weibo</option>
                        <option value="fa-weixin">&#xf1d7; weixin</option>
                        <option value="fa-wheelchair">&#xf193; wheelchair</option>
                        <option value="fa-wifi">&#xf1eb; wifi</option>
                        <option value="fa-windows">&#xf17a; windows</option>
                        <option value="fa-won">&#xf159; won</option>
                        <option value="fa-wordpress">&#xf19a; wordpress</option>
                        <option value="fa-wrench">&#xf0ad; wrench</option>
                        <option value="fa-xing">&#xf168; xing</option>
                        <option value="fa-xing-square">&#xf169; xing-square</option>
                        <option value="fa-yahoo">&#xf19e; yahoo</option>
                        <option value="fa-yelp">&#xf1e9; yelp</option>
                        <option value="fa-yen">&#xf157; yen</option>
                        <option value="fa-youtube">&#xf167; youtube</option>
                        <option value="fa-youtube-play">&#xf16a; youtube-play</option>
                        <option value="fa-youtube-square">&#xf166; youtube-square</option>
                        <option class="themify" value="ti-arrow-up">&#xe627; ti-arrow-up</option>
                        <option class="themify" value="ti-arrow-right">&#xe628; arrow-right </option>
                        <option class="themify" value="ti-arrow-left">&#xe629; arrow-left </option>
                        <option class="themify" value="ti-arrow-down">&#xe62a; arrow-down</option>
                        <option class="themify" value="ti-arrows-vertical">&#xe657; arrows-vertical</option>
                        <option class="themify" value="ti-arrows-horizontal">&#xe658; arrows-horizontal</option>
                        <option class="themify" value="ti-angle-up">&#xe648; angle-up</option>
                        <option class="themify" value="ti-angle-right">&#xe649; angle-right</option>
                        <option class="themify" value="ti-angle-left">&#xe64a; angle-left</option>
                        <option class="themify" value="ti-angle-down">&#xe64b; angle-down</option>
                        <option class="themify" value="ti-angle-double-up">&#xe660; angle-double-up</option>
                        <option class="themify" value="ti-angle-double-right">&#xe661; angle-double-right</option>
                        <option class="themify" value="ti-angle-double-left">&#xe662; angle-double-left</option>
                        <option class="themify" value="ti-angle-double-down">&#xe663; angle-double-down</option>
                        <option class="themify" value="ti-move">&#xe656; move</option>
                        <option class="themify" value="ti-fullscreen">&#xe659; fullscreen</option>
                        <option class="themify" value="ti-arrow-top-right">&#xe65a; arrow-top-right</option>
                        <option class="themify" value="ti-arrow-top-left">&#xe65b; arrow-top-left</option>
                        <option class="themify" value="ti-arrow-circle-up">&#xe65c; arrow-circle-up</option>
                        <option class="themify" value="ti-arrow-circle-right">&#xe65d; arrow-circle-right</option>
                        <option class="themify" value="ti-arrow-circle-left">&#xe65e; arrow-circle-left</option>
                        <option class="themify" value="ti-arrow-circle-down">&#xe65f; arrow-circle-down</option>
                        <option class="themify" value="ti-arrows-corner">&#xe6be; arrows-corner</option>
                        <option class="themify" value="ti-split-v">&#xe675; split-v</option>
                        <option class="themify" value="ti-split-v-alt">&#xe6d6; split-v-alt</option>
                        <option class="themify" value="ti-split-h">&#xe676; split-h</option>
                        <option class="themify" value="ti-hand-point-up">&#xe71a; hand-point-up</option>
                        <option class="themify" value="ti-hand-point-right">&#xe71b; hand-point-right</option>
                        <option class="themify" value="ti-hand-point-left">&#xe71c; hand-point-left</option>
                        <option class="themify" value="ti-hand-point-down">&#xe71d; hand-point-down</option>
                        <option class="themify" value="ti-back-right">&#xe6bc; back-right</option>
                        <option class="themify" value="ti-back-left">&#xe6bd; back-left</option>
                        <option class="themify" value="ti-exchange-vertical">&#xe63f; exchange-vertical</option>
                        <option class="themify" value="ti-wand">&#xe600; wand</option>
                        <option class="themify" value="ti-save">&#xe746; save</option>
                        <option class="themify" value="ti-save-alt">&#xe747; save-alt</option>
                        <option class="themify" value="ti-direction">&#xe6a8; direction</option>
                        <option class="themify" value="ti-direction-alt">&#xe6a9; direction-alt</option>
                        <option class="themify" value="ti-user">&#xe602; user</option>
                        <option class="themify" value="ti-link">&#xe62d; link</option>
                        <option class="themify" value="ti-unlink">&#xe604; unlink</option>
                        <option class="themify" value="ti-trash">&#xe605; trash</option>
                        <option class="themify" value="ti-target">&#xe607; target</option>
                        <option class="themify" value="ti-tag">&#xe608; tag</option>
                        <option class="themify" value="ti-desktop">&#xe640; desktop</option>
                        <option class="themify" value="ti-tablet">&#xe609; tablet</option>
                        <option class="themify" value="ti-mobile">&#xe621; mobile</option>
                        <option class="themify" value="ti-email">&#xe75a; email</option>
                        <option class="themify" value="ti-star">&#xe60a; star</option>
                        <option class="themify" value="ti-spray">&#xe60b; spray</option>
                        <option class="themify" value="ti-signal">&#xe60c; signal</option>
                        <option class="themify" value="ti-shopping-cart">&#xe60d; shopping-cart</option>
                        <option class="themify" value="ti-shopping-cart-full">&#xe60e; shopping-cart-full</option>
                        <option class="themify" value="ti-settings">&#xe60f; settings</option>
                        <option class="themify" value="ti-search">&#xe610; search</option>
                        <option class="themify" value="ti-zoom-in">&#xe611; zoom-in</option>
                        <option class="themify" value="ti-zoom-out">&#xe612; zoom-out</option>
                        <option class="themify" value="ti-cut">&#xe613; cut</option>
                        <option class="themify" value="ti-ruler">&#xe614; ruler</option>
                        <option class="themify" value="ti-ruler-alt-2">&#xe6db; ruler-alt-2</option>
                        <option class="themify" value="ti-ruler-pencil">&#xe615; ruler-pencil</option>
                        <option class="themify" value="ti-ruler-alt">&#xe616; ruler-alt</option>
                        <option class="themify" value="ti-bookmark">&#xe617; bookmark</option>
                        <option class="themify" value="ti-bookmark-alt">&#xe618; bookmark-alt</option>
                        <option class="themify" value="ti-reload">&#xe619; reload</option>
                        <option class="themify" value="ti-plus">&#xe61a; plus</option>
                        <option class="themify" value="ti-minus">&#xe622; minus</option>
                        <option class="themify" value="ti-close">&#xe646; close</option>
                        <option class="themify" value="ti-pin">&#xe693; pin</option>
                        <option class="themify" value="ti-pencil">&#xe61c; pencil</option>
                        <option class="themify" value="ti-pencil-alt">&#xe61d; pencil-alt</option>
                        <option class="themify" value="ti-paint-roller">&#xe61e; paint-roller</option>
                        <option class="themify" value="ti-paint-bucket">&#xe61f; paint-bucket</option>
                        <option class="themify" value="ti-na">&#xe620; na</option>
                        <option class="themify" value="ti-medall">&#xe623; medall</option>
                        <option class="themify" value="ti-medall-alt">&#xe624; medall-alt</option>
                        <option class="themify" value="ti-marker">&#xe625; marker</option>
                        <option class="themify" value="ti-marker-alt">&#xe626; marker-alt</option>
                        <option class="themify" value="ti-lock">&#xe62b; lock</option>
                        <option class="themify" value="ti-unlock">&#xe603; unlock</option>
                        <option class="themify" value="ti-location-arrow">&#xe62c; location-arrow</option>
                        <option class="themify" value="ti-layout">&#xe62e; layout</option>
                        <option class="themify" value="ti-layers">&#xe62f; layers</option>
                        <option class="themify" value="ti-layers-alt">&#xe630; layers-alt</option>
                        <option class="themify" value="ti-key">&#xe631; key</option>
                        <option class="themify" value="ti-image">&#xe633; image</option>
                        <option class="themify" value="ti-heart">&#xe634; heart</option>
                        <option class="themify" value="ti-heart-broken">&#xe635; heart-broken</option>
                        <option class="themify" value="ti-hand-stop">&#xe636; hand-stop</option>
                        <option class="themify" value="ti-hand-open">&#xe637; hand-open</option>
                        <option class="themify" value="ti-hand-drag">&#xe638; hand-drag</option>
                        <option class="themify" value="ti-flag">&#xe63a; flag</option>
                        <option class="themify" value="ti-flag-alt">&#xe63b; flag-alt</option>
                        <option class="themify" value="ti-flag-alt-2">&#xe63c; flag-alt-2</option>
                        <option class="themify" value="ti-eye">&#xe63d; eye</option>
                        <option class="themify" value="ti-import">&#xe632; import</option>
                        <option class="themify" value="ti-export">&#xe63e; export</option>
                        <option class="themify" value="ti-cup">&#xe641; cup</option>
                        <option class="themify" value="ti-crown">&#xe642; crown</option>
                        <option class="themify" value="ti-comments">&#xe643; comments</option>
                        <option class="themify" value="ti-comment">&#xe644; comment</option>
                        <option class="themify" value="ti-comment-alt">&#xe645; comment-alt</option>
                        <option class="themify" value="ti-thought">&#xe606; thought</option>
                        <option class="themify" value="ti-clip">&#xe647; clip</option>
                        <option class="themify" value="ti-check">&#xe64c; check</option>
                        <option class="themify" value="ti-check-box">&#xe64d; check-box</option>
                        <option class="themify" value="ti-camera">&#xe64e; camera</option>
                        <option class="themify" value="ti-announcement">&#xe64f; announcement</option>
                        <option class="themify" value="ti-brush">&#xe650; brush</option>
                        <option class="themify" value="ti-brush-alt">&#xe727; brush-alt</option>
                        <option class="themify" value="ti-palette">&#xe6e0; palette</option>
                        <option class="themify" value="ti-briefcase">&#xe651; briefcase</option>
                        <option class="themify" value="ti-bolt">&#xe652; bolt</option>
                        <option class="themify" value="ti-bolt-alt">&#xe653; bolt-alt</option>
                        <option class="themify" value="ti-blackboard">&#xe654; blackboard</option>
                        <option class="themify" value="ti-bag">&#xe655; bag</option>
                        <option class="themify" value="ti-world">&#xe665; world</option>
                        <option class="themify" value="ti-wheelchair">&#xe666; wheelchair</option>
                        <option class="themify" value="ti-car">&#xe6b5; car</option>
                        <option class="themify" value="ti-truck">&#xe66d; truck</option>
                        <option class="themify" value="ti-timer">&#xe66e; timer</option>
                        <option class="themify" value="ti-ticket">&#xe66f; ticket</option>
                        <option class="themify" value="ti-thumb-up">&#xe670; thumb-up</option>
                        <option class="themify" value="ti-thumb-down">&#xe671; thumb-down</option>
                        <option class="themify" value="ti-stats-up">&#xe673; stats-up</option>
                        <option class="themify" value="ti-stats-down">&#xe674; stats-down</option>
                        <option class="themify" value="ti-shine">&#xe678; shine</option>
                        <option class="themify" value="ti-shift-right">&#xe679; shift-right</option>
                        <option class="themify" value="ti-shift-left">&#xe67a; shift-left</option>
                        <option class="themify" value="ti-shift-right-alt">&#xe6d9; shift-right-alt</option>
                        <option class="themify" value="ti-shift-left-alt">&#xe6da; shift-left-alt</option>
                        <option class="themify" value="ti-shield">&#xe67b; shield</option>
                        <option class="themify" value="ti-notepad">&#xe67c; notepad</option>
                        <option class="themify" value="ti-server">&#xe67d; server</option>
                        <option class="themify" value="ti-pulse">&#xe680; pulse</option>
                        <option class="themify" value="ti-printer">&#xe681; printer</option>
                        <option class="themify" value="ti-power-off">&#xe682; power-off</option>
                        <option class="themify" value="ti-plug">&#xe683; plug</option>
                        <option class="themify" value="ti-pie-chart">&#xe684; pie-chart</option>
                        <option class="themify" value="ti-panel">&#xe686; panel</option>
                        <option class="themify" value="ti-package">&#xe687; package</option>
                        <option class="themify" value="ti-music">&#xe688; music</option>
                        <option class="themify" value="ti-music-alt">&#xe689; music-alt</option>
                        <option class="themify" value="ti-mouse">&#xe68a; mouse</option>
                        <option class="themify" value="ti-mouse-alt">&#xe68b; mouse-alt</option>
                        <option class="themify" value="ti-money">&#xe68c; money</option>
                        <option class="themify" value="ti-microphone">&#xe68d; microphone</option>
                        <option class="themify" value="ti-menu">&#xe68e; menu</option>
                        <option class="themify" value="ti-menu-alt">&#xe68f; menu-alt</option>
                        <option class="themify" value="ti-map">&#xe690; map</option>
                        <option class="themify" value="ti-map-alt">&#xe691; map-alt</option>
                        <option class="themify" value="ti-location-pin">&#xe693; location-pin</option>
                        <option class="themify" value="ti-light-bulb">&#xe695; light-bulb</option>
                        <option class="themify" value="ti-info">&#xe697; info</option>
                        <option class="themify" value="ti-infinite">&#xe698; infinite</option>
                        <option class="themify" value="ti-id-badge">&#xe699; id-badge</option>
                        <option class="themify" value="ti-hummer">&#xe69a; hummer</option>
                        <option class="themify" value="ti-home">&#xe69b; home</option>
                        <option class="themify" value="ti-help">&#xe69c; help</option>
                        <option class="themify" value="ti-headphone">&#xe719; headphone</option>
                        <option class="themify" value="ti-harddrives">&#xe69e; harddrives</option>
                        <option class="themify" value="ti-harddrive">&#xe69f; harddrive</option>
                        <option class="themify" value="ti-gift">&#xe6a0; gift</option>
                        <option class="themify" value="ti-game">&#xe6a1; game</option>
                        <option class="themify" value="ti-filter">&#xe6a2; filter</option>
                        <option class="themify" value="ti-files">&#xe6a3; files</option>
                        <option class="themify" value="ti-file">&#xe6a4; file</option>
                        <option class="themify" value="ti-zip">&#xe664; zip</option>
                        <option class="themify" value="ti-folder">&#xe639; folder</option>
                        <option class="themify" value="ti-envelope">&#xe6a6; envelope</option>
                        <option class="themify" value="ti-dashboard">&#xe6aa; dashboard</option>
                        <option class="themify" value="ti-cloud">&#xe6b1; cloud</option>
                        <option class="themify" value="ti-cloud-up">&#xe6b2; cloud-up</option>
                        <option class="themify" value="ti-cloud-down">&#xe6b3; cloud-down</option>
                        <option class="themify" value="ti-clipboard">&#xe6b4; clipboard</option>
                        <option class="themify" value="ti-calendar">&#xe6b6; calendar</option>
                        <option class="themify" value="ti-book">&#xe6b7; book</option>
                        <option class="themify" value="ti-bell">&#xe6b8; bell</option>
                        <option class="themify" value="ti-basketball">&#xe6b9; basketball</option>
                        <option class="themify" value="ti-bar-chart">&#xe6ba; bar-chart</option>
                        <option class="themify" value="ti-bar-chart-alt">&#xe6bb; bar-chart-alt</option>
                        <option class="themify" value="ti-archive">&#xe6bf; archive</option>
                        <option class="themify" value="ti-anchor">&#xe6b0; anchor</option>
                        <option class="themify" value="ti-alert">&#xe6c5; alert</option>
                        <option class="themify" value="ti-alarm-clock">&#xe6c6; alarm-clock</option>
                        <option class="themify" value="ti-agenda">&#xe6c7; agenda</option>
                        <option class="themify" value="ti-write">&#xe6c8; write</option>
                        <option class="themify" value="ti-wallet">&#xe6cd; wallet</option>
                        <option class="themify" value="ti-video-clapper">&#xe6ce; video-clapper</option>
                        <option class="themify" value="ti-video-camera">&#xe6cf; video-camera</option>
                        <option class="themify" value="ti-vector">&#xe6d0; vector</option>
                        <option class="themify" value="ti-support">&#xe6d4; support</option>
                        <option class="themify" value="ti-stamp">&#xe6d5; stamp</option>
                        <option class="themify" value="ti-slice">&#xe6d7; slice</option>
                        <option class="themify" value="ti-shortcode">&#xe6d8; shortcode</option>
                        <option class="themify" value="ti-receipt">&#xe6dc; receipt</option>
                        <option class="themify" value="ti-pin2">&#xe6dd; pin2</option>
                        <option class="themify" value="ti-pin-alt">&#xe6de; pin-alt</option>
                        <option class="themify" value="ti-pencil-alt2">&#xe6df; pencil-alt2</option>
                        <option class="themify" value="ti-eraser">&#xe6a5; eraser</option>
                        <option class="themify" value="ti-more">&#xe6e1; more</option>
                        <option class="themify" value="ti-more-alt">&#xe6e2; more-alt</option>
                        <option class="themify" value="ti-microphone-alt">&#xe6e3; microphone-alt</option>
                        <option class="themify" value="ti-magnet">&#xe6e4; magnet</option>
                        <option class="themify" value="ti-line-double">&#xe6e5; line-double</option>
                        <option class="themify" value="ti-line-dotted">&#xe6e6; line-dotted</option>
                        <option class="themify" value="ti-line-dashed">&#xe6e7; line-dashed</option>
                        <option class="themify" value="ti-ink-pen">&#xe716; ink-pen</option>
                        <option class="themify" value="ti-info-alt">&#xe717; info-alt</option>
                        <option class="themify" value="ti-help-alt">&#xe718; help-alt</option>
                        <option class="themify" value="ti-headphone-alt">&#xe719; headphone-alt</option>
                        <option class="themify" value="ti-gallery">&#xe71e; gallery</option>
                        <option class="themify" value="ti-face-smile">&#xe71f; face-smile</option>
                        <option class="themify" value="ti-face-sad">&#xe720; face-sad</option>
                        <option class="themify" value="ti-credit-card">&#xe721; credit-card</option>
                        <option class="themify" value="ti-comments-smiley">&#xe726; comments-smiley</option>
                        <option class="themify" value="ti-time">&#xe72b; time</option>
                        <option class="themify" value="ti-share">&#xe72e; share</option>
                        <option class="themify" value="ti-share-alt">&#xe72f; share-alt</option>
                        <option class="themify" value="ti-rocket">&#xe730; rocket</option>
                        <option class="themify" value="ti-new-window">&#xe732; new-window</option>
                        <option class="themify" value="ti-rss">&#xe75e; rss</option>
                        <option class="themify" value="ti-rss-alt">&#xe75f; rss-alt</option>
                        <option class="themify" value="ti-control-stop">&#xe6ab; control-stop</option>
                        <option class="themify" value="ti-control-shuffle">&#xe6ac; control-shuffle</option>
                        <option class="themify" value="ti-control-play">&#xe6ad; control-play</option>
                        <option class="themify" value="ti-control-pause">&#xe6ae; control-pause</option>
                        <option class="themify" value="ti-control-forward">&#xe6af; control-forward</option>
                        <option class="themify" value="ti-control-backward">&#xe6b0; control-backward</option>
                        <option class="themify" value="ti-volume">&#xe601; volume</option>
                        <option class="themify" value="ti-control-skip-forward">&#xe722; control-skip-forward</option>
                        <option class="themify" value="ti-control-skip-backward">&#xe723; control-skip-backward</option>
                        <option class="themify" value="ti-control-record">&#xe724; control-record</option>
                        <option class="themify" value="ti-control-eject">&#xe725; control-eject</option>
                        <option class="themify" value="ti-paragraph">&#xe685; paragraph</option>
                        <option class="themify" value="ti-uppercase">&#xe66a; uppercase</option>
                        <option class="themify" value="ti-underline">&#xe66c; underline</option>
                        <option class="themify" value="ti-text">&#xe672; text</option>
                        <option class="themify" value="ti-Italic">&#xe696; Italic</option>
                        <option class="themify" value="ti-smallcap">&#xe677; smallcap</option>
                        <option class="themify" value="ti-list">&#xe667; list</option>
                        <option class="themify" value="ti-list-ol">&#xe694; list-ol</option>
                        <option class="themify" value="ti-align-right">&#xe6c1; align-right</option>
                        <option class="themify" value="ti-align-left">&#xe6c2; align-left</option>
                        <option class="themify" value="ti-align-justify">&#xe6c3; align-justify</option>
                        <option class="themify" value="ti-align-center">&#xe6c4; align-center</option>
                        <option class="themify" value="ti-quote-right">&#xe67e; quote-right</option>
                        <option class="themify" value="ti-quote-left">&#xe67f; quote-left</option>
                        <option class="themify" value="ti-layout-width-full">&#xe6e8; layout-width-full</option>
                        <option class="themify" value="ti-layout-width-default">&#xe6e9; layout-width-default</option>
                        <option class="themify" value="ti-layout-width-default-alt">&#xe6ea; layout-width-default-alt</option>
                        <option class="themify" value="ti-layout-tab">&#xe6eb; layout-tab</option>
                        <option class="themify" value="ti-layout-tab-window">&#xe6ec; layout-tab-window</option>
                        <option class="themify" value="ti-layout-tab-v">&#xe6ed; layout-tab-v</option>
                        <option class="themify" value="ti-layout-tab-min">&#xe6ee; layout-tab-min</option>
                        <option class="themify" value="ti-layout-slider">&#xe6ef; layout-slider</option>
                        <option class="themify" value="ti-layout-slider-alt">&#xe6f0; layout-slider-alt</option>
                        <option class="themify" value="ti-layout-sidebar-right">&#xe6f1; layout-sidebar-right</option>
                        <option class="themify" value="ti-layout-sidebar-none">&#xe6f2; layout-sidebar-none</option>
                        <option class="themify" value="ti-layout-sidebar-left">&#xe6f3; layout-sidebar-left</option>
                        <option class="themify" value="ti-layout-placeholder">&#xe6f4; layout-placeholder</option>
                        <option class="themify" value="ti-layout-menu">&#xe6f5; layout-menu</option>
                        <option class="themify" value="ti-layout-menu-v">&#xe6f6; layout-menu-v</option>
                        <option class="themify" value="ti-layout-menu-separated">&#xe6f7; layout-menu-separated</option>
                        <option class="themify" value="ti-layout-menu-full">&#xe6f8; layout-menu-full</option>
                        <option class="themify" value="ti-layout-media-right">&#xe6fa; layout-media-right</option>
                        <option class="themify" value="ti-layout-media-right-alt">&#xe6f9; layout-media-right-alt</option>
                        <option class="themify" value="ti-layout-media-overlay">&#xe6fb; layout-media-overlay</option>
                        <option class="themify" value="ti-layout-media-overlay-alt">&#xe6fc; layout-media-overlay-alt</option>
                        <option class="themify" value="ti-layout-media-overlay-alt-2">&#xe6fd; layout-media-overlay-alt-2</option>
                        <option class="themify" value="ti-layout-media-left">&#xe6ff; layout-media-left</option>
                        <option class="themify" value="ti-layout-media-left-alt">&#xe6fe; layout-media-left-alt</option>
                        <option class="themify" value="ti-layout-media-center">&#xe701; layout-media-center</option>
                        <option class="themify" value="ti-layout-media-center-alt">&#xe700; layout-media-center-alt</option>
                        <option class="themify" value="ti-layout-list-thumb">&#xe702; layout-list-thumb</option>
                        <option class="themify" value="ti-layout-list-thumb-alt">&#xe703; layout-list-thumb-alt</option>
                        <option class="themify" value="ti-layout-list-post">&#xe704; layout-list-post</option>
                        <option class="themify" value="ti-layout-list-large-image">&#xe705; layout-list-large-image</option>
                        <option class="themify" value="ti-layout-line-solid">&#xe706; layout-line-solid</option>
                        <option class="themify" value="ti-layout-grid4">&#xe707; layout-grid4</option>
                        <option class="themify" value="ti-layout-grid3">&#xe708; layout-grid3</option>
                        <option class="themify" value="ti-layout-grid2">&#xe709; layout-grid2</option>
                        <option class="themify" value="ti-layout-grid2-thumb">&#xe70a; layout-grid2-thumb</option>
                        <option class="themify" value="ti-layout-cta-right">&#xe70b; layout-cta-right</option>
                        <option class="themify" value="ti-layout-cta-left">&#xe70c; layout-cta-left</option>
                        <option class="themify" value="ti-layout-cta-center">&#xe70d; layout-cta-center</option>
                        <option class="themify" value="ti-layout-cta-btn-right">&#xe70e; layout-cta-btn-right</option>
                        <option class="themify" value="ti-layout-cta-btn-left">&#xe70f; layout-cta-btn-left</option>
                        <option class="themify" value="ti-layout-column4">&#xe710; layout-column4</option>
                        <option class="themify" value="ti-layout-column3">&#xe711; layout-column3</option>
                        <option class="themify" value="ti-layout-column2">&#xe712; layout-column2</option>
                        <option class="themify" value="ti-layout-accordion-separated">&#xe713; layout-accordion-separated</option>
                        <option class="themify" value="ti-layout-accordion-merged">&#xe714; layout-accordion-merged</option>
                        <option class="themify" value="ti-layout-accordion-list">&#xe715; layout-accordion-list</option>
                        <option class="themify" value="ti-widgetized">&#xe6ca; widgetized</option>
                        <option class="themify" value="ti-widget">&#xe6cb; widget</option>
                        <option class="themify" value="ti-widget-alt">&#xe6cc; widget-alt</option>
                        <option class="themify" value="ti-view-list">&#xe667; view-list</option>
                        <option class="themify" value="ti-view-list-alt">&#xe668; view-list-alt</option>
                        <option class="themify" value="ti-view-grid">&#xe669; view-grid</option>
                        <option class="themify" value="ti-upload">&#xe66b; upload</option>
                        <option class="themify" value="ti-download">&#xe6a7; download</option>
                        <option class="themify" value="ti-loop">&#xe692; loop</option>
                        <option class="themify" value="ti-layout-sidebar-2">&#xe736; layout-sidebar-2</option>
                        <option class="themify" value="ti-layout-grid4-alt">&#xe737; layout-grid4-alt</option>
                        <option class="themify" value="ti-layout-grid3-alt">&#xe738; layout-grid3-alt</option>
                        <option class="themify" value="ti-layout-grid2-alt">&#xe739; layout-grid2-alt</option>
                        <option class="themify" value="ti-layout-column4-alt">&#xe73a; layout-column4-alt</option>
                        <option class="themify" value="ti-layout-column3-alt">&#xe73b; layout-column3-alt</option>
                        <option class="themify" value="ti-layout-column2-alt">&#xe73c; layout-column2-alt</option>
                        <option class="themify" value="ti-flickr">&#xe740; flickr</option>
                        <option class="themify" value="ti-flickr-alt">&#xe759; flickr-alt</option>
                        <option class="themify" value="ti-instagram">&#xe73d; instagram</option>
                        <option class="themify" value="ti-google">&#xe73e; google</option>
                        <option class="themify" value="ti-github">&#xe73f; github</option>
                        <option class="themify" value="ti-facebook">&#xe741; facebook</option>
                        <option class="themify" value="ti-dropbox">&#xe742; dropbox</option>
                        <option class="themify" value="ti-dropbox-alt">&#xe75c; dropbox-alt</option>
                        <option class="themify" value="ti-dribbble">&#xe743; dribbble</option>
                        <option class="themify" value="ti-apple">&#xe744; apple</option>
                        <option class="themify" value="ti-android">&#xe745; android</option>
                        <option class="themify" value="ti-yahoo">&#xe748; yahoo</option>
                        <option class="themify" value="ti-trello">&#xe74d; trello</option>
                        <option class="themify" value="ti-stack-overflow">&#xe74e; stack-overflow</option>
                        <option class="themify" value="ti-soundcloud">&#xe74f; soundcloud</option>
                        <option class="themify" value="ti-sharethis">&#xe750; sharethis</option>
                        <option class="themify" value="ti-sharethis-alt">&#xe751; sharethis-alt</option>
                        <option class="themify" value="ti-reddit">&#xe752; reddit</option>
                        <option class="themify" value="ti-microsoft">&#xe733; microsoft</option>
                        <option class="themify" value="ti-microsoft-alt">&#xe754; microsoft-alt</option>
                        <option class="themify" value="ti-linux">&#xe755; linux</option>
                        <option class="themify" value="ti-jsfiddle">&#xe756; jsfiddle</option>
                        <option class="themify" value="ti-joomla">&#xe757; joomla</option>
                        <option class="themify" value="ti-html5">&#xe758; html5</option>
                        <option class="themify" value="ti-css3">&#xe75d; css3</option>
                        <option class="themify" value="ti-drupal">&#xe75b; drupal</option>
                        <option class="themify" value="ti-wordpress">&#xe749; wordpress</option>
                        <option class="themify" value="ti-tumblr">&#xe72c; tumblr</option>
                        <option class="themify" value="ti-tumblr-alt">&#xe74c; tumblr-alt</option>
                        <option class="themify" value="ti-skype">&#xe72d; skype</option>
                        <option class="themify" value="ti-youtube">&#xe728; youtube</option>
                        <option class="themify" value="ti-vimeo">&#xe729; vimeo</option>
                        <option class="themify" value="ti-vimeo-alt">&#xe74a; vimeo-alt</option>
                        <option class="themify" value="ti-twitter">&#xe72a; twitter</option>
                        <option class="themify" value="ti-twitter-alt">&#xe74b; twitter-alt</option>
                        <option class="themify" value="ti-linkedin">&#xe735; linkedin</option>
                        <option class="themify" value="ti-pinterest">&#xe731; pinterest</option>
                        <option class="themify" value="ti-pinterest-alt">&#xe753; pinterest-alt</option>
                        <option class="themify" value="ti-themify-logo">&#xe6d1; themify-logo</option>
                        <option class="themify" value="ti-themify-favicon">&#xe6d2; themify-favicon</option>
                        <option class="themify" value="ti-themify-favicon-alt">&#xe6d3; themify-favicon-alt</option>
                    </select>
                </div><!-- /.tab-pane -->
                <div class="tab-pane videoTab" id="video_Tab">
                    <label>Youtube ID:</label>
                    <input type="text" class="form-control margin-bottom-20" id="youtubeID" placeholder="Enter a Youtube video ID" value="">
                    <p class="text-center or">
                        <span>or</span>
                    </p>
                    <label>Vimeo ID:</label>
                    <input type="text" class="form-control margin-bottom-20" id="vimeoID" placeholder="Enter a Vimeo video ID" value="">
                </div><!-- /.tab-pane -->
            </div><!-- /.tab-content -->
            <div class="alert alert-success" style="display: none;" id="detailsAppliedMessage">
                <button class="close fui-cross" type="button" id="detailsAppliedMessageHide"></button>
                The changes were applied successfully!
            </div>
            <div class="margin-bottom-5">
                <button type="button" class="btn btn-primary btn-embossed btn-sm btn-block no-margin-left" id="saveStyling"><span class="fui-check-inverted"></span> Apply Changes</button>
            </div>
            <div class="sideButtons clearfix">
                <button type="button" class="btn btn-inverse btn-embossed btn-xs no-margin-left" id="cloneElementButton">
                    <span class="fui-windows"></span> Clone
                </button>
                <button type="button" class="btn btn-warning btn-embossed btn-xs" id="resetStyleButton">
                    <i class="fa fa-refresh"></i> Reset
                </button>
                <button type="button" class="btn btn-danger btn-embossed btn-xs" data-target="#deleteElement" data-toggle="modal" id="removeElementButton">
                    <span class="fui-cross-inverted"></span> Remove
                </button>
            </div>
        </div><!-- /#styleEditor -->
        <div id="hidden">
            <iframe src="elements/skeleton.html" id="skeleton"></iframe>
        </div>
        <div id="loader">
            <img src="images/loading.gif" alt="Loading...">
            Loading
        </div>
        <div class="sandboxes" id="sandboxes" style="display: none"></div>
    </div><!-- /#builder -->
    <!-- modals -->
    <div class="modal fade seoModal" id="seoModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header palette-turquoise">
                    <button type="button" class="close" data-dismiss="modal">
                        <span class="fui-cross"></span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">SEO Settings for <span id="tz_seo_title" class="text-primary pName">index.html</span></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form" id="pageSettingsForm" action="">
                        <input type="hidden" name="siteID" id="siteID" value="1">
                        <input type="hidden" name="pageID" id="pageID" value="25">
                        <input type="hidden" name="pageName" id="pageName" value="">
                        <div class="optionPane">
                            <div class="form-group">
                                <label for="name" class="col-sm-8 control-label">Page Title</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="tz_seo_page_Title" name="tz_seo_page_Title" placeholder="Page title" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-8 control-label">Page Meta Description</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" id="tz_seo_metaDescription" name="tz_seo_metaDescription" placeholder="Page meta description"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-8 control-label">Page Meta Keywords</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" id="tz_seo_metaKeywords" name="tz_seo_metaKeywords" placeholder="Page meta keywords"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-8 control-label">Page Author</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" id="tz_seo_header" name="tz_seo_header" rows="5" placeholder="Add Author Name here.."></textarea>
                                </div>
                            </div>
                        </div><!-- /.optionPane -->
                    </form>                           
                </div><!-- /.modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-embossed btn-cancel" data-dismiss="modal"><span class="fui-cross"></span> Cancel</button>
                    <button type="button" class="btn btn-primary btn-embossed btn-info" data-dismiss="modal" id="seoSubmittButton"><span class="fui-gear"></span> Save SEO Settings</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!-- export HTML popup -->
    <div class="modal fade" id="exportModal" tabindex="-1" role="dialog" aria-hidden="true">
        <form action="_export.php" target="_blank" id="markupForm" method="post" class="form-horizontal">
            <input type="hidden" name="siteID" value="">
            <input type="hidden" name="markup" value="" id="markupField">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span class="fui-cross"></span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Export your site</h4>
                    </div>
                    <div class="modal-body">
                        
                        <form id="pageSettingsForm" enctype="multipart/form-data" class="form-horizontal" role="form" action="">
                            <div class="optionPane">
                                <div class="full-group">
                                    <div class="form-group col-sm-12">
                                        <label for="name" class="control-label">Change Site Favicon:</label>
                                        <div id="imgArea">
                                            <img src="./elements/images/icon/favicon.ico">
                                            <div class="progressBar">
                                                <div class="bar"></div>
                                                <div class="percent">0%</div>
                                            </div>
                                            <div id="imgChange"><span>Change Favicon</span>
                                               <input type="file" name="image_upload_file" id="image_upload_file">
                                            </div>
                                            <div class="favicon-tooltip">
                                                <span>A favicon icon can be generated here</span> - <a href="http://www.favicon.cc/" target="_blank">http://www.favicon.cc</a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label for="name" class="control-label">Enter Form Type:</label>
                                        <select name="export_type" class="form-type" id="export_type">
                                            <option value="tz_aweber">AWeber</option>
                                            <option value="tz_active">ActiveCampaign</option>
                                            <option value="tz_custom">Custom Email</option>
                                            <option value="tz_campain">CampaginMonitor</option>
                                            <option value="tz_response">GetResponse</option>
                                            <option value="tz_mailchimp">Mailchimp</option>
                                            <option value="tz_mailerlite">MailerLite</option>
                                        </select>
                                    </div>
                                    <div class="export-content">
                                        <div class="export_change_type active" id="tz_custom" style="display:none;">
                                            <div class="form-group tz-position">
                                                <label for="name" class="col-sm-8 control-label">From Email</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="tz_email_from" id="tz_email_from" placeholder="The from email address" value="">
                                                </div>
                                            </div>
                                            <div class="form-group tz-position">
                                                <label for="name" class="col-sm-8 control-label">Email</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="tz_email" id="tz_email" placeholder="The email which will receive the leads" value="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="name" class="col-sm-8 control-label">Subject</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="tz_subject" id="tz_subject" placeholder="The subject of the email" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="export_change_type" id="tz_mailchimp" style="display:none;">
                                            <div class="form-group tz-position">
                                                <label for="name" class="col-sm-8 control-label">Your API Key</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="mailchimp_api_key" id="mailchimp_api_key" placeholder="Mailchimp API Key" value="">
                                                </div>
                                                <div class="tz-notice">Your API key from here - <a href="http://admin.mailchimp.com/account/api" target="_blank">http://admin.mailchimp.com/account/api</a></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="name" class="col-sm-8 control-label">List Unique ID</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="mailchimp_api_listid" id="mailchimp_api_listid" placeholder="List unique id" value="">
                                                </div>
                                                <div class="tz-notice">List unique id from here - <a href="http://admin.mailchimp.com/lists/" target="_blank">http://admin.mailchimp.com/lists/</a></div>
                                            </div>
                                        </div>
                                        <div class="export_change_type" id="tz_campain" style="display:none;">
                                            <div class="form-group tz-position">
                                                <label for="name" class="col-sm-8 control-label">Your API Key</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="cm_api_key" id="cm_api_key" placeholder="Campaign Monitor API KEY" value="">
                                                </div>
                                                <div class="tz-notice">APIKEY from here - <a href="https://YOUR-USERNAME.createsend.com/admin/account/" target="_blank">YOUR-USERNAME.createsend.com/admin/account/</a></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="name" class="col-sm-8 control-label">List ID</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="cm_list_id" id="cm_list_id" placeholder="API Subscriber List ID" value="">
                                                </div>
                                                <div class="tz-notice">List ID from here - <a href="https://www.campaignmonitor.com/api/getting-started/#listid<" target="_blank">www.campaignmonitor.com/api/getting-started/#listid</a></div>
                                            </div>
                                        </div>
                                        <div class="export_change_type" id="tz_response" style="display:none;">
                                            <div class="form-group tz-position">
                                                <label for="name" class="col-sm-8 control-label">Your API Key</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="getresponse_api_key" id="getresponse_api_key" placeholder="GetResponse API key" value="">
                                                </div>
                                                <div class="tz-notice">Your API key from here - <a href="https://app.getresponse.com/my_api_key.html" target="_blank">app.getresponse.com/my_api_key.html</a></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="name" class="col-sm-8 control-label">Campaign name</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="getresponse_campaign_token" id="getresponse_campaign_token" placeholder="GetResponse Campaign Token" value="">
                                                </div>
                                                <div class="tz-notice">Campaign name from here - <a href="https://app.getresponse.com/campaign_list.html" target="_blank">app.getresponse.com/campaign_list.html</a></div>
                                            </div>
                                        </div>
                                        <div class="export_change_type" id="tz_aweber">
                                            <div class="form-group  tz-position">
                                                <div class="col-sm-12">
                                                <strong>Notes:</strong> 
                                                <p>First you need to allow access of your Aweber account to LeadGen Aweber App. <a target="_blank" class="btn btn-embossed btn-primary btn-click-here" href="../builder/elements/tz_mail/getaccess.php">click here</a> to allow access.   </p>
                                                <p>If you want to use your own Aweber App then you need to add your Aweber App’s Consumer Key and Secret Key in these files (builder/elements/tz_mail/getaccess.php, builder/elements/tz_mail/contact.php).</p>
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="name" class="col-sm-8 control-label">List name</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="aweber_list_name" id="aweber_list_name" placeholder="List name" value="">
                                                </div>
                                                <div class="tz-notice">List name from here - <a href="https://www.aweber.com/users/autoresponder/manage" target="_blank">https://www.aweber.com/users/autoresponder/manage</a></div>
                                            </div>
                                        </div>
                                        <div class="export_change_type" id="tz_active" style="display:none;">
                                            <div class="form-group tz-position">
                                                <label for="name" class="col-sm-8 control-label">Your API URL</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="ac_api_url" id="ac_api_url" placeholder="Activecampaign Url" value="">
                                                </div>
                                                <div class="tz-notice">To get your Api Url : Go to My Settings -> Developers</div>
                                            </div>
                                            <div class="form-group">
                                                <label for="name" class="col-sm-8 control-label">Your API Key</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="ac_api_key" id="ac_api_key" placeholder="Activecampaign API Key" value="">
                                                </div>
                                                <div class="tz-notice">To get your Api Key :- Go to My Settings -> Developers</div>
                                            </div>
                                            <div class="form-group">
                                                <label for="name" class="col-sm-8 control-label">Your List ID</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="ac_api_listid" id="ac_api_listid" placeholder="Activecampaign List ID" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="export_change_type" id="tz_mailerlite" style="display:none;">
                                            <div class="form-group tz-position">
                                                <label for="name" class="col-sm-8 control-label">Your API Key</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="ml_api_key" id="ml_api_key" placeholder="MailerLite API Key" value="">
                                                </div>
                                                <div class="tz-notice">To get your API Key : Go to <a href="https://app.mailerlite.com/integrations/api/" target="_blank">https://app.mailerlite.com/integrations/api/</a></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="name" class="col-sm-8 control-label">Your Group ID</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="ml_groupid" id="ml_groupid" placeholder="MailerLite Group ID" value="">
                                                </div>
                                                <div class="tz-notice">To get your List ID (GroupID) : Go to <a href="https://app.mailerlite.com/integrations/api/" target="_blank">https://app.mailerlite.com/integrations/api/</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group tz-google-recaptcha">
                                        <label for="name" class="col-sm-8 control-label">reCAPTCHA secret Key (optional)</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="g-recaptcha-secret-key" id="g-recaptcha" placeholder="reCAPTCHA secret Key" value="">
                                        </div>
                                        <div class="tz-notice">Learn how to get reCAPTCHA secret Key - Goto Documentation->Forms Setting->Setup Google reCAPTCHA</div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div><!-- /.modal-body -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-embossed btn-cancel" data-dismiss="modal"><span class="fui-cross"></span> Cancel</button>
                        <button type="button" class="btn btn-embossed btn-primary" data-dismiss="modal" id="exportSave"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
                        <button type="submit" class="btn btn-primary btn-embossed btn-info" id="exportSubmit"><span class="fui-export"></span>Export Now</button>
                        <a class="btn btn-primary btn-embossed btn-info" id="buy-full-version" target="_blank" href="https://themeforest.net/item/leadgen-multipurpose-marketing-landing-page-pack-with-page-builder/19245368?ref=themezaa"><span class="fui-export"></span>Buy Full Version</a>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </form>
    </div><!-- /.modal -->
    <!-- delete single block popup -->
    <div class="modal fade small-modal" id="deleteBlock" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    Are you sure you want to delete this block?
                </div><!-- /.modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-embossed" data-dismiss="modal">Cancel &  Close</button>
                    <button type="button" type="button" class="btn btn-primary btn-embossed" id="deleteBlockConfirm">Delete</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- Export content popup -->
    <div class="modal fade small-modal" id="exp_imp_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span class="fui-cross"></span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Export/Import Project file</h4>
                </div>
                <div class="modal-body">
                    <div class="row text-center">
                        <div class="col-sm-6 save-section">
                            <form action="saveproject.php"  class="form-horizontal" method="post">
                                <p class="save-notice">Save Project for later use</p>
                                <div class="save-project">
                                    <button id="savefile" type="submit" class="btn btn-warning btn-lg actionButtons"><i class="fa fa-download"></i>&nbsp;Save File</button>
                                </div>
                                <input id="tz-save" type="hidden" name="tz-save" value=""/>
                                <input id="tz-save-flag" type="hidden" name="tz-save-flag" value="save"/>
                            </form>
                        </div>
                        <div class="col-sm-6 import-section">
                            <form class="form-horizontal" action="saveproject.php" id="import-form" method="post" enctype="multipart/form-data">
                                <p class="import-title">Import Save Project</p>
                                <div class="form-group">
                                    <input type="file" class="form-control file-upload" id="file" name="file" multiple />
                                    <div class="input-group col-xs-12">
                                        <input class="form-control input-lg" id="file-name" disabled="" placeholder="Upload Save File" type="text">
                                        <span class="input-group-btn">
                                            <button class="browse btn btn-primary" type="button"><i class="fa fa-sign-in"></i> Import File</button>
                                        </span>
                                    </div>
                                    <div class="import-notice tz-notice"><b>Note:</b> Import file should be builder Project save file.</div>
                                    <input type="submit" class="btn btn-embossed btn-primary" id="import-site" name="upload" value="Import">
                                </div>
                                <input id="tz-save-flag" type="hidden" name="tz-save-flag" value="import"/>
                            </form>
                        </div>
                    </div>
                </div><!-- /.modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-embossed btn-cancel" data-dismiss="modal"><span class="fui-cross"></span> Cancel</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!-- / End Export content popup -->
    <div class="modal fade small-modal" id="resetBlock" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <p>Are you sure you want to reset this block?</p>
                    <p>All changes made to the content will be destroyed.</p>
                </div><!-- /.modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-embossed" data-dismiss="modal">Cancel & Close</button>
                    <button type="button" type="button" class="btn btn-primary btn-embossed" id="resetBlockConfirm">Reset Block</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- delete page popup -->
    <div class="modal fade small-modal" id="deletePage" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <p>Are you sure you want to delete this entire page?</p>
                </div><!-- /.modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-embossed" data-dismiss="modal" id="deletePageCancel">Cancel & Close</button>
                    <button type="button" type="button" class="btn btn-primary btn-embossed" id="deletePageConfirm">Delete Page</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- delete elemnent popup -->
    <div class="modal fade small-modal" id="deleteElement" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <p>
                        Are you sure you want to delete this element? Once deleted, it can not be restored.
                    </p>
                </div><!-- /.modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-embossed" data-dismiss="modal" id="deletePageCancel">Cancel & Close</button>
                    <button type="button" type="button" class="btn btn-primary btn-embossed" id="deleteElementConfirm">Delete Block</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- edit content popup -->
    <div class="modal fade" id="editContentModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <textarea id="contentToEdit"></textarea>
                </div><!-- /.modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-embossed" data-dismiss="modal">Cancel & Close</button>
                    <button type="button" type="button" class="btn btn-primary btn-embossed" id="updateContentInFrameSubmit">Update Content</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- preview popup -->
    <div class="modal fade" id="previewModal" tabindex="-1" role="dialog" aria-hidden="true">
        <form action="_preview.php" target="_blank" id="markupPreviewForm" method="post" class="form-horizontal">
            <input type="hidden" name="markup" value="" id="markupField">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span class="fui-cross"></span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Page Preview</h4>
                    </div>
                    <div class="modal-body">
                        <p class="preview-notice">
                            Please note that links to other pages will not function properly in the preview, you can only preview a single page at once.
                        </p>
                    </div><!-- /.modal-body -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-embossed" data-dismiss="modal"><span class="fui-cross"></span> Cancel & Close</button>
                        <button type="submit" class="btn btn-primary btn-embossed btn-info"><span class="fui-export"></span> Preview Changes</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </form> 
    </div><!-- /.modal -->
    <div class="modal fade errorModal" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                </div><!-- /.modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-block" data-dismiss="modal"><span class="fui-cross"></span> Close Window</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <div class="modal fade successModal" id="successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                </div><!-- /.modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-block" data-dismiss="modal"><span class="fui-cross"></span> Close Window</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- Load JS here for greater good =============================-->

    <script>
    var siteUrl = '';
    var baseUrl = '';
    <?php
            if (isset($_GET['url'])) {
                $url = $_GET['url'];
            } else {
                $url = '';
            }
    ?>
    var needToDesignUrl = '<?php echo $url; ?>';

    </script>
    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/jquery-migrate-1.0.0.js"></script>
    <script src="js/vendor/jstorage.js"></script>
    <script src="js/vendor/jquery-ui.min.js"></script>
    <script src="js/vendor/flat-ui-pro.min.js"></script>
    <script src="js/vendor/chosen.min.js"></script>
    <script src="js/vendor/jquery.zoomer.js"></script>
    <script src="js/vendor/spectrum.js"></script>
    <script src="js/vendor/summernote.min.js"></script>
    <script src="js/vendor/ace/ace.js"></script>
    <script src="js/redactor/redactor.min.js"></script>
    <script src="js/redactor/table.js"></script>
    <script src="js/redactor/bufferButtons.js"></script>
    <script src="js/vendor/jquery.nicescroll.min.js"></script>
	<script src="js/builder.js"></script>
</body>
</html>