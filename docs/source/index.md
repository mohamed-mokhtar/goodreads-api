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

#User

APIs for managing users (Sofyan)
<!-- START_90f45d502fd52fdc0b289e55ba3c2ec6 -->
## Sign Up

> Example request:

```bash
curl -X POST "http://localhost/api/signup" \
    -H "Content-Type: application/json" \
    -d '{"email":"hRa3tiHEznT1WO8j","password":"3c2MANFXM5WsEZTZ","password_confirmation":"lTFKQ340lWPuCHub","name":"WwaO9nxt5pPvMN36","gender":"j4JSZsEzmhkVACM1","birthday":"Ge8amZTbOtQtpMqj","country":"OHVYB5wbzHpz1uHH","city":"heGJS4lM66GTEzCH"}'

```

```javascript
const url = new URL("http://localhost/api/signup");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "hRa3tiHEznT1WO8j",
    "password": "3c2MANFXM5WsEZTZ",
    "password_confirmation": "lTFKQ340lWPuCHub",
    "name": "WwaO9nxt5pPvMN36",
    "gender": "j4JSZsEzmhkVACM1",
    "birthday": "Ge8amZTbOtQtpMqj",
    "country": "OHVYB5wbzHpz1uHH",
    "city": "heGJS4lM66GTEzCH"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (404):

```json
{
    "status": "false",
    "errors": [
        "The email field is required.",
        "The username field is required.",
        "The password field is required.",
        "The name field is required.",
        "The gender field is required."
    ]
}
```
> Example response (200):

```json
{
    "status": "true",
    "user": {
        "name": "",
        "username": "",
        "image_link": ""
    },
    "token": "",
    "token_type": "",
    "expires_in": ""
}
```

### HTTP Request
`POST api/signup`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    email | string |  required  | .
    password | string |  required  | .
    password_confirmation | string |  required  | this is a special filed so it's not in camel case.
    name | string |  required  | .
    gender | string |  required  | must be [Female , Male or Other].
    birthday | date |  required  | .
    country | string |  required  | .
    city | string |  required  | .

<!-- END_90f45d502fd52fdc0b289e55ba3c2ec6 -->

<!-- START_8bb89f67246d708dd6f24b433d204747 -->
## check token forgot password

> Example request:

```bash
curl -X GET -G "http://localhost/api/checktoken" \
    -H "Content-Type: application/json" \
    -d '{"token":"MD4HHC439yTlwQRm"}'

```

```javascript
const url = new URL("http://localhost/api/checktoken");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "token": "MD4HHC439yTlwQRm"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "userId": ""
}
```
> Example response (405):

```json
{
    "error": "This url is old , please try to reset your password again"
}
```

### HTTP Request
`GET api/checktoken`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    token | string |  required  | .

<!-- END_8bb89f67246d708dd6f24b433d204747 -->

<!-- START_cdc65eefa87b9a8f3fdcfe36ed62c436 -->
## check token verify

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/checktokenverify" \
    -H "Content-Type: application/json" \
    -d '{"token":"lcpXRnkCGWhj7LfP"}'

```

```javascript
const url = new URL("http://localhost/api/checktokenverify");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "token": "lcpXRnkCGWhj7LfP"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "error": "You have verified your account"
}
```
> Example response (405):

```json
{
    "error": "This url is old , please try to verify your account again"
}
```

### HTTP Request
`GET api/checktokenverify`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    token | string |  required  | .

<!-- END_cdc65eefa87b9a8f3fdcfe36ed62c436 -->

<!-- START_d82715c3696d1a68ee35375d85c9b58d -->
## forgot Password

> Example request:

```bash
curl -X POST "http://localhost/api/forgotpassword" \
    -H "Content-Type: application/json" \
    -d '{"email":"gkvkMNMmoUqZkGiJ"}'

```

```javascript
const url = new URL("http://localhost/api/forgotpassword");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "gkvkMNMmoUqZkGiJ"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "message": "Now , You can go to You email to reset the password"
}
```
> Example response (405):

```json
{
    "error": "The email is invalid"
}
```

### HTTP Request
`POST api/forgotpassword`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    email | string |  required  | .

<!-- END_d82715c3696d1a68ee35375d85c9b58d -->

<!-- START_1de9fc8a56143bc9b1a7cd07972c47af -->
## reset password

> Example request:

```bash
curl -X POST "http://localhost/api/resetpassword" \
    -H "Content-Type: application/json" \
    -d '{"password":"ZMNXrM1lNBNQMR8H","password_confirmation":"ITcpRaJAgFjCr3uD","userId":7}'

```

```javascript
const url = new URL("http://localhost/api/resetpassword");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "password": "ZMNXrM1lNBNQMR8H",
    "password_confirmation": "ITcpRaJAgFjCr3uD",
    "userId": 7
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "message": "You have reseted your password"
}
```
> Example response (405):

```json
{
    "error": "The password field is required"
}
```

### HTTP Request
`POST api/resetpassword`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    password | string |  required  | .
    password_confirmation | string |  required  | .
    userId | integer |  required  | .

<!-- END_1de9fc8a56143bc9b1a7cd07972c47af -->

<!-- START_367358a4dd6a1024185fa1c77f6d482a -->
## Change password

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST "http://localhost/api/changepassword" \
    -H "Content-Type: application/json" \
    -d '{"password":"DB7sBPL5Ne3VTrAV","newPassword":"1IVmNDIk3saDXhAu","newPassword_confirmation":"bLiulafLhP0SqNVO"}'

```

```javascript
const url = new URL("http://localhost/api/changepassword");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "password": "DB7sBPL5Ne3VTrAV",
    "newPassword": "1IVmNDIk3saDXhAu",
    "newPassword_confirmation": "bLiulafLhP0SqNVO"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (405):

```json
{
    "errors": [
        "The password field is required.",
        "The newPassword field is required.",
        "The newPassword_confirmation field is required."
    ]
}
```
> Example response (200):

```json
{
    "message": "You have changed your password"
}
```

### HTTP Request
`POST api/changepassword`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    password | string |  required  | .
    newPassword | string |  required  | .
    newPassword_confirmation | string |  required  | this filed is special so it isn't camel case .

<!-- END_367358a4dd6a1024185fa1c77f6d482a -->

<!-- START_d9dd1eb5b598eddb81bb1ca552088736 -->
## Change Name

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/changename" \
    -H "Content-Type: application/json" \
    -d '{"newName":"Fc06sCeRkPLT2unS"}'

```

```javascript
const url = new URL("http://localhost/api/changename");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "newName": "Fc06sCeRkPLT2unS"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (405):

```json
{
    "errors": [
        "The password field is required.",
        "The newName field is required."
    ]
}
```
> Example response (200):

```json
{
    "message": "You have changed your name"
}
```

### HTTP Request
`GET api/changename`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    newName | string |  required  | .

<!-- END_d9dd1eb5b598eddb81bb1ca552088736 -->

<!-- START_b7ec010166214c7cca3a1d83a4a25e51 -->
## Delete

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST "http://localhost/api/delete" \
    -H "Content-Type: application/json" \
    -d '{"password":"H1B00OcRsSneITjv"}'

```

```javascript
const url = new URL("http://localhost/api/delete");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "password": "H1B00OcRsSneITjv"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (405):

```json
{
    "errors": [
        "The password is invalid."
    ]
}
```
> Example response (200):

```json
{
    "message": "You have deleted your account"
}
```

### HTTP Request
`POST api/delete`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    password | string |  required  | .

<!-- END_b7ec010166214c7cca3a1d83a4a25e51 -->

<!-- START_aac57b0f0b6927135fced62eb9de333f -->
## show setting

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/showsetting" 
```

```javascript
const url = new URL("http://localhost/api/showsetting");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{}
```

### HTTP Request
`GET api/showsetting`


<!-- END_aac57b0f0b6927135fced62eb9de333f -->

<!-- START_0cc977b3a72a7bd7db8c4be82e5873f7 -->
## Change country

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/changecountry" \
    -H "Content-Type: application/json" \
    -d '{"newCountry":"8gqHDJShSecY03Ay"}'

```

```javascript
const url = new URL("http://localhost/api/changecountry");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "newCountry": "8gqHDJShSecY03Ay"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "message": "You have changed your country"
}
```
> Example response (405):

```json
{
    "errors": "UnAuthorized"
}
```
> Example response (405):

```json
{
    "errors": [
        "The country field is required."
    ]
}
```

### HTTP Request
`GET api/changecountry`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    newCountry | string |  required  | .

<!-- END_0cc977b3a72a7bd7db8c4be82e5873f7 -->

<!-- START_df29e9d2d175b7b08b048f3558675b29 -->
## Change city

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/changecity" \
    -H "Content-Type: application/json" \
    -d '{"newCity":"bANCo1P1xuEsMrWS"}'

```

```javascript
const url = new URL("http://localhost/api/changecity");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "newCity": "bANCo1P1xuEsMrWS"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "message": "You have changed your city"
}
```
> Example response (405):

```json
{
    "errors": "UnAuthorized"
}
```
> Example response (405):

```json
{
    "errors": [
        "The city field is required."
    ]
}
```

### HTTP Request
`GET api/changecity`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    newCity | string |  required  | .

<!-- END_df29e9d2d175b7b08b048f3558675b29 -->

<!-- START_9429b02442ff58d4533067f7cf976a81 -->
## Change birthday

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/changebirthday" \
    -H "Content-Type: application/json" \
    -d '{"newBirthday":"pvzoNtP2j8t92iWU"}'

```

```javascript
const url = new URL("http://localhost/api/changebirthday");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "newBirthday": "pvzoNtP2j8t92iWU"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "message": "You have changed your birthday"
}
```
> Example response (405):

```json
{
    "errors": "UnAuthorized"
}
```
> Example response (405):

```json
{
    "errors": [
        "The country field is birthday."
    ]
}
```

