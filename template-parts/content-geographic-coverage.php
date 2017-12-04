<?php
/**
 * Template part for displaying page content in page-one-column.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */
global $template;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-page"); ?>>
    <?php $content_title = get_field("content_title");
    if($content_title):?>
        <header class="row-1 clear-bottom">
            <div class="col-1 js-blocks">
            </div><!--.col-1-->
            <div class="col-2 js-blocks">
                <h1><?php echo $content_title;?></h1>
            </div><!--.col-2-->
        </header>
    <?php endif;?>
    <div class="row-2 clear-bottom">
        <aside class="col-1" id="secondary" role="complementary">
            <?php if($template):?>
                <div class="menu">
                    <?php switch($template):
                        case "track":
                            wp_nav_menu( array( 'theme_location' => 'track'));
                        break;
                        case "tools":
                            wp_nav_menu( array( 'theme_location' => 'tools'));
                        break;
                        case "ship":
                            wp_nav_menu( array( 'theme_location' => 'ship'));
                        break;
                        case "services":
                            wp_nav_menu( array( 'theme_location' => 'services'));
                        break;
                        default:
                            wp_nav_menu( array( 'theme_location' => 'default'));
                        break;
                    endswitch;?>
                </div><!--.menu-->
            <?php endif;?>
            <div class="widget">
                <?php get_sidebar();?>
            </div><!--.widget-->
        </aside><!--.col-1-->
        <section class="col-2">
            <div class="copy">
                <?php the_content();?>
                <div id="right_panel" style="float:left;">
            <div class="box">
            <div class="topleft">
                <div class="topright">
                  <div>
                      <h1>Geographical Coverage</h1>
                      <p>Serving the United States<br />Package delivery on time - local or long distance.<br />Select The State For a Sampling of Our Service Area</p>
                      <div><img src="<?php echo get_template_directory_uri();?>/images/map.jpg" alt="Geographical Coverage" name="n00000001" width="675" height="473" border="0" usemap="#m_00000001" id="n00000001" /></div>
                      <hr noshade="noshade" size="1" />
                      <p>For states beginning with:</p>
                			<div class="alphabets">
                            
                            <a href="#" onMouseOver="fade_up('fade1','<div><h1>A</h1><h2>Alaska</h2><p>Anchorage, Fairbanks, Juneau, Ketchikan</p><h2>Alabama</h2><p>Anniston, Athens, Birmingham, Chickasaw, Decatur, Dothan, Florence, Gadsden, Huntsville, Mobile, Montgomery, Muscle Shoals, Ozark, Pelham, Phenix City, Tuscaloosa</p><h2>Arizona</h2><p>Flagstaff, Phoenix, Tempe, Tucson</p><h2>Arkansas</h2><p>Conway, Fayetteville, Fort Smith, Hot Springs, Jonesboro, Little Rock, North Little Rock, Pine Bluff, Springdale, Texarkana, West Memphis</p></div>','000000')" onMouseOut="fade_down('fade1')">A</a> | 
                            
                            <a href="#" onMouseOver="fade_up('fade1','<div><h1>C</h1><h2>California</h2><p>Casa Grande, Chino Valley, Mesa, Phoenix, Safford, Sierra Vista, Tempe, Tucson	 Apple Valley, Arcata, Atascadero, Auburn, Bakersfield, Carlsbad, Carmel, Cerritos, Chico, Clovis, Fremont, Fresno, Glendale, Grass Valley, Hayward, Irvine, Irwindale, Laguna Beach,  Los Angeles Merced, Mission Viejo, Modesto, Monterey, Nevada City, Oakland, Oceanside, Oxnard, Petaluma, Rancho Cucamonga, Sacramento, Salinas, San Clemente, San Diego, San Francisco Area, San Juan Capistrano, San Jose, San Rafael, San Ramon, Santa Anna, Santa Clara, Santa Rosa, Stockton, Ventura, Wildomar</p><h2>Colorado</h2><p>Arvada, Colorado Springs, Denver, Fort Collins, Grand Junction, Pueblo</p><h2>Connecticut</h2><p>Hartford, Newport News, Norwalk Beltsville, Gaithersburg, Washington DC</p></div>','000000')" onMouseOut="fade_down('fade1')">C</a> | 
                            
                            <a href="#" onMouseOver="fade_up('fade1','<div><h1>DFG</h1><h2>Delaware</h2><p>Dover, Newark, Seaford, Wilmington</p><h2>Florida</h2><p>Boca Raton, Brandon, Clearwater, Daytona Beach, Deltona, Fort Lauderdale, Ft Pierce, Ft Myers, Ft. Walton Beach, Gainesville, Gonzalez, Hollywood, Jacksonville, Jupiter, Lady Lake, Lake Wells, Longwood, Miami, Maitland, Melbourne, Miami, Naples, North Port, Ocala, Okeechobee, Orlando, Palm City, Pembroke Pines, Pensacola, Pompano Beach,  Port St. Lucie, Sanford, Sarasota, St Augustine, St. Petersburg, Stuart, Tampa, Titusville, Venice, Vero Beach, W. Palm Beach, Winter Haven</p><h2>Georgia</h2><p>Albany, Alpharetta, Athens, Atlanta, Bainbridge, Brunswick, Columbia, Columbus, Conyers, Gainesville, Hinesville, Lilburn/Atlanta, Macon, Marietta, McDonough, Port Royal, Roswell, Savannah, St. Marys, Tilton, Tybee Island, Valdosta</p><h2>Georgia</h2><p>Atlanta, Athens, Augusta, Columbus, Gainsville, Hinesville, La Fayette, Macon</p></div>','000000')" onMouseOut="fade_down('fade1')">DFG</a> |  
                            
                            <a href="#" onMouseOver="fade_up('fade1','<div><h1>HIK</h1><h2>Hawaii</h2><p>Honolulu, Kahului, Maui</p><h2>Iowa</h2><p>Cedar Rapids, Council Bluffs, Des Moines, Fort Dodge, Mason City, Sioux City, Waterloo Boise, Butte, Coeur d’Alene, Idaho Falls</p><h2>Illinois</h2><p>Aurora, Bloomington, Carbondale, Champaign, Chicago, Chicago/Schiller Park, De Kalb, East St. Louis, Effingham, Joliet, Marion, Mokena, Moline, Normal, Peoria, Peru, Quincy,  Rockford, South Bend, Springfield, Waukegan</p><h2>Indiana</h2><p>Elkhart, Evansville, Ft. Wayne, gary, oshen, Greenwood, Indianapolis, Lafayette, Michigan City, Muncie, New Haven, Osceola, Portage, South Bend, Terre Haute, Valparaiso</p><h2>Kansas</h2><p>Dodge City, Elwood, Garden City, Hutchinson, Kansas City, Lawrence, Leavenworth, Manhattan, Ogden, Topeka</p><h2>Kentucky</h2><p>Alvanton, Bowling Green, Covington/Villa Hills, Elizabethtown, Florence, Frankfort, Henderson, Kansas City, Lexington, Louisville, Owensboro, Westwood</p></div>','000000')" onMouseOut="fade_down('fade1')">HIK</a> | 

