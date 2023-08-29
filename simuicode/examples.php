

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<title>SIMUI - Examples Page | Pure JS/CSS Frontend Web Development Framework - 2022 (New)</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="./documentation/css/main.css">
<link rel="stylesheet" type="text/css" href="https://unpkg.com/simui-code@1.0.3/css/simui.min.css">

<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&amp;display=swap" rel="stylesheet">

<meta name="title" content="SIMUI - Examples Page | Pure JS/CSS Frontend Web Development Framework - 2022 (New)">
<meta name="description" content="SIMUI - an open source frontend web framework (Lightweight, dependancy free, pure CSS/ JS ) for advanced and specific or pixel perfact UI/UX designs / prototypes | Examples Page">
<meta name="keywords" content="Lightweight Library, Pure CSS/JavaScript, Frontend Web 
 	 Development Tool 2022, No Lighthouse Issues, Common Web UI Examples">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
<meta name="author" content="SIMUI (Simple  UI)">
<link rel="canonical" href="./examples.php"/>

<link rel="apple-touch-icon" sizes="180x180" href="./favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="./favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="./favicons/favicon-16x16.png">
<link rel="manifest" href="favicons/site.webmanifest">
</head>
<body>
 
<h1 class="su-hidden__text">SIMUI - Examples Page | Pure JS/CSS Frontend Web Development Framework - 2022 (New)</h1>

<script async src="https://www.googletagmanager.com/gtag/js?id=G-104P4WWHF4"></script>
<style type="text/css">
	/*cant wait for cach*/
	pre,code{
		user-select: unset;
	}
	.link{
		text-decoration: underline;
	}
</style>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-104P4WWHF4');
</script>
<style type="text/css">
ul img{
	width: 100%;
}

.tab__content--show{ display: block; }
.tab__buttons>*{ 
    cursor: pointer;
    margin-bottom: 5px;
    color: #444;
    font-size: 15px;
    border-bottom: 1px solid #ddd;
}


.tab--active{
	opacity: 0.5;
}

.code-example{
	padding: 20px;
	background: rgba( --color-primary );
}
.sublist{
	padding-left: 40px;
}

pre{
	background: var( --color-black );
	color: var( --color-white );
	position: relative;
	overflow-x: auto;
	padding: 10px;
}

.add-group__delete-btns>button{
	padding: 10px;
	display: block;
	background: var( --color-secondary );
	border: 0; outline: 0; cursor: pointer;
		color: var( --color-white );
	margin-bottom: 10px;
}
.add-group__delete-btns>button::before{
	content: 'Delete: ';
}
input,select{
	    padding: 10px 20px;
    border: 0;
    background: #eee;
    margin-top: 20px;
}


.tab__content__container{
	box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
	max-width: 900px;
	background: #fff;
	border-radius: 5px;
}

button{
  border: 0;
  outline: 0;
  cursor: pointer;
}



.article__intro h2{
	border-bottom: 2px solid;
}
.article__intro blockquote{
	padding: 10px;
	border-radius: 3px;
	background: #eee;
	border-left: 1px solid var( --color-primary );
}


@media only screen and (max-width: 600px) {
 .tabcontent section{
    margin: 50px auto;
    padding-left: 20px;
    padding-right: 20px;
 }
 h2{
 	font-size: 1.8rem;
 }
 h3{
 	font-size: 1.4rem;
 }
 .sublist {
    padding-left: 20px;
 }

	.tabcontent section:first-child{
	 	padding-top: 20px;
	}

	.tabcontent section:last-child{
	 	padding-bottom: 20px;
	}
}
.opts__picker{
	box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px; 
	padding: 20px;
	border-radius: 5px;
}

</style>

<style type="text/css">
.site-header{
	padding: 5px 20px;
}
.site-header__list--grid li{
   display: inline-block;
   margin: 5px;
 
}
.site-header__list--block li{
   display: block;
   margin-top: 5px;
   margin-bottom: 5px;

}

.site-header__list li{
	position: relative;
	padding-bottom: 5px;
}

.site-header__list li::after{
	position: absolute;
	content: '';
	height: 100%;
	top: 0; left: 0; bottom: 0;
	transition: all 300ms linear;
	width: 0;
	border-bottom: 1px solid #80a3b1;
	cursor: pointer;
}
.site-header__list li:hover::after{
	width: 100%;
}



