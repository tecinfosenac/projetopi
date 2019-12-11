@include('layout._includes.header')
<div class="center">
    <h4>Lista de Segmentos</h4>
</div>
 <div class="container">
    <div class="row">
        <table class="centered striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Segmento</th>

                    {{-- <th colspan="2">Ações</th> --}}
                </tr>
            </thead>

                    <tr>
                        <td>1</td>
                        <td>artes visuais</td>
{{--
                        <td><a href="{{route('editSegments')}}" class="btn-floating green waves-effect waves-light btn "><i class="material-icons">edit</i></a></td>
                        <td><a href="#modal1?=" class="waves-effect waves-light btn-floating modal-trigger red"><i class="material-icons">delete</i></a></td> --}}
                    </tr>


        </table>
 </div>

 @include('layout._includes.footer')