<a href="#" onMouseOver="fade_up('fade1','<div><h1>L</h1><h2>LA</h2><p>Alexandria, Anacoco, Baton Rouge, Duson, Hammond, Harahan, Lafayette, Lake Charles, Leesville, Monroe, New Orleans, Shreveport, Slidell, Vicksburg</p></div>','000000')" onMouseOut="fade_down('fade1')">L</a> | 

<a href="#" onMouseOver="fade_up('fade1','<div><h1>M</h1><h2>Massachusetts</h2><p>Amesbury, Amherst, Athol, Attleboro, Boston, Brockton, Cambridge, Cape Ann, Cape Cod, Charlestown, Chicopee, Clinton, E Boston, Dracut, Falmouth, Fall River,  Fitchburg, Framingham, Gloucester, Greenfield, Haverhill, Holyoke, Hyannis, Leominster, Lowell, Marlborough, Nantucket, New Bedford, Northampton, Pittsfield, Plymouth, Springfield,  Sutton, Waltham, Ward Hill, Webster, Worcester</p><h2>Maryland</h2><p>Annapolis, Baltimore, Bel Air, Beltsville, Bethesda, Bowie, Catonsville, Cumberland, District Heights, Easton, Gaithersburg, Glen Burnie, Glen Dale, Hagerstown, St. Charles,  Salisbury, Springdale, Washington DC Area, Westminster</p><h2>Maine</h2><p>Augusta, Bangor, Biddeford, Ellsworth, Fairfield, Grand Falls, Kitterly, Portland, Woolrich</p><h2>Michigan</h2><p>Addison, Ann Arbor, Battle Creek, Canton, Centerline, Clinton Township, Dearborn, Detroit, Flint, Grand Haven, Grand Rapids, Kalamazoo, Lansing, Livonia, Marquette, Midland,  Monroe, Mt. Pleasant, Muskegon, Pontiac, Portage, Port Huron, Royal Oak, Saginaw, Sault St. Marie, Traverse City, Warren, Waterford Bloomington, Duluth, East Grand Forks, Edina, Mankato, Minneapolis, Moorhead, Rochester, St. Cloud, St. Paul</p><h2>Missouri</h2><p>Branson, Columbia, Jefferson City, Kansas City, Liberty, Neosho, Poplar Bluff, St Louis, St. Josephs, St. Louis, Springfield</p><h2>Mississippi</h2><p>Bay St. Louis, Biloxi, Columbus, Corinth, Gulfport, Hattiesburg, Jackson, Meridian, Olive Branch, Tupelo, Vicksburg, Waynesboro</p><h2>Montana</h2><p>Billing, Butte, Great Falls, Helena, Missoula</p></div>','000000')" onMouseOut="fade_down('fade1')">M</a> | 

