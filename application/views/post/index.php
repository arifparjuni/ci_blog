<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>Add New Post</h3>
            <form action="" method="post">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Title">
                </div>
                <div class="form-group">
                    <label>Contents</label>
                    <textarea name="contents" id="summernote"></textarea>
                </div>
                <button type="submit" class="btn btn-primary float-right">Submit</button>
                <a class="btn btn-success" href="<?= base_url('post/daftarPost'); ?>">Daftar Post</a>
            </form>
        </div>
    </div>
</div>