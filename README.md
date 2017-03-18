# LAMP GOC 2017 server

This repository contains the server part.


# TODO

* web quest mocks, multiple
* app show quest on radar
* app show quest on camera
* app menu (show my status)
* mysql
* web create quest
* web real quest list
* web my status (list XP summary and quest list)
* 
* app & web user authentication (instance id, social media, other?):
  * https://developer.android.com/training/id-auth/identify.html#IdentifyUser
  * What account types to support?
    * Google
    * Facebook
    * Other?
* app & web design and create profile page for quest givers, players and mixed accounts too
* app port to Android 5.0
* app abstract out http calls
* app accept quest from radar view
* app & web check and make better to be only able to accept nearby quests
* app create notification on lock screen if a quest becomes acceptable (near enough)
* app create notification on lock screen if somebody accepts a quest created by you
* app integrate radar view to camera view on a small part of the screen
* app change original radar view to map view (webview or native activity?)
* app & web design and implement group quests (quests that should or must be done by multiple players)
* app & web design and implement higher level quests (which can only be done after reaching a certain experience)
* app & web design and implement leveling system
* app & web design and implement xp giving system (how much xp and how can be given for a certain quest)
* app & web design and implement quest / game? types (should they create different virtual worlds?)
* app plan and create maximum distance to show quests on camera and map view (should be customizable by user with protection based on maximum quests to show - rendering should be smooth)
* app make radar view auto-adjusting for scale based on quest density (scale should be shown somewhere on screen)
* app make quests outside of radar scale appear as arrows at the edge of radar view (until maximum distance of rendering)
* app make radar view as a true radar, animated part going in circles and showing quests only under the animation (should be switchable)
* app make quest icons appear more stable on camera view (sometimes they disappear - probably location fluctuation)
* app & web find a name for our platform
* register a domain (if platform name figured out)
* create a website (one page site, download links android/ios...)
* create a kanban board: https://taiga.io/
* web api unit tests
* app & web create a designed landing page for our application and webpage
*
*
* implement multiple worlds
  * default world - any1 can create, any1 can complete quests
  * private worlds - any1 can create, invited peapoles can do quests
  * public worlds - only we can create, any1 can do quests
  * separate xp per world
  * add world currency
* add quest requriements
  * min xp (or level)
  * another quest
  * other world xp
  * other world quest
* group quests
* repeatable quests
  * once per person
  * daily per person, etc.
* timed quests
  * eg: 3-4pm every day 
* include a promise library 
* add fisheye transformed map to radar
* use camera api2 with some wrapper library
* improve nearby quest display by some cool algorith using all sensor data https://www.google.hu/search?espv=2&q=android+dead+reckoning+github&oq=android+dead+reckoning+github&gs_l=serp.3..33i21k1.120569.122795.0.122976.7.7.0.0.0.0.384.1087.3-3.3.0....0...1c.1.64.serp..4.3.1087...0i22i30k1._mIeKU7vf8Y
