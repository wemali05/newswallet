---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general
<!-- START_d7b7952e7fdddc07c978c9bdaf757acf -->
## Validates user input on validation of user credentials.

Passes user to JWTAuth to generate user token.

> Example request:

```bash
curl -X POST "http://localhost/api/register" \
    -H "Authorization: Bearer: {token}"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/register",
    "method": "POST",
    "headers": {
        "Authorization": "Bearer: {token}",
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/register`


<!-- END_d7b7952e7fdddc07c978c9bdaf757acf -->

<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
## Log in user and generate authorization token. If user is not found in database
throw an error or exception occured while finding user.

> Example request:

```bash
curl -X POST "http://localhost/api/login" \
    -H "Authorization: Bearer: {token}"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/login",
    "method": "POST",
    "headers": {
        "Authorization": "Bearer: {token}",
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/login`


<!-- END_c3fa189a6c95ca36ad6ac4791a873d23 -->

<!-- START_daef3d0d0befd7a4af1ab644095baf69 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v0/categories" \
    -H "Authorization: Bearer: {token}"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v0/categories",
    "method": "GET",
    "headers": {
        "Authorization": "Bearer: {token}",
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "status": "Authorization Token not found"
}
```

### HTTP Request
`GET api/v0/categories`


<!-- END_daef3d0d0befd7a4af1ab644095baf69 -->

<!-- START_6689c4ba3c33c8544985d335382aa6f2 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v0/categories/{category}" \
    -H "Authorization: Bearer: {token}"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v0/categories/{category}",
    "method": "GET",
    "headers": {
        "Authorization": "Bearer: {token}",
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "status": "Authorization Token not found"
}
```

### HTTP Request
`GET api/v0/categories/{category}`


<!-- END_6689c4ba3c33c8544985d335382aa6f2 -->

<!-- START_15785762c46671a5fbebec4abfdf7c20 -->
## Display the listing of popular categories.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v0/categories/reports/popular" \
    -H "Authorization: Bearer: {token}"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v0/categories/reports/popular",
    "method": "GET",
    "headers": {
        "Authorization": "Bearer: {token}",
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "status": "Authorization Token not found"
}
```

### HTTP Request
`GET api/v0/categories/reports/popular`


<!-- END_15785762c46671a5fbebec4abfdf7c20 -->

<!-- START_bd52fc5607d02e665082ac9534e06162 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v0/categories" \
    -H "Authorization: Bearer: {token}"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v0/categories",
    "method": "POST",
    "headers": {
        "Authorization": "Bearer: {token}",
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v0/categories`


<!-- END_bd52fc5607d02e665082ac9534e06162 -->

