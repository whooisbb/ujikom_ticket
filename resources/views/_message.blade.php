<style type="text/css">
    .alert {
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        position: fixed;
        top: 20px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 1050;
        width: 80%;
        max-width: 600px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .alert h4 {
        margin-top: 0;
        color: inherit;
    }

    .alert .alert-link {
        font-weight: bold;
    }

    .alert > p + p {
        margin-top: 5px;
    }

    .alert-dismissable,
    .alert-dismissible {
        padding-right: 35px;
    }

    .alert-dismissable .close,
    .alert-dismissible .close {
        position: relative;
        top: -2px;
        right: -21px;
        color: inherit;
    }

    .alert-success {
        background-color: #dff0d8;
        border-color: #d6e9c6;
        color: #3c763d;
    }

    .alert-success .alert-link {
        color: #2b542c;
    }

    .alert-info {
        background-color: #d9edf7;
        border-color: #bce8f1;
        color: #31708f;
    }

    .alert-info hr {
        border-top-color: #a6e1ec;
    }

    .alert-info .alert-link {
        color: #245269;
    }

    .alert-warning {
        background-color: #fcf8e3;
        border-color: #faebcc;
        color: #8a6d3b;
    }

    .alert-warning hr {
        border-top-color: #f7e1b5;
    }

    .alert-warning .alert-link {
        color: #66512c;
    }

    .alert-danger {
        background-color: #f2dede;
        border-color: #ebccd1;
        color: #a94442;
    }

    .alert-danger hr {
        border-top-color: #e4b9c0;
    }

    .alert-danger .alert-link {
        color: #843534;
    }
</style>

@if(!empty(session('success')))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(!empty(session('error')))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif