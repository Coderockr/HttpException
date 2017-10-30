USAGE SUGGESTION
================

These are some suggestions about when use the Exceptions.

Not Found (404)
---------------

**Exception:** `throw new Coderockr\HttpException\NotFoundException('Resource not found');`

> When the desired resource is not found.

Examples:

 * When the URL `/v1/message/77` is accessed the user expect to see the message with ID: 77. If the message with this ID does not exist, than use the `NotFoundException`.

 * When you access the URL `/v1/message/box?status=unread` the user wants a list of messages with the status "unread". If no message is found, than the exception should not be thrown; instead return the  status code 204.

 * When the user tries to create a resource and a related content is not found (like the category of a product) than should be thrown a [UnprocessableEntityException](#unprocessable-entity-422-)
Exemplo: Ao tentar incluir uma nova mensagem, se uma das informações que fazem parte da mensagem não puder ser salva (uma tabela relacionada por exemplo) deve retornar 422

Unprocessable Entity (422)
--------------------------

**Exception:** `throw new Coderockr\HttpException\UnprocessableEntityException('Error reading user information');`

> When the Request made cannot be processed.

Examples:

 * When the user make a Request to the URL `/v1/message/new?user_id=33`, if the user 33 does not exists, than the exception `UnprocessableEntityException` should be used. The `NotFoundException` is not right, because the user 33 is not been requested, but the creation of a new message with this user.
 
 * When the URL `/v1/message/box?user_id=33` to get the list of message from the user 33. If this user does not exist, than the `UnprocessableEntityException` should be thrown, because the user 33 is not expected return, but a filter parameter.

Bad Request (400)
-----------------

**Exception:**: `throw new Coderockr\HttpException\BadRequestException('Invalid parameters');`

> When the Request payload are missing parameters, or some parameter has a invalid type.

Example:

 * When the system expects the URL with the format `/v1/message/1/file/1`, and the user calls the URL `/v1/message//file/1`, (the message ID is missing) the `BadRequestException` should be thrown.

 * When the user calls the URL `/v1/message/box?after=invalid_date`. If the parameter `after` does not match the format, or type than the `BadRequestException` should be thrown.

Internal Server Error (500)
---------------------------

**Exception:** `throw new Coderockr\HttpException\InternalServerErrorException('Error processing request');`

> When the error is caused by system fault.

Examples:

 * When the user access a URL, but the system fails to connect to the database (or other dependency) than the `InternalServerErrorException` should be thrown.

Forbidden (403)
---------------

**Exception:** `throw new Coderockr\HttpException\ForbiddenException();`

> Should be thrown when the request is not authenticated.

Examples:

 * The authentication token expired or became invalid.

 * User tries to access a private URL without authentication.

Unauthorized (401)
------------------

**Exception:** `throw new Coderockr\HttpException\UnauthorizedException();`

> Should be thrown when the client tries to access a resource, but this resource 

Examples:

 * The client is authentificated tries to access a resource, but it does not has permission.
