<?php include("inc/head.php") ?>
<!-- Easy access for descriptive body classes -->
<body>
<?php include("inc/page-top.php") ?>
<div id="page">
	<article id="main" role="main">
	
<div class="tabs">        <h2 class="element-invisible">Primary tabs</h2><ul class="tabs primary"><li class="active"><a class="active" href="#">View<span class="element-invisible">(active tab)</span></a></li>
<li><a href="#">Edit</a></li>
</ul>      </div>

		<p>Welcome to the Style Guide for this project. Below are the most common web page elements that will be prevalent across the site. These styles are important to refine as they will be replicated site-wide.</p>
		<hr />
		<h1>Header 1</h1>
		<h2>Header 2</h2>
		<h3>Header 3</h3>
		<h4>Header 4</h4>
		<h5>Header 5</h5>
		<h6>Header 6</h6>
		<hr />
		<ul>
			<li>An</li>
			<li>Unordered</li>
			<li>List</li>
		</ul>
		<ol>
			<li>An</li>
			<li>Ordered</li>
			<li>List</li>
		</ol>
		<hr />
		<p>Some <strong>bold text</strong> &amp; some <em>italicized text</em> (in a paragraph).</p>
		<p>Here is your <a href="#">standard link</a> (don't forget to hover over it) and this is a link you've probably visited: <a href="http://google.com" target="_blank" class="external">Google</a>.</p>
		<p>Here's some <span class="small">small text</span>.</p>
		<p>Here's some <span class="large">large text</span>.</p>
		<hr />
		<h3>A quote:</h3>
		<blockquote>"Designing a webpage layout involves taking diverse objects and arranging them in an attractive, logical, and functional manner."</blockquote>
		<hr />
		<h3>A form:</h3>
		<form name="form2" method="post" action="submit.php"> 
		  <input type="text" name="textfield2" value="This is a text field" size="30"><br>
		  <input type="checkbox" name="checkbox1" value="checkbox">A checkbox.<br>
		  <input type="checkbox" name="checkbox2" value="checkbox">Another checkbox.<br>
		  <input type="radio" name="radiobutton" value="radiobutton">A radio button.<br>
		  <input type="radio" name="radiobutton" value="radiobutton">Another radio button.<br>
		  <select name="select2">
		    <option>List item 1</option>
		    <option>List item 2</option>
		    <option>List item 3</option>
		    <option>List item 4</option>
		    <option>List item 5</option>
		  </select>A select list.<br>
		  <input type="button" name="myButton2" value="Submit">A submit button.
		</form>	
		<hr />	
		<h3>3 paragraphs:</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<hr />
		<p class="small">Style Guide v1.0. Last updated: Oct 28, 2010.</p>
	</article>
	<aside id="sidebar">
		<?php include("inc/sidebar.php") ?>
	</aside>
</div>
<?php include("inc/page-btm.php") ?>