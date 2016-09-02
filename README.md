# Reviewable

Allows reviews on SilverStripe pages or Controllers and includes comments and a 1-5 star rating.

Builds on the great work from [Shea Dawson's Rateable module](https://github.com/sheadawson/silverstripe-rateable/)

## Installation

Requires SilverStripe CMS 3.x


```
composer require camfindlay/silverstripe-reviewable
```

## Licence

BSD 3-clause

See [Licence](LICENCE.md)

## Documentation
See [docs](docs/en/index.md)

## Example configuration

To enable the reviewable functionality on a Page or Controller you need to apply the DataExtension using the Config YAML.

```yaml
Page_Controller:
  extensions:
    - Reviewable\ControllerExtension
```

## Maintainers
 * Cam Findlay <cam@camfindlay.com> 
 
## Bugtracker
Bugs are tracked in the issues section of this repository. Before submitting an issue please read over 
existing issues to ensure yours is unique. 
 
If the issue does look like a new bug:
 
 - Create a new issue
 - Describe the steps required to reproduce your issue, and the expected outcome. Unit tests, screenshots 
 and screencasts can help here.
 - Describe your environment as detailed as possible: SilverStripe version, Browser, PHP version, 
 Operating System, any installed SilverStripe modules.
 
Please report security issues to the module maintainers directly. Please don't file security issues in the bugtracker.
 
## Development and contribution
If you would like to make contributions to the module please ensure you raise a pull request and discuss with the module maintainers.