.site-header__list li a{
	color: #666;
	font-weight: bold;
	font-weight: 15px;
	z-index: 1;
	position: relative;
}
.site-header__controls{ 
	display: flex; 
	justify-content: space-between;
	align-items: center;
	position: relative;
	z-index: 1;
	width: 100%;
}

.site-header__content--show{
	display: block;
}

#menu-btn{
	background-image: url(./img/menu.svg);
	width: 35px;
	height: 35px;
	background-color: transparent;
}
#menu-btn.menu-btn--closed{
	background-image: url(./img/close.svg);
}


</style>
<div class="su-background-color--white">
<header class="site-header su-color--black  su-max-width1500px" data-info="min-768px#su-grid--a2.min-768px#su-align__space-between--center">
<aside class="site-header__controls">
<a href="./index.php" title="SIMUI Code">
<img src="img/simuicode.svg" width="426.9" height="108.25" alt="SIMUI Logo" style="width:90px"></a>
<button class="su-background su-background--contain" data-info="min-768px#su-display--none" id="menu-btn" data-toggle="site-nav|site-header__content--show|click.menu-btn|menu-btn--closed|click">
</button>
</aside>
<nav class="site-header__content" id="site-nav" data-info="max-767px#su-display--none">
<ul class="site-header__list" data-info="min-768px#site-header__list--grid.
			    		   max-767px#site-header__list--block">
<li><a href="./index.php">Home</a></li>
<li><a href="./index.php#get-started">Get Started</a></li>
<li><a href="./index.php#documentation">Documentation</a></li>
<li><a href="examples.php">Examples</a></li>
<!-- <li><a href="./html-generator/seo-meta-data.php">SEO Meta Data</a></li> -->
</ul>
</nav>
</header>
</div>

<style type="text/css">
.hero-banner__img{
    display: block;
    width: 100%;
    object-fit: cover;
    clip-path: polygon(0 0, 100% 0, 100% 80%, 0 100%);
}
.hero-banner__img_mobile{
    height: 520px;
}

.hero-banner__text{
    box-sizing: border-box;
}
.hero-banner__text>*{
    max-width: 550px;
    border-radius: 5px;
    box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
}
.hero-banner ul{
    list-style-type: disc; 
    list-style-position: inside;
}
.hero-banner .btn{
    display: inline-block;
    margin-top: 20px;
}
.hero-banner ul li{
    margin-bottom: 10px;
}
ul,li{
    word-wrap: break-word;
}
</style>
<div class="hero-banner su-overlay__container su-background-color--white">
<img class="hero-banner__img " width="1440" height="560" data-info="max-900px#hero-banner__img_mobile" src="img/hero-banner.svg" alt="Simui Hero Banner">
<div class="hero-banner__text su-align__right--bottom  su-overlay__content " data-info="min-768px#su-padding.max-767px#su-padding--sm" style="width:100%;">
<section class="su-max-width600px su-padding--sm su-background-color--white">
<h2 class="hero-banner__title">What is SIMUI?</h2>
<p>We have developed some few boilerplate examples for you to customize. These examples
are heavily used and logic behind them can used to create other type of layouts</p>
<p><a href="#documentation" class="btn">Get Started</a></p>
</section>
</div>
</div>
</div>
<main class="su-max-width1200px su-margin-y" id="documentation">
<div data-info="min-860px#su-grid--a2">
<ul class="tab__buttons su-margin">
<li onclick="openTab(event, 'img-left')">Image Left Card</li>
 <li onclick="openTab(event, 'img-right')">Image Right Card</li>
<li onclick="openTab(event, 'big-bg')">Big Background Card</li>
<li onclick="openTab(event, 'textblock')">Text block</li>
<li onclick="openTab(event, 'grid-verical-cards')">Grid Vertical Card</li>
<li onclick="openTab(event, 'vertical-overlay-cards')">Overlay Grid Vertical Card</li>
<li onclick="openTab(event, 'accordion')">Accordion</li>
<li onclick="openTab(event, 'tabs')">Tabs</li>
</ul>
<div style="overflow-x: hidden;" class="tab__content__container">

<div class="tabcontent" id="img-left">

<code class="code-example">
<div class="code-block" data-options="max-width,gap,margin,padding,text-align,background,color">
<div class="su-align__left--top" data-info="min-768px#su-grid--fr2.
                max-767px#su-grid--fr1.
                max-767px#su-order--1st">
