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
<link rel="canonical" href="index.php"/>

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
<li><a href="./index.php">Home</a></li>
<li><a href="./index.php#get-started">Get Started</a></li>
<li><a href="./index.php#documentation">Documentation</a></li>
<li><a href=".examples.php">Examples</a></li>

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
<div class="su-max-width900px su-margin-y su-background-color--white su-padding--sm">
<h2>TERMS AND CONDITIONS</h2>

<p>Last updated: 2022-01-04</p>

<p>1. Introduction</p>

<p>Welcome to Khanda (&ldquo;Company&rdquo;, &ldquo;we&rdquo;, &ldquo;our&rdquo;, &ldquo;us&rdquo;)!</p>

<p>These Terms of Service (&ldquo;Terms&rdquo;, &ldquo;Terms of Service&rdquo;) govern your use of our website located at simuicode.com (together or individually &ldquo;Service&rdquo;) operated by Khanda.</p>

<p>Our Privacy Policy also governs your use of our Service and explains how we collect, safeguard and disclose information that results from your use of our web pages.</p>

<p>Your agreement with us includes these Terms and our Privacy Policy (&ldquo;Agreements&rdquo;). You acknowledge that you have read and understood Agreements, and agree to be bound of them.</p>

<p>If you do not agree with (or cannot comply with) Agreements, then you may not use the Service, but please let us know by emailing at siphamandlambokazicontact@gmail.com so we can try to find a solution. These Terms apply to all visitors, users and others who wish to access or use Service.</p>

<p>2. Communications</p>

<p>By using our Service, you agree to subscribe to newsletters, marketing or promotional materials and other information we may send. However, you may opt out of receiving any, or all, of these communications from us by following the unsubscribe link or by emailing at siphamandlambokazicontact@gmail.com.</p>

<p>3. Contests, Sweepstakes and Promotions</p>

<p>Any contests, sweepstakes or other promotions (collectively, &ldquo;Promotions&rdquo;) made available through Service may be governed by rules that are separate from these Terms of Service. If you participate in any Promotions, please review the applicable rules as well as our Privacy Policy. If the rules for a Promotion conflict with these Terms of Service, Promotion rules will apply.</p>

<p>4. Content</p>

<p>Our Service allows you to post, link, store, share and otherwise make available certain information, text, graphics, videos, or other material (&ldquo;Content&rdquo;). You are responsible for Content that you post on or through Service, including its legality, reliability, and appropriateness.</p>

<p>By posting Content on or through Service, You represent and warrant that: (i) Content is yours (you own it) and/or you have the right to use it and the right to grant us the rights and license as provided in these Terms, and (ii) that the posting of your Content on or through Service does not violate the privacy rights, publicity rights, copyrights, contract rights or any other rights of any person or entity. We reserve the right to terminate the account of anyone found to be infringing on a copyright.</p>

<p>You retain any and all of your rights to any Content you submit, post or display on or through Service and you are responsible for protecting those rights. We take no responsibility and assume no liability for Content you or any third party posts on or through Service. However, by posting Content using Service you grant us the right and license to use, modify, publicly perform, publicly display, reproduce, and distribute such Content on and through Service. You agree that this license includes the right for us to make your Content available to other users of Service, who may also use your Content subject to these Terms.</p>

<p>Khanda has the right but not the obligation to monitor and edit all Content provided by users.</p>

<p>In addition, Content found on or through this Service are the property of Khanda or used with permission. You may not distribute, modify, transmit, reuse, download, repost, copy, or use said Content, whether in whole or in part, for commercial purposes or for personal gain, without express advance written permission from us.</p>

<p>5. Prohibited Uses</p>

<p>You may use Service only for lawful purposes and in accordance with Terms. You agree not to use Service:</p>

<p>0.1. In any way that violates any applicable national or international law or regulation.</p>

<p>0.2. For the purpose of exploiting, harming, or attempting to exploit or harm minors in any way by exposing them to inappropriate content or otherwise.</p>

<p>0.3. To transmit, or procure the sending of, any advertising or promotional material, including any &ldquo;junk mail&rdquo;, &ldquo;chain letter,&rdquo; &ldquo;spam,&rdquo; or any other similar solicitation.</p>

<p>0.4. To impersonate or attempt to impersonate Company, a Company employee, another user, or any other person or entity.</p>

<p>0.5. In any way that infringes upon the rights of others, or in any way is illegal, threatening, fraudulent, or harmful, or in connection with any unlawful, illegal, fraudulent, or harmful purpose or activity.</p>

<p>0.6. To engage in any other conduct that restricts or inhibits anyone&rsquo;s use or enjoyment of Service, or which, as determined by us, may harm or offend Company or users of Service or expose them to liability.</p>

