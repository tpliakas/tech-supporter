<?php
    $pageTitle = 'Add client';
    include('includes/header.php');
?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form id="addclientform" method="post" action="addclienttodb.php">
                    <h2>Add New Client</h2><br>
                    <div class="form-group">
                        <div class="col-sm-6 offset-sm-3">
                            <label for="firstName">First name</label>
                            <input type="text" id="firstName" name="firstname" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6 offset-sm-3">
                            <label for="lastName">Last name</label>
                            <input type="text" id="lastName" name="lastname" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6 offset-sm-3">
                            <label for="address">Address</label>
                                <div class="form-inline">
                                    <div class="col-xs-8">
                                        <input type="text" id="address" name="address" size="32" class="form-control">
                                    </div>
                                    <div class="col-xs-2">
                                        <label class="sr-only" for="no">No</label>
                                        <input type="text" id="no" size="5" name="number" placeholder="No" class="form-control">
                                    </div>
                                    <div class="col-xs-2">
                                        <label class="sr-only" for="pocode">PO code</label>
                                        <input type="text" id="pocode" name="pocode" size="5" placeholder="PO code" class="form-control">
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6 offset-sm-3">
                            <label for="comments">Comments</label>
                            <textarea rows="4" id="comments" name="comments" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 offset-sm-3">
                            <div class="form-inline">
                                <div class="form-group">
                                    <label for="mobile" class="col-sm-4 control-label">Mobile</label>
                                    <div class="col-sm-8">
                                        <input type="text" id="mobile" name="mobile" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 offset-sm-3">
                            <div class="form-inline">
                                <div class="form-group">
                                    <label for="email" class="col-sm-4 control-label">Email</label>
                                    <div class="col-sm-8">
                                        <input type="email" id="email" name="email" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <input type="email" name="email" size="27" placeholder="e-mail" required>
                    <input type="submit" class="button" name="submitclient" value="Submit">
                    <input type="button" class="button" onclick="location.href='index.php';" value="Cancel"/>
                </form>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
<?php
    include('includes/footer.php');
?>