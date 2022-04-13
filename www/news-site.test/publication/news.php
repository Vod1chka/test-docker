<?php require_once "../header.php"; ?>
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

    <title>Предложить новость</title>
</head>
<body class="modal modal-signin position-static d-block bg-dark py-5 text-center" tabindex="-1" role="dialog"
      id="modalSignin">
    <form class="form-signin needs-validation" method="post" action="save_news.php">
        <?php require_once "../menu.php"; ?>

        <!-- Front Side -->
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-5 shadow">

                <!-- Header -->
                <div class="modal-header p-5 pb-4 border-bottom-0">
                    <h2 class="fw-bold mb-0">Предложение новости</h2>
                    <button onclick="document.location='../'" type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>

                <?php if (isset($_SESSION['nmsg'])): ?>
                    <div class="alert alert-success" role="alert"><h5><?php echo $_SESSION['nmsg']; ?></h5>
                        <small><p class="regtext"><a href="/">Вернуться на главную</a></p></small> 
                    </div>
                <?php endif; ?>


                <!-- News Form -->
                <div class="modal-body p-5 pt-0">
  
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control rounded-4" id="title" name="ntitle" placeholder="ntitle"
                               required>
                        <label for="title">Заголовок</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control rounded-4" id="ntext" name="ntext" placeholder="ntext"
                               required>
                        <label for="ntext">Краткое описание статьи</label>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="newstext" textarea name="newstext" placeholder="newstext"
                                  style="height: 100px" required></textarea>
                        <label for="newstext">Полный текст статьи</label>
                    </div>


                    <!-- Triggering button -->
                    <button class="w-100 py-2 mb-2 btn btn-outline-dark rounded-4" id="submitBtn" type="submit">
                        Опубликовать
                    </button>
                </div>
            </div>
        </div>
    </form>
</body>