<p>Additionally, you agree not to:</p>

<p>0.1. Use Service in any manner that could disable, overburden, damage, or impair Service or interfere with any other party&rsquo;s use of Service, including their ability to engage in real time activities through Service.</p>

<p>0.2. Use any robot, spider, or other automatic device, process, or means to access Service for any purpose, including monitoring or copying any of the material on Service.</p>

<p>0.3. Use any manual process to monitor or copy any of the material on Service or for any other unauthorized purpose without our prior written consent.</p>

<p>0.4. Use any device, software, or routine that interferes with the proper working of Service.</p>

<p>0.5. Introduce any viruses, trojan horses, worms, logic bombs, or other material which is malicious or technologically harmful.</p>

<p>0.6. Attempt to gain unauthorized access to, interfere with, damage, or disrupt any parts of Service, the server on which Service is stored, or any server, computer, or database connected to Service.</p>

<p>0.7. Attack Service via a denial-of-service attack or a distributed denial-of-service attack.</p>

<p>0.8. Take any action that may damage or falsify Company rating.</p>

<p>0.9. Otherwise attempt to interfere with the proper working of Service.</p>

<p>6. Analytics</p>

<p>We may use third-party Service Providers to monitor and analyze the use of our Service.</p>

<p>7. No Use By Minors</p>

<p>Service is intended only for access and use by individuals at least eighteen (18) years old. By accessing or using Service, you warrant and represent that you are at least eighteen (18) years of age and with the full authority, right, and capacity to enter into this agreement and abide by all of the terms and conditions of Terms. If you are not at least eighteen (18) years old, you are prohibited from both the access and usage of Service.</p>

<p>8. Intellectual Property</p>

<p>Service and its original content (excluding Content provided by users), features and functionality are and will remain the exclusive property of Khanda and its licensors. Service is protected by copyright, trademark, and other laws of and foreign countries. Our trademarks may not be used in connection with any product or service without the prior written consent of Khanda.</p>

<p>9. Copyright Policy</p>

<p>We respect the intellectual property rights of others. It is our policy to respond to any claim that Content posted on Service infringes on the copyright or other intellectual property rights (&ldquo;Infringement&rdquo;) of any person or entity.</p>

<p>If you are a copyright owner, or authorized on behalf of one, and you believe that the copyrighted work has been copied in a way that constitutes copyright infringement, please submit your claim via email to siphamandlambokazicontact@gmail.com, with the subject line: &ldquo;Copyright Infringement&rdquo; and include in your claim a detailed description of the alleged Infringement as detailed below, under &ldquo;DMCA Notice and Procedure for Copyright Infringement Claims&rdquo;</p>

<p>You may be held accountable for damages (including costs and attorneys&rsquo; fees) for misrepresentation or bad-faith claims on the infringement of any Content found on and/or through Service on your copyright.</p>

<p>10. DMCA Notice and Procedure for Copyright Infringement Claims</p>

<p>You may submit a notification pursuant to the Digital Millennium Copyright Act (DMCA) by providing our Copyright Agent with the following information in writing (see 17 U.S.C 512(c)(3) for further detail):</p>

<p>0.1. an electronic or physical signature of the person authorized to act on behalf of the owner of the copyright&rsquo;s interest;</p>

<p>0.2. a description of the copyrighted work that you claim has been infringed, including the URL (i.e., web page address) of the location where the copyrighted work exists or a copy of the copyrighted work;</p>

<p>0.3. identification of the URL or other specific location on Service where the material that you claim is infringing is located;</p>

<p>0.4. your address, telephone number, and email address;</p>

<p>0.5. a statement by you that you have a good faith belief that the disputed use is not authorized by the copyright owner, its agent, or the law;</p>

<p>0.6. a statement by you, made under penalty of perjury, that the above information in your notice is accurate and that you are the copyright owner or authorized to act on the copyright owner&rsquo;s behalf.</p>

<p>You can contact our Copyright Agent via email at siphamandlambokazicontact@gmail.com.</p>

<p>11. Error Reporting and Feedback</p>

<p>You may provide us either directly at siphamandlambokazicontact@gmail.com or via third party sites and tools with information and feedback concerning errors, suggestions for improvements, ideas, problems, complaints, and other matters related to our Service (&ldquo;Feedback&rdquo;). You acknowledge and agree that: (i) you shall not retain, acquire or assert any intellectual property right or other right, title or interest in or to the Feedback; (ii) Company may have development ideas similar to the Feedback; (iii) Feedback does not contain confidential information or proprietary information from you or any third party; and (iv) Company is not under any obligation of confidentiality with respect to the Feedback. In the event the transfer of the ownership to the Feedback is not possible due to applicable mandatory laws, you grant Company and its affiliates an exclusive, transferable, irrevocable, free-of-charge, sub-licensable, unlimited and perpetual right to use (including copy, modify, create derivative works, publish, distribute and commercialize) Feedback in any manner and for any purpose.</p>

