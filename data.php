<head>
<link rel="stylesheet" href="ndp.css">
<?php include 'Climb.php';?>
</head>
<body>
<article>
<?php
	//listing
	//union
?>
<section>
	<h2>Search to see if they have an element in either or set or is an the intersection of elements</h2>
	<!-- Ok -->
	<p class="caution">pokemon <input id="union" onkeyup="union()" type="text" /></p>
	<p><?php
		foreach($jury_1[0] as $element)
		{
			print($element->Cash . " " . $element->title);
			print("<br>");
		}
	?></p>
</section>
<?php 
//intersection 
?>
<section>
	<h2>Search to see if they have an element in both sets</h2>
	<!-- Ok -->
		<p class="caution">pokemon <input id="intersection" onkeyup="intersection()" type="text" /></p>
		<p><?php
		foreach($jury_1[0] as $element)
		{
			print($element->Cash . " " . $element->title);
			print("<br>");
		}
	?></p>
	<p><?php
		foreach($jury_2[0] as $element)
		{
			print($element->Cash . " " . $element->title);
			print("<br>");
		}
	?></p>
</section>
</article>
<script type="text/javascript">
	function union() {
		let ok = document.getElementById("union").value;
	}
	function intersection() {
		let ok = document.getElementById("intersection").value;
	}
</script>
</body>