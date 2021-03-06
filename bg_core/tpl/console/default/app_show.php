<?php $cfg = array(
    'title'          => $this->lang['common']['page']['opt'] . ' &raquo; ' . $this->lang['common']['page']['optApp'],
    'menu_active'    => "opt",
    'sub_active'     => "app",
    'baigoValidator' => 'true',
    'baigoSubmit'    => 'true',
    'pathInclude'    => BG_PATH_TPLSYS . 'console' . DS . 'default' . DS . 'include' . DS,
);

include($cfg['pathInclude'] . 'function.php');
include($cfg['pathInclude'] . 'console_head.php'); ?>

    <ul class="nav nav-pills mb-3">
        <li class="nav-item">
            <a href="<?php echo BG_URL_CONSOLE; ?>index.php?m=app&a=list" class="nav-link">
                <span class="oi oi-chevron-left"></span>
                <?php echo $this->lang['common']['href']['back']; ?>
            </a>
        </li>
    </ul>

    <form name="app_form" id="app_form">
        <input type="hidden" name="<?php echo $this->common['tokenRow']['name_session']; ?>" value="<?php echo $this->common['tokenRow']['token']; ?>">
        <input type="hidden" name="a" id="a" value="reset">
        <input type="hidden" name="app_id" value="<?php echo $this->tplData['appRow']['app_id']; ?>">

        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label><?php echo $this->lang['mod']['label']['appName']; ?></label>
                            <div class="form-text"><?php echo $this->tplData['appRow']['app_name']; ?></div>
                        </div>

                        <div class="form-group">
                            <label><?php echo $this->lang['mod']['label']['apiUrl']; ?></label>
                            <div class="form-text"><?php echo BG_SITE_URL, BG_URL_API; ?>api.php</div>
                        </div>

                        <div class="form-group">
                            <label><?php echo $this->lang['mod']['label']['appId']; ?></label>
                            <div class="form-text"><?php echo $this->tplData['appRow']['app_id']; ?></div>
                        </div>

                        <div class="form-group">
                            <label><?php echo $this->lang['mod']['label']['appKey']; ?></label>
                            <div class="form-text"><?php echo $this->tplData['appRow']['app_key']; ?></div>
                        </div>

                        <div class="bg-submit-box"></div>

                        <div class="form-group">
                            <button type="button" class="btn btn-primary bg-submit"><?php echo $this->lang['mod']['btn']['resetKey']; ?></button>
                            <small class="form-text"><?php echo $this->lang['mod']['label']['appKeyNote']; ?></small>
                        </div>

                        <div class="form-group">
                            <label><?php echo $this->lang['mod']['label']['allow']; ?></label>
                            <dl>
                                <?php foreach ($this->tplData['appMod'] as $key_m=>$value_m) { ?>
                                    <dt>
                                        <?php if (isset($this->lang['appMod'][$key_m]['title'])) {
                                            echo $this->lang['appMod'][$key_m]['title'];
                                        } else {
                                            echo $value_m['title'];
                                        } ?>
                                    </dt>
                                    <dd>
                                        <ul class="list-inline">
                                            <?php foreach ($value_m['allow'] as $key_s=>$value_s) { ?>
                                                <li class="list-inline-item">
                                                    <span class="oi oi-<?php if (isset($this->tplData['appRow']['app_allow'][$key_m][$key_s])) { ?>circle-check text-success<?php } else { ?>circle-x text-danger<?php } ?>"></span>
                                                    <?php if (isset($this->lang['appMod'][$key_m]['allow'][$key_s])) {
                                                        echo $this->lang['appMod'][$key_m]['allow'][$key_s];
                                                    } else {
                                                        echo $value_s;
                                                    } ?>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </dd>
                                <?php } ?>
                            </dl>
                        </div>

                        <div class="form-group">
                            <label><?php echo $this->lang['mod']['label']['ipAllow']; ?></label>
                            <div class="form-text">
                                <pre><?php echo $this->tplData['appRow']['app_ip_allow']; ?></pre>
                            </div>
                        </div>

                        <div class="form-group">
                            <label><?php echo $this->lang['mod']['label']['ipBad']; ?></label>
                            <div class="form-text">
                                <pre><?php echo $this->tplData['appRow']['app_ip_bad']; ?></pre>
                            </div>
                        </div>

                        <div class="form-group">
                            <label><?php echo $this->lang['mod']['label']['note']; ?></label>
                            <div class="form-text"><?php echo $this->tplData['appRow']['app_note']; ?></div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="<?php echo BG_URL_CONSOLE; ?>index.php?m=app&a=form&app_id=<?php echo $this->tplData['appRow']['app_id']; ?>">
                            <span class="oi oi-pencil"></span>
                            <?php echo $this->lang['mod']['href']['edit']; ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card bg-light">
                    <div class="card-body">
                        <div class="form-group">
                            <label><?php echo $this->lang['mod']['label']['id']; ?></label>
                            <div class="form-text"><?php echo $this->tplData['appRow']['app_id']; ?></div>
                        </div>

                        <div class="form-group">
                            <label><?php echo $this->lang['mod']['label']['status']; ?></label>
                            <div class="form-text">
                                <?php app_status_process($this->tplData['appRow']['app_status'], $this->lang['mod']['status']); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

<?php include($cfg['pathInclude'] . 'console_foot.php'); ?>

    <script type="text/javascript">
    var opts_submit_form = {
        ajax_url: "<?php echo BG_URL_CONSOLE; ?>index.php?m=app&c=request",
        confirm: {
            selector: "#a",
            val: "reset",
            msg: "<?php echo $this->lang['mod']['confirm']['resetKey']; ?>"
        },
        msg_text: {
            submitting: "<?php echo $this->lang['common']['label']['submitting']; ?>"
        }
    };

    $(document).ready(function(){
        var obj_submit_form = $("#app_form").baigoSubmit(opts_submit_form);
        $(".bg-submit").click(function(){
            obj_submit_form.formSubmit();
        });
    });
    </script>

<?php include('include' . DS . 'html_foot.php');