<img src="https://picsum.photos/900/700" alt="Placeholder" class="su-image--full-width">
<div>
<section>
<h2>Heading</h2>
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit.
Nostrum porro tempore hic accusantium neque, incidunt corporis itaque animi voluptatibus,
consectetur perspiciatis modi totam sunt asperiores ullam expedita officia quisquam excepturi?
</p>
<a href="#" class="btn">Button</a>
</section>
</div>
</div>
</div>
</code>
</div> <div class="tabcontent" id="img-right">

<code class="code-example">
<div class="code-block" data-options="max-width,gap,margin,padding,text-align,background,color">
<div class=" su-align__left--top" data-info="min-768px#su-grid--fr2.max-767px#su-grid--fr1.max-767px#su-order--1st.max-767px#su-order--1st">
<div>
<section style="position: relative;">
<h2>Heading</h2>
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit.
Nostrum porro tempore hic accusantium neque, incidunt corporis itaque animi voluptatibus,
consectetur perspiciatis modi totam sunt asperiores ullam expedita officia quisquam excepturi?
</p>
<a href="#" class="btn">Button</a>
</section>
</div>
<img src="https://picsum.photos/900/700" alt="Placeholder" class="su-image--full-width">
</div>
</div>

</code>
</div> <div class="tabcontent" id="big-bg">

<code class="code-example basic-styles">
<div class="code-block" data-options="text-align,align,background,color" data-appendto="su-overlay__content">
<div class="su-overlay__container">
<picture>
<source media="(min-width:800px)" srcset="https://sungulwane.co.za/img/home-cheetah-bg.jpg">
<img src="https://sungulwane.co.za/img/home-cheetah-bg-m.jpg" alt="Cheatah">
</picture>
<div class="su-overlay__content">
<section class="su-max-width600px">
<h2>Overlay Example</h2>
<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos</p>
<a href="#">Button</a>
</section>
</div>
</div>
</div>

</code>
</div>
<script type="text/javascript">
    
</script> <div class="tabcontent" id="textblock">

<code class="code-example">
<div class="code-block" data-options="text-align,padding,margin,background,color">
<div>
<section class="su-max-width800px">
<h2>Heading</h2>
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit.
Nostrum porro tempore hic accusantium neque, incidunt corporis itaque animi voluptatibus,
consectetur perspiciatis modi totam sunt asperiores ullam expedita officia quisquam excepturi?
</p>
<a href="#">Button</a>
</section>
</div>
</div>
</code>
</div> <div class="tabcontent" id="grid-verical-cards">

<code class="code-example">
<div class="code-block" data-options="max-width,gap,margin,padding,text-align,background,color">
<ul class="su-color--white" data-info="
	min-1200px#su-grid--fr4.
	min-800px#su-grid--fr2.
	min-600px#su-grid--fr1" style="list-style: none; padding-left: 0;">
<li class="su-slide-toggle">
<img src="https://picsum.photos/600/700" class="su-image--full-width">
<section class="su-slide-toggle__content--x su-background-color--primary">
<h3>Subheading</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
</section>
</li>
<li class="su-slide-toggle">
<img src="https://picsum.photos/600/700" class="su-image--full-width">
<section class="su-slide-toggle__content--x su-background-color--primary">
<h3>Subheading</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
</section>
</li>
<li class="su-slide-toggle">
<img src="https://picsum.photos/600/700" class="su-image--full-width">
<section class="su-slide-toggle__content--x su-background-color--primary">
<h3>Subheading</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
</section>
</li>
<li class="su-slide-toggle">
<img src="https://picsum.photos/600/700" class="su-image--full-width">
<section class="su-slide-toggle__content--x su-background-color--primary">
<h3>Subheading</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
</section>
</li>
<li class="su-slide-toggle">
<img src="https://picsum.photos/600/700" class="su-image--full-width">
<section class="su-slide-toggle__content--x su-background-color--primary">
<h3>Subheading</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
</section>
</li>
<li class="su-slide-toggle">
<img src="https://picsum.photos/600/700" class="su-image--full-width">
<section class="su-slide-toggle__content--x su-background-color--primary">
<h3>Subheading</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
</section>
</li>
<li class="su-slide-toggle">
<img src="https://picsum.photos/600/700" class="su-image--full-width">
<section class="su-slide-toggle__content--x su-background-color--primary">
<h3>Subheading</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
</section>
</li>
<li class="su-slide-toggle">
<img src="https://picsum.photos/600/700" class="su-image--full-width">
<section class="su-slide-toggle__content--x su-background-color--primary">
<h3>Subheading</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
</section>
</li>
</ul>
</div>
</code>
</div> <div class="tabcontent" id="vertical-overlay-cards">

