# Endpoints


## api/user




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"></code></pre>
</div>
<div id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</div>
<form id="form-GETapi-user" data-method="GET" data-path="api/user" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-user" onclick="tryItOut('GETapi-user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-user" onclick="cancelTryOut('GETapi-user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/user</code></b>
</p>
</form>


## api/testimonials




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/testimonials" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/testimonials"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": true,
    "testimonials": {
        "current_page": 1,
        "data": [
            {
                "id": 1,
                "name": "Sawyer Wooten",
                "position": "Tempora voluptatem",
                "content": "Nisi ullam voluptas",
                "created_at": "2021-04-25T08:19:50.000000Z",
                "updated_at": null
            },
            {
                "id": 2,
                "name": "Byron Reeves",
                "position": "Ut culpa labore Nam",
                "content": "Sed omnis aperiam ei",
                "created_at": "2021-04-25T08:19:52.000000Z",
                "updated_at": null
            },
            {
                "id": 3,
                "name": "Tatum Robertson",
                "position": "Ut sed rem hic illo",
                "content": "Ab enim laudantium",
                "created_at": "2021-04-25T08:19:54.000000Z",
                "updated_at": null
            }
        ],
        "first_page_url": "http:\/\/localhost\/api\/testimonials?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http:\/\/localhost\/api\/testimonials?page=1",
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/testimonials?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "next_page_url": null,
        "path": "http:\/\/localhost\/api\/testimonials",
        "per_page": 5,
        "prev_page_url": null,
        "to": 3,
        "total": 3
    }
}
```
<div id="execution-results-GETapi-testimonials" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-testimonials"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-testimonials"></code></pre>
</div>
<div id="execution-error-GETapi-testimonials" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-testimonials"></code></pre>
</div>
<form id="form-GETapi-testimonials" data-method="GET" data-path="api/testimonials" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-testimonials', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-testimonials" onclick="tryItOut('GETapi-testimonials');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-testimonials" onclick="cancelTryOut('GETapi-testimonials');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-testimonials" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/testimonials</code></b>
</p>
</form>


## api/teams




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/teams" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/teams"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": true,
    "teams": [
        {
            "id": 1,
            "name": "Amal Hubbard",
            "position": "Consequatur ea et il",
            "image": "storage\/team\/1619338550_608525368ba8f.png",
            "order": 2,
            "status": 1,
            "created_at": "2021-04-25T08:15:50.000000Z",
            "updated_at": "2021-04-25T08:34:31.000000Z"
        },
        {
            "id": 2,
            "name": "Mary Black",
            "position": "Minima commodi irure",
            "image": "storage\/team\/1619338557_6085253d1ba8d.png",
            "order": 1,
            "status": 1,
            "created_at": "2021-04-25T08:15:57.000000Z",
            "updated_at": "2021-04-25T08:34:30.000000Z"
        }
    ]
}
```
<div id="execution-results-GETapi-teams" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-teams"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-teams"></code></pre>
</div>
<div id="execution-error-GETapi-teams" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-teams"></code></pre>
</div>
<form id="form-GETapi-teams" data-method="GET" data-path="api/teams" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-teams', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-teams" onclick="tryItOut('GETapi-teams');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-teams" onclick="cancelTryOut('GETapi-teams');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-teams" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/teams</code></b>
</p>
</form>


## api/careers




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/careers" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/careers"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": true,
    "careers": {
        "current_page": 1,
        "data": [],
        "first_page_url": "http:\/\/localhost\/api\/careers?page=1",
        "from": null,
        "last_page": 1,
        "last_page_url": "http:\/\/localhost\/api\/careers?page=1",
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/careers?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "next_page_url": null,
        "path": "http:\/\/localhost\/api\/careers",
        "per_page": 5,
        "prev_page_url": null,
        "to": null,
        "total": 0
    }
}
```
<div id="execution-results-GETapi-careers" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-careers"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-careers"></code></pre>
</div>
<div id="execution-error-GETapi-careers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-careers"></code></pre>
</div>
<form id="form-GETapi-careers" data-method="GET" data-path="api/careers" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-careers', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-careers" onclick="tryItOut('GETapi-careers');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-careers" onclick="cancelTryOut('GETapi-careers');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-careers" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/careers</code></b>
</p>
</form>


## api/portfolio/categories




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/portfolio/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/portfolio/categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": true,
    "categories": {
        "current_page": 1,
        "data": [
            {
                "id": 2,
                "name": "Brennan Hood",
                "status": 1,
                "created_at": "2021-04-25T08:23:51.000000Z",
                "updated_at": "2021-04-25T08:23:51.000000Z"
            },
            {
                "id": 1,
                "name": "Donna Mccarthy",
                "status": 1,
                "created_at": "2021-04-25T08:23:47.000000Z",
                "updated_at": "2021-04-25T08:23:47.000000Z"
            }
        ],
        "first_page_url": "http:\/\/localhost\/api\/portfolio\/categories?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http:\/\/localhost\/api\/portfolio\/categories?page=1",
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/portfolio\/categories?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "next_page_url": null,
        "path": "http:\/\/localhost\/api\/portfolio\/categories",
        "per_page": 5,
        "prev_page_url": null,
        "to": 2,
        "total": 2
    }
}
```
<div id="execution-results-GETapi-portfolio-categories" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-portfolio-categories"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-portfolio-categories"></code></pre>
</div>
<div id="execution-error-GETapi-portfolio-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-portfolio-categories"></code></pre>
</div>
<form id="form-GETapi-portfolio-categories" data-method="GET" data-path="api/portfolio/categories" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-portfolio-categories', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-portfolio-categories" onclick="tryItOut('GETapi-portfolio-categories');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-portfolio-categories" onclick="cancelTryOut('GETapi-portfolio-categories');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-portfolio-categories" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/portfolio/categories</code></b>
</p>
</form>


## api/portfolios




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/portfolios" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/portfolios"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": true,
    "portfolios": {
        "current_page": 1,
        "data": [
            {
                "id": 1,
                "category_id": 2,
                "title": "Voluptas ratione nob",
                "title_slug": "voluptas-ratione-nob",
                "image": "storage\/portfolio\/1619339071_6085273fb633f.jpeg",
                "description": "<p>asdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sdsasdasda sda sds<\/p>",
                "live_link": "https:\/\/example.com",
                "bahance_link": "https:\/\/example.com",
                "project_length": "Laborum Qui maiores",
                "our_role": "<ol><li>asdasasdasd<\/li><li>as<\/li><li>da<\/li><li>sd<\/li><li>as<\/li><li>d<\/li><li>&nbsp;<\/li><\/ol>",
                "tool_used": "<ol><li>asda<\/li><li>sd<\/li><li>a<\/li><li>sd<\/li><li>as<\/li><li>d<\/li><li>&nbsp;<\/li><\/ol>",
                "client_name": "qemaqaj@mailinator.com",
                "client_email": "qemaqaj@mailinator.com",
                "created_at": "2021-04-25T08:24:31.000000Z",
                "updated_at": "2021-04-25T08:24:31.000000Z"
            },
            {
                "id": 2,
                "category_id": 1,
                "title": "Qui officia iste dol",
                "title_slug": "qui-officia-iste-dol",
                "image": "storage\/portfolio\/1619339111_60852767b1c28.jpeg",
                "description": "<p>asdasd asd asasdasdasdadsasdasd asd asasdasdasdadsasdasd asd asasdasdasdadsasdasd asd asasdasdasdadsasdasd asd asasdasdasdadsasdasd asd asasdasdasdadsasdasd asd asasdasdasdadsasdasd asd asasdasdasdadsasdasd asd asasdasdasdadsasdasd asd asasdasdasdadsasdasd asd asasdasdasdadsasdasd asd asasdasdasdadsasdasd asd asasdasdasdadsasdasd asd asasdasdasdadsasdasd asd asasdasdasdadsasdasd asd asasdasdasdadsasdasd asd asasdasdasdadsasdasd asd asasdasdasdadsasdasd asd asasdasdasdadsasdasd asd asasdasdasdadsasdasd asd asasdasdasdadsasdasd asd asasdasdasdadsasdasd asd asasdasdasdadsasdasd asd asasdasdasdadsasdasd asd asasdasdasdadsasdasd asd asasdasdasdadsasdasd asd asasdasdasdadsasdasd asd asasdasdasdadsasdasd asd asasdasdasdadsasdasd asd asasdasdasdadsasdasd asd asasdasdasdadsasdasd asd asasdasdasdadsasdasd asd asasdasdasdadsasdasd asd asasdasdasdadsasdasd asd asasdasdasdadsasdasd asd asasdasdasdadsasdasd asd asasdasdasdadsasdasd asd asasdasdasdadsasdasd asd asasdasdasdadsasdasd asd asasdasdasdads<\/p>",
                "live_link": "https:\/\/example.com",
                "bahance_link": "https:\/\/example.com",
                "project_length": "1 Month",
                "our_role": "<ol><li>asdasdadsa<\/li><li>sd<\/li><li>asd<\/li><li>as<\/li><li>d<\/li><li>asd<\/li><li>a<\/li><\/ol>",
                "tool_used": "<ol><li>asdas<\/li><li>da<\/li><li>sd<\/li><li>asd<\/li><\/ol><p>das<\/p><p>d<\/p>",
                "client_name": "tutufus@mailinator.com",
                "client_email": "tutufus@mailinator.com",
                "created_at": "2021-04-25T08:25:11.000000Z",
                "updated_at": "2021-04-25T08:25:11.000000Z"
            }
        ],
        "first_page_url": "http:\/\/localhost\/api\/portfolios?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http:\/\/localhost\/api\/portfolios?page=1",
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/portfolios?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "next_page_url": null,
        "path": "http:\/\/localhost\/api\/portfolios",
        "per_page": 5,
        "prev_page_url": null,
        "to": 2,
        "total": 2
    }
}
```
<div id="execution-results-GETapi-portfolios" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-portfolios"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-portfolios"></code></pre>
</div>
<div id="execution-error-GETapi-portfolios" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-portfolios"></code></pre>
</div>
<form id="form-GETapi-portfolios" data-method="GET" data-path="api/portfolios" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-portfolios', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-portfolios" onclick="tryItOut('GETapi-portfolios');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-portfolios" onclick="cancelTryOut('GETapi-portfolios');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-portfolios" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/portfolios</code></b>
</p>
</form>


## api/about




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/about" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/about"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": true,
    "about": {
        "id": 1,
        "content": "Zakir Soft is a Software company and Software Development Training Institute. We develop Softwares for your business and we also provide quality software training in Adabor Since 2020. We have passionate teams like Full Stack Laravel Developer, Android Developer, UI\/UX Designer. We have management system softwares for the local market.\n            we also have eCommerce systems for your online business.",
        "created_at": "2021-04-25T08:11:40.000000Z",
        "updated_at": "2021-04-25T08:11:40.000000Z"
    }
}
```
<div id="execution-results-GETapi-about" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-about"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-about"></code></pre>
</div>
<div id="execution-error-GETapi-about" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-about"></code></pre>
</div>
<form id="form-GETapi-about" data-method="GET" data-path="api/about" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-about', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-about" onclick="tryItOut('GETapi-about');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-about" onclick="cancelTryOut('GETapi-about');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-about" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/about</code></b>
</p>
</form>


## api/services




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/services" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/services"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": true,
    "services": {
        "current_page": 1,
        "data": [
            {
                "id": 1,
                "title": "Qui officia iste dol",
                "image": "storage\/service\/1619338736_608525f0a5c01.jpeg",
                "description": "Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.\r\n\r\nCurabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.",
                "created_at": "2021-04-25T08:18:56.000000Z",
                "updated_at": "2021-04-25T08:18:56.000000Z"
            }
        ],
        "first_page_url": "http:\/\/localhost\/api\/services?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http:\/\/localhost\/api\/services?page=1",
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/services?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "next_page_url": null,
        "path": "http:\/\/localhost\/api\/services",
        "per_page": 5,
        "prev_page_url": null,
        "to": 1,
        "total": 1
    }
}
```
<div id="execution-results-GETapi-services" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-services"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-services"></code></pre>
</div>
<div id="execution-error-GETapi-services" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-services"></code></pre>
</div>
<form id="form-GETapi-services" data-method="GET" data-path="api/services" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-services', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-services" onclick="tryItOut('GETapi-services');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-services" onclick="cancelTryOut('GETapi-services');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-services" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/services</code></b>
</p>
</form>


## api/technology/categories




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/technology/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/technology/categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": true,
    "categories": {
        "current_page": 1,
        "data": [
            {
                "id": 1,
                "name": "Leslie Wynn",
                "created_at": "2021-04-25T08:19:15.000000Z",
                "updated_at": "2021-04-25T08:19:15.000000Z"
            },
            {
                "id": 2,
                "name": "Brock Larson",
                "created_at": "2021-04-25T08:19:17.000000Z",
                "updated_at": "2021-04-25T08:19:17.000000Z"
            },
            {
                "id": 3,
                "name": "Evangeline Drake",
                "created_at": "2021-04-25T08:19:20.000000Z",
                "updated_at": "2021-04-25T08:19:20.000000Z"
            }
        ],
        "first_page_url": "http:\/\/localhost\/api\/technology\/categories?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http:\/\/localhost\/api\/technology\/categories?page=1",
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/technology\/categories?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "next_page_url": null,
        "path": "http:\/\/localhost\/api\/technology\/categories",
        "per_page": 5,
        "prev_page_url": null,
        "to": 3,
        "total": 3
    }
}
```
<div id="execution-results-GETapi-technology-categories" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-technology-categories"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-technology-categories"></code></pre>
</div>
<div id="execution-error-GETapi-technology-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-technology-categories"></code></pre>
</div>
<form id="form-GETapi-technology-categories" data-method="GET" data-path="api/technology/categories" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-technology-categories', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-technology-categories" onclick="tryItOut('GETapi-technology-categories');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-technology-categories" onclick="cancelTryOut('GETapi-technology-categories');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-technology-categories" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/technology/categories</code></b>
</p>
</form>


## api/technologies




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/technologies" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/technologies"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": true,
    "technologies": [
        {
            "id": 3,
            "category_id": 3,
            "name": "Graiden Christensen",
            "image": "storage\/technology\/1619338778_6085261ae998e.jpg",
            "created_at": "2021-04-25T08:19:38.000000Z",
            "updated_at": "2021-04-25T08:19:38.000000Z"
        },
        {
            "id": 2,
            "category_id": 1,
            "name": "Cyrus Roberson",
            "image": "storage\/technology\/1619338775_6085261714ad1.jpg",
            "created_at": "2021-04-25T08:19:35.000000Z",
            "updated_at": "2021-04-25T08:19:35.000000Z"
        },
        {
            "id": 1,
            "category_id": 3,
            "name": "Brenna Sweeney",
            "image": "storage\/technology\/1619338771_6085261336cc0.jpeg",
            "created_at": "2021-04-25T08:19:31.000000Z",
            "updated_at": "2021-04-25T08:19:31.000000Z"
        }
    ]
}
```
<div id="execution-results-GETapi-technologies" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-technologies"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-technologies"></code></pre>
</div>
<div id="execution-error-GETapi-technologies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-technologies"></code></pre>
</div>
<form id="form-GETapi-technologies" data-method="GET" data-path="api/technologies" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-technologies', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-technologies" onclick="tryItOut('GETapi-technologies');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-technologies" onclick="cancelTryOut('GETapi-technologies');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-technologies" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/technologies</code></b>
</p>
</form>


## api/jobposts




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/jobposts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/jobposts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": true,
    "posts": [
        {
            "id": 1,
            "title": "Et tempore voluptat",
            "slug": "et-tempore-voluptat",
            "type": "Full Type",
            "salary": "At soluta rem eligen",
            "short_description": "<p>asd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sda<\/p>",
            "long_description": "<p>asd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sda<\/p>",
            "link": "Qui aut voluptatibus",
            "deadline": "2009-06-11 00:00:00",
            "status": 1,
            "order": 0,
            "created_at": "2021-04-25T08:25:48.000000Z",
            "updated_at": "2021-04-25T08:25:48.000000Z"
        }
    ]
}
```
<div id="execution-results-GETapi-jobposts" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-jobposts"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-jobposts"></code></pre>
</div>
<div id="execution-error-GETapi-jobposts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-jobposts"></code></pre>
</div>
<form id="form-GETapi-jobposts" data-method="GET" data-path="api/jobposts" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-jobposts', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-jobposts" onclick="tryItOut('GETapi-jobposts');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-jobposts" onclick="cancelTryOut('GETapi-jobposts');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-jobposts" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/jobposts</code></b>
</p>
</form>


## api/galleries




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/galleries" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/galleries"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": true,
    "galleries": [
        {
            "id": 1,
            "image": "storage\/gallery\/1619338745_608525f96208b.png",
            "order": 0,
            "created_at": "2021-04-25T08:19:05.000000Z",
            "updated_at": "2021-04-25T08:19:05.000000Z"
        },
        {
            "id": 2,
            "image": "storage\/gallery\/1619338745_608525f985963.jpg",
            "order": 0,
            "created_at": "2021-04-25T08:19:05.000000Z",
            "updated_at": "2021-04-25T08:19:05.000000Z"
        },
        {
            "id": 3,
            "image": "storage\/gallery\/1619338745_608525f98d947.jpeg",
            "order": 0,
            "created_at": "2021-04-25T08:19:05.000000Z",
            "updated_at": "2021-04-25T08:19:05.000000Z"
        },
        {
            "id": 4,
            "image": "storage\/gallery\/1619338745_608525f9a2896.jpeg",
            "order": 0,
            "created_at": "2021-04-25T08:19:05.000000Z",
            "updated_at": "2021-04-25T08:19:05.000000Z"
        },
        {
            "id": 5,
            "image": "storage\/gallery\/1619338745_608525f9ad82b.jpg",
            "order": 0,
            "created_at": "2021-04-25T08:19:05.000000Z",
            "updated_at": "2021-04-25T08:19:05.000000Z"
        },
        {
            "id": 6,
            "image": "storage\/gallery\/1619338745_608525f9c10ac.jpg",
            "order": 0,
            "created_at": "2021-04-25T08:19:05.000000Z",
            "updated_at": "2021-04-25T08:19:05.000000Z"
        },
        {
            "id": 7,
            "image": "storage\/gallery\/1619338745_608525f9c9246.png",
            "order": 0,
            "created_at": "2021-04-25T08:19:05.000000Z",
            "updated_at": "2021-04-25T08:19:05.000000Z"
        },
        {
            "id": 8,
            "image": "storage\/gallery\/1619338745_608525f9e42c3.png",
            "order": 0,
            "created_at": "2021-04-25T08:19:05.000000Z",
            "updated_at": "2021-04-25T08:19:05.000000Z"
        },
        {
            "id": 9,
            "image": "storage\/gallery\/1619338745_608525f9e9712.jpg",
            "order": 0,
            "created_at": "2021-04-25T08:19:05.000000Z",
            "updated_at": "2021-04-25T08:19:05.000000Z"
        }
    ]
}
```
<div id="execution-results-GETapi-galleries" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-galleries"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-galleries"></code></pre>
</div>
<div id="execution-error-GETapi-galleries" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-galleries"></code></pre>
</div>
<form id="form-GETapi-galleries" data-method="GET" data-path="api/galleries" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-galleries', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-galleries" onclick="tryItOut('GETapi-galleries');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-galleries" onclick="cancelTryOut('GETapi-galleries');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-galleries" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/galleries</code></b>
</p>
</form>


## api/subcompanies




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/subcompanies" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/subcompanies"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": true,
    "subcompanies": [
        {
            "id": 1,
            "title": "Echotemplate",
            "description": "<p>Praesent porttitor quam lacus, quis rhoncus ligula iaculis pharetra. Phasellus vitae tellus justo. Donec tellus eros, feugiat vel augue vel, vehicula luctus ex. Vestibulum semper a ante at maximus. In fringilla condimentum mauris, non efficitur ex tincidunt non.<\/p>",
            "link": "https:\/\/echotemplate.com\/",
            "logo": "storage\/subcompany\/logo\/1619338636_6085258ce3a3e.png",
            "banner": "storage\/subcompany\/banner\/1619338636_6085258ce40b0.png",
            "stats1_value": 500,
            "stats1_text": "Product Download",
            "stats2_value": 200,
            "stats2_text": "Product view",
            "order": 0,
            "created_at": "2021-04-25T08:17:16.000000Z",
            "updated_at": "2021-04-25T08:17:16.000000Z"
        },
        {
            "id": 2,
            "title": "Codeshikhi",
            "description": "<p>Praesent porttitor quam lacus, quis rhoncus ligula iaculis pharetra. Phasellus vitae tellus justo. Donec tellus eros, feugiat vel augue vel, vehicula luctus ex. Vestibulum semper a ante at maximus. In fringilla condimentum mauris, non efficitur ex tincidunt non.<\/p>",
            "link": "https:\/\/codeshikhi.io\/",
            "logo": "storage\/subcompany\/logo\/1619338670_608525ae7418d.png",
            "banner": "storage\/subcompany\/banner\/1619338670_608525ae74362.png",
            "stats1_value": 500,
            "stats1_text": "Product Download",
            "stats2_value": 100,
            "stats2_text": "Product view",
            "order": 0,
            "created_at": "2021-04-25T08:17:50.000000Z",
            "updated_at": "2021-04-25T08:17:50.000000Z"
        }
    ]
}
```
<div id="execution-results-GETapi-subcompanies" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-subcompanies"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-subcompanies"></code></pre>
</div>
<div id="execution-error-GETapi-subcompanies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-subcompanies"></code></pre>
</div>
<form id="form-GETapi-subcompanies" data-method="GET" data-path="api/subcompanies" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-subcompanies', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-subcompanies" onclick="tryItOut('GETapi-subcompanies');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-subcompanies" onclick="cancelTryOut('GETapi-subcompanies');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-subcompanies" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/subcompanies</code></b>
</p>
</form>


