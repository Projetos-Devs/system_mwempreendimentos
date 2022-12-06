
<div class="modal fade" id="modal-deletar-{{$orcamento->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 text-black" id="exampleModalLabel">ATENÇÃO!</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
          <div class="text-black text-center">
          <p>Deseja realmente deletar o orçamento do cliente</p>
          <p><strong>{{ $orcamento->cliente->nome}} ?</strong></p>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>

          <form action="{{route('orcamentos.destroyorcamento',$orcamento->id)}}" method="POST">
            @csrf
            @method('DELETE')
          <button type="submit" class="btn btn-danger">Confirmar</button>
        </form>
        </div>
      </div>
    </div>
  </div>