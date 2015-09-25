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

    <body class="body" ng-controller="IndexPageController as pageInfo">
        <!--Navigation bar !-->
        <section id="navBar" class="navSection">
            <div id="navBody" class="navBody">
                <div id="logo" class="logo">
                    {{pageInfo.pageTitle}}
                </div>
                <div id="pageLinks" class="navLinks">
                    <div id="link1" class="active-link">
                        <a href="#title">Home</a>
                    </div>
                    <div id="link2" class="page-link">
                        <a href="#">Page 2</a>
                    </div>
                    <div id="link2" class="page-link">
                        <a href="#">Page 3</a>
                    </div>
                    <div id="link2" class="page-link">
                        <a href="#">Page 4</a>
                    </div>
                    <div id="link2" class="page-link">
                        <a href="#">Page 5</a>
                    </div>
                </div>
            </div>
            
            
        </section>
        <section id="title" class="titleSection">
            <div class="titleBody">
                <div class="container">
                    <div id="title" class="pageTitle">
                        {{pageInfo.pageTitle}}
                    </div>
                    <div id="pageDescription" class="pageDescription">
                        {{pageInfo.pageDescription}}
                    </div>

                </div>
            </div>
        </section>
        <script src="./Js/Bootstrap/bootstrap.min.js"></script>
    </body>
</html>
