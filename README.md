# Stuntcoders Facebook tracking pixel
When having an online shop, it can be very useful for you to know different statistics about the actions that the customers have done. Like what are your shop's most viewed or most purchased items.

With Stuntcoders Facebook tracking pixel you can track activities customers make on your Magento store.

### Usage
To enable the module, navigate to System -> Configuration and choose Facebook pixel in the left menu. Enable Facebook pixel and insert your Facebook ID. More details on the following links:
- [Facebook Pixel Implementation Guide](https://www.facebook.com/business/help/952192354843755)
- [Facebook Pixel Setup](https://developers.facebook.com/docs/marketing-api/facebook-pixel/v2.5)

![admin-configuration](https://s3-eu-west-1.amazonaws.com/stcd/stunt_mage_facebook_pixel/system-config.png)

### Implementation
This module will add Facebook's script for tracking in the head tag on every page.

![tracking-script](https://s3-eu-west-1.amazonaws.com/stcd/stunt_mage_facebook_pixel/head-script.png)

### Events
Currently the tracked events are:
- Page View – triggered when a page is viewed. This allows Facebook to track pages that are visited so you can see which pages are visited the most.
- Search – triggered when a product search query is made. This allows Facebook to track all product searches that are made on your Magento shop, so you can see which products are searched for the most.
- Purchase – triggered when user lands on thank you/confirmation page. This allows Facebook to track all trasactions made so it can give you statistics of all purchases.

Copyright StuntCoders — [Start Your Online Store Now](http://stuntcoders.com/)