### HTTP Request
`GET api/changebirthday`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    newBirthday | date |  required  | .

<!-- END_9429b02442ff58d4533067f7cf976a81 -->

<!-- START_50817c8f1a5e3075463fa7cbf7ed98df -->
## Who can see my birthday

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/whocanseemybirthday" \
    -H "Content-Type: application/json" \
    -d '{"seeMyBirthday":"QbpSaR47MiT2iiue"}'

```

```javascript
const url = new URL("http://localhost/api/whocanseemybirthday");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "seeMyBirthday": "QbpSaR47MiT2iiue"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "message": "You have changed who can see your birthday"
}
```

### HTTP Request
`GET api/whocanseemybirthday`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    seeMyBirthday | string |  required  | Must be ["Only Me","Everyone" or "Friends"].

<!-- END_50817c8f1a5e3075463fa7cbf7ed98df -->

<!-- START_a93c1b718e3096515770c542236218f8 -->
## Who can see my country

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/whocanseemycountry" \
    -H "Content-Type: application/json" \
    -d '{"seeMyCountry":"IeM3kxyspixncyow"}'

```

```javascript
const url = new URL("http://localhost/api/whocanseemycountry");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "seeMyCountry": "IeM3kxyspixncyow"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "message": "You have changed who can see your country"
}
```

### HTTP Request
`GET api/whocanseemycountry`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    seeMyCountry | string |  required  | Must be ["Only Me","Everyone" or "Friends"].

<!-- END_a93c1b718e3096515770c542236218f8 -->

<!-- START_01e58a830b24636fb65b32b599105993 -->
## Who can see my city

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/whocanseemycity" \
    -H "Content-Type: application/json" \
    -d '{"seeMyCity":"7KmFfzs2z5VhrBLO"}'

```

```javascript
const url = new URL("http://localhost/api/whocanseemycity");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "seeMyCity": "7KmFfzs2z5VhrBLO"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "message": "You have changed who can see your city"
}
```

### HTTP Request
`GET api/whocanseemycity`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    seeMyCity | string |  required  | Must be ["Onlyme","Everyone" or "Friends"].

<!-- END_01e58a830b24636fb65b32b599105993 -->

<!-- START_67d3904e1cf7117e71f186da21780889 -->
## Change Image

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST "http://localhost/api/changeimage" \
    -H "Content-Type: application/json" \
    -d '{"Image":"kBifsqtYik6HTYcP"}'

```

```javascript
const url = new URL("http://localhost/api/changeimage");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "Image": "kBifsqtYik6HTYcP"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "message": "You have updated your profile picture"
}
```

### HTTP Request
`POST api/changeimage`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    Image | string |  required  | the URL for the image .

<!-- END_67d3904e1cf7117e71f186da21780889 -->

<!-- START_d909d63b7e533d9efa8e8c0d296350a0 -->
## verify account

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/verify" 
```

```javascript
const url = new URL("http://localhost/api/verify");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "message": "Now , You can go to your account to reset the password"
}
```

### HTTP Request
`GET api/verify`


<!-- END_d909d63b7e533d9efa8e8c0d296350a0 -->

<!-- START_0bef4e738c9d6720ad43b062015d1078 -->
## api/test
> Example request:

```bash
curl -X GET -G "http://localhost/api/test" 
```

```javascript
const url = new URL("http://localhost/api/test");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
null
```

### HTTP Request
`GET api/test`


<!-- END_0bef4e738c9d6720ad43b062015d1078 -->

#[Activities].Delete Comment
deleteComment function

make a validation on the input to check that is satisfing the conditions. 

if tha input is valid it will continue in the code otherwise it will response with error.

check that the authenticated user is  the one who create the comment to allow to him to delete it.

delete the comment and decrement the number of comments in review or shelf or follow
<!-- START_c46bc7cda5782151e86d302b69be7ef7 -->
## api/deleteComment
<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE "http://localhost/api/deleteComment" \
    -H "Content-Type: application/json" \
    -d '{"id":5}'

```

```javascript
const url = new URL("http://localhost/api/deleteComment");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "id": 5
}

fetch(url, {
    method: "DELETE",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "status": "true",
    "Message": "the comment is deleted"
}
```
> Example response (204):

```json
{
    "status": "false",
    "errors": "can't delete comment on this review becouse this review doesn't exists."
}
```
> Example response (204):

```json
{
    "status": "false",
    "errors": "can't delete comment on this shelf becouse this shelf doesn't exists."
}
```
> Example response (204):

```json
{
    "status": "false",
    "errors": "can't delete comment on this follow becouse this follow doesn't exists."
}
```
> Example response (406):

```json
{
    "status": "false",
    "errors": "The id must be an integer."
}
```

### HTTP Request
`DELETE api/deleteComment`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    id | integer |  required  | comment id

<!-- END_c46bc7cda5782151e86d302b69be7ef7 -->

#[Activities].Like/Unlike
like/Unlike function

make a validation on the input to check that is satisfing the conditions. 

if tha input is valid it will continue in the code otherwise it will response with error.

you can make like on three types only (review,follow,add book to shelf)

the function check that the like is on one of the three type then make the like

increment the number of likes in the review or follow or  add to shelf
 
But if the user already make a like the function will act as unlike

decrement the number of likes in review or shelf or follow
<!-- START_22a65930223020a0d029ea060b3cc42c -->
## api/LikeOrUnLike
<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST "http://localhost/api/LikeOrUnLike" \
    -H "Content-Type: application/json" \
    -d '{"id":10}'

```

```javascript
const url = new URL("http://localhost/api/LikeOrUnLike");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "id": 10
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "status": "true",
    "Message": "Like is Done ",
    "user": 1,
    "resourse_id": 1,
    "resourse_type": 0
}
```
> Example response (200):

```json
{
    "status": "true",
    "Message": "unLike is Done "
}
```
> Example response (204):

```json
{
    "status": "false",
    "errors": "can't make a like on this review becouse this review doesn't exists."
}
```
> Example response (204):

```json
{
    "status": "false",
    "errors": "can't make a like on this shelf becouse this shelf doesn't exists."
}
```
> Example response (204):

```json
{
    "status": "false",
    "errors": "can't make a like on this follow becouse this follow doesn't exists."
}
```
> Example response (406):

```json
{
    "status": "false",
    "errors": "The id must be an integer."
}
```
> Example response (204):

```json
{
    "status": "false",
    "errors": "can't make a unlike on this review becouse this review doesn't exists."
}
```
> Example response (204):

```json
{
    "status": "false",
    "errors": "can't make a unlike on this shelf becouse this shelf doesn't exists."
}
```
> Example response (204):

```json
{
    "status": "false",
    "errors": "can't make a unlike on this follow becouse this follow doesn't exists."
}
```
> Example response (406):

```json
{
    "status": "false",
    "errors": "The id must be an integer."
}
```

### HTTP Request
`POST api/LikeOrUnLike`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    id | integer |  required  | id of the liked resource

<!-- END_22a65930223020a0d029ea060b3cc42c -->

#[Activities].List Comments
list comments

lists comments for a specified review for all users 
and determine if the authenticated have this comment or Not having it

the resopnse wil contain an id it will represent the comment id 

Please, save this id to send it back when you want to delet the comment
<!-- START_300ec40d807333984a76a264dac57b69 -->
## api/listComments
<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/listComments" \
    -H "Content-Type: application/json" \
    -d '{"id":4}'

```

```javascript
const url = new URL("http://localhost/api/listComments");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "id": 4
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "0": [
        {
            "username": "test",
            "image_link": "default.jpg",
            "id": 1,
            "user_id": 1,
            "body": "I agree with you",
            "created_at": "2019-04-27 02:38:27",
            "updated_at": "2019-04-27 02:38:27",
            "have_the_comment": "Yes"
        },
        {
            "username": "test",
            "image_link": "default.jpg",
            "id": 2,
            "user_id": 1,
            "body": "I agree with you",
            "created_at": "2019-04-27 02:38:28",
            "updated_at": "2019-04-27 02:38:28",
            "have_the_comment": "Yes"
        },
        {
            "username": "test",
            "image_link": "default.jpg",
            "id": 3,
            "user_id": 1,
            "body": "I agree with you",
            "created_at": "2019-04-27 02:38:30",
            "updated_at": "2019-04-27 02:38:30",
            "have_the_comment": "Yes"
        },
        {
            "username": "ta7a",
            "image_link": "default.jpg",
            "id": 4,
            "user_id": 2,
            "body": "ahmed",
            "created_at": "2019-04-30 00:00:00",
            "updated_at": "2019-04-10 00:00:00",
            "have_the_comment": "No"
        }
    ],
    "status": "true"
}
```
> Example response (200):

```json
{
    "status": "true",
    "Message": "There is no comments on this review"
}
```
> Example response (404):

```json
{
    "status": "false",
    "Message": "can't List the comments of this review becouse this review doesn't exists"
}
```
> Example response (404):

```json
{
    "status": "false",
    "errors": "The id field is required."
}
```

### HTTP Request
`GET api/listComments`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    id | integer |  required  | id of the commented resource

<!-- END_300ec40d807333984a76a264dac57b69 -->

#[Activities].ListLikes
list likes

lists likes for a specific review

and give you indication if alike is belong to you as authenticated user or not .
<!-- START_06b447ff2a11ad98e991c70ded4a0c5e -->
## api/listLikes
<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/listLikes" \
    -H "Content-Type: application/json" \
    -d '{"id":8}'

