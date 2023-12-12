<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавление данных</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body class="bg-dark text-white">
    <div class="d-flex justify-content-center align-items-center vh-100">
        <form action="upload1.php" method="POST">
        <div class="mb-3">
            <label for="surname" class="form-label">Фамилия</label>
            <input type="text" class="form-control" name="surname">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Имя</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label for="patronymic" class="form-label">Отчество</label>
            <input type="text" class="form-control" name="patronymic">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Номер телефона</label>
            <input type="phone" class="form-control" name="phone">
        </div>
        <div class="mb-3">
            <label for="city" class="form-label">Город:</label>
            <select class="form-select" name="city">
                <option selected>Выберите город</option>
                <option value="Прокопьевск">Прокопьевск</option>
                <option value="Новокузнецк">Новокузнецк</option>
                <option value="Кемероово">Кемероово</option>
                <option value="Пекин">Пекин</option>
                <option value="Шанхай">Шанхай</option>
                <option value="Астана">Астана</option>
                <option value="Караганда">Караганда</option>
                <option value="Минск">Минск</option>
                <option value="Гомель">Гомель</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="country" class="form-label">Страна:</label>
            <select class="form-select" name="country">
                <option selected>Выберите страну</option>
                <option value="Россия">Россия</option>
                <option value="Китай">Китай</option>
                <option value="Казахстан">Казахстан</option>
                <option value="Беларусь">Беларусь</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="photo" class="form-label">Фотография:</label>
            <input type="file" class="form-control" name="photo">
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
    </div>
</body>
</html>