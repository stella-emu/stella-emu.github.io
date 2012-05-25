<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>Stella: &quot;A Multi-Platform Atari 2600 VCS Emulator&quot;</title>
		<link href="cssscreen.css" rel="stylesheet" media="screen">
		<link href="cssprint.css" rel="stylesheet" media="print">
	</head>
	<body id="todo">
		<div class="rightcolumn">
			<div class="header"><?php include("header.php"); ?></div>
			<div class="content">

      <p>A 'TODO' list is programmer-speak for a list of things that we need 'to do'.  Get it :)
      This list will probably never be empty, as there's always <i>something</i> left to do.
      A wise programmer once said; "projects are never finished, just abandoned'.  So the TODO list
      tends have new ideas added to it faster than old ones are removed.  With that in mind, there
      are several outstanding requests that come up from time to time, which I'd like to get to
      eventually.  Some of them are as follows:</p>

      <?php
          $a=file_get_contents('http://minbar.org/stella-todo.html');
          if(empty($a))
              $a = "<ul><li>No items at this time</li></ul>";
          echo $a;
      ?>

      <p>As always, if you feel you can contribute to this list in any way (either with suggestions
      or actual implementation), please <a href="mailto:stephena@users.sourceforge.net">contact me by email</a>.</p>

			</div>
			<div class="footer"><?php include("footer.php"); ?></div>
		</div>
		<div class="leftcolumn"><?php include("menu.html"); ?></div>
	</body>
</html>