```

```javascript
const url = new URL("http://localhost/api/listLikes");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "id": 8
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "likes": [
        {
            "username": "test",
            "image_link": "default.jpg",
            "id": 1,
            "user_id": 1,
            "created_at": "2019-05-02 10:11:40",
            "updated_at": "2019-05-02 10:11:40",
            "have_the_like": "No"
        },
        {
            "username": "ta7a",
            "image_link": "default.jpg",
            "id": 5,
            "user_id": 2,
            "created_at": "2019-05-02 10:18:25",
            "updated_at": "2019-05-02 10:18:25",
            "have_the_like": "No"
        },
        {
            "username": "waleed",
            "image_link": "default.jpg",
            "id": 7,
            "user_id": 3,
            "created_at": "2019-05-02 13:13:07",
            "updated_at": "2019-05-02 13:13:07",
            "have_the_like": "Yes"
        }
    ],
    "status": "true"
}
```
> Example response (200):

```json
{
    "status": "true",
    "Message": "There is no likes on this review"
}
```
> Example response (404):

```json
{
    "status": "false",
    "Message": "can't List the likes of this review becouse this review doesn't exists"
}
```
> Example response (404):

```json
{
    "status": "false",
    "errors": "The id field is required."
}
```

### HTTP Request
`GET api/listLikes`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    id | integer |  required  | id of the liked review

<!-- END_06b447ff2a11ad98e991c70ded4a0c5e -->

#[Activities].Make Comment
makeComment function

make a validation on the input to check that is satisfing the conditions. 

if tha input is valid it will continue in the code otherwise it will response with error.

you can make comment on three types only (review,follow,add book to shelf)

the function check that the comment is on one of the three type then make the comment 

increment the number of comments in the review or follow or  add to shelf
<!-- START_5f591b418d1c653384fb575623715a83 -->
## api/makeComment
<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST "http://localhost/api/makeComment" \
    -H "Content-Type: application/json" \
    -d '{"id":20,"body":"1oRtLtZDo2fn2Rik"}'

```

```javascript
const url = new URL("http://localhost/api/makeComment");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "id": 20,
    "body": "1oRtLtZDo2fn2Rik"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "status": "true",
    "user": 1,
    "resourse_id": 1,
    "resourse_type": 2,
    "comment_body": "it 's very good to follow me XD"
}
```
> Example response (204):

```json
{
    "status": "false",
    "errors": "The body is required to make a comment."
}
```
> Example response (204):

```json
{
    "status": "false",
    "errors": "can't make a comment on this review becouse this review doesn't exists."
}
```
> Example response (204):

```json
{
    "status": "false",
    "errors": "can't make a comment on this shelf becouse this shelf doesn't exists."
}
```
> Example response (204):

```json
{
    "status": "false",
    "errors": "can't make a comment on this follow becouse this follow doesn't exists."
}
```
> Example response (406):

```json
{
    "status": "false",
    "errors": "The id must be an integer."
}
```

### HTTP Request
`POST api/makeComment`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    id | integer |  required  | id of the commented resource.
    body | string |  required  | the body of the comment .

<!-- END_5f591b418d1c653384fb575623715a83 -->

#[Activities].Notification
markNotification
marks a user notification as read
<!-- START_8a06ecc88abd504bcb04d35a669c0ab8 -->
## api/mark_notification
<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST "http://localhost/api/mark_notification" \
    -H "Content-Type: application/json" \
    -d '{"id":6}'

```

```javascript
const url = new URL("http://localhost/api/mark_notification");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "id": 6
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (201):

```json
{}
```
> Example response (401):

```json
{}
```
> Example response (400):

```json
{}
```

### HTTP Request
`POST api/mark_notification`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    id | integer |  optional  | required.

<!-- END_8a06ecc88abd504bcb04d35a669c0ab8 -->

#[Activities].Notification
notifications
gets a user's notifications
<!-- START_4fb25366280aa776535df05d0448a156 -->
## api/notification
<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/notification" \
    -H "Content-Type: application/json" \
    -d '{"page":18}'

```

```javascript
const url = new URL("http://localhost/api/notification");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "page": 18
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
[
    {
        "n_id": 6,
        "read_at": null,
        "data": {
            "id": 26,
            "user_id": 1,
            "user_name": "aaa",
            "user_image_link": "default.jpg",
            "review_id": 1,
            "review_user_id": 2,
            "review_user_name": "aaa",
            "book_title": "The Bird King",
            "type": 1
        }
    },
    {
        "n_id": 9,
        "read_at": null,
        "data": {
            "id": 2,
            "user_id": 1,
            "user_name": "aaa",
            "user_image_link": "default.jpg",
            "review_id": 1,
            "review_user_id": 2,
            "review_user_name": "aaa",
            "book_title": "The Bird King",
            "type": 0
        }
    },
    {
        "n_id": 11,
        "read_at": null,
        "data": {
            "user_id": 1,
            "user_name": "aaa",
            "user_image_link": "default.jpg",
            "type": 2
        }
    }
]
```

### HTTP Request
`GET api/notification`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    page | integer |  optional  | optional 1-N (default 1).

<!-- END_4fb25366280aa776535df05d0448a156 -->

#[Activities].Updates
updates function

Get user's updates from following users

first the function validates the sent parameters if any if it isn't valid 
an error response returns with 400 status code

if there is no parameters sent the default is to return all updates that would be shown to the authenticated user
get all the users followed by the authenticated user then all the activities made by them
those activities are retrieved from five different database tables that store these info 
(shelves,reviews,likes,comments,followings) then the data is merged into one array and sorted 
by updated_at date descendingly in order to show the user the user the latest updates first

if a valid user id is sent then all activities made by this specific user are retrieved the same 
way explained earlier in order to show it in this user's profile

if a valid max updates is sent then this value is retrieved from the array after sorting
<!-- START_1c8b56dcc7476331d13beab7a976ba8f -->
## api/updates
<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/updates" \
    -H "Content-Type: application/json" \
    -d '{"user_id":12,"max_updates":17}'

```

```javascript
const url = new URL("http://localhost/api/updates");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": 12,
    "max_updates": 17
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "status": "true",
    "updates": [
        {
            "id": 2,
            "body": null,
            "rating": null,
            "likes_count": null,
            "comments_count": null,
            "updated_at": "2019-03-21 00:00:00",
            "book_id": 1,
            "title": "a",
            "description": "",
            "img_url": "",
            "reviews_count": null,
            "ratings_count": null,
            "ratings_avg": null,
            "pages_no": null,
            "user_id": 2,
            "name": "",
            "image_link": null,
            "author_name": "a",
            "update_type": 0
        },
        {
            "id": 1,
            "shelf_type": 3,
            "updated_at": "2019-03-15 00:00:00",
            "likes_count": null,
            "comments_count": null,
            "book_id": 1,
            "title": "a",
            "description": "",
            "img_url": "",
            "reviews_count": null,
            "ratings_count": null,
            "ratings_avg": null,
            "pages_no": null,
            "user_id": 2,
            "name": "",
            "image_link": null,
            "author_name": "a",
            "update_type": 1
        },
        {
            "id": 2,
            "shelf_type": 3,
            "updated_at": "2019-03-01 00:00:00",
            "likes_count": null,
            "comments_count": null,
            "book_id": 1,
            "title": "a",
            "description": "",
            "img_url": "",
            "reviews_count": null,
            "ratings_count": null,
            "ratings_avg": null,
            "pages_no": null,
            "user_id": 3,
            "name": "",
            "image_link": null,
            "author_name": "a",
            "update_type": 1
        },
        {
            "updated_at": "2019-03-19 00:00:00",
            "u_id": 2,
            "user_image_link": null,
            "user_name": "",
            "followed_id": 3,
            "followed_image_link": null,
            "followed_name": "",
            "update_type": 2
        },
        {
            "id": 2,
            "resourse_type": 0,
            "updated_at": null,
            "comment_body": "",
            "review_id": 1,
            "body": null,
            "rating": null,
            "comments_count": null,
            "review_updated_at": "2019-03-03 00:00:00",
            "book_id": 1,
            "title": "a",
            "description": "",
            "img_url": "",
            "reviews_count": null,
            "ratings_count": null,
            "ratings_avg": null,
            "pages_no": null,
            "user_id": 1,
            "name": "",
            "image_link": null,
            "author_name": "a",
            "update_type": 4
        },
        {
            "id": 2,
            "resourse_type": 0,
            "updated_at": null,
            "review_id": 1,
            "body": null,
            "rating": null,
            "likes_count": null,
            "comments_count": null,
            "review_updated_at": "2019-03-03 00:00:00",
            "book_id": 1,
            "title": "a",
            "description": "",
            "img_url": "",
            "reviews_count": null,
            "ratings_count": null,
            "ratings_avg": null,
            "pages_no": null,
            "user_id": 1,
            "name": "",
            "image_link": null,
            "author_name": "a",
            "update_type": 3
        }
    ]
}
```

### HTTP Request
`GET api/updates`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    user_id | integer |  optional  | optional to get the updates made by a specific user (default all following)
    max_updates | integer |  optional  | optional to get the max limit of updates.

<!-- END_1c8b56dcc7476331d13beab7a976ba8f -->

#[Book].Show
  Show books by id

function is responsible for showing books by
returning the (id,title,publication_date, isbn, image url,publisher,language,
description,reviews count,rating count,link,author id,genre)
all of that formed by sending the parameters which :-
book_id.
<!-- START_c1831963c98e5d1e2dc2749444d2233b -->
## api/books/show
> Example request:

```bash
curl -X GET -G "http://localhost/api/books/show" \
    -H "Content-Type: application/json" \
    -d '{"book_id":16}'

```

```javascript
const url = new URL("http://localhost/api/books/show");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "book_id": 16
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "status": "success",
    "pages": [
        {
            "id": 1000000,
            "title": "ppp",
            "isbn": 1,
            "img_url": "dsds",
            "publication_date": "2019-03-21",
            "publisher": "fgdg",
            "language": "dfgdg",
            "description": "fdgd",
            "reviews_count": 4,
            "ratings_count": 5,
            "ratings_avg": 9,
            "author_id": 1000000,
            "pages_no": 8,
            "created_at": "2019-03-21 00:00:00",
            "updated_at": "2019-03-21 00:00:00",
            "genre": 0
        }
    ]
}
```

### HTTP Request
`GET api/books/show`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    book_id | integer |  required  | The id of the book.

<!-- END_c1831963c98e5d1e2dc2749444d2233b -->

#[Book].get Book By Author Name
   search about the needed book by its Author name

this function is responsible for showing certain book by
returning the (id,title,publication_date, isbn, image url,publisher,language
,description,reviews count,rating count,link,author id,genre)
all of that formed by sending the parameters which :-
author name
<!-- START_4ff78ec01f28353c43599b20c5deed9b -->
## api/Books/book_Authorname
> Example request:

```bash
curl -X GET -G "http://localhost/api/Books/book_Authorname" \
    -H "Content-Type: application/json" \
    -d '{"Author_name":"IcNQ3mfRYQc5FkZx"}'

```

```javascript
const url = new URL("http://localhost/api/Books/book_Authorname");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "Author_name": "IcNQ3mfRYQc5FkZx"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "status": "success",
    "pages": [
        {
            "id": 1000000,
            "title": "ppp",
            "isbn": 1,
            "img_url": "dsds",
            "publication_date": "2019-03-21",
            "publisher": "fgdg",
            "language": "dfgdg",
            "description": "fdgd",
            "reviews_count": 4,
            "ratings_count": 5,
            "ratings_avg": 9,
            "link": "jyj",
            "author_id": 1000000,
            "pages_no": 8,
            "created_at": "2019-03-21 00:00:00",
            "updated_at": "2019-03-21 00:00:00",
            "genre": 0
        }
    ],
    "book info for me": [
        {
            "shelf_name": 0,
            "rating": 2,
            "id": 4,
            "title": "Internment"
        }
    ]
}
```

### HTTP Request
`GET api/Books/book_Authorname`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    Author_name | string |  required  | Find books by Author's name.

<!-- END_4ff78ec01f28353c43599b20c5deed9b -->

#[Book].get Book By Isbn
   get the needed book by its ISBN

this function is responsible for showing certain book by
returning the (id,title,publication_date, isbn, image url,publisher,language,
description,reviews count,rating count,link,author id,genre)
all of that formed by sending the parameters which :-
isbn.
<!-- START_a73245bf8774b9eb80c387dbb9b98573 -->
## api/Books/book_ISBN
> Example request:

```bash
curl -X GET -G "http://localhost/api/Books/book_ISBN" \
    -H "Content-Type: application/json" \
    -d '{"ISBN":12}'

```

```javascript
const url = new URL("http://localhost/api/Books/book_ISBN");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "ISBN": 12
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "status": "success",
    "pages": [
        {
            "id": 1000000,
            "title": "ppp",
            "isbn": 1,
            "author_name": "G. Willow Wilson",
            "img_url": "dsds",
            "publication_date": "2019-03-21",
            "publisher": "fgdg",
            "language": "dfgdg",
            "description": "fdgd",
            "reviews_count": 4,
            "ratings_count": 5,
            "ratings_avg": 9,
            "author_id": 1000000,
            "pages_no": 8,
            "created_at": "2019-03-21 00:00:00",
            "updated_at": "2019-03-21 00:00:00",
            "genre": 0
        }
    ],
    "book info for me": [
        {
            "shelf_name": 0,
            "rating": 2,
            "id": 1,
            "title": "The Bird King"
        }
    ]
}
```

### HTTP Request
`GET api/Books/book_ISBN`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    ISBN | integer |  required  | Find books by ISBN

<!-- END_a73245bf8774b9eb80c387dbb9b98573 -->

#[Book].get Book By genre
  Show books by genre

function is responsible for showing books by
returning the (id,title,publication_date, isbn, image url,publisher,language,
description,reviews count,rating count,link,author id,genre)
all of that formed by sending the parameters which :-
genre type.
<!-- START_956b28d8b20f35dcd70df9bbf29d7312 -->
## api/books/genre
> Example request:

```bash
curl -X GET -G "http://localhost/api/books/genre" \
    -H "Content-Type: application/json" \
    -d '{"genreName":"J1A2XvsnExFdL10b"}'

```

```javascript
const url = new URL("http://localhost/api/books/genre");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "genreName": "J1A2XvsnExFdL10b"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "status": "success",
    "pages": [
        {
            "id": 1000000,
            "title": "ppp",
            "isbn": 1,
            "img_url": "dsds",
            "publication_date": "2019-03-21",
            "publisher": "fgdg",
            "language": "dfgdg",
            "description": "fdgd",
            "reviews_count": 4,
            "ratings_count": 5,
            "ratings_avg": 9,
            "author_id": 1000000,
            "pages_no": 8,
            "created_at": "2019-03-21 00:00:00",
            "updated_at": "2019-03-21 00:00:00",
            "genre": 0,
            "author_name": "G. Willow Wilson"
        }
    ],
    "books related to me": [
        {
            "shelf_name": 0,
            "rating": 2,
            "id": 1,
            "title": "The Bird King",
            "author_name": "G. Willow Wilson"
        }
    ]
}
```

### HTTP Request
`GET api/books/genre`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    genreName | string |  required  | The Genre of list of books.

<!-- END_956b28d8b20f35dcd70df9bbf29d7312 -->

#[Book].get Book By title
 get the needed book by its name

this function is responsible for showing certain book by
returning the (id,title,publication_date, isbn, image url,publisher,language,
description,reviews count,rating count,link,author id,genre)
all of that formed by sending the parameters which :-
title.
<!-- START_c4b713b7ad8c485e75fc6f65d7d9fa0a -->
## api/Books/book_title
> Example request:

```bash
curl -X GET -G "http://localhost/api/Books/book_title" \
    -H "Content-Type: application/json" \
    -d '{"title":"CXzetmP0g7FlYM7p"}'

```

```javascript
const url = new URL("http://localhost/api/Books/book_title");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "title": "CXzetmP0g7FlYM7p"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "status": "success",
    "pages": [
        {
            "id": 1000000,
            "title": "ppp",
            "isbn": 1,
            "img_url": "dsds",
            "publication_date": "2019-03-21",
            "publisher": "fgdg",
            "language": "dfgdg",
            "description": "fdgd",
            "reviews_count": 4,
            "ratings_count": 5,
            "ratings_avg": 9,
            "author_id": 1000000,
            "pages_no": 8,
            "created_at": "2019-03-21 00:00:00",
            "updated_at": "2019-03-21 00:00:00",
            "genre": "action",
            "author_name": "G. Willow Wilson"
        }
    ],
    "book info for me": [
        {
            "shelf_name": 0,
            "rating": 2,
            "id": 1,
            "author_name": "G. Willow Wilson"
        }
    ]
}
```

### HTTP Request
`GET api/Books/book_title`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | Find books by title

<!-- END_c4b713b7ad8c485e75fc6f65d7d9fa0a -->

#[Following].Follow User
followUser function

Checking the request`s paramaters that has [user_id] paramater

it is aborting in case no user_id is given

Validate the existance of the user_id
if the user doesn`t exist aborting

Validate the relationship is not existing before.
responsing 400 if it exist.

if not exists creating new instance of following model

`
increamenting both Follower: follwoing_count / Followed: followers_count
`

Responses with successfully message in case of passing aborting
<!-- START_5b980adc7cae0a3850861e87e9eb4fdc -->
## api/follow
<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST "http://localhost/api/follow" \
    -H "Content-Type: application/json" \
    -d '{"user_id":17}'

```

```javascript
const url = new URL("http://localhost/api/follow");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": 17
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (201):

```json
{
    "status": "true",
    "message": "Successfully started following Prof. Nia White V"
}
```
> Example response (400):

```json
{
    "status": "false",
    "message": "Something gone wrong ."
}
```
> Example response (404):

```json
[]
```

### HTTP Request
`POST api/follow`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    user_id | integer |  required  | Goodreads user id of user to follow.

<!-- END_5b980adc7cae0a3850861e87e9eb4fdc -->

#[Following].Followers List

followersUser function .


returns followers list of the given [ user_id ] and their currently reading books

each page contains 30 user limiting query with max 30 record.

Checking the request paramaters and validate the existance of the user

aborting in-case of user is not exist

other wise returns the user`s followers list from database table .
<!-- START_b8da414973862c44f3f0b86f52cbee94 -->
## api/followers
<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/followers" \
    -H "Content-Type: application/json" \
    -d '{"page":14,"user_id":15}'

```

```javascript
const url = new URL("http://localhost/api/followers");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "page": 14,
    "user_id": 15
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (404):

```json
[]
```
> Example response (200):

```json
{
    "followers": [
        {
            "id": 1,
            "name": "Miss Madaline Wisozk V",
            "image_link": "http:\/\/wolf.info\/molestiae-qui-sed-at-vel",
            "book_id": 100,
            "currently_reading": "dummuybookName",
            "book_image": "http:\/\/treutel.biz\/",
            "pages": 1200,
            "is_followed": 0
        },
        {
            "id": 4,
            "name": "Modu Rosenbaum",
            "image_link": "http:\/\/wolf.info\/molestiae-qui-sed-at-vel",
            "book_id": null,
            "currently_reading": null,
            "book_image": null,
            "pages": null,
            "is_followed": 1
        },
        {
            "id": 5,
            "name": "Velda Rosenbaum",
            "image_link": "http:\/\/wolf.info\/molestiae-qui-sed-at-vel",
            "book_id": 10,
            "currently_reading": "dummuybookName",
            "book_image": "http:\/\/treutel.biz\/",
            "pages": 1200,
            "is_followed": 1
        }
    ],
    "_start": 1,
    "_end": 3,
    "_total": 3
}
```

### HTTP Request
`GET api/followers`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    page | integer |  optional  | optional 1-N (default 1) returns 30 items per page .
    user_id | integer |  optional  | optional to get the followers list of a specific user (default authenticated user)

<!-- END_b8da414973862c44f3f0b86f52cbee94 -->

#[Following].Following List


followingUser function .

returns following list of the given [ user_id ] and their currently reading books

each page contains 30 user limiting query with max 30 record.

Checking the request paramaters and validate the existance of the user

aborting in-case of user is not exist

other wise returns the user`s following list from database table .
<!-- START_00cf70aa133b8675add61a926a8e351b -->
## api/following
<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/following" \
    -H "Content-Type: application/json" \
    -d '{"page":3,"user_id":20}'

