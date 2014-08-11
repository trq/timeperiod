# TimePeriod

A package for converting string like "1d 4h" into a common representation. eg; 1680 (minutes)

## Installation

Install via composer

```
composer require 'trq/timeperiod:1.0.*@dev'
```

# Usage

```php
<?php

echo (new Trq\TimePeriod\Resolver)
    ->parse('1h 20m')
    ->gitMinutes(); // 80
```

More examples can be found in spec/Trq/TimePeriod/ResolverSpec.php
