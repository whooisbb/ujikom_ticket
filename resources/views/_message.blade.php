<style type="text/css">
    alert {
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
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
        border-top-color: #c9e2be;
    }
    
    .alert-success .alert-link {
        color: #2b542c;
    }

    .alert-info {
        background-color: #d9edf7;
        border-color: #bce8f1;
        color : #31708f;
    }

    .alert-info hr {
        border-top-color: #a6e1ec;
    }

    .alert-info alert-link {
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

    .alert-warning alert-link {
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

    .alert-danger alert-link {
        color: #843534;
    }


</style>


@if(!empty(session('success')))
    <div class="alert alert-success" role="alert">
        <p>{{ session('success') }}</p>
    </div>
@endif

@if(!empty(session('error')))
    <div class="alert alert-danger" role="alert">
        <p>{{ session('error') }}</p>
    </div>
    @endif