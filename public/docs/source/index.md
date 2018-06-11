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

#Goals

Longer description
<!-- START_89928e83926de61f62d0dc8b8ecbee49 -->
## This is the short description [and should be unique as anchor tags link to this in navigation menu]

This can be an optional longer description of your API call, used within the documentation.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/goals" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/goals",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
"{\n data: ['user_id', 'parent_id', 'name', 'description', 'units', 'budget', 'start', 'end'],\n}"
```

### HTTP Request
`GET api/v1/goals`

`HEAD api/v1/goals`


<!-- END_89928e83926de61f62d0dc8b8ecbee49 -->

<!-- START_f1c03d9b9405944f13a51eb42b7f683f -->
## Get a goal

> Example request:

```bash
curl -X GET "http://localhost/api/v1/goals/{goal}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/goals/{goal}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
"{\n data: ['user_id', 'parent_id', 'name', 'description', 'units', 'budget', 'start', 'end'],\n}"
```

### HTTP Request
`GET api/v1/goals/{goal}`

`HEAD api/v1/goals/{goal}`


<!-- END_f1c03d9b9405944f13a51eb42b7f683f -->

<!-- START_b48d11443cf73d3b716f9ccc26db50ef -->
## Store a goal

> Example request:

```bash
curl -X POST "http://localhost/api/v1/goals" \
-H "Accept: application/json" \
    -d "user_id"="416991385" \
    -d "parent_id"="416991385" \
    -d "name"="repudiandae" \
    -d "description"="repudiandae" \
    -d "units"="416991385" \
    -d "budget"="416991385" \
    -d "start"="2014-04-09" \
    -d "end"="2014-04-09" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/goals",
    "method": "POST",
    "data": {
        "user_id": 416991385,
        "parent_id": 416991385,
        "name": "repudiandae",
        "description": "repudiandae",
        "units": 416991385,
        "budget": 416991385,
        "start": "2014-04-09",
        "end": "2014-04-09"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
"{\n data: ['user_id', 'parent_id', 'name', 'description', 'units', 'budget', 'start', 'end'],\n}"
```

### HTTP Request
`POST api/v1/goals`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    user_id | integer |  required  | 
    parent_id | integer |  optional  | Valid goal id
    name | string |  required  | 
    description | string |  optional  | 
    units | numeric |  optional  | 
    budget | numeric |  optional  | 
    start | date |  optional  | 
    end | date |  optional  | 

<!-- END_b48d11443cf73d3b716f9ccc26db50ef -->

<!-- START_f80fc1a97e7f976a5c77f355fc69a570 -->
## Update a goal

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/goals/{goal}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/goals/{goal}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
"{\n data: ['user_id', 'parent_id', 'name', 'description', 'units', 'budget', 'start', 'end'],\n}"
```

### HTTP Request
`PUT api/v1/goals/{goal}`


<!-- END_f80fc1a97e7f976a5c77f355fc69a570 -->

<!-- START_0ef43573dbc8ea17347c513c5d0f1d93 -->
## Delete a goal

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/goals/{goal}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/goals/{goal}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
"{\n id: 12,\n}"
```

### HTTP Request
`DELETE api/v1/goals/{goal}`


<!-- END_0ef43573dbc8ea17347c513c5d0f1d93 -->

#general
<!-- START_8515037be07bcb443a14691ac62822fe -->
## api/v1/tasks

> Example request:

```bash
curl -X GET "http://localhost/api/v1/tasks" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/tasks",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[]
```

### HTTP Request
`GET api/v1/tasks`

`HEAD api/v1/tasks`


<!-- END_8515037be07bcb443a14691ac62822fe -->

<!-- START_6c2c8e52cea1c493c00f7834c176ef86 -->
## api/v1/tasks/{task}

> Example request:

```bash
curl -X GET "http://localhost/api/v1/tasks/{task}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/tasks/{task}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "No query results for model [App\\Task].",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException",
    "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Exceptions\/Handler.php",
    "line": 199,
    "trace": [
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Exceptions\/Handler.php",
            "line": 175,
            "function": "prepareException",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/app\/Exceptions\/Handler.php",
            "line": 49,
            "function": "render",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/nunomaduro\/collision\/src\/Adapters\/Laravel\/ExceptionHandler.php",
            "line": 68,
            "function": "render",
            "class": "App\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 83,
            "function": "render",
            "class": "NunoMaduro\\Collision\\Adapters\\Laravel\\ExceptionHandler",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 55,
            "function": "handleException",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 667,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 642,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 608,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 597,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 51,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 139,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/AbstractGenerator.php",
            "line": 125,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 79,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 264,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 85,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 564,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 184,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 251,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 171,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 199,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/app\/Console\/Commands\/GenerateApiDoc.php",
            "line": 41,
            "function": "call",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "App\\Console\\Commands\\GenerateApiDoc",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 564,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 184,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 251,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 171,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/symfony\/console\/Application.php",
            "line": 886,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/symfony\/console\/Application.php",
            "line": 262,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/symfony\/console\/Application.php",
            "line": 145,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 89,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 122,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/v1/tasks/{task}`

`HEAD api/v1/tasks/{task}`


<!-- END_6c2c8e52cea1c493c00f7834c176ef86 -->

<!-- START_930d0ef44833bc7192b1e31cbd94fd87 -->
## api/v1/tasks

> Example request:

```bash
curl -X POST "http://localhost/api/v1/tasks" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/tasks",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/tasks`


<!-- END_930d0ef44833bc7192b1e31cbd94fd87 -->

<!-- START_ca0bdf54e5602f711cf596de03066320 -->
## api/v1/tasks/{task}

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/tasks/{task}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/tasks/{task}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/tasks/{task}`


<!-- END_ca0bdf54e5602f711cf596de03066320 -->

<!-- START_0aea2007ba2b6701a1fd0be8aa69ef74 -->
## api/v1/tasks/{task}

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/tasks/{task}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/tasks/{task}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/tasks/{task}`


<!-- END_0aea2007ba2b6701a1fd0be8aa69ef74 -->

<!-- START_ff49aba9c1c86c6f0f7ca65e6184f077 -->
## api/v1/logs

> Example request:

```bash
curl -X GET "http://localhost/api/v1/logs" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/logs",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[]
```

### HTTP Request
`GET api/v1/logs`

`HEAD api/v1/logs`


<!-- END_ff49aba9c1c86c6f0f7ca65e6184f077 -->

<!-- START_23107fbf3b87e17c78e1e9e1ccc10b8e -->
## api/v1/logs/{log}

> Example request:

```bash
curl -X GET "http://localhost/api/v1/logs/{log}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/logs/{log}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "No query results for model [App\\Log].",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException",
    "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Exceptions\/Handler.php",
    "line": 199,
    "trace": [
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Exceptions\/Handler.php",
            "line": 175,
            "function": "prepareException",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/app\/Exceptions\/Handler.php",
            "line": 49,
            "function": "render",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/nunomaduro\/collision\/src\/Adapters\/Laravel\/ExceptionHandler.php",
            "line": 68,
            "function": "render",
            "class": "App\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 83,
            "function": "render",
            "class": "NunoMaduro\\Collision\\Adapters\\Laravel\\ExceptionHandler",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 55,
            "function": "handleException",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 667,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 642,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 608,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 597,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 51,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 139,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/AbstractGenerator.php",
            "line": 125,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 79,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 264,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 85,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 564,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 184,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 251,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 171,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 199,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/app\/Console\/Commands\/GenerateApiDoc.php",
            "line": 41,
            "function": "call",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "App\\Console\\Commands\\GenerateApiDoc",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 564,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 184,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 251,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 171,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/symfony\/console\/Application.php",
            "line": 886,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/symfony\/console\/Application.php",
            "line": 262,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/symfony\/console\/Application.php",
            "line": 145,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 89,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 122,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/v1/logs/{log}`

`HEAD api/v1/logs/{log}`


<!-- END_23107fbf3b87e17c78e1e9e1ccc10b8e -->

<!-- START_089d33e00bff34ca6d61e95b4c7aa1e0 -->
## api/v1/logs

> Example request:

```bash
curl -X POST "http://localhost/api/v1/logs" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/logs",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/logs`


<!-- END_089d33e00bff34ca6d61e95b4c7aa1e0 -->

<!-- START_253d34ea8c830a54d6c047f055208fba -->
## api/v1/logs/{log}

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/logs/{log}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/logs/{log}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/logs/{log}`


<!-- END_253d34ea8c830a54d6c047f055208fba -->

<!-- START_86dc2cd31e2f8f90e12233e7303ccb65 -->
## api/v1/logs/{log}

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/logs/{log}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/logs/{log}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/logs/{log}`


<!-- END_86dc2cd31e2f8f90e12233e7303ccb65 -->

<!-- START_9438b7f9e4efb914d760ed8d29155019 -->
## api/v1/kpi_types

> Example request:

```bash
curl -X GET "http://localhost/api/v1/kpi_types" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/kpi_types",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[]
```

### HTTP Request
`GET api/v1/kpi_types`

`HEAD api/v1/kpi_types`


<!-- END_9438b7f9e4efb914d760ed8d29155019 -->

<!-- START_7f7c218ee1b7a6eba1abf98da753eb84 -->
## api/v1/kpi_types/{kpi_type}

> Example request:

```bash
curl -X GET "http://localhost/api/v1/kpi_types/{kpi_type}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/kpi_types/{kpi_type}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "No query results for model [App\\KpiType].",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException",
    "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Exceptions\/Handler.php",
    "line": 199,
    "trace": [
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Exceptions\/Handler.php",
            "line": 175,
            "function": "prepareException",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/app\/Exceptions\/Handler.php",
            "line": 49,
            "function": "render",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/nunomaduro\/collision\/src\/Adapters\/Laravel\/ExceptionHandler.php",
            "line": 68,
            "function": "render",
            "class": "App\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 83,
            "function": "render",
            "class": "NunoMaduro\\Collision\\Adapters\\Laravel\\ExceptionHandler",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 55,
            "function": "handleException",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 667,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 642,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 608,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 597,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 51,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 139,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/AbstractGenerator.php",
            "line": 125,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 79,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 264,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 85,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 564,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 184,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 251,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 171,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 199,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/app\/Console\/Commands\/GenerateApiDoc.php",
            "line": 41,
            "function": "call",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "App\\Console\\Commands\\GenerateApiDoc",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 564,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 184,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 251,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 171,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/symfony\/console\/Application.php",
            "line": 886,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/symfony\/console\/Application.php",
            "line": 262,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/symfony\/console\/Application.php",
            "line": 145,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 89,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 122,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/projects\/assist\/goals\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/v1/kpi_types/{kpi_type}`

`HEAD api/v1/kpi_types/{kpi_type}`


<!-- END_7f7c218ee1b7a6eba1abf98da753eb84 -->

<!-- START_09a09331857aeb781beea82f98cc82b6 -->
## api/v1/kpi_types

> Example request:

```bash
curl -X POST "http://localhost/api/v1/kpi_types" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/kpi_types",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/kpi_types`


<!-- END_09a09331857aeb781beea82f98cc82b6 -->

<!-- START_c56e3b43e04159e02c1739ea8ea9b42f -->
## api/v1/kpi_types/{kpi_type}

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/kpi_types/{kpi_type}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/kpi_types/{kpi_type}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/kpi_types/{kpi_type}`


<!-- END_c56e3b43e04159e02c1739ea8ea9b42f -->

<!-- START_4bd7eebe2efa3afd6993af57d4f3d92d -->
## api/v1/kpi_types/{kpi_type}

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/kpi_types/{kpi_type}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/kpi_types/{kpi_type}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/kpi_types/{kpi_type}`


<!-- END_4bd7eebe2efa3afd6993af57d4f3d92d -->

