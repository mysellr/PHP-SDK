MySellr PHP SDK (v.0.7)
==========================

This repository contains the open source PHP SDK that allows you to access MySellr Platform from your PHP app. Except as otherwise noted, the MySellr PHP SDK
is licensed under the Apache Licence, Version 2.0
(http://www.apache.org/licenses/LICENSE-2.0.html)


Usage
-----

The [examples][examples] are a good place to start. The minimal you'll need to
have is:

    include '../src/mysellr.php';

    $mysellr = new MySellr(array(
      'appId'  => 'YOUR_APP_ID',
      'secret' => 'YOUR_APP_SECRET',
    ));

    // Get User ID
    $user = $mysellr->getUser();

To make [API][API] calls:

    if ($user) {
      try {
        // Proceed knowing you have a logged in user who's authenticated.
        $user_profile = $mysellr->api('/me');
      } catch (MySellrApiException $e) {
        error_log($e);
        $user = null;
      }
    }

Login or logout url will be needed depending on current user state.

    if ($user) {
      $logoutUrl = $mysellr->getLogoutUrl();
    } else {
      $loginUrl = $mysellr->getLoginUrl();
    }

[examples]: https://github.com/mysellr/PHP-SDK/tree/master/example
[API]: http://mysellr.com/api/


Report Issues/Bugs
===============
[Bugs](http://mysellr.com/contact/)

[Questions](http://mysellr.com/contact/)

