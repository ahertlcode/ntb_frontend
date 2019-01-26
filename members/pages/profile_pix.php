<div class="block">&nbsp;</div>
<div class="block columns">
    <div class="column is-hidden-touch">&nbsp;</div>
    <div class="column">
        <div class="card">
            <header class="card-header">
                <p class="card-header-title" >Upload Profile Picture</p>
            </header>
            <div class="card-content">
                <div class="content">
                    <form class="form">
                      <div class="field">
                        <div class="file is-centered is-boxed is-success has-name is-fullwidth">
                          <label class="file-label">
                            <input class="file-input" type="file" file-model="pixUpload" id="resume" name="resume" onchange="angular.element(this).scope().showname('resume')">
                            <span class="file-cta">
                              <span class="file-icon">
                                <i class="fas fa-upload"></i>
                              </span>
                              <span class="file-label">
                                Select picture for uploads.
                              </span>
                            </span>
                            <span id="filename" class="file-name">
                              Select a file first.
                            </span>
                          </label>
                        </div>
                      </div>
                      <div class="field">
                        <button ng-click="uploadFile();">upload file</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="column is-hidden-touch">&nbsp;</div>
</div>