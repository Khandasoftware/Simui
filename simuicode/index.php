<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>SIMUI | Frontend Web Development Framework - 2022 (New)</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="./documentation/css/main.css">
<link rel="stylesheet" type="text/css" href="https://unpkg.com/simui-code@1.0.3/css/simui.min.css">

<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&amp;display=swap" rel="stylesheet">

<meta name="title" content="SIMUI | Frontend Web Development Framework - 2022 (New)">
<meta name="description" content="SIMUI is an open source frontend web framework built to ease the frontend development process ">
<meta name="keywords" content="Lightweight Library, Pure CSS/JavaScript, Frontend Web 
 	 Development Tool 2022, No Lighthouse Issues">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
<meta name="author" content="SIMUI (Simple  UI)">
<link rel="canonical" href="./"/>

<link rel="apple-touch-icon" sizes="180x180" href="./favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="./favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="./favicons/favicon-16x16.png">
<link rel="manifest" href="favicons/site.webmanifest">
</head>
<h1 class="su-hidden__text">SIMUI | Lightweight, Pure JS/CSS Frontend Web Development Framework - 2022 (New)</h1>
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
</head>
<body>
<div class="su-background-color--white">
<header class="site-header su-color--black  su-max-width1500px" data-info="min-768px#su-grid--a2.min-768px#su-align__space-between--center">
<aside class="site-header__controls">
<a href="./index.php" title="SIMUI Code">
<img src="./img/simuicode.svg" width="426.9" height="108.25" alt="SIMUI Logo" style="width:90px"></a>
<button class="su-background su-background--contain" data-info="min-768px#su-display--none" id="menu-btn" data-toggle="site-nav|site-header__content--show|click.menu-btn|menu-btn--closed|click">
</button>
</aside>
<nav class="site-header__content" id="site-nav" data-info="max-767px#su-display--none">
<ul class="site-header__list" data-info="min-768px#site-header__list--grid.
			    		   max-767px#site-header__list--block">
<li><a href="./">Home</a></li>
<li><a href="./#get-started">Get Started</a></li>
<li><a href=".#documentation">Documentation</a></li>
<li><a href="./examples.php">Examples</a></li>
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
<img class="hero-banner__img " width="1440" height="560" data-info="max-900px#hero-banner__img_mobile" src="./img/hero-banner.svg" alt="Simui Hero Banner">
<div class="hero-banner__text su-align__right--bottom  su-overlay__content " data-info="min-768px#su-padding.max-767px#su-padding--sm" style="width:100%;">
<section class="su-max-width600px su-padding--sm su-background-color--white">
<h2 class="hero-banner__title">What is SIMUI?</h2>
<p>SIMUI is an open source frontend web framework built to ease the frontend development process.</p>
<p>How SIMUI is defferent from other frontend web frameworks such as <a href="https://bootstrap.com/" target="_blank">Bootstrap</a> or <a href="https://get.foundation/" target="_blank">Foundation</a> ?</p>
<p><a href="#get-started" class="btn">Get Started</a></p>
</section>
</div>
</div>
</div>
<style type="text/css">
.textblock__btn{
    border: 1px solid #fff;
    padding: 10px 12px;
    color: #fff;
    display: inline-block;
    margin-top: 20px;
}

#get-started::after{
    height: 50%;
    background: var( --color-white );
}
#get-started{
    padding-bottom: 100px;
    clip-path: polygon(0 0, 100% 0, 100% 100%, 0 90%);
}
.textblock__content{
    position: relative;
    z-index: 1;
    border-radius: 5px;
    box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
}
</style>
<div class="su-background-color--primary su-overlay--self " data-info="min-768px#su-padding.max-767px#su-padding--sm" id="get-started">
<section class="textblock__content su-max-width800px su-background-color--white su-padding--sm">
<h2>Get Started</h2>
<p>Get your hands dirty with a CDN or just download the Zip file below. You can also find this project on <a href="https://github.com/Siphah/simui" class="link">Github</a></p>
<code>
<pre style="background: #eee; color: #333; font-size: 15px; padding: 10px;">&lt;!-- Minified CSS ( CDN ) in head --&gt; 
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;https://unpkg.com/css/simui.min.css&quot;&gt; <br>
&lt;!--Minified JS ( CDN) script tag to your project's head / footer --&gt; 
&lt;script async src=&quot;https://unpkg.com/js/simui.min.js&quot;&gt;&lt;/script&gt;
</pre>
</code>
<p>
<br>
<a href="simui.zip" class="btn" download>Download (Zip)</a>
</p>
</section>
</div>

