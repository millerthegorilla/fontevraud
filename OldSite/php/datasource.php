<?php
    header('Content-Type: text/xml;charset=utf-8');
    $base = strtolower(substr($_SERVER['SERVER_PROTOCOL'], 0, strrpos($_SERVER['SERVER_PROTOCOL'], '/'))) . '://' . $_SERVER['SERVER_NAME'] . substr($_SERVER['PHP_SELF'], 0, strrpos($_SERVER['PHP_SELF'], '/'));
    
    switch($_GET['swfaddress']) {
        case '/': 
            echo("<span class='alltext'>In the heart of the Loire Valley, which has been designated a UNESCO world heritage site, are two comfortable and fully equipped gites - La Cachette and La Goupiliere - each sleeping four in two bedrooms. They are a few minutes walk from the beautiful 12th century Abbey in the village of Fontevraud L’Abbaye, which is centrally located for visiting the sites of the Loire Valley, the chateaux, the vineyards, and much more.<br /><br />Within five minutes drive of an 18 hole golf course, ten minutes walk from shops and restaurants, located between two major Loire towns (Saumur and Chinon), this is an ideal base from which to explore the delights of the Loire Valley. Good food, excellent wine, remarkable scenery; you are sure to enjoy a relaxing visit at these picturesque gites.</span>");
            break;
        case '/flacachette/': 
            echo("<span class='alltext'>La Cachette is a self-contained gite that was completely restored in 2007. Constructed from the local white limestone - tufeau – it sleeps four people in two twin bedrooms. There is plenty of wardrobe and drawer space, all linen and towels are provided (these may be changed, on request, for stays of longer than a week), a stairgate is fitted, and a cot and highchair are also provided. Please note that due to the stairs the cottage is not suitable for people with physical disabilities.<br /><br />
There is parking in front of the house, in a fully enclosed garden, which offers both privacy and security for dogs and small children. The kitchen/dining room has a washing machine, dishwasher, fridge/freezer, gas oven and hob, and all cutlery and crockery are provided.<br /><br />
There is a comfortable sitting room with a tv/dvd player (UK freesat) and a woodburning stove. The cottage is heated throughout by electric radiators, and water, electricity* and gas are inclusive, as is wifi. A barbecue is provided. Up to two dogs are permitted, but there is an additional charge of £10 per dog for extra cleaning.<br /><br />
The gite is a few minutes walk from the centre of Fontevraud. There you can find a bakery/patisserie and a small grocery (epicerie) which also sells bread on a Monday, when the main bakery is closed. There are nine restaurants in the village (opening times vary) ranging from a basic bar to fine dining, and there are numerous others in the area. It is a scenic 20 minute drive to Saumur or Chinon, both beautiful towns with much to see.<br /><br />
To check availability see:<br /><a href='http://www.ownersdirect.co.uk/accommodation/p8169827?uni_id=3615192' target='_blank'>La Cachette</a><br />To make a booking please contact us directly via <span id='mailadd'><script LANGUAGE='javascript'>
	var first = 'ma';
	var second = 'il';
	var third = 'to:';
	var fourth = 'sub';
	var fifth = 'ject';
	var sixth = '%26';
	var seventh = '?';
	var eighth = '=';
	var ninth = 'enq';
	var tenth = 'uiry';
	var address = 'fontevraudgites';
	var domain = 'hotmail';
	var ext = 'com'; 
	document.write('<a href=\"');
	document.write(first+second+third);
	document.write(address);
	document.write('&#64;');
	document.write(domain);
	document.write('.');
	document.write(ext);
	document.write(seventh);
	document.write(fourth);
	document.write(fifth);
	document.write(eighth);
	document.write(ninth);
	document.write(tenth + ' from Website');
	document.write('\">'); 
	document.write('fontevraud[at]hotmail.com</a>');
</script></span>, or do so through either of the links above.<br /><br />
*From the beginning of October to the end of March there is a charge for electricity. A deposit of Euros 80 per week will be required, which will be adjusted at the end of the stay against meter readings.</span>");
            break;
        case '/flagoupiliere/':
            echo("<span class='alltext'>La Goupiliere is a self-contained gite, which shares its garden with the owners’ holiday home. Constructed from the local white limestone - tufeau – it sleeps four people in two twin bedrooms. There is plenty of wardrobe and drawer space, all linen and towels are provided (these may be changed, on request, for stays of longer than a week), a stairgate is fitted, and a cot and highchair are also provided. Please note that due to the stairs the cottage is not suitable for people with physical disabilities.<br /><br />
There is private parking close to the house, reached via a bridge over a small stream. The kitchen/dining room has a washing machine, dishwasher, fridge/freezer, gas oven and hob, and all cutlery and crockery are provided.<br /><br />
There is a comfortable sitting room with tv (UK freesat), dvd player and radio, and a woodburning stove. The cottage is centrally heated, and water, electricity* and gas are inclusive, as is wifi.  A barbecue is provided. Up to two dogs are permitted, but there is an additional charge of £10 per dog for extra cleaning. The gite has its own garden area, with a gate to provide security for children and animals.<br /><br />
The gite is a few minutes walk from the centre of Fontevraud. There you can find a bakery/patisserie and a small grocery (epicerie) which also sells bread on a Monday, when the main bakery is closed. There are nine restaurants in the village (opening times vary) ranging from a basic bar to fine dining, and there are numerous others in the area. It is a scenic 20 minute drive to Saumur or Chinon, both beautiful towns with much to see.<br /><br />
To check availability see:<br /><a href='http://www.ownersdirect.co.uk/accommodation/p8169827' target='_blank'>La Goupiliere</a><br />To make a booking please contact us directly via <span id='mailadd'><script LANGUAGE='javascript'>
	var first = 'ma';
	var second = 'il';
	var third = 'to:';
	var fourth = 'sub';
	var fifth = 'ject';
	var sixth = '%26';
	var seventh = '?';
	var eighth = '=';
	var ninth = 'enq';
	var tenth = 'uiry';
	var address = 'fontevraudgites';
	var domain = 'hotmail';
	var ext = 'com'; 
	document.write('<a href=\"');
	document.write(first+second+third);
	document.write(address);
	document.write('&#64;');
	document.write(domain);
	document.write('.');
	document.write(ext);
	document.write(seventh);
	document.write(fourth);
	document.write(fifth);
	document.write(eighth);
	document.write(ninth);
	document.write(tenth + ' from Website');
	document.write('\">'); 
	document.write('fontevraud[at]hotmail.com</a>');
</script></span>, or do so through either of the links above.
*From the beginning of October to the end of March there is a charge for electricity use. A deposit of Euros 80 per week will be taken at the beginning of your stay, which will be adjusted at the end of the stay against meter readings.</span>");
            break;
        case '/bhow/':
            echo("<span class='alltext'>All the following may be downloaded <a href='http://fontevraud.co.uk/gite_tariffs_2016.pdf' target='_blank'>here</a> <br /><br />The rates below are per week and are shown in GBP.<br /><br />
Payment may be made in GBP or Euros.<br /><br />
A 20% non-refundable deposit is required within one week of the booking. The balance to be paid no later than 60 days prior to the start of the rental.<br />
Our normal rental period runs from Saturday to Saturday, however if you wish to stay for a different period, please ask and we will accommodate you where possible.<br />
The gites are also available for longer rental periods at a discount – please ask for a rate.<br />
Rates are per property, irrespective of how many guests are staying.<br />Prices are inclusive of all taxes.<br />
Pets are allowed in both gites. Up to two dogs are permitted, but there is an additional charge of £10 per dog for extra cleaning.<br />
A refundable security deposit of Euros 100 will be collected at the beginning of your stay.<br />
From the beginning of October to the end of March there is a charge for electricity use. <br />
A deposit of Euros 80 per week will be taken at the beginning of your stay, which will be adjusted at the end of the stay against meter readings.<br />
<br />Please <a href='#/bwho/'>contact</a> us for availability.</span>
<span class='alltext' id='prices'><p align='center'><u>2016 Tariff</u>
<br />La Cachette<br /></p><p align='left'>
Low:\tSat 2 Jan to Fri 1 April\tSat 1 Oct to Fri 16 Dec\t£220.00<br />
Shoulder:\tSat 2 April to Fri 20 May\tSat 25 June to Fri 1 July\t£260.00<br />
\t\tSat 17 Sept to Fri 30 Sept\t£260.00<br />
Easter:\tSat 21 May to Fri 24 June\t\t£400.00<br />
High:\tSat 2 July to Fri 22nd July\tSat 20 Aug to Fri 16 Sept\t£580.00<br />
Xmas:\tSat 17 Dec to Fri 6 Jan\t\t£580.00<br />
Peak:\tSat 23 July to Fri 19 Aug\t\t£625.00<br />
<br /> 
<p align='center'>La Goupiliere</p>
Low:\tSat 2 Jan to Fri 1 April\tSat 1 Oct to Fri 16 Dec\t£200.00 <br />
Shoulder:\tSat 2 April to Fri 20 May\tSat 25 June to Fri 1 July\t£230.00<br />
\t\tSat 17 Sept to Fri 30 Sept\t\t\t\t£230.00 <br />
Easter:\tSat 21 May to Fri 24 June\t\t£350.00<br /> 
High:\tSat 2 July to Fri 22nd July\tSat 20 Aug to Fri 16 Sept\t£510.00<br /> 
Xmas:\tSat 17 Dec to Fri 6 Jan\t\t£510.00<br /> 
Peak:\tSat 23 July to Fri 19 Aug\t\t£580.00<br /> <br />
The above rates are per week and are shown in GBP.<br /><br />
Payment may be made in GBP or Euros.<br /><br />
A 20% non-refundable deposit is required within one week of the booking. The balance to be paid no later than 60 days prior to the start of the rental.<br />
Our normal rental period runs from Saturday to Saturday, however if you wish to stay for a different period, please ask and we will accommodate you where possible.<br />
The gites are also available for longer rental periods at a discount – please ask for a rate.<br />
Rates are per property, irrespective of how many guests are staying.<br />Prices are inclusive of all taxes.<br />
Pets are allowed in both gites. Up to two dogs are permitted, but there is an additional charge of £10 per dog for extra cleaning.<br />
A refundable security deposit of Euros 100 will be collected at the beginning of your stay.<br />
From the beginning of October to the end of March there is a charge for electricity use. A deposit of Euros 80 per week will be taken at the beginning of your stay, which will be adjusted at the end of the stay against meter readings.<br />Please <a href='#/bwho/'>contact</a> us for availability.</span>");
            break;
		case '/bget/':
            echo("<span class='alltext'>Fontevraud L’Abbaye is between Saumur and Chinon, approximately 16 kilometres from each, and is a few minutes drive south from Montsoreau which is by the river Loire. Approximate driving times from various ports are as follows: Caen 3 hours, St. Malo 3 ½ hours, Cherbourg 4 ½ hours, Calais 6 hours.<br />
There are good train services to Saumur from Paris, and there are three airports within easy reach, Angers, Poitiers, and Tours, where car hire is available.</span>");
            break;
        case '/bwho/':
            echo("<span class='alltext'>Availability can be checked on the following websites:<br /><br />La Cachette   <a href='http://www.ownersdirect.co.uk/accommodation/p8169827?uni_id=3615192' target='_blank'>http://www.ownersdirect.co.uk/accommodation/p8169827</a><br /><br /><br />La Goupiliere:   <a href='http://www.ownersdirect.co.uk/accommodation/p8169827' target='_blank'>http://www.ownersdirect.co.uk/accommodation/p8169827</a><br /><br /><p align='left'>To make an enquiry or booking please contact:</p><span class='large' id='mailadd'><script LANGUAGE='javascript'>
	var first = 'ma';
	var second = 'il';
	var third = 'to:';
	var fourth = 'sub';
	var fifth = 'ject';
	var sixth = '%26';
	var seventh = '?';
	var eighth = '=';
	var ninth = 'enq';
	var tenth = 'uiry';
	var address = 'fontevraudgites';
	var domain = 'hotmail';
	var ext = 'com'; 
	document.write('<a href=\"');
	document.write(first+second+third);
	document.write(address);
	document.write('&#64;');
	document.write(domain);
	document.write('.');
	document.write(ext);
	document.write(seventh);
	document.write(fourth);
	document.write(fifth);
	document.write(eighth);
	document.write(ninth);
	document.write(tenth + ' from Website');
	document.write('\">'); 
	document.write('fontevraud[at]hotmail.com</a>');
</script></span><br /></span>");
            break;
        case '/maplocal/':
            echo("<span class='alltext'><a href='https://goo.gl/maps/Y96LA8hzCdy' target='_blank'>A Map of the local area</a><br /><br /><a href='https://goo.gl/maps/qkzVXwMW7vv' target='_blank'>La Goupiliere at 62 Rue des Poitiers</a><br /><br /><a href='https://goo.gl/maps/tU3ADQXGZmH2' target='_blank'>Google street view for La Goupiliere.</a>  Cars are parked in the orchard driveway first on the left in this photo<br /><br /><a href='https://goo.gl/maps/xLRt3PvsxF92' target='_blank'>La Cachette at 61 Rue des Poitiers</a><br /><br /><a href='https://goo.gl/maps/zuZdeabcDPw' target='_blank'>Google street view for La Cachette</a></span>");
            break;
		case '/mapfrance/':
            echo("<span class='alltext'><a href='https://goo.gl/maps/VVVKQjeWD8y' target='_blank'>Where the cottages are located in France.</a><br />Fontevraud L’Abbaye is between Saumur and Chinon, approximately 16 kilometres from each, and is a few minutes drive south from Montsoreau which is by the river Loire. Approximate driving times from various ports are as follows: Caen 3 hours, St. Malo 3 ½ hours, Cherbourg 4 ½ hours, Calais 6 hours. 
There are good train services to Saumur from Paris, and there are three airports within easy reach, Angers, Poitiers, and Tours, where car hire is available.<br />When travelling from St Malo, there is a good road via the ring road at Rennes, to Le Mans and then one can take the motorway from there to Saumur, or head through the pleasant countryside and avoid the motorway altogether.</span>");
            break;
		case '/linksfont/':
            echo("<span class='alltext'>The village of Fontevraud is a small quiet village, that is not far from the two major towns of Saumur and Chinon.  There are three good restaurants in the village, which also has a bakery, a butcher, a grocer, a florist, several bars and two tearooms.  There is a doctor's surgery, a chemist, a post office and cash dispenser.  There are leisure activities, golf (in the area), tennis at Montsoreau, canoe/kayak at Chinon, bike hire in Candes St Martin and also Horse riding trips such as those offered by <a href='http://www.les-abrons.com/equestrian%20farm%20les%20abrons%20news.html' target='_blank'>Les Abrons</a>.<br /><br />Day tickets for the nearby <a href='http://www.centerparcs.com/gb-en/france/fp_BD_holiday-park-le-bois-aux-daims' target='_blank'>Centre Parcs</a> can be purchased at the Tourism offices at Saumur and Montsoreau. They have to be for a specific date. Euros 34 per person, free for children under 7. This is just for the pool, water chutes etc. Any other attractions cost extra.<br /><br /><a href='https://www.tumblr.com/search/fontevraud' target='_blank'>Pictures of Fontevraud L'Abbaye on Tumblr</a><br /><br /><a href='https://ssl.panoramio.com/map/#lt=47.181755&ln=0.049577&z=4&k=2&a=1&tab=1&pl=all' target='_blank'>More pictures of Fontevraud - from Google</a><br /><br /><a href='http://www.planetware.com/france/fontevraud-abbey-f-loi-font.htm' target='_blank'>General Information about Fontevraud L'Abbaye</a><br /><br /><a href='http://www.tripadvisor.co.uk/Restaurants-g187193-Fontevraud_l_Abbaye_Maine_et_Loire_Pays_de_la_Loire.html' target='_blank'>Restaurants in Fontevraud l'Abbaye</a><br /><br /><a href='http://www.france-voyage.com/travel-guide/fontevraud-l-abbaye-commune-17035.htm' target='_blank'>Things to do in Fontevraud l'Abbaye</a><br /><br /><a href='http://www.tripadvisor.co.uk/AttractionsNear-g187193-d4839889-Abbaye_Royale_de_Fontevraud-Fontevraud_l_Abbaye_Maine_et_Loire_Pays_de_la_Loire.html' target='_blank'>Places to visit in the area</a><br /><br /><a href='http://www.fontevraud.fr/en/Visit-Fontevraud/Visit' target='_blank'>Fontevraud Abbey</a><br /><br /><a href='http://www.fontevraud.fr/en/Plan-your-day' target='_blank'>Cultural Events in Fontevraud L'Abbaye</a></span>");
            break;
		case '/linkschat/':
            echo("<span class='alltext'>There are so many Chateaux in the Loire, far too many to list but here are some that you might find interesting in the immediate area.<br /><br /><a href='http://www.microsofttranslator.com/bv.aspx?from=fr&to=en&a=http%3A%2F%2Fwww.chateau-saumur.fr%2F' target='_blank'>The Chateaux at Saumur has been recently restored.</a><br /><br /><a href='http://www.forteressechinon.fr/contenu_en.php?id=35' target='_blank'>Chinon Fortress</a><br /><br /><a href='http://www.chateau-montsoreau.com/en' target='_blank'>Chateau Montsoreau is situated on the south bank of the River Loire, 10 minutes drive south of Fontevraud L’Abbey</a><br /><br /><a href='http://www.chateaudebreze.com/castle-france-loire-saumur.html' target='_blank'>A visit to the Chateau de Breze is particularly recommended</a><br /><br /><a href='http://www.planetware.com/tourist-attractions/france/loire-valley-chateaux-of-the-loire-f-cen-lova.htm' target='_blank'>Chateaux of the Loire</a><br /><br /><a href='http://loire-chateaux.co.uk/en-gb/the-chateaux' target='_blank'>A list of chateaux of the Loire</a></span>");
            break;
		case '/linksgolf/':
            echo("<span class='alltext'><a href='http://www.golftoday.co.uk/clubhouse/coursedir/europe/france/paysdelaloire/index.html' target='_blank'>Local Golf Courses</a><br /><br /><a href='http://golf.domainederoiffe.fr/' target='_blank'>Golf de Roiffe is five minutes drive from the gites</a></span>");
            break;
		case '/linkstowns/':
            echo("<span class='alltext'>The village is ideally located between two prominent towns of the area - Saumur and Chinon.  There are also two major French Cities within easy driving distance, Angers and Tours.<br /><br /><a href='http://www.ot-saumur.fr/LE-GRAND-SAUMUR-invitation-to-travel_a26018.html' target='_blank'>Saumur tourist office</a><br /><br /><a href='http://www.chinon-loirevalley.com/' target='_blank'>Chinon tourist office</a><br /><br /><a href='http://www.tours-tourism.co.uk/' target='_blank'>Tours tourist office</a><br /><br /><a href='http://www.angersloiretourisme.com/en' target='_blank'>Angers tourist office</a><br /><br /><a href='http://uk.poitiers-tourism.com/' target='_blank'>Poitiers tourist office</a><br /><br /><a href='http://www.tourisme-vienne.com/en' target='_blank'>Vienne department tourist office</a><br /><br /><a href='http://www.anjou-loire-valley.co.uk/' target='_blank'>Maine-et-Loire department tourist office</a><br /><br /><a href='http://www.touraineloirevalley.co.uk/' target='_blank'>Touraine department tourist office</a><br /><br /><a href='http://en.wikipedia.org/wiki/Saumur' target='_blank'>Information about Saumur</a><br /><br /><a href='http://en.wikipedia.org/wiki/Chinon' target='_blank'>Information about Chinon</a><br /><br /><a href='http://en.wikipedia.org/wiki/Tours' target='_blank'>Information about the city of Tours</a><br /><br /><a href='http://en.wikipedia.org/wiki/Angers' target='_blank'>Information on the city of Angers</a></span>");
            break;
		case '/linkswine/':
            echo("<span class='alltext'>The Loire Valley is less well-known as a wine producing area than, for example, Bordeaux or Burgundy, but there are many producers of good wine at reasonable prices.<br /><br /><a href='http://www.microsofttranslator.com/bv.aspx?from=fr&to=en&a=http%3A%2F%2Fwww.robertetmarcel.com%2F' target='_blank'>The Cave Cooperative de Saumur, the largest local producer, offers a good range of not-too-expensive wines</a><br /><br /><a href='http://www.fremonclairs.fr' target='_blank'>Le Domaine des Fremonclairs is recommended</a><br /><br /><a href='http://www.domaineamirault.com' target='_blank'>For good Cremant, try Amirault Vignerons</a><br /><br /><a href='http://www.chateaudeberrye.com' target='_blank'>For slightly more expensive but very good quality reds and white</a><br /><br /><a href='http://www.gratienmeyer.com/web/uk_index.php' target='_blank'>Gratien and Meyer are a large producer of local wine</a><br /><br /><a href='http://www.loirevalleywine.com/regions/saumur' target='_blank' rel='nofollow'>Wines of Saumur</a></span>");
            break;
        default:
            echo("<p>Sorry! This page can't be found.</p>");
            break;
    }
?>