```

```javascript
const url = new URL("http://localhost/api/following");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "page": 3,
    "user_id": 20
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "following": [
        {
            "id": 1,
            "name": "Miss Madaline Wisozk V",
            "image_link": "http:\/\/wolf.info\/molestiae-qui-sed-at-vel",
            "book_id": 100,
            "currently_reading": "dummuybookName",
            "book_image": "http:\/\/treutel.biz\/",
            "pages": 1200
        },
        {
            "id": 4,
            "name": "Modu Rosenbaum",
            "image_link": "http:\/\/wolf.info\/molestiae-qui-sed-at-vel",
            "book_id": null,
            "currently_reading": null,
            "book_image": null,
            "pages": null
        },
        {
            "id": 5,
            "name": "Velda Rosenbaum",
            "image_link": "http:\/\/wolf.info\/molestiae-qui-sed-at-vel",
            "book_id": 10,
            "currently_reading": "dummuybookName",
            "book_image": "http:\/\/treutel.biz\/",
            "pages": 1200
        }
    ],
    "_start": 1,
    "_end": 3,
    "_total": 3
}
```
> Example response (404):

```json
[]
```

### HTTP Request
`GET api/following`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    page | integer |  optional  | optional 1-N (default 1) returns 30 items per page .
    user_id | integer |  optional  | optional to get the following list of a specific user (default authenticated user)

<!-- END_00cf70aa133b8675add61a926a8e351b -->

#[Following].Unfollow User
unfollowUser function

Checking the request`s paramaters that has [user_id] paramater

it is aborting in case no user_id is given

Validate the existance of the user_id
if the user doesn`t exist aborting

Validate the relationship is existing .
if it is not existing it`s aborting .

if exists it is being removes successfully

`
decreamenting both Follower: follwoing_count / Followed: followers_count
`

Responses with successfully message in case of passing aborting
<!-- START_53eaa2aeb494ad42904302950b418b5c -->
## api/unfollow
<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE "http://localhost/api/unfollow" \
    -H "Content-Type: application/json" \
    -d '{"user_id":5}'

```

```javascript
const url = new URL("http://localhost/api/unfollow");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": 5
}

fetch(url, {
    method: "DELETE",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "status": "true",
    "message": "Successfully stopped following Darling White V"
}
```
> Example response (404):

```json
[]
```

### HTTP Request
`DELETE api/unfollow`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    user_id | integer |  required  | Goodreads user id of user to stop following.

<!-- END_53eaa2aeb494ad42904302950b418b5c -->

#[Review].Delete Review
removeReview function

make a validation on the input to check that is satisfing the conditions. 

if tha input is valid it will continue in the code otherwise it will response with error.

check that the authenticated user is  the one who create the review to allow to him to delete it.

 delete the review from the databse 

 decrement the number of reviews on this book 

 decrement the number of ratings on this book

 modify the avgrating for this book 

 decrement the number of ratings for the user

 modify the avgrating for the user

 delete the comment and likes on this review and count them
<!-- START_2ecb9931d2d714dcd6eb41145f7f269b -->
## api/reviwes/delete
<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE "http://localhost/api/reviwes/delete" \
    -H "Content-Type: application/json" \
    -d '{"reviewId":16}'

```

```javascript
const url = new URL("http://localhost/api/reviwes/delete");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "reviewId": 16
}

fetch(url, {
    method: "DELETE",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (201):

```json
{
    "status": "true",
    "userId": 2,
    "ratings_countUser": 4,
    "rating_avgUser": "4.0000",
    "BookId": 3,
    "ratings_avgBook": "4.0000",
    "reviews_countBook": 37,
    "ratings_countBook": 19,
    "NumberOfDeletedCommentsOnThisReview": 3,
    "NumberOfDeletedLikesOnThisReview": 1
}
```
> Example response (204):

```json
{
    "status": "false",
    "Message": "This review doesn't belong to you Ahmed"
}
```
> Example response (204):

```json
{
    "status": "false",
    "Message": "The reviewId is wrongggg."
}
```
> Example response (406):

```json
{
    "status": "false",
    "errors": "The reviewId must be an integer."
}
```

### HTTP Request
`DELETE api/reviwes/delete`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    reviewId | integer |  required  | The id of review to be deleted.

<!-- END_2ecb9931d2d714dcd6eb41145f7f269b -->

#[Review].Make Review
 createReview function

 make a validation on the input to check that is satisfing the conditions 

 if tha input is valid it will continue in the code otherwise it will response with error

 put the book in the shelf_read if it in another shelf or if it wasn't in any shelf 

 create a new review in the databse 

 increment the number of reviews on this book 

 increment the number of ratings on this book

 modify the avgrating for this book 

 increment the number of ratings for the user

 modify the avgrating for the user 
 
each state of the shelf is represented by a number
<!-- START_1521f8492a220ccff8293eeac79158d1 -->
## api/reviwes/create
> Example request:

```bash
curl -X POST "http://localhost/api/reviwes/create" \
    -H "Content-Type: application/json" \
    -d '{"bookId":9,"shelf":9,"body":"3zhlC7f8zGSz2CeB","rating":12}'

```

```javascript
const url = new URL("http://localhost/api/reviwes/create");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "bookId": 9,
    "shelf": 9,
    "body": "3zhlC7f8zGSz2CeB",
    "rating": 12
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (201):

```json
{
    "status": "true",
    "user": 2,
    "book_id": "1",
    "shelfType": "read",
    "bodyOfReview": "Woooooooooooooow , it's a great booooook",
    "rate": "1"
}
```
> Example response (204):

```json
{
    "status": "false",
    "Message": "There is no Book in the database"
}
```
> Example response (404):

```json
{
    "status": "false",
    "Message": "There is no rate to create the review"
}
```
> Example response (406):

```json
{
    "status": "false",
    "errors": "The rating must be an integer."
}
```

### HTTP Request
`POST api/reviwes/create`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    bookId | integer |  required  | The book id has reviewed  to be created.
    shelf | integer |  required  | (read->0,currently-reading->1,to-read->2,nothig of these shelves->3) default is (read) .
    body | optional |  optional  | string optional The text of the review.
    rating | integer |  optional  | optional Rating (0-5) default is 0 (No rating).

<!-- END_1521f8492a220ccff8293eeac79158d1 -->

#[Review].User`s all-reviews


List the reviews for a specific user
"id" as paramater if it is not given in the request
it returns authenticated-user reviews
<!-- START_da8699228d8799362aeee54ee0f6a556 -->
## api/user_reviews
<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/user_reviews" \
    -H "Content-Type: application/json" \
    -d '{"id":3}'

```

```javascript
const url = new URL("http://localhost/api/user_reviews");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "id": 3
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "reviews": [
        {
            "review_id": 2,
            "book_id": 2,
            "title": "Sherwood",
            "img_url": "https:\/\/kbimages1-a.akamaihd.net\/6954f4cc-6e4e-46e3-8bc2-81b93f57a723\/353\/569\/90\/False\/sherwood-7.jpg",
            "pages_no": 0,
            "body": "FTJ4PlC0Zq",
            "shelf_id": 0,
            "likes_count": 0,
            "comments_count": 0,
            "created_at": "2019-04-27 22:44:46",
            "updated_at": "2019-04-27 22:44:46",
            "comments": [
                {
                    "comment_id": 2,
                    "user_id": 7,
                    "name": "Mohamed",
                    "image_link": "http:\/\/127.0.0.1:8000\/storage\/avatars\/default.jpg",
                    "body": "mohamedComment",
                    "have_the_comment": "No",
                    "created_at": "2019-04-28 08:33:37",
                    "updated_at": "2019-04-28 08:33:37"
                }
            ]
        },
        {
            "review_id": 16,
            "book_id": 3,
            "title": "Once & Future",
            "img_url": "https:\/\/images-na.ssl-images-amazon.com\/images\/I\/51Jb2iLFuXL._SX329_BO1,204,203,200_.jpg",
            "pages_no": 0,
            "body": "HluxxIGc80",
            "shelf_id": 2,
            "likes_count": 0,
            "comments_count": 0,
            "created_at": "2019-04-27 22:44:46",
            "updated_at": "2019-04-27 22:44:46",
            "comments": [
                {
                    "comment_id": 1,
                    "user_id": 7,
                    "name": "Mohamed",
                    "image_link": "http:\/\/127.0.0.1:8000\/storage\/avatars\/default.jpg",
                    "body": "mohamedComment",
                    "have_the_comment": "No",
                    "created_at": "2019-04-28 08:33:16",
                    "updated_at": "2019-04-28 08:33:16"
                },
                {
                    "comment_id": 3,
                    "user_id": 7,
                    "name": "Mohamed",
                    "image_link": "http:\/\/127.0.0.1:8000\/storage\/avatars\/default.jpg",
                    "body": "mohamedCommentadsad",
                    "have_the_comment": "No",
                    "created_at": "2019-04-28 08:33:48",
                    "updated_at": "2019-04-28 08:33:48"
                }
            ]
        }
    ]
}
```

### HTTP Request
`GET api/user_reviews`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    id | integer |  optional  | optional id of the user default authenticated-user id.

<!-- END_da8699228d8799362aeee54ee0f6a556 -->

#[Review].getReviewsByTitle

Get the reviews for a book given a title string.
this function is responsible for showing certain review by
returning the (body,rating,comments counts, likes counts, user id ,book id , updates date)
of a certain review and also it returns the shelf name of the book the review about
all of that formed by sending the parameters which 
title -> required.
rating ->optional.
author ->optional.
<!-- START_4b99cbaf6e88b97f13eaa08ab7661532 -->
## api/reviwes/books
<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/reviwes/books" \
    -H "Content-Type: application/json" \
    -d '{"title":"v4FhMWWfzCY4GPfc","author":"ojYQJ7Qvpyc7axCa","rating":5}'

```

