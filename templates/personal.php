<?php
    script("files_version_cleaner", "script");
    style("files_version_cleaner", "style");
?>
<div class="section" id="files_version_cleaner_section">
    <h2><?php p($l->t('Max number of files versions')); ?></h2>
    <div>
        <label for="files_version_cleaner_personal_input"><?php p($l->t( 'Max number of files versions' )); ?> </label>
        <select id="files_version_cleaner_personal_input" data-key="versionNumber">
            <?php for ($i = 1; $i <= $_["maxVersionNum"]; $i++) { ?>
                <option value="<?php echo $i; ?>" <?php if($i == $_["userVersionNum"]) echo "selected"; ?>><?php echo $i; ?></option>
            <?php } ?>
        </select>
        <div class="loading-files_version_cleaner" id="files_version_cleaner_loader" style="display: none;"></div>
        <span id="files_version_cleaner_msg_success" class="files_version_cleaner-msg files_version_cleaner-green" hidden><?php p($l->t("Change successful!"))?></span>
        <span id="files_version_cleaner_msg_fail" class="files_version_cleaner-msg files_version_cleaner-red" hidden><?php p($l->t("Change unsuccessful!"))?></span>
    </div>
    <div>
        <label for="files_version_cleaner_personal_input_historic"><?php p($l->t( 'Max number of files historic versions' )); ?> </label>
        <select id="files_version_cleaner_personal_input_historic" data-key="historicVersionNumber">
            <?php for ($i = 1; $i <= $_["maxHistoricVersionNum"]; $i++) { ?> <option value="<?php echo $i; ?>" <?php if($i == $_["userHistoricVersionNum"]) echo "selected"; ?>><?php echo $i; ?></option> <?php } ?>
        </select>
        <div class="loading-files_version_cleaner" id="files_version_cleaner_loader_historic" style="display: none;"></div>
        <span id="files_version_cleaner_msg_success_historic" class="files_version_cleaner-msg files_version_cleaner-green" hidden><?php p($l->t("Change successful!"))?></span>
        <span id="files_version_cleaner_msg_fail_historic" class="files_version_cleaner-msg files_version_cleaner-red" hidden><?php p($l->t("Change unsuccessful!"))?></span>
    </div>
</div>