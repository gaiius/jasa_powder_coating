<?php 
				if(isset($_GET['page'])){
					$page=htmlentities($_GET['page']);
					$halaman="$page.php";
					if(!file_exists($halaman) || empty($page)){
						echo "Welcome";
				}
				else{
					include_once "$halaman";
				}
				}else{
					include "home.php";
				}
	?><head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="css/generic-notForTabs.css" rel="stylesheet" type="text/css" />
    <link href="css/responsive-tabs.css" rel="stylesheet" type="text/css" />
    <script src="css/responsive-tabs.js" type="text/javascript"></script>
    
</head>

<div id="subheader">
	<div class="row">
		<div class="twelve columns">
			<p class="text-center">
				 SNI & ISO
			</p>
		</div>
	</div>
    
    </div>
	<div class="row">
		<div class="twelve columns">
			<p class="text-center">


	
<div class="section secondary-section " id="portfolio">
				<div class="triangle"></div>
                 <div class="container">

        <h1></h1>
        <ul class="rtabs">
            <li><a href="content/corporate.php" data-ajax="{target: 'view2', id: 'fragment2'}">Corporate Identity</a></li>
			<li><a href="content/iso.php" data-ajax="{target: 'view3', id: 'fragment2'}">Certification</a></li>
            
        </ul>
        <div class="panel-container">
            <div id="view1"></div>
            <div id="view2"></div>
            <div id="view3"></div>
        </div>
        <br /><br /><br />
        
       

    <script type="text/javascript">

        function mycallback(response, context, tab) {
            var x = response.documentElement.getElementsByTagName("cd")[context];
            var title = x.getElementsByTagName("title")[0].childNodes[0].nodeValue;
            var artist = x.getElementsByTagName("artist")[0].childNodes[0].nodeValue;
            var price = x.getElementsByTagName("price")[0].childNodes[0].nodeValue;
            var image = "<img src='content/tabs-" + context +
            ".jpg' style='float:right;' />";

            return "<div>" + image + "<h3>" + title + "</h3>"
            + artist + "<br />Price: $" + price;
        }

    </script>

</html>
</div></div>

</p>
		</div>
	</div>
    
    <script src="javascripts/foundation.min.js"></script>