<?php
/*
Template Name: hogehoge
*/
?>
<?php get_header() ?>
<style>
.st-container,
.st-pusher,
.st-content {
	height: 100%;
}

.st-pusher {
	position: relative;
	left: 0;
	z-index: 99;
	height: 100%;
	-webkit-transition: -webkit-transform 0.5s;
	transition: transform 0.5s;
}

.st-pusher::after {
	position: absolute;
	top: 0;
	right: 0;
	width: 0;
	height: 0;
	background: rgba(0,0,0,0.2);
	content: '';
	opacity: 0;
	-webkit-transition: opacity 0.5s, width 0.1s 0.5s, height 0.1s 0.5s;
	transition: opacity 0.5s, width 0.1s 0.5s, height 0.1s 0.5s;
}

.st-menu-open .st-pusher::after {
	width: 100%;
	height: 100%;
	opacity: 1;
	-webkit-transition: opacity 0.5s;
	transition: opacity 0.5s;
}

.st-menu {
	position: absolute;
	top: 0;
	left: 0;
	z-index: 100;
	visibility: hidden;
	width: 300px;
	height: 100%;
	background: #48a770;
	-webkit-transition: all 0.5s;
	transition: all 0.5s;
}

.st-menu::after {
	position: absolute;
	top: 0;
	right: 0;
	width: 100%;
	height: 100%;
	background: rgba(0,0,0,0.2);
	content: '';
	opacity: 1;
	-webkit-transition: opacity 0.5s;
	transition: opacity 0.5s;
}

.st-menu-open .st-menu::after {
	width: 0;
	height: 0;
	opacity: 0;
	-webkit-transition: opacity 0.5s, width 0.1s 0.5s, height 0.1s 0.5s;
	transition: opacity 0.5s, width 0.1s 0.5s, height 0.1s 0.5s;
}

.st-effect-14.st-container {
	-webkit-perspective: 1500px;
	perspective: 1500px;
	-webkit-perspective-origin: 0% 50%;
	perspective-origin: 0% 50%;
}

.st-effect-14 .st-pusher {
	-webkit-transform-style: preserve-3d;
	transform-style: preserve-3d;
}

.st-effect-14.st-menu-open .st-pusher {
	-webkit-transform: translate3d(300px, 0, 0);
	transform: translate3d(300px, 0, 0);
}

.st-effect-14.st-menu {
	-webkit-transform: translate3d(-100%, 0, 0) rotateY(90deg);
	transform: translate3d(-100%, 0, 0) rotateY(90deg);
	-webkit-transform-origin: 0% 50%;
	transform-origin: 0% 50%;
	-webkit-transform-style: preserve-3d;
	transform-style: preserve-3d;
}

.st-effect-14.st-menu-open .st-effect-14.st-menu {
	visibility: visible;
	-webkit-transition-delay: 0.1s;
	transition-delay: 0.1s;
	-webkit-transition-timing-function: ease-in-out;
	transition-timing-function: ease-in-out;
	-webkit-transition-property: -webkit-transform;
	transition-property: transform;
	-webkit-transform: translate3d(-100%, 0, 0) rotateY(0deg);
	transform: translate3d(-100%, 0, 0) rotateY(0deg);
}

</style>
<div id="st-container">
    <div class="st-pusher">
        <nav class="st-menu st-effect-14">
		    <ul>
			    <li><a class="icon icon-data" href="#">Data Management</a></li>
				<li><a class="icon icon-location" href="#">Location</a></li>
			</ul>
        </nav>
		<div class="st-content">
		    <div id="st-trigger-effects">
                <button data-effect="st-effect-14">Click</button>
            </div>
	    </div>
    </div>
</div>
<?php get_footer() ?>
