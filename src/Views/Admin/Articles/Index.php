<section class="content-header">
    <h1><?= __d('content', 'Articles'); ?></h1>
    <ol class="breadcrumb">
        <li><a href='<?= site_url('admin/dashboard'); ?>'><i class="fa fa-dashboard"></i> <?= __d('dashboard', 'Dashboard'); ?></a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

<?= Session::getMessages(); ?>

<div class="box box-widget">
    <div class="box-body">
        <h4><strong><?= __d('content', 'Yup. This is the Articles.'); ?></strong></h4>
        <p><?= __d('dashboard', 'Someday, we\'ll have content and stuff on here...'); ?></p>
    </div>
</div>

</section>
