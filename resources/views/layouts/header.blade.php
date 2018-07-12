<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('home') }}">SuperName</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('currencies') }}">Currencies</a></li>
            <li><a href="{{ route('add-currency') }}">Add</a></li>
        </ul>
    </div>
</nav>