<p>12. Links To Other Web Sites</p>

<p>Our Service may contain links to third party web sites or services that are not owned or controlled by Khanda.</p>

<p>Khanda has no control over, and assumes no responsibility for the content, privacy policies, or practices of any third party web sites or services. We do not warrant the offerings of any of these entities/individuals or their websites.</p>

<p>For example, the outlined Terms of Use have been created using PolicyMaker.io, a free web application for generating high-quality legal documents. PolicyMaker&rsquo;s Terms and Conditions generator is an easy-to-use free tool for creating an excellent standard Terms of Service template for a website, blog, e-commerce store or app.</p>

<p>YOU ACKNOWLEDGE AND AGREE THAT COMPANY SHALL NOT BE RESPONSIBLE OR LIABLE, DIRECTLY OR INDIRECTLY, FOR ANY DAMAGE OR LOSS CAUSED OR ALLEGED TO BE CAUSED BY OR IN CONNECTION WITH USE OF OR RELIANCE ON ANY SUCH CONTENT, GOODS OR SERVICES AVAILABLE ON OR THROUGH ANY SUCH THIRD PARTY WEB SITES OR SERVICES.</p>

<p>WE STRONGLY ADVISE YOU TO READ THE TERMS OF SERVICE AND PRIVACY POLICIES OF ANY THIRD PARTY WEB SITES OR SERVICES THAT YOU VISIT.</p>

<p>13. Disclaimer Of Warranty</p>

<p>THESE SERVICES ARE PROVIDED BY COMPANY ON AN &ldquo;AS IS&rdquo; AND &ldquo;AS AVAILABLE&rdquo; BASIS. COMPANY MAKES NO REPRESENTATIONS OR WARRANTIES OF ANY KIND, EXPRESS OR IMPLIED, AS TO THE OPERATION OF THEIR SERVICES, OR THE INFORMATION, CONTENT OR MATERIALS INCLUDED THEREIN. YOU EXPRESSLY AGREE THAT YOUR USE OF THESE SERVICES, THEIR CONTENT, AND ANY SERVICES OR ITEMS OBTAINED FROM US IS AT YOUR SOLE RISK.</p>

<p>NEITHER COMPANY NOR ANY PERSON ASSOCIATED WITH COMPANY MAKES ANY WARRANTY OR REPRESENTATION WITH RESPECT TO THE COMPLETENESS, SECURITY, RELIABILITY, QUALITY, ACCURACY, OR AVAILABILITY OF THE SERVICES. WITHOUT LIMITING THE FOREGOING, NEITHER COMPANY NOR ANYONE ASSOCIATED WITH COMPANY REPRESENTS OR WARRANTS THAT THE SERVICES, THEIR CONTENT, OR ANY SERVICES OR ITEMS OBTAINED THROUGH THE SERVICES WILL BE ACCURATE, RELIABLE, ERROR-FREE, OR UNINTERRUPTED, THAT DEFECTS WILL BE CORRECTED, THAT THE SERVICES OR THE SERVER THAT MAKES IT AVAILABLE ARE FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS OR THAT THE SERVICES OR ANY SERVICES OR ITEMS OBTAINED THROUGH THE SERVICES WILL OTHERWISE MEET YOUR NEEDS OR EXPECTATIONS.</p>

<p>COMPANY HEREBY DISCLAIMS ALL WARRANTIES OF ANY KIND, WHETHER EXPRESS OR IMPLIED, STATUTORY, OR OTHERWISE, INCLUDING BUT NOT LIMITED TO ANY WARRANTIES OF MERCHANTABILITY, NON-INFRINGEMENT, AND FITNESS FOR PARTICULAR PURPOSE.</p>

<p>THE FOREGOING DOES NOT AFFECT ANY WARRANTIES WHICH CANNOT BE EXCLUDED OR LIMITED UNDER APPLICABLE LAW.</p>

<p>14. Limitation Of Liability</p>

