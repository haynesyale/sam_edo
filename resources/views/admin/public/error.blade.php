@if(count($errors)>0)
<div id="flash-overlay-modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                <h4 class="modal-title" style="color: #e3101e;font-weight: 700;font-family: inherit;">错误提示</h4>
            </div>

            <div class="modal-body">
                @foreach($errors->all() as $v)
                    <p class="alert-danger" style="color: #e3101e;font-family: inherit;">{{$v}}</p>
                @endforeach
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endif
<script>
        $('#flash-overlay-modal').modal()
</script>
