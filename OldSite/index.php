<?php
    
    // SWFAddress code fully compatible with Apache HTTPD

    session_start();
	error_reporting(0);
	if(isset($_GET['flash']))
	{
		if(isset($_SESSION['noflash']))
		{
			unset($_SESSION['noflash']);
		}
		if($_GET['flash'] == 'true')
		{
			$_SESSION['noflash'] = 'false';
			if(isset($_SESSION['flashrunning']))
			{
				$_SESSION['flashrunning'] = false;
			}
		}
		else
		{
			$_SESSION['noflash'] = 'true';			
		}
	}
	$base = substr($_SERVER['PHP_SELF'], 0, strrpos($_SERVER['PHP_SELF'], '/'));

	if(!(isset($_SESSION['noflash'])) || ($_SESSION['noflash'] == 'false'))
	{
	    if ('application/x-swfaddress' == (isset($_SERVER['CONTENT_TYPE']) ? $_SERVER['CONTENT_TYPE'] : 
	        (isset($_SERVER['HTTP_CONTENT_TYPE']) ? $_SERVER['HTTP_CONTENT_TYPE'] : ''))) {
	        $_SESSION['swfaddress'] = $_SERVER['QUERY_STRING'];
	        echo('location.replace("' . $base . '/#' . $_SERVER['QUERY_STRING'] . '")');
	        exit();
	    }
	}

    $swfaddress = '/';
    
    if (isset($_SESSION['swfaddress'])) {
        $swfaddress = $_SESSION['swfaddress'];
        unset($_SESSION['swfaddress']);
    } else {
		$page = substr($_SERVER['PHP_SELF'], strrpos($_SERVER['PHP_SELF'], '/') + 1);
        $swfaddress = str_replace($base, '', (strpos($page, '.php') && $page != 'index.php') ? $_SERVER['REQUEST_URI'] : str_replace($page, '', $_SERVER['REQUEST_URI']));
    }
    $swfaddress = preg_replace('/^([^\?.]*[^\/])(\?|$)/', '$1/$2', $swfaddress, 1);

    $query_string = (strpos($swfaddress, '?')) ? substr($swfaddress, strpos($swfaddress, '?') + 1, strlen($swfaddress)) : '';
    $swfaddress_path = ($query_string != '') ? substr($swfaddress, 0, strpos($swfaddress, '?')) : $swfaddress;
    $swfaddress_parameters = array();
    
    if (strpos($swfaddress, '?')) {
        $params = explode('&amp;', str_replace($swfaddress_path . '?', '', $swfaddress));
        for ($i = 0; $i < count($params); $i++) {
            $pair = explode('=', $params[$i]);
            $swfaddress_parameters[$pair[0]] = $pair[1];
        }
    }
	
    if (strstr(strtoupper($_SERVER['HTTP_USER_AGENT']), 'MSIE')) {
    
        $if_modified_since = isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) ? 
            preg_replace('/;.*$/', '', $_SERVER['HTTP_IF_MODIFIED_SINCE']) : '';
        
        $file_last_modified = filemtime($_SERVER['SCRIPT_FILENAME']);
        $gmdate_modified = gmdate('D, d M Y H:i:s', $file_last_modified) . ' GMT';
    
        if ($if_modified_since == $gmdate_modified) {
            if (php_sapi_name() == 'cgi') {
                header('Status: 304 Not Modified');
            } else {
                header('HTTP/1.1 304 Not Modified');
            }
            exit();
        }
    
		//if(!(isset($_SESSION['noflash'])) || ($_SESSION['noflash'] == 'false') || (isset($_SESSION['flashrunning']) && $_SESSION['flashrunning'] == true))
		//{
	        header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 86400) . ' GMT');
	        header('Last-Modified: ' . $gmdate_modified);
	        header('Cache-control: max-age=' . 86400);
		//}
		//else
		/*{
			if(!isset($_SESSION['flashrunning']))
			{
				header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 86400) . ' GMT');
		        header('Last-Modified: ' . $gmdate_modified);
				header('Cache-Control: no-cache');
				header('Pragma: no-cache');
				$_SESSION['flashrunning'] = true;
			}			
		}*/
	}
 	
    // Custom code

    function strtotitle($str) {
        return strtoupper(substr($str, 0, 1)) . substr($str, 1);
    }

    function swfaddress_title($title) {
        global $swfaddress_path;
        if ($swfaddress_path != '/') {
            $length = strlen($swfaddress_path);
            $title .= (($length > 0) ? ' / ' . strtotitle(str_replace('/', ' / ', substr($swfaddress_path, 1, $length - 2))) : '');
        }
        echo($title);        
    }
    
    function swfaddress_resource($resource) {
        global $base;
        echo($base . $resource);
    }
    
    function swfaddress_link($link) {
        global $base,$currentpage;
		echo($base . $link);
    }
	    
    function swfaddress_content() {
        global $swfaddress, $swfaddress_path, $base;
		if($swfaddress_path == '/')
		{
			$path = '/';
		}
		else
		{
			$path = substr($swfaddress_path,0,strpos($swfaddress_path,'/',2) + 1);
		}
        $url = strtolower(array_shift(explode('/', $_SERVER['SERVER_PROTOCOL']))) . '://';
        $url .= $_SERVER['SERVER_NAME'];
        $url .= $base . '/php/datasource.php?swfaddress=' . $path;
        $url .= (strpos($swfaddress, '?')) ? '&' . substr($swfaddress, strpos($swfaddress, '?') + 1, strlen($swfaddress)) : '';
		readfile($url);
    }
	
	function swfaddress_subcontent() {
        global $swfaddress, $swfaddress_path, $base;
		if($swfaddress_path == '/')
		{
			echo '<span />';
		}
		else
		{
			$path = substr($swfaddress_path,0,strpos($swfaddress_path,'/',2) + 1);
			 if(($path == '/blinds/' || $path == '/awnings/') && strlen($swfaddress) > 9)
	        {
				$url = strtolower(array_shift(explode('/', $_SERVER['SERVER_PROTOCOL']))) . '://';
		        $url .= $_SERVER['SERVER_NAME'];
		        $url .= $base . '/php/datasource2.php?swfaddress=' . $swfaddress_path;
		        $url .= (strpos($swfaddress, '?')) ? '&' . substr($swfaddress, strpos($swfaddress, '?') + 1, strlen($swfaddress)) : '';
				readfile($url);
			}
			else
			{
				echo '<span />';
			}
		}
    }

    function swfaddress_optimizer($resource) {
        global $swfaddress, $base;
        echo($base . $resource . (strstr($resource, '?') ? '&amp;' : '?') . 'swfaddress=' . urlencode($swfaddress) . '&amp;base=' . urlencode($base));        
    }
	
	function flash()
	{
		if(!(isset($_SESSION['noflash'])) || ($_SESSION['noflash'] == 'false'))
		{
			echo '<script type="text/javascript">
			var flashvars = false; 
			var params = {  menu: "true", allowfullscreen: "true", allowscriptaccess: "sameDomain", wmode: "opaque", quality: "best"};
			var attributes = {halign:"center", id: "website",  name: "website"};
			swfobject.embedSWF("fontevraud.swf?datasource=datasource.php&datasource2=datasource2.php", "contents", "100%", "100%", "9.0.115", "swfobject/expressinstall.swf", flashvars, params, attributes);
			</script>';
		}
	}
	
	function getflash()
	{
		if(!(isset($_SESSION['noflash'])) || ($_SESSION['noflash'] == 'false'))
		{
			echo ("You either don't have the latest version of flash installed or you have disabled javascript! For a fuller, media rich experience click on the image to download and install Flash <br /> <a class='anchors' href='http://get.adobe.com/flashplayer/'><img id='gflogo' src='/images/noflash/get_adobe_flash_player.png' alt='Get Flash!' /></a>");
		}
		else
		{
			echo ("You have switched Flash off.  For a fuller, media rich experience click <a class='anchors' href='http://www.fontevraud.co.uk/index.php?flash=true'>here</a> to switch it back on.");
		}
	}
	
	function currentpage()
	{
		global $swfaddress_path;
		switch($swfaddress_path)
		{
			case '/':
				echo 'Gites In Fontevraud Homepage';
				break;
			case '/flacachette/':
				echo 'Gite La Cachette - Facilities';
				break;
			case '/flagoupiliere/':
				echo 'Gite La Goupiliere - Facilities';
				break;
			case '/bhowmuch/':
				echo 'Details - Value';
				break;
			case '/bwho/':
				echo 'Details - Contact Details';
				break;
			case '/bget/':
				echo 'Details - Getting There';
				break;
			case '/maplocal/':
				echo 'Maps - locality';
				break;
			case '/mapfrance/':
				echo 'Maps - France';
				break;
			case '/linksfont/':
				echo 'Links - Fontevraud';
				break;
			case '/linkschat/':
				echo 'Links - Chateaux in the area';
				break;
			case '/linksgolf/':
				echo 'Links - Local Golf Courses';
				break;
			case '/linkstowns/':
				echo 'Links - local Towns and Cities';
				break;
			case '/linkswine/':
				echo 'Links - Local Wine Producers';
				break;
			default:
				break;
		}
	}
	
	function metatags()
	{
		global $swfaddress_path;
		if($swfaddress_path == '/')
		{
			$path = '/';
		}
		else
		{
			$path = substr($swfaddress_path,0,strpos($swfaddress_path,'/',2) + 1);
		}
		switch($path)
		{
			case '/':
				echo '<meta name="description" content="Gites in Fontevraud - Short let gite rentals in Fontevraud l\'Abbaye in the Loire Valley in between Chinon and Saumur in France"></meta>' . "\n" . '		<meta name="keywords" content="gites de france, gites in france, gite, gites, loire valley, short lets, rental, cottages, accomodation, fontevraud l\'abbaye, chinon, saumur, france, vacation, rent"></meta>' . "\n";
				break;
			case '/flacachette/':
				echo '<meta name="description" content="The facilities at gite La Cachette make for a comfortable break for up to four people"></meta>' . "\n" . '		<meta name="keywords" content="gites de france, gites in france, gite, gites, facilities, la cachette, fontevraud, Loire valley, fontevraud l\'abbaye, chinon, saumur, france, vacation, rental"></meta>' . "\n";
				break;
			case '/flagoupiliere/':
				echo '<meta name="description" content="The facilities at gite La Goupiliere make for a comfortable break for up to four people."></meta>' . "\n" . '		<meta name="keywords" content="gites in france, gites de france, gite, gites, facilities, la goupiliere, fontevraud, Loire valley, fontevraud l\'abbaye, chinon, saumur, france, vacation, rental"></meta>' . "\n";
				break;
			case '/bhowmuch/':
				echo '<meta name="description" content="The two gites are available at a reasonable price which depends on the time of year and offers good value for money"></meta>' . "\n" . '		<meta name="keywords" content="gites in france, gites de france, gite, gites, prices, la cachette, la goupiliere, fontevraud, Loire valley, fontevraud l\'abbaye, chinon, saumur, france, vacation, rental"></meta>' . "\n";
				break;
			case '/bget/':
				echo '<meta name="description" content="How to get to the gites"></meta>' . "\n" . '		<meta name="keywords" content="gites in france. gites de france, gite, gites, travel, getting there, la goupiliere, fontevraud, Loire valley, fontevraud l\'abbaye, chinon, saumur, france, vacation, rental"></meta>' . "\n";
				break;
			case '/bwho/':
				echo '<meta name="description" content="Contact us at the following details."></meta>' . "\n" . '		<meta name="keywords" content="gites in france, gites de france, gite, gites, contact details, contacts, la goupiliere, fontevraud, Loire valley, fontevraud l\'abbaye, chinon, saumur, france, vacation, rental"></meta>' . "\n";
				break;
			case '/maplocal/':
				echo '<meta name="description" content="Links to maps of the area local to Fontevraud L\'Abbaye where the gites are located"></meta>' . "\n" . '		<meta name="keywords" content="gites in france, gites de france, gite, gites, maps, local, la goupiliere, fontevraud, Loire valley, fontevraud l\'abbaye, chinon, saumur, france, vacation, rental"></meta>' . "\n";
				break;
			case '/mapfrance/':
				echo '<meta name="description" content="Links to maps of France showing Fontevraud L\'Abbaye where the gites are located"></meta>' . "\n" . '		<meta name="keywords" content="gites in france, gites de france, gite, gites, maps, national, la goupiliere, fontevraud, Loire valley, fontevraud l\'abbaye, chinon, saumur, france, vacation, rental"></meta>' . "\n";
				break;
			case '/linksfont/':
				echo '<meta name="description" content="Links to places of interest near Fontevraud"></meta>' . "\n" . '		<meta name="keywords" content="gites de france, gites in france, gite, gites, links, local area, la goupiliere, fontevraud, Loire valley, fontevraud l\'abbaye, chinon, saumur, france, vacation, rental"></meta>' . "\n";
				break;
			case '/linkschat/':
				echo '<meta name="description" content="Links to chateaux near Fontevraud L\'Abbaye">' . "\n" . '		<meta name="keywords" content="gites in france, gites de france, gite, gites, links, chateaux, la goupiliere, fontevraud, Loire valley, fontevraud l\'abbaye, chinon, saumur, france, vacation, rental"></meta>' . "\n";
				break;
			case '/linksgolf/':
				echo '<meta name="description" content="Links to golf courses local to Fontevraud L\'Abbaye">' . "\n" . '		<meta name="keywords" content="gites de france, gites in france, gite, gites, links, golf courses, golf, la cachette, la goupiliere, fontevraud, Loire valley, fontevraud l\'abbaye, chinon, saumur, france, vacation, rental"></meta>' . "\n";
				break;
			case '/linkstowns/':
				echo '<meta name="description" content="Links to pages about towns and cities in the area of Fontevraud L\'Abbaye.">' . "\n" . '		<meta name="keywords" content="gites in france, gites de france, gite, gites, links, local, towns, cities, la goupiliere, fontevraud, Loire valley, fontevraud l\'abbaye, chinon, saumur, france, vacation, rental"></meta>' . "\n";
				break;
			case '/linkswine/':
				echo '<meta name="description" content="Links to local wine producers.">' . "\n" . '		<meta name="keywords" content="gites in france, gites de france, gite, gites, links, wine producers, wine, vineyards, la goupiliere, fontevraud, Loire valley, fontevraud l\'abbaye, chinon, saumur, france, vacation, rental"></meta>' . "\n";
				break;
			default:
			echo '<meta name="description" content="Welcome to fontevraud.co.uk"></meta>' . "\n" . '		<meta name="keywords" content="gites in fontevraud, gites de france, gites in france, gites in fontevraud, gites near saumur, saumur, chinon, fontevraud l\'abbaye, gite, gites, fontevraud, cottage, cottages, short lets, holiday rental, holiday lets, vacation rental, vacation"></meta>' . "\n";
			break;
		}
	}
    
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <script type="text/javascript" src="<?php swfaddress_optimizer('/swfaddress/swfaddress-optimizer.js?flash=8'); ?>"></script>
        <title><?php swfaddress_title('Cottages for rent in Fontevraud L\'Abbaye near Chinon and Saumur'); ?></title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"></meta>
		<meta name="robots" content="index, follow"></meta>
		<meta name="revisit-after" content="7 Days"></meta>
		<meta name="distribution" content="Global"></meta>
		<meta name="rating" content="General"></meta>
		<meta name="expires" content="Never"></meta>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="verify-v1" content="ftf1/yiJTvG9CXtMrqcsOkgak7aFwENb2QTHIPCC8Fw=" />
		<?php metatags(); ?>
		<link rel="icon" href="/favicon.ico" type="image/x-icon"></link>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"></link>
		<script type="text/javascript" src="<?php swfaddress_resource('/swfobject/swfobject.js'); ?>"></script>
		<script type="text/javascript" src="<?php swfaddress_resource('/swfaddress/swfaddress.js'); ?>"></script>
		<script type="text/javascript">
			var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
			document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
			var pageTracker = _gat._getTracker("UA-4454278-1");
			pageTracker._initData();
			var trackers = function(value)
			{
				pageTracker._trackPageview(value);
			}
			SWFAddress.setTracker(trackers);
		</script>
		<?php flash(); ?>
		<link rel="stylesheet" href="<?php swfaddress_resource('/style/style.css'); ?>" type="text/css" media="screen, projection"></link>
		<!--[if lte IE 6]>
			<link rel="stylesheet" type="text/css" media="screen" href="/style/iestyle.css" />    
		<![endif]-->
		<link rel="stylesheet" href="<?php swfaddress_resource('/style/textstyle.css'); ?>" type="text/css" media="screen, projection"></link>
    </head>
    <body>
        <div id="contents">
				<div id="backimage" height="100%" width="100%"><img src="/images/background.jpg"></img></div>
	            <div id="content">
				<div id="title"><h1><?php currentpage(); ?></h1></div>
					<div id="links">
							<ul>
							<li><a class="anchors" href="<?php swfaddress_link('/'); ?>">Why - home page</a></li>
			                <li>What - Facilities
								<ul>
								<li><a class="anchors" href="<?php swfaddress_link('/flacachette/'); ?>">La Cachette</a></li>
								<li><a class="anchors" href="<?php swfaddress_link('/flagoupiliere/'); ?>">La Goupiliere</a></li>
								</ul>
							</li>
							<li>Where it is
								<ul>
								<li><a class="anchors" href="<?php swfaddress_link('/maplocal/'); ?>">Locality</a></li>
								<li><a class="anchors" href="<?php swfaddress_link('/mapfrance/'); ?>">France</a></li>
								</ul>
							</li>
							<li>How - details
								<ul>
								<li><a class="anchors" href="<?php swfaddress_link('/bhow/'); ?>">Value - How much</a></li>
								<li><a class="anchors" href="<?php swfaddress_link('/bget/'); ?>">Getting there</a></li>
								<li><a class="anchors" href="<?php swfaddress_link('/bwho/'); ?>">Who to contact</a></li>
								</ul>
							</li>
							<li>Links to pages of interest
								<ul>
								<li><a class="anchors" href="<?php swfaddress_link('/linksfont/'); ?>">Fontevraud L'Abbaye</a></li>
								<li><a class="anchors" href="<?php swfaddress_link('/linkschat/'); ?>">Chateaux</a></li>
								<li><a class="anchors" href="<?php swfaddress_link('/linkstowns/'); ?>">Local towns and Cities</a></li>
								<li><a class="anchors" href="<?php swfaddress_link('/linksgolf/'); ?>">Local Golf Courses</a></li>
								<li><a class="anchors" href="<?php swfaddress_link('/linkswine/'); ?>">Local Wine Producers</a></li>
								</ul>
							</li>
							</ul>
						</div>
						<div id="allthetext">
							<div class="text" id="page"><?php swfaddress_content(); ?></div>
							<div class="text" id="subpage"><br /><?php swfaddress_subcontent(); ?></div>
						</div>
						<div id="getflash"><div id="getflashtext"><?php getflash(); ?></div></div>
	            </div>   -->
	    </div>
		<noscript>
			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="100%" height="100%" align="middle" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" id="flashnoscript">
			<param name="movie" value="fontevraud.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><embed src="fontevraud.swf" quality="high" bgcolor="#ffffff" width="100%" height="100%" name="fontevraud" align="middle" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
			</object>
		</noscript>-->
    </body>
</html>