## api/news




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/news" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/news"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": true,
    "news": [
        {
            "id": 2,
            "title": "Qui officia iste dol",
            "slug": "qui-officia-iste-dol",
            "image": "storage\/news\/1619338723_608525e3a4fe9.png",
            "short_description": "Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.",
            "description": "<p>Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.<\/p>",
            "created_at": "2021-04-25T08:18:43.000000Z",
            "updated_at": "2021-04-25T08:18:43.000000Z"
        },
        {
            "id": 1,
            "title": "We Are Hiring",
            "slug": "we-are-hiring",
            "image": "storage\/news\/1619338707_608525d33200f.png",
            "short_description": "Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.",
            "description": "<p>Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.<\/p>",
            "created_at": "2021-04-25T08:18:27.000000Z",
            "updated_at": "2021-04-25T08:18:27.000000Z"
        }
    ]
}
```
<div id="execution-results-GETapi-news" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-news"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-news"></code></pre>
</div>
<div id="execution-error-GETapi-news" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-news"></code></pre>
</div>
<form id="form-GETapi-news" data-method="GET" data-path="api/news" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-news', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-news" onclick="tryItOut('GETapi-news');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-news" onclick="cancelTryOut('GETapi-news');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-news" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/news</code></b>
</p>
</form>


## /




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title> A Innovative Software Company  - Zakir Soft</title>

    <!-- =========== SEO Tags ============ -->
        <meta name="author" content="Zakir Soft">
    <meta name="keywords" content="web design, web development, web development agency, agency, web, design, development, pwa, spa, web application development, website, website design, ecommerce website">
    <meta name="description" content="We are a web design & development agency in Dhaka, Bangladesh. We provide web design, web development, SPA, SSR & web application, development services.">
    <meta property="og:title" content="Zakir Soft - Website Design and Development Company in Dhaka, Bangladesh" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="http://127.0.0.1:8000/frontend/assets/images/preview.jpg" />

    <!-- =========== Favicon ============ -->
    <link rel="icon" type="image/png" sizes="16x16" href="http://127.0.0.1:8000/frontend/assets/images/logo/16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="http://127.0.0.1:8000/frontend/assets/images/logo/32x32.png">
    <link rel="icon" type="image/png" sizes="64x64" href="http://127.0.0.1:8000/frontend/assets/images/logo/64x64.png">

    <link rel="stylesheet" href="http://127.0.0.1:8000/frontend/assets/css/all.min.css" />
    <link rel="stylesheet" href="http://127.0.0.1:8000/frontend/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="http://127.0.0.1:8000/frontend/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/frontend/assets/css/slick.css" />
    <link rel="stylesheet" href="http://127.0.0.1:8000/frontend/assets/css/style.css" />
    <style>
    @media(max-width: 767px){
        #Project .container-fluid .project_slider .slide_item.slick-current.slick-active.slick-center .slide_info.ml {
            padding-left: 0px;
        }
        #about .about_content_wrapper {
            padding-left: 40px;
        }
        #about .about_content_wrapper p {
            margin-right: 0;
        }

        #about_content_2 .about_content_2_img {
            height: auto;
        }
    }
</style>

    <style>
        .slick-dots li button,
        #testimonial-area .testimonial_slider .slick-arrow.slick-prev,
        #testimonial-area .testimonial_slider .slick-arrow.slick-next
         {
            display: none !important;
        }

        #toast-container>:hover {
            opacity: 1;
        }

        #toast-container>div {
            position: relative;
            pointer-events: auto;
            overflow: hidden;
            margin: 0 0 6px;
            padding: 15px 15px 15px 50px;
            width: 300px;
            border-radius: 3px;
            background-position: 15px center;
            background-repeat: no-repeat;
            box-shadow: 0 0 12px #999;
            color: #fff;
        }

        #WE_Do .container .box_wrapper .card_box .face.back_part .box_title p {
            line-height: 30px;
            margin-bottom: 0;
        }
    </style>
    </head>

<body>
    <!-- header section start -->
    <header>
        <div class="container">
            <nav class="head_content">
                <a href="http://127.0.0.1:8000" class="logo">
                    <img src="http://127.0.0.1:8000/frontend/assets/images/logo/1.png" alt="Zakir Soft">
                </a>
                <div class="menu">
                    <ul class="m_bar">
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!-- Menus -->
    <div class="fullscreen-menu">
        <div class="menu-body">
            <div class="container">
                <div class="menu-container">
                    <div class="menu-close">
                        <ul class="close-bar">
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="main-menu">
                        <ul>
                            <li> <a href="http://127.0.0.1:8000" class=" active "> <span>01</span> Home </a>
                            </li>
                            <li> <a href="http://127.0.0.1:8000/about" class=""> <span>02</span> About
                                </a> </li>
                            <li> <a href="http://127.0.0.1:8000/works" class=""> <span>03</span> Works
                                </a>
                            </li>
                            <li> <a href="http://127.0.0.1:8000/career" class=" "> <span>04</span>
                                    Career
                                </a> </li>
                            <li> <a href="http://127.0.0.1:8000/contact" class=""> <span>05</span>
                                    Contact </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-footer">
            <div class="container">
                <ul class="footer-social">
                                    </ul>
                <div class="copyright-text">
                    <p> &copy; 2021 - Zakirsoft </h5>
                </div>
            </div>
        </div>
    </div>
    <!-- header section end -->

    <!-- main section start -->
      <!-- banner section start -->
  <section id="banner" class="none">
    <!-- shaddow round img -->
    <div class="round_shape_img">
      <img src="http://127.0.0.1:8000/frontend/assets/images/Shadow.png" alt="shaddow_ibackground">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-xl-7 order-2 order-xl-0">
          <div class="banner_wrapper">
            <h2>
              We are here to <br />
              grow your <br /><span class="text_stroke">Business.</span>
            </h2>
            <p> As a software company we develop innovatives website & software solutions. We are proud of what we do.
            </p>
            <a target="_blank" class="button" href="http://127.0.0.1:8000/works">View Projects</a>
          </div>
        </div>
        <div class="col-xl-5 order-1 order-xl-0">
          <div class="banner_img">
            <img src="http://127.0.0.1:8000/frontend/assets/images/Inllustration.svg" alt="Ilustrator-img" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- work section start -->
  <section id="Project" class="none">
    <div class="container-fluid">
      <div class="row section_title">
        <h2>our Works</h2>
      </div>

      <div class="row project_slider">
                <div class="slide_item row">
          <div class="col-lg-4  col-12 order-lg-0 order-2">
            <div class="slide_info ml">
              <span class="p_type">Donna Mccarthy</span>
              <h3 class="p_title">Qui officia iste...</h3>
              <a target="_blank" class="v_project" href="http://127.0.0.1:8000/works/2/details">
                <span>View Project</span>
                <img src="http://127.0.0.1:8000/frontend/assets/images/Arrow-icon.png" alt="project-img" />
              </a>
            </div>
          </div>
          <div class="col-lg-8 col-12 order-lg-0 order-1">
            <div class="project_img">
              <img src="http://127.0.0.1:8000/storage/portfolio/1619339111_60852767b1c28.jpeg" alt="project-img" />
            </div>
          </div>
        </div>
                <div class="slide_item row">
          <div class="col-lg-4  col-12 order-lg-0 order-2">
            <div class="slide_info ml">
              <span class="p_type">Brennan Hood</span>
              <h3 class="p_title">Voluptas ratione nob</h3>
              <a target="_blank" class="v_project" href="http://127.0.0.1:8000/works/1/details">
                <span>View Project</span>
                <img src="http://127.0.0.1:8000/frontend/assets/images/Arrow-icon.png" alt="project-img" />
              </a>
            </div>
          </div>
          <div class="col-lg-8 col-12 order-lg-0 order-1">
            <div class="project_img">
              <img src="http://127.0.0.1:8000/storage/portfolio/1619339071_6085273fb633f.jpeg" alt="project-img" />
            </div>
          </div>
        </div>
                </div>
      <h4 class="drag_text">Drag</h4>
    </div>
  </section>
  <!-- work section end -->

  <!-- what-do section start -->
  <section id="WE_Do" class="none">

    <div class="container">
      <div class="row section_title">
        <h2>What we do</h2>
      </div>
      <div class="row">
        <div class="col-xl-6  mb-30">
          <div class="box_wrapper">
            <div class="card_box">
              <div class="front_part face">
                <h2>Frontend <span class="text_stroke">Development</span></h2>
              </div>
              <div class="back_part face">
                <div class="box_title">
                  <h2>Frontend Development</h2>
                  <p> Front-end web development is the practice of converting data to a graphical interface, through the use of HTML, CSS, and JavaScript, so that users can view and interact with that data. A front-end web developer is responsible for implementing visual elements that users see and interact with in a web application. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6  mb-30">
          <div class="box_wrapper">
            <div class="card_box">
              <div class="front_part face">
                <h2>Backend <span class="text_stroke">Development</span></h2>
              </div>
              <div class="back_part face">
                <div class="box_title">
                  <h2>Backend Development</h2>
                  <p>A back-end web developer is responsible for server-side web application logic and integration of the work front-end web developers do. Back-end developers usually write web services and APIs used by front-end developers and mobile application developers. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6  mb-30">
          <div class="box_wrapper">
            <div class="card_box">
              <div class="front_part face">
                <h2>SPA <span class="text_stroke">Development</span></h2>
              </div>
              <div class="back_part face">
                <div class="box_title">
                  <h2>SPA Development</h2>
                  <p> A single-page application (SPA) is a web Application or website that interacts with the user by dynamically rewriting the current web page with new data from the web server, instead of the default method of the browser loading entire new pages. The goal is faster transitions that make the website feel more like a native app. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6  mb-30">
          <div class="box_wrapper">
            <div class="card_box">
              <div class="front_part face">
                <h2>PWA <span class="text_stroke">Development</span></h2>
              </div>
              <div class="back_part face">
                <div class="box_title">
                  <h2>PWA  Development </h2>
                  <p> Progressive web apps (PWA) has in combination of the best features of the site and mobile application built-in it. In practice, this means that such a site can be accessed by users as well as the application and the most interesting thing is an Internet connection is not necessary for this. The installation process can be done in one click directly from the browser. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="round_shape_img">
      <img src="http://127.0.0.1:8000/frontend/assets/images/shape/shadow_5.png" alt="">
    </div>
  </section>
  <!-- what-do section end -->

  <!-- brand section start -->
  <section id="brand_area" class="none">
    <div class="container">
      <div class="brand_slider">
        <div class="single_brand">
          <img src="http://127.0.0.1:8000/frontend/assets/images/partner/Adobe.png" alt="brand logo" />
        </div>
        <div class="single_brand">
          <img src="http://127.0.0.1:8000/frontend/assets/images/partner/Sketch.png" alt="brand logo" />
        </div>
        <div class="single_brand">
          <img src="http://127.0.0.1:8000/frontend/assets/images/partner/Spotify.png" alt="brand logo" />
        </div>
        <div class="single_brand">
          <img src="http://127.0.0.1:8000/frontend/assets/images/partner/google.png" alt="brand logo" />
        </div>
        <div class="single_brand">
          <img src="http://127.0.0.1:8000/frontend/assets/images/partner/amazon.png" alt="brand logo" />
        </div>
        <div class="single_brand">
          <img src="http://127.0.0.1:8000/frontend/assets/images/partner/Firefox.png" alt="brand logo" />
        </div>
        <div class="single_brand">
          <img src="http://127.0.0.1:8000/frontend/assets/images/partner/Apple icon.png" alt="brand logo" />
        </div>
      </div>
    </div>
  </section>
  <!-- brand section end -->

  <!-- testimonial section start -->


  <section id="testimonial-area" class="none">
    <div class="container">
      <div class="row section_title">
        <h2>Testimonials</h2>
      </div>
      <div class="row testimonial_slider">
                <div class="slide_item">
          <div class="content_text">
            "Ab enim laudantium."
          </div>
          <h3 class="client_name">Tatum Robertson</h3>
          <span class="client_position">Ut sed rem hic illo</span>
        </div>
                <div class="slide_item">
          <div class="content_text">
            "Sed omnis aperiam ei."
          </div>
          <h3 class="client_name">Byron Reeves</h3>
          <span class="client_position">Ut culpa labore Nam</span>
        </div>
                <div class="slide_item">
          <div class="content_text">
            "Nisi ullam voluptas."
          </div>
          <h3 class="client_name">Sawyer Wooten</h3>
          <span class="client_position">Tempora voluptatem</span>
        </div>
              </div>
    </div>
    <div class="qoute_img">
      <img src="http://127.0.0.1:8000/frontend/assets/images/qoute.png" alt="qoute" />
    </div>
  </section>
  <!-- testimonial section end -->
  <!-- Projects Section Start -->
    <section class="p-0">
                                    <div class="latestProject latestProject--two">
                    <div class="container latestProject__container">
                        <div class="row">
                            <div class="col-lg-6 order-2a order-lg-0">
                                <div class="latestProject__imgContent latestProject__imgContent_two">
                                    <img src="http://127.0.0.1:8000/storage/subcompany/banner/1619338636_6085258ce40b0.png" alt="codeshiki"/>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-0">
                                <div class="latestProject__contentText latestProject__contentText_two">
                                    <div class="latestProject__logo latestProject__logo_codeshikhi">
                                        <img src="http://127.0.0.1:8000/storage/subcompany/logo/1619338636_6085258ce3a3e.png" alt="brandLogo" />
                                    </div>
                                    <h5 class="latestProject__title">Echotemplate</h5>
                                    <div class="latestProject__projectInfo">
                                        <div class="latestProject__info">
                                            <h5>500+</h5>
                                            <p>Product Download</p>
                                        </div>
                                        <div class="latestProject__info">
                                            <h5>200+</h5>
                                            <p>Product view</p>
                                        </div>
                                    </div>
                                    <p class="latestProject__brief"><p>Praesent porttitor quam lacus, quis rhoncus ligula iaculis pharetra. Phasellus vitae tellus justo. Donec tellus eros, feugiat vel augue vel, vehicula luctus ex. Vestibulum semper a ante at maximus. In fringilla condimentum mauris, non efficitur ex tincidunt non.</p></p>

                                    <button class="zakirSoft__button">
                                        <a target="_blank" href="https://echotemplate.com/">Launch Echotemplate
                                            <span><img src="http://127.0.0.1:8000/frontend/assets/images/icons/arrow.png" alt="arrow"/></span>
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                                <div class="latestProject latestProject--one">
                    <div class="container latestProject__container">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-0">
                                <div class="latestProject__contentText">
                                <div class="latestProject__logo">
                                    <img src="http://127.0.0.1:8000/storage/subcompany/logo/1619338670_608525ae7418d.png" alt="brandLogo" />
                                </div>
                                <h5 class="latestProject__title">Codeshikhi</h5>
                                <div class="latestProject__projectInfo">
                                    <div class="latestProject__info">
                                        <h5>500+</h5>
                                        <p>Product Download</p>
                                    </div>
                                    <div class="latestProject__info">
                                        <h5>100+</h5>
                                        <p>Product view</p>
                                    </div>
                                </div>
                                <p class="latestProject__brief"><p>Praesent porttitor quam lacus, quis rhoncus ligula iaculis pharetra. Phasellus vitae tellus justo. Donec tellus eros, feugiat vel augue vel, vehicula luctus ex. Vestibulum semper a ante at maximus. In fringilla condimentum mauris, non efficitur ex tincidunt non.</p></p>

                                <button class="zakirSoft__button">
                                    <a target="_blank" href="https://codeshikhi.io/">Launch Codeshikhi
                                        <span><img src="http://127.0.0.1:8000/frontend/assets/images/icons/arrow.png" alt="arrow"/></span>
                                    </a>
                                </button>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-0">
                                <div class="latestProject__imgContent latestProject__imgContent_one">
                                    <img src="http://127.0.0.1:8000/storage/subcompany/banner/1619338670_608525ae74362.png" alt="echotemplate" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        </section>
  <!-- Projects Section End -->

  <!-- Article/Blog Section Start  -->
  <div class="articles">
      <div class="container">
          <div class="row">
              <div class="section w-100">
                  <h2 class="section__title section__title_one text-center">
                      What’s coming next
                  </h2>
              </div>
          </div>
          <div class="row">
                            <div class="col-lg-4 col-md-6">
                  <a href="http://127.0.0.1:8000/news/qui-officia-iste-dol">
                      <div class="articles__contentBox card">
                          <div class="articles__contentImg">
                              <img src="http://127.0.0.1:8000/storage/news/1619338723_608525e3a4fe9.png" alt="artilce01" />
                          </div>
                          <div class="articles__contentText">
                              <h5 class="articles__title"><a href="http://127.0.0.1:8000/news/qui-officia-iste-dol">Qui officia iste dol</a></h5>
                              <p class="articles__brief">Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.</p>
                              <a href="http://127.0.0.1:8000/news/qui-officia-iste-dol" class="articles__readMore">Read More
                                  <span><img src="http://127.0.0.1:8000/frontend/assets/images/icons/arrow.png" alt="arrow" /></span>
                              </a>
                          </div>
                      </div>
                  </a>
              </div>
                            <div class="col-lg-4 col-md-6">
                  <a href="http://127.0.0.1:8000/news/we-are-hiring">
                      <div class="articles__contentBox card">
                          <div class="articles__contentImg">
                              <img src="http://127.0.0.1:8000/storage/news/1619338707_608525d33200f.png" alt="artilce01" />
                          </div>
                          <div class="articles__contentText">
                              <h5 class="articles__title"><a href="http://127.0.0.1:8000/news/we-are-hiring">We Are Hiring</a></h5>
                              <p class="articles__brief">Curabitur mollis elit eu libero eleifend, a aliquet magna consectetur. Fusce at accumsan quam. Ut maximus facilisis libero sit amet viverra. Nullam eu rutrum ex.</p>
                              <a href="http://127.0.0.1:8000/news/we-are-hiring" class="articles__readMore">Read More
                                  <span><img src="http://127.0.0.1:8000/frontend/assets/images/icons/arrow.png" alt="arrow" /></span>
                              </a>
                          </div>
                      </div>
                  </a>
              </div>
                        </div>
      </div>
  </div>
  <!-- Article/Blog Section End -->
    <!-- main section end -->

    <!-- footer section start -->
    <footer id="footer_area" class="none">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer_menu">
                        <span>Quick Link</span>
                        <ul class="nav_links">
                            <li class="nav_items"><a href="http://127.0.0.1:8000" class=" active ">Home</a></li>
                            <li class="nav_items"><a href="http://127.0.0.1:8000/about" class="">About</a></li>
                            <li class="nav_items"><a href="http://127.0.0.1:8000/works" class="" >works</a></li>
                            <li class="nav_items"><a href="http://127.0.0.1:8000/career" class="">Career</a></li>
                            <li class="nav_items"><a href="http://127.0.0.1:8000/contact" class="">Contact</a></li>
                        </ul>
                    </div>
                    <div class="connect_info">
                        <h4>Connect With us</h4>
                        <p>
                            
                        </p>
                        <span class="email"></span>
                    </div>
                    <div>
                        <ul class="social_links">
                                                    </ul>
                    </div>
                </div>
                <div class="col-12">
                    <div class="copyright_text">
                        <p>&#169; 2021 - Zakirsoft</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer section end -->

    <!-- all js goes here -->
    <script src="http://127.0.0.1:8000/frontend/assets/js/jquery-1.12.4.min.js"></script>
    <script src="http://127.0.0.1:8000/frontend/assets/js/popper.min.js"></script>
    <script src="http://127.0.0.1:8000/frontend/assets/js/bootstrap.min.js"></script>
    <script src="http://127.0.0.1:8000/frontend/assets/js/slick.min.js"></script>
    <script src="http://127.0.0.1:8000/frontend/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="http://127.0.0.1:8000/frontend/assets/js/app.js"></script>
    
    </body>

</html>

```
<div id="execution-results-GET-" hidden>
    <blockquote>Received response<span id="execution-response-status-GET-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GET-"></code></pre>
</div>
<div id="execution-error-GET-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET-"></code></pre>
</div>
<form id="form-GET-" data-method="GET" data-path="/" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GET-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GET-" onclick="tryItOut('GET-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GET-" onclick="cancelTryOut('GET-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GET-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>/</code></b>
</p>
</form>


## about




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/about" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/about"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title> About Us  - Zakir Soft</title>

    <!-- =========== SEO Tags ============ -->
        <meta name="author" content="Zakir Soft">
    <meta name="keywords" content="web design, web development, web development agency, agency, web, design, development, pwa, spa, web application development, website, website design, ecommerce website">
    <meta name="description" content="Zakir Soft, A team of young designer and developers. We have frontend, backend, mobile application and UI/UX Design team. We provide complete web solution to any company.">
    <meta property="og:title" content="About Us - Zakir Soft" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="http://127.0.0.1:8000/frontend/assets/images/preview.jpg" />

    <!-- =========== Favicon ============ -->
    <link rel="icon" type="image/png" sizes="16x16" href="http://127.0.0.1:8000/frontend/assets/images/logo/16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="http://127.0.0.1:8000/frontend/assets/images/logo/32x32.png">
    <link rel="icon" type="image/png" sizes="64x64" href="http://127.0.0.1:8000/frontend/assets/images/logo/64x64.png">

    <link rel="stylesheet" href="http://127.0.0.1:8000/frontend/assets/css/all.min.css" />
    <link rel="stylesheet" href="http://127.0.0.1:8000/frontend/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="http://127.0.0.1:8000/frontend/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/frontend/assets/css/slick.css" />
    <link rel="stylesheet" href="http://127.0.0.1:8000/frontend/assets/css/style.css" />
    
    <style>
        .slick-dots li button,
        #testimonial-area .testimonial_slider .slick-arrow.slick-prev,
        #testimonial-area .testimonial_slider .slick-arrow.slick-next
         {
            display: none !important;
        }

        #toast-container>:hover {
            opacity: 1;
        }

        #toast-container>div {
            position: relative;
            pointer-events: auto;
            overflow: hidden;
            margin: 0 0 6px;
            padding: 15px 15px 15px 50px;
            width: 300px;
            border-radius: 3px;
            background-position: 15px center;
            background-repeat: no-repeat;
            box-shadow: 0 0 12px #999;
            color: #fff;
        }

        #WE_Do .container .box_wrapper .card_box .face.back_part .box_title p {
            line-height: 30px;
            margin-bottom: 0;
        }
    </style>
    </head>