<a href="#" onMouseOver="fade_up('fade1','<div><h1>N</h1><h2>North Carolina</h2><p>Asheville, Chapel Hill, Charlotte, Clemmons, Durham, Elizabeth City, Fayetteville, Garner, Gastonia, Goldsboro, Greensboro, Greenville, Hickory, High Point, Jacksonville,  Morehead City, Mount Airy, New Bern, Raleigh, Roanoke Rapids, Rocky Mount, Stanley, Wake Forest, Wilmington, Wilson, Winston-Salem</p><h2>North Dakota</h2><p>Bismarck, Fargo, Grand Forks, Minot, Moorhead, Williston	 Nebraska: Grand Island, Hastings, Lincoln, Norfolk, N. Platte, Omaha, Scottsbluff, S. Sioux City</p><h2>New Hampshire</h2><p>Berlin, Concord, Derry, Epping, Hookset, Keene, Laconia, Lebanon, Littleton, Manchester, Nashua, Portsmouth, Rochester</p><h2>New Jersey</h2><p>Absecon, Atlantic City, Budd Lake, Camden, Cherry Hill, Cranbury, E Brunswick, E Rutherford, Edison, Elizabeth, Fairlawn, Freehold, Hackensack, Hawthorne, Jersey City, Lakewood, Millville, Mountainside, Mt. Holly, Newark, Northfield, Oranges, Paterson, Pleasantville, Plainfield, Princeton, Tappan, Toms River, Trenton, Ventnor City, Vineland, Willingboro  Albuquerque, Alamogordo, Gallup, Las Cruses, Las Vegas  Carson City, Elko, Henderson, Las Vegas, North Las Vegas, Pahrump, Reno, S. Lake Tahoe, Sparks</p><h2>New York</h2><p>Albany, Altamont, Amherst, Auburn, Binghamton, Buffalo, Cheektowaga, Corfu, Depew, Elmira, Endicott, Evans Mills, Garden City, Hempstead, Hudson, Ithaca, Jamestown,  Lancaster, Long Island, Middletown, Nassau County, Newburgh, Niagara Falls, North Tonawanda, Orange, Otisville, Passaic, Patchogue, Poughkeepsie, Queens, Queensbury, Rochester,  Schenectady, Syracuse, Troy, Utica, Voorheesville, Waterloo, Watertown </p></div>','000000')" onMouseOut="fade_down('fade1')">N</a> | 

<a href="#" onMouseOver="fade_up('fade1','<div><h1>OP</h1><h2>Ohio</h2><p>Akron, Beavercreek, Brecksville, Burlington, Canton, Cincinnati, Cleveland, Columbus, Dayton, Findley, Hamilton, Jackson/Chillicothe, Kettering, Mansfield, Marion, Medina, Mentor,  Belpre, Newark, Springfield, Toledo, Warren, Wheeling, Youngstown</p><h2>Oklahoma</h2><p>Broken Arrow, Lawton, Norman, Oklahoma City, Tulsa Burlington ON Albany, Eugene, Klamath Falls, LaGrande, Medford, Portland, Redmond, Salem</p><h2>Pennsylvania</h2><p>Allentown, Altoona, Archbald, Bala Cynwyd, Beaver Falls, Bethlehem; Boothwyn, Concordville, Delmont, Ellwood City, Ephrata, Gettysburg, Hanover Township, Johnstown,  Lock Haven, Hazelton, Loretto, Malvern, Mechanicsburg, Northampton, Philadelphia, Pittsburg, Sayre, Scranton, State College, Stroudsburg, Uniontown, Warminster, Waynesboro,  Wilkes-Barr, Williamsport, York Youngstown	PA</p></div>','000000')" onMouseOut="fade_down('fade1')">OP</a> | 

<a href="#" onMouseOver="fade_up('fade1','<div><h1>RS</h1><h2>Rhode Island</h2><p>Attleboro, Cranston, Kingston, Lincoln, Pawtucket, Providence, Warwick, Westerly, Woonsocket</p><h2>Oklahoma</h2><p>Broken Arrow, Lawton, Norman, Oklahoma City, Tulsa Burlington ON Albany, Eugene, Klamath Falls, LaGrande, Medford, Portland, Redmond, Salem</p><h2>South Carolina</h2><p>Aiken, Camden, Charleston, Columbia, Florence, Greenville, Greer, Hilton Head, Leesville, Lexington, Little River, Mrytle Beach, Pauline, Rock Hill, Spartanburg, Sumter, Wilmington</p><h2>South Dakota</h2><p>Aberdeen, Brookings, Mitchell, Rapid City, Sioux Falls, Watertown</p></div>','000000')" onMouseOut="fade_down('fade1')">RS</a> | 

<a href="#" onMouseOver="fade_up('fade1','<div><h1>TU</h1><h2>Tennessee</h2><p>Alcoa, Blountville, Chattanooga, Clarksville, Cookeville, Crossville, Goodlettsville, Jackson, Kingsport, Knoxville, Martin, Memphis, Murfreesboro, Nashville, Oakridge, Pulaski,  Smyrna, Union City</p><h2>Texas</h2><p>Alpine, Arlington, Austin, Beaumont, Corpus Christi, Dallas/Ft. Worth, Edinburg, El Paso, Flower Mound Grapevine, Galveston, Houston, Katy, Killeen, Lewisville, Lubbock, McAllen,  Mission, Odessa, Pharr, Plano, Port Arthur, Rowlett, San Angelo, San Antonio, Taft, Temple, Texarkana, Tyler, Victoria, Waco, Wichita Falls</p><h2>Utah</h2><p>Layton, Ogden, Provo, Salt Lake City, Taylorsville, West Valley</p></div>','000000')" onMouseOut="fade_down('fade1')">TU</a> | 

