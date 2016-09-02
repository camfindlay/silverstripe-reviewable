# Reviewable

 - Use namespace 'Reviewable' when calling module classes.
 - Uses the [Raty](https://github.com/wbotelhos/raty) jquery rating library 2.4.5 (needs to be updated to 2.7.0). 
 - A new form field RatingField can be used via the standard SilverStripe form API.
 
## Configuration
 
 To enable the reviewable functionality on a Page or Controller you need to apply the DataExtension using the Config YAML.
 
 ```yaml
 Page_Controller:
   extensions:
     - Reviewable\ControllerExtension
 ```
 