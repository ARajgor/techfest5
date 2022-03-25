<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <title>Tech-Pulse || 2022-23</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">


    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->

    <!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Aoide</title>
	<meta name="description"  content="Event Template" />
	<meta name="author" content="IG Design">
	<meta name="keywords"  content="ig design, website, design, html5, css3, jquery, creative, clean, animated, portfolio, blog, one-page, multi-page, corporate, business," />
	<meta property="og:title" content="Event Template" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="" />
	<meta property="og:image" content="" />
	<meta property="og:image:width" content="470" />
	<meta property="og:image:height" content="246" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="Event Template" />
	<meta name="twitter:card" content="" />
	<meta name="twitter:site" content="" />
	<meta name="twitter:domain" content="http://ivang-design.com/" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:description" content="Event Template" />
	<meta name="twitter:image" content="http://ivang-design.com/" />

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="theme-color" content="#212121"/>
    <meta name="msapplication-navbutton-color" content="#212121"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#212121"/>

	<!-- Web Fonts 
	================================================== -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Pinyon+Script" rel="stylesheet">
	
	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/jquery.webui-popover.css"/>
	<!-- <link rel="stylesheet" href="techfest4-master/css/style.css"> -->
	<!-- <link rel="stylesheet" href="css/style.css"/> -->
	<link rel="stylesheet" href="css/jquery.fancybox.min.css"/>
			
	<!-- Favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">

	<script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("");
</script> 	


    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/jpreloader.css" type="text/css">
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <link rel="stylesheet" href="css/plugin.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="css/owl.theme.css" type="text/css">
    <link rel="stylesheet" href="css/owl.transitions.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/jquery.countdown.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/twentytwenty.css" type="text/css">

    <!-- custom background -->
    <link rel="stylesheet" href="css/bg.css" type="text/css">

    <!-- color scheme -->
	<link rel="stylesheet" href="css/colors/magenta.css" type="text/css" id="colors">
    <link rel="stylesheet" href="css/color.css" type="text/css">

    <!-- load fonts -->
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="fonts/elegant_font/HTML_CSS/style.css" type="text/css">
    <link rel="stylesheet" href="fonts/et-line-font/style.css" type="text/css">

    <!-- RS5.0 Stylesheet -->
    <link rel="stylesheet" href="revolution/css/settings.css" type="text/css">
    <link rel="stylesheet" href="revolution/css/layers.css" type="text/css">
    <link rel="stylesheet" href="revolution/css/navigation.css" type="text/css">
    <link rel="stylesheet" href="css/rev-settings.css" type="text/css">
	
	<!-- custom font -->
	<link rel="stylesheet" href="css/font-style.css" type="text/css">

    <?php
    require "page_navbar.php";
    ?>
</head>