<a href="#" onMouseOver="fade_up('fade1','<div><h1>VW</h1><h2>Virginia</h2><p>Alexandria, Arlington, Bethesda, Blacksburg, Catawba, Charlottesville, Christiansburg, Danville, Harrisonburg, Hillsville, Leesburg, Lynchburg, Manassas, Mechanicsville,  Newport News, Norfolk, Petersburg, Pulaski, Reston, Salem/Roanoke, Sandston/Richmond, Virginia Beach, Weems, Winchester</p><h2>Vermont</h2><p>Barre, Brattleboro, Bennington, Burlington, Rutland, Springfield, St., Albans, St. Johnsbury, White River Junction, Williston</p><h2>Washington</h2><p>Bremerton, Fife, Kent, Oak Harbor, Olympia, Pasco, Renton, Richland, Seattle, Spokane, Tacoma, Vancouver, Walla Walla, Yakima</p><h2>Wisconsin</h2><p>Appleton, Eau Claire, Fond du Lac, Green Bay, Gurnee, Madison, Mukwonago, Niagara, Oshkosh, Racine, Sheboygan, Superior, Waukesha, Wausau, Milwaukee</p><h2>West Virginia</h2><p>Charleston, Clarksburg, Fairmont, Huntington, Hurricane, Martinsburg, Princeton, Morgantown, Wheeling</p><h2>Wyoming</h2><p>Casper, Cheyenne, Evanston, Gillette, Sheridan</p></div>','000000')" onMouseOut="fade_down('fade1')">VW</a></div>
                            <br />
                            	    
                         <!-- Grey Box -->
                            <div id="grey_box">
                                <div class="topleft1">
                                <div class="topright1">
                                <div style="height:700px;paddng:0;margin:0;">
                                    <script language="JavaScript1.2">
if (document.layers){
document.write('<ilayer name="nscontainer" width="510px">')
document.write('<layer name="fade1" width="510px">')
document.write('</layer></ilayer>')
}
else
document.write('<DIV ID="fade1"><h1>A</h1><h2>Alaska</h2><p>Anchorage, Fairbanks, Juneau, Ketchikan/p><h2>Alabama</h2><p>Anniston, Athens, Birmingham, Chickasaw, Decatur, Dothan, Florence, Gadsden, Huntsville, Mobile, Montgomery, Muscle Shoals, Ozark, Pelham, Phenix City, Tuscaloosa</p><h2>Arizona</h2><p>Flagstaff, Phoenix, Tempe, Tucson</p><h2>Arkansas</h2><p>Conway, Fayetteville, Fort Smith, Hot Springs, Jonesboro, Little Rock, North Little Rock, Pine Bluff, Springdale, Texarkana, West Memphis</p></DIV>')

</script>
</div>
                                    
                                </div>
                                </div>
                                <div class="bottomleft1">
                                    <div class="bottomright1"> </div>
                                </div>
                            </div>
                        <!-- Grey Box -->	
                  </div>  
                  
                   
                </div>
            </div>
            <div class="bottomleft">
                <div class="bottomright"> </div>
            </div>
    					
	</div>
            
            </div><!-- Bottom Ad Panel -->
              
   	  </div>
        
      <!-- Middle Content Ends-->

    </div>
    <!-- Wrapper End -->
   <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/custom/tooltip.js"></script>
   <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/custom/temp.js"></script>
    <map name="m_00000001" id="m_00000001">
<area shape="poly" coords="135,89,89,74,44,98,44,49,68,20,81,15,108,27" href="#" onMouseover="ddrivetip('<strong>Alaska:</strong> Anchorage, Fairbanks, Ketchikan, Juneau', 200)"; onMouseout="hideddrivetip()" target="None" />

