<div class="col-md-3">
    <div class="panel panel-default panel-flush">
        <div class="panel-heading">
            Admin Panel
        </div>

        <div class="panel-body">
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <!-- <a href="{{ url('/admin') }}">
                        Dashboard
                    </a> -->
                    <a href="{{ url('/users') }}">
                        Users
                    </a>
                    <a href="{{ url('/requestforms') }}">
                        Forms Requests
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
