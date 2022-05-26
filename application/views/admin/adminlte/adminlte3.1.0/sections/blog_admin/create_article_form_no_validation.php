<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">
                    Create a new article
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="<?php echo base_url('admin/blog_admin/create') ?>" method="post">
                    <input type="hidden" name="<?php echo ($this->security->get_csrf_token_name()); ?>" value="<?php echo ($this->security->get_csrf_hash()); ?>" />
                    <div class="container-fluid">
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <span class="btn btn-link" data-toggle="collapse" data-target="#collapseAuthor" aria-expanded="false" aria-controls="collapseAuthor">
                                            Title, Author, URL and description
                                        </span>
                                    </h5>
                                </div>
                                <div id="collapseAuthor" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="title">Title:</label>
                                                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter the title" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="url">URL:</label>
                                                    <input type="text" class="form-control" name="url" id="url" placeholder="Enter the URL for the article" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="author">Author:</label>
                                                    <select class="form-control select2bs4" style="width: 100%;" name="author" id="author">
                                                        <option value="" disabled selected>Select the Author</option>
                                                        <?php
                                                        foreach ($authors as $author) {
                                                            echo "<option value=\"" . $author['username'] . "\">" . $author['name'] . " (" . $author['username'] . ")" . "</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="description">Description:</label>
                                                    <input type="text" class="form-control" name="description" id="description" placeholder="Enter a description" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <span class="btn btn-link" data-toggle="collapse" data-target="#collapseCategories" aria-expanded="false" aria-controls="collapseCategories">
                                            Categories and Tags
                                        </span>
                                    </h5>
                                </div>
                                <div id="collapseCategories" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="category">Category:</label>
                                                    <select class="form-control select2bs4" style="width: 100%;" name="category" id="category">
                                                        <option value="" disabled selected>Select the Category</option>
                                                        <?php
                                                        foreach ($categories as $category) {
                                                            echo "<option value=\"" . $category['category'] . "\">" . $category['category'] . "</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="subcategories">Sub-categories:</label>
                                                    <select class="select2bs4" multiple="multiple" data-placeholder="Select the sub-categories" style="width: 100%;" name="subcategories[]" id="subcategories">
                                                        <?php
                                                        foreach ($subcategories as $subcategory) {
                                                            echo "<option value=\"" . $subcategory['subcategory'] . "\">" . $subcategory['subcategory'] . "</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="tags">Tags:</label>
                                                    <select class="select2bs4" multiple="multiple" data-placeholder="Select the sub-categories" style="width: 100%;" name="tags[]" id="tags">
                                                        <?php
                                                        foreach ($tags as $tag) {
                                                            echo "<option value=\"" . $tag['tag'] . "\">" . $tag['tag'] . "</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <span class="btn btn-link" data-toggle="collapse" data-target="#collapseDates" aria-expanded="false" aria-controls="collapseDates">
                                            Dates
                                        </span>
                                    </h5>
                                </div>
                                <div id="collapseDates" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="created_at">Created at:</label>
                                                    <input type="datetime-local" class="form-control" name="created_at" id="created_at" placeholder="Created at..." value="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="current_state">Released:</label><br>
                                                    <input type="checkbox" id="current_state" name="current_state" checked data-bootstrap-switch data-off-color="danger" data-on-color="success" value="1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="release_at">Release at:</label>
                                                    <input type="datetime-local" class="form-control" name="release_at" id="release_at" placeholder="Released at..." value="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="expire_at">Expire at:</label>
                                                    <input type="datetime-local" class="form-control" name="expire_at" id="expire_at" placeholder="Expire at..." value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="modified_by">Modified by:</label>
                                                    <input type="text" class="form-control" name="modified_by" id="modified_by" placeholder="Modified by...." value="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="modified_at">Modified at:</label>
                                                    <input type="datetime-local" class="form-control" name="modified_at" id="modified_at" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content">Content:</label>
                            <textarea id="content" name="content">
                                Place <em>here</em> <u>the</u> <strong>content</strong>
                            </textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save article</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.col-->
</div>
<!-- ./row -->