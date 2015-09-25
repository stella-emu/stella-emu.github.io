<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>Stella: &quot;A Multi-Platform Atari 2600 VCS Emulator&quot;</title>
		<link href="cssscreen.css" rel="stylesheet" media="screen">
		<link href="cssprint.css" rel="stylesheet" media="print">
	</head>
	<body id="development">
		<div class="rightcolumn">
			<div class="header"><?php include("header.php"); ?></div>
			<div class="content">

<!---------------------------------------------------------------->
<p>The Stella project always welcomes new developers, either on a full-time basis
or just to fix your favorite bug.  Feel free to	email <a href="mailto:stephena@users.sourceforge.net">Stephen Anthony</a>
if you wish to contribute in any way to the Stella project.</p>

<p>The first major hurdle for new developers is setting up a build environment, checking
out the code, and in general actually compiling the project for the first time.  The
following is a description of how to do this for the three major platforms.

<h3><u>Linux/UNIX</u></h3>
<ol>

  <li><p>Getting the required tools:
  <p>Stella needs g++ 4.8 or Clang++ 3.3 (with up-to-date C++11 support), make and <a href="http://www.libsdl.org/download-2.0.php">SDL2</a>
  development libraries installed.  ZLib and PNG libraries are optional; Stella will use built-in versions if none
  are installed system-wide. These packages are likely available through your distribution repository.
  Consult your specific distribution for an explanation of installing new packages.
  <p>Other packages may be needed depending on the distribution you use.  The best thing
  to do is try the compile, note any missing packages, and then install them through your
  distribution repository.

  <br/>

  <li><p>Downloading the source code:
  <p>The source for the latest release can always be found under "Stable Releases" on the
  main webpage.  However, you'd be better off working with the most recent code, located
  in a Subversion repository.  The following command will <I>checkout</I> this code:
  <div class="con">svn co https://svn.code.sf.net/p/stella/code/trunk stella</div>
  <p>This will checkout from trunk for local modifications.  However, you won't be able to
  commit changes unless you've been added to the Stella project.  In those cases, it's best
  to use the following command to generate a <I>diff</I> file, which can be sent to the
  email address above:
  <div class="con">svn diff > mychanges.diff</div>
  <p>Before you start modifying code, it's best to <I>update</I> your local copy of the source code (so
  that you can see changes that others have made).  To do this, use the following command:
  <div class="con">svn update</div>
  <p><B>Note: </B>You may be more familiar with graphical SVN clients; these will work fine as well.
  </li>

  <br/>

  <li><p>Compiling the source code:
  <p><ol>
    <li>Generic build &mdash; When testing changes or creating personal builds, it's best to use
      the generic configure/make cycle:
    <p><div class="con">cd 'location of stella source code'
./configure (--help for list of options)
make
make install (if you want to install locally)</div>
    </li>

    <li><p>Debian-based distributions: 
    <p><div class="con">cd 'location of stella source code'
dpkg-buildpackage</div>
    </li>

    <li><p>RPM-based distributions: 
    <p><div class="con">cd 'location of stella source code'/src/unix
rpmbuild -ba stella.spec</div>
    </li>
    </ol>
  </li>

</ol>

<br/>
<h3><u>Macintosh OSX</u></h3>
<ol>

  <li><p>Getting the required tools:
  <p>Stella needs Xcode 5/6 for compilation.  You will also need the SDL2 development libraries,
  located at <a href="http://www.libsdl.org/download-2.0.php">libsdl.org</a>.  You will need
  to download <B>SDL2-2.0.3.dmg</B> (or newer, if available).
  
  <br/>

  <li><p>Downloading the source code:
  <p>The source for the latest release can always be found under "Stable Releases" on the
  main webpage.  However, you'd be better off working with the most recent code, located
  in a Subversion repository.  The following command will <I>checkout</I> this code:
  <div class="con">svn co https://svn.code.sf.net/p/stella/code/trunk stella</div>
  <p>This will checkout from trunk for local modifications.  However, you won't be able to
  commit changes unless you've been added to the Stella project.  In those cases, it's best
  to use the following command to generate a <I>diff</I> file, which can be sent to the
  email address above:
  <div class="con">svn diff > mychanges.diff</div>
  <p>Before you start modifying code, it's best to <I>update</I> your local copy of the source code (so
  that you can see changes that others have made).  To do this, use the following command:
  <div class="con">svn update</div>
  <p><B>Note: </B>You may be more familiar with graphical SVN clients; these will work fine as well.
  </li>

  <br/>

  <li><p>Compiling the source code:
  <p><ol>
    <li>The Xcode project is located at <I>src/macosx/stella.xcodeproj</I> and is for 64-bit Intel-only
    machines running 10.7 or greater.  There is currently no support for older OSX versions or for PPC builds.
    </li>

    <li><p>Place the <I>SDL.framework</I> bundle (located in the <B>SDL2-2.0.3.dmg</B> file
    you downloaded earlier) into the <I>/Library/Frameworks</I> directory.
    </li>

    <li><p>Open the project file using Xcode 5/6.</li>

    <li><p>Build the project by pressing Cmd-b, and run by pressing Cmd-r.</li>

    <li><p><B>Optional:</B> creating a DMG for release:
    <p><div class="con">cd 'location of stella source code'/src/macosx