```javascript
const url = new URL("http://localhost/api/reviwes/books");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "title": "v4FhMWWfzCY4GPfc",
    "author": "ojYQJ7Qvpyc7axCa",
    "rating": 5
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "status": "success",
    "pages": [
        {
            "id": 6,
            "user_id": 3,
            "book_id": 21,
            "body": "Woooooooooooooow  it is a great booooook",
            "shelf_name": 0,
            "rating": 2,
            "likes_count": null,
            "comments_count": 5,
            "created_at": null,
            "updated_at": null,
            "title": "A1Qqt5",
            "isbn": 874903,
            "img_url": "1QnTh",
            "publication_date": "1984-01-23",
            "publisher": "p8KKlg0Kz0",
            "language": "3icja",
            "description": "7fiL90Uxk3POcHkY0gJD",
            "reviews_count": 1,
            "ratings_count": 1,
            "ratings_avg": 2,
            "link": "http:\/\/www.rowe.biz\/odio-iure-eos-omnis-amet",
            "author_id": 6,
            "pages_no": 0,
            "author_name": "ahmed"
        }
    ]
}
```

### HTTP Request
`GET api/reviwes/books`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | The title of the book to lookup.
    author | string |  optional  | optional The author name of the book to lookup.
    rating | integer |  optional  | optional Show only reviews with a particular rating.

<!-- END_4b99cbaf6e88b97f13eaa08ab7661532 -->

#[Review].show Review For Book For User


Get the review for specific user on a specific Book 
this function is responsible for showing review of a certain user on a certain book by
returning the (body,rating) of a certain review and also it returns the shelf name of
the book the review about
all of that formed by sending the parameters which :-
book id and
user id
<!-- START_af645b6773d834ce7a3f0b9c5df967cf -->
## api/showReviewForBookForUser
> Example request:

```bash
curl -X GET -G "http://localhost/api/showReviewForBookForUser" \
    -H "Content-Type: application/json" \
    -d '{"userId":"q9yYKsb8l0TBnkyu","bookId":"62xmfNqHxjmLEWaO"}'

```

```javascript
const url = new URL("http://localhost/api/showReviewForBookForUser");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "userId": "q9yYKsb8l0TBnkyu",
    "bookId": "62xmfNqHxjmLEWaO"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "status": "success",
    "pages": [
        {
            "id": 5,
            "rating": 4,
            "shelf_name": 0,
            "body": "UnKo1M1dWG"
        },
        {
            "id": 8,
            "rating": 4,
            "shelf_name": 0,
            "body": "j598S8DmNG"
        }
    ],
    "user": [
        {
            "image_link": "default.jpg",
            "name": "test"
        }
    ],
    "book_title": [
        {
            "title": "Sherwood"
        }
    ]
}
```

### HTTP Request
`GET api/showReviewForBookForUser`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    userId | optional |  optional  | id of the of the user
    bookId | required |  optional  | id of the of the book

<!-- END_af645b6773d834ce7a3f0b9c5df967cf -->

#[Review].show Review For Book
get a specific review 

this function is responsible for showing details of a certain review by
returning the (body,rating,comments counts, likes counts, user id ,book id )
of a certain review and also it returns the shelf name of the book the review about
all of that formed by sending the parameters which :-
review id.
<!-- START_102e27bc17cce7a0f22b851d24be127a -->
## api/showReviewOfBook
> Example request:

```bash
curl -X GET -G "http://localhost/api/showReviewOfBook" \
    -H "Content-Type: application/json" \
    -d '{"reviewId":"Nfd5CqAxfo7y2P07"}'

```

```javascript
const url = new URL("http://localhost/api/showReviewOfBook");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "reviewId": "Nfd5CqAxfo7y2P07"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "status": "success",
    "pages": [
        {
            "id": 2,
            "user_id": 3,
            "book_id": 21,
            "body": "Woooooooooooooow  it is a great booooook",
            "shelf_name": 0,
            "rating": 2,
            "likes_count": null,
            "comments_count": 5,
            "created_at": "2019-03-23 15:41:01",
            "updated_at": "2019-03-23 15:41:01"
        }
    ],
    "user": [
        {
            "user_name": "Esmeralda Ruecker",
            "image_link": "https:\/\/lorempixel.com\/640\/480\/?10685"
        }
    ],
    "book": [
        {
            "book_name": "A1Qqt5",
            "book_image": "1QnTh"
        }
    ],
    "auther": [
        {
            "author_name": "ahmed"
        }
    ],
    "if_liked": 1
}
```

### HTTP Request
`GET api/showReviewOfBook`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    reviewId | required |  optional  | id of the of the review to get it's body when notification happens

<!-- END_102e27bc17cce7a0f22b851d24be127a -->

#[Review].show Reviews For Book

Get the review for specific user on a specific Book
this function is responsible for showing review of a certain book by returning the (idmbody,rating,likes count,
comments count,user id)
of a certain review and also it returns the shelf name of the book the review about
and also the username as well, all of that formed by sending the parameters which :-
book id
<!-- START_d0c06994f431d040bf6d90b2c8c3117b -->
## api/showReviewsForABook
> Example request:

```bash
curl -X GET -G "http://localhost/api/showReviewsForABook" \
    -H "Content-Type: application/json" \
    -d '{"bookId":17}'

```

```javascript
const url = new URL("http://localhost/api/showReviewsForABook");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "bookId": 17
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "status": "success",
    "pages": [
        {
            "id": 8,
            "book_id": 61,
            "body": "ktok",
            "rating": 5,
            "shelf_name": 3,
            "likes_count": 9,
            "comments_count": 7,
            "user_id": 2,
            "created_at": "2019-04-17 00:00:00",
            "updated_at": "2019-04-25 00:00:00",
            "username": "Merl Beer V",
            "userimagelink": "https:\/\/lorempixel.com\/640\/480\/?94923"
        },
        {
            "id": 1000010,
            "book_id": 61,
            "body": "Woooooooooooooow  it is a great booooook",
            "rating": 2,
            "shelf_name": 0,
            "likes_count": null,
            "comments_count": null,
            "user_id": 1,
            "created_at": "2019-04-05 23:32:56",
            "updated_at": "2019-04-05 23:32:56",
            "username": "Shakira Hahn",
            "userimagelink": "https:\/\/lorempixel.com\/640\/480\/?74240"
        },
        {
            "id": 5,
            "book_id": 61,
            "body": "gghg",
            "rating": 5,
            "shelf_name": 1,
            "likes_count": 4,
            "comments_count": 9,
            "user_id": 3,
            "created_at": "2019-04-03 00:00:00",
            "updated_at": "2019-04-10 00:00:00",
            "username": "Esmeralda Ruecker",
            "userimagelink": "https:\/\/lorempixel.com\/640\/480\/?10685"
        }
    ],
    "liked_reviews": [
        {
            "id": 1
        }
    ]
}
```

### HTTP Request
`GET api/showReviewsForABook`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    bookId | integer |  required  | id of the of the book

<!-- END_d0c06994f431d040bf6d90b2c8c3117b -->

#[Shelf].Add Book
addBook function .

Add a book to a shelf


given request paramters (book_id , shelf_id=0)

checking the existance of the given book on the shelf if it already exists it`s being update

if it`s new entry creating new record and responses successfully add

in-case of the book is already exists and the user trying to add it onto the same shelf

it returnd an error message ( Something gone wrong).
<!-- START_1e7cb27e22831e4a6163a5908d6b002b -->
## api/shelf/add_book
<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST "http://localhost/api/shelf/add_book" \
    -H "Content-Type: application/json" \
    -d '{"shelf_id":11,"book_id":8}'

```

```javascript
const url = new URL("http://localhost/api/shelf/add_book");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "shelf_id": 11,
    "book_id": 8
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (201):

```json
{
    "status": "true",
    "message": "Successfully added ."
}
```
> Example response (400):

```json
{
    "status": "false",
    "message": "Something gone wrong ."
}
```
> Example response (404):

```json
[]
```

### HTTP Request
`POST api/shelf/add_book`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    shelf_id | integer |  required  | shelf_id { read:0 ,currently_reading:1, to_read:2 } default is read.
    book_id | integer |  required  | The id of the book.

<!-- END_1e7cb27e22831e4a6163a5908d6b002b -->

#[Shelf].Remove Book
removeBook function

Remove a book from a shelf

it is required (book_id,shelf_id) in the request

Validate the existance of these paramaters in the request

Then searching for them in the DB . deleting them if exists

returns successfully removed when it is deleted

otherwise it respones with error message .
<!-- START_06eb9d0211faabac28f877685cb3e0d9 -->
## api/shelf/remove_book
<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE "http://localhost/api/shelf/remove_book" \
    -H "Content-Type: application/json" \
    -d '{"shelf_id":16,"book_id":11}'

```

```javascript
const url = new URL("http://localhost/api/shelf/remove_book");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "shelf_id": 16,
    "book_id": 11
}

