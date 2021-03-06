<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<div class="container-fluid d-flex h-100 justify-content-center align-items-center p-0">

    <div class="row bg-white shadow-sm">

        <div class="col border rounded p-4">
            <h3 class="text-center mb-4">Добавить элемент</h3>
            <form method="post" action="/">
                @csrf
                <div class="form-group">
                    <label for="name">Название</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="weight">Вес</label>
                    <input type="text" name="weight" class="form-control">
                </div>
                <div class="form-group">
                    <label for="color">Цвет</label>
                    <select name="color" class="form-select" aria-label="Default select example">
                        <option value="Красный">Красный</option>
                        <option value="Зеленый">Зеленый</option>
                        <option value="Синий">Синий</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary w-100 mt-3">Сохранить</button>
            </form>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(!empty(session('message')))
                <div class="alert alert-success">
                    {{session('message')}}
                    @endif
                </div>
        </div>
    </div>

</body>
</html>
