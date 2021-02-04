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
Install as usual.

Place the entirety of this directory in the /modules folder of your Drupal
installation. Navigate to Administer > Extend. Check the 'Enabled' box next
to the 'RRG Test' in 'Custom' package and then click
the 'Save Configuration' button at the bottom.

For help regarding installation, visit:
https://www.drupal.org/documentation/install/modules-themes/modules-8


Author
------
rituraj <rituraj.onnet@gmail.com> 