<code class="code-example">
<div class="code-block" data-options="max-width,gap,margin,padding,text-align,background,color">
<ul class="su-color--white" style="list-style: none; padding-left: 0;" data-info="min-768px#su-grid--fr3">
<li class="su-overlay__container">
<img src="https://picsum.photos/600/700" class="su-image--full-width">
<section class="su-overlay__content">
<h3>Subheading</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
<a href="#" class="btn">Button</a>
</section>
</li>
<li class="su-overlay__container">
<img src="https://picsum.photos/600/700" class="su-image--full-width">
<section class="su-overlay__content">
<h3>Subheading</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
<a href="#" class="btn">Button</a>
</section>
</li>
<li class="su-overlay__container">
<img src="https://picsum.photos/600/700" class="su-image--full-width">
<section class="su-overlay__content">
<h3>Subheading</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
<a href="#" class="btn">Button</a>
</section>
</li>
<li class="su-overlay__container">
<img src="https://picsum.photos/600/700" class="su-image--full-width">
<section class="su-overlay__content">
<h3>Subheading</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
<a href="#" class="btn">Button</a>
</section>
</li>
<li class="su-overlay__container">
<img src="https://picsum.photos/600/700" class="su-image--full-width">
<section class="su-overlay__content">
<h3>Subheading</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
<a href="#" class="btn">Button</a>
</section>
</li>
<li class="su-overlay__container">
<img src="https://picsum.photos/600/700" class="su-image--full-width">
<section class="su-overlay__content">
<h3>Subheading</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
<a href="#" class="btn">Button</a>
</section>
</li>
<li class="su-overlay__container">
<img src="https://picsum.photos/600/700" class="su-image--full-width">
<section class="su-overlay__content">
<h3>Subheading</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
<a href="#" class="btn">Button</a>
</section>
</li>
<li class="su-overlay__container">
<img src="https://picsum.photos/600/700" class="su-image--full-width">
<section class="su-overlay__content">
<h3>Subheading</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
<a href="#" class="btn">Button</a>
</section>
</li>
</ul>
</div>

</code>
</div>
<div class="tabcontent" id="accordion">
<code class="code-example">
<div class="code-block">
<div id="acc-conts">
<button id="t1" data-toggle="ac1|show-acc|click.t1|btn--activated|click">Accordion 1</button>
<div id="ac1" class="hide-acc">
<div>Accordion Content 1</div>
</div>
<button id="t2" data-toggle="ac2|show-acc|click.t2|btn--activated|click">Accordion 2</button>
<div id="ac2" class="hide-acc">
<div>Accordion Content 2</div>
</div>
<button id="t3" data-toggle="ac3|show-acc|click.t3|btn--activated|click">Accordion 3</button>
<div id="ac3" class="hide-acc">
<div>Accordion Content 3</div>
</div>
</div>
<style type="text/css">
/**buttons styling**/
#acc-conts button{ 
	display: block; 
	width: 100%; 
	text-align: left;
}

#acc-conts button::before{
	content: '+';
}

/**
 * ACCORDION BUTTON ACTIVE
 * this is active class when button is clicked
 update to suite your needs***/
#acc-conts button.btn--activated::before{
	content: '-';
}
#acc-conts button.btn--activated{
	opacity: 0.7;
}


.hide-acc{
	overflow-y: hidden;
}
.hide-acc>*{
	transform: translateY(-100%);
	transition: all 300ms linear;
	background: blanchedalmond;
	height: 0;
	box-sizing: border-box;
	padding: 0px 20px;
}

/**
 * ACCORDINO CONTENT ACTIVE
 * this is active class when button is clicked
 update to suite your needs***/
