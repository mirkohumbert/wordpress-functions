----------
File: estimated-reading-time.php

Adds the estimated reading time for a page/post in WordPress.

You can use this code in functions.php or in a plugin you create.

The shortcode function allows to include the estimated reading time anywhere (template or blocks).

Shortcode usage:
<!-- Basic usage -->
[reading_time]

<!-- Custom reading speed (250 words per minute) -->
[reading_time speed="250"]

<!-- Custom prefix and suffix -->
[reading_time prefix="Estimated read: " suffix=" of content"]

<!-- Combined attributes -->
[reading_time speed="300" prefix="⏱️ " suffix=" to read"]