<style>

        /*
    * Table of contents:
    * 
    * 1.Preloader
    * 2.Primary style
    * 3.Popover
    * 4.Social fixed & logo
    * 5.Countdown
    * 6.Pages
    * 7.Media
    *
    */
    

    /* Page Loader */
    .loader {
        content: '';
        position: fixed;
        z-index: 100000;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #000;
    }

    .loader__figure {
        content: '';
        position: fixed;
        z-index: 100001;
        top: 50%;
        left: 50%;
        width: 40px;
        height: 40px;
        margin: -20px 0 0 -20px;
        pointer-events: none;
        border-radius: 50%;
        opacity: 0.4;
        border: 4px solid #de2d3e;
        background: transparent;
        animation: loaderAnim 0.7s linear infinite alternate forwards;
    }

    @keyframes loaderAnim {
        to {
            opacity: 1;
            transform: scale3d(0.5,0.5,1);
        }
    }


    body{
        font-family: 'Poppins', sans-serif;
        font-weight: 400;
        font-size: .95rem;
        line-height: 1.55;
        color: #f1f1f1;
        overflow-x: hidden;
    }
    h1, h2, h3, h4, h5, h6,
    .h1, .h2, .h3, .h4, .h5, .h6{
        font-family: 'Poppins', sans-serif;
        font-weight:400;
        margin-bottom: 0;
        line-height: 1.25;
        color: #fff;
    }
    h1, .h1 {
        font-size: 6rem;
        font-weight:500;
        letter-spacing: 2px;
        line-height: 1;
    }
    h2, .h2 {
        font-size: 4.5rem;
        letter-spacing: 2px;
        line-height: 1;
    }
    h3, .h3 {
        font-size: 3.75rem;
        letter-spacing: 1px;
        line-height: 1;
    }
    h4, .h4 {
        font-size: 2.4rem;
        line-height: 1.1;
    }
    h5, .h5 {
        font-size: 1.6rem;
        font-weight:500;
    }
    h6, .h6 {
        font-size: 0.9rem;
        text-transform: uppercase;
        font-weight:600;
        letter-spacing: 1px;
    }
    ::selection {
        background-color: rgba(0,0,0,0.7);
    }
    ::-moz-selection {
        background-color: #rgba(0,0,0,0.7);
    }

    ::selection {
        color: #fff;
    }
    ::-moz-selection {
        color: #fff;
    }
    mark{
        color:#fff;
    }
    p {
    margin-top: 0;
    margin-bottom: 0;
    }

    /* #Primary style
    ================================================== */

    .section {
        position: relative;
        width: 100%;
        display: block;
    }
    .relative {
        position: relative;
    }
    .over-hide{
        overflow: hidden;
    }
    .over-y-scroll{
        overflow-y: scroll;
        z-index: 2099;
    }
    .full-height {
        height: 100vh;
    }
    .half-height {
        height: 50vh;
    }
    .big-55-height {
        height: 55vh;
    }
    .big-60-height {
        height: 60vh;
    }
    .big-65-height {
        height: 65vh;
    }
    .big-70-height {
        height: 70vh;
    }
    .big-75-height {
        height: 75vh;
    }
    .big-80-height {
        height: 80vh;
    }
    .max-width-80 {
        max-width: 80%;
    }
    .background-white {
        background-color: #ffffff;
    }
    .background-grey {
        background-color: #fbfbfb;
    }
    .background-grey-1 {
        background-color: #f9f9f9;
    }
    .background-dark {
        background-color: #212121;
    }
    .background-dark-1 {
        background-color: #323232;
    }
    .background-dark-2 {
        background-color: #1b1b1b;
    }
    .background-black {
        background-color: #000000;
    }
    .img-wrap  {
        position:relative;
        width:100%;
    }
    .img-wrap img {
        width:100%;
        display:block;
    }
    .z-bigger  {
        z-index:10;
    }
    .padding-page-top {
        padding-top: 180px;
    }
    .padding-top-bottom {
        padding-top: 80px;
        padding-bottom: 80px;
    }
    .padding-top {
        padding-top: 80px;
    }
    .padding-bottom {
        padding-bottom: 80px;
    }
    .padding-top-bottom-big {
        padding-top: 110px;
        padding-bottom: 110px;
    }
    .padding-top-big {
        padding-top: 110px;
    }
    .padding-bottom-big {
        padding-bottom: 110px;
    }
    .padding-top-bottom-small {
        padding-top: 50px;
        padding-bottom: 50px;
    }
    .padding-top-small {
        padding-top: 50px;
    }
    .padding-bottom-small {
        padding-bottom: 50px;
    }

    /* #Popover
    ================================================== */

    #ticket-wrap{
        display: none;
        padding: 10px;
    }
    #ticket-wrap p{
        color: #fff;
        letter-spacing: 1px;
        font-weight: 300;
        font-size: 14px;
        line-height: 32px;
        text-transform: uppercase;
    }
    #ticket-wrap p em{
        opacity: 0.3;
    }
    #ticket-wrap p span:first-of-type{
        color: #e86c9a;
        font-weight: 400;
        font-size: 18px;
    }
    #ticket-wrap p span:nth-of-type(2) {
        color: #07d89d;
        font-weight: 400;
        font-size: 18px;
    }
    #ticket-wrap p span:nth-of-type(3) {
        color: #f8ae2c;
        font-weight: 400;
        font-size: 18px;
    }
    #ticket-wrap p span:nth-of-type(4) {
        color: #de2d3e;
        font-weight: 400;
        font-size: 18px;
    }
    #ticket-wrap a{
        display: block;
        margin-top: 33px;
        color: #fff;
        border-radius: 3px;
        padding: 11px 0;
        text-align: center;
        font-size: 14px;
        text-transform: uppercase;
        line-height: 14px;
        letter-spacing: 3px;
        background-color: #3a3d98;
        -webkit-transition: all 300ms linear;
        transition: all 300ms linear; 
    }
    #ticket-wrap a:hover{
        text-decoration: none;
        background-color: #9d316e;
    }

    .webui-popover {
        top: 70px !important;
        left: auto !important;
        right: 30px;
        background-color: #212121 !important;
        border: 1px solid transparent !important;
    }


    /* #Social fixed & logo
    ================================================== */


    .logo {
        position: absolute;
        top: 13px;
        left: 40px;
        display: block;
        z-index: 3002;
    }
    .logo img {
        display: block;
        height: 30px;
        width: auto;
    }
    a.ticket-link .pulse{
        -webkit-transition: all 300ms linear;
        transition: all 300ms linear; 
    }
    a.ticket-link:hover .pulse{
        -webkit-transition: all 300ms linear;
        transition: all 300ms linear; 
        color: #f8ae2c;
    }
    a.ticket-link:focus .pulse,
    a.ticket-link:active .pulse{
        -webkit-transition: all 300ms linear;
        transition: all 300ms linear; 
        color: #f8ae2c;
    }
    .ticket{
        position: absolute;
        top: 22px;
        right: 40px;
        display: block;
        z-index: 3002;
        height: 36px;
        line-height: 36px;
    }
    .ticket p{
        line-height: 36px;
        color: #fff;
        display: inline-block;
        margin: 0;
        padding: 0;
        font-size: 14px;
        letter-spacing: 1px;
        text-transform: uppercase;
        height: 36px;
        vertical-align: top;
        margin-right: 10px;
    }
    .ticket:hover{
        color: #fff;    
    }
    .ticket svg *{
        fill: none;
        stroke: currentColor;
    }
    .pulse {
        display: inline-block;
        height: 36px;
        -webkit-animation: pulse 1s linear infinite;9
        animation: pulse 1s linear infinite;
    }
    @keyframes "pulse" {
    0% {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -o-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
    }
    50% {
        -webkit-transform: scale(0.9);
        -moz-transform: scale(0.9);
        -o-transform: scale(0.9);
        -ms-transform: scale(0.9);
        transform: scale(0.9);
    }
    100% {
        -webkit-transform: scale(0.95);
        -moz-transform: scale(0.95);
        -o-transform: scale(0.95);
        -ms-transform: scale(0.95);
        transform: scale(0.95);
    }

    }
    @-webkit-keyframes "pulse" {
    0% {
    -webkit-transform: scale(1);
    transform: scale(1);
    }
    50% {
    -webkit-transform: scale(0.9);
    transform: scale(0.9);
    }
    100% {
    -webkit-transform: scale(0.95);
    transform: scale(0.95);
    }

    }

    .social-fixed {
        position: fixed;
        bottom: 30px;
        left: 20px;
        display: block;
        z-index: 3001;
        -webkit-writing-mode: vertical-lr;
        writing-mode: vertical-lr;
    }
    .social-fixed a{
        position: relative;
        text-align: center;
        margin-top: 10px;
        margin-bottom: 10px;
        font-family: 'Poppins', sans-serif;
        font-size: 13px;
        font-weight: 500;
        letter-spacing: 1px;
        padding: 5px 0; 
        padding-left: 3px;
        padding-right: 1px;
        color: #fff;
        display: inline-block;
        -webkit-transition: all 300ms linear;
        transition: all 300ms linear; 
    }
    .social-fixed a:after{
        position: absolute;
        content: '';
        height: 100%;
        width: 3px;
        left: 0;
        bottom: 0;
        z-index: -1;
        background: linear-gradient(45deg, #0947db, #07d89d);   
        -webkit-transition: all 300ms linear;
        transition: all 300ms linear; 
    }
    .social-fixed a:hover:after{
        width: 100%;
    }
    .social-fixed a:hover{
        text-decoration: none;
        color: #fff;
    }
    .social-fixed a:nth-child(2):after {
        background: linear-gradient(45deg, #ee2d29, #f8ae2c);
    }
    .social-fixed a:nth-child(3):after {
        background: linear-gradient(45deg, #3a3d98, #6f22b9);
    }

    .location-fixed {
        position: fixed;
        bottom: 30px;
        right: 25px;
        display: block;
        z-index: 3001;
        -webkit-writing-mode: vertical-lr;
        writing-mode: vertical-lr;
        transform: rotate(180deg);
    }
    .location-fixed p {
        position: relative;
        margin: 0;
        padding: 0;
        padding-top: 35px;
        font-size: 13px;
        line-height: 20px;
        letter-spacing: 1px;
    }
    .location-fixed p:before {
        position: absolute;
        content: '';
        top: 0;
        left: 0;
        background-position: left center;
        background-repeat: no-repeat;
        background-size: 20px 20px;
        background-image: url('img/pin.svg');
        width: 20px;
        height: 20px;
        z-index: 1;
        transform: rotate(90deg);
    }


    body {
        min-height: 100vh;
        color: #fff;
        color: var(--color-text);
        background-color: #fff;
        background-color: var(--color-bg);
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    /* Color schemes */
    .aoide {
        --color-text: #fff;
        --color-bg: #000;
        --color-link: #fff;
        --color-link-hover: #5d5050;
        --color-info: #5d5050;
        --color-menu: #fff;
        --color-menu-hover: #fff;
        --color-title: #fff;
        --color-subtitle: #ededed;
        --color-deco: #161616;
    }

    /* Fade effect */

    .js body {
        opacity: 0;
        transition: opacity 0.3s;
    }

    .js body.render {
        opacity: 1;
    }



    a {
        text-decoration: none;
        color: var(--color-link);
        outline: none;
    }
    a:hover {
        text-decoration: none;
    }

    a:hover,
    a:focus {
        color: var(--color-link-hover);
        outline: none;
    }

    .hidden {
        position: absolute;
        overflow: hidden;
        width: 0;
        height: 0;
        pointer-events: none;
    }

    /* Icons */
    .icon {
        display: block;
        width: 1.5em;
        height: 1.5em;
        margin: 0 auto;
        fill: currentColor;
    }

    main {
        position: relative;
        width: 100%;
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        background-image: url('img/background.jpg');
    }
    .content {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top:-150px;
        height: 100vh;
        overflow: hidden;
    }

    .content--reveal {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1002;
        width: 100%;
        pointer-events: none;
    }

    .content__inner {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        display: block;
        overflow: hidden;
    }
    .js .content__inner {
        opacity: 0;
        transition: opacity 0.3s;
    }

    .content__title {
        width: 100%;
        margin: 0;
        color: var(--color-title);
        text-transform: lowercase;
        letter-spacing: -0.05em;
        text-indent: -0.05em;
        font-family: 'Poppins', sans-serif;
        font-weight: 400;
        text-align: left;
    }

    .content__subtitle  {
        text-align: left;
        font-size: 1.25em;
        line-height: 1.25;
        font-weight: 400;
        margin: 0 auto;
        color: var(--color-subtitle);
    }
    .content__close {
        position: absolute;
        top: 70px;
        left: 40px;
        overflow: hidden;
        background-color: transparent;
        color: var(--color-link);
        padding: 0;
        display: block;
        width: 48px;
        height: 48px;
        opacity: 0;
        cursor: pointer;
        z-index: 4003;
        border: none;
        -webkit-transition: all 200ms linear;
        transition: all 200ms linear; 
    }
    .content__close:focus {
        outline: none;
    }
    .content__close:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 1;
        background-image: url('img/arrow.svg');
        background-size: 48px 48px;
        background-position: center center;
        background-repeat: no-repeat;
        -webkit-transition: all 200ms linear;
        transition: all 200ms linear; 
        margin-top:13px;
    }
    .content__close:hover:before {
        left: -100%;
        opacity: 0;
    }
    .content__close:after {
        content: '';
        position: absolute;
        top: 0;
        left: 100%;
        width: 100%;
        height: 100%;
        opacity: 1;
        background-image: url('img/arrow.svg');
        background-size: 48px 48px;
        background-position: center center;
        background-repeat: no-repeat;
        -webkit-transition: all 200ms linear;
        transition: all 200ms linear; 
        margin-top:13px;
    }
    .content__close:hover:after {
        left: 0;
        opacity: 1;
    }

    .deco-title {
        font-size: 50vw;
        margin: 0;
        pointer-events: none;
        position: absolute;
        color: var(--color-deco);
    }

    /* Scene */
    .scene {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        //pointer-events: none;
        z-index: 3;
    }

    .scene .blob-1 path {
        fill: url(#gradient-1);
    }

    .scene .blob-2 path {
        fill: url(#gradient-2);
    }

    .scene .blob-3 path {
        fill: url(#gradient-3);
    }

    .scene .blob-4 path {
        fill: url(#gradient-5);
    }

    .scene .blob-5 path {
        fill: url(#gradient-4);
    }

    .scene .blob-6 path {
        fill: url(#gradient-6);
    }

    .scene path:first-of-type {
        fill-opacity: 0.1;
    }

    .scene path:nth-of-type(2) {
        fill-opacity: 0.2;
    }

    .scene path:nth-of-type(3) {
        fill-opacity: 0.3;
    }

    .scene path:nth-of-type(4) {
        fill-opacity: 0.4;
    }

    .scene path:nth-of-type(5) {
        fill-opacity: 0.5;
    }

    .scene path:nth-of-type(6) {
        fill-opacity: 0.6;
    }

    .empty-space{
        color: transparent;
    }
    .menu {
        position: relative;
        z-index: 4;
        display: flex;
        flex-direction: column;
        margin: 0 10vw 0 0;
        /* font-size: 1vw; */
        padding: 0;
        margin-top: -50px;
        margin-right: 300px;
        align-items: flex-start;
    }
    .menu__item {
        color: var(--color-menu);
        line-height: 1.1;
        text-transform: lowercase;
        letter-spacing: -0.025em;
        text-indent: -0.025em;
        font-family: 'Poppins', sans-serif;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        position: relative;
        padding:0;
        margin: 12px;
        
    }
    .menu__item:hover,
    .menu__item:focus {
        color: var(--color-menu-hover);
    }

    .menu__item::before {
        content: '';
        width: 40%;
        height: 5px;
        background: linear-gradient(45deg, #f19872, #e86c9a);
        position: absolute;
        left: 0;
        bottom: 0;
        transform-origin: 0 0;
        transform: scale3d(0,1,1);
    }
    .menu__item--showDeco:hover::before {
        transition: transform 0.8s cubic-bezier(0.2,1,0.3,1);
        transform: scale3d(2.5,1,1);
    }
    .menu__item--showDeco::before {
        transition: transform 0.8s cubic-bezier(0.2,1,0.3,1);
        transform: scale3d(1,1,1);
    }
    .menu__item:nth-child(2)::before {
        background: linear-gradient(45deg, #0947db, #07d89d);
    }

    .menu__item:nth-child(3)::before {
        background: linear-gradient(45deg, #ee2d29, #f8ae2c);
    }

    .menu__item:nth-child(4)::before {
        background: linear-gradient(45deg, #3a3d98, #6f22b9);
    }

    .menu__item:nth-child(5)::before {
        background: linear-gradient(45deg, #9d316e, #de2d3e);
    }


    .menu__item span {
        display: block;
        position: relative;
    }

    .event-time {
        position: absolute;
        z-index: 2;
        top: 50%;
        left: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
    }
    .hero-main-title{
        position: relative;
        width: 100%;
        max-width: 440px;
        display: block;
        text-align: center;
        font-size: 42px;
        line-height: 1.25;
        letter-spacing: 2px;
        font-weight: 600;
        color: #fff;
        z-index: 1;
        margin-bottom: 40px;
    }
    .hero-title{
        position: relative;
        width: 100%;
        max-width: 440px;
        display: block;
        text-align: center;
        font-size: 23px;
        line-height: 1;
        font-weight: 600;
        color: #fff;
        z-index: 2;
    }
    .hero-subtitle{
        position: relative;
        width: 100%;
        text-align: center;
        font-size: 4vw;
        line-height: 0.8;
        font-family: 'Pinyon Script', cursive;
        font-weight: 400;
        z-index: 1;
        -webkit-transform: translate(-3px, -10px);
        -ms-transform: translate(-3px, -10px);
        transform: translate(-3px, -10px);
    }
    .hero-subtitle span{
        background: linear-gradient(45deg, #f19872, #e86c9a);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;   
    }
    .hero-subtitle span:nth-child(2) {
        background: linear-gradient(45deg, #0947db, #07d89d);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;   
    }
    .hero-subtitle span:nth-child(3) {
        background: linear-gradient(45deg, #ee2d29, #f8ae2c);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;   
    }
    .hero-subtitle span:nth-child(4) {
        background: linear-gradient(45deg, #3a3d98, #6f22b9);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;   
    }


    /* #Countdown
    ================================================== */

    ul.countdown {
        position: relative;
        width: 100%;
        max-width: 360px;
        list-style: none;
        margin: 0 auto;
        padding: 20px;
        padding-bottom: 0;
        padding-top: 25px;
        display: block;
        text-align: center;
        border-radius: 10px;
        background: linear-gradient(135deg, rgba(22,22,22,.6), rgba(33,33,33,.7));
        box-shadow: 1px 6px 5px rgba(0,0,0,0.3);
    }
    ul.countdown:after {
    content: '';
    display: block;
    clear: both;
    }
    ul.countdown li {
        position: relative;
        float: left;
        display: inline-block;
        width: 80px;
        min-height: 1px;
        margin: 0;
        padding: 0;
        padding-bottom: 30px;
        text-align: center;
        transition: all 300ms linear;
    }
    ul.countdown li span {
        position: relative;
        width: 100%;
        text-align: center;
        font-size: 40px;
        line-height: 0.9;
        letter-spacing: 1px;
        font-weight: 400;
        padding: 0;
        margin: 0;
        -webkit-text-fill-color: transparent;
        background: -webkit-linear-gradient(transparent, transparent),
                url('img/let.jpg') repeat;
        background: -o-linear-gradient(transparent, transparent);
        -webkit-background-clip: text;
        background-position:center center;
        background-size:cover;
        transition: all 300ms linear;
    }
    ul.countdown li p {
        color: #fff;
        font-size: 11px;
        line-height: 11px;
        font-weight: 300;
        text-transform: uppercase;
        text-align: center;
        letter-spacing: 1px;
        text-shadow: 1px 3px 2px rgba(0,0,0,0.06);
        padding: 0;
        margin: 0;
        margin-top: 15px;
    }

    /* #Pages
    ================================================== */
    /* #Speakers
    ================================================== */

    .speaker-image  {
        position: relative;
        width: 100%;
    }
    .speaker-image img {
        width: 100%;
        max-width: 150px;
        border: 5px solid rgba(255,255,255,0.5);
        height: auto;
        display: block;
        border-radius: 50%;
        box-shadow: 1px 6px 5px rgba(0,0,0,0.1);
    }
    .speaker-image h6 {
        position: absolute;
        top: 0;
        left: -10px;
        background-color: #212121;
        padding: 14px 6px;
        border-radius: 3px;
        margin: 0;
        display: block;
        transform: rotate(180deg);
        -webkit-writing-mode: vertical-rl;
        writing-mode: vertical-rl;
        z-index: 4;
    }

    .title-page-line {
        position: relative;
        width: 100%;
        border-bottom: 1px solid rgba(255,255,255,0.2);
    }


    .social-team {
        position: relative;
        display: block;
    }
    .social-team a{
        position: relative;
        text-align: center;
        min-width: 30px;
        margin-right: 15px;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        font-weight: 500;
        letter-spacing: 1px;
        padding: 0 5px; 
        color: #fff;
        display: inline-block;
        -webkit-transition: all 300ms linear;
        transition: all 300ms linear; 
    }
    .social-team a:after{
        position: absolute;
        content: '';
        height: 3px;
        width: 100%;
        left: 0;
        bottom: 0;
        z-index: -1;
        -webkit-transition: all 300ms linear;
        transition: all 300ms linear; 
    }
    .social-team a:hover:after{
        height: 100%;
    }
    .social-team a:hover{
        text-decoration: none;
        color: #fff;
    }
    .social-team a:first-of-type:after {
        background: linear-gradient(45deg, #0947db, #07d89d);   
    }
    .social-team a:nth-of-type(2):after {
        background: linear-gradient(45deg, #ee2d29, #f8ae2c);
    }
    .social-team a:nth-of-type(3):after {
        background: linear-gradient(45deg, #3a3d98, #6f22b9);
    }
    .social-team a:nth-of-type(4):after {
        background: linear-gradient(45deg, #9d316e, #de2d3e);
    }
    .social-team a:nth-of-type(5):after {
        background: linear-gradient(45deg, #00ac53, #23c3e0);
    }

    /* #Schedule & pass
    ================================================== */

    .schedule-time {
        position: relative;
        display: block;
    }
    .schedule-place p,
    .schedule-time p {
        position: relative;
        margin: 0;
        padding: 0;
        padding-left: 35px;
        font-size: 15px;
        line-height: 24px;
        letter-spacing: 1px;
        text-transform: uppercase;
    }
    .schedule-place p:before,
    .schedule-time p:before {
        position: absolute;
        content: '';
        top: 0;
        left: 0;
        background-position: left center;
        background-repeat: no-repeat;
        background-size: 24px 24px;
        background-image: url('img/time.svg');
        width: 24px;
        height: 24px;
        z-index: 1;
    }
    .schedule-place p {
        text-transform: none;
    }
    .schedule-place p:before {
        background-image: url('img/pin.svg');
    }

    .pass-wrap {
        position: relative;
        display: block;
        border-radius: 5px;
        border: 5px solid rgba(255,255,255,.5);
        padding: 30px;
        background: linear-gradient(45deg, rgba(255,255,255,.04), rgba(255,255,255,.3));
    }
    .pass-wrap p{
        position: relative;
        display: block;
        padding-left: 35px;
    }
    .pass-wrap p em{
        position: absolute;
        top: 0;
        left: 0;
        display: block;
        width: 20px;
        height: 100%;
        background-image: url('img/yes.svg');
        background-size: 18px 18px;
        background-repeat: no-repeat;
        background-position: center center;
    }
    .pass-wrap p em.no{
        background-image: url('img/no.svg');
    }
    .pass-wrap a{
        position: absolute;
        display: block;
        bottom: 30px;
        right: 30px;
        z-index: 2;
        padding: 7px 22px;
        border-radius: 3px;
        background: linear-gradient(45deg, #0947db, #07d89d);
        box-shadow: 1px 4px 3px rgba(0,0,0,0.1);
        -webkit-transition: all 300ms linear;
        transition: all 300ms linear; 
    }
    .pass-wrap a:hover{
        color: #fff;
        box-shadow: 0 2px 1px rgba(0,0,0,0.2);
    }
    .pass-wrap a.btn-pass-2{    
        background: linear-gradient(45deg, #ee2d29, #f8ae2c);
    }
    .pass-wrap a.btn-pass-3{    
        background: linear-gradient(45deg, #3a3d98, #6f22b9);
    }
    .pass-wrap a.btn-pass-4{    
        background: linear-gradient(45deg, #9d316e, #de2d3e);
    }
    .socgfg{    
        background: linear-gradient(45deg, #00ac53, #23c3e0);
    }

    /* #Gallery & sponsors
    ================================================== */

    .gallery {
        position: relative;
        display: block;
        cursor: pointer;
    }
    .gallery:after{
        position: absolute;
        display: block;
        content: '';
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,.6);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: 26px 26px;
        background-image: url('img/gallery.svg');
        opacity: 0;
        -webkit-transition: all 300ms linear;
        transition: all 300ms linear; 
    }
    .gallery:hover:after{
        opacity: 1;
    }

    .sponsors {
        position: relative;
        display: block;
    }
    .sponsors img {
        height: auto;
        width: calc(25% - 10px);
        display: inline-block;
        float: left;
        padding: 10px;
        border: 4px solid rgba(255,255,255,.2);
        border-radius: 3px;
        margin-right: 10px;
    }

    /* #Press
    ================================================== */

    /* #Blog
    ================================================== */

    .blog-wrap{
        position: relative;
        width: 100%;
        display: block;
        border-radius: 5px;
        border: 5px solid rgba(255,255,255,.5);
        background: linear-gradient(45deg, rgba(255,255,255,.04), rgba(255,255,255,.3));
    }
    .blog-wrap img{
        width: 100%;
        display: block;
        height: auto;
        -webkit-filter: grayscale(70%);
        filter: grayscale(70%);
        transition: all 200ms linear;
    }
    .blog-wrap img:hover{
        -webkit-filter: grayscale(0);
        filter: grayscale(0);
    }
    .blog-wrap a h6{
        transition: all 200ms linear;

    }
    .blog-wrap a:hover{
        text-decoration: none;
    }
    .go-post{
        position: relative;
        display: inline-block;
    }
    .go-post i{
        position: relative;
        display: block;
        color: #f8ae2c;
        font-family: FontAwesome;
        font-size: 24px;
        text-align: left;
        transition: all 200ms linear;
    }

    /* #Contact Page
    ================================================== */
    
    #ajax-form {
        width: 100%;
        font-family: 'Poppins', sans-serif;
        font-size: 10px;
        line-height:14px;
        color:#fff;
        margin: 0 auto;
        text-align: left;
    }
    #ajax-form label {
        display: block;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        line-height:30px;
    }
    #ajax-form input{
        position:relative;
        width: 100%;
        padding-left:20px;
        padding-right:20px;
        font-family: 'Poppins', sans-serif;
        font-weight:400;
        letter-spacing:1px;
        font-size: 13px;
        line-height:24px;
        padding-bottom: 15px;
        background:transparent;
        border:none;
        color: #fff;
        text-align: left;
        -webkit-transition: border-bottom 0.3s, color 0.3s;
        transition: border-bottom 0.3s, color 0.3s;
    }
    #ajax-form textarea {
        width: 100%;
        padding-left:20px;
        padding-right:20px;
        font-family: 'Poppins', sans-serif;
        font-weight:400;
        letter-spacing:1px;
        font-size: 13px;
        line-height:24px;
        text-align: left;
        background:transparent;
        height:100px;
        border:none;
        color: #fff;
        -webkit-transition: border-bottom 0.3s, color 0.3s;
        transition: border-bottom 0.3s, color 0.3s;
    }
    #ajax-form textarea,
    #ajax-form input {  
        border-bottom:1px solid rgba(255,255,255,.7);
    }
    .error {
        font-family: 'Poppins', sans-serif;
        font-size: 13px;
        line-height:30px;
        letter-spacing:1px;
        display: none;
        color: #ff5353;
        font-weight: 400;
        text-align: left;
    }
    #ajaxsuccess {
        background: #f2f2f2;
        color:#101010;
        font-family: 'Poppins', sans-serif;
        line-height:60px;
        height:60px;
        display: none;
        text-align: left;
        width: 100%;
        margin-left: auto;
        margin-right: auto;
        margin-top: 30px;
    }
    #ajax-form textarea:active,
    #ajax-form input:active {   
        color: #ccc;
    }
    #ajax-form textarea:active,
    #ajax-form input:hover {    
        color: #ccc;
    }
    #ajax-form textarea:focus,
    #ajax-form input:focus {     
        outline: none !important;
    }
    #ajax-form input:-ms-input-placeholder  {
        font-size: 12px;
        letter-spacing:1px;
        color:#ccc;
    }
    #ajax-form input::-moz-placeholder  {
        font-size: 12px;
        letter-spacing:1px;
        color:#ccc;
    }
    #ajax-form input:-moz-placeholder  {
        font-size: 12px;
        letter-spacing:1px;
        color:#ccc;
    }
    #ajax-form input::-webkit-input-placeholder  {
        font-size: 12px;
        letter-spacing:1px;
        color:#ccc;
    }
    #ajax-form textarea:-ms-input-placeholder  {
        font-size: 12px;
        letter-spacing:1px;
        color:#ccc;
    }
    #ajax-form textarea::-moz-placeholder  {
        font-size: 12px;
        letter-spacing:1px;
        color:#ccc;
    }
    #ajax-form textarea:-moz-placeholder  {
        font-size: 12px;
        letter-spacing:1px;
        color:#ccc;
    }
    #ajax-form textarea::-webkit-input-placeholder  {
        font-size: 12px;
        letter-spacing:1px;
        color:#ccc;
    }
    #ajax-form button {
        position: relative;
        color:#fff;
        cursor: pointer;    
        font-size:14px;
        border-radius: 3px;
        padding: 12px 35px;
        letter-spacing: 1px;
        background-color: #212121;
        border:none;
        outline:none;
        margin: 0;
        text-align: left;
        display: inline-block;
        -webkit-transition: all 250ms linear;
        -moz-transition: all 250ms linear;
        -o-transition: all 250ms linear;
        -ms-transition: all 250ms linear;
        transition: all 250ms linear;
    }
    #ajax-form button:focus,
    #ajax-form button:active {
        border:none;
        outline:none;
    }
    #ajax-form button:hover{
        box-shadow: 0 0 25px rgba(0, 0, 0, 0.1);
    }
    #ajax-form textarea:focus,
    #ajax-form input:focus,
    #ajax-form textarea:active,
    #ajax-form input:active,
    .subscribe input:active,
    .subscribe input:focus {    
        border-bottom:1px solid #f8ae2c;
    }
    #ajax-form button:hover{
        background-color: #f8ae2c;
    }
    .subscribe{
        position:relative;
        width: 100%;
        display:block;
    }
    .subscribe input{
        position:relative;
        width: 100%;
        padding-left:20px;
        padding-right:20px;
        font-family: 'Poppins', sans-serif;
        font-weight:400;
        letter-spacing:1px;
        font-size: 13px;
        line-height:24px;
        padding-bottom: 15px;
        background:transparent;
        text-align: left;
        border:none;
        color: #fff;
        -webkit-transition: border-bottom 0.3s, color 0.3s;
        transition: border-bottom 0.3s, color 0.3s;
    }
    .subscribe input {  
        border-bottom:1px solid rgba(255,255,255,.2);
    }
    .subscribe input:focus {     
        outline: none !important;
    }
    .subscribe input:focus {     
        outline: none !important;
    }
    .subscribe input:-ms-input-placeholder  {
        font-size: 14px;
        letter-spacing:1px;
        color:#ccc;
        opacity:.5;
    }
    .subscribe input::-moz-placeholder  {
        font-size: 14px;
        letter-spacing:1px;
        color:#ccc;
        opacity:.5;
    }
    .subscribe input:-moz-placeholder  {
        font-size: 14px;
        letter-spacing:1px;
        color:#ccc;
        opacity:.5;
    }
    .subscribe input::-webkit-input-placeholder  {
        font-size: 14px;
        letter-spacing:1px;
        color:#ccc;
        opacity:.5;
    }
    .subscribe button{
        position:absolute;
        font-family: 'FontAwesome';
        width:30px;
        right:0;
        top:0;
        height:30px;
        font-size: 26px;
        line-height:30px;
        text-align:center;
        border-radius:50%;
        background-color:transparent;
        padding: 0;
        margin:0;
        border:none;
        cursor:pointer;
        color: #fff;
        z-index:2;
        -webkit-transition: all 300ms linear;
        -moz-transition: all 300ms linear;
        -o-transition: all 300ms linear;
        -ms-transition: all 300ms linear;
        transition: all 300ms linear;
    }
    .subscribe button:hover{
        color: #f8ae2c;
    }
    .subscribe button:focus,
    .subscribe button:active {
        border:none;
        outline:none;
    }
    .subscribe-text{
        position:relative;
        width: 100%;
        display:block;
        padding-top:10px;
    }
    .subscribe-text p{
        text-align: left;
        font-size: 13px;
        line-height:23px;
        opacity:.7;
        font-weight:400;
    }



    /* #Footer
    ================================================== */

    .footer {
        margin: 0 auto;
        text-align: center;
    }
    .footer img{
        display: block;
        height: 30px;
        width: auto;
        margin: 0 auto;
        text-align: center;
    }
    .footer p small {
        letter-spacing: 1px;
        font-weight: 300;
    }   
    .footer .title-page-line    {
        opacity: 0.6;
    }
        

    /* #Media
    ================================================== */

    @media (max-width: 1500px) { 
    }

    @media (max-width: 1300px) {
        .social-fixed,
        .location-fixed{
            z-index:15;
        }
    }

    @media (max-width: 1199px) { 
        h1, .h1 {
            font-size: 4rem;
        }
        h2, .h2 {
            font-size: 2.5rem;
        }
        h3, .h3 {
            font-size: 2rem;
        }
        h4, .h4 {
            font-size: 1.8rem;
        }
        h5, .h5 {
            font-size: 1.3rem;
        }
        .hero-main-title{
            width: 330px;
            font-size: 22px;
            margin-bottom: 30px;
        }
        .hero-title{
            max-width: 330px;
        }
        .hero-subtitle{
            max-width: 330px;
            font-size: 6vw;
        }
        ul.countdown {
            max-width: 330px;
            padding: 15px;
            padding-top: 20px;
            padding-bottom: 0;
        }
        ul.countdown li {
            width: 75px;
            padding-bottom: 30px;
        }
        ul.countdown li span {
            font-size: 30px;
            line-height: 0.9;
            font-weight: 500;
        }
        ul.countdown li p {
            font-size: 11px;
            line-height: 11px;
            font-weight: 300;
            letter-spacing: 1px;
            margin-top: 15px;
        }
        .content__close {
            top: 20px;
            left: 50%;
            margin-left: -18px;
            width: 36px;
            height: 36px;
        }
        .content__close:before {
            background-size: 36px 36px;
        }
        .content__close:after {
            background-size: 36px 36px;
        }
        .scene .blob-1,
        .scene .blob-2,
        .scene .blob-3,
        .scene .blob-4,
        .scene .blob-5,
        .scene .blob-6{
            /* opacity: 0; */
        }
        .content__inner {
            background-color: none;
        }
    }

    @media (max-width: 991px) { 
        .hero-main-title{
            display: none;
        }
        .hero-subtitle{
            font-size: 8vw;
        }
        .event-time {
            top: auto;
            bottom: 30px;
            width: 330px;
            -webkit-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            transform: translateX(-50%);
        }
        .menu {
            margin: 0 0 0 0;
            /* font-size: 4vw; */
            margin-top: -160px;
            align-items: center;
        }
        .menu__item {
            line-height: 1;
            margin: 10px 0;
        }

        .menu__item::before {
            width: 100%;
            transition: all 300ms linear;
        }
        .menu__item--showDeco:hover::before {
            transform: scale3d(1,-1.4,1);
        }
    }

    @media (max-width: 767px) {
        .menu {
            /* font-size: 6vw; */
        }
        .menu__item {
            margin: 5px 0;
        }
        .ticket p {
            display: none;
        }
        .sponsors img {
            width: calc(50% - 10px);
        }
    }

    @media (max-width: 575px) {
        .pass-wrap a{
            left: 30px;
            right: auto;
        }
        .pass-wrap {
            padding-bottom: 45px;
        }
        .social-fixed,
        .location-fixed{
            display: none;
        }
    }


    /*header
    =======================*/

        header {
        width: 100%;
        height: 70px;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 999999;
        color:#18191b;  
        
        -webkit-transition: height 0.3s;
        -moz-transition: height 0.3s;
        -ms-transition: height 0.3s;
        -o-transition: height 0.3s;
        transition: height 0.3s;
        background:#18191b;
        border-bottom:solid 1px rgba(0,0,0,0.0);
        }
        
        header .info{
        display:none;
        color:#fff;
        text-align:right;
        padding:10px 0 10px 0;
        width:100%;
        z-index:100;
        
        border-bottom:solid 1px rgba(255,255,255,.2);
        }
        header .info .column{
        display:inline-block;
        padding:0 15px 0 15px;
        font-size:11px;
        letter-spacing:1px;
        }
        header .info .social.column{
        border:none;
        }
        header .info .social i{
        color:#fff;
        font-size:14px;
        display:inline-block;
        float:none;
        padding:0 10px 0 10px;
        }
        header .info strong{
        font-size:12px;
        }
        
        header.header-light .info{
        color:#333;
        }
        header.header-light .info .social i{
        color:#333;
        }
        header.transparent.header-light .info,
        header.transparent.header-light .info .social i{
        color:#fff;
        }
        
        header.header-bg{
        background:rgba(0,0,0,0.5);
        }

        header
        {
            background-color: #18191b !important;
            /* opacity: 0.8; */
        }
        
        header.transparent{
        background:rgba(0,0,0,0.0);
        }
        
        header.autoshow{
        top:-80px;
        }   
        
        header.autoshow.scrollOn,header.autoshow.scrollOff{
        -o-transition:.5s;
        -ms-transition:.5s;
        -moz-transition:.5s;
        -webkit-transition:.5s;
        transition:.5s;
        outline: none;  
        }
        
        header.autoshow.scrollOn{
        top:0;
        }
        
        header.autoshow.scrollOff{
        top:-80px;
        }
        
        header div#logo {
        display: table;
        height: 80px;
        float: left;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        -ms-transition: all 0.3s;
        -o-transition: all 0.3s;
        transition: all 0.3s; 
        }
        header div#logo .logo-2{
        display:none;
        }
        header div#logo a{
        display:table-cell;
        vertical-align:middle;
        }
        header nav {
        float:right;
        }
        header nav a {
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        -ms-transition: all 0.3s;
        -o-transition: all 0.3s;
        transition: all 0.3s; 
        }
        header nav a:hover {
        color: #555; 
        }
        header.smaller:not(.header-bottom):not(.side-header) #mainmenu a{
        padding-top: 18px;
        padding-bottom:18px;
        }
        header.smaller:not(.header-bottom):not(.side-header) #mainmenu li li a{
        padding-top: 0px;
        padding-bottom: 0px;
        }
        header.smaller:not(.header-bottom):not(.side-header) #mainmenu ul{
        top:70px;
        }
        header.smaller:not(.header-bottom):not(.side-header) #mainmenu ul ul{
        top:0px;
        }
        header.smaller:not(.header-bottom):not(.side-header){
        height: 70px;
        background:#18191b;
        }
        header.smaller.no-border:not(.header-bottom):not(.side-header){
        border:none;
        }
        header.smaller:not(.header-bottom):not(.side-header) div#logo {
        height:70px;
        }
        
        .logo-smaller div#logo {
        width: 150px;
        height:30px;
        line-height: 65px;
        font-size: 30px;
        }
        .logo-smaller div#logo img{
        line-height: 75px;
        font-size: 30px;
        }
        .logo-smaller  div#logo .logo-1{
        display:none;
        }
        .logo-smaller  div#logo .logo-2{
            display:inline-block;
        }
        .logo-small{
        margin-bottom:20px;
        }
            
        header.de_header_2{
            height:125px;   
        }
        
        header.de_header_2.smaller {
            height:70px;
        }
        
        header.de_header_2.smaller .info{
            position:absolute;
            opacity:0;
            z-index:-1;
        }
        
        header.header-light{
        background:#fff;
        }
        
        header.header-light.transparent{
        background:none;
        }
        
        header.smaller:not(.header-bottom).header-light{
        background:#fff;
        border-bottom-color:#eee;
        }
        
        .de-navbar-left{
        background:#151618 ;
        }
        
        .de-navbar-left #logo{
        padding:40px;
        text-align:center;
        width:100%;
        }
        
        .de-navbar-left header{
        position:relative;
        display:block;
        width:100%;
        height:100%;
        left:0;
        background:none;
        padding:30px;
        padding-right:20px;
        }
        
        
        .de-navbar-left header #mainmenu{
        float:none;
        margin:0;
        padding:0;
        }   
        
        .de-navbar-left header #mainmenu > li{
        display:block !important;
        margin:0;
        float:none;
        text-align:center;
        font-family:"Dosis";
        letter-spacing:5px;
        font-size:14px;
        padding:0;
        padding-top:10px;
        padding-bottom:10px;
        border-bottom:solid 1px rgba(255,255,255,.1);
        }   
        .de_light.de-navbar-left header #mainmenu > li{
        border-bottom:solid 1px rgba(0,0,0,.05);
        }
        .de-navbar-left header #mainmenu > li > a{
        padding:0;
        opacity:.5;
        }   
        .de_light.de-navbar-left header #mainmenu > li > a{
        color:#222;
        }   
        .de-navbar-left header #mainmenu > li a:hover{
        opacity:1;
        }
        .de-navbar-left header #mainmenu > li >a:after{
        content:none;
        }
        .de-navbar-left header nav{
        float:none !important;
        }
        
        
        /* subheader */
        #subheader{
        padding-bottom:70px;
        background:#222;
        }
        #subheader{
        -webkit-background-size: 100% auto !important;
        -moz-background-size: 100% auto !important;
        -o-background-size: 100% auto !important;
        background-size: 100% auto !important;
        }
        .de-navbar-left  #subheader{
        padding-bottom:120px;
        }
        #subheader h1 {
        color:#eceff3;
        margin-top:80px;
        font-size: 32px;
        letter-spacing: 5px;
        float: left;
        padding-right: 40px;
        margin-right: 40px;
        text-transform:uppercase;
        }
        #subheader span {
        letter-spacing:2px;
        display: inline-block;
        font-size: 15px;
        margin-top:88px;
        color:#fff;
        }
        #subheader .crumb{
        font-size:10px;
        letter-spacing:3px;
        margin-top: 90px;
        color:#fff;
        text-transform:uppercase;
        }
        .de-navbar-left.de_light #subheader h1{
        color:#222;
        }
        
        #subheader.style-2 .title-wrap{
        float:left;
        margin-top:60px;
        }
        #subheader.style-2{
        padding:150px 0 150px 0;
        }
        #subheader.style-2 h1{
        font-size:56px;
        text-align:left;
        margin:0;
        float:none;
        font-weight:bold;
        letter-spacing:1px;
        }
        #subheader.style-2 h4{
        color:#fff;
        margin-top:10px;
        font-weight:500;
        text-transform:none;
        }
        

    /* ================================================== */
    /* navigation */
    /* ================================================== */
        .header-custom:not(.header-mobile){
        height:auto;
        position:relative;
        width:100%;
        left:0;
        }
        .header-custom:not(.header-mobile) nav{
        display:block;
        width:100%;
        text-align:center;
        margin-bottom:-1px;
        float:none;
        }
        .header-custom:not(.header-mobile).s2 nav{
        text-align:left;
        background:none;
        margin:0;
        padding:0;
        float:left;
        }   
        .header-custom:not(.header-mobile) nav #mainmenu{
        display:inline-block !important;
        margin:0;
        float:none;
        padding:0;
        }
        .header-custom:not(.header-mobile) #mainmenu > li > a{
        padding: 20px 0px 20px 20px;
        line-height:20px;
        }
        .header-custom:not(.header-mobile) #mainmenu > li:first-child > a{
        padding-left:0;
        }
        .header-custom:not(.header-mobile) div#logo{
        width:100%;
        }
        .header-custom:not(.header-mobile) div#logo img{
        text-align:center;
        }
        .header-custom:not(.header-mobile) #mainmenu li > ul,
        .header-custom:not(.header-mobile) #mainmenu li:hover > ul{
        margin-top:-20px;
        }
        
        .header-custom:not(.header-mobile) #mainmenu li ul ul,
        .header-custom:not(.header-mobile) #mainmenu li:hover ul ul {
        top:20px;
        }
        .header-custom:not(.header-mobile) #mainmenu li ul.mega,
        .header-custom:not(.header-mobile) #mainmenu li:hover ul.mega{
        margin-top:60px;
        }
        .header-custom:not(.header-mobile) .menu-group{
        background:rgba(255,255,255,.02);
        margin-bottom:-1px;
        height:60px;
        padding-top:-1
        }
        .header-custom:not(.header-mobile) .form-default{
            margin-top:-5px;
        }
        .header-custom.header-light:not(.header-mobile) .menu-group{
        background:rgba(0,0,0,.05);
        }
        
        #mainmenu {
        /* font-family:"Montserrat',Arial, Helvetica, sans-serif"; */
        float: right;
        font-size:11px;
        font-weight:bold;
        letter-spacing:3px;
        text-transform:uppercase;
        }   
        
        #mainmenu ul {
        float: right;
        margin: 0px 0px;
        padding: 0px 0px;
        height: 30px;
        }
        
        #mainmenu li {
        margin: 0px 0px;
        padding: 0px 0px;
        float: left;
        display: inline;
        list-style: none;
        position: relative;
        }
        
        #mainmenu a{
        line-height:30px;
        }
            
        #mainmenu > li > a{
        line-height:35px;
        }
            
        #mainmenu a {
        display: inline-block;
        padding: 25px 0px 25px 20px;
        text-decoration: none;
        text-align:center;
        outline:none;
        font-weight:510
        }
        
        #mainmenu a,
        header.transparent.header-light #mainmenu a{
        color:#fff;
        }
        
        #mainmenu li a:after { float:right; position:relative; font-family:"FontAwesome"; content:"\f111"; font-size:6px; margin-left:20px; margin-top:0px; color:#ec167f; }
        
        #mainmenu li:last-child a:after{display:none;}  
        
        
        #mainmenu.dotted-separator li a:after{
        content:"\f111";
        font-size:6px;
        }   
        
        #mainmenu.line-separator li a:after{
        content:"/";
        font-size:14px;
        }   
        
        #mainmenu.circle-separator li a:after{
        content:"\f10c";
        font-size:9px;
        }   
        
        #mainmenu.strip-separator li a:after{
        content:"\f068";
        font-size:9px;
        }   
        
        #mainmenu.plus-separator li a:after{
        content:"\f067";
        font-size:11px;
        }   
        
        #mainmenu.square-separator li a:after{
        content:"\f096";
        font-size:11px;
        }       
        
        #mainmenu.no-separator li a:after{
        font-size:0px;
        }
        
        #mainmenu.ms-2{
            text-transform:none;
            letter-spacing:0;
        }
        
        #mainmenu.ms-2 li{
            font-size:15px;
        }
        
        #mainmenu.ms-2 > li{
            font-weight:500;
        }
        
        #mainmenu li li {
        font-size: 10px;
        font-weight: normal; 
        border-bottom: solid 1px #333;
        }
        
        #mainmenu li li:last-child {
        border-bottom: none;
        }
        

        #mainmenu li li a {
        padding: 0px 12px 0px 12px;
        border-top: none;
        color: #ccc;
        width:201px;
        border-left:none;
        text-align:left;
        }
        
        #mainmenu li li a:hover{
        color:#111;
        }
        
        #mainmenu li li a:after {
        content:none !important;
        }
        
        #mainmenu li li li a {
        background: #222327;
        }
        
        #mainmenu li li a:hover {
        color:#111;
        background: #1a8b49;
        }
        
        /* new added menu */
        
        #mainmenu li > ul {
        width: 201px;
        height: 0;
        position: absolute;
        top: 80px;
        left: 0px;
        z-index: 10;
        opacity:0;
        margin-top:5px;
        overflow:hidden;
        }   
        
        #mainmenu li:hover > ul {
        opacity:1;
        height:auto;
        margin-top:0px;
        overflow:visible;
        }   
        
        #mainmenu li ul.mega ul {
        width: 201px;
        height: auto;
        position: absolute;
        top: 80px;
        left: 0px;
        z-index: 10;
        visibility:hidden;
        opacity:0;
        margin-top:5px;
        }
        
        /* close new added menu */
        
        #mainmenu li li {
        display: block;
        float: none;
        }
        
        
        #mainmenu ul li:hover > a{
        color:#222;
        }
        
        header.header-mobile #mainmenu li ul {
        visibility: visible;
        opacity:1;
        margin-top:0px;
        }
        
        #mainmenu li ul{        
        background: #222327;
        }
        
        #mainmenu li ul ul {
        left: 100%;
        top: 0px;
        }
        
        #mainmenu li:hover > ul {
        color: #1a8b49;
        }
        
        #mainmenu select {
        padding: 10px;
        height: 36px;
        font-size: 14px;
        border: none;
        background: #ff4200;
        color:#eceff3;
        }
        
        #mainmenu select option {
        padding: 10px;
        }
        
        
        header.header-light #mainmenu > li > a,
        header.transparent.smaller.header-light #mainmenu > li > a{
        color:#333;
        }
        
        #mainmenu > li ul.mega{
        position:fixed;
        left:0;
        height:0%;
        width:100%;
        visibility: hidden;
        opacity: 0;
        overflow:hidden;
        }
        #mainmenu li:hover ul.mega{
        visibility: visible;
        opacity: 1;
        }
        #mainmenu li ul.mega > li,
        #mainmenu li ul.mega > li a{
            width:100%;
        }
        #mainmenu li ul.mega li.title{
            padding:0px 10px 10px 15px;
            text-align:left;
            color:#fff;
            font-weight:bold;
        }
        #mainmenu li ul.mega > li ul{
            position:static;
            visibility: visible;
            opacity: 1;
            left:0;
            float:none;     
            width:100%;
        }
        #mainmenu ul.mega > li ul li{
            margin:0;
            padding:0;
        }
        
        #mainmenu ul.mega > li ul li a{
            margin:0;
        }
        
        #mainmenu ul.mega > li ul li:last-child{
            border-bottom:solid 1px #333333;
        }

        #mainmenu li ul.mega .menu-content{
            background:#222327;
            padding:30px;
        }
        header.header-mobile #mainmenu > li ul.mega{
        visibility: visible;
        opacity: 1;
    }
        header:not(.header-mobile) #mainmenu > li:hover ul.mega{
            height:auto;
        }
        
        #menu-overlay{
        position:fixed;
        width:100%;
        height:100%;
        background:rgba(0,0,0,.9);
        color:#ffffff;
        z-index:10000;
        overflow-y:auto;
        display:none;
        }
        #menu-overlay.slideDown{
            top:-100%;
        }
        
        #mo-button-open{
        position:absolute;
        display:block;
        width:36px;
        right:20px;
        margin-top:22px;
        overflow:hidden;
    }

        #mo-button-open div{
            width:100%;
            height:4px;
            background:#ffffff;
            margin-bottom:7px;
        }

        #mo-button-open:hover div:nth-child(1){
            margin-left:50%;
        }

        #mo-button-open:hover div:nth-child(2){
            margin-left:25%;
        }

        #mo-button-close {
            position:absolute;
            margin-top:32px;
            right:20px;
            display: block;
            width: 40px;
            height: 40px;
            cursor: pointer;
        }

        #mo-button-close .line-1,
        #mo-button-close .line-2 {
            width: 40px;
            height: 4px;
            background: #ffffff;
            position: absolute;
            border-radius: 10px;
            right:0px;
        }

        #mo-button-close .line-1 {
            -webkit-transform: rotate(-45deg);
            -moz-transform: rotate(-45deg);
            -o-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        #mo-button-close .line-2 {
            -webkit-transform: rotate(45deg);
            -moz-transform: rotate(45deg);
            -o-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        #mo-button-close:hover .line-1,
        #mo-button-close:hover .line-2 {
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
        }



        #mo-menu ul, #mo-menu li{
            padding:0;
            margin:0;
            list-style:none;
        }

        #mo-menu{
            font-size:16px;
            margin-left:-30px;
        }

        #mo-menu a{
            text-decoration:none;
            color:#ffffff;
        }

        #mo-menu li ul a{
            color:#888888;
        }

        #mo-menu li ul a:hover{
            color:#ffffff;
        }

        #mo-menu > li > a{
            font-size:40px;
            padding:15px 0;
            display:inline-block;
        }

        #mo-menu > li{
            display:block;
            width:100%;
            opacity:0;
        }

        #mo-menu > li > ul{
            overflow: hidden;
            max-height: 0;
            transition: max-height 0.5s cubic-bezier(0, 1, 0, 1);
        }

        #mo-menu:not(.mo-center) > li > ul{
            width:100%;
        }

        #mo-menu > li > ul.full {
        max-height: 2000px;
        transition: max-height 1s ease-in-out;
        }

        #mo-menu.mo-center{
            text-align:center;
        }

        #mo-menu.mo-center > li > ul{
            margin-left:15px;
        }

        #mo-menu .menu-content ul li{
            padding:0;
            margin:0;
            list-style:none;
        }

        #mo-menu li ul.mega .menu-content{
            padding:0px;
        }
        
        /* menu toggle for mobile */
        #menu-btn{
        display:none;
        float:right;
        margin-top:5px;
        width:36px;
        height:36px;
        padding:6px;
        text-align:center;
        cursor:pointer;
        }
        
        .header-light #menu-btn{
        background:none;
        }
        
        #menu-btn:before{
        font-family:FontAwesome;
        content: "\f0c9";
        font-size:24px;
        color:#eceff3;
        }
        
        .header-light #menu-btn:before{
        color:#333;
        }
        
        #menu-btn.unclick:before{
        content: "\f0c9";
        }
        
        #menu-btn.clicked:before{
        content: "\f00d";
        }
        
        #menu-btn:hover{
        background:#fff;
        }
        
        #menu-btn:hover:before{
        color:#222;
        }
        
        /* menu toggle animated */
        
        #nav-toggle {
        float:right;
        width: 60px;
        height: 20px;
        position: relative;
        margin: 15px auto;
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
        -webkit-transition: .5s ease-in-out;
        -moz-transition: .5s ease-in-out;
        -o-transition: .5s ease-in-out;
        transition: .5s ease-in-out;
        cursor: pointer;
        padding:10px;
        z-index:100;
        }

        #nav-toggle span{
        display: block;
        position: absolute;
        height: 2px;
        width: 50%;
        background: #fff;
        border-radius: 9px;
        opacity: 1;
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
        -webkit-transition: .25s ease-in-out;
        -moz-transition: .25s ease-in-out;
        -o-transition: .25s ease-in-out;
        transition: .25s ease-in-out;
        }

        #nav-toggle span:nth-child(1) {
        top: 10px;
        }

        #nav-toggle span:nth-child(2) {
        top: 18px;
        }

        #nav-toggle span:nth-child(3) {
        top: 26px;
        }

        #nav-toggle.open span:nth-child(1) {
        top: 18px;
        -webkit-transform: rotate(135deg);
        -moz-transform: rotate(135deg);
        -o-transform: rotate(135deg);
        transform: rotate(135deg);
        }

        #nav-toggle.open span:nth-child(2) {
        opacity: 0;
        }

        #nav-toggle.open span:nth-child(3) {
        top: 18px;
        -webkit-transform: rotate(-135deg);
        -moz-transform: rotate(-135deg);
        -o-transform: rotate(-135deg);
        transform: rotate(-135deg);
        }
        
        #menu-wrapper{
        width:100%;
        height:100%;
        background:rgba(0,0,0,.95);
        position:fixed;
        top:0;
        left:0; 
        text-align:center;
        height:0;
        overflow-y:auto;
        }
        
        #menu-wrapper  nav{
        display:inline-block;
        margin:20px auto 80px auto;
        padding:0;
        float:none;
        font-size:26px;
        opacity:0;
        }




        .menu {
        position: relative;
        z-index: 4;
        display: flex;
        /* flex-direction: column; */
        /* margin-right: 400px; */
        /* font-size: 2vw; */
        font-size: 26px;
        padding: 0;
        margin-top: -50px;
        align-items: flex-start;
    }

        /* .menuu {
        position: relative;
        z-index: 4;
        display: flex;
        flex-direction: column;
        margin-left: 100px;
        font-size: 1.5vw;
        padding: 0;
        margin-top: -50px;
        align-items: flex-start;
    } */

    /* -------------------------------------------------- 
        design for 480px
        /* -------------------------------------------------- */
        @media only screen and (min-width: 480px) and (max-width: 767px) {
            .container{padding-left:30px; padding-right:30px;}
            .feature-box-image,.pricing-box{margin-bottom:30px;}
            
            }
            
            
            /* -------------------------------------------------- 
            design for 320px
            /* -------------------------------------------------- */
            @media only screen and (max-width: 480px) {
            .pf_full_width .item{
            float:left;
            width:100% !important;
            }
            
            /*.item{
            font-size:32px;
            line-height:32px;
            }*/
            
            .item i{
            font-size:24px;
            }
            
            .grid-item .pf_title{
                display:none;
            }
    }

    /* -------------------------------------------------- 
        design for 768px
        /* ================================================== */
        @media (min-width: 768px) and (max-width: 979px) {
            .slider_text {
            padding-top: 0px;
            }
            
            }
            
            
            @media only screen and (max-width: 992px) {
                
            #menu-btn{
            display:block;
            position:relative;
            float:right;
            }
            
            
            #mo-button-open{
            margin-top:10px;
            }
    }

    @media only screen and (max-width : 768px) {
        .w1, .w2, .w3, .w4, .w5 {width:100%}
    }
    
    
    /* ================================================== */
    /* widget */
    /* ================================================== */
    #sidebar{
    padding-left:20px;
    }

    
    @media only screen and (min-width: 1280px) {
        .container{
            min-width:1200px;
        }
    }

        @media only screen and (min-width: 1400px) {
            .container{
                min-width:1380px;
            }
        }

        @media(min-width:980px) and (max-width: 1199px) {
        
        header #mainmenu a{
        padding-left:5px;
        padding-right:5px;
        }
        
        #mainmenu li a:after{
        margin-left:15px;
        }
        
    }


    @media only screen and (max-width: 767px) {
        .container{padding-left:30px; padding-right:30px;}
        .feature-box-image,.pricing-box{margin-bottom:30px;}
    }
    
    @media only screen and (min-width: 1280px) {
    .container{
        min-width:1200px;
    }
}

    @media only screen and (min-width: 1400px) {
        .container{
            min-width:1380px;
        }
    }

    @media(min-width:980px) and (max-width: 1199px) {
    
    header #mainmenu a{
    padding-left:5px;
    padding-right:5px;
    }
    
    #mainmenu li a:after{
    margin-left:15px;
    }
    
    }

    /* -------------------------------------------------- 
    design for 768px
    /* ================================================== */
    @media (min-width: 768px) and (max-width: 979px) {
    .slider_text {
    padding-top: 0px;
    }
    
    }
    
    
    @media only screen and (max-width: 992px) {
        
    #menu-btn{
    display:block;
    position:relative;
    float:right;
    }
    
    
    #mo-button-open{
    margin-top:10px;
    }
    
    
    header{
    display:none;
    }
    
    header .info{
    display:none !important;
    }
    
    header.header-bg{
    background:rgba(0,0,0,1);
    }
    
    header,header.fixed {
    display:block;
    position:inherit;
    margin:0;
    padding:0;
    margin-top:0;   
    background:#000000;
    padding:15px 0 15px 0;
    }
    
    #de-sidebar{
        position:absolute !important;
        width:100%;
        right:1px;
    }
    
    
    header.side-header,
    .de_light header.side-header{
    position:absolute !important;
    display:block;
    height:60px;
    top:0;
    background:#000;
    }
    
    header.side-header #mainmenu{
    position:absolute;
    background:#000;
    margin:0;
    top:60px;
    left:0;
    width:100%;
    }
    
    header.side-header #logo .logo{
    display:none;
    }
    
    header.side-header #logo .logo-2{
    display:inline-block;
    position:absolute;
    height:30px;
    top:15px;
    left:40px;
    }
    
    header.side-header #menu-btn{
    position:absolute;
    top:8px;
    right:30px;
    height:0;
    z-index:2000;
    height:35px;
    }
    
    
    header.side-header #mainmenu li{
    display:block;
    }
    
    header.side-header #mainmenu a,
    .de_light.de-navbar-left header #mainmenu > li > a{
    display:block;
    text-align:center;
    color:#fff;
    }
    
    .de_light.de-navbar-left header #mainmenu > li{
    border-bottom:solid 1px rgba(255,255,255,.1);
    }
    
    header.side-header #mainmenu a:hover{
    background:none !important;
    }
    
    header.side-header #mainmenu a:hover{
    background:none !important;
    }
    
    header.side-header .social-icons-2{
    display:none;
    }
    
    header.autoshow{
    top:0 !important;
    }
    
    header.autoshow #mainmenu li a{
    background:none !important;
    }
    
    header.header-mobile-sticky{
    position:fixed;
    }
    
    header.de_header_2{
    height:auto;
    padding-bottom:0;
    }
    
    #subheader,.de-navbar-left  #subheader{
        padding:0;
        margin:0;
    }
    #subheader h1{
        margin:60px 0 30px 0;
    }
    #subheader span{
    display:none;
    }
    #subheader .crumb{
    display:none;
    }
    
    .de-navbar-left  #subheader{
    padding-top:70px;
    }
    
    .slider_text h1 {
    font-size: 32px;
    }
    
    .slider_text .description {
    display: none;
    }
    div#logo{
    margin-top:-15px;
    }
    #logo, #logo .inner {
     vertical-align:middle;
     height:auto;
    }
    
    #domain-check .text, #domain-check .button {
    width: 100%;
    }
    
    .container-3 .de-team-list,
    .container-4 .de-team-list{
    width:49.9%;
    float:left;
    position:relative;
    }
    
    #testimonial-full blockquote {
    padding: 20px;
    }
    
    #revolution-slider{
    }
    
    nav{
    width:100%;
    }
    
    #mainmenu{
    display:none;
    float:none;
    z-index:200;
    width:100%;
    margin:0;
    padding:0;
    }
    
    #mainmenu a{
    text-align:left;
    padding-left:0;
    padding-top:10px !important;
    padding-bottom:10px !important;
    }
    
    #mainmenu li li a,
    #mainmenu li li li a{
    padding-left:0;
    }
    
    #mainmenu a:hover{
    background:#111 !important;
    }
    
    
    #mainmenu li ul{
    background:none;
    display:block;
    position:inherit;
    margin:0;
    width:100%;
    }
    
    #mainmenu li{
    border-bottom:solid 1px #333;
    margin:0;
    width:100%;
    display:block;
    letter-spacing:3px;
    }
    
    #mainmenu li a:after{
    display:none;
    }
    
    #mainmenu li:last-child{
    margin-bottom:30px;
    }
    
    #mainmenu li ul{
    border-top:solid 1px #333;
    top:auto;
    }
    
    #mainmenu li ul a{
    width:100%;
    background:none;
    border:none;
    }
    
    #mainmenu li ul li{
    border:none;
    padding-left: 40px !important;
    }
    
    #mainmenu li ul li a{
    display:block;
    }
    
    #mainmenu li ul li:last-child{
    border-bottom:none;
    margin:0;
    }
    
    #mainmenu li ul li:last-child a{
    border-bottom:none;
    }
    #mainmenu li a{
    color:#eceff3;
    }
    
    #mainmenu  li li a{
    font-size:10px;
    }
    
    #mainmenu  li li a:hover{
    color:#fff;
    }
    
    
    header.header-mobile #mainmenu{
    display:none;
    float:none;
    z-index:200;
    width:100%;
    margin:0;
    padding:0;
    }
    
    header.header-mobile.header-custom #mainmenu{
    padding:0 40px 0 40px;
    }
    
    header.header-mobile #mainmenu a{
    text-align:left;
    padding-top:30px !important;
    padding-bottom:10px !important;
    }
    
    header.header-mobile #mainmenu a:hover{
    background:none !important;
    }
    
    
    header.header-mobile #mainmenu li ul{
    display:block;
    position:inherit;
    margin:0;
    width:100%;
    }
    
    header.header-mobile #mainmenu li{
    border-bottom:solid 1px #333;
    margin:0;
    width:100%;
    display:block;
    letter-spacing:3px;
    }
    
    header.header-mobile.header-light #mainmenu li{
    border-bottom-color:#eee;
    }
    
    header.header-mobile #mainmenu li a:after{
    display:none;
    }
    
    header.header-mobile #mainmenu li:last-child{
    margin-bottom:30px;
    }
    
    header.header-mobile #mainmenu li ul{
    border-top:none;
    top:auto;
    }
    
    header.header-mobile #mainmenu li ul a{
    width:100%;
    background:none;
    border:none;
    }
    
    header.header-mobile #mainmenu li ul li{
    border:none;
    padding-left: 40px !important;
    }
    
    header.header-mobile #mainmenu li ul li:first-child{
    border-top:solid 1px #333;
    }
    header.header-mobile.header-light #mainmenu li ul li:first-child{
    border-top-color:#eee;
    }
    
    header.header-mobile #mainmenu li ul li a{
    display:block;
    border-bottom:solid 1px #333;
    }
    header.header-mobile.header-light #mainmenu li ul li a{
    border-bottom-color:#eee;
    }
    
    header.header-mobile #mainmenu li ul li:last-child{
    border-bottom:none;
    margin:0;
    }
    
    header.header-mobile #mainmenu li ul li:last-child a{
    border-bottom:none;
    }
    
    header.header-mobile #mainmenu li a{
    color:#eceff3;
    }
    
    header.header-mobile.header-light #mainmenu li a{
    color:#404040;
    }
    
    header.header-mobile #mainmenu  li li a{
    font-size:10px;
    }
    
    header.header-mobile #mainmenu  li li a:hover{
    color:#fff;
    }
    
    header.header-mobile #mainmenu li ul{
    height:0;
    overflow:hidden;
    position:relative;
    left:0;
    }
    
    
    header.header-mobile #mainmenu li ul li ul li:last-child{
    border-bottom:solid 1px #333;   
    }
    header.header-mobile.header-light #mainmenu li ul li ul li:last-child{
    border-bottom-color: #eee;  
    }
    
    header.header-mobile #mainmenu li ul li ul{
    margin-bottom:10px;
    }
    
    header.header-mobile #mainmenu > li > span{
        width:36px;
        height:36px;
        background:url(images-event/ui/arrow-down.png) center no-repeat;
        position:absolute;
        right:0;
        margin-top:10px;
        z-index:1000;
        cursor:pointer;
    }
    header.header-mobile.header-light #mainmenu > li > span{
        background:url(images-event/ui/arrow-down-invert.png) center no-repeat;
    }
    
    header.header-mobile #mainmenu li span.active{
        background:url(images-event/ui/arrow-up.png) center no-repeat;
    }
    header.header-mobile.header-light #mainmenu li span.active{
        background:url(images-event/ui/arrow-up-invert.png) center no-repeat;
    }
    
    header.header-mobile #mainmenu li > ul > li > span{
        width:36px;
        height:36px;
        background:url(images-event/ui/arrow-down.png) center no-repeat;
        position:absolute;
        right:0;
        margin-top:-45px;
        z-index:1000;
        cursor:pointer;
    }
    header.header-mobile.header-light #mainmenu li > ul > li > span{
        background:url(images-event/ui/arrow-down-invert.png) center no-repeat;
    }
    
    header.header-mobile #mainmenu > li > ul > li > span.active{
        background:url(images-event/ui/arrow-up.png) center no-repeat;
    }
    header.header-mobile.header-light #mainmenu > li > ul > li > span.active{
        background:url(images-event/ui/arrow-up-invert.png) center no-repeat;
    }
    
    header.header-mobile #mainmenu li ul li a{
        border-bottom:solid 1px #333;
    }
    header.header-mobile.header-light #mainmenu li ul li a{
        border-bottom-color:#eee;
    }
    header.header-mobile #mainmenu li ul li:last-child > a{
        border-bottom:none !important;
    }
    
    header.header-mobile #mainmenu li ul.mega ul {
        height: auto;
    }
    
    #mainmenu li ul.mega{
    position:fixed;
    left:0;
    width:100%;
    margin-top:30px;
    display:block;
    padding:0;
    }
    #mainmenu li ul.mega > li{
        width:100%;
    }
    #mainmenu li ul.mega > li ul{
        position:static;
        visibility: visible;
        opacity: 1;
        left:0;
        float:none;     
        width:100%;
    }
    #mainmenu ul.mega > li ul li{
        margin:0;
        padding:0;
    }

    #mainmenu li ul.mega .menu-content{
        background:none;
        padding:30px;
    }
    
    header.header-mobile #mainmenu ul.mega li{
        border-bottom:solid 1px #333;
        padding-left:0 !important;
    }
    
    header.header-mobile #mainmenu ul.mega li.title{
        border-bottom:solid 1px #777 !important;
    }
    
    header.header-mobile #mainmenu ul.mega li:first-child{
        border:none;
    }
    
    .de_tab.tab_steps  .de_nav{
    text-align:center;
    }
    
    .de_tab.tab_steps .de_nav li{
    display:block;
    margin:0;
    padding:0;
    }
    
    .de_tab.tab_steps .de_nav li span{
    margin:0;
    margin-bottom:40px;
    display:inline-block;
    }
    
    .de_tab.tab_steps .de_nav li .v-border{
    border:none;
    }
    
    .container .col-md-3{ margin-bottom:30px; }
    .container .col-md-4{ margin-bottom:30px; }
    .container .col-md-5{ margin-bottom:30px; }
    .container .col-md-6{ margin-bottom:30px; }
    .container .col-md-7{ margin-bottom:30px; }
    .container .col-md-8{ margin-bottom:30px; }
    .container .col-md-9{ margin-bottom:30px; }
    .container .col-md-10{ margin-bottom:30px; }
    .container .col-md-11{ margin-bottom:30px; }
    .container .col-md-12{ margin-bottom:30px; }
    
    .hidden-phone{
        display:none;
    }

    .grid_gallery .item{
    width:100%;
    }
    
    .de-navbar-left #wrapper{
    overflow:hidden;
    width:100%;
    }
    
    .de-navbar-left .inner-padding{
    padding:30px;
    }
    
    .de-navbar-left header #mainmenu > li > a {
    padding-left:40px;
    }
    
    .side-bg .image-container{ 
    position:relative; 
    width:100%; 
    height:400px !important; 
    top:0;
    margin-bottom:60px;
    }
    
    .mobile-hide{
    display:none;
    }
    
    .display-table{
    display:block;
    }

    .display-table [class*="col-"] {
    float: none;
    display: block;
    vertical-align: top;
    }
    
    h2.hero{
    font-size:28px;
    letter-spacing:5px;
    }

    #filters li.pull-right{
    float:none !important;
    }
    
    .sm-hide{
    display:none;
    }
    
    #mainmenu li ul.mega .menu-content{
        padding:0;
        padding-left:40px;
    }
    
    .mega [class*="col-"] {
        margin-bottom:0;
    }
    
    .mega .spacer-single{
        height:0;
    }
    
    header.header-mobile #mainmenu li ul.mega li.title{
        border-top:solid 1px #333333;
        padding-top:15px;
    }
    
    header.header-mobile #mainmenu li ul.mega li ul li:last-child{
        border-bottom:none;
        margin-bottom:0;
    }
    
    header.header-mobile #mainmenu li ul.mega li ul{
        margin-bottom:0;
    }
    
    .sm-mt0{
        margin-top:0;
    }
    
    .sm-mb-30{
        margin-bottom:30px;
    }
    
    .sm-no-padding{
        padding:0;
    }
    
    }


    /* -------------------------------------------------- 
    custom for 320px & 480px 
    /* -------------------------------------------------- */
    @media only screen and (max-width: 767px) {
    .container{padding-left:30px; padding-right:30px;}
    .feature-box-image,.pricing-box{margin-bottom:30px;}
    
    .de_tab .de_nav li {
    display: block;
    width: 100%;
    }
    
    .pf_full_width .item{
    float:left;
    width:49.9% !important;
    }

    /*.item{
    font-size:48px;
    line-height:48px;
    }*/
    
    .item i{
    font-size:36px;
    }
    
    #de-sidebar{
    width:100%;
    display:block;
    position:relative;  
    }   
        
    .pricing-2-col .pricing-box, .pricing-3-col .pricing-box, .pricing-4-col .pricing-box, .pricing-5-col .pricing-box {
    width: 100%;
    }
    
    .container-3 .de-team-list,
    .container-4 .de-team-list{
    width:100%;
    float:left;
    position:relative;
    }
    
    .countdown-section {
    font-size: 12px;
    }
    .countdown-amount {
        font-size: 36px;
    }
    
    .de-navbar-left header #mainmenu > li > a {
    padding-left:40px;
    }
    
    .de-navbar-left .inner-padding{
    padding:0px;
    }
    
    h1.title-2{
    font-size:16px;
    letter-spacing:10px;
    line-height:2em;
    }
    
    
    header.de_header_2{
        height:auto;    
    }
    
    .sm-no-padding{
        margin-top:0;
    }
    
    .mt-sm-none{
        margin-top:0;
    }
    
    .text-slider{   
    font-size:5vh;
    }
    
    .schedule-item .sc-time {
        width: 100%;
        padding-bottom: 20px;
        float: none;
    }
    .schedule-item .sc-pic {
        width: 80px;
    }
    .schedule-item .sc-pic img {
        width: 60px;
    }
    .schedule-item .sc-name {
        padding-top: 5px;
    }
    .schedule-item .sc-info {
        float: none;
        display: block;
        width: 100%;
        clear: both;
        padding-top: 30px;
    }
    .schedule-item .sc-info h3 {
        margin-bottom: 10px;
    }
    
    h1.title-3{
        font-size:10vw;
    }
    
    .countdown-s1 .countdown-show4 .countdown-section {
        width: 18vw;
    }
    
    
    /* -------------------------------------------------- 
    design for 480px
    /* -------------------------------------------------- */
    @media only screen and (min-width: 480px) and (max-width: 767px) {
    .container{padding-left:30px; padding-right:30px;}
    .feature-box-image,.pricing-box{margin-bottom:30px;}
    
    }
    
    
    /* -------------------------------------------------- 
    design for 320px
    /* -------------------------------------------------- */
    @media only screen and (max-width: 480px) {
    .pf_full_width .item{
    float:left;
    width:100% !important;
    }
    
    /*.item{
    font-size:32px;
    line-height:32px;
    }*/
    
    .item i{
    font-size:24px;
    }
    
    .grid-item .pf_title{
        display:none;
    }
    }
    }