.show-acc>*{
	height: 100%;
	transform: translateY(0px);
	padding: 10px 20px;
}
</style>
</div>
</code>
</div>
<div class="tabcontent" id="tabs">
<code class="code-example">
<div class="code-block">
<div>
<button id="tabs-btn1" data-toggleall="p1|show-me|click.tabs-btn1|tabs__btn--active|click">click me 1</button>
<button id="tabs-btn2" data-toggleall="p2|show-me|click.tabs-btn2|tabs__btn--active|click">click me 2</button>
<button id="tabs-btn3" data-toggleall="p3|show-me|click.tabs-btn3|tabs__btn--active|click">click me 3</button>
</div>
<div class="my-tabs">
<div id="p1" class="hide-me"><div>Content 1</div></div>
<div id="p2" class="hide-me"><div>Content 2</div></div>
<div id="p3" class="hide-me"><div>Content 3</div></div>
</div>
<style type="text/css">
.my-tabs{
	position: relative;
	height: 200px;
	width: 100%;

}
/**HIDDEN CONTENT BEFORE BTN CLICK**/
.hide-me{
	position: absolute;
	transition: all 300ms linear;
	transform: translateX( -1000px );
	left: 0;
	top: 0;
	bottom: 0;
	right: 0;
	background: var(--color-secondary);
}
/**ACTIVE CONTENT IS DISPLAYED WHEN BTN CLICKED**/
.show-me{
	transform: translateX( 0 );
}
.tabs__btn--active{ opacity: 0.7;  }
</style>
</div>
</code>
</div>
</div>
</div>
</main>
<link rel="stylesheet" href="https://cookienotice.js.org/themes/flat-light/cookienotice.min.css"/>
<div id="cookie-notice">
We use cookies to deliver better experience.
<a href="https://cookienotice.js.org/about-cookies" class="cookie-notice-more" target="_blank" rel="noopener">More info</a>
<a href="javascript:void(0)" class="cookie-notice-close" onclick="closeCookieNotice()">Got it</a>
</div>
<div class="su-background-color--primary">
<footer class="su-padding su-margin-y  su-color--white su-max-width1500px" style="clip-path: polygon(0 20%, 100% 0, 100% 100%, 0 100%); margin-bottom: 0;">
<center>
&copy; 2022 <a href="./">SIMUI</a> <br>
<a href="admin@simuicode.com" title="admin@simuicode.com" class="link"></a><br>
<a href="tel:0638593652" title="" class="link">063 859 3652</a><br><br>
<a href="policy.php">Terms and Conditions</a>

| Partner with <a href="https://wildweb.co.za/" class="link">WildWeb</a> &amp; <a href="https://shannongovender.com/" class="link">Shannon Govender</a>
</center>
</footer>
</div>

<script src="https://unpkg.com/simui-code@1.0.3/js/simui.min.js"></script>
<script>
function closeCookieNotice() {
	const nowDate = new Date();
	const expireDate = new Date(nowDate.setDate(nowDate.getDate() + 30)).toUTCString();
	document.cookie = "cookie_notice=0;path=/;expires=" + expireDate + ";SameSite=Lax;";
	document.getElementById("cookie-notice").style.display = "none";
};
document.addEventListener("DOMContentLoaded", function() {
	const cookie_notice = ('; ' + document.cookie).split('; cookie_notice=').pop().split(';')[0];
	if (cookie_notice !== "0") {
		document.getElementById("cookie-notice").style.display = "block";
	}
});
</script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>
<script type="text/javascript">
document.querySelector(".tab__buttons >*:nth-child(1)").click();
function openTab(event, tab) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.querySelectorAll(".tab__buttons>*");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" tab--active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(tab).style.display = "block";
  event.currentTarget.className += " tab--active";
}

