# ✨ Boot API ✨
### _Free & easy way to document your APIs._

Boot API is provides an easy & free way to document your APIs. The idea was to create free & open source solution for API documentation.


<a href="https://github.com/tanmayk/boot_api/issues/new?assignees=&labels=bug&template=bug_report.md&title=bug%3A+">Report a Bug</a>
·
<a href="https://github.com/tanmayk/boot_api/issues/new?assignees=&labels=enhancement&template=feature_request.md&title=feat%3A+">Request a Feature</a>
·
<a href="https://github.com/tanmayk/boot_api/discussions">Ask a Question</a>


[![license](https://img.shields.io/badge/license-MIT-blue?style=flat-square)](LICENSE.md)
[![made with love by OSSeed](https://img.shields.io/badge/made%20with%20%E2%9D%A4%20by-OSSeed-7db238?style=flat-square)](https://osseed.com/)

Feel free to try this out. I am open to suggestions. [See how it looks.](https://tanmayk.github.io/boot_api/)

## How To

- Checkout the code & update the config.php file for below details:

**Title:** The title of your project.

**Version:** Version of your API document.

**Base URL:** Base URL of your API service.

- Add machine name of your API endpoint in apis.php.
- Create a php file under **modules** with same machine name as per api.php. E.g. If you added **example** as machine name, you must create **example.php** in **modules** directory.
- The php file must have functions as below:

_example_endpoint()_ - This function provides an information about your API.

_example_request()_ - This function provides an information about request parameters for your API.

_example_response()_ - This function provides an information about response parameters for your API. There can be multiple responses for any HTTP code.
- Refer **search_drink.php** under **modules** directory for more details about code.

## License

MIT

_Free Software, Hell Yeah!_
