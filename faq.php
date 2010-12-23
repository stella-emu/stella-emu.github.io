<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>Stella: &quot;A Multi-Platform Atari 2600 VCS Emulator&quot;</title>
		<link href="cssscreen.css" rel="stylesheet" media="screen">
		<link href="cssprint.css" rel="stylesheet" media="print">
	</head>
	<body id="faq">
		<div class="rightcolumn">
			<div class="header"><?php include("header.php"); ?></div>
			<div class="content">

<!---------------------------------------------------------------->
<p>The following are a list of common questions that
seem to keep popping up on the support lists and on the AtariAge
forums (in no particular order):</p>

<h3>The are some graphical bugs in a game I'm playing, or the emulation seems to
be inaccurate in some way.</h3>
<p>The answer to this one should be obvious, but surprisingly enough, it isn't.
If you think you've found a bug in the application, <b>let us know about it</b>.
Perhaps it isn't a bug after all, but if it is, we can't fix it <b>unless we
know about it</b>. Free and open source software is a two-way street, and users
should report problems whenever they find them.  In return, developers are
usually happy to fix their programs, if possible.  But keep
in mind that reporting the bug doesn't guarantee an immediate fix; there
may be other issues that need to be fixed first.  But we can guarantee what
will happen if you don't report a bug, and the developer never finds out
about it - nothing.</p>

<br>

<h3>Stella crashes immediately after starting, or seems completely broken.</h3>
<p>My advice in this case (before reporting it as a bug) is to delete the
settings file, and restart the application.  The
settings file is stored in different places depending on the operating system
you're using:</p>
<ul>
  <li><b>Windows 2000/XP/Vista/7:</b>&nbsp;&nbsp;Open Windows Explorer and type
'%appdata%\stella' into the address bar. This will bring you to
the directory where Stella stores its settings.  Find and delete/rename
the file named 'stella.ini'.</li>
<br>
  <li><b>Mac OSX:</b>&nbsp;&nbsp;Open Finder, and navigate to your home directory, then
Library and finally Preferences.  Find and delete/rename the file
named 'net.sourceforge.Stella.plist'.</li>
<br>
  <li><b>Linux/UNIX:</b>&nbsp;&nbsp;Find and delete/rename the file named
'$HOME/.stella/stellarc'.</li>
</ul>
<p><b><u>Very Important:</u></b>&nbsp;&nbsp;Un-installing and re-installing
the application will have absolutely no effect on your settings file.
This is a commonly reported practice, but it is completely unnecessary.
In all but the rarest cases, there will be nothing wrong with the
application itself, so it doesn't need to be re-installed.</p>

<br>

<h3>I can't find instructions on how to accomplish a task, or the manual
is too long and I can't be bothered to read through it all.</h3>
<p>Stella is a complex program which has many goals.  It is meant to
be an easy-to-use emulator for those wishing to just jump in and play
a game, but it also comes with very complex developer options.  As the
saying goes: 'with great power comes great responsibility'.  There 
are many options to explain, and as such, the manual is necessarily
long.</p>
<p>That being said, recent versions of the manual are organized into
'Getting Started' and 'Advanced Configuration' sections, with many
subsections below those.  So don't be discouraged by the size of
the manual.  Most of the time, much of the manual can be ignored
completely.  And if all else fails, you can use the search function
in your web browser :)</p>

<br>

<h3>Where can I find some ROMs, and how do I start playing a game?</h3>
<p>This is mentioned near the very beginning of the manual.  The
premiere website for all things Atari-related is <a href="http://atariage.com">
AtariAge</a>.  As for how to start playing a game, I refer you to the
'Getting Started' section of the manual, as mentioned in a previous FAQ item.</p>

<br>

