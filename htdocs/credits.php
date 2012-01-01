<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>Stella: &quot;A Multi-Platform Atari 2600 VCS Emulator&quot;</title>
		<link href="cssscreen.css" rel="stylesheet" media="screen">
		<link href="cssprint.css" rel="stylesheet" media="print">
	</head>
	<body id="credits">
		<div class="rightcolumn">
			<div class="header"><?php include("header.php"); ?></div>
			<div class="content">

      <p>Many people have helped in some capacity with Stella development over the years.
      Some provided technical help while others have offered suggestions and praise,
      or donated hardware to help the project.  The Stella Team is grateful for all the
      help and support it has received over the years.  The following is a (likely
      incomplete) list of the people who have played a part in bringing Stella to you:

  <p><table class="shaded_content" BORDER=0 CELLPADDING=6 WIDTH="100%">
    <tr>
      <th>Ant<br>(<a href="http://aqfl.net">http://aqfl.net</a>)</td>
      <td>Provided much feedback and testing which eventually led to a fix
      for the infamous ATI OpenGL 'red screen' issue</td>
    </tr>

    <tr>
      <th>Stephen&nbsp;Anthony<br>(<a href="http://minbar.org">http://minbar.org</a>)</th>
      <td>Ported Stella 1.1 to SDL.  Added extra command line options to X11/SDL
      versions.  Added INI file support, faster startup, snapshot support,
      and pause functionality to core.  Converted Stella 1.1 manual to HTML.
      Ported codebase to SDL for Windows/MacOSX.  Added OpenGL support and
      Stelladaptor/2600-daptor support. Current maintainer for the Linux, MacOSX and Windows
      versions.</td>
    </tr>

    <tr>
      <th>David&nbsp;Aspell</td>
      <td>Ported release 0.7 of Stella to Java</td>
    </tr>

    <tr>
      <th>Christopher&nbsp;Bennett</td>
      <td>Helped discover a Superchanger emulation bug in release 1.0 of Stella</td>
    </tr>

    <tr>
      <th>Alexander&nbsp;Bilstein</td>
      <td>Provided "A Brief History of the Atari 2600" for this manual</td>
    </tr>

    <tr>
      <th>Ian&nbsp;Bogost and the Georgia&nbsp;Tech&nbsp;Atari&nbsp;Team<br>
      (<a href="http://www.bogost.com/games/a_television_simulator.shtml">CRT Simulation Project</a>)</td>
      <td>Contributed code for the 'CRT simulation' OpenGL filters.  The Winter 2009
      team members are Edward Booth, Michael Cook, Justin Dobbs, William Rowland
      and Prince Yang.<br>Also contributed <a href="http://slack.net/~ant/libs/ntsc.html">Blargg filtering</a>
      code, a version of which will eventually be integrated into Stella.
      </td>
    </tr>

    <tr>
      <th>Dan&nbsp;Boris</td>
      <td>Provided technical information on the Supercharger</td>
    </tr>

    <tr>
      <th>"Uncle"&nbsp;Carmine<br>
      (<a href="http://www.carmine.com">http://www.carmine.com</a>)</td>
      <td>Generously donated several 2600 games and manuals to help with development</td>
    </tr>

    <tr>
      <th>Piero&nbsp;Cavina</td>
      <td>Allowed "Oystron" to be included in the Stella distribution</td>
    </tr>

    <tr>
      <th>Bob&nbsp;Colbert</td>
      <td>Allowed "Okie Dokie" to be included in the Stella distribution</td>
    </tr>

    <tr>
      <th>Joe&nbsp;D'Andrea</td>
      <td>Author of the IRIX port of Stella until release 1.2</td>
    </tr>

    <tr>
      <th>Renato&nbsp;Ferreira</td>
      <td>Provided code to support private colormaps under Unix</td>
    </tr>

    <tr>
      <th>Ron&nbsp;Fries</td>
      <td>Author of the awesome TIA Sound library</td>
    </tr>

    <tr>
      <th>Aaron&nbsp;Giles</td>
      <td>Author of the Power Macintosh version of Stella until release 1.1</td>
    </tr>

    <tr>
      <th>Mark&nbsp;Grebe<br>
      (<a href="http://www.atarimac.com">http://www.atarimac.com</a>)</td>
      <td>Author of the Macintosh OSX version of Stella from releases
      1.4 to 2.4; helped with Stelladaptor support</td>
    </tr>

    <tr>
      <th>Goldenegg (on AtariAge)</td>
      <td>Generously donated a monetary contribution, and provided feedback/testing
      for OSX versions</td>
    </tr>

    <tr>
      <th>Tom&nbsp;Hafner<br>
      (<a href="http://2600-daptor.com">http://2600-daptor.com</a>)</td>
      <td>Generously donated a 2600-daptor device and sample code to help with
      development</td>
    </tr>

    <tr>
      <th>Mark&nbsp;Hahn</td>
      <td>Allowed "Elk Attack" to be included in the Stella distribution and
      provided help with the TIA HMOVE blank bug</td>
    </tr>

    <tr>
      <th>Alex&nbsp;Herbert</td>
      <td>Provided much information on AtariVox and SaveKey functionality</td>
    </tr>

    <tr>
      <th>Kevin&nbsp;Horton</td>
      <td>Author of the definitive Atari 2600 bank-switching document</td>
    </tr>

    <tr>
      <th>Richard&nbsp;Hutchinson</td>
      <td>Generously donated an AtariVox USB adaptor to help with AVox development</td>
    </tr>

    <tr>
      <th>Thomas&nbsp;Jentzsch</td>
      <td>Provided updated NTSC palette and many ideas</td>
    </tr>

    <tr>
      <th>Andrew&nbsp;Kator<br>(<a href="http://www.katorlegaz.com">http://www.katorlegaz.com</a>)</td>
      <td>Provided PHP and CSS code for a major update to the Stella website</td>
    </tr>

    <tr>
      <th>Richard&nbsp;Kennehan</td>
      <td>Generously donated Atari light-sixer, various controllers, and several games to help
        in testing ROMs on a real system</td>
    </tr>

    <tr>
      <th>Nick&nbsp;Montfort and Ian&nbsp;Bogost<br>
      (<a href="http://mitpress.mit.edu/catalog/item/default.asp?ttype=2&tid=11696">Racing the Beam</a>)</td>
      <td>Specifically mentioned Stella in their book</td>
    </tr>

    <tr>
      <th>Kostas&nbsp;Nakos</td>
      <td>Author/maintainer of the WinCE version of Stella from releases 2.0
      to  2.3.5</td>
    </tr>

    <tr>
      <th>Erik&nbsp;Kovach</td>
      <td>Author of the property file for release 0.7, 1.0, 1.1, and 1.2 of Stella</td>
    </tr>

    <tr>
      <th>Daniel&nbsp;Marks</td>
      <td>Provided improved keyboard joystick support for Stella release 0.1</td>
    </tr>

    <tr>
      <th>James&nbsp;Mcclain</td>
      <td>Provided patches for the 1.2 release to get Stella to compile with GCC 3.0</td>
    </tr>

    <tr>
      <th>David&nbsp;McEwen</td>
      <td>Author of the Acorn version of Stella</td>
    </tr>

    <tr>
      <th>Jeff&nbsp;Miller</td>
      <td>Author of the Windows version of Stella until release 1.2</td>
    </tr>

    <tr>
      <th>Dan&nbsp;Mowczan</td>
      <td>Provided a Supercharger to help with Stella's development</td>
    </tr>

    <tr>
      <th>Jack&nbsp;Nutting</td>
      <td>Author of the OpenStep version of Stella</td>
    </tr>

    <tr>
      <th>Omegamatrix</td>
      <td>Provided test ROMs which led to more accurate emulation for SWCHx/SWxCNT
      and RIOT behaviour, and for 'illegal' TIA reads</td>
    </tr>

    <tr>
      <th>John&nbsp;Payson</td>
      <td>Provided EEPROM emulation code for AtariVox and SaveKey support</td>
    </tr>

    <tr>
      <th>Wilbert&nbsp;Pol</td>
      <td>Provided many ideas and some sample algorithms for greatly improving
      'illegal HMOVE' emulation</td>
    </tr>

    <tr>
      <th>Manuel&nbsp;Polik</td>
      <td>Author of the Windows version of Stella (Cyberstella) starting with the 1.2
      release until its retirement</td>
    </tr>

    <tr>
      <th>Jim&nbsp;Pragit</td>
      <td>Author of the "Game Menu" emulator game shell</td>
    </tr>

    <tr>
      <th>James&nbsp;Randall (aka&nbsp;'toymailman')</td>
      <td>Generously donated a 7800 console and several games and manuals to help
      with development</td>
    </tr>

    <tr>
      <th>Fred X. Quimby (aka 'batari')<br>(<a href="http://bataribasic.com/">Batari Basic</a>)</td>
      <td>Generously donated several Harmony Cartridges to help with development</td>
    </tr>

    <tr>
      <th>RomHunter<br>(<a href="http://www.atarimania.com/atari-vcs-2600.html">RomHunter ROMs</a>)</td>
      <td>Provides an updated database of ROM information on a regular basis</td>
    </tr>

    <tr>
      <th>John&nbsp;Saeger</td>
      <td>Participated in a helpful discussion on understanding the TIA's
      RESPx multi-sprite trick</td>
    </tr>

    <tr>
      <th>Chris&nbsp;Salomon</td>
      <td>Provided information and code to help implement Supercharger support</td>
    </tr>

    <tr>
      <th>Glenn&nbsp;Saunders</td>
      <td>Generously donated a Supercharger to help with Stella's development</td>
    </tr>

    <tr>
      <th>Jason&nbsp;Scott</td>
      <td>Organizer of the property file archive for early versions of
      Stella</td>
    </tr>

    <tr>
      <th>Seagtgruff</td>
      <td>Provided test ROMs which finally fixed all remaining issues with
      ADC/SBC opcode decimal mode emulation</td>
    </tr>

    <tr>
      <th>David&nbsp;Shaw</td>
      <td>Provided make targets for the BSDI platform</td>
    </tr>

    <tr>
      <th>Raul&nbsp;Silva</td>
      <td>Helped with design and graphics for an early version of the Stella
      web site</td>
    </tr>

    <tr>
      <th>Chris&nbsp;Snell</td>
      <td>Maintained a mirror of the Stella FTP site</td>
    </tr>

    <tr>
      <th>Darrell&nbsp;Spice&nbsp;Jr.</td>
      <td>Author of the OS/2 version of Stella</td>
    </tr>

    <tr>
      <th>John&nbsp;Stiles</td>
      <td>Maintained the Macintosh version of Stella until release 1.2</td>
    </tr>

    <tr>
      <th>Eckhard&nbsp;Stolberg</td>
      <td>Provided a description of the TIA bug that produces the star field
      effect in Cosmic Ark, provided the PAL television palette, and
      participated in a helpful discussion on understanding the TIA's RESPx
      multi-sprite trick.  Provided the Commavid, Megaboy, 4A50 and X07 support
      for Stella as well as some improved Supercharger BIOS code.</td>
    </tr>

    <tr>
      <th>Matthew&nbsp;Stroup</td>
      <td>Author of the Amiga version of Stella</td>
    </tr>

    <tr>
      <th>Joel&nbsp;Sutton</td>
      <td>Author of the FreeBSD version of Stella</td>
    </tr>

    <tr>
      <th>Greg&nbsp;Troutman</td>
      <td>Allowed "This Planet Sucks" to be included in the Stella distribution</td>
    </tr>

    <tr>
      <th>Robert&nbsp;Tuccitto</td>
      <td>Provided valuable bugtesting and feedback which finally helped in fixing
      a long-standing lockup which occurred after Stella has been running for
      71 minutes.</td>
    </tr>

    <tr>
      <th>Curt&nbsp;Vendel</td>
      <td>Provided schematics of the TIA which are being used to improve the
      TIA emulation.</td>
    </tr>

    <tr>
      <th>David&nbsp;Voswinkel</td>
      <td>Maintainer of the PSP version of Stella starting with the 2.0 release
      until release 2.2</td>
    </tr>

    <tr>
      <th>Brian&nbsp;Watson</td>
      <td>Helped with getting the illegal CPU instruction support working with Stella.
      Brian also submitted a number of other changes, such as debugger support, which
      have been finally integrated into the 2.0 release of Stella.  Without
      a doubt, there would be no debugger support in Stella if not for the
      tireless work of Brian.</td>
    </tr>

    <tr>
      <th>Keith&nbsp;Wilkins</td>
      <td>Maintained the DOS version of Stella until release 0.7</td>
    </tr>

    <tr>
      <th>Jeff&nbsp;Wisnia</td>
      <td>Provided technical data sheet for the 6532 RIOT chip</td>
    </tr>

    <tr>
      <th>Albert&nbsp;Yarusso<br>
      (<a href="http://atariage.com">http://atariage.com</a>)</td>
      <td>Provided helpful feedback for the MacOSX port, and generously
        donated an AtariVox device to help with development</td>
    </tr>

    <tr>
      <th>Alex&nbsp;Zaballa</td>
      <td>Maintainer of the GP2X version of Stella from releases 2.1 to 2.3.5</td>
    </tr>

  </table></p>

			</div>
			<div class="footer"><?php include("footer.php"); ?></div>
		</div>
		<div class="leftcolumn"><?php include("menu.html"); ?></div>
	</body>
</html>
