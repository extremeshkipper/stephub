<div class="intro">
    <div class="container">
        <div class="row pb-2">
            <div class="col-md-3">
                <img class="mx-auto d-block img-large-logo" src="img/logo.jpg" alt="big logo">
            </div>
            <div class="col-md-9 text-left">
                <h2>Вітаємо, <?= $_SESSION['logged_user']['login']?>!</h2>
                <h5>Lorem ipsum dolor sit amet, consectetur</h5>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur culpa fugiat laudantium, nihil perferendis recusandae. </p>
            </div>
        </div>
        <div class="row pb-4">
            <div class="col">
                <a class="btn btn-lg my-btn-dark shadow-sm" href="create-announcement.php"><i class="fas fa-plus mr-2"></i>Створити нове оголошення</a>
            </div>
        </div>
    </div>
</div>