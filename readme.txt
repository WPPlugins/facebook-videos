=== Facebook Video's ===
Contributors: MikeDeBock
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=mike%2edebock%40xs4all%2enl&lc=GB&item_name=Mike%20de%20Bock&currency_code=EUR&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted
Tags: facebook video, facebook, fb, video, videos
Requires at least: 3.0
Tested up to: 3.2
Stable tag: 1.0

You can embed Facebook Videos with [fbvideo id="xxx"] shortcode.

== Description ==

With this plugin it is easy to embed Facebook Video's on your WordPress website.
You can embed Facebook Video's code using this shortcode `[fbvideo id="xxx"]`.

It is possible to pass more arguments for the video size: `[fbvideo id="xxx" height="403" width="716"]`

= Usage (allowed parameters) =
* id - facebook video id, extract from the url: eg http://www.facebook.com/video/video.php?v=313954715398, becomes `[fbvideo id="313954715398"]`
* width - width of the video in pixels `[fbvideo id="313954715398" width="100%"]` or `[fbvideo id="xxx" width="640"]` (by default width="716");
* height - height of the video in pixels `[fbvideo id="313954715398" height="480"]` (by default height="403");

== Installation ==

This section describes how to install the plugin and get it working.

1. Install plugin and activate it on the Plugins page;
2. Add shortcode `[fbvideo id="313954715398" height="403" width="716"]` to page content;

== Frequently Asked Questions ==

= Where can i find the Facebook Video ID? =

* Go to the Facebook Profile page
* Click on Photo's
* On the right top of the title on "Video's"
* Open the to be inserted video
* Get the URL, e.g. http://www.facebook.com/video/video.php?v=313954715398
* Get the numeric value behind ?v=, e.g. 313954715398
* That is the video id