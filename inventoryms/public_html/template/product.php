<script type="text/javascript" src="../main.js"></script>

<!-- Modal -->
<div class="modal fade" id="product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


      <form id="product_form">
        <div class="form-row">
            <div class="form-group col-md-6">
          <label>Date</label>
          <input type="text" class="form-control" name="added_date" id="added_date" value="<?php echo date("y-m-d");?>" readonly>
        </div>


    <div class="form-group col-md-6">
      <label>product name</label>
      <input type="text" class="form-control"name="product_name" id="product_name">
    </div>
  </div>

  <div class="form-group">
    <label>category</label>
    <select class="form-control" id="select_cat" name="select_cat" required/>
</select>
  </div>


  <div class="form-group">
    <label>brand</label>
    <select class="form-control"  class="form-control" name="select_brand" id="select_brand" placeholder="Apartment, studio, or floor">
    </select>
  </div>

  <div class="form-group">
      <label>product price</label>
      <input type="text" class="form-control" name="product_price" id="product_price">
    </div>

    <div class="form-group">
      <label>quantity</label>
      <input type="text" class="form-control" name="product_qty" id="product_qty">

  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>




