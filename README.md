# TimePeriod

Parse string representation of time into minutes.

## Installation

Install via composer

```
composer require 'trq/timeperiod'
```

## Usage

```php
<?php

echo (new Trq\TimePeriod\Resolver)
    ->parse('1h 20m')
    ->getMinutes(); // 80
```

More examples can be found in spec/Trq/TimePeriod/ResolverSpec.php
