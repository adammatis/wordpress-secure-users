# WordPress Secure Users

A minimal WordPress plugin by **Mintechapps Kft.** that hides the default REST API users endpoints from visitors who are not logged in.

## Installation

1. Download the repository as a ZIP from GitHub.
2. In WordPress, go to **Plugins → Add New Plugin → Upload Plugin**, select the ZIP, and activate it.
3. Test `/wp-json/wp/v2/users` in an incognito window; it should return a REST route-not-found response (404).

Alternatively, copy `wordpress-secure-users.php` into `wp-content/plugins/wordpress-secure-users/` and activate it.

## Behavior

For logged-out visitors, unregisters:
- `/wp/v2/users`
- `/wp/v2/users/(?P<id>[\\d]+)`

Logged-in access remains subject to WordPress's normal permissions. Other endpoints are unchanged.

This reduces one username-enumeration avenue, but **does not** prevent discovery through author URLs, embedded user data, or other sources. It does not block password-reset requests.

**Owner / author:** Mintechapps Kft.  
**License:** GPL-2.0-or-later
