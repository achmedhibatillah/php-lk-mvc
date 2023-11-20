
<div class="card w-50 mx-auto py-4 mt-5">
            <h2 class="py-2 px-4">Edit Barang</h2>
            <form action="../update/<?= $model['id'] ?>" method="post">
                <div class="py-2 px-4">
                    <label class="form-label" for="nameInput">Name</label>
                    <input class="form-control" type="text" name="name" id="nameInput" value="<?= $model['nama'] ?>">
                </div>
                <div class="py-2 px-4">
                    <label class="form-label" for="qtyInput">Quantity</label>
                    <input class="form-control" type="number" name="qty" id="qtyInput" value="<?= $model['kuantitas'] ?>">
                </div>
                <div class="py-2 px-4">
                    <input class="btn btn-success" type="submit" value="Update">
                </div>
            </form>
</div>