fetch(url, {
    method: "DELETE",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (400):

```json
{
    "status": "false",
    "message": "Something gone wrong ."
}
```
> Example response (200):

```json
{
    "status": "true",
    "message": "Successfully removed ."
}
```
> Example response (404):

```json
[]
```

### HTTP Request
`DELETE api/shelf/remove_book`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    shelf_id | integer |  required  | shelf_id { read:0 ,currently_reading:1, to_read:2 } default is read.
    book_id | integer |  required  | The id of the book.

<!-- END_06eb9d0211faabac28f877685cb3e0d9 -->

#[Shelf].Show Shelf
showShelf
give the functio the id of the book and return the shelf number for you

or told you that you don't have this book in nay shelf
<!-- START_71a5abf0cc54df4f7a1cf5d23a346437 -->
## api/showShelf
<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/showShelf" \
    -H "Content-Type: application/json" \
    -d '{"bookId":16}'

```

```javascript
const url = new URL("http://localhost/api/showShelf");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "bookId": 16
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "ShelfName": 0,
    "status": "true"
}
```
> Example response (200):

```json
{
    "status": "true",
    "Message": "The book not in a shelf for you"
}
```
> Example response (404):

```json
{
    "status": "false",
    "Message": "There is no book with this id"
}
```
> Example response (404):

```json
{
    "status": "false",
    "errors": "The id field is required."
}
```

### HTTP Request
`GET api/showShelf`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    bookId | integer |  required  | id of the book to get it's shelf

<!-- END_71a5abf0cc54df4f7a1cf5d23a346437 -->

#[Shelf].getBooksOnShelf
show books on the shelf
this function is responsible for showing books on the user's shelf by
returning the (book id,title).
all of that formed by sending the parameters which :-
shelf name
user id
<!-- START_135767995f7aebdc2a048c4bf90f4dc8 -->
## api/shelf
> Example request:

```bash
curl -X GET -G "http://localhost/api/shelf" \
    -H "Content-Type: application/json" \
    -d '{"user_id":13,"shelf_name":19}'

```

```javascript
const url = new URL("http://localhost/api/shelf");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": 13,
    "shelf_name": 19
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "status": "success",
    "pages": [
        {
            "book_id": 95,
            "title": "9jT4WR",
            "id": 3,
            "isbn": "9780316449274",
            "img_url": "https:\/\/images-na.ssl-images-amazon.com\/images\/I\/51Jb2iLFuXL._SX329_BO1,204,203,200_.jpg",
            "reviews_count": 0,
            "ratings_count": 0,
            "author_id": 3,
            "author_name": "Meagan Spooner",
            "ratings_avg": 0,
            "created_at": "2019-05-03 00:15:55"
        }
    ]
}
```

### HTTP Request
`GET api/shelf`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    user_id | integer |  optional  | optional Get the books on a member's shelf.
    shelf_name | integer |  required  | specified shelf`s name.

<!-- END_135767995f7aebdc2a048c4bf90f4dc8 -->

<!-- START_ef6b6bd65860d3871bdeacfd941950e6 -->
## api/shelf/getbook
> Example request:

```bash
curl -X GET -G "http://localhost/api/shelf/getbook" \
    -H "Content-Type: application/json" \
    -d '{"user_id":8,"shelf_name":7}'

```

```javascript
const url = new URL("http://localhost/api/shelf/getbook");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": 8,
    "shelf_name": 7
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "status": "success",
    "pages": [
        {
            "book_id": 95,
            "title": "9jT4WR",
            "id": 3,
            "isbn": "9780316449274",
            "img_url": "https:\/\/images-na.ssl-images-amazon.com\/images\/I\/51Jb2iLFuXL._SX329_BO1,204,203,200_.jpg",
            "reviews_count": 0,
            "ratings_count": 0,
            "author_id": 3,
            "author_name": "Meagan Spooner",
            "ratings_avg": 0,
            "created_at": "2019-05-03 00:15:55"
        }
    ]
}
```

### HTTP Request
`GET api/shelf/getbook`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    user_id | integer |  optional  | optional Get the books on a member's shelf.
    shelf_name | integer |  required  | specified shelf`s name.

<!-- END_ef6b6bd65860d3871bdeacfd941950e6 -->

#[User].Login
logIn function

Take the request has [email , password] and check that the email is email type and exists in database and also the password

if all is correct return a response with status 200 and json file has [name , username , image_link]

if there are any errors, return a response with status 405 has the message describe the error
<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
## api/login
> Example request:

```bash
curl -X POST "http://localhost/api/login" \
    -H "Content-Type: application/json" \
    -d '{"email":"pozHvSsiBdx2iNxq","password":"NaRjkfdBd1ZBZm8G"}'

```

```javascript
const url = new URL("http://localhost/api/login");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "pozHvSsiBdx2iNxq",
    "password": "NaRjkfdBd1ZBZm8G"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (405):

```json
{
    "errors": [
        "The email field is required.",
        "The password field is required."
    ]
}
```
> Example response (405):

```json
{
    "errors": "Already Authorized ."
}
```
> Example response (200):

```json
{
    "status": "true",
    "user": {
        "name": "",
        "username": "",
        "image_link": ""
    },
    "token": "",
    "token_type": "",
    "expires_in": ""
}
```

### HTTP Request
`POST api/login`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    email | string |  required  | .
    password | string |  required  | .

<!-- END_c3fa189a6c95ca36ad6ac4791a873d23 -->

#[User].Logout
logOut function

Take the request has [Authorization] in the header and this paramater is checked in middleware

if it valid one the function return it into invalid and return response with status 200 with message [you have logged out]

if this [Authorization] is invalid the middleware return a response with status 405 has a message [UnAuthorized].
<!-- START_bfd94d52f65d7e0282e0634b79e28c7b -->
## api/logout
<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE "http://localhost/api/logout" 
```

```javascript
const url = new URL("http://localhost/api/logout");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "message": "You have logged out"
}
```
> Example response (405):

```json
{
    "message": "Unauthorized"
}
```

### HTTP Request
`DELETE api/logout`


<!-- END_bfd94d52f65d7e0282e0634b79e28c7b -->

#[User].Search by name or username

searchByName function
<!-- START_0094660cf4cae52e13841e9edd811ab6 -->
## api/search_by_name_username
<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/search_by_name_username" \
    -H "Content-Type: application/json" \
    -d '{"name":"oMnfMi0d0C1DR7wG"}'

```

```javascript
const url = new URL("http://localhost/api/search_by_name_username");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "oMnfMi0d0C1DR7wG"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "users": [
        {
            "id": 7,
            "username": "Mido",
            "name": "Mohamed",
            "image_link": "http:\/\/127.0.0.1:8000\/storage\/avatars\/default.jpg",
            "gender": "male",
            "country": "Egypt",
            "city": "Cairo",
            "followers_count": 0,
            "following_count": 0
        }
    ]
}
```

### HTTP Request
`GET api/search_by_name_username`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | name/username of person you`r looking for .

<!-- END_0094660cf4cae52e13841e9edd811ab6 -->

#[User].Search by name

searchByName function
<!-- START_d0846f4ae0e2ba4029cad641f7140c0a -->
## api/search_by_name
<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/search_by_name" \
    -H "Content-Type: application/json" \
    -d '{"name":"PqTPbrVmGIphP0fa"}'

```

```javascript
const url = new URL("http://localhost/api/search_by_name");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "PqTPbrVmGIphP0fa"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "users": [
        {
            "id": 4,
            "username": "Nour",
            "name": "Nour",
            "image_link": "http:\/\/127.0.0.1:8000\/storage\/avatars\/default.jpg",
            "gender": "female",
            "country": "Egypt",
            "city": "Cairo",
            "followers_count": 0,
            "following_count": 0
        },
        {
            "id": 7,
            "username": "Mido",
            "name": "Mohamed",
            "image_link": "http:\/\/127.0.0.1:8000\/storage\/avatars\/default.jpg",
            "gender": "male",
            "country": "Egypt",
            "city": "Cairo",
            "followers_count": 0,
            "following_count": 0
        }
    ]
}
```

### HTTP Request
`GET api/search_by_name`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | name of person you`r looking for .

<!-- END_d0846f4ae0e2ba4029cad641f7140c0a -->

#[User].Search by username

searchByName function
<!-- START_87bc03cf100734f9a389b83b16b09425 -->
## api/search_by_username
<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/search_by_username" \
    -H "Content-Type: application/json" \
    -d '{"username":"diuZlHEmZmhaRcfn"}'

```

```javascript
const url = new URL("http://localhost/api/search_by_username");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "username": "diuZlHEmZmhaRcfn"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "users": [
        {
            "id": 4,
            "username": "Nour",
            "name": "Nour",
            "image_link": "http:\/\/127.0.0.1:8000\/storage\/avatars\/default.jpg",
            "gender": "female",
            "country": "Egypt",
            "city": "Cairo",
            "followers_count": 0,
            "following_count": 0
        },
        {
            "id": 6,
            "username": "LoLo",
            "name": "TheLeader",
            "image_link": "http:\/\/127.0.0.1:8000\/storage\/avatars\/default.jpg",
            "gender": "male",
            "country": "Egypt",
            "city": "Cairo",
            "followers_count": 0,
            "following_count": 0
        },
        {
            "id": 7,
            "username": "Mido",
            "name": "Mohamed",
            "image_link": "http:\/\/127.0.0.1:8000\/storage\/avatars\/default.jpg",
            "gender": "male",
            "country": "Egypt",
            "city": "Cairo",
            "followers_count": 0,
            "following_count": 0
        }
    ]
}
```

### HTTP Request
`GET api/search_by_username`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    username | string |  required  | username of person you`r looking for .

<!-- END_87bc03cf100734f9a389b83b16b09425 -->

#[User].show Profile

showProfile function

checking the request given paramaters if user_id exists

it returns his profile-details

other-wise it returns authenticated user`s profile from database user table .
<!-- START_02b571ee5bd2fac11f2edd358ef66b79 -->
## api/showProfile
<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/showProfile" \
    -H "Content-Type: application/json" \
    -d '{"id":20}'