$(document).ready(function(){


let gridClassesFr = [
'su-grid--frn',
'su-grid--fr1',
'su-grid--fr2',
'su-grid--fr3',
'su-grid--fr4',
'su-grid--fr5',
'su-grid--fr6',
'su-grid--fr7',
'su-grid--fr8',
'su-grid--fr9',
'su-grid--fr10',
'su-grid--fr11',
'su-grid--fr12',
];
let gridClassesA = [
'su-grid--an',
'su-grid--a1',
'su-grid--a2',
'su-grid--a3',
'su-grid--a4',
'su-grid--a5',
'su-grid--a6',
'su-grid--a7',
'su-grid--a8',
'su-grid--a9',
'su-grid--a10',
'su-grid--a11',
'su-grid--a12',
];
let align = [
'su-align__x--y',
'su-align__left--top',
'su-align__left--center',
'su-align__left--bottom',
'su-align__center--top',
'su-align__center--center',
'su-align__center--bottom',
'su-align__right--top',
'su-align__right--center',
'su-align__right--bottom',
'su-align__space-between--top',
'su-align__space-between--center',
'su-align__space-between--bottom',
'su-align__space-around--top',
'su-align__space-around--center',
'su-align__space-around--bottom',
'su-align__space-evenly--top',
'su-align__space-evenly--center',
'su-align__space-evenly--bottom',
];

let textAlign = [
 'su-text-align--x',
 'su-text-align--left',
 'su-text-align--center',
 'su-text-align--right',
 'su-text-align--justify',
];

let display = [
  'su-display--type',
	'su-display--block',
	'su-display--none',
	'su-display--grid',
	'su-display--flex'
];

let background = [
'su-background su-background--type',
'su-background su-background--fixed',
'su-background su-background--repeat',
'su-background su-background--repeat-x',
'su-background su-background--repeat-y',
'su-background su-background--contain',
];

let padding = [
'su-padding-size',
'su-padding',
'su-padding-x',
'su-padding-y',
'su-padding--sm',
'su-padding-x--sm',
'su-padding-y--sm',
'su-padding--lg',
'su-padding-x--lg',
'su-padding-y--lg'

];

let margin = [
'su-margin-size',
'su-margin',
'su-margin-x',
'su-margin-y',
'su-margin--sm',
'su-margin-x--sm',
'su-margin-y--sm',
'su-margin--lg',
'su-margin-x--lg',
'su-margin-y--lg'
];

let gap = [
'su-gap-size',
'su-gap',
'su-gap-x',
'su-gap-y',
'su-gap--sm',
'su-gap-x--sm',
'su-gap-y--sm',
'su-gap--lg',
'su-gap-x--lg',
'su-gap-y--lg'
];

let bgColor = [
'su-background-color--color',
'su-background-color--primary',
'su-background-color--secondary',
'su-background-color--black',
'su-background-color--white',
];

let color = [
'su-color--type',
'su-color--primary',
'su-color--secondary',
'su-color--black',
'su-color--white',
];
let maxWidth = [
'su-max-widthnpx',
'su-max-width600px',
'su-max-width600px--left',
'su-max-width600px--right',

'su-max-width700px',
'su-max-width700px--left',
'su-max-width700px--right',

'su-max-width800px',
'su-max-width800px--left',
'su-max-width800px--right',

'su-max-width1000px',
'su-max-width1000px--left',
'su-max-width1000px--right',

'su-max-width1100px',
'su-max-width1100px--left',
'su-max-width1100px--right',

'su-max-width1200px',
'su-max-width1200px--left',
'su-max-width1200px--right',

'su-max-width1300px',
'su-max-width1300px--left',
'su-max-width1300px--right',

'su-max-width1400px',
'su-max-width1400px--left',
'su-max-width1400px--right',

'su-max-width1500px',
'su-max-width1500px--left',
'su-max-width1500px--right',

'su-max-width1600px',
'su-max-width1600px--left',
'su-max-width1600px--right',

'su-max-width1700px',
'su-max-width1700px--left',
'su-max-width1700px--right',

'su-max-width1800px',
'su-max-width1800px--left',
'su-max-width1800px--right',

'su-max-width1900px',
'su-max-width1900px--left',
'su-max-width1900px--right',

'su-max-width2000px',
'su-max-width2000px--left',
'su-max-width2000px--right',
];



function genClassPicker( el, listOfClasses ) {
	for( let className of  listOfClasses ){
			$(el+" .class-name-changer").append('<option value"'+className+'">'+className+'</option>');	
	}
}

function genMultiClassPicker( el, listOfClasses ) {
	for( let className of  listOfClasses ){
			$(el).append('<option value"'+className+'">'+className+'</option>');	
	}
}

function codeGen() {
	$(".code-example").each(function(index, el) {
		  $(el).find("pre.source-code").remove();
		  $(el).append('<pre class="source-code"></pre>');
		  $(el).find('pre.source-code').text( $(el).find(".code-block").html() );
		  console.log('code gen')
	});

}

genClassPicker( '.ex1', gridClassesFr );
genClassPicker( '.ex2', gridClassesA );
genClassPicker( '.ex3', gridClassesFr );
genClassPicker( '.ex3', gridClassesA );
genClassPicker( '.ex4', align );
genClassPicker('.ex5', textAlign );
genClassPicker('.ex6', display );
genClassPicker('.ex7', background );
genClassPicker('.padding__example', padding );
genClassPicker('.margin__example', margin );
genClassPicker('.gap__example', gap );
genClassPicker('.background-color__example', bgColor );
genClassPicker('.color__example', color );
genClassPicker('.max-width', maxWidth);



$("body").on('change', '.class-name-changer.change', function(event) {
	event.preventDefault();
  $(this).parents('.code-example').find(".code-block>*").attr("class", $(this).find(":selected").val() );
   //update code after making changes
	codeGen();

});


$("[data-options]").each(function(index, el) {
	 /* iterate through array or object */
	 let optionsArray = $(el).data('options').split(",");
	 console.log( optionsArray  );

	 $(el).parents('.code-example').append('<div class="opts__picker"></div>');
   $( optionsArray ).each( function(index, val ){
     
     $(el).parents('.code-example').find(".opts__picker").append('<select class="opts__picker__'+val +'"></section>');
   });

});

$(".opts__picker").find("select").each(function(index, el) {
   	  let name = $(el).attr("class").replace('opts__picker__','');
   	  if( name =='color'){ 
   	  	genMultiClassPicker( el , color ); 
   	  }else if( name =='background' ){
   	  	genMultiClassPicker( el, bgColor );
   	  }else if( name =='padding' ){
   	  	genMultiClassPicker( el, padding );
   	  }else if( name =='margin' ){
   	  	genMultiClassPicker( el, margin );
   	  }else if( name =='align' ){
   	  	genMultiClassPicker( el, align );
   	  }else if( name =='text-align' ){
   	  	genMultiClassPicker( el, textAlign );
   	  }else if( name =='gap' ){
   	  	genMultiClassPicker( el, gap );
   	  }else if( name =='grid-fr' ){
   	  	genMultiClassPicker( el, gridClassesFr );
   	  }else if( name =='grid-a' ){
   	  	genMultiClassPicker( el, gridClassesA );
   	  }else if( name =='max-width' ){
   	  	genMultiClassPicker( el, maxWidth );
   	  }

});

$(".opts__picker").find("select").on('change', function () {
	let chosanClass = $( this ).find(":selected").val();
	let appendto = $( this ).parents('.code-example').find('[data-appendto]').attr("data-appendto");
	if( appendto == undefined || appendto == null || appendto =='.' ){
		console.log("not")
		appendto = '.code-block>*';
	}else{
		appendto = '.'+appendto;
	}

	$( this ).children('option').each(function(index, el) {
		  let groupClassName = $(el).val();
	    $( el ).parents(".code-example").find( appendto ).removeClass( groupClassName );
	   });

	$( this ).parents(".code-example").find( appendto ).addClass( chosanClass );
	codeGen();


});


//update code after making changes
codeGen();




$("body").on('click','.add-group__btn', function(event) {
	/* Act on the event */
	event.preventDefault();
	
	let bp = $( this ).siblings('.add-group__select').find("option:selected").val() + $( this ).siblings('.add-group__input').val()+"px";
	let chosanClass = $( this ).parents('.code-example').find(".class-name-changer :selected").val();
	let collection = bp+'#'+chosanClass;
	let currentCollection = $( this ).parents('.code-example').find(".code-block>*").attr("data-info");
	$( this ).siblings(".add-group__delete-btns").append('<button>'+collection+'</button>');
	$( this ).parents('.code-example').find(".code-block>*").attr("data-info",  currentCollection+ '.'+collection );
	
//update code after making changes
	codeGen();
});






$("body").on('click', '.add-group__delete-btns>button', function(event) {
	event.preventDefault();
	/* Act on the event */
	let collection = $( this ).text();
	let currentCollection = $( this ).parents('.code-example').find(".code-block>*").attr("data-info");
	let newCollection = currentCollection.replaceAll('.'+collection, '');
	$( this ).parents('.code-example').find(".code-block>*").attr("data-info", newCollection );

//update code after making changes
	codeGen();
	$( this ).remove();
});



$(".code-block *").each(function(index, el) {
	$( el ).attr("contenteditable", "true");
	if( $( el ).text() ==! '' ){
		$( el ).attr("contenteditable", "true");
	}
});

$(".code-block *").on('click',function (e) {
	 e.preventDefault();
	 e.stopPropagation()
	 console.log( $(this) );
	 if( $(this).attr('name') =="img" ){
	 	alert('Yes');
	 }
});






});



</script>
</html>