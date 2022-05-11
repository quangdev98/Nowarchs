<div class="modal modal-danger fade" id="IdDestroyModal" tabindex="-1" role="dialog" aria-labelledby="Delete" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="" method="POST" id="destroyModal" name="delete-box">
                @csrf
                <div class="modal-header">

                </div>
                <div class="modal-body">
                    <p class="text-center font-bold mb-4">Bạn có muốn xoá không？</p>
                    <p class="text-center" id="contentModal"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn big bg-gray" data-bs-dismiss="modal">Trở lại</button>
                    <button type="submit" class="btn big bg-blue" name="action" value="delete">Xoá bỏ</button>
                </div>
            </form>
        </div>
    </div>
</div>
