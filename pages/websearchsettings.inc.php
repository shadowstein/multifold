<link rel="stylesheet" href="http://www.google.com/cse/style/look/default.css" type="text/css" />
<script src="http://www.google.com/jsapi?key=ABQIAAAAk02iUu2FLW849aQxi2x1vhSdPXbAgUUNnSlgExxkVOPsxGK4rhSm1L3i-eKadL3B1CCIiG-IuUIjYA" type="text/javascript"></script>    
<style type="text/css">
#searchResults .gsc-control { width :700px; }
.search-control { margin: 20px; }
</style>
<script lnguage='Javascript' type='text/javascript'>
//<![CDATA
// Load Search and Feed APIs
google.load("search", "1");
function OnLoad() {
var controlRoot = document.getElementById("searchResults");
// Create a search control
var searchControl = new GSearchControl();
searchControl.setLinkTarget(GSearch.LINK_TARGET_SELF);
searchControl.setResultSetSize(GSearch.LARGE_RESULTSET);

var searchFormElement = document.getElementById("searchControl");
var drawOptions = new GdrawOptions();
drawOptions.setSearchFormRoot(searchFormElement);
drawOptions.setDrawMode(GSearchControl.DRAW_MODE_TABBED);

// this is where you create your tabbed search results
// for every URL tab, you have to use the search address and the tab label
        // This Blog
      var searcher = new GwebSearch();
      searcher.setSiteRestriction("http://www.multifoldlinks.com/");
      searcher.setUserDefinedLabel("Multi-Fold Links");
      searchControl.addSearcher(searcher);

      // google also allow you to search the entire web
      searcher = new GwebSearch();
	  searcher.setUserDefinedLabel("Web");
      searchControl.addSearcher(searcher);

      // search all other blogs
      searcher = new GblogSearch();
      searcher.setUserDefinedLabel("All blogs");
      searchControl.addSearcher(searcher);

	  // draw it
	  searchControl.draw(controlRoot, drawOptions);
	  
	  <?php if(isset($_GET['q'])) { ?>
	  	searchControl.execute("<?=$_GET['q']?>");
	  <?php } else if ($_GET['q'] = "Multi-fold links") { ?>
	  	searchControl.execute("Multi-fold links");
	  <?php } ?>
		
	}
	google.setOnLoadCallback(OnLoad, true);
//]]>
</script>