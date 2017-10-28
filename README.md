Description
-----------

This module help you to alter the existing drupal site information page where "Site API Key" new field is added.

When this form is submitted, the value for this field will be saved as the system variable named "siteapikey". 
A Drupal message will inform the user that the Site API Key has been saved with that value. 
When this form is visited after the "Site API Key" is saved, the field should be populated with the correct value.

The "Save configuration" button should change to "Update Configuration".

This module also provides a URL that responds with a JSON representation of a given node with the content type "page" only if the previously submitted API Key and a node id (nid) of an appropriate node are present, otherwise it will respond with "access denied".


Requirements
------------

This module requires Drupal 8.


Installation
------------

1) Copy/upload the rrg_test module folder to the sites/all/modules/custom/
directory of your Drupal installation. 

2) Enable the this module in Drupal (administer -> modules).


Author
------

rituraj <rituraj.onnet@gmail.com>