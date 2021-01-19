# phpub2twtxt

An php interface for publishing microblogposts to your selfhosted [twtxt.txt](https://github.com/buckket/twtxt)

## Setup and use

1. Upload the files to you webserver via ftp
	- index.html - the UI for the app
	- config.php - the backend that writes to you txt file
	- twtxt.txt

2. Edit config.php
	- add the location of you twtxt.txt file
	- you can place the file in and other folder that the files like "../twtxt.txt" to get it in the root of your URL
	- default: twtxt.txt
	
3. Navigate to www.yourdomain.net/phpub2twtxt/index.php in you web browser and start microblogging.

4. Tell the world to check out you awesome micro blog at www.yourdomain.net/twtxt.txt

5. If you want/need to edit or delete you posts then you need to log in via ftp and just edit your text file.

## WARNING!
**There is no build-in access control, so whoever know the URL of where you uploade these files will have the power to post as you to your twtxt.txt-file!!!!**
**Use of this software is totally at one's own risk!!!**

## Issues

* Security / login
	- [ ] using access restriction to the folder via cPanel
	- [ ] integrat it into yellow cms
	- [ ] using some (other) .htaccess or .htpasswd magic

* Missing line break depending on how the file was left the last time
	- [x] add the line break as the first thing
	- [ ] check for line breaks at EOF before writing


## Ideas

* Combine into just one .php file insted of two (UI and backend)

* Find a better name, such as
	- phpost
	- picopub
	- picopost
	- twtpub	
	- nanopub

* Make a gif like: https://raw.githubusercontent.com/gabrieldejesus/register-with-txt/master/web-preview.gif
	
* Integrate with a nice render of twtxt
	- https://github.com/schulle4u/yellow-extensions-schulle4u/tree/master/ticker
	- https://github.com/Zegnat/site-notxte
	- https://github.com/my5t3ry/twi

# Meta
Code based on [register-with-txt by Gabriel de Jesus](https://github.com/gabrieldejesus/register-with-txt)
and bits of php to make it write just one line of twtxt compliant data at a time.

Distributed under the MIT License. See [LICENSE](LICENSE) for more information.
