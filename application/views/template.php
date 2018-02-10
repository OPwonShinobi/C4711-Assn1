<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>{pagetitle}</title>
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="/assets/css/default.css"/>
        <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css"/>
        <script src="/assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
        </head>
	<body>
            <nav class="navbar navbar-default navbar-fixed-top">
              <div class="container">
                <div class="navbar-header">
                  
                  <a class="navbar-brand" href="/homepage">Path of Exile Customization</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                    <li><a href="/homepage">Homepage</a></li>
                    <li><a href="">Equipments</a>
                        <ul>
                            <li><a href="/presetscontroller">Presets</a></li>
                            <li><a href="/equipmentscontroller">Equipments</a></li>
                        </ul>
                    </li>
                    <li><a href="/history">History</a></li>
                    <li><a href="/assembly">Assembly</a></li>
                    <li><a href="/about">About</a></li>
                  </ul>
                  
                </div>
              </div>
            </nav>
            <div id="container">
                            {content}
                            <p class="footer">Path of Exile by Team Recoil</p>
            </div>
	</body>
</html>