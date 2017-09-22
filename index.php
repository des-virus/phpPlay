<!DOCTYPE html>
<html ng-app="app">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width">

        <title>Trang material</title>
        <link href="./Github_files/frameworks-7db951ed87f8f6cbd3a9e89c294e300cf23c1a83ad7ae64c70b8f99b21031340.css"  rel="stylesheet">
        <link href="./Github_files/github-4b2158409cc56f58dafd534ae676475b1bfe7cb057c415e2c5984e3c13b041e5.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/lib/angular.min.js" type="text/javascript"></script>
        <script src="js/module/app.js" type="text/javascript"></script>
        <script src="js/service/MainService.js" type="text/javascript"></script>
        <script src="js/controller/MainController.js" type="text/javascript"></script>

        <script>
                    function extractPhone(text) {
                    return text.match(/(01[2689]|09|\+84)[0-9]{8,10}/g);
                    }


        </script>

    <body class="logged-in env-production intent-mouse" cz-shortcut-listen="true" ng-controller="MainCtrl">
        <div class="position-relative js-header-wrapper ">
            <a href="https://github.com/minhphong306/phpPlay/settings#start-of-content" tabindex="1" class="bg-black text-white p-3 show-on-focus js-skip-to-content">Skip to content</a>
            <div id="js-pjax-loader-bar" class="pjax-loader-bar"><div class="progress" style="transition: width 0.4s ease 0s; width: 100%;"></div></div>
            <header class="Header  f5" role="banner">
                <div class="d-flex px-3 flex-justify-between container-lg">
                    <div class="d-flex flex-justify-between">
                        <a class="header-logo-invertocat" href="https://github.com/" data-hotkey="g d" aria-label="Homepage" data-ga-click="Header, go to dashboard, icon:logo">
                            <svg aria-hidden="true" class="octicon octicon-mark-github" height="32" version="1.1" viewBox="0 0 16 16" width="32"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path></svg>
                        </a>
                    </div>

                    <div class="HeaderMenu d-flex flex-justify-between flex-auto">
                        <div class="d-flex">
                            <div class="">
                                <div class="header-search scoped-search site-scoped-search js-site-search" role="search">
                                    <!-- '"` --><!-- </textarea></xmp> --><form accept-charset="UTF-8" action="https://github.com/minhphong306/phpPlay/search" class="js-site-search-form" data-scoped-search-url="/minhphong306/phpPlay/search" data-unscoped-search-url="/search" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"></div>
                                        <label class="form-control header-search-wrapper js-chromeless-input-container">
                                            <a href="https://github.com/minhphong306/phpPlay" class="header-search-scope no-underline">Repo này</a>
                                            <input type="text" class="form-control header-search-input js-site-search-focus js-site-search-field is-clearable" placeholder="Tìm kiếm">
                                            <input type="hidden" class="js-site-search-type-field" name="type">
                                        </label>
                                    </form>
                                </div>
                            </div>

                            <ul class="d-flex pl-2 flex-items-center text-bold list-style-none" role="navigation">
                                <li ng-repeat="item in menus track by $index" ng-click="chooseMenu(item)">
                                    <a href="#" class="js-selected-navigation-item HeaderNavlink px-2">
                                        {{item.name}}
                                    </a> 
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        </div>

        <div id="start-of-content" class="show-on-focus"></div>
        <div id="js-flash-container">
        </div>

        <div role="main">
            <div itemscope="" itemtype="http://schema.org/SoftwareSourceCode">
                <div id="js-repo-pjax-container" data-pjax-container=""><div class="pagehead repohead instapaper_ignore readability-menu experiment-repo-nav">
                        <div class="container repohead-details-container">

                            <h1 class="public ">
                                <svg aria-hidden="true" class="octicon octicon-repo" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M4 9H3V8h1v1zm0-3H3v1h1V6zm0-2H3v1h1V4zm0-2H3v1h1V2zm8-1v12c0 .55-.45 1-1 1H6v2l-1.5-1.5L3 16v-2H1c-.55 0-1-.45-1-1V1c0-.55.45-1 1-1h10c.55 0 1 .45 1 1zm-1 10H1v2h2v-1h3v1h5v-2zm0-10H2v9h9V1z"> </path></svg>
                                &nsc; Đại ca Phong muôn năm
                            </h1>

                        </div>

                    </div>


                    <div class="container new-discussion-timeline experiment-repo-nav">
                        <div class="repository-content">


                            <div class="columns">

                                <div class="column one-fourth" role="navigation" data-pjax="">
                                    <nav class="menu">
                                        <a ng-repeat="item in menus track by $index" href="#" ng-class="item == selected_menu ? 'selected' : ''"  ng-click="chooseMenu(item)" class="js-selected-navigation-item menu-item">
                                            {{item.name}}
                                        </a>
                                    </nav>
                                </div>

                                <div class="column three-fourths">


                                    <div id="options_bucket">
                                        <div class="Subhead">
                                            <h2 class="Subhead-heading">{{selected_menu.name}} - {{selected_menu.note}}</h2>
                                        </div>

                                        <div class="columns">
                                            <div class="column one-fourth" ng-show="contents.length > 0">
                                                <nav class="menu" id="main_table">
                                                    <a ng-repeat="item in contents" ng-if="$index % 4 == 0" href="#{{item.id_string}}" class="js-selected-navigation-item menu-item">
                                                        {{item.title}}
                                                    </a>
                                                </nav>
                                            </div>
                                            <div class="column one-fourth" ng-show="contents.length > 0">
                                                <nav class="menu" id="main_table">
                                                    <a ng-repeat="item in contents" ng-if="$index % 4 == 1"  href="#{{item.id_string}}" class="js-selected-navigation-item menu-item">
                                                        {{item.title}}
                                                    </a>
                                                </nav>
                                            </div>
                                            <div class="column one-fourth" ng-show="contents.length > 0">
                                                <nav class="menu" id="main_table">
                                                    <a ng-repeat="item in contents" ng-if="$index % 4 == 2"  href="#{{item.id_string}}" class="js-selected-navigation-item menu-item">
                                                        {{item.title}}
                                                    </a>
                                                </nav>
                                            </div>
                                            <div class="column one-fourth" ng-show="contents.length > 0">
                                                <nav class="menu" id="main_table">
                                                    <a ng-repeat="item in contents" ng-if="$index % 4 == 3"  href="#{{item.id_string}}" class="js-selected-navigation-item menu-item">
                                                        {{item.title}}
                                                    </a>
                                                </nav>
                                            </div>
                                            <div class="column one-fourth" ng-show="contents.length == 0">
                                                <h3> Chưa có nội dung</h3>
                                            </div>
                                        </div>

                                        <div ng-repeat="item in contents"  id="{{item.id_string}}" class="timeline-comment-wrapper timeline-new-comment js-comment-container ">
                                            <a href="#main_table">
                                                <img alt="@minhphong306" class="timeline-comment-avatar" height="44" src="Github_files/19796136.jpg" width="44">
                                            </a>
                                            <form accept-charset="UTF-8" action="https://github.com/minhphong306/phpPlay/commit_comment/create">

                                                <div class="timeline-comment">
                                                    <div class="js-suggester-container js-previewable-comment-form previewable-comment-form write-selected">
                                                        <div class="comment-form-head tabnav">
                                                            <label class="btn-link tabnav-tab write-tab js-write-tab "> {{item.title}}</label>
                                                        </div>


                                                        <div class="write-content is-default upload-enabled" >
                                                            <pre>{{item.content}}</pre>
                                                        </div>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                    </div>



                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>


    <div class="footer container-lg px-3" role="contentinfo">
        <div class="position-relative d-flex flex-justify-between py-6 mt-6 f6 text-gray border-top border-gray-light ">
            <ul class="list-style-none d-flex flex-wrap ">
                <li class="mr-3">© 2017 <span title="0.18659s from unicorn-2291568960-5c5hb">GitHub</span>, Inc.</li>
                <li class="mr-3"><a href="https://github.com/site/terms" data-ga-click="Footer, go to terms, text:terms">Terms</a></li>
                <li class="mr-3"><a href="https://github.com/site/privacy" data-ga-click="Footer, go to privacy, text:privacy">Privacy</a></li>
                <li class="mr-3"><a href="https://github.com/security" data-ga-click="Footer, go to security, text:security">Security</a></li>
                <li class="mr-3"><a href="https://status.github.com/" data-ga-click="Footer, go to status, text:status">Status</a></li>
                <li><a href="https://help.github.com/" data-ga-click="Footer, go to help, text:help">Help</a></li>
            </ul>

            <a href="https://github.com/" aria-label="Homepage" class="footer-octicon" title="GitHub">
                <svg aria-hidden="true" class="octicon octicon-mark-github" height="24" version="1.1" viewBox="0 0 16 16" width="24"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path></svg>
            </a>
            <ul class="list-style-none d-flex flex-wrap ">
                <li class="mr-3"><a href="https://github.com/contact" data-ga-click="Footer, go to contact, text:contact">Contact GitHub</a></li>
                <li class="mr-3"><a href="https://developer.github.com/" data-ga-click="Footer, go to api, text:api">API</a></li>
                <li class="mr-3"><a href="https://training.github.com/" data-ga-click="Footer, go to training, text:training">Training</a></li>
                <li class="mr-3"><a href="https://shop.github.com/" data-ga-click="Footer, go to shop, text:shop">Shop</a></li>
                <li class="mr-3"><a href="https://github.com/blog" data-ga-click="Footer, go to blog, text:blog">Blog</a></li>
                <li><a href="https://github.com/about" data-ga-click="Footer, go to about, text:about">About</a></li>

            </ul>
        </div>
    </div>

    <div id="ajax-error-message" class="ajax-error-message flash flash-error">
        <svg aria-hidden="true" class="octicon octicon-alert" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M8.865 1.52c-.18-.31-.51-.5-.87-.5s-.69.19-.87.5L.275 13.5c-.18.31-.18.69 0 1 .19.31.52.5.87.5h13.7c.36 0 .69-.19.86-.5.17-.31.18-.69.01-1L8.865 1.52zM8.995 13h-2v-2h2v2zm0-3h-2V6h2v4z"></path></svg>
        <button type="button" class="flash-close js-flash-close js-ajax-error-dismiss" aria-label="Dismiss error">
            <svg aria-hidden="true" class="octicon octicon-x" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"></path></svg>
        </button>
        You can't perform that action at this time.
    </div>

    <script src="./Github_files/frameworks-4b1b3e45ebb896ec5555a60b6a57072c698f1b4b86b76aa0b4fe1067f440b1f3.js"></script>

    <script src="./Github_files/github-570b8b9605c09d48e999d3be4e143d16b8f10935f33805210dbbf48d107685b0.js"></script>




    <div class="js-stale-session-flash stale-session-flash flash flash-warn flash-banner d-none">
        <svg aria-hidden="true" class="octicon octicon-alert" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M8.865 1.52c-.18-.31-.51-.5-.87-.5s-.69.19-.87.5L.275 13.5c-.18.31-.18.69 0 1 .19.31.52.5.87.5h13.7c.36 0 .69-.19.86-.5.17-.31.18-.69.01-1L8.865 1.52zM8.995 13h-2v-2h2v2zm0-3h-2V6h2v4z"></path></svg>
        <span class="signed-in-tab-flash">You signed in with another tab or window. <a href="https://github.com/minhphong306/phpPlay/settings">Reload</a> to refresh your session.</span>
        <span class="signed-out-tab-flash">You signed out in another tab or window. <a href="https://github.com/minhphong306/phpPlay/settings">Reload</a> to refresh your session.</span>
    </div>
    <div class="facebox" id="facebox" style="display:none;">
        <div class="facebox-popup">
            <div class="facebox-content" role="dialog" aria-labelledby="facebox-header" aria-describedby="facebox-description">
            </div>
            <button type="button" class="facebox-close js-facebox-close" aria-label="Close modal">
                <svg aria-hidden="true" class="octicon octicon-x" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"></path></svg>
            </button>
        </div>
    </div>





</body>
</html>