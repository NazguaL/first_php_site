<header class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
    <a class="navbar" style="color:white"><b>vIT News</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{% url 'articles-home' %}">Главная</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{% url 'contacts' %}">Контакты</a>
            </li>
        </ul>
    </div>
    <div class="navbar-nav">
        <a href="#" class="btn btn-outline-secondary mr-2">Регистрация</a>
        <a href="#" class="btn btn-outline-secondary">Вход</a>
    </div>
</header>