```

```javascript
const url = new URL("http://localhost/api/showProfile");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "id": 20
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "id": 1,
    "name": "Jeromy Heidenreich",
    "username": "Dr. Zaria Witting I",
    "email": "anna29@example.net",
    "email_verified_at": "2019-03-21 20:42:11",
    "link": "http:\/\/kozey.com\/excepturi-nemo-nemo-sequi-corrupti",
    "image_link": "https:\/\/lorempixel.com\/640\/480\/?23657",
    "small_image_link": "https:\/\/lorempixel.com\/100\/100\/?36683",
    "about": "weRmt2re2n",
    "age": 65,
    "gender": "N\/A",
    "country": "Egupt",
    "city": "Cairo",
    "joined_at": "1981-11-16",
    "last_active": "2019-03-23 12:17:09",
    "followers_count": 2,
    "following_count": 5,
    "rating_avg": 2,
    "rating_count": 6,
    "books_count": null,
    "birthday": null,
    "created_at": null,
    "updated_at": null,
    "is_followed": 1
}
```

### HTTP Request
`GET api/showProfile`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    id | integer |  optional  | optional this parameter to show the info of the other user (default authenticated user) .

<!-- END_02b571ee5bd2fac11f2edd358ef66b79 -->

#general
<!-- START_41d2f7697c6118f36f8b676e5bd19ea0 -->
## Login using the given user ID / email.

> Example request:

```bash
curl -X GET -G "http://localhost/_dusk/login/{userId}/{guard?}" 
```

```javascript
const url = new URL("http://localhost/_dusk/login/{userId}/{guard?}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (500):

```json
{
    "message": "Auth guard [1] is not defined.",
    "exception": "InvalidArgumentException",
    "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\AuthManager.php",
    "line": 84,
    "trace": [
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\AuthManager.php",
            "line": 68,
            "function": "resolve",
            "class": "Illuminate\\Auth\\AuthManager",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Facades\\Facade.php",
            "line": 237,
            "function": "guard",
            "class": "Illuminate\\Auth\\AuthManager",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\dusk\\src\\Http\\Controllers\\UserController.php",
            "line": 40,
            "function": "__callStatic",
            "class": "Illuminate\\Support\\Facades\\Facade",
            "type": "::"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php",
            "line": 48,
            "function": "login",
            "class": "Laravel\\Dusk\\Http\\Controllers\\UserController",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 219,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 176,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 680,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php",
            "line": 41,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php",
            "line": 75,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php",
            "line": 49,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\View\\Middleware\\ShareErrorsFromSession",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php",
            "line": 56,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php",
            "line": 37,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php",
            "line": 66,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\EncryptCookies",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 682,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 657,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 623,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 612,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 62,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\barryvdh\\laravel-cors\\src\\HandleCors.php",
            "line": 36,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Barryvdh\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\ResponseStrategies\\ResponseCallStrategy.php",
            "line": 276,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\ResponseStrategies\\ResponseCallStrategy.php",
            "line": 260,
            "function": "callLaravelRoute",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseStrategies\\ResponseCallStrategy",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\ResponseStrategies\\ResponseCallStrategy.php",
            "line": 36,
            "function": "makeApiCall",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseStrategies\\ResponseCallStrategy",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\ResponseResolver.php",
            "line": 49,
            "function": "__invoke",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseStrategies\\ResponseCallStrategy",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\ResponseResolver.php",
            "line": 68,
            "function": "resolve",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseResolver",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\Generator.php",
            "line": 57,
            "function": "getResponse",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseResolver",
            "type": "::"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Commands\\GenerateDocumentation.php",
            "line": 201,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Tools\\Generator",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Commands\\GenerateDocumentation.php",
            "line": 59,
            "function": "processRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 32,
            "function": "call_user_func_array"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 90,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 34,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 580,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 183,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 255,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 170,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\symfony\\console\\Application.php",
            "line": 908,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\symfony\\console\\Application.php",
            "line": 269,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\symfony\\console\\Application.php",
            "line": 145,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 90,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 122,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET _dusk/login/{userId}/{guard?}`


<!-- END_41d2f7697c6118f36f8b676e5bd19ea0 -->

<!-- START_6375e7300024aae0f6af283b4a72cb1b -->
## Log the user out of the application.

> Example request:

```bash
curl -X GET -G "http://localhost/_dusk/logout/{guard?}" 
```

```javascript
const url = new URL("http://localhost/_dusk/logout/{guard?}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (500):

```json
{
    "message": "Auth guard [1] is not defined.",
    "exception": "InvalidArgumentException",
    "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\AuthManager.php",
    "line": 84,
    "trace": [
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\AuthManager.php",
            "line": 68,
            "function": "resolve",
            "class": "Illuminate\\Auth\\AuthManager",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Facades\\Facade.php",
            "line": 237,
            "function": "guard",
            "class": "Illuminate\\Auth\\AuthManager",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\dusk\\src\\Http\\Controllers\\UserController.php",
            "line": 56,
            "function": "__callStatic",
            "class": "Illuminate\\Support\\Facades\\Facade",
            "type": "::"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php",
            "line": 48,
            "function": "logout",
            "class": "Laravel\\Dusk\\Http\\Controllers\\UserController",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 219,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 176,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 680,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php",
            "line": 41,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php",
            "line": 75,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php",
            "line": 49,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\View\\Middleware\\ShareErrorsFromSession",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php",
            "line": 56,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php",
            "line": 37,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php",
            "line": 66,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\EncryptCookies",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 682,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 657,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 623,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 612,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 62,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\barryvdh\\laravel-cors\\src\\HandleCors.php",
            "line": 36,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Barryvdh\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\ResponseStrategies\\ResponseCallStrategy.php",
            "line": 276,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\ResponseStrategies\\ResponseCallStrategy.php",
            "line": 260,
            "function": "callLaravelRoute",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseStrategies\\ResponseCallStrategy",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\ResponseStrategies\\ResponseCallStrategy.php",
            "line": 36,
            "function": "makeApiCall",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseStrategies\\ResponseCallStrategy",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\ResponseResolver.php",
            "line": 49,
            "function": "__invoke",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseStrategies\\ResponseCallStrategy",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\ResponseResolver.php",
            "line": 68,
            "function": "resolve",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseResolver",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\Generator.php",
            "line": 57,
            "function": "getResponse",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseResolver",
            "type": "::"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Commands\\GenerateDocumentation.php",
            "line": 201,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Tools\\Generator",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Commands\\GenerateDocumentation.php",
            "line": 59,
            "function": "processRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 32,
            "function": "call_user_func_array"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 90,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 34,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 580,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 183,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 255,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 170,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\symfony\\console\\Application.php",
            "line": 908,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\symfony\\console\\Application.php",
            "line": 269,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\symfony\\console\\Application.php",
            "line": 145,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 90,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 122,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET _dusk/logout/{guard?}`


<!-- END_6375e7300024aae0f6af283b4a72cb1b -->

<!-- START_09dcf3e9a9b6585fa40e4ead6c3c858a -->
## Retrieve the authenticated user identifier and class name.

> Example request:

```bash
curl -X GET -G "http://localhost/_dusk/user/{guard?}" 
```

```javascript
const url = new URL("http://localhost/_dusk/user/{guard?}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (500):

```json
{
    "message": "Auth guard [1] is not defined.",
    "exception": "InvalidArgumentException",
    "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\AuthManager.php",
    "line": 84,
    "trace": [
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\AuthManager.php",
            "line": 68,
            "function": "resolve",
            "class": "Illuminate\\Auth\\AuthManager",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Facades\\Facade.php",
            "line": 237,
            "function": "guard",
            "class": "Illuminate\\Auth\\AuthManager",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\dusk\\src\\Http\\Controllers\\UserController.php",
            "line": 18,
            "function": "__callStatic",
            "class": "Illuminate\\Support\\Facades\\Facade",
            "type": "::"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php",
            "line": 48,
            "function": "user",
            "class": "Laravel\\Dusk\\Http\\Controllers\\UserController",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 219,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 176,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 680,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php",
            "line": 41,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php",
            "line": 75,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php",
            "line": 49,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\View\\Middleware\\ShareErrorsFromSession",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php",
            "line": 56,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php",
            "line": 37,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php",
            "line": 66,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\EncryptCookies",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 682,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 657,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 623,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 612,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 62,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\barryvdh\\laravel-cors\\src\\HandleCors.php",
            "line": 36,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Barryvdh\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\ResponseStrategies\\ResponseCallStrategy.php",
            "line": 276,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\ResponseStrategies\\ResponseCallStrategy.php",
            "line": 260,
            "function": "callLaravelRoute",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseStrategies\\ResponseCallStrategy",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\ResponseStrategies\\ResponseCallStrategy.php",
            "line": 36,
            "function": "makeApiCall",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseStrategies\\ResponseCallStrategy",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\ResponseResolver.php",
            "line": 49,
            "function": "__invoke",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseStrategies\\ResponseCallStrategy",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\ResponseResolver.php",
            "line": 68,
            "function": "resolve",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseResolver",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\Generator.php",
            "line": 57,
            "function": "getResponse",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseResolver",
            "type": "::"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Commands\\GenerateDocumentation.php",
            "line": 201,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Tools\\Generator",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Commands\\GenerateDocumentation.php",
            "line": 59,
            "function": "processRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 32,
            "function": "call_user_func_array"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 90,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 34,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 580,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 183,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 255,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 170,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\symfony\\console\\Application.php",
            "line": 908,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\symfony\\console\\Application.php",
            "line": 269,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\symfony\\console\\Application.php",
            "line": 145,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 90,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 122,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "F:\\proj\\goodreads-api\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET _dusk/user/{guard?}`


<!-- END_09dcf3e9a9b6585fa40e4ead6c3c858a -->

<!-- START_66df3678904adde969490f2278b8f47f -->
## Authenticate the request for channel access.

> Example request:

```bash
curl -X GET -G "http://localhost/broadcasting/auth" 
```

```javascript
const url = new URL("http://localhost/broadcasting/auth");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
null
```

### HTTP Request
`GET broadcasting/auth`

`POST broadcasting/auth`


<!-- END_66df3678904adde969490f2278b8f47f -->