</style>
<body id="homepage">

    <div id="wrapper">

        <!-- header begin -->

        <!-- header close -->

            <section id="section-features">

                <body class="aoide">

		
			
			


                    <!-- <header class="transparent">
                    
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="logo">
                                                <a href="index.php">
                                                    <img class="logo" src="img/logo.png" alt="" style="height: 50px;width: 190px;">
                                                </a>
                                            </div>
                    
                                            <span id="menu-btn"></span>
                    
                                                <nav>
                                                    <ul id="mainmenu" class="ms-2">
                                                        <li><a href="index.php">Home<span></span></a></li>
                                                    <li><a href="about_us.php">About<span></span></a></li>
                                                    <li><a href="aoidetempalte/index.html">Events<span></span></a></li>
                                                    <li><a href="news_update.php">News Update<span></span></a></li>
                                                    <li><a href="package.php">Packages<span></span></a></li>
                                                    <li><a href="accomodation_form.php">Accomodation<span></span></a></li>
                                                    <li><a href="dashboard.php">Your Account<span></span></a></li>
                                                    <li><a href="logout_user.php"><input type="button" value="logout" style="background-color: #ec167f;color:white;border:none;height:40px; border-radius:10px;font-family: FontAwesome;""><span></span></a></li>
                                                    </ul>
                                                </nav>
                                                
                    
                                        </div>
                                        
                    
                    
                                    </div>
                                </div>
                            </header> -->
                    
                                
                            <div class="content" style="padding-bottom :100px;">
                                        <nav class="menu">
                                            <a href="#" class="menu__item">Technical<div class="empty-space">-</div>Event</a>
                                            <a href="#" class="menu__item">Partial <div class="empty-space">-</div>Technical<div class="empty-space">-</div>Event</a>
                                            <a href="#" class="menu__item">General <div class="empty-space">-</div>Non-Technical<div class="empty-space">-</div>Event</a>
                                            <a href="#" class="menu__item">Workshops</a>
                                        </nav>
                                
                                    <!-- <div class="event-time">
                                        <nav class="menuu">
                                        <a href="#" class="menu__item">summit<div class="empty-space">-</div>speakers</a>
                                        <a href="#" class="menu__item">schedule<div class="empty-space">-</div>&amp;<div class="empty-space">-</div>pass</a>
                                        <a href="#" class="menu__item">gallery<div class="empty-space">-</div>&amp;<div class="empty-space">-</div>sponsors</a>
                                        <a href="#" class="menu__item">latest<div class="empty-space">-</div>press</a>
                                        <a href="#" class="menu__item">stay<div class="empty-space">-</div>informed</a>
                                    </nav>
                                    </div> -->
                                    
                                    <svg class="scene" width="1440" height="800" preserveAspectRatio="xMinYMid slice" viewBox="0 0 1440 800">
                                        <defs>
                                            <linearGradient id="gradient-1" x1="0%" y1="0%" x2="100%" y2="100%">
                                                <stop offset="0" stop-color="#1CB5E0"/>
                                                <stop offset="1" stop-color="#000046"/>
                                            </linearGradient>
                                            <linearGradient id="gradient-2" x1="0%" y1="0%" x2="100%" y2="100%">
                                                <stop offset="0" stop-color="#0947db"/>
                                                <stop offset="1" stop-color="#07d89d"/>
                                            </linearGradient>
                                            <linearGradient id="gradient-3" x1="0%" y1="0%" x2="100%" y2="100%">
                                                <stop offset="0" stop-color="#2980B9"/>
                                                <stop offset="1" stop-color="#FFFFFF"/>
                                            </linearGradient>
                                            <linearGradient id="gradient-4" x1="0%" y1="0%" x2="100%" y2="100%">
                                                <stop offset="0" stop-color="#a8ff78"/>
                                                <stop offset="1" stop-color="#78ffd6"/>
                                            </linearGradient>
                                            <linearGradient id="gradient-5" x1="0%" y1="0%" x2="100%" y2="100%">
                                                <stop offset="0" stop-color="#9d316e"/>
                                                <stop offset="1" stop-color="#de2d3e"/>
                                            </linearGradient>
                                        </defs>
                                        <g class="blob-1">
                                            <path d="M 382.9,69.64 C 375.1,14.22 296.4,-55.5 243.8,-46.79 191.2,-38.08 156.2,-36.94 118.6,-50.49 80.98,-64.04 52.11,-60.24 17.7,-25.44 -16.71,9.355 -52.82,94.93 -55.27,139.3 -57.72,183.7 -49.76,192.9 -19.05,201.3 11.66,209.7 54.92,201.4 92.87,229.8 130.8,258.2 166.4,326.2 204.1,345.9 241.8,365.6 259.2,351.7 284.3,318.5 309.4,285.3 344.5,223.8 362.8,182.2 381.1,140.6 390.7,125.1 382.9,69.64 Z" class="M 5153,15.13 C 5039,-791.7 3862,-1807 3080,-1680 2294,-1552 1772,-1536 1211,-1733 649,-1930 218.2,-1875 -295.2,-1369 -807.6,-862 -1347,382.9 -1383,1028 -1420,1675 -1302,1809 -843.9,1931 -385.4,2053 260.6,1933 826.6,2345 1391,2758 1924,3749 2487,4035 3049,4321 3308,4119 3682,3635 4058,3153 4581,2258 4854,1653 5127,1047 5271,821 5153,15.13 Z"/>
                                            <path d="M 334.7,65.61 C 325.3,7.593 270.9,-34.46 218.5,-24.5 172.3,-15.71 125.4,-34.55 78.72,-32.93 47.06,-31.83 19.45,-9.456 0.2296,18.39 -25.16,55.18 -48.95,99.72 -44.87,147.7 -42.59,174.6 -14.84,187.6 8.083,186.8 43.43,185.5 81.49,185.3 113.3,207.7 149.3,233 174.3,278.3 216.4,291.8 245.2,301 273.1,277.4 290.9,252.8 328.2,201.4 345.4,131.6 334.7,65.61 Z" class="M 4434,-44.03 C 4293,-887.2 3482,-1499 2701,-1354 2012,-1227 1312,-1500 615.5,-1477 142.6,-1462 -269,-1137 -555.8,-730.8 -935.1,-195.7 -1289,452.3 -1230,1150 -1194,1541 -780,1732 -438.8,1719 88.59,1702 657.1,1697 1131,2023 1670,2392 2042,3051 2671,3246 3100,3381 3516,3037 3782,2680 4338,1933 4594,916 4434,-44.03 Z"/>
                                            <path d="M 301.9,109.3 C 293.3,47.28 237.7,6.176 183,4.292 145.9,3.015 112.1,-30.68 74.57,-21.98 34.9,-12.78 7.294,25.18 -14.63,60.94 -31.83,88.99 -48.3,127.3 -33.65,159.7 -23.55,182 5.521,181.2 25.57,177 78.49,166 132.1,191.4 170.7,232.8 188.4,251.7 212.7,272.9 238.5,266.6 270.8,258.7 289.6,222 298.2,188.1 304.7,162.7 305.6,135.5 301.9,109.3 Z" class="M 3945,591.6 C 3818,-310.8 2988,-908.9 2170,-935.4 1618,-953.9 1113,-1444 553.6,-1318 -38.52,-1184 -450.6,-632.1 -777.1,-111.6 -1035,296.3 -1280,853.2 -1061,1324 -911.5,1651 -477,1639 -177.4,1578 612.1,1417 1412,1787 1988,2391 2252,2663 2615,2972 2999,2879 3481,2766 3761,2232 3891,1739 3987,1369 4001,973.5 3945,591.6 Z"/>
                                            <path d="M 270.4,134.6 C 261.3,81.3 218.6,43.99 174.5,26.82 143.8,14.87 112.1,-6.204 79.55,4.503 28.51,21.31 -15.53,68.11 -29.07,126.5 -32.74,142.3 -24.82,163.4 -8.561,165.9 28.45,171.7 65.61,154.5 102.4,169 144.1,185.5 173.6,227.9 216.1,241.9 241.4,250.2 263.3,218.9 267.7,191.8 270.8,173 273.7,153.5 270.4,134.6 Z" class="M 3476,960.3 C 3339,184.5 2702,-358.8 2044,-608.5 1587,-781.2 1113,-1088 627.8,-933.3 -133.9,-687.9 -790.9,-7.384 -993,842.2 -1048,1072 -929.2,1380 -686.7,1416 -134.6,1501 419.9,1250 968.6,1462 1591,1702 2030,2318 2666,2521 3043,2642 3369,2188 3434,1793 3481,1520 3526,1235 3476,960.3 Z"/>
                                            <path d="M 229.8,128.8 C 219.9,79.76 177.5,48.4 135.7,37.08 107.6,29.47 77.51,16.26 50.19,30.71 15.21,49.21 -17.25,84.68 -19.56,130.1 -20.49,148.3 -1.181,158.1 12.81,156.9 54.23,153.4 97.99,150.9 137.1,171.2 160,183.1 183.3,204.3 209.2,198.6 228.3,194.4 233.1,167.4 231.8,148.1 231.3,141.6 231.1,135.1 229.8,128.8 Z" class="M 2870,875.1 C 2721,162 2089,-294.5 1466,-458.8 1047,-569.7 597.1,-761.2 189.4,-551.2 -332.2,-282.3 -816.4,233.3 -850.7,895.2 -864.5,1158 -576.8,1301 -368.5,1285 249.9,1234 902.6,1198 1487,1493 1829,1667 2176,1974 2562,1892 2847,1829 2920,1439 2901,1157 2891,1062 2890,967.4 2870,875.1 Z"/>
                                            <path d="M 200.5,139 C 193.3,94.06 156.4,62.79 118.8,51.33 93.26,43.54 64.65,33.02 39.95,47.98 14.83,63.19 -8.802,89.75 -10.59,123.7 -11.24,136 -3.241,146.5 7.448,149.2 27.58,154.4 47.84,148.7 68.23,150 102,152.2 134.8,162.2 166.7,174.9 178.5,179.6 194.3,175.5 199.1,161 201.4,154.1 201.7,146.3 200.5,139 Z" class="M 2432,1023 C 2325,370.1 1775,-85.13 1214,-251.5 831.7,-365.3 405.3,-518.1 36.61,-300.3 -338.1,-78.65 -690.2,307.2 -716.7,801.3 -727.3,979.5 -607.2,1133 -448,1172 -147.8,1248 154.5,1165 458.7,1184 962.8,1216 1453,1361 1928,1547 2103,1616 2340,1555 2412,1343 2446,1244 2450,1130 2432,1023 Z"/>
                                            <path d="M 181,126.6 C 174.1,88.88 143,63.51 111.8,52.84 96.72,47.68 81.29,42.27 65.2,44.56 48.48,46.94 34.04,57.55 22.98,71.55 12.53,84.78 0.8786,106.1 11.19,122.3 23.14,141.1 47.82,136.4 66.4,136.9 100.4,137.9 132.8,153.9 166.7,152.9 177.4,152.6 183.1,137.9 181,126.6 Z" class="M 2142,843.1 C 2040,294.9 1574,-74.14 1108,-229.7 884.1,-305 654.1,-383.9 413.9,-350.6 164.3,-315.8 -51.66,-161 -216.3,42.61 -372.4,235.2 -546.1,545.3 -392,780.8 -214.3,1055 154.5,985.6 431.8,993.8 938.2,1008 1422,1241 1928,1225 2088,1221 2172,1008 2142,843.1 Z"/>
                                        </g>
                                        <g class="blob-2">
                                            <path d="M 392.8,547.7 C 427.8,592.2 497.3,600.5 536.4,565.8 561.4,545.7 595.7,539.8 618,516 635.7,498.1 638.6,470.8 637.7,445.6 636.8,425 636.9,404.2 640.7,384.2 645.7,352.9 651.8,320.4 642.8,288.1 629.8,234.1 578.5,188 524,187.1 490.6,186 460.7,202.9 437.5,224.4 411.5,245.9 384.3,266.1 355.4,283.4 329.4,301.4 305.1,326.1 299.7,359.5 294.8,392.4 309.6,425.9 328.3,453.7 348.9,485.7 371.1,516.5 392.8,547.7 Z" class="M -907.7,1516 C -413.5,1881 567.9,1950 1120,1664 1473,1499 1957,1451 2272,1255 2522,1108 2563,884.2 2550,677.2 2538,508 2539,337.1 2593,172.8 2663,-84.28 2749,-351.2 2622,-616.5 2439,-1060 1714,-1439 944.9,-1446 473.3,-1455 51.08,-1316 -276.5,-1140 -643.6,-963.2 -1028,-797.3 -1436,-655.2 -1803,-507.3 -2146,-304.4 -2222,-30.07 -2291,240.2 -2082,515.3 -1818,743.7 -1528,1007 -1214,1260 -907.7,1516 Z"/>
                                            <path d="M 340.9,428.6 C 353.4,444.4 366.9,459.6 379.5,475.4 403.4,504.3 427.7,533.6 456.8,557.3 489.9,575 531.5,568.6 556.1,543.8 577.6,531.8 603,522 614.9,498.7 630.2,460.2 616.4,415 630.3,376.1 638.9,344.4 645.6,309 632.7,275.9 618.1,227.4 561.8,193.1 515.5,207.3 484.3,217.6 466.6,247.4 441,265.8 407,291.9 363.4,305.4 336.1,339.9 317.5,364.6 321.9,402.7 340.9,428.6 Z" class="M -1640,537.5 C -1464,667.3 -1273,792.2 -1095,921.9 -758,1159 -414.9,1400 -3.984,1595 463.4,1740 1051,1687 1398,1484 1702,1385 2060,1305 2228,1113 2444,797.1 2250,425.8 2446,106.3 2567,-154.1 2662,-444.9 2480,-716.8 2274,-1115 1479,-1397 824.9,-1280 384.3,-1196 134.4,-950.9 -227.1,-799.7 -707.2,-585.3 -1323,-474.4 -1708,-191.1 -1971,11.82 -1909,324.8 -1640,537.5 Z"/>
                                            <path d="M 364,422.9 C 394.4,463.7 427.7,505 472.9,529.1 501.3,545.1 534.9,541.5 562.1,529.8 580.3,523.3 600.7,514.7 608,495.2 616.7,457.8 605,416.3 619.9,380.5 630.8,351 639.4,318.4 631.4,285.6 625.5,259.5 608.2,233.9 582.7,223.9 556.1,212.3 523.9,216.4 504.6,236.5 471.3,263.8 439.6,294.5 399.5,312 377.2,324.8 354.4,341.5 346.9,367.9 343.9,387.1 352.3,407.1 364,422.9 Z" class="M -1314,490.7 C -885.1,825.8 -414.9,1165 223.3,1363 624.4,1494 1099,1465 1483,1369 1740,1315 2028,1245 2131,1085 2254,777.4 2089,436.5 2299,142.4 2453,-99.89 2574,-367.7 2461,-637.1 2378,-851.5 2134,-1062 1774,-1144 1398,-1239 943.5,-1205 671,-1040 200.8,-816.1 -246.8,-564 -813.1,-420.2 -1128,-315.1 -1450,-177.9 -1556,38.93 -1598,196.6 -1480,360.9 -1314,490.7 Z"/>
                                            <path d="M 408.3,450.5 C 435.7,490.6 480.5,521.6 527.9,523.4 552.1,523.7 578.3,513.4 587.8,489.9 598.4,457.4 588.6,419.1 605.1,388.6 617,358.2 631.3,326.4 626.7,291.7 625.4,265.1 603.9,241.4 579.2,233.5 562.9,227.8 545.2,230.5 531.6,239.3 489.8,262.6 459.6,301.6 417.1,323.9 399.2,335.6 380.7,351.8 378.5,375.4 377.1,402.8 393.4,428 408.3,450.5 Z" class="M -688.8,717.4 C -301.9,1047 330.7,1301 999.9,1316 1342,1319 1712,1234 1846,1041 1995,774.1 1857,459.5 2090,209 2258,-40.75 2460,-302 2395,-587 2377,-805.5 2073,-1000 1724,-1065 1494,-1112 1244,-1090 1052,-1017 462,-826 35.55,-505.7 -564.5,-322.5 -817.3,-226.4 -1079,-93.31 -1110,100.5 -1129,325.6 -899.2,532.6 -688.8,717.4 Z"/>
                                            <path d="M 434.2,460.1 C 459.4,497.5 508.6,519.5 549.5,506.1 573.6,496.7 585.5,469.4 584.7,443.4 590.7,393.5 619.2,350 618.4,298.4 617.7,273.1 595.7,246.3 569.9,246.9 540.6,247.7 517.9,267.6 498.5,286.7 467.6,315.7 432.8,343.2 415.3,383.7 408.6,409.5 417.9,438.3 434.2,460.1 Z" class="M -323.1,796.3 C 32.73,1103 727.4,1284 1305,1174 1645,1097 1813,872.7 1802,659.1 1887,249.2 2289,-108.1 2278,-531.9 2268,-739.8 1957,-959.9 1593,-955 1179,-948.4 858.7,-784.9 584.8,-628 148.5,-389.8 -342.9,-164 -590,168.7 -684.6,380.6 -553.3,617.2 -323.1,796.3 Z"/>
                                            <path d="M 446,458.6 C 471.3,494.2 524.6,510.3 557.7,485.8 573.8,473.9 571.9,450.1 574.8,431.1 579.9,397.6 598.7,369.4 605.6,336.4 609.8,316.6 613,294.3 604.6,274.5 597.6,258 576.8,251.3 560.8,256.8 530.7,267.1 508.3,289.4 485.9,310.3 460.7,333.8 435.9,361.7 429.7,397.7 426.2,418.5 433.3,440.8 446,458.6 Z" class="M -156.5,783.9 C 200.8,1076 953.4,1209 1421,1007 1648,909.6 1621,714.1 1662,558.1 1734,282.9 2000,51.25 2097,-219.8 2156,-382.4 2202,-565.6 2083,-728.3 1984,-863.8 1690,-918.8 1464,-873.6 1039,-789 723.2,-605.9 406.9,-434.2 51.08,-241.2 -299.1,-12 -386.6,283.7 -436.1,454.6 -335.8,637.7 -156.5,783.9 Z"/>
                                            <path d="M 451.9,456.5 C 474.7,489.7 523.3,505.1 554.4,482.8 566.2,474.4 563.5,457 562.3,443.4 557.8,394.7 589.2,351.4 580.7,303.2 578.3,289.3 558.1,289.3 547.2,293.4 503.5,310 466,342.4 444.9,384.3 434,406 437,434.8 451.9,456.5 Z" class="M -73.17,766.7 C 248.8,1039 935,1166 1374,982.7 1541,913.7 1503,770.8 1486,659.1 1422,259.1 1866,-96.6 1745,-492.5 1712,-606.7 1426,-606.7 1272,-573 655.4,-436.7 125.9,-170.5 -172,173.6 -325.9,351.9 -283.6,588.4 -73.17,766.7 Z"/>
                                        </g>
                                        <g class="blob-3">
                                            <path d="M 173.8,427.1 C 141.9,428.2 110,441.6 88.2,465.2 72.4,482.5 62.6,504.9 59.9,528 57.8,544.1 59,560.4 58.3,576.6 57.7,596.5 55.5,616.6 48.3,635.3 41,655.6 31.4,675.6 29.5,697.4 27.7,717.8 34.7,738.1 45.4,755.3 62.6,783.8 88.7,806.2 117.6,822.4 160.6,846.7 210.5,859.2 259.9,855.9 294.6,853.3 329.3,841.6 356.2,819.1 376.4,802.2 391.6,779.6 400,754.7 411.5,721.5 411.8,685.4 406.2,651 402.6,629.5 396.7,608.3 388.6,588.1 378.4,563.9 362.6,542.2 343,524.8 323.5,506.4 302.7,489.6 282.1,472.6 261.7,456.5 239.9,441 214.9,433 201.6,428.8 187.7,426.9 173.8,427.1 Z" class="M 397.4,-2057 C 43.67,-2047 -310.1,-1933 -551.9,-1731 -727.1,-1583 -835.8,-1391 -865.7,-1193 -889,-1056 -875.7,-916.3 -883.5,-777.8 -890.1,-607.5 -914.5,-435.6 -994.4,-275.6 -1075,-102 -1182,69.08 -1203,255.6 -1223,430.1 -1145,603.7 -1027,750.8 -835.8,994.6 -546.3,1186 -225.8,1325 251.1,1533 804.4,1640 1352,1611 1737,1589 2122,1489 2420,1297 2644,1152 2813,958.7 2906,745.7 3034,461.7 3037,152.9 2975,-141.3 2935,-325.3 2869,-506.6 2780,-679.4 2666,-886.4 2491,-1072 2274,-1221 2058,-1378 1827,-1522 1598,-1667 1372,-1805 1130,-1938 853.2,-2006 705.7,-2042 551.6,-2058 397.4,-2057 Z"/>
                                            <path d="M 270.9,500.2 C 211.4,463.7 131.3,458.8 96.6,505 67.9,535.1 76.8,555.9 71.2,597 66.7,628.3 39.6,694.8 49.6,728.3 64.9,771.1 104.8,807.1 147.6,827.2 220.4,861.9 308.1,851.5 351,799.8 382.5,762.5 388.1,708.4 375.3,657 362.7,604.3 333.3,550.6 287.7,511.6 282.5,507.3 276.4,503.7 270.9,500.2 Z" class="M 1474,-1431 C 814.4,-1744 -73.88,-1785 -458.7,-1390 -777,-1133 -678.3,-954.8 -740.4,-603.3 -790.3,-335.5 -1091,233.3 -979.9,519.9 -810.3,886 -367.8,1194 106.9,1366 914.2,1663 1887,1574 2363,1131 2712,812.4 2774,349.7 2632,-90.02 2492,-540.8 2166,-1000 1661,-1334 1603,-1371 1535,-1401 1474,-1431 Z"/>
                                            <path d="M 293.7,543 C 246.1,501.3 173.5,495.7 134.5,530.1 103.6,551.6 102,579 90.1,613.7 80.9,640.3 52.5,673.7 56.2,704.5 62.7,744.3 92.8,782.3 128.2,807 188.2,849.3 269.3,854.8 316.5,817 351.2,789.8 365.1,743.7 362.1,696.9 359.4,648.9 341.7,597.3 307.1,555.6 303,551.1 298.2,546.9 293.7,543 Z" class="M 1727,-1065 C 1199,-1422 394.1,-1470 -38.39,-1176 -381.1,-991.6 -398.8,-757.2 -530.8,-460.4 -632.8,-232.9 -947.8,52.83 -906.7,316.3 -834.7,656.7 -500.8,981.8 -108.3,1193 557.1,1555 1457,1602 1980,1279 2365,1046 2519,651.6 2486,251.3 2456,-159.3 2259,-600.7 1876,-957.4 1830,-995.9 1777,-1032 1727,-1065 Z"/>
                                            <path d="M 306.5,585.5 C 271.3,542.9 209.4,527.6 170.8,551.4 141,565.4 122.7,593.1 107.5,621.2 95.7,642.6 79.3,662.6 78,689.5 77.9,724.6 98.5,761.5 125.5,787.7 171.3,832.7 240.7,849.2 286.9,823.6 320.8,805.3 339.5,767.9 343.5,727.3 348.1,685.8 340.2,639 316.2,598.2 313.4,593.8 309.8,589.5 306.5,585.5 Z" class="M 1869,-701.6 C 1479,-1066 792.2,-1197 364.2,-993.3 33.69,-873.6 -169.3,-636.6 -337.8,-396.3 -468.7,-213.2 -650.6,-42.12 -665,188 -666.1,488.2 -437.6,803.9 -138.2,1028 369.7,1413 1139,1554 1652,1335 2028,1179 2235,858.6 2279,511.3 2330,156.3 2243,-244 1977,-593 1946,-630.6 1906,-667.4 1869,-701.6 Z"/>
                                            <path d="M 280.7,608.1 C 246.6,575.5 192.1,568.4 161.1,591.9 136.8,606.5 123.6,631.5 113.1,656.6 105,675.7 92.7,694 94,716.8 97.1,746.3 118.2,775.4 143.7,795 187.1,828.6 248.2,836 285.6,810.2 313,791.7 325.6,758.4 325.4,723.9 325.5,688.6 314.5,650 290.2,617.8 287.4,614.4 284,611.1 280.7,608.1 Z" class="M 1583,-508.3 C 1205,-787.2 600.4,-847.9 256.6,-646.9 -12.89,-522 -159.3,-308.1 -275.7,-93.44 -365.5,69.94 -502,226.5 -487.5,421.5 -453.2,673.9 -219.2,922.8 63.63,1090 544.9,1378 1223,1441 1637,1220 1941,1062 2081,777.4 2079,482.2 2080,180.3 1958,-149.9 1688,-425.3 1657,-454.4 1620,-482.7 1583,-508.3 Z"/>
                                            <path d="M 276,636.4 C 245.2,609.2 196.1,603.3 168.1,622.9 146.2,635.1 134.3,656 124.8,676.9 117.5,692.9 106.4,708.2 107.6,727.2 110.4,751.8 129.4,776.1 152.4,792.5 191.6,820.5 246.7,826.7 280.4,805.2 305.1,789.7 316.5,761.9 316.3,733.1 316.4,703.6 306.4,671.4 284.5,644.5 282,641.7 278.9,639 276,636.4 Z" class="M 1531,-266.2 C 1189,-498.9 644.7,-549.4 334.2,-381.7 91.36,-277.4 -40.61,-98.58 -146,80.2 -226.9,217.1 -350,347.9 -336.7,510.5 -305.7,720.9 -94.95,928.8 160.1,1069 594.8,1309 1206,1362 1580,1178 1854,1045 1980,807.3 1978,560.9 1979,308.6 1868,33.16 1625,-196.9 1597,-220.9 1563,-244 1531,-266.2 Z"/>
                                            <path d="M 257.2,650 C 230.7,627.8 188.4,623 164.2,639 145.4,648.9 135.1,666 127,683.1 120.6,696.1 111.1,708.6 112.1,724.2 114.5,744.2 130.9,764.1 150.8,777.5 184.5,800.4 232,805.4 261,787.9 282.4,775.2 292.2,752.5 292,729 292.1,704.9 283.5,678.6 264.6,656.6 262.4,654.3 259.8,652.1 257.2,650 Z" class="M 1322,-149.9 C 1028,-339.8 559.4,-380.9 291,-244 82.49,-159.3 -31.74,-13.04 -121.6,133.2 -192.5,244.4 -297.9,351.4 -286.8,484.8 -260.2,655.9 -78.32,826.1 142.4,940.7 516.1,1137 1043,1179 1364,1030 1602,921.1 1710,726.9 1708,525.9 1709,319.7 1614,94.74 1404,-93.44 1380,-113.1 1351,-131.9 1322,-149.9 Z"/>
                                        </g>
                                        <g class="blob-4">
                                            <path d="M 778.8,689.3 C 754.9,648.4 714.8,625.1 674.8,609.6 610.7,584.7 536.9,587.1 473.7,622.5 455.8,632.5 438,652.5 439.7,676.1 440.7,689.6 454.1,694.4 464,697.6 478.2,702.1 495.8,703.7 504.4,718.9 509.6,728.1 502.1,738.5 495.9,744.7 482.9,757.8 462.4,762.9 455.4,782.5 450.3,796.8 457.2,811.5 462.3,824.1 471.5,847 480.1,870.5 493.1,891 514.4,924.6 545.4,953 583.1,957.3 613.1,960.8 647.6,952.4 668.5,925.6 680.8,909.8 668.1,883.1 682.7,869.2 699,853.8 723.8,862.9 742.6,850.4 757.9,840.3 767,822.3 773.8,804.5 786.8,770.4 793.7,730.6 781.8,696.2 781,693.9 780,691.4 778.8,689.3 Z" class="M 5319,-184.4 C 4818,-613.8 3977,-858.4 3137,-1021 1792,-1283 244.2,-1257 -1082,-885.7 -1457,-780.7 -1831,-570.7 -1795,-322.9 -1774,-181.2 -1493,-130.8 -1285,-97.2 -987.4,-49.95 -618.1,-33.15 -437.7,126.4 -328.6,223.1 -485.9,332.3 -616,397.4 -888.8,534.9 -1319,588.4 -1466,794.2 -1573,944.4 -1428,1099 -1321,1231 -1128,1472 -947.5,1718 -674.8,1934 -227.9,2286 422.5,2585 1213,2630 1843,2666 2567,2578 3005,2297 3263,2131 2997,1851 3303,1705 3645,1543 4165,1638 4560,1507 4881,1401 5072,1212 5214,1025 5487,667.2 5632,249.3 5382,-111.9 5365,-136.1 5344,-162.3 5319,-184.4 Z"/>
                                            <path d="M 753,704 C 727.4,655.2 681,626 633.8,610.1 577,591 510.2,599.1 460.3,641.1 449.3,650.4 442.5,671.1 452.4,683.2 467.1,701 495.4,693 508.6,712.5 516.9,724.7 507.5,742.6 496.5,750.3 483,759.8 464.4,766.8 460.3,785.6 455.4,808.3 470,827.3 478,846.6 492.2,880.9 515.1,913.8 548,926.1 576.2,936.7 612.4,931.4 633.7,905.5 644,893 638.1,874.5 633.1,860.8 629.7,851.5 622.1,837.2 631,830.6 648.8,817.3 671.4,833.3 692,833.1 715.1,832.8 738.2,818.9 749.6,794.8 762.9,766.7 767.2,731 753,704 Z" class="M 4778,-30 C 4241,-542.4 3267,-849 2277,-1016 1085,-1217 -316,-1131 -1363,-690.4 -1594,-592.8 -1736,-375.4 -1529,-248.4 -1220,-61.5 -626.5,-145.5 -349.6,59.25 -175.4,187.4 -372.6,375.3 -603.4,456.1 -886.7,555.9 -1277,629.4 -1363,826.8 -1466,1065 -1159,1265 -991.6,1467 -693.6,1827 -213.2,2173 477,2302 1069,2413 1828,2358 2275,2086 2491,1955 2367,1760 2262,1616 2191,1519 2032,1369 2218,1299 2592,1160 3066,1328 3498,1326 3983,1322 4467,1176 4707,923.4 4986,628.4 5076,253.5 4778,-30 Z"/>
                                            <path d="M 733.5,718.1 C 710.1,672.5 666.5,646.6 623.8,629.3 576,609.9 519.6,606.7 472.6,634.7 460.3,642 446.8,660.2 453.9,674.9 464.5,696.6 494,691.8 509.8,707.6 519.5,717.3 515,736.1 504.9,745.3 490.6,758.5 469.3,766 464.2,787.1 459.1,808.2 473.3,826.2 481,844.3 494.1,875.1 516.6,904.3 547.4,912 570.9,917.9 600.9,912.8 616.7,890.6 626.7,876.6 616.8,858.6 613.4,843.6 611.4,834.5 610.7,821.4 620.1,817.1 634.5,810.5 649.8,816.5 664.1,819.2 682.2,822.6 703.9,824.1 718.4,807.8 738.7,785 747.8,745.9 733.5,718.1 Z" class="M 4369,118.1 C 3878,-360.8 2963,-632.7 2067,-814.4 1064,-1018 -118.8,-1052 -1105,-757.6 -1363,-681 -1646,-489.9 -1497,-335.6 -1275,-107.7 -655.9,-158.1 -324.4,7.8 -120.9,109.6 -215.3,307.1 -427.2,403.6 -727.2,542.2 -1174,621 -1281,842.6 -1388,1064 -1090,1253 -928.6,1443 -653.8,1767 -181.7,2073 464.5,2154 957.5,2216 1587,2162 1918,1929 2128,1782 1920,1593 1849,1436 1807,1340 1792,1203 1990,1158 2292,1088 2613,1151 2913,1180 3293,1215 3748,1231 4052,1060 4478,820.5 4669,409.9 4369,118.1 Z"/>
                                            <path d="M 708.1,726.8 C 684,683.8 642.3,659.6 601.1,642.5 566.4,628.1 526.7,619 490.2,634.7 477.3,640.3 459.3,653.7 462.9,669.2 468.2,691.6 497.4,690 512.3,704.1 524.8,715.9 518.2,740.2 504.8,750.5 490.9,761.2 470.4,770.4 468.7,789.9 466.1,820.5 487.2,845.6 502.3,869.3 517.7,893.4 548.1,901.7 574.7,893.2 586.2,889.5 602,884.2 603.8,868.4 605.8,850.6 596.2,830.9 606.6,814.8 615.2,801.4 632.3,804.1 644.9,806.3 661.6,809.2 681.1,816.1 696.3,803.5 712.4,790.1 717.5,764.3 713.7,743.3 712.6,737.4 710.9,731.8 708.1,726.8 Z" class="M 3836,209.4 C 3330,-242.1 2455,-496.2 1591,-675.7 863.1,-826.9 30.17,-922.5 -735.6,-757.6 -1006,-698.9 -1384,-558.1 -1308,-395.4 -1197,-160.2 -584.5,-177 -271.9,-28.95 -9.696,94.95 -148.2,350.1 -429.3,458.3 -720.9,570.6 -1151,667.2 -1187,871.9 -1241,1193 -798.5,1457 -481.7,1706 -158.7,1959 479.1,2046 1037,1957 1278,1918 1610,1862 1648,1696 1690,1509 1488,1302 1706,1133 1887,992.7 2246,1021 2510,1044 2860,1075 3269,1147 3588,1015 3926,874.1 4033,603.1 3953,382.6 3930,320.7 3895,261.9 3836,209.4 Z"/>
                                            <path d="M 664.8,728.2 C 631.2,667.3 565,629.4 500.7,642.1 488.1,644.6 471.1,653.5 470.9,669 470.7,684.7 489.7,688 500.7,694 512.5,700.5 523.9,715.8 518.6,732.1 511.3,754.3 488.5,762.1 477.5,780.8 471.2,791.6 476.7,804.4 481.4,814.3 493.3,839.3 507.1,866.2 531.1,876.7 547.9,884.1 571.5,883.2 584,866.6 597.3,849 585.7,821.6 600.2,804.4 613.8,788.2 635,789.7 652.7,786.9 664.8,785 673.2,770.5 671.5,756.8 670.2,746.8 669.4,736.6 664.8,728.2 Z" class="M 2928,224.1 C 2223,-415.4 833.7,-813.3 -515.3,-679.9 -779.7,-653.7 -1136,-560.2 -1141,-397.5 -1145,-232.6 -746.1,-198 -515.3,-135 -267.8,-66.75 -28.58,93.9 -139.8,265.1 -292.9,498.1 -771.3,580.1 -1002,776.4 -1134,889.8 -1019,1024 -920.2,1128 -670.6,1391 -381,1673 122.5,1783 474.9,1861 970.1,1852 1232,1677 1511,1493 1268,1205 1572,1024 1858,854.1 2302,869.9 2674,840.4 2928,820.5 3104,668.2 3068,524.4 3041,419.4 3024,312.3 2928,224.1 Z"/>
                                            <path d="M 631.8,730.9 C 603.5,677.9 545.7,644.4 490.3,657.6 479.9,660.1 480.3,678 489.7,683.2 503.7,690.8 519.9,701.8 521.7,720.9 523.5,740.1 507.9,754.5 495.5,765.6 486.8,773.3 477.1,786.1 481.5,799.1 490.4,825.5 504.6,850.7 525.9,865.6 540.9,876.1 566.2,876.9 578.1,859.4 590.7,840.9 584.1,813.5 598.8,796.1 610.5,782.3 630.4,780.1 638,762.5 642.6,751.8 636.7,740.1 631.8,730.9 Z" class="M 2235,252.4 C 1641,-304.1 428.8,-655.8 -733.5,-517.2 -951.7,-490.9 -943.3,-303 -746.1,-248.4 -452.4,-168.6 -112.5,-53.1 -74.73,147.4 -36.97,349.1 -364.3,500.3 -624.4,616.8 -806.9,697.6 -1010,832.1 -918.1,968.6 -731.4,1246 -433.5,1510 13.38,1667 328.1,1777 858.9,1785 1109,1602 1373,1407 1234,1120 1543,937.1 1788,792.1 2206,769.1 2365,584.2 2462,471.9 2338,349.1 2235,252.4 Z"/>
                                            <path d="M 605.4,726 C 583.9,681.3 537.7,649.8 492.2,660.3 481.4,662.8 486.4,681.2 495.3,684.8 508.5,690.1 521.5,701.5 523.5,718.9 525.3,735 516.4,749.5 506.5,760.4 498.9,768.8 489.3,781.1 493.3,793.4 499.6,812.6 515.2,825.6 530.5,835.6 543.1,843.9 564.7,842.9 573,826.4 581.3,809.8 587.6,792 599.3,778.2 607.9,768.1 616,753.3 610.7,739.4 609,734.8 607.4,730.2 605.4,726 Z" class="M 1681,201 C 1230,-268.4 260.9,-599.1 -693.6,-488.9 -920.2,-462.6 -815.3,-269.4 -628.6,-231.6 -351.7,-175.9 -78.93,-56.25 -36.97,126.4 0.794,295.5 -185.9,447.8 -393.6,562.2 -553.1,650.4 -754.5,779.6 -670.6,908.7 -538.4,1110 -211.1,1247 109.9,1352 374.2,1439 827.4,1428 1002,1255 1176,1081 1308,894 1553,749.1 1734,643.1 1904,487.6 1792,341.7 1757,293.4 1723,245.1 1681,201 Z"/>
                                        </g>
                                        <g class="blob-5">
                                            <path d="M 1229,381.2 C 1281,409.5 1344,410.5 1403,415.2 1429,417.7 1458,422.8 1481,407.4 1512,387.7 1523,347.2 1509,316.1 1495,283.1 1469,253.2 1467,216.9 1466,152.1 1504,90.5 1504,23.4 1505,-0.0188 1490,-21.74 1467,-30.8 1442,-40.62 1414,-37.76 1388,-33.1 1332,-23.1 1285,12.77 1250,55.49 1219,94.63 1164,112.5 1112,115.6 1089,116.7 1063,130.5 1055,152.2 1046,181.3 1057,208.7 1069,234 1091,280.8 1136,313.5 1177,346.9 1193,359.3 1210,370.4 1229,381.2 Z" class="M -777.7,1456 C -121,1624 674.7,1630 1420,1658 1748,1673 2115,1703 2405,1612 2797,1494 2935,1254 2759,1069 2582,872.4 2253,694.6 2228,478.8 2216,93.49 2696,-272.8 2696,-671.8 2708,-811 2519,-940.2 2228,-994 1912,-1052 1559,-1035 1230,-1008 523.2,-948.3 -70.45,-735 -512.5,-481 -904,-248.2 -1599,-142 -2255,-123.5 -2546,-117 -2874,-34.95 -2975,94.08 -3089,267.1 -2950,430 -2799,580.5 -2521,858.7 -1952,1053 -1434,1252 -1232,1325 -1018,1391 -777.7,1456 Z"/>
                                            <path d="M 1255,378.6 C 1309,404.6 1372,400.5 1430,410.5 1457,414.8 1489,404 1502,380.3 1517,354.4 1510,324.1 1495,300.3 1479,273.7 1461,248.5 1461,215.9 1463,147.6 1504,86.49 1500,18.09 1498,-14.13 1463,-34.18 1428,-33.14 1378,-30.23 1324,-13.56 1295,27.12 1272,60.79 1243,93.34 1203,112.6 1169,128.8 1132,134.4 1101,154.2 1076,170.8 1076,207.4 1091,230.1 1101,245.6 1119,255.7 1132,270.5 1167,304 1197,343.3 1239,370.3 1244,373.5 1249,375.6 1255,378.6 Z" class="M -449.3,1440 C 232.7,1595 1028,1570 1761,1630 2102,1656 2506,1591 2670,1450 2860,1296 2771,1116 2582,974.7 2380,816.5 2152,666.7 2152,472.8 2178,66.73 2696,-296.6 2645,-703.3 2620,-894.9 2178,-1014 1736,-1008 1104,-990.6 422.1,-891.5 55.85,-649.6 -234.6,-449.4 -600.9,-255.9 -1106,-141.4 -1536,-45.06 -2003,-11.76 -2394,106 -2710,204.7 -2710,422.3 -2521,557.3 -2394,649.4 -2167,709.5 -2003,797.5 -1561,996.7 -1182,1230 -651.4,1391 -588.3,1410 -525.1,1422 -449.3,1440 Z"/>
                                            <path d="M 1267,366.4 C 1321,392.2 1386,381.6 1444,395.7 1472,402 1501,381.5 1504,354.5 1508,326.4 1493,301.8 1478,277 1465,256 1456,231.1 1458,206.4 1463,142.5 1501,80.91 1496,15.8 1494,-15.3 1457,-33.15 1424,-32.43 1387,-29.82 1345,-20.25 1321,9.29 1298,38.8 1282,74.21 1250,98.11 1210,127.6 1161,140.4 1117,162.6 1090,175.4 1095,214.2 1116,229.7 1131,240.3 1145,252 1158,266 1191,301.7 1220,343.2 1267,366.4 Z" class="M -297.8,1368 C 384.2,1521 1205,1458 1938,1542 2291,1579 2658,1457 2696,1297 2746,1130 2557,983.6 2367,836.1 2203,711.3 2089,563.2 2115,416.4 2178,36.4 2658,-329.8 2594,-717 2569,-901.9 2102,-1008 1685,-1004 1218,-988.2 687.4,-931.3 384.2,-755.7 93.74,-580.2 -108.3,-369.6 -512.5,-227.5 -1018,-52.19 -1637,23.92 -2192,155.9 -2533,232 -2470,462.7 -2205,554.9 -2015,617.9 -1839,687.5 -1674,770.7 -1258,983 -891.4,1230 -297.8,1368 Z"/>
                                            <path d="M 1273,351 C 1314,371.2 1362,369.7 1407,369.8 1427,370.4 1446,374.1 1465,375.8 1487,376 1500,352.2 1497,334.6 1493,316.9 1483,304.5 1474,290.8 1460,270.1 1447,246 1448,220.4 1452,150.6 1492,86.49 1490,16.84 1489,-11.44 1455,-29.67 1425,-28.44 1394,-27.98 1360,-21.9 1339,2.072 1322,20.33 1316,45.73 1300,64.88 1263,109 1211,139.7 1157,159.5 1143,165 1126,172 1123,186.7 1121,201.4 1129,214.1 1141,223.2 1169,241.7 1187,268.9 1207,293.8 1225,317 1246,336.5 1273,351 Z" class="M -222,1276 C 295.8,1396 902.1,1387 1470,1388 1723,1391 1963,1413 2203,1424 2481,1425 2645,1283 2607,1179 2557,1073 2430,999.7 2317,918.2 2140,795.1 1976,651.8 1988,499.6 2039,84.57 2544,-296.6 2519,-710.8 2506,-878.9 2077,-987.3 1698,-980 1306,-977.3 876.8,-941.1 611.6,-798.6 396.9,-690 321.1,-539 119,-425.1 -348.3,-162.8 -1005,19.76 -1687,137.5 -1864,170.2 -2079,211.8 -2117,299.2 -2142,386.6 -2041,462.1 -1889,516.2 -1536,626.2 -1308,788 -1056,936 -828.2,1074 -563,1190 -222,1276 Z"/>
                                            <path d="M 1295,340 C 1335,359.4 1382,351.9 1426,351.2 1440,351.7 1459,354.5 1469,342.5 1481,329.3 1474,309.1 1465,296.6 1454,281.2 1443,267 1442,249.9 1441,216.6 1447,182.9 1456,150.9 1468,106.1 1491,62.3 1487,15.27 1485,-10.69 1455,-26.7 1428,-26.92 1397,-26.59 1363,-17.36 1346,6.839 1335,24.08 1331,45.14 1317,61.85 1294,89.26 1268,114.3 1239,137.7 1219,153.4 1194,162 1176,178.4 1161,194.2 1176,216 1188,229.1 1223,266.5 1246,316.3 1295,340 Z" class="M 55.85,1211 C 561,1326 1155,1281 1710,1277 1887,1280 2127,1297 2253,1226 2405,1147 2317,1027 2203,952.7 2064,861.1 1925,776.7 1912,675 1900,477 1976,276.6 2089,86.35 2241,-180 2531,-440.5 2481,-720.1 2456,-874.5 2077,-969.7 1736,-971 1344,-969 914.7,-914.1 700,-770.2 561,-667.7 510.5,-542.5 333.7,-443.1 43.22,-280.2 -285.2,-131.3 -651.4,7.864 -904,101.2 -1220,152.4 -1447,249.9 -1637,343.8 -1447,473.4 -1296,551.3 -853.5,773.7 -563,1070 55.85,1211 Z"/>
                                            <path d="M 1316,322 C 1349,337.5 1392,337 1427,325.7 1440,320.3 1450,303.4 1441,291.6 1425,271.1 1429,245 1432,221.1 1441,153.6 1479,91.97 1485,22.72 1487,-1.013 1460,-19.56 1435,-24.24 1402,-28.47 1363,-13.3 1350,16.32 1343,36.99 1332,54.03 1318,72.92 1283,111.6 1235,142.5 1215,191.8 1206,212.7 1225,233.6 1240,248.3 1264,274.5 1282,306.8 1316,322 Z" class="M 321.1,1104 C 737.9,1196 1281,1193 1723,1126 1887,1094 2014,993.1 1900,923 1698,801.1 1748,645.9 1786,503.8 1900,102.4 2380,-264 2456,-675.8 2481,-816.9 2140,-927.2 1824,-955 1407,-980.2 914.7,-890 750.5,-713.9 662.1,-591 523.2,-489.6 346.3,-377.3 -95.71,-147.3 -701.9,36.4 -954.5,329.5 -1068,453.8 -828.2,578.1 -638.8,665.5 -335.7,821.3 -108.3,1013 321.1,1104 Z"/>
                                            <path d="M 1324,301.4 C 1346,310.6 1377,312.3 1400,297 1414,287.4 1415,271 1411,256.5 1399,221.9 1422,183.4 1434,146.7 1448,101.5 1474,57.24 1473,10.72 1472,-13.48 1442,-25.38 1416,-19.85 1394,-14.87 1375,4.724 1369,25.13 1358,62.76 1318,89.1 1296,124.5 1277,153.2 1258,185.1 1262,216.9 1266,249.7 1288,274.2 1312,294.3 1316,297.7 1320,300.1 1324,301.4 Z" class="M 422.1,981.2 C 700,1036 1092,1046 1382,955.1 1559,898 1571,800.5 1521,714.2 1369,508.5 1660,279.6 1811,61.38 1988,-207.4 2317,-470.6 2304,-747.2 2291,-891.1 1912,-961.8 1584,-928.9 1306,-899.3 1066,-782.8 990.5,-661.5 851.5,-437.7 346.3,-281.1 68.48,-70.62 -171.5,100 -411.5,289.7 -360.9,478.8 -310.4,673.8 -32.56,819.5 270.6,939 321.1,959.2 371.6,973.5 422.1,981.2 Z"/>
                                        </g>
                                    </svg>
                                
                            </div>
                                
                                <!-- Primary Page Layout
                                ================================================== -->
                        
                                <div class="content content--reveal">
                                    <div class="content__inner">
                                        <div class="section full-height over-y-scroll" id="boxscroll-1">
                                            <div class="section" id="boxscroll-in-1">
                                                <!-- Page start -->
                                                <div class="section padding-top-big">
                                                    <div class="container" style="padding-top: 60px;">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h2 class="content__title">Technical Events</h2>
                                                            </div>
                                                            <div class="col-lg-4 mt-3">
                                                                <h3 class="content__subtitle">To achieve great things, two things are needed: a plan and not quite enough time.</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>							
                                                <div class="section padding-top-bottom">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="offset-md-3 col-md-9">
                                                                <h4>Spartance</h4>
                                                                <div class="title-page-line mt-4 mb-5"></div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="speaker-image">
                                                                    
                                                                    <img src="img/t1.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9 mt-4 mt-md-0">
                                                                <h5>director &amp; founder</h5>
                                                                <p><em>Maximum 4 Student in group</em></p>
                                                                <p class="mt-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
                                                                <div class="social-team mt-4">
                                                                    <a href="group4_registration.php?event=Spartance">Register</a>
                                                                </div>
                                                            </div>
                    
                                                            <div class="title-page-line mt-4 mb-5"></div>
                    
                                                            <div class="offset-md-3 col-md-9">
                                                                <h4 style="padding-top: 50px;">Access Denied</h4>
                                                                <div class="title-page-line mt-4 mb-5"></div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="speaker-image">
                                                                    
                                                                    <img src="img/cyber-security-banner.jpg" alt="" style="height: 150px;">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9 mt-4 mt-md-0">
                                                                <h5>director &amp; founder</h5>
                                                                <p><em>Individual Event</em></p>
                                                                <p class="mt-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
                                                                <div class="social-team mt-4">
                                                                    <a href="single_registration.php?event=Access_Denied">Register</a>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="title-page-line mt-4 mb-5"></div>
                    
                                                            <div class="offset-md-3 col-md-9">
                                                                <h4 style="padding-top: 50px;">Blind Coding</h4>
                                                                <div class="title-page-line mt-4 mb-5"></div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="speaker-image">
                                                                    
                                                                    <img src="img/t1.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9 mt-4 mt-md-0">
                                                                <h5>director &amp; founder</h5>
                                                                <p><em>Individual Event</em></p>
                                                                <p class="mt-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
                                                                <div class="social-team mt-4">
                                                                    <a href="single_registration.php?event=Blind_Coding">Register</a>
                                                                </div>
                                                            </div>
                    
                                                            <div class="title-page-line mt-4 mb-5"></div>
                    
                                                            <div class="offset-md-3 col-md-9">
                                                                <h4 style="padding-top: 50px;">The Hawk Eyes</h4>
                                                                <div class="title-page-line mt-4 mb-5"></div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="speaker-image">
                                                                    
                                                                    <img src="img/t1.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9 mt-4 mt-md-0">
                                                                <h5>director &amp; founder</h5>
                                                                <p><em>Maximum 4 student in group</em></p>
                                                                <p class="mt-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
                                                                <div class="social-team mt-4">
                                                                    <a href="group4_registration.php?event=The_Hawk_Eyes">Register</a>
                                                                </div>
                                                            </div>
                    
                                                            <div class="title-page-line mt-4 mb-5"></div>
                    
                                                            <div class="offset-md-3 col-md-9">
                                                                <h4 style="padding-top: 50px;">Camowheel</h4>
                                                                <div class="title-page-line mt-4 mb-5"></div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="speaker-image">
                    
                                                                    <img src="img/t1.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9 mt-4 mt-md-0">
                                                                <h5>director &amp; founder</h5>
                                                                <p><em>Maximum 3 Student in group</em></p>
                                                                <p class="mt-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
                                                                <div class="social-team mt-4">
                                                                    <a href="group3_registration.php?event=Camowheel">Register</a>
                                                                </div>
                                                            </div>
                    
                                                            <div class="title-page-line mt-4 mb-5"></div>
                    
                                                            <div class="offset-md-3 col-md-9">
                                                                <h4 style="padding-top: 50px;">Chemstar</h4>
                                                                <div class="title-page-line mt-4 mb-5"></div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="speaker-image">
                                                            
                                                                    <img src="img/t1.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9 mt-4 mt-md-0">
                                                                <h5>director &amp; founder</h5>
                                                                <p><em>Compulsory 2 student in group</em></p>
                                                                <p class="mt-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
                                                                <div class="social-team mt-4">
                                                                    <a href="group2_registration_fix.php?event=Chemstar">Register</a>
                                                                </div>
                                                            </div>
                    
                                                            <div class="title-page-line mt-4 mb-5"></div>
                    
                                                            <div class="offset-md-3 col-md-9">
                                                                <h4 style="padding-top: 50px;">GaddiOnRoll</h4>
                                                                <div class="title-page-line mt-4 mb-5"></div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="speaker-image">
                                                                    
                                                                    <img src="img/t1.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9 mt-4 mt-md-0">
                                                                <h5>director &amp; founder</h5>
                                                                <p><em>Maximum 4 student in group</em></p>
                                                                <p class="mt-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
                                                                <div class="social-team mt-4">
                                                                    <a href="group4_registration.php?event=Gaddi_On_Roll">Register</a>
                                                                </div>
                                                            </div>
                    
                                                            <div class="title-page-line mt-4 mb-5"></div>
                    
                                                            <div class="offset-md-3 col-md-9">
                                                                <h4 style="padding-top: 50px;">Scrapheap</h4>
                                                                <div class="title-page-line mt-4 mb-5"></div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="speaker-image">
                                                                
                                                                    <img src="img/t1.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9 mt-4 mt-md-0">
                                                                <h5>director &amp; founder</h5>
                                                                <p><em>Maximum 4 student in group</em></p>
                                                                <p class="mt-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
                                                                <div class="social-team mt-4">
                                                                    <a href="group4_registration.php?event=Scrapheap">Register</a>
                                                                </div>
                                                            </div>
                    
                                                            <div class="title-page-line mt-4 mb-5"></div>
                    
                                                            <div class="offset-md-3 col-md-9">
                                                                <h4 style="padding-top: 50px;">Constructo</h4>
                                                                <div class="title-page-line mt-4 mb-5"></div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="speaker-image">
                                                                
                                                                    <img src="img/t1.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9 mt-4 mt-md-0">
                                                                <h5>director &amp; founder</h5>
                                                                <p><em>Maximum 3 student in group</em></p>
                                                                <p class="mt-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
                                                                <div class="social-team mt-4">
                                                                    <a href="group3_registration.php?event=Constructo">Register</a>
                                                                </div>
                                                            </div>
                    
                                                            <div class="title-page-line mt-4 mb-5"></div>
                    
                                                            <div class="offset-md-3 col-md-9">
                                                                <h4 style="padding-top: 50px;">Flot a Boat</h4>
                                                                <div class="title-page-line mt-4 mb-5"></div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="speaker-image">
                                                                    
                                                                    <img src="img/t1.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9 mt-4 mt-md-0">
                                                                <h5>director &amp; founder</h5>
                                                                <p><em>Maximum 3 student in group</em></p>
                                                                <p class="mt-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
                                                                <div class="social-team mt-4">
                                                                    <a href="group3_registration.php?event=Float_A_Boat">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>							
                                                
                                                <div class="section padding-top padding-bottom-big background-dark footer">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <img src="img/logo.png" alt="">
                                                                <h6 class="mt-5 mb-3">Get in touch:</h6>
                                                                <p>office@aoide.com</p>
                                                                <p>+1 325 2532</p>
                                                            </div>
                                                            <div class="col-md-12 mt-5 mb-5">
                                                                <div class="title-page-line"></div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <p><small>© 2019 Aoide is powered by IG Design. The property of their owners.</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>						
                                                <!-- Page end -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content__inner">
                                        <div class="section full-height over-y-scroll" id="boxscroll-2">
                                            <div class="section" id="boxscroll-in-2">
                                                <!-- Page start -->
                                                <div class="section padding-top-big">
                                                    <div class="container" style="padding-top: 60px;">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h2 class="content__title">Partial Technical Events</h2>
                                                            </div>
                                                            <div class="col-lg-4 mt-3">
                                                                <h3 class="content__subtitle">To achieve great things, two things are needed: a plan and not quite enough time.</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>							
                                                <div class="section padding-top-bottom">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="offset-md-3 col-md-9">
                                                                <h4>Debugging Code</h4>
                                                                <div class="title-page-line mt-4 mb-5"></div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="speaker-image">
                                                                
                                                                    <img src="img/t1.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9 mt-4 mt-md-0">
                                                                <h5>director &amp; founder</h5>
                                                                <p><em>Compulsory 2 student in Group</em></p>
                                                                <p class="mt-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
                                                                <div class="social-team mt-4">
                                                                    <a href="group2_registration_fix.php?event=Debugging_Code">Register</a>
                                                                </div>
                                                            </div>
                    
                                                            <div class="title-page-line mt-4 mb-5"></div>
                    
                                                            <div class="offset-md-3 col-md-9">
                                                                <h4 style="padding-top: 50px;">Dot Your Imagenation</h4>
                                                                <div class="title-page-line mt-4 mb-5"></div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="speaker-image">
                                                                    
                                                                    <img src="img/t1.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9 mt-4 mt-md-0">
                                                                <h5>director &amp; founder</h5>
                                                                <p><em>Maximum 3 student in group</em></p>
                                                                <p class="mt-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
                                                                <div class="social-team mt-4">
                                                                    <a href="group3_registration.php?event=Dot_Your_Imagination">Register</a>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="title-page-line mt-4 mb-5"></div>
                    
                                                            <div class="offset-md-3 col-md-9">
                                                                <h4 style="padding-top: 50px;">Scavenger Hunt</h4>
                                                                <div class="title-page-line mt-4 mb-5"></div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="speaker-image">
                                                                
                                                                    <img src="img/t1.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9 mt-4 mt-md-0">
                                                                <h5>director &amp; founder</h5>
                                                                <p><em>Maximum 3 Student in group</em></p>
                                                                <p class="mt-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
                                                                <div class="social-team mt-4">
                                                                    <a href="group3_registration.php?event=Scavenger_Hunt">Register</a>
                                                                </div>
                                                            </div>
                    
                                                            <div class="title-page-line mt-4 mb-5"></div>
                    
                                                            <div class="offset-md-3 col-md-9">
                                                                <h4 style="padding-top: 50px;">Boat Battle</h4>
                                                                <div class="title-page-line mt-4 mb-5"></div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="speaker-image">
                                                                
                                                                    <img src="img/t1.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9 mt-4 mt-md-0">
                                                                <h5>director &amp; founder</h5>
                                                                <p><em>Maximum 4 student in group</em></p>
                                                                <p class="mt-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
                                                                <div class="social-team mt-4">
                                                                    <a href="group4_registration.php?event=Boat_Battle">Register</a>
                                                                </div>
                                                            </div>
                    
                                                            <div class="title-page-line mt-4 mb-5"></div>
                    
                                                            <div class="offset-md-3 col-md-9">
                                                                <h4 style="padding-top: 50px;">STHAPATYA gta</h4>
                                                                <div class="title-page-line mt-4 mb-5"></div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="speaker-image">
                                                                    
                                                                    <img src="img/t1.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9 mt-4 mt-md-0">
                                                                <h5>director &amp; founder</h5>
                                                                <p><em>Maximum 5 student in group</em></p>
                                                                <p class="mt-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
                                                                <div class="social-team mt-4">
                                                                    <a href="group5_registration.php?event=Sthapatya_gta">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>							
                                                                        
                                                <div class="section padding-top padding-bottom-big background-dark footer">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <img src="img/logo.png" alt="">
                                                                <h6 class="mt-5 mb-3">Get in touch:</h6>
                                                                <p>office@aoide.com</p>
                                                                <p>+1 325 2532</p>
                                                            </div>
                                                            <div class="col-md-12 mt-5 mb-5">
                                                                <div class="title-page-line"></div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <p><small>© 2019 Aoide is powered by IG Design. The property of their owners.</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>	
                                                <!-- Page end -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content__inner">
                                        <div class="section full-height over-y-scroll" id="boxscroll-3">
                                            <div class="section" id="boxscroll-in-3">
                                                <!-- Page start -->
                                                <div class="section padding-top-big">
                                                    <div class="container" style="padding-top: 60px;">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h2 class="content__title">General Non-Technical Events</h2>
                                                            </div>
                                                            <div class="col-lg-4 mt-3">
                                                                <h3 class="content__subtitle">To achieve great things, two things are needed: a plan and not quite enough time.</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>							
                                                <div class="section padding-top-bottom">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="offset-md-3 col-md-9">
                                                                <h4>Break Out</h4>
                                                                <div class="title-page-line mt-4 mb-5"></div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="speaker-image">
                                                                
                                                                    <img src="img/t1.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9 mt-4 mt-md-0">
                                                                <h5>director &amp; founder</h5>
                                                                <p><em>Maximum 4 student in Group.</em></p>
                                                                <p class="mt-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
                                                                <div class="social-team mt-4">
                                                                    <a href="group4_registration.php?event=Break_Out">Register</a>
                                                                </div>
                                                            </div>
                    
                                                            <div class="title-page-line mt-4 mb-5"></div>
                    
                                                            <div class="offset-md-3 col-md-9">
                                                                <h4 style="padding-top: 50px;">Beg Borrow Steal</h4>
                                                                <div class="title-page-line mt-4 mb-5"></div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="speaker-image">
                                                                
                                                                    <img src="img/t1.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9 mt-4 mt-md-0">
                                                                <h5>director &amp; founder</h5>
                                                                <p><em>Maximum 5 student in Group.</em></p>
                                                                <p class="mt-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
                                                                <div class="social-team mt-4">
                                                                    <a href="group5_registration.php?event=Beg_Borrow_Steal">Register</a>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="title-page-line mt-4 mb-5"></div>
                    
                                                            <div class="offset-md-3 col-md-9">
                                                                <h4 style="padding-top: 50px;">Sell This Product</h4>
                                                                <div class="title-page-line mt-4 mb-5"></div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="speaker-image">
                                                                    
                                                                    <img src="img/t1.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9 mt-4 mt-md-0">
                                                                <h5>director &amp; founder</h5>
                                                                <p><em>Individual Event</em></p>
                                                                <p class="mt-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
                                                                <div class="social-team mt-4">
                                                                    <a href="single_registration.php?event=Sell_This_Product">Register</a>
                                                                </div>
                                                            </div>
                    
                                                            <div class="title-page-line mt-4 mb-5"></div>
                    
                                                            <div class="offset-md-3 col-md-9">
                                                                <h4 style="padding-top: 50px;">Laser Break</h4>
                                                                <div class="title-page-line mt-4 mb-5"></div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="speaker-image">
                                                                
                                                                    <img src="img/t1.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9 mt-4 mt-md-0">
                                                                <h5>director &amp; founder</h5>
                                                                <p><em>Maximum 2 student in Group.</em></p>
                                                                <p class="mt-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
                                                                <div class="social-team mt-4">
                                                                    <a href="group2_registration.php?event=Laser_Break">Register</a>
                                                                </div>
                                                            </div>
                    
                                                            <div class="title-page-line mt-4 mb-5"></div>
                    
                                                            <div class="offset-md-3 col-md-9">
                                                                <h4 style="padding-top: 50px;">LAN Strike</h4>
                                                                <div class="title-page-line mt-4 mb-5"></div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="speaker-image">
                                                                    
                                                                    <img src="img/t1.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9 mt-4 mt-md-0">
                                                                <h5>director &amp; founder</h5>
                                                                <p><em>Compulsory 5 student in Group.</em></p>
                                                                <p class="mt-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
                                                                <div class="social-team mt-4">
                                                                    <a href="group5_registration_fix.php?event=Lan_Strike">Register</a>
                                                                </div>
                                                            </div>										
                                                        </div>
                                                    </div>
                                                </div>							
                                                                        
                                                <div class="section padding-top padding-bottom-big background-dark footer">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <img src="img/logo.png" alt="">
                                                                <h6 class="mt-5 mb-3">Get in touch:</h6>
                                                                <p>office@aoide.com</p>
                                                                <p>+1 325 2532</p>
                                                            </div>
                                                            <div class="col-md-12 mt-5 mb-5">
                                                                <div class="title-page-line"></div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <p><small>© 2019 Aoide is powered by IG Design. The property of their owners.</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>	
                                                <!-- Page end -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content__inner">
                                        <div class="section full-height over-y-scroll" id="boxscroll-4">
                                            <div class="section" id="boxscroll-in-4">
                                                <!-- Page start -->
                                                <div class="section padding-top-big">
                                                    <div class="container" style="padding-top: 60px;">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h2 class="content__title">Work-Shops</h2>
                                                            </div>
                                                            <div class="col-lg-4 mt-3">
                                                                <h3 class="content__subtitle">To achieve great things, two things are needed: a plan and not quite enough time.</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>							
                                                <div class="section padding-top-bottom">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="offset-md-3 col-md-9">
                                                                <h4>AWS</h4>
                                                                <div class="title-page-line mt-4 mb-5"></div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="speaker-image">
                                                                    
                                                                    <img src="img/t1.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9 mt-4 mt-md-0">
                                                                <h5>director &amp; founder</h5>
                                                                <p><em>some company name, city</em></p>
                                                                <p class="mt-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
                                                                <div class="social-team mt-4">
                                                                    <a href="workshop_registration.php?event=AWS_workshop">Register</a>
                                                                </div>
                                                            </div>
                    
                                                            <div class="title-page-line mt-4 mb-5"></div>
                    
                                                            <div class="offset-md-3 col-md-9">
                                                                <h4 style="padding-top: 50px;">NFT</h4>
                                                                <div class="title-page-line mt-4 mb-5"></div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="speaker-image">
                                                                    
                                                                    <img src="img/t1.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9 mt-4 mt-md-0">
                                                                <h5>director &amp; founder</h5>
                                                                <p><em>some company name, city</em></p>
                                                                <p class="mt-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
                                                                <div class="social-team mt-4">
                                                                    <a href="workshop_registration.php?event=NFT_workshop">Register</a>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="title-page-line mt-4 mb-5"></div>
                    
                                                            <div class="offset-md-3 col-md-9">
                                                                <h4 style="padding-top: 50px;">AI/ML</h4>
                                                                <div class="title-page-line mt-4 mb-5"></div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="speaker-image">
                                                                    
                                                                    <img src="img/t1.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9 mt-4 mt-md-0">
                                                                <h5>director &amp; founder</h5>
                                                                <p><em>some company name, city</em></p>
                                                                <p class="mt-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
                                                                <div class="social-team mt-4">
                                                                    <a href="workshop_registration.php?event=AI_ML_workshop">Register</a>
                                                                </div>
                                                            </div>
                    
                                                            <div class="title-page-line mt-4 mb-5"></div>
                    
                                                            <div class="offset-md-3 col-md-9">
                                                                <h4 style="padding-top: 50px;">Block Chain</h4>
                                                                <div class="title-page-line mt-4 mb-5"></div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="speaker-image">
                                                                    
                                                                    <img src="img/t1.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9 mt-4 mt-md-0">
                                                                <h5>director &amp; founder</h5>
                                                                <p><em>some company name, city</em></p>
                                                                <p class="mt-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
                                                                <div class="social-team mt-4">
                                                                    <a href="workshop_registration.php?event=blockchain_workshop">Register</a>
                                                                </div>
                                                            </div>
                    
                                                            <div class="title-page-line mt-4 mb-5"></div>
                    
                                                            <div class="offset-md-3 col-md-9">
                                                                <h4 style="padding-top: 50px;">AR/VR/Web 3.o</h4>
                                                                <div class="title-page-line mt-4 mb-5"></div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="speaker-image">
                                                                
                                                                    <img src="img/t1.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9 mt-4 mt-md-0">
                                                                <h5>director &amp; founder</h5>
                                                                <p><em>some company name, city</em></p>
                                                                <p class="mt-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
                                                                <div class="social-team mt-4">
                                                                    <a href="workshop_registration.php?event=AR_VR_workshop">Register</a>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="title-page-line mt-4 mb-5"></div>
                    
                                                            <div class="offset-md-3 col-md-9">
                                                                <h4 style="padding-top: 50px;">Cyber Security</h4>
                                                                <div class="title-page-line mt-4 mb-5"></div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="speaker-image">
                                                                    
                                                                    <img src="img/t1.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9 mt-4 mt-md-0">
                                                                <h5>director &amp; founder</h5>
                                                                <p><em>some company name, city</em></p>
                                                                <p class="mt-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
                                                                <div class="social-team mt-4">
                                                                    <a href="workshop_registration.php?event=cyber_security_workshop">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>							
                                                                        
                                                <div class="section padding-top padding-bottom-big background-dark footer">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <img src="img/logo.png" alt="">
                                                                <h6 class="mt-5 mb-3">Get in touch:</h6>
                                                                <p>office@aoide.com</p>
                                                                <p>+1 325 2532</p>
                                                            </div>
                                                            <div class="col-md-12 mt-5 mb-5">
                                                                <div class="title-page-line"></div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <p><small>© 2019 Aoide is powered by IG Design. The property of their owners.</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Page end -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content__inner">
                                        <div class="section full-height over-y-scroll" id="boxscroll-5">
                                            <div class="section" id="boxscroll-in-5">
                                                <!-- Page start -->
                                                <div class="section padding-top-big">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h2 class="content__title">stay informed</h2>
                                                            </div>
                                                            <div class="col-lg-4 mt-3">
                                                                <h3 class="content__subtitle">The rapid handle injects into the bashful lift.</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="section padding-top padding-bottom-big">	
                                                    <div class="container">
                                                        <div class="row">		
                                                            <div class="offset-md-3 col-md-9">
                                                                <h4>get in touch</h4>
                                                                <div class="title-page-line mt-4 mb-5"></div>
                                                            </div>									
                                                            <div class="col-lg-3">
                                                                <h6>drop a line</h6>
                                                            </div>
                                                            <div class="col-lg-9 mt-4 mt-lg-0">
                                                                <form name="ajax-form" id="ajax-form" action="mail-it.php" method="post">
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <label for="name"> 
                                                                                <span class="error" id="err-name">please enter name</span>
                                                                            </label>
                                                                            <input name="name" id="name" type="text"   placeholder="Your Name: *"/>
                                                                        </div>
                                                                        <div class="col-lg-6 mt-4 mt-lg-0">
                                                                            <label for="email"> 
                                                                                <span class="error" id="err-email">please enter e-mail</span>
                                                                                <span class="error" id="err-emailvld">e-mail is not a valid format</span>
                                                                            </label>
                                                                            <input name="email" id="email" type="text"  placeholder="E-Mail: *"/>
                                                                        </div>
                                                                        <div class="col-lg-12 mt-4">
                                                                            <label for="message"></label>
                                                                            <textarea name="message" id="message" placeholder="Tell Us Everything"></textarea>
                                                                        </div>
                                                                        <div class="col-lg-12 mt-4">
                                                                            <div id="button-con"><button class="send_message" id="send" data-lang="en"><span>submit</span></button></div>					
                                                                        </div>	
                                                                        <div class="col-lg-12">
                                                                            <div class="error" id="err-form"><span>There was a problem validating the form please check!</span></div>
                                                                            <div class="error" id="err-timedout">The connection to the server timed out!</div>
                                                                            <div class="error" id="err-state"></div>
                                                                            <div id="ajaxsuccess">Successfully sent!!</div>
                                                                        </div>	
                                                                    </div>	
                                                                </form>	
                                                            </div>									
                                                            <div class="col-lg-3 mt-5">
                                                                <h6>contacts</h6>
                                                            </div>
                                                            <div class="col-lg-3 mt-4 mt-lg-5">
                                                                <p>office@aoide.com</p>
                                                                <p>support@aoide.com</p>
                                                            </div>	
                                                            <div class="col-lg-3 mt-4 mt-lg-5">
                                                                <p>+1 325 2532</p>
                                                                <p>+1 325 3456</p>
                                                            </div>		
                                                            <div class="col-lg-3 mt-4 mt-lg-5">
                                                                <p>kralja milutina 325</p>
                                                                <p>11000 belgrade, serbia</p>
                                                            </div>					
                                                            <div class="col-lg-3 mt-5">
                                                                <h6>subscribe</h6>
                                                            </div>
                                                            <div class="col-lg-9 mt-4 mt-lg-5">
                                                                <div class="subscribe">
                                                                    <input type="text" placeholder="subscribe"/>
                                                                    <button data-lang="en"><span class="fa-long-arrow-right"></span></button>
                                                                </div>
                                                                <div class="subscribe-text">
                                                                    <p>* we promise that we won´t spam you, never.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>				
                                                <div class="section padding-top padding-bottom-big background-dark footer">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <img src="img/logo.png" alt="">
                                                                <h6 class="mt-5 mb-3">Get in touch:</h6>
                                                                <p>office@aoide.com</p>
                                                                <p>+1 325 2532</p>
                                                            </div>
                                                            <div class="col-md-12 mt-5 mb-5">
                                                                <div class="title-page-line"></div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <p><small>© 2019 Aoide is powered by IG Design. The property of their owners.</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Page end -->
                                            </div>
                                        </div>
                                    </div>
                                    <button class="content__close"></button>
                                </div>
                                
                                <div class="location-fixed">
                                    <p>NH 8, GETCO, Near Biltech, Dhamdod, Kosamba, 394125</p>
                                </div>
                                
                                
                                
                            </main>
                            
                            
                    
                    
                    
                        
                        <!-- JAVASCRIPT
                        ================================================== -->
                        <script src="js/jquery.min.js"></script>
                        <script src="js/popper.min.js"></script> 
                        <script src="js/bootstrap.min.js"></script>
                        <script src="js/plugins.js"></script> 
                        <script src="js/gradient-animation.js"></script> 
                        <script src="js/contact.js"></script>
                        <script src="js/custom.js"></script>  
                    <!-- End Document
                    ================================================== -->
                    </body>
				<!-- <div class="wm wm-border dark wow fadeInDown" style="margin-top:50px;">EVENTS</div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                            <h1>Which kind of Events</h1>
                            <div class="separator"><span><i class="fa fa-square"></i></span></div>
                            <div class="spacer-single"></div>
                        </div>


                        <div class="col-lg-4 wow fadeIn" data-wow-delay="0s">
                            <div class="box-number square">
                               <a href="technical_event.html"><i class="bg-color hover-color-2 fa fa-desktop text-light"></i></a>
                                <div class="text">
                                    <h3><span>Technical Events</span></h3>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 wow fadeIn" data-wow-delay=".25s">
                            <div class="box-number square">
                                <a href="non_technical_event.html"><i class="bg-color hover-color-2 fa fa-lightbulb-o text-light"></i></a>
                                <div class="text">
                                    <h3><span>Non-Technical Events</span></h3>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 wow fadeIn" data-wow-delay=".5s">
                            <div class="box-number square">
                                <a href="general_non_technical_event.html"><i class="bg-color hover-color-2 fa fa-sitemap text-light"></i></a>
                                <div class="text">
                                    <h3><span>General Non-Technical Events</span></h3>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>
                                </div>
                            </div>
                        </div>

                        <div class="spacer-single"></div>

                        <div class="col-lg-4 wow fadeIn" data-wow-delay=".75s">
                            <div class="box-number square">
                                <a href="workshop.html"><i class="bg-color hover-color-2 fa fa-building text-light"></i></a>
                                <div class="text">
                                    <h3><span>Work Shops</span></h3>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 wow fadeIn" data-wow-delay="1s">
                            <div class="box-number square">
                                <a href="#section-speakers"><i class="bg-color hover-color-2  fa fa-users text-light"></a></i>
                                <div class="text">
                                    <h3><span class="ms-2">Seminars/Webinar</span></h3>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 wow fadeIn" data-wow-delay="1.25s">
                            <div class="box-number square">
                                <i class="bg-color hover-color-2 fa fa-mortar-board text-light"></i>
                                <div class="text">
                                    <h3><span>Certificates</span></h3>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>
                                </div>
                            </div>
                        </div>
						

                    </div>
                </div> -->
            </section>
            <!-- section close -->
			
			
			
			
			
			
			
			
			
			
			


            <!-- footer begin -->

        <!-- footer close -->
        </div> 
    </div>

    <!-- Javascript Files
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jpreLoader.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/easing.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/jquery.scrollto.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/video.resize.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
	<script src="js/enquire.min.js"></script>	
    <script src="js/designesia.js"></script>	
	<script src="js/jquery.event.move.js"></script>
	<script src="js/jquery.plugin.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <script src="js/countdown-custom.js"></script>
    <script src="js/jquery.twentytwenty.js"></script>	

    <!-- RS5.0 Core JS Files -->
    <script src="revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
    <script src="revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>

    <!-- RS5.0 Extensions Files -->
    <script src="revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>

    <script>
        jQuery(document).ready(function() {
            // revolution slider
            jQuery("#slider-revolution").revolution({
                sliderType: "standard",
                sliderLayout: "fullwidth",
                delay: 5000,
                navigation: {
                    arrows: {
                        enable: true
                    },
                    bullets: {
                        enable: false,
                        style: 'hermes'
                    },

                },
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 2000,
                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                },
                spinner: "off",
                gridwidth: 1140,
                gridheight: 700,
                disableProgressBar: "on"
            });
        });
    </script>
	
	<script>
    $(window).on("load", function(){
      $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.7});
      $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({default_offset_pct: 0.3, orientation: 'vertical'});
    });
    </script>


</body>

</html>