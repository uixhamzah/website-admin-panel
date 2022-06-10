{{-- Detail --}}
@foreach ($items as $item)
  <div class="modal fade text-left" id="detail-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModalLabel1">Detail Pesanan</h5>
          <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
            <i data-feather="x"></i>
          </button>
        </div>
        <div class="modal-body">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, quibusdam. Commodi quos blanditiis, tempora, omnis doloremque mollitia consequuntur reiciendis nihil voluptatum quis nesciunt accusantium cum quas quasi eum. Aliquid, in? Eius ratione voluptatibus sed eaque ut? Reprehenderit eaque laudantium ab a autem. Velit maiores magni atque, iste aliquid dicta minus et sunt repudiandae facere rem quibusdam voluptates repellat, minima assumenda, iusto aspernatur mollitia! Iste possimus ad eius libero. Laudantium deserunt enim laboriosam? Voluptatibus laboriosam aut deserunt dolorem aliquid facere dolor sit veritatis magni repudiandae exercitationem non error, molestiae, nesciunt delectus nisi? Numquam iusto eius maxime in quidem voluptatem deleniti rerum?
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn" data-bs-dismiss="modal">
            <i class="bx bx-x d-block d-sm-none"></i>
            <span class="d-none d-sm-block">Close</span>
          </button>
          <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
            <i class="bx bx-check d-block d-sm-none"></i>
            <span class="d-none d-sm-block">Accept</span>
          </button>
        </div>
      </div>
    </div>
  </div>
@endforeach