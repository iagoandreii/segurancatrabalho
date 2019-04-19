<div class="container">
    <table class="table table-success bg-light table-hover" style="margin-top: 30px;">
        <thead>
            <tr class="text-center" char="active">
                @yield('tabletitle')
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr class="text-center">
                @yield('tablebody')
                <th scope="row"><button type="button" class="text-center btn btn-outline-success btn-sm" data-toggle="modal" data-target="#visualization">Visualizar</button></th>
            </tr>
        </tbody>
    </table>
</div>