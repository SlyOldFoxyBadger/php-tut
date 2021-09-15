<?php if (!empty($errors)): ?>
        <div class="alert alert-danger">
            <?php foreach ($errors as $error): ?>
                <div><?php echo $error ?></div>
            <?php endforeach; ?>
        </div>
<?php endif; ?>

<form action="" method="POST" enctype="multipart/form-data">

    <?php if ($product['image']): ?>
        <img class="update-image" src="/<?php echo $product['image']; ?>" alt="">
    <?php endif; ?>

    <div class="mb-3">
        <label>Product Image</label>
        <br>
        <input name="image" type="file">
    </div>

    <div class="mb-3">
        <label>Product title</label>
        <input name="title" type="text" class="form-control" value="<?php echo $title ?>">
    </div>

    <div class="mb-3">
        <label>Product description</label>
        <textarea name="description" class="form-control"><?php echo $description ?></textarea>
    </div>

    <div class="mb-3">
        <label>Product price</label>
        <input name="price" type="number" step=".01" class="form-control" value="<?php echo $price ?>">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    
</form>