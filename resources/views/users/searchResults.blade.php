@if(count($searchUsers)>0)
    @foreach($searchUsers as $user)
        <b>{{$user->nome}}</b> <br>
    @endforeach

    <div class="form-group">
        Nome:<input type="search" name="nome" id="nome" class="form-control" required="required"
                value="{{$first->nome}}">
    </div>
    <div class="form-group">
        Livro da factura:<input type="number" name="factura" id="factura" value="{{$first->factura}}"
               class="form-control" required="required">
    </div>

    <div class="form-group">
        Numero do Contracto:<input type="numbert" name="contracto" id="contracto" value="{{$first->contracto}}"
               class="form-control" required="required" >
    </div>
    <div class="form-group">
        Contacto:<input type="number" name="celular" id="celular" value="{{$first->celular}}"
               class="form-control" required="required">
    </div>
    <div>
        <input type="hidden" value="{{$first->id}}" id="hidden">
    </div>
@else
    <b>Esse cliente nao se encontra cadastrado do sistema</b>
@endif