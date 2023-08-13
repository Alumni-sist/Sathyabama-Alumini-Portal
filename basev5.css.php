body {
  font-family:"Nunito", sans-serif;
  background:#f8f9f3;
}
h1, h2, h3 {
  font-family:"Poppins", "Roboto", sans-serif;
  margin-top:0px;
}
h1 {
  font-weight:400;
  font-size:1.65em;
  margin-bottom:10px;
  color:#000000;
}
h2 { font-size:1.3em; }
h3 { font-size:1.2em; }
[ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak { display:none !important; }
.ellipsis {
  display:block;
  white-space:nowrap;
  overflow:hidden;
  text-overflow:ellipsis;
  -o-text-overflow:ellipsis;
  width:100%;
}
.icon-new {
  background:url("images/flash-new-icon.gif") no-repeat center top;
  display:inline-block;
  width:25px;
  height:10px;
}
.preloader {
  background:url("images/preloader.gif") no-repeat center center;
  display:inline-block;
  width:100%;
  height:15px;
  padding:20px;
}
#content-wrapper { min-height:650px; }
.home #content-wrapper { min-height:300px; }
#footer-wrapper { padding-top:20px; }
#footer-wrapper .wrap {
  background:rgba(0,0,0,0.05);
  border-top:1px solid #cccccc;
  padding:20px 0 20px;
}
#footer-box { color:#888888; }
#footer-box .footer-links {
  font-size:0.9em;
  line-height:1.5em;
  padding-bottom:12px;
}
#footer-box .footer-links a {
  color:#888888;
  font-weight:bold;
}
#footer-box .footer-logo-vaave {
  width:100%;
  height:60px;
  display:inline-block;
  background:url(fonts/vaave-footer-logo.svg) no-repeat;
}
#footer-box .footer-logo-vaave img {
  width:100px;
  height:45px;
  vertical-align:middle;
}
.logo-vaave {
  display:inline-block;
  background:url(images/logo-vaave.png) no-repeat;
}
.logo-vaave img {
  width:100px;
  height:25px;
  vertical-align:middle;
}
.top-links {
  text-transform:uppercase;
  font-size:1.1em;
  line-height:90px;
}
#header-wrapper { border-bottom:1px solid rgba(0,0,0,0.07); }
#nav-cms-wrapper {
  background:#ffffff;
  border-bottom:1px solid rgba(0,0,0,0.07);
  box-shadow:0px 5px 8px rgba(0,0,0,0.05);
}
#nav-cms .nav-aside {
  float:right;
  padding-right:0;
}
.navbar {
  margin-bottom:0px;
  min-height:30px;
  border:0;
}
.navbar-nav { border-left:1px solid rgba(0,0,0,0.07); }
.navbar-nav > li > a {
  transition:all 500ms;
  -webkit-transition:all 500ms;
  border-right:1px solid rgba(0,0,0,0.07);
  color:#444444;
  padding:15px 20px 12px;
  box-shadow:0px 0px 0px rgba(0,0,0,0.02) inset;
}
.navbar-nav > li > a:hover, .navbar-nav > li > a:focus {
  background-color:transparent;
  box-shadow:0px -70px 0px rgba(0,0,0,0.08) inset;
}
.navbar-nav > li > a.nav-active {
  background-color:transparent;
  box-shadow:0px -70px 0px rgba(0,0,0,0.03) inset;
}
.navbar-nav > li > a.highlight {
  background-color:transparent;
  background-image:url("images/flash-new-icon.gif");
  background-repeat:no-repeat;
  background-position:95% 15%;
  padding-right:20px;
}
.nav-active { background-color:#f5f5f5; }
.navbar-nav > li > ul.dropdown-menu {
  padding:0;
  margin:0;
  border-color:rgba(0,0,0,0.07);
}
.navbar-nav > li:hover > ul.dropdown-menu { display:block; }
.navbar-nav .highlight {
  background-color:transparent;
  background-image:url("images/flash-new-icon.gif");
  background-repeat:no-repeat;
  background-position:95% 15%;
  padding-right:20px;
}
.dropdown-menu > li > a {
  padding:12px 20px 10px;
  border-bottom:1px solid rgba(0,0,0,0.05);
  transition:all 500ms ease;
}
.not-logged-in #header-wrapper { background:#ffffff; }
.not-logged-in #header-box {
  padding-top:15px;
  padding-bottom:15px;
}
.logged-in #header-wrapper { background:#ffffff; }
.logged-in .navbar-nav > li > a { padding:12px 15px; }
#nav-user-wrapper {
  background:#ffffff;
  border-bottom:1px solid rgba(0,0,0,0.07);
  box-shadow:0px 1px 10px rgba(0,0,0,0.05);
  z-index:1000;
  padding-top:45px;
  left:0;
  top:0;
  right:0;
  position:relative;
}
#nav-user-wrapper.affix {
  top:0;
  position:fixed;
}
#nav-user-wrapper.affix .nav-item a {
  font-size:0.9em;
  padding:5px;
  height:50px;
  width:80px;
}
#nav-user-wrapper.affix .nav-item-last > a { height:50px; }
#nav-user-wrapper.affix .nav-item .link-text { display:none; }
#nav-user-wrapper.affix .nav-item a.credits { font-size:0.8em; }
#nav-user-wrapper.affix .nav-item-last { height:50px; }
#nav-user-wrapper.affix .nav-item-last .inner-item { line-height:30px; }
#nav-user ul {
  padding:0;
  margin:0;
  list-style-type:none;
}
#nav-user ul > li {
  transition:all 300ms;
  float:left;
}
#nav-user ul > li > a {
  width:115px;
  height:80px;
  padding:10px 0px;
  display:block;
  text-align:center;
  color:#666666;
  background-color:#ffffff;
  text-transform:uppercase;
  font-size:0.85em;
  transition:all 300ms, background-color 500ms ease;
  border-right:1px solid rgba(0,0,0,0.07);
}
#nav-user ul > li > ul, #nav-user .dropdown-menu {
  left:auto;
  right:0;
  border-color:rgba(0,0,0,0.1);
}
#nav-user ul > li > ul > li, #nav-user .dropdown-menu li {
  width:100%;
  float:none;
  z-index:1000;
  padding:0;
  height:auto;
}
#nav-user ul > li > ul > li > a, #nav-user .dropdown-menu li > a {
  color:#000000;
  padding:10px 50px;
  width:auto;
  height:auto;
  text-align:center;
  float:none !important;
  text-transform:none;
}
#nav-user ul > li > ul > li > a:hover, #nav-user .dropdown-menu li > a:hover { background:#f5f5f5; }
#nav-user .nav-item a:hover { background-color:#f5f5f5; }
#nav-user .nav-item .link-text {
  display:block;
  letter-spacing:0.2px;
}
#nav-user .nav-item-last {
  float:right;
  height:80px;
  padding:10px 0px;
}
#nav-user .nav-item-last .inner-item {
  display:block;
  line-height:60px;
  padding-left:15px;
  float:left;
}
#nav-user .nav-item-last .inner-item .link-text {
  letter-spacing:0;
  font-size:1.2em;
}
#nav-user .nav-item-count-wrapper {
  display:block;
  position:relative;
}
#nav-user .nav-item-count-wrapper .nav-item-count {
  background:#666666;
  color:#ffffff;
  position:relative;
  top:-10px;
  left:-17px;
  padding:2px 6px;
  border-radius:15px;
}
#nav-user .nav-item-count-wrapper .nav-item-count.active { background:#ef5e59; }
#nav-user .nav-item-count-wrapper:hover .nav-item-count {
  opacity:0.9;
  background:#191919;
}
#nav-user .credits {
  font-size:0.8em;
  color:#999999;
  padding:10px 25px;
  background:#f4f4f4;
}
#nav-user .credits span { color:#ff4b57; }
.border-top { border-top:1px solid #eeeeee; }
.border-bottom { border-bottom:1px solid #eeeeee; }
.border-light { border:1px solid #eeeeee; }
.img-rounded, .box-rounded { border-radius:50%; }
.text-center { text-align:center; }
.text-light { color:#999999; }
.text-light a { color:#666666; }
.text-lightest { color:#cccccc; }
.text-lightest a { color:#cccccc; }
.text-dark { color:#000000; }
.text-grey { color:#333333; }
.text-xs { font-size:0.8em; }
.text-sm { font-size:0.9em; }
.text-md { font-size:1.2em; }
.text-lg { font-size:1.3em; }
.text-xl { font-size:1.5em; }
.text-lh { line-height:1.6em; }
.bg-white { background-color:#ffffff; }
.bg-black { background-color:#000000; }
.bg-light { background-color:#f8f9f3; }
.bg-light-blue { background-color:#f8f9f3; }
.btn {
  padding:6px 18px;
  margin-right:2px;
  border:1px solid #e5e8f0;
  color:#666666;
  box-shadow:0px 0px 2px rgba(0,0,0,0.1) inset;
  border-radius:30px;
  transition:all 600ms;
}
.btn:hover, .btn:focus { box-shadow:0px -80px 0px rgba(0,0,0,0.5) inset; }
.btn.btn-xs { padding:0px 10px; }
.btn.btn-sm { padding:3px 12px; }
.btn.btn-lg {
  padding:8px 25px;
  font-size:1.1em;
}
.btn.btn-xl {
  padding:10px 35px;
  font-size:1.2em;
}
.btn.btn-outline {
  border-width:1px;
  box-shadow:0px 0px 0px rgba(0,0,0,0.1) inset;
  background:#ffffff;
}
.btn.btn-outline:hover { box-shadow:0px -50px 0px rgba(0,0,0,0.05) inset; }
.btn.btn-outline:focus { box-shadow:0px -50px 0px rgba(0,0,0,0.1) inset; }
.btn.btn-default {
  color:#ffffff;
  background:#c4c4c4;
  border-color:#cccccc;
}
.btn.btn-default.btn-outline {
  background:#ffffff;
  color:#666666;
}
.btn.btn-primary {
  color:#ffffff;
  background:#47a5ed;
  border-color:#55acee;
}
.btn.btn-primary.btn-outline {
  background:#ffffff;
  color:#55acee;
}
.btn.btn-success {
  color:#ffffff;
  background:#4ec64e;
  border-color:#5aca5a;
}
.btn.btn-success.btn-outline {
  background:#ffffff;
  color:#5aca5a;
}
.btn.btn-info {
  color:#ffffff;
  background:#2db5de;
  border-color:#3abae0;
}
.btn.btn-info.btn-outline {
  background:#ffffff;
  color:#3abae0;
}
.btn.btn-blue {
  color:#ffffff;
  background:#0f4cbf;
  border-color:#1155d7;
}
.btn.btn-blue.btn-outline {
  background:#ffffff;
  color:#1155d7;
}
.btn.btn-purple {
  color:#ffffff;
  background:#ad36d9;
  border-color:#b64bdd;
}
.btn.btn-purple.btn-outline {
  background:#ffffff;
  color:#b64bdd;
}
.btn.btn-xinfo {
  color:#ffffff;
  background:#a54fc8;
  border-color:#ab5bcc;
}
.btn.btn-xinfo.btn-outline {
  background:#ffffff;
  color:#ab5bcc;
}
.btn.btn-warning {
  color:#ffffff;
  background:#ed9a24;
  border-color:#ed9d24;
}
.btn.btn-warning.btn-outline {
  background:#ffffff;
  color:#ed9d24;
}
.btn.btn-danger {
  color:#ffffff;
  background:#ff3c49;
  border-color:#ff4b57;
}
.btn.btn-danger.btn-outline {
  background:#ffffff;
  color:#ff4b57;
}
.btn.btn-white {
  color:#ffffff;
  background:#ffffff;
  border-color:#eeeeee;
}
.btn.btn-white.btn-outline {
  background:#ffffff;
  color:#000000;
}
.btn.btn-black {
  color:#ffffff;
  background:#000000;
  border-color:#000000;
}
.btn.btn-black.btn-outline {
  background:#ffffff;
  color:#000000;
}
.btn.btn-transparent {
  color:#ffffff;
  background:transparent;
  border-color:#ffffff;
}
.btn.btn-transparent.btn-outline {
  background:#ffffff;
  color:#000000;
}
.btn.btn-plain, .btn.btn-link, .btn.btn-text { box-shadow:none; }
.btn.btn-plain:hover, .btn.btn-link:hover, .btn.btn-text:hover { box-shadow:none; }
.btn.btn-link, .btn.btn-text { border:none; }
.hline {
  border-top:1px solid #eeeeee;
  clear:both;
  margin-top:15px;
  padding-bottom:15px;
}
.row.no-pad {
  margin-right:0;
  margin-left:0;
}
.row.no-pad > [class*="col-"] {
  padding-right:0;
  padding-left:0;
}
.section-title {
  color:#191919;
  text-transform:uppercase;
  letter-spacing:2px;
  font-weight:700;
  padding:10px 0;
  margin-bottom:20px;
  border-bottom:2px solid #191919;
}
.section-title.gray {
  color:#cccccc;
  border-color:#eeeeee;
  border-bottom-width:1px;
}
.float-tube { overflow:hidden; }
.box {
  position:relative;
  display:inline;
  float:left;
}
.tube5 { padding:5px; }
.tube10 { padding:10px; }
.tube15 { padding:15px; }
.tube20 { padding:20px; }
.tube30 { padding:30px; }
.tube40 { padding:40px; }
.tube50 { padding:50px; }
.tube5x {
  padding-left:5px;
  padding-right:5px;
}
.tube10x {
  padding-left:10px;
  padding-right:10px;
}
.tube15x {
  padding-left:15px;
  padding-right:15px;
}
.tube20x {
  padding-left:20px;
  padding-right:20px;
}
.tube30x {
  padding-left:30px;
  padding-right:30px;
}
.tube40x {
  padding-left:40px;
  padding-right:40px;
}
.tube50x {
  padding-left:50px;
  padding-right:50px;
}
.tube5y {
  padding-top:5px;
  padding-bottom:5px;
}
.tube10y {
  padding-top:10px;
  padding-bottom:10px;
}
.tube15y {
  padding-top:15px;
  padding-bottom:15px;
}
.tube20y {
  padding-top:20px;
  padding-bottom:20px;
}
.tube30y {
  padding-top:30px;
  padding-bottom:30px;
}
.tube40y {
  padding-top:40px;
  padding-bottom:40px;
}
.tube50y {
  padding-top:50px;
  padding-bottom:50px;
}
.tube0 { padding:0px !important; }
.tube0t { padding-top:0px !important; }
.tube0b { padding-bottom:0px !important; }
.tube0l { padding-left:0px !important; }
.tube0r { padding-right:0px !important; }
.tyre0 { margin:0px !important; }
.img-occupy img {
  width:100%;
  height:auto;
}
.grayscale {
  filter:gray;
  filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale");
  -moz-filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale");
  -o-filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale");
  -webkit-filter:grayscale(100%);
}
.nav-icon {
  width:55px;
  height:40px;
  display:inline-block;
}
.nav-icon-dashboard { background-image:url(images/icon-new-dashboard.png); }
.bw-theme .nav-icon-dashboard { background-image:url(fonts/icon-bw-dashboard.svg); }
.white-theme .nav-icon-dashboard { background-image:url(images/icon-white-dashboard.png); }
.nav-icon-jobs { background-image:url(images/icon-new-job-board.png); }
.bw-theme .nav-icon-jobs { background-image:url(fonts/icon-bw-job-board.svg); }
.white-theme .nav-icon-jobs { background-image:url(images/icon-white-job-board.png); }
.nav-icon-members { background-image:url(images/icon-new-members.png); }
.bw-theme .nav-icon-members { background-image:url(fonts/icon-bw-members.svg); }
.white-theme .nav-icon-members { background-image:url(images/icon-white-members.png); }
.nav-icon-groups { background-image:url(images/icon-new-groups.png); }
.bw-theme .nav-icon-groups { background-image:url(fonts/icon-bw-groups.svg); }
.white-theme .nav-icon-groups { background-image:url(images/icon-white-groups.png); }
.nav-icon-events { background-image:url(images/icon-new-events_1.png); }
.bw-theme .nav-icon-events { background-image:url(fonts/icon-bw-events.svg); }
.white-theme .nav-icon-events { background-image:url(images/icon-white-events.png); }
.nav-icon-newsroom { background-image:url(images/icon-new-newsroom.png); }
.bw-theme .nav-icon-newsroom { background-image:url(fonts/icon-bw-newsroom.svg); }
.white-theme .nav-icon-newsroom { background-image:url(images/icon-white-newsroom.png); }
.nav-icon-biz-directory { background-image:url(images/icon-new-biz-directory.png); }
.bw-theme .nav-icon-biz-directory { background-image:url(fonts/icon-bw-biz-directory.svg); }
.white-theme .nav-icon-biz-directory { background-image:url(images/icon-white-directory.png); }
.nav-icon-business-dir { background-image:url(images/icon-new-business-dir.png); }
.bw-theme .nav-icon-business-dir { background-image:url(fonts/icon-bw-business-dir.svg); }
.white-theme .nav-icon-business-dir { background-image:url(images/icon-white-businessdirectory.png); }
.nav-icon-career-center { background-image:url(images/icon-new-career-center.png); }
.bw-theme .nav-icon-career-center { background-image:url(fonts/icon-bw-career-center.svg); }
.white-theme .nav-icon-career-center { background-image:url(images/icon-white-careercenter.png); }
.icon {
  background-image:url(images/icons-sprite-v5.png);
  width:25px;
  height:25px;
  display:inline-block;
  margin-right:5px;
  margin-bottom:-8px;
}
.bw-theme .icon.c1, .bw-theme .icon.c2, .bw-theme .icon.c3, .bw-theme .icon.c4, .bw-theme .icon.c5, .bw-theme .icon.c6, .bw-theme .icon.c7, .bw-theme .icon.c8 { background-position-y:-50px !important; }
.white-theme .icon.c1, .white-theme .icon.c2, .white-theme .icon.c3, .white-theme .icon.c4, .white-theme .icon.c5, .white-theme .icon.c6, .white-theme .icon.c7, .white-theme .icon.c8 { background-position-y:-50px !important; }
.white-theme #nav-user .icon.c1, .white-theme #nav-user .icon.c2, .white-theme #nav-user .icon.c3, .white-theme #nav-user .icon.c4, .white-theme #nav-user .icon.c5, .white-theme #nav-user .icon.c6, .white-theme #nav-user .icon.c7, .white-theme #nav-user .icon.c8 { background-position-y:-100px !important; }
.icon.b1 { background-position-y:-50px; }
.icon.b2 { background-position-y:-75px; }
.icon.w1 { background-position-y:-100px; }
.icon.w2 { background-position-y:-125px; }
.icon.c1 { background-position-y:-150px; }
.icon.c2 { background-position-y:-175px; }
.icon.c3 { background-position-y:-200px; }
.icon.c4 { background-position-y:-225px; }
.icon.c5 { background-position-y:-250px; }
.icon.c6 { background-position-y:-275px; }
.icon.c7 { background-position-y:-300px; }
.icon.c8 { background-position-y:-325px; }
.icon-messages { background-position:-325px -50px; }
.icon-dashboard { background-position:-550px -50px; }
.icon-whiteboard { background-position:-25px -50px; }
.icon-jobs { background-position:-50px -50px; }
.icon-members { background-position:-150px -50px; }
.icon-contacts { background-position:-675px -50px; }
.icon-page { background-position:-75px -50px; }
.icon-memories { background-position:-100px -50px; }
.icon-groups { background-position:-150px -50px; }
.icon-google { background-position:-200px 0px; }
.icon-facebook { background-position:-125px 0px; }
.icon-twitter { background-position:-150px 0px; }
.icon-linkedin { background-position:-175px 0px; }
.icon-websitelink { background-position:-225px 0px; }
.icon-edit { background-position:-650px -50px; }
.icon-edit-white { background-position:-350px -100px; }
.icon-profession { background-position:-50px -250px; }
.icon-education { background-position:-75px -175px; }
.icon-batchmates { background-position:-150px -225px; }
.icon-additional-info { background-position:-175px -200px; }
.icon-personal-info { background-position:-125px -175px; }
.icon-achievements { background-position:-100px -150px; }
.icon-activity { background-position:-600px -175px; }
.icon-contact { background-position:-675px -250px; }
.icon-portfolio { background-position:-525px -50px; }
.icon-behance { background-position:-250px 0px; }
.icon-issuu { background-position:-275px 0px; }
.icon-instagram { background-position:-300px 0px; }
.icon-youtube { background-position:-350px 0px; }
.icon-soundcloud { background-position:-375px 0px; }
.icon-solid.icon-facebook { background-position:-450px 0px; }
.icon-solid.icon-twitter { background-position:-500px 0px; }
.icon-solid.icon-linkedin { background-position:-475px 0px; }
.icon-solid.icon-websitelink { background-position:-575px 0px; }
.icon-solid.icon-youtube { background-position:-525px 0px; }
.icon-solid.icon-instagram { background-position:-550px 0px; }
.icon-search { background-position:-475px -50px; }
.icon-settings { background-position:-400px -50px; }
.icon-location { background-position:-200px -150px; }
.icon-profile { background-position:-600px -200px; }
.icon-calender { background-position:-350px -150px; }
.icon-groups { background-position:-150px -150px; }
.icon-circle { background-position:0px -175px; }
.icon-allposts { background-position:-725px -175px; }
.icon-cat { background-position:-725px -175px; }
.icon-info { background-position:-400px 0px; }
.icon-cat-21 { background-position:-225px -200px; }
.icon-cat-22 { background-position:-375px -225px; }
.icon-cat-23 { background-position:-475px -250px; }
.icon-cat-24 { background-position:-400px -300px; }
.icon-cat-25 { background-position:-525px -275px; }
.icon-internship { background-position:-250px -50px; }
.icon-jobarea { background-position:-500px -50px; }
.icon-article { background-position:-500px -50px; }
.icon-skills { background-position:-275px -325px; }
.icon-companies { background-position:-225px -300px; }
.icon-industry { background-position:-300px -50px; }
.icon-professional { background-position:-250px -50px; }
.icon-groups-color { background-position:-150px -325px; }
.icon-discussion { background-position:-25px -225px; }
.icon-news { background-position:-375px -50px; }
.icon-events { background-position:-350px -225px; }
.icon-album { background-position:-425px -50px; }
.icon-video { background-position:-450px -50px; }
.icon-news-home { background-position:-375px -125px; }
.icon-events-home { background-position:-350px -125px; }
.icon-album-home { background-position:-425px -125px; }
.icon-members-home { background-position:-150px -125px; }
.icon-bell { background-position:-625px -125px; }
.fa {
  background-image:url(images/fa-icons-sprite-v5.png);
  width:25px;
  height:25px;
  display:inline-block;
  margin-right:0px;
  margin-bottom:0px;
  padding:10px;
}
.fa-facebook { background-position:-47px -24px; }
.fa-linkedin { background-position:-95px -24px; }
.fa-twitter { background-position:-143px -24px; }
.fa-whatsapp { background-position:-191px -24px; }
.d-none { display:none !important; }
.d-inline { display:inline !important; }
.d-inline-block { display:inline-block !important; }
.d-block { display:block !important; }
.d-flex {
  display:-webkit-box !important;
  display:-ms-flexbox !important;
  display:flex !important;
}
.d-inline-flex {
  display:-webkit-inline-box !important;
  display:-ms-inline-flexbox !important;
  display:inline-flex !important;
}
@media (min-width: 576px) {
  .d-sm-none { display:none !important; }
  .d-sm-inline { display:inline !important; }
  .d-sm-inline-block { display:inline-block !important; }
  .d-sm-block { display:block !important; }
  .d-sm-table { display:table !important; }
  .d-sm-table-row { display:table-row !important; }
  .d-sm-table-cell { display:table-cell !important; }
  .d-sm-flex {
    display:-webkit-box !important;
    display:-ms-flexbox !important;
    display:flex !important;
  }
  .d-sm-inline-flex {
    display:-webkit-inline-box !important;
    display:-ms-inline-flexbox !important;
    display:inline-flex !important;
  }
}
@media (min-width: 768px) {
  .d-md-none { display:none !important; }
  .d-md-inline { display:inline !important; }
  .d-md-inline-block { display:inline-block !important; }
  .d-md-block { display:block !important; }
  .d-md-table { display:table !important; }
  .d-md-table-row { display:table-row !important; }
  .d-md-table-cell { display:table-cell !important; }
  .d-md-flex {
    display:-webkit-box !important;
    display:-ms-flexbox !important;
    display:flex !important;
  }
  .d-md-inline-flex {
    display:-webkit-inline-box !important;
    display:-ms-inline-flexbox !important;
    display:inline-flex !important;
  }
}
@media (min-width: 992px) {
  .d-lg-none { display:none !important; }
  .d-lg-inline { display:inline !important; }
  .d-lg-inline-block { display:inline-block !important; }
  .d-lg-block { display:block !important; }
  .d-lg-table { display:table !important; }
  .d-lg-table-row { display:table-row !important; }
  .d-lg-table-cell { display:table-cell !important; }
  .d-lg-flex {
    display:-webkit-box !important;
    display:-ms-flexbox !important;
    display:flex !important;
  }
  .d-lg-inline-flex {
    display:-webkit-inline-box !important;
    display:-ms-inline-flexbox !important;
    display:inline-flex !important;
  }
}
@media (min-width: 1200px) {
  .d-xl-none { display:none !important; }
  .d-xl-inline { display:inline !important; }
  .d-xl-inline-block { display:inline-block !important; }
  .d-xl-block { display:block !important; }
  .d-xl-table { display:table !important; }
  .d-xl-table-row { display:table-row !important; }
  .d-xl-table-cell { display:table-cell !important; }
  .d-xl-flex {
    display:-webkit-box !important;
    display:-ms-flexbox !important;
    display:flex !important;
  }
  .d-xl-inline-flex {
    display:-webkit-inline-box !important;
    display:-ms-inline-flexbox !important;
    display:inline-flex !important;
  }
}
@media print {
  .d-print-none { display:none !important; }
  .d-print-inline { display:inline !important; }
  .d-print-inline-block { display:inline-block !important; }
  .d-print-block { display:block !important; }
  .d-print-table { display:table !important; }
  .d-print-table-row { display:table-row !important; }
  .d-print-table-cell { display:table-cell !important; }
  .d-print-flex {
    display:-webkit-box !important;
    display:-ms-flexbox !important;
    display:flex !important;
  }
  .d-print-inline-flex {
    display:-webkit-inline-box !important;
    display:-ms-inline-flexbox !important;
    display:inline-flex !important;
  }
}
.embed-responsive {
  position:relative;
  display:block;
  width:100%;
  padding:0;
  overflow:hidden;
}
.embed-responsive::before {
  display:block;
  content:"";
}
.embed-responsive .embed-responsive-item, .embed-responsive iframe, .embed-responsive embed, .embed-responsive object, .embed-responsive video {
  position:absolute;
  top:0;
  bottom:0;
  left:0;
  width:100%;
  height:100%;
  border:0;
}
.embed-responsive-21by9::before { padding-top:42.857143%; }
.embed-responsive-16by9::before { padding-top:56.25%; }
.embed-responsive-4by3::before { padding-top:75%; }
.embed-responsive-1by1::before { padding-top:100%; }
.flex-row { flex-direction:row !important; }
.flex-column { flex-direction:column !important; }
.flex-row-reverse { flex-direction:row-reverse !important; }
.flex-column-reverse { flex-direction:column-reverse !important; }
.flex-wrap { flex-wrap:wrap !important; }
.flex-nowrap { flex-wrap:nowrap !important; }
.flex-wrap-reverse { flex-wrap:wrap-reverse !important; }
.justify-content-start { justify-content:flex-start !important; }
.justify-content-end { justify-content:flex-end !important; }
.justify-content-center { justify-content:center !important; }
.justify-content-between { justify-content:space-between !important; }
.justify-content-around { justify-content:space-around !important; }
.align-items-start { align-items:flex-start !important; }
.align-items-end { align-items:flex-end !important; }
.align-items-center { align-items:center !important; }
.align-items-baseline { align-items:baseline !important; }
.align-items-stretch { align-items:stretch !important; }
.align-content-start { align-content:flex-start !important; }
.align-content-end { align-content:flex-end !important; }
.align-content-center { align-content:center !important; }
.align-content-between { align-content:space-between !important; }
.align-content-around { align-content:space-around !important; }
.align-content-stretch { align-content:stretch !important; }
.align-self-auto { align-self:auto !important; }
.align-self-start { align-self:flex-start !important; }
.align-self-end { align-self:flex-end !important; }
.align-self-center { align-self:center !important; }
.align-self-baseline { align-self:baseline !important; }
.align-self-stretch { align-self:stretch !important; }
@media (min-width: 576px) {
  .flex-sm-row { flex-direction:row !important; }
  .flex-sm-column { flex-direction:column !important; }
  .flex-sm-row-reverse { flex-direction:row-reverse !important; }
  .flex-sm-column-reverse { flex-direction:column-reverse !important; }
  .flex-sm-wrap { flex-wrap:wrap !important; }
  .flex-sm-nowrap { flex-wrap:nowrap !important; }
  .flex-sm-wrap-reverse { flex-wrap:wrap-reverse !important; }
  .justify-content-sm-start { justify-content:flex-start !important; }
  .justify-content-sm-end { justify-content:flex-end !important; }
  .justify-content-sm-center { justify-content:center !important; }
  .justify-content-sm-between { justify-content:space-between !important; }
  .justify-content-sm-around { justify-content:space-around !important; }
  .align-items-sm-start { align-items:flex-start !important; }
  .align-items-sm-end { align-items:flex-end !important; }
  .align-items-sm-center { align-items:center !important; }
  .align-items-sm-baseline { align-items:baseline !important; }
  .align-items-sm-stretch { align-items:stretch !important; }
  .align-content-sm-start { align-content:flex-start !important; }
  .align-content-sm-end { align-content:flex-end !important; }
  .align-content-sm-center { align-content:center !important; }
  .align-content-sm-between { align-content:space-between !important; }
  .align-content-sm-around { align-content:space-around !important; }
  .align-content-sm-stretch { align-content:stretch !important; }
  .align-self-sm-auto { align-self:auto !important; }
  .align-self-sm-start { align-self:flex-start !important; }
  .align-self-sm-end { align-self:flex-end !important; }
  .align-self-sm-center { align-self:center !important; }
  .align-self-sm-baseline { align-self:baseline !important; }
  .align-self-sm-stretch { align-self:stretch !important; }
}
@media (min-width: 768px) {
  .flex-md-row { flex-direction:row !important; }
  .flex-md-column { flex-direction:column !important; }
  .flex-md-row-reverse { flex-direction:row-reverse !important; }
  .flex-md-column-reverse { flex-direction:column-reverse !important; }
  .flex-md-wrap { flex-wrap:wrap !important; }
  .flex-md-nowrap { flex-wrap:nowrap !important; }
  .flex-md-wrap-reverse { flex-wrap:wrap-reverse !important; }
  .justify-content-md-start { justify-content:flex-start !important; }
  .justify-content-md-end { justify-content:flex-end !important; }
  .justify-content-md-center { justify-content:center !important; }
  .justify-content-md-between { justify-content:space-between !important; }
  .justify-content-md-around { justify-content:space-around !important; }
  .align-items-md-start { align-items:flex-start !important; }
  .align-items-md-end { align-items:flex-end !important; }
  .align-items-md-center { align-items:center !important; }
  .align-items-md-baseline { align-items:baseline !important; }
  .align-items-md-stretch { align-items:stretch !important; }
  .align-content-md-start { align-content:flex-start !important; }
  .align-content-md-end { align-content:flex-end !important; }
  .align-content-md-center { align-content:center !important; }
  .align-content-md-between { align-content:space-between !important; }
  .align-content-md-around { align-content:space-around !important; }
  .align-content-md-stretch { align-content:stretch !important; }
  .align-self-md-auto { align-self:auto !important; }
  .align-self-md-start { align-self:flex-start !important; }
  .align-self-md-end { align-self:flex-end !important; }
  .align-self-md-center { align-self:center !important; }
  .align-self-md-baseline { align-self:baseline !important; }
  .align-self-md-stretch { align-self:stretch !important; }
}
@media (min-width: 992px) {
  .flex-lg-row { flex-direction:row !important; }
  .flex-lg-column { flex-direction:column !important; }
  .flex-lg-row-reverse { flex-direction:row-reverse !important; }
  .flex-lg-column-reverse { flex-direction:column-reverse !important; }
  .flex-lg-wrap { flex-wrap:wrap !important; }
  .flex-lg-nowrap { flex-wrap:nowrap !important; }
  .flex-lg-wrap-reverse { flex-wrap:wrap-reverse !important; }
  .justify-content-lg-start { justify-content:flex-start !important; }
  .justify-content-lg-end { justify-content:flex-end !important; }
  .justify-content-lg-center { justify-content:center !important; }
  .justify-content-lg-between { justify-content:space-between !important; }
  .justify-content-lg-around { justify-content:space-around !important; }
  .align-items-lg-start { align-items:flex-start !important; }
  .align-items-lg-end { align-items:flex-end !important; }
  .align-items-lg-center { align-items:center !important; }
  .align-items-lg-baseline { align-items:baseline !important; }
  .align-items-lg-stretch { align-items:stretch !important; }
  .align-content-lg-start { align-content:flex-start !important; }
  .align-content-lg-end { align-content:flex-end !important; }
  .align-content-lg-center { align-content:center !important; }
  .align-content-lg-between { align-content:space-between !important; }
  .align-content-lg-around { align-content:space-around !important; }
  .align-content-lg-stretch { align-content:stretch !important; }
  .align-self-lg-auto { align-self:auto !important; }
  .align-self-lg-start { align-self:flex-start !important; }
  .align-self-lg-end { align-self:flex-end !important; }
  .align-self-lg-center { align-self:center !important; }
  .align-self-lg-baseline { align-self:baseline !important; }
  .align-self-lg-stretch { align-self:stretch !important; }
}
@media (min-width: 1200px) {
  .flex-xl-row { flex-direction:row !important; }
  .flex-xl-column { flex-direction:column !important; }
  .flex-xl-row-reverse { flex-direction:row-reverse !important; }
  .flex-xl-column-reverse { flex-direction:column-reverse !important; }
  .flex-xl-wrap { flex-wrap:wrap !important; }
  .flex-xl-nowrap { flex-wrap:nowrap !important; }
  .flex-xl-wrap-reverse { flex-wrap:wrap-reverse !important; }
  .justify-content-xl-start { justify-content:flex-start !important; }
  .justify-content-xl-end { justify-content:flex-end !important; }
  .justify-content-xl-center { justify-content:center !important; }
  .justify-content-xl-between { justify-content:space-between !important; }
  .justify-content-xl-around { justify-content:space-around !important; }
  .align-items-xl-start { align-items:flex-start !important; }
  .align-items-xl-end { align-items:flex-end !important; }
  .align-items-xl-center { align-items:center !important; }
  .align-items-xl-baseline { align-items:baseline !important; }
  .align-items-xl-stretch { align-items:stretch !important; }
  .align-content-xl-start { align-content:flex-start !important; }
  .align-content-xl-end { align-content:flex-end !important; }
  .align-content-xl-center { align-content:center !important; }
  .align-content-xl-between { align-content:space-between !important; }
  .align-content-xl-around { align-content:space-around !important; }
  .align-content-xl-stretch { align-content:stretch !important; }
  .align-self-xl-auto { align-self:auto !important; }
  .align-self-xl-start { align-self:flex-start !important; }
  .align-self-xl-end { align-self:flex-end !important; }
  .align-self-xl-center { align-self:center !important; }
  .align-self-xl-baseline { align-self:baseline !important; }
  .align-self-xl-stretch { align-self:stretch !important; }
}
.float-left { float:left !important; }
.float-right { float:right !important; }
.float-none { float:none !important; }
@media (min-width: 576px) {
  .float-sm-left { float:left !important; }
  .float-sm-right { float:right !important; }
  .float-sm-none { float:none !important; }
}
@media (min-width: 768px) {
  .float-md-left { float:left !important; }
  .float-md-right { float:right !important; }
  .float-md-none { float:none !important; }
}
@media (min-width: 992px) {
  .float-lg-left { float:left !important; }
  .float-lg-right { float:right !important; }
  .float-lg-none { float:none !important; }
}
@media (min-width: 1200px) {
  .float-xl-left { float:left !important; }
  .float-xl-right { float:right !important; }
  .float-xl-none { float:none !important; }
}
.position-static { position:static !important; }
.position-relative { position:relative !important; }
.position-absolute { position:absolute !important; }
.position-fixed { position:fixed !important; }
.w-25 { width:25% !important; }
.w-50 { width:50% !important; }
.w-75 { width:75% !important; }
.w-100 { width:100% !important; }
.h-25 { height:25% !important; }
.h-50 { height:50% !important; }
.h-75 { height:75% !important; }
.h-100 { height:100% !important; }
.mw-100 { max-width:100% !important; }
.mh-100 { max-height:100% !important; }
.m-0 { margin:0 !important; }
.mt-0, .my-0 { margin-top:0 !important; }
.mr-0, .mx-0 { margin-right:0 !important; }
.mb-0, .my-0 { margin-bottom:0 !important; }
.ml-0, .mx-0 { margin-left:0 !important; }
.m-1 { margin:0.25rem !important; }
.mt-1, .my-1 { margin-top:0.25rem !important; }
.mr-1, .mx-1 { margin-right:0.25rem !important; }
.mb-1, .my-1 { margin-bottom:0.25rem !important; }
.ml-1, .mx-1 { margin-left:0.25rem !important; }
.m-2 { margin:0.5rem !important; }
.mt-2, .my-2 { margin-top:0.5rem !important; }
.mr-2, .mx-2 { margin-right:0.5rem !important; }
.mb-2, .my-2 { margin-bottom:0.5rem !important; }
.ml-2, .mx-2 { margin-left:0.5rem !important; }
.m-3 { margin:1rem !important; }
.mt-3, .my-3 { margin-top:1rem !important; }
.mr-3, .mx-3 { margin-right:1rem !important; }
.mb-3, .my-3 { margin-bottom:1rem !important; }
.ml-3, .mx-3 { margin-left:1rem !important; }
.m-4 { margin:1.5rem !important; }
.mt-4, .my-4 { margin-top:1.5rem !important; }
.mr-4, .mx-4 { margin-right:1.5rem !important; }
.mb-4, .my-4 { margin-bottom:1.5rem !important; }
.ml-4, .mx-4 { margin-left:1.5rem !important; }
.m-5 { margin:3rem !important; }
.mt-5, .my-5 { margin-top:3rem !important; }
.mr-5, .mx-5 { margin-right:3rem !important; }
.mb-5, .my-5 { margin-bottom:3rem !important; }
.ml-5, .mx-5 { margin-left:3rem !important; }
.p-0 { padding:0 !important; }
.pt-0, .py-0 { padding-top:0 !important; }
.pr-0, .px-0 { padding-right:0 !important; }
.pb-0, .py-0 { padding-bottom:0 !important; }
.pl-0, .px-0 { padding-left:0 !important; }
.p-1 { padding:0.25rem !important; }
.pt-1, .py-1 { padding-top:0.25rem !important; }
.pr-1, .px-1 { padding-right:0.25rem !important; }
.pb-1, .py-1 { padding-bottom:0.25rem !important; }
.pl-1, .px-1 { padding-left:0.25rem !important; }
.p-2 { padding:0.5rem !important; }
.pt-2, .py-2 { padding-top:0.5rem !important; }
.pr-2, .px-2 { padding-right:0.5rem !important; }
.pb-2, .py-2 { padding-bottom:0.5rem !important; }
.pl-2, .px-2 { padding-left:0.5rem !important; }
.p-3 { padding:1rem !important; }
.pt-3, .py-3 { padding-top:1rem !important; }
.pr-3, .px-3 { padding-right:1rem !important; }
.pb-3, .py-3 { padding-bottom:1rem !important; }
.pl-3, .px-3 { padding-left:1rem !important; }
.p-4 { padding:1.5rem !important; }
.pt-4, .py-4 { padding-top:1.5rem !important; }
.pr-4, .px-4 { padding-right:1.5rem !important; }
.pb-4, .py-4 { padding-bottom:1.5rem !important; }
.pl-4, .px-4 { padding-left:1.5rem !important; }
.p-5 { padding:3rem !important; }
.pt-5, .py-5 { padding-top:3rem !important; }
.pr-5, .px-5 { padding-right:3rem !important; }
.pb-5, .py-5 { padding-bottom:3rem !important; }
.pl-5, .px-5 { padding-left:3rem !important; }
.m-auto { margin:auto !important; }
.mt-auto, .my-auto { margin-top:auto !important; }
.mr-auto, .mx-auto { margin-right:auto !important; }
.mb-auto, .my-auto { margin-bottom:auto !important; }
.ml-auto, .mx-auto { margin-left:auto !important; }
#content-box { padding-top:60px; }
.page-header {
  margin-top:5px;
  margin-bottom:5px;
  padding:0;
  border:none;
}
.page-header h1 {
  font-size:2em;
  padding:0;
  margin:0;
}
.page-header h1 a { color:#191919; }
.page-header h1 span {
  font-size:0.5em;
  color:#999999;
  letter-spacing:0px;
}
.page-header .page-header-links {
  float:right;
  margin-top:5px;
}
.page-header .page-header-links a {
  background:#eeeeee;
  border:1px solid #cccccc;
  padding:2px 10px;
  margin-left:5px;
}
.page-header .page-header-links a.just-link {
  background:transparent;
  border:none;
}
.page-header .page-header-links a.main-link {
  background:#4ec64e;
  border-color:#5aca5a;
  color:#ffffff;
}
#logo {
  display:block;
  padding:2px 0;
}
#logo img { max-height:90px; }
.home #logo img { max-height:90px; }
#logo h1 {
  font-size:1.6em;
  font-weight:bold;
  letter-spacing:-1px;
  padding:20px 0 0;
  margin:0;
}
#logo h1 span {
  color:#aaaaaa;
  font-size:0.55em;
  display:block;
  padding:8px 0;
  letter-spacing:3px;
  text-transform:uppercase;
}
#logo .back-link {
  display:none;
  position:absolute;
  width:100%;
  height:90%;
  background:rgba(255,255,255,0.95);
  text-transform:uppercase;
  font-size:1em;
  font-weight:bold;
  letter-spacing:5px;
  color:#333333;
  padding:12px 10px;
  margin:0;
}
#logo:hover .back-link { display:block; }
.logged-in .nav-main {
  float:right;
  padding-right:0;
}
.logged-in .nav-aside {
  float:right;
  padding:0;
}
.logged-in #logo img { max-height:40px; }
.logged-in #logo h1 {
  padding:6px 0;
  text-transform:uppercase;
  letter-spacing:1px;
}
.logged-in #logo h1 span {
  display:inline-block;
  width:80px;
  border-left:1px solid #dddddd;
  font-size:0.4em;
  line-height:1.4em;
  padding:2px 0 2px 10px;
  margin-left:5px;
}
.logged-in.browser #header-wrapper {
  position:fixed;
  left:0;
  right:0;
  z-index:1003;
}
#mobie-header-box { padding:0px 0px; }
#mobie-header-box #user-accessbox {
  border-top:1px solid #ededed;
  border-bottom:1px solid #ededed;
  font-size:0.9em;
  font-weight:bold;
  overflow:hidden;
  padding:5px 20px 5px;
  background:#f9f9f9;
  text-transform:uppercase;
  line-height:2.5em;
}
.nav-open { overflow:hidden; }
.nav-open .icon-bar {
  border-radius:1px;
  margin:4px 0;
  display:block;
  height:2px;
  width:20px;
  border:1px solid #cccccc;
  transition:all 0.3s ease;
}
.nav-open .nav-symbol { margin:0px; }
.nav-open.active .icon-bar { transform:rotate(25deg); }
#mobile-nav {
  position:relative;
  max-height:100%;
  background:#ffffff;
  overflow:auto;
  z-index:9999;
  border-right:1px solid #eeeeee;
}
#mobile-nav ul.mb-nav {
  margin:0;
  z-index:9999;
  padding:0;
  width:199px;
}
#mobile-nav ul.mb-nav li {
  list-style:none;
  border-bottom:1px solid #eeeeee;
}
#mobile-nav ul.mb-nav li a.color-background { color:#444444; }
#mobile-nav ul.mb-nav li a {
  display:block;
  padding:10px;
  color:#000000;
}
#mobile-nav ul.mb-nav li a:focus { background:#f5f5f5; }
#mobile-nav ul.mb-nav li .nav-active { background:#eeeeee; }
#mobile-nav ul.mb-nav li ul { padding:0; }
#mobile-nav ul.mb-nav li ul.mb-dropdown-menu {
  margin:0;
  padding:0;
}
#mobile-nav ul.mb-nav li ul.mb-dropdown-menu li {
  border-bottom:none;
  padding:0 0 0 0px;
}
#mobile-nav ul.mb-nav li ul.mb-dropdown-menu li a {
  padding:10px 0 10px 15px;
  background:#f5f5f5;
  color:#666666;
  border-top:1px solid #dddddd;
}
#mobile-nav ul.mb-nav li ul.mb-dropdown-menu li a.nav-active { background:#e9e9e9; }
#mobile-nav ul.mb-nav li ul.mb-dropdown-menu li li a {
  padding-left:30px;
  background:#fafafa;
}
#mobile-nav ul.mb-nav li.mb-nav-item a {
  padding:5px;
  overflow:hidden;
}
#mobile-nav ul.mb-nav li.mb-nav-item a .nav-icon { float:left; }
#mobile-nav ul.mb-nav li.mb-nav-item a span {
  display:inline-block;
  padding-left:10px;
  line-height:40px;
  text-transform:uppercase;
  letter-spacing:1px;
}
.content-left {
  position:fixed;
  height:100%;
}
#mobile-logo {
  border-bottom:none;
  margin:5px 0px;
  position:relative;
}
#mobile-logo a {
  display:block;
  margin-left:0px;
  overflow:hidden;
}
#mobile-logo a.pull-left {
  width:30px;
  margin-left:0;
}
#mobile-logo .home-dashboard {
  position:absolute;
  right:0;
  top:10px;
  font-size:1.5em;
  color:#999999;
}
body { overflow-x:hidden; }
.pushmenu-left { left:-200px; }
.pushmenu-left.pushmenu-open { left:0px; }
.pushmenu-push {
  overflow-x:hidden;
  position:relative;
  left:0;
}
.pushmenu-push-toright { left:200px; }
.pushmenu, .pushmenu-push { transition:all 0.3s ease; }
.minh500.whitebox { min-height:500px; }
.whitebox {
  background:#ffffff;
  margin-bottom:15px;
  border-radius:8px;
  box-shadow:1px 1px 20px rgba(0,0,0,0.1);
}
.whitebox .whitebox-tube { padding:25px 30px; }
.whitecard {
  background:#ffffff;
  margin-bottom:15px;
  border-radius:8px;
  box-shadow:1px 1px 20px rgba(0,0,0,0.1);
  padding:25px 30px;
}
.whitebox-panel {
  background:#fbfbfb;
  min-height:80px;
  padding:20px 20px 20px;
  border-bottom:1px solid #e4e9ed;
}
.whitebox-panel h1 {
  font-weight:normal;
  line-height:1.5em;
  margin-bottom:0px;
}
.whitebox-image {
  position:relative;
  background:#ffffff;
  margin-bottom:15px;
  border-radius:8px;
  box-shadow:1px 1px 20px rgba(0,0,0,0.1);
  margin-bottom:-1px;
  width:100%;
}
.whitebox-image img.img-responsive {
  max-height:350px;
  position:relative;
  margin:0 auto;
  z-index:1;
}
.whitebox-image img.img-blurred {
  position:absolute;
  min-width:100%;
  min-height:100%;
  left:0;
  top:-50%;
  z-index:0;
  -webkit-filter:blur(25px);
  filter:blur(25px);
}
.cardbox {
  padding:20px 20px;
  margin-bottom:5px;
  cursor:pointer;
  border-radius:5px;
}
.cardbox-color { background-image:linear-gradient(-15deg,#2acdff,#0062af); }
.cardbox-color:hover { background-image:linear-gradient(-35deg,#2acdff,#0062af); }
.cardbox-gray {
  border:1px solid #eeeeee;
  background:#fafbfc;
}
.cardbox-gray:hover {
  background:#eeeeee;
  border:1px dotted #cccccc;
}
.node-box {
  background:#ffffff;
  margin-bottom:15px;
  border-radius:8px;
  box-shadow:1px 1px 20px rgba(0,0,0,0.1);
  padding:25px 30px;
  margin-bottom:8px;
  display:block;
}
.node-box span.text-light { font-size:1em; }
.node-box .color-font { color:#538de2; }
.node-box .node-type {
  float:left;
  margin:5px 10px 15px 0px;
}
.node-box .node-type-text {
  display:none;
  font-size:1em;
  letter-spacing:2px;
  color:#cccccc;
  text-transform:uppercase;
}
.node-box .report-content { color:#cfd6e7; }
.node-box .node-delete {
  font-size:1.8em;
  line-height:1em;
  color:#cfd6e7;
  padding-left:10px;
}
.node-box .node-header {
  opacity:1;
  overflow:hidden;
  padding:15px 0 15px;
}
.node-box .node-header img {
  margin:0 15px 0 0;
  width:45px;
  border-radius:50%;
  opacity:1;
}
.node-box .node-header p {
  margin:8px 0 2px 0;
  line-height:1em;
  font-weight:bold;
}
.node-box .node-header .name a {
  color:#333333;
  font-size:1em;
}
.node-box .node-header .date {
  font-size:.85em;
  color:#aaaaaa;
}
.node-box .node-header .view-node {
  display:block;
  overflow:hidden;
}
.node-box .node-header .view-node span {
  display:block;
  box-shadow:none;
  background:#ffffff;
  border:1px solid #dddddd;
  float:right;
  color:#ff4b57;
  font-size:.9em;
  padding:8px 15px;
}
.node-box:hover .node-header { opacity:1; }
.node-box .node-body {
  color:#000000;
  line-height:1.8em;
  margin:0px 0px 12px 0px;
}
.node-box .node-body .description {
  font-size:1.15em;
  line-height:1.8em;
}
.node-box .preview-link {
  margin:18px 0;
  display:block;
  border:2px dotted #cfd6e7;
  background:#fafafb;
}
.node-box .preview-link:hover { background:#fefeff; }
.node-box .preview-link .preview-image {
  height:150px;
  overflow:hidden;
  text-align:center;
}
.node-box .preview-link .preview-image img {
  height:100%;
  width:100%;
  object-fit:cover;
}
.node-box .preview-link .preview-text { padding:25px 25px 0 25px; }
.node-box .preview-link .preview-text span {
  color:#888888;
  letter-spacing:0px;
  font-size:.9em;
}
.node-box .preview-link h3 {
  font-weight:bold;
  font-size:1.1em;
}
.node-box .table-bordered { border:1px dashed #dddddd; }
.node-box .table-bordered td {
  border:1px dashed #dddddd;
  padding:6px 12px;
}
.node-box .table-bordered td.meta-varname {
  text-transform:uppercase;
  color:#aaaaaa;
  font-size:0.85em;
}
.node-box .full-text-link:hover {
  color:#000000;
  display:block;
  background:#fafafa;
}
.node-box .node-title {
  margin:0px 0 15px;
  line-height:1.6em;
  font-size:1.4em;
}
.node-box .node-footer {
  margin-top:0px;
  padding:5px 0px 0px;
  border-top:0px solid #f5f5f5;
}
.node-box .node-footer ul.list-inline {
  margin-bottom:0;
  padding:4px 0px;
}
.node-box .node-footer ul.list-inline li { padding:0 0px; }
.node-box .node-footer .node-footer-btn {
  padding:3px 15px;
  background:#f5f5f5;
  border-radius:3px;
}
.node-box .node-footer .node-footer-btn:hover { background:#eeeeee; }
.node-box .node-image {
  max-height:450px !important;
  margin:0 auto 10px;
  border:1px solid #f5f5f5;
}
.node-box .node-attachment {
  background:#fafafb;
  padding:10px 15px;
  display:block;
  margin:10px 0;
  color:#2a6496;
  font-weight:bold;
  border:2px dotted #cfd6e7;
}
.node-box .node-attachment:hover {
  background:#fefeff;
  color:#000000;
}
.comment-reply {
  margin-top:10px;
  background-color:#fafbfc;
}
.comment-reply p { margin:0; }
.comment-reply .form-control {
  border-radius:5px;
  font-size:1.1em;
  margin:8px 0px;
  background:#fafbfc;
}
.comment-reply .user-img-small img {
  width:45px;
  margin:0px 20px 20px 0;
  border-radius:50%;
}
.comment-reply .user-name {
  color:#666666;
  font-weight:bold;
  font-size:1.1em;
}
.comment-reply .comment-item {
  overflow:hidden;
  padding:20px 20px 5px;
  border-top:1px solid #eeeeee;
  background:#fafbfc;
}
.comment-reply .comment-footer {
  padding:10px 0 10px 65px;
  font-size:1.1em;
  line-height:1.8em;
}
.comment-reply .comments-reply-box.comment-item { padding:0 10px 10px; }
.context-box .context-text {
  font-size:1.2em;
  line-height:1.8em;
}
.context-box .context-text a {
  text-decoration:underline;
  color:#337ab7;
}
.context-box .context-text a:hover {
  text-decoration:none;
  color:#191919;
}
.context-box .context-title {
  font-size:1.5em;
  font-weight:700;
  line-height:1.5em;
  color:#191919;
  letter-spacing:0px;
}
.context-box .context-title a {
  color:#191919;
  text-decoration:none;
}
.context-box .context-title a:hover { color:#191919; }
.context-box .context-subtitle {
  font-size:1.3em;
  font-weight:700;
  line-height:1.5em;
  color:#191919;
}
.context-box .context-subtitle a {
  color:#191919;
  text-decoration:none;
}
.context-box .context-subtitle a:hover { color:#191919; }
.adjust-image-width {
  height:0;
  overflow:hidden;
  opacity:0;
  transition:opacity 1000ms;
  text-align:center;
}
.adjust-image-width.img-adjusted {
  padding-bottom:25px;
  opacity:1;
  height:auto;
}
.adjust-image-width.img-fw.img-yy { width:100%; }
.adjust-image-width.img-fw.img-yy img { max-width:100%; }
.adjust-image-width.img-sq {
  max-width:50%;
  float:left;
  padding-right:25px;
}
.adjust-image-width.img-sq img { max-height:350px; }
.nav-tabs-ic.nav-tabs {
  border-color:#eeeeee;
  font-size:1.1em;
}
.nav-tabs-ic.nav-tabs > li> a {
  margin:0;
  padding:12px 25px;
  border-radius:0;
  color:#888888;
  border-right:1px solid #eeeeee;
}
.nav-tabs-ic.nav-tabs > li> a:hover { background:rgba(0,0,0,0.05); }
.nav-tabs-ic.nav-tabs > li.active> a {
  border-left:none;
  border-top:none;
  border-bottom:2px solid #191919;
  background:none;
  font-weight:bold;
  color:#000000;
}
.nav-tabs-ic.nav-tabs > li.pull-right a {
  border-left:1px solid #eeeeee;
  border-right:0;
}
.noticebox {
  padding:10px;
  border-radius:50px;
  text-align:center;
  font-size:1.2em;
  background:#f3e44b;
  color:#ffffff;
  margin-bottom:20px;
}
.noticebox-info { background:#48b5df; }
.noticebox-warning {
  background:#f3e44b;
  color:#191919;
}
.noticebox-success { background:#5bc64e; }
.noticebox-error { background:#ee5d58; }
.userstack-list .userstack-item { border-bottom:1px solid #eeeeee; }
.userstack-item {
  display:block;
  overflow:hidden;
  padding:8px 5px;
}
.userstack-item:hover { background:rgba(0,0,0,0.02); }
.userstack-item .user-image {
  float:left;
  width:45px;
  border-radius:50%;
}
.userstack-item .user-info {
  margin-left:50px;
  margin-top:5px;
}
.userstack-item .user-info .name { font-weight:bold; }
.userstack-item .user-info p { margin:0 0 0 15px; }
.userstack-item span.date {
  font-size:.9em;
  text-transform:uppercase;
  text-align:center;
}
.userstack-item span.month { display:block; }
.userstack-item span.day {
  font-size:1.2em;
  display:block;
}
.content-top-nav {
  background:#ffffff;
  margin-bottom:15px;
  border-radius:8px;
  box-shadow:1px 1px 20px rgba(0,0,0,0.1);
}
.content-top-nav ul {
  list-style-type:none;
  padding:0;
  margin:0;
  overflow:hidden;
}
.content-top-nav ul li { display:inline; }
.content-top-nav ul li span, .content-top-nav ul li a {
  display:block;
  padding:12px 20px 12px;
  float:left;
  margin-right:0px;
  border-right:1px solid #eeeeee;
  font-weight:bold;
}
.content-top-nav ul li.pull-right a {
  border-left:1px solid #eeeeee;
  border-right:none;
}
.content-top-nav ul li span.lighter {
  color:#aaaaaa;
  font-weight:normal;
}
.content-top-nav ul li a.pull-right {
  border-right:0 none;
  border-left:1px solid #eeeeee;
}
.content-top-nav ul li a:hover, .content-top-nav ul li a.active { background:#f5f5f5; }
ul.vertical-nav {
  list-style:none;
  margin:0px;
  padding:0px;
  width:auto;
  z-index:2;
}
ul.vertical-nav .nav-active { background-color:#eeeeee; }
ul.vertical-nav li { display:inline; }
ul.vertical-nav li a {
  display:block;
  color:#666666;
  padding:8px 10px;
  border-bottom:1px solid #eeeeee;
}
ul.vertical-nav li a:hover {
  text-decoration:none;
  background:#eeeeee;
}
ul.vertical-nav li.nav-item-active a { background-color:#eaeaea; }
ul.vertical-nav li.nav-item-active a:hover { background-color:#eeeeee; }
ul.vertical-nav li.nav-item-active a img {
  float:left;
  width:16px;
  height:16px;
  padding-right:8px;
  padding-top:2px;
}
.profilepile a:hover { text-decoration:none; }
.profilepile .inline-list-item {
  background:#ffffff;
  margin-bottom:15px;
  border-radius:8px;
  box-shadow:1px 1px 20px rgba(0,0,0,0.1);
  padding:25px 30px;
  padding:5px 20px;
  height:240px;
  width:98%;
  margin:1%;
  overflow:hidden;
  position:relative;
}
.profilepile .inline-list-item .member-role-labels {
  position:absolute;
  font-size:0.65em;
  display:block;
  top:8px;
  left:8px;
}
.profilepile .inline-list-item .role-label {
  padding:2px 6px;
  display:block;
  float:left;
  margin-right:2px;
}
.profilepile .inline-list-item .reg-status {
  position:absolute;
  background:url("images/yes.png") center center no-repeat;
  width:25px;
  height:25px;
  display:block;
  top:5px;
  right:5px;
}
.profilepile .inline-list-item .reg-status-no {
  background:url("images/u.png") center center no-repeat;
  opacity:0.3;
}
.profilepile .profile-image-small {
  position:relative;
  width:140px;
  height:140px;
  padding:10px;
  margin:0 auto;
}
.profilepile .profile-image-small img {
  box-shadow:0px 0px 1px rgba(0,0,0,0.5);
  padding:0;
  box-shadow:none;
  width:100%;
  height:auto;
  max-width:140px;
  max-height:140px;
  border-radius:50%;
}
.profilepile .profile-text {
  color:#666666;
  margin:0;
  padding:0 10px 5px;
  text-align:center;
}
.profilepile .profile-text .text-label {
  padding-bottom:5px;
  margin:0;
  font-size:0.95em;
}
.profilepile .profile-text .text {
  padding:0;
  margin:0;
  line-height:1.5em;
  font-size:0.9em;
  color:#999999;
  max-height:40px;
  overflow:hidden;
}
.profilepile .profile-text h2.name {
  color:#000000;
  margin:0;
  font-weight:bold;
  padding:0 0 8px;
  font-size:1.1em;
}
.member-name .reg-status {
  display:inline-block;
  background:url("images/yes.png") center center no-repeat;
  width:12px;
  height:12px;
  background-size:100%;
}
.member-name .reg-status-no {
  background:url("images/u.png") center center no-repeat;
  opacity:0.3;
  background-size:100%;
}
.member-name .reg-status-d {
  background:url("images/no.png") center center no-repeat;
  opacity:0.8;
  background-size:100%;
}
.border-box {
  background-color:#f9f9f9;
  border:1px solid #cccccc;
  padding:30px;
  margin-top:20px;
  margin-bottom:20px;
}
.border-box-plain {
  background-color:#fdfdfd;
  border:1px dashed #cfd6e7;
  padding:30px 30px;
  margin-top:20px;
  margin-bottom:40px;
}
.app-theme-picker label {
  width:60px;
  height:40px;
  display:block;
  float:left;
  margin:3px;
  padding:9px 0 0 10px;
}
.app-theme-picker label input { margin-right:5px; }
.notif-item-title span {
  padding:5px 15px 0px;
  display:block;
  background:#f9f9f9;
  border-bottom:1px solid #eeeeee;
  color:#cccccc;
  text-transform:uppercase;
  font-weight:bold;
  letter-spacing:1px;
  line-height:30px !important;
}
.notif-item-link {
  text-align:left !important;
  padding:10px 10px !important;
}
.notif-item-link .notif-item-text {
  display:block;
  white-space:initial;
  margin-left:50px;
  min-height:35px;
}
.notif-item-link .profile-pic {
  width:35px;
  float:left;
}
.notif-item-link.active { background-color:#f5f5f5 !important; }
#notif_list_full {
  list-style-type:none;
  margin:0;
  padding:0;
}
#notif_list_full .notif-item-text { line-height:35px; }
#notif_list_full > li > .notif-item-link {
  display:block;
  border-bottom:1px solid #eeeeee;
}
.rejoined_textarea { resize:none; }
.ui-state-success {
  text-align:center;
  font-size:18px;
  border:1px dashed green;
  color:rgba(0,128,0,0.94);
  background:rgba(0,128,0,0.23);
  padding:10px;
  margin:10px;
}
.rejoined { display:inline; }
tr.user-rejoined .unblocked { display:none; }
tr.user-rejoined .blocked { display:none; }
tr.user-blocked .rejoined { display:none; }
tr.user-unblocked .rejoined { display:none; }
.rejoined-hide { display:none; }
.dark-hr {
  border:0;
  border-top:1px solid #d3d3d3;
}
.bxslider .news-item .news-item-image {
  width:100%;
  height:180px;
  border:1px solid #dddddd;
  background-color:#f5f5f5;
  background-size:cover;
  background-position:center;
}
.bxslider .events-item .events-item-image {
  width:100%;
  height:180px;
  background-color:#f5f5f5;
  background-size:cover;
  background-position:center;
  border-top-right-radius:5px;
  border-top-left-radius:5px;
}
.bxslider .events-item .events-item-image-default {
  background:#f5f5f5 url(images/icon-new-events_1.png) no-repeat center center;
  border:1px solid #dddddd;
}
.bxslider .events-item .events-item-details {
  border-bottom-right-radius:13px;
  border-bottom-left-radius:13px;
  background-color:#ffffff;
}
.bxslider .events-item .events-item-details .item-date {
  padding:15px 20px;
  text-align:center;
  text-transform:uppercase;
  font-size:1em;
}
.bxslider .events-item .events-item-details .item-date .item-day {
  font-size:1.5em;
  font-weight:bold;
}
.bxslider .events-item .events-item-details .item-details { padding:7px; }
.bxslider .events-item .event-status {
  color:#928d8d;
  font-size:0.8em;
}
.bxslider .events-item .events-item-title {
  font-size:1.1em;
  font-weight:bold;
  display:block;
}
.bxslider .news-item .news-item-image-default { background:#f5f5f5 url(images/apanel-news.png) no-repeat center center; }
.bxslider .news-item .news-item-image-default_white_bg { background:#ffffff url(images/apanel-news.png) no-repeat center center; }
.bxslider .news-item .news-item-title {
  font-size:1.2em;
  font-weight:bold;
  padding-top:2px;
  padding:15px 0;
  display:block;
}
.bxslider .video-box .video-title {
  font-size:1.1em;
  font-weight:bold;
  padding-bottom:10px;
  display:block;
}
.industry_bigdrop { width:500px !important; }
#accordion .panel-title a { text-decoration:none; }
#accordion .panel-body { padding:20px; }
.field-icon {
  float:right;
  top:-30px;
  right:10px;
  color:#3778e3;
}
#inner-wrapper { position:relative; }
#inner-wrapper #inner-wrapper-glyphicon {
  position:absolute;
  height:45px;
  line-height:45px;
  right:-3%;
  z-index:1;
}
.cookie-message {
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
  background-color: #f1f1f1;
  padding: 20px;
  text-align: center;
}
.tag-light {
  background:#f8f9f4;
  padding:2px 15px;
  border-radius:15px;
  text-decoration:none;
  border:1px solid #eaeaea;
  font-size:0.9em;
  color:#8f947b;
  margin-right:10px;
}
.tag-light.active {
  background:#e8e9e4;
  border:1px solid #cacaca;
}
.text-spaced {
  color:#8f947b;
  text-transform:uppercase;
  letter-spacing:1px;
}
.highlight-word {
  padding:0px 0.5em;
  box-shadow:4px 4px 0px #000000;
}
.highlight-word-yellow { background:#fecd00; }
.line-zigzag { background:transparent url('images/line-zigzag.png') center center repeat-x; }
@media (max-device-width: 769px) {
  .field-icon { top:-38px; }
  #inner-wrapper #inner-wrapper-glyphicon { right:0%; }
}
.events-box .item {
  border:1px solid #eeeeee;
  margin-bottom:25px;
  overflow:hidden;
  border-radius:5px;
}
.events-box .item.item-sm .item-image {
  float:left;
  width:150px;
  height:150px;
  border-bottom:none;
  border-right:1px solid #eeeeee;
}
.events-box .item.item-sm .item-box {
  margin-left:150px;
  height:150px;
  padding:20px 25px;
}
.events-box .item.item-sm .event-status { display:none; }
.events-box .item.item-sm .item-image img {
  height:100%;
  min-width:100%;
  max-width:none;
}
.events-box .item .badge { background:#b9bec3; }
.events-box .item .item-image {
  display:block;
  height:150px;
  border-bottom:1px solid #eeeeee;
  overflow:hidden;
  background:#f9f9f9 url(images/icon-new-events_1.png) center center no-repeat;
  position:relative;
}
.events-box .item .item-image img {
  min-height:100%;
  max-width:100%;
}
.events-box .item .item-box {
  display:block;
  padding:20px 20px;
  height:150px;
}
.events-box .item .item-title {
  font-weight:bold;
  margin-bottom:8px;
  font-size:1.2em;
  line-height:1.5em;
}
.events-box .item .item-details {
  line-height:1.6em;
  color:#999999;
}
.events-box .item .item-details p { margin-bottom:5px; }
.events-box .item .event-status {
  text-transform:uppercase;
  letter-spacing:2px;
  padding:5px;
  position:absolute;
  bottom:0;
  left:0;
  right:0;
  font-size:0.85em;
  text-align:center;
}
.events-box .item .grayscale { opacity:0.7; }
.event-image-cover {
  max-height:220px;
  overflow:hidden;
  text-align:center;
}
.event-image-cover img {
  max-width:100%;
  margin:0 auto;
}
.event-single .event-info { padding-left:40px; }
.event-single .event-meta {
  border-top:1px solid #eeeeee;
  border-bottom:1px solid #eeeeee;
  min-height:50px;
  padding:30px 0 10px;
  overflow:hidden;
  margin-bottom:10px;
}
.event-single .event-meta p {
  line-height:1.8em;
  margin-left:45px;
  padding-top:2px;
}
.event-single .event-meta .event-date { min-height:30px; }
.event-single .event-attend-form .btn {
  font-size:0.9em;
  padding:3px 15px;
}
.event-single .event-attend-form .rsvp {
  padding:0;
  margin:0;
  font-size:1.4em;
  font-weight:700;
  color:#cccccc;
  line-height:1.5em;
}
.profile-header { margin-bottom:25px; }
.profile-header .btn { float:left; }
.profile-sm-links { margin:8px 0; }
.profile-sm-links .inactive { opacity:0.2; }
.role-tag {
  padding:2px 10px;
  font-weight:bold;
  font-size:0.8em;
  margin:1px;
  float:right;
  border-radius:10px;
  text-transform:uppercase;
}
.profile-btn-links a {
  padding:5px;
  display:inline-block;
  text-align:center;
  text-transform:uppercase;
  font-size:0.9em;
}
.profile-btn-links p { text-align:right; }
.profile-info { margin-left:28%; }
.profile-info h1 {
  margin:0px;
  font-size:2em;
}
.profile-info .headline {
  font-size:1.1em;
  color:#444444;
  margin-bottom:5px;
}
.profile-info .headline .headline-edit { display:none; }
.profile-info .headline:hover .headline-edit {
  display:inline-block;
  padding-left:5px;
  font-size:0.9em;
}
.profile-info .headline-meta { min-height:60px; }
.profile-info.profile-info-small { margin-left:120px; }
.profile-info.profile-info-small h1 {
  font-size:2.2em;
  padding-top:5px;
}
.profile-info span {
  display:block;
  line-height:1.6em;
  color:#888888;
}
.profile-info .reg-status {
  display:inline;
  margin-left:15px;
}
.profile-image {
  width:25%;
  float:left;
  position:relative;
  box-shadow:1px 1px 5px rgba(0,0,0,0.1);
  border:5px solid #ffffff;
}
.profile-image img {
  min-width:100%;
  transition:all 1s;
  background:#ffffff;
}
.profile-image.profile-image-small {
  width:100px;
  padding:0;
}
.profile-image .pic-edit { display:none; }
.profile-image:hover .pic-edit {
  display:block;
  transition:all 0.5s;
  position:absolute;
  bottom:0;
  padding:10px 0;
  color:#ffffff;
  width:100%;
  background-color:#000000;
  opacity:0.7;
  text-align:center;
}
.profile-statistics-info {
  margin-top:70px;
  font-size:0.9em;
}
.profile-statistics-info p { overflow:hidden; }
.profile-statistics-info p.profile-status { margin:15px 0 5px 0; }
.profile-statistics-info .profile-views { padding:0 0 0px 0; }
.profile-statistics-info .profile-views .views-count {
  font-size:2em;
  margin:0 0 0 5px;
}
.profile-fill {
  background:#dedede;
  position:relative;
  padding:5px;
  border-radius:10px;
}
.profile-fill .profile-completed {
  position:absolute;
  top:0;
  padding:5px;
  left:0;
  width:0px;
}
.profile-fill .fill-green { background:#5bc64e; }
.profile-fill .fill-yellow { background:#ed9a3d; }
.profile-fill .fill-red { background:#ee5d58; }
.profile-box { position:relative; }
.profile-box .item {
  border:none;
  padding:15px 0 15px 5px;
}
.profile-box .item h3 { color:#191919; }
.profile-box .item.current h3 { color:#191919; }
.profile-box .item span { color:#999999; }
.profile-box .suggested { background:#f9f9f9; }
.profile-box .suggestion { color:#aaaaaa; }
.item .profile-box .suggestion { display:block; }
.profile-box .sub-title {
  text-indent:10px;
  font-size:1.2em;
  padding-bottom:10px;
  font-weight:bold;
}
.profile-box .row {
  border:none;
  margin-bottom:10px;
}
.profile-box .profile-heading {
  padding:25px 25px 0px 25px;
  overflow:hidden;
}
.profile-box .profile-text {
  padding:3px 0 0 45px;
  display:block;
  text-transform:uppercase;
  color:#aaaaaa;
  letter-spacing:1px;
  font-size:1.1em;
}
.side-profile-box .profile-text { padding-left:35px; }
.profile-box-tube {
  padding-bottom:0px;
  min-height:40px;
  padding-left:65px;
}
.behance-portfolio .profile-heading { padding-bottom:10px; }
.side-profile-box .profile-heading { padding:10px 0px 10px 0px; }
#profile-activity .stream-box {
  border-left:1px solid #cccccc;
  margin:10px 0 0 12px;
}
#profile-activity .color-dot {
  height:13px;
  width:13px;
  display:inline-block;
  border-radius:10px;
  margin-left:-7px;
}
#profile-activity .item { padding:0 0 20px 0; }
#profile-activity .item-text {
  padding-left:10px;
  position:relative;
  top:-3px;
}
#profile-activity .item-date {
  margin:0 0 0 20px;
  color:#999999;
}
.achievement-btn {
  background:#fafafa;
  display:block;
  height:70px;
  line-height:1.1em;
  padding:10px 5px;
  margin:2px;
}
.achievement-btn .glyphicon {
  font-size:2.5em;
  padding:5px 20px 15px 10px;
  color:#e9e9e9;
}
.achievement-btn h4 {
  margin:5px 0 2px;
  padding:0;
  font-weight:bold1;
  font-size:1.2em;
}
.achievement-btn small { line-height:0.9em; }
.profile-achievement { border-bottom:1px solid #f5f5f5; }
.profile-achievement h5 { line-height:1.5em; }
.profile-achievement-title {
  font-size:1.5em;
  text-transform:uppercase;
  color:#eeeeee;
  font-weight:bold;
  text-align:right;
  margin:5px 0 5px;
}
.achievements-wrapper .profile-achievement {
  padding:5px 15px;
  background:#fafafa;
  border-color:#eeeeee;
  margin-bottom:1px;
}
.achievements-wrapper .achievement-list-row { border-bottom:1px solid #eeeeee; }
.achievements-wrapper .user-info {
  margin:5px 0px 5px;
  display:block;
}
.achievements-wrapper .user-info img {
  width:50px;
  margin-right:15px;
}
.post-wrapper { margin:0 0 15px; }
.post-wrapper .nav-tabs {
  border-bottom:1px solid #eeeeee;
  background:#f1f4f7;
  font-size:0.9em;
}
.post-wrapper .nav-tabs >li>a {
  margin:0;
  padding:10px 15px;
  border-radius:0;
}
.post-wrapper .nav-tabs >li>a:hover {
  background:#ffffff;
  border-bottom-color:transparent;
}
.post-wrapper .nav-tabs >li:first-child>a { border-left:0px solid #eeeeee; }
.post-wrapper .nav-tabs >li.active>a {
  border-bottom:1px solid #eeeeee;
  border-bottom-color:#ffffff;
  border-top-color:transparent;
  color:#538de2;
}
.post-wrapper .nav-tabs >li.pull-right a { border-left:1px solid #eeeeee; }
.post-wrapper .post-tabs { cursor:pointer; }
.post-wrapper .post-tabs.active a, .post-wrapper .post-tabs.active a:focus {
  background:#ffffff;
  font-weight:bold;
  cursor:pointer;
}
.post-box {
  background-color:#ffffff;
  color:#000000;
  padding:0 15px;
  border-radius:2px;
}
.post-box .add-toolbar {
  font-size:0.9em;
  line-height:30px;
  padding:0;
}
.post-box .add-toolbar label {
  padding:0px 8px 0px 5px;
  background:#fafbfc;
  cursor:pointer;
  border:2px dotted #cfd6e7;
}
.post-box .add-toolbar label span {
  display:inline-block;
  padding-right:10px;
}
.post-box .add-toolbar label:hover { background:#ffffff; }
.post-box .add-toolbar img {
  width:25px;
  padding-right:5px;
}
.post-box .attachment {
  padding:10px 15px 8px;
  background:#fafbfc;
  font-size:0.9em;
  border-top:2px dotted #e2e9f1;
  border-bottom:1px dotted #e2e9f1;
}
.post-box .attachment img {
  width:30px;
  padding-right:10px;
}
.post-box .form-control {
  border-radius:2px;
  color:#000000;
  font-size:1em;
}
.post-box input.form-control { height:35px; }
.post-box .control-label { font-size:0.9em; }
.post-box .big-input {
  height:50px;
  padding:10px;
}
.post-box .expanding-wrapper textarea {
  background-color:#fafbfc;
  border:0 none;
  padding:10px 0;
  font-size:1em;
}
.post-box .expanding-wrapper textarea:focus {
  outline:0 none;
  box-shadow:none;
}
.post-box #post-in-form {
  padding:5px 0;
  background:#f1f4f7;
  border-top:1px solid #e9e9e9;
}
.post-box #post-in-form .form-control, .post-box #post-in-form .btn {
  height:34px;
  font-size:0.9em;
  display:inline-block;
  margin-bottom:0;
  padding:5px;
  width:98%;
  display:block;
  margin:0 auto;
}
.post-box #help-category p {
  padding:5px 0 10px;
  margin:0;
  color:#8f96a7;
  font-size:0.9em;
}
#filter-sidebar.col-sm-3 ul {
  height:500px;
  overflow-y:scroll;
}
#filter-sidebar .form-control {
  display:inline-block;
  width:100%;
}
#filter-sidebar ul {
  margin:0;
  padding:0;
  font-size:0.95em;
}
#filter-sidebar ul li {
  list-style:none;
  overflow:hidden;
}
#filter-sidebar ul li a {
  text-overflow:ellipsis;
  display:block;
  padding:10px 5px;
}
#filter-sidebar ul.li-block li {
  display:block;
  border-bottom:1px solid #ffffff;
  background:#f6f6f6;
}
#filter-sidebar ul.li-inline li {
  display:inline-block;
  width:25%;
}
.table tbody tr.vertical-middle td { vertical-align:middle; }
tr .table-tool-list {
  display:none;
  position:absolute;
  float:right;
  width:400px;
  margin-right:20px;
  right:0;
  margin-top:-35px;
  padding:15px;
  background:rgba(255,255,255,0.5);
}
tr .table-tool-list a {
  display:block;
  margin-right:5px;
  float:right;
}
tr:hover .table-tool-list { display:block; }
.user-blocked { background:#ffeeee !important; }
.user-rejoined { background:#eefff0 !important; }
tr.user-blocked .table-tool-list.blocked { display:block; }
tr.user-blocked .table-tool-list.unblocked { display:none; }
tr.user-unblocked:hover .table-tool-list.blocked { display:none; }
tr.user-blocked .blocked { display:block; }
tr.user-blocked .unblocked { display:none; }
tr.user-unblocked:hover .blocked { display:none; }
tr.user-unblocked .unblocked { display:block; }
tr.user-unblocked .blocked { display:none; }
tr.user-blocked:hover .unblocked { display:none; }
.group-header { position:relative; }
.group-header .group-image {
  min-height:155px;
  max-height:250px;
  overflow:hidden;
  background:url("images/group.png");
  background-size:contain;
}
.group-header h1 {
  border:none;
  float:left;
  padding:12px 0px 0px;
  margin:0px;
  color:#555555;
  letter-spacing:-1px;
  text-shadow:0px 1px #ffffff;
}
.group-nav {
  background:#f9f9f9;
  border-top:1px solid rgba(0,0,0,0.1);
  border-bottom:1px solid #eeeeee;
  position:static;
  bottom:0;
  width:100%;
  display:block;
  overflow:hidden;
}
.group-nav ul {
  list-style-type:none;
  padding:0;
  margin:0;
}
.group-nav ul li { display:inline; }
.group-nav ul li a {
  display:block;
  padding:10px 20px;
  float:left;
  margin-right:0px;
  border-right:1px solid rgba(0,0,0,0.1);
}
.group-nav ul li a { background:rgba(255,255,255,0.75); }
.group-nav ul li a:hover { background:rgba(255,255,255,0.1); }
.group-nav .btn {
  display:block;
  border:0;
  padding:10px 25px;
  border-radius:0px;
  box-shadow:none;
}
.group-toolbar {
  text-align:right;
  float:right;
  position:absolute;
  top:0;
  right:0;
  background:rgba(0,0,0,0.6);
}
.group-toolbar a {
  padding:8px 10px;
  margin:0px 0;
  border-left:1px solid rgba(0,0,0,0.8);
  color:#ffffff;
}
.group-toolbar a:hover { color:#ffffff; }
.group-dashboard h1 {
  font-size:1.8em;
  padding-bottom:5px;
  border-bottom:1px solid #eeeeee;
  margin:15px 0 10px;
}
.group-list-title {
  margin:50px 5px 10px;
  background:#fbfbfb;
  padding:12px 15px;
  font-weight:bold;
  border:1px solid #eeeeee;
  border-top-width:3px;
}
.group-list-item {
  display:block;
  margin:5px;
  padding:5px;
  border:1px solid #eeeeee;
}
.group-list-item a {
  display:block;
  position:relative;
  width:100%;
}
.group-list-item span.group-cover {
  display:block;
  height:125px;
  margin-bottom:30px;
  background:center center url("images/group.png");
  background-size:cover;
  background-position:bottom;
}
.group-list-item span.group-title {
  display:block;
  padding:10px 10px 8px;
  font-size:1em;
  background:#fbfbfb;
  position:absolute;
  bottom:0px;
  width:100%;
  margin-bottom:-30px;
}
.chapters .group-list-item, .departments .group-list-item, .interest-groups .group-list-item {
  font-weight:bold;
  text-transform:uppercase;
  font-size:1.1em;
}
.chapters .group-list-item span.group-cover { background-image:url("images/group-chapter.png"); }
.institutions .group-list-item span.group-cover { background-image:url("images/group-institution.png"); }
.class-groups .group-list-item { padding:1px; }
.class-groups .group-list-item span.group-cover { display:none; }
.class-groups .group-list-item span.group-title {
  margin:0;
  position:relative;
  font-size:1em;
  text-overflow:ellipsis;
}
.year-groups .group-list-item { padding:1px; }
.year-groups .group-list-item span.group-cover { display:none; }
.year-groups .group-list-item span.group-title {
  margin:0;
  position:relative;
  font-size:1em;
  text-overflow:ellipsis;
}
.node-view .featured-image { background:#f5f5f5; }
.node-view .featured-image img {
  max-height:600px;
  margin:0 auto;
}
.node-view .node-images-small img {
  margin:1px;
  float:left;
  width:33%;
}
.node-view .downloads-list {
  margin:10px 0;
  background:#fcfcfc;
  clear:both;
}
.business-list-box .item {
  border:1px solid #eeeeee;
  margin-bottom:25px;
  overflow:hidden;
  border-radius:5px;
}
.business-list-box .item.item-sm .item-image {
  float:left;
  width:150px;
  height:150px;
  border-bottom:none;
  border-right:1px solid #eeeeee;
  background-repeat:no-repeat;
  background-position:center center;
  background-size:contain;
}
.business-list-box .item.item-sm .item-box {
  margin-left:150px;
  height:150px;
  padding:20px 25px;
}
.business-list-box .item.item-sm .item-image img {
  height:100%;
  min-width:100%;
  max-width:none;
}
.business-list-box .item .item-image {
  display:block;
  height:150px;
  border-bottom:1px solid #eeeeee;
  overflow:hidden;
  background:#f9f9f9 center center no-repeat;
  position:relative;
}
.business-list-box .item .item-image img {
  min-height:100%;
  max-width:100%;
}
.business-list-box .item .item-box {
  display:block;
  padding:20px 20px;
  height:150px;
}
.business-list-box .item .item-title {
  font-weight:bold;
  margin-bottom:8px;
  font-size:1.2em;
  line-height:1.5em;
}
.business-list-box .item .item-details {
  line-height:1.6em;
  color:#999999;
}
.business-list-box .item .item-details p { margin-bottom:5px; }
.business-box { position:relative; }
.business-box .item {
  border:none;
  padding:5px 15px 15px 5px;
}
.business-box .item h3 { color:#191919; }
.business-box .item.current h3 { color:#191919; }
.business-box .item span { color:#999999; }
.business-box .row {
  border:none;
  margin-bottom:10px;
}
.business-box .business-heading {
  padding:15px 25px 0px 25px;
  overflow:hidden;
}
.business-box .business-text {
  padding:3px 0 0 45px;
  display:block;
  text-transform:uppercase;
  color:#aaaaaa;
  letter-spacing:1px;
  font-size:1.1em;
}
.business-box-tube {
  padding-bottom:0px;
  min-height:40px;
  padding-left:40px;
}
.business-box-tube #business-logo {
  border-radius:20%;
  width:150px;
  height:150px;
}
.products-services-heading {
  padding:10px 15px 0px 5px;
  overflow:hidden;
}
.products-services-box {
  padding-bottom:0px;
  min-height:40px;
  padding-left:10px;
}
.business-sm-links { margin:8px 0; }
.business-sm-links .inactive { opacity:0.2; }
#business-products-services { border-left:1px solid #dddddd; }
#business-products-services .products-services-box span { padding-left:40px; }
#business-products-services .products-services-box ul { list-style-type:none; }
#business-products-services .products-services-box ul li a {
  cursor:pointer;
  position:inherit;
  margin:0px 10px;
}
#products-services-industries #searchfield { border-radius:4px; }
#products-services-industries .list, #products-services-industries .display-list {
  display:none;
  list-style:none;
  max-height:300px;
  padding:20px 10px 0px 10px;
  overflow:auto;
}
.business-stack-item {
  display:block;
  overflow:hidden;
  padding:8px 5px;
}
.business-stack-item:hover { background:rgba(0,0,0,0.02); }
.business-stack-item .business-image {
  float:left;
  width:45px;
  border-radius:50%;
}
.business-stack-item .business-info {
  margin-left:50px;
  margin-top:5px;
}
.business-stack-item .business-info .name { font-weight:bold; }
.business-stack-item .business-info p { margin:0 0 0 15px; }
.forum-tile-box {
  border-radius:5px;
  display:block;
  margin-right:15px;
  margin-bottom:15px;
  color:#ffffff;
  opacity:1;
  transition:all 1000ms;
  box-shadow:0px 0px 0px rgba(0,0,0,0) inset;
}
.forum-tile-box:hover {
  color:#ffffff;
  opacity:0.9;
  box-shadow:0px -250px 0px rgba(0,0,0,0.3) inset;
}
.forum-tile-box h2 {
  line-height:1.6em;
  margin:0;
}
.forum-tile-box span {
  text-align:center;
  display:block;
  line-height:100px;
  font-size:1.5em;
}
.forum-tile-box img {
  width:100%;
  border-radius:5px;
}
.rounded-box { border-radius:5px; }
.text-white { color:#ffffff; }
.bg-grad-voilet {
  background:#7f38b1;
  background:linear-gradient(135deg,#a15ee6,#7f38b1);
}
.bg-grad-red {
  background:#b24592;
  background:linear-gradient(135deg,#f15f79,#b24592);
}
.bg-grad-orange {
  background:#fd746c;
  background:linear-gradient(135deg,#fdc830,#ff9068);
}
.bg-grad-mild {
  background:#67b26f;
  background:linear-gradient(135deg,#67b26f,#4ca2cd);
}
.bg-grad-blue {
  background:#0575e6;
  background:linear-gradient(135deg,#0575e6,#40ccff);
}
.bg-grad-darkblue {
  background:#0575e6;
  background:linear-gradient(135deg,#0575e6,#021b79);
}
.bg-grad-purple {
  background:#cc2b5e;
  background:linear-gradient(135deg,#cc2b5e,#753a88);
}
.countdown-timer {
  padding:10px;
  text-align:center;
}
.countdown-timer #countdown-timer-box {
  text-align:center;
  margin:auto 0;
  padding-top:10px;
}
.countdown-timer #countdown-timer-box .counter-group {
  height:60px;
  display:inline-block;
  width:55px;
}
.countdown-timer #countdown-timer-box .counter-group .counter-item {
  font-size:1.4em;
  height:34px;
  width:55px;
  text-align:center;
}
.countdown-timer #countdown-timer-box .counter-group .unit-label {
  font-size:0.85em;
  width:55px;
}
.countdown-timer #countdown-timer-out {
  text-align:center;
  margin:auto 0;
  padding-top:10px;
  display:none;
}
#job-preferences-banner-jobs #banner-text {
  padding-left:40px;
  padding-right:40px;
}
#job-preferences-banner-jobs #banner-text #title {
  padding-top:20px;
  padding-bottom:10px;
  font-size:1.7em;
}
.cursor-pointer { cursor:pointer; }
#recruiter-faq .panel-body p { font-size:1.1em; }
.disabled {
  opacity:0.65;
  box-shadow:none;
  pointer-events:none;
  cursor:not-allowed;
}
.profile-image-small {
  position:relative;
  width:120px;
  height:120px;
  padding:10px;
  margin:0 auto;
}
.profile-image-small img {
  padding:0;
  box-shadow:none;
  height:auto;
  width:100%;
  max-height:120px;
  max-width:120px;
  border-radius:50%;
}
.job-seeker-tag {
  background-color:#000000;
  padding:5px 10px;
  border-radius:5px;
}
.basic-details-tab {
  height:200px;
  padding-top:2%;
  border-right:1px solid #eeeeee;
}
.work-details-tab { padding:10px 20px; }
.work-details-tab .sub-heading { color:#a7a1a1; }
.work-details-tab .skills-company-tab { border-bottom:1px solid #eeeeee; }
.work-details-tab .time-period-tab { padding:20px 0px 10px; }
.banner-heading {
  font-size:1.8em;
  line-height:1.4em;
}
.banner-text p { color:#737373; }
.banner-download {
  color:#eeeeee;
  font-size:2.2em;
  letter-spacing:2px;
}
.icon-width {
  width:18px;
  height:18px;
  background-repeat:no-repeat;
  opacity:1;
  display:inline-block;
}
.banner-border-right { border-right:1px solid #dbdbdb; }
.switch-to-app-footer-popup {
  background-color:#f8c630 !important;
  width:100% !important;
  left:0% !important;
  border-radius:4% 4% 0% 0%;
  padding-bottom:0;
}
.switch-to-app-footer-popup .btn-browser {
  background-color:transparent;
  color:#191919;
  border-color:#191919;
}
.switch-to-app-footer-popup .btn-download {
  background-color:#9c50c4 !important;
  color:#ffffff !important;
  border:none;
}
.switch-to-app-footer-popup h4 { color:#191919 !important; }
.switch-to-app-full-screen-popup {
  background-color:#f8c630 !important;
  width:100% !important;
  height:100% !important;
  left:0% !important;
  border-radius:0% 0% 0% 0%;
  padding-bottom:0;
  background-image:url("images/fullpage-popup-bg.png");
  background-size:cover;
  background-position-x:center;
}
.switch-to-app-full-screen-popup .content-description {
  padding:1rem !important;
  text-align:center;
  font-size:1.5em;
}
.switch-to-app-full-screen-popup h2 {
  line-height:1.5em;
  font-size:2.3em;
  text-align:center;
  margin-left:12%;
  margin-right:12%;
}
.switch-to-app-full-screen-popup .btn-browser {
  background-color:transparent;
  color:#191919;
  border-color:#191919;
  width:100%;
}
.switch-to-app-full-screen-popup .btn-app {
  background-color:#9c50c4 !important;
  color:#ffffff !important;
  border:none;
}
.container-center {
  margin:auto;
  right:0;
  bottom:0;
  left:0;
  width:100%;
  position:relative;
  top:50%;
  transform:translateY(-50%);
}
.btn-bolder { font-weight:bolder; }
.linkedin-btn .icon { background-position:0px -80px !important; }
.documents-container .documents-box { background-color:#ffffff; }
.documents-container .header-text {
  position:absolute;
  top:8px;
  left:16px;
}
.documents-container {
  position:relative;
  color:white;
}
.documents-container .header-background { width:100%; }
.documents-container .header-sub-text { font-size:0.8em; }
.documents-container .panel { border:none !important; }
.documents-container .panel-default .panel-heading {
  color:#000000;
  background-color:#ffffff;
  border-color:#dddddd;
}
.documents-container .panel-title-text {
  font-size:1.3em;
  font-weight:bold;
}
.documents-container .panel-body {
  color:#000000;
  margin-left:7%;
}
.documents-container .panel-title-sub-text {
  font-size:0.7em;
  font-weight:normal;
  color:#000000;
}
.documents-container .panel-default>.panel-heading+.panel-collapse>.panel-body { border-top-color:#ffffff; }
.documents-container .documents-footer-text { color:#808488; }
.documents-container .documents-footer {
  background-color:#f3f3f3;
  border-radius:4px;
  height:100px;
}
.documents-container .btn-send {
  background-color:#71a1e3;
  color:#ffffff;
}
.documents-container .header-button {
  background-color:#71a0e3 00;
  color:#ffffff;
  border-color:white;
  border:solid;
  border-width:thin;
  margin-left:90px;
  border-radius:30px;
}
.documents-container .panel-errors {
  color:black;
  text-align:center;
  margin-top:2%;
}
.div-mobile-app-screen img { width:100%; }
.v5homegrid { overflow:hidden; }
.v5homegrid .grid-box {
  display:inline-block;
  position:relative;
  float:left;
  width:33.33%;
}
.v5homegrid .grid-box .grid-box-wrap {
  position:relative;
  margin:0px 12px 24px;
  min-height:340px;
}
.v5homegrid .grid-box.grid-box-autoheight .grid-box-wrap {
  height:auto;
  min-height:auto;
}
.v5homegrid .grid-box.grid-box-autoheight .grid-box-wrap .grid-tube {
  position:static;
  height:auto;
  min-height:auto;
}
.v5homegrid .grid-tube {
  height:340px;
  width:100%;
  position:absolute;
  top:0;
  background-repeat:no-repeat;
  background-size:100% auto;
  overflow:hidden;
  background-color:#ffffff;
  box-shadow:1px 1px 2px rgba(0,0,0,0.2);
}
.v5homegrid .grid-box { margin:0px 0%; }
.v5homegrid .grid-w00 { width:100%; }
.v5homegrid .grid-w25 { width:25%; }
.v5homegrid .grid-w35 { width:35%; }
.v5homegrid .grid-w50 { width:50%; }
.v5homegrid .grid-w75 { width:75%; }
.v5homegrid .grid-w33 { width:33.33%; }
.v5homegrid .grid-w66 { width:66.66%; }
.v5homegrid .grid-w20 { width:30%; }
.v5homegrid .grid-w30 { width:30%; }
.v5homegrid .grid-w40 { width:40%; }
.v5homegrid .grid-w60 { width:60%; }
.v5homegrid .grid-w70 { width:70%; }
.v5homegrid .grid-w80 { width:80%; }
.v5homegrid .overflow-bottom .grid-tube {
  height:340px;
  z-index:1;
}
.v5homegrid .overflow-top .grid-tube {
  height:340px;
  z-index:1;
  margin-top:-40px;
}
.v5homegrid .overflow-both .grid-tube {
  height:380px;
  z-index:1;
  margin-top:-40px;
}
.v5homegrid .grid-h450 .grid-box-wrap { min-height:449px !important; }
.v5homegrid .grid-h450 .grid-tube { height:449px !important; }
.v5homegrid .grid-h525 .grid-box-wrap { min-height:522px; }
.v5homegrid .grid-h525 .grid-tube { height:522px; }
.v5homegrid .grid-h140 .grid-box-wrap { min-height:134px; }
.v5homegrid .grid-h140 .grid-tube { height:134px; }
.v5homegrid .grid-h160 .grid-box-wrap { min-height:158px; }
.v5homegrid .grid-h160 .grid-tube { height:158px; }
.v5homegrid .grid-h180 .grid-box-wrap { min-height:178px; }
.v5homegrid .grid-h180 .grid-tube { height:178px; }
.v5homegrid .grid-h215 .grid-box-wrap { min-height:213px; }
.v5homegrid .grid-h215 .grid-tube { height:213px; }
.v5homegrid .grid-h250 .grid-box-wrap { min-height:249px; }
.v5homegrid .grid-h250 .grid-tube { height:249px; }
.v5homegrid .block-title-center .block-title { text-align:center; }
.v5homegrid .block-title-center .block-title:after { margin:0 auto; }
.v5homegrid .block-title-no-border .block-title { border:none; }
.v5homegrid .tiles-rounded .images-grid .tile {
  border-radius:50%;
  margin:4px;
  border:1px solid rgba(255,255,255,0.5);
}
.v5homegrid .tiles-rounded .testimonial-user img {
  border-radius:50%;
  border:2px solid rgba(255,255,255,0.5);
  padding:0;
}
.v5homegrid .grid-box-pl-20 { padding-left:20px; }
.v5homegrid .grid-box-pr-20 { padding-right:20px; }
.v5homegrid .grid-box-mt-20 { margin-top:20px !important; }
.v5homegrid .grid-box-mb-20 { margin-bottom:20px !important; }
.top-links { text-transform:uppercase; }
.signup-block {
  width:100%;
  height:450px;
}
.item-ellipsis .item-title {
  padding-right:80px !important;
  display:block;
  white-space:nowrap;
  overflow:hidden;
  text-overflow:ellipsis;
  -o-text-overflow:ellipsis;
  width:100%;
}
.item-ellipsis .item-date {
  position:absolute;
  right:10px;
}
.v5homegrid h1 { font-size:3em; }
.v5homegrid h2 {
  font-size:1.5em;
  line-height:1.2em;
}
.v5homegrid .block-title {
  padding:12px 15px 12px;
  margin:0;
  border-bottom:1px solid rgba(0,0,0,0.06);
}
.v5homegrid .block-image { width:100%; }
.v5homegrid .block-title-icon {
  border-radius:20px;
  width:40px;
  height:40px;
  margin-right:15px;
  display:block;
  float:left;
  background:rgba(0,0,0,0.06);
  border:2px solid rgba(0,0,0,0.02);
}
.v5homegrid .block-title-icon .icon {
  opacity:0.8;
  margin-left:6px;
  margin-top:6px;
  display:block;
  float:left;
}
.v5homegrid .grid-tube .item {
  margin:0;
  border-bottom-color:rgba(0,0,0,0.05);
  padding:12px 20px;
}
.v5homegrid .grid-tube .item:last-child { border-bottom:none; }
.v5homegrid .grid-tube .item:hover { background-color:rgba(0,0,0,0.05); }
.v5homegrid .grid-tube .item .item-title {
  font-size:1.2em;
  line-height:1.25em;
  padding:0;
  margin:0;
  color:rgba(0,0,0,0.85);
}
.v5homegrid .grid-tube .item .item-date {
  color:rgba(0,0,0,0.3);
  font-size:1em;
  float:right;
}
.v5homegrid .grid-tube .item .item-text {
  color:rgba(0,0,0,0.5);
  font-size:1.05em;
}
.v5homegrid .grid-tube .featured-titles .item {
  overflow:hidden;
  padding:10px;
}
.v5homegrid .grid-tube .featured-titles .item .item-title {
  font-size:1.4em;
  font-weight:bold;
  padding-bottom:10px;
  display:block;
}
.v5homegrid .grid-tube .featured-titles .item .item-image {
  float:left;
  width:160px;
  height:160px;
  margin-right:20px;
  border:1px solid #dddddd;
  background:#f5f5f5 url(images/apanel-news.png) no-repeat center center;
}
.v5homegrid .grid-tube .events-homeblock .item {
  padding:30px 10px 10px 20px;
  position:relative;
  overflow:hidden;
}
.v5homegrid .grid-tube .events-homeblock .item .item-date {
  float:left;
  margin:0 20px 30px 0;
  color:rgba(0,0,0,0.9);
  text-transform:uppercase;
  text-align:center;
}
.v5homegrid .grid-tube .events-homeblock .item .item-day {
  font-size:1.8em;
  line-height:24px;
}
.v5homegrid .grid-tube .events-homeblock .item .status {
  float:right;
  position:absolute;
  font-size:0.8em;
  opacity:0.8;
  top:10px;
  right:auto;
  color:rgba(0,0,0,0.5);
  letter-spacing:3px;
  text-transform:uppercase;
}
.v5homegrid .grid-tube .events-homeblock .item .item-title {
  display:block;
  margin-bottom:3px;
}
.v5homegrid .grid-tube .jobs-box .item .item-title { font-size:1.1em; }
.v5homegrid .home-members .images-grid .col-xs-4, .v5homegrid .home-members .images-grid .col-md-4, .v5homegrid .home-members .images-grid .col-sm-4, .v5homegrid .home-members .images-grid .col-lg-4 { width:10%; }
.v5homegrid .home-members.grid-box.overlay-block .grid-box-wrap { min-height:225px; }
.v5homegrid .home-members .grid-box-wrap { min-height:300px; }
.v5homegrid .home-members .grid-tube {
  height:auto;
  overflow:hidden;
}
.v5homegrid .home-gallery .item {
  padding:0;
  float:left;
  width:16.66%;
  overflow:hidden;
}
.v5homegrid .home-gallery .item img {
  width:99%;
  margin:1px auto;
}
.v5homegrid .home-gallery .item:hover img {
  transform:scale(1.2,1.2);
  transition:all 600ms;
}
.v5homegrid .home-gallery .grid-box-wrap { min-height:249px; }
.v5homegrid .home-gallery .grid-tube { height:249px; }
.v5homegrid .home-gallery .gallery-box { overflow:hidden; }
.grid-box-dark .block-title {
  color:rgba(255,255,255,0.9) !important;
  border-bottom-color:rgba(255,255,255,0.3);
}
.grid-box-dark .block-title-icon {
  background:rgba(255,255,255,0.8);
  border-color:rgba(255,255,255,0.1);
}
.grid-box-dark .grid-tube { background:#444444; }
.grid-box-dark .grid-tube .item { border-bottom-color:rgba(255,255,255,0.2); }
.grid-box-dark .grid-tube .item:hover { background-color:rgba(255,255,255,0.1); }
.grid-box-dark .grid-tube .item .item-title { color:rgba(255,255,255,0.75); }
.grid-box-dark .grid-tube .item .item-date { color:rgba(255,255,255,0.85); }
.grid-box-dark .grid-tube .item .item-text { color:rgba(255,255,255,0.5); }
.grid-box-dark .grid-tube .events-homeblock .item .item-date { color:rgba(255,255,255,0.85); }
.grid-box-dark .grid-tube .events-homeblock .item .status { color:rgba(255,255,255,0.6); }
.grid-box-dark .grid-tube a, .grid-box-dark .grid-tube p { color:rgba(255,255,255,0.85); }
.grid-box-overlay { position:relative; }
.grid-box-overlay .block-title {
  border:none;
  position:absolute;
  padding:25px;
  color:#ffffff;
  font-size:2.5em;
  bottom:0;
  z-index:2;
}
.grid-box-overlay .overlay {
  display:block;
  width:100%;
  height:100%;
  position:absolute;
  z-index:1;
  background:rgba(0,0,0,0.01) url("images/gradiant-black-light.png") left bottom repeat-x;
}
.icon-new {
  background:url("images/flash-new-icon.gif") no-repeat center top;
  display:inline-block;
  width:25px;
  height:10px;
}
.btn-themecolor {
  background-color:#ffffff;
  border-color:#4ec64e;
  color:#5aca5a;
  box-shadow:none;
}
.overlay-block { position:relative; }
.overlay-block .block-title {
  border:none;
  position:absolute;
  padding:25px;
  color:#ffffff;
  font-size:2.5em;
  bottom:0;
  z-index:2;
}
.overlay-block .overlay {
  display:block;
  width:100%;
  height:100%;
  position:absolute;
  z-index:1;
  background:rgba(0,0,0,0.01) url("images/gradiant-black-light.png") left bottom repeat-x;
}
.overlay-grad-black .overlay { background:url("images/gradiant-black-light.png") left bottom repeat-x; }
.home #content-box { padding-top:20px; }
.nogridspacing .grid-box .grid-box-wrap { margin:0px; }
.no-rounded-corners .whitebox { border-radius:0px; }
.no-rounded-corners .whitebox-image { border-radius:0px; }
.grid-box-border .grid-tube {
  border:8px solid #ffffff;
  box-shadow:1px 1px 2px rgba(0,0,0,0.2);
}
.grid-box-shadow .grid-tube { box-shadow:1px 1px 2px rgba(0,0,0,0.2); }
.grid-box-no-shadow .grid-tube { box-shadow:none; }
.grid-box-transparent .grid-tube {
  background:transparent;
  box-shadow:none;
}
.variant-polygon .signup-block { background:url("images/polygon-banner.jpg"); }
.variant-polygon .grid-box-pattern .grid-tube { background:#ffffff url("images/polygon-pattern.png") top right no-repeat; }
.variant-polygon-green .signup-block { background:url("images/polygon-green-banner.jpg"); }
.variant-polygon-green .grid-box-pattern .grid-tube { background:#ffffff url("images/polygon-green-pattern.png") top right no-repeat; }
.variant-watercolor .signup-block { background:url("images/watercolor-banner.jpg"); }
.variant-watercolor .grid-box-pattern .grid-tube { background:#ffffff url("images/watercolor-pattern.png") top right no-repeat; }
.slider-border-white .slider, .slider-border-color .slider {
  border:10px solid #ffffff;
  box-shadow:0 0 2px rgba(0,0,0,0.4);
  margin:-1px;
}
.slider-border-thin .slider { border-width:5px; }
.slider-border-none .slider { border-width:0px !important; }
.hide-top-links .top-links { display:none; }
.bg-image .bgimage-wrapper {
  height:550px;
  display:block;
  position:absolute;
  width:100%;
}
.bg-image .bgimage-wrapper .bgimage-box {
  width:100%;
  height:100%;
  background-repeat:no-repeat;
  background-position:center;
  background-size:cover;
}
.bg-image-strip.bg-image .bgimage-wrapper { height:16px; }
.bg-image-strip.not-logged-in #header-wrapper { padding-top:16px; }
.bg-image-strip.not-logged-in #header-box { margin-top:16px; }
.bg-image-strip.logged-in.bg-image .bgimage-wrapper {
  position:fixed;
  z-index:1010;
  height:8px;
}
.bg-image-strip.logged-in #header-box { margin-top:8px; }
.bg-image-strip #nav-user-wrapper { padding-top:53px; }
.color-nav.not-logged-in #nav-cms-wrapper {
  background:#555555;
  border-top-color:rgba(0,0,0,0.2);
}
.color-nav.not-logged-in .navbar-nav {
  border-color:rgba(0,0,0,0.2);
  font-size:1em;
}
.color-nav.not-logged-in .navbar-nav > li > a {
  color:rgba(255,255,255,0.9);
  font-weight:700;
  border-color:rgba(0,0,0,0.2);
  text-transform:uppercase;
}
.color-nav.not-logged-in .navbar-nav > li > a:hover, .color-nav.not-logged-in .navbar-nav > li > a:focus, .color-nav.not-logged-in .navbar-nav > li > a.nav-active {
  background-color:rgba(0,0,0,0.05);
  box-shadow:0px -70px 0px rgba(0,0,0,0.2) inset;
}
.color-nav.not-logged-in .dropdown-menu { background:#414141; }
.color-nav.not-logged-in .dropdown-menu > li > a {
  color:rgba(255,255,255,0.9);
  background-color:rgba(0,0,0,0.05);
  border-color:rgba(0,0,0,0.2);
}
.color-nav.not-logged-in .dropdown-menu > li > a:hover, .color-nav.not-logged-in .dropdown-menu > li > a:focus, .color-nav.not-logged-in .dropdown-menu > li > a.nav-active { background-color:rgba(0,0,0,0.2); }
.color-header .not-logged-in #header-wrapper { border-bottom:1px solid rgba(0,0,0,0.2); }
.color-header #logo .back-link {
  background:rgba(0,0,0,0.5);
  color:#ffffff;
}
.color-header #header-wrapper { border-bottom:1px solid rgba(0,0,0,0.2); }
label.theme1 {
  background-color:#ea005e;
  border-bottom:8px solid #e40060;
  color:#ffffff;
}
.theme1 .theme-color-text { color:#ea005e; }
.theme1 .theme-background { background:#ea005e !important; }
.theme1 .theme-bg-color { background-color:#ea005e !important; }
.theme1 .btn-themecolor {
  color:#ea005e;
  border-color:#e40060;
}
.theme1 .grid-box-bgcolor .grid-tube { background-color:#ea005e; }
.theme1 .grid-box-bgcolor-light .grid-tube { background-color:#ff1e78; }
.theme1 .grid-box-bgcolor-dark .grid-tube { background-color:#cb0055; }
.theme1 .grid-box-bgcolor-darker .grid-tube { background-color:#b1004b; }
.theme1.color-nav.not-logged-in #nav-cms-wrapper { background-color:#ea005e; }
.theme1.color-nav.not-logged-in #nav-cms-wrapper .dropdown-menu { background:#e5005c; }
.theme1.color-nav.not-logged-in .navbar-nav > li > a { color:#ffffff; }
.theme1.color-nav.not-logged-in .dropdown-menu > li > a { color:#ffffff; }
.theme1.color-header #header-wrapper { background:#ea005e; }
.theme1.color-header .top-links, .theme1.color-header .top-links a { color:#ffffff; }
.theme1.color-header .logged-in .navbar-nav > li > a { color:#ffffff; }
.theme1.color-header.not-logged-in.color-nav #nav-cms-wrapper { background:#e40060; }
label.theme2 {
  background-color:#f7630c;
  border-bottom:8px solid #f7630c;
  color:#ffffff;
}
.theme2 .theme-color-text { color:#f7630c; }
.theme2 .theme-background { background:#f7630c !important; }
.theme2 .theme-bg-color { background-color:#f7630c !important; }
.theme2 .btn-themecolor {
  color:#f7630c;
  border-color:#f7630c;
}
.theme2 .grid-box-bgcolor .grid-tube { background-color:#f7630c; }
.theme2 .grid-box-bgcolor-light .grid-tube { background-color:#f9833d; }
.theme2 .grid-box-bgcolor-dark .grid-tube { background-color:#e25807; }
.theme2 .grid-box-bgcolor-darker .grid-tube { background-color:#c94f07; }
.theme2.color-nav.not-logged-in #nav-cms-wrapper { background-color:#f7630c; }
.theme2.color-nav.not-logged-in #nav-cms-wrapper .dropdown-menu { background:#f66008; }
.theme2.color-nav.not-logged-in .navbar-nav > li > a { color:#ffffff; }
.theme2.color-nav.not-logged-in .dropdown-menu > li > a { color:#ffffff; }
.theme2.color-header #header-wrapper { background:#f7630c; }
.theme2.color-header .top-links, .theme2.color-header .top-links a { color:#ffffff; }
.theme2.color-header .logged-in .navbar-nav > li > a { color:#ffffff; }
.theme2.color-header.not-logged-in.color-nav #nav-cms-wrapper { background:#f7630c; }
label.theme3 {
  background-color:#ef0d33;
  border-bottom:8px solid #ec082f;
  color:#ffffff;
}
.theme3 .theme-color-text { color:#ef0d33; }
.theme3 .theme-background { background:#ef0d33 !important; }
.theme3 .theme-bg-color { background-color:#ef0d33 !important; }
.theme3 .btn-themecolor {
  color:#ef0d33;
  border-color:#ec082f;
}
.theme3 .grid-box-bgcolor .grid-tube { background-color:#ef0d33; }
.theme3 .grid-box-bgcolor-light .grid-tube { background-color:#f43b5a; }
.theme3 .grid-box-bgcolor-dark .grid-tube { background-color:#d3072a; }
.theme3 .grid-box-bgcolor-darker .grid-tube { background-color:#bb0625; }
.theme3.color-nav.not-logged-in #nav-cms-wrapper { background-color:#ef0d33; }
.theme3.color-nav.not-logged-in #nav-cms-wrapper .dropdown-menu { background:#ea0d32; }
.theme3.color-nav.not-logged-in .navbar-nav > li > a { color:#ffffff; }
.theme3.color-nav.not-logged-in .dropdown-menu > li > a { color:#ffffff; }
.theme3.color-header #header-wrapper { background:#ef0d33; }
.theme3.color-header .top-links, .theme3.color-header .top-links a { color:#ffffff; }
.theme3.color-header .logged-in .navbar-nav > li > a { color:#ffffff; }
.theme3.color-header.not-logged-in.color-nav #nav-cms-wrapper { background:#ec082f; }
label.theme4 {
  background-color:#512da8;
  border-bottom:8px solid #4527a0;
  color:#ffffff;
}
.theme4 .theme-color-text { color:#512da8; }
.theme4 .theme-background { background:#512da8 !important; }
.theme4 .theme-bg-color { background-color:#512da8 !important; }
.theme4 .btn-themecolor {
  color:#512da8;
  border-color:#4527a0;
}
.theme4 .grid-box-bgcolor .grid-tube { background-color:#512da8; }
.theme4 .grid-box-bgcolor-light .grid-tube { background-color:#673dcb; }
.theme4 .grid-box-bgcolor-dark .grid-tube { background-color:#3c228b; }
.theme4 .grid-box-bgcolor-darker .grid-tube { background-color:#331d77; }
.theme4.color-nav.not-logged-in #nav-cms-wrapper { background-color:#512da8; }
.theme4.color-nav.not-logged-in #nav-cms-wrapper .dropdown-menu { background:#4f2ca4; }
.theme4.color-nav.not-logged-in .navbar-nav > li > a { color:#ffffff; }
.theme4.color-nav.not-logged-in .dropdown-menu > li > a { color:#ffffff; }
.theme4.color-header #header-wrapper { background:#512da8; }
.theme4.color-header .top-links, .theme4.color-header .top-links a { color:#ffffff; }
.theme4.color-header .logged-in .navbar-nav > li > a { color:#ffffff; }
.theme4.color-header.not-logged-in.color-nav #nav-cms-wrapper { background:#4527a0; }
label.theme5 {
  background-color:#38b33d;
  border-bottom:8px solid #26a22b;
  color:#ffffff;
}
.theme5 .theme-color-text { color:#38b33d; }
.theme5 .theme-background { background:#38b33d !important; }
.theme5 .theme-bg-color { background-color:#38b33d !important; }
.theme5 .btn-themecolor {
  color:#38b33d;
  border-color:#26a22b;
}
.theme5 .grid-box-bgcolor .grid-tube { background-color:#38b33d; }
.theme5 .grid-box-bgcolor-light .grid-tube { background-color:#54ca59; }
.theme5 .grid-box-bgcolor-dark .grid-tube { background-color:#218d26; }
.theme5 .grid-box-bgcolor-darker .grid-tube { background-color:#1c7920; }
.theme5.color-nav.not-logged-in #nav-cms-wrapper { background-color:#38b33d; }
.theme5.color-nav.not-logged-in #nav-cms-wrapper .dropdown-menu { background:#37af3c; }
.theme5.color-nav.not-logged-in .navbar-nav > li > a { color:#ffffff; }
.theme5.color-nav.not-logged-in .dropdown-menu > li > a { color:#ffffff; }
.theme5.color-header #header-wrapper { background:#38b33d; }
.theme5.color-header .top-links, .theme5.color-header .top-links a { color:#ffffff; }
.theme5.color-header .logged-in .navbar-nav > li > a { color:#ffffff; }
.theme5.color-header.not-logged-in.color-nav #nav-cms-wrapper { background:#26a22b; }
label.theme6 {
  background-color:#2460d0;
  border-bottom:8px solid #1c53b9;
  color:#ffffff;
}
.theme6 .theme-color-text { color:#2460d0; }
.theme6 .theme-background { background:#2460d0 !important; }
.theme6 .theme-bg-color { background-color:#2460d0 !important; }
.theme6 .btn-themecolor {
  color:#2460d0;
  border-color:#1c53b9;
}
.theme6 .grid-box-bgcolor .grid-tube { background-color:#2460d0; }
.theme6 .grid-box-bgcolor-light .grid-tube { background-color:#487ddf; }
.theme6 .grid-box-bgcolor-dark .grid-tube { background-color:#1949a3; }
.theme6 .grid-box-bgcolor-darker .grid-tube { background-color:#153f8d; }
.theme6.color-nav.not-logged-in #nav-cms-wrapper { background-color:#2460d0; }
.theme6.color-nav.not-logged-in #nav-cms-wrapper .dropdown-menu { background:#235ecc; }
.theme6.color-nav.not-logged-in .navbar-nav > li > a { color:#ffffff; }
.theme6.color-nav.not-logged-in .dropdown-menu > li > a { color:#ffffff; }
.theme6.color-header #header-wrapper { background:#2460d0; }
.theme6.color-header .top-links, .theme6.color-header .top-links a { color:#ffffff; }
.theme6.color-header .logged-in .navbar-nav > li > a { color:#ffffff; }
.theme6.color-header.not-logged-in.color-nav #nav-cms-wrapper { background:#1c53b9; }
label.theme7 {
  background-color:#283593;
  border-bottom:8px solid #1a237e;
  color:#ffffff;
}
.theme7 .theme-color-text { color:#283593; }
.theme7 .theme-background { background:#283593 !important; }
.theme7 .theme-bg-color { background-color:#283593 !important; }
.theme7 .btn-themecolor {
  color:#283593;
  border-color:#1a237e;
}
.theme7 .grid-box-bgcolor .grid-tube { background-color:#283593; }
.theme7 .grid-box-bgcolor-light .grid-tube { background-color:#3343bb; }
.theme7 .grid-box-bgcolor-dark .grid-tube { background-color:#161d69; }
.theme7 .grid-box-bgcolor-darker .grid-tube { background-color:#111754; }
.theme7.color-nav.not-logged-in #nav-cms-wrapper { background-color:#283593; }
.theme7.color-nav.not-logged-in #nav-cms-wrapper .dropdown-menu { background:#27348f; }
.theme7.color-nav.not-logged-in .navbar-nav > li > a { color:#ffffff; }
.theme7.color-nav.not-logged-in .dropdown-menu > li > a { color:#ffffff; }
.theme7.color-header #header-wrapper { background:#283593; }
.theme7.color-header .top-links, .theme7.color-header .top-links a { color:#ffffff; }
.theme7.color-header .logged-in .navbar-nav > li > a { color:#ffffff; }
.theme7.color-header.not-logged-in.color-nav #nav-cms-wrapper { background:#1a237e; }
label.theme8 {
  background-color:#114466;
  border-bottom:8px solid #114466;
  color:#ffffff;
}
.theme8 .theme-color-text { color:#114466; }
.theme8 .theme-background { background:#114466 !important; }
.theme8 .theme-bg-color { background-color:#114466 !important; }
.theme8 .btn-themecolor {
  color:#114466;
  border-color:#114466;
}
.theme8 .grid-box-bgcolor .grid-tube { background-color:#114466; }
.theme8 .grid-box-bgcolor-light .grid-tube { background-color:#186192; }
.theme8 .grid-box-bgcolor-dark .grid-tube { background-color:#0d3550; }
.theme8 .grid-box-bgcolor-darker .grid-tube { background-color:#0a273a; }
.theme8.color-nav.not-logged-in #nav-cms-wrapper { background-color:#114466; }
.theme8.color-nav.not-logged-in #nav-cms-wrapper .dropdown-menu { background:#104162; }
.theme8.color-nav.not-logged-in .navbar-nav > li > a { color:#ffffff; }
.theme8.color-nav.not-logged-in .dropdown-menu > li > a { color:#ffffff; }
.theme8.color-header #header-wrapper { background:#114466; }
.theme8.color-header .top-links, .theme8.color-header .top-links a { color:#ffffff; }
.theme8.color-header .logged-in .navbar-nav > li > a { color:#ffffff; }
.theme8.color-header.not-logged-in.color-nav #nav-cms-wrapper { background:#114466; }
label.theme9 {
  background-color:#e56e06;
  border-bottom:8px solid #e56e06;
  color:#ffffff;
}
.theme9 .theme-color-text { color:#e56e06; }
.theme9 .theme-background { background:#e56e06 !important; }
.theme9 .theme-bg-color { background-color:#e56e06 !important; }
.theme9 .btn-themecolor {
  color:#e56e06;
  border-color:#e56e06;
}
.theme9 .grid-box-bgcolor .grid-tube { background-color:#e56e06; }
.theme9 .grid-box-bgcolor-light .grid-tube { background-color:#f98825; }
.theme9 .grid-box-bgcolor-dark .grid-tube { background-color:#cc6205; }
.theme9 .grid-box-bgcolor-darker .grid-tube { background-color:#b35605; }
.theme9.color-nav.not-logged-in #nav-cms-wrapper { background-color:#e56e06; }
.theme9.color-nav.not-logged-in #nav-cms-wrapper .dropdown-menu { background:#e06c06; }
.theme9.color-nav.not-logged-in .navbar-nav > li > a { color:#ffffff; }
.theme9.color-nav.not-logged-in .dropdown-menu > li > a { color:#ffffff; }
.theme9.color-header #header-wrapper { background:#e56e06; }
.theme9.color-header .top-links, .theme9.color-header .top-links a { color:#ffffff; }
.theme9.color-header .logged-in .navbar-nav > li > a { color:#ffffff; }
.theme9.color-header.not-logged-in.color-nav #nav-cms-wrapper { background:#e56e06; }
label.theme10 {
  background-color:#b35537;
  border-bottom:8px solid #b35537;
  color:#ffffff;
}
.theme10 .theme-color-text { color:#b35537; }
.theme10 .theme-background { background:#b35537 !important; }
.theme10 .theme-bg-color { background-color:#b35537 !important; }
.theme10 .btn-themecolor {
  color:#b35537;
  border-color:#b35537;
}
.theme10 .grid-box-bgcolor .grid-tube { background-color:#b35537; }
.theme10 .grid-box-bgcolor-light .grid-tube { background-color:#ca7053; }
.theme10 .grid-box-bgcolor-dark .grid-tube { background-color:#9f4c31; }
.theme10 .grid-box-bgcolor-darker .grid-tube { background-color:#8c422b; }
.theme10.color-nav.not-logged-in #nav-cms-wrapper { background-color:#b35537; }
.theme10.color-nav.not-logged-in #nav-cms-wrapper .dropdown-menu { background:#af5336; }
.theme10.color-nav.not-logged-in .navbar-nav > li > a { color:#ffffff; }
.theme10.color-nav.not-logged-in .dropdown-menu > li > a { color:#ffffff; }
.theme10.color-header #header-wrapper { background:#b35537; }
.theme10.color-header .top-links, .theme10.color-header .top-links a { color:#ffffff; }
.theme10.color-header .logged-in .navbar-nav > li > a { color:#ffffff; }
.theme10.color-header.not-logged-in.color-nav #nav-cms-wrapper { background:#b35537; }
label.theme11 {
  background-color:#a81e92;
  border-bottom:8px solid #a81e92;
  color:#ffffff;
}
.theme11 .theme-color-text { color:#a81e92; }
.theme11 .theme-background { background:#a81e92 !important; }
.theme11 .theme-bg-color { background-color:#a81e92 !important; }
.theme11 .btn-themecolor {
  color:#a81e92;
  border-color:#a81e92;
}
.theme11 .grid-box-bgcolor .grid-tube { background-color:#a81e92; }
.theme11 .grid-box-bgcolor-light .grid-tube { background-color:#d326b8; }
.theme11 .grid-box-bgcolor-dark .grid-tube { background-color:#921a7f; }
.theme11 .grid-box-bgcolor-darker .grid-tube { background-color:#7d166c; }
.theme11.color-nav.not-logged-in #nav-cms-wrapper { background-color:#a81e92; }
.theme11.color-nav.not-logged-in #nav-cms-wrapper .dropdown-menu { background:#a41d8e; }
.theme11.color-nav.not-logged-in .navbar-nav > li > a { color:#ffffff; }
.theme11.color-nav.not-logged-in .dropdown-menu > li > a { color:#ffffff; }
.theme11.color-header #header-wrapper { background:#a81e92; }
.theme11.color-header .top-links, .theme11.color-header .top-links a { color:#ffffff; }
.theme11.color-header .logged-in .navbar-nav > li > a { color:#ffffff; }
.theme11.color-header.not-logged-in.color-nav #nav-cms-wrapper { background:#a81e92; }
label.theme12 {
  background-color:#6d0d94;
  border-bottom:8px solid #5b057d;
  color:#ffffff;
}
.theme12 .theme-color-text { color:#6d0d94; }
.theme12 .theme-background { background:#6d0d94 !important; }
.theme12 .theme-bg-color { background-color:#6d0d94 !important; }
.theme12 .btn-themecolor {
  color:#6d0d94;
  border-color:#5b057d;
}
.theme12 .grid-box-bgcolor .grid-tube { background-color:#6d0d94; }
.theme12 .grid-box-bgcolor-light .grid-tube { background-color:#9011c3; }
.theme12 .grid-box-bgcolor-dark .grid-tube { background-color:#490464; }
.theme12 .grid-box-bgcolor-darker .grid-tube { background-color:#37034c; }
.theme12.color-nav.not-logged-in #nav-cms-wrapper { background-color:#6d0d94; }
.theme12.color-nav.not-logged-in #nav-cms-wrapper .dropdown-menu { background:#6a0d8f; }
.theme12.color-nav.not-logged-in .navbar-nav > li > a { color:#ffffff; }
.theme12.color-nav.not-logged-in .dropdown-menu > li > a { color:#ffffff; }
.theme12.color-header #header-wrapper { background:#6d0d94; }
.theme12.color-header .top-links, .theme12.color-header .top-links a { color:#ffffff; }
.theme12.color-header .logged-in .navbar-nav > li > a { color:#ffffff; }
.theme12.color-header.not-logged-in.color-nav #nav-cms-wrapper { background:#5b057d; }
label.theme13 {
  background-color:#012d71;
  border-bottom:8px solid #012d71;
  color:#ffffff;
}
.theme13 .theme-color-text { color:#012d71; }
.theme13 .theme-background { background:#012d71 !important; }
.theme13 .theme-bg-color { background-color:#012d71 !important; }
.theme13 .btn-themecolor {
  color:#012d71;
  border-color:#012d71;
}
.theme13 .grid-box-bgcolor .grid-tube { background-color:#012d71; }
.theme13 .grid-box-bgcolor-light .grid-tube { background-color:#0141a4; }
.theme13 .grid-box-bgcolor-dark .grid-tube { background-color:#012358; }
.theme13 .grid-box-bgcolor-darker .grid-tube { background-color:#01193e; }
.theme13.color-nav.not-logged-in #nav-cms-wrapper { background-color:#012d71; }
.theme13.color-nav.not-logged-in #nav-cms-wrapper .dropdown-menu { background:#012b6c; }
.theme13.color-nav.not-logged-in .navbar-nav > li > a { color:#ffffff; }
.theme13.color-nav.not-logged-in .dropdown-menu > li > a { color:#ffffff; }
.theme13.color-header #header-wrapper { background:#012d71; }
.theme13.color-header .top-links, .theme13.color-header .top-links a { color:#ffffff; }
.theme13.color-header .logged-in .navbar-nav > li > a { color:#ffffff; }
.theme13.color-header.not-logged-in.color-nav #nav-cms-wrapper { background:#012d71; }
label.theme14 {
  background-color:#0443a0;
  border-bottom:8px solid #0443a0;
  color:#ffffff;
}
.theme14 .theme-color-text { color:#0443a0; }
.theme14 .theme-background { background:#0443a0 !important; }
.theme14 .theme-bg-color { background-color:#0443a0 !important; }
.theme14 .btn-themecolor {
  color:#0443a0;
  border-color:#0443a0;
}
.theme14 .grid-box-bgcolor .grid-tube { background-color:#0443a0; }
.theme14 .grid-box-bgcolor-light .grid-tube { background-color:#0558d2; }
.theme14 .grid-box-bgcolor-dark .grid-tube { background-color:#033987; }
.theme14 .grid-box-bgcolor-darker .grid-tube { background-color:#032e6e; }
.theme14.color-nav.not-logged-in #nav-cms-wrapper { background-color:#0443a0; }
.theme14.color-nav.not-logged-in #nav-cms-wrapper .dropdown-menu { background:#04419b; }
.theme14.color-nav.not-logged-in .navbar-nav > li > a { color:#ffffff; }
.theme14.color-nav.not-logged-in .dropdown-menu > li > a { color:#ffffff; }
.theme14.color-header #header-wrapper { background:#0443a0; }
.theme14.color-header .top-links, .theme14.color-header .top-links a { color:#ffffff; }
.theme14.color-header .logged-in .navbar-nav > li > a { color:#ffffff; }
.theme14.color-header.not-logged-in.color-nav #nav-cms-wrapper { background:#0443a0; }
label.theme15 {
  background-color:#2f6796;
  border-bottom:8px solid #018abd;
  color:#ffffff;
}
.theme15 .theme-color-text { color:#2f6796; }
.theme15 .theme-background { background:#2f6796 !important; }
.theme15 .theme-bg-color { background-color:#2f6796 !important; }
.theme15 .btn-themecolor {
  color:#2f6796;
  border-color:#018abd;
}
.theme15 .grid-box-bgcolor .grid-tube { background-color:#2f6796; }
.theme15 .grid-box-bgcolor-light .grid-tube { background-color:#3b82bd; }
.theme15 .grid-box-bgcolor-dark .grid-tube { background-color:#0177a4; }
.theme15 .grid-box-bgcolor-darker .grid-tube { background-color:#01658a; }
.theme15.color-nav.not-logged-in #nav-cms-wrapper { background-color:#2f6796; }
.theme15.color-nav.not-logged-in #nav-cms-wrapper .dropdown-menu { background:#2e6492; }
.theme15.color-nav.not-logged-in .navbar-nav > li > a { color:#ffffff; }
.theme15.color-nav.not-logged-in .dropdown-menu > li > a { color:#ffffff; }
.theme15.color-header #header-wrapper { background:#2f6796; }
.theme15.color-header .top-links, .theme15.color-header .top-links a { color:#ffffff; }
.theme15.color-header .logged-in .navbar-nav > li > a { color:#ffffff; }
.theme15.color-header.not-logged-in.color-nav #nav-cms-wrapper { background:#018abd; }
label.theme16 {
  background-color:#2282e9;
  border-bottom:8px solid #2282e9;
  color:#ffffff;
}
.theme16 .theme-color-text { color:#2282e9; }
.theme16 .theme-background { background:#2282e9 !important; }
.theme16 .theme-bg-color { background-color:#2282e9 !important; }
.theme16 .btn-themecolor {
  color:#2282e9;
  border-color:#2282e9;
}
.theme16 .grid-box-bgcolor .grid-tube { background-color:#2282e9; }
.theme16 .grid-box-bgcolor-light .grid-tube { background-color:#509cee; }
.theme16 .grid-box-bgcolor-dark .grid-tube { background-color:#1675dc; }
.theme16 .grid-box-bgcolor-darker .grid-tube { background-color:#1469c4; }
.theme16.color-nav.not-logged-in #nav-cms-wrapper { background-color:#2282e9; }
.theme16.color-nav.not-logged-in #nav-cms-wrapper .dropdown-menu { background:#1d7fe9; }
.theme16.color-nav.not-logged-in .navbar-nav > li > a { color:#ffffff; }
.theme16.color-nav.not-logged-in .dropdown-menu > li > a { color:#ffffff; }
.theme16.color-header #header-wrapper { background:#2282e9; }
.theme16.color-header .top-links, .theme16.color-header .top-links a { color:#ffffff; }
.theme16.color-header .logged-in .navbar-nav > li > a { color:#ffffff; }
.theme16.color-header.not-logged-in.color-nav #nav-cms-wrapper { background:#2282e9; }
label.theme17 {
  background-color:#ffd424;
  border-bottom:8px solid #f5c94a;
  color:#6d5706;
}
.theme17 .theme-color-text { color:#ffd424; }
.theme17 .theme-background { background:#ffd424 !important; }
.theme17 .theme-bg-color { background-color:#ffd424 !important; }
.theme17 .btn-themecolor {
  color:#ffd424;
  border-color:#f5c94a;
}
.theme17 .grid-box-bgcolor .grid-tube { background-color:#ffd424; }
.theme17 .grid-box-bgcolor-light .grid-tube { background-color:#ffde57; }
.theme17 .grid-box-bgcolor-dark .grid-tube { background-color:#f4c232; }
.theme17 .grid-box-bgcolor-darker .grid-tube { background-color:#f2bb1a; }
.theme17.color-nav.not-logged-in #nav-cms-wrapper { background-color:#ffd424; }
.theme17.color-nav.not-logged-in #nav-cms-wrapper .dropdown-menu { background:#ffd31f; }
.theme17.color-nav.not-logged-in .navbar-nav > li > a { color:#6d5706; }
.theme17.color-nav.not-logged-in .dropdown-menu > li > a { color:#6d5706; }
.theme17.color-header #header-wrapper { background:#ffd424; }
.theme17.color-header .top-links, .theme17.color-header .top-links a { color:#6d5706; }
.theme17.color-header .logged-in .navbar-nav > li > a { color:#6d5706; }
.theme17.color-header.not-logged-in.color-nav #nav-cms-wrapper { background:#f5c94a; }
label.theme18 {
  background-color:#ca323e;
  border-bottom:8px solid #ca323e;
  color:#ffffff;
}
.theme18 .theme-color-text { color:#ca323e; }
.theme18 .theme-background { background:#ca323e !important; }
.theme18 .theme-bg-color { background-color:#ca323e !important; }
.theme18 .btn-themecolor {
  color:#ca323e;
  border-color:#ca323e;
}
.theme18 .grid-box-bgcolor .grid-tube { background-color:#ca323e; }
.theme18 .grid-box-bgcolor-light .grid-tube { background-color:#d65963; }
.theme18 .grid-box-bgcolor-dark .grid-tube { background-color:#b62d38; }
.theme18 .grid-box-bgcolor-darker .grid-tube { background-color:#a12831; }
.theme18.color-nav.not-logged-in #nav-cms-wrapper { background-color:#ca323e; }
.theme18.color-nav.not-logged-in #nav-cms-wrapper .dropdown-menu { background:#c6313d; }
.theme18.color-nav.not-logged-in .navbar-nav > li > a { color:#ffffff; }
.theme18.color-nav.not-logged-in .dropdown-menu > li > a { color:#ffffff; }
.theme18.color-header #header-wrapper { background:#ca323e; }
.theme18.color-header .top-links, .theme18.color-header .top-links a { color:#ffffff; }
.theme18.color-header .logged-in .navbar-nav > li > a { color:#ffffff; }
.theme18.color-header.not-logged-in.color-nav #nav-cms-wrapper { background:#ca323e; }
label.theme19 {
  background-color:#8e1e1a;
  border-bottom:8px solid #8e1e1a;
  color:#ffffff;
}
.theme19 .theme-color-text { color:#8e1e1a; }
.theme19 .theme-background { background:#8e1e1a !important; }
.theme19 .theme-bg-color { background-color:#8e1e1a !important; }
.theme19 .btn-themecolor {
  color:#8e1e1a;
  border-color:#8e1e1a;
}
.theme19 .grid-box-bgcolor .grid-tube { background-color:#8e1e1a; }
.theme19 .grid-box-bgcolor-light .grid-tube { background-color:#b92722; }
.theme19 .grid-box-bgcolor-dark .grid-tube { background-color:#781916; }
.theme19 .grid-box-bgcolor-darker .grid-tube { background-color:#631512; }
.theme19.color-nav.not-logged-in #nav-cms-wrapper { background-color:#8e1e1a; }
.theme19.color-nav.not-logged-in #nav-cms-wrapper .dropdown-menu { background:#8a1d19; }
.theme19.color-nav.not-logged-in .navbar-nav > li > a { color:#ffffff; }
.theme19.color-nav.not-logged-in .dropdown-menu > li > a { color:#ffffff; }
.theme19.color-header #header-wrapper { background:#8e1e1a; }
.theme19.color-header .top-links, .theme19.color-header .top-links a { color:#ffffff; }
.theme19.color-header .logged-in .navbar-nav > li > a { color:#ffffff; }
.theme19.color-header.not-logged-in.color-nav #nav-cms-wrapper { background:#8e1e1a; }
label.theme20 {
  background-color:#8b2248;
  border-bottom:8px solid #8b2248;
  color:#ffffff;
}
.theme20 .theme-color-text { color:#8b2248; }
.theme20 .theme-background { background:#8b2248 !important; }
.theme20 .theme-bg-color { background-color:#8b2248 !important; }
.theme20 .btn-themecolor {
  color:#8b2248;
  border-color:#8b2248;
}
.theme20 .grid-box-bgcolor .grid-tube { background-color:#8b2248; }
.theme20 .grid-box-bgcolor-light .grid-tube { background-color:#b42c5d; }
.theme20 .grid-box-bgcolor-dark .grid-tube { background-color:#771d3d; }
.theme20 .grid-box-bgcolor-darker .grid-tube { background-color:#621833; }
.theme20.color-nav.not-logged-in #nav-cms-wrapper { background-color:#8b2248; }
.theme20.color-nav.not-logged-in #nav-cms-wrapper .dropdown-menu { background:#872146; }
.theme20.color-nav.not-logged-in .navbar-nav > li > a { color:#ffffff; }
.theme20.color-nav.not-logged-in .dropdown-menu > li > a { color:#ffffff; }
.theme20.color-header #header-wrapper { background:#8b2248; }
.theme20.color-header .top-links, .theme20.color-header .top-links a { color:#ffffff; }
.theme20.color-header .logged-in .navbar-nav > li > a { color:#ffffff; }
.theme20.color-header.not-logged-in.color-nav #nav-cms-wrapper { background:#8b2248; }
label.theme21 {
  background-color:#024027;
  border-bottom:8px solid #024027;
  color:#ffffff;
}
.theme21 .theme-color-text { color:#024027; }
.theme21 .theme-background { background:#024027 !important; }
.theme21 .theme-bg-color { background-color:#024027 !important; }
.theme21 .btn-themecolor {
  color:#024027;
  border-color:#024027;
}
.theme21 .grid-box-bgcolor .grid-tube { background-color:#024027; }
.theme21 .grid-box-bgcolor-light .grid-tube { background-color:#047145; }
.theme21 .grid-box-bgcolor-dark .grid-tube { background-color:#012718; }
.theme21 .grid-box-bgcolor-darker .grid-tube { background-color:#000f09; }
.theme21.color-nav.not-logged-in #nav-cms-wrapper { background-color:#024027; }
.theme21.color-nav.not-logged-in #nav-cms-wrapper .dropdown-menu { background:#023b24; }
.theme21.color-nav.not-logged-in .navbar-nav > li > a { color:#ffffff; }
.theme21.color-nav.not-logged-in .dropdown-menu > li > a { color:#ffffff; }
.theme21.color-header #header-wrapper { background:#024027; }
.theme21.color-header .top-links, .theme21.color-header .top-links a { color:#ffffff; }
.theme21.color-header .logged-in .navbar-nav > li > a { color:#ffffff; }
.theme21.color-header.not-logged-in.color-nav #nav-cms-wrapper { background:#024027; }
label.theme22 {
  background-color:#0097ea;
  border-bottom:8px solid #0097ea;
  color:#ffffff;
}
.theme22 .theme-color-text { color:#0097ea; }
.theme22 .theme-background { background:#0097ea !important; }
.theme22 .theme-bg-color { background-color:#0097ea !important; }
.theme22 .btn-themecolor {
  color:#0097ea;
  border-color:#0097ea;
}
.theme22 .grid-box-bgcolor .grid-tube { background-color:#0097ea; }
.theme22 .grid-box-bgcolor-light .grid-tube { background-color:#1eafff; }
.theme22 .grid-box-bgcolor-dark .grid-tube { background-color:#0087d1; }
.theme22 .grid-box-bgcolor-darker .grid-tube { background-color:#0076b7; }
.theme22.color-nav.not-logged-in #nav-cms-wrapper { background-color:#0097ea; }
.theme22.color-nav.not-logged-in #nav-cms-wrapper .dropdown-menu { background:#0094e5; }
.theme22.color-nav.not-logged-in .navbar-nav > li > a { color:#ffffff; }
.theme22.color-nav.not-logged-in .dropdown-menu > li > a { color:#ffffff; }
.theme22.color-header #header-wrapper { background:#0097ea; }
.theme22.color-header .top-links, .theme22.color-header .top-links a { color:#ffffff; }
.theme22.color-header .logged-in .navbar-nav > li > a { color:#ffffff; }
.theme22.color-header.not-logged-in.color-nav #nav-cms-wrapper { background:#0097ea; }
label.theme23 {
  background-color:#0097ea;
  border-bottom:8px solid #0097ea;
  color:#ffffff;
}
.theme23 .theme-color-text { color:#0097ea; }
.theme23 .theme-background { background:#0097ea !important; }
.theme23 .theme-bg-color { background-color:#0097ea !important; }
.theme23 .btn-themecolor {
  color:#0097ea;
  border-color:#0097ea;
}
.theme23 .grid-box-bgcolor .grid-tube { background-color:#0097ea; }
.theme23 .grid-box-bgcolor-light .grid-tube { background-color:#1eafff; }
.theme23 .grid-box-bgcolor-dark .grid-tube { background-color:#0087d1; }
.theme23 .grid-box-bgcolor-darker .grid-tube { background-color:#0076b7; }
.theme23.color-nav.not-logged-in #nav-cms-wrapper { background-color:#0097ea; }
.theme23.color-nav.not-logged-in #nav-cms-wrapper .dropdown-menu { background:#0094e5; }
.theme23.color-nav.not-logged-in .navbar-nav > li > a { color:#ffffff; }
.theme23.color-nav.not-logged-in .dropdown-menu > li > a { color:#ffffff; }
.theme23.color-header #header-wrapper { background:#0097ea; }
.theme23.color-header .top-links, .theme23.color-header .top-links a { color:#ffffff; }
.theme23.color-header .logged-in .navbar-nav > li > a { color:#ffffff; }
.theme23.color-header.not-logged-in.color-nav #nav-cms-wrapper { background:#0097ea; }
label.theme24 {
  background-color:#573817;
  border-bottom:8px solid #573817;
  color:#ffffff;
}
.theme24 .theme-color-text { color:#573817; }
.theme24 .theme-background { background:#573817 !important; }
.theme24 .theme-bg-color { background-color:#573817 !important; }
.theme24 .btn-themecolor {
  color:#573817;
  border-color:#573817;
}
.theme24 .grid-box-bgcolor .grid-tube { background-color:#573817; }
.theme24 .grid-box-bgcolor-light .grid-tube { background-color:#7f5222; }
.theme24 .grid-box-bgcolor-dark .grid-tube { background-color:#432b12; }
.theme24 .grid-box-bgcolor-darker .grid-tube { background-color:#2f1e0c; }
.theme24.color-nav.not-logged-in #nav-cms-wrapper { background-color:#573817; }
.theme24.color-nav.not-logged-in #nav-cms-wrapper .dropdown-menu { background:#533516; }
.theme24.color-nav.not-logged-in .navbar-nav > li > a { color:#ffffff; }
.theme24.color-nav.not-logged-in .dropdown-menu > li > a { color:#ffffff; }
.theme24.color-header #header-wrapper { background:#573817; }
.theme24.color-header .top-links, .theme24.color-header .top-links a { color:#ffffff; }
.theme24.color-header .logged-in .navbar-nav > li > a { color:#ffffff; }
.theme24.color-header.not-logged-in.color-nav #nav-cms-wrapper { background:#573817; }
label.theme25 {
  background-color:#000000;
  border-bottom:8px solid #000000;
  color:#ffffff;
}
.theme25 .theme-color-text { color:#000000; }
.theme25 .theme-background { background:#000000 !important; }
.theme25 .theme-bg-color { background-color:#000000 !important; }
.theme25 .btn-themecolor {
  color:#000000;
  border-color:#000000;
}
.theme25 .grid-box-bgcolor .grid-tube { background-color:#000000; }
.theme25 .grid-box-bgcolor-light .grid-tube { background-color:#1a1a1a; }
.theme25 .grid-box-bgcolor-dark .grid-tube { background-color:#000000; }
.theme25 .grid-box-bgcolor-darker .grid-tube { background-color:#000000; }
.theme25.color-nav.not-logged-in #nav-cms-wrapper { background-color:#000000; }
.theme25.color-nav.not-logged-in #nav-cms-wrapper .dropdown-menu { background:#000000; }
.theme25.color-nav.not-logged-in .navbar-nav > li > a { color:#ffffff; }
.theme25.color-nav.not-logged-in .dropdown-menu > li > a { color:#ffffff; }
.theme25.color-header #header-wrapper { background:#000000; }
.theme25.color-header .top-links, .theme25.color-header .top-links a { color:#ffffff; }
.theme25.color-header .logged-in .navbar-nav > li > a { color:#ffffff; }
.theme25.color-header.not-logged-in.color-nav #nav-cms-wrapper { background:#000000; }
label.theme26 {
  background-color:#b9d300;
  border-bottom:8px solid #b9d300;
  color:#ffffff;
}
.theme26 .theme-color-text { color:#b9d300; }
.theme26 .theme-background { background:#b9d300 !important; }
.theme26 .theme-bg-color { background-color:#b9d300 !important; }
.theme26 .btn-themecolor {
  color:#b9d300;
  border-color:#b9d300;
}
.theme26 .grid-box-bgcolor .grid-tube { background-color:#b9d300; }
.theme26 .grid-box-bgcolor-light .grid-tube { background-color:#e0ff07; }
.theme26 .grid-box-bgcolor-dark .grid-tube { background-color:#a3ba00; }
.theme26 .grid-box-bgcolor-darker .grid-tube { background-color:#8ca000; }
.theme26.color-nav.not-logged-in #nav-cms-wrapper { background-color:#b9d300; }
.theme26.color-nav.not-logged-in #nav-cms-wrapper .dropdown-menu { background:#b5ce00; }
.theme26.color-nav.not-logged-in .navbar-nav > li > a { color:#ffffff; }
.theme26.color-nav.not-logged-in .dropdown-menu > li > a { color:#ffffff; }
.theme26.color-header #header-wrapper { background:#b9d300; }
.theme26.color-header .top-links, .theme26.color-header .top-links a { color:#ffffff; }
.theme26.color-header .logged-in .navbar-nav > li > a { color:#ffffff; }
.theme26.color-header.not-logged-in.color-nav #nav-cms-wrapper { background:#b9d300; }
@media (max-width: 767px) {
  body { font-size:1.2em; }
  .page-header h1 { font-size:2em; }
  #content-box { padding-top:20px; }
  #footer-box {
    background:none;
    text-align:center;
  }
  .whitecard { padding:10px 20px; }
  .whitebox .whitebox-tube { padding:10px 20px; }
  .group-header .group-image { min-height:auto; }
  .profilepile .inline-list-item { height:160px; }
  .profilepile .profile-image-small {
    width:75px;
    height:75px;
  }
  .profile-image {
    float:none !important;
    width:25%;
    margin:10px auto;
    text-align:center;
  }
  .profile-info {
    margin:0px;
    text-align:center;
  }
  .profile-header .btn { float:none; }
  .profile-header .btn-plain.contribute-trigger { display:none; }
  .profile-info-wrapper .profile-statistics-info { margin-top:0; }
  .profile-btn-links .pull-right { float:left !important; }
  .profile-info-wrapper .profile-statistics-info { display:none; }
  .profile-sm-links { margin-top:5px; }
  .profile-info .headline-meta { min-height:auto; }
  .profile-box-tube {
    padding-left:20px;
    padding-right:20px;
  }
  .profile-header { margin-bottom:10px; }
  .border-box-plain { padding:20px 30px; }
  .search-tabs .tabs {
    width:50%;
    float:left;
  }
  .search-minitabs .minitabs-select-wrapper {
    padding:0 0 10px 0;
    float:left;
  }
  .search-minitabs .minitabs-select-wrapper span { padding:5px 10px 5px 0; }
  .search-minitabs .counter { float:left !important; }
  #feedback-corner #feedback { display:none; }
}
@media (max-width: 767px) {
  .v5homegrid .grid-box {
    width:100% !important;
    min-height:0px !important;
  }
  .v5homegrid .grid-box-wrap {
    width:100% !important;
    min-height:0px !important;
    margin:0 0 20px !important;
  }
  .v5homegrid .grid-tube {
    position:relative;
    height:auto !important;
    margin:0 !important;
  }
  .v5homegrid .grid-image-160 { font-size:0.9em; }
  .v5homegrid .grid-image-sm-160 .block-inner { height:160px; }
  .v5homegrid .grid-image-sm-200 .block-inner { height:200px; }
  .v5homegrid .grid-image-sm-240 .block-inner { height:240px; }
  .v5homegrid .grid-image-sm-300 .block-inner { height:300px; }
}
@media (max-width: 1199px) {
  .v5homegrid .grid-h450 .grid-tube {
    height:360px !important;
    min-height:360px !important;
  }
  .v5homegrid .grid-h450 .grid-box-wrap { min-height:360px !important; }
}
@media (max-width: 991px) {
  .v5homegrid .grid-h450 .grid-tube {
    height:280px !important;
    min-height:280px !important;
  }
  .v5homegrid .grid-h450 .grid-box-wrap { min-height:280px !important; }
}
@media (max-width: 767px) {
  .v5homegrid .home-members .images-grid > [class*="col-"] { width:33%; }
  .v5homegrid .home-gallery.home-gallery-6 .item { width:33%; }
  .members-summary .search-box #count-box { text-align:center; }
  .page-header { margin-top:20px; }
  .closable-strip { font-weight:normal; }
  .slide-caption { padding:15px 20px !important; }
  .slide-title { font-size:1.6em !important; }
  .slide-text { font-size:1.1em !important; }
}
.fb_iframe_widget, .fb_iframe_widget span, .fb_iframe_widget span iframe[style] { width:100% !important; }
@media (max-width: 500px) {
  #nav-user-wrapper { display:none; }
}
@media print {
  a[href]:after { content:none !important; }
}
@media (max-width: 1024px) {
  .navbar-header { float:none; }
  .navbar-left, .navbar-right { float:none !important; }
  .navbar-toggle { display:block; }
  .navbar-collapse {
    border-top:1px solid transparent;
    box-shadow:inset 0 1px 0 rgba(255,255,255,0.1);
  }
  .navbar-fixed-top {
    top:0;
    border-width:0 0 1px;
  }
  .navbar-collapse.collapse { display:none !important; }
  .navbar-nav {
    float:none !important;
    margin-top:7.5px;
  }
  .navbar-nav > li { float:none; }
  .navbar-nav > li > a {
    padding-top:10px;
    padding-bottom:10px;
  }
  .collapse.in { display:block !important; }
}
#quick-actions-search ul.li-inline {
  margin:0;
  padding:0;
  font-size:0.95em;
  display:none;
  max-height:255px;
  overflow-y:scroll;
}
#quick-actions-search ul.li-inline li {
  list-style:none;
  overflow:hidden;
  display:block;
}
#quick-actions-search ul.li-inline li.selected a { background-color:#b3ecff; }
#quick-actions-search ul.li-inline li a {
  text-overflow:ellipsis;
  display:block;
  padding:12px 15px;
  font-size:1.4em;
  background:#f1f4f5;
  border:1px solid #cfd6e7;
  border-top:none;
}
#quick-actions-search ul.li-inline li a:hover { background-color:#b3ecff; }
#quick-actions-search.open-list { display:block; }
#quick-actions-search.open-list .quick-action-links { display:none; }
#quick-actions-search.open-list ul.li-inline { display:block; }
.description-text {
  font-size:0.75em;
  color:#999999;
  padding-left:15px;
}
.quick-action-links { margin-top:20px; }
.quick-action-individual-link span.label { float:right; }
.v5homegrid .home-content { color:rgba(255,255,255,0.8); }
.v5homegrid .home-content .block-inner { padding:15px 20px; }
.v5homegrid .home-content.text-color p, .v5homegrid .home-content.text-color h1 { color:inherit; }
.v5homegrid .home-content.text-dark p { color:rgba(0,0,0,0.8); }
.v5homegrid .home-content h2, .v5homegrid .home-content p { line-height:1.6em; }
.v5homegrid .home-quote .block-inner { padding:20px 20px; }
.v5homegrid .home-quote p {
  font-size:1.2em;
  color:#000000 !important;
}
.overlay-title-center .block-title {
  bottom:40%;
  width:100%;
  text-align:center;
}
