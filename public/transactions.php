<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="./node_modules/angular/angular.min.js"></script>
    <script src="./node_modules/angular-animate/angular-animate.js"></script>
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <script src="./node_modules/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>  
    <link rel="stylesheet" href="./node_modules/bootstrap-3.3.7-dist/css/bootstrap.min.css">    
    <link rel="stylesheet" type="text/css" href="./css/temp/main.css">
    <script src="./js/test.js"></script>
    <title>Transactions</title>
</head>
<body>
    <!--Navigation Bar  -->
    <div class="container-body" id="bimbi">    
    <header>
        <div class="container">
            <!-- <h1>eatadakimasu<span>cafe</span></h1> -->
            <div class="logo"></div>
            <nav>
                <ul class="basta-waitlang">
                    <strong>
                        <a href="" id="user" class="user dropdown-toggle" data-toggle="dropdown" ng-show="signedIn"><span class="greetings">Hello, </span>{{ user }} <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        <li><a href="" class="o-user" ng-show="showAdmin();" ng-click="adminModes();" id="adminMode">Admin Mode</a></li><br>                            
                        <li><a href="" class="o-user" ng-show="adminMode" ng-click="adminModes();" id="adminModeoff">Admin Mode Off</a></li><br>                                                    
                        <li><a href="" class="o-user" ng-show="admin">Manage Transactions</a></li><br>                                                    
                        <li><a href="" class="o-user" ng-hide="guest">Edit Info</a></li><br>
                            <hr ng-hide="guest"> 
                            <li><a href="./php/logout.php" ng-click="logout()" class="o-user" style="color: #f06953;">Logout</a></li>
                        </ul>
                        </li>
                    </strong>
                </ul>
            </nav>
        </div>
    </header>
</body>
</html>