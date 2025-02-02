<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-template">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade show">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger"></strong>
        </td>
        <td>
            <p class="size"><?= Yii::t('jqueryfileupload', 'Processing') ?>...</p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start" disabled>
                    <i class="bi bi-arrow-up-circle"></i>
                    <span><?= Yii::t('jqueryfileupload', 'Start') ?></span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn btn-warning cancel">
                    <i class="bi bi-x-circle"></i>
                    <span><?= Yii::t('jqueryfileupload', 'Cancel') ?></span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>