<area shape="poly" coords="34,335,200,417,165,451,39,366" href="#" target="None" onMouseover="ddrivetip('<strong>Hawaii</strong> Hilo, Honolulu, Kahului, Kapaa, Kauai, Lanai, Lihue, Maui, Molokai,Mililani Town, Wahaiwa, Wailuku', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="607,134,619,127,623,135,613,145" href="#" target="None"onMouseover="ddrivetip('<strong>Conneticut</strong> Hartford, Norwalk, Plainville, Stratford,', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="626,123,635,127,636,133,634,136,628,131,626,123" href="#" target="None" onMouseover="ddrivetip('<strong>Rhode Island</strong> Lincoln, Pawtucket, Providence', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="606,112,621,103,629,103,635,110,638,113,630,117,627,113,615,121,606,117" href="#" target="None" onMouseover="ddrivetip('<strong>Massachusetts:</strong> Amesbury, Amherst, Athol, Attleboro, Boston, Brockton, Cambridge, Cape Ann, Cape Cod, Charlestown, Chicopee, Clinton, E Boston, Dracut, Falmouth, Fall River, Fitchburg, Framingham, Gloucester, Greenfield, Haverhill, Holyoke, Hyannis, Leominster, Lowell, Marlborough, Nantucket, New Bedford, Northampton, Pittsfield, Plymouth, Springfield, Sutton, Waltham, Ward Hill, Webster, Worcester', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="590,80,602,71,608,76,610,83,612,101,610,103" href="#" target="None" onMouseover="ddrivetip('<strong>New Hampshire:</strong> Berlin, Concord, Derry, Epping, Hookset, Keene, Laconia, Lebanon, Littleton, Manchester, Nashua, Portsmouth, Rochester', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="583,87,602,112,591,119,581,105" href="#" target="None" onMouseover="ddrivetip('<strong>Vermont:</strong> Barre, Brattleboro, Bennington, Burlington, Rutland, Springfield, St., Albans, St. Johnsbury, White River Junction, Williston', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="613,49,622,46,634,59,647,66,637,82,632,88,632,98,619,82,620,69,612,59" href="#" target="None" onMouseover="ddrivetip('<strong>Maine:</strong> Augusta, Bangor, Biddeford, Ellsworth, Fairfield, Grand Falls, Kitterly, Portland, Woolrich', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="486,178,505,174,511,167,516,162,524,166,529,182,522,196,521,208,516,207,504,207,498,208,490,202" href="#" target="None" onMouseover="ddrivetip('<strong>Ohio:</strong> Akron, Beavercreek, Brecksville, Burlington, Canton, Cincinnati, Cleveland, Columbus, Dayton, Findley, Hamilton, Hebron, Jackson/Chillicothe, Kettering, Mansfield, Marion, Medina, Mentor, Belpre, Newark, Springfield, Toledo, Warren, Wheeling, Youngstown', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="594,149,604,150,607,156,610,170,608,176,599,170,596,165,597,158,591,152" href="#" target="None" onMouseover="ddrivetip('<strong>New Jersey:</strong> Absecon, Atlantic City, Budd Lake, Camden, Cherry Hill, Cranbury, E Brunswick, E Rutherford, Edison, Elizabeth, Fairlawn, Freehold, Hackensack, Hawthorne, Jersey City, Lakewood, Millville, Mountainside, Mt. Holly, Newark, Northfield, Oranges, Paterson, Pleasantville, Plainfield, Princeton, Tappan, Toms River, Trenton,  Ventnor City, Vineland, Willingboro', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="585,177,588,187,597,191,600,187,588,176" href="#" target="None" onMouseover="ddrivetip('<strong>Delaware:</strong> Dover, Newark, Seaford, Wilmington', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="548,116,557,102,566,98,575,103,580,115,586,128,591,138,600,132,602,133,598,134,601,132,601,133,592,139,592,139,601,133,587,146,579,142,572,137,540,154,533,147,536,137,554,128" href="#" target="None" onMouseover="ddrivetip('<strong>New York:</strong> Albany, Altamont, Amherst, Auburn, Binghamton, Buffalo, Cheektowaga, Corfu, Depew, Elmira, Endicott, Evans Mills, Garden City, Hempstead, Hudson, Ithaca, Jamestown, Lancaster, Long Island, Middletown, Nassau County, Newburgh, Niagara Falls, North Tonawanda, Orange, Otisville, Passaic, Patchogue, Poughkeepsie, Queens, Queensbury, Rochester, Schenectady, Syracuse, Troy, Utica, Voorheesville, Waterloo, Watertown', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="532,162,570,145,588,163,582,170,546,186" href="#" target="None" onMouseover="ddrivetip('<strong>Pennsylvania:</strong> Allentown, Altoona, Archbald, Bala Cynwyd, Beaver Falls, Bethlehem; Boothwyn, Concordville, Delmont, Ellwood City, Ephrata, Gettysburg, Hanover Township, Johnstown, Lock Haven, Hazelton, Loretto, Malvern, Mechanicsburg, Northampton, Philadelphia, Pittsburg, Sayre, Scranton, State College, Stroudsburg, Uniontown, Warminster, Waynesboro, Wilkes-Barr, Williamsport, York', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="540,196,569,182,575,189,584,199,586,195,584,211,580,204,571,205,567,199,558,200,553,200,550,205,541,201" href="#" target="None" onMouseover="ddrivetip('<strong>Maryland:</strong> Annapolis, Baltimore, Bel Air, Beltsville, Bethesda, Bowie, Catonsville, Cumberland, District Heights, Easton, Gaithersburg, Glen Burnie, Glen Dale, Hagerstown, St. Charles, Salisbury, Springdale, Washington DC Area, Westminster', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="525,257,589,226,583,222,581,216,575,217,570,211,563,211,557,213,547,218" href="#" target="None" onMouseover="ddrivetip('<strong>Virginia:</strong> Alexandria, Arlington, Bethesda, Blacksburg, Catawba, Charlottesville, Christiansburg, Danville, Harrisonburg, Hillsville, Leesburg, Lynchburg, Manassas, Mechanicsville, Newport News, Norfolk, Petersburg, Pulaski, Reston, Salem/Roanoke, Sandston/Richmond, Virginia Beach, Weems, Winchester', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="498,218,514,225,519,214,530,223,519,235,507,255,495,251,489,241" href="#" target="None" onMouseover="ddrivetip('<strong>West Virginia:</strong> Charleston, Clarksburg, Fairmont, Huntington, Hurricane, Martinsburg, Princeton, Morgantown, Wheeling', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="449,189,468,181,476,187,483,214,475,230,457,238,451,227,458,220" href="#" target="None" onMouseover="ddrivetip('<strong>Indiana:</strong> Elkhart, Evansville, Ft. Wayne, Gary,Goshen, Greenwood, Indianapolis, Lafayette, Michigan City, Muncie, New Haven, Osceola, Portage, South Bend, Terre Haute, Valparaiso', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="546,255,594,233,602,245,587,270,573,265,561,269,558,268,546,272,542,277,530,280" href="#" target="None" onMouseover="ddrivetip('<strong>North Carolina:</strong> Asheville, Chapel Hill, Charlotte, Clemmons, Durham, Elizabeth City, Fayetteville, Garner, Gastonia, Goldsboro, Greensboro, Greenville, Hickory, High Point, Jacksonville, Morehead City, Mount Airy, New Bern, Raleigh, Roanoke Rapids, Rocky Mount, Stanley, Wake Forest, Wilmington, Wilson, Winston-Salem', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="537,284,556,274,567,277,578,277,588,281,573,308" href="#" target="None" onMouseover="ddrivetip('<strong>South Carolina:</strong> Aiken, Camden, Charleston, Columbia, Florence, Greenville, Greer, Hilton Head, Leesville, Lexington, Little River, Mrytle Beach, Pauline, Rock Hill, Spartanburg, Sumter, Wilmington', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="509,303,528,293,562,321,561,335,554,335,554,341,530,349,522,335" href="#" target="None" onMouseover="ddrivetip('<strong>Georgia:</strong> Albany, Alpharetta, Athens, Atlanta, Bainbridge, Brunswick, Columbia, Columbus, Conyers, Gainesville, Hinesville, Lilburn/Atlanta, Macon, Marietta, McDonough, Port Royal, Roswell, Savannah, St. Marys, Tilton, Tybee Island, Valdosta', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="436,292,484,274,493,261,482,252,471,254,454,267,436,276,429,280,428,288" href="#" target="None" onMouseover="ddrivetip('<strong>Kentucky:</strong> Ashland, Bowling Green, Covington, Danville, Elizabethtown, Lexington. Louisville, Lewisport, Murray, Owensboro, Paducah, Radcliff, Somerset', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="436,302,431,318,438,321,493,306,512,282,502,276" href="#" target="None" onMouseover="ddrivetip('<strong>Tennessee:</strong> Alcoa, Blountville, Chattanooga, Clarksville, Cookeville, Crossville, Goodlettsville, Jackson, Kingsport, Knoxville, Martin, Memphis, Murfreesboro, Nashville, Oakridge, Pulaski, Smyrna, Union City', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="472,325,496,318,502,323,516,350,519,364,495,372,496,378,486,381,477,377" href="#" target="None" onMouseover="ddrivetip('<strong>Alabama:</strong> Anniston, Athens, Birmingham, Chickasaw, Decatur, Dothan, Florence, Gadsden, Huntsville, Mobile, Montgomery, Muscle Shoals, Ozark, Pelham, Phenix City, Tuscaloosa', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="421,120,440,105,447,111,447,116,458,107,463,108,474,115,474,120,482,124,482,132,482,138,488,132,495,142,489,152,489,154,464,164,454,162,458,150,454,135,455,126,447,133,446,128,434,126" href="#" target="None" onMouseover="ddrivetip('<strong>Michigan:</strong> Addison, Ann Arbor, Battle Creek, Canton, Centerline, Clinton Township, Dearborn, Detroit, Flint, Grand Haven, Grand Rapids, Kalamazoo, Lansing, Livonia, Marquette, Midland, Monroe, Mt. Pleasant, Muskegon, Pontiac, Portage, Port Huron, Royal Oak, Saginaw, Sault St. Marie, Traverse City, Warren, Waterford', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="434,332,452,326,458,334,466,382,454,387,450,381,430,384,424,379,430,367,428,360,425,351,429,338" href="#" target="None" onMouseover="ddrivetip('<strong>Mississippi:</strong> Bay St. Louis, Biloxi, Columbus, Corinth, Gulfport, Hattiesburg, Jackson, Meridian, Olive Branch, Tupelo, Vicksburg, Waynesboro', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="546,370,570,360,576,362,602,355,601,353,607,351,615,356,635,384,644,406,635,415,623,406,613,396,600,387,600,377,592,373,581,380,567,376,556,382,549,378" href="#" target="None" onMouseover="ddrivetip('<strong>Florida:</strong> Boca Raton, Brandon, Clearwater, Daytona Beach, Deltona, Fort Lauderdale, Ft Pierce, Ft Myers, Ft. Walton Beach, Gainesville, Gonzalez, Hollywood, Jacksonville, Jupiter, Lady Lake, Lake Wells, Longwood, Miami, Maitland, Melbourne, Miami, Naples, North Port, Ocala, Okeechobee, Orlando, Palm City, Pembroke Pines, Pensacola, Pompano Beach, Port St. Lucie, Sanford, Sarasota, St Augustine, St. Petersburg, Stuart, Tampa, Titusville, Venice, Vero Beach, W. Palm Beach, Winter Haven', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="411,206,431,199,439,206,447,238,441,260,432,263,428,255,417,248,405,236,407,219,416,212" href="#" target="None" onMouseover="ddrivetip('<strong>Illinois:</strong> Aurora, Bloomington, Carbondale, Champaign, Chicago, Chicago/Schiller Park, De Kalb, East St. Louis, Effingham, Joliet, Marion, Mokena, Moline, Normal, Peoria, Peru, Quincy, Rockford, South Bend, Springfield, Waukegan', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="401,140,413,135,419,143,435,142,443,153,447,148,447,177,423,181,413,175,409,167,397,159,399,149" href="#" target="None" onMouseover="ddrivetip('<strong>Wisconsin:</strong> Appleton, Eau Claire, Fond du Lac, Green Bay, Gurnee, Madison, Mukwonago, Niagara, Oshkosh, Racine, Sheboygan, Superior, Waukesha, Wausau, Milwaukee', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="356,305,396,294,410,305,396,331,397,342,371,346,363,341,363,337,359,334" href="#" target="None" onMouseover="ddrivetip('<strong>Arkansas:</strong> Conway, Fayetteville, Fort Smith, Hot Springs, Jonesboro, Little Rock, North Little Rock, Pine Bluff, Springdale, Texarkana, West Memphis', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="350,245,381,238,390,244,400,261,404,258,403,265,414,274,414,281,412,287,404,287,399,284,369,291,358,285,359,259" href="#" target="None" onMouseover="ddrivetip('<strong>Missouri:</strong> Branson, Columbia, Jefferson City, Kansas City, Liberty, Neosho, Poplar Bluff, St Louis, St. Josephs, St. Louis, Springfield', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="344,197,385,187,392,192,400,205,395,215,393,223,360,229,350,225,348,212,342,205" href="#" target="None" onMouseover="ddrivetip('<strong>Iowa:</strong> Cedar Rapids, Council Bluffs, Des Moines, Fort Dodge, Mason City, Sioux City, Waterloo', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="266,209,318,207,331,215,336,236,287,242,280,238,279,233,271,232,262,228" href="#" target="None" onMouseover="ddrivetip('<strong>Nebraska:</strong> Grand Island, Hastings, Lincoln, Norfolk, N. Platte, Omaha, Scottsbluff, S. Sioux City', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="262,302,335,292,342,298,345,330,318,334,297,332,289,313,271,311,261,306" href="#" target="None" onMouseover="ddrivetip('<strong>Oklahoma:</strong> Broken Arrow, Lawton, Norman, Oklahoma City, Tulsa', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="277,249,333,243,342,251,345,257,345,279,285,287,273,281" href="#" target="None" onMouseover="ddrivetip('<strong>Kansas:</strong> Dodge City, Elwood, Garden City, Hutchinson, Kansas City, Lawrence, Leavenworth, Manhattan, Ogden, Topeka', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="341,125,347,179,357,183,395,175,383,166,383,153,385,145,404,128,395,123,355,119" href="#" target="None" onMouseover="ddrivetip('<strong>Minnesota:</strong> Bloomington, Duluth, East Grand Forks, Edina, Mankato, Minneapolis, Moorhead, Rochester, St. Cloud, St. Paul', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="273,167,325,163,332,167,332,199,276,202,267,195" href="#" target="None" onMouseover="ddrivetip('<strong>South Dakota:</strong> Aberdeen, Brookings, Mitchell, Rapid City, Sioux Falls, Watertown', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="362,356,390,350,399,355,401,360,400,369,409,369,413,374,425,394,373,395,367,392" href="#" target="None" onMouseover="ddrivetip('<strong>Lousiana:</strong> Alexandria, Anacoco, Baton Rouge, Duson, Hammond, Harahan, Lafayette, Lake Charles, Leesville, Monroe, New Orleans, Shreveport, Slidell, Vicksburg', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="275,119,320,115,330,122,332,150,282,152,272,148" href="#" target="None" onMouseover="ddrivetip('<strong>North Dakota:</strong> Bismarck, Fargo, Grand Forks, Minot, Moorhead, Williston', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="203,243,258,243,264,246,262,289,200,290,192,283" href="#" target="None" onMouseover="ddrivetip('<strong>Colorado:</strong> Arvada, Colorado Springs, Denver, Fort Collins, Grand Junction, Pueblo', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="200,181,251,182,255,188,249,228,199,226,189,219" href="#" target="None" onMouseover="ddrivetip('<strong>Wyoming:</strong> Casper, Cheyenne, Evanston, Gillette, Sheridan', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="249,326,276,323,284,329,282,348,298,352,327,352,338,352,342,386,339,396,318,414,304,429,308,446,289,442,282,429,274,421,263,405,258,406,247,413,233,404,231,395,219,380,252,380" href="#" target="None"onMouseover="ddrivetip('<strong>Texas:</strong> Alpine, Arlington, Austin, Beaumont, Corpus Christi, Dallas/Ft. Worth, Edinburg, El Paso, Flower Mound Grapevine, Galveston, Houston, Katy, Killeen, Lewisville, Lubbock, McAllen, Mission, Odessa, Pharr, Plano, Port Arthur, Rowlett, San Angelo, San Antonio, Taft, Temple, Texarkana, Tyler, Victoria, Waco, Wichita Falls', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="179,111,224,116,253,117,262,122,256,161,209,160,198,165,191,158,184,161,177,148,175,119" href="#" target="None" onMouseover="ddrivetip('<strong>Montana:</strong> Billing, Butte, Great Falls, Helena, Missoula, Kalispell, Plains, Whitefish', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="149,218,171,220,179,225,179,236,192,238,183,280,142,274,134,269" href="#" target="None" onMouseover="ddrivetip('<strong>Utah:</strong> Layton, Ogden, Provo, Salt Lake City, Taylorsville, West Valley', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="180,299,232,300,240,305,235,360,197,361,184,361,184,367,175,367,166,360" href="#" target="None" onMouseover="ddrivetip('<strong>New Mexico:</strong> Albuquerque, Alamogordo, Gallup, Las Cruses, Las Vegas', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="149,120,163,126,161,142,166,152,166,161,172,175,173,168,181,174,177,200,135,190,124,187" href="#" target="None" onMouseover="ddrivetip('<strong>Idaho:</strong> Boise, Butte, Coeur d’Alene, Idaho Falls', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="79,99,95,99,125,105,137,111,126,139,85,133,78,129,75,118" href="#" target="None" onMouseover="ddrivetip('<strong>Washington:</strong> Bremerton, Fife, Kent, Oak Harbor, Olympia, Pasco, Renton, Richland, Seattle, Spokane, Tacoma, Vancouver, Walla Walla, Yakima', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="90,199,77,229,108,284,123,273,140,211" href="#" target="None" onMouseover="ddrivetip('<strong>Nevada:</strong> Carson City, Elko, Henderson, Las Vegas, North Las Vegas, Pahrump, Reno, S. Lake Tahoe, Sparks', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="117,288,162,292,167,298,153,359,133,356,96,334" href="#" target="None" onMouseover="ddrivetip('<strong>Arizona:</strong> Casa Grande, Chino Valley, Mesa, Phoenix, Safford, Sierra Vista, Tempe, Tucson', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="72,131,126,156,110,190,61,177,52,170,65,146,70,137" href="#" target="None" onMouseover="ddrivetip('<strong>Oregon:</strong> Albany, Eugene, Klamath Falls, LaGrande, Medford, Portland, Redmond, Salem', 200)"; onMouseout="hideddrivetip()" />

