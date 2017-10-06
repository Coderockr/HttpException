# HttpException

PHP Exceptions related to HTTP Status Codes

Using:

```
try {
   $this->foo();
} catch (\Exception $exception) {
   throw new Exception\NotFoundException("foo not found :c", $exception);
}
```

based on the work of Pavel Sterba - <https://github.com/pavelsterba/http-exceptions> Thanks :D
