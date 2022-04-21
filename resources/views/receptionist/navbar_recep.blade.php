<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white container mt-4 rounded-20 border-dark">
    <div class="container">
      <a class="navbar-brand" href="/receptionist">Di's Hotel - Receptionist</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end"id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/receptionist">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/order_recep">Order</a>
          </li>
          <li class="nav-item2">
            <form action="/logout" method="POST">
              @csrf
              <button class="nav-link btn btn-login active"><b>Log Out</b></button>
          </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>
