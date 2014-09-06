<div class="row">  
  <div class="col-md-10 col-md-offset-2">
      <form class="form-horizontal text-primary lead" style="margin-top:10px;" method="POST" action="codetaking.php">
        <div class="form-group">
            <label for="menu" class="control-label col-md-2">Code Name</label>
            <div class="col-md-6">
<input type="text" name="menu" class="form-control text-warning">
            </div>
        </div>
        <div class="form-group">
            <label style="color:#0033FF;" for="lang" class="control-label col-md-2">Language</label>
            <div class="col-md-6">
<textarea name="lang" cols="80" rows="3" class=" rounded form-control text-warning"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="desc" class="control-label col-md-2">Description</label>
            <div class="col-md-6">
<textarea name="desc" cols="80" rows="3" class="form-control text-warning"></textarea>
            </div>
        
        </div>
        <div class="form-group">
            <label for="path" class="control-label col-md-2">Location</label>
            <div class="col-md-6"><textarea name="path" cols="80" rows="3" class="form-control text-warning"></textarea></div>
        </div>
         <div class="form-group">
            <label for="fav" class="control-label col-md-2">Favorite</label>
            <div class="col-md-6"><select name="fav" class="form-control text-warning">
                <option value="1">1</option>
                <option value="0">0</option>
            </select></div>
        </div>
        <div class="form-group">
            <div class="col-md-10 col-md-offset-2"><input type="submit" class="btn btn-default text-primary" name="submit"></div>
        </div>
    </form>
  </div>  
</div>