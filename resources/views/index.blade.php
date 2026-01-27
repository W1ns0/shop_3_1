
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goods</title>
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}" type="image/x-icon">
    <script defer src="{{asset('assets/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
<header>
    <nav class="mt-3 d-flex justify-content-between fs-2">
        <a href="category.html" class="text-primary text-decoration-none">Category</a>
        <a href="index.html" class="text-primary text-decoration-none">Goods</a>
        <a href="orders.html" class="text-primary text-decoration-none">Orders</a>
        <div>
            <a href="login.html" class="login text-decoration-none">Login</a>
        </div>
    </nav>
    <h1 class="d-flex justify-content-center pt-3">Goods</h1>
</header>
<main>
    <div class="container py-5">
        <h1 class="mb-4">Categories</h1>
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle fs-5">
                <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Count</th>
                    <th class="text-end">Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Electronic</td>
                    <td>Technic and electronic devices</td>
                    <td>1 234</td>
                    <td class="text-end">
                        <div class="btn-group" role="group">
                            <a href="category_view.html" type="button" class="btn btn-lg btn-outline-primary no-reverse">
                                <img src="{{asset('assets/img/icons/eye.svg')}}" alt="eye" class="action-image">
                            </a>
                            <a href="add_category.html" type="button" class="btn btn-lg btn-outline-success no-reverse">
                                <img src="{{asset('assets/img/icons/pencil.svg')}}" alt="eye" class="action-image">
                            </a>
                            <a href="" type="button" class="btn btn-lg btn-outline-danger no-reverse">
                                <img src="{{asset('assets/img/icons/trash.svg')}}" alt="eye" class="action-image">
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Cloth</td>
                    <td>Clothes and rags</td>
                    <td>1 234</td>
                    <td class="text-end">
                        <div class="btn-group" role="group">
                            <a href="category_view.html" type="button" class="btn btn-lg btn-outline-primary no-reverse">
                                <img src="{{asset('assets/img/icons/eye.svg')}}" alt="eye" class="action-image">
                            </a>
                            <a href="add_category.html" type="button" class="btn btn-lg btn-outline-success no-reverse">
                                <img src="{{asset('assets/img/icons/pencil.svg')}}" alt="eye" class="action-image">
                            </a>
                            <a href="" type="button" class="btn btn-lg btn-outline-danger no-reverse">
                                <img src="{{asset('assets/img/icons/trash.svg')}}" alt="eye" class="action-image">
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Books</td>
                    <td>Books and magazines</td>
                    <td>1 234</td>
                    <td class="text-end">
                        <div class="btn-group" role="group">
                            <a href="category_view.html" type="button" class="btn btn-lg btn-outline-primary no-reverse">
                                <img src="{{asset('assets/img/icons/eye.svg')}}" alt="eye" class="action-image">
                            </a>
                            <a href="add_category.html" type="button" class="btn btn-lg btn-outline-success no-reverse">
                                <img src="{{asset('assets/img/icons/pencil.svg')}}" alt="eye" class="action-image">
                            </a>
                            <a href="" type="button" class="btn btn-lg btn-outline-danger no-reverse">
                                <img src="{{asset('assets/img/icons/trash.svg')}}" alt="eye" class="action-image">
                            </a>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>
</body>
</html>
