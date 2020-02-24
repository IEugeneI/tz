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

#Books


APIs for managing books
<!-- START_c84ecb8d4fd02d9a637dac124b62c629 -->
## Show all books

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/books" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/books"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

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
    "current_page": 1,
    "data": [
        {
            "id": 1,
            "name": "tewtewtre",
            "page_count": 4444,
            "created_at": null,
            "updated_at": "2020-02-23 22:33:44",
            "authors": [
                {
                    "id": 5,
                    "name": "Михаил",
                    "surname": "Афанасьевич",
                    "lastname": "Булгаков",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 5,
                    "name": "Михаил",
                    "surname": "Афанасьевич",
                    "lastname": "Булгаков",
                    "created_at": null,
                    "updated_at": null
                }
            ]
        },
        {
            "id": 2,
            "name": "12 стульев",
            "page_count": 5001,
            "created_at": null,
            "updated_at": "2020-02-24 00:21:39",
            "authors": [
                {
                    "id": 1,
                    "name": "Илья",
                    "surname": "Арнольдович",
                    "lastname": "Ильиф",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 1,
                    "name": "Илья",
                    "surname": "Арнольдович",
                    "lastname": "Ильиф",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 2,
                    "name": "Евгений",
                    "surname": "Петрович",
                    "lastname": "Петров",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 2,
                    "name": "Евгений",
                    "surname": "Петрович",
                    "lastname": "Петров",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 2,
                    "name": "Евгений",
                    "surname": "Петрович",
                    "lastname": "Петров",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 2,
                    "name": "Евгений",
                    "surname": "Петрович",
                    "lastname": "Петров",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 4,
                    "name": "Борис",
                    "surname": "Натанович",
                    "lastname": "Стругацкий",
                    "created_at": null,
                    "updated_at": null
                }
            ]
        },
        {
            "id": 3,
            "name": "Одноэтажная Америка",
            "page_count": 333,
            "created_at": null,
            "updated_at": null,
            "authors": [
                {
                    "id": 1,
                    "name": "Илья",
                    "surname": "Арнольдович",
                    "lastname": "Ильиф",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 1,
                    "name": "Илья",
                    "surname": "Арнольдович",
                    "lastname": "Ильиф",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 2,
                    "name": "Евгений",
                    "surname": "Петрович",
                    "lastname": "Петров",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 2,
                    "name": "Евгений",
                    "surname": "Петрович",
                    "lastname": "Петров",
                    "created_at": null,
                    "updated_at": null
                }
            ]
        },
        {
            "id": 4,
            "name": "За миллиард лет до конца света",
            "page_count": 700,
            "created_at": null,
            "updated_at": null,
            "authors": [
                {
                    "id": 3,
                    "name": "Аркадий",
                    "surname": "Натанович",
                    "lastname": "Стругацкий",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 3,
                    "name": "Аркадий",
                    "surname": "Натанович",
                    "lastname": "Стругацкий",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 4,
                    "name": "Борис",
                    "surname": "Натанович",
                    "lastname": "Стругацкий",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 4,
                    "name": "Борис",
                    "surname": "Натанович",
                    "lastname": "Стругацкий",
                    "created_at": null,
                    "updated_at": null
                }
            ]
        },
        {
            "id": 5,
            "name": "451 градус по Фарингейту",
            "page_count": 120,
            "created_at": null,
            "updated_at": null,
            "authors": [
                {
                    "id": 6,
                    "name": "Рей",
                    "surname": "Дуглас",
                    "lastname": "Бредбери",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 6,
                    "name": "Рей",
                    "surname": "Дуглас",
                    "lastname": "Бредбери",
                    "created_at": null,
                    "updated_at": null
                }
            ]
        },
        {
            "id": 6,
            "name": "tewtewtre",
            "page_count": 444,
            "created_at": "2020-02-23 20:09:07",
            "updated_at": "2020-02-23 20:09:07",
            "authors": [
                {
                    "id": 1,
                    "name": "Илья",
                    "surname": "Арнольдович",
                    "lastname": "Ильиф",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 2,
                    "name": "Евгений",
                    "surname": "Петрович",
                    "lastname": "Петров",
                    "created_at": null,
                    "updated_at": null
                }
            ]
        },
        {
            "id": 7,
            "name": "tewtewtre",
            "page_count": 444,
            "created_at": "2020-02-23 20:10:04",
            "updated_at": "2020-02-23 20:10:04",
            "authors": [
                {
                    "id": 1,
                    "name": "Илья",
                    "surname": "Арнольдович",
                    "lastname": "Ильиф",
                    "created_at": null,
                    "updated_at": null
                }
            ]
        },
        {
            "id": 8,
            "name": "tewtewtre",
            "page_count": 444,
            "created_at": "2020-02-23 20:11:21",
            "updated_at": "2020-02-23 20:11:21",
            "authors": []
        },
        {
            "id": 9,
            "name": "tewtewtre",
            "page_count": 444,
            "created_at": "2020-02-23 20:11:47",
            "updated_at": "2020-02-23 20:11:47",
            "authors": []
        },
        {
            "id": 10,
            "name": "tewtewtre",
            "page_count": 444,
            "created_at": "2020-02-23 20:12:16",
            "updated_at": "2020-02-23 20:12:16",
            "authors": []
        },
        {
            "id": 11,
            "name": "tewtewtre",
            "page_count": 444,
            "created_at": "2020-02-23 20:13:12",
            "updated_at": "2020-02-23 20:13:12",
            "authors": []
        },
        {
            "id": 12,
            "name": "tewtewtre",
            "page_count": 444,
            "created_at": "2020-02-23 20:14:53",
            "updated_at": "2020-02-23 20:14:53",
            "authors": []
        },
        {
            "id": 13,
            "name": "tewtewtre",
            "page_count": 444,
            "created_at": "2020-02-23 20:18:31",
            "updated_at": "2020-02-23 20:18:31",
            "authors": []
        },
        {
            "id": 14,
            "name": "tewtewtre",
            "page_count": 444,
            "created_at": "2020-02-23 20:19:13",
            "updated_at": "2020-02-23 20:19:13",
            "authors": []
        },
        {
            "id": 15,
            "name": "tewtewtre",
            "page_count": 444,
            "created_at": "2020-02-23 20:20:33",
            "updated_at": "2020-02-23 20:20:33",
            "authors": []
        },
        {
            "id": 16,
            "name": "tewtewtre",
            "page_count": 444,
            "created_at": "2020-02-23 20:22:52",
            "updated_at": "2020-02-23 20:22:52",
            "authors": []
        },
        {
            "id": 17,
            "name": "tewtewtre",
            "page_count": 444,
            "created_at": "2020-02-23 20:40:30",
            "updated_at": "2020-02-23 20:40:30",
            "authors": []
        },
        {
            "id": 18,
            "name": "tewtewtre",
            "page_count": 444,
            "created_at": "2020-02-23 20:40:41",
            "updated_at": "2020-02-23 20:40:41",
            "authors": []
        },
        {
            "id": 20,
            "name": "tewtewtre",
            "page_count": 4444,
            "created_at": "2020-02-23 20:43:02",
            "updated_at": "2020-02-23 22:30:17",
            "authors": []
        },
        {
            "id": 21,
            "name": "tewtewtre",
            "page_count": 444,
            "created_at": "2020-02-23 20:43:25",
            "updated_at": "2020-02-23 20:43:25",
            "authors": [
                {
                    "id": 1,
                    "name": "Илья",
                    "surname": "Арнольдович",
                    "lastname": "Ильиф",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 2,
                    "name": "Евгений",
                    "surname": "Петрович",
                    "lastname": "Петров",
                    "created_at": null,
                    "updated_at": null
                }
            ]
        }
    ],
    "first_page_url": "http:\/\/localhost\/api\/books?page=1",
    "from": 1,
    "last_page": 2,
    "last_page_url": "http:\/\/localhost\/api\/books?page=2",
    "next_page_url": "http:\/\/localhost\/api\/books?page=2",
    "path": "http:\/\/localhost\/api\/books",
    "per_page": 20,
    "prev_page_url": null,
    "to": 20,
    "total": 30
}
```

### HTTP Request
`GET api/books`


<!-- END_c84ecb8d4fd02d9a637dac124b62c629 -->

<!-- START_33c6d64a451af167032c5c54df96db5c -->
## Store Book

> Example request:

```bash
curl -X POST \
    "http://localhost/api/books" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"\u041c\u0430\u0441\u0442\u0435\u0440 \u0438 \u043c\u0430\u0440\u0433\u0430\u0440\u0438\u0442\u0430","page_count":345,"authors_id":"authors_id[0] 1"}'

