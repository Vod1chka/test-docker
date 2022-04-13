<?php require_once "database/db.php"; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
            integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
            crossorigin="anonymous">
    </script>
    <title>Новостная лента</title>
</head>
<body>
<?php require_once "menu.php"; ?>
<div class="container mt-5">
    <h3>Статьи</h3>

    <?php $results = $mysql->query("SELECT * FROM `mynews` ORDER BY id DESC LIMIT 15"); ?>
    <?php foreach ($results as $row): ?>

        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal"><?php echo htmlspecialchars($row['ntitle'], ENT_QUOTES); ?></h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><?php echo htmlspecialchars($row['ntext'], ENT_QUOTES); ?></li>
                    </ul>
                    <button type="button" class="w-100 btn btn-sm-2 btn-outline-secondary" data-toggle="collapse"
                            data-target="#collapseExample<?php echo($row['id']); ?>" aria-expanded="false">Подробнее
                    </button>
                    <div class="collapse" id="collapseExample<?php echo($row['id']); ?>">
                        <div class="card card-block">
                            <br>
                            <p class="card-header py-3"> <?php echo htmlspecialchars($row['newstext'], ENT_QUOTES); ?></p></br>
                        </div>
                    </div>

                    <!--  -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-10"><br>Дата публикации: <?php echo (new DateTime($row['ndate']))->format('d/m/Y');?></br>
                                Время публикации: <?php echo (new DateTime($row['ndate']))->format('H:i:s');?></div>
                            <div class="col-md-2"><br>Автор поста:</br> <?php echo htmlspecialchars($row['nuser'], ENT_QUOTES); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</body>
</html>