<!-- START_78178edbe6c84346813d216ed0e6e7c2 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v0/categories/{category}" \
    -H "Authorization: Bearer: {token}"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v0/categories/{category}",
    "method": "PUT",
    "headers": {
        "Authorization": "Bearer: {token}",
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v0/categories/{category}`


<!-- END_78178edbe6c84346813d216ed0e6e7c2 -->

<!-- START_3a9e8e7f00e0b321f7033e58a4d3f964 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v0/categories/{category}" \
    -H "Authorization: Bearer: {token}"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v0/categories/{category}",
    "method": "DELETE",
    "headers": {
        "Authorization": "Bearer: {token}",
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v0/categories/{category}`


<!-- END_3a9e8e7f00e0b321f7033e58a4d3f964 -->

<!-- START_9f15357b019453a694300987cdf3691c -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v0/articles" \
    -H "Authorization: Bearer: {token}"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v0/articles",
    "method": "GET",
    "headers": {
        "Authorization": "Bearer: {token}",
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "status": "Authorization Token not found"
}
```

### HTTP Request
`GET api/v0/articles`


<!-- END_9f15357b019453a694300987cdf3691c -->

<!-- START_7fec42cfd8b116f6dbdd53414c8170f9 -->
## Display listing of resources in pagination.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v0/articles/page" \
    -H "Authorization: Bearer: {token}"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v0/articles/page",
    "method": "GET",
    "headers": {
        "Authorization": "Bearer: {token}",
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "status": "Authorization Token not found"
}
```

### HTTP Request
`GET api/v0/articles/page`


<!-- END_7fec42cfd8b116f6dbdd53414c8170f9 -->

<!-- START_3f3dbeb2f04653ed3222fa4c71fc43b4 -->
## Display the listing of popular articles.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v0/articles/reports/popular" \
    -H "Authorization: Bearer: {token}"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v0/articles/reports/popular",
    "method": "GET",
    "headers": {
        "Authorization": "Bearer: {token}",
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "status": "Authorization Token not found"
}
```

### HTTP Request
`GET api/v0/articles/reports/popular`


<!-- END_3f3dbeb2f04653ed3222fa4c71fc43b4 -->

<!-- START_ff854b6730c417b83be90ec5a98cdbc9 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v0/articles/{article}" \
    -H "Authorization: Bearer: {token}"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v0/articles/{article}",
    "method": "GET",
    "headers": {
        "Authorization": "Bearer: {token}",
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "status": "Authorization Token not found"
}
```

### HTTP Request
`GET api/v0/articles/{article}`


<!-- END_ff854b6730c417b83be90ec5a98cdbc9 -->

<!-- START_e9712de5b30f5c850417c094bc98c6b1 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v0/articles" \
    -H "Authorization: Bearer: {token}"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v0/articles",
    "method": "POST",
    "headers": {
        "Authorization": "Bearer: {token}",
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v0/articles`


<!-- END_e9712de5b30f5c850417c094bc98c6b1 -->

<!-- START_fabca15d21fe7d0994f9c0ef4cff812c -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v0/articles/{article}" \
    -H "Authorization: Bearer: {token}"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v0/articles/{article}",
    "method": "PUT",
    "headers": {
        "Authorization": "Bearer: {token}",
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v0/articles/{article}`


<!-- END_fabca15d21fe7d0994f9c0ef4cff812c -->

<!-- START_8f32084972053a0c92da0134c2f7748c -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v0/articles/{article}" \
    -H "Authorization: Bearer: {token}"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v0/articles/{article}",
    "method": "DELETE",
    "headers": {
        "Authorization": "Bearer: {token}",
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v0/articles/{article}`


<!-- END_8f32084972053a0c92da0134c2f7748c -->

<!-- START_66e08d3cc8222573018fed49e121e96d -->
## Show the application&#039;s login form.

> Example request:

```bash
curl -X GET -G "http://localhost/login" \
    -H "Authorization: Bearer: {token}"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/login",
    "method": "GET",
    "headers": {
        "Authorization": "Bearer: {token}",
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET login`


<!-- END_66e08d3cc8222573018fed49e121e96d -->

<!-- START_ba35aa39474cb98cfb31829e70eb8b74 -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST "http://localhost/login" \
    -H "Authorization: Bearer: {token}"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/login",
    "method": "POST",
    "headers": {
        "Authorization": "Bearer: {token}",
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST login`


<!-- END_ba35aa39474cb98cfb31829e70eb8b74 -->

<!-- START_e65925f23b9bc6b93d9356895f29f80c -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST "http://localhost/logout" \
    -H "Authorization: Bearer: {token}"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/logout",
    "method": "POST",
    "headers": {
        "Authorization": "Bearer: {token}",
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST logout`


<!-- END_e65925f23b9bc6b93d9356895f29f80c -->

<!-- START_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->
## Show the application registration form.

> Example request:

```bash
curl -X GET -G "http://localhost/register" \
    -H "Authorization: Bearer: {token}"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/register",
    "method": "GET",
    "headers": {
        "Authorization": "Bearer: {token}",
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET register`


<!-- END_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->

<!-- START_d7aad7b5ac127700500280d511a3db01 -->
## Handle a registration request for the application.

> Example request:

```bash
curl -X POST "http://localhost/register" \
    -H "Authorization: Bearer: {token}"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/register",
    "method": "POST",
    "headers": {
        "Authorization": "Bearer: {token}",
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST register`


<!-- END_d7aad7b5ac127700500280d511a3db01 -->

<!-- START_d72797bae6d0b1f3a341ebb1f8900441 -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET -G "http://localhost/password/reset" \
    -H "Authorization: Bearer: {token}"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/password/reset",
    "method": "GET",
    "headers": {
        "Authorization": "Bearer: {token}",
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET password/reset`


<!-- END_d72797bae6d0b1f3a341ebb1f8900441 -->

<!-- START_feb40f06a93c80d742181b6ffb6b734e -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST "http://localhost/password/email" \
    -H "Authorization: Bearer: {token}"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/password/email",
    "method": "POST",
    "headers": {
        "Authorization": "Bearer: {token}",
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST password/email`


<!-- END_feb40f06a93c80d742181b6ffb6b734e -->

<!-- START_e1605a6e5ceee9d1aeb7729216635fd7 -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET -G "http://localhost/password/reset/{token}" \
    -H "Authorization: Bearer: {token}"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/password/reset/{token}",
    "method": "GET",
    "headers": {
        "Authorization": "Bearer: {token}",
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET password/reset/{token}`


<!-- END_e1605a6e5ceee9d1aeb7729216635fd7 -->

<!-- START_cafb407b7a846b31491f97719bb15aef -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST "http://localhost/password/reset" \
    -H "Authorization: Bearer: {token}"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/password/reset",
    "method": "POST",
    "headers": {
        "Authorization": "Bearer: {token}",
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST password/reset`


<!-- END_cafb407b7a846b31491f97719bb15aef -->

<!-- START_cb859c8e84c35d7133b6a6c8eac253f8 -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET -G "http://localhost/home" \
    -H "Authorization: Bearer: {token}"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/home",
    "method": "GET",
    "headers": {
        "Authorization": "Bearer: {token}",
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET home`


<!-- END_cb859c8e84c35d7133b6a6c8eac253f8 -->