```

```javascript
const url = new URL(
    "http://localhost/api/books"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "\u041c\u0430\u0441\u0442\u0435\u0440 \u0438 \u043c\u0430\u0440\u0433\u0430\u0440\u0438\u0442\u0430",
    "page_count": 345,
    "authors_id": "authors_id[0] 1"
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
    "name": "Мастер и Маргарита",
    "page_count": "355",
    "id": 5
}
```

### HTTP Request
`POST api/books`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | Name of book .
        `page_count` | integer |  required  | Count pages for books.
        `authors_id` | array |  optional  | Array with authors id from table Authors.
    
<!-- END_33c6d64a451af167032c5c54df96db5c -->

<!-- START_12c1c577fc002b5da2d75267229f7bb3 -->
## Show Book by ID

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/books/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/books/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

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
    "id": 3,
    "name": "Одноэтажная Америка",
    "page_count": 333,
    "authors": [
        {
            "id": 1,
            "name": "Илья",
            "surname": "Арнольдович",
            "lastname": "Ильиф"
        },
        {
            "id": 2,
            "name": "Евгений",
            "surname": "Петрович",
            "lastname": "Петров"
        }
    ]
}
```

### HTTP Request
`GET api/books/{book}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  optional  | int required Id of book

<!-- END_12c1c577fc002b5da2d75267229f7bb3 -->

<!-- START_1509377236aad3ef10e45fbea2aa91aa -->
## Update Book

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/books/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"\u041c\u0430\u0441\u0442\u0435\u0440 \u0438 \u043c\u0430\u0440\u0433\u0430\u0440\u0438\u0442\u0430","page_count":345,"id":6}'

```

```javascript
const url = new URL(
    "http://localhost/api/books/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "\u041c\u0430\u0441\u0442\u0435\u0440 \u0438 \u043c\u0430\u0440\u0433\u0430\u0440\u0438\u0442\u0430",
    "page_count": 345,
    "id": 6
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "name": "Мастер и Маргарита",
    "page_count": "355",
    "id": 5
}
```

### HTTP Request
`PUT api/books/{book}`

`PATCH api/books/{book}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  optional  | int required Id of book
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | Name of book .
        `page_count` | integer |  required  | Count pages for books.
        `id` | integer |  required  | Id of book
    
<!-- END_1509377236aad3ef10e45fbea2aa91aa -->

<!-- START_d75ecf1315f29c879b459ea9788d1c21 -->
## Delete Book

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/books/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":11}'

```

```javascript
const url = new URL(
    "http://localhost/api/books/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 11
}

fetch(url, {
    method: "DELETE",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/books/{book}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  optional  | int required Id of book
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | integer |  required  | Id of book
    
<!-- END_d75ecf1315f29c879b459ea9788d1c21 -->