<area shape="poly" coords="45,183,83,196,71,227,102,288,94,304,61,300,41,269,36,227,40,202" href="#" target="None" onMouseover="ddrivetip('<strong>California:</strong> Apple Valley, Arcata, Atascadero, Auburn, Bakersfield, Carlsbad, Carmel, Cerritos, Chico, Clovis, Fremont, Fresno, Glendale, Grass Valley, Hayward, Irvine, Irwindale, Laguna Beach, Los Angeles, Merced, Mission Viejo, Modesto, Monterey, Nevada City, Oakland, Oceanside, Oxnard, Petaluma, Rancho Cucamonga, Sacramento, Salinas, San Clemente, San Diego, San Francisco Area, San Juan Capistrano, San Jose, San Rafael, San Ramon, Santa Anna, Santa Clara, Santa Rosa, Stockton, Ventura, Wildomar', 200)"; onMouseout="hideddrivetip()" />

</map>
            </div><!--.copy-->
            <?php $services_title = get_field("services_title");
            $services_sub_title = get_field("services_sub_title");
            $services_copy = get_field("services_copy");?>
            <?php if($services_title||$services_sub_title):?>
                <header>
                    <?php if($services_title):?>
                        <h2><?php echo $services_title;?></h2>
                    <?php endif;
                    if($services_sub_title):?>
                        <h3><?php echo $services_sub_title;?></h3>
                    <?php endif;?>
                </header>
            <?php endif;
            if($services_copy):?>
                <div class="copy services">
                    <?php echo $services_copy;?>
                </div><!--.copy-->
            <?php endif;
            $services_col_1_title = get_field("services_col_1_title");
            $services_col_2_title = get_field("services_col_2_title");
            $services = get_field("services");
            if($services):?>
                <div class="services">
                    <div class="row-1 row">
                        <div class="col-1">
                            <?php if($services_col_1_title):
                                echo $services_col_1_title;
                            endif;?>
                        </div><!--.col-1-->
                        <div class="col-2">
                            <?php if($services_col_2_title):
                                echo $services_col_2_title;
                            endif;?>
                        </div><!--.col-2-->
                    </div><!--.row-1-->
                    <?php foreach($services as $row):
                        if($row['col_1']&&$row['col_2']):?>
                            <div class="row">
                                <div class="col-1">
                                    <?php echo $row['col_1'];?>
                                </div><!--.col-1-->
                                <div class="col-2 copy">
                                    <?php echo $row['col_2'];?>
                                </div><!--.col-2-->
                            </div><!--.row-->
                        <?php endif;
                    endforeach;?>
                </div><!--.services-->
            <?php endif;?>
        </section><!--.col-2-->
    </div><!--.row-2-->
</article><!-- #post-## -->