<style type="text/css">
.tab__content--show{ display: block; }
.tab__buttons>*{ 
    cursor: pointer;
    margin-bottom: 5px;
    color: #444;
    font-size: 15px;
    border-bottom: 1px solid #ddd;
}

.tabcontent section:first-child{
 	margin-top: 0px;
 	padding-top: 50px;
}

.tabcontent section:last-child{
 	margin-bottom: 0px;
 	padding-bottom: 50px;
}


.tab--active{
	opacity: 0.5;
}

.tabcontent .code-example ul:not(.gap__example ul){
	box-sizing: border-box;
	gap: 10px;
}
.tabcontent .code-example li{
  padding: 20px; 
  box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;  
  background: #eee;
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




.align-example>div{
	height: 300px;
	background: #bbb;
	margin-bottom: 20px;
}
.align-example>div{
	grid-template-columns: auto auto;
	gap: 20px;
}
.align-example>div>*{
	padding: 20px;
	background: #fff;

}

.background-example>*{
	background-image: url('/img/place-holder.jpg');
	height: 300px;
	max-width: 500px;
	margin: auto;
	width: 100%;
	margin-bottom: 20px;

}
.overlay-example *{
	color: white;
}

.overlay-example .su-overlay{
	width: 100%;
	max-width: 500px;
	margin: auto;
	display: block;
	margin-bottom: 20px;
}
.overlay-example .su-overlay img{
	width: 100%;
}
.overlay-example .su-overlay__content{
	padding: 10px;
	background: var( --color--primary );
	bottom: 0;
	width: 100%;
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
.spacing-ex ul{
	display: grid;
	grid-template-columns: 1fr 1fr;
	background: var( --color-primary );
}


.code-block{
	box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;  
	padding: 10px;
	border-radius: 3px;
}
</style>
<main class="su-max-width1200px su-margin-y" id="documentation">
<div class="" data-info="min-860px#su-grid--a2">
<ul class="tab__buttons su-margin">
<li onclick="openTab(event, 'tab8')">Responsive HTML</li>
<li onclick="openTab(event, 'tab9')">Reactive HTML</li>
<li onclick="openTab(event, 'tab1')">Grid</li>
<li onclick="openTab(event, 'tab2')">Align</li>
<li onclick="openTab(event, 'tab3')">Text Align</li>
<li onclick="openTab(event, 'tab4')">Display</li>
<li onclick="openTab(event, 'tab5')">Background</li>
<li onclick="openTab(event, 'tab6')">Overlay</li>
<li onclick="openTab(event, 'tab10')">Colors</li>
<li onclick="openTab(event, 'tab11')">Spacing</li>
<li onclick="openTab(event, 'tab12')">Containers</li>
</ul>
<div class="tab__content__container">

<article class="tabcontent" id="tab8">

<section class="article__intro su-margin-y--lg su-margin-x">
<h2>Responsive HTML</h2>
<p>One of the most powerful feautres of this package is that you can add a custom class name
attribute to a certain break point without having to write CSS media queries.</p>
<blockquote>Let us show two examples below.<br>
1. add a custom blue background class name for mobile devices only ( from 767px width and below) and, <br>
2. add a custom yellow background class name for desktop devices only ( from 768px width and above)</blockquote>
</section>

<section class="su-margin-y--lg su-margin-x">
<h3>Example #1 : Adding blue background for Mobile Devices only </h3>
<ol>
<li>Create a div html element and add data-info="" attribute</li>
<li>Create a CSS class name and call it 'blue', and give it a <em>background-color: blue; </em> CSS value</li>
<li>Add a <em>data-info=""</em> attribute, and write the following pattern</li>
<li>Add <em>max-767px#blue</em> into this data attribute</li>
<li>Now the final results should be <em>&lt;div data-info=&quot;max-767px#blue&quot;&gt;&lt;/div&gt;</em></li>
<li>The results for this code should produce a class name called 'blue', being added only for all</li> devices starting from 767px of width and below</li>
<li> <strong>Please resize the browser to see the changes</strong></li>
</ol>
<p><strong>Note:</strong></p>
<ul>
<li>A # Sign, seperate a breakpoint and desired class name</li>
<li>A . Sign, seperate each collection so you can add many class for different devices as you want </li>
</ul>

<code class="code-example ex8">
<div class="code-block">
<style type="text/css">
               .blue{
                  background-color: blue;
               }
            </style>
<div data-info="max-767px#blue" style="height: 250px;"></div>
</div>

</code>
</section>
<section class="su-margin-y--lg su-margin-x">
<h3>Example #2 : Adding yellow background for Desktop Devices only</h3>
<p><strong>What if you want to add more classes for another devices?</strong></p>
<p>We csan achieve that by seperating each set by a period ( a dot or '.'). Take a look an example below.</p>
<ol>
<li>Create a CSS class name and call it 'yellow', and give it a <em>background-color: yellow; </em> CSS value.</li>
<li>From the previous html snippet <em>&lt;div data-info=&quot;max-767px#blue&quot;&gt;&lt;/div&gt;</em>,
add <em>.min-768px#yellow</em> to the <em>data-info=""</em> attribute</li>
<li> The final code should be updated to <em>&lt;div data-info=&quot;max-767px#blue.min-768px#yellow&quot;&gt;&lt;/div&gt;</em></li>
<li>Now if you resize the browser you should see a blue on mobile screens and yellow on desktop screens</li>
</ol>
<p><strong>Note:</strong></p>
<ul>
<li>A # Sign, seperate a breakpoint and desired class name</li>
<li>A . Sign, seperate each collection so you can add many class for different devices as you want </li>
</ul>

<code class="code-example ex9">
<div class="code-block">
<style type="text/css">
               .blue{
                  background-color: blue;
               }
               .yellow{
                  background-color: yellow;
               }
            </style>
<div data-info="max-767px#blue.min-768px#yellow" style="height: 250px;"></div>
</div>

</code>
</section>
</article> <article class="tabcontent" id="tab9">

<section class="article__intro su-margin-y--lg su-margin-x">
<h2>Reactive HTML</h2>
<p>One of the most powerful feautres of this package is that you can toggle a class name for any HTML element, when ever a your desired element is triggered.</p>
<blockquote>Let us show two examples below.</blockquote>
</section>

<section class="su-margin-y--lg su-margin-x">
<h3>Example #1 : Adding blue background to a paragraph when button is clicked </h3>
<ol>
<li>Create a paragraph html element and add <em>id="myparagraph"</em> attribute</li>
<li>Create a CSS class name and call it 'blue', and give it a <em>background-color: blue; </em> CSS value</li>
<li>Next, create a button html element and add data-toggle="" attribute</li>
<li>Add <em> 'myparagraph|blue|click'</em> to the data-toggle="" attribute </li>
<li>The results should be, a blue paragraph when the button is clicked</li>
<li>Please click on button to see the results</li>
</ol>
<p><strong>Note:</strong></p>
<ul>
<li>The format is : id|class name|event </li>
<li>
Where : id - is attribute of an element to be changed ( like p#myparagraph )<br>
class Name : is class name to be toggled on that id ( like .blue class you created )<br>
event : is an event on the element with a data-toggle attribute ( like button you create)
</li>
<li>
Event can be any of JavaScript events such as ( click, mousemove, mousedown etc )
</li>
</ul>

<code class="code-example ex10">
<div class="code-block">
<style type="text/css">
               .blue{
                  background-color: blue;
               }
            </style>
<button data-toggle="myparagraph|blue|click">Click Me</button>
<p id="myparagraph" style="padding: 10px;">
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
</p>
</div>

</code>
<p>
If you want to add multiple class names for a same class name you can make use of<em> data-toggleall=""</em> attribute
</p>

<code class="code-example ex11">
<div class="code-block">
<style type="text/css">
               .green{
                  background-color: green;
               }
            </style>
<button data-toggleall="p1|green|click">Change Backgroud</button>
<button data-toggleall="p2|green|click">Change Backgroud</button>
<p id="p1" style="padding: 10px;">
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
</p>
<p id="p2" style="padding: 10px;">
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
</p>
</div>

</code>
</section>
</article> <article class="tabcontent" id="tab1">

<section class="article__intro su-margin-y--lg su-margin-x">
<h2>Grid View</h2>
<p>Simui has certain kewords in the class name which are used to create a grid. A
<em>.su-grid--fr4</em> container div will create a <strong>4 Equal Grid blocks.</strong>
</p>
<blockquote>Let us analyse: <em>.su-grid--fr4</em> container div, the last part <em>fr4</em> is important!</blockquote>
</section>

<section class="su-margin-y--lg su-margin-x">
<h3>Example #1 : Equal Columns (fr)</h3>
<ol>
<li>Fr : Mean <strong>equal columns</strong> (change it to : A to get 4 AUTO WIDTH COLUMNS e.g <em>.su-grid--a4</em></li>
<li>4 : Mean <strong>four columns</strong> ( change it to any number from 1 to 12 for your desired grids)</li>
</ol>

<code class="code-example ex1">
<div class="code-block">
<ul class="su-grid--fr4">
<li>item</li>
<li>item </li>
<li>item </li>
<li>item </li>
</ul>
</div>

<label for="ex1">Test Equal Width Grid</label>
<select class="class-name-changer change"></select>
</code>
</section>
<section class="su-margin-y--lg su-margin-x">
<h3>Example #2 : AUTO Columns (a)</h3>
<p>The following example below is 3 column grid with auto widthed blocks.</p>

<code class="code-example ex2">
<div class="code-block">
<ul class="su-grid--a3">
<li>item</li>
<li>item </li>
<li>item </li>
</ul>
</div>

<label for="ex2">Test Auto Width Grid</label>
<select id="ex2" class="class-name-changer change"></select>
</code>
</section>

<section class="su-margin-y--lg su-margin-x">
<h3>Example #3 : Responsive</h3>
<p>
In order to make the grid responsive, you can target any screen device, simple add a data attribute called data-info to the main container. Please follow the <strong>3 important steps to archive amount of grids per screen device</strong> below:
</p>
<ol>
<li>Add a data attribute called <em>data-info=""</em></li>
<li>
Add a following string combination to <em>data-info=""</em> :
<ol class="sublist">
<li>a break point and device width, like <em>min-768px or max-768px</em></li>
<li>Seperate using a <em>#</em></li>
<li>put you desired class name like <em>su-grid--fr2</em></li>
<li>Seperate using a period if you want to add more class names for their respective devices</li>
</ol>
</li>
</ol>
<p>The following example will produce a 4 grid column on devices starting from 800px and above, it will also produce 2 grid columns on 800px devices and below. <strong>Please resize the browser window to see the results</strong></p>

<code class="code-example ex3">
<div class="code-block">
<ul class="" data-info="min-800px#su-grid--fr4">
<li>item</li>
<li>item </li>
<li>item </li>
<li>item </li>
</ul>
</div>

<select class="class-name-changer"></select>
<div class="add-group su-display--inline-block">
<input type="number" name="" value="768" step="1" class="add-group__input">
<select class="add-group__select">
<option value="min-">Min</option>
<option value="max-">Max</option>
</select>
<button class="add-group__btn">Add</button>
<div class="add-group__delete-btns su-margin-y--sm">
</div>
</div>
</code>
<p>
<small>You can add more combinations and seperated them with a period as shown above.</small>
</p>
</section>
</article> <div class="tabcontent" id="tab2">

<section class="article__intro su-margin-y--lg su-margin-x">
<h2>Align Content</h2>
<p>Simui has certain kewords in the class name which are used to align or justify content. A
<em>.su-align__center--center</em> container div will <strong>center content horizontal and vertical.</strong>
</p>
<blockquote>
Let us analyse: <em>su-align__center--center</em> container div, the last part <em>__center--center</em> is important.
</blockquote>
</section>

<section class="su-margin-y--lg su-margin-x">
<h3>Example #1 : Align inner Content</h3>
<ol>
<li><em>__center</em> : Mean Justify items horizontally ( where center can also be <em>left, right, space-between, space-around or space-evenly</em>)</li>
<li><em>--center</em> : Mean Justify items vertically ( where center can also be <em>top or bottom</em>)</li>
</ol>

<code class="code-example ex4">
<div class="code-block align-example">
<div class="su-align__right--bottom">
 <div>item</div>
<div>item</div>
</div>
</div>

<label for="ex1">Test Alignment</label>
<select class="class-name-changer change"></select>
</code>
</section>
</div> <div class="tabcontent" id="tab3">

<section class="article__intro su-margin-y--lg su-margin-x">
<h2>Text Align</h2>
<p>Simui has certain kewords in the class name which are used to align or justify text. A
<em>.su-text-align--center</em> element <strong>centers text horizontal.</strong>
</p>
<blockquote>
Let us analyse: <em>su-text-align--center</em> container div, the last part <em>--center</em> is important.
</blockquote>
</section>

<section class="su-margin-y--lg su-margin-x">
<h3>Example #1 : Align Text</h3>
<ol>
<li><em>--center</em> : Mean align or justify text horizontally ( where center can also be <em>left, right, or justify</em>)</li>
</ol>

<code class="code-example ex5">
<div class="code-block text-align-example">
<div class="su-text-align--center">
<p style="max-width: 550px;">
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
</p>
</div>
</div>

<label for="ex5">Test Text Alignment</label>
<select class="class-name-changer change"></select>
</code>
</section>
</div> <div class="tabcontent" id="tab4">

<section class="article__intro su-margin-y--lg su-margin-x">
<h2>Display | Hide Content</h2>
<p>Simui has certain kewords in the class name which are used display or hide content. A
<em>.su-display--block</em> element <strong> Display content as block.</strong>
</p>
<blockquote>
Let us analyse: <em>su-display--block</em> container div, the last part <em>--block</em> is important.
</blockquote>
</section>

<section class="su-margin-y--lg su-margin-x">
<h3>Example #1 : Display Content</h3>
<ol>
<li><em>su-display--block</em> : Mean display content as block ( where block can also be <em> none, grid, or flex</em>)</li>
</ol>

<code class="code-example ex6">
<div class="code-block align-example">
<ul class="su-text-align--center">
<li>item</li>
<li>item</li>
</ul>
</div>

<label for="ex6">Test Display Alignment</label>
<select class="class-name-changer change"></select>
</code>
</section>
</div> <div class="tabcontent" id="tab5">

<section class="article__intro su-margin-y--lg su-margin-x">
<h2>Background</h2>
<p>Simui has certain kewords in the class name which are used for background settings. A
<em>su-background--fixed</em> element <strong> will have a parallex effect when strolling the page.</strong>
</p>
<blockquote>
Let us analyse: <em>su-background--fixed</em> container div, the last part <em>--fixed</em> is important.
</blockquote>
</section>

<section class="su-margin-y--lg su-margin-x">
<h3>Example #1 : Background</h3>
<ol>
<li><em>su-background--fixed</em> : Mean background image is fixed on scroll ( where fixed can also be <em> repeat, repeat-x, repeat-y or contain</em>)</li>
</ol>

<code class="code-example ex7">
<div class="code-block background-example">
<div class="su-background su-background--fixed">
</div>
</div>

<label for="ex6">Test Background</label>
<select class="class-name-changer change"></select>
</code>
</section>
</div> <div class="tabcontent" id="tab6">

<section class="article__intro su-margin-y--lg su-margin-x">
<h2>Overlay</h2>
<p>Simui has certain class name which is used for overlay settings. A parent element Must Have a class Name called <em>.su-overlay</em> and direct inner element must have <em>.su-overlay__content </em> class name to create overlay.
</p>
<blockquote>
Let us analyse: <em>.su-overlay</em> container div with a inner block, <em>su-overlay__content</em> below.
</blockquote>
</section>

<section class="su-margin-y--lg su-margin-x">
<h3>Example #1 : Overlay</h3>
<ol>
<li>A div below has class name called <em>su-overlay</em></li>
<li>A inner element ( html5 section tag) has class name called <em>su-overlay__content</em></li>
</ol>

<code class="code-example ex7">
<div class="code-block overlay-example">
<div class="su-overlay">
<img src="/img/place-holder.jpg">
<div class="su-overlay__content">
<h3>Heading</h3>
<p>Paragraph</p>
</div>
</div>
</div>

</code>
</section>
</div> <article class="tabcontent" id="tab10">

<section class="article__intro su-margin-y--lg su-margin-x">
<h2>Colors</h2>
<p>
-Colors are seperated into four types: <strong>Primary, Secondary, Black and White</strong>.<br>
-They have two groups : <strong>Background color and Text/Font color</strong><br>
</p>
<blockquote>
Below we will show you how to override the default colors using CSS vars and we will show you
how to use the color based class names.
</blockquote>
</section>
<section class="su-margin-y--lg su-margin-x">
<h3>Overriding Default Color Values</h3>
<p>Please copy the code below and change the default varibles to your desired values.</p>

<code class="code-example">
<div class="code-block">
<style type="text/css">
               :root {
                   --color-white: #fefefe;
                   --color-black: #333;
                   --color-primary: #80a3b1;
                   --color-secondary: #7812ff;
               }
            </style>
</div>

</code>
</section>
<section class="su-margin-y--lg su-margin-x">
<h3>Example #1 : Background Color</h3>

<code class="code-example background-color__example">
<div class="code-block background-color">
<div style="height: 50px;">Item</div>
</div>

<label for="ex6">Test Background Color</label>
<select class="class-name-changer change"></select>
</code>
</section>
<section class="su-margin-y--lg su-margin-x">
<h3>Example #2 : Text Color</h3>

<code class="code-example color__example">
<div class="code-block color">
<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
</div>

<label for="ex6">Test Color</label>
<select class="class-name-changer change"></select>
</code>
</section>
</article> <article class="tabcontent" id="tab11">

<section class="article__intro su-margin-y--lg su-margin-x">
<h2>Spacing</h2>
<p>
-Spacing is seperated into three groups: <strong>Padding, Margin and Gap</strong>.<br>
-Each group has two directions : <strong>Vertical and Horizontal</strong><br>
-Each group has three size types : <strong>Small, Normal/Medium and Large</strong>
</p>
<blockquote>
Below we have an example of all three groups with their varients of classes and we are going to show you how to change their factory values using CSS varibles.
</blockquote>
</section>
<section class="su-margin-y--lg su-margin-x">
<h3>Overriding Default Spacing Values</h3>
<p>Please copy the code below and change the default varibles to your desired values.</p>

<code class="code-example">
<div class="code-block">
<style type="text/css">
            :root {
                --spacing-sm: 20px;
                --spacing: 50px;
                --spacing-lg: 100px;
            }
            </style>
</div>

</code>
</section>
<section class="su-margin-y--lg su-margin-x">
<h3>Example #1 : Padding (with direction and varients)</h3>

<code class="code-example padding__example spacing-ex">
<div class="code-block padding">
<ul>
<li>Item</li>
<li>Item</li>
</ul>
</div>

<label for="ex6">Test Padding</label>
<select class="class-name-changer change"></select>
</code>
</section>
<section class="su-margin-y--lg su-margin-x">
<h3>Example #2 : Margin (with direction and varients)</h3>

<code class="code-example margin__example spacing-ex">
<div class="code-block margin">
<ul>
<li>Item</li>
<li>Item</li>
</ul>
</div>

<label for="ex6">Test Margin</label>
<select class="class-name-changer change"></select>
</code>
</section>
<section class="su-margin-y--lg su-margin-x">
<h3>Example #3 : Gap (with direction and varients)</h3>

<div class="code-example gap__example spacing-ex">
<div class="code-block gap">
<ul>
<li>Item</li>
<li>Item</li>
<li>Item</li>
<li>Item</li>
</ul>
</div>

<label for="ex6">Test Gap</label>
<select class="class-name-changer change"></select>
</div>
</section>
</article> <article class="tabcontent" id="tab12">

<section class="article__intro su-margin-y--lg su-margin-x">
<h2>Containers</h2>
<p>
-Containers are seperated into three groups: <strong>Max width Center Position, Max width Left Position and Max width right Position</strong>.<br>
-Each container has a spacific Max width : <strong>like su-max-width1200px, where 1200px is a number from 600px to 2000px</strong><br>
-Each container has Position : <strong>left or right, by default it is (auto | center)</strong>
</p>
<blockquote>
Below we have an example of all posible containers that you can leverage.
</blockquote>
</section>
<section class="su-margin-y--lg su-margin-x">
<h3>Example #1 : Container Options</h3>

<code class="code-example max-width spacing-ex">
<div class="code-block max-width">
<div class="su-max-width600px">
 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
</div>
</div>

<label for="ex6">Test Padding</label>
<select class="class-name-changer change"></select>
</code>
</section>
</article> </div>
</div>
</main>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">

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
</script>
<link rel="stylesheet" href="https://cookienotice.js.org/themes/flat-light/cookienotice.min.css"/>
<div id="cookie-notice">
We use cookies to deliver better experience.
<a href="https://cookienotice.js.org/about-cookies" class="cookie-notice-more" target="_blank" rel="noopener">More info</a>
<a href="javascript:void(0)" class="cookie-notice-close" onclick="closeCookieNotice()">Got it</a>
</div>
<div class="su-background-color--primary">
<footer class="su-padding su-margin-y  su-color--white su-max-width1500px" style="clip-path: polygon(0 20%, 100% 0, 100% 100%, 0 100%); margin-bottom: 0;">
<center>
&copy; 2022 <a href="/">SIMUI</a> <br>
<a href="" title="admin@simuicode.com" class="link"><br>
<a href="tel:0638593652" title="" class="link">063 859 3652</a><br><br>
<a href="policy.php">Terms and Conditions</a>

| Partner with <a href="https://wildweb.co.za/" class="link">WildWeb</a> &amp; <a href="https://shannongovender.com/" class="link">Shannon Govender</a>
</center>
</footer>
</div>

<script data-cfasync="false" src="//cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
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

<script type="text/javascript">
$(document).ready(function(){
let gridClassesFr = [
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
let maxWidth = [
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
let gridClassesA = [
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
 'su-text-align--left',
 'su-text-align--center',
 'su-text-align--right',
 'su-text-align--justify',
];

let display = [
	'su-display--block',
	'su-display--none',
	'su-display--grid',
	'su-display--flex'
];

let background = [
'su-background su-background--fixed',
'su-background su-background--repeat',
'su-background su-background--repeat-x',
'su-background su-background--repeat-y',
'su-background su-background--contain',
];

let padding = [
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
'su-background-color--primary',
'su-background-color--secondary',
'su-background-color--black',
'su-background-color--white',
];

let color = [
'su-color--primary',
'su-color--secondary',
'su-color--black',
'su-color--white',
];



function genClassPicker( el, listOfClasses ) {
	for( let className of  listOfClasses ){
			$(el+" .class-name-changer").append('<option value"'+className+'">'+className+'</option>');	
	}
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




function codeGen() {
	$(".code-example").each(function(index, el) {
		  $(el).find("pre.source-code").remove();
		  $(el).append('<pre class="source-code"></pre>');
		  $(el).find('pre.source-code').text( $(el).find(".code-block").html() );
	});

}


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

});


</script>
</body>
</html>