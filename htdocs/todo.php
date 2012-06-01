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

      <ul>
        <li>Convert code to SDL-1.3/2.0.  The next major revision of SDL hasn't
        been released yet, but I'm already in the process of working with
        beta versions.  The main reason for this change is to have hardware-
        accelerated Direct3D support in Windows (which currently uses
        OpenGL, and isn't as fast as it is on other systems).  As well, I'll
        no longer have to maintain separate software and OpenGL renderers
        within Stella; SDL will handle it all behind the scenes.</li>

        <li>Improve Blargg TV filters.  In particular, implement better 'phosphor'
        emulation and integrate with Blargg filtering.</li>

        <li>Add support for remaining esoteric controllers (KidVid and Lightgun),
        and improve CompuMate emulation (accessing standalone cassette player).</li>

        <li>Add more debugger features, improve graphics access tracking, improve
        GUI, etc.</li>

        <li>Fix final remaining bugs in the TIA emulation.</li>

        <li>Add rewind support to the entire emulation, not just in the debugger.</li>

        <li>Look into adding movie recording or net play.</li>

        <li>Probably a thousand other things that I've forgotten.</li>
      </ul>

<!--
      <?php
          $a=file_get_contents('http://minbar.org/stella-todo.html');
          if(empty($a))
              $a = "<ul><li>No items at this time</li></ul>";
          echo $a;
      ?>
-->
      <p>As always, if you feel you can contribute to this list in any way (either with suggestions
      or actual implementation), please <a href="mailto:stephena@users.sourceforge.net">contact me by email</a>.</p>

			</div>
			<div class="footer"><?php include("footer.php"); ?></div>
		</div>
		<div class="leftcolumn"><?php include("menu.html"); ?></div>
	</body>
</html>