<body>
    <!-- header section start -->
    <header>
        <div class="container">
            <nav class="head_content">
                <a href="http://127.0.0.1:8000" class="logo">
                    <img src="http://127.0.0.1:8000/frontend/assets/images/logo/1.png" alt="Zakir Soft">
                </a>
                <div class="menu">
                    <ul class="m_bar">
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!-- Menus -->
    <div class="fullscreen-menu">
        <div class="menu-body">
            <div class="container">
                <div class="menu-container">
                    <div class="menu-close">
                        <ul class="close-bar">
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="main-menu">
                        <ul>
                            <li> <a href="http://127.0.0.1:8000" class=""> <span>01</span> Home </a>
                            </li>
                            <li> <a href="http://127.0.0.1:8000/about" class=" active "> <span>02</span> About
                                </a> </li>
                            <li> <a href="http://127.0.0.1:8000/works" class=""> <span>03</span> Works
                                </a>
                            </li>
                            <li> <a href="http://127.0.0.1:8000/career" class=" "> <span>04</span>
                                    Career
                                </a> </li>
                            <li> <a href="http://127.0.0.1:8000/contact" class=""> <span>05</span>
                                    Contact </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-footer">
            <div class="container">
                <ul class="footer-social">
                                    </ul>
                <div class="copyright-text">
                    <p> &copy; 2021 - Zakirsoft </h5>
                </div>
            </div>
        </div>
    </div>
    <!-- header section end -->

    <!-- main section start -->
    
  <!-- about-us section start -->
  <section id="about" class="none">

    <div class="container">
      <div class="row section_title">
        <h2>About us</h2>
      </div>
      <div class="row about_content align-items-center justify-content-center">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-12">
              <div class="about_content_img">
                <img src="http://127.0.0.1:8000/frontend/assets/images/about/about.jpg" alt="img" />
              </div>
            </div>
            <div class="col-lg-4 col-12 order-lg-0 order-2">
              <div class="about_content_img_1">
                <img src="http://127.0.0.1:8000/frontend/assets/images/about/about3.jpg" alt="img" />
              </div>
            </div>
            <div class="col-lg-8 col-12 order-lg-0 order-1">
              <div class="about_content_img_2">
                <img src="http://127.0.0.1:8000/frontend/assets/images/about/about2.jpg" alt="img" class="img-fluid" />
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about_content_wrapper">
            <h3>Who We are</h3>
            <p>Zakir Soft is a Software company and Software Development Training Institute. We develop Softwares for your business and we also provide quality software training in Adabor Since 2020. We have passionate teams like Full Stack Laravel Developer, Android Developer, UI/UX Designer. We have management system softwares for the local market.
            we also have eCommerce systems for your online business.</p>
            
          </div>
        </div>
      </div>
    </div>
    <div class="round_shape_img">
      <img src="http://127.0.0.1:8000/frontend/assets/images/shape/shadow_2.png" alt="shaddow_ibackground">
    </div>
  </section>
  <!-- about-us 2 section end -->
  <section id="about_content_2" class="none">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-0 order-2">
          <div class="office_content_wrapper">
            <h3>About zakirsoft</h3>
            <p>We started this business to provide good softwares and quality of training at a better price. Zakirsoft specialize in working directly with other organizations to create sustainable partnerships. In fact, we recently helped student's to give them a correct path to become a web developer. </p>
            <a target="_blank" href="http://127.0.0.1:8000/career" class="button">Join Our Team</a>
          </div>
        </div>
        <div class="col-lg-6 order-lg-0 order-1 r_space">
          <div class="about_content_2_img">
            <img src="http://127.0.0.1:8000/frontend/assets/images/about/office.jpg" alt="office images" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- about-us section end -->

  <!-- Team section start -->
  <section id="team" class="none">
    <div class="round_shape_img">
      <img src="http://127.0.0.1:8000/frontend/assets/images/shape/shadow.png" alt="shaddow_ibackground">
    </div>
    <div class="container">
      <div class="row section_title">
        <h2>Our Team</h2>
      </div>
      <div class="row team_content">
                <div class="col-md-6">
          <div class="team_card text-center">
            <div class="members_img">
              <img src="http://127.0.0.1:8000/storage/team/1619338557_6085253d1ba8d.png" alt="team-members" />
            </div>
            <div class="member_position">
              <h3 class="name">Mary Black</h3>
              <span class="position">Minima commodi irure</span>
            </div>
          </div>
        </div>
                <div class="col-md-6">
          <div class="team_card text-center">
            <div class="members_img">
              <img src="http://127.0.0.1:8000/storage/team/1619338550_608525368ba8f.png" alt="team-members" />
            </div>
            <div class="member_position">
              <h3 class="name">Amal Hubbard</h3>
              <span class="position">Consequatur ea et il</span>
            </div>
          </div>
        </div>
              </div>
    </div>

  </section>
  <!-- Team section end -->
    <!-- main section end -->

    <!-- footer section start -->
    <footer id="footer_area" class="none">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer_menu">
                        <span>Quick Link</span>
                        <ul class="nav_links">
                            <li class="nav_items"><a href="http://127.0.0.1:8000" class="">Home</a></li>
                            <li class="nav_items"><a href="http://127.0.0.1:8000/about" class=" active ">About</a></li>
                            <li class="nav_items"><a href="http://127.0.0.1:8000/works" class="" >works</a></li>
                            <li class="nav_items"><a href="http://127.0.0.1:8000/career" class="">Career</a></li>
                            <li class="nav_items"><a href="http://127.0.0.1:8000/contact" class="">Contact</a></li>
                        </ul>
                    </div>
                    <div class="connect_info">
                        <h4>Connect With us</h4>
                        <p>
                            
                        </p>
                        <span class="email"></span>
                    </div>
                    <div>
                        <ul class="social_links">
                                                    </ul>
                    </div>
                </div>
                <div class="col-12">
                    <div class="copyright_text">
                        <p>&#169; 2021 - Zakirsoft</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer section end -->

    <!-- all js goes here -->
    <script src="http://127.0.0.1:8000/frontend/assets/js/jquery-1.12.4.min.js"></script>
    <script src="http://127.0.0.1:8000/frontend/assets/js/popper.min.js"></script>
    <script src="http://127.0.0.1:8000/frontend/assets/js/bootstrap.min.js"></script>
    <script src="http://127.0.0.1:8000/frontend/assets/js/slick.min.js"></script>
    <script src="http://127.0.0.1:8000/frontend/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="http://127.0.0.1:8000/frontend/assets/js/app.js"></script>
    
    </body>

</html>

```
<div id="execution-results-GETabout" hidden>
    <blockquote>Received response<span id="execution-response-status-GETabout"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETabout"></code></pre>
</div>
<div id="execution-error-GETabout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETabout"></code></pre>
</div>
<form id="form-GETabout" data-method="GET" data-path="about" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETabout', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETabout" onclick="tryItOut('GETabout');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETabout" onclick="cancelTryOut('GETabout');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETabout" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>about</code></b>
</p>
</form>


## works




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/works" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/works"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title> Portfolio  - Zakir Soft</title>

    <!-- =========== SEO Tags ============ -->
    <meta name="author" content="Zakir Soft">
<meta name="keywords"
    content="web design, web development, web development agency, agency, web, design, development, pwa, spa, web application development, website, website design, ecommerce website">
<meta name="description"
    content="We work several trending technology, check our latest works in multiple category, including web design, web development & web application development. We work with Python, PHP, Laravel, PostgreSQL, MYSQL, Vue.js, React.js, Nuxt.js, Next.js, Cloud Server & much more.">
<meta property="og:title" content="Portfolio - Zakir Soft" />
<meta property="og:type" content="website" />
<meta property="og:image" content="http://127.0.0.1:8000/frontend/assets/images/preview.jpg" />

    <!-- =========== Favicon ============ -->
    <link rel="icon" type="image/png" sizes="16x16" href="http://127.0.0.1:8000/frontend/assets/images/logo/16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="http://127.0.0.1:8000/frontend/assets/images/logo/32x32.png">
    <link rel="icon" type="image/png" sizes="64x64" href="http://127.0.0.1:8000/frontend/assets/images/logo/64x64.png">

    <link rel="stylesheet" href="http://127.0.0.1:8000/frontend/assets/css/all.min.css" />
    <link rel="stylesheet" href="http://127.0.0.1:8000/frontend/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="http://127.0.0.1:8000/frontend/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/frontend/assets/css/slick.css" />
    <link rel="stylesheet" href="http://127.0.0.1:8000/frontend/assets/css/style.css" />
    
    <style>
        .slick-dots li button,
        #testimonial-area .testimonial_slider .slick-arrow.slick-prev,
        #testimonial-area .testimonial_slider .slick-arrow.slick-next
         {
            display: none !important;
        }

        #toast-container>:hover {
            opacity: 1;
        }

        #toast-container>div {
            position: relative;
            pointer-events: auto;
            overflow: hidden;
            margin: 0 0 6px;
            padding: 15px 15px 15px 50px;
            width: 300px;
            border-radius: 3px;
            background-position: 15px center;
            background-repeat: no-repeat;
            box-shadow: 0 0 12px #999;
            color: #fff;
        }

        #WE_Do .container .box_wrapper .card_box .face.back_part .box_title p {
            line-height: 30px;
            margin-bottom: 0;
        }
    </style>
    </head>

<body>
    <!-- header section start -->
    <header>
        <div class="container">
            <nav class="head_content">
                <a href="http://127.0.0.1:8000" class="logo">
                    <img src="http://127.0.0.1:8000/frontend/assets/images/logo/1.png" alt="Zakir Soft">
                </a>
                <div class="menu">
                    <ul class="m_bar">
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!-- Menus -->
    <div class="fullscreen-menu">
        <div class="menu-body">
            <div class="container">
                <div class="menu-container">
                    <div class="menu-close">
                        <ul class="close-bar">
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="main-menu">
                        <ul>
                            <li> <a href="http://127.0.0.1:8000" class=""> <span>01</span> Home </a>
                            </li>
                            <li> <a href="http://127.0.0.1:8000/about" class=""> <span>02</span> About
                                </a> </li>
                            <li> <a href="http://127.0.0.1:8000/works" class=" active "> <span>03</span> Works
                                </a>
                            </li>
                            <li> <a href="http://127.0.0.1:8000/career" class=" "> <span>04</span>
                                    Career
                                </a> </li>
                            <li> <a href="http://127.0.0.1:8000/contact" class=""> <span>05</span>
                                    Contact </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-footer">
            <div class="container">
                <ul class="footer-social">
                                    </ul>
                <div class="copyright-text">
                    <p> &copy; 2021 - Zakirsoft </h5>
                </div>
            </div>
        </div>
    </div>
    <!-- header section end -->

    <!-- main section start -->
    <!-- work section start -->
<section id="work" class="none">
    <div class="round_shape_img">
        <img src="http://127.0.0.1:8000/frontend/assets/images/shape/shadow_6.png" alt="shaddow_ibackground">
    </div>
    <div class="container">
        <div class="row section_title">
            <h2>Works</h2>
        </div>
        <div class="work_content">
            <div class="container">
                <div class="border-bottom pb-5">
                    <div class="row align-items-center">
                        <div class="col-md-12 d-flex justify-content-center align-items-center">
                            
                            <div class="work_tab my-2">
                                <ul class="nav nav-pills mr-auto" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link show active" id="pills-all-tab" data-toggle="pill"
                                            href="#pills-all" role="tab" aria-controls="pills-all"
                                            aria-selected="true">all</a>
                                    </li>
                                                                        <li class="nav-item">
                                        <a class="nav-link" id="pills-frontend-tab" data-toggle="pill"
                                            href="#pills1" role="tab" aria-controls="pills-frontend"
                                            aria-selected="false">Donna Mccarthy</a>
                                    </li>
                                                                        <li class="nav-item">
                                        <a class="nav-link" id="pills-frontend-tab" data-toggle="pill"
                                            href="#pills2" role="tab" aria-controls="pills-frontend"
                                            aria-selected="false">Brennan Hood</a>
                                    </li>
                                                                    </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tab content will appear here -->
                <div class="tab-content pt-5" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-backend" role="tabpanel"
                        aria-labelledby="pills-backend-tab">
                                                <div class="row align-items-center portfolio_img">
                            <div class="col-lg-4 col-12 order-lg-0 order-2">
                                <div class="project_info">
                                    <span class="p_type">Donna Mccarthy</span>
                                    <h3 class="project_name">Qui officia iste dol</h3>
                                    <a target="_blank" href="http://127.0.0.1:8000/works/2/details"
                                        class="v_project">
                                        view more
                                        <img src="http://127.0.0.1:8000/frontend/assets/images/Arrow-icon.png"
                                            alt="arrow_icon">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-12 order-lg-0 order-1">
                                <div class="project_img">
                                    <img src="http://127.0.0.1:8000/storage/portfolio/1619339111_60852767b1c28.jpeg" alt="Project_img">
                                </div>
                            </div>
                        </div>
                                                <div class="row align-items-center portfolio_img">
                            <div class="col-lg-4 col-12 order-lg-0 order-2">
                                <div class="project_info">
                                    <span class="p_type">Brennan Hood</span>
                                    <h3 class="project_name">Voluptas ratione nob</h3>
                                    <a target="_blank" href="http://127.0.0.1:8000/works/1/details"
                                        class="v_project">
                                        view more
                                        <img src="http://127.0.0.1:8000/frontend/assets/images/Arrow-icon.png"
                                            alt="arrow_icon">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-12 order-lg-0 order-1">
                                <div class="project_img">
                                    <img src="http://127.0.0.1:8000/storage/portfolio/1619339071_6085273fb633f.jpeg" alt="Project_img">
                                </div>
                            </div>
                        </div>
                                            </div>

                                                            <div class="tab-pane fade" id="pills1" role="tabpanel"
                        aria-labelledby="pills-ui-tab">
                                                <div class="row align-items-center portfolio_img">
                            <div class="col-lg-4 col-12 order-lg-0 order-2">
                                <div class="project_info">
                                    <span class="p_type">Donna Mccarthy</span>
                                    <h3 class="project_name">Qui officia iste dol</h3>
                                    <a target="_blank" href="http://127.0.0.1:8000/works/2/details" class="v_project">
                                        view more
                                        <img src="http://127.0.0.1:8000/frontend/assets/images/Arrow-icon.png"
                                            alt="arrow_icon">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-12 order-lg-0 order-1">
                                <div class="project_img">
                                    <img src="http://127.0.0.1:8000/storage/portfolio/1619339111_60852767b1c28.jpeg" alt="Project_img">
                                </div>
                            </div>
                        </div>
                                            </div>
                                                            <div class="tab-pane fade" id="pills2" role="tabpanel"
                        aria-labelledby="pills-ui-tab">
                                                <div class="row align-items-center portfolio_img">
                            <div class="col-lg-4 col-12 order-lg-0 order-2">
                                <div class="project_info">
                                    <span class="p_type">Brennan Hood</span>
                                    <h3 class="project_name">Voluptas ratione nob</h3>
                                    <a target="_blank" href="http://127.0.0.1:8000/works/1/details" class="v_project">
                                        view more
                                        <img src="http://127.0.0.1:8000/frontend/assets/images/Arrow-icon.png"
                                            alt="arrow_icon">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-12 order-lg-0 order-1">
                                <div class="project_img">
                                    <img src="http://127.0.0.1:8000/storage/portfolio/1619339071_6085273fb633f.jpeg" alt="Project_img">
                                </div>
                            </div>
                        </div>
                                            </div>
                                    </div>
            </div>
        </div>
    </div>
</section>
<!-- work section end -->
    <!-- main section end -->

    <!-- footer section start -->
    <footer id="footer_area" class="none">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer_menu">
                        <span>Quick Link</span>
                        <ul class="nav_links">
                            <li class="nav_items"><a href="http://127.0.0.1:8000" class="">Home</a></li>
                            <li class="nav_items"><a href="http://127.0.0.1:8000/about" class="">About</a></li>
                            <li class="nav_items"><a href="http://127.0.0.1:8000/works" class=" active " >works</a></li>
                            <li class="nav_items"><a href="http://127.0.0.1:8000/career" class="">Career</a></li>
                            <li class="nav_items"><a href="http://127.0.0.1:8000/contact" class="">Contact</a></li>
                        </ul>
                    </div>
                    <div class="connect_info">
                        <h4>Connect With us</h4>
                        <p>
                            
                        </p>
                        <span class="email"></span>
                    </div>
                    <div>
                        <ul class="social_links">
                                                    </ul>
                    </div>
                </div>
                <div class="col-12">
                    <div class="copyright_text">
                        <p>&#169; 2021 - Zakirsoft</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer section end -->

    <!-- all js goes here -->
    <script src="http://127.0.0.1:8000/frontend/assets/js/jquery-1.12.4.min.js"></script>
    <script src="http://127.0.0.1:8000/frontend/assets/js/popper.min.js"></script>
    <script src="http://127.0.0.1:8000/frontend/assets/js/bootstrap.min.js"></script>
    <script src="http://127.0.0.1:8000/frontend/assets/js/slick.min.js"></script>
    <script src="http://127.0.0.1:8000/frontend/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="http://127.0.0.1:8000/frontend/assets/js/app.js"></script>
    
    </body>

</html>

```
<div id="execution-results-GETworks" hidden>
    <blockquote>Received response<span id="execution-response-status-GETworks"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETworks"></code></pre>
</div>
<div id="execution-error-GETworks" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETworks"></code></pre>
</div>
<form id="form-GETworks" data-method="GET" data-path="works" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETworks', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETworks" onclick="tryItOut('GETworks');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETworks" onclick="cancelTryOut('GETworks');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETworks" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>works</code></b>
</p>
</form>


## works/{id}/details




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/works/voluptatem/details" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/works/voluptatem/details"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (404):

```json

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- =========== Favicon ============ -->
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/logo/16x16.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/logo/32x32.png">
  <link rel="icon" type="image/png" sizes="64x64" href="assets/images/logo/64x64.png">

  <!-- =========== SEO Tags ============ -->
  <title> 404 Not Found - Zakir Soft </title>
  <meta name="author" content="Zakir Soft">
  <meta name="keywords" content="web design, web development, web development agency, agency, web, design, development, pwa, spa, web application development, website, website design, ecommerce website">
  <meta name="description" content="We are a web design & development company in Dhaka, Bangladesh. We provide web design, web development, SPA, SSR & web application, development services.">
  <meta property="og:title" content="404 Not Found - Zakir Soft" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="assets/images/preview.jpg" />

  <!-- =========== CSS URL ============ -->
  <link rel="stylesheet" href="http://127.0.0.1:8000/frontend/assets/css/all.min.css" />
  <link rel="stylesheet" href="http://127.0.0.1:8000/frontend/assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="http://127.0.0.1:8000/frontend/assets/css/magnific-popup.css">
  <link rel="stylesheet" href="http://127.0.0.1:8000/frontend/assets/css/slick.css">
  <link rel="stylesheet" href="http://127.0.0.1:8000/frontend/assets/css/style.css" />
</head>

<body>
  <!-- header section start -->
  <header>
    <div class="container">
      <nav class="head_content">
        <a href="http://127.0.0.1:8000" class="logo">
          <img src="http://127.0.0.1:8000/frontend/assets/images/logo/1.png" alt="Zakir Soft">
        </a>
        <div class="menu">
          <ul class="m_bar">
            <li></li>
            <li></li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <!-- Menus -->
  <!-- Menus -->
  <div class="fullscreen-menu">
    <div class="menu-body">
      <div class="container">
        <div class="menu-container">
          <div class="menu-close">
            <ul class="close-bar">
              <li></li>
              <li></li>
            </ul>
          </div>
          <div class="main-menu">
            <ul>
              <li> <a href="http://127.0.0.1:8000"> <span>01</span> Home </a> </li>
              <li> <a href="http://127.0.0.1:8000/about" class="active"> <span>02</span> About </a> </li>
              <li> <a href="http://127.0.0.1:8000/works"> <span>03</span> Work </a> </li>
              <li> <a href="http://127.0.0.1:8000/career"> <span>04</span> Career </a> </li>
              <li> <a href="http://127.0.0.1:8000/contact"> <span>05</span> Contact </a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="menu-footer">
      <div class="container">
                <ul class="footer-social">
                    </ul>
        <div class="copyright-text">
            <p>&#169; 2021 - Zakirsoft</p>
        </div>
      </div>
    </div>
  </div>
  <!-- header section end -->

  <!-- 404 start -->
  <section id="error_area" class="none text-center">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="error_wrapper">
            <div class="error_img">
              <img src="http://127.0.0.1:8000/frontend/assets/images/404.svg" alt="404 images">
            </div>
            <h2>Oops, The page you are looking is not found</h2>
            <div class="404_button">
              <a class="btn" href="http://127.0.0.1:8000">Back to home</a>
            </div>
          </div>
          <div class="bottom">
            <div class="connect_info pb-5">
                                <p></p>
                <span class="email"><b></b></span>
            </div>
            <div class="container">
                              <ul class="social_links">
                              </ul>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="copyright_text">
            <p>&#169; 2021 - Zakirsoft</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- 404 end -->


  <!-- all js goes here -->
  <script src="http://127.0.0.1:8000/frontend/assets/js/jquery-1.12.4.min.js"></script>
  <script src="http://127.0.0.1:8000/frontend/assets/js/popper.min.js"></script>
  <script src="http://127.0.0.1:8000/frontend/assets/js/bootstrap.min.js"></script>
  <script src="http://127.0.0.1:8000/frontend/assets/js/slick.min.js"></script>
  <script src="http://127.0.0.1:8000/frontend/assets/js/jquery.magnific-popup.min.js"></script>
  <script src="http://127.0.0.1:8000/frontend/assets/js/app.js"></script>
</body>

</html>

```
<div id="execution-results-GETworks--id--details" hidden>
    <blockquote>Received response<span id="execution-response-status-GETworks--id--details"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETworks--id--details"></code></pre>
</div>
<div id="execution-error-GETworks--id--details" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETworks--id--details"></code></pre>
</div>
<form id="form-GETworks--id--details" data-method="GET" data-path="works/{id}/details" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETworks--id--details', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETworks--id--details" onclick="tryItOut('GETworks--id--details');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETworks--id--details" onclick="cancelTryOut('GETworks--id--details');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETworks--id--details" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>works/{id}/details</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETworks--id--details" data-component="url" required  hidden>
<br>

</p>
</form>


## career




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/career" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/career"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title> Career  - Zakir Soft</title>

    <!-- =========== SEO Tags ============ -->
        <meta name="author" content="Zakir Soft">
    <meta name="keywords" content="web design, web development, web development agency, agency, web, design, development, pwa, spa, web application development, website, website design, ecommerce website">
    <meta name="description" content="We are engertic team of designers and developers. We work with Python, PHP, Laravel, PostgreSQL, MYSQL, React.js, Vue.js, Nuxt.js, Next.js, Cloud Server. We are open to application, join us.">
    <meta property="og:title" content="Career - Zakir Soft" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="http://127.0.0.1:8000/frontend/assets/images/preview.jpg" />

    <!-- =========== Favicon ============ -->
    <link rel="icon" type="image/png" sizes="16x16" href="http://127.0.0.1:8000/frontend/assets/images/logo/16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="http://127.0.0.1:8000/frontend/assets/images/logo/32x32.png">
    <link rel="icon" type="image/png" sizes="64x64" href="http://127.0.0.1:8000/frontend/assets/images/logo/64x64.png">

    <link rel="stylesheet" href="http://127.0.0.1:8000/frontend/assets/css/all.min.css" />
    <link rel="stylesheet" href="http://127.0.0.1:8000/frontend/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="http://127.0.0.1:8000/frontend/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/frontend/assets/css/slick.css" />
    <link rel="stylesheet" href="http://127.0.0.1:8000/frontend/assets/css/style.css" />
    <link rel="stylesheet" href="http://127.0.0.1:8000/frontend/assets/css/simple-lightbox.min.css">

    <style>
        .slick-dots li button,
        #testimonial-area .testimonial_slider .slick-arrow.slick-prev,
        #testimonial-area .testimonial_slider .slick-arrow.slick-next
         {
            display: none !important;
        }

        #toast-container>:hover {
            opacity: 1;
        }

        #toast-container>div {
            position: relative;
            pointer-events: auto;
            overflow: hidden;
            margin: 0 0 6px;
            padding: 15px 15px 15px 50px;
            width: 300px;
            border-radius: 3px;
            background-position: 15px center;
            background-repeat: no-repeat;
            box-shadow: 0 0 12px #999;
            color: #fff;
        }

        #WE_Do .container .box_wrapper .card_box .face.back_part .box_title p {
            line-height: 30px;
            margin-bottom: 0;
        }
    </style>
    </head>

<body>
    <!-- header section start -->
    <header>
        <div class="container">
            <nav class="head_content">
                <a href="http://127.0.0.1:8000" class="logo">
                    <img src="http://127.0.0.1:8000/frontend/assets/images/logo/1.png" alt="Zakir Soft">
                </a>
                <div class="menu">
                    <ul class="m_bar">
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!-- Menus -->
    <div class="fullscreen-menu">
        <div class="menu-body">
            <div class="container">
                <div class="menu-container">
                    <div class="menu-close">
                        <ul class="close-bar">
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="main-menu">
                        <ul>
                            <li> <a href="http://127.0.0.1:8000" class=""> <span>01</span> Home </a>
                            </li>
                            <li> <a href="http://127.0.0.1:8000/about" class=""> <span>02</span> About
                                </a> </li>
                            <li> <a href="http://127.0.0.1:8000/works" class=""> <span>03</span> Works
                                </a>
                            </li>
                            <li> <a href="http://127.0.0.1:8000/career" class="  active "> <span>04</span>
                                    Career
                                </a> </li>
                            <li> <a href="http://127.0.0.1:8000/contact" class=""> <span>05</span>
                                    Contact </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-footer">
            <div class="container">
                <ul class="footer-social">
                                    </ul>
                <div class="copyright-text">
                    <p> &copy; 2021 - Zakirsoft </h5>
                </div>
            </div>
        </div>
    </div>
    <!-- header section end -->

    <!-- main section start -->
        <!-- joinus section start -->
    
    <!-- joinus section end -->
    <section class="careerTeam">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-0">
                    <div class="careerTeam__contentText">
                        <h5 class="careerTeam__title">Join Our Team</h5>
                        <p class="careerTeam__brief">
                            Curabitur mollis elit eu libero eleifend, a aliquet magna
                            consectetur. Fusce at accumsan quam. Ut maximus facilisis libero
                            sit amet viverra. Nullam eu rutrum ex. Nullam consectetur turpis
                            mi, id egestas urna mattis et.
                        </p>
                        <button class="zakirSoft__button px-4">
                            <a href="#positions"> view all position </a>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-0">
                    <div class="careerTeam__contentImg">
                        <img src="http://127.0.0.1:8000/frontend/assets/images/banner/Working late-bro.png" alt="contentImg" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="perks">
        <div class="container perks__container">
            <div class="row">
                <div class="section">
                    <h5 class="section__title section__title_two">Perks & Benefits</h5>
                    <p class="section__brief">
                        Aenean vitae interdum leo. Donec luctus nulla eget leo fringilla
                        sollicitudin. Phasellus imperdiet nisl ut auctor ultricies. Morbi
                        vehicula, lorem ac consectetur accumsa
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="perks__benefitsBoxes">
                    <div class="box">
                        <img src="http://127.0.0.1:8000/frontend/assets/images/perks/demo-01.png" alt="demo" />
                        <h5 class="box__title">
                            Friendly <br />
                            Environments
                        </h5>
                    </div>
                    <div class="box">
                        <img src="http://127.0.0.1:8000/frontend/assets/images/perks/demo-02.png" alt="demo" />
                        <h5 class="box__title">
                            Competitive <br />
                            Salary
                        </h5>
                    </div>
                    <div class="box">
                        <img src="http://127.0.0.1:8000/frontend/assets/images/perks/demo-03.png" alt="demo" />
                        <h5 class="box__title">
                            Healthy Food & <br />
                            Snacks
                        </h5>
                    </div>
                    <div class="box">
                        <img src="http://127.0.0.1:8000/frontend/assets/images/perks/demo-04.png" alt="demo" />
                        <h5 class="box__title">
                            Learning & <br />
                            Developments
                        </h5>
                    </div>
                    <div class="box">
                        <img src="http://127.0.0.1:8000/frontend/assets/images/perks/demo-05.png" alt="demo" />
                        <h5 class="box__title">
                            Personal Career <br />
                            Growth
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section Start -->
    <section class="gallery">
        <div class="container">
            <div class="row">
                <div class="section">
                    <h5 class="section__title section__title_two">Our Gallery</h5>
                    <p class="section__brief">
                        Aenean vitae interdum leo. Donec luctus nulla eget leo fringilla
                        sollicitudin. Phasellus imperdiet nisl ut auctor ultricies. Morbi
                        vehicula, lorem ac consectetur accumsa
                    </p>
                </div>
            </div>
            <div class="row gallery__itemContents">
                                    <div class="col-md-4">
                        <a class="gallery__item" href="http://127.0.0.1:8000/storage/gallery/1619338745_608525f96208b.png">
                            <img src="http://127.0.0.1:8000/storage/gallery/1619338745_608525f96208b.png" alt="demo" class="img-fluid" />
                        </a>
                    </div>
                                    <div class="col-md-4">
                        <a class="gallery__item" href="http://127.0.0.1:8000/storage/gallery/1619338745_608525f985963.jpg">
                            <img src="http://127.0.0.1:8000/storage/gallery/1619338745_608525f985963.jpg" alt="demo" class="img-fluid" />
                        </a>
                    </div>
                                    <div class="col-md-4">
                        <a class="gallery__item" href="http://127.0.0.1:8000/storage/gallery/1619338745_608525f98d947.jpeg">
                            <img src="http://127.0.0.1:8000/storage/gallery/1619338745_608525f98d947.jpeg" alt="demo" class="img-fluid" />
                        </a>
                    </div>
                                    <div class="col-md-4">
                        <a class="gallery__item" href="http://127.0.0.1:8000/storage/gallery/1619338745_608525f9a2896.jpeg">
                            <img src="http://127.0.0.1:8000/storage/gallery/1619338745_608525f9a2896.jpeg" alt="demo" class="img-fluid" />
                        </a>
                    </div>
                                    <div class="col-md-4">
                        <a class="gallery__item" href="http://127.0.0.1:8000/storage/gallery/1619338745_608525f9ad82b.jpg">
                            <img src="http://127.0.0.1:8000/storage/gallery/1619338745_608525f9ad82b.jpg" alt="demo" class="img-fluid" />
                        </a>
                    </div>
                                    <div class="col-md-4">
                        <a class="gallery__item" href="http://127.0.0.1:8000/storage/gallery/1619338745_608525f9c10ac.jpg">
                            <img src="http://127.0.0.1:8000/storage/gallery/1619338745_608525f9c10ac.jpg" alt="demo" class="img-fluid" />
                        </a>
                    </div>
                                    <div class="col-md-4">
                        <a class="gallery__item" href="http://127.0.0.1:8000/storage/gallery/1619338745_608525f9c9246.png">
                            <img src="http://127.0.0.1:8000/storage/gallery/1619338745_608525f9c9246.png" alt="demo" class="img-fluid" />
                        </a>
                    </div>
                                    <div class="col-md-4">
                        <a class="gallery__item" href="http://127.0.0.1:8000/storage/gallery/1619338745_608525f9e42c3.png">
                            <img src="http://127.0.0.1:8000/storage/gallery/1619338745_608525f9e42c3.png" alt="demo" class="img-fluid" />
                        </a>
                    </div>
                                    <div class="col-md-4">
                        <a class="gallery__item" href="http://127.0.0.1:8000/storage/gallery/1619338745_608525f9e9712.jpg">
                            <img src="http://127.0.0.1:8000/storage/gallery/1619338745_608525f9e9712.jpg" alt="demo" class="img-fluid" />
                        </a>
                    </div>
                            </div>
        </div>
    </section>
    <!-- Gallery Section End -->

    <section class="positions" id="positions">
        <div class="container positions__container">
            <div class="row">
                <div class="section">
                    <h5 class="section__title section__title_two">
                        All open positions
                    </h5>
                    <p class="section__brief">
                        Aenean vitae interdum leo. Donec luctus nulla eget leo fringilla
                        sollicitudin. Phasellus imperdiet nisl ut auctor ultricies. Morbi
                        vehicula, lorem ac consectetur accumsa
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="positions__item">
                                            <div class="positions__contentBox">
                            <div class="postions__left">
                                <h5 class="positions__title">Et tempore voluptat</h5>
                                <div class="positions__type">
                                    Job Type: <span class="type">Full Type</span>
                                    <span class="point"></span> Salary Range:
                                    <span class="range">At soluta rem eligen</span>
                                </div>
                                <div class="positions__responsiblity"><p>asd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sdaasd ada sda</p></div>
                            </div>
                            <div class="positions__right">
                                <button class="zakirSoft__button">
                                    
                                                                            <a href="http://127.0.0.1:8000/job/et-tempore-voluptat">
                                            Deadline Expired
                                            <span><i class="fas fa-arrow-right"></i></span>
                                        </a>
                                                                    </button>
                            </div>
                        </div>
                                    </div>
            </div>
        </div>
    </section>
    <!-- main section end -->

    <!-- footer section start -->
    <footer id="footer_area" class="none">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer_menu">
                        <span>Quick Link</span>
                        <ul class="nav_links">
                            <li class="nav_items"><a href="http://127.0.0.1:8000" class="">Home</a></li>
                            <li class="nav_items"><a href="http://127.0.0.1:8000/about" class="">About</a></li>
                            <li class="nav_items"><a href="http://127.0.0.1:8000/works" class="" >works</a></li>
                            <li class="nav_items"><a href="http://127.0.0.1:8000/career" class=" active ">Career</a></li>
                            <li class="nav_items"><a href="http://127.0.0.1:8000/contact" class="">Contact</a></li>
                        </ul>
                    </div>
                    <div class="connect_info">
                        <h4>Connect With us</h4>
                        <p>
                            
                        </p>
                        <span class="email"></span>
                    </div>
                    <div>
                        <ul class="social_links">
                                                    </ul>
                    </div>
                </div>
                <div class="col-12">
                    <div class="copyright_text">
                        <p>&#169; 2021 - Zakirsoft</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer section end -->

    <!-- all js goes here -->
    <script src="http://127.0.0.1:8000/frontend/assets/js/jquery-1.12.4.min.js"></script>
    <script src="http://127.0.0.1:8000/frontend/assets/js/popper.min.js"></script>
    <script src="http://127.0.0.1:8000/frontend/assets/js/bootstrap.min.js"></script>
    <script src="http://127.0.0.1:8000/frontend/assets/js/slick.min.js"></script>
    <script src="http://127.0.0.1:8000/frontend/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="http://127.0.0.1:8000/frontend/assets/js/app.js"></script>
    <script src="http://127.0.0.1:8000/frontend/assets/js/simple-lightbox.jquery.min.js"></script>
<script>
    $(function(){
        var gallery = $('.gallery__item').simpleLightbox({navText:    ['&lsaquo;','&rsaquo;']});
    });
</script>

    </body>

</html>

```
<div id="execution-results-GETcareer" hidden>
    <blockquote>Received response<span id="execution-response-status-GETcareer"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETcareer"></code></pre>
</div>
<div id="execution-error-GETcareer" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETcareer"></code></pre>
</div>
<form id="form-GETcareer" data-method="GET" data-path="career" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETcareer', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETcareer" onclick="tryItOut('GETcareer');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETcareer" onclick="cancelTryOut('GETcareer');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETcareer" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>career</code></b>
</p>
</form>


## contact




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/contact" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/contact"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title> Contact Us  - Zakir Soft</title>

    <!-- =========== SEO Tags ============ -->
    <meta name="author" content="Zakir Soft">
<meta name="keywords" content="web design, web development, web development agency, agency, web, design, development, pwa, spa, web application development, website, website design, ecommerce website">
<meta name="description" content="We are engertic team of designers and developers. We work with Python, PHP, Laravel, PostgreSQL, MYSQL, React.js, Vue.js, Nuxt.js, Next.js, Cloud Server. We are open to application, join us.">
<meta property="og:title" content="Career - Zakir Soft" />
<meta property="og:type" content="website" />
<meta property="og:image" content="http://127.0.0.1:8000/frontend/assets/images/preview.jpg" />

    <!-- =========== Favicon ============ -->
    <link rel="icon" type="image/png" sizes="16x16" href="http://127.0.0.1:8000/frontend/assets/images/logo/16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="http://127.0.0.1:8000/frontend/assets/images/logo/32x32.png">
    <link rel="icon" type="image/png" sizes="64x64" href="http://127.0.0.1:8000/frontend/assets/images/logo/64x64.png">

    <link rel="stylesheet" href="http://127.0.0.1:8000/frontend/assets/css/all.min.css" />
    <link rel="stylesheet" href="http://127.0.0.1:8000/frontend/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="http://127.0.0.1:8000/frontend/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/frontend/assets/css/slick.css" />
    <link rel="stylesheet" href="http://127.0.0.1:8000/frontend/assets/css/style.css" />
    <style>
    #joinus-contact_area {
        padding-bottom: 0px;
    }

    .contact-right .social_links {
        justify-content: flex-start;
    }
    .social_links li {
        margin: 0;
        border: 1px solid #7a849a;
        width: 40px;
        height: 40px;
        line-height: 40px;
        transition: all 0.3s linear;
        margin-right: 5px !important;
    }
    .social_links li:hover {
        border-color: #007bff;
    }

    .social_links li a i{
        font-size: 16px;
        transition: all 0.6s ease-in-out;
    }
    .social_links li::after {
        content: '';
        position: absolute;
        width: 40px;
        height: 40px;
        z-index: -1;
        border-radius: 50%;
        border-radius: 50%;
        transform: scale(0);
        transition: all 0.3s linear;
    }
</style>

    <style>
        .slick-dots li button,
        #testimonial-area .testimonial_slider .slick-arrow.slick-prev,
        #testimonial-area .testimonial_slider .slick-arrow.slick-next
         {
            display: none !important;
        }

        #toast-container>:hover {
            opacity: 1;
        }

        #toast-container>div {
            position: relative;
            pointer-events: auto;
            overflow: hidden;
            margin: 0 0 6px;
            padding: 15px 15px 15px 50px;
            width: 300px;
            border-radius: 3px;
            background-position: 15px center;
            background-repeat: no-repeat;
            box-shadow: 0 0 12px #999;
            color: #fff;
        }

        #WE_Do .container .box_wrapper .card_box .face.back_part .box_title p {
            line-height: 30px;
            margin-bottom: 0;
        }
    </style>
    </head>

<body>
    <!-- header section start -->
    <header>
        <div class="container">
            <nav class="head_content">
                <a href="http://127.0.0.1:8000" class="logo">
                    <img src="http://127.0.0.1:8000/frontend/assets/images/logo/1.png" alt="Zakir Soft">
                </a>
                <div class="menu">
                    <ul class="m_bar">
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!-- Menus -->
    <div class="fullscreen-menu">
        <div class="menu-body">
            <div class="container">
                <div class="menu-container">
                    <div class="menu-close">
                        <ul class="close-bar">
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="main-menu">
                        <ul>
                            <li> <a href="http://127.0.0.1:8000" class=""> <span>01</span> Home </a>
                            </li>
                            <li> <a href="http://127.0.0.1:8000/about" class=""> <span>02</span> About
                                </a> </li>
                            <li> <a href="http://127.0.0.1:8000/works" class=""> <span>03</span> Works
                                </a>
                            </li>
                            <li> <a href="http://127.0.0.1:8000/career" class=" "> <span>04</span>
                                    Career
                                </a> </li>
                            <li> <a href="http://127.0.0.1:8000/contact" class=" active "> <span>05</span>
                                    Contact </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-footer">
            <div class="container">
                <ul class="footer-social">
                                    </ul>
                <div class="copyright-text">
                    <p> &copy; 2021 - Zakirsoft </h5>
                </div>
            </div>
        </div>
    </div>
    <!-- header section end -->

    <!-- main section start -->
        <!-- joinus section start -->
    <section id="joinus-contact_area" class="none">
        <div class="round_shape_img">
            <img src="http://127.0.0.1:8000/frontend/assets/images/shape/shadow.png" alt="shaddow_ibackground">
        </div>
        <div class="container">
            <div class="row section_title">
                <h2>Contact us</h2>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.2278794778513!2d90.34898411530806!3d23.774898293756173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c1e1938cc90b%3A0xbcfacb6b89117685!2sZakir%20Soft!5e0!3m2!1sen!2sbd!4v1606209157115!5m2!1sen!2sbd"
                        width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
                <div class="col-12 col-md-6">
                    <div class="contact-right">
                        <h3>Our Contact Information</h3>
                        <hr>
                        <div class="content mt-4">
                            <p>
                                <Strong>Phone: </Strong> +88 01625 59 25 66
                            </p>
                            <p>
                                <Strong>Email: </Strong> zakirsoft20@gmail.com
                            </p>
                            <p>
                                <strong>Address: </strong> Home# 1024/N, Road# 17/A, Adabor, Dhaka-1207
                            </p>
                            <ul class="social_links">
                                                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- joinus section end -->
    <!-- main section end -->

    <!-- footer section start -->
    <footer id="footer_area" class="none">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer_menu">
                        <span>Quick Link</span>
                        <ul class="nav_links">
                            <li class="nav_items"><a href="http://127.0.0.1:8000" class="">Home</a></li>
                            <li class="nav_items"><a href="http://127.0.0.1:8000/about" class="">About</a></li>
                            <li class="nav_items"><a href="http://127.0.0.1:8000/works" class="" >works</a></li>
                            <li class="nav_items"><a href="http://127.0.0.1:8000/career" class="">Career</a></li>
                            <li class="nav_items"><a href="http://127.0.0.1:8000/contact" class=" active ">Contact</a></li>
                        </ul>
                    </div>
                    <div class="connect_info">
                        <h4>Connect With us</h4>
                        <p>
                            
                        </p>
                        <span class="email"></span>
                    </div>
                    <div>
                        <ul class="social_links">
                                                    </ul>
                    </div>
                </div>
                <div class="col-12">
                    <div class="copyright_text">
                        <p>&#169; 2021 - Zakirsoft</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer section end -->

    <!-- all js goes here -->
    <script src="http://127.0.0.1:8000/frontend/assets/js/jquery-1.12.4.min.js"></script>
    <script src="http://127.0.0.1:8000/frontend/assets/js/popper.min.js"></script>
    <script src="http://127.0.0.1:8000/frontend/assets/js/bootstrap.min.js"></script>
    <script src="http://127.0.0.1:8000/frontend/assets/js/slick.min.js"></script>
    <script src="http://127.0.0.1:8000/frontend/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="http://127.0.0.1:8000/frontend/assets/js/app.js"></script>
    
    </body>

</html>

```
<div id="execution-results-GETcontact" hidden>
    <blockquote>Received response<span id="execution-response-status-GETcontact"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETcontact"></code></pre>
</div>
<div id="execution-error-GETcontact" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETcontact"></code></pre>
</div>
<form id="form-GETcontact" data-method="GET" data-path="contact" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETcontact', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETcontact" onclick="tryItOut('GETcontact');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETcontact" onclick="cancelTryOut('GETcontact');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETcontact" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>contact</code></b>
</p>
</form>


