<div class="card">
  <div class="card-header with-icon">
    {if $sub_view == ""}
      <div class="float-end">
        <a href="{$system['system_url']}/{$control_panel['url']}/movies/add_movie" class="btn btn-md btn-primary">
          <i class="fa fa-plus mr5"></i>{__("Add New Movie")}
        </a>
      </div>
    {elseif $sub_view == "genres"}
      <div class="float-end">
        <a href="{$system['system_url']}/{$control_panel['url']}/movies/add_genre" class="btn btn-md btn-primary">
          <i class="fa fa-plus mr5"></i>{__("Add New Genre")}
        </a>
      </div>
    {elseif $sub_view == "add_movie" || $sub_view == "edit_movie"}
      <div class="float-end">
        <a href="{$system['system_url']}/{$control_panel['url']}/movies" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i>{__("Go Back")}
        </a>
      </div>
    {elseif $sub_view == "add_genre" || $sub_view == "edit_genre"}
      <div class="float-end">
        <a href="{$system['system_url']}/{$control_panel['url']}/movies/genres" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i>{__("Go Back")}
        </a>
      </div>
    {/if}
    <i class="fa fa-film mr10"></i>{__("Movies")}
    {if $sub_view == "add_movie"} &rsaquo; {__("Add New Movie")}{/if}
    {if $sub_view == "edit_movie"} &rsaquo; {$data['title']}{/if}
    {if $sub_view == "genres"} &rsaquo; {__("Genres")}{/if}
    {if $sub_view == "add_genre"} &rsaquo; {__("Genres")} &rsaquo; {__("Add New Genre")}{/if}
    {if $sub_view == "edit_genre"} &rsaquo; {__("Genres")} &rsaquo; {$data['genre_name']}{/if}
  </div>

  {if $sub_view == ""}

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover js_dataTable">
          <thead>
            <tr>
              <th>{__("ID")}</th>
              <th>{__("Title")}</th>
              <th>{__("Source")}</th>
              <th>{__("Release")}</th>
              <th>{__("Paid")}</th>
              <th>{__("Actions")}</th>
            </tr>
          </thead>
          <tbody>
            {foreach $rows as $row}
              <tr>
                <td>
                  {$row['movie_id']}
                </td>
                <td>
                  <a target="_blank" href="{$system['system_url']}/movie/{$row['movie_id']}/{$row['movie_url']}">
                    <img class="tbl-image" src="{$row['poster']}">
                    {$row['title']}
                  </a>
                </td>
                <td>
                  {if $row['source_type'] == "youtube"}
                    <span class="badge rounded-pill badge-lg bg-danger">{__("YouTube")}</span>
                  {elseif $row['source_type'] == "vimeo"}
                    <span class="badge rounded-pill badge-lg bg-info">{__("Vimeo")}</span>
                  {elseif $row['source_type'] == "link"}
                    <span class="badge rounded-pill badge-lg bg-secondary">{__("Link")}</span>
                  {elseif $row['source_type'] == "uploaded"}
                    <span class="badge rounded-pill badge-lg bg-success">{__("Uploaded")}</span>
                  {/if}
                </td>
                <td>
                  {if $row['release_year']}{$row['release_year']}{else}{__("N/A")}{/if}
                </td>
                <td>
                  {if $row['is_paid']}
                    <span class="badge rounded-pill badge-lg bg-success">{__("Yes")}</span>
                  {else}
                    <span class="badge rounded-pill badge-lg bg-danger">{__("No")}</span>
                  {/if}
                </td>
                <td>
                  <a data-bs-toggle="tooltip" title='{__("Edit")}' href="{$system['system_url']}/{$control_panel['url']}/movies/edit_movie/{$row['movie_id']}" class="btn btn-sm btn-icon btn-rounded btn-primary">
                    <i class="fa fa-pencil-alt"></i>
                  </a>
                  <button data-bs-toggle="tooltip" title='{__("Delete")}' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="movie" data-id="{$row['movie_id']}">
                    <i class="fa fa-trash-alt"></i>
                  </button>
                </td>
              </tr>
            {/foreach}
          </tbody>
        </table>
      </div>
    </div>

  {elseif $sub_view == "add_movie"}

    <form class="js_ajax-forms" data-url="admin/movies.php?do=add_movie">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Movie Source")}
          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="source_url">
            <div class="form-text">
              {__("From YouTube, Vimeo or site.com/movie.mp4")}
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Or Upload Movie")}
          </label>
          <div class="col-md-9">
            <div class="x-image">
              <div class="x-image-success">
                {__("Uploaded Successfully")}
              </div>
              <button type="button" class="btn-close x-hidden js_x-image-remover" title='{__("Remove")}'>

              </button>
              <div class="x-image-loader">
                <div class="progress x-progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <i class="fa fa-video fa-lg js_x-uploader" data-type="video" data-handle="x-video"></i>
              <input type="hidden" class="js_x-image-input" name="source_upload" value="">
            </div>
            <div class="form-text">
              {__("Maximum file size is")} {$system['max_video_size']}{__("KB")} {__("and allowed extensions are")} {$system['video_extensions']}<br>
              {__("You can change the")} <a target="_blank" href="{$system['system_url']}/{$control_panel['url']}/settings/uploads">{__("Uploads Settings")}</a>
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Movie Title")}
          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="title">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Description")}
          </label>
          <div class="col-md-9">
            <textarea class="form-control" name="description" rows="3"></textarea>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("IMDB")}
          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="imdb_url">
            <div class="form-text">
              {__("IMDB Link, Example:")} <a target="_blank" href="https://www.imdb.com/title/tt0111161">https://www.imdb.com/title/tt0111161</a>
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Movie Stars")}
          </label>
          <div class="col-md-9">
            <textarea class="form-control" name="stars" rows="3"></textarea>
            <div class="form-text">
              {__("Separated by a comma (,) Example: Tom Hanks, Julia Roberts, Jim Carrey")}
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Release Year")}
          </label>
          <div class="col-md-9">
            <input type="number" class="form-control" name="release_year">
            <div class="form-text">
              {__("Movie release year, Example: 1995")}
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Duration")}
          </label>
          <div class="col-md-9">
            <input type="number" class="form-control" name="duration">
            <div class="form-text">
              {__("Movie duration in minutes, Example: 120")}
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Genres")}
          </label>
          <div class="col-md-9">
            <select class="form-select" multiple name="movie_genres[]">
              {foreach $genres as $genre}
                <option value="{$genre['genre_id']}">{__($genre['genre_name'])}</option>
              {/foreach}
            </select>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Poster")}
          </label>
          <div class="col-md-9">
            <div class="x-image">
              <button type="button" class="btn-close x-hidden js_x-image-remover" title='{__("Remove")}'>

              </button>
              <div class="x-image-loader">
                <div class="progress x-progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
              <input type="hidden" class="js_x-image-input" name="poster" value="">
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Paid")}
          </label>
          <div class="col-md-9">
            <label class="switch" for="is_paid">
              <input type="checkbox" name="is_paid" id="is_paid">
              <span class="slider round"></span>
            </label>
            <div class="form-text">
              {__("If you enable this option, users will have to pay to watch this movie.")}
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Price")}
          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="price">
            <div class="form-text">
              {__("How much user should pay to watch this movie, Example: 10")}
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Availability")}
          </label>
          <div class="col-md-9">
            <input type="number" class="form-control" name="available_for">
            <div class="form-text">
              {__("How many days user can watch this movie after purchase, Example: 30 (0 for unlimited)")}
            </div>
          </div>
        </div>

        <!-- success -->
        <div class="alert alert-success mt15 mb0 x-hidden"></div>
        <!-- success -->

        <!-- error -->
        <div class="alert alert-danger mt15 mb0 x-hidden"></div>
        <!-- error -->
      </div>
      <div class="card-footer text-end">
        <button type="submit" class="btn btn-primary">{__("Save Changes")}</button>
      </div>
    </form>

  {elseif $sub_view == "edit_movie"}

    <form class="js_ajax-forms" data-url="admin/movies.php?do=edit_movie&id={$data['movie_id']}">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Movie Source")}
          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="source_url" {if $data['source_type'] != 'uploaded'}value="{$data['source']}" {/if}>
            <div class="form-text">
              {__("From YouTube, Vimeo or site.com/movie.mp4")}
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Or Upload Movie")}
          </label>
          <div class="col-md-9">
            {if $data['source_type'] == 'uploaded' && $data['source']}
              <div class="x-image">
                <div class="x-image-success" style="display: block;">
                  {__("Uploaded Successfully")}
                </div>
                <button type="button" class="btn-close js_x-image-remover" title='{__("Remove")}'>

                </button>
                <div class="x-image-loader">
                  <div class="progress x-progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <i class="fa fa-video fa-lg js_x-uploader" data-type="video" data-handle="x-video"></i>
                <input type="hidden" class="js_x-image-input" name="source_upload" value="{$data['source']}">
              </div>
            {else}
              <div class="x-image">
                <div class="x-image-success">
                  {__("Uploaded Successfully")}
                </div>
                <button type="button" class="btn-close x-hidden js_x-image-remover" title='{__("Remove")}'>

                </button>
                <div class="x-image-loader">
                  <div class="progress x-progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <i class="fa fa-video fa-lg js_x-uploader" data-type="video" data-handle="x-video"></i>
                <input type="hidden" class="js_x-image-input" name="source_upload" value="">
              </div>
            {/if}
            <div class="form-text">
              {__("Maximum file size is")} {$system['max_video_size']}{__("KB")} {__("and allowed extensions are")} {$system['video_extensions']}<br>
              {__("You can change the")} <a target="_blank" href="{$system['system_url']}/{$control_panel['url']}/settings/uploads">{__("Uploads Settings")}</a>
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Movie Title")}
          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="title" value="{$data['title']}">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Description")}
          </label>
          <div class="col-md-9">
            <textarea class="form-control" name="description" rows="3">{$data['description']}</textarea>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("IMDB")}
          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="imdb_url" value="{$data['imdb_url']}">
            <div class="form-text">
              {__("IMDB Link, Example:")} <a target="_blank" href="https://www.imdb.com/title/tt0111161">https://www.imdb.com/title/tt0111161</a>
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Movie Stars")}
          </label>
          <div class="col-md-9">
            <textarea class="form-control" name="stars" rows="3">{$data['stars']}</textarea>
            <div class="form-text">
              {__("Separated by a comma (,) Example: Tom Hanks, Julia Roberts, Jim Carrey")}
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Release Year")}
          </label>
          <div class="col-md-9">
            <input type="number" class="form-control" name="release_year" value="{$data['release_year']}">
            <div class="form-text">
              {__("Movie release year, Example: 1995")}
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Duration")}
          </label>
          <div class="col-md-9">
            <input type="number" class="form-control" name="duration" value="{$data['duration']}">
            <div class="form-text">
              {__("Movie duration in minutes, Example: 120")}
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Genres")}
          </label>
          <div class="col-md-9">
            <select class="form-select" multiple name="movie_genres[]">
              {foreach $data['movies_genres'] as $genre}
                <option {if in_array($genre['genre_id'], $data['genres'])}selected{/if} value="{$genre['genre_id']}">{__($genre['genre_name'])}</option>
              {/foreach}
            </select>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Poster")}
          </label>
          <div class="col-md-9">
            {if $data['poster'] == ''}
              <div class="x-image">
                <button type="button" class="btn-close x-hidden js_x-image-remover" title='{__("Remove")}'>

                </button>
                <div class="loader loader_small x-hidden"></div>
                <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                <input type="hidden" class="js_x-image-input" name="poster">
              </div>
            {else}
              <div class="x-image" style="background-image: url('{$system['system_uploads']}/{$data['poster']}')">
                <button type="button" class="btn-close js_x-image-remover" title='{__("Remove")}'>

                </button>
                <div class="loader loader_small x-hidden"></div>
                <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                <input type="hidden" class="js_x-image-input" name="poster" value="{$data['poster']}">
              </div>
            {/if}
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Paid")}
          </label>
          <div class="col-md-9">
            <label class="switch" for="is_paid">
              <input type="checkbox" name="is_paid" id="is_paid" {if $data['is_paid']}checked{/if}>
              <span class="slider round"></span>
            </label>
            <div class="form-text">
              {__("If you enable this option, users will have to pay to watch this movie.")}
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Price")}
          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="price" value="{$data['price']}">
            <div class="form-text">
              {__("How much user should pay to watch this movie, Example: 10")}
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Availability")}
          </label>
          <div class="col-md-9">
            <input type="number" class="form-control" name="available_for" value="{$data['available_for']}">
            <div class="form-text">
              {__("How many days user can watch this movie after purchase, Example: 30 (0 for unlimited)")}
            </div>
          </div>
        </div>

        <!-- success -->
        <div class="alert alert-success mt15 mb0 x-hidden"></div>
        <!-- success -->

        <!-- error -->
        <div class="alert alert-danger mt15 mb0 x-hidden"></div>
        <!-- error -->
      </div>
      <div class="card-footer text-end">
        <button type="submit" class="btn btn-primary">{__("Save Changes")}</button>
      </div>
    </form>

  {elseif $sub_view == "genres"}

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover js_dataTable">
          <thead>
            <tr>
              <th>{__("ID")}</th>
              <th>{__("Title")}</th>
              <th>{__("Order")}</th>
              <th>{__("Actions")}</th>
            </tr>
          </thead>
          <tbody>
            {foreach $rows as $row}
              <tr>
                <td>{$row['genre_id']}</td>
                <td>{$row['genre_name']}</td>
                <td>{$row['genre_order']}</td>
                <td>
                  <a data-bs-toggle="tooltip" title='{__("Edit")}' href="{$system['system_url']}/{$control_panel['url']}/movies/edit_genre/{$row['genre_id']}" class="btn btn-sm btn-icon btn-rounded btn-primary">
                    <i class="fa fa-pencil-alt"></i>
                  </a>
                  <button data-bs-toggle="tooltip" title='{__("Delete")}' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="movie_genre" data-id="{$row['genre_id']}">
                    <i class="fa fa-trash-alt"></i>
                  </button>
                </td>
              </tr>
            {/foreach}
          </tbody>
        </table>
      </div>
    </div>

  {elseif $sub_view == "add_genre"}

    <form class="js_ajax-forms" data-url="admin/movies.php?do=add_genre">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Name")}
          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="genre_name">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Order")}
          </label>
          <div class="col-md-9">
            <input class="form-control" name="genre_order">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Description")}
          </label>
          <div class="col-md-9">
            <textarea class="form-control" name="genre_description" rows="3"></textarea>
          </div>
        </div>

        <!-- success -->
        <div class="alert alert-success mt15 mb0 x-hidden"></div>
        <!-- success -->

        <!-- error -->
        <div class="alert alert-danger mt15 mb0 x-hidden"></div>
        <!-- error -->
      </div>
      <div class="card-footer text-end">
        <button type="submit" class="btn btn-primary">{__("Save Changes")}</button>
      </div>
    </form>

  {elseif $sub_view == "edit_genre"}

    <form class="js_ajax-forms" data-url="admin/movies.php?do=edit_genre&id={$data['genre_id']}">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Name")}
          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="genre_name" value="{$data['genre_name']}">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Order")}
          </label>
          <div class="col-md-9">
            <input class="form-control" name="genre_order" value="{$data['genre_order']}">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Description")}
          </label>
          <div class="col-md-9">
            <textarea class="form-control" name="genre_description" rows="3">{$data['genre_description']}</textarea>
          </div>
        </div>

        <!-- success -->
        <div class="alert alert-success mt15 mb0 x-hidden"></div>
        <!-- success -->

        <!-- error -->
        <div class="alert alert-danger mt15 mb0 x-hidden"></div>
        <!-- error -->
      </div>
      <div class="card-footer text-end">
        <button type="submit" class="btn btn-primary">{__("Save Changes")}</button>
      </div>
    </form>

  {/if}
</div>