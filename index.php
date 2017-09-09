<!DOCTYPE html>
<html ng-app="app">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width">

        <title>Trang material</title>
        <link href="./Github_files/frameworks-7db951ed87f8f6cbd3a9e89c294e300cf23c1a83ad7ae64c70b8f99b21031340.css"  rel="stylesheet">
        <link href="./Github_files/github-4b2158409cc56f58dafd534ae676475b1bfe7cb057c415e2c5984e3c13b041e5.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/module/app.js" type="text/javascript"></script>
        <script src="js/service/MainService.js" type="text/javascript"></script>
        <script src="js/controller/MainController.js" type="text/javascript"></script>

        <script>
                    function extractPhone(text) {
                    return text.match(/(01[2689]|09|\+84)[0-9]{8,10}/g);
                    }

            function getFromURL(url){
            $.ajax({
            type: "GET",
                    url: url,
                    data: {
                    get_param: 'value'
                    },
                    dataType: "json", async: !1,
                    success: function (data) {
                        console.log(data);
                    console.log(extractPhone(data));
                    }
            });
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

                        <div class="d-flex">

                            <ul class="user-nav d-flex flex-items-center list-style-none" id="user-links">
                                <li class="dropdown js-menu-container js-header-notifications">
                                    <span class="d-inline-block  px-2">


                                    </span>
                                </li>

                                <li class="dropdown js-menu-container">
                                    <a class="HeaderNavlink tooltipped tooltipped-s js-menu-target d-flex px-2 flex-items-center" href="https://github.com/new" aria-label="Create new…" aria-expanded="false" aria-haspopup="true" data-ga-click="Header, create new, icon:add">
                                        <svg aria-hidden="true" class="octicon octicon-plus float-left" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 9H7v5H5V9H0V7h5V2h2v5h5z"></path></svg>
                                        <span class="dropdown-caret mt-1"></span>
                                    </a>

                                    <div class="dropdown-menu-content js-menu-content">
                                        <ul class="dropdown-menu dropdown-menu-sw">

                                            <a class="dropdown-item" href="#">
                                                Xổ xuống    
                                            </a>


                                            <div class="dropdown-divider"></div>
                                            <div class="dropdown-header">
                                                <span title="minhphong306/phpPlay">Có ghi chú</span>
                                            </div>
                                            <a class="dropdown-item" href="#">
                                                New issue
                                            </a>

                                        </ul>
                                    </div>
                                </li>

                                <li class="dropdown js-menu-container">

                                    <details class="dropdown-details d-flex pl-2 flex-items-center">
                                        <summary class="HeaderNavlink name">
                                            <img alt="@minhphong306" class="avatar" src="Github_files/19796136.jpg" height="20" width="20">
                                            <span class="dropdown-caret"></span>
                                        </summary>

                                        <ul class="dropdown-menu dropdown-menu-sw">
                                            <li class="dropdown-header header-nav-current-user css-truncate">
                                                Signed in as <strong class="css-truncate-target">minhphong306</strong>
                                            </li>

                                            <li class="dropdown-divider"></li>

                                            <li><a class="dropdown-item" href="#" data-ga-click="Header, go to profile, text:your profile">
                                                    Your profile
                                                </a></li>
                                            <li><a class="dropdown-item" href="#" data-ga-click="Header, go to starred repos, text:your stars">
                                                    Your stars
                                                </a></li>
                                            <li><a class="dropdown-item" href="#" data-ga-click="Header, your gists, text:your gists">Your Gists</a></li>

                                            <li class="dropdown-divider"></li>

                                            <li><a class="dropdown-item" href="#" data-ga-click="Header, go to help, text:help">
                                                    Help
                                                </a></li>

                                            <li><a class="dropdown-item" href="#" data-ga-click="Header, go to settings, icon:settings">
                                                    Settings
                                                </a></li>

                                            <li><!-- '"` --><!-- </textarea></xmp> --><form accept-charset="UTF-8" action="#" class="logout-form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="KSD9SIROIjojPhGHdaRtf3f6xWdQ3h6raiEV1DYmWaoRChF7H714eF97QfbNrPuYB5w5qV3MPPm0H9rxkVaBJg=="></div>
                                                    <button type="submit" class="dropdown-item dropdown-signout" data-ga-click="Header, sign out, icon:logout">
                                                        Sign out
                                                    </button>
                                                </form></li>
                                        </ul>
                                    </details>
                                </li>
                            </ul>


                            <!-- '"` --><!-- </textarea></xmp> --><form accept-charset="UTF-8" action="https://github.com/logout" class="sr-only right-0" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="CPP7xqe8hupLDoNwWbPA8wNcxzf7SSXhGPXZnYfgUJ8w2Rf1PE/cqDdL0wHhu1YUczo7+fZbB7PGyxa4IJCIEw=="></div>
                                <button type="submit" class="dropdown-item dropdown-signout" data-ga-click="Header, sign out, icon:logout">
                                    Sign out
                                </button>
                            </form>      </div>
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
                                <svg aria-hidden="true" class="octicon octicon-repo" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M4 9H3V8h1v1zm0-3H3v1h1V6zm0-2H3v1h1V4zm0-2H3v1h1V2zm8-1v12c0 .55-.45 1-1 1H6v2l-1.5-1.5L3 16v-2H1c-.55 0-1-.45-1-1V1c0-.55.45-1 1-1h10c.55 0 1 .45 1 1zm-1 10H1v2h2v-1h3v1h5v-2zm0-10H2v9h9V1z"></path></svg>
                                <span class="author" itemprop="author"><a href="https://github.com/minhphong306" class="url fn" rel="author">minhphong306</a></span><!--
                                --><span class="path-divider">/</span><!--
                                --><strong itemprop="name"><a href="https://github.com/minhphong306/phpPlay" data-pjax="#js-repo-pjax-container">phpPlay</a></strong>

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
                                    <div class="columns">

                                        <div class="column one-fourth">
                                            <nav class="menu" id="main_table">
                                                <a ng-repeat="item in contents" href="#" class="js-selected-navigation-item menu-item">
                                                    {{item.title}}
                                                </a>
                                            </nav>
                                        </div>
                                    </div>

                                    <div id="options_bucket">
                                        <div class="Subhead">
                                            <h2 class="Subhead-heading">{{selected_menu.name}} - {{selected_menu.note}}</h2>
                                        </div>

                                        <div class="timeline-comment-wrapper timeline-new-comment js-comment-container ">
                                            <a href="#main_table">
                                                <img alt="@minhphong306" class="timeline-comment-avatar" height="44" src="Github_files/19796136.jpg" width="44">
                                            </a>
                                            <form accept-charset="UTF-8" action="https://github.com/minhphong306/phpPlay/commit_comment/create">

                                                <div class="timeline-comment">
                                                    <div class="js-suggester-container js-previewable-comment-form previewable-comment-form write-selected">
                                                        <div class="comment-form-head tabnav">
                                                            <label class="btn-link tabnav-tab write-tab js-write-tab "> hihi</label>
                                                        </div>


                                                        <div class="write-content is-default upload-enabled" >
                                                            <p>text trong đây nhìn ntn</p>


                                                        </div>
                                                    </div>
                                                    <div class="form-actions">
                                                        <button type="submit" class="btn btn-primary">Comment on this commit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="timeline-comment-wrapper timeline-new-comment js-comment-container ">
                                            <a href="#main_table">
                                                <img alt="@minhphong306" class="timeline-comment-avatar" height="44" src="Github_files/19796136.jpg" width="44">
                                            </a>
                                            <form accept-charset="UTF-8" action="https://github.com/minhphong306/phpPlay/commit_comment/create" class="js-new-comment-form">

                                                <div class="timeline-comment">
                                                    <div class="js-suggester-container js-previewable-comment-form previewable-comment-form write-selected">
                                                        <div class="comment-form-head tabnav">
                                                            <label class="btn-link tabnav-tab write-tab js-write-tab "> hihi</label>
                                                        </div>


                                                        <div class="write-content is-default upload-enabled" >
                                                            <p>text trong đây nhìn ntn</p>
                                                            <textarea name="comment[body]" class="form-control input-contrast comment-form-textarea " style="margin-top: 0px; margin-bottom: 0px; height: 100px;"></textarea>
                                                            <p class="drag-and-drop position-relative">
                                                                <span class="default">
                                                                    Đoạn này nhìn cho vui thôi :v 
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions">
                                                        <button type="submit" class="btn btn-primary">Comment on this commit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>


                                    <dl class="form-group clearfix warn mt-0">
                                        <dt><label for="rename_field">Repository name</label></dt>
                                        <dd>
                                            <!-- '"` --><!-- </textarea></xmp> --><form accept-charset="UTF-8" action="https://github.com/minhphong306/phpPlay/settings/rename" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="Qe/bPrD4Cu/774STAQFGB43PrRLoSi0puyMqkejgISEkSiU4Zwvd6BNz9nsO2g1dIvM6ea5Y7I6lfp0RDlnA8g=="></div>
                                                <input autocomplete="off" class="form-control short js-repository-name" data-original-name="phpPlay" id="rename_field" name="new_name" type="text" value="phpPlay">
                                                <button type="submit" class="btn js-rename-repository-button" disabled="">Rename</button>
                                                <div class="warning js-form-note" style="display:none"></div>
                                            </form>  </dd>
                                    </dl>


                                    <div class="Subhead Subhead--spacious border-bottom-0 mb-0">
                                        <h2 class="Subhead-heading">
                                            Features
                                        </h2>
                                    </div>
                                    <div class="Box">
                                        <!-- '"` --><!-- </textarea></xmp> --><form accept-charset="UTF-8" action="https://github.com/minhphong306/phpPlay/settings/update" class="js-repo-features-form" data-autosubmit="true" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="_method" type="hidden" value="put"><input name="authenticity_token" type="hidden" value="DoOV9NrmtVChDQF0jrXUzvOQBFwa+AMMB6qVpY82yy7eGBbxj7fZU2aJ0XkCQtP4JHKw67HVk6fA51G62rYTlQ=="></div>
                                            <li class="Box-row py-0">
                                                <div class="form-checkbox js-repo-option">
                                                    <input type="hidden" name="has_wiki" value="0">
                                                    <input type="checkbox" name="has_wiki" value="1" id="wiki-feature" checked="">
                                                    <label for="wiki-feature">Wikis</label>
                                                    <span class="status-indicator ml-1 js-status-indicator">
                                                        <svg aria-hidden="true" class="octicon octicon-check" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"></path></svg>
                                                        <svg aria-hidden="true" class="octicon octicon-x" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"></path></svg>
                                                    </span>
                                                    <p class="note">
                                                        GitHub Wikis is a simple way to let others contribute content.
                                                        Any GitHub user can create and edit pages to use for documentation,
                                                        examples, support, or anything you wish.
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="Box-row py-0">
                                                <div class="form-checkbox js-repo-option">
                                                    <input type="hidden" name="wiki_access_to_pushers" value="0">
                                                    <input type="checkbox" name="wiki_access_to_pushers" value="1" id="wiki-pusher-access" checked="">
                                                    <label for="wiki-pusher-access">Restrict editing to collaborators only</label>
                                                    <span class="status-indicator ml-1 js-status-indicator">
                                                        <svg aria-hidden="true" class="octicon octicon-check" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"></path></svg>
                                                        <svg aria-hidden="true" class="octicon octicon-x" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"></path></svg>
                                                    </span>
                                                    <p class="note">Public wikis will still be readable by everyone.</p>
                                                </div>
                                            </li>
                                            <li class="Box-row py-0">
                                                <div class="form-checkbox js-repo-option">
                                                    <input type="hidden" name="has_issues" value="0">
                                                    <input type="checkbox" name="has_issues" value="1" id="issue-feature" checked="">
                                                    <label for="issue-feature">Issues</label>
                                                    <span class="status-indicator ml-1 js-status-indicator">
                                                        <svg aria-hidden="true" class="octicon octicon-check" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"></path></svg>
                                                        <svg aria-hidden="true" class="octicon octicon-x" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"></path></svg>
                                                    </span>
                                                    <p class="note">
                                                        GitHub Issues adds lightweight issue tracking tightly integrated with
                                                        your repository. Add issues to milestones, label issues, and
                                                        close &amp; reference issues from commit messages.
                                                    </p>
                                                </div>
                                            </li>

                                            <li class="Box-row py-0">
                                                <div class="form-checkbox js-repo-option">
                                                    <input type="hidden" name="projects_enabled" value="0">
                                                    <input type="checkbox" name="projects_enabled" id="projects-feature" value="1" checked="">
                                                    <label for="projects-feature">Projects</label>
                                                    <span class="status-indicator v-align-top ml-1 js-status-indicator">
                                                        <svg aria-hidden="true" class="octicon octicon-check" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"></path></svg>
                                                        <svg aria-hidden="true" class="octicon octicon-x" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"></path></svg>
                                                    </span>
                                                    <p class="note">
                                                        Project boards on GitHub help you organize and prioritize your work.
                                                        You can create project boards for specific feature work,
                                                        comprehensive roadmaps, or even release checklists.
                                                    </p>
                                                </div>
                                            </li>

                                            <noscript>
                                            <button class="btn btn-primary" type="submit">Save changes</button>
                                            </noscript></form>
                                    </div>

                                    <div class="Subhead Subhead--spacious">
                                        <h2 class="Subhead-heading">
                                            Merge button
                                        </h2>
                                    </div>
                                    <p>
                                        When merging pull requests, you can allow any combination of
                                        merge commits, squashing, or rebasing. At least one option must be enabled.
                                    </p>
                                    <div class="Box">
                                        <!-- '"` --><!-- </textarea></xmp> --><form accept-charset="UTF-8" action="https://github.com/minhphong306/phpPlay/settings/update_merge_settings" class="repository-merge-features js-merge-features-form" data-autosubmit="true" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="_method" type="hidden" value="put"><input name="authenticity_token" type="hidden" value="T+QJXJBIm0nIqvsNo4k8zX6eHwigm0ZqDti40Xo69dWX3pFHhnhByBoh5B50vOkJpgiC8KHD/Qq8B3QReMeMoA=="></div>

                                            <div class="flash flash-full flash-warn d-none js-select-one-warning">
                                                You must select at least one option
                                            </div>

                                            <ul>
                                                <li class="Box-row py-0">
                                                    <div class="form-group js-repo-option">
                                                        <div class="form-checkbox">
                                                            <label for="merge_types_merge_commit">Allow merge commits</label>
                                                            <span class="status-indicator js-status-indicator">
                                                                <svg aria-hidden="true" class="octicon octicon-check" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"></path></svg>
                                                            </span>
                                                            <input type="checkbox" name="merge_types[]" value="merge_commit" id="merge_types_merge_commit" checked="">
                                                            <p class="note">Add all commits from the head branch to the base branch with a merge commit.</p>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="Box-row py-0">
                                                    <div class="form-group js-repo-option">
                                                        <div class="form-checkbox">
                                                            <label for="merge_types_squash">Allow squash merging</label>
                                                            <span class="status-indicator js-status-indicator">
                                                                <svg aria-hidden="true" class="octicon octicon-check" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"></path></svg>
                                                            </span>
                                                            <input type="checkbox" name="merge_types[]" value="squash_merge" id="merge_types_squash" checked="">
                                                            <p class="note">Combine all commits from the head branch into a single commit in the base branch.</p>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="Box-row py-0">
                                                    <div class="form-group js-repo-option">
                                                        <div class="form-checkbox">
                                                            <label for="merge_types_rebase">Allow rebase merging</label>
                                                            <span class="status-indicator js-status-indicator">
                                                                <svg aria-hidden="true" class="octicon octicon-check" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"></path></svg>
                                                            </span>
                                                            <input type="checkbox" name="merge_types[]" value="rebase_merge" id="merge_types_rebase" checked="">
                                                            <p class="note">Add all commits from the head branch onto the base branch individually.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>

                                            <noscript>
                                            <button class="btn btn-primary" type="submit">Save changes</button>
                                            </noscript></form>
                                    </div>

                                    <div class="Subhead Subhead--spacious">
                                        <h2 class="Subhead-heading">
                                            Temporary interaction limits
                                        </h2>
                                    </div>
                                    <p>
                                        Temporarily restrict which users can interact with your repository (comment, open issues, or create pull requests) for a 24-hour period. This may be used to force a "cool-down" period during heated discussions.
                                    </p>
                                    <div class="Box">
                                        <!-- '"` --><!-- </textarea></xmp> --><form accept-charset="UTF-8" action="https://github.com/minhphong306/phpPlay/community" class="js-repo-features-form" data-autosubmit="true" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="_method" type="hidden" value="put"><input name="authenticity_token" type="hidden" value="f7I4AuMg8lQd2CTEn9IImk7gcLWDFR0e8PAd/aXaA7aV9JH43KOvXsQ3BRaXzTjBRIqUWvr9Qjz7+B8/d5pnIA=="></div>
                                            <ul>
                                                <li class="Box-row py-0">
                                                    <div class="form-group js-repo-option">
                                                        <div class="form-checkbox">
                                                            <input type="hidden" name="interaction_time_limit" value="0">
                                                            <input type="checkbox" name="interaction_time_limit" value="1" id="time-limit" class="repo-config-option">
                                                            <label for="time-limit">Limit to existing users</label>
                                                            <span class="status-indicator ml-1 js-status-indicator">
                                                                <svg aria-hidden="true" class="octicon octicon-check" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"></path></svg>
                                                                <svg aria-hidden="true" class="octicon octicon-x" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"></path></svg>
                                                            </span>
                                                            <p class="note text-green py-2 time-remaining"><svg aria-hidden="true" class="octicon octicon-clock" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M8 8h3v2H7c-.55 0-1-.45-1-1V4h2v4zM7 2.3c3.14 0 5.7 2.56 5.7 5.7s-2.56 5.7-5.7 5.7A5.71 5.71 0 0 1 1.3 8c0-3.14 2.56-5.7 5.7-5.7zM7 1C3.14 1 0 4.14 0 8s3.14 7 7 7 7-3.14 7-7-3.14-7-7-7z"></path></svg>
                                                                Enabled with 1 day remaining
                                                            </p>
                                                            <p class="note">Users that have recently created their account will be unable to interact with the repository.</p>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="Box-row py-0">
                                                    <div class="form-group js-repo-option">
                                                        <div class="form-checkbox">
                                                            <input type="hidden" name="contributor_interaction_only" value="0">
                                                            <input type="checkbox" name="contributor_interaction_only" value="1" id="contributor-only" class="repo-config-option">
                                                            <label for="contributor-only">Limit to prior contributors</label>
                                                            <span class="status-indicator ml-1 js-status-indicator">
                                                                <svg aria-hidden="true" class="octicon octicon-check" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"></path></svg>
                                                                <svg aria-hidden="true" class="octicon octicon-x" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"></path></svg>
                                                            </span>
                                                            <p class="note text-green py-2 time-remaining"><svg aria-hidden="true" class="octicon octicon-clock" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M8 8h3v2H7c-.55 0-1-.45-1-1V4h2v4zM7 2.3c3.14 0 5.7 2.56 5.7 5.7s-2.56 5.7-5.7 5.7A5.71 5.71 0 0 1 1.3 8c0-3.14 2.56-5.7 5.7-5.7zM7 1C3.14 1 0 4.14 0 8s3.14 7 7 7 7-3.14 7-7-3.14-7-7-7z"></path></svg>
                                                                Enabled with 1 day remaining
                                                            </p>
                                                            <p class="note">Users that have not previously <a href="https://github.com/minhphong306/phpPlay/graphs/contributors">committed</a> to the repository's master branch will be unable to interact with the repository.</p>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="Box-row py-0">
                                                    <div class="form-group js-repo-option">
                                                        <div class="form-checkbox">
                                                            <input type="hidden" name="collaborator_interaction_only" value="0">
                                                            <input type="checkbox" name="collaborator_interaction_only" value="1" id="collaborator-only" class="repo-config-option">
                                                            <label for="collaborator-only">Limit to repository collaborators</label>
                                                            <span class="status-indicator ml-1 js-status-indicator">
                                                                <svg aria-hidden="true" class="octicon octicon-check" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"></path></svg>
                                                                <svg aria-hidden="true" class="octicon octicon-x" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"></path></svg>
                                                            </span>
                                                            <p class="note text-green py-2 time-remaining"><svg aria-hidden="true" class="octicon octicon-clock" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M8 8h3v2H7c-.55 0-1-.45-1-1V4h2v4zM7 2.3c3.14 0 5.7 2.56 5.7 5.7s-2.56 5.7-5.7 5.7A5.71 5.71 0 0 1 1.3 8c0-3.14 2.56-5.7 5.7-5.7zM7 1C3.14 1 0 4.14 0 8s3.14 7 7 7 7-3.14 7-7-3.14-7-7-7z"></path></svg>
                                                                Enabled with 1 day remaining
                                                            </p>
                                                            <p class="note">Users that have not been granted <a href="https://github.com/minhphong306/phpPlay/settings/collaboration">push access</a> will be unable to interact with the repository.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>

                                            <noscript>
                                            <button class="btn btn-primary" type="submit">Save changes</button>
                                            </noscript></form>
                                    </div>

                                    <div class="Subhead Subhead--spacious">
                                        <h2 class="Subhead-heading">
                                            GitHub Pages
                                        </h2>
                                    </div>
                                    <p><a href="https://pages.github.com/">GitHub Pages</a> is designed to host your personal, organization, or project pages from a GitHub repository.</p>
                                    <div class="Box">



                                        <li class="Box-row">
                                            <!-- '"` --><!-- </textarea></xmp> --><form accept-charset="UTF-8" action="https://github.com/minhphong306/phpPlay/settings/pages/source" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="_method" type="hidden" value="put"><input name="authenticity_token" type="hidden" value="ONKT4hW2xgvPEM7KQD9QQIrYTObiRq7qJLcrwfShaxgBh9tiSg0hxVSwQv2mreVb2/X7uk1gEa9R+UMbWHcgPQ=="></div>
                                                <strong>Source</strong>
                                                <p>
                                                    GitHub Pages is currently disabled.
                                                    Select a source below to enable GitHub Pages for this repository.
                                                    <a href="https://help.github.com/articles/configuring-a-publishing-source-for-github-pages/">Learn more</a>.
                                                </p>
                                                <span class="js-pages-source select-menu js-menu-container js-select-menu">
                                                    <button class="btn mr-1 select-menu-button js-menu-target" type="button" aria-haspopup="true" aria-expanded="false" aria-label="GitHub Pages source">
                                                        <span class="js-select-button js-pages-source-btn-text" data-original-text="None">None</span>
                                                    </button>
                                                    <div class="select-menu-modal-holder">
                                                        <div class="select-menu-modal js-menu-content">
                                                            <div class="select-menu-list js-navigation-container" role="menu">
                                                                <div class="select-menu-header js-navigation-enable" tabindex="-1">
                                                                    <svg aria-label="Close" class="octicon octicon-x js-menu-close" height="16" role="img" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"></path></svg>
                                                                    <span class="select-menu-title">Select source</span>
                                                                </div>
                                                                <div class="select-menu-item js-navigation-item" role="menuitem">
                                                                    <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"></path></svg>
                                                                    <div class="select-menu-item-text">
                                                                        <input id="source_master" name="source" type="radio" value="master">
                                                                        <span class="select-menu-item-heading js-select-button-text">master branch</span>
                                                                        <span class="description">Use the <code>master</code> branch for GitHub Pages.</span>
                                                                    </div>
                                                                </div>
                                                                <div class="select-menu-item disabled" role="menuitem">
                                                                    <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" disabled="disabled" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"></path></svg>
                                                                    <div class="select-menu-item-text">
                                                                        <input disabled="disabled" id="source_master__docs" name="source" type="radio" value="master /docs">
                                                                        <span class="select-menu-item-heading js-select-button-text">master branch /docs folder</span>
                                                                        <span class="description">Use only the <code>/docs</code> folder for GitHub Pages.</span>
                                                                    </div>
                                                                </div>
                                                                <div class="select-menu-item js-navigation-item selected" role="menuitem">
                                                                    <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"></path></svg>
                                                                    <div class="select-menu-item-text">
                                                                        <input checked="checked" id="source_none" name="source" type="radio" value="none">
                                                                        <span class="select-menu-item-heading js-select-button-text">None</span>
                                                                        <span class="description">Disable GitHub Pages.</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </span>
                                                <button type="submit" class="btn js-pages-source-save-btn" disabled="">Save</button>

                                                <strong class="d-block mt-3">Theme Chooser</strong>
                                                <p>
                                                    Select a theme to build your site with a Jekyll theme<span class="js-pages-theme-source-note">
                                                        using the <code class="js-pages-theme-source-note-value" data-original-text="master branch"> master branch</code></span>.
                                                    <a href="https://help.github.com/articles/creating-a-github-pages-site-with-the-jekyll-theme-chooser/">Learn more</a>.
                                                </p>
                                                <!-- '"` --><!-- </textarea></xmp> --></form><form accept-charset="UTF-8" action="https://github.com/minhphong306/phpPlay/settings/pages/themes" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"></div>
                                                <input type="hidden" class="js-pages-theme-source-value" name="source" data-original-value="master" value="master">
                                                <button type="submit" class="btn mt-2 tooltipped-s js-enable-btn">
                                                    Choose a theme
                                                </button>
                                            </form></li>





                                    </div>

                                    <div class="Subhead Subhead--spacious border-bottom-0 mb-0">
                                        <h2 class="Subhead-heading">
                                            Danger Zone
                                        </h2>
                                    </div>
                                    <div class="Box Box--danger">
                                        <ul>
                                            <li class="Box-row">

                                                <strong>Make this repository private</strong>
                                                <p>
                                                    Please <a href="https://github.com/settings/billing">upgrade your plan</a> to make this repository private.
                                                </p>

                                                <div id="visibility_confirm" style="display:none">
                                                    <h2 class="facebox-header" data-facebox-id="facebox-header">
                                                        Make this repository private
                                                    </h2>
                                                    <div class="facebox-alert" data-facebox-id="facebox-description">
                                                        Listen up! This is a potentially destructive action.
                                                    </div>

                                                    <ul>
                                                        <li>You will <strong>permanently</strong> lose all stars and watchers of this repository</li>
                                                    </ul>

                                                    <hr class="facebox-separator">

                                                    <p>Please type in the name of the repository to confirm.</p>

                                                    <!-- '"` --><!-- </textarea></xmp> --><form accept-charset="UTF-8" action="https://github.com/minhphong306/phpPlay/settings/toggle_permission" class="js-normalize-submit" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="nulPRxQpj8lHJxLZRPiSQ3cTXf33AUvUID30FAuQ69iSRhEd5Qt6LoiNnpgUbpGRFDiY8QAv94i24BNN7JNU/A=="></div>
                                                        <p>
                                                            <input type="text" class="form-control input-block" autofocus="" required="" pattern="[pP][hH][pP][pP][lL][aA][yY]|[mM][iI][nN][hH][pP][hH][oO][nN][gG]306/[pP][hH][pP][pP][lL][aA][yY]" aria-label="Type in the name of the repository to confirm that you want to change the visibility of this repository." name="verify">
                                                        </p>
                                                        <div class="full-button">
                                                            <button type="submit" class="btn btn-block btn-danger" data-disable-invalid="" data-disable-with="" disabled="">I understand, make this repository private.</button>
                                                        </div>
                                                    </form>  </div>


                                            </li>
                                            <li class="Box-row">
                                                <button type="button" data-facebox="#transfer_confirm" data-facebox-class="dangerzone" class="btn btn-danger boxed-action">Transfer</button>
                                                <h4>Transfer ownership</h4>
                                                <p>
                                                    Transfer this repository to another user or to an organization where you have the ability to create repositories.
                                                </p>

                                                <div id="transfer_confirm" style="display:none">
                                                    <h2 class="facebox-header" data-facebox-id="facebox-header">Transfer repository</h2>
                                                    <p class="facebox-alert" data-facebox-id="facebox-description">To understand admin access, teams, issue assignments, and redirects after a repository is transferred, see "<strong><a href="https://help.github.com/articles/transferring-a-repository/">Transferring a repository</a></strong>" in GitHub Help.</p>

                                                    <p class="repo-transfer-tip">Transferring may be delayed until the new owner approves the transfer.</p>

                                                    <!-- '"` --><!-- </textarea></xmp> --><form accept-charset="UTF-8" action="https://github.com/minhphong306/phpPlay/settings/transfer" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="MOyEnv0iMuTrjA4DK4fXDBsdJOraNrwD3jgteutTYCIweB0gVs1JYWzbxpraA0ATsPF2F8D0CKVH2c8EZvoCMA=="></div>
                                                        <dl class="form-group">
                                                            <dt><label for="confirm_repository_name">Type the name of the repository to confirm</label></dt>
                                                            <dd>
                                                                <input class="form-control" type="text" id="confirm_repository_name" autofocus="" required="" pattern="[pP][hH][pP][pP][lL][aA][yY]|[mM][iI][nN][hH][pP][hH][oO][nN][gG]306/[pP][hH][pP][pP][lL][aA][yY]" aria-label="Type in the name of the repository to confirm that you want to transfer this repository.">
                                                            </dd>
                                                        </dl>
                                                        <dl class="form-group">
                                                            <dt><label for="confirm_new_owner">New owner’s GitHub username or organization name</label></dt>
                                                            <dd><input id="confirm_new_owner" class="form-control" type="text" name="new_owner" required="" aria-label="Type in the username of the new owner."></dd>
                                                        </dl>

                                                        <button type="submit" class="btn btn-block btn-danger" data-disable-invalid="" disabled="">I understand, transfer this repository.</button>
                                                    </form>  </div>

                                            </li>
                                            <li class="Box-row">
                                                <button type="button" data-facebox="#delete_repo_confirm" data-facebox-class="dangerzone" class="btn btn-danger boxed-action">Delete this repository</button>

                                                <strong>Delete this repository</strong>


                                                <p>
                                                    Once you delete a repository, there is no going back. Please be certain.
                                                </p>


                                                <div id="delete_repo_confirm" style="display:none">

                                                    <h2 class="facebox-header" data-facebox-id="facebox-header">Are you ABSOLUTELY sure?</h2>

                                                    <div class="facebox-alert" data-facebox-id="facebox-description">
                                                        Unexpected bad things will happen if you don’t read this!
                                                    </div>

                                                    <p>This action <strong>CANNOT</strong> be undone. This will permanently delete the <strong>minhphong306/phpPlay</strong> repository, wiki, issues, and comments, and remove all collaborator associations.</p>



                                                    <p>Please type in the name of the repository to confirm.</p>

                                                    <!-- '"` --><!-- </textarea></xmp> --><form accept-charset="UTF-8" action="https://github.com/minhphong306/phpPlay/settings/delete" class="js-normalize-submit" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="_method" type="hidden" value="delete"><input name="authenticity_token" type="hidden" value="2/dxoK+NSVRQG/Tv7iZiGaV/Inoe4qoyz4/rHITxyofJ2YkwWsh6yaWwB4n7tY9yoD9/1i7jxW1iDWItPCBVGA=="></div>
                                                        <p>
                                                            <input type="text" class="form-control input-block" autofocus="" required="" pattern="[pP][hH][pP][pP][lL][aA][yY]|[mM][iI][nN][hH][pP][hH][oO][nN][gG]306/[pP][hH][pP][pP][lL][aA][yY]" aria-label="Type in the name of the repository to confirm that you want to delete this repository." name="verify">
                                                        </p>
                                                        <button type="submit" class="btn btn-block btn-danger" data-disable-invalid="" disabled="">I understand the consequences, delete this repository</button>
                                                    </form>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="modal-backdrop js-touch-events"></div>
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