<p>EXCEPT AS PROHIBITED BY LAW, YOU WILL HOLD US AND OUR OFFICERS, DIRECTORS, EMPLOYEES, AND AGENTS HARMLESS FOR ANY INDIRECT, PUNITIVE, SPECIAL, INCIDENTAL, OR CONSEQUENTIAL DAMAGE, HOWEVER IT ARISES (INCLUDING ATTORNEYS&rsquo; FEES AND ALL RELATED COSTS AND EXPENSES OF LITIGATION AND ARBITRATION, OR AT TRIAL OR ON APPEAL, IF ANY, WHETHER OR NOT LITIGATION OR ARBITRATION IS INSTITUTED), WHETHER IN AN ACTION OF CONTRACT, NEGLIGENCE, OR OTHER TORTIOUS ACTION, OR ARISING OUT OF OR IN CONNECTION WITH THIS AGREEMENT, INCLUDING WITHOUT LIMITATION ANY CLAIM FOR PERSONAL INJURY OR PROPERTY DAMAGE, ARISING FROM THIS AGREEMENT AND ANY VIOLATION BY YOU OF ANY FEDERAL, STATE, OR LOCAL LAWS, STATUTES, RULES, OR REGULATIONS, EVEN IF COMPANY HAS BEEN PREVIOUSLY ADVISED OF THE POSSIBILITY OF SUCH DAMAGE. EXCEPT AS PROHIBITED BY LAW, IF THERE IS LIABILITY FOUND ON THE PART OF COMPANY, IT WILL BE LIMITED TO THE AMOUNT PAID FOR THE PRODUCTS AND/OR SERVICES, AND UNDER NO CIRCUMSTANCES WILL THERE BE CONSEQUENTIAL OR PUNITIVE DAMAGES. SOME STATES DO NOT ALLOW THE EXCLUSION OR LIMITATION OF PUNITIVE, INCIDENTAL OR CONSEQUENTIAL DAMAGES, SO THE PRIOR LIMITATION OR EXCLUSION MAY NOT APPLY TO YOU.</p>

<p>15. Termination</p>

<p>We may terminate or suspend your account and bar access to Service immediately, without prior notice or liability, under our sole discretion, for any reason whatsoever and without limitation, including but not limited to a breach of Terms.</p>

<p>If you wish to terminate your account, you may simply discontinue using Service.</p>

<p>All provisions of Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.</p>

<p>16. Governing Law</p>

<p>These Terms shall be governed and construed in accordance with the laws of South Africa, which governing law applies to agreement without regard to its conflict of law provisions.</p>

<p>Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights. If any provision of these Terms is held to be invalid or unenforceable by a court, the remaining provisions of these Terms will remain in effect. These Terms constitute the entire agreement between us regarding our Service and supersede and replace any prior agreements we might have had between us regarding Service.</p>

<p>17. Changes To Service</p>

<p>We reserve the right to withdraw or amend our Service, and any service or material we provide via Service, in our sole discretion without notice. We will not be liable if for any reason all or any part of Service is unavailable at any time or for any period. From time to time, we may restrict access to some parts of Service, or the entire Service, to users, including registered users.</p>

<p>18. Amendments To Terms</p>

<p>We may amend Terms at any time by posting the amended terms on this site. It is your responsibility to review these Terms periodically.</p>

<p>Your continued use of the Platform following the posting of revised Terms means that you accept and agree to the changes. You are expected to check this page frequently so you are aware of any changes, as they are binding on you.</p>

<p>By continuing to access or use our Service after any revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, you are no longer authorized to use Service.</p>

<p>19. Waiver And Severability</p>

<p>No waiver by Company of any term or condition set forth in Terms shall be deemed a further or continuing waiver of such term or condition or a waiver of any other term or condition, and any failure of Company to assert a right or provision under Terms shall not constitute a waiver of such right or provision.</p>

<p>If any provision of Terms is held by a court or other tribunal of competent jurisdiction to be invalid, illegal or unenforceable for any reason, such provision shall be eliminated or limited to the minimum extent such that the remaining provisions of Terms will continue in full force and effect.</p>

<p>20. Acknowledgement</p>

<p>BY USING SERVICE OR OTHER SERVICES PROVIDED BY US, YOU ACKNOWLEDGE THAT YOU HAVE READ THESE TERMS OF SERVICE AND AGREE TO BE BOUND BY THEM.</p>

<p>21. Contact Us</p>

<p>Please send your feedback, comments, requests for technical support by email: siphamandlambokazicontact@gmail.com.</p>
<link rel="stylesheet" href="https://cookienotice.js.org/themes/flat-light/cookienotice.min.css"/>
<div id="cookie-notice">
We use cookies to deliver better experience.
<a href="https://cookienotice.js.org/about-cookies" class="cookie-notice-more" target="_blank" rel="noopener">More info</a>
<a href="javascript:void(0)" class="cookie-notice-close" onclick="closeCookieNotice()">Got it</a>
</div>
</div>
<div class="su-background-color--primary">
<footer class="su-padding su-margin-y  su-color--white su-max-width1500px" style="clip-path: polygon(0 20%, 100% 0, 100% 100%, 0 100%); margin-bottom: 0;">
<center>
&copy; 2023 <a href="/">SIMUI</a> <br>
<a href="" title="admin@simuicode.com" class="link"><br>
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



</script>
</body>
</html>