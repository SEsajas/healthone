<?php
global $logout
?>
<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/home"><img id="logo" src="/Pictures/New Project.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="/member/home">Home</a>
                </li>

            </ul>
        </div>
        <a class="btn btn-sm btn-outline-secondary yellow" href="/logout">Log out</a>
    </div>
</nav>