./Create_build.sh 'version #'</div>
    <p>This will create a DMG installation archive on your desktop.
    <p>The Stella.app bundle can be copied to your <I>Applications</I> folder, or wherever you
    like on your system.
    </li>
    </ol>
  </li>

</ol>

<br/>
<h3><u>Windows XP_SP3/Vista/7/8/10</u></h3>
<ol>

  <li><p>Getting the required tools:
  <p>Stella needs Visual Studio C++ 2013.  Main development is done using 2013
  Professional, but the (free) Express versions are also known to work fine.  You will also need
  the SDL2 development libraries, located at <a href="http://www.libsdl.org/download-2.0.php">libsdl.org</a>.
  <p><B>Note:</B> It may be possible to build Stella using MinGW/Msys, but this appoach hasn't been
  supported since Stella version 3.0.  You're free to try this option, but it isn't supported,
  and I can't help with any problems you may encounter.  If you manage to get it working,
  the build instructions will be the same as Linux/UNIX.
  <p>You will also need a Subversion client: I suggest <a href="http://tortoisesvn.net">
  TortoiseSVN</a>.

  <br/>

  <li><p>Downloading the source code:
  <p>The source for the latest release can always be found under "Stable Releases" on the
  main webpage.  However, you'd be better off working with the most recent code, located
  in a Subversion repository.  To <I>checkout</I> this code, you will need to install TortoiseSVN,
  which you downloaded above.
  <p>Once TortoiseSVN is installed, you should right-click somewhere in Windows Explorer where
  you wish to download the files.  This will produce a window as follows:
  <p><blockquote><img src="images/svn_co.png"/></blockquote>
  <p>The <I>URL of repository</I> must be the same, but the <I>Checkout directory</I> will be
  specific to your system.
  <p>This will checkout from trunk for local modifications.  However, you won't be able to
  commit changes unless you've been added to the Stella project.  In those cases, it's best
  to create diff file, which can be sent to the email address above.  To do this, right-click
  on the local repository directory and select <B>TortoiseSVN -> Create patch...</B>.
  <p>Before you start modifying code, it's best to <I>update</I> your local copy of the source code (so
  that you can see changes that others have made).  To do this, right-click
  on the local repository directory and select <B>SVN Update</B>.
  </li>

  <li><p>Compiling the source code:
  <p>Before compiling the code for the first time, Visual Studio must be set up as follows:
  <ol>
    <li><p>Open the Visual Studio 2013 project, located in REPO_DIR\src\windows, as in the following:
      <p><blockquote><img src="images/vs_open.png"/></blockquote>
    <li><p>Unzip the <B>SDL2-devel-2.0.3-VC.zip</B> file you downloaded above somewhere on your system.
      Make note of where these files are located.
    <li><p>Go to "PROJECT -> Stella Properties" menu (or click Alt-F7); this will create a window
      as follows: <p><blockquote><img src="images/vs_props.png"/></blockquote>
    <li><p>Notice the bolded text <B>"C:\Users\stephen\Source\sdl\include"</B> and
      <B>"C:\Users\stephen\Source\sdl\lib\x64"</B>?  You will need to add locations specific to your
      system which points to the SDL files.  These locations are to directories within the
      SDL2 zip archive, which you unzipped earlier.
    <li><p>For building and running the 32-bit version you need the path to point at <B>lib\x86</B> in
      <u>both</u> the <I>Debug</I> and <I>Release</I> versions.
    <li><p>For building and running the 64-bit version you need the path to point at <B>lib\x64</B> in
      <u>both</u> the <I>Debug</I> and <I>Release</I> versions.
    <li><p>Build the project; it should run to completion, perhaps with some warnings.
    <li><p>If you try to run at this point, it will probably complain that it can't find
      SDL2.dll.  Manually copy this file from SDL2 zip archive to one of the following locations:
      <blockquote><pre>
For the 32-bit version, you have to copy <B>lib\x86\SDL2.dll</B> into the <I>Release</I> and <I>Debug</I> folders.
For the 64-bit version, you have to copy <B>lib\x64\SDL2.dll</B> into the <I>x64\Release</I> and <I>x64\Debug</I> folders.
</pre></blockquote>
    <li>You may also get an error that the libraries <B>msvcp120.dll</B> and/or <B>msvcr120.dll</B> are not available.
      If so, you will need to download them from
      <a href="http://www.microsoft.com/en-ca/download/details.aspx?id=40784">Visual C++ Redistributable Packages for Visual Studio 2013</a>
    </li>
    </ol>
  </li>


</ol>



<!---------------------------------------------------------------->

			</div>
			<div class="footer"><?php include("footer.php"); ?></div>
		</div>
		<div class="leftcolumn"><?php include("menu.html"); ?></div>
	</body>
</html>