<h3>I've located some ROMs and can get them to start in Stella, but I don't
know how to actually start/play the game.</h3>
<p>There are several issues to consider.  First, some games need to be 'started'
with the Select or Reset button, while others may use the joystick fire button
instead.  These games start up in a sort of 'demo' mode and wait for you to
indicate that you are ready to play the game.  Now, which game requires which
button(s) to be pressed (if any) leads to the second issue ...</p>
<p>There were manuals included with most games sold for the Atari 2600.  These
manuals will explain in detail how to start the game, how to play it, etc., and
are available in the <a href="http://www.atariage.com/system_items.html?SystemID=2600&ItemTypeID=MANUAL">AtariAge manuals area</a>.
Explaining every single game out there is beyond the scope of the Stella
project.  In fact, most of us developers probably haven't even played every
single game out there.</p>

<br>

<h3>I can't seem to move around in a game, or I don't know what controllers
are being used with it.</h3>
<p>Most games use the standard joystick controllers.  Every game that Stella
knows about (in its internal database) includes information about the controller
type, so you normally would never need to set it manually.  Now, to see which
controller a game is using, you can either look at 'Game Properties' in the
user interface, or turn on 'ROM Info mode', which shows game snapshots and 
other useful information.  And of course, you could read the manual for the
particular game too.</p>
<p>OK, that's half the solution.  The other half is knowing how the controller
is 'mapped' to Stella (ie, which keyboard key, mouse button or gamepad
button/axis corresponds to which event on a real system).  For this, see the
various mappings in the manual.  The defaults mappings are usually fine, but
Stella is very configurable, and these mappings can be changed to your own preferences.  This is explained under 'Advanced Configuration' in the manual,
and is beyond the scope of this FAQ.</p>

<br>

<h3>I'm experiencing sound issues, and the emulation doesn't sound authentic
compared to a real system.</h3>
<p>Always make sure you try setting the sound 'fragment size' to 512 bytes
before reporting this as a bug.  In fact, try playing with the various
options under 'Audio Settings' to see if it makes any difference as well.</p>

<br>

<h3>I'm developing a new game or downloaded a homebrew ROM that uses a
custom controller, and I can't get Stella to recognize it.</h3>
<p>By default, Stella will use its internal database to determine what
controller type to use for a ROM.  Obviously, this won't work for new
ROMs that have been released since Stella was last updated.  In this
case, the default is to assume a joystick controller.</p>
<p>If you want something other than a joystick, then you'll have to
add custom properties for the ROM.  Go to Options -&gt; Game Properties
-&gt; Controller, and change to the desired type.  Then click 'OK'
and restart the ROM.  These settings are now saved, and need not be 
entered again.</p>
<p><b>Note to developers:</b> Each time you recompile your ROM, you're
essentially creating what Stella considers a new ROM image.  As such,
the game properties you set previously won't work, and will have to be
entered again.  If you're doing this often (in an edit-compile-test
situation), consider using commandline arguments to set the controller
type, which is much faster than navigating the UI.</p>

<br>

<h3>What options should I use to get the most authentic emulation
possible?</h3>
<p>In my experience, using OpenGL rendering mode with vertical sync
enabled will result in smooth graphical performance.  Of course, this
is only true if your system supports vertical sync, and in general is
only useful on monitors with a 60Hz refresh rate (all current LCDs).
Also, it looks much more authentic to use square rather than rectangular
pixels.  Of course, you can't change the pixel size on your monitor, but
you can simulate it with 'GL aspect ratio'.  I find a setting of 87-89
for NTSC mode looks the best.  Finally, there are some NTSC TV effects
that you might find interesting.  Overall, to get more authentic looking
emulation video-wise, you need to use OpenGL mode.  If your computer
doesn't properly support OpenGL, consider upgrading your video card
to one that does :)</p>
<p>In terms of sound, try setting the fragment size as small as possible
while not introducing any distortion.  The smaller the size, the more
accurate the audio 'resolution'.</p>
<p>In terms of controllers, consider using actual 2600 controllers.
Several options exist, such as the <a href="http://www.stelladaptor.com">
Stelladaptor</a> or <a href="http://www.legacyengineer.com/storefront">
USB joysticks</a>.</p>


<!---------------------------------------------------------------->

			</div>
			<div class="footer"><?php include("footer.php"); ?></div>
		</div>
		<div class="leftcolumn"><?php include("menu.html"); ?></div>
	</body>
</html>
