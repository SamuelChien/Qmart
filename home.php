<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Qmart</title>
        <!-- style and graph-->
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css">
        <link rel="stylesheet" type="text/css" href="css/upperStyle.css">
    </head>
    <body>
        <div class="container">
	    <!-- Navigation Bar  -->
            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container">
                        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="brand" href="#"><i class=" icon-home icon-white"></i> Qmart</a>
                        <form class="navbar-search pull-left">
                            <input type="text" class="search-query" placeholder="Search Market, Store, Item Here">
                </form>
                        <div class="nav-collapse collapse">
                            <ul class="nav">
                                <li class="#about"><a href="#">QList</a></li>
    			                <li><a href="#about">QDream</a></li>
                                <li><a href="#about">QStreet</a></li>
                                <li><a href="#contact">QSense</a></li>
                            </ul>
                            <ul class="nav pull-right">
                                <li><a href="#contact">MyStore</a></li>
                                <li><a href="#contact"><i class="icon-envelope icon-white"></i> Sent Me Question | Bug | Feature Request</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    	    <div class="container" alt="categoryOfListing">
                <ul class="nav nav-tabs">
                    <li><a href="#">Subscribed</a></li>
                    <li class="active"><a href="#">Phone</a></li>
                    <li><a href="#" id="right" style="display:block;" onclick=categoryRight()><i class="icon-chevron-right"></i></a></li>
                    <li><a href="#" class="dynamicCategory" style="display:block;">Computer</a></li>
                    <li><a href="#" class="dynamicCategory" style="display:block;">Clothes</a></li>
                    <li><a href="#" class="dynamicCategory" style = "display:block;">Books</a></li>
                    <li><a href="#" class="dynamicCategory" style = "display:block;">Tickets</a></li>
                    <li><a href="#" class="dynamicCategory" style="display:none;">Bike</a></li>
                    <li><a href="#" class="dynamicCategory" style="display:none;">Furniture</a></li>
                    <li><a href="#" class="dynamicCategory" style = "display:none;">Apartment Rental</a></li>
                    <li><a href="#" class="dynamicCategory" style = "display:none;">Jewelry Lover</a></li>
                    <li><a href="#" class="dynamicCategory" style = "display:none;">Cookie Lover</a></li>
                    <li><a href="#" class="dynamicCategory" style = "display:none;">Pet Lover</a></li>
                </ul>
            </div>
                
            <div class="btn-group">
                <button class="btn dropdown-toggle" data-toggle="dropdown" style="padding: 0px 5px;"><span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#" onclick = "toggleGraphCheckbox()">Toggle Graph</a></li>
                    <li><a href="#" onclick = "toggleAllFilter()" >Toggle Filters</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Edit Graph</a></li>
                </ul>
            </div>

            <div class="container" id="graphs">
                <div class="row-fluid" id = "graphDiv" style = "display:inline;">
                    <div class="span6">
                        <div id="averagePrice" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
                    </div>
                    <div class="span6">
                        <div id="monthPrice" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
                    </div>
                </div>
            </div>

            <div class="hiddenFilters">
                <form id = "graphForm" style = "display:none;">
                    <fieldset>
                        <legend><a href="#" style="text-decoration:none;" onclick="priceFilter()">Price Filter</a></legend>
                        <div class="control-group">
                            <div class="controls">
                                <input type="text" id="inputEmail" placeholder="Max Dream Price ($1000)">
                                <input type="text" id="inputEmail" placeholder="Max Ask Price ($1000)">
                                <input type="text" id="inputEmail" placeholder="Max Trade Price ($1000)">
                                <input type="text" id="inputEmail" placeholder="Max Offer Price ($1000)">
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <input type="text" id="inputEmail" placeholder="Min Dream Price ($0)">
                                <input type="text" id="inputEmail" placeholder="Min Ask Price ($0)">
                                <input type="text" id="inputEmail" placeholder="Min Trade Price ($0)">
                                <input type="text" id="inputEmail" placeholder="Min Offer Price ($0)">
                            </div>
                        </div>
                    </fieldset>
                </form>
                <form id = "storeForm" style = "display:none;">
                    <fieldset>
                        <legend><a href="#" style="text-decoration:none;" onclick="storeFilter()">Store Filter</a></legend>

                        <label class="checkbox inline">
                                <input type="checkbox" checked><img src="logos/logo.png" height="42" width="42">
                        </label>
                        <label class="checkbox inline">
                                <input type="checkbox" checked><img src="logos/logo2.png" height="42" width="42">
                        </label>
                        <label class="checkbox inline">
                                <input type="checkbox" checked><img src="logos/logo3.png" height="42" width="42">
                        </label>
                        <label class="checkbox inline">
                                <input type="checkbox" checked><img src="logos/logo4.png" height="42" width="42">
                        </label>
                        <label class="checkbox inline">
                                <input type="checkbox" checked><img src="logos/logo5.png" height="42" width="42">
                        </label>
                        <label class="checkbox inline">
                                <input type="checkbox" checked><img src="logos/logo6.png" height="42" width="42">
                        </label>
                        <label class="checkbox inline">
                                <input type="checkbox" checked><img src="logos/logo7.png" height="42" width="42">
                        </label>
                        <label class="checkbox inline">
                                <input type="checkbox" checked><img src="logos/logo8.png" height="42" width="42">
                        </label>
                        <label class="checkbox inline">
                                <input type="checkbox" checked><img src="logos/logo9.png" height="42" width="42">
                        </label>
                        <br>
                        <label class="checkbox inline">
                                <input type="checkbox" checked><img src="logos/logo10.png" height="42" width="42">
                        </label>
                        <label class="checkbox inline">
                                <input type="checkbox" checked><img src="logos/logo11.png" height="42" width="42">
                        </label>
                        <label class="checkbox inline">
                                <input type="checkbox" checked><img src="logos/logo12.png" height="42" width="42">
                        </label>
                        <label class="checkbox inline">
                                <input type="checkbox" checked><img src="logos/logo13.png" height="42" width="42">
                        </label>
                        <label class="checkbox inline">
                                <input type="checkbox" checked><img src="logos/logo14.png" height="42" width="42">
                        </label>
                        <label class="checkbox inline">
                                <input type="checkbox" checked><img src="logos/logo.png" height="42" width="42">
                        </label>
                        <label class="checkbox inline">
                                <input type="checkbox" checked><img src="logos/logo2.png" height="42" width="42">
                        </label>
                        <label class="checkbox inline">
                                <input type="checkbox" checked><img src="logos/logo3.png" height="42" width="42">
                        </label>
                        <label class="checkbox inline">
                                <input type="checkbox" checked><img src="logos/logo4.png" height="42" width="42">
                        </label>
                    </fieldset>
                </form>
                <form id = "posterInfoForm" style = "display:none;">
                    <fieldset>
                        <legend><a href="#" style="text-decoration:none;" onclick="posterInfoFilter()">Poster Filter</a></legend>
                        <div class="row-fluid">
                            <div class="span4">
                                <div class="row-fluid">
                                    <div class="span6">
                                        <label class="checkbox">
                                            <input type="checkbox" checked> iPhone
                                        </label>
                                        <label class="checkbox">
                                            <input type="checkbox" checked> Samsung
                                        </label>
                                        <label class="checkbox">
                                            <input type="checkbox" checked> HTC
                                        </label>
                                    </div>
                                    <div class="span6">
                                        <div style = "display:inline;">
                                            <label class="checkbox">
                                                <input type="checkbox" checked> iPhone 5
                                            </label>
                                            <label class="checkbox">
                                                <input type="checkbox" checked> iPhone 4S
                                            </label>
                                            <label class="checkbox">
                                                <input type="checkbox" checked> iPhone 4
                                            </label>
                                        </div>
                                        <div style = "display:inline;">
                                            <label class="checkbox">
                                                <input type="checkbox" checked> Samsung Galaxy S4
                                            </label>
                                            <label class="checkbox">
                                               <input type="checkbox" checked> Samsung Galaxy S3
                                            </label>
                                            <label class="checkbox">
                                                <input type="checkbox" checked> Samsung Galaxy S2
                                            </label>
                                            <label class="checkbox">
                                                <input type="checkbox" checked> Samsung Galaxy Note
                                            </label>
                                            <label class="checkbox">
                                                <input type="checkbox" checked> Samsung Galaxy Note 2
                                            </label>
                                        </div>
                                        <div style = "display:inline;">
                                            <label class="checkbox">
                                                <input type="checkbox" checked> HTC One
                                            </label>
                                            <label class="checkbox">
                                                <input type="checkbox" checked> HTC Droid
                                            </label>
                                            <label class="checkbox">
                                                <input type="checkbox" checked> Sony Lumia 720
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="span4">
                                <div class="row-fluid">
                                    <div class="span6">
                                        <label class="checkbox">
                                            <input type="checkbox" checked>Unlocked
                                        </label>
                                        <label class="checkbox">
                                            <input type="checkbox" checked>Rogers
                                        </label>
                                        <label class="checkbox">
                                            <input type="checkbox" checked>Telus
                                        </label>
                                        <label class="checkbox">
                                            <input type="checkbox" checked>Bell
                                        </label>
                                        <label class="checkbox">
                                            <input type="checkbox" checked>Verizon
                                        </label>
                                        <label class="checkbox">
                                            <input type="checkbox" checked>Fido
                                        </label>
                                        <label class="checkbox">
                                            <input type="checkbox" checked>Koodos
                                        </label>
                                        <label class="checkbox">
                                            <input type="checkbox" checked>Wind
                                        </label>
                                        <label class="checkbox">
                                            <input type="checkbox" checked>Mobility
                                        </label>
                                    </div>
                                    <div class="span6">
                                        <label class="checkbox">
                                            <input type="checkbox" checked>Black
                                        </label>
                                        <label class="checkbox">
                                            <input type="checkbox" checked>White
                                        </label>
                                        <label class="checkbox">
                                            <input type="checkbox" checked>Blue
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="span4">
                                <div class="row-fluid">
                                    <div class="span12">
                                        <label class="radio">
                                            <input type="radio" name="optionsRadios"> 10  Brand New Unwrapped
                                        </label>
                                        <label class="radio">
                                            <input type="radio" name="optionsRadios"> 9.5 300+ Days Warranty, Box, Accessories, Perfect
                                        </label>
                                        <label class="radio">
                                            <input type="radio" name="optionsRadios"> 9.0 200+ Days Warranty, Box, Accessories, Perfect
                                        </label>
                                        <label class="radio">
                                            <input type="radio" name="optionsRadios"> 8.5 100+ Days Warranty, Box, Accessories, Perfect
                                        </label>
                                        <label class="radio">
                                            <input type="radio" name="optionsRadios"> 8.0 Box, Accessories, Perfect
                                        </label>
                                        <label class="radio">
                                            <input type="radio" name="optionsRadios"> 7.5 Accessories, Perfect
                                        </label>
                                        <label class="radio">
                                            <input type="radio" name="optionsRadios"> 7.0 Perfect
                                        </label>
                                        <label class="radio">
                                            <input type="radio" name="optionsRadios"> 6.5 Unnoticable Scratches
                                        </label>
                                        <label class="radio">
                                            <input type="radio" name="optionsRadios"> 6.0 Paint Off, Corner Den, Scratches
                                        </label>
                                        <label class="radio">
                                            <input type="radio" name="optionsRadios" checked> 5.0 Major Crack, Irresponsive Button, Disfunctional Features
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
                <form id = "otherForm" style = "display:none;">
                    <fieldset>
                        <legend><a href="#" style="text-decoration:none;" onclick="otherFilter()">Other Filter</a></legend>
                        <div class="row-fluid">
                            <div class="span12">
                                <select>
                                  <option>Due In 12 Hours</option>
                                  <option>Due In 24 Hours</option>
                                  <option>Due In 36 Hours</option>
                                  <option>Due In 48 Hours</option>
                                  <option selected>Due In 60 Hours</option>
                                </select>
                                <label class="checkbox">
                                    <input type="checkbox">Posters Must Have Email
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox">Posters Must Have Phone Number
                                </label>
                            </div>
                        </div>
                    </fieldset>
                </form>

                <div id = "submitButton" style = "display:none;">
                    <br>
                    <button class="btn">Submit</button>
                </div>
            </div>
            <div class="actualContentTable">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th><a href="#"><i class="icon-search"></i></a></th>
                            <th><a href="#" style="text-decoration:none;" onclick="storeFilter()">Store</a></th>
                            <th><a href="#" style="text-decoration:none;" onclick="posterInfoFilter()">Poster Info</a></th>
                            <th><a href="#" style="text-decoration:none;" onclick="priceFilter()">Price</a></th>
                            <th><a href="#" style="text-decoration:none;" onclick="priceFilter()">Market</a></th>
                            <th><a href="#" style="text-decoration:none;" onclick="priceFilter()">Offers</a></th>
                            <th><a href="#" style="text-decoration:none;" onclick="otherFilter()">Due Date</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td><img src="logos/logo.png" height="42" width="42"></td>
                            <td>iPhone 5 - Rogers - Black - 10/10 - 3 Months Old - 2 Left</td>
                            <td>$500</td>
                            <td>$450</td>
                            <td>$470(2 Offers)</td>
                            <td>10:30, 07/13/2013</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><img src="logos/logo2.png" height="42" width="42"></td>
                            <td>iPhone 5 - 10/10 - Rogers - Black - 3 Months Old - 2 Left</td>
                            <td>$500</td>
                            <td>$450</td>
                            <td>$430(4 Offers)</td>
                            <td>15:30, 07/13/2013</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><img src="logos/logo3.png" height="42" width="42"></td>
                            <td>iPhone 5 - 10/10 - Rogers - Black - 3 Months Old - 2 Left</td>
                            <td>$500</td>
                            <td>$450</td>
                            <td>$400(Base Offer)</td>
                            <td>20:30, 07/13/2013</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><img src="logos/logo4.png" height="42" width="42"></td>
                            <td>iPhone 5 - 10/10 - Rogers - Black - 3 Months Old - 2 Left</td>
                            <td>$500</td>
                            <td>$450</td>
                            <td>$400(Base Offer)</td>
                            <td>20:30, 07/13/2013</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><img src="logos/logo5.png" height="42" width="42"></td>
                            <td>iPhone 5 - 10/10 - Rogers - Black - 3 Months Old - 2 Left</td>
                            <td>$500</td>
                            <td>$450</td>
                            <td>$400(Base Offer)</td>
                            <td>20:30, 07/13/2013</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><img src="logos/logo6.png" height="42" width="42"></td>
                            <td>iPhone 5 - 10/10 - Rogers - Black - 3 Months Old - 2 Left</td>
                            <td>$500</td>
                            <td>$450</td>
                            <td>$400(Base Offer)</td>
                            <td>20:30, 07/13/2013</td>
                        </tr>
    					<tr>
                            <td></td>
                            <td><img src="logos/logo7.png" height="42" width="42"></td>
                            <td>iPhone 5 - 10/10 - Rogers - Black - 3 Months Old - 2 Left</td>
                            <td>$500</td>
                            <td>$450</td>
                            <td>$400(Base Offer)</td>
                            <td>20:30, 07/13/2013</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><img src="logos/logo8.png" height="42" width="42"></td>
                            <td>iPhone 5 - Rogers - Black - 10/10 - 3 Months Old - 2 Left</td>
                            <td>$500</td>
                            <td>$450</td>
                            <td>$470(2 Offers)</td>
                            <td>10:30, 07/13/2013</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><img src="logos/logo9.png" height="42" width="42"></td>
                            <td>iPhone 5 - 10/10 - Rogers - Black - 3 Months Old - 2 Left</td>
                            <td>$500</td>
                            <td>$450</td>
                            <td>$430(4 Offers)</td>
                            <td>15:30, 07/13/2013</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><img src="logos/logo10.png" height="42" width="42"></td>
                            <td>iPhone 5 - 10/10 - Rogers - Black - 3 Months Old - 2 Left</td>
                            <td>$500</td>
                            <td>$450</td>
                            <td>$400(Base Offer)</td>
                            <td>20:30, 07/13/2013</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><img src="logos/logo11.png" height="42" width="42"></td>
                            <td>iPhone 5 - 10/10 - Rogers - Black - 3 Months Old - 2 Left</td>
                            <td>$500</td>
                            <td>$450</td>
                            <td>$400(Base Offer)</td>
                            <td>20:30, 07/13/2013</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><img src="logos/logo12.png" height="42" width="42"></td>
                            <td>iPhone 5 - 10/10 - Rogers - Black - 3 Months Old - 2 Left</td>
                            <td>$500</td>
                            <td>$450</td>
                            <td>$400(Base Offer)</td>
                            <td>20:30, 07/13/2013</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><img src="logos/logo13.png" height="42" width="42"></td>
                            <td>iPhone 5 - 10/10 - Rogers - Black - 3 Months Old - 2 Left</td>
                            <td>$500</td>
                            <td>$450</td>
                            <td>$400(Base Offer)</td>
                            <td>20:30, 07/13/2013</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><img src="logos/logo14.png" height="42" width="42"></td>
                            <td>iPhone 5 - 10/10 - Rogers - Black - 3 Months Old - 2 Left</td>
                            <td>$500</td>
                            <td>$450</td>
                            <td>$400(Base Offer)</td>
                            <td>20:30, 07/13/2013</td>
                        </tr>
                        
                    </tbody>
                </table>
    	    </div>
        </div>
    <div>
        <script type="text/javascript" src="js/graphChanger.js"></script>
        <script type="text/javascript" src="js/filter.js"></script>
        <script type="text/javascript" src="js/otherEffect.js"></script>
        <script src="bootstrap/others/jquery.js"></script>
        <script type="text/javascript" src="js/barGraph.js"></script>
        <script type="text/javascript" src="js/lineGraph.js"></script>
        <script src="js/highcharts.js"></script>
        <script src="js/exporting.js"></script>
        <script src="bootstrap/others/bootstrap-transition.js"></script>
        <script src="bootstrap/others/bootstrap-alert.js"></script>
        <script src="bootstrap/others/bootstrap-modal.js"></script>
        <script src="bootstrap/others/bootstrap-dropdown.js"></script>
        <script src="bootstrap/others/bootstrap-scrollspy.js"></script>
        <script src="bootstrap/others/bootstrap-tab.js"></script>
        <script src="bootstrap/others/bootstrap-tooltip.js"></script>
        <script src="bootstrap/others/bootstrap-popover.js"></script>
        <script src="bootstrap/others/bootstrap-button.js"></script>
        <script src="bootstrap/others/bootstrap-collapse.js"></script>
        <script src="bootstrap/others/bootstrap-carousel.js"></script>
        <script src="bootstrap/others/bootstrap-typeahead.js"></script>
        <script src="bootstrap/others/bootstrap-affix.js"></script>
    </div>
  </body>
</html>
