# TimePeriod

Parse string representation of time into minutes.

## Installation

Install via composer

```
composer require 'trq/timeperiod:1.0.*@dev'
```

## Usage

```php
<?php

echo (new Trq\TimePeriod\Resolver)
    ->parse('1h 20m')
    ->gitMinutes(); // 80
```

More examples can be found in spec/Trq/TimePeriod/ResolverSpec.php
