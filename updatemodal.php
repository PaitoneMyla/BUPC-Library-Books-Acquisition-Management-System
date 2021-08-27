<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="#exampleModalLabel">Update materials</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
                    <form method="POST" action="update.php" enctype="multipart/form-data">
                     <div class="form-group" style="margin-top:10px;">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Accession Number</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="accessionno" required>
                            </div>
                        </div>
                    </div>


                    <div class="form-group" style="margin-top:10px;">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Copy Number</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="copyno" required>
                            </div>
                        </div>
                    </div>


                    <div class="form-group" style="margin-top:10px;">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Class</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="class" required>
                            </div>
                        </div>
                    </div>


                    <div class="form-group" style="margin-top:10px;">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Author</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="author" required>
                            </div>
                        </div>
                    </div>
                    

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Title</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="title" required>
                            </div>
                        </div>
                    </div>


                    <div class="form-group" style="margin-top:10px;">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Edition</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="edition" required>
                            </div>
                        </div>
                    </div>
                    

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Volume</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="volume" required>
                            </div>
                        </div>
                    </div>


                    <div class="form-group" style="margin-top:10px;">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Page</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="page" required>
                            </div>
                        </div>
                    </div>


                    <div class="form-group" style="margin-top:10px;">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Sources of fund</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="srcfnd" required>
                            </div>
                        </div>
                    </div>
                    

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Price</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="price" required>
                            </div>
                        </div>
                    </div>


                    <div class="form-group" style="margin-top:10px;">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Publisher</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="publisher" required>
                            </div>
                        </div>
                    </div>


                    <div class="form-group" style="margin-top:10px;">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Year</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="year" required>
                            </div>
                        </div>
                    </div>
                    

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Remarks</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="remarks" required>
                            </div>
                        </div>
                    </div>
                    
                     <div class="form-group">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Photo:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="file" name="photo" required>
                            </div>
                        </div>
                    </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Update</button>
               
        </div>
   </form>
      </div>
      
    </div>
  </div>
</div>