<?php
/**
 * CSS Extensions for Minds Theme
 */
?>
/**************
 **** BODY ****
 **************/
 
body{
	background:#FEFEFE;
 }

/***************
 *** TOP BAR ***
 **************/
/* Top Menu
 */
.elgg-page-topbar > .elgg-inner{
	
 }
.elgg-menu.elgg-menu-site.elgg-menu-site-default{
	position:relative;
	float:left;
    padding-top:2px;
   	
}
.elgg-page-topbar .elgg-menu-item-minds-logo{
	margin-top:-20px;
	
 }
.elgg-page-topbar .elgg-menu-item-profile{
	margin:0px 5px 0 0;
 }

/* More Drop Down
 */
.elgg-menu.elgg-menu-site.elgg-menu-site-more{
	position:absolute;
}

/*Search modifications 
 */
li.elgg-menu-item-search > a, li.elgg-menu-item-login > a  {
	padding:0;
}

/* Login button 
 */
#login-dropdown{
	position:relative;
    top:0;
}
.elgg-button.elgg-button-dropdown{
	font-size:12px;
	width:65px;
    border:0;
    color:#333;
}
.elgg-button.elgg-button-dropdown:hover{
	background:#FFF;
    color:#333;
    -webkit-border-radius-bottomright: 0px; 
	-moz-border-radius-bottomright: 0px;
    border-bottom-right-radius:0px;
    -webkit-border-radius-bottomleft: 0px; 
	-moz-border-radius-bottomleft: 0px;
    border-bottom-left-radius:0px;
}
/***************
 **CUSTOMINDEX**
 **************/
.minds_index > .logo{
	margin:auto;
    width:200px;
} 
.minds_index > .search{
	width:600px;
	margin:auto;
}
.minds_index > .search input{
	float:left;
    width:500px;
}

.minds_index > .search form .elgg-button-submit{
	margin-left:5px;
    padding:4px;

}
.minds_index > object{
	margin-top:10px;
	background:#000;
}

/******************
 ** CUSTOM RIVER **
 *****************/
.is_riverdash_right {
	width:200px;
	margin:0 0 20px 0;
	padding: 10px 0 0 0 !important;
	min-height:360px;
	float:right;
	padding:0;
}

.is_riverdash_left {
	width:200px;
	margin:0 0 20px 0px;
	padding: 10px 0 0 0 !important;
	min-height:360px;
	float:left;
	padding:0;
}
.is_riverdash_middle {
	float: right;
	width:500px !important;
	margin:15px 15px;
	min-height:360px;
	float:left;
	padding:0 10px;
	/*border-left:2px solid #cccccc;*/
}

#dashboard1 {
	margin-bottom:20px;
}
#river_avatar {
	text-align:center;
	margin-bottom:20px;
	padding: 0;
	padding:3px;
	text-align:center;
}
#river_avatar a img{
	width: 200px;
}
#lastloggedin {
	color:#777777;
    font-size:12px;
    font-weight:bold;
    text-align:center;
}
#dashboard_navigation {
	margin-top:20px;
    width:100%;
    font-size:12px;
}
#dashboard_navigation ul {
	margin:0 0 15px 0;
    padding:0;
}
#dashboard_navigation ul li {
	list-style:none;
	float:none;
	padding:5px;
    font-weight:bold;
    border-bottom:1px solid #cccccc;
    text-decoration:none;
}
#dashboard_navigation ul li:hover {
	background:#E5F6FF;
}

#dashboard_navigation ul li a {
    font-weight:bold;
    text-decoration:none;
}

.news-show-more{
	width:100%;
    padding:15px 0;
    text-align:center;
    background:#EFEFEF;
    color:#999;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    cursor:pointer;
}

/* ***************************************
	ANNOUNCEMENT
**************************************** */
#announcement {
   margin: 5px auto;
   padding: 7px;
   background: #ceffcc;
   border: 2px solid #18ba18;
   border-radius: 5px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
}
#announcement h2 {
  color: #000;
  font-size:14px;
  font-weight: bold;
}

/* ***************************************
	GROUPS ELEMENT
**************************************** */
.is-groups-element {
	margin-right: 3px;
	-webkit-border-radius: 5px; 
	-moz-border-radius: 5px;
	borer-radius: 5px;
	padding:3px;
    border:2px solid #dedede;	
}
.is-groups-element h2 {
   color: #333;
   font-weight: bold;
   font-size: 14px;
}
.is-groups-element li.elgg-menu-item-membership, .is-groups-element li.elgg-menu-item-feature{
  display: none;
}

/* ***************************************
	RIVER
**************************************** */
.elgg-river-responses {
	padding-bottom: 20px;
}
input.comments.inline{
	height:25px;
    font-size:11px;
}
/* ***************************************
	SUPPORT TEXT
**************************************** */
a.ishouvik {
	margin: 10px;
	height:50px;
	width: 200px;
	color: #333;
	font-weight: bold;
	font-size: 14px;
	background: white url(<?php echo $vars['url']; ?>mod/ishouvik_riverdashboard/graphics/ishouvik.jpg) no-repeat center;
	border: 3px solid #dedede;
	display:block;
}
a.ishouvik:hover {
	color: #333;
	text-decoration: none;
	border: 3px solid #333;
}


/* Comments 
 */
 

.hj-annotations-bar {
     -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
}
form.elgg-form.hj-ajaxed-comment-save {
	padding:5px;
}
form.elgg-form.hj-ajaxed-comment-save input{
	margin:0;
    height:25px;
    width:100%;
    font-size:12px;
}

/** 
 *
 * Online Status
 *
 */
 
.minds_online_status_small{
    margin: -13px 0 0;
    right:0;
    position: absolute;
    z-index:2;
}
.minds_online_status_tiny{
    margin: -9px 0 0;
    right:0;
    position: absolute;
     z-index:2;
}
.minds_online_status_medium{
    margin: -16px 0 0;
    right:0;
    position: absolute;
     z-index:2;
}
.minds_online_status_large{
    margin: -20px 0 0;
    right:0;
    position: absolute;
}
.minds_online_status_full{
    margin: -64px 0 0;
    right:0;
    position: absolute;
}

/**
 * Hover menu left instead of right
 */
.elgg-avatar > .elgg-icon-hover-menu {
	left:0;
}
.elgg-menu.elgg-menu-hover{
	margin-left:-25px;
    }