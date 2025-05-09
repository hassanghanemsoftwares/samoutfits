<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">

    <!-- stop enter key from submitting form -->
    <script type="text/javascript">
        window.addEventListener('keydown', function(e) {
            if (e.keyIdentifier == 'U+000A' || e.keyIdentifier == 'Enter' || e.keyCode == 13) {
                if (e.target.nodeName == 'INPUT' && e.target.type == 'text') {
                    e.preventDefault();
                    return false;
                }
            }
        }, true);
    </script>

</head>



<h1>edit product</h1>



<a href="<?php echo base_url(); ?>products/generate_barcode_edit/<?php echo $product['barcode']; ?>">generate barcode</a>


<?php echo validation_errors(); ?>
<?php echo form_open('/products/update/' . $product['barcode']); ?>
<div class="form-group">
    <label>barcode</label>
    <?php if ($this->session->userdata('max_bc')) { ?>
        <input type="text" class="form-control" name="barcode" placeholder="add barcode" value="<?php echo $this->session->userdata('max_bc'); ?>">
    <?php } else { ?>
        <input type="text" class="form-control" name="barcode" placeholder="add barcode" value="<?php echo $product['barcode']; ?>">
    <?php } ?>

</div>

<div class="form-group">


    <label>description</label>
    <textarea id="editor1" class="form-control" name="desc" placeholder="Add description"> <?php echo $product['description']; ?> </textarea>
</div>

<div class="form-group">
    <label>Category</label>
    <select name="category" class="form-control">
        <option value="">category 1</option>
        <!-- <?php foreach ($categories as $category) : ?>
		  	<option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
		  <?php endforeach; ?> -->
    </select>
</div>

<div class="form-group">
    <label>open quantity</label>
    <input type="text" class="form-control" name="openq" placeholder="Add open quantity" value="<?php echo $product['open_qty']; ?>">
</div>

<div class="form-group">
    <label>open cost</label>
    <input type="text" class="form-control" name="openc" placeholder="Add open cost" value="<?php echo $product['open_cost']; ?>">
</div>

<div class="form-group">
    <label>Price</label>
    <input type="text" class="form-control" name="price" placeholder="Add price" value="<?php echo $product['price']; ?>">
</div>

<div class="form-group">
    <label>sale discount</label>
    <input type="text" class="form-control" name="sdiscount" placeholder="Add price" value="<?php echo $product['sale_discount']; ?>">
</div>

<div class="form-group">
    <label>purchase discount</label>
    <input type="text" class="form-control" name="pdiscount" placeholder="Add price" value="<?php echo $product['purch_discount']; ?>">
</div>

<!-- <div class="form-group">
    <label>Upload Image</label>
    <input type="file" name="userfile" size="20">
</div> -->


<button type="submit" class="btn btn-primary">edit</button>
</form>