## news/{slug}




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/news/voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/news/voluptatem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json
{
    "message": "Trying to get property 'id' of non-object",
    "exception": "ErrorException",
    "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/app\/Http\/Controllers\/WebsiteController.php",
    "line": 85,
    "trace": [
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/app\/Http\/Controllers\/WebsiteController.php",
            "line": 85,
            "function": "handleError",
            "class": "Illuminate\\Foundation\\Bootstrap\\HandleExceptions",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php",
            "line": 54,
            "function": "news_details",
            "class": "App\\Http\\Controllers\\WebsiteController",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 255,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 197,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 691,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/SubstituteBindings.php",
            "line": 41,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/VerifyCsrfToken.php",
            "line": 77,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Middleware\/ShareErrorsFromSession.php",
            "line": 49,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\View\\Middleware\\ShareErrorsFromSession",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/Middleware\/StartSession.php",
            "line": 121,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/Middleware\/StartSession.php",
            "line": 63,
            "function": "handleStatefulRequest",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Cookie\/Middleware\/AddQueuedCookiesToResponse.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Cookie\/Middleware\/EncryptCookies.php",
            "line": 67,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\EncryptCookies",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 693,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 668,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 634,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 623,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/PreventRequestsDuringMaintenance.php",
            "line": 87,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/fruitcake\/laravel-cors\/src\/HandleCors.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 596,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 258,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/symfony\/console\/Application.php",
            "line": 920,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/symfony\/console\/Application.php",
            "line": 266,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/symfony\/console\/Application.php",
            "line": 142,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETnews--slug-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETnews--slug-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETnews--slug-"></code></pre>
</div>
<div id="execution-error-GETnews--slug-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETnews--slug-"></code></pre>
</div>
<form id="form-GETnews--slug-" data-method="GET" data-path="news/{slug}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETnews--slug-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETnews--slug-" onclick="tryItOut('GETnews--slug-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETnews--slug-" onclick="cancelTryOut('GETnews--slug-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETnews--slug-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>news/{slug}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>slug</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="slug" data-endpoint="GETnews--slug-" data-component="url" required  hidden>
<br>

</p>
</form>


## job/{slug}




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/job/minus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/job/minus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json
{
    "message": "Trying to get property 'title' of non-object (View: \/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/resources\/views\/frontend\/job_details.blade.php)",
    "exception": "Facade\\Ignition\\Exceptions\\ViewException",
    "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/resources\/views\/frontend\/job_details.blade.php",
    "line": 22,
    "trace": [
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/resources\/views\/frontend\/job_details.blade.php",
            "line": 22,
            "function": "handleError",
            "class": "Illuminate\\Foundation\\Bootstrap\\HandleExceptions",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
            "line": 107,
            "function": "require"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
            "line": 108,
            "function": "Illuminate\\Filesystem\\{closure}",
            "class": "Illuminate\\Filesystem\\Filesystem",
            "type": "::"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php",
            "line": 58,
            "function": "getRequire",
            "class": "Illuminate\\Filesystem\\Filesystem",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php",
            "line": 61,
            "function": "evaluatePath",
            "class": "Illuminate\\View\\Engines\\PhpEngine",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/facade\/ignition\/src\/Views\/Engines\/CompilerEngine.php",
            "line": 37,
            "function": "get",
            "class": "Illuminate\\View\\Engines\\CompilerEngine",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/View\/View.php",
            "line": 139,
            "function": "get",
            "class": "Facade\\Ignition\\Views\\Engines\\CompilerEngine",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/View\/View.php",
            "line": 122,
            "function": "getContents",
            "class": "Illuminate\\View\\View",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/View\/View.php",
            "line": 91,
            "function": "renderContents",
            "class": "Illuminate\\View\\View",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Http\/Response.php",
            "line": 62,
            "function": "render",
            "class": "Illuminate\\View\\View",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Http\/Response.php",
            "line": 34,
            "function": "setContent",
            "class": "Illuminate\\Http\\Response",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 765,
            "function": "__construct",
            "class": "Illuminate\\Http\\Response",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 737,
            "function": "toResponse",
            "class": "Illuminate\\Routing\\Router",
            "type": "::"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 691,
            "function": "prepareResponse",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/SubstituteBindings.php",
            "line": 41,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/VerifyCsrfToken.php",
            "line": 77,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Middleware\/ShareErrorsFromSession.php",
            "line": 49,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\View\\Middleware\\ShareErrorsFromSession",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/Middleware\/StartSession.php",
            "line": 121,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/Middleware\/StartSession.php",
            "line": 63,
            "function": "handleStatefulRequest",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Cookie\/Middleware\/AddQueuedCookiesToResponse.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Cookie\/Middleware\/EncryptCookies.php",
            "line": 67,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\EncryptCookies",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 693,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 668,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 634,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 623,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/PreventRequestsDuringMaintenance.php",
            "line": 87,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/fruitcake\/laravel-cors\/src\/HandleCors.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 596,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 258,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/symfony\/console\/Application.php",
            "line": 920,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/symfony\/console\/Application.php",
            "line": 266,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/symfony\/console\/Application.php",
            "line": 142,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/developer\/Desktop\/Laravel\/zakirsoft-backend\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETjob--slug-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETjob--slug-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETjob--slug-"></code></pre>
</div>
<div id="execution-error-GETjob--slug-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETjob--slug-"></code></pre>
</div>
<form id="form-GETjob--slug-" data-method="GET" data-path="job/{slug}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETjob--slug-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETjob--slug-" onclick="tryItOut('GETjob--slug-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETjob--slug-" onclick="cancelTryOut('GETjob--slug-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETjob--slug-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>job/{slug}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>slug</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="slug" data-endpoint="GETjob--slug-" data-component="url" required  hidden>
<br>

</p>
</form>


## Show the application&#039;s login form.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>    Sign in - ZakirSoft
</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
        content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="colorlib" />

    <link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/admin/css/waves.min.css" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/admin/css/feather.css">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/admin/css/font-awesome-n.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/admin/css/chartist.css" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/admin/css/style.css">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/admin/css/widget.css">
    <link rel=" stylesheet" type="text/css" href="http://127.0.0.1:8000/admin/css/pages.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/admin/css/icofont.css">

</head>

<body>

    <section class="login-block m-t-50">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <form method="POST" action="http://127.0.0.1:8000/login" class="md-float-material form-material">
                    <input type="hidden" name="_token" value="XCKuopuxeIIQ2Dlw6bp5VaWowPJZ3zp1Q4Kfv1GU">                    <div class="text-center">
                        <img height="40px" src="https://zakirsoft.com/frontend/assets/images/logo/1.png" alt="logo.png">
                    </div>
                    <div class="auth-box card">
                        <div class="card-block">
                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h3 class="text-center txt-primary">Sign In</h3>
                                </div>
                            </div>
                            <div class="form-group form-primary">
                                <input id="email" type="email" class="form-control  fill" name="email" value="" required>
                                <span class="form-bar"></span>
                                <label class="float-label">Username</label>
                                                            </div>
                            <div class="form-group form-primary">
                                <input id="password" type="password" class="form-control  fill" name="password" required>
                                <span class="form-bar"></span>
                                <label class="float-label">Password</label>
                                                            </div>
                            <div class="row m-t-25 text-left">
                                <div class="col-12">
                                    <div class="checkbox-fade fade-in-primary">
                                        <label>
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" >
                                            <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                            <span class="text-inverse">Remember me</span>
                                        </label>
                                    </div>
                                    <div class="forgot-phone text-right float-right">
                                        <a href="http://127.0.0.1:8000/password/reset" class="text-right f-w-600"> Forgot Password?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-t-30">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>

    <script src="http://127.0.0.1:8000/admin/js/jquery.min.js"></script>
<script src="http://127.0.0.1:8000/admin/js/jquery-ui.min.js"></script>
<script src="http://127.0.0.1:8000/admin/js/popper.min.js"></script>
<script src="http://127.0.0.1:8000/admin/js/bootstrap.min.js"></script>
<script src="http://127.0.0.1:8000/admin/js/waves.min.js"></script>
<script src="http://127.0.0.1:8000/admin/js/jquery.slimscroll.js"></script>
<script src="http://127.0.0.1:8000/admin/js/jquery.flot.js"></script>
<script src="http://127.0.0.1:8000/admin/js/jquery.flot.categories.js"></script>
<script src="http://127.0.0.1:8000/admin/js/curvedlines.js"></script>
<script src="http://127.0.0.1:8000/admin/js/jquery.flot.tooltip.min.js"></script>
<script src="http://127.0.0.1:8000/admin/js/amcharts.js"></script>
<script src="http://127.0.0.1:8000/admin/js/serial.js"></script>
<script src="http://127.0.0.1:8000/admin/js/light.js"></script>
<script src="http://127.0.0.1:8000/admin/js/markerclusterer.js"></script>
<script src="https://maps.google.com/maps/api/js?sensor=true"></script>
<script src="http://127.0.0.1:8000/admin/js/gmaps.js"></script>
<script src="http://127.0.0.1:8000/admin/js/pcoded.min.js"></script>
<script src="http://127.0.0.1:8000/admin/js/vertical-layout.min.js"></script>
<script src="http://127.0.0.1:8000/admin/js/crm-dashboard.min.js"></script>
<script src="http://127.0.0.1:8000/admin/js/script.min.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>

<script>


    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-23581568-13');

</script>
<script src="http://127.0.0.1:8000/admin/js/rocket-loader.min.js" data-cf-settings="2d8d78e876b340f9029c575b-|49" defer="">
</script>
</body>
</html>

```
<div id="execution-results-GETlogin" hidden>
    <blockquote>Received response<span id="execution-response-status-GETlogin"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETlogin"></code></pre>
</div>
<div id="execution-error-GETlogin" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETlogin"></code></pre>
</div>
<form id="form-GETlogin" data-method="GET" data-path="login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETlogin', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETlogin" onclick="tryItOut('GETlogin');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETlogin" onclick="cancelTryOut('GETlogin');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETlogin" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>login</code></b>
</p>
</form>


## Handle a login request to the application.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTlogin" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTlogin"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTlogin"></code></pre>
</div>
<div id="execution-error-POSTlogin" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTlogin"></code></pre>
</div>
<form id="form-POSTlogin" data-method="POST" data-path="login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTlogin', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTlogin" onclick="tryItOut('POSTlogin');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTlogin" onclick="cancelTryOut('POSTlogin');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTlogin" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>login</code></b>
</p>
</form>


## Log the user out of the application.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTlogout" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTlogout"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTlogout"></code></pre>
</div>
<div id="execution-error-POSTlogout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTlogout"></code></pre>
</div>
<form id="form-POSTlogout" data-method="POST" data-path="logout" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTlogout', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTlogout" onclick="tryItOut('POSTlogout');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTlogout" onclick="cancelTryOut('POSTlogout');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTlogout" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>logout</code></b>
</p>
</form>


## Show the application registration form.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>    Registration - ZakirSoft
</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
        content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="colorlib" />

    <link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/admin/css/waves.min.css" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/admin/css/feather.css">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/admin/css/font-awesome-n.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/admin/css/chartist.css" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/admin/css/style.css">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/admin/css/widget.css">
    <link rel=" stylesheet" type="text/css" href="http://127.0.0.1:8000/admin/css/pages.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/admin/css/icofont.css">

</head>

<body>

    <section class="login-block">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">

                <form method="POST" action="http://127.0.0.1:8000/register" class="md-float-material form-material">
                    <input type="hidden" name="_token" value="XCKuopuxeIIQ2Dlw6bp5VaWowPJZ3zp1Q4Kfv1GU">                    <div class="text-center">
                        
                    </div>
                    <div class="auth-box card">
                        <div class="card-block">
                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h3 class="text-center txt-primary">Registration</h3>
                                </div>
                            </div>
                            
                            <div class="form-group form-primary">
                                <input id="name" type="text" class="form-control " name="name" value="" autocomplete="name">
                                <span class="form-bar"></span>
                                <label class="float-label">Name</label>

                                                            </div>
                            <div class="form-group form-primary">
                                <input id="email" type="email" class="form-control " name="email" value="" autocomplete="email">
                                <span class="form-bar"></span>
                                <label class="float-label">E Mail Address</label>

                                                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group form-primary">
                                        <input id="password" type="password" class="form-control " name="password" autocomplete="new-password">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Password</label>

                                                                            </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-primary">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Confirm Password</label>

                                                                            </div>
                                </div>
                            </div>
                            <div class="row m-t-25 text-left">
                                <div class="col-12">
                                    <div class="checkbox-fade fade-in-primary">
                                        <label>
                                            <input type="checkbox" value="" name="accept_terms" class="form-check-input" id="exampleCheck1">
                                            <span class="cr"><i
                                                    class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                            <span class="text-inverse">I read and accept Terms & Conditions.</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="checkbox-fade fade-in-primary">
                                        <label>
                                            <input type="checkbox" value="" name="weekly_newsletter" class="form-check-input" id="exampleCheck1">
                                            <span class="cr"><i
                                                    class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                            <span class="text-inverse">Send me the Newsletter weekly.</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-t-30">
                                <div class="col-md-12">
                                    <button type="submit"
                                        class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">REGISTER</button>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-10">
                                    <p class="text-inverse text-left m-b-0">Thank you.</p>
                                    <p class="text-inverse text-left"><a href="http://127.0.0.1:8000/login"><b>Back to Login</b></a>
                                    </p>
                                </div>
                                <div class="col-md-2">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>

        </div>

    </div>

    </div>

</section>

    <script src="http://127.0.0.1:8000/admin/js/jquery.min.js"></script>
<script src="http://127.0.0.1:8000/admin/js/jquery-ui.min.js"></script>
<script src="http://127.0.0.1:8000/admin/js/popper.min.js"></script>
<script src="http://127.0.0.1:8000/admin/js/bootstrap.min.js"></script>
<script src="http://127.0.0.1:8000/admin/js/waves.min.js"></script>
<script src="http://127.0.0.1:8000/admin/js/jquery.slimscroll.js"></script>
<script src="http://127.0.0.1:8000/admin/js/jquery.flot.js"></script>
<script src="http://127.0.0.1:8000/admin/js/jquery.flot.categories.js"></script>
<script src="http://127.0.0.1:8000/admin/js/curvedlines.js"></script>
<script src="http://127.0.0.1:8000/admin/js/jquery.flot.tooltip.min.js"></script>
<script src="http://127.0.0.1:8000/admin/js/amcharts.js"></script>
<script src="http://127.0.0.1:8000/admin/js/serial.js"></script>
<script src="http://127.0.0.1:8000/admin/js/light.js"></script>
<script src="http://127.0.0.1:8000/admin/js/markerclusterer.js"></script>
<script src="https://maps.google.com/maps/api/js?sensor=true"></script>
<script src="http://127.0.0.1:8000/admin/js/gmaps.js"></script>
<script src="http://127.0.0.1:8000/admin/js/pcoded.min.js"></script>
<script src="http://127.0.0.1:8000/admin/js/vertical-layout.min.js"></script>
<script src="http://127.0.0.1:8000/admin/js/crm-dashboard.min.js"></script>
<script src="http://127.0.0.1:8000/admin/js/script.min.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>

<script>


    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-23581568-13');

</script>
<script src="http://127.0.0.1:8000/admin/js/rocket-loader.min.js" data-cf-settings="2d8d78e876b340f9029c575b-|49" defer="">
</script>
</body>
</html>

```
<div id="execution-results-GETregister" hidden>
    <blockquote>Received response<span id="execution-response-status-GETregister"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETregister"></code></pre>
</div>
<div id="execution-error-GETregister" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETregister"></code></pre>
</div>
<form id="form-GETregister" data-method="GET" data-path="register" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETregister', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETregister" onclick="tryItOut('GETregister');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETregister" onclick="cancelTryOut('GETregister');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETregister" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>register</code></b>
</p>
</form>


## Handle a registration request for the application.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTregister" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTregister"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTregister"></code></pre>
</div>
<div id="execution-error-POSTregister" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTregister"></code></pre>
</div>
<form id="form-POSTregister" data-method="POST" data-path="register" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTregister', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTregister" onclick="tryItOut('POSTregister');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTregister" onclick="cancelTryOut('POSTregister');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTregister" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>register</code></b>
</p>
</form>


## Display the form to request a password reset link.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>    Recover Password - ZakirSoft
</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
        content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="colorlib" />

    <link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/admin/css/waves.min.css" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/admin/css/feather.css">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/admin/css/font-awesome-n.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/admin/css/chartist.css" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/admin/css/style.css">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/admin/css/widget.css">
    <link rel=" stylesheet" type="text/css" href="http://127.0.0.1:8000/admin/css/pages.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/admin/css/icofont.css">

</head>

<body>

    <section class="login-block">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">

                <form method="POST" action="http://127.0.0.1:8000/password/email" class="md-float-material form-material">
                    <input type="hidden" name="_token" value="XCKuopuxeIIQ2Dlw6bp5VaWowPJZ3zp1Q4Kfv1GU">                    <div class="text-center">
                        <img height="40px" src="https://zakirsoft.com/frontend/assets/images/logo/1.png" alt="logo.png">
                    </div>
                    <div class="auth-box card">
                        <div class="card-block">
                            <div class="row m-b-20">
                                <div class="col-md-12 text-center">
                                    <h3 class="txt-primary pb-4">Recover your password</h3>
                                                                    </div>
                            </div>
                            <div class="form-group form-primary">
                                <input id="email" type="email" class="form-control  " name="email" value="" required autocomplete="email">
                                <span class="form-bar"></span>
                                <label class="float-label">Your E-Mail Address</label>

                                                            </div>
                            <div class="row m-t-30">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Reset Password</button>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-10">
                                    <p class="text-inverse text-left m-b-0">Thank you.</p>
                                    <p class="text-inverse text-left"><a href="https://zakirsoft.com/"><b>Back to
                                                Website</b></a>
                                    </p>
                                </div>
                                <div class="col-md-2">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>

    <script src="http://127.0.0.1:8000/admin/js/jquery.min.js"></script>
<script src="http://127.0.0.1:8000/admin/js/jquery-ui.min.js"></script>
<script src="http://127.0.0.1:8000/admin/js/popper.min.js"></script>
<script src="http://127.0.0.1:8000/admin/js/bootstrap.min.js"></script>
<script src="http://127.0.0.1:8000/admin/js/waves.min.js"></script>
<script src="http://127.0.0.1:8000/admin/js/jquery.slimscroll.js"></script>
<script src="http://127.0.0.1:8000/admin/js/jquery.flot.js"></script>
<script src="http://127.0.0.1:8000/admin/js/jquery.flot.categories.js"></script>
<script src="http://127.0.0.1:8000/admin/js/curvedlines.js"></script>
<script src="http://127.0.0.1:8000/admin/js/jquery.flot.tooltip.min.js"></script>
<script src="http://127.0.0.1:8000/admin/js/amcharts.js"></script>
<script src="http://127.0.0.1:8000/admin/js/serial.js"></script>
<script src="http://127.0.0.1:8000/admin/js/light.js"></script>
<script src="http://127.0.0.1:8000/admin/js/markerclusterer.js"></script>
<script src="https://maps.google.com/maps/api/js?sensor=true"></script>
<script src="http://127.0.0.1:8000/admin/js/gmaps.js"></script>
<script src="http://127.0.0.1:8000/admin/js/pcoded.min.js"></script>
<script src="http://127.0.0.1:8000/admin/js/vertical-layout.min.js"></script>
<script src="http://127.0.0.1:8000/admin/js/crm-dashboard.min.js"></script>
<script src="http://127.0.0.1:8000/admin/js/script.min.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>

<script>


    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-23581568-13');

</script>
<script src="http://127.0.0.1:8000/admin/js/rocket-loader.min.js" data-cf-settings="2d8d78e876b340f9029c575b-|49" defer="">
</script>
</body>
</html>

```
<div id="execution-results-GETpassword-reset" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpassword-reset"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpassword-reset"></code></pre>
</div>
<div id="execution-error-GETpassword-reset" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpassword-reset"></code></pre>
</div>
<form id="form-GETpassword-reset" data-method="GET" data-path="password/reset" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpassword-reset', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpassword-reset" onclick="tryItOut('GETpassword-reset');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpassword-reset" onclick="cancelTryOut('GETpassword-reset');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpassword-reset" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>password/reset</code></b>
</p>
</form>


## Send a reset link to the given user.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/password/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTpassword-email" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTpassword-email"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTpassword-email"></code></pre>
</div>
<div id="execution-error-POSTpassword-email" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpassword-email"></code></pre>
</div>
<form id="form-POSTpassword-email" data-method="POST" data-path="password/email" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTpassword-email', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTpassword-email" onclick="tryItOut('POSTpassword-email');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTpassword-email" onclick="cancelTryOut('POSTpassword-email');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTpassword-email" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>password/email</code></b>
</p>
</form>


## Display the password reset view for the given token.


If no token is present, display the link request form.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/password/reset/dolorem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/password/reset/dolorem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>    Reset Password - ZakirSoft
</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
        content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="colorlib" />

    <link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/admin/css/waves.min.css" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/admin/css/feather.css">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/admin/css/font-awesome-n.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/admin/css/chartist.css" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/admin/css/style.css">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/admin/css/widget.css">
    <link rel=" stylesheet" type="text/css" href="http://127.0.0.1:8000/admin/css/pages.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/admin/css/icofont.css">

</head>

<body>

    <section class="login-block">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">

                <form form method="POST" action="http://127.0.0.1:8000/password/reset" class="md-float-material form-material">
                    <input type="hidden" name="_token" value="XCKuopuxeIIQ2Dlw6bp5VaWowPJZ3zp1Q4Kfv1GU">
                    <input type="hidden" name="token" value="dolorem">

                    <div class="text-center">
                        
                    </div>
                    <div class="auth-box card">
                        <div class="card-block">
                            <div class="row m-b-20">
                                <div class="col-md-12 text-center">
                                    <h3 class="txt-primary pb-4">Reset Password</h3>

                                                                    </div>
                            </div>
                            
                            <div class="form-group form-primary">
                                <input id="email" type="email" class="form-control " name="email" value="" required autocomplete="email" placeholder="Your E-Mail Address">
                                <span class="form-bar"></span>

                                                            </div>
                            <div class="form-group form-primary">
                                <input id="password" type="password" class="form-control " name="password" value="" required autocomplete="password">
                                <span class="form-bar"></span>
                                <label class="float-label">Password</label>

                                                            </div>
                            <div class="form-group form-primary">
                                <input id="password_confirmation" type="password_confirmation" class="form-control " name="password_confirmation" value="" required autocomplete="password_confirmation">
                                <span class="form-bar"></span>
                                <label class="float-label">Confirm Password</label>

                                                            </div>
                            <div class="row m-t-30">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Change Password</button>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-10">
                                    <p class="text-inverse text-left m-b-0">Thank you.</p>
                                    <p class="text-inverse text-left"><a href="http://127.0.0.1:8000/login"><b>Back to
                                                Website</b></a>
                                    </p>
                                </div>
                                <div class="col-md-2">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>

        </div>

    </div>

    </div>

</section>

    <script src="http://127.0.0.1:8000/admin/js/jquery.min.js"></script>
<script src="http://127.0.0.1:8000/admin/js/jquery-ui.min.js"></script>
<script src="http://127.0.0.1:8000/admin/js/popper.min.js"></script>
<script src="http://127.0.0.1:8000/admin/js/bootstrap.min.js"></script>
<script src="http://127.0.0.1:8000/admin/js/waves.min.js"></script>
<script src="http://127.0.0.1:8000/admin/js/jquery.slimscroll.js"></script>
<script src="http://127.0.0.1:8000/admin/js/jquery.flot.js"></script>
<script src="http://127.0.0.1:8000/admin/js/jquery.flot.categories.js"></script>
<script src="http://127.0.0.1:8000/admin/js/curvedlines.js"></script>
<script src="http://127.0.0.1:8000/admin/js/jquery.flot.tooltip.min.js"></script>
<script src="http://127.0.0.1:8000/admin/js/amcharts.js"></script>
<script src="http://127.0.0.1:8000/admin/js/serial.js"></script>
<script src="http://127.0.0.1:8000/admin/js/light.js"></script>
<script src="http://127.0.0.1:8000/admin/js/markerclusterer.js"></script>
<script src="https://maps.google.com/maps/api/js?sensor=true"></script>
<script src="http://127.0.0.1:8000/admin/js/gmaps.js"></script>
<script src="http://127.0.0.1:8000/admin/js/pcoded.min.js"></script>
<script src="http://127.0.0.1:8000/admin/js/vertical-layout.min.js"></script>
<script src="http://127.0.0.1:8000/admin/js/crm-dashboard.min.js"></script>
<script src="http://127.0.0.1:8000/admin/js/script.min.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>

<script>


    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-23581568-13');

</script>
<script src="http://127.0.0.1:8000/admin/js/rocket-loader.min.js" data-cf-settings="2d8d78e876b340f9029c575b-|49" defer="">
</script>
</body>
</html>

```
<div id="execution-results-GETpassword-reset--token-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpassword-reset--token-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpassword-reset--token-"></code></pre>
</div>
<div id="execution-error-GETpassword-reset--token-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpassword-reset--token-"></code></pre>
</div>
<form id="form-GETpassword-reset--token-" data-method="GET" data-path="password/reset/{token}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpassword-reset--token-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpassword-reset--token-" onclick="tryItOut('GETpassword-reset--token-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpassword-reset--token-" onclick="cancelTryOut('GETpassword-reset--token-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpassword-reset--token-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>password/reset/{token}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="token" data-endpoint="GETpassword-reset--token-" data-component="url" required  hidden>
<br>

</p>
</form>


## Reset the given user&#039;s password.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTpassword-reset" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTpassword-reset"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTpassword-reset"></code></pre>
</div>
<div id="execution-error-POSTpassword-reset" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpassword-reset"></code></pre>
</div>
<form id="form-POSTpassword-reset" data-method="POST" data-path="password/reset" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTpassword-reset', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTpassword-reset" onclick="tryItOut('POSTpassword-reset');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTpassword-reset" onclick="cancelTryOut('POSTpassword-reset');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTpassword-reset" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>password/reset</code></b>
</p>
</form>


## Display the password confirmation view.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpassword-confirm" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpassword-confirm"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpassword-confirm"></code></pre>
</div>
<div id="execution-error-GETpassword-confirm" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpassword-confirm"></code></pre>
</div>
<form id="form-GETpassword-confirm" data-method="GET" data-path="password/confirm" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpassword-confirm', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpassword-confirm" onclick="tryItOut('GETpassword-confirm');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpassword-confirm" onclick="cancelTryOut('GETpassword-confirm');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpassword-confirm" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>password/confirm</code></b>
</p>
</form>


## Confirm the given user&#039;s password.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTpassword-confirm" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTpassword-confirm"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTpassword-confirm"></code></pre>
</div>
<div id="execution-error-POSTpassword-confirm" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpassword-confirm"></code></pre>
</div>
<form id="form-POSTpassword-confirm" data-method="POST" data-path="password/confirm" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTpassword-confirm', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTpassword-confirm" onclick="tryItOut('POSTpassword-confirm');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTpassword-confirm" onclick="cancelTryOut('POSTpassword-confirm');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTpassword-confirm" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>password/confirm</code></b>
</p>
</form>


## Show the email verification notice.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/email/verify" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/email/verify"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETemail-verify" hidden>
    <blockquote>Received response<span id="execution-response-status-GETemail-verify"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETemail-verify"></code></pre>
</div>
<div id="execution-error-GETemail-verify" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETemail-verify"></code></pre>
</div>
<form id="form-GETemail-verify" data-method="GET" data-path="email/verify" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETemail-verify', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETemail-verify" onclick="tryItOut('GETemail-verify');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETemail-verify" onclick="cancelTryOut('GETemail-verify');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETemail-verify" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>email/verify</code></b>
</p>
</form>


## Mark the authenticated user&#039;s email address as verified.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/email/verify/fugit/eaque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/email/verify/fugit/eaque"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETemail-verify--id---hash-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETemail-verify--id---hash-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETemail-verify--id---hash-"></code></pre>
</div>
<div id="execution-error-GETemail-verify--id---hash-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETemail-verify--id---hash-"></code></pre>
</div>
<form id="form-GETemail-verify--id---hash-" data-method="GET" data-path="email/verify/{id}/{hash}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETemail-verify--id---hash-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETemail-verify--id---hash-" onclick="tryItOut('GETemail-verify--id---hash-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETemail-verify--id---hash-" onclick="cancelTryOut('GETemail-verify--id---hash-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETemail-verify--id---hash-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>email/verify/{id}/{hash}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETemail-verify--id---hash-" data-component="url" required  hidden>
<br>

</p>
<p>
<b><code>hash</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="hash" data-endpoint="GETemail-verify--id---hash-" data-component="url" required  hidden>
<br>

</p>
</form>


## Resend the email verification notification.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/email/resend" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/email/resend"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTemail-resend" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTemail-resend"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTemail-resend"></code></pre>
</div>
<div id="execution-error-POSTemail-resend" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTemail-resend"></code></pre>
</div>
<form id="form-POSTemail-resend" data-method="POST" data-path="email/resend" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTemail-resend', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTemail-resend" onclick="tryItOut('POSTemail-resend');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTemail-resend" onclick="cancelTryOut('POSTemail-resend');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTemail-resend" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>email/resend</code></b>
</p>
</form>


## panel/dashboard




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/dashboard" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/dashboard"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-dashboard" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-dashboard"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-dashboard"></code></pre>
</div>
<div id="execution-error-GETpanel-dashboard" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-dashboard"></code></pre>
</div>
<form id="form-GETpanel-dashboard" data-method="GET" data-path="panel/dashboard" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-dashboard', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-dashboard" onclick="tryItOut('GETpanel-dashboard');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-dashboard" onclick="cancelTryOut('GETpanel-dashboard');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-dashboard" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/dashboard</code></b>
</p>
</form>


## panel/about




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/about" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/about"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-about" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-about"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-about"></code></pre>
</div>
<div id="execution-error-GETpanel-about" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-about"></code></pre>
</div>
<form id="form-GETpanel-about" data-method="GET" data-path="panel/about" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-about', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-about" onclick="tryItOut('GETpanel-about');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-about" onclick="cancelTryOut('GETpanel-about');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-about" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/about</code></b>
</p>
</form>


## panel/about/update/{about}




> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/panel/about/update/rerum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/about/update/rerum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTpanel-about-update--about-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTpanel-about-update--about-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTpanel-about-update--about-"></code></pre>
</div>
<div id="execution-error-PUTpanel-about-update--about-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTpanel-about-update--about-"></code></pre>
</div>
<form id="form-PUTpanel-about-update--about-" data-method="PUT" data-path="panel/about/update/{about}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTpanel-about-update--about-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTpanel-about-update--about-" onclick="tryItOut('PUTpanel-about-update--about-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTpanel-about-update--about-" onclick="cancelTryOut('PUTpanel-about-update--about-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTpanel-about-update--about-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>panel/about/update/{about}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>about</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="about" data-endpoint="PUTpanel-about-update--about-" data-component="url" required  hidden>
<br>

</p>
</form>


## panel/portfolio




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/portfolio" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/portfolio"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-portfolio" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-portfolio"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-portfolio"></code></pre>
</div>
<div id="execution-error-GETpanel-portfolio" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-portfolio"></code></pre>
</div>
<form id="form-GETpanel-portfolio" data-method="GET" data-path="panel/portfolio" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-portfolio', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-portfolio" onclick="tryItOut('GETpanel-portfolio');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-portfolio" onclick="cancelTryOut('GETpanel-portfolio');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-portfolio" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/portfolio</code></b>
</p>
</form>


## panel/portfolio/create




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/portfolio/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/portfolio/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-portfolio-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-portfolio-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-portfolio-create"></code></pre>
</div>
<div id="execution-error-GETpanel-portfolio-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-portfolio-create"></code></pre>
</div>
<form id="form-GETpanel-portfolio-create" data-method="GET" data-path="panel/portfolio/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-portfolio-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-portfolio-create" onclick="tryItOut('GETpanel-portfolio-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-portfolio-create" onclick="cancelTryOut('GETpanel-portfolio-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-portfolio-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/portfolio/create</code></b>
</p>
</form>


## panel/portfolio




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/panel/portfolio" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/portfolio"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTpanel-portfolio" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTpanel-portfolio"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTpanel-portfolio"></code></pre>
</div>
<div id="execution-error-POSTpanel-portfolio" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpanel-portfolio"></code></pre>
</div>
<form id="form-POSTpanel-portfolio" data-method="POST" data-path="panel/portfolio" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTpanel-portfolio', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTpanel-portfolio" onclick="tryItOut('POSTpanel-portfolio');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTpanel-portfolio" onclick="cancelTryOut('POSTpanel-portfolio');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTpanel-portfolio" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>panel/portfolio</code></b>
</p>
</form>


## panel/portfolio/{portfolio}




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/portfolio/unde" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/portfolio/unde"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-portfolio--portfolio-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-portfolio--portfolio-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-portfolio--portfolio-"></code></pre>
</div>
<div id="execution-error-GETpanel-portfolio--portfolio-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-portfolio--portfolio-"></code></pre>
</div>
<form id="form-GETpanel-portfolio--portfolio-" data-method="GET" data-path="panel/portfolio/{portfolio}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-portfolio--portfolio-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-portfolio--portfolio-" onclick="tryItOut('GETpanel-portfolio--portfolio-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-portfolio--portfolio-" onclick="cancelTryOut('GETpanel-portfolio--portfolio-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-portfolio--portfolio-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/portfolio/{portfolio}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>portfolio</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="portfolio" data-endpoint="GETpanel-portfolio--portfolio-" data-component="url" required  hidden>
<br>

</p>
</form>


## panel/portfolio/{portfolio}/edit




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/portfolio/quisquam/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/portfolio/quisquam/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-portfolio--portfolio--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-portfolio--portfolio--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-portfolio--portfolio--edit"></code></pre>
</div>
<div id="execution-error-GETpanel-portfolio--portfolio--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-portfolio--portfolio--edit"></code></pre>
</div>
<form id="form-GETpanel-portfolio--portfolio--edit" data-method="GET" data-path="panel/portfolio/{portfolio}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-portfolio--portfolio--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-portfolio--portfolio--edit" onclick="tryItOut('GETpanel-portfolio--portfolio--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-portfolio--portfolio--edit" onclick="cancelTryOut('GETpanel-portfolio--portfolio--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-portfolio--portfolio--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/portfolio/{portfolio}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>portfolio</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="portfolio" data-endpoint="GETpanel-portfolio--portfolio--edit" data-component="url" required  hidden>
<br>

</p>
</form>


## panel/portfolio/{portfolio}




> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/panel/portfolio/ea" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/portfolio/ea"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTpanel-portfolio--portfolio-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTpanel-portfolio--portfolio-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTpanel-portfolio--portfolio-"></code></pre>
</div>
<div id="execution-error-PUTpanel-portfolio--portfolio-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTpanel-portfolio--portfolio-"></code></pre>
</div>
<form id="form-PUTpanel-portfolio--portfolio-" data-method="PUT" data-path="panel/portfolio/{portfolio}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTpanel-portfolio--portfolio-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTpanel-portfolio--portfolio-" onclick="tryItOut('PUTpanel-portfolio--portfolio-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTpanel-portfolio--portfolio-" onclick="cancelTryOut('PUTpanel-portfolio--portfolio-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTpanel-portfolio--portfolio-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>panel/portfolio/{portfolio}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>panel/portfolio/{portfolio}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>portfolio</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="portfolio" data-endpoint="PUTpanel-portfolio--portfolio-" data-component="url" required  hidden>
<br>

</p>
</form>


## panel/portfolio/{portfolio}




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/panel/portfolio/maiores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/portfolio/maiores"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEpanel-portfolio--portfolio-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEpanel-portfolio--portfolio-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEpanel-portfolio--portfolio-"></code></pre>
</div>
<div id="execution-error-DELETEpanel-portfolio--portfolio-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEpanel-portfolio--portfolio-"></code></pre>
</div>
<form id="form-DELETEpanel-portfolio--portfolio-" data-method="DELETE" data-path="panel/portfolio/{portfolio}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEpanel-portfolio--portfolio-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEpanel-portfolio--portfolio-" onclick="tryItOut('DELETEpanel-portfolio--portfolio-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEpanel-portfolio--portfolio-" onclick="cancelTryOut('DELETEpanel-portfolio--portfolio-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEpanel-portfolio--portfolio-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>panel/portfolio/{portfolio}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>portfolio</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="portfolio" data-endpoint="DELETEpanel-portfolio--portfolio-" data-component="url" required  hidden>
<br>

</p>
</form>


## panel/portfolio/category/index




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/portfolio/category/index" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/portfolio/category/index"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-portfolio-category-index" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-portfolio-category-index"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-portfolio-category-index"></code></pre>
</div>
<div id="execution-error-GETpanel-portfolio-category-index" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-portfolio-category-index"></code></pre>
</div>
<form id="form-GETpanel-portfolio-category-index" data-method="GET" data-path="panel/portfolio/category/index" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-portfolio-category-index', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-portfolio-category-index" onclick="tryItOut('GETpanel-portfolio-category-index');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-portfolio-category-index" onclick="cancelTryOut('GETpanel-portfolio-category-index');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-portfolio-category-index" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/portfolio/category/index</code></b>
</p>
</form>


## panel/portfolio/category/create




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/panel/portfolio/category/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/portfolio/category/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTpanel-portfolio-category-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTpanel-portfolio-category-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTpanel-portfolio-category-create"></code></pre>
</div>
<div id="execution-error-POSTpanel-portfolio-category-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpanel-portfolio-category-create"></code></pre>
</div>
<form id="form-POSTpanel-portfolio-category-create" data-method="POST" data-path="panel/portfolio/category/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTpanel-portfolio-category-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTpanel-portfolio-category-create" onclick="tryItOut('POSTpanel-portfolio-category-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTpanel-portfolio-category-create" onclick="cancelTryOut('POSTpanel-portfolio-category-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTpanel-portfolio-category-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>panel/portfolio/category/create</code></b>
</p>
</form>


## panel/portfolio/category/inactive/{id}




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/portfolio/category/inactive/vero" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/portfolio/category/inactive/vero"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-portfolio-category-inactive--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-portfolio-category-inactive--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-portfolio-category-inactive--id-"></code></pre>
</div>
<div id="execution-error-GETpanel-portfolio-category-inactive--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-portfolio-category-inactive--id-"></code></pre>
</div>
<form id="form-GETpanel-portfolio-category-inactive--id-" data-method="GET" data-path="panel/portfolio/category/inactive/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-portfolio-category-inactive--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-portfolio-category-inactive--id-" onclick="tryItOut('GETpanel-portfolio-category-inactive--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-portfolio-category-inactive--id-" onclick="cancelTryOut('GETpanel-portfolio-category-inactive--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-portfolio-category-inactive--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/portfolio/category/inactive/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETpanel-portfolio-category-inactive--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## panel/portfolio/category/active/{id}




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/portfolio/category/active/incidunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/portfolio/category/active/incidunt"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-portfolio-category-active--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-portfolio-category-active--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-portfolio-category-active--id-"></code></pre>
</div>
<div id="execution-error-GETpanel-portfolio-category-active--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-portfolio-category-active--id-"></code></pre>
</div>
<form id="form-GETpanel-portfolio-category-active--id-" data-method="GET" data-path="panel/portfolio/category/active/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-portfolio-category-active--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-portfolio-category-active--id-" onclick="tryItOut('GETpanel-portfolio-category-active--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-portfolio-category-active--id-" onclick="cancelTryOut('GETpanel-portfolio-category-active--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-portfolio-category-active--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/portfolio/category/active/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETpanel-portfolio-category-active--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## panel/portfolio/category/destroy/{id}




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/panel/portfolio/category/destroy/aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/portfolio/category/destroy/aut"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEpanel-portfolio-category-destroy--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEpanel-portfolio-category-destroy--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEpanel-portfolio-category-destroy--id-"></code></pre>
</div>
<div id="execution-error-DELETEpanel-portfolio-category-destroy--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEpanel-portfolio-category-destroy--id-"></code></pre>
</div>
<form id="form-DELETEpanel-portfolio-category-destroy--id-" data-method="DELETE" data-path="panel/portfolio/category/destroy/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEpanel-portfolio-category-destroy--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEpanel-portfolio-category-destroy--id-" onclick="tryItOut('DELETEpanel-portfolio-category-destroy--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEpanel-portfolio-category-destroy--id-" onclick="cancelTryOut('DELETEpanel-portfolio-category-destroy--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEpanel-portfolio-category-destroy--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>panel/portfolio/category/destroy/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEpanel-portfolio-category-destroy--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## panel/portfolio/category/edit/{id}




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/portfolio/category/edit/eligendi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/portfolio/category/edit/eligendi"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-portfolio-category-edit--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-portfolio-category-edit--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-portfolio-category-edit--id-"></code></pre>
</div>
<div id="execution-error-GETpanel-portfolio-category-edit--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-portfolio-category-edit--id-"></code></pre>
</div>
<form id="form-GETpanel-portfolio-category-edit--id-" data-method="GET" data-path="panel/portfolio/category/edit/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-portfolio-category-edit--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-portfolio-category-edit--id-" onclick="tryItOut('GETpanel-portfolio-category-edit--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-portfolio-category-edit--id-" onclick="cancelTryOut('GETpanel-portfolio-category-edit--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-portfolio-category-edit--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/portfolio/category/edit/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETpanel-portfolio-category-edit--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## panel/portfolio/category/update/{id}




> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/panel/portfolio/category/update/deleniti" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/portfolio/category/update/deleniti"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTpanel-portfolio-category-update--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTpanel-portfolio-category-update--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTpanel-portfolio-category-update--id-"></code></pre>
</div>
<div id="execution-error-PUTpanel-portfolio-category-update--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTpanel-portfolio-category-update--id-"></code></pre>
</div>
<form id="form-PUTpanel-portfolio-category-update--id-" data-method="PUT" data-path="panel/portfolio/category/update/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTpanel-portfolio-category-update--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTpanel-portfolio-category-update--id-" onclick="tryItOut('PUTpanel-portfolio-category-update--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTpanel-portfolio-category-update--id-" onclick="cancelTryOut('PUTpanel-portfolio-category-update--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTpanel-portfolio-category-update--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>panel/portfolio/category/update/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTpanel-portfolio-category-update--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/technology/category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/technology/category"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-technology-category" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-technology-category"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-technology-category"></code></pre>
</div>
<div id="execution-error-GETpanel-technology-category" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-technology-category"></code></pre>
</div>
<form id="form-GETpanel-technology-category" data-method="GET" data-path="panel/technology/category" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-technology-category', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-technology-category" onclick="tryItOut('GETpanel-technology-category');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-technology-category" onclick="cancelTryOut('GETpanel-technology-category');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-technology-category" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/technology/category</code></b>
</p>
</form>


## Show the form for creating a new resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/technology/category/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/technology/category/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-technology-category-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-technology-category-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-technology-category-create"></code></pre>
</div>
<div id="execution-error-GETpanel-technology-category-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-technology-category-create"></code></pre>
</div>
<form id="form-GETpanel-technology-category-create" data-method="GET" data-path="panel/technology/category/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-technology-category-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-technology-category-create" onclick="tryItOut('GETpanel-technology-category-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-technology-category-create" onclick="cancelTryOut('GETpanel-technology-category-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-technology-category-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/technology/category/create</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/panel/technology/category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/technology/category"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTpanel-technology-category" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTpanel-technology-category"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTpanel-technology-category"></code></pre>
</div>
<div id="execution-error-POSTpanel-technology-category" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpanel-technology-category"></code></pre>
</div>
<form id="form-POSTpanel-technology-category" data-method="POST" data-path="panel/technology/category" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTpanel-technology-category', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTpanel-technology-category" onclick="tryItOut('POSTpanel-technology-category');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTpanel-technology-category" onclick="cancelTryOut('POSTpanel-technology-category');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTpanel-technology-category" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>panel/technology/category</code></b>
</p>
</form>


## Show the form for editing the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/technology/category/edit/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/technology/category/edit/et"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-technology-category-edit--category-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-technology-category-edit--category-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-technology-category-edit--category-"></code></pre>
</div>
<div id="execution-error-GETpanel-technology-category-edit--category-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-technology-category-edit--category-"></code></pre>
</div>
<form id="form-GETpanel-technology-category-edit--category-" data-method="GET" data-path="panel/technology/category/edit/{category}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-technology-category-edit--category-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-technology-category-edit--category-" onclick="tryItOut('GETpanel-technology-category-edit--category-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-technology-category-edit--category-" onclick="cancelTryOut('GETpanel-technology-category-edit--category-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-technology-category-edit--category-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/technology/category/edit/{category}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="category" data-endpoint="GETpanel-technology-category-edit--category-" data-component="url" required  hidden>
<br>

</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/panel/technology/category/update/odio" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/technology/category/update/odio"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTpanel-technology-category-update--category-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTpanel-technology-category-update--category-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTpanel-technology-category-update--category-"></code></pre>
</div>
<div id="execution-error-PUTpanel-technology-category-update--category-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTpanel-technology-category-update--category-"></code></pre>
</div>
<form id="form-PUTpanel-technology-category-update--category-" data-method="PUT" data-path="panel/technology/category/update/{category}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTpanel-technology-category-update--category-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTpanel-technology-category-update--category-" onclick="tryItOut('PUTpanel-technology-category-update--category-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTpanel-technology-category-update--category-" onclick="cancelTryOut('PUTpanel-technology-category-update--category-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTpanel-technology-category-update--category-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>panel/technology/category/update/{category}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="category" data-endpoint="PUTpanel-technology-category-update--category-" data-component="url" required  hidden>
<br>

</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/panel/technology/category/destroy/mollitia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/technology/category/destroy/mollitia"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEpanel-technology-category-destroy--category-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEpanel-technology-category-destroy--category-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEpanel-technology-category-destroy--category-"></code></pre>
</div>
<div id="execution-error-DELETEpanel-technology-category-destroy--category-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEpanel-technology-category-destroy--category-"></code></pre>
</div>
<form id="form-DELETEpanel-technology-category-destroy--category-" data-method="DELETE" data-path="panel/technology/category/destroy/{category}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEpanel-technology-category-destroy--category-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEpanel-technology-category-destroy--category-" onclick="tryItOut('DELETEpanel-technology-category-destroy--category-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEpanel-technology-category-destroy--category-" onclick="cancelTryOut('DELETEpanel-technology-category-destroy--category-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEpanel-technology-category-destroy--category-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>panel/technology/category/destroy/{category}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="category" data-endpoint="DELETEpanel-technology-category-destroy--category-" data-component="url" required  hidden>
<br>

</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/technology" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/technology"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-technology" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-technology"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-technology"></code></pre>
</div>
<div id="execution-error-GETpanel-technology" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-technology"></code></pre>
</div>
<form id="form-GETpanel-technology" data-method="GET" data-path="panel/technology" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-technology', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-technology" onclick="tryItOut('GETpanel-technology');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-technology" onclick="cancelTryOut('GETpanel-technology');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-technology" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/technology</code></b>
</p>
</form>


## Show the form for creating a new resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/technology/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/technology/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-technology-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-technology-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-technology-create"></code></pre>
</div>
<div id="execution-error-GETpanel-technology-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-technology-create"></code></pre>
</div>
<form id="form-GETpanel-technology-create" data-method="GET" data-path="panel/technology/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-technology-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-technology-create" onclick="tryItOut('GETpanel-technology-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-technology-create" onclick="cancelTryOut('GETpanel-technology-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-technology-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/technology/create</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/panel/technology" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/technology"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTpanel-technology" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTpanel-technology"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTpanel-technology"></code></pre>
</div>
<div id="execution-error-POSTpanel-technology" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpanel-technology"></code></pre>
</div>
<form id="form-POSTpanel-technology" data-method="POST" data-path="panel/technology" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTpanel-technology', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTpanel-technology" onclick="tryItOut('POSTpanel-technology');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTpanel-technology" onclick="cancelTryOut('POSTpanel-technology');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTpanel-technology" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>panel/technology</code></b>
</p>
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/technology/eveniet" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/technology/eveniet"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-technology--technology-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-technology--technology-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-technology--technology-"></code></pre>
</div>
<div id="execution-error-GETpanel-technology--technology-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-technology--technology-"></code></pre>
</div>
<form id="form-GETpanel-technology--technology-" data-method="GET" data-path="panel/technology/{technology}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-technology--technology-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-technology--technology-" onclick="tryItOut('GETpanel-technology--technology-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-technology--technology-" onclick="cancelTryOut('GETpanel-technology--technology-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-technology--technology-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/technology/{technology}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>technology</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="technology" data-endpoint="GETpanel-technology--technology-" data-component="url" required  hidden>
<br>

</p>
</form>


## Show the form for editing the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/technology/architecto/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/technology/architecto/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-technology--technology--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-technology--technology--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-technology--technology--edit"></code></pre>
</div>
<div id="execution-error-GETpanel-technology--technology--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-technology--technology--edit"></code></pre>
</div>
<form id="form-GETpanel-technology--technology--edit" data-method="GET" data-path="panel/technology/{technology}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-technology--technology--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-technology--technology--edit" onclick="tryItOut('GETpanel-technology--technology--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-technology--technology--edit" onclick="cancelTryOut('GETpanel-technology--technology--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-technology--technology--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/technology/{technology}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>technology</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="technology" data-endpoint="GETpanel-technology--technology--edit" data-component="url" required  hidden>
<br>

</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/panel/technology/enim" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/technology/enim"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTpanel-technology--technology-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTpanel-technology--technology-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTpanel-technology--technology-"></code></pre>
</div>
<div id="execution-error-PUTpanel-technology--technology-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTpanel-technology--technology-"></code></pre>
</div>
<form id="form-PUTpanel-technology--technology-" data-method="PUT" data-path="panel/technology/{technology}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTpanel-technology--technology-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTpanel-technology--technology-" onclick="tryItOut('PUTpanel-technology--technology-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTpanel-technology--technology-" onclick="cancelTryOut('PUTpanel-technology--technology-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTpanel-technology--technology-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>panel/technology/{technology}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>panel/technology/{technology}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>technology</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="technology" data-endpoint="PUTpanel-technology--technology-" data-component="url" required  hidden>
<br>

</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/panel/technology/similique" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/technology/similique"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEpanel-technology--technology-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEpanel-technology--technology-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEpanel-technology--technology-"></code></pre>
</div>
<div id="execution-error-DELETEpanel-technology--technology-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEpanel-technology--technology-"></code></pre>
</div>
<form id="form-DELETEpanel-technology--technology-" data-method="DELETE" data-path="panel/technology/{technology}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEpanel-technology--technology-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEpanel-technology--technology-" onclick="tryItOut('DELETEpanel-technology--technology-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEpanel-technology--technology-" onclick="cancelTryOut('DELETEpanel-technology--technology-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEpanel-technology--technology-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>panel/technology/{technology}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>technology</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="technology" data-endpoint="DELETEpanel-technology--technology-" data-component="url" required  hidden>
<br>

</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/services" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/services"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-services" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-services"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-services"></code></pre>
</div>
<div id="execution-error-GETpanel-services" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-services"></code></pre>
</div>
<form id="form-GETpanel-services" data-method="GET" data-path="panel/services" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-services', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-services" onclick="tryItOut('GETpanel-services');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-services" onclick="cancelTryOut('GETpanel-services');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-services" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/services</code></b>
</p>
</form>


## Show the form for creating a new resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/services/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/services/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-services-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-services-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-services-create"></code></pre>
</div>
<div id="execution-error-GETpanel-services-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-services-create"></code></pre>
</div>
<form id="form-GETpanel-services-create" data-method="GET" data-path="panel/services/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-services-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-services-create" onclick="tryItOut('GETpanel-services-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-services-create" onclick="cancelTryOut('GETpanel-services-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-services-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/services/create</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/panel/services" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/services"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTpanel-services" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTpanel-services"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTpanel-services"></code></pre>
</div>
<div id="execution-error-POSTpanel-services" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpanel-services"></code></pre>
</div>
<form id="form-POSTpanel-services" data-method="POST" data-path="panel/services" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTpanel-services', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTpanel-services" onclick="tryItOut('POSTpanel-services');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTpanel-services" onclick="cancelTryOut('POSTpanel-services');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTpanel-services" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>panel/services</code></b>
</p>
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/services/incidunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/services/incidunt"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-services--service-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-services--service-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-services--service-"></code></pre>
</div>
<div id="execution-error-GETpanel-services--service-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-services--service-"></code></pre>
</div>
<form id="form-GETpanel-services--service-" data-method="GET" data-path="panel/services/{service}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-services--service-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-services--service-" onclick="tryItOut('GETpanel-services--service-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-services--service-" onclick="cancelTryOut('GETpanel-services--service-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-services--service-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/services/{service}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>service</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="service" data-endpoint="GETpanel-services--service-" data-component="url" required  hidden>
<br>

</p>
</form>


## Show the form for editing the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/services/doloribus/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/services/doloribus/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-services--service--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-services--service--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-services--service--edit"></code></pre>
</div>
<div id="execution-error-GETpanel-services--service--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-services--service--edit"></code></pre>
</div>
<form id="form-GETpanel-services--service--edit" data-method="GET" data-path="panel/services/{service}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-services--service--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-services--service--edit" onclick="tryItOut('GETpanel-services--service--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-services--service--edit" onclick="cancelTryOut('GETpanel-services--service--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-services--service--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/services/{service}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>service</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="service" data-endpoint="GETpanel-services--service--edit" data-component="url" required  hidden>
<br>

</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/panel/services/natus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/services/natus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTpanel-services--service-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTpanel-services--service-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTpanel-services--service-"></code></pre>
</div>
<div id="execution-error-PUTpanel-services--service-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTpanel-services--service-"></code></pre>
</div>
<form id="form-PUTpanel-services--service-" data-method="PUT" data-path="panel/services/{service}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTpanel-services--service-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTpanel-services--service-" onclick="tryItOut('PUTpanel-services--service-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTpanel-services--service-" onclick="cancelTryOut('PUTpanel-services--service-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTpanel-services--service-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>panel/services/{service}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>panel/services/{service}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>service</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="service" data-endpoint="PUTpanel-services--service-" data-component="url" required  hidden>
<br>

</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/panel/services/consequatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/services/consequatur"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEpanel-services--service-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEpanel-services--service-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEpanel-services--service-"></code></pre>
</div>
<div id="execution-error-DELETEpanel-services--service-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEpanel-services--service-"></code></pre>
</div>
<form id="form-DELETEpanel-services--service-" data-method="DELETE" data-path="panel/services/{service}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEpanel-services--service-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEpanel-services--service-" onclick="tryItOut('DELETEpanel-services--service-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEpanel-services--service-" onclick="cancelTryOut('DELETEpanel-services--service-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEpanel-services--service-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>panel/services/{service}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>service</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="service" data-endpoint="DELETEpanel-services--service-" data-component="url" required  hidden>
<br>

</p>
</form>


## List Sorting.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/panel/jobpost/sorting" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/jobpost/sorting"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTpanel-jobpost-sorting" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTpanel-jobpost-sorting"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTpanel-jobpost-sorting"></code></pre>
</div>
<div id="execution-error-POSTpanel-jobpost-sorting" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpanel-jobpost-sorting"></code></pre>
</div>
<form id="form-POSTpanel-jobpost-sorting" data-method="POST" data-path="panel/jobpost/sorting" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTpanel-jobpost-sorting', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTpanel-jobpost-sorting" onclick="tryItOut('POSTpanel-jobpost-sorting');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTpanel-jobpost-sorting" onclick="cancelTryOut('POSTpanel-jobpost-sorting');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTpanel-jobpost-sorting" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>panel/jobpost/sorting</code></b>
</p>
</form>


## panel/jobpost/status




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/jobpost/status" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/jobpost/status"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-jobpost-status" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-jobpost-status"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-jobpost-status"></code></pre>
</div>
<div id="execution-error-GETpanel-jobpost-status" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-jobpost-status"></code></pre>
</div>
<form id="form-GETpanel-jobpost-status" data-method="GET" data-path="panel/jobpost/status" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-jobpost-status', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-jobpost-status" onclick="tryItOut('GETpanel-jobpost-status');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-jobpost-status" onclick="cancelTryOut('GETpanel-jobpost-status');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-jobpost-status" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/jobpost/status</code></b>
</p>
</form>


## List Sorting.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/panel/gallery/sorting" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/gallery/sorting"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTpanel-gallery-sorting" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTpanel-gallery-sorting"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTpanel-gallery-sorting"></code></pre>
</div>
<div id="execution-error-POSTpanel-gallery-sorting" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpanel-gallery-sorting"></code></pre>
</div>
<form id="form-POSTpanel-gallery-sorting" data-method="POST" data-path="panel/gallery/sorting" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTpanel-gallery-sorting', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTpanel-gallery-sorting" onclick="tryItOut('POSTpanel-gallery-sorting');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTpanel-gallery-sorting" onclick="cancelTryOut('POSTpanel-gallery-sorting');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTpanel-gallery-sorting" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>panel/gallery/sorting</code></b>
</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/job/post" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/job/post"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-job-post" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-job-post"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-job-post"></code></pre>
</div>
<div id="execution-error-GETpanel-job-post" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-job-post"></code></pre>
</div>
<form id="form-GETpanel-job-post" data-method="GET" data-path="panel/job/post" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-job-post', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-job-post" onclick="tryItOut('GETpanel-job-post');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-job-post" onclick="cancelTryOut('GETpanel-job-post');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-job-post" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/job/post</code></b>
</p>
</form>


## Show the form for creating a new resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/job/post/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/job/post/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-job-post-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-job-post-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-job-post-create"></code></pre>
</div>
<div id="execution-error-GETpanel-job-post-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-job-post-create"></code></pre>
</div>
<form id="form-GETpanel-job-post-create" data-method="GET" data-path="panel/job/post/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-job-post-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-job-post-create" onclick="tryItOut('GETpanel-job-post-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-job-post-create" onclick="cancelTryOut('GETpanel-job-post-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-job-post-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/job/post/create</code></b>
</p>
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/job/post/in" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/job/post/in"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-job-post--post-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-job-post--post-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-job-post--post-"></code></pre>
</div>
<div id="execution-error-GETpanel-job-post--post-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-job-post--post-"></code></pre>
</div>
<form id="form-GETpanel-job-post--post-" data-method="GET" data-path="panel/job/post/{post}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-job-post--post-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-job-post--post-" onclick="tryItOut('GETpanel-job-post--post-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-job-post--post-" onclick="cancelTryOut('GETpanel-job-post--post-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-job-post--post-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/job/post/{post}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>post</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="post" data-endpoint="GETpanel-job-post--post-" data-component="url" required  hidden>
<br>

</p>
</form>


## Show the form for editing the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/job/post/itaque/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/job/post/itaque/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-job-post--post--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-job-post--post--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-job-post--post--edit"></code></pre>
</div>
<div id="execution-error-GETpanel-job-post--post--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-job-post--post--edit"></code></pre>
</div>
<form id="form-GETpanel-job-post--post--edit" data-method="GET" data-path="panel/job/post/{post}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-job-post--post--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-job-post--post--edit" onclick="tryItOut('GETpanel-job-post--post--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-job-post--post--edit" onclick="cancelTryOut('GETpanel-job-post--post--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-job-post--post--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/job/post/{post}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>post</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="post" data-endpoint="GETpanel-job-post--post--edit" data-component="url" required  hidden>
<br>

</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/panel/job/post/qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/job/post/qui"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEpanel-job-post--post-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEpanel-job-post--post-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEpanel-job-post--post-"></code></pre>
</div>
<div id="execution-error-DELETEpanel-job-post--post-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEpanel-job-post--post-"></code></pre>
</div>
<form id="form-DELETEpanel-job-post--post-" data-method="DELETE" data-path="panel/job/post/{post}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEpanel-job-post--post-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEpanel-job-post--post-" onclick="tryItOut('DELETEpanel-job-post--post-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEpanel-job-post--post-" onclick="cancelTryOut('DELETEpanel-job-post--post-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEpanel-job-post--post-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>panel/job/post/{post}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>post</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="post" data-endpoint="DELETEpanel-job-post--post-" data-component="url" required  hidden>
<br>

</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/gallery" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/gallery"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-gallery" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-gallery"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-gallery"></code></pre>
</div>
<div id="execution-error-GETpanel-gallery" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-gallery"></code></pre>
</div>
<form id="form-GETpanel-gallery" data-method="GET" data-path="panel/gallery" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-gallery', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-gallery" onclick="tryItOut('GETpanel-gallery');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-gallery" onclick="cancelTryOut('GETpanel-gallery');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-gallery" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/gallery</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/panel/gallery" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/gallery"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTpanel-gallery" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTpanel-gallery"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTpanel-gallery"></code></pre>
</div>
<div id="execution-error-POSTpanel-gallery" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpanel-gallery"></code></pre>
</div>
<form id="form-POSTpanel-gallery" data-method="POST" data-path="panel/gallery" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTpanel-gallery', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTpanel-gallery" onclick="tryItOut('POSTpanel-gallery');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTpanel-gallery" onclick="cancelTryOut('POSTpanel-gallery');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTpanel-gallery" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>panel/gallery</code></b>
</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/panel/gallery/qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/gallery/qui"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEpanel-gallery--gallery-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEpanel-gallery--gallery-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEpanel-gallery--gallery-"></code></pre>
</div>
<div id="execution-error-DELETEpanel-gallery--gallery-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEpanel-gallery--gallery-"></code></pre>
</div>
<form id="form-DELETEpanel-gallery--gallery-" data-method="DELETE" data-path="panel/gallery/{gallery}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEpanel-gallery--gallery-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEpanel-gallery--gallery-" onclick="tryItOut('DELETEpanel-gallery--gallery-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEpanel-gallery--gallery-" onclick="cancelTryOut('DELETEpanel-gallery--gallery-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEpanel-gallery--gallery-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>panel/gallery/{gallery}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>gallery</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="gallery" data-endpoint="DELETEpanel-gallery--gallery-" data-component="url" required  hidden>
<br>

</p>
</form>


## panel/testimonial




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/testimonial" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/testimonial"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-testimonial" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-testimonial"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-testimonial"></code></pre>
</div>
<div id="execution-error-GETpanel-testimonial" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-testimonial"></code></pre>
</div>
<form id="form-GETpanel-testimonial" data-method="GET" data-path="panel/testimonial" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-testimonial', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-testimonial" onclick="tryItOut('GETpanel-testimonial');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-testimonial" onclick="cancelTryOut('GETpanel-testimonial');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-testimonial" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/testimonial</code></b>
</p>
</form>


## panel/testimonial/create




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/testimonial/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/testimonial/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-testimonial-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-testimonial-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-testimonial-create"></code></pre>
</div>
<div id="execution-error-GETpanel-testimonial-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-testimonial-create"></code></pre>
</div>
<form id="form-GETpanel-testimonial-create" data-method="GET" data-path="panel/testimonial/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-testimonial-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-testimonial-create" onclick="tryItOut('GETpanel-testimonial-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-testimonial-create" onclick="cancelTryOut('GETpanel-testimonial-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-testimonial-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/testimonial/create</code></b>
</p>
</form>


## panel/testimonial




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/panel/testimonial" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/testimonial"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTpanel-testimonial" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTpanel-testimonial"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTpanel-testimonial"></code></pre>
</div>
<div id="execution-error-POSTpanel-testimonial" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpanel-testimonial"></code></pre>
</div>
<form id="form-POSTpanel-testimonial" data-method="POST" data-path="panel/testimonial" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTpanel-testimonial', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTpanel-testimonial" onclick="tryItOut('POSTpanel-testimonial');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTpanel-testimonial" onclick="cancelTryOut('POSTpanel-testimonial');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTpanel-testimonial" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>panel/testimonial</code></b>
</p>
</form>


## panel/testimonial/{testimonial}




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/panel/testimonial/perferendis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/testimonial/perferendis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEpanel-testimonial--testimonial-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEpanel-testimonial--testimonial-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEpanel-testimonial--testimonial-"></code></pre>
</div>
<div id="execution-error-DELETEpanel-testimonial--testimonial-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEpanel-testimonial--testimonial-"></code></pre>
</div>
<form id="form-DELETEpanel-testimonial--testimonial-" data-method="DELETE" data-path="panel/testimonial/{testimonial}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEpanel-testimonial--testimonial-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEpanel-testimonial--testimonial-" onclick="tryItOut('DELETEpanel-testimonial--testimonial-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEpanel-testimonial--testimonial-" onclick="cancelTryOut('DELETEpanel-testimonial--testimonial-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEpanel-testimonial--testimonial-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>panel/testimonial/{testimonial}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>testimonial</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="testimonial" data-endpoint="DELETEpanel-testimonial--testimonial-" data-component="url" required  hidden>
<br>

</p>
</form>


## panel/footer




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/footer" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/footer"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-footer" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-footer"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-footer"></code></pre>
</div>
<div id="execution-error-GETpanel-footer" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-footer"></code></pre>
</div>
<form id="form-GETpanel-footer" data-method="GET" data-path="panel/footer" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-footer', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-footer" onclick="tryItOut('GETpanel-footer');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-footer" onclick="cancelTryOut('GETpanel-footer');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-footer" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/footer</code></b>
</p>
</form>


## panel/footer




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/panel/footer" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/footer"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTpanel-footer" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTpanel-footer"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTpanel-footer"></code></pre>
</div>
<div id="execution-error-POSTpanel-footer" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpanel-footer"></code></pre>
</div>
<form id="form-POSTpanel-footer" data-method="POST" data-path="panel/footer" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTpanel-footer', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTpanel-footer" onclick="tryItOut('POSTpanel-footer');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTpanel-footer" onclick="cancelTryOut('POSTpanel-footer');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTpanel-footer" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>panel/footer</code></b>
</p>
</form>


## panel/footer/{footer}




> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/panel/footer/id" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/footer/id"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTpanel-footer--footer-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTpanel-footer--footer-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTpanel-footer--footer-"></code></pre>
</div>
<div id="execution-error-PUTpanel-footer--footer-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTpanel-footer--footer-"></code></pre>
</div>
<form id="form-PUTpanel-footer--footer-" data-method="PUT" data-path="panel/footer/{footer}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTpanel-footer--footer-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTpanel-footer--footer-" onclick="tryItOut('PUTpanel-footer--footer-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTpanel-footer--footer-" onclick="cancelTryOut('PUTpanel-footer--footer-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTpanel-footer--footer-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>panel/footer/{footer}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>panel/footer/{footer}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>footer</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="footer" data-endpoint="PUTpanel-footer--footer-" data-component="url" required  hidden>
<br>

</p>
</form>


## panel/footer/{footer}




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/panel/footer/vitae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/footer/vitae"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEpanel-footer--footer-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEpanel-footer--footer-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEpanel-footer--footer-"></code></pre>
</div>
<div id="execution-error-DELETEpanel-footer--footer-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEpanel-footer--footer-"></code></pre>
</div>
<form id="form-DELETEpanel-footer--footer-" data-method="DELETE" data-path="panel/footer/{footer}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEpanel-footer--footer-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEpanel-footer--footer-" onclick="tryItOut('DELETEpanel-footer--footer-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEpanel-footer--footer-" onclick="cancelTryOut('DELETEpanel-footer--footer-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEpanel-footer--footer-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>panel/footer/{footer}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>footer</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="footer" data-endpoint="DELETEpanel-footer--footer-" data-component="url" required  hidden>
<br>

</p>
</form>


## panel/social




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/panel/social" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/social"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTpanel-social" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTpanel-social"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTpanel-social"></code></pre>
</div>
<div id="execution-error-POSTpanel-social" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpanel-social"></code></pre>
</div>
<form id="form-POSTpanel-social" data-method="POST" data-path="panel/social" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTpanel-social', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTpanel-social" onclick="tryItOut('POSTpanel-social');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTpanel-social" onclick="cancelTryOut('POSTpanel-social');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTpanel-social" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>panel/social</code></b>
</p>
</form>


## panel/social/{social}




> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/panel/social/quae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/social/quae"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTpanel-social--social-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTpanel-social--social-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTpanel-social--social-"></code></pre>
</div>
<div id="execution-error-PUTpanel-social--social-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTpanel-social--social-"></code></pre>
</div>
<form id="form-PUTpanel-social--social-" data-method="PUT" data-path="panel/social/{social}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTpanel-social--social-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTpanel-social--social-" onclick="tryItOut('PUTpanel-social--social-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTpanel-social--social-" onclick="cancelTryOut('PUTpanel-social--social-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTpanel-social--social-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>panel/social/{social}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>panel/social/{social}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>social</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="social" data-endpoint="PUTpanel-social--social-" data-component="url" required  hidden>
<br>

</p>
</form>


## panel/social/{social}




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/panel/social/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/social/et"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEpanel-social--social-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEpanel-social--social-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEpanel-social--social-"></code></pre>
</div>
<div id="execution-error-DELETEpanel-social--social-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEpanel-social--social-"></code></pre>
</div>
<form id="form-DELETEpanel-social--social-" data-method="DELETE" data-path="panel/social/{social}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEpanel-social--social-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEpanel-social--social-" onclick="tryItOut('DELETEpanel-social--social-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEpanel-social--social-" onclick="cancelTryOut('DELETEpanel-social--social-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEpanel-social--social-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>panel/social/{social}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>social</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="social" data-endpoint="DELETEpanel-social--social-" data-component="url" required  hidden>
<br>

</p>
</form>


## panel/team/status




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/team/status" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/team/status"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-team-status" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-team-status"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-team-status"></code></pre>
</div>
<div id="execution-error-GETpanel-team-status" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-team-status"></code></pre>
</div>
<form id="form-GETpanel-team-status" data-method="GET" data-path="panel/team/status" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-team-status', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-team-status" onclick="tryItOut('GETpanel-team-status');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-team-status" onclick="cancelTryOut('GETpanel-team-status');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-team-status" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/team/status</code></b>
</p>
</form>


## List Sorting.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/panel/team/sorting" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/team/sorting"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTpanel-team-sorting" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTpanel-team-sorting"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTpanel-team-sorting"></code></pre>
</div>
<div id="execution-error-POSTpanel-team-sorting" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpanel-team-sorting"></code></pre>
</div>
<form id="form-POSTpanel-team-sorting" data-method="POST" data-path="panel/team/sorting" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTpanel-team-sorting', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTpanel-team-sorting" onclick="tryItOut('POSTpanel-team-sorting');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTpanel-team-sorting" onclick="cancelTryOut('POSTpanel-team-sorting');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTpanel-team-sorting" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>panel/team/sorting</code></b>
</p>
</form>


## panel/team




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/team" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/team"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-team" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-team"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-team"></code></pre>
</div>
<div id="execution-error-GETpanel-team" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-team"></code></pre>
</div>
<form id="form-GETpanel-team" data-method="GET" data-path="panel/team" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-team', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-team" onclick="tryItOut('GETpanel-team');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-team" onclick="cancelTryOut('GETpanel-team');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-team" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/team</code></b>
</p>
</form>


## panel/team/create




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/team/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/team/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-team-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-team-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-team-create"></code></pre>
</div>
<div id="execution-error-GETpanel-team-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-team-create"></code></pre>
</div>
<form id="form-GETpanel-team-create" data-method="GET" data-path="panel/team/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-team-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-team-create" onclick="tryItOut('GETpanel-team-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-team-create" onclick="cancelTryOut('GETpanel-team-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-team-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/team/create</code></b>
</p>
</form>


## panel/team




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/panel/team" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/team"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTpanel-team" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTpanel-team"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTpanel-team"></code></pre>
</div>
<div id="execution-error-POSTpanel-team" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpanel-team"></code></pre>
</div>
<form id="form-POSTpanel-team" data-method="POST" data-path="panel/team" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTpanel-team', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTpanel-team" onclick="tryItOut('POSTpanel-team');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTpanel-team" onclick="cancelTryOut('POSTpanel-team');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTpanel-team" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>panel/team</code></b>
</p>
</form>


## panel/team/{team}/edit




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/team/rerum/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/team/rerum/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-team--team--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-team--team--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-team--team--edit"></code></pre>
</div>
<div id="execution-error-GETpanel-team--team--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-team--team--edit"></code></pre>
</div>
<form id="form-GETpanel-team--team--edit" data-method="GET" data-path="panel/team/{team}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-team--team--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-team--team--edit" onclick="tryItOut('GETpanel-team--team--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-team--team--edit" onclick="cancelTryOut('GETpanel-team--team--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-team--team--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/team/{team}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>team</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="team" data-endpoint="GETpanel-team--team--edit" data-component="url" required  hidden>
<br>

</p>
</form>


## panel/team/{team}




> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/panel/team/voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/team/voluptatem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTpanel-team--team-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTpanel-team--team-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTpanel-team--team-"></code></pre>
</div>
<div id="execution-error-PUTpanel-team--team-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTpanel-team--team-"></code></pre>
</div>
<form id="form-PUTpanel-team--team-" data-method="PUT" data-path="panel/team/{team}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTpanel-team--team-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTpanel-team--team-" onclick="tryItOut('PUTpanel-team--team-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTpanel-team--team-" onclick="cancelTryOut('PUTpanel-team--team-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTpanel-team--team-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>panel/team/{team}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>panel/team/{team}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>team</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="team" data-endpoint="PUTpanel-team--team-" data-component="url" required  hidden>
<br>

</p>
</form>


## panel/team/{team}




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/panel/team/ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/team/ut"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEpanel-team--team-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEpanel-team--team-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEpanel-team--team-"></code></pre>
</div>
<div id="execution-error-DELETEpanel-team--team-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEpanel-team--team-"></code></pre>
</div>
<form id="form-DELETEpanel-team--team-" data-method="DELETE" data-path="panel/team/{team}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEpanel-team--team-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEpanel-team--team-" onclick="tryItOut('DELETEpanel-team--team-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEpanel-team--team-" onclick="cancelTryOut('DELETEpanel-team--team-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEpanel-team--team-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>panel/team/{team}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>team</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="team" data-endpoint="DELETEpanel-team--team-" data-component="url" required  hidden>
<br>

</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/news" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/news"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-news" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-news"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-news"></code></pre>
</div>
<div id="execution-error-GETpanel-news" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-news"></code></pre>
</div>
<form id="form-GETpanel-news" data-method="GET" data-path="panel/news" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-news', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-news" onclick="tryItOut('GETpanel-news');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-news" onclick="cancelTryOut('GETpanel-news');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-news" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/news</code></b>
</p>
</form>


## Show the form for creating a new resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/news/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/news/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-news-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-news-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-news-create"></code></pre>
</div>
<div id="execution-error-GETpanel-news-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-news-create"></code></pre>
</div>
<form id="form-GETpanel-news-create" data-method="GET" data-path="panel/news/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-news-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-news-create" onclick="tryItOut('GETpanel-news-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-news-create" onclick="cancelTryOut('GETpanel-news-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-news-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/news/create</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/panel/news" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/news"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTpanel-news" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTpanel-news"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTpanel-news"></code></pre>
</div>
<div id="execution-error-POSTpanel-news" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpanel-news"></code></pre>
</div>
<form id="form-POSTpanel-news" data-method="POST" data-path="panel/news" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTpanel-news', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTpanel-news" onclick="tryItOut('POSTpanel-news');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTpanel-news" onclick="cancelTryOut('POSTpanel-news');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTpanel-news" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>panel/news</code></b>
</p>
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/news/sit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/news/sit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-news--news-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-news--news-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-news--news-"></code></pre>
</div>
<div id="execution-error-GETpanel-news--news-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-news--news-"></code></pre>
</div>
<form id="form-GETpanel-news--news-" data-method="GET" data-path="panel/news/{news}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-news--news-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-news--news-" onclick="tryItOut('GETpanel-news--news-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-news--news-" onclick="cancelTryOut('GETpanel-news--news-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-news--news-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/news/{news}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>news</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="news" data-endpoint="GETpanel-news--news-" data-component="url" required  hidden>
<br>

</p>
</form>


## Show the form for editing the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/news/eos/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/news/eos/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-news--news--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-news--news--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-news--news--edit"></code></pre>
</div>
<div id="execution-error-GETpanel-news--news--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-news--news--edit"></code></pre>
</div>
<form id="form-GETpanel-news--news--edit" data-method="GET" data-path="panel/news/{news}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-news--news--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-news--news--edit" onclick="tryItOut('GETpanel-news--news--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-news--news--edit" onclick="cancelTryOut('GETpanel-news--news--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-news--news--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/news/{news}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>news</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="news" data-endpoint="GETpanel-news--news--edit" data-component="url" required  hidden>
<br>

</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/panel/news/cumque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/news/cumque"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTpanel-news--news-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTpanel-news--news-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTpanel-news--news-"></code></pre>
</div>
<div id="execution-error-PUTpanel-news--news-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTpanel-news--news-"></code></pre>
</div>
<form id="form-PUTpanel-news--news-" data-method="PUT" data-path="panel/news/{news}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTpanel-news--news-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTpanel-news--news-" onclick="tryItOut('PUTpanel-news--news-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTpanel-news--news-" onclick="cancelTryOut('PUTpanel-news--news-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTpanel-news--news-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>panel/news/{news}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>panel/news/{news}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>news</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="news" data-endpoint="PUTpanel-news--news-" data-component="url" required  hidden>
<br>

</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/panel/news/voluptas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/news/voluptas"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEpanel-news--news-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEpanel-news--news-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEpanel-news--news-"></code></pre>
</div>
<div id="execution-error-DELETEpanel-news--news-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEpanel-news--news-"></code></pre>
</div>
<form id="form-DELETEpanel-news--news-" data-method="DELETE" data-path="panel/news/{news}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEpanel-news--news-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEpanel-news--news-" onclick="tryItOut('DELETEpanel-news--news-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEpanel-news--news-" onclick="cancelTryOut('DELETEpanel-news--news-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEpanel-news--news-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>panel/news/{news}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>news</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="news" data-endpoint="DELETEpanel-news--news-" data-component="url" required  hidden>
<br>

</p>
</form>


## List Sorting.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/panel/subcompany/sorting" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/subcompany/sorting"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTpanel-subcompany-sorting" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTpanel-subcompany-sorting"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTpanel-subcompany-sorting"></code></pre>
</div>
<div id="execution-error-POSTpanel-subcompany-sorting" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpanel-subcompany-sorting"></code></pre>
</div>
<form id="form-POSTpanel-subcompany-sorting" data-method="POST" data-path="panel/subcompany/sorting" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTpanel-subcompany-sorting', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTpanel-subcompany-sorting" onclick="tryItOut('POSTpanel-subcompany-sorting');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTpanel-subcompany-sorting" onclick="cancelTryOut('POSTpanel-subcompany-sorting');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTpanel-subcompany-sorting" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>panel/subcompany/sorting</code></b>
</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/subcompany" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/subcompany"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-subcompany" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-subcompany"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-subcompany"></code></pre>
</div>
<div id="execution-error-GETpanel-subcompany" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-subcompany"></code></pre>
</div>
<form id="form-GETpanel-subcompany" data-method="GET" data-path="panel/subcompany" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-subcompany', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-subcompany" onclick="tryItOut('GETpanel-subcompany');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-subcompany" onclick="cancelTryOut('GETpanel-subcompany');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-subcompany" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/subcompany</code></b>
</p>
</form>


## Show the form for creating a new resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/subcompany/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/subcompany/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-subcompany-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-subcompany-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-subcompany-create"></code></pre>
</div>
<div id="execution-error-GETpanel-subcompany-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-subcompany-create"></code></pre>
</div>
<form id="form-GETpanel-subcompany-create" data-method="GET" data-path="panel/subcompany/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-subcompany-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-subcompany-create" onclick="tryItOut('GETpanel-subcompany-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-subcompany-create" onclick="cancelTryOut('GETpanel-subcompany-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-subcompany-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/subcompany/create</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/panel/subcompany" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"neque","description":"culpa","link":"maxime"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/subcompany"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "neque",
    "description": "culpa",
    "link": "maxime"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTpanel-subcompany" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTpanel-subcompany"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTpanel-subcompany"></code></pre>
</div>
<div id="execution-error-POSTpanel-subcompany" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpanel-subcompany"></code></pre>
</div>
<form id="form-POSTpanel-subcompany" data-method="POST" data-path="panel/subcompany" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTpanel-subcompany', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTpanel-subcompany" onclick="tryItOut('POSTpanel-subcompany');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTpanel-subcompany" onclick="cancelTryOut('POSTpanel-subcompany');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTpanel-subcompany" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>panel/subcompany</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="POSTpanel-subcompany" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="description" data-endpoint="POSTpanel-subcompany" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>link</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="link" data-endpoint="POSTpanel-subcompany" data-component="body" required  hidden>
<br>

</p>

</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/subcompany/qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/subcompany/qui"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-subcompany--subcompany-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-subcompany--subcompany-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-subcompany--subcompany-"></code></pre>
</div>
<div id="execution-error-GETpanel-subcompany--subcompany-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-subcompany--subcompany-"></code></pre>
</div>
<form id="form-GETpanel-subcompany--subcompany-" data-method="GET" data-path="panel/subcompany/{subcompany}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-subcompany--subcompany-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-subcompany--subcompany-" onclick="tryItOut('GETpanel-subcompany--subcompany-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-subcompany--subcompany-" onclick="cancelTryOut('GETpanel-subcompany--subcompany-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-subcompany--subcompany-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/subcompany/{subcompany}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>subcompany</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="subcompany" data-endpoint="GETpanel-subcompany--subcompany-" data-component="url" required  hidden>
<br>

</p>
</form>


## Show the form for editing the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/subcompany/reiciendis/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/subcompany/reiciendis/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-subcompany--subcompany--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-subcompany--subcompany--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-subcompany--subcompany--edit"></code></pre>
</div>
<div id="execution-error-GETpanel-subcompany--subcompany--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-subcompany--subcompany--edit"></code></pre>
</div>
<form id="form-GETpanel-subcompany--subcompany--edit" data-method="GET" data-path="panel/subcompany/{subcompany}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-subcompany--subcompany--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-subcompany--subcompany--edit" onclick="tryItOut('GETpanel-subcompany--subcompany--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-subcompany--subcompany--edit" onclick="cancelTryOut('GETpanel-subcompany--subcompany--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-subcompany--subcompany--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/subcompany/{subcompany}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>subcompany</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="subcompany" data-endpoint="GETpanel-subcompany--subcompany--edit" data-component="url" required  hidden>
<br>

</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/panel/subcompany/quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"exercitationem","description":"sed","link":"id"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/subcompany/quia"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "exercitationem",
    "description": "sed",
    "link": "id"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTpanel-subcompany--subcompany-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTpanel-subcompany--subcompany-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTpanel-subcompany--subcompany-"></code></pre>
</div>
<div id="execution-error-PUTpanel-subcompany--subcompany-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTpanel-subcompany--subcompany-"></code></pre>
</div>
<form id="form-PUTpanel-subcompany--subcompany-" data-method="PUT" data-path="panel/subcompany/{subcompany}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTpanel-subcompany--subcompany-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTpanel-subcompany--subcompany-" onclick="tryItOut('PUTpanel-subcompany--subcompany-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTpanel-subcompany--subcompany-" onclick="cancelTryOut('PUTpanel-subcompany--subcompany-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTpanel-subcompany--subcompany-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>panel/subcompany/{subcompany}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>panel/subcompany/{subcompany}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>subcompany</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="subcompany" data-endpoint="PUTpanel-subcompany--subcompany-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="PUTpanel-subcompany--subcompany-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="description" data-endpoint="PUTpanel-subcompany--subcompany-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>link</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="link" data-endpoint="PUTpanel-subcompany--subcompany-" data-component="body" required  hidden>
<br>

</p>

</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/panel/subcompany/sequi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/subcompany/sequi"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEpanel-subcompany--subcompany-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEpanel-subcompany--subcompany-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEpanel-subcompany--subcompany-"></code></pre>
</div>
<div id="execution-error-DELETEpanel-subcompany--subcompany-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEpanel-subcompany--subcompany-"></code></pre>
</div>
<form id="form-DELETEpanel-subcompany--subcompany-" data-method="DELETE" data-path="panel/subcompany/{subcompany}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEpanel-subcompany--subcompany-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEpanel-subcompany--subcompany-" onclick="tryItOut('DELETEpanel-subcompany--subcompany-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEpanel-subcompany--subcompany-" onclick="cancelTryOut('DELETEpanel-subcompany--subcompany-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEpanel-subcompany--subcompany-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>panel/subcompany/{subcompany}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>subcompany</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="subcompany" data-endpoint="DELETEpanel-subcompany--subcompany-" data-component="url" required  hidden>
<br>

</p>
</form>


## panel/profile




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-profile" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-profile"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-profile"></code></pre>
</div>
<div id="execution-error-GETpanel-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-profile"></code></pre>
</div>
<form id="form-GETpanel-profile" data-method="GET" data-path="panel/profile" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-profile', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-profile" onclick="tryItOut('GETpanel-profile');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-profile" onclick="cancelTryOut('GETpanel-profile');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-profile" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/profile</code></b>
</p>
</form>


## panel/profile/{profile}/edit




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/profile/odio/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/profile/odio/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-profile--profile--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-profile--profile--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-profile--profile--edit"></code></pre>
</div>
<div id="execution-error-GETpanel-profile--profile--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-profile--profile--edit"></code></pre>
</div>
<form id="form-GETpanel-profile--profile--edit" data-method="GET" data-path="panel/profile/{profile}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-profile--profile--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-profile--profile--edit" onclick="tryItOut('GETpanel-profile--profile--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-profile--profile--edit" onclick="cancelTryOut('GETpanel-profile--profile--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-profile--profile--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/profile/{profile}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>profile</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="profile" data-endpoint="GETpanel-profile--profile--edit" data-component="url" required  hidden>
<br>

</p>
</form>


## panel/profile/{profile}




> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/panel/profile/debitis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/profile/debitis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTpanel-profile--profile-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTpanel-profile--profile-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTpanel-profile--profile-"></code></pre>
</div>
<div id="execution-error-PUTpanel-profile--profile-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTpanel-profile--profile-"></code></pre>
</div>
<form id="form-PUTpanel-profile--profile-" data-method="PUT" data-path="panel/profile/{profile}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTpanel-profile--profile-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTpanel-profile--profile-" onclick="tryItOut('PUTpanel-profile--profile-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTpanel-profile--profile-" onclick="cancelTryOut('PUTpanel-profile--profile-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTpanel-profile--profile-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>panel/profile/{profile}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>panel/profile/{profile}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>profile</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="profile" data-endpoint="PUTpanel-profile--profile-" data-component="url" required  hidden>
<br>

</p>
</form>


## panel/role/permission/{id}




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/role/permission/commodi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/role/permission/commodi"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-role-permission--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-role-permission--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-role-permission--id-"></code></pre>
</div>
<div id="execution-error-GETpanel-role-permission--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-role-permission--id-"></code></pre>
</div>
<form id="form-GETpanel-role-permission--id-" data-method="GET" data-path="panel/role/permission/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-role-permission--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-role-permission--id-" onclick="tryItOut('GETpanel-role-permission--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-role-permission--id-" onclick="cancelTryOut('GETpanel-role-permission--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-role-permission--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/role/permission/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETpanel-role-permission--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## panel/role/permission/{role}




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/panel/role/permission/ullam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/role/permission/ullam"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTpanel-role-permission--role-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTpanel-role-permission--role-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTpanel-role-permission--role-"></code></pre>
</div>
<div id="execution-error-POSTpanel-role-permission--role-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpanel-role-permission--role-"></code></pre>
</div>
<form id="form-POSTpanel-role-permission--role-" data-method="POST" data-path="panel/role/permission/{role}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTpanel-role-permission--role-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTpanel-role-permission--role-" onclick="tryItOut('POSTpanel-role-permission--role-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTpanel-role-permission--role-" onclick="cancelTryOut('POSTpanel-role-permission--role-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTpanel-role-permission--role-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>panel/role/permission/{role}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>role</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="role" data-endpoint="POSTpanel-role-permission--role-" data-component="url" required  hidden>
<br>

</p>
</form>


## panel/role




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/role" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/role"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-role" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-role"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-role"></code></pre>
</div>
<div id="execution-error-GETpanel-role" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-role"></code></pre>
</div>
<form id="form-GETpanel-role" data-method="GET" data-path="panel/role" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-role', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-role" onclick="tryItOut('GETpanel-role');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-role" onclick="cancelTryOut('GETpanel-role');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-role" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/role</code></b>
</p>
</form>


## panel/role/create




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/role/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/role/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-role-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-role-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-role-create"></code></pre>
</div>
<div id="execution-error-GETpanel-role-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-role-create"></code></pre>
</div>
<form id="form-GETpanel-role-create" data-method="GET" data-path="panel/role/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-role-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-role-create" onclick="tryItOut('GETpanel-role-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-role-create" onclick="cancelTryOut('GETpanel-role-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-role-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/role/create</code></b>
</p>
</form>


## panel/role




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/panel/role" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/role"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTpanel-role" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTpanel-role"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTpanel-role"></code></pre>
</div>
<div id="execution-error-POSTpanel-role" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpanel-role"></code></pre>
</div>
<form id="form-POSTpanel-role" data-method="POST" data-path="panel/role" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTpanel-role', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTpanel-role" onclick="tryItOut('POSTpanel-role');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTpanel-role" onclick="cancelTryOut('POSTpanel-role');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTpanel-role" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>panel/role</code></b>
</p>
</form>


## panel/role/{role}/edit




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/role/est/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/role/est/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-role--role--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-role--role--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-role--role--edit"></code></pre>
</div>
<div id="execution-error-GETpanel-role--role--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-role--role--edit"></code></pre>
</div>
<form id="form-GETpanel-role--role--edit" data-method="GET" data-path="panel/role/{role}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-role--role--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-role--role--edit" onclick="tryItOut('GETpanel-role--role--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-role--role--edit" onclick="cancelTryOut('GETpanel-role--role--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-role--role--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/role/{role}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>role</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="role" data-endpoint="GETpanel-role--role--edit" data-component="url" required  hidden>
<br>

</p>
</form>


## panel/role/{role}




> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/panel/role/ipsum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/role/ipsum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTpanel-role--role-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTpanel-role--role-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTpanel-role--role-"></code></pre>
</div>
<div id="execution-error-PUTpanel-role--role-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTpanel-role--role-"></code></pre>
</div>
<form id="form-PUTpanel-role--role-" data-method="PUT" data-path="panel/role/{role}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTpanel-role--role-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTpanel-role--role-" onclick="tryItOut('PUTpanel-role--role-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTpanel-role--role-" onclick="cancelTryOut('PUTpanel-role--role-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTpanel-role--role-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>panel/role/{role}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>panel/role/{role}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>role</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="role" data-endpoint="PUTpanel-role--role-" data-component="url" required  hidden>
<br>

</p>
</form>


## panel/role/{role}




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/panel/role/quas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/role/quas"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEpanel-role--role-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEpanel-role--role-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEpanel-role--role-"></code></pre>
</div>
<div id="execution-error-DELETEpanel-role--role-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEpanel-role--role-"></code></pre>
</div>
<form id="form-DELETEpanel-role--role-" data-method="DELETE" data-path="panel/role/{role}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEpanel-role--role-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEpanel-role--role-" onclick="tryItOut('DELETEpanel-role--role-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEpanel-role--role-" onclick="cancelTryOut('DELETEpanel-role--role-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEpanel-role--role-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>panel/role/{role}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>role</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="role" data-endpoint="DELETEpanel-role--role-" data-component="url" required  hidden>
<br>

</p>
</form>


## panel/user/role-assign/{user}




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/user/role-assign/sunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/user/role-assign/sunt"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-user-role-assign--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-user-role-assign--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-user-role-assign--user-"></code></pre>
</div>
<div id="execution-error-GETpanel-user-role-assign--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-user-role-assign--user-"></code></pre>
</div>
<form id="form-GETpanel-user-role-assign--user-" data-method="GET" data-path="panel/user/role-assign/{user}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-user-role-assign--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-user-role-assign--user-" onclick="tryItOut('GETpanel-user-role-assign--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-user-role-assign--user-" onclick="cancelTryOut('GETpanel-user-role-assign--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-user-role-assign--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/user/role-assign/{user}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="GETpanel-user-role-assign--user-" data-component="url" required  hidden>
<br>

</p>
</form>


## panel/user/role-assign/{user}




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/panel/user/role-assign/quisquam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/user/role-assign/quisquam"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTpanel-user-role-assign--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTpanel-user-role-assign--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTpanel-user-role-assign--user-"></code></pre>
</div>
<div id="execution-error-POSTpanel-user-role-assign--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpanel-user-role-assign--user-"></code></pre>
</div>
<form id="form-POSTpanel-user-role-assign--user-" data-method="POST" data-path="panel/user/role-assign/{user}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTpanel-user-role-assign--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTpanel-user-role-assign--user-" onclick="tryItOut('POSTpanel-user-role-assign--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTpanel-user-role-assign--user-" onclick="cancelTryOut('POSTpanel-user-role-assign--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTpanel-user-role-assign--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>panel/user/role-assign/{user}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="POSTpanel-user-role-assign--user-" data-component="url" required  hidden>
<br>

</p>
</form>


## panel/user




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-user" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-user"></code></pre>
</div>
<div id="execution-error-GETpanel-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-user"></code></pre>
</div>
<form id="form-GETpanel-user" data-method="GET" data-path="panel/user" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-user" onclick="tryItOut('GETpanel-user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-user" onclick="cancelTryOut('GETpanel-user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/user</code></b>
</p>
</form>


## panel/user/create




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/user/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/user/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-user-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-user-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-user-create"></code></pre>
</div>
<div id="execution-error-GETpanel-user-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-user-create"></code></pre>
</div>
<form id="form-GETpanel-user-create" data-method="GET" data-path="panel/user/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-user-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-user-create" onclick="tryItOut('GETpanel-user-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-user-create" onclick="cancelTryOut('GETpanel-user-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-user-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/user/create</code></b>
</p>
</form>


## panel/user




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/panel/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTpanel-user" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTpanel-user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTpanel-user"></code></pre>
</div>
<div id="execution-error-POSTpanel-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpanel-user"></code></pre>
</div>
<form id="form-POSTpanel-user" data-method="POST" data-path="panel/user" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTpanel-user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTpanel-user" onclick="tryItOut('POSTpanel-user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTpanel-user" onclick="cancelTryOut('POSTpanel-user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTpanel-user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>panel/user</code></b>
</p>
</form>


## panel/user/{user}/edit




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/user/quis/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/user/quis/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-user--user--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-user--user--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-user--user--edit"></code></pre>
</div>
<div id="execution-error-GETpanel-user--user--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-user--user--edit"></code></pre>
</div>
<form id="form-GETpanel-user--user--edit" data-method="GET" data-path="panel/user/{user}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-user--user--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-user--user--edit" onclick="tryItOut('GETpanel-user--user--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-user--user--edit" onclick="cancelTryOut('GETpanel-user--user--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-user--user--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/user/{user}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="GETpanel-user--user--edit" data-component="url" required  hidden>
<br>

</p>
</form>


## panel/user/{user}




> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/panel/user/quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/user/quia"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTpanel-user--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTpanel-user--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTpanel-user--user-"></code></pre>
</div>
<div id="execution-error-PUTpanel-user--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTpanel-user--user-"></code></pre>
</div>
<form id="form-PUTpanel-user--user-" data-method="PUT" data-path="panel/user/{user}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTpanel-user--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTpanel-user--user-" onclick="tryItOut('PUTpanel-user--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTpanel-user--user-" onclick="cancelTryOut('PUTpanel-user--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTpanel-user--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>panel/user/{user}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>panel/user/{user}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="PUTpanel-user--user-" data-component="url" required  hidden>
<br>

</p>
</form>


## panel/user/{user}




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/panel/user/exercitationem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/user/exercitationem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEpanel-user--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEpanel-user--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEpanel-user--user-"></code></pre>
</div>
<div id="execution-error-DELETEpanel-user--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEpanel-user--user-"></code></pre>
</div>
<form id="form-DELETEpanel-user--user-" data-method="DELETE" data-path="panel/user/{user}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEpanel-user--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEpanel-user--user-" onclick="tryItOut('DELETEpanel-user--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEpanel-user--user-" onclick="cancelTryOut('DELETEpanel-user--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEpanel-user--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>panel/user/{user}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="DELETEpanel-user--user-" data-component="url" required  hidden>
<br>

</p>
</form>


## panel/contact/messages




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/panel/contact/messages" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/panel/contact/messages"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpanel-contact-messages" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpanel-contact-messages"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpanel-contact-messages"></code></pre>
</div>
<div id="execution-error-GETpanel-contact-messages" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpanel-contact-messages"></code></pre>
</div>
<form id="form-GETpanel-contact-messages" data-method="GET" data-path="panel/contact/messages" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpanel-contact-messages', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpanel-contact-messages" onclick="tryItOut('GETpanel-contact-messages');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpanel-contact-messages" onclick="cancelTryOut('GETpanel-contact-messages');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpanel-contact-messages" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>panel/contact/messages</code></b>
</p>
</form>



