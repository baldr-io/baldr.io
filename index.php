<!DOCTYPE html>
<html ng-app="index">
    <head>
        <title>Baldr.io - Home</title>

        <!-- other scripts !-->
        <script type="text/javascript" src="./Js/angular.min.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.2.min.js"></script>
        <link rel="stylesheet" href="./css/Bootstrap/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./css/PowerTip/jquery.powertip.css">
        <script src="./Js/PowerTip/jquery.powertip.js"></script>
        
        <!-- custom stuff!-->
        <link rel="stylesheet" href="./css/Index/index.css">
        <link rel="stylesheet" href="./css/navbar.css">
        <script type="text/javascript" src="./Js/Index/index.js"></script>
    </head>

    <body ng-controller="IndexPageController as pageInfo" >

        <!--Navigation bar !-->
        <section id="navBar" class="navSection">
            <div id="navBody" class="navBody">
                <!--Div to hold the logo. Add pictures or other things!-->
                <div id="logo" class="logo">
                    {{pageInfo.pageTitle}}
                </div>

                <!--Navigation Links!
                    - We initialize and angular controller to help switching between active tabs.
                    - panel.isSelected is a function condition that if true will apply the linkActive class to the div.
                    - panel.selectTab() sets the value of tab in the controller.
                !-->
                <div id="pageLinks" class="navLinks" ng-controller="PanelController as panel">
                        <div class="page-link" ng-class="{ linkActive: panel.isSelected(1) } ">
                            <a href="#title" id="HomeLink" ng-click="panel.selectTab(1)">Home</a>
                        </div>
                        <div class="page-link" ng-class="{ linkActive: panel.isSelected(2) }">
                            <a href="#social" id="HomeLink" ng-click="panel.selectTab(2)">Social</a>
                        </div>
                        <div class="page-link" ng-class="{ linkActive: panel.isSelected(3) }">
                            <a href="#plex" id="HomeLink" ng-click="panel.selectTab(3)">Plex</a>
                        </div>
                        <div class="page-link">
                            <a href="https://status.baldr.io" id="StatusLink">Service Status</a>
                        </div>
                        <div class="page-link">
                            <a href="https://request.baldr.io" id="RequestLink">Request Media</a>
                        </div>
                    </ul>
                </div>
            </div>
            <hr style="border: 2px solid #FF5722;margin:0"/>
        </section>

        <!--Page Title section. Contains title, and description of Baldr.io !-->
        <section id="title" class="titleSection" style="margin-top:50px;">
            <div class="sectionBody">
                <div class="container">
                    <div id="title" class="pageTitle">
                        {{pageInfo.pageTitle}}
                    </div>
                    <div id="pageDescription" class="description">
                        {{pageInfo.pageDescription}}
                    </div>
                </div>
            </div>
        </section>

        <hr id="social" style="border:3px solid #B6B6B6; margin:0;"/>

        <!--Social Baldr.io !-->
        <section class="socialSection" ng-controller="SocialController as social">
             <div class="sectionBody">
                <div class="container">
                    <div id="socialTitle" class="socialTitle">
                        {{social.socialJSON.sectionTitle}} <!-- angular for later use if we want to make it dynamic!-->
                    </div>
                    <div id="socialDescription" class="socialDescription description">
                        {{social.socialJSON.sectionDescr}}
                    </div>
                    <a href="https://social.baldr.io" id="socialLink" class="buttonLink">
                        {{social.socialJSON.linkText}}
                    </a>
                </div>
            </div>
        </section>

        <hr style="border:3px solid #B6B6B6; margin:0;"/>

        <!-- Plex Section !-->
        <section id="plex" class="plexSection" ng-controller="PlexController as plex">
             <div class="sectionBody">
                <div class="container">
                    <div id="plexTitle" class="plexTitle">
                        {{plex.plexJSON.sectionTitle}}
                    </div>
                    <div id="plexDescription" class="plexDescription description">
                        {{plex.plexJSON.sectionDescr}}
                    </div>
                    <a href="https://plex.baldr.io" id="plexLink" class="buttonLink">
                        {{plex.plexJSON.linkText}}
                    </a>
                </div>
            </div>
        </section>
        <script src="./Js/Bootstrap/bootstrap.min.js"></script>
    </body>
</html>
