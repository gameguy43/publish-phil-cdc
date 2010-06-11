<?php
if($_GET['rand']){
    require_once("sql.php");
    $id = rand(1, $max_id);
    header("Location: " . get_bloginfo('wpurl') . "?p=" . $id . "&from=rand");
    exit();

}

?>
<?php get_header(); ?>

	<div class="homepage" id="content-onecol">
<h2>A Project to Mirror, Cross-post, and Index the Images and Metadata in the Center for Disease Control's Public Health Image Library.</h2>


<p class="big_homepage_links">
<span>
<a href="<?php bloginfo('wpurl') ?>?rand=1">View a random image &raquo;</a>
</span>

<span>
<a href="<?php bloginfo('wpurl') ?>?p=1">Browse the database from the beginning &raquo;</a>
</span>
</p>

<p>
It is certainly true that the CDC PHIL images are already "released" in several important ways. Our project makes them more accessible and usable. 
</p>

<p>
Most of the images are in the public domain, which means that their consumption, alteration, and redistribution is not governed by copyright law. Additionally, all of the images and metadata are available for free download online. However, even with this degree of openness, several use cases for this media and metadata remain inhibited. 
</p>

<p>
The CDC PHIL website provides no option to download their entire library in one go. This means that, for example, there is no easy way for one to burn a copy of the CDC PHIL to deliver it to someone without a fast internet connection. The CDC PHIL also does not allow any sort of API access to all or part of the media and metadata in standardized, easily-parsable formats. This means that there is no easy way to feed the dataset in to custom software. For example, someone researching face recognition software might want to run all of the images through various face recognition algorithms in order to compare the results. Our project makes these uses possible.
</p>

<p>
The CDC PHIL site's metadata does not include the rel="license" metadata, so these images will not show up on an internet search filtered by permissions. We have added this.
</p>

<p>
And of course, despite the fact that these media and most of the metadata are accessible and in the public domain, if nobody is mirroring them then one party can still make them completely inaccessible, perhaps permanently. In this way, we also see this project as an exercise of our right to the public domain, and a declaration of its importance. Our goal is not to compete with or to publicly embarass the CDC or its PHIL project; rather, our goals is to add value to their media and data, and to demonstrate our enthusiasm about the public domain. We also think that our simplified browsing interface makes the images more aesthetically pleasing :)
</p>

<p>
This is a project of the Release Our Data team&mdash;a ragtag group of guerilla archivists and web scrapers who are interested in "releasing" data in every sense. We have no affiliation with the CDC or its PHIL project.
</p>

		<?php //get_search_form(); ?>

<p style="text-align: right">
<a href="http://github.com/sethwoodworth/collect-phil-cdc">Code base on GitHub &raquo;</a>
</p>
<p style="text-align: right">
<a href="http://releaseourdata.com">The Release Our Data Project &raquo;</a>
</p>

	</div>
	


<?php get_footer(); ?>
